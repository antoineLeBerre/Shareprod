-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Mars 2017 à 21:44
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
-- Structure de la table `projets_has_sp_sugnalement_projet`
--

CREATE TABLE `projets_has_sp_sugnalement_projet` (
  `projets_id_projets` int(11) NOT NULL,
  `sp_sugnalement_projet_id_sugnalement_projet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_cat`
--

CREATE TABLE `sp_cat` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_cat_has_sp_projets`
--

CREATE TABLE `sp_cat_has_sp_projets` (
  `sp_cat_id_cat` int(11) NOT NULL,
  `sp_projets_id_projets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Structure de la table `sp_contributions`
--

CREATE TABLE `sp_contributions` (
  `id_contribution` int(11) NOT NULL,
  `contrib_titre` varchar(30) NOT NULL,
  `contrib_descr` varchar(140) NOT NULL,
  `contrib_somme` int(11) NOT NULL,
  `projets_id_projets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_factures`
--

CREATE TABLE `sp_factures` (
  `id_factures` int(11) NOT NULL,
  `numero_factures` int(11) NOT NULL,
  `descriptif_facture` varchar(200) NOT NULL,
  `montant_factures` float NOT NULL,
  `contributions_id_contribution` int(11) NOT NULL,
  `user_id_user` int(11) NOT NULL,
  `date_factures` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_miniature`
--

CREATE TABLE `sp_miniature` (
  `id_miniature` int(11) NOT NULL,
  `image_miniature` varchar(60) NOT NULL,
  `titre_miniature` varchar(20) NOT NULL,
  `texte_miniature` varchar(140) NOT NULL,
  `sp_projets_id_projets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_photos_presse`
--

CREATE TABLE `sp_photos_presse` (
  `id_photos_presse` int(11) NOT NULL,
  `nom_photos_presse` varchar(30) NOT NULL,
  `url_photos_presse` varchar(100) NOT NULL,
  `sp_presse_id_presse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_photos_projet`
--

CREATE TABLE `sp_photos_projet` (
  `id_photos_projet` int(11) NOT NULL,
  `nom_photos_projet` varchar(70) NOT NULL,
  `url_photos_projet` varchar(200) NOT NULL,
  `sp_projets_id_projets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_presse`
--

CREATE TABLE `sp_presse` (
  `id_presse` int(11) NOT NULL,
  `titre_presse` varchar(40) NOT NULL,
  `desc_presse` longtext NOT NULL,
  `date_presse` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sp_superusers_id_superusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Structure de la table `sp_signalement_commentaires`
--

CREATE TABLE `sp_signalement_commentaires` (
  `id_signalement_commentaires` int(11) NOT NULL,
  `titre_signalement_commentaires` varchar(100) NOT NULL,
  `description_signalement_commentaires` text NOT NULL,
  `date_sugnalement_user_commentaires` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sp_type_sugnalement_id_type_sugnalement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_signalement_commentaires_has_sp_commentaire`
--

CREATE TABLE `sp_signalement_commentaires_has_sp_commentaire` (
  `sp_signalement_commentaires_id_signalement_commentaires` int(11) NOT NULL,
  `sp_commentaire_id_commentaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_signalement_projet`
--

CREATE TABLE `sp_signalement_projet` (
  `id_sugnalement_projet` int(11) NOT NULL,
  `titre_signalement_projet` varchar(45) NOT NULL,
  `descriptif_sugnalement_projet` varchar(200) NOT NULL,
  `date_signalement_projet` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sp_type_sugnalement_id_type_sugnalement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_signalement_user`
--

CREATE TABLE `sp_signalement_user` (
  `id_signalement_user` int(11) NOT NULL,
  `titre_signalement_user` varchar(100) NOT NULL,
  `description_signalement` text NOT NULL,
  `date_sugnalement_user` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sp_type_sugnalement_id_type_sugnalement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_superusers`
--

CREATE TABLE `sp_superusers` (
  `id_superusers` int(11) NOT NULL,
  `nom_suoerusers` varchar(30) NOT NULL,
  `prenom_superusers` varchar(50) NOT NULL,
  `login_superusers` varchar(20) NOT NULL,
  `password_superusers` varchar(32) NOT NULL,
  `email_superusers` varchar(50) NOT NULL,
  `level_superusers` int(11) NOT NULL,
  `date_inscription_superuser` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_type_sugnalement`
--

CREATE TABLE `sp_type_sugnalement` (
  `id_type_sugnalement` int(11) NOT NULL,
  `nom_type_signalement` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `avatar_user` varchar(100) DEFAULT NULL,
  `temoignage_users` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sp_user_has_sp_signalement_user`
--

CREATE TABLE `sp_user_has_sp_signalement_user` (
  `sp_user_id_user` int(11) NOT NULL,
  `sp_signalement_user_id_signalement_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projets_has_sp_sugnalement_projet`
--
ALTER TABLE `projets_has_sp_sugnalement_projet`
  ADD PRIMARY KEY (`projets_id_projets`,`sp_sugnalement_projet_id_sugnalement_projet`),
  ADD KEY `fk_projets_has_sp_sugnalement_projet_sp_sugnalement_projet1_idx` (`sp_sugnalement_projet_id_sugnalement_projet`),
  ADD KEY `fk_projets_has_sp_sugnalement_projet_projets1_idx` (`projets_id_projets`);

--
-- Index pour la table `sp_cat`
--
ALTER TABLE `sp_cat`
  ADD PRIMARY KEY (`id_cat`),
  ADD UNIQUE KEY `idsp_cat_UNIQUE` (`id_cat`);

--
-- Index pour la table `sp_cat_has_sp_projets`
--
ALTER TABLE `sp_cat_has_sp_projets`
  ADD PRIMARY KEY (`sp_cat_id_cat`,`sp_projets_id_projets`),
  ADD KEY `fk_sp_cat_has_sp_projets_sp_projets1_idx` (`sp_projets_id_projets`),
  ADD KEY `fk_sp_cat_has_sp_projets_sp_cat1_idx` (`sp_cat_id_cat`);

--
-- Index pour la table `sp_commentaire`
--
ALTER TABLE `sp_commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD UNIQUE KEY `id_commentaire_UNIQUE` (`id_commentaire`),
  ADD KEY `fk_sp_commentaire_user1_idx` (`user_id_user`),
  ADD KEY `fk_sp_commentaire_projets1_idx` (`projets_id_projets`);

--
-- Index pour la table `sp_contributions`
--
ALTER TABLE `sp_contributions`
  ADD PRIMARY KEY (`id_contribution`),
  ADD UNIQUE KEY `id_contribution_UNIQUE` (`id_contribution`),
  ADD KEY `fk_contributions_projets1_idx` (`projets_id_projets`);

--
-- Index pour la table `sp_factures`
--
ALTER TABLE `sp_factures`
  ADD PRIMARY KEY (`id_factures`),
  ADD UNIQUE KEY `idsp_facture_UNIQUE` (`id_factures`),
  ADD UNIQUE KEY `numero_facture_UNIQUE` (`numero_factures`),
  ADD KEY `fk_sp_facture_contributions1_idx` (`contributions_id_contribution`),
  ADD KEY `fk_sp_facture_user1_idx` (`user_id_user`);

--
-- Index pour la table `sp_miniature`
--
ALTER TABLE `sp_miniature`
  ADD PRIMARY KEY (`id_miniature`),
  ADD UNIQUE KEY `idsp_miniature_UNIQUE` (`id_miniature`),
  ADD KEY `fk_sp_miniature_sp_projets1_idx` (`sp_projets_id_projets`);

--
-- Index pour la table `sp_photos_presse`
--
ALTER TABLE `sp_photos_presse`
  ADD PRIMARY KEY (`id_photos_presse`),
  ADD UNIQUE KEY `idsp_photos_presse_UNIQUE` (`id_photos_presse`),
  ADD KEY `fk_sp_photos_presse_sp_presse1_idx` (`sp_presse_id_presse`);

--
-- Index pour la table `sp_photos_projet`
--
ALTER TABLE `sp_photos_projet`
  ADD PRIMARY KEY (`id_photos_projet`),
  ADD UNIQUE KEY `idsp_content_UNIQUE` (`id_photos_projet`),
  ADD KEY `fk_sp_content_sp_projets1_idx` (`sp_projets_id_projets`);

--
-- Index pour la table `sp_presse`
--
ALTER TABLE `sp_presse`
  ADD PRIMARY KEY (`id_presse`),
  ADD UNIQUE KEY `idsp_presse_UNIQUE` (`id_presse`),
  ADD KEY `fk_sp_presse_sp_superusers1_idx` (`sp_superusers_id_superusers`);

--
-- Index pour la table `sp_projets`
--
ALTER TABLE `sp_projets`
  ADD PRIMARY KEY (`id_projets`),
  ADD UNIQUE KEY `id_projets_UNIQUE` (`id_projets`),
  ADD KEY `fk_projets_user_idx` (`user_id_user`);

--
-- Index pour la table `sp_signalement_commentaires`
--
ALTER TABLE `sp_signalement_commentaires`
  ADD PRIMARY KEY (`id_signalement_commentaires`),
  ADD UNIQUE KEY `idsp_signalement_UNIQUE` (`id_signalement_commentaires`),
  ADD KEY `fk_sp_signalement_commentaires_sp_type_sugnalement1_idx` (`sp_type_sugnalement_id_type_sugnalement`);

--
-- Index pour la table `sp_signalement_commentaires_has_sp_commentaire`
--
ALTER TABLE `sp_signalement_commentaires_has_sp_commentaire`
  ADD KEY `fk_sp_signalement_commentaires_has_sp_commentaire_sp_signal_idx` (`sp_signalement_commentaires_id_signalement_commentaires`),
  ADD KEY `fk_sp_signalement_commentaires_has_sp_commentaire_sp_commen_idx` (`sp_commentaire_id_commentaire`);

--
-- Index pour la table `sp_signalement_projet`
--
ALTER TABLE `sp_signalement_projet`
  ADD PRIMARY KEY (`id_sugnalement_projet`),
  ADD UNIQUE KEY `idsp_sugnalement_projet_UNIQUE` (`id_sugnalement_projet`),
  ADD KEY `fk_sp_sugnalement_projet_sp_type_sugnalement1_idx` (`sp_type_sugnalement_id_type_sugnalement`);

--
-- Index pour la table `sp_signalement_user`
--
ALTER TABLE `sp_signalement_user`
  ADD PRIMARY KEY (`id_signalement_user`,`sp_type_sugnalement_id_type_sugnalement`),
  ADD UNIQUE KEY `idsp_signalement_UNIQUE` (`id_signalement_user`),
  ADD KEY `fk_sp_signalement_user_sp_type_sugnalement1_idx` (`sp_type_sugnalement_id_type_sugnalement`);

--
-- Index pour la table `sp_superusers`
--
ALTER TABLE `sp_superusers`
  ADD PRIMARY KEY (`id_superusers`),
  ADD UNIQUE KEY `id_superusers_UNIQUE` (`id_superusers`),
  ADD UNIQUE KEY `login_superusers_UNIQUE` (`login_superusers`),
  ADD UNIQUE KEY `email_superusers_UNIQUE` (`email_superusers`);

--
-- Index pour la table `sp_type_sugnalement`
--
ALTER TABLE `sp_type_sugnalement`
  ADD PRIMARY KEY (`id_type_sugnalement`),
  ADD UNIQUE KEY `idsp_type_sugnalement_UNIQUE` (`id_type_sugnalement`);

--
-- Index pour la table `sp_users`
--
ALTER TABLE `sp_users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `id_user_UNIQUE` (`id_users`),
  ADD UNIQUE KEY `login_user_UNIQUE` (`login_users`),
  ADD UNIQUE KEY `email_user_UNIQUE` (`email_users`);

--
-- Index pour la table `sp_user_has_sp_signalement_user`
--
ALTER TABLE `sp_user_has_sp_signalement_user`
  ADD PRIMARY KEY (`sp_user_id_user`,`sp_signalement_user_id_signalement_user`),
  ADD KEY `fk_sp_user_has_sp_signalement_user_sp_signalement_user1_idx` (`sp_signalement_user_id_signalement_user`),
  ADD KEY `fk_sp_user_has_sp_signalement_user_sp_user1_idx` (`sp_user_id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sp_cat`
--
ALTER TABLE `sp_cat`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_commentaire`
--
ALTER TABLE `sp_commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_contributions`
--
ALTER TABLE `sp_contributions`
  MODIFY `id_contribution` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_factures`
--
ALTER TABLE `sp_factures`
  MODIFY `id_factures` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_miniature`
--
ALTER TABLE `sp_miniature`
  MODIFY `id_miniature` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_photos_presse`
--
ALTER TABLE `sp_photos_presse`
  MODIFY `id_photos_presse` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_photos_projet`
--
ALTER TABLE `sp_photos_projet`
  MODIFY `id_photos_projet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_presse`
--
ALTER TABLE `sp_presse`
  MODIFY `id_presse` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_projets`
--
ALTER TABLE `sp_projets`
  MODIFY `id_projets` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_signalement_commentaires`
--
ALTER TABLE `sp_signalement_commentaires`
  MODIFY `id_signalement_commentaires` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_signalement_projet`
--
ALTER TABLE `sp_signalement_projet`
  MODIFY `id_sugnalement_projet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_signalement_user`
--
ALTER TABLE `sp_signalement_user`
  MODIFY `id_signalement_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_superusers`
--
ALTER TABLE `sp_superusers`
  MODIFY `id_superusers` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_type_sugnalement`
--
ALTER TABLE `sp_type_sugnalement`
  MODIFY `id_type_sugnalement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_users`
--
ALTER TABLE `sp_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `projets_has_sp_sugnalement_projet`
--
ALTER TABLE `projets_has_sp_sugnalement_projet`
  ADD CONSTRAINT `fk_projets_has_sp_sugnalement_projet_projets1` FOREIGN KEY (`projets_id_projets`) REFERENCES `sp_projets` (`id_projets`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projets_has_sp_sugnalement_projet_sp_sugnalement_projet1` FOREIGN KEY (`sp_sugnalement_projet_id_sugnalement_projet`) REFERENCES `sp_signalement_projet` (`id_sugnalement_projet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_cat_has_sp_projets`
--
ALTER TABLE `sp_cat_has_sp_projets`
  ADD CONSTRAINT `fk_sp_cat_has_sp_projets_sp_cat1` FOREIGN KEY (`sp_cat_id_cat`) REFERENCES `sp_cat` (`id_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sp_cat_has_sp_projets_sp_projets1` FOREIGN KEY (`sp_projets_id_projets`) REFERENCES `sp_projets` (`id_projets`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_commentaire`
--
ALTER TABLE `sp_commentaire`
  ADD CONSTRAINT `fk_sp_commentaire_projets1` FOREIGN KEY (`projets_id_projets`) REFERENCES `sp_projets` (`id_projets`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sp_commentaire_user1` FOREIGN KEY (`user_id_user`) REFERENCES `sp_users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_contributions`
--
ALTER TABLE `sp_contributions`
  ADD CONSTRAINT `fk_contributions_projets1` FOREIGN KEY (`projets_id_projets`) REFERENCES `sp_projets` (`id_projets`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_factures`
--
ALTER TABLE `sp_factures`
  ADD CONSTRAINT `fk_sp_facture_contributions1` FOREIGN KEY (`contributions_id_contribution`) REFERENCES `sp_contributions` (`id_contribution`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sp_facture_user1` FOREIGN KEY (`user_id_user`) REFERENCES `sp_users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_miniature`
--
ALTER TABLE `sp_miniature`
  ADD CONSTRAINT `fk_sp_miniature_sp_projets1` FOREIGN KEY (`sp_projets_id_projets`) REFERENCES `sp_projets` (`id_projets`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_photos_presse`
--
ALTER TABLE `sp_photos_presse`
  ADD CONSTRAINT `fk_sp_photos_presse_sp_presse1` FOREIGN KEY (`sp_presse_id_presse`) REFERENCES `sp_presse` (`id_presse`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_photos_projet`
--
ALTER TABLE `sp_photos_projet`
  ADD CONSTRAINT `fk_sp_content_sp_projets1` FOREIGN KEY (`sp_projets_id_projets`) REFERENCES `sp_projets` (`id_projets`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_presse`
--
ALTER TABLE `sp_presse`
  ADD CONSTRAINT `fk_sp_presse_sp_superusers1` FOREIGN KEY (`sp_superusers_id_superusers`) REFERENCES `sp_superusers` (`id_superusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_projets`
--
ALTER TABLE `sp_projets`
  ADD CONSTRAINT `fk_projets_user` FOREIGN KEY (`user_id_user`) REFERENCES `sp_users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_signalement_commentaires`
--
ALTER TABLE `sp_signalement_commentaires`
  ADD CONSTRAINT `fk_sp_signalement_commentaires_sp_type_sugnalement1` FOREIGN KEY (`sp_type_sugnalement_id_type_sugnalement`) REFERENCES `sp_type_sugnalement` (`id_type_sugnalement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_signalement_commentaires_has_sp_commentaire`
--
ALTER TABLE `sp_signalement_commentaires_has_sp_commentaire`
  ADD CONSTRAINT `fk_sp_signalement_commentaires_has_sp_commentaire_sp_commenta1` FOREIGN KEY (`sp_commentaire_id_commentaire`) REFERENCES `sp_commentaire` (`id_commentaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sp_signalement_commentaires_has_sp_commentaire_sp_signalem1` FOREIGN KEY (`sp_signalement_commentaires_id_signalement_commentaires`) REFERENCES `sp_signalement_commentaires` (`id_signalement_commentaires`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_signalement_projet`
--
ALTER TABLE `sp_signalement_projet`
  ADD CONSTRAINT `fk_sp_sugnalement_projet_sp_type_sugnalement1` FOREIGN KEY (`sp_type_sugnalement_id_type_sugnalement`) REFERENCES `sp_type_sugnalement` (`id_type_sugnalement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_signalement_user`
--
ALTER TABLE `sp_signalement_user`
  ADD CONSTRAINT `fk_sp_signalement_user_sp_type_sugnalement1` FOREIGN KEY (`sp_type_sugnalement_id_type_sugnalement`) REFERENCES `sp_type_sugnalement` (`id_type_sugnalement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sp_user_has_sp_signalement_user`
--
ALTER TABLE `sp_user_has_sp_signalement_user`
  ADD CONSTRAINT `fk_sp_user_has_sp_signalement_user_sp_signalement_user1` FOREIGN KEY (`sp_signalement_user_id_signalement_user`) REFERENCES `sp_signalement_user` (`id_signalement_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sp_user_has_sp_signalement_user_sp_user1` FOREIGN KEY (`sp_user_id_user`) REFERENCES `sp_users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
