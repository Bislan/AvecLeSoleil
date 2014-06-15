-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 15 Juin 2014 à 22:30
-- Version du serveur :  5.5.36
-- Version de PHP :  5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE IF NOT EXISTS `achat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `codePostal` int(11) NOT NULL,
  `rue` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `article` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `paypal_stat` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal_hash` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `achat`
--

INSERT INTO `achat` (`id`, `nom`, `prenom`, `ville`, `codePostal`, `rue`, `email`, `tel`, `article`, `date`, `paypal_stat`, `paypal_hash`) VALUES
(16, 'Profesionalov', 'Bislan', 'liege', 4456445, 'dfgdfgdfg', '45456456456456', 456456546, '2', '2014-06-15 21:58:27', '1', '1673879e1d6a9be40a9336e84930d67e');

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `titre_fr` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titre_en` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texte_fr` longtext COLLATE utf8_unicode_ci,
  `texte_en` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2CEDC877F6BD1646` (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rubriques_id` int(11) DEFAULT NULL,
  `titre_fr` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `titre_en` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `texte_fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `texteLong_Fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `texte_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `texteLong_En` longtext COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BFDD3168589A0FBB` (`rubriques_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `rubriques_id`, `titre_fr`, `titre_en`, `texte_fr`, `texteLong_Fr`, `texte_en`, `texteLong_En`, `photo`) VALUES
(1, 10, 'titre fr', 'Article :titre EN', 'texte fr ', '', 'text en', '', NULL),
(2, 6, 'titre fr', 'titre en', 'texte fr ', '', 'texte du accueil en  site Ceramique', '', NULL),
(3, 11, 'titre fr', 'titre en ', 'texte fr ', 'text long :)', 'texte blog en   EFT', '', NULL),
(9, 6, 'titre fr', 'texte en site Ceramique', 'texte fr ', '', 'texte en  site Ceramique', '', NULL),
(10, 7, 'titre fr', 'sdfsdfsfdsfd', 'texte fr ', 'text long :)', 'sdfssdfsdfs sdfsdfsdfsdfsdfsdf', '', NULL),
(11, 7, 'titre fr', 'sdf ssdf sdfsdfsdfsdfsdf', 'texte fr ', 'text long :)', 'sdfsdf sdfsdfsdf sdfsdfsdf sdsdfsdfsfdsdsdf', '', NULL),
(12, 7, 'titre fr', 'fghfgfgh', 'texte fr ', 'text long :)', 'fghfghf', 'ghfghfghfg', NULL),
(13, 7, 'titre fr', 'Lorem ipsum 3', 'texte fr ', 'text long :)', 'Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsumLorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3', 'Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3Lorem ipsum 3', NULL),
(14, 7, 'titre fr', 'Lorem ipsum 4', 'texte fr ', 'text long :)', 'Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4', 'Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4Lorem ipsum 4', NULL),
(15, 11, 'titre fr', 'titre acueil 3', 'texte fr ', 'text long :)', 'titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3', 'titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3titre acueil 3', NULL),
(16, 11, 'titre fr', 'titre acueil 4', 'texte fr ', 'text long :)', 'titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4', 'titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4titre acueil 4', NULL),
(17, 11, 'titre fr', 'titre acueil 3titre acueil 3titre acueil 5', 'texte fr ', 'text long :)', 'titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5', 'titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5titre acueil 3titre acueil 3titre acueil 5', NULL),
(18, 11, 'titre fr', 'titre acueil 3titre acueil 3titre acueil 6', 'texte fr ', 'text long :)', 'titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6', 'titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6titre acueil 3titre acueil 3titre acueil 6', NULL),
(19, 11, 'titre fr', '', 'texte fr', 'texte long :)', '', '', NULL),
(20, 11, 'titre fr', '', 'texte fr', 'texte long :)', '', '', NULL),
(21, 11, 'titre fr', '', 'texte fr', 'texte long :)', '', '', NULL),
(22, 11, 'titre fr', '', 'texte fr', 'texte long :)', '', '', NULL),
(23, 11, 'titre fr', '', 'texte fr', 'texte long :)', '', '', NULL),
(24, 20, 'titre fr', '', ' text fr', '', '', '', NULL),
(25, 20, 'titre fr', '', ' text fr', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `nom_fr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nom_en` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `description_fr` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_en` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `nomeformateur` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `prix` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_404021BFF6BD1646` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `site_id`, `nom_fr`, `nom_en`, `description_fr`, `description_en`, `photo`, `slug`, `nomeformateur`, `telephone`, `date`, `prix`) VALUES
(1, 1, 'formation  fr', 'formation 1 en', 'discription formation 1 fr', 'discription formation 1 en', NULL, 'eft', 'Xavier Bettel', '0486457884', '2014-06-13', '1'),
(2, 1, 'formation  fr', 'formation 2 en', 'description formation 2 fr', 'description formation 2 fr', NULL, 'eft', 'John doe', '0486354101', '2014-06-17', '2'),
(3, 2, 'formation  fr', 'formation 1 en', 'description formation 1 fr', 'description formation 1 en', NULL, 'ceramique', 'Mehdi Jomaa', '0495788547', '2014-06-26', '2'),
(4, 2, 'formation  fr', 'formation 1 en', 'descrption formation 1 fr', 'descriptin formation 1 en', NULL, 'ceramique', 'Dondon Tigidon', '0486855522', '2014-06-28', '1.5');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formation_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `rue` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dateDeNaissance` date NOT NULL,
  `boite` int(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `ville` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `paypal_stat` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal_hash` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5E90F6D65200282E` (`formation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rubriques_id` int(11) DEFAULT NULL,
  `titre_fr` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `titre_en` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `texte_fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `texte_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `texteLong_Fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `texteLong_En` longtext COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_vend` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_29A5EC27589A0FBB` (`rubriques_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `rubriques_id`, `titre_fr`, `titre_en`, `texte_fr`, `texte_en`, `texteLong_Fr`, `texteLong_En`, `photo`, `prix`, `status_vend`) VALUES
(1, 17, 'Produit 1 fr', 'Product 1 en', 'Desription fr', 'Description en', 'Text long fr', 'Text long En', NULL, '25', NULL),
(2, 17, 'Produit 2 fr ', 'Product 2  en ', 'fgdfgddfg dfgdfgdfg dfgdfgdfgdfg', 'dfgdfg dfdfgdfg dfdfgdfgdfgdfgddf', 'dfgddgfdgf dfdfgdgfdfgdfgdg ddgfdfg dfgdfdfg', 'dfgdfg dfgdfgddfgdfgdfdfg dgddgdfgd dfgdgdfgdf', NULL, '45', 1),
(3, 17, 'Produit 3 fr', 'Produit 3 en', 'text produit fr', 'text produit  en', 'text long produit fr', 'text long produit en', NULL, '14', 1),
(4, 17, 'produit 4 fr', 'text  produit en', 'text  produit fr', 'text  produit en', 'text long produit fr', 'text long produit en', NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE IF NOT EXISTS `rubriques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `rubrique_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre_fr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `titre_en` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42325615F6BD1646` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Contenu de la table `rubriques`
--

INSERT INTO `rubriques` (`id`, `site_id`, `rubrique_id`, `titre_fr`, `titre_en`, `site_slug`) VALUES
(6, 2, '1', 'Accueil', 'Home', 'ceramique'),
(7, 2, '2', 'Blog', 'Blog', 'ceramique'),
(10, 1, '1', 'Accueil', 'Home', 'eft'),
(11, 1, '3', 'Blog', 'Blog', 'eft'),
(12, 1, 'video', 'Videos', 'Video', 'eft'),
(13, 1, 'agenda', 'Agenda/Inscreption', 'Agenda/Inscreption', 'eft'),
(14, 1, '5', 'Contact', 'Achievement', 'eft'),
(15, 2, 'video', 'Video', 'Video', 'ceramique'),
(16, 3, 'video', 'Video', 'Video', 'Alphabetisation'),
(17, 2, 'Realisation', 'Realisations', 'Shop', 'ceramique'),
(18, 2, 'agenda', 'Agenda/Inscreption', 'Agenda/Inscreption', 'ceramique'),
(19, 2, '6', 'Contact', 'Contact', 'ceramique'),
(20, 3, '1', 'Accueil', 'Home', 'Alphabetisation'),
(21, 3, '3', 'Contact', 'Contact', 'Alphabetisation');

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `site`
--

INSERT INTO `site` (`id`, `nom`) VALUES
(1, 'EFT'),
(2, 'Ceramique'),
(3, 'Alphabetisation');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rubriques_id` int(11) DEFAULT NULL,
  `videoLien` longtext COLLATE utf8_unicode_ci NOT NULL,
  `titreVideoFr` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `titreVideoEn` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `textVideoCourtFr` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `textVideoCourtEn` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `textVideoLongFr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `textVideoLongEn` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7CC7DA2C589A0FBB` (`rubriques_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `rubriques_id`, `videoLien`, `titreVideoFr`, `titreVideoEn`, `textVideoCourtFr`, `textVideoCourtEn`, `textVideoLongFr`, `textVideoLongEn`) VALUES
(1, 15, '<iframe width="560" height="315" src="//www.youtube.com/embed/9FekjkAtvB4" frameborder="0" allowfullscreen></iframe>', 'Kenny Garner vs. Shamil Abdurakhimov, M-1 Challenge 49', 'Kenny Garner vs. Shamil Abdurakhimov, M-1 Challenge 49', 'Kenny Garner vs. Shamil Abdurakhimov', 'Kenny Garner vs. Shamil Abdurakhimov', 'Kenny Garner vs. Shamil Abdurakhimov, M-1 Challenge 49\r\nKenny Garner vs. Shamil Abdurakhimov, M-1 Challenge 49', 'Kenny Garner vs. Shamil Abdurakhimov, M-1 Challenge 49Kenny Garner vs. Shamil Abdurakhimov, M-1 Challenge 49'),
(2, 12, '<iframe width="560" height="315" src="//www.youtube.com/embed/K-hz9N71yKE" frameborder="0" allowfullscreen></iframe>', 'dfgdfg', 'dfgdfgdf', 'dfgdfg', 'dfgdfg', 'dfgdfgdfgddfgdfgdfgdfggfddgfdfg', 'dfgdfgdfgdfgdfgdfgdfgdfgdfgdfgdgfdgf'),
(3, 16, '<iframe width="560" height="315" src="//www.youtube.com/embed/6DwBwo7XJjg" frameborder="0" allowfullscreen></iframe>', 'dfgdfgdfgdfgdf', 'gdfgdfdfdfdfgdfg', 'dfdfgdfgdgfdfgdfg', 'dfgdfdfdfgdfggfd', 'dfgdfgdfgd dfdfdfgdfg dfddfgdfgdfg dfgdfdfgdfgdgfdgf', 'dfgdgfdgfg dfgdfddfdfggfdfg dfgdfggfdfdfg dfgdfgdfggfgdf');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `FK_2CEDC877F6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `FK_BFDD3168589A0FBB` FOREIGN KEY (`rubriques_id`) REFERENCES `rubriques` (`id`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_404021BFF6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27589A0FBB` FOREIGN KEY (`rubriques_id`) REFERENCES `rubriques` (`id`);

--
-- Contraintes pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD CONSTRAINT `FK_42325615F6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `FK_7CC7DA2C589A0FBB` FOREIGN KEY (`rubriques_id`) REFERENCES `rubriques` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
