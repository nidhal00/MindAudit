# MindAudit – Backend PHP (Sprint 0 & Sprint 1)

Backend web **Symfony 6.4** pour la gestion **Entreprise** et **Document** — **Sprint 0** (BDD + entités) et **Sprint 1** (CRUD + jointure + contrôle de saisie) uniquement.

## Prérequis

- **PHP 8.2** ou **8.3**
- **Composer 2.7+**
- **Symfony CLI** (recommandé)
- **MySQL 8.0** ou **MariaDB 10.11**

## Installation

```bash
cd backend-php
composer install
```

## Base de données

1. Créer la base (ou utiliser le script `../database/schema.sql`) :

```sql
CREATE DATABASE IF NOT EXISTS mindaudit_pidev CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. Configurer `.env` :

```env
# MySQL 8.0
DATABASE_URL="mysql://user:password@127.0.0.1:3306/mindaudit_pidev?serverVersion=8.0&charset=utf8mb4"

# MariaDB 10.11
DATABASE_URL="mysql://user:password@127.0.0.1:3306/mindaudit_pidev?serverVersion=10.11&charset=utf8mb4"
```

3. Créer le schéma avec Doctrine :

```bash
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:migrate
```

Ou synchroniser directement (développement) :

```bash
php bin/console doctrine:schema:update --force
```

## Lancer l’application

```bash
symfony server:start
# ou
php -S localhost:8000 -t public
```

Ouvrir : http://localhost:8000/entreprise (pas de page d’accueil `/` — entrée directe sur Entreprises ou Documents).

Voir la définition complète : [docs/SPRINTS.md](../docs/SPRINTS.md).

## Sprint 0 (livré)

- Environnement : PHP 8.2/8.3, Composer 2.7+, Symfony 6.4, MySQL 8.0 ou MariaDB 10.11.
- Base de données : schéma `database/schema.sql`, config `.env` (DATABASE_URL).
- Entités : `Entreprise` et `Document` avec tous les attributs et la jointure Document → Entreprise (ManyToOne).

## Sprint 1 (livré)

- **CRUD** Entreprise et Document (controllers, formulaires, templates).
- **Jointure** : liste des documents avec entreprise (`findAllWithEntreprise()`), formulaire document avec choix entreprise.
- **Contrôle de saisie** : contraintes de validation (attributs PHP 8) sur les entités + formulaires Symfony.

## Récapitulatif fonctionnel

### Entités

- **Entreprise**  
  Attributs : id, nom, matriculeFiscale (unique), secteur, taille (small/medium/large), pays, email, telephone, adresse, dateCreation, createdAt, updatedAt.  
  Relation : OneToMany vers Document.

- **Document**  
  Attributs : id, entreprise (ManyToOne), nom, type (ISO/fiscal/RH/financier), url, statut (en_attente/valide/rejete), dateUpload, uploadedBy.  
  Jointure : ManyToOne vers Entreprise (avec `findAllWithEntreprise()` pour éviter N+1).

### CRUD

- **Entreprise** : liste, création, affichage, modification, suppression.
- **Document** : liste (avec nom d’entreprise), création, affichage, modification, suppression.

### Contrôles de saisie (validation)

- **Entreprise** : nom et matricule fiscale obligatoires, longueurs max, email valide, téléphone (regex), date de création ≤ aujourd’hui, matricule fiscale unique (UniqueEntity).
- **Document** : entreprise obligatoire, nom et type obligatoires, URL valide (Assert\Url), type et statut dans les listes autorisées.

Les contraintes sont définies en attributs PHP 8 dans les entités et appliquées par le composant Validator de Symfony.
