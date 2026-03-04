# ✅ Vérification Base de Données XAMPP - MindAudit

## 📊 Configuration Actuelle

### Connexion MySQL
- **Serveur** : 127.0.0.1:3306 (XAMPP MySQL)
- **Base de données** : `mindaudit`
- **Utilisateur** : `root`
- **Mot de passe** : (vide)
- **Charset** : utf8mb4
- **Version** : MySQL 8.0.32

### Configuration dans .env
```
DATABASE_URL="mysql://root:@127.0.0.1:3306/mindaudit?serverVersion=8.0.32&charset=utf8mb4"
```

## ✅ État de la Base de Données

### Base de données active
```
Base actuelle : mindaudit ✅
```

### Tables existantes
- ✅ `utilisateur` - Table des utilisateurs
- ✅ `role` - Table des rôles
- ✅ `password_reset_token` - Tokens de réinitialisation
- ✅ `password_history` - Historique des mots de passe
- ✅ `audit_log` - Logs d'audit
- ✅ `notification` - Notifications
- ✅ `doctrine_migration_versions` - Migrations

## 👥 Utilisateurs Existants (7 utilisateurs)

| ID | Email                        | Prénom | Nom     | OAuth Provider | Actif |
|----|------------------------------|--------|---------|----------------|-------|
| 27 | admin@mindaudit.com          | Super  | Admin   | -              | ✅    |
| 28 | jean.dupont@mindaudit.com    | Jean   | Dupont  | -              | ✅    |
| 29 | sophie.martin@mindaudit.com  | Sophie | Martin  | -              | ✅    |
| 30 | pierre.bernard@mindaudit.com | Pierre | Bernard | -              | ✅    |
| 31 | marie.leroy@mindaudit.com    | Marie  | Leroy   | -              | ✅    |
| 32 | luc.dubois@mindaudit.com     | Luc    | Dubois  | -              | ❌    |
| 33 | salim.shaeik@gmail.com       | salim  | shaeik  | -              | ✅    |

### Utilisateur Google (à créer)
```
Email : elaa.ammar@esprit.tn
Statut : ❌ N'existe pas encore (sera créé lors de la première connexion Google)
```

## 🔐 Rôles Disponibles (3 rôles)

| ID | Nom            | Description                                                                    |
|----|----------------|--------------------------------------------------------------------------------|
| 12 | Administrateur | Accès complet au système - Gestion des utilisateurs, rôles et configuration   |
| 13 | Auditeur       | Responsable des audits - Peut créer, gérer et générer des rapports d'audit    |
| 14 | Utilisateur    | Utilisateur standard - Peut consulter les audits et participer aux processus  |

**Rôle par défaut pour OAuth** : Utilisateur (ID: 14) ✅

## 🧪 Commandes de Vérification

### Vérifier la base de données active
```bash
php bin/console dbal:run-sql "SELECT DATABASE() as current_database"
```
**Résultat** : mindaudit ✅

### Lister tous les utilisateurs
```bash
php bin/console dbal:run-sql "SELECT id, email, prenom, nom, oauth_provider, actif FROM utilisateur"
```

### Vérifier si l'utilisateur Google existe
```bash
php bin/console dbal:run-sql "SELECT * FROM utilisateur WHERE email = 'elaa.ammar@esprit.tn'"
```
**Résultat actuel** : Aucun résultat (normal, sera créé lors de la connexion)

### Vérifier les rôles
```bash
php bin/console dbal:run-sql "SELECT id, nom, description FROM role"
```
**Résultat** : 3 rôles disponibles ✅

### Vérifier le rôle "Utilisateur"
```bash
php bin/console dbal:run-sql "SELECT * FROM role WHERE nom = 'Utilisateur'"
```
**Résultat** : Rôle existe (ID: 14) ✅

## 📍 Accès phpMyAdmin

### URL
```
http://localhost/phpmyadmin
```

### Navigation
1. Ouvrez phpMyAdmin
2. Cliquez sur "mindaudit" dans la liste des bases de données (à gauche)
3. Cliquez sur "utilisateur" pour voir la table des utilisateurs

