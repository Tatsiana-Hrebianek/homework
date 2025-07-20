<?php

namespace App\Controllers;

use App\Models\User;

class UserController {
    private User $userModel;

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    public function showUser(?string $email) {
        if (!$email){
            http_response_code(400);
            echo "Email is required";
            return;
        }
        $user = $this->userModel->findByEmail($email);

        if (!$user) {
            http_response_code(404);
            echo "User not found";
            return;
        }

        require "../app/Views/user.php";
    }
}
