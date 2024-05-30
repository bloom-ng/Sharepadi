<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class WalletController extends Controller
{
    private function getCurrency($country)
    {
        switch (strtolower($country)) {
            case 'nigeria':
                return 'NGN';
            case 'kenya':
                return 'KES';
            case 'ghana':
                return 'GHS';
            default:
                return 'NGN'; // Default currency
        }
    }

    public function index()
    {

        $transactions = Transaction::where('user_id', Auth::user()->id)->where('status', Transaction::PAYMENT_SUCCESSFUL)->get();
        return view('dashboard.user.wallet')->with(['transactions' => $transactions]);
    }

    public function fundWallet(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
        ]);

        $currency = $this->getCurrency($request->user()->country);

        $apiUrl = "https://api.korapay.com/merchant/api/v1/charges/initialize";
        $apiKey = env('KORA_PAY_SECRET_KEY');

        do {
            $reference = uniqid('txn_', false);
        } while (Transaction::where('reference_id', $reference)->exists());

        // Create a new transaction entry
        Transaction::create([
            'reference_id' => $reference,
            'amount' => $request->amount,
            'user_id' => $request->user()->id,
            'status' => Transaction::PAYMENT_PENDING
        ]);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->post($apiUrl, [
            "amount" => $request->amount,
            "redirect_url" => "https://sharepadi.bloomdigitmedia.com/user/fund-confirm",
            "currency" => $currency,
            "reference" => $reference,
            "notification_url" => "https://example.com/webhook",
            "narration" => "SharePadi Wallet Funding",
            "channels" => ["card", "bank_transfer", "pay_with_bank", "mobile_money"],
            "default_channel" => "card",
            "metadata" => [
                "customer_id" => $request->user()->id,
            ],
            "customer" => [
                "email" => $request->user()->email,
                "name" => $request->user()->name
            ],
            "merchant_bears_cost" => false
        ]);

        $responseBody = $response->json();
        if ($responseBody['status']) {
            return redirect($responseBody['data']['checkout_url']);
        } else {
            return back()->withErrors(['message' => 'Unable to initialize payment.']);
        }
    }

    public function confirmFunding(Request $request)
    {
        $transaction = Transaction::where('reference_id', $request->query('reference'))->first();

        if (!$transaction) {
            // Handle the case where the transaction is not found
            return redirect('/user/wallet')->with('error', 'Transaction not found');
        }

        // Check if the transaction is already successful to avoid double processing
        if ($transaction->status == Transaction::PAYMENT_SUCCESSFUL) {
            return redirect('/user/wallet')->with('success', 'Wallet funded successfully.');
        }

        $user_id = $transaction->user_id;

        Wallet::create(['user_id' => $user_id, 'amount' => $transaction->amount, 'type' => Wallet::CREDIT]);

        $transaction->update([
            'status' => Transaction::PAYMENT_SUCCESSFUL
        ]);


        return redirect('/user/wallet')->with('success', 'Wallet funded successfully');
    }
}
