<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ApiTest extends TestCase
{   
    use RefreshDatabase;

    public function testUserApiReturnsUsers(){
        
        // Arrange: создаём тестовых пользователей
         User::factory()->count(3)->create();

        //Act: делаем GET запрос
        $response = $this->getJson('/api/users');
        //$response = $this->get('/users');

        $response->assertStatus(200);
        $response->assertJsonCount(3);
        $response->assertJsonStructure([
            '*' => ['id', 'name', 'email', 'created_at', 'updated_at'],
        ]);
    }
}