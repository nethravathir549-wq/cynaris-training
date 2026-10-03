<!DOCTYPE html>
<html>
<head>
    <title>View Blog Post</title>
</head>
<body>

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <hr>

    <a href="{{ route('blog-posts.index') }}">Back to Posts</a>
    |
    <a href="{{ route('blog-posts.edit', $post) }}">Edit Post</a>

</body>
</html>