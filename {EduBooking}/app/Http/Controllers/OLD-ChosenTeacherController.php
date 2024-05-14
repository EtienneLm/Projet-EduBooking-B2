<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class ChosenTeacherController extends Controller
{
    public function displaySelectedTeacher()
    {
        $teacherId = session('selected_teacher_id');
        $teacher = User::find($teacherId);

        if ($teacher) {
            return view('student_appointment_choice', ['teacher' => $teacher]);
        } else {
            return view('student_appointment_choice')->with('error', 'No teacher selected');
        }
    }
}
