<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity=Offredemploi::class, inversedBy="admins")
     */
    private $Offredemploi;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="admin")
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity=Recruteur::class, mappedBy="admin")
     */
    private $recruteurs;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->recruteurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getOffredemploi(): ?Offredemploi
    {
        return $this->Offredemploi;
    }

    public function setOffredemploi(?Offredemploi $Offredemploi): self
    {
        $this->Offredemploi = $Offredemploi;

        return $this;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setAdmin($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getAdmin() === $this) {
                $commentaire->setAdmin(null);
            }
        }

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
            $recruteur->setAdmin($this);
        }

        return $this;
    }

    public function removeRecruteur(Recruteur $recruteur): self
    {
        if ($this->recruteurs->removeElement($recruteur)) {
            // set the owning side to null (unless already changed)
            if ($recruteur->getAdmin() === $this) {
                $recruteur->setAdmin(null);
            }
        }

        return $this;
    }
}
