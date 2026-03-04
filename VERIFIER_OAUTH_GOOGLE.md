# ❌ Erreur OAuth Google - redirect_uri_mismatch

## Problème actuel
Vous obtenez l'erreur : **"Erreur 400 : redirect_uri_mismatch"**

Cela signifie que l'URI de redirection n'est PAS configurée dans Google Cloud Console.

## ✅ Solution OBLIGATOIRE

### Étape 1 : Accéder à Google Cloud Console
1. Ouvrez : https://console.cloud.google.com/apis/credentials
2. Connectez-vous avec votre compte Google
3. Sélectionnez votre projet "My Project 45855"

### Étape 2 : Modifier le Client OAuth
1. Dans la section **"ID clients OAuth 2.0"**
2. Cliquez sur **"Client Web 1"** (ID: 802607877999-hqm6...)
3. Vous verrez une page avec :
   - Nom du client
   - ID client
   - Secret du client
   - **URI de redirection autorisés** ← SECTION IMPORTANTE

### Étape 3 : Ajouter l'URI de redirection
1. Dans la section **"URI de redirection autorisés"**
2. Cliquez sur **"+ AJOUTER UN URI"**
3. Collez EXACTEMENT cette URL :
   ```
   http://127.0.0.1:8000/connect/google/check
   ```
4. Cliquez sur **"ENREGISTRER"** en bas de la page

### Étape 4 : Attendre et tester
1. Attendez 1-2 minutes (propagation des changements)
2. Allez sur : http://127.0.0.1:8000/login
3. Cliquez sur le bouton "Google"
4. La connexion devrait maintenant fonctionner !

## 📋 Checklist de vérification

- [ ] J'ai accédé à Google Cloud Console
- [ ] J'ai trouvé mon client OAuth "Client Web 1"
- [ ] J'ai cliqué sur "+ AJOUTER UN URI"
- [ ] J'ai ajouté : `http://127.0.0.1:8000/connect/google/check`
- [ ] J'ai cliqué sur "ENREGISTRER"
- [ ] J'ai attendu 1-2 minutes
- [ ] J'ai testé la connexion Google

## ⚠️ Erreurs courantes

### Erreur 1 : Mauvaise URL
❌ `http://localhost:8000/connect/google/check`
✅ `http://127.0.0.1:8000/connect/google/check`

### Erreur 2 : Oublier le /check
❌ `http://127.0.0.1:8000/connect/google`
✅ `http://127.0.0.1:8000/connect/google/check`

### Erreur 3 : Mauvais port
❌ `http://127.0.0.1:3000/connect/google/check`
✅ `http://127.0.0.1:8000/connect/google/check`

## 🔍 Comment vérifier que c'est configuré

Une fois configuré dans Google Cloud Console, vous devriez voir dans la section "URI de redirection autorisés" :

```
http://127.0.0.1:8000/connect/google/check
```

## 📞 Si ça ne fonctionne toujours pas

1. Vérifiez que le serveur Symfony tourne sur le port 8000
2. Vérifiez que vous utilisez bien `127.0.0.1` et non `localhost`
3. Essayez en navigation privée (pour éviter les problèmes de cache)
4. Vérifiez les logs du serveur Symfony

## 🎯 Configuration actuelle de votre application

Votre application est configurée avec :
- **Client ID** : `802607877999-hqm662npoc4km5ga0fe0dd73tab3i31c.apps.googleusercontent.com`
- **Redirect URI** : `http://127.0.0.1:8000/connect/google/check`
- **Route Symfony** : `connect_google_check`

Tout est correct côté application. Le problème est uniquement dans Google Cloud Console.

## 📸 Capture d'écran de ce que vous devez voir

Dans Google Cloud Console, après configuration, vous devriez voir :

```
URI de redirection autorisés
http://127.0.0.1:8000/connect/google/check     [X]
+ AJOUTER UN URI
```

## ✅ Une fois configuré

Après avoir ajouté l'URI dans Google Cloud Console :
1. La connexion Google fonctionnera
2. Les utilisateurs pourront se connecter avec leur compte Google
3. Un compte sera automatiquement créé s'il n'existe pas
4. L'utilisateur sera redirigé vers son espace approprié

## 🚀 Prochaines étapes après correction

Une fois Google OAuth fonctionnel :
1. Testez la connexion avec plusieurs comptes Google
2. Configurez Facebook OAuth de la même manière
3. Configurez l'envoi d'emails pour la réinitialisation de mot de passe
4. Testez toutes les fonctionnalités de l'application
