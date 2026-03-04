<?php

namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Création des rôles
        $rolesData = [
            [
                'nom' => 'Administrateur',
                'description' => 'Accès complet au système - Gestion des utilisateurs, rôles et configuration',
                'permissions' => ["user.create","user.edit","user.delete","user.view","role.create","role.edit","role.delete","role.view","entreprise.create","entreprise.edit","entreprise.delete","entreprise.view","document.create","document.edit","document.delete","document.view","audit.create","audit.edit","audit.delete","audit.view","audit.report","admin.access","admin.config"]
            ],
            [
                'nom' => 'Auditeur',
                'description' => 'Responsable des audits - Peut créer, gérer et générer des rapports d\'audit',
                'permissions' => ["user.view","role.view","entreprise.view","document.view","audit.create","audit.edit","audit.delete","audit.view","audit.report"]
            ],
            [
                'nom' => 'Utilisateur',
                'description' => 'Utilisateur standard - Peut consulter les audits et participer aux processus',
                'permissions' => ["user.view","entreprise.view","audit.view"]
            ],
        ];

        $roles = [];
        foreach ($rolesData as $data) {
            $role = new Role();
            $role->setNom($data['nom']);
            $role->setDescription($data['description']);
            $role->setPermissions($data['permissions']);
            $manager->persist($role);
            $roles[$data['nom']] = $role;
        }

        // Création des utilisateurs
        $usersData = [
            [
                'nom' => 'Admin',
                'prenom' => 'Super',
                'email' => 'admin@mindaudit.com',
                'role' => 'Administrateur',
                'actif' => true
            ],
            [
                'nom' => 'Dupont',
                'prenom' => 'Jean',
                'email' => 'jean.dupont@mindaudit.com',
                'role' => 'Auditeur',
                'actif' => true
            ],
            [
                'nom' => 'Martin',
                'prenom' => 'Sophie',
                'email' => 'sophie.martin@mindaudit.com',
                'role' => 'Auditeur',
                'actif' => true
            ],
            [
                'nom' => 'Bernard',
                'prenom' => 'Pierre',
                'email' => 'pierre.bernard@mindaudit.com',
                'role' => 'Utilisateur',
                'actif' => true
            ],
            [
                'nom' => 'Leroy',
                'prenom' => 'Marie',
                'email' => 'marie.leroy@mindaudit.com',
                'role' => 'Utilisateur',
                'actif' => true
            ],
            [
                'nom' => 'Dubois',
                'prenom' => 'Luc',
                'email' => 'luc.dubois@mindaudit.com',
                'role' => 'Utilisateur',
                'actif' => false
            ],
        ];

        foreach ($usersData as $data) {
            $user = new Utilisateur();
            $user->setNom($data['nom']);
            $user->setPrenom($data['prenom']);
            $user->setEmail($data['email']);
            $user->setRole($roles[$data['role']]);
            $user->setActif($data['actif']);
            
            $hashedPassword = $this->passwordHasher->hashPassword($user, 'password123');
            $user->setPassword($hashedPassword);
            
            $manager->persist($user);
        }

        $manager->flush();
    }
}
