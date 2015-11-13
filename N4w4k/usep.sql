-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 16 Mai 2015 à 23:21
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `usep`
--
CREATE DATABASE IF NOT EXISTS `usep` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `usep`;

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE IF NOT EXISTS `ecole` (
  `idEcole` int(30) NOT NULL AUTO_INCREMENT,
  `nomEcole` text NOT NULL,
  `cpEcole` int(5) NOT NULL,
  `villeEcole` text NOT NULL,
  `mailEcole` varchar(50) NOT NULL,
  `telEcole` int(10) NOT NULL,
  `mdpEcole` varchar(30) NOT NULL,
  PRIMARY KEY (`idEcole`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `ecole`
--

INSERT INTO `ecole` (`idEcole`, `nomEcole`, `cpEcole`, `villeEcole`, `mailEcole`, `telEcole`, `mdpEcole`) VALUES
(1, 'lycée chevrollier', 49000, 'angers', 'chevrollier@gmail.com', 102030405, ''),
(2, 'lycée E.mounier', 49000, 'angers', 'mounier@gmail.com', 203040506, '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(30) NOT NULL AUTO_INCREMENT,
  `nomUser` text NOT NULL,
  `mdpUser` varchar(30) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `nomUser`, `mdpUser`) VALUES
(1, 'lila', 'lila'),
(2, 'Admin', 'Admin'),
(14, 'fs', ''),
(15, 'dsd', ''),
(16, 'dqdqdqd', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
