-- CREATE database cabinetPro;
CREATE TABLE medcins(
    idm int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(30) not null,
    prénom varchar(30) not null,
    email varchar(30) not null unique,
    motDePasse varchar(10) not null unique,
    specialité varchar(8) not null
);
CREATE TABLE patients(
    idp  int  AUTO_INCREMENT,
    nom varchar(30) not null,
    prénom varchar(30) not null,
    email varchar(30) not null,
    telephone int(10) not null,
    dateNaissance date not null,
    maladie varchar(30) not null,
    idm int not null,
    PRIMARY KEY(idp),
    FOREIGN KEY (idm) REFERENCES medcins(idm) 
);
CREATE TABLE appointemants(
 idr int PRIMARY KEY AUTO_INCREMENT,
 appointemantDate date not null,
 docteurNom varchar(30) not null,
 patientNom varchar(30) not null,
  idm int not null,
  idp int not null,
 FOREIGN KEY (idm) REFERENCES medcins(idm),
 FOREIGN KEY (idp) REFERENCES patients(idp) 
);
INSERT INTO medcins (nom, prénom, email, motDePasse,specialité)
VALUES ('Soultani', 'Aya', 'soultani@gmail.com', 'password1','traumatologue');
INSERT INTO medcins (nom, prénom, email, motDePasse,specialité)
VALUES ('Rahbani', 'Rafik', 'rahbani@gmail.com', 'password2','traumatologue');
INSERT INTO medcins (nom, prénom, email, motDePasse,specialité)
VALUES ('Alami', 'Khawla', 'khawla@gmail.com', 'password3','traumatologue');
INSERT INTO medcins (nom, prénom, email, motDePasse,specialité)
VALUES ('Rafki', 'Khalid', 'rafki@gmail.com', 'password4','traumatologue');
