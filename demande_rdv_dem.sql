-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 juil. 2020 à 11:05
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
-- Structure de la table `demande_rdv_dem`
--

DROP TABLE IF EXISTS `demande_rdv_dem`;
CREATE TABLE IF NOT EXISTS `demande_rdv_dem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `id_cl` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande_rdv_dem`
--

INSERT INTO `demande_rdv_dem` (`id`, `lieu`, `date`, `id_cl`) VALUES
(1, 'tizi ouzou', '2020-07-15', 58),
(2, 'f', '2020-07-15', 58);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
