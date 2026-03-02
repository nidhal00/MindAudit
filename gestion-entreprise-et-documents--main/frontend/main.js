// MindAudit Dynamic Frontend
// Ce script permet de simuler les différentes vues pour les acteurs

console.log("MindAudit Frontend Initialized");

// Les fonctions de switch sont déjà dans le HTML pour ce template d'exemple.
// On pourrait ajouter ici des animations ou des appels mock-API.

document.querySelectorAll('.sidebar-link').forEach(link => {
    link.addEventListener('click', (e) => {
        document.querySelector('.sidebar-link.active')?.classList.remove('active');
        link.classList.add('active');
    });
});
