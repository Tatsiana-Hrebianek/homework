<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(RefreshDatabase::class);

test('использование мока репозитория User', function(){
    $user = User::create([
        'name' => 'Jack',
        'email' => 'jackRasselTerier@gmail.com',
        'password' => bcrypt('jack\'s_secrets'),
    ]);

    expect($user->name)->toBe('Jack');

});


