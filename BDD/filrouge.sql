-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 02 Avril 2015 à 16:07
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `filrouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `correspondant`
--

CREATE TABLE IF NOT EXISTS `correspondant` (
`cor_id` int(11) NOT NULL,
  `cor_nom` varchar(75) NOT NULL,
  `cor_prenom` varchar(75) DEFAULT NULL,
  `cor_sexe` varchar(75) NOT NULL,
  `cor_adresse` varchar(75) DEFAULT NULL,
  `cor_telephone` varchar(75) NOT NULL,
  `cor_fax` varchar(75) DEFAULT NULL,
  `cor_email` varchar(75) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4129 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `correspondant`
--

INSERT INTO `correspondant` (`cor_id`, `cor_nom`, `cor_prenom`, `cor_sexe`, `cor_adresse`, `cor_telephone`, `cor_fax`, `cor_email`) VALUES
(4123, 'Durand', 'Franck', 'homme', 'rue de la grande region du loup 75000 PARIS', '0358489658', '0158489658', 'cor.net@france.fr'),
(4124, 'Dupond', 'Herve', 'homme', 'rue du chocolat 75000 PARIS', '0354759658', '0154759658', 'abcf.net@france.fr'),
(4125, 'Bernard', 'Jessica', 'femme', 'avenue du president 75000 PARIS', '0358441238', '0158441238', 'abcg.net@france.fr'),
(4126, 'Thomas', 'François', 'homme', 'route de paris 75000 PARIS', '0458689658', '0158689658', 'abch.net@france.fr'),
(4127, 'Martin', 'Laura', 'femme', 'route de rouens 80100 ABBEVILLE', '0784512638', '0184512638', 'abci.net@france.fr'),
(4128, 'Toto', 'Titi', 'homme', 'avenue du roi tutu 75000 PARIS', '0358489658', '0158489658', 'abcj.net@france.fr');

-- --------------------------------------------------------

--
-- Structure de la table `defini`
--

CREATE TABLE IF NOT EXISTS `defini` (
  `typ_id` int(11) NOT NULL,
  `mus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `defini`
--

INSERT INTO `defini` (`typ_id`, `mus_id`) VALUES
(2, 123),
(1, 124),
(5, 125),
(5, 126),
(4, 127),
(3, 128);

-- --------------------------------------------------------

--
-- Structure de la table `dispose`
--

CREATE TABLE IF NOT EXISTS `dispose` (
  `cor_id` int(11) NOT NULL,
  `gro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dispose`
--

INSERT INTO `dispose` (`cor_id`, `gro_id`) VALUES
(4123, 1123),
(4124, 1124),
(4125, 1125),
(4126, 1126),
(4127, 1127),
(4128, 1128);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
`gro_id` int(11) NOT NULL,
  `gro_nom` varchar(75) NOT NULL,
  `gro_nationalite` varchar(75) DEFAULT NULL,
  `gro_date_creation` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1131 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`gro_id`, `gro_nom`, `gro_nationalite`, `gro_date_creation`) VALUES
