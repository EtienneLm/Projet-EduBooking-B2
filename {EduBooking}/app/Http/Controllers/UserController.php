<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showAllUsers()
    {
        $users = User::all();
        return view('teacher_page', ['users'=> $users ]);
    }
}
