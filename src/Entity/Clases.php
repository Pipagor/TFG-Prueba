<?php

namespace App\Entity;

use App\Repository\ClasesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasesRepository::class)]
class Clases
{


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 2000)]
    private ?string $Requisitos = null;

    #[ORM\Column(length: 999)]
    private ?string $Competencias = null;

    #[ORM\Column(length: 999)]
    private ?string $Salvaciones = null;

    #[ORM\Column(length: 999)]
    private ?string $HabilidadesAElegir = null;

    #[ORM\Column(length: 100)]
    private ?string $PuntosDeGolpe = null;

    #[ORM\Column(length: 999)]
    private ?string $Equipamiento = null;

    #[ORM\Column(length: 350)]
    private ?string $Autor = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $img = null;

    #[ORM\Column]
    private ?int $Magia = null;

    #[ORM\Column(length: 255)]
    private ?string $ipAddress = null;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    

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

    public function setRequisitos(string $Requisitos): static
    {
        $this->Requisitos = $Requisitos;

        return $this;
    }

    public function getCompetencias(): ?string
    {
        return $this->Competencias;
    }

    public function setCompetencias(string $Competencias): static
    {
        $this->Competencias = $Competencias;

        return $this;
    }

    public function getSalvaciones(): ?string
    {
        return $this->Salvaciones;
    }

    public function setSalvaciones(string $Salvaciones): static
    {
        $this->Salvaciones = $Salvaciones;

        return $this;
    }

    public function getHabilidadesAElegir(): ?string
    {
        return $this->HabilidadesAElegir;
    }

    public function setHabilidadesAElegir(string $HabilidadesAElegir): static
    {
        $this->HabilidadesAElegir = $HabilidadesAElegir;

        return $this;
    }

    public function getPuntosDeGolpe(): ?string
    {
        return $this->PuntosDeGolpe;
    }

    public function setPuntosDeGolpe(string $PuntosDeGolpe): static
    {
        $this->PuntosDeGolpe = $PuntosDeGolpe;

        return $this;
    }

    public function getEquipamiento(): ?string
    {
        return $this->Equipamiento;
    }

    public function setEquipamiento(string $equipamiento): static
    {
        $this->Equipamiento = $equipamiento;

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

    public function getMagia(): ?int
    {
        return $this->Magia;
    }

    public function setMagia(int $Magia): static
    {
        $this->Magia = $Magia;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): static
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

   

    
}
