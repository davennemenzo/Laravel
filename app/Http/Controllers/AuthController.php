<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;


class AuthController
{
    public function register(Request $request)
    {

        sleep(1);
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create($fields);

        Auth::login($user);

        return redirect()->route('login');

    }
    public function login(Request $request)
    {

        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($fields)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function destroy(User $user)
    {
        // $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('dashboard');
    }

    public function edit(User $user){
        return Inertia::render('Edit',[
            'user'=>$user
        ]);

    }

   public function update(Request $request, User $user){
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', ],

        ]);


        $user ->update($validated);
        return Redirect::route('dashboard');
   }
}
