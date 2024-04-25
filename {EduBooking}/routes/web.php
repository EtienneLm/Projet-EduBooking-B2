<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Route vers la page d'accueil
Route::get('/', function () {
    return view('main');
});

Route::get('/test', function () {
    return view('test');
});


Route::redirect('/main', '/');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);


// // Routes d'authentification
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// // Routes d'inscription
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

