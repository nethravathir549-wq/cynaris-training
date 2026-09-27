<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Nethravathi';
        $course = 'BCA';

    Log::info('Homepage debugging test', [
        'name' => $name,
        'course' => $course,
]);


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