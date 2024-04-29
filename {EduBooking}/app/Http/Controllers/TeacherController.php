<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TeacherController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'user_type' => 'required|in:1,2',
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_type = $request->user_type;
        
        $user->save();
        
        if ($user->user_type == 2) {
            $user->id_teacher = $user->id;  
            $user->save();
        }
        
        return redirect()->route('teacher_page');
    }

    public function showTeacherPage()
    {
        $teacherId = auth()->id(); 
        $appointments = \App\Models\Appointment::with('user') 
                            ->where('teacher_user_id', $teacherId)
                            ->get();

        return view('teacher_page', compact('appointments'));
    }

    public function deleteAppointment(Request $request)
    {
        $appointmentId = $request->appointment_id;
        $appointment = \App\Models\Appointment::findOrFail($appointmentId);
        $appointment->delete();

        return redirect()->back()->with('success', 'Appointment deleted successfully.');
    }

//     public function showTeacherPage()
// {
//     // Assuming the teacher ID is retrieved from authenticated user or a session variable
//     $teacherId = auth()->id(); // or any other method to get the currently logged in teacher ID

//     $appointments = Appointment::where('teacher_user_id', $teacherId)->get();

//     return view('teacher_page', compact('appointments'));
// }

    
}
