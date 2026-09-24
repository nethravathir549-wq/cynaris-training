<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Nethravathi';
        $course = 'BCA';

        return view('home', compact('name', 'course'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact(Request $request)
    {
        $name = $request->input('name');

        return view('contact', compact('name'));
    }
}