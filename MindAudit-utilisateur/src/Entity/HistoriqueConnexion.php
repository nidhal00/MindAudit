<?php

namespace App\Entity;

use App\Repository\HistoriqueConnexionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoriqueConnexionRepository::class)]
class HistoriqueConnexion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $emailTente = null;

    #[ORM\Column(length: 45)]
    private ?string $ipAddress = null;

    #[ORM\Column(length: 20)]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $dateTentative = null;

    public function __construct()
    {
        // Forcer le fuseau horaire local (GMT+1) pour avoir la bonne heure
        $this->dateTentative = new \DateTimeImmutable('now', new \DateTimeZone('Africa/Tunis'));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getEmailTente(): ?string
    {
        return $this->emailTente;
    }

    public function setEmailTente(string $emailTente): static
    {
        $this->emailTente = $emailTente;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): static
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDateTentative(): ?\DateTimeImmutable
    {
        return $this->dateTentative;
    }

    public function setDateTentative(\DateTimeImmutable $dateTentative): static
    {
        $this->dateTentative = $dateTentative;

        return $this;
    }
}
