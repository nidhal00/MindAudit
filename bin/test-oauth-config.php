#!/usr/bin/env php
<?php

/**
 * Script de test de configuration OAuth
 * Usage: php bin/test-oauth-config.php
 */

echo "\n";
echo "╔════════════════════════════════════════════════════════════╗\n";
echo "║         Test de Configuration OAuth - MindAudit           ║\n";
echo "╚════════════════════════════════════════════════════════════╝\n";
echo "\n";

// Charger l'autoloader
require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Charger les variables d'environnement
$dotenv = new Dotenv();
$envFile = __DIR__ . '/../.env';
$envLocalFile = __DIR__ . '/../.env.local';

if (file_exists($envFile)) {
    $dotenv->load($envFile);
    echo "✅ Fichier .env chargé\n";
} else {
    echo "❌ Fichier .env non trouvé\n";
}

if (file_exists($envLocalFile)) {
    $dotenv->load($envLocalFile);
    echo "✅ Fichier .env.local chargé\n";
} else {
    echo "⚠️  Fichier .env.local non trouvé (créez-le pour vos identifiants OAuth)\n";
}

echo "\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "  VÉRIFICATION DES VARIABLES D'ENVIRONNEMENT\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "\n";

// Vérifier Google OAuth
echo "🔵 Google OAuth:\n";
$googleClientId = $_ENV['GOOGLE_CLIENT_ID'] ?? null;
$googleClientSecret = $_ENV['GOOGLE_CLIENT_SECRET'] ?? null;

if ($googleClientId && $googleClientId !== 'your_google_client_id_here') {
    echo "  ✅ GOOGLE_CLIENT_ID: " . substr($googleClientId, 0, 20) . "...\n";
    
    // Vérifier le format
    if (strpos($googleClientId, '.apps.googleusercontent.com') !== false) {
        echo "     Format correct ✓\n";
    } else {
        echo "     ⚠️  Format inhabituel (devrait se terminer par .apps.googleusercontent.com)\n";
    }
} else {
    echo "  ❌ GOOGLE_CLIENT_ID non configuré ou valeur par défaut\n";
}

if ($googleClientSecret && $googleClientSecret !== 'your_google_client_secret_here') {
    echo "  ✅ GOOGLE_CLIENT_SECRET: " . substr($googleClientSecret, 0, 15) . "...\n";
    
    // Vérifier le format
    if (strpos($googleClientSecret, 'GOCSPX-') === 0) {
        echo "     Format correct ✓\n";
    } else {
        echo "     ⚠️  Format inhabituel (devrait commencer par GOCSPX-)\n";
    }
} else {
    echo "  ❌ GOOGLE_CLIENT_SECRET non configuré ou valeur par défaut\n";
}

echo "\n";

// Vérifier Facebook OAuth
echo "🔷 Facebook OAuth:\n";
$facebookClientId = $_ENV['FACEBOOK_CLIENT_ID'] ?? null;
$facebookClientSecret = $_ENV['FACEBOOK_CLIENT_SECRET'] ?? null;

if ($facebookClientId && $facebookClientId !== 'your_facebook_app_id_here') {
    echo "  ✅ FACEBOOK_CLIENT_ID: " . $facebookClientId . "\n";
    
    // Vérifier le format (devrait être numérique)
    if (is_numeric($facebookClientId)) {
        echo "     Format correct ✓\n";
    } else {
        echo "     ⚠️  Format inhabituel (devrait être numérique)\n";
    }
} else {
    echo "  ❌ FACEBOOK_CLIENT_ID non configuré ou valeur par défaut\n";
}

if ($facebookClientSecret && $facebookClientSecret !== 'your_facebook_app_secret_here') {
    echo "  ✅ FACEBOOK_CLIENT_SECRET: " . substr($facebookClientSecret, 0, 15) . "...\n";
} else {
    echo "  ❌ FACEBOOK_CLIENT_SECRET non configuré ou valeur par défaut\n";
}

echo "\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "  VÉRIFICATION DES FICHIERS\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "\n";

