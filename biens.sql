-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 juil. 2020 à 15:23
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

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
  `wilaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id`, `titre`, `description`, `wilaya`, `daira`, `commune`, `adresse`, `type_bien`, `surface`, `etage`, `pieces`, `prix`, `lien_img`, `proprietaire`) VALUES
(80, 'Appartement BÃ©jaia ', 'je met en vente un appartement f2 dans une rÃ©sidence calme vu sur mer avec toutes ses commoditÃ©, douche chauffe bain, climatiseur , une petite terrasse.', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'Saket RÃ©sidence EPLF BEJAIA', 'appartement', 62, 3, '2', 8000000, 'upload/70_Photo17.jpg', 'Fedani    hocine'),
(75, 'Villa luxe', 'Villa luxe avec un splendide jardin avec toute ses commodité ', '01-Tizi-Ouzou', '05-Beni Yenni', 'Beni Yenni', 'rue Saida sur la RN prés de la prison ', 'niveau de villa', 120, 2, '7', 40000000, 'upload/_maison1.jpg', 'Fedani Hocine'),
(77, 'Villa 2 Ã©tages ', 'je met en vente une superbe villa neuve situÃ©e Ã  tigzirt  - rue tiza  , composÃ©e au rez de chaussÃ©e de deux chambres dont une suite parentale , une cuisine qui donne sur le jardin. au 1er quatre chambres dont trois avec salle de bain et dressing. 2eme loft avec 3 chambres trÃ¨s bien Ã©quipÃ©s avec une terrasse et vu sur mer  ', '01-Tizi-Ouzou', '18-Tigzirt', 'Tigzirt', 'Rue Tiza prÃ©s du commissariat ', 'villa', 350, 2, '9', 150000000, 'upload/70_Photo7.jpg', 'Aissou   Nadir'),
(78, 'Villa sidi khaled', 'Villa Ã  Tigzirt exactement a sidi khaled, 400MÂ² batis sur 120MÂ² en R+2,  Ã  700M de la mer, avec jardin et piscine . ', '01-Tizi-Ouzou', '18-Tigzirt', 'Tigzirt', 'Sidi khaled', 'villa', 400, 2, '6', 70000000, 'upload/70_Photo2.jpg', 'Aissou   Nadir'),
(79, 'Villa Freha ', 'je mets en vente une villa de R+3 d\'une superficie de 122mÂ² de bÃ¢tie sur un terrain de 450mÂ² clÃ´turÃ© en dure elle se constitue comme suite:\r\n- au rÃ©z de chaussÃ© : un espace extÃ©rieure amÃ©nagÃ© et sÃ©parÃ© de l\'espace jardin, un garage, un sÃ©jour, une cuisine et un bloc sanitaire (WC. Douche sÃ©parÃ©e) .\r\n- au 1er Ã©tage: 4 chambres avec balcon chacune et un bloc sanitaire (WC. Douche sÃ©parÃ©e)\r\n- au 2Ã¨me Ã©tage: 3 chambres, une belle terrasse, bloc sanitaire (WC. Douche sÃ©parer).\r\n- au 3Ã¨me Ã©tage : un grenier et une deuxiÃ¨me et grande terrasse.\r\nle tous pour le prix de 32 millions de dinars nÃ©gociable (160000 euro), sis Ã  la commune de FREHA au lieu dit EL KAHRA. sur lâ€™ancienne route RN12.', '01-Tizi-Ouzou', '02-Azazga', 'Freha', 'Tizi ouzou Freha EL KAHRA', 'villa', 122, 3, '8', 32000000, 'upload/70_Photo1.jpg', 'Fedani    hocine'),
(81, 'Duplex ', 'sublime duplex f4 dont les travaux fini il a juste deux mois dans son Ã©tat neuf fini ;dans une petite rÃ©sidence et avec trÃ¨s peu d habitat le duplex se situe a bejaia ville situe quartier DAAR NACER batiment A cage d escalier A premier Ã©tage un grand sÃ©jour avec fenÃªtre ,une cuisine avec ses Ã©lÃ©ment de cuisine et avec balcon, trÃ¨s grande hall d entrer ,une salle de bain, toilette et au deuxiÃ¨me Ã©tage trois chambre dont deux avec fenÃªtre et une avec balcon,chambre spacieuse ,toilette, et salle de bain . LE DUPLEX EST FINI ET PEINT ET PRES A ETRE HABITER.', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'DAAR NACER', 'duplex', 118, 2, '4', 19000000, 'upload/70_Photo1 (1).jpg', 'Aissou   Nadir'),
(82, 'Local', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau\r\n\r\nMagasin + terrain en plein centre ville de Bouira\r\n(Construction R+6)\r\nLivret foncier, extrait cadastral, certificat d\'urbanisme', '03-Bouira', '01-Bouira', 'Bouira', 'Centre ville', 'Local', 250, 1, '0', 13000000, 'upload/_Photo1 (2).jpg', 'Boutiab Massilva'),
(83, 'appartement ', 'Agence immobiliÃ¨re assirem Ã  bouira met  en vente un bel appartement situer Ã  130 logements\r\nType: F3\r\nEtage: 1\r\nsup : 75 M2\r\nÃ‰tat: trÃ¨s bien rÃ©amÃ©nagÃ© , chauffage central disponible\r\navec trois faÃ§ade\r\ntrÃ¨s bien ensoleillÃ©e\r\nparking vÃ©hicule disponibles\r\navec un bon voisinage\r\navec acte et livret foncier\r\nconvient pour la fonction libÃ©rale : mÃ©decin , dentiste , entreprise , notaire ...ect\r\npour plus d\'information contacter notre agence et merci', '03-Bouira', '01-Bouira', 'Bouira', '130 logements ', 'appartement', 75, 1, '3', 8000000, 'upload/_Photo3.jpg', 'Boutiab Massilva'),
(84, 'Duplex bejaia', 'on vous offre l\'opportunitÃ© d\'accÃ©der Ã  la possession d\'un spacieux duplex en F4 d\'une superficie de 181MÂ² avec trois faÃ§ades plus terrasse d\'environ 50MÂ² au 5Ã©me et dernier Ã©tage et place dans le parking. SituÃ© sur les hauteurs de la ville de bougie Ã  deux pas de toutes commoditÃ© dans la rÃ©sidence \"agence fonciÃ¨re bejaia\" avec une trÃ¨s belle vue sur la mer et le mont Gouraya. Documentation: Acte et livret foncier', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'CitÃ© Sidi Ahmed', 'duplex', 181, 1, '4', 20000000, 'upload/_1.jpg', 'Aissou   Nadir'),
(85, 'Duplex f5', 'On met en vente un trÃ¨s bel appartement en duplex spacieux [composÃ© de 02 niveaux] ensoleillÃ©, aÃ©rÃ© et trÃ¨s bien fini [refait Ã  neuf avec matÃ©riaux de finition de qualitÃ©], situÃ© Ã  Bejaia ville plus exactement Ã  Tala Ouriane Ã  05 minutes de la trÃ©mie d\'Aamriw.\r\n\r\n- CaractÃ©ristiques de l\'appartement :\r\n\r\n--- Type : F5 en duplex\r\n--- Superficie : 122 mÂ²\r\n--- Ã‰tage : Entre sol\r\n--- Papier : Acte + Livret Foncier\r\n--- Prix : 1.800 u\r\n--- Situation : A 150 mÃ¨tres environ de la R.N 24\r\n--- Endroit : TrÃ¨s calme avec une vue dÃ©gagÃ©e.\r\n\r\nN.B:\r\nDisponibilitÃ© de toutes commoditÃ©s.', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'Oued Ghir', 'Bejaia Oued Ghir Tala Ouriane', 'duplex', 122, 2, '5', 19000000, 'upload/78_2.jpg', 'Aissou   Nadir'),
(86, 'Niveau de villa f3', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau , Acte notariÃ©\r\n\r\nJe met en vente avec acte notariÃ© dans la localitÃ© d\'Aokas plus exactement en face l\'Ã©cole paramÃ©dical un niveau de villa style colonial, type F3 de 98 m plus un balcon de 22 m sur toute la faÃ§ade qui offre une vue dÃ©gagÃ©e, situÃ© au 1er Ã©tage, trÃ¨s propre.\r\nIdÃ©al pour une maison secondaire de vacances ou pour rÃ©sider a l\'annÃ©e, Ã©cole primaire a quelques mÃ¨tres, centre ville a 500 m, toute commoditÃ©.\r\nPrix: 13.500.000 DA\r\nPour plus d\'infos/visite, appeler nous.', '02-BÃ©jaÃ¯a', '04-Aokas', 'Aokas', 'Bejaia Aokas', 'niveau de villa', 120, 1, '3', 13500000, 'upload/80_Photo26.jpg', 'Aissou   Nadir'),
(87, 'Niveau de villa', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , MeublÃ© , Garage , Acte notariÃ© , Promesse de vente possible\r\n\r\nA vendre appartement de vacances f5 112m2 habitable meublÃ© (8 couchages) Ã  environ 300 m de la plage familiale surveillÃ©e (protection civile et gendarmerie)\r\n3 chambres+bureau+ grand salon + salle de bain + Wc sÃ©parÃ©\r\nCuisine spacieuse et Ã©quipÃ©e\r\nUne grande Terrasse avec une belle vue libre sur mer et campagne\r\nClimatiseur\r\nTÃ©lÃ©vision Ã©cran plat\r\nPlace de stationnement dans la cour de la rÃ©sidence\r\nCommerces Ã  proximitÃ©\r\nQuartier rÃ©sidentiel trÃ¨s calme\r\nLâ€™appartement peut accueillir 2 petites familles', '01-Tizi-Ouzou', '18-Tigzirt', 'Tigzirt', 'Tizi ouzou Tigzirt Feraoun', 'niveau de villa', 112, 4, '2', 30000000, 'upload/_Photo6 (1).jpg', 'Aissou   Nadir'),
(88, 'Niveau de villa f3', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , Promesse de vente possible\r\n\r\nJe mets en vente niveau de villa rez de chaussÃ©e F3 (papier timbrÃ© )composÃ©e de deux chambre une cuisine et un hall situer au village Aine Skhoune Bejaia\r\nOffre 450 millions\r\npour plus de dÃ©tail contacter moi sur', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'BÃ©jaia ville', 'niveau de villa', 90, 1, '3', 4500000, 'upload/_Photo6.jpg', 'Boutiab Massilva'),
(89, 'Niveau de villa ', 'On vous propose en vente niveau de villa en R+2, superficie 146mÂ², composÃ©e au RDC : 2 garages + porte d\'entrÃ©e et deux Ã©tages non sÃ©parÃ© .\r\nAu lieu dite les Balcons d\'ibachiren Ã  tizi ouada ighil ouazoug (derniÃ¨re la promotion IRIDJ),\r\nÃ  10 minutes de la gare routiÃ¨re de bejaia.\r\n\r\nPour tout complÃ©ments d\'informations veuillez nous contacter.', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', ' Tizi ighil ouazoug', 'niveau de villa', 146, 3, '8', 30000000, 'upload/82_Photo8.jpg', 'Boutiab Massilva'),
(90, 'appartement f3', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau\r\n\r\nje met en vente un appartement F3 a cote de rabrab les batiment T', '03-Bouira', '01-Bouira', 'Bouira', 'Bouira Bouira cite 200 logement', 'appartement', 125, 2, '3', 8200000, 'upload/83_Photo8 (1).jpg', 'Ouguemat Fodil'),
(91, 'Appartement F3 Bouira Sour el ghouzlane', 'Vends. ou Ã©change contre lot de terrain de 100 Ã  150 mÃ¨tres carrÃ©s un joli  appartement F3, lÃ©gÃ¨rement nÃ©gociable. l\'appartement est situÃ© au 4Ã¨me  Ã©tage Ã  la citÃ© des 500 logements,  actÃ© avec citerne de 1500 litres sur la terrasse.', '03-Bouira', '11-Sour El-Ghozlane', 'Sour El-Ghozlane', ' Bouira Sour el ghouzlane 500log', 'appartement', 85, 0, '3', 6900000, 'upload/_84_Photo21.jpg', 'Ouguemat Fodil');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
