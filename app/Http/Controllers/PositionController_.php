<?php

namespace App\Http\Controllers;
use App\Models\Position;
use App\Models\Office;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index() {
        return view('position/index', [
            "title" => "Position",
            "menu" => "position",
            "offices" => Office::all(),
            "positions" => Position::all()
        ]);
    }
}
