<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }}</title>
</head>
<body>

    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    <p>
        <strong>Technologies:</strong>
        {{ $project->technologies }}
    </p>

    @if($project->github_url)
        <p>
            <a href="{{ $project->github_url }}" target="_blank">
                View on GitHub
            </a>
        </p>
    @endif

    @if($project->live_url)
        <p>
            <a href="{{ $project->live_url }}" target="_blank">
                View Live Demo
            </a>
        </p>
    @endif

    <a href="{{ route('projects.index') }}">Back to Projects</a>

</body>
</html>