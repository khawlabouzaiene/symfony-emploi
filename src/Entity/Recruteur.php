<?php

namespace App\Entity;

use App\Repository\RecruteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecruteurRepository::class)
 */
class Recruteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Offredemploi::class, mappedBy="recruteur")
     */
    private $offredemplois;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="recruteur")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Postuler::class, mappedBy="recruteur")
     */
    private $postulers;

    /**
     * @ORM\OneToMany(targetEntity=Publicite::class, mappedBy="recruteur")
     */
    private $publicites;

    /**
     * @ORM\ManyToOne(targetEntity=Admin::class, inversedBy="recruteurs")
     */
    private $admin;

    /**
     * @ORM\ManyToOne(targetEntity=Postuler::class, inversedBy="recruteurs")
     */
    private $postuler;

    /**
     * @ORM\ManyToMany(targetEntity=Offredemploi::class, inversedBy="recruteurs")
     */
    private $offredemploi;

    public function __construct()
    {
        $this->offredemplois = new ArrayCollection();
        $this->postulers = new ArrayCollection();
        $this->publicites = new ArrayCollection();
        $this->offredemploi = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?int
    {
        return $this->nom;
    }

    public function setNom(int $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getSecteur(): ?string
    {
        return $this->secteur;
    }

    public function setSecteur(string $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
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
            $offredemploi->setRecruteur($this);
        }

        return $this;
    }

    public function removeOffredemploi(Offredemploi $offredemploi): self
    {
        if ($this->offredemplois->removeElement($offredemploi)) {
            // set the owning side to null (unless already changed)
            if ($offredemploi->getRecruteur() === $this) {
                $offredemploi->setRecruteur(null);
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

    /**
     * @return Collection|Postuler[]
     */
    public function getPostulers(): Collection
    {
        return $this->postulers;
    }

    public function addPostuler(Postuler $postuler): self
    {
        if (!$this->postulers->contains($postuler)) {
            $this->postulers[] = $postuler;
            $postuler->setRecruteur($this);
        }

        return $this;
    }

    public function removePostuler(Postuler $postuler): self
    {
        if ($this->postulers->removeElement($postuler)) {
            // set the owning side to null (unless already changed)
            if ($postuler->getRecruteur() === $this) {
                $postuler->setRecruteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Publicite[]
     */
    public function getPublicites(): Collection
    {
        return $this->publicites;
    }

    public function addPublicite(Publicite $publicite): self
    {
        if (!$this->publicites->contains($publicite)) {
            $this->publicites[] = $publicite;
            $publicite->setRecruteur($this);
        }

        return $this;
    }

    public function removePublicite(Publicite $publicite): self
    {
        if ($this->publicites->removeElement($publicite)) {
            // set the owning side to null (unless already changed)
            if ($publicite->getRecruteur() === $this) {
                $publicite->setRecruteur(null);
            }
        }

        return $this;
    }

    public function getAdmin(): ?Admin
    {
        return $this->admin;
    }

    public function setAdmin(?Admin $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getPostuler(): ?Postuler
    {
        return $this->postuler;
    }

    public function setPostuler(?Postuler $postuler): self
    {
        $this->postuler = $postuler;

        return $this;
    }

    /**
     * @return Collection|Offredemploi[]
     */
    public function getOffredemploi(): Collection
    {
        return $this->offredemploi;
    }
}
