<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('guest.register');
    }

    public function store( Request $request )
    {
        $validatedData = $request->validate( [
            "name" => "required",
            "email" => "required|email",
            "jurusan" => "required",
            "role" => "required",
            'password' => 'required'
        ] );

        // enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('success', 'Registrasi Berhasil');
    }
}
