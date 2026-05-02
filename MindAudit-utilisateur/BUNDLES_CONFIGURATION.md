# Configuration des Bundles - MindAudit

## Bundles installés

Voici la liste complète des bundles installés dans votre projet Symfony :

### Bundles principaux (all environments)
1. **FrameworkBundle** - Core Symfony
2. **DoctrineBundle** - ORM pour la base de données
3. **DoctrineMigrationsBundle** - Gestion des migrations de base de données
4. **TwigBundle** - Moteur de templates
5. **SecurityBundle** - Système de sécurité et authentification
6. **MonologBundle** - Logging
7. **KnpUOAuth2ClientBundle** - OAuth2 (Google, Facebook)
8. **TwigComponentBundle** - Composants Twig
9. **EasyAdminBundle** - Interface d'administration
10. **KnpPaginatorBundle** - Pagination
11. **StimulusBundle** - Stimulus JavaScript
12. **TurboBundle** - Turbo (Hotwire)
13. **TwigExtraBundle** - Extensions Twig supplémentaires

### Bundles de développement (dev/test only)
1. **DebugBundle** - Outils de débogage
2. **WebProfilerBundle** - Barre de débogage Symfony
3. **MakerBundle** - Générateur de code
4. **DoctrineFixturesBundle** - Données de test

## Fichiers de configuration disponibles

### 1. asset_mapper.yaml
Configuration pour la gestion des assets (CSS, JS)

### 2. cache.yaml
Configuration du système de cache

### 3. debug.yaml
Configuration des outils de débogage

### 4. doctrine.yaml
Configuration de Doctrine ORM et DBAL
- Connexion à la base de données
- Mapping des entités
- Configuration des pools de cache

### 5. doctrine_migrations.yaml
Configuration des migrations de base de données

### 6. framework.yaml
Configuration du framework Symfony
- Sessions
- CSRF protection
- HTTP client
- Mailer
- Messenger

### 7. knpu_oauth2_client.yaml
Configuration OAuth2 pour Google et Facebook
- Client IDs
- Secrets
- Routes de redirection

### 8. mailer.yaml
Configuration du système d'envoi d'emails

### 9. messenger.yaml
Configuration du système de messages asynchrones

### 10. monolog.yaml
Configuration des logs
- Niveaux de log
- Handlers
- Formatters

### 11. notifier.yaml
Configuration du système de notifications

### 12. routing.yaml
Configuration du routage

### 13. security.yaml
Configuration de la sécurité
- Firewalls
- Providers
- Access control
- Password hashers
- Remember me

### 14. translation.yaml
Configuration des traductions

### 15. twig.yaml
Configuration de Twig
- Chemins des templates
- Variables globales
- Extensions

### 16. twig_component.yaml
Configuration des composants Twig

### 17. uid.yaml
Configuration pour la génération d'identifiants uniques (UUID, ULID)

### 18. validator.yaml
Configuration du système de validation

### 19. web_profiler.yaml
Configuration de la barre de débogage Symfony

## Commandes utiles

### Lister tous les bundles
```bash
php bin/console debug:container --parameters | grep kernel.bundles
```

### Voir la configuration d'un bundle
```bash
php bin/console debug:config framework
php bin/console debug:config doctrine
php bin/console debug:config security
```

### Voir les routes disponibles
```bash
php bin/console debug:router
```

### Voir les services disponibles
```bash
php bin/console debug:container
```

### Voir les événements disponibles
```bash
php bin/console debug:event-dispatcher
```

## Bundles à considérer pour l'avenir

### Pour les emails
- **SymfonyMailerBundle** - Déjà installé, à configurer avec SMTP

### Pour les tests
- **PHPUnit Bridge** - Tests unitaires et fonctionnels
- **Behat** - Tests comportementaux (BDD)

### Pour l'API
- **API Platform** - Création d'API REST/GraphQL
- **NelmioApiDocBundle** - Documentation API

### Pour la performance
- **VarnishBundle** - Cache HTTP
- **RedisBundle** - Cache Redis

### Pour la sécurité
- **SecurityCheckerBundle** - Vérification des vulnérabilités
- **RateLimiterBundle** - Limitation de débit

## Configuration actuelle

### Base de données
- Type: MySQL (XAMPP)
- Nom: mindaudit
- Host: 127.0.0.1:3306
- User: root

### OAuth2
- Google Client ID: 802607877999-hqm662npoc4km5ga0fe0dd73tab3i31c.apps.googleusercontent.com
- Facebook: À configurer

### Mailer
- DSN: smtp://localhost:1025 (MailHog/Mailpit pour dev)

### Sécurité
- Password hasher: auto (bcrypt/argon2)
- Remember me: Désactivé temporairement
- Firewalls: main, dev

## Notes importantes

1. **Turbo et Stimulus** sont installés mais désactivés dans les templates pour améliorer les performances
2. **EasyAdmin** est installé mais non configuré
3. **Remember me** est désactivé temporairement pour éviter les boucles de redirection
4. **Audit listeners** Doctrine sont désactivés pour améliorer les performances

## Fichiers de configuration personnalisés

- `.env` - Variables d'environnement principales
- `.env.local` - Variables d'environnement locales (OAuth secrets)
- `config/services.yaml` - Services personnalisés
- `config/routes.yaml` - Routes personnalisées
