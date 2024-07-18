<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 


class AuthController
{
    public function register(Request $request){

        sleep(1);
        $fields = $request->validate([
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed'],
            ]);
        
        $user = User::create($fields);

        Auth::login($user);
        
        return redirect()->route('home');

    }
}
