<?php

namespace App\Entity;

use App\Repository\SolicitudesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SolicitudesRepository::class)]
class Solicitudes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $Tipo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Insercion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    public function setTipo(string $Tipo): static
    {
        $this->Tipo = $Tipo;

        return $this;
    }

    public function getInsercion(): ?\DateTimeInterface
    {
        return $this->Insercion;
    }

    public function setInsercion(\DateTimeInterface $Insercion): static
    {
        $this->Insercion = $Insercion;

        return $this;
    }
}
