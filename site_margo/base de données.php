//DROP TABLE Role;
//DROP TABLE Personne;

create table Personne (id int(10) PRIMARY KEY AUTO_INCREMENT, nom varchar(255), prenom varchar(255), idRole int(10) NOT NULL, login varchar(255) NOT NULL, mdp varchar(255) NOT NULL);
create table Role (numRole int(10) PRIMARY KEY AUTO_INCREMENT, libelleRole varchar(255));

INSERT INTO Role (libelleRole) VALUES ('admi'), ('prof'),('tech'),('etudiant');
INSERT INTO Personne(nom,prenom,idRole,login,mdp) VALUES ('admin','admin',1,'admin','admin'), ('prof','prof',2,'prof','prof'), ('tech','tech',3,'tech','tech'), ('etudiant','etudiant',4,'etudiant','etudiant');