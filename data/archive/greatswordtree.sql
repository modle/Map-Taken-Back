-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2015 at 08:12 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mh4u_app`
--

USE mh4u_app

-- --------------------------------------------------------

--
-- Table structure for table `greatswordtree`
--

CREATE TABLE IF NOT EXISTS `greatswordtree` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `targetWeapon` varchar(40) DEFAULT NULL,
  `targetLess1` varchar(40) DEFAULT NULL,
  `targetLess2` varchar(40) DEFAULT NULL,
  `targetLess3` varchar(40) DEFAULT NULL,
  `targetLess4` varchar(40) DEFAULT NULL,
  `targetLess5` varchar(40) DEFAULT NULL,
  `targetLess6` varchar(40) DEFAULT NULL,
  `targetLess7` varchar(40) DEFAULT NULL,
  `targetLess8` varchar(40) DEFAULT NULL,
  `targetLess9` varchar(40) DEFAULT NULL,
  `targetLess10` varchar(40) DEFAULT NULL,
  `targetLess11` varchar(40) DEFAULT NULL,
  `targetLess12` varchar(40) DEFAULT NULL,
  `targetLess13` varchar(40) DEFAULT NULL,
  `targetLess14` varchar(40) DEFAULT NULL,
  `targetLess15` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=256 ;

--
-- Dumping data for table `greatswordtree`
--

INSERT INTO `greatswordtree` (`Id`, `targetWeapon`, `targetLess1`, `targetLess2`, `targetLess3`, `targetLess4`, `targetLess5`, `targetLess6`, `targetLess7`, `targetLess8`, `targetLess9`, `targetLess10`, `targetLess11`, `targetLess12`, `targetLess13`, `targetLess14`, `targetLess15`) VALUES
(1, 'Nether Lufactrus', 'Nether Great Sword', 'Orcus Tonitrus', 'Oppressor''s Forger', 'Despot''s Blackstorm', 'Usurper''s Storm', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL),
(2, 'Nether Great Sword', 'Orcus Tonitrus', 'Oppressor''s Forger', 'Despot''s Blackstorm', 'Usurper''s Storm', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL),
(3, 'Stygian Acedia', 'Brimstren Drakepride', 'Oppressor''s Forger', 'Despot''s Blackstorm', 'Usurper''s Storm', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL),
(4, 'Orcus Tonitrus', 'Oppressor''s Forger', 'Despot''s Blackstorm', 'Usurper''s Storm', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL),
(5, 'Brimstren Drakepride', 'Oppressor''s Forger', 'Despot''s Blackstorm', 'Usurper''s Storm', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL),
(6, 'Lagia Fulmination', 'Neo Lagia Blade', 'Lagia Wildfire', 'Lagia Lightning', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL),
(7, 'Oppressor''s Forger', 'Despot''s Blackstorm', 'Usurper''s Storm', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL),
(8, 'Neo Lagia Blade', 'Lagia Wildfire', 'Lagia Lightning', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL),
(9, 'Brünnhilde', 'Ljósálfar', 'Blushing Dame', 'Titania', 'High Sieglinde', 'Sieglinde', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL),
(10, 'Northern Cross', 'Northern Lights', 'Aurora Blade', 'Barroth Smasher', 'Carapace Blade', 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL),
(11, 'Despot''s Blackstorm', 'Usurper''s Storm', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL),
(12, 'Lagia Wildfire', 'Lagia Lightning', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL),
(13, 'Avidya Great Sword', 'Dark of Night', 'Hidden Blade', 'Brazenwall', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL),
(14, 'Goliath''s Scream', 'Cragscliff', 'Crimsonwall', 'Brazenwall', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL),
(15, 'Ljósálfar', 'Blushing Dame', 'Titania', 'High Sieglinde', 'Sieglinde', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL),
(16, 'Rathalos Gleamsword', 'Rathalos Glinsword', 'Blue Wing', 'Rathalos Flamesword', 'Rathalos Firesword', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL),
(17, 'Cera Cymmetry', 'Cera Cigil', 'Double Diablos', 'Quarrel Hornsword+', 'Quarrel Hornsword', 'Wyvern Jawblade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL),
(18, 'Simoom Sandbiter', 'Simoom Sandbarb', 'Galespike', 'Icicle Fang+', 'Icicle Fang', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL),
(19, 'Excalius Sword', 'Ancharius Sword', 'Viking Hornsword', 'Carapace Blade', 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Northern Lights', 'Aurora Blade', 'Barroth Smasher', 'Carapace Blade', 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Usurper''s Storm', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Lagia Lightning', 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Chrome Quietus', 'Chrome Razor', 'Ravager Blade+', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Devastator Blade', 'Lacerator Blade', 'Ravager Blade+', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Dark of Night', 'Hidden Blade', 'Brazenwall', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Cragscliff', 'Crimsonwall', 'Brazenwall', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Blushing Dame', 'Titania', 'High Sieglinde', 'Sieglinde', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Rathalos Glinsword', 'Blue Wing', 'Rathalos Flamesword', 'Rathalos Firesword', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Myxo Demolisher', 'Demolition Sword', 'Dios Blade+', 'Dios Blade', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Cera Cigil', 'Double Diablos', 'Quarrel Hornsword+', 'Quarrel Hornsword', 'Wyvern Jawblade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Simoom Sandbarb', 'Galespike', 'Icicle Fang+', 'Icicle Fang', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Plesioth Lullabane', 'Plesioth Lullaby', 'Plesioth Watercutter', 'Finblade', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Ancharius Sword', 'Viking Hornsword', 'Carapace Blade', 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Aurora Blade', 'Barroth Smasher', 'Carapace Blade', 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'High Lagia Blade', 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Chrome Razor', 'Ravager Blade+', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Lacerator Blade', 'Ravager Blade+', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Hidden Blade', 'Brazenwall', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Crimsonwall', 'Brazenwall', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Remalgagorgon', 'Remalgalypse', 'Type 41 Wyvernator', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Titania', 'High Sieglinde', 'Sieglinde', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Reddnaught', 'High Siegmund', 'Siegmund', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Pale Kaiser', 'Auberon', 'Siegmund', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Blue Wing', 'Rathalos Flamesword', 'Rathalos Firesword', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Demolition Sword', 'Dios Blade+', 'Dios Blade', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Double Diablos', 'Quarrel Hornsword+', 'Quarrel Hornsword', 'Wyvern Jawblade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Galespike', 'Icicle Fang+', 'Icicle Fang', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Paladire', 'Icicle Fang+', 'Icicle Fang', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Plesioth Lullaby', 'Plesioth Watercutter', 'Finblade', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Plesioth Aquablade', 'Plesioth Watercutter', 'Finblade', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Viking Hornsword', 'Carapace Blade', 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Barroth Smasher', 'Carapace Blade', 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Lagiacrus Blade+', 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Ravager Blade+', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Brazenwall', 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Remalgalypse', 'Type 41 Wyvernator', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'High Sieglinde', 'Sieglinde', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'High Siegmund', 'Siegmund', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Auberon', 'Siegmund', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Blade of Tartarus', 'Blade of Talos', 'Golem Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Rathalos Flamesword', 'Rathalos Firesword', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Dios Blade+', 'Dios Blade', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Quarrel Hornsword+', 'Quarrel Hornsword', 'Wyvern Jawblade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Icicle Fang+', 'Icicle Fang', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Plesioth Watercutter', 'Finblade', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Carapace Blade', 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Lagiacrus Blade', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'High Chief''s Grt Swd', 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Ravager Blade', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'Type 41 Wyvernator', 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Sieglinde', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Siegmund', 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Blade of Talos', 'Golem Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Rathalos Firesword', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'Dios Blade', 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'Quarrel Hornsword', 'Wyvern Jawblade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'Icicle Fang', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'Finblade', 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'Vulca Vendetta', 'Vulcatastrophe', 'Vulcamagnon', 'Vulcanvil', 'Vulcanis+', 'Vulcanis', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'Carapace Sword', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'Chieftain''s Grt Swd', 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'Buster Blade', 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'Valkyrie Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'Golem Blade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'Red Wing', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'Wyvern Jawblade', 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'Cataclysm Blade', 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'Eternal Glyph', 'Elder Monument', 'Ancient Blade', 'Tarnished Great Swd', 'Rusted Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'Vulcatastrophe', 'Vulcamagnon', 'Vulcanvil', 'Vulcanis+', 'Vulcanis', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'Rugged Great Sword', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'Buster Sword+', 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'Giant Jawblade', 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'Cataclysm Sword', 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'Elder Monument', 'Ancient Blade', 'Tarnished Great Swd', 'Rusted Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'Vulcamagnon', 'Vulcanvil', 'Vulcanis+', 'Vulcanis', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'Epitaph Eternal', 'Epitaph Blade', 'Weathered Great Swd', 'Worn Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'Buster Sword', 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'Jawblade', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'Ludroth Bone Sword', 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'Ancient Blade', 'Tarnished Great Swd', 'Rusted Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'Vulcanvil', 'Vulcanis+', 'Vulcanis', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'Lordly Deathcap', 'Roguish Deathcap', 'Wyvern''s Perch', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'Nero''s Anguish', 'Anguish', 'Berserker Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'Altheos Evolutia', 'Alatreon Revolution', 'Alatreon Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'Epitaph Blade', 'Weathered Great Swd', 'Worn Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'Iron Sword+', 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'Bone Blade+', 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'Tarnished Great Swd', 'Rusted Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'Vulcanis+', 'Vulcanis', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'Roguish Deathcap', 'Wyvern''s Perch', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'Tenma no Tsurugi', 'Houma no Tsurugi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'Xiphias Gladius', 'Freezer Speartuna', 'Frozen Speartun', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'Anguish', 'Berserker Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'Alatreon Revolution', 'Alatreon Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'Weathered Great Swd', 'Worn Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'Miasmethyst', 'Amethyst Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'The Depotheosis', 'Megiddo Blaze', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'Merak''s Asterism', 'Eclipse Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'Iron Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'Bone Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'Rusted Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'Vulcanis', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'Frozen Speartuna', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'Wyvern''s Perch', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'Houma no Tsurugi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'Freezer Speartuna', 'Frozen Speartun', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'Lion''s Bane', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'Berserker Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'Alatreon Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'Worn Great Sword', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'Amethyst Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'Anima Reaper', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'Eisenfaust', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'Megiddo Blaze', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'Eclipse Blade', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
