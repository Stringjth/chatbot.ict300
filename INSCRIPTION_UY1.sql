-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 02 juil. 2022 à 09:04
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `INSCRIPTION_UY1`
--

-- --------------------------------------------------------

--
-- Structure de la table `ETUDIANT`
--

CREATE TABLE `ETUDIANT` (
  `matricule` varchar(255) NOT NULL,
  `numero_dossier` int(11) DEFAULT NULL,
  `numero_payement` int(11) DEFAULT NULL,
  `faculte` varchar(255) DEFAULT NULL,
  `niveau` varchar(255) DEFAULT NULL,
  `premier_choix` varchar(255) DEFAULT NULL,
  `deuxieme_choix` varchar(255) DEFAULT NULL,
  `troisieme_choix` varchar(255) DEFAULT NULL,
  `diplome` varchar(255) DEFAULT NULL,
  `serie` varchar(255) DEFAULT NULL,
  `mention` varchar(255) DEFAULT NULL,
  `emetteur` varchar(255) DEFAULT NULL,
  `statut_social` varchar(255) DEFAULT NULL,
  `sport_pratiquer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ETUDIANT`
--

INSERT INTO `ETUDIANT` (`matricule`, `numero_dossier`, `numero_payement`, `faculte`, `niveau`, `premier_choix`, `deuxieme_choix`, `troisieme_choix`, `diplome`, `serie`, `mention`, `emetteur`, `statut_social`, `sport_pratiquer`) VALUES
('21A06', 7, 2654345, 'FACULTE DES LETTRES', 'L1', 'ANGLAIS', 'ESPAGNOL', 'MASTER EN SCIENCE DU LANGAGE', 'BAC CAMEROUNAIS', 'A', 'BIEN', 'OBC', 'MARIE', 'DANSE'),
('22A01', 2, 214578, 'FACULTES DES SCIENCES ', 'L1', 'MATHEMATIQUES', 'ICT4D', 'PHYSIQUE', 'BACC', 'C', 'PASSABLE', 'OBC', 'sans emploie', 'judo'),
('22A02', 3, 214578, 'FACULTES DES SCIENCES', 'M1', 'INFORMATIQUE', NULL, NULL, 'LICENCE', NULL, 'BIEN', 'GCE', 'DIVORCER', 'FOOTBALL'),
('22A03', 4, 214577, 'facultes des lettres ', 'l2', 'lettres modernes', NULL, NULL, 'bacc', 'A', 'passable', 'obc', NULL, 'handball'),
('22A04', 5, 214574, 'faclutes des sciences', 'MASTER', 'BIOLOGIE VEGETALE', NULL, NULL, 'LICENCE', NULL, 'EXCELENT', 'GCE', NULL, NULL),
('22A05', 6, 214579, 'FACULTE DES SCIENCES', 'L1', 'PHYSIQUES', 'MATHEMATIQUES', 'ICT4D', 'BAC CAMEROUNAIS', 'D', 'ASSEZ BIEN', 'OBC', 'CELIBATAIRE', 'FOOTBALL'),
('22A08', 9, 214580, 'FACULTE DES SCIENCES', 'L2', 'INFORMATIQUE FONDAMENALE', 'ICT4D', 'PHYSIQUES', 'BAC CAMEROUNAIS', 'C', 'TRES BIEN', 'OBC', 'MERE CELIBATAIRE', 'BASKETBALL'),
('22A09', 10, 2654346, 'FACULTE DES LETTRES', 'L1', 'ANGLAIS', 'ESPAGNOL', 'FRANÇAIS', 'BAC CAMEROUNAIS', 'A', 'TRES BIEN', 'OBC', 'CELIBATAIRE', 'VOLLEYBALL'),
('22A10', 11, 214581, 'FACULTE DES SCIENCES', 'L3', 'MATHEMATIQUES', 'CHIMIE', 'MICRO-BIOLOGIE', 'BAC CAMEROUNAIS', 'D', 'PASSABLE', 'OBC', 'CELIBATAIRE', 'FOOTBALL'),
('22A12', 12, NULL, 'Faculté des Sciences (FS)', 'L1', 'BIOLOGIE ANIMALE', 'MICROBIOLOGIE', 'CHIMIE', 'BACC CAMEROUNAIS', 'A', 'BIEN', 'gce', '', NULL),
('22A13', 13, 214578, 'FACULTE DES SCIENCES (FS)', 'L1', 'ICT4D', 'BIOCHIMIE', 'MATHEMATIQUES', 'bacc', 'C', 'passable', 'obc', NULL, 'judo'),
('22A14', 13, NULL, 'FACULTE DES LETTRES', 'L1', 'Litterature et civilisation africaine', 'sociologie', 'Master Pro- Sémiatique', 'BACC CAMEROUNAIS', 'A', 'PASSABLE', 'gce', 'Etudiant Camerounais', NULL),
('22A15', 14, NULL, 'L1', 'L1', 'CHIMIE', 'MICROBIOLOGIE', 'ICT FOR DEVELOPMENT', 'BACC CAMEROUNAIS', 'A', 'BIEN', 'obc', '', 'handball');

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE `UTILISATEUR` (
  `numero_dossier` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) DEFAULT NULL,
  `numero_cni` varchar(255) DEFAULT NULL,
  `sexe` varchar(15) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `lieu_payement` varchar(255) DEFAULT NULL,
  `numero_transaction` int(11) DEFAULT NULL,
  `nationalite` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `departement` varchar(255) DEFAULT NULL,
  `nom_pere` varchar(255) DEFAULT NULL,
  `profession_pere` varchar(255) DEFAULT NULL,
  `nom_mere` varchar(255) DEFAULT NULL,
  `proffesion_mere` varchar(255) DEFAULT NULL,
  `nom_urgence` varchar(255) DEFAULT NULL,
  `contact_urgence` int(11) DEFAULT NULL,
  `adresse_urgence` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`numero_dossier`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`, `numero_cni`, `sexe`, `adresse`, `telephone`, `mail`, `lieu_payement`, `numero_transaction`, `nationalite`, `region`, `departement`, `nom_pere`, `profession_pere`, `nom_mere`, `proffesion_mere`, `nom_urgence`, `contact_urgence`, `adresse_urgence`) VALUES
(1, 'DONALD', 'tientcheu', '2022-06-08', 'yaounde', '154522', 'M', 'emombo', 6578852, 'tientcheu@gmail.com', 'sgc', 111254, 'Cameroun', 'Adamaoua', 'Djérem', 'thomas', 'commercant', 'nadege', 'coutiere', 'nadege', 6598745, 'yaounde'),
(2, 'alban', 'happi', '2022-06-24', 'yaounde', '154522', 'f', 'melen', NULL, 'albanhappi@gmail.com', 'yup', 112154, 'Cameroun', 'ouest', 'haut-nkam', 'happi', 'pharmacien', 'leaticia', 'dev_web', 'happi', 655874552, 'yaounde'),
(3, 'leaticia', 'onana', '2012-06-12', 'yaounde', '154522', 'f', 'damas', 698875412, 'onana@gmail.com', 'sgc', 11, 'Cameroun', 'centre', 'mfoundi', 'onana', 'bijoutier', 'perline', 'entrepeneur', 'perline', 687421547, 'yaounde'),
(4, 'mende', 'miafo', '2012-06-11', 'yaounde', '154522', 'f', 'odza', 698752145, 'mende@gmail.com', 'yup', 112148, 'Cameroun', 'ouest', 'Dschang', 'miafo', 'menusier', 'mende', 'enseignant', '688745214', 698523621, 'yaounde'),
(5, 'mviana', 'yann', '2022-06-16', 'yaounde', '154522', 'm', 'esoos', 693216548, 'mviana@gmail.com', 'yup', 111245, 'autre', NULL, NULL, 'mviana', 'guitariste', 'louna', 'artiste chanteur', 'louna', 652231654, 'yaounde'),
(6, 'mbiada', 'bayon', '2022-06-17', 'yaounde', '154522', 'M', 'melen', 675452115, 'mbiada@gmail', 'sgc', 4411, 'Cameroun', 'Adamaoua', 'Djérem', 'thomas', 'pharmacien', NULL, 'coutiere', 'ertyu', 1254, 'yaounde'),
(7, 'nyadjou', 'lucie', '2022-06-16', 'yaounde', '5479455', 'f', 'odza', NULL, 'niadjou@gmail.com', 'yup', 112578, 'Cameroun', 'ouest', 'nkam', 'christian', 'electricien', 'audrey', 'data sciensite', 'johan', 658795212, 'yaounde'),
(8, 'kamfouo', 'christian', '2022-06-14', 'yaounde', '287555', 'M', 'omnisport', 685458778, 'johan@gmail.com', 'sgc', 112154, 'Cameroun', 'ouest', 'nde', 'sankara', 'policier', 'lolo', 'infirmiere', 'johan', 6854589, 'yaounde'),
(9, 'Esseme', 'Audrey', '2022-06-22', 'yaounde', '124577', 'f', 'nkolbison', 658784521, 'audrey@gmail', 'sgc', 112578, 'Cameroun', 'littoral', 'nkan', 'idriss', 'dev_fullstack', 'niadjou', 'coutiere', 'vitalis', 659874521, 'yaounde'),
(10, 'sabou', 'yimga', '2022-06-28', 'bafoussam', '124574', 'F', 'soa', 652147854, 'yimga@gmail.com', 'sug', 11, 'Cameroun', 'sud', 'ngolo', 'noe', 'pharmacien', 'loile', 'chercheur', 'alban', 65854587, 'yaounde'),
(11, 'haranga', 'samson', '2022-06-22', 'ngaoundere', '125483', 'M', 'essos', 655854587, 'haranga@gmail.com', 'sgc', 112587, 'Cameroun', 'Adamaoua', 'Djérem', 'djona', 'professeur', 'aisatou', 'commercante', 'danny', 656138785, 'yaounde'),
(12, 'medi', 'lucresse', '2022-06-22', 'soa', '457852', 'F', 'emombo', 6578852, 'medi@gmail.com', 'sgc', 122587, '', 'Adamaoua', 'Djérem', 'thomas', 'pharmacien', NULL, 'dev web', 'ertyu', 1254, 'yaounde'),
(13, 'emombo', 'voutsa', '2022-07-19', NULL, '124578', 'f', 'mimboman', NULL, 'voutsa@gmail.com', 'eu', 13, 'Cameroun', 'Adamaoua', 'Djérem', 'happi alban', 'pharmacien', NULL, 'coutiere', 'donald', 696558877, 'yaounde'),
(14, 'bertoua', 'rayan', '2022-07-11', NULL, '2578554', 'm', 'emombo', NULL, 'ferdinand@gmail.com', 'sgc', 1485632, 'camerounais', 'est', 'bertoua', 'wam\'s', 'mangeur d\'argent', 'audrey', 'ninja', 'naomie', 6587854, 'yaounde');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ETUDIANT`
--
ALTER TABLE `ETUDIANT`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `numero_dossier` (`numero_dossier`);

--
-- Index pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD PRIMARY KEY (`numero_dossier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  MODIFY `numero_dossier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ETUDIANT`
--
ALTER TABLE `ETUDIANT`
  ADD CONSTRAINT `ETUDIANT_ibfk_1` FOREIGN KEY (`numero_dossier`) REFERENCES `UTILISATEUR` (`numero_dossier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
