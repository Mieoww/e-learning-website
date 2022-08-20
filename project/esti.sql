-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 août 2022 à 17:27
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `esti`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `pdp` varchar(50) NOT NULL,
  `diplome` varchar(50) NOT NULL,
  `genre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `birthdate`, `telephone`, `email`, `fb`, `pdp`, `diplome`, `genre`) VALUES
(2, 'AMIR', 'Djamil', '2003-10-24', 32156879, 'djamil.amir@esti.mg', 'Amir', '../../assets/images/djamil.jpg', 'BACC', 'male'),
(4, 'RAMANANKIRAHINA', 'Itokiana', '2004-03-12', 321519647, 'itokiana.ramankirahina@es', 'Itokiana', '../../assets/images/itokiana.jpg', 'BACC', 'male'),
(7, 'RABEONY', 'Anja Elody', '2002-07-13', 347815462, 'elody.rabeony@esti.mg', 'Elody', '../../assets/images/elody.jpg', 'BACC', 'female'),
(8, 'RAMAMONJISOA', 'Antsa Ny Aro Tanya', '2002-08-04', 321546958, 'tanya.ramamonjisoa@esti.m', 'Tanya', '../../assets/images/tanya.jpg', 'BACC', 'female'),
(20, 'NGUYEN VAN', 'Jason Fahasoavana', '2002-02-18', 332569485, 'jason.ngyunvan@esti.mg', 'Jason Van', '../../assets/images/jason.jpg', 'BACC', 'male'),
(21, 'NAJMUDDIN', 'Qail', '2003-10-07', 321456852, 'qail.andriambelo@esti.mgi', 'Qail Najmuddin', '../../assets/images/qail.jpg', 'BACC', 'male'),
(23, 'ANDRIAHARINIAINA', 'Kanto', '2004-04-02', 334512681, 'kanto.andriahariniaina@es', 'Kanto', '../../assets/images/kanto.jpg', 'BACC', 'female'),
(25, 'BEMANANTSOA', 'Mahery', '2001-07-12', 342518653, 'eliot.bemanantsoa@esti.mg', 'Mahery', '../../assets/images/eliot.jpg', 'BACC', 'male'),
(35, 'RAKOTONDRANAIVO', 'Mirasoa Harinoro', '2004-10-16', 325966569, 'mirasoa.rakotondranaivo@e', 'Hari', '../../assets/images/IMG_20211228_073149.jpg', 'BACC', 'female'),
(36, 'RAHARITSIFA', 'Vina Maharotoky', '2003-05-27', 332561478, 'vina.raharitsifa@esti.mg', 'Vina Raharitsifa', '../../assets/images/vina.jpg', 'BACC', 'male'),
(37, 'RAKOTONIRINA', 'Fandresena', '2001-04-02', 345217859, 'fandresena.rakotonirina@e', 'Rakotonirina Fandresena', '../../assets/images/fandresena.jpg', 'BACC', 'male');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `heure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `code`, `nom`, `heure`) VALUES
(1, 'INFO_140', 'Introduction au systeme informatique', 30),
(2, 'INFO_150', 'Introduction aux base de données', 45),
(3, 'INFO_160', 'Structures de données et Algorithmes fondamentaux', 39),
(4, 'INFO_110', 'Introduction au systeme informatique', 39),
(9, 'ENTR_120', 'Fonctionnement des organisation', 30),
(10, 'INFO_130', 'Architecture des ordinateurs', 39),
(12, 'MATH_120', 'Recherche opérationnelle', 30),
(14, 'INFO_120', 'Administration windows', 40);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
  `id` int(20) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`id`, `nom`, `prenom`, `email`, `telephone`) VALUES
(1, 'RANDRIAMISY', 'Hasimbola', 'hasimbola.randriamisy@esti.mg', 123456),
(10, 'RAKOTONIRINA', 'Hariniony', 'hariniony.rakotonirina@esti.mg', 2022457896),
(11, 'RAKOTONDRAMANANA', 'Sitraka ', 'sitraka.rakotondramanana@esti.mg', 2147483647),
(12, 'RALAIMANISA', 'Ndrina', 'ndrina.ralaimanisa@esti.mg', 2147483647),
(15, 'Andrianarimbahy', 'Dinalalaniony', 'dinalalaniony.andrianarimbahy@esti.mg', 321476253),
(16, 'ANTILAHY', 'Chrystelle', 'herimpitia.antilahy@esti.mg', 332569863);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('All black', '2222'),
('Boutakelyyyy', 'voli'),
('cassidy', '3333'),
('Djamil', '1111'),
('itokiana', '0000'),
('mandresy', '5556'),
('mirasoa', '0000'),
('totokena', '1230'),
('Voliaina', 'voli');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `prof`
--
ALTER TABLE `prof`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
