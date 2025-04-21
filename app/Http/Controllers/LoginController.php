<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

    public function register(Request $request){
        $credentials=$request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        try {
            User::create([
                'name' => $credentials['name'],
                'email' => $credentials['email'],
                'password' => Hash::make($credentials['password']),
            ]);
        }
        catch(Exception $e) {
            return back()->withErrors([
                'email' => 'Registration not successful',
            ])->withInput();
        }

        $request->session()->flash('message', 'Registration successful!');
        return $this->login($request);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash('message', 'Logout successful!');
        return redirect('/');
    }
}
