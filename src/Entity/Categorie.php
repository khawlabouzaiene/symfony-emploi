<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Offredemploi::class, mappedBy="categorie")
     */
    private $offredemplois;

    public function __construct()
    {
        $this->offredemplois = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Offredemploi[]
     */
    public function getOffredemplois(): Collection
    {
        return $this->offredemplois;
    }

    public function addOffredemploi(Offredemploi $offredemploi): self
    {
        if (!$this->offredemplois->contains($offredemploi)) {
            $this->offredemplois[] = $offredemploi;
            $offredemploi->setCategorie($this);
        }

        return $this;
    }

    public function removeOffredemploi(Offredemploi $offredemploi): self
    {
        if ($this->offredemplois->removeElement($offredemploi)) {
            // set the owning side to null (unless already changed)
            if ($offredemploi->getCategorie() === $this) {
                $offredemploi->setCategorie(null);
            }
        }

        return $this;
    }
}
