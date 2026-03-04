<?php

namespace App\Entity;

use App\Repository\PasswordHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Ulid;

#[ORM\Entity(repositoryClass: PasswordHistoryRepository::class)]
#[ORM\Table(name: 'password_history')]
class PasswordHistory
{
    #[ORM\Id]
    #[ORM\Column(type: Types::STRING, length: 26)]
    private ?string $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'passwordHistory')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: Types::STRING)]
    private ?string $hashedPassword = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $changedAt = null;

    #[ORM\Column(type: Types::STRING, length: 100, nullable: true)]
    private ?string $changeReason = null; // 'manual', 'forgotten', 'admin_reset'

    #[ORM\Column(type: Types::STRING, length: 45, nullable: true)]
    private ?string $ipAddress = null;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    private ?string $userAgent = null;

    public function __construct()
    {
        $this->id = (string) new Ulid();
        $this->changedAt = new \DateTimeImmutable();
    }

    public function getId(): ?string
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

    public function getHashedPassword(): ?string
    {
        return $this->hashedPassword;
    }

    public function setHashedPassword(string $hashedPassword): static
    {
        $this->hashedPassword = $hashedPassword;
        return $this;
    }

    public function getChangedAt(): ?\DateTimeImmutable
    {
        return $this->changedAt;
    }

    public function getChangeReason(): ?string
    {
        return $this->changeReason;
    }

    public function setChangeReason(?string $changeReason): static
    {
        $this->changeReason = $changeReason;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): static
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): static
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    public function getReasonLabel(): string
    {
        return match($this->changeReason) {
            'manual' => 'Changement manuel',
            'forgotten' => 'Réinitialisation (mot de passe oublié)',
            'admin_reset' => 'Réinitialisation par administrateur',
            default => 'Changement de mot de passe'
        };
    }
}
