<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get("/login", function () {
    return view('auth.login');
});

Route::get("/register", function () {
    return view('auth.register');
});

Route::post("/login", [AuthController::class, 'login'])->name("login");
Route::post("/register", [AuthController::class, 'register'])->name("register");


Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/tutorials', [TutorialController::class, 'index']);
    Route::get('campaigns', [CampaignController::class, 'index']);
    Route::post('campaigns', [CampaignController::class, 'store']);
    Route::get('/wallet', [WalletController::class, 'index']);
    Route::post('/fund-wallet', [WalletController::class, 'fundWallet']);
    Route::get('/fund-confirm', [WalletController::class, 'confirmFunding']);

    Route::get('/settings/{key}', [SettingController::class, 'getOne']);

    Route::get("/logout", [AuthController::class, 'logout'])->name("logout");
});
