<?php

$container = require __DIR__ . '/container.php';

use App\Services\UserService;

$service = $container->get(UserService::class);
print_r($service->getUsers());