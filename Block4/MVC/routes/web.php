<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Repositories\UserRepository;
use App\Models\User;
use App\Controllers\ShowUsersController;
use App\Controllers\UserController;
use App\Services\UserService;


// $uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);//!!!!
// echo $_SERVER['REQUEST_URI'];

$pdo = new PDO("mysql:host=localhost;dbname=test_database;charset=utf8mb4", "tatsiana", "");
$userModel = new User($pdo);
$userRepository = new UserRepository($pdo);
$userService = new UserService($userRepository);
$controller = new UserController($userModel);
$showUsersController = new ShowUsersController($userService);

// print_r($userService->getUsers());

if ($uri === '/users' && isset($_GET['email'])) {
   $email = $_GET['email'] ?? null;
   $controller->showUser($email);
} elseif ($uri === '/users') {
   $showUsersController->showUsers();
}

else {
   http_response_code(404);
   echo "404 Not Found";
}
