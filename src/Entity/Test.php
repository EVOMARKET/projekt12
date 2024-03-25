<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $First_name = null;

    #[ORM\Column(length: 255)]
    private ?string $Last_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->First_name;
    }

    public function setFirstName(?string $First_name): static
    {
        $this->First_name = $First_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->Last_name;
    }

    public function setLastName(string $Last_name): static
    {
        $this->Last_name = $Last_name;

        return $this;
    }
}
