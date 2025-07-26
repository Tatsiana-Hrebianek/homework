<?php

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
uses(RefreshDatabase::class);
    
    test('getUser возвращает корректное имя', function() {
        $user = User::create([
            'name' => 'Alice3',
            'email' => 'alice@example.com',
            'password' => Hash::make('password'),
        ]);
        expect($user->name)->toBe('Alice3');
    });
