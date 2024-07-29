<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AllTeacherController extends Controller
{
    public function showTeachers()
    {
        $teachers = User::where('user_type', 2)->get(); 
        
        return view('student_teacher_choice', ['teachers' => $teachers]); 
    }
}
