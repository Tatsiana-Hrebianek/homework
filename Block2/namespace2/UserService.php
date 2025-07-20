<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\User;

class UserService{
    
    public function getUserGreeting($user){
        $newUser  = new User($user);
        return  "Привет, {$newUser->getName()}";
    }
}