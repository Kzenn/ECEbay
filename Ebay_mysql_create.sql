CREATE TABLE `Acheteur` (
	`ID_User` INT(128) NOT NULL AUTO_INCREMENT,
	`Nom` VARCHAR(256) NOT NULL,
	`Prenom` VARCHAR(256) NOT NULL,
	`Adresse` VARCHAR(256) NOT NULL,
	`Mail` VARCHAR(256) NOT NULL,
	`Solde` INT(64) NOT NULL,
	`PIN` INT(4) NOT NULL,
	`NCarte` INT(16) NOT NULL,
	`Expiration` DATE NOT NULL,
	`Admin` BINARY,
	`MDP` varchar(50) NOT NULL,
	PRIMARY KEY (`ID_User`)
);

CREATE TABLE `Produit` (
	`ID_Vendeur` INT(128) NOT NULL,
	`ID_Produit` INT(128) NOT NULL AUTO_INCREMENT,
	`Nom` VARCHAR(20) NOT NULL,
	`Prix` FLOAT NOT NULL,
	`Description` VARCHAR(256) NOT NULL,
	`Stock` INT(64) NOT NULL,
	PRIMARY KEY (`ID_Produit`)
);

CREATE TABLE `Livres` (
	`ID_Produit` INT(128) NOT NULL,
	`Auteur` VARCHAR(256) NOT NULL,
	`Editeur` VARCHAR(256) NOT NULL,
	`Date_Parution` VARCHAR(256) NOT NULL,
	`Genre` VARCHAR(256) NOT NULL,
	PRIMARY KEY (`ID_Produit`)
);

CREATE TABLE `Musique` (
	`ID_Produit` INT(128) NOT NULL,
	`Auteur` VARCHAR(256) NOT NULL,
	`Date_Parution` VARCHAR(256) NOT NULL,
	`Genre` VARCHAR(256) NOT NULL,
	PRIMARY KEY (`ID_Produit`)
);

CREATE TABLE `Vetement` (
	`ID_Produit` INT(128) NOT NULL,
	`Couleur` VARCHAR(128) NOT NULL,
	`Taille` VARCHAR(128) NOT NULL,
	`Modele` VARCHAR(128) NOT NULL,
	`Genre` BINARY NOT NULL,
	PRIMARY KEY (`ID_Produit`)
);

CREATE TABLE `Equipement` (
	`ID_Produit` INT(128) NOT NULL,
	`Sport` VARCHAR(128) NOT NULL,
	PRIMARY KEY (`ID_Produit`)
);

CREATE TABLE `Image` (
	`ID_Produit` INT(128) NOT NULL,
	`ID_Img` INT(128) NOT NULL AUTO_INCREMENT,
	`Adresse` varchar(256) NOT NULL,
	PRIMARY KEY (`ID_Img`)
);

CREATE TABLE `Vendeur` (
	`ID_Vendeur` INT(128) NOT NULL AUTO_INCREMENT,
	`Pseudo` VARCHAR(128) NOT NULL,
	`Mail` VARCHAR(128) NOT NULL,
	`Photo_Adresse` VARCHAR(128) NOT NULL,
	`Fond_Adresse` VARCHAR(128) NOT NULL,
	`Solde` INT(64) NOT NULL,
	PRIMARY KEY (`ID_Vendeur`)
);

CREATE TABLE `Panier` (
	`ID_User` INT(128) NOT NULL AUTO_INCREMENT,
	`ID_Produit1` INT(128) NOT NULL,
	`ID_Produit2` INT(128) NOT NULL,
	`ID_Produit3` INT(128) NOT NULL,
	`ID_Produit4` INT(128) NOT NULL,
	`ID_Produit5` INT(128) NOT NULL,
	PRIMARY KEY (`ID_User`)
);

ALTER TABLE `Produit` ADD CONSTRAINT `Produit_fk0` FOREIGN KEY (`ID_Vendeur`) REFERENCES `Vendeur`(`ID_Vendeur`);

ALTER TABLE `Livres` ADD CONSTRAINT `Livres_fk0` FOREIGN KEY (`ID_Produit`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Musique` ADD CONSTRAINT `Musique_fk0` FOREIGN KEY (`ID_Produit`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Vetement` ADD CONSTRAINT `Vetement_fk0` FOREIGN KEY (`ID_Produit`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Equipement` ADD CONSTRAINT `Equipement_fk0` FOREIGN KEY (`ID_Produit`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Image` ADD CONSTRAINT `Image_fk0` FOREIGN KEY (`ID_Produit`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Panier` ADD CONSTRAINT `Panier_fk0` FOREIGN KEY (`ID_User`) REFERENCES `Acheteur`(`ID_User`);

ALTER TABLE `Panier` ADD CONSTRAINT `Panier_fk1` FOREIGN KEY (`ID_Produit1`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Panier` ADD CONSTRAINT `Panier_fk2` FOREIGN KEY (`ID_Produit2`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Panier` ADD CONSTRAINT `Panier_fk3` FOREIGN KEY (`ID_Produit3`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Panier` ADD CONSTRAINT `Panier_fk4` FOREIGN KEY (`ID_Produit4`) REFERENCES `Produit`(`ID_Produit`);

ALTER TABLE `Panier` ADD CONSTRAINT `Panier_fk5` FOREIGN KEY (`ID_Produit5`) REFERENCES `Produit`(`ID_Produit`);

