-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 juil. 2020 à 14:37
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vilavie`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande_rdv`
--

DROP TABLE IF EXISTS `demande_rdv`;
CREATE TABLE IF NOT EXISTS `demande_rdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `raison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cl` int(11) NOT NULL,
  `id_biens` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_rdv`
--

INSERT INTO `demande_rdv` (`id`, `client`, `lieu`, `date`, `time`, `raison`, `id_cl`, `id_biens`) VALUES
(3, 'Fedani    hocine', 'A l\'agence ', '2020-07-07', '12:00:00', 'location', 0, 0),
(4, 'Fedani    hocine', 'A l\'agence ', '2006-07-16', '08:00:00', 'location', 0, 0),
(5, 'Fedani    hocine', 'A proximitÃ© du bien', '2020-07-24', '14:00:00', 'location', 0, 0),
(6, 'Fedani    hocine', 'A proximitÃ© du bien', '2020-07-16', '15:00:00', 'location', 58, 0),
(7, 'Fedani    hocine', 'A l\'agence ', '2020-07-15', '09:00:00', 'Achat', 58, 0),
(8, 'Fedani    hocine', 'A l\'agence ', '2020-07-07', '09:00:00', 'Achat', 58, 77);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
