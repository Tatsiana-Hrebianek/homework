<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */    
    public function testUserCanBeCreated()
    {
        $user = User::create([
            'name' => 'Alice',
            'email' => 'alice@example.com',
            'password' => bcrypt('secret'),
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Alice',
            'email' => 'alice@example.com',
        ]);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('Alice', $user->name);
        $this->assertEquals('alice@example.com', $user->email);
    }  

    /** @test */
    public function testUserFullName() {

        $user = User::create([
            'name' => 'Alice2 Smith',
            'first_name' => 'Alice2',
            'last_name' => 'Smith',
            'email' => 'alice2@example.com',
            'password' => bcrypt('secret2'),
        ]);

        $this->assertEquals('Alice2 Smith', $user->getFullName());
    }
}