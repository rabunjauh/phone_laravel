<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Office;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Dd;

class UserController extends Controller
{
    public function index() {
        // search function
        // $users = User::latest();

        // moved to model
        // if (request('search')) {
            // $users->where('name', 'like', '%' . request('search') . '%');
                //   ->orWhere();
        // }
        
        // return view('user/user', [
        //     "title" => "User",
        //     "users" => $users->get()
        // ]);

        // if search in model
        return view('user/index', [
            "title" => "User",
            "menu" => "user",
            "offices" => Office::all(),
            // "users" => User::latest()->filter(request(['search']))->get()
            // pagination
            "users" => User::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    public function create() {
        return view('user/form', [
            "title" => "Form Add User",
            "menu" => "addUser",
            "offices" => Office::all(),
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|min:3|unique:users',
            'password' => 'required'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'User data successfully added');
        return redirect('/user')->with('success', 'User data successfully added');
    }
}
