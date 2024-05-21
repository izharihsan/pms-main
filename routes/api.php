<?php

use App\Http\Controllers\Api\ResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('/v1')->group(function () {
    Route::get('property', [ResourceController::class, 'property']);
    Route::get('log-activity', [ResourceController::class, 'logActivity']);
    Route::get('room-management', [ResourceController::class, 'roomManagement']);
    Route::get('rate-plan', [ResourceController::class, 'ratePlan']);
    Route::get('room-availability', [ResourceController::class, 'roomAvailability']);
});
