# 🔐 Configuration OAuth Google et Facebook

## 📋 Vue d'ensemble

Ce guide vous explique comment configurer l'authentification OAuth avec Google et Facebook pour permettre aux utilisateurs de se connecter automatiquement sans créer de compte manuel.

---

## 🔵 Configuration Google OAuth

### Étape 1 : Créer un projet Google Cloud

1. Allez sur [Google Cloud Console](https://console.cloud.google.com/)
2. Connectez-vous avec votre compte Google
3. Cliquez sur **"Sélectionner un projet"** en haut
4. Cliquez sur **"Nouveau projet"**
5. Donnez un nom à votre projet (ex: "MindAudit OAuth")
6. Cliquez sur **"Créer"**

### Étape 2 : Activer les API nécessaires

1. Dans le menu de gauche, allez dans **"API et services"** > **"Bibliothèque"**
2. Recherchez et activez les API suivantes :
   - **"Google+ API"** (pour les informations de profil)
   - **"People API"** (recommandé pour les données utilisateur)
3. Cliquez sur chaque API et cliquez sur **"Activer"**

### Étape 3 : Configurer l'écran de consentement OAuth

1. Allez dans **"API et services"** > **"Écran de consentement OAuth"**
2. Sélectionnez **"Externe"** (pour permettre à tous les utilisateurs de se connecter)
3. Cliquez sur **"Créer"**
4. Remplissez les informations obligatoires :
   - **Nom de l'application** : MindAudit
   - **E-mail d'assistance utilisateur** : votre email
   - **Domaine de l'application** : (laissez vide pour le développement local)
   - **E-mail du développeur** : votre email
5. Cliquez sur **"Enregistrer et continuer"**
6. Dans **"Champs d'application"**, cliquez sur **"Ajouter ou supprimer des champs d'application"**
7. Ajoutez les scopes suivants (copiez-collez les URLs complètes) :
   - `https://www.googleapis.com/auth/userinfo.email`
   - `https://www.googleapis.com/auth/userinfo.profile`
   - `openid` (ajouté automatiquement)
8. Cliquez sur **"Mettre à jour"** puis **"Enregistrer et continuer"**
9. Cliquez sur **"Retour au tableau de bord"**

### Étape 4 : Créer les identifiants OAuth

1. Allez dans **"API et services"** > **"Identifiants"**
2. Cliquez sur **"Créer des identifiants"** > **"ID client OAuth"**
3. Type d'application : **"Application Web"**
4. Nom : **"MindAudit Web Client"**
5. **URI de redirection autorisés** - Cliquez sur **"+ AJOUTER UN URI"** et ajoutez ces URLs **EXACTEMENT** :
   ```
   http://localhost:8000/connect/google/check
   http://127.0.0.1:8000/connect/google/check
   ```
   
   ⚠️ **TRÈS IMPORTANT** : 
   - L'URL doit correspondre **EXACTEMENT** (http/https, port, chemin)
   - Pas d'espace avant ou après
   - Pas de slash (/) à la fin
   - Si vous avez une erreur `redirect_uri_mismatch`, vérifiez que l'URL correspond exactement
   
   📌 **Pour la production**, ajoutez aussi :
   ```
   https://votre-domaine.com/connect/google/check
   ```
6. Cliquez sur **"Créer"**
7. **Copiez le "ID client" et le "Code secret du client"** qui s'affichent
   - Format ID client : `123456789-abcdefghijklmnop.apps.googleusercontent.com`
   - Format Secret : `GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx`

### Étape 5 : Configurer les variables d'environnement

Ouvrez votre fichier `.env.local` (créez-le s'il n'existe pas) et ajoutez :

```env
###> Google OAuth2 ###
GOOGLE_CLIENT_ID=123456789-abcdefghijklmnop.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=GOCSPX-votre_code_secret_ici
###< Google OAuth2 ###
```

---

## 🔷 Configuration Facebook OAuth

### Étape 1 : Créer une application Facebook

1. Allez sur [Facebook Developers](https://developers.facebook.com/)
2. Connectez-vous avec votre compte Facebook
3. Cliquez sur **"Mes applications"** en haut à droite
4. Cliquez sur **"Créer une application"**
5. Sélectionnez **"Consommateur"** comme type d'application
6. Cliquez sur **"Suivant"**
7. Remplissez les informations :
   - **Nom de l'application** : MindAudit
   - **E-mail de contact** : votre email
8. Cliquez sur **"Créer l'application"**

### Étape 2 : Configurer Facebook Login

1. Dans le tableau de bord de votre application, trouvez **"Facebook Login"**
2. Cliquez sur **"Configurer"**
3. Sélectionnez **"Web"**
4. Dans **"URL du site"**, entrez : `http://localhost:8000`
5. Cliquez sur **"Enregistrer"**

### Étape 3 : Configurer les paramètres OAuth

1. Dans le menu de gauche, allez dans **"Facebook Login"** > **"Paramètres"**
2. Dans **"URI de redirection OAuth valides"**, ajoutez :
   ```
   http://localhost:8000/connect/facebook/check
   http://127.0.0.1:8000/connect/facebook/check
   ```
   ⚠️ **Important** : Pour la production, ajoutez aussi :
   ```
   https://votre-domaine.com/connect/facebook/check
   ```
3. Cliquez sur **"Enregistrer les modifications"**

### Étape 4 : Récupérer les identifiants

1. Dans le menu de gauche, allez dans **"Paramètres"** > **"Paramètres de base"**
2. Vous verrez :
   - **ID de l'application** (App ID)
   - **Clé secrète de l'application** (App Secret) - cliquez sur "Afficher" pour la voir
3. **Copiez ces deux valeurs**

### Étape 5 : Configurer les variables d'environnement

Dans votre fichier `.env.local`, ajoutez :

```env
###> Facebook OAuth2 ###
FACEBOOK_CLIENT_ID=1234567890123456
FACEBOOK_CLIENT_SECRET=votre_code_secret_facebook_ici
###< Facebook OAuth2 ###
```

### Étape 6 : Passer l'application en mode Live (Production)

⚠️ **Important** : Par défaut, votre application Facebook est en mode "Développement" et seuls les testeurs peuvent l'utiliser.

1. Dans le menu de gauche, allez dans **"Paramètres"** > **"Paramètres de base"**
2. En haut de la page, vous verrez un bouton pour passer en mode **"Live"**
3. Avant de passer en Live, assurez-vous d'avoir :
   - Ajouté une **Politique de confidentialité** (URL)
   - Ajouté des **Conditions d'utilisation** (URL)
   - Rempli les informations de contact
4. Cliquez sur le bouton pour passer en mode **"Live"**

---

## ✅ Vérification de la configuration

### Fichier `.env.local` complet

Votre fichier `.env.local` devrait ressembler à ceci :

```env
###> Google OAuth2 ###
GOOGLE_CLIENT_ID=123456789-abcdefghijklmnop.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=GOCSPX-votre_code_secret_google
###< Google OAuth2 ###

###> Facebook OAuth2 ###
FACEBOOK_CLIENT_ID=1234567890123456
FACEBOOK_CLIENT_SECRET=votre_code_secret_facebook
###< Facebook OAuth2 ###
```

### Test de la configuration

1. Démarrez votre serveur Symfony :
   ```bash
   symfony server:start
   ```

2. Allez sur la page d'inscription : `http://localhost:8000/register`

3. Cliquez sur le bouton **"GOOGLE"** ou **"FACEBOOK"**

4. Vous devriez être redirigé vers la page de connexion Google/Facebook

5. Après autorisation, vous serez automatiquement connecté et redirigé vers le dashboard

---

## 🔧 Dépannage

### Erreur "redirect_uri_mismatch" (Google)

- Vérifiez que l'URL de redirection dans Google Cloud Console correspond exactement à celle utilisée
- Format : `http://localhost:8000/connect/google/check`

### Erreur "URL not allowed" (Facebook)

- Vérifiez que l'URL de redirection est bien ajoutée dans les paramètres Facebook Login
- Assurez-vous que l'application Facebook est en mode "Live" pour les utilisateurs publics

### Les boutons ne fonctionnent pas

1. Vérifiez que les variables d'environnement sont bien définies dans `.env.local`
2. Videz le cache Symfony :
   ```bash
   php bin/console cache:clear
   ```
3. Vérifiez les logs Symfony pour voir les erreurs :
   ```bash
   tail -f var/log/dev.log
   ```

### L'utilisateur n'est pas créé automatiquement

- Vérifiez que vous avez un rôle "Utilisateur" dans votre base de données
- Exécutez les fixtures si nécessaire :
  ```bash
  php bin/console doctrine:fixtures:load
  ```

---

## 📝 Notes importantes

1. **Sécurité** : Ne commitez JAMAIS le fichier `.env.local` dans Git
2. **Production** : Utilisez des variables d'environnement serveur pour la production
3. **HTTPS** : En production, utilisez toujours HTTPS pour les redirections OAuth
4. **Domaines** : Ajoutez tous vos domaines (dev, staging, prod) dans les consoles Google et Facebook

---

## 🎯 Fonctionnalités implémentées

✅ Connexion automatique avec Google
✅ Connexion automatique avec Facebook
✅ Création automatique du compte utilisateur
✅ Attribution automatique du rôle "Utilisateur"
✅ Récupération de l'avatar depuis Google/Facebook
✅ Gestion des utilisateurs existants
✅ Messages flash de confirmation

---

## 📞 Support

Si vous rencontrez des problèmes, vérifiez :
- Les logs Symfony : `var/log/dev.log`
- La console du navigateur (F12)
- Les paramètres OAuth dans Google Cloud Console et Facebook Developers
