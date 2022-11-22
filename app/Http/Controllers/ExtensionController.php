<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extension;
use App\Models\Office;

class ExtensionController extends Controller
{
    public function index() {
        return view('extension/index', [
            "title" => "Extension",
            "menu" => "extension",
            "offices" => Office::all(),
            "extensions" => Extension::with('assign')->get()
        ]);
    }
}
