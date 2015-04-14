-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2015 at 11:13 PM
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

use mh4u_app;

-- --------------------------------------------------------

--
-- Table structure for table `dualblades`
--

CREATE TABLE IF NOT EXISTS `dualblades` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Element` varchar(20) NOT NULL,
  `Own` tinyint(1) NOT NULL,
  `Form` varchar(20) NOT NULL,
  `Consumes` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dualblades`
--

INSERT INTO `dualblades` (`Id`, `Name`, `Element`, `Own`, `Form`, `Consumes`) VALUES
(1, 'Weathered Blades', '(DRA)', 0, '', 'Worn Blades'),
(2, 'Worn Blades', 'DRA', 0, 'root', ''),
(3, 'Ventus Vindictus', 'FIR', 0, '', 'Blizzarioths+'),
(4, 'Raider''s Savagery', 'FIR', 0, 'final', 'Ventus Vindictus'),
(5, 'Pirate J Dual Blades', 'FIR', 0, 'root', ''),
(6, 'Great Pirate J Dual Blades', 'FIR', 0, 'final', 'Pirate J Dual Blades'),
(7, 'Matched Slicers', 'ICE', 0, 'root', ''),
(8, 'Matched Slicers+', 'ICE', 0, '', 'Matched Slicers'),
(9, 'Dual Slicers', 'ICE', 0, '', 'Matched Slicers+'),
(10, 'Glutton''s Tools', 'ICE', 0, 'root', ''),
(11, 'Dual Hatchets', 'ICE', 0, '', 'Dual Slicers'),
(12, 'Dual Hatchets+', 'ICE', 0, '', 'Dual Hatchets'),
(13, 'Gorger''s Tools', 'ICE', 0, '', 'Glutton''s Tools');

-- --------------------------------------------------------

--
-- Table structure for table `greatsword`
--

CREATE TABLE IF NOT EXISTS `greatsword` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `attack` int(4) NOT NULL,
  `element` varchar(5) NOT NULL,
  `elementValue` int(4) NOT NULL,
  `form` varchar(20) NOT NULL,
  `sharpness` varchar(20) NOT NULL,
  `slot` int(1) NOT NULL,
  `rare` int(2) NOT NULL,
  `affinity` decimal(2,2) NOT NULL,
  `defense` varchar(6) NOT NULL,
  `consumes` varchar(40) NOT NULL,
  `own` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `greatsword`
--

