<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show($name)
    {
        $course = 'BCA';

        return view('student', compact('name', 'course'));
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $course = 'BCA';

        return view('student', compact('name', 'course'));
    }
}