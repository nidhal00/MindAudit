# Correction de l'erreur OAuth Google - redirect_uri_mismatch

## Problème
Erreur 400 : redirect_uri_mismatch - L'URI de redirection ne correspond pas

## Solution

### Étape 1 : Accéder à Google Cloud Console
1. Allez sur : https://console.cloud.google.com/
2. Connectez-vous avec votre compte Google
3. Sélectionnez votre projet (ou créez-en un si nécessaire)

### Étape 2 : Configurer les URI de redirection
1. Dans le menu de gauche, cliquez sur **"API et services"** > **"Identifiants"**
2. Trouvez votre **ID client OAuth 2.0** dans la liste
3. Cliquez dessus pour l'éditer
4. Dans la section **"URI de redirection autorisés"**, ajoutez :
   ```
   http://127.0.0.1:8000/connect/google/check
   ```
5. Vous pouvez aussi ajouter (optionnel) :
   ```
   http://localhost:8000/connect/google/check
   ```
6. Cliquez sur **"Enregistrer"**

### Étape 3 : Vérifier vos identifiants
Assurez-vous que votre fichier `.env.local` contient :
```
GOOGLE_CLIENT_ID=VOTRE_CLIENT_ID_ICI
GOOGLE_CLIENT_SECRET=VOTRE_CLIENT_SECRET_ICI
```

### Étape 4 : Tester
1. Videz le cache : `php bin/console cache:clear`
2. Allez sur : http://127.0.0.1:8000/login
3. Cliquez sur le bouton "Google"
4. La connexion devrait maintenant fonctionner

## URLs importantes pour votre application

### URLs de redirection OAuth
- **Google** : `http://127.0.0.1:8000/connect/google/check`
- **Facebook** : `http://127.0.0.1:8000/connect/facebook/check`

### URLs d'origine autorisées (JavaScript origins)
Si demandé, ajoutez aussi :
- `http://127.0.0.1:8000`
- `http://localhost:8000`

## Vérification de la configuration

Pour vérifier que tout est correct, exécutez :
```bash
php bin/console debug:router | grep connect
```

Vous devriez voir :
```
connect_google          ANY      ANY      ANY    /connect/google
connect_google_check    ANY      ANY      ANY    /connect/google/check
connect_facebook        ANY      ANY      ANY    /connect/facebook
connect_facebook_check  ANY      ANY      ANY    /connect/facebook/check
```

## En cas de problème persistant

1. Vérifiez que le serveur Symfony tourne sur le bon port (8000)
2. Vérifiez que vous utilisez bien `127.0.0.1` et non `localhost` si c'est ce qui est configuré
3. Attendez quelques minutes après avoir modifié la configuration Google (propagation)
4. Essayez en navigation privée pour éviter les problèmes de cache
