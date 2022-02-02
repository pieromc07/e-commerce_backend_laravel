<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    //showLogin
    public function showLogin()
    {
        $name_page = 'Login';
        return view('auth.login',
            compact('name_page'));
    }

    //showRegister
    public function showRegister()
    {
        $name_page = 'Register';
        return view('auth.register' ,
            compact('name_page'));
    }

    //login
    public function login(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($validated)) {
            return redirect()->route('home');
        }
    }

    //register
    public function register(Request $request)
    {
        //

    }

    //logout

    public function logout()
    {
        //
        auth()->logout();
        return redirect()->route('admin.showLogin');
    }
}
