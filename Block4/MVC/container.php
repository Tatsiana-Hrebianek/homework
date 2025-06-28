<?php

require_once __DIR__ . '/vendor/autoload.php';

use DI\ContainerBuilder;
use App\Repositories\UserRepository;
use App\Services\UserService;

$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions([
    PDO::class => function() {
        return new PDO("mysql:host=localhost;dbname=test_database;charset=utf8mb4", "tatsiana", "");
    },
    UserRepository::class =>function($c) {
        return new UserRepository($c->get(PDO::class));
    },
    UserService::class => function($c) {
        return new UserService($c->get(UserRepository::class));
    },
]);

$container = $containerBuilder->build();

return $container;

// $container->set(Database::class, function(){
//     return new Database('localhost', 'test_database', 'tatsiana');
// });

