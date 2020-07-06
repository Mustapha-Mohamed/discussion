-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 juil. 2020 à 15:07
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
-- Base de données :  `discussion`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(140) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`ID`, `message`, `id_utilisateur`, `date`) VALUES
(1, 'jhjhjh', 22, '2020-07-02'),
(2, 'uh', 22, '2020-07-02'),
(3, 'hghfghhgjvj', 22, '2020-07-02'),
(4, 'yyyyy', 22, '2020-07-02'),
(5, 'on ekokskfs', 22, '2020-07-02'),
(6, 'chariffffff', 22, '2020-07-02'),
(7, 'oui ou non', 24, '2020-07-06'),
(8, '', 24, '2020-07-06'),
(9, 'kk', 24, '2020-07-06'),
(10, '', 24, '2020-07-06'),
(11, '', 24, '2020-07-06');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `login`, `password`) VALUES
(21, 'ok', 'ok'),
(25, 'yp', '$2y$12$WLDZHyGXNhOeCPE3Wd1Ov.eSE70AwYGeyZsttyJZXCqBaxlLDAXBC'),
(23, 'oui', '$2y$10$u5Npluw64uqTwDopu0cdXOY8T31KlIXFVZyy/QftFDIIYnxGtJ1ZO'),
(22, 'ouii', '$2y$12$q9.RgC4gWiWRSvynrhsdIusiOAH5SyRFmCFyfqCpEdd/P81ErrGYO'),
(24, 'non', '$2y$12$H42VS/4uK9lva9.eESVC9egUDbsrq2kkatH6Xteg/CKOdLB.uBSVi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
