@extends('layouts.app')

@section('title', 'Students')

@section('content')

    <h1>Students</h1>

    <a href="/students/create">Add Student</a>

    <hr>

    @if ($students->count())
        @foreach ($students as $student)

            <div>
                <h3>{{ $student->name }}</h3>
                <p>Email: {{ $student->email }}</p>
                <p>Course: {{ $student->course->name }}</p>

                <a href="/students/{{ $student->id }}">View</a>
                |
                <a href="/students/{{ $student->id }}/edit">Edit</a>

                <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </div>

            <hr>

        @endforeach
    @else
        <p>No students found.</p>
    @endif

@endsection