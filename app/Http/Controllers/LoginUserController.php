<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // VAlidates the form data
        $request -> validate([
            'name' => 'string',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::guard()->attempt([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password])) 
        {
            return redirect()->intended(route('posts.index'));
        } else {
            return back()->withErrors([
                'name' => 'Invalid Credentials',
                'email' => 'Invalid Credentials',
                'password' => 'Invalid Credentials'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerate();
        return to_route('posts.index');
    }
}
