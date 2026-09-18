@extends('layouts.app')

@section('title', 'Student Details')

@section('content')

    <h1>Student Details</h1>

    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Course:</strong> {{ $student->course->name }}</p>

    <a href="/students/{{ $student->id }}/edit">Edit Student</a>
    |
    <a href="/students">Back to Students</a>

@endsection