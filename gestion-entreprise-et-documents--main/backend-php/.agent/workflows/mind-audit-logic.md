---
description: Logique de travail et architecture du projet MindAudit
---
# 🧩 MindAudit - Logique de Travail

Ce projet est une application monolithique Symfony structurée pour une séparation claire entre le **Front Office** (Public) et le **Back Office** (Administration).

- **Sécurité** : Les entités suivent un schéma SQL strict. Les timestamps complexes ont été simplifiés (`date_creation`, `date_upload`) pour garantir la robustesse.
- **Upload** : `VichUploaderBundle` est utilisé pour la gestion des fichiers dans le module Document.
- **Export** : `Dompdf` est configuré pour générer des PDF à partir de templates Twig dédiés (`pdf.html.twig`).
- **Ajax** : Les recherches dans les listes admin utilisent un endpoint `/search` qui renvoie un fragment HTML (`_table.html.twig`) pour une mise à jour instantanée sans rechargement.

## 🚀 Guide de Maintenance
// turbo-all
1. **Ajouter un critère de recherche** :
   - Modifier le `Repository` de l'entité (`searchByCriteria`).
   - Mettre à jour le formulaire Twig et le script JS dans `index.html.twig`.
2. **Modifier le Workflow** :
   - Les transitions sont gérées par des méthodes `validate` et `reject` dans les contrôleurs respectifs.
   - Les notifications sont simulées via des Flash Messages (`addFlash`).
