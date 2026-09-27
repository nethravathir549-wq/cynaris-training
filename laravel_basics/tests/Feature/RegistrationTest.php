<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('user can register successfully', function () {
    $this->withoutMiddleware();

    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'testuser@example.com',
        'phone' => '9876543210',
        'password' => 'Password@123',
        'password_confirmation' => 'Password@123',
    ]);

    $response->assertRedirect('/dashboard');

    $this->assertDatabaseHas('users', [
        'email' => 'testuser@example.com',
    ]);
});