INSERT INTO `greatsword` (`id`, `name`, `attack`, `element`, `elementValue`, `form`, `sharpness`, `slot`, `rare`, `affinity`, `defense`, `consumes`, `own`) VALUES
(1, 'Iron Sword', 336, '(ICE)', 50, 'root', '', 0, 1, '0.00', '', '', 0),
(2, 'Iron Sword+', 384, '(ICE)', 80, '', '', 0, 1, '0.00', '', 'Iron Sword', 0),
(3, 'Bone Blade', 384, '(POI)', 100, 'root', '', 0, 1, '0.00', '', '', 0),
(4, 'Buster Sword', 432, '(ICE)', 120, '', '', 0, 1, '0.00', '', 'Iron Sword+', 0),
(5, 'Bone Blade+', 432, '(POI)', 130, '', '', 0, 1, '0.00', '', 'Bone Blade', 0),
(6, 'Jawblade', 528, '(POI)', 150, '', '', 0, 1, '0.00', '', 'Bone Blade+', 0),
(7, 'Rugged Great Sword', 528, '(SLE)', 110, '', '', 1, 1, '0.00', '', 'Buster Sword', 0),
(8, 'Ludroth Bone Sword', 528, '(WAT)', 100, '', '', 1, 1, '0.00', '', 'Bone Blade+', 0),
(9, 'Buster Sword+', 528, '(ICE)', 150, '', '', 0, 2, '0.00', '', 'Buster Sword', 0),
(10, 'Giant Jawblade', 576, '(POI)', 200, '', '', 0, 2, '0.00', '', 'Jawblade', 0),
(11, 'Carapace Sword', 576, '(WAT)', 100, '', '', 0, 2, '-0.30', '', 'Rugged Great Sword', 0),
(12, 'Rusted Great Sword', 480, '(DRA)', 100, 'root', '', 0, 3, '-0.70', '', '', 0),
(13, 'Tarnished Great Swd', 480, '(DRA)', 100, '', '', 0, 3, '-0.70', '', 'Rusted Great Sword', 1),
(14, 'Chieftain''s Grt Swd', 576, '(SLE)', 170, '', '', 2, 3, '0.00', '', 'Rugged Great Sword', 0),
(15, 'Buster Blade', 624, '(ICE)', 180, '', '', 0, 3, '0.00', '', 'Buster Sword+', 0),
(16, 'Vulcanis', 624, '(SLI)', 100, 'root', '', 1, 3, '0.00', '', '', 0),
(17, 'Lagiacrus Blade', 624, 'THU', 80, '', '', 1, 3, '0.00', '', 'Chieftain''s Grt Swd', 0),
(18, 'Cataclysm Sword', 624, 'WAT', 100, '', '', 1, 3, '0.00', '', 'Ludroth Bone Sword', 0),
(19, 'Ravager Blade', 672, '(ICE)', 210, '', '', 1, 3, '0.05', 'Def+12', 'Buster Blade', 0),
(20, 'Vulcanis+', 672, '(SLI)', 150, '', '', 1, 3, '0.00', '', 'Vulcanis', 0),
(21, 'Carapace Blade', 672, '(WAT)', 150, '', '', 0, 3, '-0.30', '', 'Carapace Sword', 0),
(22, 'Frozen Speartuna', 672, 'ICE', 380, 'root', '', 0, 3, '0.00', '', '', 0),
(23, 'Valkyrie Blade', 672, 'POI', 100, '', '', 0, 3, '0.00', '', 'Giant Jawblade', 0),
(24, 'Cataclysm Blade', 672, 'WAT', 130, '', '', 1, 3, '0.00', '', 'Cataclysm Sword', 0),
(25, 'Type 41 Wyvernator', 672, 'WAT', 200, '', '', 1, 3, '0.00', 'Def+5', 'Buster Blade', 0),
(26, 'Golem Blade', 720, '(DRA)', 150, '', '', 1, 3, '0.00', '', 'Giant Jawblade', 0),
(27, 'Ancient Blade', 720, 'DRA', 220, '', '', 0, 3, '0.00', '', 'Tarnished Great Swd', 0),
(28, 'Red Wing', 720, 'FIR', 160, '', '', 1, 3, '0.00', '', 'Giant Jawblade', 0),
(29, 'Sieglinde', 720, 'POI', 120, '', '', 1, 3, '0.00', '', 'Valkyrie Blade', 0),
(30, 'Wyvern Jawblade', 720, 'RAW', 0, '', '', 0, 3, '0.00', 'Def+10', 'Giant Jawblade', 0),
(31, 'Siegmund', 768, '(FIR)', 150, '', '', 0, 3, '0.15', '', 'Valkyrie Blade', 0),
(32, 'Wyvern''s Perch', 576, 'POI', 400, 'root', '', 0, 4, '0.00', '', '', 0),
(33, 'Houma no Tsurugi', 672, 'THU', 600, 'root', '', 0, 4, '0.10', 'Def+8', '', 0),
(34, 'Lagiacrus Blade+', 720, 'THU', 130, '', '', 1, 4, '0.00', '', 'Lagiacrus Blade', 0),
(35, 'Ravager Blade+', 768, '(ICE)', 250, '', '', 1, 4, '0.10', 'Def+16', 'Ravager Blade', 0),
(36, 'Vulcanvil', 768, '(SLI)', 200, '', '', 1, 4, '0.00', '', 'Vulcanis+', 0),
(37, 'Rathalos Firesword', 768, 'FIR', 220, '', '', 1, 4, '0.00', '', 'Red Wing', 0),
(38, 'Icicle Fang', 768, 'ICE', 170, '', '', 1, 4, '0.10', '', 'Cataclysm Blade', 0),
(39, 'High Sieglinde', 768, 'POI', 160, '', '', 1, 4, '0.00', '', 'Sieglinde', 0),
(40, 'High Lagia Blade', 768, 'THU', 170, '', '', 1, 4, '0.00', '', 'Lagiacrus Blade+', 0),
(41, 'Viking Hornsword', 768, 'WAT', 250, '', '', 0, 4, '0.00', '', 'Carapace Blade', 0),
(42, 'Remalgalypse', 768, 'WAT', 280, '', '', 2, 4, '0.00', 'Def+10', 'Type 41 Wyvernator', 0),
(43, 'Elder Monument', 816, 'DRA', 300, '', '', 0, 4, '0.00', '', 'Ancient Blade', 0),
(44, 'Finblade', 816, 'WAT', 240, '', '', 1, 4, '0.00', '', 'Cataclysm Blade', 0),
(45, 'Barroth Smasher', 816, 'RAW', 0, '', '', 0, 4, '-0.25', '', 'Carapace Blade', 0),
(46, 'Blade of Talos', 864, '(DRA)', 200, '', '', 1, 4, '0.00', '', 'Golem Blade', 0),
(47, 'Quarrel Hornsword', 864, 'RAW', 0, '', '', 0, 4, '-0.05', 'Def+12', 'Wyvern Jawblade', 0),
(48, 'Brazenwall', 912, '(FIR)', 200, '', '', 1, 4, '0.00', 'Def+20', 'Ravager Blade', 0),
(49, 'Usurper''s Storm', 768, 'THU', 250, '', '', 1, 5, '0.00', '', 'High Lagia Blade', 0),
(50, 'Vulcamagnon', 816, '(SLI)', 250, '', '', 2, 5, '0.00', '', 'Vulcanvil', 0),
(51, 'Freezer Speartuna', 816, 'ICE', 580, '', '', 0, 5, '0.00', '', 'Frozen Speartun', 0),
(52, 'High Siegmund', 864, '(FIR)', 240, '', '', 1, 5, '0.20', '', 'Siegmund', 0),
(53, 'Eternal Glyph', 864, 'DRA', 340, 'final', '', 0, 5, '0.00', '', 'Elder Monument', 0),
(54, 'Rathalos Flamesword', 864, 'FIR', 280, '', '', 1, 5, '0.00', '', 'Rathalos Firesword', 0),
(55, 'Titania', 864, 'POI', 200, '', '', 1, 5, '0.00', '', 'High Sieglinde', 0),
(56, 'Lagia Lightning', 864, 'THU', 210, '', '', 1, 5, '0.00', '', 'High Lagia Blade', 0),
(57, 'High Chief''s Grt Swd', 912, '(SLE)', 220, 'final', '', 3, 5, '0.00', '', 'Chieftain''s Grt Swd', 0),
(58, 'Icicle Fang+', 912, 'ICE', 210, '', '', 1, 5, '0.15', '', 'Icicle Fang', 0),
(59, 'Dios Blade', 912, 'SLI', 200, '', '', 1, 5, '0.00', '', 'Red Wing', 0),
(60, 'Quarrel Hornsword+', 960, 'RAW', 0, '', '', 0, 5, '-0.05', 'Def+15', 'Quarrel Hornsword', 0),
(61, 'Roguish Deathcap', 720, 'POI', 600, '', '', 0, 6, '0.00', '', 'Wyvern''s Perch', 0),
(62, 'Hidden Blade', 864, '(PAR)', 160, '', '', 1, 6, '0.25', '', 'Brazenwall', 0),
(63, 'Despot''s Blackstorm', 864, 'THU', 300, '', '', 1, 6, '0.00', '', 'Usurper''s Storm', 0),
(64, 'Plesioth Watercutter', 864, 'WAT', 300, '', '', 1, 6, '0.00', '', 'Finblade', 0),
(65, 'Galespike', 960, '(WAT)', 420, '', '', 1, 6, '0.20', '', 'Icicle Fang+', 0),
(66, 'Aurora Blade', 960, 'ICE', 350, '', '', 0, 6, '-0.20', '', 'Barroth Smasher', 0),
(67, 'Blushing Dame', 960, 'POI', 240, '', '', 1, 6, '0.00', '', 'Titania', 0),
(68, 'Lagia Wildfire', 960, 'THU', 250, '', '', 2, 6, '0.00', '', 'Lagia Lightning', 0),
(69, 'Lion''s Bane', 1008, '(DRA)', 200, 'final', '', 2, 6, '0.00', '', '', 0),
(70, 'Auberon', 1008, 'DRA', 100, '', '', 2, 6, '0.05', '', 'Siegmund', 0),
(71, 'Blue Wing', 1008, 'FIR', 340, '', '', 1, 6, '0.00', '', 'Rathalos Flamesword', 0),
(72, 'Dios Blade+', 1008, 'SLI', 250, '', '', 1, 6, '0.00', '', 'Dios Blade', 0),
(73, 'Crimsonwall', 1104, '(FIR)', 250, '', '', 1, 6, '0.00', 'Def+25', 'Brazenwall', 0),
(74, 'Berserker Sword', 1152, '(DRA)', 100, 'root', '', 1, 6, '0.00', '', '', 0),
(75, 'Double Diablos', 1152, 'RAW', 0, '', '', 0, 6, '-0.10', 'Def+18', 'Quarrel Hornsword+', 0),
(76, 'Alatreon Great Sword', 864, 'DRA', 300, 'root', '', 0, 7, '0.00', '', '', 0),
(77, 'Ancharius Sword', 1008, 'WAT', 450, '', '', 0, 7, '0.00', '', 'Viking Hornsword', 0),
(78, 'Worn Great Sword', 480, '(DRA)', 100, 'root', '', 0, 8, '-0.70', '', '', 0),
(79, 'Weathered Great Swd', 528, '(DRA)', 100, '', '', 0, 8, '-0.70', '', 'Worn Great Sword', 0),
(80, 'Xiphias Gladius', 912, 'ICE', 730, 'final', '', 0, 8, '0.00', '', 'Freezer Speartuna', 0),
(81, 'Lordly Deathcap', 912, 'POI', 990, 'final', '', 0, 8, '0.00', '', 'Roguish Deathcap', 0),
(82, 'Plesioth Lullaby', 912, 'SLE', 300, '', '', 1, 8, '0.00', '', 'Plesioth Watercutter', 0),
(83, 'Northern Lights', 960, 'ICE', 450, '', '', 0, 8, '-0.15', '', 'Aurora Blade', 0),
(84, 'Amethyst Blade', 960, 'POI', 440, 'root', '', 0, 8, '0.00', '', '', 0),
(85, 'Chrome Razor', 1008, '(POI)', 600, '', '', 2, 8, '0.00', '', 'Ravager Blade+', 0),
(86, 'Vulcatastrophe', 1008, '(SLI)', 400, '', '', 3, 8, '0.00', '', 'Vulcamagnon', 0),
(87, 'Tenma no Tsurugi', 1008, 'THU', 780, 'final', '', 0, 8, '0.15', 'Def+10', 'Houma no Tsurugi', 0),
(88, 'Lacerator Blade', 1056, '(ICE)', 330, '', '', 2, 8, '0.00', '', 'Ravager Blade+', 0),
(89, 'Remalgagorgon', 1056, 'WAT', 400, 'final', '', 3, 8, '0.00', 'Def+15', 'Remalgalypse', 0),
(90, 'Paladire', 1152, 'ICE', 250, 'final', '', 1, 8, '0.20', '', 'Icicle Fang+', 0),
(91, 'Excalius Sword', 1152, 'WAT', 580, 'final', '', 0, 8, '0.00', '', 'Ancharius Sword', 0),
(92, 'Blade of Tartarus', 1344, '(DRA)', 320, 'final', '', 2, 8, '0.00', '', 'Blade of Talos', 0),
(93, 'Epitaph Blade', 960, 'DRA', 550, '', '', 1, 9, '0.00', '', 'Weathered Great Swd', 0),
(94, 'Plesioth Lullabane', 960, 'SLE', 380, 'final', '', 2, 9, '0.00', '', 'Plesioth Lullaby', 0),
(95, 'Oppressor''s Forger', 960, 'THU', 400, '', '', 1, 9, '0.00', '', 'Despot''s Blackstorm', 0),
(96, 'Dark of Night', 1008, '(PAR)', 220, '', '', 1, 9, '0.30', '', 'Hidden Blade', 0),
(97, 'Orcus Tonitrus', 1008, 'THU', 570, '', '', 1, 9, '0.00', '', 'Oppressor''s Forger', 0),
(98, 'Ljósálfar', 1056, 'POI', 300, '', '', 2, 9, '0.00', '', 'Blushing Dame', 0),
(99, 'Anima Reaper', 1104, '(FIR)', 780, 'final', '', 2, 9, '0.00', '', '', 0),
(100, 'Avidya Great Sword', 1104, '(PAR)', 300, 'final', '', 1, 9, '0.40', '', 'Dark of Night', 0),
(101, 'Simoom Sandbarb', 1104, '(WAT)', 620, '', '', 1, 9, '0.25', '', 'Galespike', 0),
(102, 'Brimstren Drakepride', 1104, 'DRA', 400, '', '', 2, 9, '0.00', '', 'Oppressor''s Forger', 0),
(103, 'Rathalos Glinsword', 1104, 'FIR', 400, '', '', 1, 9, '0.00', '', 'Blue Wing', 0),
(104, 'Miasmethyst', 1104, 'POI', 580, 'final', '', 2, 9, '0.00', '', 'Amethyst Blade', 0),
(105, 'Neo Lagia Blade', 1104, 'THU', 310, '', '', 2, 9, '0.00', '', 'Lagia Wildfire', 0),
(106, 'Reddnaught', 1152, '(FIR)', 540, 'final', '', 3, 9, '0.25', '', 'High Siegmund', 0),
(107, 'Chrome Quietus', 1152, '(POI)', 750, 'final', '', 2, 9, '0.00', '', 'Chrome Razor', 0),
(108, 'Vulca Vendetta', 1152, '(SLI)', 620, 'final', '', 3, 9, '0.00', '', 'Vulcatastrophe', 0),
(109, 'Simoom Sandbiter', 1152, '(WAT)', 700, 'final', '', 2, 9, '0.35', '', 'Simoom Sandbarb', 0),
(110, 'Epitaph Eternal', 1152, 'DRA', 700, 'final', '', 1, 9, '0.00', '', 'Epitaph Blade', 0),
(111, 'Northern Cross', 1152, 'ICE', 520, 'final', '', 0, 9, '-0.10', '', 'Northern Lights', 0),
(112, 'Demolition Sword', 1152, 'SLI', 400, '', '', 1, 9, '0.00', '', 'Dios Blade+', 0),
(113, 'Devastator Blade', 1200, '(ICE)', 410, 'final', '', 2, 9, '0.00', '', 'Lacerator Blade', 0),
(114, 'Pale Kaiser', 1200, 'DRA', 320, 'final', '', 3, 9, '0.15', '', 'Auberon', 0),
(115, 'Anguish', 1248, '(DRA)', 200, '', '', 1, 9, '0.00', '', 'Berserker Sword', 0),
(116, 'Myxo Demolisher', 1248, 'SLI', 480, 'final', '', 1, 9, '0.00', '', 'Demolition Sword', 0),
(117, 'Lagia Fulmination', 1248, 'THU', 400, 'final', '', 2, 9, '0.00', '', 'Neo Lagia Blade', 0),
(118, 'Plesioth Aquablade', 1248, 'WAT', 450, 'final', '', 2, 9, '0.00', '', 'Plesioth Watercutter', 0),
(119, 'Cragscliff', 1296, '(FIR)', 310, '', '', 2, 9, '0.00', 'Def+31', 'Crimsonwall', 0),
(120, 'Cera Cigil', 1392, 'RAW', 0, '', '', 0, 9, '-0.20', 'Def+21', 'Double Diablos', 0),
(121, 'Goliath''s Scream', 1440, '(FIR)', 350, 'final', '', 2, 9, '0.00', 'Def+35', 'Cragscliff', 0),
(122, 'Eisenfaust', 1440, 'RAW', 0, 'final', '', 0, 9, '-0.50', '', '', 0),
(123, 'Cera Cymmetry', 1488, 'RAW', 0, 'final', '', 0, 9, '-0.20', 'Def+24', 'Cera Cigil', 0),
(124, 'Megiddo Blaze', 1008, 'FIR', 600, 'root', '', 0, 10, '0.00', '', '', 0),
(125, 'Alatreon Revolution', 1056, 'DRA', 450, '', '', 0, 10, '0.00', '', 'Alatreon Great Sword', 0),
(126, 'The Depotheosis', 1056, 'FIR', 720, 'final', '', 0, 10, '0.00', '', 'Megiddo Blaze', 0),
(127, 'Eclipse Blade', 1056, 'POI', 220, 'root', '', 1, 10, '0.20', '', '', 0),
(128, 'Nether Great Sword', 1104, 'THU', 630, '', '', 1, 10, '0.00', '', 'Orcus Tonitrus', 0),
(129, 'Merak''s Asterism', 1152, 'POI', 280, 'final', '', 1, 10, '0.30', '', 'Eclipse Blade', 0),
(130, 'Nether Lufactrus', 1152, 'THU', 700, 'final', '', 1, 10, '0.00', '', 'Nether Great Sword', 0),
(131, 'Altheos Evolutia', 1200, 'DRA', 580, 'final', '', 0, 10, '0.00', '', 'Alatreon Revolution', 0),
(132, 'Brünnhilde', 1200, 'POI', 380, 'final', '', 3, 10, '0.00', '', 'Ljósálfar', 0),
(133, 'Stygian Acedia', 1248, 'DRA', 480, 'final', '', 2, 10, '0.00', '', 'Brimstren Drakepride', 0),
(134, 'Rathalos Gleamsword', 1248, 'FIR', 520, 'final', '', 1, 10, '0.00', '', 'Rathalos Glinsword', 0),
(135, 'Nero''s Anguish', 1392, '(DRA)', 250, 'final', '', 1, 10, '0.00', '', 'Anguish', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `weapon_types`
--

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
