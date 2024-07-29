<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'role:super-admin|restaurant'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('restaurants', RestaurantController::class);
    Route::resource('qrcode', QrCodeController::class)->except(['edit', 'update', 'show']);
    Route::get('/qrcode/create', [QrCodeController::class, 'create'])->name('qrcode.create');
    Route::post('/qrcode', [QrCodeController::class, 'store'])->name('qrcode.store');
    Route::get('/qrcode/{id}', [QrCodeController::class, 'show'])->name('qrcode.show');
    Route::get('/qrcode/{id}/download', [QrCodeController::class, 'download'])->name('qrcode.download');
    Route::get('/qrscan', function () {
        return view('qrscan');
    })->name('qrscan');
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/customer/home', [CustomerDashboardController::class, 'index'])->name('customer.home');
});
Route::middleware(['auth', 'role:super-admin|restaurant'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    // Other routes
});
