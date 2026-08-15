<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [DashboardController::class, 'index']);
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/departments', [DepartmentController::class, 'index']);
// Route::get('/employees', [EmployeeController::class, 'index']);
// Route::get('/departments', [EmployeeController::class, 'departments']);
