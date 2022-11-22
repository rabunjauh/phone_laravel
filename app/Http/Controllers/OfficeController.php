<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;
class OfficeController extends Controller
{
    public function index() {
        return view('office/index', [
            "title" => "Office",
            "menu" => "office",
            "offices" => Office::all(),
            "offices" => Office::with('employee')->get()
        ]);
    }
}
