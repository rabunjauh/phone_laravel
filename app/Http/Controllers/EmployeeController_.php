<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Office;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        return view('employee/index', [
            "title" => "Employee",
            "menu" => "employee",
            "offices" => Office::all(),
            "employees" => Employee::with(['department', 'position', 'office'])->get()
        ]);
    }
}
