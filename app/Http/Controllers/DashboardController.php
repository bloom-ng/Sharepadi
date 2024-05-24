<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        $balance = User::where('id', $user_id)->first()->walletBalance();
        return view('dashboard.user.index')->with(['balance' => $balance, 'campaigns' => 0, 'orders' => 0]);
    }
}
