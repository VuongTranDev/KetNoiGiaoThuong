<?php

use App\Http\Controllers\backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('login',[DashboardController::class,'login'])->name('login');



