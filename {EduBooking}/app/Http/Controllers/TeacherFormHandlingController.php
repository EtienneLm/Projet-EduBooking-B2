<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherFormHandlingController extends Controller
{
    public function handleForm(Request $request)
    {
        return redirect()->route('student_appointment_choice')->with('status', 'Form data processed successfully!');
    }
}
