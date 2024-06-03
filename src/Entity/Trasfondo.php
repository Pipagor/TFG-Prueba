<?php

namespace App\Entity;

use App\Repository\TrasfondoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrasfondoRepository::class)]
class Trasfondo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripcion = null;

    #[ORM\Column(length:100)]
    private ?string $Origen = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Idiomas = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $ObjetosIniciales = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Competencias = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $Plano = null;

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

    public function getOrigen(): ?string
    {
        return $this->Origen;
    }

    public function setOrigen(string $Origen): static
    {
        $this->Origen = $Origen;

        return $this;
    }

    public function getIdiomas(): ?string
    {
        return $this->Idiomas;
    }

    public function setIdiomas(?string $Idiomas): static
    {
        $this->Idiomas = $Idiomas;

        return $this;
    }

    public function getObjetosIniciales(): ?string
    {
        return $this->ObjetosIniciales;
    }

    public function setObjetosIniciales(?string $ObjetosIniciales): static
    {
        $this->ObjetosIniciales = $ObjetosIniciales;

        return $this;
    }

    public function getCompetencias(): ?string
    {
        return $this->Competencias;
    }

    public function setCompetencias(?string $Competencias): static
    {
        $this->Competencias = $Competencias;

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

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): static
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function getPlano(): ?string
    {
        return $this->Plano;
    }

    public function setPlano(string $Plano): static
    {
        $this->Plano = $Plano;

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
