# 📚 Index - Documentation OAuth

Bienvenue dans la documentation OAuth de MindAudit ! Voici tous les guides disponibles.

---

## 🚀 Par où commencer ?

### Vous voulez configurer rapidement ?
👉 **[DEMARRAGE_RAPIDE_OAUTH.md](DEMARRAGE_RAPIDE_OAUTH.md)** - Configuration en 5 minutes

### Vous voulez comprendre ce qui a été fait ?
👉 **[OAUTH_RESUME.md](OAUTH_RESUME.md)** - Vue d'ensemble du projet

### Vous préférez un guide détaillé ?
👉 **[CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md](CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md)** - Guide complet

---

## 📖 Tous les guides disponibles

### 1. 🚀 DEMARRAGE_RAPIDE_OAUTH.md
**Configuration rapide en 5 minutes**

- ✅ Résumé de ce qui est déjà fait
- ✅ 5 étapes simples pour configurer
- ✅ Commandes de test
- ✅ Problèmes courants

**Quand l'utiliser :** Vous voulez configurer OAuth rapidement sans lire toute la documentation.

---

### 2. 📋 OAUTH_RESUME.md
**Vue d'ensemble complète du projet**

- ✅ Liste de tout ce qui est configuré
- ✅ Ce qu'il reste à faire
- ✅ Flux d'authentification
- ✅ Fonctionnalités incluses
- ✅ Commandes utiles

**Quand l'utiliser :** Vous voulez comprendre l'architecture et ce qui a été implémenté.

---

### 3. 📘 CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md
**Guide détaillé étape par étape**

- ✅ Configuration Google Cloud Console (détaillée)
- ✅ Configuration Facebook Developers (détaillée)
- ✅ Configuration des variables d'environnement
- ✅ Vérification de la configuration
- ✅ Dépannage complet

**Quand l'utiliser :** Vous configurez OAuth pour la première fois et voulez un guide complet.

---

### 4. 📸 GUIDE_VISUEL_OAUTH.md
**Guide avec captures d'écran textuelles**

- ✅ Représentations visuelles des interfaces
- ✅ Indications précises où cliquer
- ✅ Exemples de formulaires remplis
- ✅ Résultat attendu à chaque étape

**Quand l'utiliser :** Vous voulez voir exactement où cliquer dans les interfaces Google et Facebook.

---

### 5. 🧪 TEST_OAUTH.md
**Tests et dépannage**

- ✅ Checklist de configuration
- ✅ Commandes de vérification
- ✅ Tests manuels détaillés
- ✅ Dépannage avancé
- ✅ Solutions aux erreurs courantes

**Quand l'utiliser :** Vous rencontrez un problème ou voulez vérifier que tout fonctionne.

---

### 6. 📄 .env.local.example
**Fichier d'exemple de configuration**

- ✅ Template pour vos identifiants
- ✅ Commentaires explicatifs
- ✅ Format attendu pour chaque variable
- ✅ Liens vers les consoles

**Quand l'utiliser :** Pour créer votre fichier `.env.local` avec la bonne structure.

---

### 7. 🔧 bin/test-oauth-config.php
**Script de test automatique**

- ✅ Vérifie les variables d'environnement
- ✅ Vérifie les fichiers de configuration
- ✅ Vérifie les dépendances
- ✅ Affiche les URI de redirection
- ✅ Donne un résumé de la configuration

**Quand l'utiliser :** Pour vérifier automatiquement votre configuration.

**Usage :**
```bash
php bin/test-oauth-config.php
```

---

## 🎯 Parcours recommandés

### Parcours 1 : Configuration rapide (10 minutes)

1. Lisez **[DEMARRAGE_RAPIDE_OAUTH.md](DEMARRAGE_RAPIDE_OAUTH.md)**
2. Suivez les 5 étapes
3. Lancez `php bin/test-oauth-config.php`
4. Testez sur `http://localhost:8000/register`

---

### Parcours 2 : Configuration détaillée (30 minutes)

1. Lisez **[OAUTH_RESUME.md](OAUTH_RESUME.md)** pour comprendre le projet
2. Suivez **[CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md](CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md)**
3. Utilisez **[GUIDE_VISUEL_OAUTH.md](GUIDE_VISUEL_OAUTH.md)** comme référence
4. Testez avec **[TEST_OAUTH.md](TEST_OAUTH.md)**

---

### Parcours 3 : Dépannage

1. Lancez `php bin/test-oauth-config.php`
2. Consultez **[TEST_OAUTH.md](TEST_OAUTH.md)**
3. Vérifiez les logs : `var/log/dev.log`
4. Consultez la section "Dépannage" de **[CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md](CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md)**

---

## 📊 Tableau récapitulatif

| Guide | Temps de lecture | Niveau | Objectif |
|-------|------------------|--------|----------|
| DEMARRAGE_RAPIDE_OAUTH.md | 5 min | Débutant | Configuration rapide |
| OAUTH_RESUME.md | 10 min | Tous | Comprendre le projet |
| CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md | 20 min | Débutant | Guide complet |
| GUIDE_VISUEL_OAUTH.md | 15 min | Débutant | Aide visuelle |
| TEST_OAUTH.md | 15 min | Intermédiaire | Tests et dépannage |

