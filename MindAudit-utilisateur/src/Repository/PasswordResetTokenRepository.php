<?php

namespace App\Repository;

use App\Entity\PasswordResetToken;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PasswordResetTokenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PasswordResetToken::class);
    }

    public function findValidToken(string $token): ?PasswordResetToken
    {
        $resetToken = $this->findOneBy(['token' => $token]);

        if (!$resetToken || !$resetToken->isValid()) {
            return null;
        }

        return $resetToken;
    }

    public function removeExpiredTokens(): int
    {
        // Keep for backward compatibility: remove tokens explicitly expired (if any)
        return $this->createQueryBuilder('prt')
            ->delete()
            ->where('prt.expiresAt IS NOT NULL')
            ->andWhere('prt.expiresAt < :now')
            ->setParameter('now', new \DateTimeImmutable())
            ->getQuery()
            ->execute();
    }
}
