<?php

namespace App\Security;

use App\Entity\Utilisateur;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof Utilisateur) {
            return;
        }

        if (!$user->isActif()) {
            // L'exception CustomUserMessageAccountStatusException permet de définir un message précis pour l'utilisateur
            throw new CustomUserMessageAccountStatusException('Votre compte a été suspendu par l\'administration. Veuillez nous contacter pour le débloquer.');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        // On ne fait rien après l'authentification (si c'est bloqué, ça l'est avant l'auth)
    }
}
