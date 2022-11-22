<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Office;

class GroupController extends Controller
{
    public function index() {
        return view('group/index', [
            "title" => "Group",
            "menu" => "group",
            "offices" => Office::all(),
            "groups" => Group::with('department')->get()
        ]);
    }
}
