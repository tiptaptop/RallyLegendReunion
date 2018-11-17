
-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  sam. 17 nov. 2018 à 11:02
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `rallyLegend`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idcommentaire` int(11) NOT NULL,
  `id_post` int(11) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `commentaire` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `idevenement` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `restriction` int(11) DEFAULT NULL,
  `descriptif` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `idphoto` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `lieu` varchar(45) DEFAULT NULL,
  `id_voiture` int(11) DEFAULT NULL,
  `id_evenement` int(11) DEFAULT NULL,
  `id_pilote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `idposte` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_vehicule` int(11) DEFAULT NULL,
  `descriptif` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idutilisateur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `motDePasse` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `id_voiture` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `idvoiture` int(11) NOT NULL,
  `annee` datetime DEFAULT NULL,
  `marque` varchar(45) DEFAULT NULL,
  `modele` varchar(45) DEFAULT NULL,
  `nombreDeRoues` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idcommentaire`),
  ADD KEY `idutilisateur_idx` (`id_utilisateur`),
  ADD KEY `id_post_idx` (`id_post`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idevenement`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`idphoto`),
  ADD KEY `idutilisateur_idx` (`id_utilisateur`),
  ADD KEY `idvoiture_idx` (`id_voiture`),
  ADD KEY `pilote_idx` (`id_pilote`),
  ADD KEY `idevenement_idx` (`id_evenement`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`idposte`),
  ADD KEY `id_utilisateur_idx` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idvoiture`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `id_post` FOREIGN KEY (`id_post`) REFERENCES `poste` (`idposte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `idevenement` FOREIGN KEY (`id_evenement`) REFERENCES `evenement` (`idevenement`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idutilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idvoiture` FOREIGN KEY (`id_voiture`) REFERENCES `vehicule` (`idvoiture`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pilote` FOREIGN KEY (`id_pilote`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `id_voiture` FOREIGN KEY (`idvoiture`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
