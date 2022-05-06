-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 06 mai 2022 à 02:10
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Damien Connetable WebSite`
--

-- --------------------------------------------------------

--
-- Structure de la table `Admin`
--

CREATE TABLE `Admin` (
  `name` varchar(200) NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Admin`
--

INSERT INTO `Admin` (`name`, `mdp`) VALUES
('AdminRootConnetable', '$2y$12$aVP62573mPXtKdBJyWvMp.dQqvB50E9dlf8WjHZn0Upx6iPqH5X7K');

-- --------------------------------------------------------

--
-- Structure de la table `Projets`
--

CREATE TABLE `Projets` (
  `idProjet` int(11) NOT NULL,
  `nomProjet` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `imagePath` varchar(200) NOT NULL,
  `pdfPath` varchar(200) DEFAULT NULL,
  `lien` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Projets`
--

INSERT INTO `Projets` (`idProjet`, `nomProjet`, `type`, `imagePath`, `pdfPath`, `lien`) VALUES
(1, 'Étude à l\'échelle atomique de l\'interaction de l\'hydrogène avec des défauts dans le nickel et interprétation classique de la dynamique associée.', 'projet', '../../uploads/fracVHnNi_600K.jpeg', '../../uploads/MonProjet.pdf', ''),
(2, 'Effets des contraintes et des déformations sur la diffusion des interstitiels et des lacunes.', 'projet', '../../uploads/V_diff_al.jpeg', '../../uploads/MonProjet.pdf', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `Projets`
--
ALTER TABLE `Projets`
  ADD PRIMARY KEY (`idProjet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Projets`
--
ALTER TABLE `Projets`
  MODIFY `idProjet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
