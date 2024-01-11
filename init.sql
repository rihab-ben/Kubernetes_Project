CREATE DATABASE IF NOT EXISTS database_candidats;

USE database_candidats;

CREATE TABLE candidats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    note DECIMAL(5, 2) NOT NULL
);

INSERT INTO candidats (nom, prenom, note) VALUES ('Dupont', 'Jean',  '16');
INSERT INTO candidats (nom, prenom, note) VALUES ('Martin', 'Alice', '10');
INSERT INTO candidats (nom, prenom, note) VALUES ('Durand', 'Marie', '19');

