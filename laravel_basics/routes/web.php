<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/student/{name}', [StudentController::class, 'show']);

Route::post('/student', [StudentController::class, 'store']);

Route::post('/contact', [HomeController::class, 'contact']);