@extends('layouts.app')

@section('title', 'Add Student')

@section('content')

    <h1>Add Student</h1>

    @if ($errors->any())
        <div>
            <h3>Please fix the following errors:</h3>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
        >
        <br><br>

        <label for="email">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required
        >
        <br><br>

        <label for="course_id">Course:</label>

        <select id="course_id" name="course_id" required>
            <option value="">Select Course</option>

            @foreach ($courses as $course)
                <option
                    value="{{ $course->id }}"
                    {{ old('course_id') == $course->id ? 'selected' : '' }}
                >
                    {{ $course->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Save Student</button>
    </form>

@endsection