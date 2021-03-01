-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 26 fév. 2021 à 14:32
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `registration`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `id_topic` bigint(20) NOT NULL,
  `id_inscription` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_inscription` (`id_inscription`),
  KEY `id_topic` (`id_topic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `article` text NOT NULL,
  `category` int(1) NOT NULL,
  `id_users` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_inscription` (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`id`, `titre`, `date`, `article`, `category`, `id_users`) VALUES
(13, 'Règles du forum', '2021-02-26 15:19:16', '&lt;div&gt;Bienvenue sur notre forum,&amp;nbsp;&lt;br&gt;Pour que tout se passe bien ici je vous prie de vous lire ces quelques r&egrave;gles avant de poster ici pour que tout se passe dans la joie et la bonne humeur !&amp;nbsp;&lt;br&gt;1- Aucune insulte n&#039;est tol&eacute;r&eacute;e.&amp;nbsp;&lt;br&gt;2- Evitez le langage sms&amp;nbsp;&lt;br&gt;3- Essayez au maximum d&#039;&eacute;viter les fautes d&#039;orthographes 4- Si vous rencontrez un bug veuillez nous les signaler via la page contact. Merci a tous et bonne visite !&lt;/div&gt;', 1, 1),
(20, 'Voici le premier post du forum', '2021-02-26 15:28:36', '&lt;div&gt;Bonjour a tous !&lt;br&gt;Bienvenue sur notre forum&amp;nbsp;&lt;/div&gt;', 0, 1),
(21, 'Avis nouveau perso', '2021-02-26 15:31:21', '&lt;div&gt;Salut, qu&#039;avez vous pens&eacute; du nouveau personnage ? Personnellement je le trouve trop cool surtout son dernier sort qui est trop bien !&lt;/div&gt;', 0, 15);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'upload/Fer.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `avatar`) VALUES
(1, 'mpalmier', 'matheo.palmier42@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 'upload/89a2703a92290e63d78717b3155571a0.jpg'),
(15, 'turbo', '1234@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 'upload/Fer.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
