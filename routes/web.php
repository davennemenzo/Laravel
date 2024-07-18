<?php

use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/Contact', function () {
    return Inertia::render('Contact');
});

Route::get('/LogIn', function () {
    return Inertia::render('Login');
});

Route::get('/SignUp', function () {
    return Inertia::render('Signup');
});


Route::inertia('/register', 'Auth/Register')->name('register');
Route::post('/register', [AuthController::class, 'register']);


