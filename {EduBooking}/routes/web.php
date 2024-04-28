<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AllTeacherController;
use App\Http\Controllers\TeacherFormHandlingController;
use App\Http\Controllers\ChosenTeacherController;
use App\Http\Controllers\CreateAppointmentController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/student_teacher_choice', function () {
    return view('student_teacher_choice');
})->name('student_teacher_choice');

Route::get('/teacher_page', function () {
    return view('teacher_page');
})->name('teacher_page');

Route::get('/student_appointment_choice', function () {
    return view('student_appointment_choice');
})->name('student_appointment_choice');

Route::get('/create_appointment', [CreateAppointmentController::class, 'showCreateAppointmentForm'])->middleware('auth')->name('create_appointment');

Route::redirect('/main', '/');

Route::post('/add-teacher', [TeacherController::class, 'store'])->name('add_teacher');

Route::get('/teacher_page', [UserController::class, 'showAllUsers'])->name('teacher_page');

Route::post('/add-subject', [SubjectController::class, 'store'])->name('add_subject');

Route::get('/student_teacher_choice', [AllTeacherController::class, 'showTeachers'])->name('student_teacher_choice');

Route::post('/submit-teacher', [TeacherFormHandlingController::class, 'handleForm'])->name('submit-teacher');

Route::get('/student_appointment_choice', [ChosenTeacherController::class, 'displaySelectedTeacher'])->name('student_appointment_choice');

Route::post('/store-appointment', [CreateAppointmentController::class, 'storeAppointment'])->middleware('auth')->name('store_appointment');

// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
