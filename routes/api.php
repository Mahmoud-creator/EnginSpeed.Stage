<?php

use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Route;

Route::get('/motors', [MotorController::class, 'index']);
Route::get('/motors/search', [MotorController::class, 'search']);
Route::get('/motors/sort', [MotorController::class, 'sort']);
Route::post('/motors', [MotorController::class, 'store']);

Route::get('/motors/{id}', [MotorController::class, 'show']);
Route::put('/motors/{id}', [MotorController::class, 'update']);
Route::delete('/motors/{id}', [MotorController::class, 'destroy']);

