<?php

namespace App\Entity;

use App\Repository\HechizosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HechizosRepository::class)]
class Hechizos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripcion = null;

    #[ORM\Column(length:10)]
    private ?string $Nivel = null;

    #[ORM\Column(length: 100)]
    private ?string $Escuela = null;

    #[ORM\Column(length: 100)]
    private ?string $TiempoDeEjecucion = null;

    #[ORM\Column]
    private ?int $Rango = null;

    #[ORM\Column(length: 999)]
    private ?string $Componentes = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    #[ORM\Column(length: 100)]
    private ?string $Autor = null;

    #[ORM\Column(length: 100)]
    private ?string $Duracion = null;

    #[ORM\Column(length: 200)]
    private ?string $Zona_Efecto = null;

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

    public function getNivel(): ?string
    {
        return $this->Nivel;
    }

    public function setNivel(string $Nivel): static
    {
        $this->Nivel = $Nivel;

        return $this;
    }

    public function getEscuela(): ?string
    {
        return $this->Escuela;
    }

    public function setEscuela(string $Escuela): static
    {
        $this->Escuela = $Escuela;

        return $this;
    }

    public function getTiempoDeEjecucion(): ?string
    {
        return $this->TiempoDeEjecucion;
    }

    public function setTiempoDeEjecucion(string $TiempoDeEjecución): static
    {
        $this->TiempoDeEjecucion = $TiempoDeEjecución;

        return $this;
    }

    public function getRango(): ?int
    {
        return $this->Rango;
    }

    public function setRango(int $Rango): static
    {
        $this->Rango = $Rango;

        return $this;
    }

    public function getComponentes(): ?string
    {
        return $this->Componentes;
    }

    public function setComponentes(string $Componentes): static
    {
        $this->Componentes = $Componentes;

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

    public function getDuracion(): ?string
    {
        return $this->Duracion;
    }

    public function setDuracion(string $Duración): static
    {
        $this->Duracion = $Duración;

        return $this;
    }

    public function getZonaEfecto(): ?string
    {
        return $this->Zona_Efecto;
    }

    public function setZonaEfecto(string $Zona_Efecto): static
    {
        $this->Zona_Efecto = $Zona_Efecto;

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
