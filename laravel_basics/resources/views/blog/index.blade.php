<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
</head>
<body>

    <h1>Blog Posts</h1>

    <a href="{{ route('blog-posts.create') }}">Create New Post</a>

    <hr>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>

        <p>{{ $post->content }}</p>

        <a href="{{ route('blog-posts.show', $post) }}">View</a>
        |
        <a href="{{ route('blog-posts.edit', $post) }}">Edit</a>

        <form action="{{ route('blog-posts.destroy', $post) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

        <hr>
    @endforeach

    {{ $posts->links() }}

</body>
</html>