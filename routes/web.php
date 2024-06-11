<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Models\Faq;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $faqs = Faq::all();
    return view('home')->with(['faqs' => $faqs]);
})->name('homepage');



Route::get("/login", function () {
    return view('auth.login');
});

Route::get("/admin/login", function () {
    return view('auth.admin.login');
});

Route::get("/register", function () {
    return view('auth.register');
});

Route::post("/login", [AuthController::class, 'login'])->name("login");
Route::post("/register", [AuthController::class, 'register'])->name("register");
Route::post("/admin/login", [AdminAuthController::class, 'login'])->name("admin.login");

Route::post("/contact", [ContactController::class, 'store']);


Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/tutorials', [TutorialController::class, 'index']);

    Route::get('campaigns', [CampaignController::class, 'index']);
    Route::post('campaigns', [CampaignController::class, 'store']);

    Route::get('/wallet', [WalletController::class, 'index']);
    Route::post('/fund-wallet', [WalletController::class, 'fundWallet']);
    Route::get('/fund-confirm', [WalletController::class, 'confirmFunding']);

    Route::get('/account', function () {
        return view('dashboard.user.account');
    });

    Route::post('/update_profile', [AuthController::class, 'updateProfile']);
    Route::post('/update_password', [AuthController::class, 'updatePassword']);

    Route::get('/settings/{key}', [SettingController::class, 'getOne']);

    Route::get("/logout", [AuthController::class, 'logout'])->name("logout");
});

Route::group(['prefix' => 'admin', 'middleware' => App\Http\Middleware\Admin::class], function () {
    Route::get('/dashboard', [DashboardController::class, 'adminIndex']);

    Route::get('/create-admins', [AdminController::class, 'create']);
    Route::post('/create-admins', [AdminController::class, 'store'])->name("create.admin");
    Route::get('/delete-admin/{admin}', [AdminController::class, 'destroy']);
    Route::get('/admins', [AdminController::class, 'index'])->name('admins');

    Route::get('/tutorials', [TutorialController::class, 'adminIndex'])->name('admin.tutorials.index');
    Route::get('/create-tutorial', [TutorialController::class, 'create']);
    Route::post('/create-tutorial', [TutorialController::class, 'store']);
    Route::get('/delete-tutorial/{tutorial}', [TutorialController::class, 'destroy']);

    Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::get('/create-setting', [SettingController::class, 'create']);
    Route::post('/create-setting', [SettingController::class, 'store']);
    Route::get('/delete-setting/{setting}', [SettingController::class, 'destroy']);

    Route::get('/campaigns', [CampaignController::class, 'adminIndex']);
    // Route::post('campaigns', [CampaignController::class, 'store']);

    Route::get('/faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
    Route::get('/create-faq', [FaqController::class, 'create']);
    Route::post('/create-faq', [FaqController::class, 'store']);
    Route::get('/delete-faq/{faq}', [FaqController::class, 'destroy']);

    Route::get('/users', [UserController::class, 'index']);

    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/delete-contact/{contact}', [ContactController::class, 'destroy']);

    // Route::get('/wallet', [WalletController::class, 'index']);
    // Route::post('/fund-wallet', [WalletController::class, 'fundWallet']);
    // Route::get('/fund-confirm', [WalletController::class, 'confirmFunding']);

    // Route::get('/account', function(){
    //     return view('dashboard.user.account');
    // });

    // Route::post('/update_profile', [AuthController::class, 'updateProfile']);
    // Route::post('/update_password', [AuthController::class, 'updatePassword']);

    // Route::get('/settings/{key}', [SettingController::class, 'getOne']);

    Route::get("/logout", [AdminAuthController::class, 'logout'])->name("logout");
});
