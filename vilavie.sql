-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 25 juin 2020 à 13:10
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
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_bien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` int(11) NOT NULL,
  `etage` int(11) NOT NULL,
  `pieces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(255) NOT NULL,
  `lien_img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id`, `titre`, `description`, `daira`, `commune`, `adresse`, `type_bien`, `surface`, `etage`, `pieces`, `prix`, `lien_img`, `proprietaire`) VALUES
(68, 'Appartement bliha', 'un appartement au centre de la ville, bien Ã©quipÃ© et bien fini, dans un bÃ¢timent de 5 Ã©tages, appartement situÃ© au 3eme Ã©tage, 4 chambres et une cuisine amÃ©ricaine ouverte avec salon, avec 2 balcon.  ', '02-Azazga', 'Azazga', '', '', 100, 0, '', 1200000, 'upload/_maisonazzaga.jpg', 'azeae'),
(67, 'Maison dans la montagne', 'une maison en haut d\'une montagne, bien Ã©quipÃ© et bien fini, 30m entre chaque maison de voisin, Villa a 2 Ã©tages, 7 chambres et une cuisine spacieuse, et salon amÃ©ricain ouvert, avec un jardin immense, vue sure les montagnes.  ', '01-Ain El Hammam', 'Abi Youcef', '', '', 320, 2, '', 2000000, 'upload/_unnamed.jpg', 'Aissou Nadir'),
(69, 'belle villa', 'une villa 2 Ã©tages, trÃ¨s spacieuse, a 5 chambres, une cuisine et une grande terrasse, avec un beau jardin avec piscine', '03-Azeffoun ', 'Akerrou', '', '', 450, 2, '', 1000000, 'upload/_belle.jpg', 'Boutiab Massilva'),
(70, 'maison 3', 'pppppppppppppppppppp', '02-Azazga', 'Azazga', 'zzzzzzzzzzzzzzzz', 'studio', 122, 1, '2', 1000000, 'upload/_images.jpg', 'Fedani Hocine'),
(74, 'tets', 'eoeoeoeoe', '09-DraÃ¢ El Mizan', 'AÃ¯n Zaouia', '123eeee', 'studio', 1, 2, '2', 500000, 'upload/_images.jpg', 'Fedani Hocine');

-- --------------------------------------------------------

--
-- Structure de la table `biens_location`
--

DROP TABLE IF EXISTS `biens_location`;
CREATE TABLE IF NOT EXISTS `biens_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `daira` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_bien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` int(11) NOT NULL,
  `etage` int(11) NOT NULL,
  `pieces` int(3) NOT NULL,
  `prix` int(255) NOT NULL,
  `lien_img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens_location`
--

INSERT INTO `biens_location` (`id`, `titre`, `description`, `daira`, `commune`, `adresse`, `type_bien`, `surface`, `etage`, `pieces`, `prix`, `lien_img`, `proprietaire`) VALUES
(1, 'aaaaa', 'rerererer', '07-Bouzguen', 'Beni Ziki', 'ptpprete6re', 'villa', 123, 2, 1, 11000, 'upload/64_sejour-dun-appartement-neuf-renove_6112350.jpg', 'Fedani Hocine');

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
  `id_favoris` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `username`, `email`, `password`, `tel`, `sit_fam`, `id_favoris`) VALUES
(60, 'Aissou', 'Nadir', 'AisNad', 'aissounad@gmail.com', 'nadnad', '0558585956', 'Celibataire', 0),
(59, 'Ouguemat', 'Fodil', 'OugFod', 'fodlidof@gmail.com', 'fodfod', '0235689752', 'Celibataire', 0),
(58, 'Fedani', 'Hocine', 'FedHoc', 'hohoho@gmail.com', 'hochoc', '0752545458', 'MariÃ©', 0),
(57, 'Boutiab', 'Massilva', 'BouMas', 'rashid.btb@gmail.com', 'massmass', '0652526152', 'Celibataire', 0);

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
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_bien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` bigint(20) NOT NULL,
  `etage` bigint(20) NOT NULL,
  `pieces` int(3) NOT NULL,
  `prix` int(255) NOT NULL,
  `lien_img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_annonce`
--

INSERT INTO `demande_annonce` (`id`, `titre`, `description`, `daira`, `commune`, `adresse`, `type_bien`, `surface`, `etage`, `pieces`, `prix`, `lien_img`, `proprietaire`) VALUES
(68, 'mmmm', 'pzpzpzp', '12-MÃ¢atkas', 'MÃ¢atkas', 'rrrrr', 'Local', 20, 2, 2, 200000, 'upload/67_images.jpg', 'Fedani Hocine');

-- --------------------------------------------------------

--
-- Structure de la table `demande_annonce_location`
--

DROP TABLE IF EXISTS `demande_annonce_location`;
CREATE TABLE IF NOT EXISTS `demande_annonce_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `daira` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_bien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` int(10) NOT NULL,
  `etage` int(3) NOT NULL,
  `pieces` int(3) NOT NULL,
  `prix` int(255) NOT NULL,
  `lien_img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id_fav` int(11) NOT NULL AUTO_INCREMENT,
  `id_cl` int(11) NOT NULL,
  `id_biens` int(11) NOT NULL,
  PRIMARY KEY (`id_fav`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id_fav`, `id_cl`, `id_biens`) VALUES
(2, 58, 67),
(3, 58, 67);

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
  `heur` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rdv_confirmer`
--

INSERT INTO `rdv_confirmer` (`id`, `client`, `lieu`, `date`, `heur`) VALUES
(20, 'massi', 'a proximitÃ© ', '2020-06-18', '05:02:00'),
(21, ' ', 'A l\'agence ', '2020-06-27', '12:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
