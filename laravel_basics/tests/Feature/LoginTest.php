<?php

use App\Models\User;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

test('user can login successfully', function () {
$this->withoutMiddleware(PreventRequestForgery::class);

    $user = User::factory()->create([
        'email' => 'loginuser@example.com',
        'password' => Hash::make('Password@123'),
    ]);

    $response = $this->post('/login', [
        'email' => 'loginuser@example.com',
        'password' => 'Password@123',
    ]);

    $response->assertRedirect('/dashboard');
    $this->assertAuthenticatedAs($user);
});