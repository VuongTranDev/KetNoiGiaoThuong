<?php

use App\Http\Controllers\Api\CompaniesController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'getInfo']);

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::apiResource('companies', CompaniesController::class);


