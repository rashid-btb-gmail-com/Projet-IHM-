-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 09 juin 2020 à 20:36
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
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id`, `titre`, `description`, `daira`, `commune`, `surface`, `etage`, `prix`, `lien_img`, `proprietaire`) VALUES
(68, 'Appartement bliha', 'un appartement au centre de la ville, bien Ã©quipÃ© et bien fini, dans un bÃ¢timent de 5 Ã©tages, appartement situÃ© au 3eme Ã©tage, 4 chambres et une cuisine amÃ©ricaine ouverte avec salon, avec 2 balcon.  ', '02-Azazga', 'Azazga', 100, 0, 1200000, 'upload/_maisonazzaga.jpg', 'Aissou Nadir'),
(67, 'Maison dans la montagne', 'une maison en haut d\'une montagne, bien Ã©quipÃ© et bien fini, 30m entre chaque maison de voisin, Villa a 2 Ã©tages, 7 chambres et une cuisine spacieuse, et salon amÃ©ricain ouvert, avec un jardin immense, vue sure les montagnes.  ', '01-Ain El Hammam', 'Abi Youcef', 320, 2, 2000000, 'upload/_unnamed.jpg', 'Aissou Nadir'),
(69, 'belle villa', 'une villa 2 Ã©tages, trÃ¨s spacieuse, a 5 chambres, une cuisine et une grande terrasse, avec un beau jardin avec piscine', '03-Azeffoun ', 'Akerrou', 450, 2, 1000000, 'upload/_belle.jpg', 'Boutiab Massilva'),
(70, 'Maison adrar', 'une maison situÃ© entre les deux villages d\'aglagal et oumaden Ã  bini-zmenzer, 3 Ã©tages, Ã  chaque Ã©tage de 100mÂ², il y a 3 chambres, un salon une salle de bain et une cuisine, la maison possÃ¨de un grand jardin et deux terrasses et deux grenier.', '04-Beni Douala', 'Beni Zmenzer', 510, 3, 2560000, 'upload/_maison-bois.jpg', 'Boutiab Massilva'),
(71, 'villa moderne', 'une villa moderne plain de lumiÃ¨re , construite en bois solide, bien Ã©quipÃ© spacieuse, une belle vue de tous les cotÃ© de la maison, chambres, cuisine et salon trÃ¨s  moderne. ', '17-Ouaguenoun', 'AÃ¯t Aissa Mimoun', 350, 2, 1600000, 'upload/_modern.jpg', 'Boutiab Massilva'),
(72, 'maison djurdjura', 'trÃ¨s belle maison, style canadien, construite par un architecte Ã©tranger, belle vue, 8 chambres, 2 cuisine, 3 grand garages. ', '05-Beni Yenni', 'Iboudraren', 400, 2, 2000000, 'upload/_architect.jpg', 'Boutiab Massilva'),
(73, 'maison traditionelle', 'une maison de pierre traditionnelle style franÃ§ais, hors village, bien Ã©quipÃ©, possÃ¨de 4 chambres et un grenier spacieux, avec un petit jardin.   ', '06-Boghni', 'Bounouh', 223, 2, 800000, 'upload/_maison traditionel.jpg', 'Boutiab Massilva');

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
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `username`, `email`, `password`, `tel`, `sit_fam`) VALUES
(60, 'Aissou', 'Nadir', 'AisNad', 'aissounad@gmail.com', 'nadnad', '0558585956', 'Celibataire'),
(59, 'Ouguemat', 'Fodil', 'OugFod', 'fodlidof@gmail.com', 'fodfod', '0235689752', 'Celibataire'),
(58, 'Fedani', 'Hocine', 'FedHoc', 'hohoho@gmail.com', 'hochoc', '0752545458', 'MariÃ©'),
(57, 'Boutiab', 'Massilva', 'BouMas', 'rashid.btb@gmail.com', 'massmass', '0652526152', 'Celibataire');

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact_msg`
--

INSERT INTO `contact_msg` (`id`, `nom`, `prenom`, `email`, `sujet`, `message`) VALUES
(18, 'boutiab', 'massilva', 'rashid.btb@gmail.com', 'location', 'est ce que vous avez un service location'),
(19, 'omar', 'loula', 'amaromar@gmail.com', 'travail', 'est ce que votre agence recrute ....');

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
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
