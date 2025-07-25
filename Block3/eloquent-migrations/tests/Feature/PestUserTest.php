<?php

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
uses(RefreshDatabase::class);
    
    test('getUser возвращает корректное имя', function() {
        $user = User::create([
            'name' => 'Alice3',
             'email' => 'alice@example.com',
        'password' => bcrypt('secret'),
        ]);
        expect($user->name)->toBe('Alice3');
    });
