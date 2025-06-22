<?php
require_once 'bootstrap.php';

$user = $entityManager->getRepository('User')->findByEmail("anna@example.com");
print_r($user);