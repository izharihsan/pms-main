<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\RoomManagementController;
use App\Http\Controllers\Admin\RoomRateController;
use App\Http\Controllers\ApiResourcesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
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
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

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
        Route::post('/store', [App\Http\Controllers\RoomAvailabilityController::class, 'store'])->name('room_availability.store');
    });
    
    Route::get('property/manage/{id}', [PropertyController::class, 'manageProperty'])->name('property.manageProperty');
    Route::post('property/upload-photo', [PropertyController::class, 'uploadPropertyPhoto'])->name('property.uploadPhoto');
    Route::post('property/upload-doc', [PropertyController::class, 'uploadPropertyDocument'])->name('property.uploadDoc');
    Route::resource('property', PropertyController::class);
    Route::resource('room-rates', RoomRateController::class);
    Route::get('room-rates/details-room/{id}', [RoomRateController::class, 'details'])->name('room-rates.details');
    Route::post('room-rates/store/details-room/{id}', [RoomRateController::class, 'store_details'])->name('room-rates.store_details');
   
    Route::resource('room-management', RoomManagementController::class);

    Route::prefix('report')->group(function () {
        Route::get('activity', [ReportController::class, 'activity'])->name('report.activity');
        Route::get('room-rate', [ReportController::class, 'roomRate'])->name('report.roomRate');
        Route::get('rate-plan', [ReportController::class, 'ratePlan'])->name('report.ratePlan');
        Route::get('room-availability', [ReportController::class, 'roomAvailability'])->name('report.roomAvailability');
    });
});

Route::post('login-sso', [AuthController::class, 'loginSSo'])->name('loginSSo');
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
