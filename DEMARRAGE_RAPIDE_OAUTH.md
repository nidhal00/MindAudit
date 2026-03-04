# 🚀 Démarrage Rapide - OAuth Google & Facebook

## 📝 Résumé

Votre application est déjà configurée pour OAuth ! Il ne reste plus qu'à obtenir vos identifiants API.

---

## ⚡ Configuration en 5 minutes

### 1️⃣ Créer le fichier de configuration

Copiez le fichier d'exemple :

```bash
copy .env.local.example .env.local
```

### 2️⃣ Obtenir les identifiants Google

1. Allez sur [Google Cloud Console](https://console.cloud.google.com/)
2. Créez un nouveau projet
3. Activez l'API Google+
4. Créez des identifiants OAuth 2.0 (Application Web)
5. Ajoutez l'URI de redirection : `http://localhost:8000/connect/google/check`
6. Copiez le **Client ID** et le **Client Secret**

### 3️⃣ Obtenir les identifiants Facebook

1. Allez sur [Facebook Developers](https://developers.facebook.com/)
2. Créez une nouvelle application (type: Consommateur)
3. Configurez Facebook Login
4. Ajoutez l'URI de redirection : `http://localhost:8000/connect/facebook/check`
5. Copiez l'**App ID** et l'**App Secret**

### 4️⃣ Configurer .env.local

Ouvrez `.env.local` et remplacez les valeurs :

```env
###> Google OAuth2 ###
GOOGLE_CLIENT_ID=votre_client_id_google_ici
GOOGLE_CLIENT_SECRET=votre_client_secret_google_ici
###< Google OAuth2 ###

###> Facebook OAuth2 ###
FACEBOOK_CLIENT_ID=votre_app_id_facebook_ici
FACEBOOK_CLIENT_SECRET=votre_app_secret_facebook_ici
###< Facebook OAuth2 ###
```

### 5️⃣ Tester la configuration

```bash
# Vider le cache
php bin/console cache:clear

# Tester la configuration
php bin/test-oauth-config.php

# Démarrer le serveur
symfony server:start
```

Ouvrez : `http://localhost:8000/register`

Cliquez sur les boutons **GOOGLE** ou **FACEBOOK** !

---

## 📚 Documentation complète

- **[CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md](CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md)** - Guide détaillé étape par étape
- **[TEST_OAUTH.md](TEST_OAUTH.md)** - Tests et dépannage
- **[GUIDE_OAUTH_RAPIDE.md](GUIDE_OAUTH_RAPIDE.md)** - Guide technique

---

## ✅ Ce qui est déjà fait

✅ Bundle OAuth installé (`knpuniversity/oauth2-client-bundle`)  
✅ Providers Google et Facebook installés  
✅ Configuration Symfony (`config/packages/knpu_oauth2_client.yaml`)  
✅ Contrôleur OAuth (`src/Controller/OAuthController.php`)  
✅ Authenticator OAuth (`src/Security/OAuthAuthenticator.php`)  
✅ Boutons sur les pages de connexion et inscription  
✅ Création automatique des utilisateurs  
✅ Attribution automatique du rôle "Utilisateur"  
✅ Récupération de l'avatar  

---

## 🎯 Comment ça marche ?

1. L'utilisateur clique sur "GOOGLE" ou "FACEBOOK"
2. Il est redirigé vers Google/Facebook pour s'authentifier
3. Après autorisation, il revient sur votre site
4. Un compte utilisateur est créé automatiquement (si nouveau)
5. L'utilisateur est connecté et redirigé vers le dashboard

**Aucun mot de passe requis !** 🎉

---

## ❓ Problèmes courants

### Erreur "redirect_uri_mismatch"

L'URL de redirection ne correspond pas. Vérifiez que vous avez bien ajouté :
- `http://localhost:8000/connect/google/check` (Google)
- `http://localhost:8000/connect/facebook/check` (Facebook)

### Erreur "invalid_client"

Les identifiants sont incorrects. Vérifiez votre fichier `.env.local`.

### L'application Facebook ne fonctionne pas

Votre application est en mode "Développement". Passez-la en mode "Live" ou ajoutez-vous comme testeur.

---

## 🆘 Besoin d'aide ?

1. Lancez le script de test : `php bin/test-oauth-config.php`
2. Consultez les logs : `tail -f var/log/dev.log`
3. Consultez [TEST_OAUTH.md](TEST_OAUTH.md) pour le dépannage détaillé

---

## 🔒 Sécurité

⚠️ **IMPORTANT** : Ne commitez JAMAIS le fichier `.env.local` dans Git !

Le fichier `.gitignore` est déjà configuré pour l'ignorer.

---

Bon développement ! 🚀
