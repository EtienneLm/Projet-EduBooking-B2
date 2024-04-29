<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Ensure this is the correct path to your User model

class UserController extends Controller
{
    public function showAllUsers()
    {
        $users = User::all();
        return view('teacher_page', ['users'=> $users ]);
    }
}
