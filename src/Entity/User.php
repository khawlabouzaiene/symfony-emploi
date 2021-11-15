<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveau;

    /**
     * @ORM\OneToMany(targetEntity=Offredemploi::class, mappedBy="User")
     */
    private $offredemplois;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="offredemploi")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="user")
     */
    private $offredemploi;

    /**
     * @ORM\ManyToMany(targetEntity=Postuler::class, inversedBy="users")
     */
    private $postuler;

    /**
     * @ORM\OneToMany(targetEntity=Recruteur::class, mappedBy="user")
     */
    private $recruteur;

    /**
     * @ORM\OneToMany(targetEntity=Evaluation::class, mappedBy="user")
     */
    private $evaluation;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="user")
     */
    private $commentaire;

    /**
     * @ORM\OneToMany(targetEntity=Postuler::class, mappedBy="user")
     */
    private $postulers;

    public function __construct()
    {
        $this->offredemplois = new ArrayCollection();
        $this->offredemploi = new ArrayCollection();
        $this->postuler = new ArrayCollection();
        $this->recruteur = new ArrayCollection();
        $this->evaluation = new ArrayCollection();
        $this->commentaire = new ArrayCollection();
        $this->postulers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getDateNaissance(): ?string
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(string $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

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

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

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
            $offredemploi->setUser($this);
        }

        return $this;
    }

    public function removeOffredemploi(Offredemploi $offredemploi): self
    {
        if ($this->offredemplois->removeElement($offredemploi)) {
            // set the owning side to null (unless already changed)
            if ($offredemploi->getUser() === $this) {
                $offredemploi->setUser(null);
            }
        }

        return $this;
    }

    public function getUser(): ?self
    {
        return $this->user;
    }

    public function setUser(?self $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getOffredemploi(): Collection
    {
        return $this->offredemploi;
    }

    /**
     * @return Collection|Postuler[]
     */
    public function getPostuler(): Collection
    {
        return $this->postuler;
    }

    public function addPostuler(Postuler $postuler): self
    {
        if (!$this->postuler->contains($postuler)) {
            $this->postuler[] = $postuler;
        }

        return $this;
    }

    public function removePostuler(Postuler $postuler): self
    {
        $this->postuler->removeElement($postuler);

        return $this;
    }

    /**
     * @return Collection|Recruteur[]
     */
    public function getRecruteur(): Collection
    {
        return $this->recruteur;
    }

    public function addRecruteur(Recruteur $recruteur): self
    {
        if (!$this->recruteur->contains($recruteur)) {
            $this->recruteur[] = $recruteur;
            $recruteur->setUser($this);
        }

        return $this;
    }

    public function removeRecruteur(Recruteur $recruteur): self
    {
        if ($this->recruteur->removeElement($recruteur)) {
            // set the owning side to null (unless already changed)
            if ($recruteur->getUser() === $this) {
                $recruteur->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Evaluation[]
     */
    public function getEvaluation(): Collection
    {
        return $this->evaluation;
    }

    public function addEvaluation(Evaluation $evaluation): self
    {
        if (!$this->evaluation->contains($evaluation)) {
            $this->evaluation[] = $evaluation;
            $evaluation->setUser($this);
        }

        return $this;
    }

    public function removeEvaluation(Evaluation $evaluation): self
    {
        if ($this->evaluation->removeElement($evaluation)) {
            // set the owning side to null (unless already changed)
            if ($evaluation->getUser() === $this) {
                $evaluation->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaire(): Collection
    {
        return $this->commentaire;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaire->contains($commentaire)) {
            $this->commentaire[] = $commentaire;
            $commentaire->setUser($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaire->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getUser() === $this) {
                $commentaire->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Postuler[]
     */
    public function getPostulers(): Collection
    {
        return $this->postulers;
    }
}
