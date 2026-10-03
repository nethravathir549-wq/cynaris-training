@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

    <h1>Create New Post</h1>

    <form action="{{ route('blog-posts.store') }}" method="POST">
        @csrf

        <label for="title">Title:</label>
        <input
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}"
            required
        >

        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label for="content">Content:</label>
        <br>

        <textarea
            id="content"
            name="content"
            rows="6"
            cols="50"
            required
        >{{ old('content') }}</textarea>

        @error('content')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Create Post</button>
    </form>

    <br>

    <a href="{{ route('blog-posts.index') }}">Back to Posts</a>

@endsection