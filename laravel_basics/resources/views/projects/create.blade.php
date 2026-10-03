<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
</head>
<body>

    <h1>Add New Project</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <label>Project Title:</label><br>
        <input type="text" name="title" value="{{ old('title') }}" required>
        <br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="5" required>{{ old('description') }}</textarea>
        <br><br>

        <label>Technologies:</label><br>
        <input type="text" name="technologies" value="{{ old('technologies') }}" placeholder="Laravel, PHP, MySQL" required>
        <br><br>

        <label>GitHub URL:</label><br>
        <input type="url" name="github_url" value="{{ old('github_url') }}">
        <br><br>

        <label>Live Demo URL:</label><br>
        <input type="url" name="live_url" value="{{ old('live_url') }}">
        <br><br>

        <button type="submit">Save Project</button>
    </form>

    <br>

    <a href="{{ route('projects.index') }}">Back to Projects</a>

</body>
</html>