<?php

use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return Inertia::render('Home', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/Contact', function () {
    return Inertia::render('Contact');
});

Route::get('/LogIn', function () {
    return Inertia::render('Login');
});

Route::get('/SignUp', function () {
    return Inertia::render('Signup');
});

Route::inertia('/register', 'Signup')->name('register');
Route::post('/register', [AuthController::class, 'register']);

