@extends('layouts.app')

@section('title', 'Student')

@section('content')

    <h1>Student Details</h1>

    <p>Name: {{ $name }}</p>
    <p>Course: {{ $course }}</p>

    <h2>Student Form</h2>

    <form action="/student" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Enter name" required>

        <button type="submit">Submit</button>
    </form>

@endsection