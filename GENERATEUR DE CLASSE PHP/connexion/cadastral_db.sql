-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 13 Décembre 2018 à 13:13
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cadastral_db`
--
CREATE DATABASE IF NOT EXISTS `cadastral_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cadastral_db`;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `code_ag` varchar(60) NOT NULL,
  `nom_ag` varchar(50) NOT NULL,
  `prenom_ag` varchar(60) NOT NULL,
  `tel_ag` varchar(30) NOT NULL,
  `password_ag` varchar(70) NOT NULL,
  `login_ag` varchar(60) NOT NULL,
  `code_dir` int(11) NOT NULL,
  PRIMARY KEY (`code_ag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `direction`
--

CREATE TABLE IF NOT EXISTS `direction` (
  `code_dir` varchar(60) NOT NULL,
  `libelle_dir` varchar(50) NOT NULL,
  PRIMARY KEY (`code_dir`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id_doc` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_doc` varchar(70) NOT NULL,
  `fichier_doc` varchar(70) NOT NULL,
  `date_doc` date NOT NULL,
  `id_par` int(11) NOT NULL,
  PRIMARY KEY (`id_doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `document`
--

INSERT INTO `document` (`id_doc`, `libelle_doc`, `fichier_doc`, `date_doc`, `id_par`) VALUES
(2, 'MOINE', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `parcelle`
--

CREATE TABLE IF NOT EXISTS `parcelle` (
  `id_par` int(11) NOT NULL AUTO_INCREMENT,
  `titre_foncier` varchar(70) NOT NULL,
  `num_cadastral` varchar(70) NOT NULL,
  `coord_x` double NOT NULL,
  `coord_y` double NOT NULL,
  `code_ag` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  PRIMARY KEY (`id_par`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `parcelle_section`
--

CREATE TABLE IF NOT EXISTS `parcelle_section` (
  `id_par_sect` int(11) NOT NULL AUTO_INCREMENT,
  `id_par` int(11) NOT NULL,
  `code_sec` int(11) NOT NULL,
  PRIMARY KEY (`id_par_sect`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE IF NOT EXISTS `proprietaire` (
  `id_pro` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pro` varchar(60) NOT NULL,
  `prenom_pro` varchar(50) NOT NULL,
  `piece_identite_pro` varchar(70) NOT NULL,
  `tel_pro` varchar(30) NOT NULL,
  `adresse_pro` varchar(70) NOT NULL,
  PRIMARY KEY (`id_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `id_prov` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_prov` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prov`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE IF NOT EXISTS `quartier` (
  `id_qua` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_qua` varchar(50) NOT NULL,
  `id_vil` int(11) NOT NULL,
  PRIMARY KEY (`id_qua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `code_sec` varchar(60) NOT NULL,
  `id_qua` int(11) NOT NULL,
  PRIMARY KEY (`code_sec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id_vil` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_vil` varchar(50) NOT NULL,
  `id_prov` int(11) NOT NULL,
  PRIMARY KEY (`id_vil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
