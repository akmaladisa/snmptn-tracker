<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function authenticate( Request $request )
    {
        $credentials = $request->validate( [
            'email' => "required|email",
            'password' => 'required'
        ] );

        if( Auth::attempt( $credentials ) ) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success', "Berhasil Login");
        }

        return back()->with('login-fail', "Login Gagal");
    }

    public function signout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }

    public function dashboard()
    {
        return view("auth.dashboard");
    }
}
