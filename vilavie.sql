-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 09 juil. 2020 à 14:44
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
(88, 'Niveau de villa f3', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , Promesse de vente possible\r\n\r\nJe mets en vente niveau de villa rez de chaussÃ©e F3 (papier timbrÃ© )composÃ©e de deux chambre une cuisine et un hall situer au village Aine Skhoune Bejaia\r\nOffre 450 millions\r\npour plus de dÃ©tail contacter moi sur', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'BÃ©jaia ville', 'niveau de villa', 90, 1, '3', 4500000, 'upload/4.jpg', 'Boutiab Massilva'),
(89, 'Niveau de villa ', 'On vous propose en vente niveau de villa en R+2, superficie 146mÂ², composÃ©e au RDC : 2 garages + porte d\'entrÃ©e et deux Ã©tages non sÃ©parÃ© .\r\nAu lieu dite les Balcons d\'ibachiren Ã  tizi ouada ighil ouazoug (derniÃ¨re la promotion IRIDJ),\r\nÃ  10 minutes de la gare routiÃ¨re de bejaia.\r\n\r\nPour tout complÃ©ments d\'informations veuillez nous contacter.', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', ' Tizi ighil ouazoug', 'niveau de villa', 146, 3, '8', 30000000, 'upload/82_Photo8.jpg', 'Boutiab Massilva'),
(90, 'appartement f3', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau\r\n\r\nje met en vente un appartement F3 a cote de rabrab les batiment T', '03-Bouira', '01-Bouira', 'Bouira', 'Bouira Bouira cite 200 logement', 'appartement', 125, 2, '3', 8200000, 'upload/83_Photo8 (1).jpg', 'Ouguemat Fodil'),
(91, 'Appartement F3 Bouira Sour el ghouzlane', 'Vends. ou Ã©change contre lot de terrain de 100 Ã  150 mÃ¨tres carrÃ©s un joli  appartement F3, lÃ©gÃ¨rement nÃ©gociable. l\'appartement est situÃ© au 4Ã¨me  Ã©tage Ã  la citÃ© des 500 logements,  actÃ© avec citerne de 1500 litres sur la terrasse.', '03-Bouira', '11-Sour El-Ghozlane', 'Sour El-Ghozlane', ' Bouira Sour el ghouzlane 500log', 'appartement', 85, 0, '3', 6900000, 'upload/_84_Photo21.jpg', 'Ouguemat Fodil');

-- --------------------------------------------------------

--
-- Structure de la table `biens_location`
--

DROP TABLE IF EXISTS `biens_location`;
CREATE TABLE IF NOT EXISTS `biens_location` (
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
  `pieces` int(3) NOT NULL,
  `prix` int(255) NOT NULL,
  `lien_img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens_location`
--

INSERT INTO `biens_location` (`id`, `titre`, `description`, `wilaya`, `daira`, `commune`, `adresse`, `type_bien`, `surface`, `etage`, `pieces`, `prix`, `lien_img`, `proprietaire`) VALUES
(2, 'Studio', 'je loue un studio bien équipé en plein centre ville de ouadhia a coté du commissariat ', '01-Tizi-Ouzou', '16-Ouadhia', 'Agouni Gueghrane', 'en face du commissariat ', 'studio', 40, 0, 2, 10000, 'upload/_images.jpg', 'Aissou Nadir'),
(3, 'appartement', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau , MeublÃ©\r\nA louer 4 appartements , F2 et F3 , meublÃ©s et luxueux en plein centre ville de Bouira ( en face du square), pour courtes durÃ©es allant d\'une semaine jusqu\'Ã  3 mois renouvelables . Pour plus de details veuillez appeler le numero .', '03-Bouira', '01-Bouira', 'Bouira', 'Square', 'appartement', 84, 0, 3, 25000, 'upload/_a.jpg', 'Aissou Nadir'),
(4, 'appartement', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau , MeublÃ©\r\n\r\nAgence immobiliÃ¨re assirem Ã  bouira met en location un bel appartement meublÃ© Ã  dra elbordj en face la wilaya\r\nType: F3\r\nÃ‰tage: 5 Ã¨me\r\nsup: 85 M2\r\nÃ‰tat: bien prorpe\r\nmeublÃ© avec toutes commoditÃ©s\r\navec un bon voisinage\r\npour plus d\'information contacter notre agence et merci', '03-Bouira', '01-Bouira', 'Bouira', ' Dra elbordj en face la wilaya', 'appartement', 85, 0, 3, 23000, 'upload/_z.jpg', 'Aissou Nadir'),
(5, 'Local', 'SpÃ©cifications : ElectricitÃ©\r\n\r\nLocation d\'un bureau de 27 mÂ² bien situÃ© entre l\'universitÃ© centrale et l\'hÃ´tel SOFI (En face ancient Djezzy Bloc Chikhi au 2 Ã¨me etages), composÃ© de 2 piÃ¨ces, bon voisinage (avocats, architectes, bureaux d\'affaires ..) Ã‰lectricitÃ©, ligne tÃ©lÃ©phonique, stationnement..)\r\nPour plus de dÃ©tails, veillez me contacter au numÃ©ro indiquÃ©.   ', '03-Bouira', '01-Bouira', 'Bouira', 'Bloc chikhi en face ancien djezzy ( hÃ´tel Sofi)', 'Local', 27, 0, 2, 7000, 'upload/_aa.jpg', 'Aissou Nadir'),
(6, 'Local', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau\r\n\r\nDes bureaux pour service (avocat,entreprise......) superficie 25m2 et 16m2 au 2 Ã©tage et 4 etage .\r\nBloc Abderrahim Harkat en faÃ§e la route et arrÃªt ain turk ,ain lahdjar ,ain bessan .bouira', '03-Bouira', '01-Bouira', 'Bouira', ' Bloc Abderrahim Harkat Bouira', 'Local', 25, 0, 1, 8000, 'upload/_e.jpg', 'Aissou Nadir'),
(7, 'Locaux ', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau\r\n\r\nBonjour\r\nJe met en location 4 locaux et un sous-sol et un premier etage dans un immeuble bien situÃ© a bouira ville.\r\nLes 4 locaux chacun a 45mÂ² a 48mÂ²\r\nLe sous-sol est a 100mÂ²\r\nLe premier etage c est des bureaux a 200mÂ²\r\nPour(Banque ,sociÃ©tÃ© Ã©tatique ou privÃ© .sociÃ©tÃ© Ã©tranger. Clinique privÃ©.', '03-Bouira', '01-Bouira', 'Bouira', 'lot 94 bouira', 'Local', 100, 1, 4, 18000, 'upload/_Photo1.jpg', 'Aissou Nadir'),
(8, 'Appartement', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau\r\n\r\nAgence ImmobiliÃ¨re Assirem Ã  bouira met en location un bel appartement pour la fonction libÃ©rale cÃ´tÃ© nouveau boulevard djezzy\r\nType: F4\r\nEtage : 1 Ã¨re\r\nsup: 95 M2\r\nÃ‰tat: bien finie\r\nparking vÃ©hicule disponible\r\nconvient parfaitement pour la fonction libÃ©rale : mÃ©decin , dentiste , laboratoire d\'analyses , bureau d\'entreprise ... ect\r\npour plus d\'information contacter notre agence et merci', '03-Bouira', '01-Bouira', 'Bouira', 'Nouveau boulevard djezzy', 'appartement', 95, 0, 4, 22000, 'upload/_Photo10.jpg', 'Aissou Nadir'),
(9, 'Appartement', 'Je met en location un appartement F5 , 1er Ã©tage, propre bon voisinage avec toutes commoditÃ©s ( eau, gaz, Ã©lectricitÃ©, installation chauffage central ) situÃ© dans un endroit stratÃ©gique au centre ville de mchedallah.\r\nDe prÃ©fÃ©rence les mÃ©decins spÃ©cialistes et un radiologue qu\'on a pas dans la rÃ©gion sauf Ã  Bouira ou a akbou (plus de 45 km de Mchedallah )', '03-Bouira', '04-M\'Chedallah', 'AÃ¯t Mahmoud', 'Bouira M\'chedallah', 'appartement', 200, 1, 5, 28000, 'upload/_Photo1 (1).jpg', 'Aissou Nadir'),
(10, 'Villa', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , MeublÃ© , Garage\r\n\r\nVILLA A BENIKSILA\r\n30 km D AZFOUNNE A 500 M DE LA PLAGE\r\nTrÃ¨s jolie villa en R +1 de 90 m2 sur une assiette de 345 m2 au bord de mer\r\n* RDC un grande cuisine open avec un grand salon ,\r\n* une chambre d ami ,\r\n* salle de bain\r\n* deux autres chambres\r\n* une terrasse vue sur mer Ã©quipe d une cuisine\r\n* un jardin\r\n* une entrÃ©e pour 2 voitures\r\n12000 DA juin et juillet par jour\r\n15 000 DA par jour aoÃ»t\r\nrÃ©servation 30 %', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'Beni ksilla', 'villa', 90, 1, 5, 360000, 'upload/_Photo9.jpg', 'Aissou Nadir'),
(11, 'Villa', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , MeublÃ© , Garage\r\n\r\nLocation d\'une maison Ã  boulimat 2Ã¨me piste pieds dans l eaux , avec un grand jardin,\r\n4 piÃ¨ces ,cuisine,salle de bain, 2 toilettes, et un parking.\r\nEndroit familiale sÃ©curisÃ© avec une belle plage, endroit agrÃ©able pour des vacances.', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'Boulimat 2Ã¨me piste', 'villa', 800, 1, 4, 200000, 'upload/_Photo15.jpg', 'Aissou Nadir'),
(12, 'Villa', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , MeublÃ© , Garage\r\n\r\nA louer un tres chaleureux bungalow situÃ© Ã  aach el baz (entre boulimat et saket) pas loin des commerces equipÃ© de toutes commoditÃ©s ( eau , gaz, terrasse ,barbecue, vue panoramique sur la mer, parking pour vehicule ,micro-onde , clim 18000, jardin, cuisine equipÃ©,cafetiÃ¨re.....exxx\r\npour plus d\'information veuillez appeler le ou bien ,\r\nobs\r\nLe nombre maximum de personnes est de 8 .\r\nLe prix; 8000 JUIN\r\n9000 JUILLET\r\n10000 AOUT\r\n', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'Aach elbaz', 'villa', 80, 1, 3, 240000, 'upload/_Photo10 (1).jpg', 'Aissou Nadir'),
(13, 'Villa Luxe', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , MeublÃ© , Garage\r\n\r\nAxxamiw vous propose pour vos vacances dâ€™Ã©tÃ© 2020 Ã  Saket, en location une trÃ¨s belle villa avec piscine, rez-de-chaussÃ©e et 1er duplex en F7 et plus un F3 au 2Ã¨me Ã©tage meublÃ© et trÃ¨s bien Ã©quipÃ©, bÃ¢tie sur 200m2, avec 2 accÃ¨s au 2niveau ( un accÃ¨s Ã  lâ€™intÃ©rieure et lâ€™autre accÃ¨s Ã  lâ€™extÃ©rieure), le rez-de chaussÃ© dispose dâ€™un espace piscine, vÃ©hicule, terrasse, barbecue, grand salon avec une petite cascade qui donne direct sur la terrasse, une cuisine Ã©quipÃ© avec balcon , une salle de bain et sanitaire, au 1er Ã©tage on trouve 4 chambre avec des placards et des petits balcon chacune, un grand salon avec une petite terrasse, une salle de bain et sanitaire, au 2Ã¨me Ã©tage un grand un F3 bien Ã©quipÃ©. toutes commoditÃ©s est disponible Ã  cotÃ© la mosquÃ©e de Saket, supÃ©rette, pizzeria, restaurant, Ã  700M de la plage et Ã  proximitÃ© du port de plaisance de Saket, endroit familial et sÃ©curisÃ©.\r\nAvec une capacitÃ© d\'accueil 16 Ã  17 personnes.\r\n\r\nPrix : 26.000,00 DA/ la nuitÃ©e.\r\n\r\nCondition de location :\r\n- Payement de 50% Ã  la rÃ©servation sur le montant total de la location, le reste Ã  payer le jour de lâ€™occupation des lieux, frais dâ€™agence 10% sur le montant de la location.\r\n- Location juste pour des familles et Ã  partir de 5nuitÃ© et plus, plus la caution.\r\n\r\nNB : possibilitÃ© de louer un duplex seul plus piscine pour une petite famille.', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'Saket', 'villa', 200, 3, 9, 600000, 'upload/_Photo1 (2).jpg', 'Aissou Nadir'),
(14, 'Villa', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , MeublÃ© , Garage\r\n\r\nPour des vacances agrÃ©ables une Villa pied dans l\'eau une surface de 580m2 dont 140m2 batti composÃ© de deux grandes chambres, un grand salon accÃ¨s sur terrasse et une grande cuisine de 24m2 avec accÃ¨s sur terasse aussi un garage pour 3-4 vÃ©hicules et un grand jardin\r\nSurtout sans co-locataires dans une rÃ©gion trÃ¨s respectueuse du sence de la famille (plage familiale)', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'BÃ©jaÃ¯a', 'Beni ksilla', 'villa', 580, 2, 6, 360000, 'upload/_Photo1 (3).jpg', 'Aissou Nadir'),
(15, 'Villa Piscine', 'RESTE DISPONIIBILITEE UNIQUEMENT A PARTIR DU 01 SEPTEMBRE. Location villa 150 m2 sur terrain de 600 m2 avec piscine. 03 chambres Ã  coucher + salon et salle de billard. EntiÃ¨rement Ã©quipÃ©e pour max 10 personnes.\r\n- 12 000 da/jour jusqu\'au mois de mai. ( sans piscine ).\r\n- 20 000 da /jour le mois de juin.\r\n- 22 000 da/jour les mois de juillet et aoÃ»t.\r\n- 20 000 da/jour le mois de septembre.\r\nversement de 50%  Ã  la rÃ©servation et le reste Ã  l\'installation. Plage de galet rÃ©servÃ©e aux rÃ©sidents du lotissement Ã  150 m  Ã  pied. espaces communs et chambre parentale climatisÃ©s.\r\nune caution de 20 000,00 da devra etre versÃ©e le jour de l\'installation. elle sera restituÃ©e le jour du dÃ©part aprÃ¨s vÃ©rification des lieux.', '01-Tizi-Ouzou', '18-Tigzirt', 'Tigzirt', 'Tiza', 'villa', 130, 1, 5, 360000, 'upload/_Photo2.jpg', 'Aissou Nadir'),
(16, 'Villa', 'SpÃ©cifications : Jardin , ElectricitÃ© , Eau , MeublÃ© , Garage\r\n\r\nAXXAMIW vous propose pour vos vacances dâ€™Ã©tÃ© 2020 Ã  Teghermt pieds dans l\'eau en location des F3 meublÃ©s et trÃ¨s bien Ã©quipÃ© au 1er et 2Ã©me 3eme Ã©tage, dâ€™une superficie de 68m2, avec un espace parkin, aire de jeux, et trÃ¨s belle vue sur mer direct en face la mer bien dÃ©gagÃ©e, situÃ© dans un endroit familial et sÃ©curisÃ© toutes commoditÃ©s est disponible .\r\n\r\nPrix : 9.000 DA/la nuitÃ©e.\r\n\r\nCondition de location :\r\n- Payement de 50% Ã  la rÃ©servation sur le montant total de la location, le reste Ã  payer le jour de lâ€™occupation des lieux, frais dâ€™agence 10% sur le montant de la location.\r\n\r\n- Location juste pour des familles et Ã  partir de 5nuitÃ© et plus, plus la caution.', '01-Tizi-Ouzou', '03-Azeffoun', 'Azeffoun', 'Beni ksilla', 'villa', 68, 1, 3, 270000, 'upload/_Photo13.jpg', 'Aissou Nadir'),
(17, 'Appartement', 'SpÃ©cifications : ElectricitÃ© , Gaz , Eau , MeublÃ©\r\n\r\nAxxamiw met en location un appartement meublÃ© dans une villa privÃ©e.\r\n\r\nExclusivement pour familles\r\nAvec la possibilitÃ© de location Ã  la semaine.\r\nDes prix exceptionnels pour les malades.\r\n\r\nPour plus d\'informations contactez nous', '01-Tizi-Ouzou', '20-Tizi Ouzou', 'Tizi Ouzou', 'Sud ouest', 'appartement', 40, 3, 2, 16000, 'upload/_Photo5.jpg', 'Aissou Nadir'),
(18, 'Appartement', 'Salam alikoum trÃ¨s belle appartement Ã  azeffoun situÃ© Ã  500 m de la plage de sidi khelifa vue sur mer meublÃ© dans une rÃ©sidence gardÃ©e sur la route nationale azeffoun bejaia pratiquement pied dans l\'eau plage privÃ©e Ã  500 m toute commoditÃ© cuisines Ã©quipÃ© eau 24/24 forage\r\nPlage privÃ©e Ã  50 m\r\nPlage sidi khelifa Ã  500 m\r\nPlage petit paradi Ã  2km\r\nPlage azzaghar Ã  5 km', '01-Tizi-Ouzou', '03-Azeffoun', 'Azeffoun', 'Sidi khlifa', 'appartement', 60, 1, 3, 25000, 'upload/_Photo1 (5).jpg', 'Aissou Nadir'),
(19, 'Appartement', 'SpÃ©cifications : Jardin , ElectricitÃ© , Gaz , Eau , MeublÃ© , Garage\r\n\r\nPlusieurs appartements de type Studio, F2, F3, F4 dans une rÃ©sidence sÃ©curisÃ©e Ã  louer pour les vacances d\'Ã©tÃ© avec une trÃ¨s grande terrasse vue sur mer (pas de vis-Ã -vis).\r\nTranquillitÃ© garantie dans un cadre trÃ¨s agrÃ©able.\r\nCe petit paradis possÃ¨de deux plages situÃ©es juste entre boulimat et saket dans la wilaya de Bajaia, Ã  20 minute de la ville en voiture.\r\n\r\nPour la premiÃ¨re plage on possÃ¨de un accÃ¨s privÃ© Ã  la mer. La deuxiÃ¨me plage est Ã  5min Ã  pieds.\r\nEntrÃ©e et parking privÃ© sÃ©curisÃ©\r\nL\'appartement est Ã©quipÃ©; d\'une cuisine toute Ã©quipÃ©e, gaziniÃ¨re, four, micro-onde, rÃ©frigÃ©rateur, table + chaises, canapÃ©, lit, tÃ©lÃ©vision(remplacÃ©e par un Ã©cran plat), climatiseur, eau et Ã©lectricitÃ©.\r\nLocation uniquement aux familles. Non sÃ©rieux s\'abstenir.\r\nDes photos supplÃ©mentaires pour un appartement spÃ©cifique peuvent Ãªtre envoyÃ©es par mail.\r\nN\'hÃ©sitez pas Ã  nous contacter pour d\'autres informations supplÃ©mentaires.', '02-BÃ©jaÃ¯a', '06-BÃ©jaÃ¯a', 'Oued Ghir', 'Aach elbaz', 'appartement', 60, 1, 3, 30000, 'upload/_Photo9 (1).jpg', 'Aissou Nadir');

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
  `wilaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_annonce`
--

INSERT INTO `demande_annonce` (`id`, `titre`, `description`, `wilaya`, `daira`, `commune`, `adresse`, `type_bien`, `surface`, `etage`, `pieces`, `prix`, `lien_img`, `proprietaire`) VALUES
(70, 'maison 3', 'popoopopo', '01-Tizi-Ouzou', '15-Ouacif', 'AÃ¯t Boumahdi', 'hohoh', 'studio', 20, 2, 2, 600000, 'upload/_images.jpg', 'Fedani    hocine');

-- --------------------------------------------------------

--
-- Structure de la table `demande_annonce_location`
--

DROP TABLE IF EXISTS `demande_annonce_location`;
CREATE TABLE IF NOT EXISTS `demande_annonce_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_annonce_location`
--

INSERT INTO `demande_annonce_location` (`id`, `titre`, `description`, `wilaya`, `daira`, `commune`, `adresse`, `type_bien`, `surface`, `etage`, `pieces`, `prix`, `lien_img`, `proprietaire`) VALUES
(5, 'ooooooooooo', '^p^pioouoiz', '01-Tizi-Ouzou', '14-Mekla', 'SouamaÃ¢', 'eazeae', 'villa', 30, 2, 2, 3000, 'upload/70_unnamed.jpg', 'Fedani    hocine');

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
(7, 'Fedani    hocine', 'A l\'agence ', '2020-07-15', '09:00:00', 'Achat', 58, 0);

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

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_biens` int(11) NOT NULL,
  `id_cl` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_biens`, `id_cl`) VALUES
(56, 67, 58),
(55, 68, 58),
(51, 69, 59),
(60, 69, 60),
(57, 67, 60),
(63, 89, 65);

-- --------------------------------------------------------

--
-- Structure de la table `favoris_loc`
--

DROP TABLE IF EXISTS `favoris_loc`;
CREATE TABLE IF NOT EXISTS `favoris_loc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_biens` int(11) NOT NULL,
  `id_cl` int(11) NOT NULL,
  KEY `Id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris_loc`
--

INSERT INTO `favoris_loc` (`id`, `id_biens`, `id_cl`) VALUES
(1, 3, 58),
(2, 5, 58);

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
  `raison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rdv_confirmer`
--

INSERT INTO `rdv_confirmer` (`id`, `client`, `lieu`, `date`, `heur`, `raison`, `adresse`) VALUES
(20, 'massi', 'a proximitÃ© ', '2020-06-18', '05:02:00', '', ''),
(21, 'azea', 'A l\'agence ', '2020-06-27', '12:00:00', '', ''),
(22, 'Fedani    hocine', 'A l\'agence ', '2020-07-07', '09:00:00', 'Achat', 'Rue Tiza prÃ©s du commissariat ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
