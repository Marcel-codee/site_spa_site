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


-- Listage de la structure de la base pour spa_db
DROP DATABASE IF EXISTS `spa_db`;
CREATE DATABASE IF NOT EXISTS `spa_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `spa_db`;

-- Listage de la structure de table spa_db. actualite
DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(100) NOT NULL,
  `detail_contenu` text,
  `identreprise` int NOT NULL,
  `status` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actualite_entreprise_FK` (`identreprise`),
  CONSTRAINT `actualite_entreprise_FK` FOREIGN KEY (`identreprise`) REFERENCES `entreprise` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Liste de nos actualités';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. administrateur
DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `idpersonne` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `administrateur_personne_FK` (`idpersonne`),
  CONSTRAINT `administrateur_personne_FK` FOREIGN KEY (`idpersonne`) REFERENCES `personne` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Liste des administrateurs du systeme';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `status` int DEFAULT NULL,
  `idvisiteur` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_ate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_visiteur_FK` (`idvisiteur`),
  CONSTRAINT `client_visiteur_FK` FOREIGN KEY (`idvisiteur`) REFERENCES `visiteur` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Liste  de nos clients';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. contrat
DROP TABLE IF EXISTS `contrat`;
CREATE TABLE IF NOT EXISTS `contrat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `fichier` varchar(100) NOT NULL,
  `status_contrat` varchar(100) DEFAULT NULL,
  `idtypecontrat` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `idpersonne` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contrat_typecontrat_FK` (`idtypecontrat`),
  KEY `contrat_personne_FK` (`idpersonne`),
  CONSTRAINT `contrat_personne_FK` FOREIGN KEY (`idpersonne`) REFERENCES `personne` (`id`) ON DELETE CASCADE,
  CONSTRAINT `contrat_typecontrat_FK` FOREIGN KEY (`idtypecontrat`) REFERENCES `typecontrat` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Liste des contrats de nos employés';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. entreprise
DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `site_web` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `status` int DEFAULT NULL,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. personne
DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `idposte` int NOT NULL,
  `identreprise` int NOT NULL,
  `status` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personne_poste_FK` (`idposte`),
  KEY `personne_entreprise_FK` (`identreprise`),
  CONSTRAINT `personne_entreprise_FK` FOREIGN KEY (`identreprise`) REFERENCES `entreprise` (`id`) ON DELETE CASCADE,
  CONSTRAINT `personne_poste_FK` FOREIGN KEY (`idposte`) REFERENCES `poste` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Liste de nos employés';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. poste
DROP TABLE IF EXISTS `poste`;
CREATE TABLE IF NOT EXISTS `poste` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. presentation
DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(250) NOT NULL,
  `detail_contenu` text NOT NULL,
  `identreprise` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `presentation_entreprise_FK` (`identreprise`),
  CONSTRAINT `presentation_entreprise_FK` FOREIGN KEY (`identreprise`) REFERENCES `entreprise` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table à propos de l''entreprise';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. satisfaction
DROP TABLE IF EXISTS `satisfaction`;
CREATE TABLE IF NOT EXISTS `satisfaction` (
  `id` int NOT NULL AUTO_INCREMENT,
  `temoignage` text,
  `nb_etoile` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `idclient` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `satisfaction_client_FK` (`idclient`),
  CONSTRAINT `satisfaction_client_FK` FOREIGN KEY (`idclient`) REFERENCES `client` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='temoignage des clients après service rendu';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. service
DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(250) DEFAULT NULL,
  `detail_contenu` text,
  `identreprise` int NOT NULL,
  `fichier` varchar(100) DEFAULT NULL,
  `duree` varchar(10) DEFAULT NULL,
  `idtype_service` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_entreprise_FK` (`identreprise`),
  KEY `service_type_service_FK` (`idtype_service`),
  CONSTRAINT `service_entreprise_FK` FOREIGN KEY (`identreprise`) REFERENCES `entreprise` (`id`) ON DELETE CASCADE,
  CONSTRAINT `service_type_service_FK` FOREIGN KEY (`idtype_service`) REFERENCES `type_service` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='L''ensemble des services de l''entreprise';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. service_detient_client
DROP TABLE IF EXISTS `service_detient_client`;
CREATE TABLE IF NOT EXISTS `service_detient_client` (
  `idservice` int NOT NULL,
  `idclient` int NOT NULL,
  `status` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_ate` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idservice`,`idclient`),
  KEY `service_detient_client_client_FK` (`idclient`),
  CONSTRAINT `service_detient_client_client_FK` FOREIGN KEY (`idclient`) REFERENCES `client` (`id`) ON DELETE CASCADE,
  CONSTRAINT `service_detient_client_service_FK` FOREIGN KEY (`idservice`) REFERENCES `service` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. social_link
DROP TABLE IF EXISTS `social_link`;
CREATE TABLE IF NOT EXISTS `social_link` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `lien` varchar(250) NOT NULL,
  `identreprise` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `social_link_entreprise_FK` (`identreprise`),
  CONSTRAINT `social_link_entreprise_FK` FOREIGN KEY (`identreprise`) REFERENCES `entreprise` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Nos liens sur les reseaux sociaux';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. typecontrat
DROP TABLE IF EXISTS `typecontrat`;
CREATE TABLE IF NOT EXISTS `typecontrat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `status` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Les differents types de contrats';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. type_service
DROP TABLE IF EXISTS `type_service`;
CREATE TABLE IF NOT EXISTS `type_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `status` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='type de services proposés';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. visiteur
DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ip_adresse` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='visiteur du site';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. visiteur_commente_actualite
DROP TABLE IF EXISTS `visiteur_commente_actualite`;
CREATE TABLE IF NOT EXISTS `visiteur_commente_actualite` (
  `idvisiteur` int NOT NULL,
  `idactualite` int NOT NULL,
  `status` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idvisiteur`,`idactualite`),
  KEY `visiteur_commente_actualite_actualite_FK` (`idactualite`),
  CONSTRAINT `visiteur_commente_actualite_actualite_FK` FOREIGN KEY (`idactualite`) REFERENCES `actualite` (`id`) ON DELETE CASCADE,
  CONSTRAINT `visiteur_commente_actualite_visiteur_FK` FOREIGN KEY (`idvisiteur`) REFERENCES `visiteur` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table spa_db. visiteur_partage_actualite
DROP TABLE IF EXISTS `visiteur_partage_actualite`;
CREATE TABLE IF NOT EXISTS `visiteur_partage_actualite` (
  `idvisiteur` int NOT NULL,
  `idactualite` int NOT NULL,
  `status` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modify_by` int DEFAULT NULL,
  `modify_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idvisiteur`,`idactualite`),
  KEY `visiteur_partage_actualite_actualite_FK` (`idactualite`),
  CONSTRAINT `visiteur_partage_actualite_actualite_FK` FOREIGN KEY (`idactualite`) REFERENCES `actualite` (`id`) ON DELETE CASCADE,
  CONSTRAINT `visiteur_partage_actualite_visiteur_FK` FOREIGN KEY (`idvisiteur`) REFERENCES `visiteur` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
