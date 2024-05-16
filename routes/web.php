<?php

use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\RoomRateController;
use App\Http\Controllers\ApiResourcesController;
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
        Route::delete('/destroy/{id}', [App\Http\Controllers\RatePlanController::class, 'destroy'])->name('rate_plan.destroy');
        Route::get('/show/{id}', [App\Http\Controllers\RatePlanController::class, 'show'])->name('rate_plan.show');
    });

    Route::group(['prefix' => 'room-availability'], function () {
        Route::get('/', [App\Http\Controllers\RoomAvailabilityController::class, 'index'])->name('room_availability.index');
    });

    Route::group(['prefix' => 'report'], function () {
        Route::get('/', [App\Http\Controllers\ReportController::class, 'index'])->name('report.index');
    });

    Route::resource('property', PropertyController::class);
    Route::resource('room-rates', RoomRateController::class);
});

// UI ADMIN
Route::get('/admin/{path}', function ($path) {
    return view("admin/{$path}");
});

Route::post('login-sso', [AuthController::class, 'loginSSo'])->name('loginSSo');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('healthCheck', [ApiResourcesController::class, 'healthCheck'])->name('apiResources.healthCheck');
Route::get('categoryFacilities', [ApiResourcesController::class, 'categoryFacilities'])->name('apiResources.categoryFacilities');
Route::get('bedType', [ApiResourcesController::class, 'bedType'])->name('apiResources.bedType');
Route::get('facilities', [ApiResourcesController::class, 'facilities'])->name('apiResources.facilities');
Route::get('roomType', [ApiResourcesController::class, 'roomType'])->name('apiResources.roomType');
Route::get('product/{code}', [ApiResourcesController::class, 'product'])->name('apiResources.product');

// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
//     Route::get('room-management', [App\Http\Controllers\RoomManagementController::class, 'index'])->name('room_management.index');
// });