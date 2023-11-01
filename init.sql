-- Créez la base de données date_docker s'elle n'existe pas
CREATE DATABASE IF NOT EXISTS date_docker;
USE date_docker;

-- Créez la table date_maint
CREATE TABLE IF NOT EXISTS date_maint (
    date datetime
);
