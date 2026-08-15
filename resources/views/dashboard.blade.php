@extends('layouts.app')
    @section('content')
    <hr>

     <h2>Welcome1, {{ $name }}</h2>

    <p>Total Employees: {{ $totalEmployees }}</p>

    <p>Department: {{ $department }}</p>
    <div>
        <h3>Total Employees</h3>
        <p>0</p>
    </div>
     <div>
        <h3>Active Employees</h3>
        <p>0</p>
    </div>
     <div>
        <h3>Inactive  Employees</h3>
        <p>0</p>
    </div>

    <hr>
    <h2>Employees</h2>
    <p>No employees found.</p>
    <button>Add Employee</button>
@endsection