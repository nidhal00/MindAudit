-- Migration: Add rating and note_ia columns
-- Execute this in your MySQL/MariaDB client

USE mindaudit_pidev;

-- Add rating column to entreprise table
ALTER TABLE entreprise 
ADD COLUMN rating INT NULL DEFAULT NULL COMMENT 'Manual rating 1-5 stars';

-- Add note_ia and rating columns to document table
ALTER TABLE document 
ADD COLUMN note_ia INT NULL DEFAULT NULL COMMENT 'AI compliance score 0-100',
ADD COLUMN rating INT NULL DEFAULT NULL COMMENT 'Manual rating 1-5 stars';

-- Verify the changes
DESCRIBE entreprise;
DESCRIBE document;