### Vérification après connexion Google
Après avoir testé la connexion Google, vous devriez voir un nouvel utilisateur :
- Email : elaa.ammar@esprit.tn
- oauth_provider : google
- oauth_id : (ID Google)
- actif : 1

## 🔄 Test de Connexion à la Base de Données

### Test simple
```bash
php bin/console dbal:run-sql "SELECT COUNT(*) as total_users FROM utilisateur"
```
**Résultat attendu** : 7 utilisateurs actuellement

### Test après création Google
```bash
php bin/console dbal:run-sql "SELECT COUNT(*) as total_users FROM utilisateur"
```
**Résultat attendu** : 8 utilisateurs (après connexion Google)

## 📊 Structure de la Table Utilisateur

### Colonnes principales
- `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
- `email` (VARCHAR 180, UNIQUE)
- `prenom` (VARCHAR 100)
- `nom` (VARCHAR 100)
- `password` (VARCHAR 255, nullable)
- `role_id` (INT, FOREIGN KEY → role.id)
- `actif` (BOOLEAN)
- `oauth_provider` (VARCHAR 50, nullable) ← Pour Google/Facebook
- `oauth_id` (VARCHAR 255, nullable) ← ID Google/Facebook
- `avatar` (VARCHAR 500, nullable) ← URL de l'avatar
- `created_at` (DATETIME)
- `failed_login_attempts` (INT)
- `locked_until` (DATETIME, nullable)
- `last_activity_at` (DATETIME, nullable)
- `last_login_at` (DATETIME, nullable)

## ✅ Checklist de Vérification

- [x] XAMPP MySQL est démarré
- [x] Base de données "mindaudit" existe
- [x] Tables créées et synchronisées
- [x] 7 utilisateurs de test existent
- [x] 3 rôles configurés (Admin, Auditeur, Utilisateur)
- [x] Rôle "Utilisateur" existe (pour OAuth)
- [x] Connexion à la base de données fonctionne
- [ ] Utilisateur Google sera créé lors du premier test

## 🎯 Prochaine Étape : Test OAuth

Maintenant que la base de données est vérifiée, vous pouvez tester la connexion Google :

1. **Ouvrez** : http://127.0.0.1:8000/login
2. **Cliquez** sur le bouton Google
3. **Sélectionnez** votre compte (elaa.ammar@esprit.tn)
4. **Vérifiez** dans phpMyAdmin que l'utilisateur a été créé

### Commande de vérification après test
```bash
php bin/console dbal:run-sql "SELECT id, email, prenom, nom, oauth_provider, oauth_id, actif FROM utilisateur WHERE email = 'elaa.ammar@esprit.tn'"
```

**Résultat attendu après connexion** :
```
id | email                  | prenom | nom   | oauth_provider | oauth_id      | actif
---|------------------------|--------|-------|----------------|---------------|------
34 | elaa.ammar@esprit.tn   | Elaa   | Ammar | google         | 10XXXXXXXXXX  | 1
```

## 🔧 Dépannage

### Si la connexion échoue
```bash
# Vérifier que MySQL XAMPP est démarré
# Ouvrir le panneau de contrôle XAMPP et vérifier que MySQL est "Running"

# Tester la connexion
php bin/console doctrine:query:sql "SELECT 1"
```

### Si les tables n'existent pas
```bash
# Créer les tables
php bin/console doctrine:schema:update --force

# Charger les fixtures
php bin/console doctrine:fixtures:load
```

### Si le rôle "Utilisateur" n'existe pas
```bash
# Recharger les fixtures
php bin/console doctrine:fixtures:load --append
```

## 📝 Résumé

✅ **Base de données** : mindaudit (XAMPP MySQL)
✅ **Connexion** : Fonctionne correctement
✅ **Utilisateurs** : 7 utilisateurs de test
✅ **Rôles** : 3 rôles configurés
✅ **OAuth** : Prêt pour la création automatique d'utilisateurs Google

**Tout est prêt pour tester la connexion Google !** 🚀
