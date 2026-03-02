<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EntrepriseRepository::class)]
#[UniqueEntity(fields: ['matriculeFiscale'], message: 'Cette matricule fiscale est déjà utilisée.')]
#[ORM\HasLifecycleCallbacks]
class Entreprise
{
    public const TAILLE_SMALL = 'small';
    public const TAILLE_MEDIUM = 'medium';
    public const TAILLE_LARGE = 'large';

    public const TAILLES = [self::TAILLE_SMALL, self::TAILLE_MEDIUM, self::TAILLE_LARGE];
    
    public const STATUT_EN_ATTENTE = 'en_attente';
    public const STATUT_VALIDE = 'valide';
    public const STATUT_REJETE = 'rejete';
    
    public const STATUTS = [self::STATUT_EN_ATTENTE, self::STATUT_VALIDE, self::STATUT_REJETE];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire.')]
    #[Assert\Length(max: 150, maxMessage: 'Le nom ne doit pas dépasser {{ limit }} caractères.')]
    private ?string $nom = null;

    #[ORM\Column(length: 50, unique: true)]
    #[Assert\NotBlank(message: 'La matricule fiscale est obligatoire.')]
    #[Assert\Length(max: 50, maxMessage: 'La matricule fiscale ne doit pas dépasser {{ limit }} caractères.')]
    #[Assert\Regex(
        pattern: '/^[0-9]{7}\/[A-Z]\/[A-Z]\/[A-Z]\/[0-9]{3}$/',
        message: 'Le format du matricule fiscal est invalide (ex: 1234567/A/B/C/000).'
    )]
    private ?string $matriculeFiscale = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Le secteur ne doit pas dépasser {{ limit }} caractères.')]
    private ?string $secteur = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Choice(choices: self::TAILLES, message: 'Taille invalide (small, medium, large).')]
    private ?string $taille = null;

    #[ORM\Column(length: 80, nullable: true)]
    #[Assert\Length(max: 80, maxMessage: 'Le pays ne doit pas dépasser {{ limit }} caractères.')]
    private ?string $pays = null;

    #[ORM\Column(length: 150, nullable: false)]
    #[Assert\NotBlank(message: 'L\'email est obligatoire.')]
    #[Assert\Email(message: 'Format d\'email invalide.')]
    #[Assert\Length(max: 150, maxMessage: 'L\'email ne doit pas dépasser {{ limit }} caractères.')]
    private ?string $email = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Regex(
        pattern: '/^[+]?[0-9\s\-]{8,20}$/',
        message: 'Format de téléphone invalide (8 à 20 chiffres, espaces ou tirets).'
    )]
    #[Assert\Length(max: 20)]
    private ?string $telephone = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: self::STATUTS, message: 'Statut invalide.')]
    private ?string $statut = self::STATUT_EN_ATTENTE;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $longitude = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\LessThanOrEqual('today', message: 'La date de création ne peut pas être dans le futur.')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 5, notInRangeMessage: 'La note doit être entre 0 et 5.')]
    private ?int $rating = null;

    #[ORM\Column(length: 20, unique: true, nullable: true)]
    private ?string $accessCode = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateAuditDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateAuditFin = null;

    #[ORM\OneToMany(mappedBy: 'entreprise', targetEntity: Document::class)]
    private Collection $documents;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
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

    public function getMatriculeFiscale(): ?string
    {
        return $this->matriculeFiscale;
    }

    public function setMatriculeFiscale(string $matriculeFiscale): static
    {
        $this->matriculeFiscale = $matriculeFiscale;
        return $this;
    }

    public function getSecteur(): ?string
    {
        return $this->secteur;
    }

    public function setSecteur(?string $secteur): static
    {
        $this->secteur = $secteur;
        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): static
    {
        $this->taille = $taille;
        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): static
    {
        $this->pays = $pays;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
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

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): static
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): static
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;
        return $this;
    }

    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    public function setAccessCode(?string $accessCode): static
    {
        $this->accessCode = $accessCode;
        return $this;
    }



    public function __toString(): string
    {
        return ($this->nom ?? '') . ' (' . ($this->matriculeFiscale ?? '') . ')';
    }

    public function getDateAuditDebut(): ?\DateTimeInterface
    {
        return $this->dateAuditDebut;
    }

    public function setDateAuditDebut(?\DateTimeInterface $dateAuditDebut): static
    {
        $this->dateAuditDebut = $dateAuditDebut;
        return $this;
    }

    public function getDateAuditFin(): ?\DateTimeInterface
    {
        return $this->dateAuditFin;
    }

    public function setDateAuditFin(?\DateTimeInterface $dateAuditFin): static
    {
        $this->dateAuditFin = $dateAuditFin;
        return $this;
    }

    /**
     * @return Collection<int, Document>
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Document $document): static
    {
        if (!$this->documents->contains($document)) {
            $this->documents->add($document);
            $document->setEntreprise($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): static
    {
        if ($this->documents->removeElement($document)) {
            if ($document->getEntreprise() === $this) {
                $document->setEntreprise(null);
            }
        }

        return $this;
    }
}
