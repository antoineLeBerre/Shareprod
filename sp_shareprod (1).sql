-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 18 Mars 2017 à 11:11
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
  `nom_cat` varchar(20) NOT NULL,
  `icone_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sp_cat`
--

INSERT INTO `sp_cat` (`id_cat`, `nom_cat`, `icone_cat`) VALUES
(1, 'Action', 'image1'),
(2, 'Aventure', ''),
(3, 'Romantique', ''),
(4, 'Comedie', ''),
(5, 'Drame', '');

-- --------------------------------------------------------

--
-- Structure de la table `sp_cat_has_sp_projets`
--

CREATE TABLE `sp_cat_has_sp_projets` (
  `sp_cat_id_cat` int(11) NOT NULL,
  `sp_projets_id_projets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sp_cat_has_sp_projets`
--

INSERT INTO `sp_cat_has_sp_projets` (`sp_cat_id_cat`, `sp_projets_id_projets`) VALUES
(1, 1),
(2, 1),
(4, 1),
(1, 2),
(3, 2),
(4, 2),
(5, 2),
(1, 3),
(2, 3),
(4, 3),
(1, 4),
(4, 4),
(5, 4),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(2, 6),
(4, 6),
(5, 6),
(1, 7),
(4, 7),
(5, 7),
(1, 8),
(2, 8),
(3, 8),
(2, 9),
(4, 9),
(5, 9);

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
(1, '2017-03-09 22:13:31', 'content1', 1, 1),
(2, '2017-03-09 22:16:27', 'content1', 1, 1),
(3, '2017-03-09 22:16:27', 'content2', 2, 2),
(4, '2017-03-09 22:16:27', 'content3', 3, 3),
(5, '2017-03-09 22:16:27', 'content4', 4, 4),
(6, '2017-03-09 22:16:27', 'content5', 5, 5),
(7, '2017-03-09 22:16:27', 'content6', 6, 6),
(8, '2017-03-09 22:16:27', 'content7', 7, 7),
(9, '2017-03-13 09:31:02', '', 3, 4),
(10, '2017-03-13 09:33:36', '', 1, 1),
(11, '2017-03-13 09:36:13', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 1, 3);

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

--
-- Contenu de la table `sp_miniature`
--

INSERT INTO `sp_miniature` (`id_miniature`, `image_miniature`, `titre_miniature`, `texte_miniature`, `sp_projets_id_projets`) VALUES
(1, 'image1', 'titre miniature 1', 'texte miniature 1', 4),
(2, 'image1', 'titre miniature 2', 'texte miniature 2', 5),
(3, 'image3', 'titre miniature 3', 'texte miniature 3', 2),
(4, 'image4', 'titre miniature 4', 'texte miniature 4', 1),
(5, 'image3', 'titre miniature 5', 'texte miniature 5', 7),
(6, 'image1', 'pour le projet 9', 'Cecie est la description pour le projet 9', 9),
(10, 'yolo', 'image3', 'sfgbgfb', 3),
(13, 'image3', 'qerdffbv', 'dfvbfgbsdfb', 6),
(14, 'umage4', 'sdfvfdv', 'sdfbgfbgfb', 8);

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
  `date_fin_projets` timestamp NULL DEFAULT NULL,
  `user_id_user` int(11) NOT NULL,
  `avancement_projets` int(11) DEFAULT '0',
  `financement_max_projets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sp_projets`
--

INSERT INTO `sp_projets` (`id_projets`, `nom_projets`, `titre_projets`, `description_projets`, `date_debut_projets`, `date_fin_projets`, `user_id_user`, `avancement_projets`, `financement_max_projets`) VALUES
(1, 'nom1', 'titre1', 'descritpion1', '2017-03-09 21:38:16', '2017-03-09 21:38:16', 1, 0, 0),
(2, 'nom2', 'titre2', 'descritpion2', '2017-03-09 21:39:10', '2017-03-09 21:39:10', 2, 0, 0),
(3, 'nom3', 'titre3', 'descritpion3', '2017-03-09 21:41:49', '2017-03-09 21:41:49', 3, 0, 0),
(4, 'nom4', 'titre4', 'descritpion4', '2017-03-09 21:41:49', '2017-03-09 21:41:49', 4, 0, 0),
(5, 'nom5', 'titre5', 'descritpion5', '2017-03-09 21:41:49', '2017-03-09 21:41:49', 5, 0, 0),
(6, 'nom6', 'titre6', 'descritpion6', '2017-03-09 21:41:49', '2017-03-09 21:41:49', 6, 0, 0),
(7, 'nom7', 'titre7', 'descritpion7', '2017-03-09 21:41:49', '2017-03-09 21:41:49', 7, 0, 0),
(8, 'qdfsdf', 'sthfgnfhnfngsfhvcbsfg', 'hgvkgjvgvdxtdgfcgctdxkvkb;b gjvfxck vfxutsxutckvkb', '2017-03-14 09:38:23', '2017-04-13 07:38:23', 1, 0, 50000),
(9, 'fgfhnfh', 'dgfhnhg,hg,', 'gh,hgn,nb,hg', '2017-03-14 15:58:34', '2017-04-13 13:58:34', 5, 0, 50000);

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

--
-- Contenu de la table `sp_superusers`
--

INSERT INTO `sp_superusers` (`id_superusers`, `nom_suoerusers`, `prenom_superusers`, `login_superusers`, `password_superusers`, `email_superusers`, `level_superusers`, `date_inscription_superuser`) VALUES
(1, '', 'Administrateur1', 'admin', 'admin', 'email1', 1, '2017-03-14 08:42:51'),
(2, '', 'moderateur1', 'modo', 'modo', 'email2', 2, '2017-03-14 08:42:51');

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
  `avatar_users` varchar(100) DEFAULT NULL,
  `temoignage_users` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sp_users`
--

INSERT INTO `sp_users` (`id_users`, `nom_users`, `prenom_users`, `login_users`, `password_users`, `date_inscription_users`, `email_users`, `description_users`, `avatar_users`, `temoignage_users`) VALUES
(1, 'nom1', 'prenom1', 'login1', '40aeb9cbbacd26d51592af91b9e7e311', '2017-03-09 21:29:51', 'email1', 'description1', 'avatar1', 'temoignage1'),
(2, 'nom2', 'prenom2', 'login2', 'password2', '2017-03-09 21:34:38', 'email2', 'description2', 'avatar2', 'temoignage2'),
(3, 'nom3', 'prenom3', 'login3', 'password3', '2017-03-09 21:34:38', 'email3', 'description3', 'avatar3', 'temoignage3'),
(4, 'nom4', 'prenom4', 'login4', 'password4', '2017-03-09 21:34:38', 'emai43', 'description4', 'avatar4', 'temoignage4'),
(5, 'nom5', 'prenom5', 'login5', 'password5', '2017-03-09 21:34:38', 'email5', 'description5', 'avatar5', 'temoignage5'),
(6, 'nom6', 'prenom6', 'login6', 'password6', '2017-03-09 21:34:38', 'email6', 'description6', 'avatar6', 'temoignage6'),
(7, 'nom7', 'prenom7', 'login7', 'password7', '2017-03-09 21:34:38', 'email7', 'description7', 'avatar7', 'temoignage7'),
(8, 'Le Berre', 'Antoine', 'test', '2eefc661c8fb0208195fdb1b0a56d047', '2017-03-13 07:30:47', 'ant.le.berre@gmail.com', '', '', '');

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
  ADD UNIQUE KEY `sp_projets_id_projets_UNIQUE` (`sp_projets_id_projets`),
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
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `sp_commentaire`
--
ALTER TABLE `sp_commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `id_miniature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
  MODIFY `id_projets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `id_superusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `sp_type_sugnalement`
--
ALTER TABLE `sp_type_sugnalement`
  MODIFY `id_type_sugnalement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sp_users`
--
ALTER TABLE `sp_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
