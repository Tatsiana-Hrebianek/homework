<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Interfaces\UserRepositoryInterface;

// require_once __DIR__ . '/../Models/User.php';
// require_once __DIR__ . '/../Repositories/UserRepository.php';

class UserService {
    // private User $userModel;

    // public function __construct(User $userModel) {
    //     $this->userModel = $userModel;
    // }

     // public function getUsers(): array {
    //     return $this->userModel->getAll();
    // }

    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

   public function getUsers(): array {
    return $this->repository->getAll();
   }


   
}