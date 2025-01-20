<?php

// routes/api.php
use App\Http\Controllers\UserController;
use App\Http\Controllers\TripsController;

// User routes
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

// Trip routes
Route::get('trips', [TripsController::class, 'index']);
// Route::get('trips/user/{userId}', [TripsController::class, 'userTrips']);
Route::get('trips/{id}', [TripsController::class, 'show']);
Route::post('trips', [TripsController::class, 'store']);
Route::put('trips/{id}', [TripsController::class, 'update']);
Route::delete('trips/{id}', [TripsController::class, 'destroy']);
