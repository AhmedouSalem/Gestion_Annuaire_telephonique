-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 oct. 2021 à 07:43
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db1`
--

-- --------------------------------------------------------

--
-- Structure de la table `idb_projet`
--

CREATE TABLE `idb_projet` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Desicription` varchar(50) NOT NULL,
  `Tél` varchar(50) NOT NULL,
  `DateDeCréation` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Secteur` varchar(50) NOT NULL,
  `Adresse` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `idb_projet`
--

INSERT INTO `idb_projet` (`ID`, `Nom`, `Desicription`, `Tél`, `DateDeCréation`, `Email`, `Secteur`, `Adresse`) VALUES
(6, 'A', 'CV', '23232333', '2021-05-05', 'ahmedou8salem@gmail.com', 'Asurance', 'LKSAR');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `idb_projet`
--
ALTER TABLE `idb_projet`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Tél` (`Tél`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `idb_projet`
--
ALTER TABLE `idb_projet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
