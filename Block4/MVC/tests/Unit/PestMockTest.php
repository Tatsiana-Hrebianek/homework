<?php

use App\Repositories\UserRepository;

test('создаем мок репозитория и проверям работу метода findUserByEmail()', function(){
    $mock = Mockery::mock(UserRepository::class);
    $mock->shouldReceive('findUserByEmail')->with('alex@gmail.com')->andReturn(['name'=>'Alex']);

    expect($mock->findUserByEmail('alex@gmail.com'))->toBe(['name' => 'Alex']);
});

afterAll(fn() => Mockery::close());
