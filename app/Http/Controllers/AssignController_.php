<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function index() {
        return view('assign/index', [
            "title" => "Employee Extension",
            "menu" => "assign",
            "assigns" => Assign::with(['employee', 'extension'])->get()
        ]);
    }
}
