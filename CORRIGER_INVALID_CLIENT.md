# 🔧 Correction Erreur "invalid_client" - OAuth Google

## ❌ Erreur Actuelle

```
Erreur lors de la connexion avec Google : invalid_client
```

## 🔍 Cause du Problème

L'erreur "invalid_client" signifie que Google ne reconnaît pas vos identifiants OAuth. Cela arrive quand :
- Le Client ID est incorrect
- Le Client Secret est incorrect ou a été régénéré
- Les identifiants ne correspondent pas au projet Google

## ✅ Solution : Récupérer les Bons Identifiants

### Étape 1 : Accéder à Google Cloud Console

1. Ouvrez : https://console.cloud.google.com/
2. Connectez-vous avec votre compte Google
3. Sélectionnez votre projet (ou créez-en un nouveau)

### Étape 2 : Accéder aux Identifiants OAuth

1. Dans le menu de gauche, cliquez sur **"API et services"**
2. Cliquez sur **"Identifiants"**
3. Vous verrez la liste de vos identifiants OAuth 2.0

### Étape 3 : Vérifier/Créer les Identifiants

#### Option A : Utiliser un identifiant existant

1. Cliquez sur le nom de votre identifiant OAuth 2.0
2. Vous verrez :
   - **ID client** : Copiez-le (commence par un nombre et finit par .apps.googleusercontent.com)
   - **Secret du client** : Cliquez sur "Afficher le secret" ou "Régénérer le secret"

#### Option B : Créer un nouvel identifiant

1. Cliquez sur **"+ CRÉER DES IDENTIFIANTS"**
2. Sélectionnez **"ID client OAuth 2.0"**
3. Type d'application : **"Application Web"**
4. Nom : "MindAudit OAuth"
5. **URI de redirection autorisés** : Ajoutez
   ```
   http://127.0.0.1:8000/connect/google/check
   ```
6. Cliquez sur **"CRÉER"**
7. Une popup s'affiche avec :
   - **ID client** : Copiez-le
   - **Secret du client** : Copiez-le

### Étape 4 : Mettre à Jour .env.local

1. Ouvrez le fichier `.env.local` dans votre projet
2. Remplacez les valeurs :

```env
###> Google OAuth2 ###
GOOGLE_CLIENT_ID=VOTRE_NOUVEAU_CLIENT_ID_ICI
GOOGLE_CLIENT_SECRET=VOTRE_NOUVEAU_CLIENT_SECRET_ICI
###< Google OAuth2 ###
```

**Exemple** :
```env
GOOGLE_CLIENT_ID=123456789-abcdefghijklmnop.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=GOCSPX-AbCdEfGhIjKlMnOpQrStUvWx
```

### Étape 5 : Vider le Cache

```bash
php bin/console cache:clear
```

### Étape 6 : Redémarrer le Serveur

```bash
symfony server:stop
symfony server:start
```

## 📋 Checklist de Vérification

Avant de tester à nouveau, vérifiez :

- [ ] Le Client ID commence par un nombre et finit par `.apps.googleusercontent.com`
- [ ] Le Client Secret commence par `GOCSPX-` (généralement)
- [ ] L'URI de redirection `http://127.0.0.1:8000/connect/google/check` est bien ajoutée dans Google Cloud Console
- [ ] Le fichier `.env.local` est bien enregistré
- [ ] Le cache a été vidé
- [ ] Le serveur a été redémarré

## 🧪 Test Après Correction

1. Ouvrez : http://127.0.0.1:8000/login
2. Cliquez sur le bouton **Google**
3. Vous devriez être redirigé vers la page de connexion Google (pas d'erreur)
4. Sélectionnez votre compte
5. Autorisez l'application
6. Vous devriez être connecté automatiquement

## 🔍 Vérification des Identifiants Actuels

### Client ID Actuel
```
VOTRE_CLIENT_ID_ICI
```

### Client Secret Actuel
```
VOTRE_CLIENT_SECRET_ICI
```

**⚠️ Vérifiez que ces identifiants correspondent à ceux dans Google Cloud Console.**

Cela signifie probablement que :
1. Le Client Secret a été régénéré dans Google Cloud Console
2. Le projet Google a été supprimé ou modifié
3. Les identifiants appartiennent à un autre projet

## 🎯 Action Recommandée

**Régénérer un nouveau Client Secret** :

1. Allez sur https://console.cloud.google.com/
2. API et services → Identifiants
3. Cliquez sur votre ID client OAuth 2.0
4. Cliquez sur **"RÉINITIALISER LE SECRET"** ou **"RÉGÉNÉRER LE SECRET"**
5. Copiez le nouveau secret
6. Mettez à jour `.env.local` avec le nouveau secret
7. Videz le cache : `php bin/console cache:clear`
8. Testez à nouveau

## 📸 Capture d'Écran de Référence

Dans Google Cloud Console, vous devriez voir :

```
Identifiants OAuth 2.0

Nom : [Nom de votre client]
ID client : VOTRE_CLIENT_ID_ICI
Secret du client : [Cliquez pour afficher]

URI de redirection autorisés :
✅ http://127.0.0.1:8000/connect/google/check
```

## 🆘 Si le Problème Persiste

### Option 1 : Créer un Nouveau Projet Google

1. Créez un nouveau projet dans Google Cloud Console
2. Activez l'API Google+ ou Google Identity
3. Créez de nouveaux identifiants OAuth 2.0
4. Mettez à jour `.env.local`

### Option 2 : Vérifier les API Activées

1. Dans Google Cloud Console
2. API et services → Bibliothèque
3. Recherchez "Google+ API" ou "Google Identity"
4. Assurez-vous qu'elle est activée

### Option 3 : Vérifier l'Écran de Consentement

1. API et services → Écran de consentement OAuth
2. Vérifiez que l'écran de consentement est configuré
3. Ajoutez votre email de test si nécessaire

## 📝 Résumé

**Problème** : invalid_client
**Cause** : Identifiants OAuth Google incorrects ou expirés
**Solution** : Récupérer les bons identifiants depuis Google Cloud Console et mettre à jour `.env.local`

**Prochaine étape** : Allez sur https://console.cloud.google.com/ et récupérez vos identifiants OAuth 2.0
