<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;  
use App\Models\Subject;      
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Auth;
use App\Models\User; 


class CreateAppointmentController extends Controller
{

    public function storeAppointment(Request $request)
    {
        $validatedData = $request->validate([
            'teacher_user_id' => 'required|integer|exists:users,id',  
            'subject_id' => 'required|integer|exists:subjects,id',
            'appointment_day' => 'required|date',
            'user_comment' => 'required|string|max:100',
        ]);
        
        $user = Auth::user();
        
        $userAppointmentsCount = Appointment::where('user_id', $user->id)->count();
        
        if ($userAppointmentsCount >= 3) {
            return redirect()->back()->with('error', 'You have reached the maximum limit of appointments.');
        }
        
        try {
            $appointment = new Appointment();
            $appointment->user_id = $user->id;
            $appointment->teacher_user_id = $validatedData['teacher_user_id']; 
            $appointment->subject_id = $validatedData['subject_id'];
            $appointment->appointment_day = $validatedData['appointment_day'];
            $appointment->user_comment = $validatedData['user_comment'];
            $appointment->save();
        } catch (\Exception $e) {
            Log::error('Error creating appointment: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create the appointment.');
        }
        
        return redirect()->route('appointment_created')->with('success', 'Appointment created successfully!');
    }

    public function showCreateAppointmentForm()
{
    $subjects = Subject::all();
    $teacherId = session('selected_teacher_id'); 
    
    $user = Auth::user();
    $userAppointmentsCount = Appointment::where('user_id', $user->id)->count();
    
    return view('create_appointment', [
        'subjects' => $subjects,
        'teacherId' => $teacherId,
        'userAppointmentsCount' => $userAppointmentsCount,
    ]);
}

}
