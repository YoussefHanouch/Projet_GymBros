-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 02 juil. 2022 à 08:11
-- Version du serveur : 8.0.28
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fitness`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctorapp`
--

DROP TABLE IF EXISTS `doctorapp`;
CREATE TABLE IF NOT EXISTS `doctorapp` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `docapp` varchar(60) NOT NULL,
  PRIMARY KEY (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `doctorapp`
--

INSERT INTO `doctorapp` (`fname`, `lname`, `email`, `contact`, `docapp`) VALUES
('youssef', 'hanouch', 'youssefhan2@gmail.com', '2', '1211'),
('youssef', 'meknassi', 'itsyoussef36@gmail.com', '25', '1134');

-- --------------------------------------------------------

--
-- Structure de la table `informationc`
--

DROP TABLE IF EXISTS `informationc`;
CREATE TABLE IF NOT EXISTS `informationc` (
  `numClient` varchar(15) NOT NULL,
  `nomc` varchar(15) NOT NULL,
  `prenomc` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dateN` date NOT NULL,
  `telephone` int NOT NULL,
  `sexe` varchar(15) NOT NULL,
  `idpack` int NOT NULL,
  PRIMARY KEY (`numClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `logintb`
--

DROP TABLE IF EXISTS `logintb`;
CREATE TABLE IF NOT EXISTS `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Structure de la table `pack`
--

DROP TABLE IF EXISTS `pack`;
CREATE TABLE IF NOT EXISTS `pack` (
  `idpack` int NOT NULL,
  `typepack` varchar(20) NOT NULL,
  PRIMARY KEY (`idpack`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pack`
--

INSERT INTO `pack` (`idpack`, `typepack`) VALUES
(1, 'PACK NORMAL'),
(2, 'PACK 3MOIS'),
(3, 'PACK VIP');

-- --------------------------------------------------------

--
-- Structure de la table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `Package_id` varchar(40) NOT NULL,
  `Package_name` varchar(40) NOT NULL,
  `Amount` int NOT NULL,
  PRIMARY KEY (`Package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `package`
--

INSERT INTO `package` (`Package_id`, `Package_name`, `Amount`) VALUES
('1', 'PACK NORMAL', 200),
('2', 'PACK 3MOIS', 500),
('3', 'PACK VIP(1ans)', 1500);

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Payment_id` int NOT NULL,
  `Amount` int NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  PRIMARY KEY (`Payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`Payment_id`, `Amount`, `customer_id`, `payment_type`) VALUES
(1, 200, '3411', 'cash');

-- --------------------------------------------------------

--
-- Structure de la table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE IF NOT EXISTS `trainer` (
  `Trainer_id` int NOT NULL,
  `Name` varchar(40) NOT NULL,
  `phone` int NOT NULL,
  PRIMARY KEY (`Trainer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `Name`, `phone`) VALUES
(1211, 'aymane', 666465670),
(2211, 'YOUSSEF', 762524223);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
