<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé', groups: ['Default', 'registration'])]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Verrouillage et sécurité
    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $failedLoginAttempts = 0;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $lockedUntil = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $lastActivityAt = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $lastLoginAt = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire', groups: ['Default', 'registration'])]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le nom doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères',
        groups: ['Default', 'registration']
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le prénom est obligatoire', groups: ['Default', 'registration'])]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le prénom doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le prénom ne peut pas dépasser {{ limit }} caractères',
        groups: ['Default', 'registration']
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'L\'email est obligatoire', groups: ['Default', 'registration'])]
    #[Assert\Email(message: 'L\'email {{ value }} n\'est pas valide', groups: ['Default', 'registration'])]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $password = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateurs')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le rôle est obligatoire', groups: ['Default', 'admin'])]
    private ?Role $role = null;

    #[ORM\Column]
    private ?bool $actif = true;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $oauthProvider = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $oauthId = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $avatar = null;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: PasswordResetToken::class, cascade: ['remove'])]
    private Collection $passwordResetTokens;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: PasswordHistory::class, cascade: ['remove'])]
    private Collection $passwordHistory;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->passwordResetTokens = new ArrayCollection();
        $this->passwordHistory = new ArrayCollection();
        $this->lastActivityAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): static
    {
        $this->role = $role;
        return $this;
    }

    public function isActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): static
    {
        $this->actif = $actif;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getNomComplet(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function getOauthProvider(): ?string
    {
        return $this->oauthProvider;
    }

    public function setOauthProvider(?string $oauthProvider): static
    {
        $this->oauthProvider = $oauthProvider;
        return $this;
    }

    public function getOauthId(): ?string
    {
        return $this->oauthId;
    }

    public function setOauthId(?string $oauthId): static
    {
        $this->oauthId = $oauthId;
        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;
        return $this;
    }


    // Méthodes requises par UserInterface
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = [];
        if ($this->role) {
            // Normaliser le nom du rôle en majuscules et remplacer les espaces
            $roleName = strtoupper(str_replace(' ', '_', $this->role->getNom()));
            $roles[] = 'ROLE_' . $roleName;
        }
        // Toujours ajouter ROLE_USER comme rôle de base
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function eraseCredentials(): void
    {
        // Si vous stockez des données temporaires sensibles sur l'utilisateur, effacez-les ici
    }

    /**
     * @return Collection<int, PasswordResetToken>
     */
    public function getPasswordResetTokens(): Collection
    {
        return $this->passwordResetTokens;
    }

    public function addPasswordResetToken(PasswordResetToken $token): static
    {
        if (!$this->passwordResetTokens->contains($token)) {
            $this->passwordResetTokens->add($token);
            $token->setUtilisateur($this);
        }
        return $this;
    }

    public function removePasswordResetToken(PasswordResetToken $token): static
    {
        if ($this->passwordResetTokens->removeElement($token)) {
            if ($token->getUtilisateur() === $this) {
                $token->setUtilisateur(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, PasswordHistory>
     */
    public function getPasswordHistory(): Collection
    {
        return $this->passwordHistory;
    }

    public function addPasswordHistory(PasswordHistory $history): static
    {
        if (!$this->passwordHistory->contains($history)) {
            $this->passwordHistory->add($history);
            $history->setUtilisateur($this);
        }
        return $this;
    }

    public function removePasswordHistory(PasswordHistory $history): static
    {
        if ($this->passwordHistory->removeElement($history)) {
            if ($history->getUtilisateur() === $this) {
                $history->setUtilisateur(null);
            }
        }
        return $this;
    }

    // Gestion du verrouillage et activité
    public function getFailedLoginAttempts(): int
    {
        return $this->failedLoginAttempts;
    }

    public function incrementFailedLoginAttempts(): static
    {
        $this->failedLoginAttempts++;
        return $this;
    }

    public function resetFailedLoginAttempts(): static
    {
        $this->failedLoginAttempts = 0;
        return $this;
    }

    public function getLockedUntil(): ?\DateTimeImmutable
    {
        return $this->lockedUntil;
    }

    public function setLockedUntil(?\DateTimeImmutable $until): static
    {
        $this->lockedUntil = $until;
        return $this;
    }

    public function isLocked(): bool
    {
        return $this->lockedUntil !== null && $this->lockedUntil > new \DateTimeImmutable();
    }

    public function getLastActivityAt(): ?\DateTimeImmutable
    {
        return $this->lastActivityAt;
    }

    public function setLastActivityAt(?\DateTimeImmutable $dt): static
    {
        $this->lastActivityAt = $dt;
        return $this;
    }

    public function getLastLoginAt(): ?\DateTimeImmutable
    {
        return $this->lastLoginAt;
    }

    public function setLastLoginAt(?\DateTimeImmutable $dt): static
    {
        $this->lastLoginAt = $dt;
        return $this;
    }
}
