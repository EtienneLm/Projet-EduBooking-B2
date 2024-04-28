<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function store(Request $request)
    {
        $subject = new Subject;
        $subject->name = $request->name;
        $subject->save();

        return redirect()->back()->with('success', 'Subject created successfully');
    }
}
