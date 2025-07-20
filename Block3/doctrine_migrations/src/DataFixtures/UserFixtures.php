<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $user = new User();
            $user->setName("User $i");
            $user->setEmail("user$i@example.com");
            $user->setPassword(password_hash('password'.$i, PASSWORD_BCRYPT));
            $user->setRole('user');

            $manager->persist($user);
        }

        $manager->flush();
    }
}
