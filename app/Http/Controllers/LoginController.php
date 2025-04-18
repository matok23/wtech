<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $request->session()->flash('message', 'Login successful!');
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Login not successful',
        ])->withInput();
    }
}
