<?php
// namespace Routes\admin.php
use App\Http\Controllers\backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', function () {
	return view('admin.dashboard');
})->name('admin.dashboard');




