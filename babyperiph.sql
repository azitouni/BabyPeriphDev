-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 16 Décembre 2016 à 17:34
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
  `dateModification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table de toutes les annonces';

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `annonceName`, `annonceDescription`, `idUtilisateur`, `prix`, `dureeDuPrix`, `isLocation`, `isVente`, `isService`, `isDeleted`, `isExpired`, `isDisponible`, `annonceAddress`, `annonceCity`, `imagePrincipale`, `imagefree`, `image1`, `image2`, `image3`, `dateCreation`, `dateModification`) VALUES
(10, 'Poussette Chico TBE', '7ali madrour ya boutayba dawini', 51, '12', 'semaine', b'1', b'0', b'0', b'0', b'0', b'0', '', '', '10_poussette.jpg', NULL, NULL, NULL, NULL, '2016-12-16 14:39:18', '2016-12-16 14:39:18'),
(11, 'Lettre A', 'belle letttre A', 51, '10', 'mois', b'1', b'0', b'0', b'0', b'0', b'0', '', '', '11_A.jpg', NULL, NULL, NULL, NULL, '2016-12-16 15:12:13', '2016-12-16 15:12:13');

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
(4, 'zitouni', 'ddd', NULL, '', '', '', '', '', '', NULL, b'0', b'0', b'0', '$2y$10$a5Se2pbZbbvYnlB1AZoqmOt79OIUn.haSzNlhq7FR/RRrvIjsdEI6', '', b'0', '2016-12-14 14:54:30', '2016-12-14 14:54:30'),
(9, 'ff', 'ff', NULL, 'fff', '05 rue de l''église', '75000', 'Paris', '0654879652', 'chuck@noris.com', NULL, b'0', b'0', b'0', '$2y$10$uTwPczmqaU0hwFhppj64fun9KisGSYqe92Wzt5IezOFgOSdcvXu1W', '', b'0', '2016-12-14 15:13:55', '2016-12-14 15:13:55'),
(17, 'NORIS', 'Chuck', NULL, 'zitouniadel@hotmail.com', '05 rue de l''église', '75000', 'Paris', 'webforce3', 'hgfhgfhgf@mail.com', NULL, b'0', b'1', b'0', '$2y$10$HhNDUNljhJ9SrXYdaAf5fO3r5JjU52Ks0arqJ4LJNDcaAhcfb1P/G', '', b'0', '2016-12-14 15:31:55', '2016-12-14 15:31:55'),
(18, 'Mou', 'Nira', NULL, 'mounira', '05 rue de l''église', '75000', 'Paris', 'webforce3', 'mounira@hotmail.com', NULL, b'0', b'1', b'0', '$2y$10$Sr5qcGQpVWK.O/FTpiBEI.ThhNs7NcuP.wxks6r28G4m0Dsn58wzS', '', b'0', '2016-12-14 15:58:34', '2016-12-14 15:58:34'),
(19, 'zz', 'zz', NULL, 'zz', 'e', 'e', 'e', 'webforce3', 'zitouniadel@hotmail2.com', NULL, b'0', b'0', b'0', '$2y$10$y2h4zDga1UupCREpbzHX8.V7Wu3sK0CyieY5SmGnZEBEWKkx2fHc2', '', b'0', '2016-12-14 15:59:57', '2016-12-14 15:59:57'),
(20, 'eer', 'rrrr', NULL, 'rrr', 'rr', 'rr', 'rr', 'webforce3', 'zitouniadel@hotmail3.com', NULL, b'0', b'0', b'1', '$2y$10$EYgIr7A0QjH5osLMdYMKf.TPlWh2fPSGWTx9xv0s9RxNxF7.MxfV.', '', b'0', '2016-12-14 16:00:42', '2016-12-14 16:00:42'),
(21, 'hhr', 'hh', NULL, 'hfhh', 'hhdf', 'hdf', 'fd', 'webforce3', 'fhb', NULL, b'0', b'0', b'0', '$2y$10$uybEAD0I00ojzM2l.kJ1rONKFGNuztHETOWxgBpKA2qfAyd8fomgu', '', b'0', '2016-12-14 16:14:30', '2016-12-14 16:14:30'),
(22, 'guel', 'mou', 'descktop01.jpg', 'gmou', '05 rue de l''&eacute;glise', '78000', 'versailles', '021478545', 'gmoun@cc.com', NULL, b'0', b'1', b'0', '$2y$10$EtRJqfHstOIVSO2GBk3GBO91zbWBP5GphgCbfAt8Jfv869n1viO2.', '', b'0', '2016-12-14 16:31:31', '2016-12-14 16:31:31'),
(24, 'yy', 'yy', 'descktopBack.png', 'yyy', 'rrrr', '4587', 'rrrr', '15565555', 'ktr@dzs.fr', NULL, b'0', b'0', b'1', '$2y$10$iZZm37.RnqmVX.GqNwtFBeF.l/OVzVSn4tYofCiDDr1lptu77yY36', '', b'0', '2016-12-14 16:35:48', '2016-12-14 16:35:48'),
(26, 'ded', 'ddd', 'descktop01.jpg', 'dd', 'ded', '785', 'dddd', '785432', 'gr@ger.ff', NULL, b'0', b'0', b'0', '$2y$10$u7l9u77AIMEXPWQj1za4PO.VEsB9tuRevOBLgV79xwu/.rIXuaZp6', '', b'0', '2016-12-14 16:39:35', '2016-12-14 16:39:35'),
(28, 'ryet', 'red', 'descktopBack.png', 'rte', 'grfd', '4578', 'u&egrave;y', '5876', 'oiop@hfs.fr', NULL, b'0', b'1', b'0', '$2y$10$eigyY6TLuFk07QX1VpK7mORDdQEjNRSsVDxgYtWMJQLXSHkpRUBg2', '', b'0', '2016-12-14 16:44:20', '2016-12-14 16:44:20'),
(30, 'p', 'p', 'descktopBack.png', 'p', 'p', 'p', 'p', 'webforce3', 'p@p.hy', NULL, b'0', b'0', b'0', '$2y$10$7IfGKl6PDPlIy7wO7EG6Z.XChIeAYkIe1Z90Jw9mJTAH/xYwOAHt2', '', b'0', '2016-12-14 16:53:10', '2016-12-14 16:53:10'),
(31, 't', 't', 'descktop01.jpg', 't', 't', 't', 't', 'webforce3', 't@t.t', NULL, b'0', b'0', b'0', '$2y$10$AHd2piB5inK05ZR6ADG46OP88Oc6iE6FpZGdeKMBa6FO6N8ilHb2G', '', b'0', '2016-12-14 16:59:19', '2016-12-14 16:59:19'),
(33, 'u', 'u', '', 'u', 'u', 'u', 'u', 'webforce3', 'u@u.u', NULL, b'0', b'0', b'0', '$2y$10$oy1jpu71EDGiv7QbYrt.ce6UmIxAR77cg/LdC0DJdNzYiLVHAB5ye', '', b'0', '2016-12-14 17:03:06', '2016-12-14 17:03:06'),
(34, 'i', 'i', '', 'i', 'i', 'i', 'i', 'webforce3', 'i@i.i', NULL, b'0', b'0', b'0', '$2y$10$w4uhQnrybXWc2meVq0ROGuxpOi0pnMFPIxwyurEsOWX7Vui8ogA6u', '', b'0', '2016-12-14 17:05:02', '2016-12-14 17:05:02'),
(35, 'o', 'o', 'descktop01.jpg', 'o', 'o', 'o', 'o', 'webforce3', 'o@o.o', NULL, b'0', b'0', b'0', '$2y$10$1MvVYeTKNVkC/L4bjU2dB.TnK.ZGdPdnt7SUG1JRNG8igTbeW4NQ.', '', b'0', '2016-12-14 17:07:14', '2016-12-14 17:07:14'),
(36, 'q', 'q', 'descktop01.jpg', 'q', 'q', 'q', 'q', 'webforce3', 'q@q.q', NULL, b'0', b'0', b'0', '$2y$10$wiQdvf4fNNOWKTaY7yn2keVFcEVQYzW1Bt6kXI2nFRHbBHJuZkVZC', '', b'0', '2016-12-14 17:09:00', '2016-12-14 17:09:00'),
(37, 's', 's', 'descktop01.jpg', 's', 's', 's', 's', 'webforce3', 's@s.s', NULL, b'0', b'0', b'0', '$2y$10$6dRJ1uJlt3Yev4K4.5UfSeXLKIufi6uLRCGxVKasqFnY0p1XWX2cy', '', b'0', '2016-12-14 17:16:11', '2016-12-14 17:16:11'),
(38, 'd', 'd', NULL, 'd', 'e', 'e', 'e', 'webforce3', 'd@d.d', NULL, b'0', b'0', b'0', '$2y$10$Aw0H1NCeu0D4cVgq/h1jX./2JlG.wL1ZnufCS1OH1hxbVNVG2BV2O', '', b'0', '2016-12-14 17:24:51', '2016-12-14 17:24:51'),
(39, 'ff', 'ff', NULL, 'fff', 'f', 'f', 'fd', 'webforce3', 'f@f.f', NULL, b'0', b'0', b'0', '$2y$10$3KbVAssg6GSxNc//ZWXpVeYyfHZhMNi/Nt1gcmLoBeR0u0doAoS7a', '', b'0', '2016-12-14 17:30:32', '2016-12-14 17:30:32'),
(40, 'g', 'g', NULL, 'g', 'g', 'g', 'g', 'webforce3', 'gr@ger2.ff', NULL, b'0', b'0', b'0', '$2y$10$8DoPlm639cX5pvDaZHQjKuSAoUEbKUGx1u0ahVyCG4PIdhER3FFei', '', b'0', '2016-12-14 17:32:43', '2016-12-14 17:32:43'),
(41, 'h', 'h', NULL, 'h', 'h', 'h', 'h', 'webforce3', 'h@h.h', NULL, b'0', b'0', b'0', '$2y$10$wvevC8gGiunp0sooMUVl5eWnuPDDtbP45vkppJ5u3x1li4X.NjD0K', '', b'0', '2016-12-14 17:35:38', '2016-12-14 17:35:38'),
(42, 'j', 'j', '42_descktopBack.png', 'j', 'j', 'j', 'j', 'webforce3', 'j@j.j', NULL, b'0', b'0', b'0', '$2y$10$KOQinnvUxIW.75MUdxIMoOOS1IFDW22mdHBNj1aLLEGZLVULwXNPu', '', b'0', '2016-12-14 17:37:11', '2016-12-14 17:37:11'),
(43, 'n', 'n', '43_descktopBack.png', 'n', 'n', 'n', 'n', 'webforce3', 'n@n.n', NULL, b'0', b'1', b'0', '$2y$10$bIO.pPMyZL4vajQhkwaiF./mMnMNGtH/mu3tBTTtsDSIFxQpIAeIW', '', b'0', '2016-12-15 09:31:40', '2016-12-15 09:31:40'),
(46, 'w', 'w', '46_', 'w', 'w', 'w', 'w', 'webforce3', 'w@w.w', NULL, b'0', b'0', b'0', '$2y$10$bG.eUmzKRrpRqFOhkB/VHeQZYhzFGJgYdiFoIdtraZ7CO0vdyL.l6', '', b'0', '2016-12-15 09:46:50', '2016-12-15 09:46:50'),
(47, 'x', 'x', '47_', 'x', 'x', 'x', 'x', 'webforce3', 'x@x.x', NULL, b'0', b'0', b'0', '$2y$10$EaCAgL2lQ8oYVWDqqmJB.OEIA7xllv01wf0QA.znIZ/aJxveux1Za', '', b'0', '2016-12-15 09:48:18', '2016-12-15 09:48:18'),
(48, 'c', 'c', NULL, 'c', 'c', 'c', 'c', 'webforce3', 'c@c.c', NULL, b'0', b'0', b'0', '$2y$10$Knm2hAGVwNd8AOFNojpiD.9Pq9jr6OJstXclpkfipEtikBW8DpwE6', '', b'0', '2016-12-15 09:49:51', '2016-12-15 09:49:51'),
(51, 'Mou', 'Nira', NULL, 'mouna', 'm', 'm', 'm', '0111111111', 'm@m.m', NULL, b'0', b'0', b'0', '$2y$10$Zi/82X86tCZD6vvI9UZTeuBkXynHnGyGnXnVYtzCObcn4maqW59py', '', b'0', '2016-12-15 16:50:54', '2016-12-15 16:50:54'),
(52, 'pan', 'seb', '52_P.jpg', 'seb', 's', 's', 's', '024788', 'seb@seb.fr', NULL, b'0', b'1', b'0', '$2y$10$EkJoKFM0prgjFNwrJK9rWOhz.0HkjTIDNEC9iVT3/qX3XepOYypuq', '', b'0', '2016-12-15 17:35:09', '2016-12-15 17:35:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
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
