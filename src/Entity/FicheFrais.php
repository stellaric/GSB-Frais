<?php

namespace App\Entity;

use App\Repository\FicheFraisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FicheFraisRepository::class)
 */
class FicheFrais
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="json")
     */
    private $mois = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $nbJustificatifs;

    /**
     * @ORM\Column(type="float")
     */
    private $montantValide;

    /**
     * @ORM\Column(type="date")
     */
    private $dateModif;

    /**
     * @ORM\ManyToOne(targetEntity=LigneFraisHorsForfait::class, inversedBy="ficheFrais")
     */
    private $ligneFraisHorsForfait;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="ficheFrais")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity=LigneFraisForfait::class, inversedBy="ficheFrais")
     */
    private $ligneFraisForfait;

    /**
     * @ORM\ManyToOne(targetEntity=Visiteur::class, inversedBy="ficheFrais")
     */
    private $visiteur;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="fichefrais")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMois(): ?array
    {
        
        return $this->mois;
        $mois[]='Janvier';'Mars';
        
    }

    public function setMois(array $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getNbJustificatifs(): ?int
    {
        return $this->nbJustificatifs;
    }

    public function setNbJustificatifs(int $nbJustificatifs): self
    {
        $this->nbJustificatifs = $nbJustificatifs;

        return $this;
    }

    public function getMontantValide(): ?float
    {
        return $this->montantValide;
    }

    public function setMontantValide(float $montantValide): self
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getLigneFraisHorsForfait(): ?LigneFraisHorsForfait
    {
        return $this->ligneFraisHorsForfait;
    }

    public function setLigneFraisHorsForfait(?LigneFraisHorsForfait $ligneFraisHorsForfait): self
    {
        $this->ligneFraisHorsForfait = $ligneFraisHorsForfait;

        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->etat;
    }

    public function setEtat(?Etat $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getLigneFraisForfait(): ?LigneFraisForfait
    {
        return $this->ligneFraisForfait;
    }

    public function setLigneFraisForfait(?LigneFraisForfait $ligneFraisForfait): self
    {
        $this->ligneFraisForfait = $ligneFraisForfait;

        return $this;
    }

    public function getVisiteur(): ?Visiteur
    {
        return $this->visiteur;
    }

    public function setVisiteur(?Visiteur $visiteur): self
    {
        $this->visiteur = $visiteur;

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
