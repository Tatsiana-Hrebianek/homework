<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->count(10)->create();
        //  DB::table('users')->insert([
        //     [
        //         'name' => 'User One',
        //         'email' => 'user1@example.com',
        //         'password' => Hash::make('password1'),
        //         'role' => 'user',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'User Two',
        //         'email' => 'user2@example.com',
        //         'password' => Hash::make('password2'),
        //         'role' => 'user',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'User Three',
        //         'email' => 'user3@example.com',
        //         'password' => Hash::make('password3'),
        //         'role' => 'user',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'User Four',
        //         'email' => 'user4@example.com',
        //         'password' => Hash::make('password4'),
        //         'role' => 'user',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'User Five',
        //         'email' => 'user5@example.com',
        //         'password' => Hash::make('password5'),
        //         'role' => 'user',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}
