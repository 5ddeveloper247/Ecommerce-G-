<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardIndex'])->name('admin.dashboard');
    Route::get('/profile', [DashboardController::class, 'profileIndex'])->name('admin.profile');
});
