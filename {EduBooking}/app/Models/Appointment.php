<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;  

class Appointment extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'appointment_user');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_user_id');
    }
}
