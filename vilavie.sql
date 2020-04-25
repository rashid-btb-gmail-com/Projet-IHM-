-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 25 avr. 2020 à 18:00
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
-- Structure de la table `biens`
--

DROP TABLE IF EXISTS `biens`;
CREATE TABLE IF NOT EXISTS `biens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `daira` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` int(11) NOT NULL,
  `etage` int(11) NOT NULL,
  `prix` int(255) NOT NULL,
  `lien_img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id`, `titre`, `description`, `daira`, `commune`, `surface`, `etage`, `prix`, `lien_img`) VALUES
(52, 'maison 1', 'aaaaaaaaaaaaa', 'MÃ¢atkas', 'AÃ¯t Khellili', 123, 23, 0, 'upload/maison.jpg'),
(53, 'kkkkk', 'kkkkkk', 'DraÃ¢ Ben Khedda', 'AÃ¯t Khellili', 12, 12, 0, 'upload/maison1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sit_fam` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `username`, `email`, `password`, `tel`, `sit_fam`) VALUES
(30, 'fedani', 'test11', 'hoho', 'gogog', '1234', '02131', 'MariÃ©'),
(25, 'fedani', 'hocine', 'hoho', 'hoho@gmail.com', '123', '055555555', 'MariÃ©'),
(27, 'fedani', 'hocine', 'hoho', 'hhhhh', '1234', '02131', 'MariÃ©'),
(28, 'fedani', 'aze', 'aze', 'eeee', '1234', '02135', 'MariÃ©'),
(31, 'ho', 'ar', 'hoho', 'mmar', '123', '02135', 'Celibataire'),
(32, 'fedani', 'hocine', 'toto', 'ererer', '1234', '0791913563', 'MariÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `demande_annonce`
--

DROP TABLE IF EXISTS `demande_annonce`;
CREATE TABLE IF NOT EXISTS `demande_annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `daira` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` bigint(20) NOT NULL,
  `etage` bigint(20) NOT NULL,
  `prix` int(255) NOT NULL,
  `lien_img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_annonce`
--

INSERT INTO `demande_annonce` (`id`, `titre`, `description`, `daira`, `commune`, `surface`, `etage`, `prix`, `lien_img`) VALUES
(36, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(24, 'aze', 'azeae', 'IferhounÃ¨ne', 'AÃ¯t ChafÃ¢a', 12, 12, 0, 'upload/maison1.jpg'),
(35, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(33, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(34, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(28, 'mmm', 'aaaaaaaaaa', 'Azazga', 'AÃ¯t Boumahdi', 12, 21, 22, 'upload/maison1.jpg'),
(29, 'mmm', 'aaaaaaaaaa', 'Azazga', 'AÃ¯t Boumahdi', 12, 21, 22, 'upload/maison1.jpg'),
(30, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(31, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(32, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(37, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(38, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(39, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(40, 'popop', 'ertet', 'MÃ¢atkas', 'AÃ¯t Mahmoud', 10, 10, 10, 'upload/maison1.jpg'),
(41, 'oooooooooo', 'tututu', 'Azazga', 'AÃ¯t Boumahdi', 123, 123, 123, 'upload/maison1.jpgArray'),
(42, 'oooooooooo', 'tututu', 'Azazga', 'AÃ¯t Boumahdi', 123, 123, 123, 'upload/maison1.jpg53'),
(43, 'oooooooooo', 'tututu', 'Azazga', 'AÃ¯t Boumahdi', 123, 123, 123, 'upload/53maison1.jpg'),
(44, 'oooooooooo', 'tututu', 'Azazga', 'AÃ¯t Boumahdi', 123, 123, 123, 'upload/53_maison1.jpg'),
(45, 'oooooooooo', 'tututu', 'Azazga', 'AÃ¯t Boumahdi', 123, 123, 123, 'upload/44_maison1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `rdv_confirmer`
--

DROP TABLE IF EXISTS `rdv_confirmer`;
CREATE TABLE IF NOT EXISTS `rdv_confirmer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_heure` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rdv_confirmer`
--

INSERT INTO `rdv_confirmer` (`id`, `client`, `lieu`, `date_heure`) VALUES
(9, 'lala', 'popo', '2020-04-26 10:00:00'),
(8, 'dada', 'gogo', '2020-06-18 15:15:00'),
(7, 'hoho fefe', 'tizi', '2020-04-25 00:00:00'),
(6, 'hocine fedani', 'agence', '2020-04-01 12:10:00'),
(10, 'hocine fedani', 'aaaa', '2020-04-09 00:00:00'),
(11, 'hocine', 'agence', '2020-09-18 10:10:00'),
(12, 'oooo', 'papapa', '2020-04-23 10:10:00'),
(13, 'pppp', 'aaaa', '2020-04-23 10:10:00'),
(14, 'btbt', 'agence', '2020-04-23 10:10:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
