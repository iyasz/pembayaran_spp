<?php

namespace App\Http\Controllers;

use App\Http\Requests\authRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('authSuccess', 'Selamat Datang Admin :3');
        }

        return redirect('/auth/login')->with('authFailed', 'Gagal Login!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/auth/login');
    }
}
