<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;  // may be wrong model

class CreateAppointmentController extends Controller
{
    public function storeAppointment(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'subject_id' => 'required|integer|exists:subjects,id',
            'appointment_day' => 'required|date',
            'user_comment' => 'required|string|max:100',
        ]);

        $appointment = new Appointment();
        $appointment->user_id = $request->user_id;
        $appointment->subject_id = $request->subject_id;
        $appointment->appointment_day = $request->appointment_day;
        $appointment->user_comment = $request->user_comment;
        $appointment->save();

        return redirect()->route('create_appointment')->with('success', 'Appointment created successfully!');
    }
}
