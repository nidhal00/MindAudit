<?php

namespace App\Entity;

use App\Entity\Entreprise;
use App\Repository\DocumentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DocumentRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[Vich\Uploadable]
class Document
{
    public const TYPE_ISO = 'ISO';
    public const TYPE_FISCAL = 'fiscal';
    public const TYPE_RH = 'RH';
    public const TYPE_FINANCIER = 'financier';

    public const TYPES = [self::TYPE_ISO, self::TYPE_FISCAL, self::TYPE_RH, self::TYPE_FINANCIER];

    public const STATUT_EN_ATTENTE = 'en_attente';
    public const STATUT_VALIDE = 'valide';
    public const STATUT_REJETE = 'rejete';

    public const STATUTS = [self::STATUT_EN_ATTENTE, self::STATUT_VALIDE, self::STATUT_REJETE];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Entreprise::class, inversedBy: 'documents')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'L\'entreprise est obligatoire.')]
    private ?Entreprise $entreprise = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: 'Le nom du document est obligatoire.')]
    #[Assert\Length(max: 150, maxMessage: 'Le nom ne doit pas dépasser {{ limit }} caractères.')]
    private ?string $nom = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'Le type de document est obligatoire.')]
    #[Assert\Choice(choices: self::TYPES, message: 'Type invalide (ISO, fiscal, RH, financier).')]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255, maxMessage: 'L\'URL ne doit pas dépasser {{ limit }} caractères.')]
    private ?string $url = null;

    #[Vich\UploadableField(mapping: 'documents', fileNameProperty: 'url')]
    private ?File $imageFile = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: self::STATUTS, message: 'Statut invalide (en_attente, valide, rejete).')]
    private ?string $statut = self::STATUT_EN_ATTENTE;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateUpload = null;

    #[ORM\Column(nullable: true)]
    private ?int $uploadedBy = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 100, notInRangeMessage: 'La note IA doit être entre 0 et 100.')]
    private ?int $noteIA = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 1, max: 5, notInRangeMessage: 'La note doit être entre 1 et 5.')]
    private ?int $rating = null;

    #[ORM\Column(nullable: true)]
    private ?array $analysisReport = null;

    public function __construct()
    {
    }

    #[ORM\PrePersist]
    public function setDateUploadValue(): void
    {
        $this->dateUpload = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): static
    {
        $this->entreprise = $entreprise;
        return $this;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            $this->dateUpload = new \DateTimeImmutable();
        }
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

    public function getDateUpload(): ?\DateTimeInterface
    {
        return $this->dateUpload;
    }

    public function setDateUpload(?\DateTimeInterface $dateUpload): static
    {
        $this->dateUpload = $dateUpload;
        return $this;
    }

    public function getUploadedBy(): ?int
    {
        return $this->uploadedBy;
    }

    public function setUploadedBy(?int $uploadedBy): static
    {
        $this->uploadedBy = $uploadedBy;
        return $this;
    }

    public function getNoteIA(): ?int
    {
        return $this->noteIA;
    }

    public function setNoteIA(?int $noteIA): static
    {
        $this->noteIA = $noteIA;
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

    public function __toString(): string
    {
        return ($this->nom ?? '') . ' (' . ($this->type ?? '') . ')';
    }

    public function getAnalysisReport(): ?array
    {
        return $this->analysisReport;
    }

    public function setAnalysisReport(?array $analysisReport): static
    {
        $this->analysisReport = $analysisReport;

        return $this;
    }
}
