@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

    <h1>Edit Student</h1>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ $student->name }}"
            required
        >
        <br><br>

        <label for="email">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ $student->email }}"
            required
        >
        <br><br>

        <label for="course_id">Course:</label>
        <select id="course_id" name="course_id" required>

            @foreach ($courses as $course)
                <option
                    value="{{ $course->id }}"
                    {{ $student->course_id == $course->id ? 'selected' : '' }}
                >
                    {{ $course->name }}
                </option>
            @endforeach

        </select>

        <br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>

    <a href="/students">Back to Students</a>

@endsection