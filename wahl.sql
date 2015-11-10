-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 05 Novembre 2015 à 15:49
-- Version du serveur :  5.5.46-0ubuntu0.14.04.2
-- Version de PHP :  5.5.30-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `wahl`
--

-- --------------------------------------------------------

--
-- Structure de la table `tableau`
--

CREATE TABLE IF NOT EXISTS `tableau` (
  `id` int(10) NOT NULL,
  `content` varchar(120) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tableau`
--

INSERT INTO `tableau` (`id`, `content`) VALUES
(1, 'ZEBRE'),
(2, 'Test'),
(3, 'Interstellar'),
(4, '4');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tableau`
--
ALTER TABLE `tableau`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
