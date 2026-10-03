<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

/*
|--------------------------------------------------------------------------
| Public Project API
|--------------------------------------------------------------------------
*/

Route::get('/projects', [ProjectController::class, 'index'])
    ->name('api.projects.index');

Route::get('/projects/{project}', [ProjectController::class, 'show'])
    ->name('api.projects.show');

/*
|--------------------------------------------------------------------------
| Authenticated API
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('students', StudentController::class)
        ->names('api.students');

    Route::post('/projects', [ProjectController::class, 'store'])
        ->name('api.projects.store');

    Route::put('/projects/{project}', [ProjectController::class, 'update'])
        ->name('api.projects.update');

    Route::patch('/projects/{project}', [ProjectController::class, 'update']);

    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])
        ->name('api.projects.destroy');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});