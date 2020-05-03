-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 mai 2020 à 00:57
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
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id`, `titre`, `description`, `daira`, `commune`, `surface`, `etage`, `prix`, `lien_img`) VALUES
(52, 'maison au bord da la mer', 'aaaaaaaaaaaaa', 'Azzefoun', 'Azzefoun', 123, 3, 25555, 'upload/maison.jpg'),
(53, 'kkkkk', 'kkkkkk', 'DraÃ¢ Ben Khedda', 'AÃ¯t Khellili', 12, 12, 0, 'upload/_maison1.jpg'),
(54, 'oooooooooo', 'lllkopokp', 'MÃ¢atkas', 'AÃ¯t Khellili', 122, 2, 1000, 'upload/46_plan-maison-plans.fr2_.jpg'),
(55, 'maison 2', 'eeeeeeeeeeeeee', 'IferhounÃ¨ne', 'AÃ¯t Mahmoud', 120, 2, 1000, 'upload/_plan-maison-plans.fr2_.jpg'),
(56, 'maison 4', 'epepepepepe', 'LarbaÃ¢ Nath Irathen', 'AÃ¯t Khellili', 123, 2, 100, 'upload/_plan-maison-plans.fr2_.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `username`, `email`, `password`, `tel`, `sit_fam`) VALUES
(33, 'fedani', 'hocine', 'ho13', 'aaa@gmail.com', '1234', '0791913563', 'MariÃ©'),
(50, 'fedani', 'hocineaaa', 'totoaaa', 'hoho@gmail.com', '1', '0312654895', 'MariÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `contact_msg`
--

DROP TABLE IF EXISTS `contact_msg`;
CREATE TABLE IF NOT EXISTS `contact_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sujet` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact_msg`
--

INSERT INTO `contact_msg` (`id`, `nom`, `prenom`, `email`, `sujet`, `message`) VALUES
(13, 'lidoof', 'ouguzam', 'fdlksm', 'ùmdfklsùm', 'dflmkjsdlfjsdlmfj');

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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_annonce`
--

INSERT INTO `demande_annonce` (`id`, `titre`, `description`, `daira`, `commune`, `surface`, `etage`, `prix`, `lien_img`) VALUES
(47, 'pppppppppppppppppp', ',,,,,,,,,,,,,,,,,,,,,,,,,,,,n', '01-Ain El Hammam', 'Akbil', 123, 123, 10000, 'upload/_maison1.jpg'),
(48, 'pppppppppppppppppp', ',,,,,,,,,,,,,,,,,,,,,,,,,,,,n', '01-Ain El Hammam', 'Akbil', 123, 123, 10000, 'upload/47_maison1.jpg');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rdv_confirmer`
--

INSERT INTO `rdv_confirmer` (`id`, `client`, `lieu`, `date_heure`) VALUES
(8, 'dada', 'gogo', '2020-06-18 15:15:00'),
(7, 'hoho fefe', 'tizi', '2020-04-25 00:00:00'),
(6, 'hocine fedani', 'agence', '2020-04-01 12:10:00'),
(10, 'hocine fedani', 'aaaa', '2020-04-09 00:00:00'),
(11, 'hocine', 'agence', '2020-09-18 10:10:00'),
(12, 'oooo', 'papapa', '2020-04-23 10:10:00'),
(13, 'pppp', 'aaaa', '2020-04-23 10:10:00'),
(14, 'btbt', 'agence', '2020-04-23 10:10:00'),
(15, 'hohoh', 'aaaa', '2020-04-08 05:05:00'),
(16, 'jhhuhuhb', 'jh', '2020-04-17 05:02:00'),
(17, 'hocine fedani', 'tizi', '2020-05-20 10:10:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
