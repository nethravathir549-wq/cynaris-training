<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return StudentResource::collection(
            Student::with('course')->get()
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student = Student::create($validated);

        return (new StudentResource($student))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Student $student)
    {
        return new StudentResource($student->load('course'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'course_id' => 'required|exists:courses,id',
        ]);

        $student->update($validated);

        return new StudentResource($student);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully'
        ], 200);
    }
}