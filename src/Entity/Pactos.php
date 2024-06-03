<?php

namespace App\Entity;

use App\Repository\PactosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PactosRepository::class)]
class Pactos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripción = null;

    #[ORM\Column]
    private ?int $nivel_1 = null;

    #[ORM\Column]
    private ?int $nivel_2 = null;

    #[ORM\Column]
    private ?int $nivel_3 = null;

    #[ORM\Column]
    private ?int $nivel_4 = null;

    #[ORM\Column]
    private ?int $nivel_5 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDescripción(): ?string
    {
        return $this->Descripción;
    }

    public function setDescripción(string $Descripción): static
    {
        $this->Descripción = $Descripción;

        return $this;
    }

    public function getNivel1(): ?int
    {
        return $this->nivel_1;
    }

    public function setNivel1(int $nivel_1): static
    {
        $this->nivel_1 = $nivel_1;

        return $this;
    }

    public function getNivel2(): ?int
    {
        return $this->nivel_2;
    }

    public function setNivel2(int $nivel_2): static
    {
        $this->nivel_2 = $nivel_2;

        return $this;
    }

    public function getNivel3(): ?int
    {
        return $this->nivel_3;
    }

    public function setNivel3(int $nivel_3): static
    {
        $this->nivel_3 = $nivel_3;

        return $this;
    }

    public function getNivel4(): ?int
    {
        return $this->nivel_4;
    }

    public function setNivel4(int $nivel_4): static
    {
        $this->nivel_4 = $nivel_4;

        return $this;
    }

    public function getNivel5(): ?int
    {
        return $this->nivel_5;
    }

    public function setNivel5(int $nivel_5): static
    {
        $this->nivel_5 = $nivel_5;

        return $this;
    }
}
