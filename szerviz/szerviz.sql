-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 11:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `szerviz`
--
CREATE DATABASE IF NOT EXISTS `szerviz` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `szerviz`;

-- --------------------------------------------------------

--
-- Table structure for table `bolt`
--
-- Creation: Mar 23, 2023 at 09:57 AM
--

DROP TABLE IF EXISTS `bolt`;
CREATE TABLE IF NOT EXISTS `bolt` (
  `boltID` int(11) NOT NULL AUTO_INCREMENT,
  `megnevezes` varchar(32) DEFAULT NULL,
  `cim` varchar(48) DEFAULT NULL,
  PRIMARY KEY (`boltID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `bolt`:
--

-- --------------------------------------------------------

--
-- Table structure for table `cikk`
--
-- Creation: Mar 23, 2023 at 09:50 AM
--

DROP TABLE IF EXISTS `cikk`;
CREATE TABLE IF NOT EXISTS `cikk` (
  `cikkszam` int(11) NOT NULL AUTO_INCREMENT,
  `megnevezes` varchar(32) DEFAULT NULL,
  `garancia` int(11) DEFAULT NULL,
  PRIMARY KEY (`cikkszam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `cikk`:
--

-- --------------------------------------------------------

--
-- Table structure for table `eladas`
--
-- Creation: Mar 23, 2023 at 10:14 AM
--

DROP TABLE IF EXISTS `eladas`;
CREATE TABLE IF NOT EXISTS `eladas` (
  `cikkszam` int(11) DEFAULT NULL,
  `gyartszam` int(11) NOT NULL,
  `vkod` int(11) DEFAULT NULL,
  `kelt` date DEFAULT NULL,
  `ar` int(11) DEFAULT NULL,
  `bolt` int(11) DEFAULT NULL,
  PRIMARY KEY (`gyartszam`),
  KEY `eladas_cikk_cikkszam_fk` (`cikkszam`),
  KEY `eladas_bolt_boltID_fk` (`bolt`),
  KEY `eladas_vevo_vkod_fk` (`vkod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `eladas`:
--   `bolt`
--       `bolt` -> `boltID`
--   `cikkszam`
--       `cikk` -> `cikkszam`
--   `vkod`
--       `vevo` -> `vkod`
--

-- --------------------------------------------------------

--
-- Table structure for table `reklamacio`
--
-- Creation: Mar 23, 2023 at 10:11 AM
--

DROP TABLE IF EXISTS `reklamacio`;
CREATE TABLE IF NOT EXISTS `reklamacio` (
  `cikkszam` int(11) DEFAULT NULL,
  `gyartszam` int(11) DEFAULT NULL,
  `datum` date NOT NULL,
  `hiba` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`datum`),
  KEY `reklamacio_cikk_cikkszam_fk` (`cikkszam`),
  KEY `reklamacio_eladas_gyartszam_fk` (`gyartszam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `reklamacio`:
--   `cikkszam`
--       `cikk` -> `cikkszam`
--   `gyartszam`
--       `eladas` -> `gyartszam`
--

-- --------------------------------------------------------

--
-- Table structure for table `vevo`
--
-- Creation: Mar 23, 2023 at 09:59 AM
--

DROP TABLE IF EXISTS `vevo`;
CREATE TABLE IF NOT EXISTS `vevo` (
  `vkod` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(32) DEFAULT NULL,
  `cim` varchar(48) DEFAULT NULL,
  PRIMARY KEY (`vkod`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `vevo`:
--

--
-- Dumping data for table `vevo`
--

INSERT INTO `vevo` (`vkod`, `nev`, `cim`) VALUES
(1, 'Kiss Janos', '1138 Budapest Vaci ut 21'),
(2, 'Nagy Jozsef', '1234 Faluvaros Fo utca 14');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eladas`
--
ALTER TABLE `eladas`
  ADD CONSTRAINT `eladas_bolt_boltID_fk` FOREIGN KEY (`bolt`) REFERENCES `bolt` (`boltID`),
  ADD CONSTRAINT `eladas_cikk_cikkszam_fk` FOREIGN KEY (`cikkszam`) REFERENCES `cikk` (`cikkszam`),
  ADD CONSTRAINT `eladas_vevo_vkod_fk` FOREIGN KEY (`vkod`) REFERENCES `vevo` (`vkod`);

--
-- Constraints for table `reklamacio`
--
ALTER TABLE `reklamacio`
  ADD CONSTRAINT `reklamacio_cikk_cikkszam_fk` FOREIGN KEY (`cikkszam`) REFERENCES `cikk` (`cikkszam`),
  ADD CONSTRAINT `reklamacio_eladas_gyartszam_fk` FOREIGN KEY (`gyartszam`) REFERENCES `eladas` (`gyartszam`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table bolt
--

--
-- Metadata for table cikk
--

--
-- Metadata for table eladas
--

--
-- Metadata for table reklamacio
--

--
-- Metadata for table vevo
--

--
-- Metadata for database szerviz
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
