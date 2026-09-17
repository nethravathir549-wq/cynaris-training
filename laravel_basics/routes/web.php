<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCrudController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/student/{name}', [StudentController::class, 'show']);

Route::post('/student', [StudentController::class, 'store']);

Route::post('/contact', [HomeController::class, 'contact']);

Route::resource('students', StudentCrudController::class);