<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

     $name = "Sonam";
     $totalEmployees = 25;
     $department = "IT";
         return view('dashboard', [
            'name' => $name,
            'totalEmployees' => $totalEmployees,
            'department' => $department
        ]);
        // return view('dashboard');
    }
}
