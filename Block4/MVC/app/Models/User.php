<?php

namespace App\Models;

class User {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function findByEmail(string $email): ?array {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function getAll(): ?array {
        $stmt = $this->pdo->query("SELECT name, email FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: null;
    }


}
