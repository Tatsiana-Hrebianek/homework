<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */    

    public function user_can_be_created()
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
    }

    // public function user_can_be_created_with_seeder()
    // {
    //     $this->seed(\Database\Seeders\UserSeeder::class);

    //     $this->assertEquals(10, User::count());
    // }

}