<?php

use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AuthController;
use App\Models\User;


Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/Contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('/LogIn', function () {
    return Inertia::render('Login');
})->name('login');

Route::get('/Dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/Register', function () {
    return Inertia::render('Register');
})->name('register');

Route::inertia('/Dashboard', 'Dashboard', ['users' => User::paginate()])->name('dashboard');


Route::inertia('/register', 'Auth/Register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::inertia('/login', 'Auth/Login')->name('login');
Route::post('/login', [AuthController::class, 'login']);


