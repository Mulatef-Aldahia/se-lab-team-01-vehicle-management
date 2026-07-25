<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

// مسارات حجز السيارة
Route::get('/booking', [BookingController::class, 'create']);
Route::post('/booking', [BookingController::class, 'store']);

// مسار عرض السيارات المتاحة
Route::get('/vehicles', [VehicleController::class, 'index']);
