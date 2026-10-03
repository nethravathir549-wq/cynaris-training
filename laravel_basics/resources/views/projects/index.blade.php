<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
</head>
<body>

    <h1>My Portfolio Projects</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('projects.create') }}">Add New Project</a>

    <hr>

    @forelse($projects as $project)
        <h2>{{ $project->title }}</h2>

        <p>{{ $project->description }}</p>

        <p>
            <strong>Technologies:</strong>
            {{ $project->technologies }}
        </p>

        @if($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank">GitHub</a>
        @endif

        @if($project->live_url)
            <a href="{{ $project->live_url }}" target="_blank">Live Demo</a>
        @endif

        <br>

        <a href="{{ route('projects.show', $project) }}">View</a>
        |
        <a href="{{ route('projects.edit', $project) }}">Edit</a>

        <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

        <hr>
    @empty
        <p>No projects added yet.</p>
    @endforelse

</body>
</html>