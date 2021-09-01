-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 01 sep. 2021 à 16:39
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(24, '', '', 'didin334@gmail.com', 'ssmm'),
(28, '', '', 'didin334@gmail.comggg', 'njhhggb'),
(36, '', '', 'maliksalemdsd0@gmail.com', 'qdqdqdqd'),
(38, '', '', 'malikhhhh@hhhhh.com', 'skldzd'),
(40, '', '', 'malik.salem.33@gail', 'jgkgkjj'),
(42, '', '', 'test800@gmail.com', 'kgjkhlk'),
(44, 'salem', 'Mohammed', 'maliksalemqqqqq0@gmail.com', 'aaqqqqqq'),
(45, 'malik', 'hhhhh', 'hhhh@hhhh', 'hhhh'),
(46, 'salem', 'Mohammed', 'maliksalem10@gmail.com', 'mmmm'),
(47, 'salem', 'Mohammed', 'maliksalem20@gmail.com', 'aaaa'),
(48, 'salem', 'Mohammed', 'maliksalem0@gmail.com', 'aaaa'),
(49, 'salem', 'Mohammed', 'maliksalem110@gmail.com', 'aaaa'),
(51, 'mahyou', 'bouhwitta', 'mahyou@gmail.com', 'aaaa'),
(52, 'salem', 'Mohammed', 'maliksale', 'aaaa'),
(53, 'salem', 'Mohammed', 'maliksalem0', 'ssss'),
(54, 'salem', 'Mohammed', 'maliksalem@pp', 'aaaa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
