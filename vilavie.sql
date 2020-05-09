-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 09 mai 2020 à 23:25
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
  `proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id`, `titre`, `description`, `daira`, `commune`, `surface`, `etage`, `prix`, `lien_img`, `proprietaire`) VALUES
(63, 'maison 2', 'azeoapzeoapo', 'LarbaÃ¢ Nath Irathen', 'AÃ¯t Ouacif', 123, 3, 3000500, 'upload/55_plan-maison-plans.fr2_.jpg', 'hohoho'),
(64, 'maison 1', 'pepepzaÃªa^zepÃ¢zpeppepepz', '18-Tigzirt', 'Tigzirt', 123, 2, 300000000, 'upload/52_maison1.jpg', 'uyuyuy'),
(65, 'maison 23', 'zpeeeeeeeeeeeeezzz', '17-Ouaguenoun', 'AÃ¯t Aissa Mimoun', 123, 12, 20000000, 'upload/52_sejour-dun-appartement-neuf-renove_6112350.jpg', 'fedani hocine'),
(66, 'mmmm', 'aaaaaze', '07-Bouzguen', 'Beni Ziki', 22, 2, 322233, 'upload/56_images.jpg', 'fedani hocine');

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
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `username`, `email`, `password`, `tel`, `sit_fam`) VALUES
(33, 'fedani', 'hocine', 'ho13', 'aaa@gmail.com', '1234', '0791913563', 'MariÃ©'),
(52, 'TEST', 'test', 'toto', 'horereho@gmail.com', '1234', '1234567896', 'MariÃ©'),
(50, 'fedani', 'hocineaaa', 'totoaaa', 'hoho@gmail.com', '1', '0312654895', 'MariÃ©'),
(53, 'test', 'hocine', 'hoho', 'hoezerho@gmail.com', '1234', '3216549755', 'MariÃ©'),
(54, 'fedani', 'aze', 'h6666', 'azeazeae@ejeje.com', '1234', '1236523658', 'Celibataire'),
(55, 'aze', 'aze', 'aze', 'azeazeaze', '1234', '1362514975', 'Celibataire'),
(56, 'bobobobo', 'kakakk', 'kakak', 'hohzzzzzo@gmail.com', '1234', '1234567890', 'Celibataire');

-- --------------------------------------------------------

--
-- Structure de la table `contact_msg`
--

DROP TABLE IF EXISTS `contact_msg`;
CREATE TABLE IF NOT EXISTS `contact_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sujet` varchar(30) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact_msg`
--

INSERT INTO `contact_msg` (`id`, `nom`, `prenom`, `email`, `sujet`, `message`) VALUES
(17, 'azeaez', 'azeaze', 'azeaze', 'azeazea', 'Le Costa neoClassica est un navire de croisière construit en 1991 par les chantiers navals Fincantieri de Gênes pour la compagnie italienne Costa Croisières, dont il est le premier navire construit spécifiquement pour la croisière et, au moment de sa mise en service, le plus gros navire de la compagnie. Mis en service en décembre 1991 sous le nom de Costa Classica, il fait l’objet d’une importante rénovation à l’hiver 2014. Il intègre dès lors la neoCollection et voit son nom légèrement modifié, devenant le Costa neoClassica.');

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
  `proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_annonce`
--

INSERT INTO `demande_annonce` (`id`, `titre`, `description`, `daira`, `commune`, `surface`, `etage`, `prix`, `lien_img`, `proprietaire`) VALUES
(52, 'appartement2', 'papzeeeeeeeeeeeeeeeeeeeeoeozeooooooooooooooooooooooooooopzÃªzp^pazoeÃ¢zpoeÃ¢pozÃªapozeÃ¢po', '17-Ouaguenoun', 'AÃ¯t Aissa Mimoun', 100, 1, 3000000, 'upload/_images.jpg', ''),
(58, 'oooooooooo', 'opzrotpeorit', '01-Ain El Hammam', 'Abi Youcef', 5555, 555, 5555555, 'upload/57_sejour-dun-appartement-neuf-renove_6112350.jpg', 'fedani hocine');

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
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rdv_confirmer`
--

INSERT INTO `rdv_confirmer` (`id`, `client`, `lieu`, `date`) VALUES
(8, 'dada', 'gogo', '2020-06-18'),
(7, 'hoho fefe', 'tizi', '2020-04-25'),
(6, 'hocine fedani', 'agence', '2020-04-01'),
(10, 'hocine fedani', 'aaaa', '2020-04-09'),
(11, 'hocine', 'agence', '2020-09-18'),
(12, 'oooo', 'papapa', '2020-04-23'),
(13, 'pppp', 'aaaa', '2020-04-23'),
(14, 'btbt', 'agence', '2020-04-23'),
(15, 'hohoh', 'aaaa', '2020-04-08'),
(16, 'jhhuhuhb', 'jh', '2020-04-17'),
(17, 'hocine fedani', 'tizi', '2020-05-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
