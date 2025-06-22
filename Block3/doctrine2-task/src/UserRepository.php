<?php

use Doctrine\ORM\EntityRepository;
class UserRepository extends EntityRepository {
    public function findByEmail(string $email): ?User {
        return $this->findOneBy(['email' => $email]);
    }
}