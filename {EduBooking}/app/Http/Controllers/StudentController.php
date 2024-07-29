<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;  
use Illuminate\Support\Facades\Auth;  

class StudentController extends Controller
{
    public function showStudentPage()
    {
        $user = Auth::user();
        
        $userAppointmentsCount = Appointment::where('user_id', $user->id)->count();
        
        $appointments = Appointment::where('user_id', $user->id)->get();
        
        return view('student_page', [
            'userAppointmentsCount' => $userAppointmentsCount,
            'appointments' => $appointments,
        ]);
    }

    public function deleteAppointment(Request $request)
    {
        $appointmentId = $request->appointment_id;
        $appointment = Appointment::findOrFail($appointmentId);
        $appointment->delete();
        
        return redirect()->back()->with('success', 'Appointment deleted successfully.');
    }
}
