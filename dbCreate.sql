-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2014 at 08:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mh3u_app`
--
CREATE DATABASE IF NOT EXISTS `mh3u_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mh3u_app`;

-- --------------------------------------------------------

--
-- Table structure for table `dualblades`
--

DROP TABLE IF EXISTS `dualblades`;
CREATE TABLE IF NOT EXISTS `dualblades` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Own` tinyint(1) NOT NULL,
  `Form` varchar(1) NOT NULL,
  `Consumes` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dualblades`
--

INSERT INTO `dualblades` (`Id`, `Name`, `Own`, `Form`, `Consumes`) VALUES
(1, 'Weathered Blades', 0, '', 'Worn Blades'),
(2, 'Worn Blades', 0, 'r', ''),
(3, 'Ventus Vindictus', 0, '', 'Blizzarioths+'),
(4, 'Raider''s Savagery', 0, 'f', 'Ventus Vindictus'),
(5, 'Pirate J Dual Blades', 0, 'r', ''),
(6, 'Great Pirate J Dual Blades', 0, 'f', 'Pirate J Dual Blades'),
(7, 'Matched Slicers', 0, 'r', ''),
(8, 'Matched Slicers+', 0, '', 'Matched Slicers'),
(9, 'Dual Slicers', 0, '', 'Matched Slicers+'),
(10, 'Glutton''s Tools', 0, 'r', ''),
(11, 'Dual Hatchets', 0, '', 'Dual Slicers'),
(12, 'Dual Hatchets+', 0, '', 'Dual Hatchets'),
(13, 'Gorger''s Tools', 0, '', 'Glutton''s Tools');

-- --------------------------------------------------------

--
-- Table structure for table `greatsword`
--

DROP TABLE IF EXISTS `greatsword`;
CREATE TABLE IF NOT EXISTS `greatsword` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Own` tinyint(1) NOT NULL,
  `Form` varchar(1) NOT NULL,
  `Consumes` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `greatsword`
--

INSERT INTO `greatsword` (`Id`, `Name`, `Own`, `Form`, `Consumes`) VALUES
(1, 'Iron Sword', 0, 'r', ''),
(2, 'Iron Sword+', 0, '', 'Iron Sword'),
(3, 'Bone Blade', 0, 'r', ''),
(4, 'Buster Sword', 0, '', 'Iron Sword+'),
(5, 'Bone Blade+', 0, '', 'Bone Blade'),
(6, 'Jawblade', 0, '', 'Bone Blade+'),
(7, 'Rugged Great Sword', 0, '', 'Buster Sword'),
(8, 'Ludroth Bone Sword', 0, '', 'Bone Blade+'),
(9, 'Buster Sword+', 0, '', 'Buster Sword'),
(10, 'Giant Jawblade', 0, '', 'Jawblade'),
(11, 'Carapace Sword', 0, '', 'Rugged Great Sword'),
(12, 'Rusted Great Sword', 0, 'r', '');

-- --------------------------------------------------------

--
-- Table structure for table `weapon_types`
--

DROP TABLE IF EXISTS `weapon_types`;
CREATE TABLE IF NOT EXISTS `weapon_types` (
  `Id` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weapon_types`
--

INSERT INTO `weapon_types` (`Id`, `Type`) VALUES
('dualblades', 'Dual Blades'),
('greatsword', 'Great Sword');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
