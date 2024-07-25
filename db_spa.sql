-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour db_spa
DROP DATABASE IF EXISTS `db_spa`;
CREATE DATABASE IF NOT EXISTS `db_spa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_spa`;

-- Listage de la structure de table db_spa. administateur
DROP TABLE IF EXISTS `administateur`;
CREATE TABLE IF NOT EXISTS `administateur` (
  `idadmin` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  `Idpersonne` varchar(100) NOT NULL,
  PRIMARY KEY (`idadmin`),
  KEY `administateur_personne_FK` (`Idpersonne`),
  CONSTRAINT `administateur_personne_FK` FOREIGN KEY (`Idpersonne`) REFERENCES `personne` (`Idpersonne`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. application
DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `IdApp` varchar(50) NOT NULL,
  `Fichier` varchar(50) DEFAULT NULL,
  `idservice` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`IdApp`),
  UNIQUE KEY `idservice` (`idservice`),
  CONSTRAINT `application_ibfk_1` FOREIGN KEY (`idservice`) REFERENCES `service` (`idservice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. article
DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int NOT NULL,
  `Image` varbinary(50) DEFAULT NULL,
  `Titre` varchar(50) DEFAULT NULL,
  `Contenu` varchar(50) DEFAULT NULL,
  `Detail_Contenu` varchar(200) DEFAULT NULL,
  `Identreprise` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`idArticle`),
  KEY `Identreprise` (`Identreprise`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`Identreprise`) REFERENCES `entreprise` (`Identreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Idclient` varchar(50) NOT NULL,
  `nom_complet` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `photo` varbinary(50) DEFAULT NULL,
  `telephone` double DEFAULT NULL,
  `Idvisiteur` varchar(50) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`Idclient`),
  UNIQUE KEY `Idvisiteur` (`Idvisiteur`),
  CONSTRAINT `client_ibfk_1` FOREIGN KEY (`Idvisiteur`) REFERENCES `visiteur` (`Idvisiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. commenter
DROP TABLE IF EXISTS `commenter`;
CREATE TABLE IF NOT EXISTS `commenter` (
  `idArticle` int NOT NULL,
  `Idvisiteur` varchar(50) NOT NULL,
  `datecommenter` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`idArticle`,`Idvisiteur`),
  KEY `Idvisiteur` (`Idvisiteur`),
  CONSTRAINT `commenter_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`),
  CONSTRAINT `commenter_ibfk_2` FOREIGN KEY (`Idvisiteur`) REFERENCES `visiteur` (`Idvisiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. contrat
DROP TABLE IF EXISTS `contrat`;
CREATE TABLE IF NOT EXISTS `contrat` (
  `idcontrat` varchar(50) NOT NULL,
  `duree` date DEFAULT NULL,
  `fichier` varbinary(50) DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `statutcontrat` varchar(50) DEFAULT NULL,
  `idtype` varchar(50) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`idcontrat`),
  KEY `idtype` (`idtype`),
  CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`idtype`) REFERENCES `type` (`idtype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. detenir
DROP TABLE IF EXISTS `detenir`;
CREATE TABLE IF NOT EXISTS `detenir` (
  `Idclient` varchar(50) NOT NULL,
  `idservice` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`Idclient`,`idservice`),
  KEY `idservice` (`idservice`),
  CONSTRAINT `detenir_ibfk_1` FOREIGN KEY (`Idclient`) REFERENCES `client` (`Idclient`),
  CONSTRAINT `detenir_ibfk_2` FOREIGN KEY (`idservice`) REFERENCES `service` (`idservice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. entreprise
DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `Identreprise` int NOT NULL,
  `Logo` varbinary(50) DEFAULT NULL,
  `Contact` double DEFAULT NULL,
  `Site_web` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `Localisation` text,
  `social_link` varchar(50) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`Identreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. formation
DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `IdFormation` varchar(50) NOT NULL,
  `Duree` datetime DEFAULT NULL,
  `Statutformation` varchar(50) DEFAULT NULL,
  `idservice` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`IdFormation`),
  UNIQUE KEY `idservice` (`idservice`),
  CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`idservice`) REFERENCES `service` (`idservice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. partager
DROP TABLE IF EXISTS `partager`;
CREATE TABLE IF NOT EXISTS `partager` (
  `idArticle` int NOT NULL,
  `Idvisiteur` varchar(50) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`idArticle`,`Idvisiteur`),
  KEY `Idvisiteur` (`Idvisiteur`),
  CONSTRAINT `partager_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`),
  CONSTRAINT `partager_ibfk_2` FOREIGN KEY (`Idvisiteur`) REFERENCES `visiteur` (`Idvisiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. personne
DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `Idpersonne` varchar(50) NOT NULL,
  `nom_complet` varchar(50) DEFAULT NULL,
  `Social_link` varchar(50) DEFAULT NULL,
  `photo` varbinary(50) DEFAULT NULL,
  `telephone` double DEFAULT NULL,
  `idposte` varchar(50) NOT NULL,
  `Identreprise` int NOT NULL,
  `idcontrat` varchar(50) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`Idpersonne`),
  UNIQUE KEY `idcontrat` (`idcontrat`),
  KEY `idposte` (`idposte`),
  KEY `Identreprise` (`Identreprise`),
  CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`idposte`) REFERENCES `poste` (`idposte`),
  CONSTRAINT `personne_ibfk_2` FOREIGN KEY (`Identreprise`) REFERENCES `entreprise` (`Identreprise`),
  CONSTRAINT `personne_ibfk_3` FOREIGN KEY (`idcontrat`) REFERENCES `contrat` (`idcontrat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. poste
DROP TABLE IF EXISTS `poste`;
CREATE TABLE IF NOT EXISTS `poste` (
  `idposte` varchar(50) NOT NULL,
  `Libelle` varchar(50) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`idposte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. presentation
DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `idpresentation` int NOT NULL,
  `Image` varbinary(50) DEFAULT NULL,
  `Titre` varchar(50) DEFAULT NULL,
  `Contenu` varchar(50) DEFAULT NULL,
  `Detail_Contenu` varchar(200) DEFAULT NULL,
  `Identreprise` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`idpresentation`),
  KEY `Identreprise` (`Identreprise`),
  CONSTRAINT `presentation_ibfk_1` FOREIGN KEY (`Identreprise`) REFERENCES `entreprise` (`Identreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. satisfaction
DROP TABLE IF EXISTS `satisfaction`;
CREATE TABLE IF NOT EXISTS `satisfaction` (
  `Idsatisfaction` varchar(50) NOT NULL,
  `Temoignage` varchar(500) DEFAULT NULL,
  `nb_etoile` varchar(50) DEFAULT NULL,
  `statuts` varchar(50) DEFAULT NULL,
  `Idclient` varchar(50) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`Idsatisfaction`),
  UNIQUE KEY `Temoignage` (`Temoignage`),
  KEY `Idclient` (`Idclient`),
  CONSTRAINT `satisfaction_ibfk_1` FOREIGN KEY (`Idclient`) REFERENCES `client` (`Idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. service
DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `idservice` int NOT NULL,
  `Cout` varchar(50) DEFAULT NULL,
  `Image` varbinary(50) DEFAULT NULL,
  `Titre` varchar(50) DEFAULT NULL,
  `Contenu` varchar(50) DEFAULT NULL,
  `Detail_Contenu` varchar(200) DEFAULT NULL,
  `Identreprise` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`idservice`),
  KEY `Identreprise` (`Identreprise`),
  CONSTRAINT `service_ibfk_1` FOREIGN KEY (`Identreprise`) REFERENCES `entreprise` (`Identreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. type
DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `idtype` varchar(50) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table db_spa. visiteur
DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `Idvisiteur` varchar(50) NOT NULL,
  `Ip` varchar(50) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `statut` int DEFAULT NULL,
  PRIMARY KEY (`Idvisiteur`),
  UNIQUE KEY `Ip` (`Ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
