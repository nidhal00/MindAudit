# MindAudit – Gestion Entreprise & Document

Module **PI DEV** : deux entités (Entreprise, Document), jointure, CRUD et contrôle de saisie.

**Périmètre livré : Sprint 0 et Sprint 1 uniquement.**

## Définition des sprints

| Sprint | Contenu |
|--------|--------|
| **Sprint 0** | BDD (MySQL 8.0 / MariaDB 10.11), schéma, connexion, entités Entreprise & Document (attributs + jointure) |
| **Sprint 1** | CRUD Entreprise, CRUD Document, jointure en lecture, contrôle de saisie (validation) |

Détail complet : **[docs/SPRINTS.md](docs/SPRINTS.md)**  
Comment tester : **[docs/TEST.md](docs/TEST.md)**

## Structure du projet

```
Mindaudit/
├── database/
│   └── schema.sql          # Schéma BDD (entreprise, document, FK)
├── docs/
│   └── SPRINTS.md          # Définition Sprint 0 & Sprint 1
├── backend-java/           # Application Java (JDK 11, JavaFX, JDBC)
│   ├── src/
│   │   ├── config/         # Sprint 0 : connexion BDD
│   │   ├── models/         # Sprint 0 : entités
│   │   ├── dao/            # Sprint 1 : CRUD + jointure
│   │   ├── utils/          # Sprint 1 : validation
│   │   └── views/          # Sprint 1 : interface JavaFX
│   └── README.md
└── backend-php/            # Application Symfony 6.4 (PHP 8.2+, Composer 2.7+)
    ├── src/
    │   ├── Entity/         # Sprint 0 : entités + validation
    │   ├── Controller/     # Sprint 1 : CRUD
    │   ├── Form/           # Sprint 1 : formulaires
    │   └── Repository/     # Sprint 1 : jointure
    └── README.md
```

## Lancer les applications

- **Backend Java** : `cd backend-java` puis `mvn javafx:run` ou `run.bat`
- **Backend PHP** : `cd backend-php` puis `composer install`, configurer `.env`, `php bin/console doctrine:schema:update --force`, `symfony server:start`

Voir les README dans chaque dossier backend.
