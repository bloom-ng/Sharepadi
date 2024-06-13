<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Campaign;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        $balance = User::where('id', $user_id)->first()->walletBalance();
        $campaigns = Campaign::where('user_id', $user_id)->where('status', Campaign::CAMPAIGN_ACTIVE)->count();
        $orders = Campaign::where('user_id', $user_id)->count();
        $currentDate = Carbon::now()->format('l, F j, Y');
        return view('dashboard.user.index')->with(['balance' => $balance, 'campaigns' => $campaigns, 'orders' => $orders, 'currentDate' => $currentDate]);
    }

    public function adminIndex()
    {
        // $user_id = Auth::user()->id;
        $campaigns = Campaign::where('status', Campaign::CAMPAIGN_ACTIVE)->count();
        $orders = Campaign::all()->count();
        $users = User::all()->count();
        $credit = Wallet::all()->where('type', 'credit')->sum('amount');
        $debit =  Wallet::all()->where('type', 'debit')->sum('amount');
        $balance = $credit - $debit;
        $my_date = Carbon::now()->format('l, F j, Y');

        return view('dashboard.admin.index')->with(['users' => $users, 'campaigns' => $campaigns, 'orders' => $orders, 'balance' => $balance, 'my_date' => $my_date]);
    }
}