// Vérifier les fichiers importants
$files = [
    'config/packages/knpu_oauth2_client.yaml' => 'Configuration OAuth',
    'src/Controller/OAuthController.php' => 'Contrôleur OAuth',
    'src/Security/OAuthAuthenticator.php' => 'Authenticator OAuth',
    'templates/security/login.html.twig' => 'Template de connexion',
    'templates/security/register.html.twig' => 'Template d\'inscription',
];

foreach ($files as $file => $description) {
    if (file_exists(__DIR__ . '/../' . $file)) {
        echo "✅ $description: $file\n";
    } else {
        echo "❌ $description manquant: $file\n";
    }
}

echo "\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "  VÉRIFICATION DES DÉPENDANCES COMPOSER\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "\n";

$composerLock = json_decode(file_get_contents(__DIR__ . '/../composer.lock'), true);
$packages = $composerLock['packages'] ?? [];

$requiredPackages = [
    'knpuniversity/oauth2-client-bundle' => 'Bundle OAuth2 Client',
    'league/oauth2-google' => 'Provider Google OAuth2',
    'league/oauth2-facebook' => 'Provider Facebook OAuth2',
];

foreach ($requiredPackages as $packageName => $description) {
    $found = false;
    foreach ($packages as $package) {
        if ($package['name'] === $packageName) {
            echo "✅ $description ($packageName) v" . $package['version'] . "\n";
            $found = true;
            break;
        }
    }
    if (!$found) {
        echo "❌ $description ($packageName) non installé\n";
    }
}

echo "\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "  URLS DE REDIRECTION\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "\n";

echo "📍 URLs à configurer dans les consoles OAuth:\n\n";
echo "Google Cloud Console:\n";
echo "  → http://localhost:8000/connect/google/check\n";
echo "  → http://127.0.0.1:8000/connect/google/check\n";
echo "\n";
echo "Facebook Developers:\n";
echo "  → http://localhost:8000/connect/facebook/check\n";
echo "  → http://127.0.0.1:8000/connect/facebook/check\n";

echo "\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "  RÉSUMÉ\n";
echo "─────────────────────────────────────────────────────────────\n";
echo "\n";

$googleOk = $googleClientId && $googleClientId !== 'your_google_client_id_here' 
         && $googleClientSecret && $googleClientSecret !== 'your_google_client_secret_here';

$facebookOk = $facebookClientId && $facebookClientId !== 'your_facebook_app_id_here' 
           && $facebookClientSecret && $facebookClientSecret !== 'your_facebook_app_secret_here';

if ($googleOk && $facebookOk) {
    echo "✅ Configuration complète ! Google et Facebook sont configurés.\n";
    echo "\n";
    echo "Prochaines étapes:\n";
    echo "1. Démarrez le serveur: symfony server:start\n";
    echo "2. Ouvrez: http://localhost:8000/register\n";
    echo "3. Testez les boutons Google et Facebook\n";
} elseif ($googleOk || $facebookOk) {
    echo "⚠️  Configuration partielle:\n";
    if ($googleOk) {
        echo "  ✅ Google OAuth configuré\n";
    } else {
        echo "  ❌ Google OAuth non configuré\n";
    }
    if ($facebookOk) {
        echo "  ✅ Facebook OAuth configuré\n";
    } else {
        echo "  ❌ Facebook OAuth non configuré\n";
    }
    echo "\n";
    echo "Consultez: CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md\n";
} else {
    echo "❌ Configuration incomplète\n";
    echo "\n";
    echo "Actions requises:\n";
    echo "1. Créez le fichier .env.local\n";
    echo "2. Ajoutez vos identifiants OAuth (voir CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md)\n";
    echo "3. Relancez ce script pour vérifier\n";
}

echo "\n";
echo "📚 Documentation:\n";
echo "  - CONFIGURATION_OAUTH_GOOGLE_FACEBOOK.md (guide complet)\n";
echo "  - TEST_OAUTH.md (tests et dépannage)\n";
echo "\n";
