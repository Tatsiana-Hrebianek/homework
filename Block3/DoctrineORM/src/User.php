<?php

// declare(strict_types=1);

// namespace App4;

// use Doctrine\ORM\Mapping as ORM;

// #[ORM\Entity]
// #[ORM\Table(name: "users")]
// class User {
//     #[ORM\Id, ORM\Column(type: "integer"), ORM\GeneratedValue]
//     private int $id;

//     #[ORM\Column(type:"string")]
//     private string $name;

//     #[ORM\Column(type: "string", unique: true)]
//     private string $email;

//     public function getId():int {
//         return $this->id;
//     }

//     public function getName(): string {
//         return $this->name;
//     }

//     public function setName(string $name): void {
//         $this->name = $name;
//     }

//     public function getEmail(): string {
//         return $this->email;
//     }

//     public function setEmail(string $email): void {
//         $this->email = $email;
//     }    


// }



declare(strict_types=1);

namespace App4;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "users")]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string")]
    private string $name;

    #[ORM\Column(type: "string", unique: true)]
    private string $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
