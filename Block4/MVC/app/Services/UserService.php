<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Interfaces\UserRepositoryInterface;

class UserService {

      private UserRepositoryInterface $repository;
      
      public function __construct(UserRepositoryInterface $repository)
      {
        $this->repository = $repository; 
      }

      public function getUsers(): array {
        return $this->repository->getAll();
      }   
}