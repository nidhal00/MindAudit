# Guide de Finalisation - MindAudit

## ⚠️ Problème Détecté

La génération des migrations échoue car il manque une dépendance : **symfony/string** (nécessaire pour le Slugger dans l'entité Tag).

## ✅ Solution - Étapes à Suivre

### 1. Installer les Dépendances Manquantes

```bash
cd backend-php

# Installer symfony/string (pour le Slugger)
composer require symfony/string

# Installer symfony/password-hasher (pour User)
composer require symfony/password-hasher
```

### 2. Générer les Migrations

```bash
# Créer la migration
php bin/console make:migration

# Vérifier le fichier de migration généré
# Il se trouvera dans migrations/VersionXXXXXXXXXXXXXX.php

# Appliquer la migration
php bin/console doctrine:migrations:migrate
```

### 3. Valider le Schéma

```bash
php bin/console doctrine:schema:validate
```

Vous devriez voir :
```
[OK] The mapping files are correct.
[OK] The database schema is in sync with the mapping files.
```

### 4. Créer les Fixtures de Test (Optionnel)

```bash
# Créer les fixtures
php bin/console make:fixtures UserFixtures
php bin/console make:fixtures AuditFixtures
php bin/console make:fixtures CategorieFixtures
php bin/console make:fixtures TagFixtures

# Charger les fixtures
php bin/console doctrine:fixtures:load
```

### 5. Générer les CRUD

#### Option A : Génération Automatique (Rapide)

```bash
php bin/console make:crud User
php bin/console make:crud Audit
php bin/console make:crud Commentaire
php bin/console make:crud Categorie
php bin/console make:crud Tag
```

#### Option B : Création Manuelle (Contrôle Total)

Créer manuellement :
- Form Types dans `src/Form/`
- Controllers dans `src/Controller/`
- Templates dans `templates/`

### 6. Tester l'Application

```bash
# Lancer le serveur Symfony
symfony server:start

# OU avec PHP
php -S localhost:8000 -t public
```

Accéder à :
- http://localhost:8000/entreprise
- http://localhost:8000/document
- http://localhost:8000/user (après génération CRUD)
- http://localhost:8000/audit (après génération CRUD)

---

## 📦 Bundles Essentiels à Installer

### Priorité Haute

```bash
# Sécurité et authentification
composer require symfony/security-bundle

# Upload de fichiers
composer require vich/uploader-bundle

# Pagination
composer require knplabs/knp-paginator-bundle

# Export PDF
composer require dompdf/dompdf

# Export Excel
composer require phpoffice/phpspreadsheet
```

### Priorité Moyenne

```bash
# API REST
composer require api-platform/core

# Notifications
composer require symfony/mailer

# Workflow
composer require symfony/workflow
```

### Priorité Basse (Fonctionnalités Avancées)

```bash
# Administration
composer require easycorp/easyadmin-bundle

# Tests
composer require --dev symfony/phpunit-bridge

# Monitoring
composer require sentry/sentry-symfony
```

---

## 🔍 Vérifications Post-Installation

### Vérifier les Entités

```bash
# Lister toutes les entités
php bin/console doctrine:mapping:info

# Devrait afficher :
# - App\Entity\Entreprise
# - App\Entity\Document
# - App\Entity\User
# - App\Entity\Audit
# - App\Entity\Commentaire
# - App\Entity\Categorie
# - App\Entity\Tag
```

### Vérifier les Relations

```bash
# Afficher le schéma SQL
php bin/console doctrine:schema:update --dump-sql
```

### Vérifier les Validations

Créer un fichier de test `tests/Entity/UserTest.php` :

```php
<?php

namespace App\Tests\Entity;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserTest extends KernelTestCase
{
    public function testValidUser()
    {
        $user = new User();
        $user->setUsername('testuser');
        $user->setEmail('test@example.com');
        $user->setNom('Doe');
        $user->setPrenom('John');
        $user->setPlainPassword('password123');

        $errors = $this->getContainer()->get('validator')->validate($user);
        $this->assertCount(0, $errors);
    }

    public function testInvalidEmail()
    {
        $user = new User();
        $user->setUsername('testuser');
        $user->setEmail('invalid-email');
        $user->setNom('Doe');
        $user->setPrenom('John');

        $errors = $this->getContainer()->get('validator')->validate($user);
        $this->assertGreaterThan(0, $errors);
    }
}
```

Exécuter les tests :

```bash
php bin/phpunit
```

---

## 📋 Checklist Finale

### Entités et Base de Données
- [x] Toutes les entités créées
- [x] Toutes les validations Assert ajoutées
- [x] Tous les repositories créés
- [ ] Dépendances installées (symfony/string, symfony/password-hasher)
- [ ] Migrations générées
- [ ] Migrations appliquées
- [ ] Schéma validé

### CRUD et Interface
- [ ] Form Types créés
- [ ] Controllers créés
- [ ] Templates créés
- [ ] Routes configurées
- [ ] Navigation fonctionnelle

### Fonctionnalités
- [ ] Authentification configurée
- [ ] Upload de fichiers configuré
- [ ] Pagination ajoutée
- [ ] Filtres de recherche ajoutés
- [ ] Export PDF/Excel configuré

### Tests et Qualité
- [ ] Fixtures créées
- [ ] Tests unitaires créés
- [ ] Tests fonctionnels créés
- [ ] Validation des données testée

### Production
- [ ] Variables d'environnement configurées
- [ ] Cache configuré
- [ ] Logs configurés
- [ ] Sécurité renforcée
- [ ] Performance optimisée

---

## 🎯 Résumé de ce qui a été Fait

### ✅ Complété

1. **5 Nouvelles Entités** avec validations Assert complètes :
   - User (authentification, rôles)
   - Audit (gestion d'audits)
   - Commentaire (commentaires sur documents/audits)
   - Categorie (classification de documents)
   - Tag (tags flexibles)

2. **2 Entités Existantes Mises à Jour** :
   - Entreprise (relations avec User et Audit)
   - Document (relations avec Audit, Categorie, Tag, Commentaire)

3. **5 Repositories** avec méthodes personnalisées :
   - UserRepository (recherche, filtrage par rôle)
   - AuditRepository (statistiques, filtres avancés)
   - CommentaireRepository (recherche par document/audit)
   - CategorieRepository (comptage de documents)
   - TagRepository (popularité, création automatique)

4. **Documentation Complète** :
   - 12 bundles Symfony recommandés
   - 12 fonctionnalités avancées détaillées
   - Guide de génération CRUD
   - Récapitulatif complet (walkthrough.md)

### 🔄 À Faire

1. Installer les dépendances manquantes
2. Générer et appliquer les migrations
3. Créer les Form Types
4. Créer les Controllers CRUD
5. Créer les Templates Twig
6. Configurer l'authentification
7. Tester l'application

---

## 🚀 Commandes Rapides

```bash
# Installation complète
cd backend-php
composer require symfony/string symfony/password-hasher
php bin/console make:migration
php bin/console doctrine:migrations:migrate

# Génération CRUD (toutes les entités)
php bin/console make:crud User
php bin/console make:crud Audit
php bin/console make:crud Commentaire
php bin/console make:crud Categorie
php bin/console make:crud Tag

# Lancer l'application
symfony server:start
```

---

## 📞 Support

Pour toute question ou problème :
1. Vérifier les logs : `var/log/dev.log`
2. Vérifier la configuration : `.env`
3. Consulter la documentation Symfony : https://symfony.com/doc/current/

---

**Statut** : Entités et Repositories terminés ✅  
**Prochaine étape** : Installer dépendances et générer migrations
