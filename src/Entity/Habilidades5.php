<?php

namespace App\Entity;

use App\Repository\HabilidadesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabilidadesRepository::class)]
class Habilidades5
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 2500)]
    private ?string $Descripcion = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    #[ORM\Column(length: 255)]
    private ?string $Origen_ID = null;

    #[ORM\Column]
    private ?int $OrigenNivel = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre2 = null;

    #[ORM\Column(length: 2500)]
    private ?string $Descripcion2 = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor2 = null;

    #[ORM\Column]
    private ?bool $Validado2 = null;

    #[ORM\Column(length: 255)]
    private ?string $Origen_ID2 = null;

    #[ORM\Column]
    private ?int $OrigenNivel2 = null;


    #[ORM\Column(length: 200)]
    private ?string $Nombre3 = null;

    #[ORM\Column(length: 2500)]
    private ?string $Descripcion3 = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor3 = null;

    #[ORM\Column]
    private ?bool $Validado3 = null;

    #[ORM\Column(length: 255)]
    private ?string $Origen_ID3 = null;

    #[ORM\Column]
    private ?int $OrigenNivel3 = null;


    #[ORM\Column(length: 200)]
    private ?string $Nombre4 = null;

    #[ORM\Column(length: 2500)]
    private ?string $Descripcion4 = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor4 = null;

    #[ORM\Column]
    private ?bool $Validado4 = null;

    #[ORM\Column(length: 255)]
    private ?string $Origen_ID4 = null;

    #[ORM\Column]
    private ?int $OrigenNivel4 = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre5 = null;

    #[ORM\Column(length: 2500)]
    private ?string $Descripcion5 = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor5 = null;

    #[ORM\Column]
    private ?bool $Validado5 = null;

    #[ORM\Column(length: 255)]
    private ?string $Origen_ID5 = null;

    #[ORM\Column]
    private ?int $OrigenNivel5 = null;



    public function __construct()
    {
        $this->origen_id_clase = new ArrayCollection();
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

    public function getNombre2(): ?string
    {
        return $this->Nombre2;
    }

    public function setNombre2(string $Nombre): static
    {
        $this->Nombre2 = $Nombre;

        return $this;
    }

   

    public function getNombre3(): ?string
    {
        return $this->Nombre3;
    }

    public function setNombre3(string $Nombre): static
    {
        $this->Nombre3 = $Nombre;

        return $this;
    }

    public function getNombre4(): ?string
    {
        return $this->Nombre4;
    }

    public function setNombre4(string $Nombre): static
    {
        $this->Nombre4 = $Nombre;

        return $this;
    }

    public function getNombre5(): ?string
    {
        return $this->Nombre5;
    }

    public function setNombre5(string $Nombre): static
    {
        $this->Nombre5 = $Nombre;

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

    public function getDescripcion2(): ?string
    {
        return $this->Descripcion2;
    }

    public function setDescripcion2(string $Descripción): static
    {
        $this->Descripcion2 = $Descripción;

        return $this;
    }

    public function getDescripcion3(): ?string
    {
        return $this->Descripcion3;
    }

    public function setDescripcion3(string $Descripción): static
    {
        $this->Descripcion3 = $Descripción;

        return $this;
    }

    public function getDescripcion4(): ?string
    {
        return $this->Descripcion4;
    }

    public function setDescripcion4(string $Descripción): static
    {
        $this->Descripcion4 = $Descripción;

        return $this;
    }

    public function getDescripcion5(): ?string
    {
        return $this->Descripcion5;
    }

    public function setDescripcion5(string $Descripción): static
    {
        $this->Descripcion5 = $Descripción;

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

    public function getAutor2(): ?string
    {
        return $this->Autor2;
    }

    public function setAutor2(string $Autor): static
    {
        $this->Autor2 = $Autor;

        return $this;
    }

    public function getAutor3(): ?string
    {
        return $this->Autor3;
    }

    public function setAutor3(string $Autor): static
    {
        $this->Autor3 = $Autor;

        return $this;
    }

    public function getAutor4(): ?string
    {
        return $this->Autor4;
    }

    public function setAutor4(string $Autor): static
    {
        $this->Autor4 = $Autor;

        return $this;
    }

    public function getAutor5(): ?string
    {
        return $this->Autor5;
    }

    public function setAutor5(string $Autor): static
    {
        $this->Autor5 = $Autor;

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

    public function isValidado2(): ?bool
    {
        return $this->Validado2;
    }

    public function setValidado2(bool $Validado): static
    {
        $this->Validado2 = $Validado;

        return $this;
    }

    public function isValidado3(): ?bool
    {
        return $this->Validado3;
    }

    public function setValidado3(bool $Validado): static
    {
        $this->Validado3 = $Validado;

        return $this;
    }

    public function isValidado4(): ?bool
    {
        return $this->Validado4;
    }

    public function setValidado4(bool $Validado): static
    {
        $this->Validado4 = $Validado;

        return $this;
    }

    public function isValidado5(): ?bool
    {
        return $this->Validado5;
    }

    public function setValidado5(bool $Validado): static
    {
        $this->Validado5 = $Validado;

        return $this;
    }

    public function getOrigenID(): ?string
    {
        return $this->Origen_ID;
    }

    public function setOrigenID(string $Origen_ID): static
    {
        $this->Origen_ID = $Origen_ID;

        return $this;
    }

    public function getOrigenID2(): ?string
    {
        return $this->Origen_ID2;
    }

    public function setOrigenID2(string $Origen_ID): static
    {
        
        $this->Origen_ID2 = $Origen_ID;

        return $this;
    }

    public function getOrigenID3(): ?string
    {
        return $this->Origen_ID3;
    }

    public function setOrigenID3(string $Origen_ID): static
    {
        $this->Origen_ID3 = $Origen_ID;

        return $this;
    }

    public function getOrigenID4(): ?string
    {
        return $this->Origen_ID4;
    }

    public function setOrigenID4(string $Origen_ID): static
    {
        $this->Origen_ID4 = $Origen_ID;

        return $this;
    }

    public function getOrigenID5(): ?string
    {
        return $this->Origen_ID5;
    }

    public function setOrigenID5(string $Origen_ID): static
    {
        $this->Origen_ID5 = $Origen_ID;

        return $this;
    }

    public function getOrigenNivel(): ?int
    {
        return $this->OrigenNivel;
    }

    public function setOrigenNivel(int $origen_nivel): static
    {
        $this->OrigenNivel = $origen_nivel;

        return $this;
    }

    public function getOrigenNivel2(): ?int
    {
        return $this->OrigenNivel2;
    }

    public function setOrigenNivel2(int $origen_nivel): static
    {
        $this->OrigenNivel2 = $origen_nivel;

        return $this;
    }

    public function getOrigenNivel3(): ?int
    {
        return $this->OrigenNivel3;
    }

    public function setOrigenNivel3(int $origen_nivel): static
    {
        $this->OrigenNivel3 = $origen_nivel;

        return $this;
    }

    public function getOrigenNivel4(): ?int
    {
        return $this->OrigenNivel4;
    }

    public function setOrigenNivel4(int $origen_nivel): static
    {
        $this->OrigenNivel4 = $origen_nivel;

        return $this;
    }

    public function getOrigenNivel5(): ?int
    {
        return $this->OrigenNivel5;
    }

    public function setOrigenNivel5(int $origen_nivel): static
    {
        $this->OrigenNivel5 = $origen_nivel;

        return $this;
    }


}
