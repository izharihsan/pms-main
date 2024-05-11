<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/room', function () {
    return view('admin.roomDetail.list');
});

Route::get('/room/create', function () {
    return view('admin.roomDetail.create');
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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['prefix' => 'room-management'], function () {
        Route::get('/', [App\Http\Controllers\RoomManagementController::class, 'index'])->name('room_management.index');
    });

    Route::group(['prefix' => 'rate-plan'], function () {
        Route::get('/', [App\Http\Controllers\RatePlanController::class, 'index'])->name('rate_plan.index');
        Route::get('/create', [App\Http\Controllers\RatePlanController::class, 'form'])->name('rate_plan.create');
        Route::post('/store', [App\Http\Controllers\RatePlanController::class, 'store'])->name('rate_plan.store');
        Route::get('/edit/{id}', [App\Http\Controllers\RatePlanController::class, 'form'])->name('rate_plan.edit');
    });
});

// UI ADMIN
Route::get('/admin/{path}', function ($path) {
    return view("admin/{$path}");
});

Route::post('login-sso', [AuthController::class, 'loginSSo'])->name('loginSSo');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


