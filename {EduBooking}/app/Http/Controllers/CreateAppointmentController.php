<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;  // Correct model import assuming your model namespace is App\Models
use App\Models\Subject;      // Correct model import assuming your model namespace is App\Models
use Illuminate\Support\Facades\Log; // Import Log facade for logging

class CreateAppointmentController extends Controller
{
    public function storeAppointment(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'subject_id' => 'required|integer|exists:subjects,id',
            'appointment_day' => 'required|date',
            'user_comment' => 'required|string|max:100',
        ]);

        try {
            $appointment = new Appointment();
            $appointment->user_id = $validatedData['user_id'];
            $appointment->subject_id = $validatedData['subject_id'];
            $appointment->appointment_day = $validatedData['appointment_day'];
            $appointment->user_comment = $validatedData['user_comment'];
            $appointment->save();
        } catch (\Exception $e) {
            // Log the error and return a user-friendly message
            Log::error('Error creating appointment: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create the appointment.');
        }

        return redirect()->route('create_appointment')->with('success', 'Appointment created successfully!');
    }

    public function showCreateAppointmentForm()
    {
        $subjects = Subject::all();
        return view('create_appointment', ['subjects' => $subjects]);
    }
}
