<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }
    public function authenticate()
    {

    }
    public function register()
    {
        return view('pages.register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'volunteer_date' => 'required',
            'phone_number' => 'required|numeric',
            'password' => 'required|min:5|max:10',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/login');

    }
    public function logout()
    {

    }
}