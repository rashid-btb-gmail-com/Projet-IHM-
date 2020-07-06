-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 juil. 2020 à 16:09
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
