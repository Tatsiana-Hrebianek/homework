<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


$config = Setup::createAttributeMetadataConfiguration([__DIR__."/src"], true);

$conn = [
    'dbname'   => 'test_database',
    'user'     => 'tatsiana',
    'password' => '',
    'host'     => 'localhost',
    'driver'   => 'pdo_mysql',
];

$entityManager = EntityManager::create($conn, $config);
