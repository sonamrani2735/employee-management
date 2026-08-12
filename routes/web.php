<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/departments', function () {
    return view('departments');
});