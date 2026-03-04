# 🧪 Test et Vérification OAuth

## ✅ Checklist de configuration

### Configuration Google

- [ ] Projet créé sur Google Cloud Console
- [ ] API Google+ activée
- [ ] API People activée (recommandé)
- [ ] Écran de consentement OAuth configuré
- [ ] Type d'utilisateur : Externe
- [ ] Scopes ajoutés : `userinfo.email` et `userinfo.profile`
- [ ] ID client OAuth créé (type: Application Web)
- [ ] URI de redirection ajouté : `http://localhost:8000/connect/google/check`
- [ ] GOOGLE_CLIENT_ID copié dans `.env.local`
- [ ] GOOGLE_CLIENT_SECRET copié dans `.env.local`

### Configuration Facebook

- [ ] Application créée sur Facebook Developers
- [ ] Type d'application : Consommateur
- [ ] Facebook Login configuré
- [ ] URI de redirection OAuth ajouté : `http://localhost:8000/connect/facebook/check`
- [ ] Application passée en mode "Live" (pour les utilisateurs publics)
- [ ] FACEBOOK_CLIENT_ID copié dans `.env.local`
- [ ] FACEBOOK_CLIENT_SECRET copié dans `.env.local`

### Configuration Symfony

- [ ] Fichier `.env.local` créé avec les identifiants
- [ ] Cache Symfony vidé : `php bin/console cache:clear`
- [ ] Base de données à jour avec les champs OAuth
- [ ] Rôle "Utilisateur" existe dans la base de données

---

## 🔍 Commandes de vérification

### 1. Vérifier que les variables d'environnement sont chargées

```bash
php bin/console debug:container --env-vars
```

Recherchez `GOOGLE_CLIENT_ID`, `GOOGLE_CLIENT_SECRET`, `FACEBOOK_CLIENT_ID`, `FACEBOOK_CLIENT_SECRET`

### 2. Vérifier la configuration OAuth

```bash
php bin/console debug:config knpu_oauth2_client
```

Vous devriez voir les clients `google` et `facebook` configurés.

### 3. Vérifier les routes OAuth

```bash
php bin/console debug:router | findstr connect
```

Vous devriez voir :
- `connect_google` → `/connect/google`
- `connect_google_check` → `/connect/google/check`
- `connect_facebook` → `/connect/facebook`
- `connect_facebook_check` → `/connect/facebook/check`

### 4. Vérifier la structure de la base de données

```bash
php bin/console doctrine:schema:validate
```

Vérifiez que les champs `oauth_provider`, `oauth_id`, et `avatar` existent dans la table `utilisateur`.

### 5. Vérifier qu'un rôle "Utilisateur" existe

```bash
php bin/console doctrine:query:sql "SELECT * FROM role WHERE nom = 'Utilisateur'"
```

Si aucun résultat, créez-le :

```bash
php bin/console doctrine:fixtures:load --append
```

---

## 🧪 Tests manuels

### Test 1 : Vérifier que les boutons sont visibles

1. Démarrez le serveur :
   ```bash
   symfony server:start
   ```

2. Ouvrez votre navigateur : `http://localhost:8000/register`

3. Vérifiez que vous voyez :
   - ✅ Bouton rouge "GOOGLE" avec icône
   - ✅ Bouton bleu "FACEBOOK" avec icône

### Test 2 : Test de redirection Google

1. Cliquez sur le bouton **"GOOGLE"**

2. **Résultat attendu** : Vous êtes redirigé vers `accounts.google.com`

