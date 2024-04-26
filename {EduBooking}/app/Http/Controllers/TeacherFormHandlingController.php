<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class TeacherFormHandlingController extends Controller
{
    public function handleForm(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        // Store the selected teacher's ID in the session
        session(['selected_teacher_id' => $request->user_id]);

        // Redirect to another page where you can use this information
        return redirect()->route('student_appointment_choice');
    }
}

