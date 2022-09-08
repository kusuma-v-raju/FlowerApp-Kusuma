<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function logInForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        session(['email' => $request->email]);

        return redirect('flowers')->with('success', 'Logged in successfully');
    }

    public function logout() {

        session()->forget('email');
            
        return redirect('flowers')->with('success', 'Logout successfull');
    }
}
