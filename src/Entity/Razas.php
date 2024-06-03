<?php

namespace App\Entity;

use App\Repository\RazasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RazasRepository::class)]
class Razas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripcion = null;

    #[ORM\Column(length: 2)]
    private ?string $Fuerza = null;

    #[ORM\Column(length: 2)]
    private ?string $Destreza = null;

    #[ORM\Column(length: 2)]
    private ?string $Constitucion = null;

    #[ORM\Column(length: 2)]
    private ?string $Inteligencia = null;

    #[ORM\Column(length: 2)]
    private ?string $Sabiduria = null;

    #[ORM\Column(length: 2)]
    private ?string $Carisma = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column]
    private ?int $Velocidad = null;

    #[ORM\Column(length: 999)]
    private ?string $AtaqueDesarmado = null;

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

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripción): static
    {
        $this->Descripcion = $Descripción;

        return $this;
    }

    public function getFuerza(): ?string
    {
        return $this->Fuerza;
    }

    public function setFuerza(string $Fuerza): static
    {
        $this->Fuerza = $Fuerza;

        return $this;
    }

    public function getDestreza(): ?string
    {
        return $this->Destreza;
    }

    public function setDestreza(string $Destreza): static
    {
        $this->Destreza = $Destreza;

        return $this;
    }

    public function getConstitucion(): ?string
    {
        return $this->Constitucion;
    }

    public function setConstitucion(string $Constitucion): static
    {
        $this->Constitucion = $Constitucion;

        return $this;
    }

    public function getInteligencia(): ?string
    {
        return $this->Inteligencia;
    }

    public function setInteligencia(string $Inteligencia): static
    {
        $this->Inteligencia = $Inteligencia;

        return $this;
    }

    public function getSabiduria(): ?string
    {
        return $this->Sabiduria;
    }

    public function setSabiduria(string $Sabiduria): static
    {
        $this->Sabiduria = $Sabiduria;

        return $this;
    }

    public function getCarisma(): ?string
    {
        return $this->Carisma;
    }

    public function setCarisma(string $Carisma): static
    {
        $this->Carisma = $Carisma;

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

    public function getVelocidad(): ?int
    {
        return $this->Velocidad;
    }

    public function setVelocidad(int $Velocidad): static
    {
        $this->Velocidad = $Velocidad;

        return $this;
    }

    public function getAtaqueDesarmado(): ?string
    {
        return $this->AtaqueDesarmado;
    }

    public function setAtaqueDesarmado(string $AtaqueDesarmado): static
    {
        $this->AtaqueDesarmado = $AtaqueDesarmado;

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
