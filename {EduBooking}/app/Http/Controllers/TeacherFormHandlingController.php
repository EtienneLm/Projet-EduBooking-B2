<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TeacherFormHandlingController extends Controller
{
    public function handleForm(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        session(['selected_teacher_id' => $request->user_id]);

        return redirect()->route('student_create_appointment');
    }
}
