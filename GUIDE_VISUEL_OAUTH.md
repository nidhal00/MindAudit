# 📸 Guide Visuel - Configuration OAuth

Ce guide vous montre exactement où cliquer et quoi remplir.

---

## 🔵 GOOGLE CLOUD CONSOLE

### Étape 1 : Créer un projet

```
┌─────────────────────────────────────────────────────────┐
│  Google Cloud Console                                   │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  [Sélectionner un projet ▼]                            │
│                                                         │
│  ┌───────────────────────────────────────────┐         │
│  │  Nouveau projet                           │         │
│  │                                           │         │
│  │  Nom du projet: [MindAudit OAuth______]  │         │
│  │                                           │         │
│  │  Organisation: [Aucune organisation]     │         │
│  │                                           │         │
│  │              [Annuler]  [CRÉER]          │         │
│  └───────────────────────────────────────────┘         │
└─────────────────────────────────────────────────────────┘
```

### Étape 2 : Activer les API

```
┌─────────────────────────────────────────────────────────┐
│  API et services > Bibliothèque                         │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Rechercher: [Google+ API_______________] 🔍           │
│                                                         │
│  ┌─────────────────────────────────────┐               │
│  │  📘 Google+ API                     │               │
│  │  Google                             │               │
│  │                                     │               │
│  │  [ACTIVER]                          │               │
│  └─────────────────────────────────────┘               │
└─────────────────────────────────────────────────────────┘
```

### Étape 3 : Écran de consentement OAuth

```
┌─────────────────────────────────────────────────────────┐
│  Écran de consentement OAuth                            │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Type d'utilisateur:                                    │
│                                                         │
│  ⚪ Interne                                             │
│  🔘 Externe  ← Sélectionnez ceci                       │
│                                                         │
│              [CRÉER]                                    │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Modifier l'inscription de l'application                │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Nom de l'application *                                 │
│  [MindAudit_________________________________]           │
│                                                         │
│  E-mail d'assistance utilisateur *                      │
│  [votre.email@example.com___________________]           │
│                                                         │
│  E-mail du développeur *                                │
│  [votre.email@example.com___________________]           │
│                                                         │
│  [ENREGISTRER ET CONTINUER]                             │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Champs d'application                                   │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  [AJOUTER OU SUPPRIMER DES CHAMPS D'APPLICATION]        │
│                                                         │
│  ┌───────────────────────────────────────────┐         │
│  │ ☑ .../auth/userinfo.email                │         │
│  │ ☑ .../auth/userinfo.profile              │         │
│  │ ☑ openid                                 │         │
│  └───────────────────────────────────────────┘         │
│                                                         │
│  [METTRE À JOUR]                                        │
└─────────────────────────────────────────────────────────┘
```

### Étape 4 : Créer les identifiants

```
┌─────────────────────────────────────────────────────────┐
│  API et services > Identifiants                         │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  [+ CRÉER DES IDENTIFIANTS ▼]                          │
│     │                                                   │
│     ├─ Clé API                                          │
│     ├─ ID client OAuth ← Cliquez ici                    │
│     └─ Compte de service                                │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Créer un ID client OAuth                               │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Type d'application:                                    │
│  [Application Web ▼]                                    │
│                                                         │
│  Nom:                                                   │
│  [MindAudit Web Client__________________]               │
│                                                         │
│  URI de redirection autorisés:                          │
│  [+ AJOUTER UN URI]                                     │
│                                                         │
│  URI 1: [http://localhost:8000/connect/google/check]   │
│  URI 2: [http://127.0.0.1:8000/connect/google/check]   │
│                                                         │
│  ⚠️ IMPORTANT: Pas d'espace, pas de / à la fin         │
│                                                         │
│              [Annuler]  [CRÉER]                         │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Client OAuth créé                                      │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Votre ID client:                                       │
│  123456789-abc...xyz.apps.googleusercontent.com         │
│  [📋 Copier]                                            │
│                                                         │
│  Votre code secret du client:                           │
│  GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx                        │
│  [📋 Copier]                                            │
│                                                         │
│              [OK]                                       │
└─────────────────────────────────────────────────────────┘
```

---

## 🔷 FACEBOOK DEVELOPERS

### Étape 1 : Créer une application

```
┌─────────────────────────────────────────────────────────┐
│  Facebook for Developers                                │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Mes applications                    [Créer une app]   │
│                                                         │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Créer une application                                  │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Sélectionnez un type d'application:                    │
│                                                         │
│  ┌─────────────────┐  ┌─────────────────┐              │
│  │  🎮 Jeux        │  │  👤 Consommateur│ ← Cliquez    │
│  └─────────────────┘  └─────────────────┘              │
│                                                         │
│              [Suivant]                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Informations de base                                   │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Nom de l'application:                                  │
│  [MindAudit_________________________________]           │
│                                                         │
│  E-mail de contact de l'application:                    │
│  [votre.email@example.com___________________]           │
│                                                         │
│              [Créer l'application]                      │
└─────────────────────────────────────────────────────────┘
```

### Étape 2 : Configurer Facebook Login

```
┌─────────────────────────────────────────────────────────┐
│  Tableau de bord                                        │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Ajouter des produits à votre application               │
│                                                         │
│  ┌─────────────────────────────────────┐               │
│  │  🔐 Facebook Login                  │               │
│  │                                     │               │
│  │  [Configurer]  ← Cliquez ici        │               │
│  └─────────────────────────────────────┘               │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Démarrage rapide                                       │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Sélectionnez une plateforme:                           │
│                                                         │
│  [🌐 Web]  ← Cliquez ici                               │
│                                                         │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Indiquez l'URL de votre site                           │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  URL du site:                                           │
│  [http://localhost:8000__________________]              │
│                                                         │
│              [Enregistrer]                              │
└─────────────────────────────────────────────────────────┘
```

