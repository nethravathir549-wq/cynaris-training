<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_view_projects(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/projects')
            ->assertStatus(200);
    }

    public function test_authenticated_user_can_create_project(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/projects', [
            'title' => 'Test Portfolio Project',
            'description' => 'A test project for the portfolio CMS.',
            'technologies' => 'Laravel, PHP, SQLite',
            'github_url' => 'https://github.com/example/test',
            'live_url' => 'https://example.com',
        ]);

        $response->assertRedirect('/projects');

        $this->assertDatabaseHas('projects', [
            'title' => 'Test Portfolio Project',
            'user_id' => $user->id,
        ]);
    }

    public function test_authenticated_user_can_view_project(): void
    {
        $user = User::factory()->create();

        $project = Project::create([
            'user_id' => $user->id,
            'title' => 'View Test Project',
            'description' => 'Testing project view.',
            'technologies' => 'Laravel, PHP',
        ]);

        $this->actingAs($user)
            ->get('/projects/' . $project->id)
            ->assertStatus(200)
            ->assertSee('View Test Project');
    }

    public function test_authenticated_user_can_update_project(): void
    {
        $user = User::factory()->create();

        $project = Project::create([
            'user_id' => $user->id,
            'title' => 'Old Project Title',
            'description' => 'Old description.',
            'technologies' => 'PHP',
        ]);

        $response = $this->actingAs($user)->put('/projects/' . $project->id, [
            'title' => 'Updated Project Title',
            'description' => 'Updated description.',
            'technologies' => 'Laravel, PHP',
        ]);

        $response->assertRedirect('/projects');

        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
            'title' => 'Updated Project Title',
        ]);
    }

    public function test_authenticated_user_can_delete_project(): void
    {
        $user = User::factory()->create();

        $project = Project::create([
            'user_id' => $user->id,
            'title' => 'Delete Test Project',
            'description' => 'Testing project deletion.',
            'technologies' => 'Laravel',
        ]);

        $response = $this->actingAs($user)
            ->delete('/projects/' . $project->id);

        $response->assertRedirect('/projects');

        $this->assertDatabaseMissing('projects', [
            'id' => $project->id,
        ]);
    }
}