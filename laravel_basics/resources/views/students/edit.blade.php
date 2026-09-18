<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
</head>
<body>

    <h1>Edit Blog Post</h1>

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

    <form action="{{ route('blog-posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        <br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="8" cols="50">{{ old('content', $post->content) }}</textarea>
        <br><br>

        <button type="submit">Update Post</button>
    </form>

</body>
</html>