<?php

// routes/api.php
use App\Http\Controllers\UserController;
use App\Http\Controllers\TripsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAPIKey;  // Ensure to import the middleware

// Apply middleware to the trips routes to check for API key
//Route::middleware([CheckAPIKey::class])->group(function () 
    // Trip routes
    Route::get('trips', [TripsController::class, 'index'])->name('trips.api');
    Route::get('trips/{id}', [TripsController::class, 'show']);
    Route::post('trips', [TripsController::class, 'store']);
    Route::put('trips/{id}', [TripsController::class, 'update']);
    Route::delete('trips/{id}', [TripsController::class, 'destroy']);


// User routes
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

