-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 02 Août 2020 à 02:22
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `notedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `matricule` varchar(20) NOT NULL,
  `matiere` varchar(100) NOT NULL,
  `controle` decimal(4,2) DEFAULT NULL,
  `examen` decimal(4,2) DEFAULT NULL,
  `tp` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`matricule`,`matiere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `note`
--

INSERT INTO `note` (`matricule`, `matiere`, `controle`, `examen`, `tp`) VALUES
('8330', 'POO', '12.00', NULL, NULL),
('8330', 'SDD', '13.00', '12.00', '16.00'),
('8331', 'POO', '13.00', NULL, NULL),
('8331', 'SDD', '14.75', '13.00', '15.00'),
('8337', 'POO', '17.00', NULL, NULL),
('8337', 'SDD', '12.50', '14.00', '17.00');

-- --------------------------------------------------------

--
-- Structure de la table `secret`
--

CREATE TABLE IF NOT EXISTS `secret` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `secret`
--

INSERT INTO `secret` (`id`, `login`, `password`) VALUES
(1, 'chrislink', 'chcode');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
