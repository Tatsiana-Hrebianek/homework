<?php

namespace App\Interfaces;


interface UserRepositoryInterface {
    public function getAll(): array;
    public function findUserByEmail(string $email): array;
}