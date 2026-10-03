<?php

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('student can be deleted successfully', function () {
    $this->withoutMiddleware(PreventRequestForgery::class);

    $this->actingAs(User::factory()->create());

    $course = Course::create([
        'name' => 'Test Course',
    ]);

    $student = Student::create([
        'name' => 'Delete Student',
        'email' => 'delete@example.com',
        'course_id' => $course->id,
    ]);

    $response = $this->delete('/students/' . $student->id);

    $response->assertRedirect('/students');

    $this->assertDatabaseMissing('students', [
        'id' => $student->id,
    ]);
});
