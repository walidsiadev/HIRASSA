-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 29 mai 2018 à 00:42
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hirassa_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `ecoles`
--

CREATE TABLE `ecoles` (
  `eco_id` int(11) NOT NULL,
  `eco_nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL,
  `prfct_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `examens`
--

CREATE TABLE `examens` (
  `ex_id` int(11) NOT NULL,
  `ex_date` datetime DEFAULT NULL,
  `ex_dure` int(11) DEFAULT NULL,
  `mt_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `mt_id` int(11) NOT NULL,
  `mt_nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prefectures`
--

CREATE TABLE `prefectures` (
  `prfct_id` int(11) NOT NULL,
  `prfct_nom` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

CREATE TABLE `profs` (
  `prof_id` int(11) NOT NULL,
  `prof_matr` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `prof_nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `prof_prenom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `prof_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `mt_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `sal_id` int(11) NOT NULL,
  `sal_num` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sal_cap` int(11) DEFAULT NULL,
  `eco_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `u_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `u_pass` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `v_id` int(11) NOT NULL,
  `v_nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ecoles`
--
ALTER TABLE `ecoles`
  ADD PRIMARY KEY (`eco_id`),
  ADD KEY `v_id` (`v_id`),
  ADD KEY `prfct_id` (`prfct_id`);

--
-- Index pour la table `examens`
--
ALTER TABLE `examens`
  ADD PRIMARY KEY (`ex_id`),
  ADD KEY `mt_id` (`mt_id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`mt_id`);

--
-- Index pour la table `prefectures`
--
ALTER TABLE `prefectures`
  ADD PRIMARY KEY (`prfct_id`);

--
-- Index pour la table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`prof_id`),
  ADD KEY `mt_id` (`mt_id`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`sal_id`),
  ADD KEY `eco_id` (`eco_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ecoles`
--
ALTER TABLE `ecoles`
  MODIFY `eco_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `examens`
--
ALTER TABLE `examens`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `mt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `prefectures`
--
ALTER TABLE `prefectures`
  MODIFY `prfct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profs`
--
ALTER TABLE `profs`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `sal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ecoles`
--
ALTER TABLE `ecoles`
  ADD CONSTRAINT `ecoles_ibfk_1` FOREIGN KEY (`v_id`) REFERENCES `villes` (`v_id`),
  ADD CONSTRAINT `ecoles_ibfk_2` FOREIGN KEY (`prfct_id`) REFERENCES `prefectures` (`prfct_id`);

--
-- Contraintes pour la table `examens`
--
ALTER TABLE `examens`
  ADD CONSTRAINT `examens_ibfk_1` FOREIGN KEY (`mt_id`) REFERENCES `matieres` (`mt_id`);

--
-- Contraintes pour la table `profs`
--
ALTER TABLE `profs`
  ADD CONSTRAINT `profs_ibfk_1` FOREIGN KEY (`mt_id`) REFERENCES `matieres` (`mt_id`);

--
-- Contraintes pour la table `salles`
--
ALTER TABLE `salles`
  ADD CONSTRAINT `salles_ibfk_1` FOREIGN KEY (`eco_id`) REFERENCES `ecoles` (`eco_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
