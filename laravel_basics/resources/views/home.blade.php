@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1>Laravel Basics</h1>

    <p>Hello, {{ $name }}!</p>
    <p>Course: {{ $course }}</p>

    <h2>Contact Form</h2>

    <form action="/contact" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Your name" required>

        <button type="submit">Send Contact</button>
    </form>

@endsection