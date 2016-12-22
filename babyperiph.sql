-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Décembre 2016 à 16:32
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `babyperiph`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `annonceName` varchar(30) NOT NULL,
  `annonceDescription` longtext NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `dureeDuPrix` varchar(30) DEFAULT NULL,
  `isLocation` bit(1) NOT NULL DEFAULT b'0',
  `isVente` bit(1) NOT NULL DEFAULT b'0',
  `isService` bit(1) NOT NULL DEFAULT b'0',
  `isDeleted` bit(1) NOT NULL DEFAULT b'0',
  `isExpired` bit(1) NOT NULL DEFAULT b'0',
  `isDisponible` bit(1) NOT NULL DEFAULT b'0',
  `annonceAddress` varchar(60) NOT NULL,
  `annonceCity` varchar(60) NOT NULL,
  `imagePrincipale` varchar(50) DEFAULT NULL,
  `imagefree` varchar(50) DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `annoncePhone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table de toutes les annonces';

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `annonceName`, `annonceDescription`, `idUtilisateur`, `prix`, `dureeDuPrix`, `isLocation`, `isVente`, `isService`, `isDeleted`, `isExpired`, `isDisponible`, `annonceAddress`, `annonceCity`, `imagePrincipale`, `imagefree`, `image1`, `image2`, `image3`, `dateCreation`, `dateModification`, `annoncePhone`) VALUES
(10, 'Poussette Chicco TBE', 'Poussette en tr&egrave;s bon &eacute;tat jamais servi', 51, '12', 'semaine', b'1', b'0', b'0', b'0', b'0', b'0', '05 rue de l''&eacute;glise', 'Paris', '10_poussette.jpg', NULL, NULL, NULL, NULL, '2016-12-16 14:39:18', '2016-12-21 15:45:41', '01010101'),
(16, 'Service assiettes pour b&eacut', 'une service d''assiettes pour b&eacute;b&eacute; en excellent &eacute;tat. prix ferme ', 53, '56', '', b'0', b'1', b'0', b'0', b'0', b'0', '5 rue de l''&eacute;glise', 'Le perray en yvelines', '16_assietteCuiereTasse.jpg', NULL, NULL, NULL, NULL, '2016-12-20 10:13:39', '2016-12-21 15:45:41', '01010101'),
(18, 'Table &agrave; manger pour b&a', 'Une super table &agrave; manger tr&egrave;s pratique', 53, '69', '', b'0', b'1', b'0', b'0', b'0', b'0', '5 rue de l''&eacute;glise', 'Paris', '18_tableBB.jpg', NULL, NULL, NULL, NULL, '2016-12-20 14:44:09', '2016-12-21 15:45:41', '01010101');

--
-- Déclencheurs `annonce`
--
DELIMITER $$
CREATE TRIGGER `trg_annonce_dateCreation` BEFORE INSERT ON `annonce` FOR EACH ROW SET NEW.dateCreation = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_annonce_dateModif` BEFORE UPDATE ON `annonce` FOR EACH ROW SET NEW.dateModification = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `idAnnonce` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `categorieName` varchar(40) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'0',
  `isDeleted` bit(1) NOT NULL DEFAULT b'0',
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déclencheurs `categorie`
--
DELIMITER $$
CREATE TRIGGER `trg_categorie_dateCreation` BEFORE INSERT ON `categorie` FOR EACH ROW SET NEW.dateCreation = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_categorie_dateModif` BEFORE UPDATE ON `categorie` FOR EACH ROW SET NEW.dateModification = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `idAnnonce` int(11) NOT NULL,
  `imageName` varchar(40) NOT NULL,
  `imagePath` varchar(60) NOT NULL,
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des images des annonces';

--
-- Déclencheurs `image`
--
DELIMITER $$
CREATE TRIGGER `trg_image_dateCreation` BEFORE INSERT ON `image` FOR EACH ROW SET NEW.dateCreation = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_image_dateModif` BEFORE UPDATE ON `image` FOR EACH ROW SET NEW.dateModification = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `idAnnonce` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `isValidated` bit(1) NOT NULL DEFAULT b'0',
  `isExpired` bit(1) NOT NULL DEFAULT b'0',
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `avatar` varchar(40) DEFAULT NULL,
  `userName` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalCode` varchar(5) NOT NULL,
  `city` varchar(60) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `isAdmin` bit(1) NOT NULL DEFAULT b'0',
  `isPremium` bit(1) NOT NULL DEFAULT b'0',
  `isProfessional` bit(1) NOT NULL DEFAULT b'0',
  `password` varchar(62) NOT NULL,
  `token` varchar(32) NOT NULL,
  `isDeleted` bit(1) NOT NULL DEFAULT b'0',
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Liste des utilisateurs';

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `lastName`, `firstName`, `avatar`, `userName`, `address`, `postalCode`, `city`, `phone`, `email`, `score`, `isAdmin`, `isPremium`, `isProfessional`, `password`, `token`, `isDeleted`, `dateCreation`, `dateModification`) VALUES
(51, 'Mou', 'Nira', NULL, 'mouna', 'm', 'm', 'm', '0111111111', 'm@m.m', NULL, b'0', b'0', b'0', '$2y$10$Zi/82X86tCZD6vvI9UZTeuBkXynHnGyGnXnVYtzCObcn4maqW59py', '', b'0', '2016-12-15 16:50:54', '2016-12-15 16:50:54'),
(52, 'pan', 'seb', '52_P.jpg', 'seb', 's', 's', 's', '024788', 'seb@seb.fr', NULL, b'0', b'1', b'0', '$2y$10$EkJoKFM0prgjFNwrJK9rWOhz.0HkjTIDNEC9iVT3/qX3XepOYypuq', '', b'0', '2016-12-15 17:35:09', '2016-12-15 17:35:09'),
(53, 'zitouni', 'adel', '53_adel-zitouni-icone-fr4.png', 'Adel', 'maurepas', '78310', 'maurepas', '0111111111', 'adel@amsg.asso.fr', NULL, b'0', b'1', b'0', '$2y$10$oKXes6BWvt6BECFMQochveNypHIOiALiIvBqnO8HQ/2ebx4FLpeDW', '', b'0', '2016-12-19 12:05:00', '2016-12-19 12:05:00'),
(54, 'tati', 'tatou', '54_I.jpg', 'Jean', '6 rue du pont', '75300', 'Paris', '0123654789', 'j@j.j', NULL, b'0', b'1', b'0', '$2y$10$PiIgjizYb9l9V3XxKOjOX.GII2R48fvBqE7NbngQPHZBDU2o54oMa', '', b'0', '2016-12-20 14:54:29', '2016-12-20 14:54:29'),
(55, 'rat', 'souris', NULL, 'ratatouille', '12 Rue de Rivoli', '75004', 'Paris', '02145887', 'o@o.ot', NULL, b'0', b'1', b'0', '$2y$10$nUy5mTnMje/n2ukk0JN7q.4rsQdK7ROsh8gKP4BQuSFDoQ6e2GWOO', '', b'0', '2016-12-20 19:07:49', '2016-12-20 19:07:49'),
(56, 'michel ', 'polnareff', NULL, 'michou', '56 Rue du G&eacute;n&eacute;ral Leclerc', '94000', 'Cr&eacute;teil', '0125478', 'm@mi.ou', NULL, b'0', b'1', b'0', '$2y$10$zGisPSfQlUpOtkmaesF1Gu2Safxrke9q1BHkepDT2gDa63zur3eye', '', b'0', '2016-12-20 19:09:41', '2016-12-20 19:09:41'),
(57, 'hrhzj', 'rjhzj', '57_I.jpg', 'jhrzj', '35 Rue du Temple', '75004', 'Paris', '2547', 'test@a', NULL, b'0', b'1', b'0', '$2y$10$xxUIgNzEJTPAUt8h42Xi..ndId1zaQ.CnuflOUSvNqVq2zTKFJLHi', '', b'0', '2016-12-20 19:19:04', '2016-12-20 19:19:04'),
(58, 'Momo', 'JIJI', '58_P.jpg', 'Dada', 'Annaba Wilaya d''Annaba', '', '', '0125478', 'fifi@foufou.dz', NULL, b'0', b'1', b'0', '$2y$10$1riPWDPcw2CH6/wivzlR6OvRPvnPskaDfPgrDX4CfU8Gt/nEx01aS', '', b'0', '2016-12-21 10:02:41', '2016-12-21 10:02:41'),
(59, 'Mon ', 'B&eacute;b&eacute;', '59_baby-periph-icon.png', 'Bambi', 'Wilaya de Souk Ahras Alg&eacute;rie', '', '', '254785', 'bebe@tonton.fr', NULL, b'0', b'0', b'0', '$2y$10$m4IMuTj7vcIxsWK9D6T7R.yfY4AJQ1.nyaNYKZHMXjFz2Yx7Svgfm', '', b'0', '2016-12-21 10:19:44', '2016-12-21 10:19:44'),
(60, 'tt,k', ',u,', '60_I.jpg', 'uy,u,k', 'M''Daourouch Wilaya de Souk Ahras', '', '', '251478', 'a@p.g', NULL, b'0', b'0', b'0', '$2y$10$lWnKux3qIzmuMsg1oIAPc.mSInSqIzEmowxN.onAsb80FYHW/GNvK', '', b'0', '2016-12-21 10:44:56', '2016-12-21 10:44:56'),
(61, 'yjtyj,,y', ',t,,,t', '61_I.jpg', 'kjbjfhb', 'Paris Paris', '', '', '258741', 'o.p@.gt.y', NULL, b'0', b'0', b'0', '$2y$10$LXcB99s/SUCKhxt4hEpnD.U/iOBkbyxyive/111wNP73F.3.OwA2y', '', b'0', '2016-12-21 10:47:39', '2016-12-21 10:47:39'),
(63, 'yjtyj,,yjjyk', ',t,,,tjkjk', '63_I.jpg', 'aziz', 'Bruxelles Bruxelles', '', '', '258741', 'o.p@gt.yy', NULL, b'0', b'0', b'0', '$2y$10$EE9UI0MKz2s.tA2b9NRFZ.5UJk3AT6waIYjMubqy23M2qxB1ukOVq', '', b'0', '2016-12-21 10:54:23', '2016-12-21 10:54:23'),
(65, 'yjtyj,,yjjyk', ',t,,,tjkjk', '65_I.jpg', 'aziza', 'Bonneuil-sur-Marne Val-de-Marne', '', '', '258741', 'po.p@gt.yy', NULL, b'0', b'0', b'0', '$2y$10$WZ7cGN3hKLrld/uae/0tnOOQK20wxIQjn7fNwwnjvPQ1BUJ.w/bSW', '', b'0', '2016-12-21 10:58:19', '2016-12-21 10:58:19'),
(66, 'yjtyj,,yjjyk', ',t,,,tjkjk', '66_I.jpg', 'azizan', 'Trappes Yvelines', '', '', '258741', 'apo.p@gt.yy', NULL, b'0', b'0', b'0', '$2y$10$OqbEwjrDvBDh2Mq7dObjzOeML55xjbwE6MWrYH/hAeYuUZwqm4xbW', '', b'0', '2016-12-21 11:00:18', '2016-12-21 11:00:18'),
(67, 'Moh', 'koul', '67_Mags_team.png', 'ourouh', 'Le Perray-en-Yvelines Yvelines', '', '', '123', 'az@p.p', NULL, b'0', b'0', b'0', '$2y$10$C7v.hXg0RlAINOvcR.gV0eg1pKdnk/ziAR5msn6AlLOmomkBZQdy.', '', b'0', '2016-12-21 11:02:44', '2016-12-21 11:02:44');

--
-- Déclencheurs `utilisateur`
--
DELIMITER $$
CREATE TRIGGER `trg_utilisateur_dateModif` BEFORE UPDATE ON `utilisateur` FOR EACH ROW SET NEW.dateModification = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_utilisateur_datecreation` BEFORE INSERT ON `utilisateur` FOR EACH ROW SET NEW.dateCreation = NOW()
$$
DELIMITER ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_utilisateur_id` (`idUtilisateur`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categorieAnnonce_id` (`idAnnonce`),
  ADD KEY `fk_categorieUtilisateur_id` (`idUtilisateur`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_image_id` (`idAnnonce`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_panier_id` (`idAnnonce`),
  ADD KEY `fk_panierUtilisateur_id` (`idUtilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `fk_utilisateur_id` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_categorieAnnonce_id` FOREIGN KEY (`idAnnonce`) REFERENCES `annonce` (`id`),
  ADD CONSTRAINT `fk_categorieUtilisateur_id` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_id` FOREIGN KEY (`idAnnonce`) REFERENCES `annonce` (`id`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_panierUtilisateur_id` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `fk_panier_id` FOREIGN KEY (`idAnnonce`) REFERENCES `annonce` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
