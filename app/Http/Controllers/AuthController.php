<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $redirectLink = '/';
            if (Auth::user()->is_admin == 1) $redirectLink = '/dashboard';

            return redirect()->intended($redirectLink)->with('success', 'Logged in successfully as ' . Auth::user()->username);
        }
        return back()->with('error', 'Login failed, please check your credentials');
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

        return redirect('/login')->with('success', 'Account registered successfully');

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged out successfully');
    }
}