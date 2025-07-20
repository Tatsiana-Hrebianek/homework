<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use App\Interfaces\UserRepositoryInterface;
use App\Services\UserService;
use Psr\Container\ContainerInterface;

class UserServiceProvider{

    public static function register(ContainerInterface $container){
        $container->set(UserRepositoryInterface::class, function($c){
            return new UserRepository($c->get(\PDO::class));
        });
        
        $container->set(UserService::class, function($c){
            return new UserService($c->get(UserRepository::class));
        });
    }
}