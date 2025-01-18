<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/')->middleware(['auth', 'guest']);

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'showLoginForm')->name('login');
    Route::post('login', 'login');
    Route::get('logout', 'logout')->name('logout');
});

Route::controller(DashboardController::class)->middleware('auth')->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
});
