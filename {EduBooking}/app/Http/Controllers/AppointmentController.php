<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    
    public function showAppointments()
    {
        $userId = auth()->id(); 
        $appointments = Appointment::where('user_id', $userId)->get(); 
        
        return view('appointment_created', compact('appointments')); 
    }
}

