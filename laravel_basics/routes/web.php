<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/student/{name}', [StudentController::class, 'show'])
    ->middleware('auth');

Route::post('/student', [StudentController::class, 'store']);

Route::post('/contact', [HomeController::class, 'contact']);

Route::resource('students', StudentCrudController::class)
    ->middleware('auth');

Route::resource('blog-posts', BlogPostController::class)
    ->middleware('auth');

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');   

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/api-students', 'api-students')
    ->middleware('auth'); 

require __DIR__.'/auth.php';