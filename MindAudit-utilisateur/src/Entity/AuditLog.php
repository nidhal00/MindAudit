<?php

namespace App\Entity;

use App\Repository\AuditLogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Ulid;

#[ORM\Entity(repositoryClass: AuditLogRepository::class)]
#[ORM\Table(name: 'audit_log')]
class AuditLog
{
    #[ORM\Id]
    #[ORM\Column(type: Types::STRING, length: 26)]
    private ?string $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: Types::STRING, length: 100)]
    private string $action;

    #[ORM\Column(type: Types::STRING, length: 100, nullable: true)]
    private ?string $entity = null;

    #[ORM\Column(type: Types::STRING, length: 64, nullable: true)]
    private ?string $entityId = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $details = null;

    #[ORM\Column(type: Types::STRING, length: 45, nullable: true)]
    private ?string $ipAddress = null;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    private ?string $userAgent = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->id = (string) new Ulid();
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?string { return $this->id; }

    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $u): static { $this->utilisateur = $u; return $this; }

    public function getAction(): string { return $this->action; }
    public function setAction(string $a): static { $this->action = $a; return $this; }

    public function getEntity(): ?string { return $this->entity; }
    public function setEntity(?string $e): static { $this->entity = $e; return $this; }

    public function getEntityId(): ?string { return $this->entityId; }
    public function setEntityId(?string $id): static { $this->entityId = $id; return $this; }

    public function getDetails(): ?array { return $this->details; }
    public function setDetails(?array $d): static { $this->details = $d; return $this; }

    public function getIpAddress(): ?string { return $this->ipAddress; }
    public function setIpAddress(?string $ip): static { $this->ipAddress = $ip; return $this; }

    public function getUserAgent(): ?string { return $this->userAgent; }
    public function setUserAgent(?string $ua): static { $this->userAgent = $ua; return $this; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
}
