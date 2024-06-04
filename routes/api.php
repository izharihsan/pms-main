<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\ResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// API WILAYAH

Route::get('province', [AddressController::class, 'province']);
Route::get('city', [AddressController::class, 'city']);
Route::get('district', [AddressController::class, 'district']);
Route::get('village', [AddressController::class, 'village']);

Route::prefix('/v1')->group(function () {
    Route::get('property', [ResourceController::class, 'property']);
    Route::get('log-activity', [ResourceController::class, 'logActivity']);
    Route::get('room-management', [ResourceController::class, 'roomManagement']);
    Route::get('rate-plan', [ResourceController::class, 'ratePlan']);
    Route::get('room-availability', [ResourceController::class, 'roomAvailability']);
});
