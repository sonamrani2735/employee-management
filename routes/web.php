<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [EmployeeController::class, 'index']);

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/departments', function () {
    return view('departments');
});