<?php

declare(strict_types=1);

namespace App4;

require_once '../vendor/autoload.php';
require_once '../bootstrap.php';

use App4\User;

$user = new User();
$user->setName("Анна");
$user->setEmail("anna@example.com");
$entityManager->persist($user);
$entityManager->flush();  
// ✅ Пользователь добавлен в БД
