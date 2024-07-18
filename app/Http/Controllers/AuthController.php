<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function register(Request $request)
    {
        dd($request);
        // Validation
        //   $fields = $request->validate([
        //     'firstname' => ['required', 'max:255'],
        //     'lastname' => ['required', 'max:255'],
        //     'email' => ['required', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed'],
        // ]);

        // Register
        // $user = User::create([
        //     'name' => $fields['name'],
        //     'email' => $fields['email'],
        //     'password' => Hash::make($fields['password']), // Hash the password
        // ]);

        // Log in
        // Auth::login($user);

        // // Redirect or return a response
        // return redirect()->route('home');
    }
}
