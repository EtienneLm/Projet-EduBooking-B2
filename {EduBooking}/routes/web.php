<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AllTeacherController;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/student_teacher_choice', function () {
    return view('student_teacher_choice');
})->name('student_teacher_choice');

Route::get('/teacher_page', function () {
    return view('teacher_page');
})->name('teacher_page');

Route::redirect('/main', '/');

Route::post('/add-teacher', [TeacherController::class, 'store'])->name('add_teacher');

Route::get('/teacher_page', [UserController::class, 'showAllUsers'])->name('teacher_page');

Route::get('/student_teacher_choice', [AllTeacherController::class, 'showTeachers'])->name('student_teacher_choice');


// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);


// // Routes d'authentification
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// // Routes d'inscription
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

