<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordCotroller;

Route::prefix('admin')->group(function() {
    Route::get('/login', [LoginController::class, 'loginIndex']);
    Route::get('/register',[RegisterController::class,'registerIndex']);
    Route::get('/forgot/password',[ForgotPasswordCotroller::class,'forgotPasswordIndex']);

});
