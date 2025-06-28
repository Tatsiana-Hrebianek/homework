<?php

require_once __DIR__ . '/vendor/autoload.php';

use DI\ContainerBuilder;
use App\Repositories\UserRepository;
use App\Interfaces\UserRepositoryInterface;
use App\Services\UserService;
use App\Providers\UserServiceProvider;

$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions([
    PDO::class => function() {
        return new PDO("mysql:host=localhost;dbname=test_database;charset=utf8mb4", "tatsiana", "");
    },
    // UserRepositoryInterface::class =>function($c) {
    //     return new UserRepository($c->get(PDO::class));
    // },
    // UserService::class => function($c) {
    //     return new UserService($c->get(UserRepositoryInterface::class));
    // },
]);

$container = $containerBuilder->build();

//Регистрируем провайдер
UserServiceProvider::register($container);

return $container;



