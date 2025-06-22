<?php
// create_user.php <name>
require_once "bootstrap.php";

//$newUserName = $argv[1];

$user = new User();
$user->setName("Анна");
$user->setEmail("anna@example.com");

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with name " . $user->getName() . "\n";