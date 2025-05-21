<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            // Perform login logic here

        return redirect()->route('dashboard')->with('success', 'Login successful!');
        } else {
            return back()->withErrors([
                'email' => 'Email is incorrect.',
                'password' => 'Password is incorrect.',
            ]);
        }

        
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Perform registration logic here

        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}