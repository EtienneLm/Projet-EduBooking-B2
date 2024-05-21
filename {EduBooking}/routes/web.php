<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AllTeacherController;
use App\Http\Controllers\TeacherFormHandlingController;
use App\Http\Controllers\CreateAppointmentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NotificationController;


Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/teacher_page', function () {
    return view('teacher_page');
})->name('teacher_page');

Route::get('/student_confirm_page', function () {
    return view('student_confirm_page');
})->name('student_confirm_page');


Route::post('/submit-teacher', [TeacherFormHandlingController::class, 'handleForm'])->name('submit-teacher'); 


Route::get('/student_teacher_choice', [AllTeacherController::class, 'showTeachers'])->name('all_teachers'); // TO DO


Route::get('/student_create_appointment', [CreateAppointmentController::class, 'showCreateAppointmentForm'])->middleware('auth')->name('student_create_appointment');
Route::post('/store-appointment', [CreateAppointmentController::class, 'storeAppointment'])->middleware('auth')->name('store_appointment');


Route::redirect('/main', '/');

Route::get('/teacher_page', [TeacherController::class, 'showTeacherPage'])->name('teacher_page')->middleware('auth');
Route::post('/delete-appointment', [TeacherController::class, 'deleteAppointment'])->name('delete_appointment');


Route::get('/appointments', [AppointmentController::class, 'showAppointments'])->name('appointments.show')->middleware('auth');


Route::get('/student_page', [StudentController::class, 'showStudentPage'])->name('student_page')->middleware('auth');
Route::post('/delete-appointment', [StudentController::class, 'deleteAppointment'])->name('delete_appointment');


Route::get('/notifications', [NotificationController::class, 'show'])->name('notifications');


// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

