<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/login', function () {
    return view('auth.test_login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot_password');
});

// UI ADMIN
Route::get('/admin/{path}', function ($path) {
    return view("admin/{$path}");
});

Route::post('login-sso', [AuthController::class, 'loginSSo'])->name('loginSSo');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
