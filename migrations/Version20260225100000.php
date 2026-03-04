<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration pour ajouter les tables de gestion de réinitialisation sécurisée de mot de passe
 */
final class Version20260225100000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add password reset tokens and password history tables';
    }

    public function up(Schema $schema): void
    {
        // Table password_reset_token
        $this->addSql('CREATE TABLE password_reset_token (
            id VARCHAR(26) NOT NULL,
            utilisateur_id INT NOT NULL,
            token VARCHAR(255) NOT NULL UNIQUE,
            created_at DATETIME NOT NULL,
            expires_at DATETIME NOT NULL,
            used_at DATETIME DEFAULT NULL,
            is_used BOOLEAN NOT NULL DEFAULT 0,
            ip_address VARCHAR(45) DEFAULT NULL,
            user_agent VARCHAR(255) DEFAULT NULL,
            PRIMARY KEY(id),
            FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE
        )');

        // Table password_history
        $this->addSql('CREATE TABLE password_history (
            id VARCHAR(26) NOT NULL,
            utilisateur_id INT NOT NULL,
            hashed_password TEXT NOT NULL,
            changed_at DATETIME NOT NULL,
            change_reason VARCHAR(100) DEFAULT NULL,
            ip_address VARCHAR(45) DEFAULT NULL,
            user_agent VARCHAR(255) DEFAULT NULL,
            PRIMARY KEY(id),
            FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE
        )');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS password_history');
        $this->addSql('DROP TABLE IF EXISTS password_reset_token');
    }
}
