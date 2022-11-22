<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Office;

class LoginController extends Controller
{
    public function index() {
        return view('login/form', [
            "title" => "Login",
            "menu" => "login",
            "offices" => Office::all()
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);  

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/{office_id}');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request) {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
