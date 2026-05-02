<?php

namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Création des 3 rôles principaux
        
        // 1. Administrateur
        $roleAdmin = new Role();
        $roleAdmin->setNom('Administrateur');
        $roleAdmin->setDescription('Accès complet au système - Gestion des utilisateurs, rôles et configuration');
        $roleAdmin->setPermissions([
            'user.create', 'user.edit', 'user.delete', 'user.view',
            'role.create', 'role.edit', 'role.delete', 'role.view',
            'audit.create', 'audit.edit', 'audit.delete', 'audit.view', 'audit.report',
            'admin.access', 'admin.config'
        ]);
        $manager->persist($roleAdmin);

        // 2. Auditeur
        $roleAuditeur = new Role();
        $roleAuditeur->setNom('Auditeur');
        $roleAuditeur->setDescription('Responsable des audits - Peut créer, gérer et générer des rapports d\'audit');
        $roleAuditeur->setPermissions([
            'user.view',
            'role.view',
            'audit.create', 'audit.edit', 'audit.delete', 'audit.view', 'audit.report'
        ]);
        $manager->persist($roleAuditeur);

        // 3. Utilisateur
        $roleUtilisateur = new Role();
        $roleUtilisateur->setNom('Utilisateur');
        $roleUtilisateur->setDescription('Utilisateur standard - Peut consulter les audits et participer aux processus');
        $roleUtilisateur->setPermissions([
            'user.view',
            'audit.view'
        ]);
        $manager->persist($roleUtilisateur);

        // Création des utilisateurs de test
        
        // Administrateur
        $admin = new Utilisateur();
        $admin->setNom('Admin');
        $admin->setPrenom('Super');
        $admin->setEmail('admin@mindaudit.com');
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin123'));
        $admin->setRole($roleAdmin);
        $admin->setActif(true);
        $manager->persist($admin);

        // Auditeurs
        $auditeur1 = new Utilisateur();
        $auditeur1->setNom('Dupont');
        $auditeur1->setPrenom('Jean');
        $auditeur1->setEmail('jean.dupont@mindaudit.com');
        $auditeur1->setPassword($this->passwordHasher->hashPassword($auditeur1, 'password123'));
        $auditeur1->setRole($roleAuditeur);
        $auditeur1->setActif(true);
        $manager->persist($auditeur1);

        $auditeur2 = new Utilisateur();
        $auditeur2->setNom('Martin');
        $auditeur2->setPrenom('Sophie');
        $auditeur2->setEmail('sophie.martin@mindaudit.com');
        $auditeur2->setPassword($this->passwordHasher->hashPassword($auditeur2, 'password123'));
        $auditeur2->setRole($roleAuditeur);
        $auditeur2->setActif(true);
        $manager->persist($auditeur2);

        // Utilisateurs standards
        $utilisateur1 = new Utilisateur();
        $utilisateur1->setNom('Bernard');
        $utilisateur1->setPrenom('Pierre');
        $utilisateur1->setEmail('pierre.bernard@mindaudit.com');
        $utilisateur1->setPassword($this->passwordHasher->hashPassword($utilisateur1, 'password123'));
        $utilisateur1->setRole($roleUtilisateur);
        $utilisateur1->setActif(true);
        $manager->persist($utilisateur1);

        $utilisateur2 = new Utilisateur();
        $utilisateur2->setNom('Leroy');
        $utilisateur2->setPrenom('Marie');
        $utilisateur2->setEmail('marie.leroy@mindaudit.com');
        $utilisateur2->setPassword($this->passwordHasher->hashPassword($utilisateur2, 'password123'));
        $utilisateur2->setRole($roleUtilisateur);
        $utilisateur2->setActif(true);
        $manager->persist($utilisateur2);

        // Utilisateur inactif
        $inactif = new Utilisateur();
        $inactif->setNom('Dubois');
        $inactif->setPrenom('Luc');
        $inactif->setEmail('luc.dubois@mindaudit.com');
        $inactif->setPassword($this->passwordHasher->hashPassword($inactif, 'password123'));
        $inactif->setRole($roleUtilisateur);
        $inactif->setActif(false);
        $manager->persist($inactif);

        $manager->flush();
    }
}
