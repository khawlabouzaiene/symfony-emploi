<?php

namespace App\Entity;

use App\Repository\PubliciteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PubliciteRepository::class)
 */
class Publicite
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
    private $image;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Offredemploi::class, mappedBy="publicite")
     */
    private $offredemplois;

    /**
     * @ORM\ManyToMany(targetEntity=Offredemploi::class, inversedBy="publicites")
     */
    private $offredemploi;

    /**
     * @ORM\ManyToOne(targetEntity=Recruteur::class, inversedBy="publicites")
     */
    private $recruteur;

    public function __construct()
    {
        $this->offredemplois = new ArrayCollection();
        $this->offredemploi = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
            $offredemploi->setPublicite($this);
        }

        return $this;
    }

    public function removeOffredemploi(Offredemploi $offredemploi): self
    {
        if ($this->offredemplois->removeElement($offredemploi)) {
            // set the owning side to null (unless already changed)
            if ($offredemploi->getPublicite() === $this) {
                $offredemploi->setPublicite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Offredemploi[]
     */
    public function getOffredemploi(): Collection
    {
        return $this->offredemploi;
    }

    public function getRecruteur(): ?Recruteur
    {
        return $this->recruteur;
    }

    public function setRecruteur(?Recruteur $recruteur): self
    {
        $this->recruteur = $recruteur;

        return $this;
    }
}
