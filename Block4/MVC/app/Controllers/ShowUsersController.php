<?php

namespace App\Controllers;

use App\Services\UserService;

class ShowUsersController {

    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showUsers(){
        $users = $this->userService->getUsers();

        if (!$users) {
            http_response_code(404);
            echo "There are no users in the database";
            return;
        }

        require "../app/Views/user.php";
    }

}