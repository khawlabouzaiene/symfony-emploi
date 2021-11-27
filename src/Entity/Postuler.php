<?php

namespace App\Entity;

use App\Repository\PostulerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostulerRepository::class)
 */
class Postuler
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Offredemploi::class, mappedBy="postuler")
     */
    private $offredemplois;

   

   

    /**
     * @ORM\ManyToOne(targetEntity=Offredemploi::class, inversedBy="postulers")
     */
    private $offredemploi;

    /**
     * @ORM\ManyToOne(targetEntity=Recruteur::class, inversedBy="postulers")
     */
    private $recruteur;

    /**
     * @ORM\OneToMany(targetEntity=Recruteur::class, mappedBy="postuler")
     */
    private $recruteurs;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="postuler")
     */
    private $user;

  

    

    public function __construct()
    {
        $this->offredemplois = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->recruteurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $offredemploi->setPostuler($this);
        }

        return $this;
    }

    public function removeOffredemploi(Offredemploi $offredemploi): self
    {
        if ($this->offredemplois->removeElement($offredemploi)) {
            // set the owning side to null (unless already changed)
            if ($offredemploi->getPostuler() === $this) {
                $offredemploi->setPostuler(null);
            }
        }

        return $this;
    }

   
   

    public function getOffredemploi(): ?Offredemploi
    {
        return $this->offredemploi;
    }

    public function setOffredemploi(?Offredemploi $offredemploi): self
    {
        $this->offredemploi = $offredemploi;

        return $this;
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

    /**
     * @return Collection|Recruteur[]
     */
    public function getRecruteurs(): Collection
    {
        return $this->recruteurs;
    }

    public function addRecruteur(Recruteur $recruteur): self
    {
        if (!$this->recruteurs->contains($recruteur)) {
            $this->recruteurs[] = $recruteur;
            $recruteur->setPostuler($this);
        }

        return $this;
    }

    public function removeRecruteur(Recruteur $recruteur): self
    {
        if ($this->recruteurs->removeElement($recruteur)) {
            // set the owning side to null (unless already changed)
            if ($recruteur->getPostuler() === $this) {
                $recruteur->setPostuler(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
