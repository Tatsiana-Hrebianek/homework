<?php

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('User API returns users', function () {

    User::factory()->count(3)->create();

    $response = $this->getJson('/api/users');

    $response->assertStatus(200);
    $response->assertJsonCount(3);
    $response->assertJsonStructure([
        "*" => ['id', 'name', 'email', 'created_at', 'updated_at'],
    ]);
});
