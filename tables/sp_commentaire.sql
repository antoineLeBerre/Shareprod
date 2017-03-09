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
-- Structure de la table `sp_commentaire`
--

CREATE TABLE `sp_commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `date_commentaire` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content_commentaire` varchar(200) NOT NULL,
  `user_id_user` int(11) NOT NULL,
  `projets_id_projets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sp_commentaire`
--

INSERT INTO `sp_commentaire` (`id_commentaire`, `date_commentaire`, `content_commentaire`, `user_id_user`, `projets_id_projets`) VALUES
(1, '2017-03-09 23:13:31', 'content1', 1, 1),
(2, '2017-03-09 23:16:27', 'content1', 1, 1),
(3, '2017-03-09 23:16:27', 'content2', 2, 2),
(4, '2017-03-09 23:16:27', 'content3', 3, 3),
(5, '2017-03-09 23:16:27', 'content4', 4, 4),
(6, '2017-03-09 23:16:27', 'content5', 5, 5),
(7, '2017-03-09 23:16:27', 'content6', 6, 6),
(8, '2017-03-09 23:16:27', 'content7', 7, 7);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sp_commentaire`
--
ALTER TABLE `sp_commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD UNIQUE KEY `id_commentaire_UNIQUE` (`id_commentaire`),
  ADD KEY `fk_sp_commentaire_user1_idx` (`user_id_user`),
  ADD KEY `fk_sp_commentaire_projets1_idx` (`projets_id_projets`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sp_commentaire`
--
ALTER TABLE `sp_commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `sp_commentaire`
--
ALTER TABLE `sp_commentaire`
  ADD CONSTRAINT `fk_sp_commentaire_projets1` FOREIGN KEY (`projets_id_projets`) REFERENCES `sp_projets` (`id_projets`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sp_commentaire_user1` FOREIGN KEY (`user_id_user`) REFERENCES `sp_users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