### Étape 3 : Configurer les URI de redirection

```
┌─────────────────────────────────────────────────────────┐
│  Facebook Login > Paramètres                            │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  URI de redirection OAuth valides:                      │
│  ┌───────────────────────────────────────────┐         │
│  │ http://localhost:8000/connect/facebook/   │         │
│  │ check                                     │         │
│  │                                           │         │
│  │ http://127.0.0.1:8000/connect/facebook/  │         │
│  │ check                                     │         │
│  └───────────────────────────────────────────┘         │
│                                                         │
│  ⚠️ Un URI par ligne                                   │
│                                                         │
│  [Enregistrer les modifications]                        │
└─────────────────────────────────────────────────────────┘
```

### Étape 4 : Récupérer les identifiants

```
┌─────────────────────────────────────────────────────────┐
│  Paramètres > Paramètres de base                        │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  ID de l'application:                                   │
│  1234567890123456                    [📋 Copier]        │
│                                                         │
│  Clé secrète de l'application:                          │
│  ••••••••••••••••••••••••••••••••   [Afficher]          │
│  abcdef1234567890abcdef1234567890   [📋 Copier]        │
│                                                         │
└─────────────────────────────────────────────────────────┘
```

### Étape 5 : Passer en mode Live

```
┌─────────────────────────────────────────────────────────┐
│  Paramètres > Paramètres de base                        │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Mode de l'application:                                 │
│                                                         │
│  🔴 Développement  [Passer en mode Live]               │
│                                                         │
│  ⚠️ Avant de passer en Live, assurez-vous d'avoir:     │
│     - Ajouté une URL de politique de confidentialité   │
│     - Ajouté une URL de conditions d'utilisation       │
│     - Rempli les informations de contact               │
│                                                         │
└─────────────────────────────────────────────────────────┘
```

---

## 📝 CONFIGURATION .env.local

```env
###> Google OAuth2 ###
GOOGLE_CLIENT_ID=123456789-abc...xyz.apps.googleusercontent.com
                 └─ Copiez depuis Google Cloud Console

GOOGLE_CLIENT_SECRET=GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx
                     └─ Copiez depuis Google Cloud Console
###< Google OAuth2 ###

###> Facebook OAuth2 ###
FACEBOOK_CLIENT_ID=1234567890123456
                   └─ Copiez depuis Facebook Developers

FACEBOOK_CLIENT_SECRET=abcdef1234567890abcdef1234567890
                       └─ Copiez depuis Facebook Developers
###< Facebook OAuth2 ###
```

---

## ✅ VÉRIFICATION

### Test avec le script

```
C:\mindaudit> php bin/test-oauth-config.php

╔════════════════════════════════════════════════════════════╗
║         Test de Configuration OAuth - MindAudit           ║
╚════════════════════════════════════════════════════════════╝

✅ Fichier .env chargé
✅ Fichier .env.local chargé

─────────────────────────────────────────────────────────────
  VÉRIFICATION DES VARIABLES D'ENVIRONNEMENT
─────────────────────────────────────────────────────────────

🔵 Google OAuth:
  ✅ GOOGLE_CLIENT_ID: 123456789-abc...
     Format correct ✓
  ✅ GOOGLE_CLIENT_SECRET: GOCSPX-xxxxxxx...
     Format correct ✓

🔷 Facebook OAuth:
  ✅ FACEBOOK_CLIENT_ID: 1234567890123456
     Format correct ✓
  ✅ FACEBOOK_CLIENT_SECRET: abcdef12345678...

─────────────────────────────────────────────────────────────
  RÉSUMÉ
─────────────────────────────────────────────────────────────

✅ Configuration complète ! Google et Facebook sont configurés.

Prochaines étapes:
1. Démarrez le serveur: symfony server:start
2. Ouvrez: http://localhost:8000/register
3. Testez les boutons Google et Facebook
```

### Page d'inscription

```
┌─────────────────────────────────────────────────────────┐
│  MindAudit - Créer un compte                            │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Prénom: [_________________]  Nom: [_________________]  │
│                                                         │
│  Email: [_______________________________________]        │
│                                                         │
│  Mot de passe: [_______________________________]        │
│                                                         │
│  [CRÉER LE COMPTE]                                      │
│                                                         │
│  ─────────────── Ou inscrivez-vous avec ──────────────  │
│                                                         │
│  [🔴 GOOGLE]              [🔷 FACEBOOK]                │
│   ↑ Cliquez ici            ↑ Ou ici                     │
│                                                         │
└─────────────────────────────────────────────────────────┘
```

---

## 🎯 Résultat attendu

Après avoir cliqué sur **GOOGLE** ou **FACEBOOK** :

1. ✅ Redirection vers la page de connexion Google/Facebook
2. ✅ Demande d'autorisation (email, profil)
3. ✅ Retour sur votre site
4. ✅ Compte créé automatiquement
5. ✅ Connexion automatique
6. ✅ Redirection vers le dashboard

**Aucun mot de passe requis !** 🎉

---

## 📚 Ressources

- [DEMARRAGE_RAPIDE_OAUTH.md](DEMARRAGE_RAPIDE_OAUTH.md) - Guide rapide
- [CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md](CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md) - Guide détaillé
- [TEST_OAUTH.md](TEST_OAUTH.md) - Tests et dépannage
