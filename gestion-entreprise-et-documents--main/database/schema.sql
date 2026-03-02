-- Base de données MindAudit PIDEV
-- Module : Gestion Entreprise & Document
-- Client : Java + Web (Symfony)

CREATE DATABASE IF NOT EXISTS mindaudit_pidev;
USE mindaudit_pidev;

CREATE TABLE entreprise (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(150) NOT NULL,
    matricule_fiscale VARCHAR(50) UNIQUE NOT NULL,
    secteur VARCHAR(100),
    taille ENUM('small', 'medium', 'large'),
    pays VARCHAR(80),
    email VARCHAR(150),
    telephone VARCHAR(20),
    adresse TEXT,
    date_creation DATE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE document (
    id INT AUTO_INCREMENT PRIMARY KEY,
    entreprise_id INT NOT NULL,
    nom VARCHAR(150) NOT NULL,
    type ENUM('ISO', 'fiscal', 'RH', 'financier') NOT NULL,
    url VARCHAR(255) NOT NULL,
    statut ENUM('en_attente', 'valide', 'rejete') DEFAULT 'en_attente',
    date_upload DATETIME DEFAULT CURRENT_TIMESTAMP,
    uploaded_by INT,
    CONSTRAINT fk_document_entreprise
        FOREIGN KEY (entreprise_id)
        REFERENCES entreprise(id)
        ON DELETE CASCADE
);
