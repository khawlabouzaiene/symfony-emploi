<?php

namespace App\Entity;

use App\Repository\OffredemploiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OffredemploiRepository::class)
 */
class Offredemploi
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
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $specialite;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Admin::class, mappedBy="Offredemploi")
     */
    private $admins;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="offredemplois")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity=Postuler::class, inversedBy="offredemplois")
     */
    private $postuler;

    /**
     * @ORM\ManyToOne(targetEntity=Recruteur::class, inversedBy="offredemplois")
     */
    private $recruteur;

    /**
     * @ORM\ManyToOne(targetEntity=Publicite::class, inversedBy="offredemplois")
     */
    private $publicite;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="offredemplois")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity=Evaluation::class, inversedBy="offredemplois")
     */
    private $evaluation;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="offredemploi")
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity=Postuler::class, mappedBy="offredemploi")
     */
    private $postulers;

    /**
     * @ORM\ManyToMany(targetEntity=Publicite::class, mappedBy="offredemploi")
     */
    private $publicites;

    /**
     * @ORM\ManyToMany(targetEntity=Recruteur::class, mappedBy="offredemploi")
     */
    private $recruteurs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function __construct()
    {
        $this->admins = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->postulers = new ArrayCollection();
        $this->publicites = new ArrayCollection();
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

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

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
     * @return Collection|Admin[]
     */
    public function getAdmins(): Collection
    {
        return $this->admins;
    }

    public function addAdmin(Admin $admin): self
    {
        if (!$this->admins->contains($admin)) {
            $this->admins[] = $admin;
            $admin->setOffredemploi($this);
        }

        return $this;
    }

    public function removeAdmin(Admin $admin): self
    {
        if ($this->admins->removeElement($admin)) {
            // set the owning side to null (unless already changed)
            if ($admin->getOffredemploi() === $this) {
                $admin->setOffredemploi(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

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

    public function getRecruteur(): ?Recruteur
    {
        return $this->recruteur;
    }

    public function setRecruteur(?Recruteur $recruteur): self
    {
        $this->recruteur = $recruteur;

        return $this;
    }

    public function getPublicite(): ?Publicite
    {
        return $this->publicite;
    }

    public function setPublicite(?Publicite $publicite): self
    {
        $this->publicite = $publicite;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getEvaluation(): ?Evaluation
    {
        return $this->evaluation;
    }

    public function setEvaluation(?Evaluation $evaluation): self
    {
        $this->evaluation = $evaluation;

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
            $commentaire->setOffredemploi($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getOffredemploi() === $this) {
                $commentaire->setOffredemploi(null);
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

    public function addPostuler(Postuler $postuler): self
    {
        if (!$this->postulers->contains($postuler)) {
            $this->postulers[] = $postuler;
            $postuler->setOffredemploi($this);
        }

        return $this;
    }

    public function removePostuler(Postuler $postuler): self
    {
        if ($this->postulers->removeElement($postuler)) {
            // set the owning side to null (unless already changed)
            if ($postuler->getOffredemploi() === $this) {
                $postuler->setOffredemploi(null);
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
            $publicite->addOffredemploi($this);
        }

        return $this;
    }

    public function removePublicite(Publicite $publicite): self
    {
        if ($this->publicites->removeElement($publicite)) {
            $publicite->removeOffredemploi($this);
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
            $recruteur->addOffredemploi($this);
        }

        return $this;
    }

    public function removeRecruteur(Recruteur $recruteur): self
    {
        if ($this->recruteurs->removeElement($recruteur)) {
            $recruteur->removeOffredemploi($this);
        }

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
}
