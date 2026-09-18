<!DOCTYPE html>
<html>
<head>
    <title>Create Blog Post</title>
</head>
<body>

    <h1>Create Blog Post</h1>

    <a href="{{ route('blog-posts.index') }}">Back to Posts</a>

    <hr>

    @if ($errors->any())
        <div>
            <strong>Please fix the following errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blog-posts.store') }}" method="POST">
        @csrf

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title') }}">
        <br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="8" cols="50">{{ old('content') }}</textarea>
        <br><br>

        <button type="submit">Create Post</button>
    </form>

</body>
</html>