3. **Erreurs possibles** :

   **Erreur : "redirect_uri_mismatch"**
   ```
   Error 400: redirect_uri_mismatch
   The redirect URI in the request, http://localhost:8000/connect/google/check, 
   does not match the ones authorized for the OAuth client.
   ```
   
   **Solution** :
   - Allez sur [Google Cloud Console](https://console.cloud.google.com/)
   - API et services → Identifiants
   - Cliquez sur votre client OAuth
   - Vérifiez que `http://localhost:8000/connect/google/check` est dans les URI autorisés
   - **Attention** : Pas d'espace, pas de slash à la fin, http (pas https) pour localhost

   **Erreur : "invalid_client"**
   ```
   Error 401: invalid_client
   The OAuth client was not found.
   ```
   
   **Solution** :
   - Vérifiez que `GOOGLE_CLIENT_ID` dans `.env.local` correspond à l'ID dans Google Cloud Console
   - Videz le cache : `php bin/console cache:clear`

### Test 3 : Test de connexion complète Google

1. Cliquez sur **"GOOGLE"**
2. Sélectionnez votre compte Google
3. Acceptez les permissions demandées
4. **Résultat attendu** : 
   - Vous êtes redirigé vers `/login` avec un message de succès
   - Puis automatiquement connecté et redirigé vers `/dashboard`
   - Votre compte utilisateur est créé dans la base de données

5. **Vérifier dans la base de données** :
   ```bash
   php bin/console doctrine:query:sql "SELECT email, nom, prenom, oauth_provider FROM utilisateur WHERE oauth_provider = 'google'"
   ```

### Test 4 : Test de redirection Facebook

1. Cliquez sur le bouton **"FACEBOOK"**

2. **Résultat attendu** : Vous êtes redirigé vers `facebook.com`

3. **Erreurs possibles** :

   **Erreur : "URL Blocked: This redirect failed"**
   ```
   URL Blocked: This redirect failed because the redirect URI is not whitelisted 
   in the app's Client OAuth Settings.
   ```
   
   **Solution** :
   - Allez sur [Facebook Developers](https://developers.facebook.com/)
   - Sélectionnez votre application
   - Facebook Login → Paramètres
   - Ajoutez `http://localhost:8000/connect/facebook/check` dans "URI de redirection OAuth valides"
   - Cliquez sur "Enregistrer les modifications"

   **Erreur : "App Not Setup: This app is still in development mode"**
   ```
   App Not Setup: This app is still in development mode, and you don't have access to it.
   ```
   
   **Solution** :
   - Votre application Facebook est en mode "Développement"
   - Option 1 : Ajoutez-vous comme testeur (Rôles → Testeurs)
   - Option 2 : Passez l'application en mode "Live" (voir guide principal)

### Test 5 : Test de connexion complète Facebook

1. Cliquez sur **"FACEBOOK"**
2. Connectez-vous avec votre compte Facebook
3. Acceptez les permissions demandées
4. **Résultat attendu** : 
   - Vous êtes redirigé vers `/login` avec un message de succès
   - Puis automatiquement connecté et redirigé vers `/dashboard`
   - Votre compte utilisateur est créé dans la base de données

5. **Vérifier dans la base de données** :
   ```bash
   php bin/console doctrine:query:sql "SELECT email, nom, prenom, oauth_provider FROM utilisateur WHERE oauth_provider = 'facebook'"
   ```

---

## 🐛 Dépannage avancé

### Activer les logs détaillés

Modifiez `config/packages/monolog.yaml` pour voir les logs OAuth :

```yaml
monolog:
    handlers:
        main:
            type: stream
            path: "%kernel.logs_dir%/%kernel.environment%.log"
            level: debug
```

Puis consultez les logs :

```bash
tail -f var/log/dev.log
```

### Vérifier les requêtes HTTP

Ouvrez la console du navigateur (F12) → Onglet "Réseau" pour voir :
- La redirection vers Google/Facebook
- La réponse avec le code d'autorisation
- La redirection finale vers votre application

### Tester manuellement l'URL de redirection Google

Remplacez `YOUR_CLIENT_ID` par votre vrai Client ID :

```
https://accounts.google.com/o/oauth2/v2/auth?client_id=YOUR_CLIENT_ID&redirect_uri=http://localhost:8000/connect/google/check&response_type=code&scope=https://www.googleapis.com/auth/userinfo.email%20https://www.googleapis.com/auth/userinfo.profile&access_type=offline
```

### Vérifier que le bundle OAuth est installé

```bash
composer show knpuniversity/oauth2-client-bundle
```

Si non installé :

```bash
composer require knpuniversity/oauth2-client-bundle
composer require league/oauth2-google
composer require league/oauth2-facebook
```

---

## 📊 Exemple de fichier `.env.local` complet

```env
###> Google OAuth2 ###
GOOGLE_CLIENT_ID=123456789-abcdefghijklmnopqrstuvwxyz.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx
###< Google OAuth2 ###

###> Facebook OAuth2 ###
FACEBOOK_CLIENT_ID=1234567890123456
FACEBOOK_CLIENT_SECRET=abcdef1234567890abcdef1234567890
###< Facebook OAuth2 ###
```

---

## ✅ Validation finale

Si tout fonctionne correctement :

1. ✅ Les boutons Google et Facebook sont visibles sur `/login` et `/register`
2. ✅ Cliquer sur Google redirige vers la page de connexion Google
3. ✅ Cliquer sur Facebook redirige vers la page de connexion Facebook
4. ✅ Après autorisation, l'utilisateur est créé automatiquement
5. ✅ L'utilisateur est connecté et redirigé vers le dashboard
6. ✅ Les informations (nom, prénom, email, avatar) sont récupérées
7. ✅ Le rôle "Utilisateur" est assigné automatiquement

---

## 📞 Support

Si vous rencontrez toujours des problèmes après avoir suivi ce guide :

1. Vérifiez les logs Symfony : `var/log/dev.log`
2. Vérifiez la console du navigateur (F12)
3. Vérifiez que les URI de redirection correspondent EXACTEMENT
4. Videz le cache : `php bin/console cache:clear`
5. Redémarrez le serveur Symfony

**Erreurs courantes** :
- `redirect_uri_mismatch` → URI de redirection incorrect
- `invalid_client` → Client ID ou Secret incorrect
- `access_denied` → L'utilisateur a refusé l'autorisation
- Utilisateur non créé → Vérifiez qu'un rôle "Utilisateur" existe
