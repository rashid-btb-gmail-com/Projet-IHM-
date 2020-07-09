-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 juil. 2020 à 16:06
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
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `username`, `email`, `password`, `tel`) VALUES
(65, 'Fedani', 'Hocine', 'Hocinefdn', 'fedani.hocine@gmail.com', '$2y$10$61VhKMNhyjQGTwbg7chtUOJChKxIR.qBnDVkOuDdvNb9w1o3UMNhu', '0752545458'),
(64, 'Boutiab', 'Massilva', 'Massilvabtb', 'rashid.btb@gmail.com', '$2y$10$JJqnuMncxuYEWuFe.GmcSevqjkyXgIXRNPBfXmCBFLi38mBjLVS4e', '0668092184'),
(66, 'Aissou', 'Nadir', 'NadirAis', 'nadiraissou@gmail.com', '$2y$10$vLbFDrSQ3vb6AUBzC1QtfObHupHS2R4K17/fDZf8FYCoCfZI5VYg.', '0235689752'),
(67, 'Ouguemat', 'Fodil', 'FodilOgmt', 'fodil@gmail.com', '$2y$10$b02oKxGbCe3TXrLMqwrCGeKV9o8AQ76ry3Hy8xB8NOkkyXxx1urA6', '0561658257');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
