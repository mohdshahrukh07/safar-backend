<?php

use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::prefix('/safar')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::post('/signup', [UserController::class, 'signup']);
        Route::post('/login', [UserController::class, 'login']);
        Route::post('/logout', [UserController::class, 'logout']);
    });
    Route::prefix('/booking')->group(function () {
        Route::post('/book', [BookingController::class, 'book']);
    });
});

Route::get('/', [PackageController::class, 'homeList']);
Route::post('/tours', [PackageController::class, 'tourList']);
