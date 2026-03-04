<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Ajout des tables notification et audit_log
 */
final class Version20260225150000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add notification and audit_log tables';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE notification (
            id VARCHAR(26) NOT NULL,
            utilisateur_id INT NOT NULL,
            type VARCHAR(50) NOT NULL,
            message VARCHAR(255) NOT NULL,
            context JSON DEFAULT NULL,
            is_read BOOLEAN NOT NULL DEFAULT 0,
            created_at DATETIME NOT NULL,
            PRIMARY KEY(id),
            FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE
        )');

        $this->addSql('CREATE TABLE audit_log (
            id VARCHAR(26) NOT NULL,
            utilisateur_id INT DEFAULT NULL,
            action VARCHAR(100) NOT NULL,
            entity VARCHAR(100) DEFAULT NULL,
            entity_id VARCHAR(64) DEFAULT NULL,
            details JSON DEFAULT NULL,
            ip_address VARCHAR(45) DEFAULT NULL,
            user_agent VARCHAR(255) DEFAULT NULL,
            created_at DATETIME NOT NULL,
            PRIMARY KEY(id),
            FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE SET NULL
        )');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS audit_log');
        $this->addSql('DROP TABLE IF EXISTS notification');
    }
}
