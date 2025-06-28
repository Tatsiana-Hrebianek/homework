<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface{
    private \PDO $pdo;

    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll(): array {
        $stmt = $this->pdo->query("SELECT name, email FROM users");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}