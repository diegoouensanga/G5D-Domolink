-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 07 déc. 2018 à 19:21
-- Version du serveur :  8.0.13
-- Version de PHP :  7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Domolink`
--
CREATE DATABASE IF NOT EXISTS `Domolink` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Domolink`;

-- --------------------------------------------------------

--
-- Structure de la table `Administration`
--

CREATE TABLE `Administration` (
  `cgu` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `mentions_legales` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nom` varchar(50) NOT NULL,
  `societe` varchar(50) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Administration`
--

INSERT INTO `Administration` (`cgu`, `adresse`, `mail`, `telephone`, `mentions_legales`, `nom`, `societe`, `slogan`) VALUES
('fgdf dsvsdv hohoho\r\n\\\"salu  \r\n\r\n\r\n.\r\ndvn\r\n.\r\n.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nhh\r\n;', '10 Rue de Vanves ', 'support@domolink.fr', '0636303630', '<?php header(\"connexion.php\"); ?>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\ny', 'DomoLink', 'Domisep', 'Le Top de la Maison Connectée !');

-- --------------------------------------------------------

--
-- Structure de la table `Animaux`
--

CREATE TABLE `Animaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `race` varchar(30) DEFAULT NULL,
  `equipement_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Equipement`
--

CREATE TABLE `Equipement` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `type` enum('capteur','actionneur') DEFAULT NULL,
  `actif` tinyint(1) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `donnees` int(11) DEFAULT NULL,
  `piece_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `FAQ`
--

CREATE TABLE `FAQ` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `reponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Increment`
--

CREATE TABLE `Increment` (
  `statistique_id` int(11) DEFAULT NULL,
  `equipement_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Notifications`
--

CREATE TABLE `Notifications` (
  `id` int(11) NOT NULL,
  `expediteur` varchar(30) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `message` text,
  `lu` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Pannes`
--

CREATE TABLE `Pannes` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `equipement_id` int(11) DEFAULT NULL,
  `message` text,
  `etat` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Pieces`
--

CREATE TABLE `Pieces` (
  `id` int(11) NOT NULL,
  `nom` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Pieces`
--

INSERT INTO `Pieces` (`id`, `nom`, `id_utilisateur`) VALUES
(14, 'Chambre d\'amis', 6),
(17, 'Test', 12);

-- --------------------------------------------------------

--
-- Structure de la table `RDV`
--

CREATE TABLE `RDV` (
  `id` int(11) NOT NULL,
  `sujet` varchar(255) DEFAULT NULL,
  `horaire` datetime DEFAULT NULL,
  `reparateur_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Statistiques`
--

CREATE TABLE `Statistiques` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `valeurs` json DEFAULT NULL,
  `depart` datetime DEFAULT NULL,
  `espacement` time DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `prenom` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mdp` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `telephone` varchar(10) DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `postal` int(8) DEFAULT NULL,
  `ville` varchar(40) DEFAULT NULL,
  `pays` varchar(30) DEFAULT NULL,
  `rue` varchar(100) NOT NULL,
  `numeroRue` int(11) NOT NULL,
  `autres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id`, `identifiant`, `nom`, `prenom`, `age`, `mail`, `mdp`, `type`, `telephone`, `naissance`, `postal`, `ville`, `pays`, `rue`, `numeroRue`, `autres`) VALUES
(5, 'aaaa', 'ccccc', 'ddddd', NULL, 'bbbbb', 'x', 0, '0636303630', '1970-12-30', 80910, 'France', 'France', 'aze', 34, ''),
(13, 'tes', 'dgd', 'fdgd', NULL, 'dfgdgd', '9834876dcfb05cb167a5c24953eba58c4ac89b1adf57f28f2f9d09af107ee8f0', 0, '111', '1970-01-01', 111, 'fdgdg', 'fdgdf', 'gdfgdfg', 0, '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Animaux`
--
ALTER TABLE `Animaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Equipement`
--
ALTER TABLE `Equipement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `FAQ`
--
ALTER TABLE `FAQ`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Notifications`
--
ALTER TABLE `Notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Pannes`
--
ALTER TABLE `Pannes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Pieces`
--
ALTER TABLE `Pieces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `RDV`
--
ALTER TABLE `RDV`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Statistiques`
--
ALTER TABLE `Statistiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Animaux`
--
ALTER TABLE `Animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Equipement`
--
ALTER TABLE `Equipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `FAQ`
--
ALTER TABLE `FAQ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Notifications`
--
ALTER TABLE `Notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Pannes`
--
ALTER TABLE `Pannes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Pieces`
--
ALTER TABLE `Pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `RDV`
--
ALTER TABLE `RDV`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Statistiques`
--
ALTER TABLE `Statistiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
