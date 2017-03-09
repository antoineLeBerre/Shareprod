-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Mars 2017 à 23:19
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
-- Structure de la table `sp_projets`
--

CREATE TABLE `sp_projets` (
  `id_projets` int(11) NOT NULL,
  `nom_projets` varchar(50) NOT NULL,
  `titre_projets` varchar(100) NOT NULL,
  `description_projets` mediumtext NOT NULL,
  `date_debut_projets` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_fin_projets` timestamp NOT NULL,
  `user_id_user` int(11) NOT NULL,
  `avancement_projets` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sp_projets`
--

INSERT INTO `sp_projets` (`id_projets`, `nom_projets`, `titre_projets`, `description_projets`, `date_debut_projets`, `date_fin_projets`, `user_id_user`, `avancement_projets`) VALUES
(1, 'nom1', 'titre1', 'descritpion1', '2017-03-09 22:38:16', '2017-03-09 22:38:16', 1, 0),
(2, 'nom2', 'titre2', 'descritpion2', '2017-03-09 22:39:10', '2017-03-09 22:39:10', 2, 0),
(3, 'nom3', 'titre3', 'descritpion3', '2017-03-09 22:41:49', '2017-03-09 22:41:49', 3, 0),
(4, 'nom4', 'titre4', 'descritpion4', '2017-03-09 22:41:49', '2017-03-09 22:41:49', 4, 0),
(5, 'nom5', 'titre5', 'descritpion5', '2017-03-09 22:41:49', '2017-03-09 22:41:49', 5, 0),
(6, 'nom6', 'titre6', 'descritpion6', '2017-03-09 22:41:49', '2017-03-09 22:41:49', 6, 0),
(7, 'nom7', 'titre7', 'descritpion7', '2017-03-09 22:41:49', '2017-03-09 22:41:49', 7, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sp_projets`
--
ALTER TABLE `sp_projets`
  ADD PRIMARY KEY (`id_projets`),
  ADD UNIQUE KEY `id_projets_UNIQUE` (`id_projets`),
  ADD KEY `fk_projets_user_idx` (`user_id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sp_projets`
--
ALTER TABLE `sp_projets`
  MODIFY `id_projets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `sp_projets`
--
ALTER TABLE `sp_projets`
  ADD CONSTRAINT `fk_projets_user` FOREIGN KEY (`user_id_user`) REFERENCES `sp_users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
