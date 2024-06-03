<?php

namespace App\Entity;

use App\Repository\ListaHechizosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaHechizosRepository::class)]
class ListaHechizos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clases $clase_id = null;

    #[ORM\ManyToMany(targetEntity: Hechizos::class)]
    private Collection $hechizo_id;

    public function __construct()
    {
        $this->hechizo_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClaseId(): ?Clases
    {
        return $this->clase_id;
    }

    public function setClaseId(Clases $clase_id): static
    {
        $this->clase_id = $clase_id;

        return $this;
    }

    /**
     * @return Collection<int, Hechizos>
     */
    public function getHechizoId(): Collection
    {
        return $this->hechizo_id;
    }

    public function addHechizoId(Hechizos $hechizoId): static
    {
        if (!$this->hechizo_id->contains($hechizoId)) {
            $this->hechizo_id->add($hechizoId);
        }

        return $this;
    }

    public function removeHechizoId(Hechizos $hechizoId): static
    {
        $this->hechizo_id->removeElement($hechizoId);

        return $this;
    }
}
