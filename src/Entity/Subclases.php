<?php

namespace App\Entity;

use App\Repository\SubclasesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubclasesRepository::class)]
class Subclases
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Requisitos = null;

    
    #[ORM\Column(nullable: false)]
    private ?int $clase_id = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    #[ORM\Column(length: 999)]
    private ?string $img = null;

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

    public function getRequisitos(): ?string
    {
        return $this->Requisitos;
    }

    public function setRequisitos(?string $Requisitos): static
    {
        $this->Requisitos = $Requisitos;

        return $this;
    }

    public function getClaseId(): ?int
    {
        return $this->clase_id;
    }

    public function setClaseId(?int $clase_id): static
    {
        $this->clase_id = $clase_id;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): static
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function isValidado(): ?bool
    {
        return $this->Validado;
    }

    public function setValidado(bool $Validado): static
    {
        $this->Validado = $Validado;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): static
    {
        $this->img = $img;

        return $this;
    }
}
