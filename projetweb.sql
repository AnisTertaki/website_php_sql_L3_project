-- phpMyAdmin SQL Dump
-- version 5.1.3deb1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 29 avr. 2022 à 16:44
-- Version du serveur : 10.6.7-MariaDB-3
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `chercheur`
--

CREATE TABLE `chercheur` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `affectation` varchar(30) NOT NULL,
  `biographie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chercheur`
--

INSERT INTO `chercheur` (`id`, `nom`, `prenom`, `pays`, `affectation`, `biographie`) VALUES
(1, 'abedelmalik', 'fofana', 'malizie', 'paris sorbonne', 'rien à dire'),
(2, 'tertaki', 'anis', 'usa', 'paris 13', 'rien à dire'),
(3, 'francisco', 'toti', 'italie', 'ac roma', 'rien à dire'),
(4, 'lionel', 'messi', 'argentine', 'fcb', 'rien à dire'),
(5, 'cristiano', 'ronaldo', 'portugal', 'rma', 'rien à dire');

-- --------------------------------------------------------

--
-- Structure de la table `conferences`
--

CREATE TABLE `conferences` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `abreviation` varchar(30) NOT NULL,
  `sujet` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `dateLimite` date NOT NULL,
  `conferencier` varchar(30) NOT NULL,
  `pays` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conferences`
--

INSERT INTO `conferences` (`id`, `titre`, `abreviation`, `sujet`, `date`, `dateLimite`, `conferencier`, `pays`) VALUES
(1, 'Internation al Conference on Knowledge Capture', 'K-CAP', 'capture des\r\nconnaissan\r\nces', '2022-10-19', '2022-07-15', 'Jose Manuel Gomez-Perez ', 'Californie'),
(2, 'Internation al Conference on Knowledge Capture', 'K-CAP', 'capture des\r\nconnaissan\r\nces', '2022-10-19', '2022-07-15', 'Jose Manuel Gomez-Perez ', 'Californie'),
(3, 'Internation al Conference Conceptual Structures', 'ICCS', 'intelligence artificielle, cognition humaine,\r\nlinguistique computationnelle et\r\ndomaines connexes de l\'informatique et des sciences cognitives', '2022-04-21', '2022-02-15', 'Tanya Braun ', 'Munster'),
(4, 'Société astronomiq ue de france', 'SAF', 'Les débris\r\nspatiaux ', '2022-06-16', '2022-02-15', 'Christophe Bonnal ', 'Paris');

-- --------------------------------------------------------

--
-- Structure de la table `journaux`
--

CREATE TABLE `journaux` (
  `titre` varchar(30) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `éditeur` varchar(30) NOT NULL,
  `thème` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `journaux`
--

INSERT INTO `journaux` (`titre`, `ISBN`, `éditeur`, `thème`) VALUES
('l\'équipe', 134567549, 'francisco toti', 'sport'),
('parisien', 134567550, 'jean pierre', 'politique'),
('new york times', 134567551, 'james bob', 'new york news '),
('le monde', 134567552, 'dupond fofana', 'immigration');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `contenu` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `titre`, `auteur`, `contenu`, `date`) VALUES
(1, 'java script', 'anis tertaki', 'cours java script avec exercices pratique,tp noté ...', '2022-04-22'),
(2, 'cours php', 'abedelmalik fofana', 'cours php avec exercices pratique,tp noté ...', '2022-03-15'),
(3, 'sport', 'toti', 'départ de messi de fcb ...', '2021-09-10'),
(4, 'E=MC2', 'einstein', 'théorème en physique ', '2022-04-05');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `pays` text NOT NULL,
  `address` longtext NOT NULL,
  `affiliation` text NOT NULL,
  `travail` varchar(2555) NOT NULL,
  `grade` longtext NOT NULL,
  `recherche` text NOT NULL,
  `biographie` longtext NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`name`, `password`, `nom`, `prenom`, `date`, `pays`, `address`, `affiliation`, `travail`, `grade`, `recherche`, `biographie`, `admin`) VALUES
('admin', 'admin', 'Fofana', 'Abdel-malik', '2000-10-26', 'France', '', 'informatique', 'Developpeur unity 3D', 'stagiaire', 'informatique', 'j\'aime l\'informatique beaucoup beaucoup', 1),
('albert', 'albert', 'Einstein', 'Albert', '1934-02-27', 'Allemagne', '', 'Physique', 'physicien', 'nucleaire', 'Physique', 'E=MC2', 0),
('algo', 'algo', 'Ben Mūsā ', 'Al-Khawārizmī', '0780-11-07', 'Ouzbékistan', 'khiva', 'Mathématique', 'Mathématicien', 'Maison de la sagesse', 'Mathématique', 'j\'aime beaucoup les algorithmes', 0),
('anis', 'anis', 'Tertaki', 'Anis', '1999-12-30', 'Algerie', '', 'informatique', 'Ordinateur quantique', 'chef', 'informatique', 'j\'aime beaucoup beaucoup les chebakias', 0),
('charle', 'charle', 'Darwin', 'Charles', '1809-02-12', 'Angleterre', ' Shrewsbury dans le Shropshire ', 'Biologie', 'Paléontologue', 'Naturaliste', 'Biologie', 'j\'aime beaucoup les singes', 0),
('jean', 'jean', 'Bernoulli\r\n', 'Jean ', '1667-11-07', 'Suisse', 'Bâle', 'Mathématique', 'Mathématicien', 'Théoricien', 'Mathématique', 'j\'aime beaucoup le théorème de bernouilli', 0),
('marie', 'marie', 'Curie', 'Marie', '1867-11-07', 'Pologne', 'Varsovie (royaume de Pologne)', 'Physique', 'Physique nucléaire', 'Prix Nobel', 'physique', 'j\'aime beaucoup le nucléaire', 0),
('rene', 'rene', 'Descartes', 'René ', '1596-11-07', 'Royaume de France', 'l\'église Saint-Georges de Descartes', 'Mathématique', 'Mathématicien', 'Géométrie analytique', 'Mathématique', 'j\'aime beaucoup la géométrie', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chercheur`
--
ALTER TABLE `chercheur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `journaux`
--
ALTER TABLE `journaux`
  ADD PRIMARY KEY (`ISBN`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chercheur`
--
ALTER TABLE `chercheur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `journaux`
--
ALTER TABLE `journaux`
  MODIFY `ISBN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134567553;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
