<?php

namespace App\Entity;

use App\Repository\VehiculesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiculesRepository::class)]
class Vehicules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $titre = null;

    #[ORM\Column(length: 50)]
    private ?string $marque = null;

    #[ORM\Column(length: 50)]
    private ?string $modele = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column]
    private ?int $prix_journee = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_enregistrement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPrixJournee(): ?int
    {
        return $this->prix_journee;
    }

    public function setPrixJournee(int $prix_journee): static
    {
        $this->prix_journee = $prix_journee;

        return $this;
    }

    public function getDateEnregistrement(): ?\DateTimeInterface
    {
        return $this->date_enregistrement;
    }

    public function setDateEnregistrement(?\DateTimeInterface $date_enregistrement): static
    {
        $this->date_enregistrement = $date_enregistrement;

        return $this;
    }
}
