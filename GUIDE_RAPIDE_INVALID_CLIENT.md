# 🚨 Erreur "invalid_client" - Guide Rapide

## ❌ Problème

Vous voyez cette erreur sur la page d'inscription :
```
❌ Erreur lors de la connexion avec Google : invalid_client
```

## 🔧 Solution Rapide (5 minutes)

### 1️⃣ Ouvrir Google Cloud Console

**Lien** : https://console.cloud.google.com/

### 2️⃣ Aller dans "Identifiants"

1. Menu de gauche → **"API et services"**
2. Cliquez sur **"Identifiants"**

### 3️⃣ Trouver Votre Client OAuth

Vous devriez voir un client OAuth 2.0 avec un nom comme :
- "Client Web 1"
- "MindAudit OAuth"
- Ou un autre nom

**Cliquez dessus** pour l'ouvrir.

### 4️⃣ Copier les Identifiants

Vous verrez deux informations importantes :

**A. ID client** (Client ID)
```
Exemple : 802607877999-hqm662npoc4km5ga0fe0dd73tab3i31c.apps.googleusercontent.com
```
→ **Copiez-le**

**B. Secret du client** (Client Secret)
```
Cliquez sur "Afficher le secret" ou l'icône 👁️
Exemple : GOCSPX-AbCdEfGhIjKlMnOpQrStUvWx
```
→ **Copiez-le**

### 5️⃣ Vérifier l'URI de Redirection

Dans la même page, vérifiez que cette URI est bien présente :
```
http://127.0.0.1:8000/connect/google/check
```

**Si elle n'est pas là** :
1. Cliquez sur "Ajouter un URI"
2. Collez : `http://127.0.0.1:8000/connect/google/check`
3. Cliquez sur "Enregistrer"

### 6️⃣ Mettre à Jour .env.local

Ouvrez le fichier `.env.local` dans votre projet et remplacez :

```env
###> Google OAuth2 ###
GOOGLE_CLIENT_ID=COLLEZ_VOTRE_CLIENT_ID_ICI
GOOGLE_CLIENT_SECRET=COLLEZ_VOTRE_CLIENT_SECRET_ICI
###< Google OAuth2 ###
```

**Exemple avec de vraies valeurs** :
```env
###> Google OAuth2 ###
GOOGLE_CLIENT_ID=802607877999-abc123def456.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=GOCSPX-XyZ789AbC123DeF456
###< Google OAuth2 ###
```

### 7️⃣ Vider le Cache

Dans le terminal, exécutez :
```bash
php bin/console cache:clear
```

### 8️⃣ Tester à Nouveau

1. Retournez sur : http://127.0.0.1:8000/register
2. Cliquez sur le bouton **Google**
3. Ça devrait fonctionner maintenant ! ✅

## 🆘 Si Vous N'avez Pas de Client OAuth

### Créer un Nouveau Client OAuth

1. Sur https://console.cloud.google.com/
2. API et services → Identifiants
3. Cliquez sur **"+ CRÉER DES IDENTIFIANTS"**
4. Sélectionnez **"ID client OAuth 2.0"**
5. Type d'application : **"Application Web"**
6. Nom : `MindAudit OAuth`
7. URI de redirection : `http://127.0.0.1:8000/connect/google/check`
8. Cliquez sur **"CRÉER"**
9. Copiez le Client ID et le Client Secret
10. Mettez-les dans `.env.local`

## 📋 Checklist Rapide

- [ ] J'ai ouvert Google Cloud Console
- [ ] J'ai trouvé mon Client OAuth 2.0
- [ ] J'ai copié le Client ID
- [ ] J'ai copié le Client Secret
- [ ] J'ai vérifié l'URI de redirection
- [ ] J'ai mis à jour `.env.local`
- [ ] J'ai vidé le cache
- [ ] J'ai testé à nouveau

## ✅ Résultat Attendu

Après avoir suivi ces étapes, quand vous cliquez sur le bouton Google :
1. ✅ Vous êtes redirigé vers la page de connexion Google
2. ✅ Vous sélectionnez votre compte
3. ✅ Vous autorisez l'application
4. ✅ Vous êtes automatiquement connecté et redirigé vers /espace-utilisateur

**Plus d'erreur "invalid_client" !** 🎉

## 🔗 Liens Utiles

- Google Cloud Console : https://console.cloud.google.com/
- Documentation OAuth Google : https://developers.google.com/identity/protocols/oauth2

## 📞 Besoin d'Aide ?

Si vous ne trouvez pas vos identifiants ou si vous avez besoin de créer un nouveau projet Google, consultez le fichier `CORRIGER_INVALID_CLIENT.md` pour un guide détaillé.
