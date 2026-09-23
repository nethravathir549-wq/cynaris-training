<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Students</h1>

    <a href="{{ route('students.create') }}">Create New Student</a>

    <hr>

    @foreach ($students as $student)
        <h2>{{ $student->name }}</h2>

        <p>Email: {{ $student->email }}</p>

        <p>Course: {{ $student->course->name }}</p>

        <a href="{{ route('students.show', $student) }}">View</a>
        |
        <a href="{{ route('students.edit', $student) }}">Edit</a>

        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

        <hr>
    @endforeach

</body>
</html>