---

## 🔍 Recherche rapide

### Je cherche...

**Comment obtenir mes identifiants Google ?**
→ [CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md](CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md) - Section "Configuration Google OAuth"

**Comment obtenir mes identifiants Facebook ?**
→ [CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md](CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md) - Section "Configuration Facebook OAuth"

**Où mettre mes identifiants ?**
→ [DEMARRAGE_RAPIDE_OAUTH.md](DEMARRAGE_RAPIDE_OAUTH.md) - Étape 4

**Comment tester ma configuration ?**
→ [TEST_OAUTH.md](TEST_OAUTH.md) - Section "Tests manuels"

**J'ai une erreur "redirect_uri_mismatch"**
→ [TEST_OAUTH.md](TEST_OAUTH.md) - Section "Test 2 : Test de redirection Google"

**J'ai une erreur "URL Blocked" (Facebook)**
→ [TEST_OAUTH.md](TEST_OAUTH.md) - Section "Test 4 : Test de redirection Facebook"

**Comment voir les logs ?**
→ [TEST_OAUTH.md](TEST_OAUTH.md) - Section "Dépannage avancé"

**Qu'est-ce qui a été configuré dans mon application ?**
→ [OAUTH_RESUME.md](OAUTH_RESUME.md) - Section "Ce qui est déjà configuré"

**Comment fonctionne le flux OAuth ?**
→ [OAUTH_RESUME.md](OAUTH_RESUME.md) - Section "Flux d'authentification"

---

## 🛠️ Outils et commandes

### Commandes de test
```bash
# Tester la configuration
php bin/test-oauth-config.php

# Vider le cache
php bin/console cache:clear

# Voir les routes OAuth
php bin/console debug:router | findstr connect

# Démarrer le serveur
symfony server:start
```

### Fichiers importants
- `.env.local` - Vos identifiants OAuth (à créer)
- `.env.local.example` - Template de configuration
- `config/packages/knpu_oauth2_client.yaml` - Configuration OAuth
- `src/Controller/OAuthController.php` - Logique OAuth

---

## 📞 Liens externes utiles

### Google
- [Google Cloud Console](https://console.cloud.google.com/)
- [Documentation OAuth 2.0](https://developers.google.com/identity/protocols/oauth2)
- [Scopes OAuth](https://developers.google.com/identity/protocols/oauth2/scopes)

### Facebook
- [Facebook Developers](https://developers.facebook.com/)
- [Documentation Facebook Login](https://developers.facebook.com/docs/facebook-login)
- [Guide de démarrage rapide](https://developers.facebook.com/docs/facebook-login/web)

### Symfony
- [KnpU OAuth2 Client Bundle](https://github.com/knpuniversity/oauth2-client-bundle)
- [Symfony Security](https://symfony.com/doc/current/security.html)

---

## ✅ Checklist complète

Utilisez cette checklist pour suivre votre progression :

### Configuration Google
- [ ] Projet créé sur Google Cloud Console
- [ ] API Google+ activée
- [ ] Écran de consentement OAuth configuré
- [ ] ID client OAuth créé
- [ ] URI de redirection ajouté
- [ ] Client ID copié dans `.env.local`
- [ ] Client Secret copié dans `.env.local`

### Configuration Facebook
- [ ] Application créée sur Facebook Developers
- [ ] Facebook Login configuré
- [ ] URI de redirection OAuth ajouté
- [ ] App ID copié dans `.env.local`
- [ ] App Secret copié dans `.env.local`
- [ ] Application passée en mode "Live" (optionnel)

### Tests
- [ ] Fichier `.env.local` créé
- [ ] Script de test exécuté : `php bin/test-oauth-config.php`
- [ ] Cache vidé : `php bin/console cache:clear`
- [ ] Serveur démarré : `symfony server:start`
- [ ] Bouton Google testé
- [ ] Bouton Facebook testé
- [ ] Compte créé automatiquement
- [ ] Connexion automatique fonctionne

---

## 🎓 Glossaire

**OAuth 2.0** : Protocole d'autorisation permettant à une application d'accéder aux ressources d'un utilisateur sans connaître son mot de passe.

**Client ID** : Identifiant public de votre application OAuth.

**Client Secret** : Clé secrète de votre application OAuth (à garder confidentielle).

**Redirect URI** : URL vers laquelle l'utilisateur est redirigé après autorisation.

**Scope** : Permissions demandées à l'utilisateur (ex: email, profile).

**Provider** : Service OAuth (Google, Facebook, etc.).

**Access Token** : Jeton permettant d'accéder aux ressources de l'utilisateur.

---

**Bonne configuration ! 🚀**

Commencez par : **[DEMARRAGE_RAPIDE_OAUTH.md](DEMARRAGE_RAPIDE_OAUTH.md)**
