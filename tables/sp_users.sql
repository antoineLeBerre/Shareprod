-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Mars 2017 à 23:20
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sp_shareprod`
--

-- --------------------------------------------------------

--
-- Structure de la table `sp_users`
--

CREATE TABLE `sp_users` (
  `id_users` int(11) NOT NULL,
  `nom_users` varchar(30) NOT NULL,
  `prenom_users` varchar(50) NOT NULL,
  `login_users` varchar(20) NOT NULL,
  `password_users` varchar(32) NOT NULL,
  `date_inscription_users` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email_users` varchar(50) NOT NULL,
  `description_users` text,
  `avatar_users` varchar(100) DEFAULT NULL,
  `temoignage_users` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sp_users`
--

INSERT INTO `sp_users` (`id_users`, `nom_users`, `prenom_users`, `login_users`, `password_users`, `date_inscription_users`, `email_users`, `description_users`, `avatar_users`, `temoignage_users`) VALUES
(1, 'nom1', 'prenom1', 'login1', 'password1', '2017-03-09 22:29:51', 'email1', 'description1', 'avatar1', 'temoignage1'),
(2, 'nom2', 'prenom2', 'login2', 'password2', '2017-03-09 22:34:38', 'email2', 'description2', 'avatar2', 'temoignage2'),
(3, 'nom3', 'prenom3', 'login3', 'password3', '2017-03-09 22:34:38', 'email3', 'description3', 'avatar3', 'temoignage3'),
(4, 'nom4', 'prenom4', 'login4', 'password4', '2017-03-09 22:34:38', 'emai43', 'description4', 'avatar4', 'temoignage4'),
(5, 'nom5', 'prenom5', 'login5', 'password5', '2017-03-09 22:34:38', 'email5', 'description5', 'avatar5', 'temoignage5'),
(6, 'nom6', 'prenom6', 'login6', 'password6', '2017-03-09 22:34:38', 'email6', 'description6', 'avatar6', 'temoignage6'),
(7, 'nom7', 'prenom7', 'login7', 'password7', '2017-03-09 22:34:38', 'email7', 'description7', 'avatar7', 'temoignage7');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sp_users`
--
ALTER TABLE `sp_users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `id_user_UNIQUE` (`id_users`),
  ADD UNIQUE KEY `login_user_UNIQUE` (`login_users`),
  ADD UNIQUE KEY `email_user_UNIQUE` (`email_users`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sp_users`
--
ALTER TABLE `sp_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