(1123, 'DAFT PUNK', 'Français', '2015-03-17'),
(1124, 'LINKIN PARK', 'Allemand', '2015-03-20'),
(1125, 'RISE AGAINST', 'Anglais', '2015-03-01'),
(1126, 'SKILLET', 'Suedois', '2015-03-18'),
(1127, 'EGYPT CENTRAL', 'Français', '2015-03-11'),
(1128, 'BULLET FOR MY VALENTINE', 'Français', '2015-03-13'),
(1129, 'THE FRAY', 'Français', '2015-02-11'),
(1130, 'COLDPLAY', 'Italien', '2015-01-13');

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE IF NOT EXISTS `instrument` (
`ins_id` int(11) NOT NULL,
  `ins_nom` varchar(75) NOT NULL,
  `ins_type` varchar(75) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `instrument`
--

INSERT INTO `instrument` (`ins_id`, `ins_nom`, `ins_type`) VALUES
(1, 'guitar', 'type1'),
(2, 'piano', 'type2'),
(3, 'trompette', 'type3'),
(4, 'violon', 'type4'),
(5, 'batterie', 'type5');

-- --------------------------------------------------------

--
-- Structure de la table `interprete`
--

CREATE TABLE IF NOT EXISTS `interprete` (
  `mus_id` int(11) NOT NULL,
  `gro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `interprete`
--

INSERT INTO `interprete` (`mus_id`, `gro_id`) VALUES
(123, 1123),
(132, 1123),
(133, 1123),
(134, 1123),
(135, 1123),
(136, 1123),
(138, 1123),
(139, 1123),
(140, 1123),
(141, 1123),
(124, 1124),
(132, 1124),
(133, 1124),
(134, 1124),
(135, 1124),
(136, 1124),
(138, 1124),
(139, 1124),
(140, 1124),
(141, 1124),
(125, 1125),
(132, 1125),
(133, 1125),
(134, 1125),
(135, 1125),
(136, 1125),
(138, 1125),
(139, 1125),
(140, 1125),
(141, 1125),
(126, 1126),
(132, 1126),
(133, 1126),
(134, 1126),
(135, 1126),
(136, 1126),
(138, 1126),
(139, 1126),
(140, 1126),
(141, 1126),
(127, 1127),
(132, 1127),
(133, 1127),
(134, 1127),
(135, 1127),
(136, 1127),
(138, 1127),
(139, 1127),
(140, 1127),
(141, 1127),
(128, 1128),
(132, 1128),
(133, 1128),
(134, 1128),
(135, 1128),
(136, 1128),
(138, 1128),
(139, 1128),
(140, 1128),
(141, 1128),
(132, 1129),
(133, 1129),
(134, 1129),
(135, 1129),
(136, 1129),
(138, 1129),
(139, 1129),
(140, 1129),
(141, 1129),
(132, 1130),
(133, 1130),
(134, 1130),
(135, 1130),
(136, 1130),
(138, 1130),
(139, 1130),
(140, 1130),
(141, 1130);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `identifiant` varchar(18) CHARACTER SET utf8 NOT NULL,
  `motdepasse` varchar(18) CHARACTER SET utf8 NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`identifiant`, `motdepasse`, `id`) VALUES
('toto', 'toto', 3),
('tutu', 'tutu', 7),
('titi', 'titi', 8),
('Rémi', 'vvh34z2n', 9);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
`mem_id` int(11) NOT NULL,
  `mem_nom` varchar(75) NOT NULL,
  `mem_prenom` varchar(75) DEFAULT NULL,
  `mem_responsabilite` varchar(75) DEFAULT NULL,
  `mem_pays` varchar(75) NOT NULL,
  `mem_region` varchar(75) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`mem_id`, `mem_nom`, `mem_prenom`, `mem_responsabilite`, `mem_pays`, `mem_region`) VALUES
(123, 'Dupond', 'Franck', 'responsable 1', 'France', 'Picardie'),
(124, 'Dupont', 'Francky', 'responsable a', 'France', 'Ile-de-France'),
(125, 'Martin', 'Eric', 'responsable b', 'France', 'Nord-pas-de-calais'),
(126, 'Durand', 'Herve', 'responsable c', 'France', 'Rhone-alpes'),
(127, 'Bernard', 'Jean', 'responsable d', 'France', 'PACA'),
(128, 'Lefebvre', 'Antoine', 'responsable e', 'France', 'Lorraine'),
(129, 'Cointe', 'Rémi', 'responsable e', 'France', 'Picardie'),
(130, 'Hollande', 'François', 'President', 'France', 'Ile-de-France'),
(131, 'Chirac', 'Jacques', 'President', 'France', 'Ile-de-France'),
(132, 'Sarkozy', 'Nicolas', 'President', 'France', 'Ile-de-France');

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

CREATE TABLE IF NOT EXISTS `musique` (
`mus_id` int(11) NOT NULL,
  `mus_titre` varchar(75) NOT NULL,
  `mus_date_apparition` date DEFAULT NULL,
  `mus_auteur_nom` varchar(75) DEFAULT NULL,
  `mus_auteur_prenom` varchar(75) DEFAULT NULL,
  `mus_duree` time NOT NULL,
  `mus_pays` varchar(75) DEFAULT NULL,
  `mus_region` varchar(75) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `musique`
--

INSERT INTO `musique` (`mus_id`, `mus_titre`, `mus_date_apparition`, `mus_auteur_nom`, `mus_auteur_prenom`, `mus_duree`, `mus_pays`, `mus_region`) VALUES
(123, 'Optimus', '1992-08-09', 'Dupond', 'Franck', '00:03:55', 'France', 'Picardie'),
(124, 'Megatron', '0000-00-00', 'Dupont', 'Francky', '00:04:51', 'France', 'PACA'),
(125, 'Bumblebee', '0000-00-00', 'Dupara', 'Jean', '00:07:17', 'Allemagne', 'Bavière'),
(126, 'Jazz', '2029-11-20', 'Messi', 'Lionel', '00:01:42', 'France', 'Nord-pas-de-calais'),
(127, 'Ironhide', '0000-00-00', 'Ibrahimovic', 'Zlatan', '00:09:12', 'France', 'Aquitaine'),
(128, 'Starscream', '0000-00-00', 'Duper', 'Ilest', '00:05:33', 'France', 'Alsace'),
(129, 'Rebellion', '2012-03-20', 'Bennington', 'Chester', '00:04:10', 'France', 'PACA'),
(130, 'Wasteland', '2030-06-20', 'Shinoda', 'Mike', '00:02:55', 'France', 'Lorraine'),
(131, 'All for nothing', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(132, 'MUSICDETEST0', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(133, 'MUSICTEST1', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(134, 'MUSICTEST2', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(135, 'MUSICTEST3', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(136, 'MUSICTEST4', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(138, 'MUSICTEST5', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(139, 'MUSICTEST6', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(140, 'MUSICTEST7', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie'),
(141, 'MUSICTEST8', '2009-11-20', 'Cointe', 'Rémi', '00:07:25', 'France', 'Picardie');

-- --------------------------------------------------------

--
-- Structure de la table `organisateur`
--

CREATE TABLE IF NOT EXISTS `organisateur` (
`org_id` int(11) NOT NULL,
  `org_nom` varchar(75) NOT NULL,
  `org_prenom` varchar(75) DEFAULT NULL,
  `org_sexe` varchar(75) NOT NULL,
  `org_adresse` varchar(75) DEFAULT NULL,
  `org_telephone` varchar(75) NOT NULL,
  `org_fax` varchar(75) DEFAULT NULL,
  `org_email` varchar(75) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3129 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `organisateur`
--

INSERT INTO `organisateur` (`org_id`, `org_nom`, `org_prenom`, `org_sexe`, `org_adresse`, `org_telephone`, `org_fax`, `org_email`) VALUES
(3123, 'Thomas', 'Jack', 'homme', 'route du soleil 75000 PARIS', '0145856985', '0145856986', '003123@organisateur.org'),
(3124, 'Martin', 'Sarah', 'femme', 'route du ski 75000 PARIS', '0145856925', '0145856926', '003124@organisateur.org'),
(3125, 'Dupont', 'Martin', 'homme', 'route du velo 75000 PARIS', '0145856912', '0145856913', '003125@organisateur.org'),
(3126, 'Dupond', 'Jean', 'homme', 'route du parachute 75000 PARIS', '0145856923', '0145856924', '003126@organisateur.org'),
(3127, 'Cointe', 'Remi', 'homme', 'avenue du president de la republique 75000 PARIS', '0145856965', '0145856966', '003127@organisateur.org'),
(3128, 'Hollande', 'François', 'homme', 'elysee 75000 PARIS', '0100100010', '0100100011', '003128@organisateur.org');

-- --------------------------------------------------------

--
-- Structure de la table `organise`
--

CREATE TABLE IF NOT EXISTS `organise` (
  `ren_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `organise`
--

INSERT INTO `organise` (`ren_id`, `org_id`) VALUES
(21234, 3123),
(21235, 3124),
(21236, 3125),
(21237, 3126),
(21238, 3127);

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE IF NOT EXISTS `participe` (
  `gro_id` int(11) NOT NULL,
  `ren_id` int(11) NOT NULL,
  `mus_id` int(11) NOT NULL,
  `par_heure_debut` time NOT NULL,
  `par_heure_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `participe`
--

INSERT INTO `participe` (`gro_id`, `ren_id`, `mus_id`, `par_heure_debut`, `par_heure_fin`) VALUES
(1123, 21234, 123, '20:30:00', '20:34:00'),
(1123, 21238, 125, '21:45:00', '22:20:00'),
(1124, 21234, 126, '21:55:00', '22:00:00'),
(1124, 21235, 124, '20:38:00', '20:42:00'),
(1125, 21236, 125, '20:44:00', '20:50:00'),
(1125, 21238, 127, '23:15:00', '23:20:00'),
(1126, 21237, 126, '20:53:00', '20:58:00'),
(1127, 21237, 123, '23:42:00', '23:50:00'),
(1127, 21238, 127, '21:03:00', '21:10:00');

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE IF NOT EXISTS `possede` (
  `mem_id` int(11) NOT NULL,
  `spe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `possede`
--

INSERT INTO `possede` (`mem_id`, `spe_id`) VALUES
(123, 1),
(124, 2),
(128, 2),
(125, 3),
(126, 4),
(127, 5);

-- --------------------------------------------------------

--
-- Structure de la table `rencontre`
--

CREATE TABLE IF NOT EXISTS `rencontre` (
`ren_id` int(11) NOT NULL,
  `ren_nom` varchar(75) NOT NULL,
  `ren_lieu` varchar(75) NOT NULL,
  `ren_date_debut` date NOT NULL,
  `ren_date_fin` date NOT NULL,
  `ren_periodicite` varchar(75) DEFAULT NULL,
  `ren_nombre_personne` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21246 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rencontre`
--

INSERT INTO `rencontre` (`ren_id`, `ren_nom`, `ren_lieu`, `ren_date_debut`, `ren_date_fin`, `ren_periodicite`, `ren_nombre_personne`) VALUES
(21234, 'Tutufete', 'Abbeville', '2009-08-20', '2017-08-20', 'tous les ans', 70000),
(21235, 'Totofete', 'Abbeville', '2015-01-20', '2028-01-20', 'tous les 5 ans', 5000),
(21236, 'Titifete', 'Paris', '2014-12-20', '2025-12-20', 'tous les 10 ans', 600000),
(21237, 'Tytyfete', 'Lille', '2005-06-20', '2012-06-20', 'unique', 1000),
(21238, 'Tetefete', 'Rouens', '2024-04-20', '2005-05-20', 'tous les six mois', 5007),
(21242, 'Modaltest', 'Abbeville', '1992-02-07', '2005-05-01', 'Chaque jours', 2502);

-- --------------------------------------------------------

--
-- Structure de la table `represente`
--

CREATE TABLE IF NOT EXISTS `represente` (
  `mem_id` int(11) NOT NULL,
  `gro_id` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `represente`
--

INSERT INTO `represente` (`mem_id`, `gro_id`, `ins_id`) VALUES
(123, 1123, 1),
(128, 1128, 2),
(125, 1125, 3),
(127, 1127, 3),
(124, 1124, 4),
(126, 1126, 5);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
`spe_id` int(11) NOT NULL,
  `spe_nom` varchar(75) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`spe_id`, `spe_nom`) VALUES
(1, 'chant'),
(2, 'pianiste'),
(3, 'guitariste'),
(4, 'trompetiste'),
(5, 'batteur');

-- --------------------------------------------------------

--
-- Structure de la table `type_musique`
--

CREATE TABLE IF NOT EXISTS `type_musique` (
`typ_id` int(11) NOT NULL,
  `typ_nom` varchar(75) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_musique`
--

INSERT INTO `type_musique` (`typ_id`, `typ_nom`) VALUES
(1, 'metal'),
(2, 'rock'),
(3, 'classique'),
(4, 'dance'),
(5, 'electro');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `correspondant`
--
ALTER TABLE `correspondant`
 ADD PRIMARY KEY (`cor_id`);

--
-- Index pour la table `defini`
--
ALTER TABLE `defini`
 ADD PRIMARY KEY (`typ_id`,`mus_id`), ADD KEY `mus_id` (`mus_id`);

--
-- Index pour la table `dispose`
--
ALTER TABLE `dispose`
 ADD PRIMARY KEY (`cor_id`,`gro_id`), ADD KEY `gro_id` (`gro_id`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
 ADD PRIMARY KEY (`gro_id`);

--
-- Index pour la table `instrument`
--
ALTER TABLE `instrument`
 ADD PRIMARY KEY (`ins_id`);

--
-- Index pour la table `interprete`
--
ALTER TABLE `interprete`
 ADD PRIMARY KEY (`mus_id`,`gro_id`), ADD KEY `gro_id` (`gro_id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
 ADD PRIMARY KEY (`mem_id`);

--
-- Index pour la table `musique`
--
ALTER TABLE `musique`
 ADD PRIMARY KEY (`mus_id`);

--
-- Index pour la table `organisateur`
--
ALTER TABLE `organisateur`
 ADD PRIMARY KEY (`org_id`);

--
-- Index pour la table `organise`
--
ALTER TABLE `organise`
 ADD PRIMARY KEY (`ren_id`,`org_id`), ADD KEY `org_id` (`org_id`);

--
-- Index pour la table `participe`
--
ALTER TABLE `participe`
 ADD PRIMARY KEY (`gro_id`,`ren_id`), ADD KEY `ren_id` (`ren_id`), ADD KEY `mus_id` (`mus_id`);

--
-- Index pour la table `possede`
--
ALTER TABLE `possede`
 ADD PRIMARY KEY (`mem_id`,`spe_id`), ADD KEY `spe_id` (`spe_id`);

--
-- Index pour la table `rencontre`
--
ALTER TABLE `rencontre`
 ADD PRIMARY KEY (`ren_id`);

--
-- Index pour la table `represente`
--
ALTER TABLE `represente`
 ADD PRIMARY KEY (`mem_id`,`gro_id`), ADD KEY `gro_id` (`gro_id`), ADD KEY `ins_id` (`ins_id`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
 ADD PRIMARY KEY (`spe_id`);

--
-- Index pour la table `type_musique`
--
ALTER TABLE `type_musique`
 ADD PRIMARY KEY (`typ_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `correspondant`
--
ALTER TABLE `correspondant`
MODIFY `cor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4129;
--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
MODIFY `gro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1131;
--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT pour la table `musique`
--
ALTER TABLE `musique`
MODIFY `mus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT pour la table `organisateur`
--
ALTER TABLE `organisateur`
MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3129;
--
-- AUTO_INCREMENT pour la table `rencontre`
--
ALTER TABLE `rencontre`
MODIFY `ren_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21246;
--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
MODIFY `spe_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `type_musique`
--
ALTER TABLE `type_musique`
MODIFY `typ_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `defini`
--
ALTER TABLE `defini`
ADD CONSTRAINT `defini_ibfk_1` FOREIGN KEY (`typ_id`) REFERENCES `type_musique` (`typ_id`),
ADD CONSTRAINT `defini_ibfk_2` FOREIGN KEY (`mus_id`) REFERENCES `musique` (`mus_id`);

--
-- Contraintes pour la table `dispose`
--
ALTER TABLE `dispose`
ADD CONSTRAINT `dispose_ibfk_1` FOREIGN KEY (`cor_id`) REFERENCES `correspondant` (`cor_id`),
ADD CONSTRAINT `dispose_ibfk_2` FOREIGN KEY (`gro_id`) REFERENCES `groupe` (`gro_id`);

--
-- Contraintes pour la table `interprete`
--
ALTER TABLE `interprete`
ADD CONSTRAINT `interprete_ibfk_1` FOREIGN KEY (`mus_id`) REFERENCES `musique` (`mus_id`),
ADD CONSTRAINT `interprete_ibfk_2` FOREIGN KEY (`gro_id`) REFERENCES `groupe` (`gro_id`);

--
-- Contraintes pour la table `organise`
--
ALTER TABLE `organise`
ADD CONSTRAINT `organise_ibfk_1` FOREIGN KEY (`ren_id`) REFERENCES `rencontre` (`ren_id`),
ADD CONSTRAINT `organise_ibfk_2` FOREIGN KEY (`org_id`) REFERENCES `organisateur` (`org_id`);

--
-- Contraintes pour la table `participe`
--
ALTER TABLE `participe`
ADD CONSTRAINT `participe_ibfk_1` FOREIGN KEY (`gro_id`) REFERENCES `groupe` (`gro_id`),
ADD CONSTRAINT `participe_ibfk_2` FOREIGN KEY (`ren_id`) REFERENCES `rencontre` (`ren_id`),
ADD CONSTRAINT `participe_ibfk_3` FOREIGN KEY (`mus_id`) REFERENCES `musique` (`mus_id`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
ADD CONSTRAINT `possede_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`),
ADD CONSTRAINT `possede_ibfk_2` FOREIGN KEY (`spe_id`) REFERENCES `specialite` (`spe_id`);

--
-- Contraintes pour la table `represente`
--
ALTER TABLE `represente`
ADD CONSTRAINT `represente_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`),
ADD CONSTRAINT `represente_ibfk_2` FOREIGN KEY (`gro_id`) REFERENCES `groupe` (`gro_id`),
ADD CONSTRAINT `represente_ibfk_3` FOREIGN KEY (`ins_id`) REFERENCES `instrument` (`ins_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
