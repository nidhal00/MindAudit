# Guide de Génération des CRUD - MindAudit

Ce document explique comment générer les controllers, formulaires et templates pour toutes les entités.

## 🎯 Entités à Traiter

- ✅ Entreprise (existant)
- ✅ Document (existant)
- 🔄 User
- 🔄 Audit
- 🔄 Commentaire
- 🔄 Categorie
- 🔄 Tag

## 📝 Commandes de Génération

### Option 1 : Génération Automatique avec Maker Bundle

```bash
# User
php bin/console make:crud User

# Audit
php bin/console make:crud Audit

# Commentaire
php bin/console make:crud Commentaire

# Categorie
php bin/console make:crud Categorie

# Tag
php bin/console make:crud Tag
```

### Option 2 : Création Manuelle

Les Form Types, Controllers et Templates seront créés manuellement pour un contrôle total.

## 🔧 Structure des CRUD

### Form Types (src/Form/)

Chaque entité aura son FormType :
- `UserType.php`
- `AuditType.php`
- `CommentaireType.php`
- `CategorieType.php`
- `TagType.php`

### Controllers (src/Controller/)

Chaque controller aura ces actions :
- `index()` - Liste avec pagination
- `new()` - Création
- `show($id)` - Affichage détaillé
- `edit($id)` - Modification
- `delete($id)` - Suppression

### Templates (templates/)

Structure des templates :
```
templates/
├── user/
│   ├── index.html.twig
│   ├── show.html.twig
│   ├── _form.html.twig
│   └── _delete_form.html.twig
├── audit/
│   ├── index.html.twig
│   ├── show.html.twig
│   ├── _form.html.twig
│   └── _delete_form.html.twig
└── ...
```

## ⚙️ Prochaines Étapes

1. Générer les migrations Doctrine
2. Créer les Form Types
3. Créer les Controllers
4. Créer les Templates
5. Tester les CRUD
6. Ajouter les validations côté formulaire
7. Ajouter la pagination
8. Ajouter les filtres de recherche

## 🚀 Génération des Migrations

```bash
# Créer la migration
php bin/console make:migration

# Vérifier la migration générée
# Fichier dans migrations/VersionXXXXXXXXXXXXXX.php

# Appliquer la migration
php bin/console doctrine:migrations:migrate

# Vérifier le schéma
php bin/console doctrine:schema:validate
```

## 📊 Fixtures de Test

Créer des fixtures pour tester :

```bash
php bin/console make:fixtures UserFixtures
php bin/console make:fixtures AuditFixtures
php bin/console make:fixtures CategorieFixtures
php bin/console make:fixtures TagFixtures
```

Charger les fixtures :

```bash
php bin/console doctrine:fixtures:load
```

## ✅ Checklist de Validation

- [ ] Toutes les entités ont leur repository
- [ ] Toutes les entités ont leur FormType
- [ ] Tous les controllers sont créés
- [ ] Tous les templates sont créés
- [ ] Les migrations sont générées et appliquées
- [ ] Les fixtures sont créées
- [ ] Les validations fonctionnent
- [ ] La pagination fonctionne
- [ ] Les relations sont correctes
- [ ] Les cascades de suppression fonctionnent
