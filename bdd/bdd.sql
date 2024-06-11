DROP DATABASE IF EXISTS BD_PHASMO;
CREATE DATABASE BD_PHASMO;
USE BD_PHASMO;


CREATE TABLE Utilisateur (
    idU int NOT NULL AUTO_INCREMENT,
    emailU varchar(128) NOT NULL,
    pseudoU varchar(128) NOT NULL,
    passwordU varchar(128) NOT NULL,
    role varchar(128) NOT NULL,
    PRIMARY KEY (idU)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Fantome (
    idE int NOT NULL AUTO_INCREMENT,
    nameE varchar(128) NOT NULL,
    preuvesE varchar(128) NOT NULL,
    informationsE varchar(128) NOT NULL,
    photosE varchar(128) NOT NULL,
    PRIMARY KEY (idE)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


