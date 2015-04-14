-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2015 at 04:30 AM
-- Server version: 5.6.17
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
CREATE DATABASE IF NOT EXISTS `mh4u_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mh4u_app`;

-- --------------------------------------------------------

--
-- Table structure for table `dualblades`
--

DROP TABLE IF EXISTS `dualblades`;
CREATE TABLE IF NOT EXISTS `dualblades` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
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
  `elementSecond` varchar(5) NOT NULL,
  `elementValueSecond` int(4) NOT NULL,
  `own` tinyint(1) NOT NULL,
  `hierarchy` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `dualblades`
--

INSERT INTO `dualblades` (`Id`, `name`, `attack`, `element`, `elementValue`, `form`, `sharpness`, `slot`, `rare`, `affinity`, `defense`, `consumes`, `elementSecond`, `elementValueSecond`, `own`, `hierarchy`) VALUES
(1, 'Weathered Blades', 98, '(DRA)', 100, '', '', 0, 8, '-0.70', '', 'Worn Blades', '', 0, 0, 'Worn Blades'),
(2, 'Worn Blades', 98, '(DRA)', 100, 'r', '', 0, 8, '-0.70', '', '', '', 0, 0, NULL),
(3, 'Ventus Vindictus', 350, '(FIR)', 120, '', '', 3, 9, '0.00', '', 'Blizzarioths+', '', 0, 0, 'Blizzarioths+,Blizzarioths,Snow Sisters,Snow Slicers+,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(4, 'Raider''s Savagery', 378, '(FIR)', 150, 'f', '', 3, 9, '0.00', '', 'Ventus Vindictus', '', 0, 0, 'Ventus Vindictus,Blizzarioths+,Blizzarioths,Snow Sisters,Snow Slicers+,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(5, 'Pirate J Dual Blades', 224, '(FIR)', 280, 'r', '', 2, 5, '0.00', '', '', '', 0, 0, NULL),
(6, 'Great Pirate J Dual Blades', 308, '(FIR)', 380, 'f', '', 2, 9, '0.20', '', 'Pirate J Dual Blades', '', 0, 0, 'Pirate J Dual Blades'),
(7, 'Matched Slicers', 98, '(ICE)', 50, 'r', '', 0, 1, '0.00', '', '', '', 0, 0, NULL),
(8, 'Matched Slicers+', 112, '(ICE)', 50, '', '', 0, 1, '0.00', '', 'Matched Slicers', '', 0, 0, 'Matched Slicers'),
(9, 'Dual Slicers', 140, '(ICE)', 50, '', '', 0, 1, '0.00', '', 'Matched Slicers+', '', 0, 0, 'Matched Slicers+,Matched Slicers'),
(10, 'Glutton''s Tools', 140, '(ICE)', 50, 'r', '', 0, 2, '0.00', '', '', '', 0, 0, NULL),
(11, 'Dual Hatchets', 154, '(ICE)', 80, '', '', 0, 2, '0.00', '', 'Dual Slicers', '', 0, 0, 'Dual Slicers,Matched Slicers+,Matched Slicers'),
(12, 'Dual Hatchets+', 168, '(ICE)', 80, '', '', 0, 3, '0.00', '', 'Dual Hatchets', '', 0, 0, 'Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(13, 'Gorger''s Tools', 168, '(ICE)', 100, '', '', 2, 3, '0.00', '', 'Glutton''s Tools', '', 0, 0, 'Glutton''s Tools'),
(14, 'Dual Cleavers+', 182, '(ICE)', 100, '', '', 0, 3, '0.00', '', 'Dual Hatchets+', '', 0, 0, 'Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(15, 'Hurricane', 196, '(ICE)', 100, '', '', 0, 4, '0.00', '', 'Dual Cleavers+', '', 0, 0, 'Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(16, 'Hurricane+', 252, '(ICE)', 120, '', '', 2, 5, '0.00', '', 'Hurricane', '', 0, 0, 'Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(17, 'Cyclone', 294, '(ICE)', 140, '', '', 2, 6, '0.00', '', 'Hurricane+', '', 0, 0, 'Hurricane+,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(18, 'Stewbry Stirfoils', 224, '(ICE)', 180, '', '', 3, 5, '0.00', 'Def+13', 'Gorger''s Tools', '', 0, 0, 'Gorger''s Tools,Glutton''s Tools'),
(19, 'Tornado Hatchets', 308, '(ICE)', 200, '', '', 2, 8, '0.00', '', 'Cyclone', '', 0, 0, 'Cyclone,Hurricane+,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(20, 'Deepshake Frybakers', 280, '(ICE)', 220, 'f', '', 3, 6, '0.00', 'Def+18', 'Stewbry Stirfoils', '', 0, 0, 'Stewbry Stirfoils,Gorger''s Tools,Glutton''s Tools'),
(21, 'Typhoon', 350, '(ICE)', 250, 'f', '', 2, 8, '0.00', '', 'Tornado Hatchets', '', 0, 0, 'Tornado Hatchets,Cyclone,Hurricane+,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(22, 'Hidden Gemini', 252, '(PAR)', 50, '', '', 0, 6, '0.10', '', 'Double Droth', '', 0, 0, 'Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(23, 'Night Wings', 266, '(PAR)', 70, '', '', 0, 6, '0.15', '', 'Hidden Gemini', '', 0, 0, 'Hidden Gemini,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(24, 'Virnar Slicers', 294, '(PAR)', 90, '', '', 1, 9, '0.30', '', 'Night Wings', '', 0, 0, 'Night Wings,Hidden Gemini,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(25, 'Midnight Blackwings', 308, '(PAR)', 110, 'f', '', 1, 9, '0.40', '', 'Virnar Slicers', '', 0, 0, 'Virnar Slicers,Night Wings,Hidden Gemini,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(26, 'Bone Scythes', 112, '(POI)', 80, 'r', '', 0, 1, '0.00', '', '', '', 0, 0, NULL),
(27, 'Bone Scythes+', 126, '(POI)', 100, '', '', 0, 1, '0.00', '', 'Bone Scythes', '', 0, 0, 'Bone Scythes'),
(28, 'Chief''s Scythes', 154, '(POI)', 130, '', '', 0, 1, '0.00', '', 'Bone Scythes+', '', 0, 0, 'Bone Scythes+,Bone Scythes'),
(29, 'Jaggid Shotels', 154, '(POI)', 150, '', '', 0, 1, '0.00', '', 'Matched Slicers+', '', 0, 0, 'Matched Slicers+,Matched Slicers'),
(30, 'Jaggid Shotels+', 168, '(POI)', 170, '', '', 0, 2, '0.00', '', 'Jaggid Shotels', '', 0, 0, 'Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(31, 'Leader''s Shotels', 182, '(POI)', 200, '', '', 0, 3, '0.00', '', 'Jaggid Shotels+', '', 0, 0, 'Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(32, 'Bushido', 392, '(SLI)', 180, 'f', '', 3, 10, '-0.10', 'Def+10', '', '', 0, 0, NULL),
(33, 'Type 51 Macerators', 252, '(WAT)', 200, '', '', 2, 5, '0.00', 'Def+20', 'Twin Chainsaws+', '', 0, 0, 'Twin Chainsaws+,Twin Chainsaws,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(34, 'Deathsnarfs', 280, '(WAT)', 230, '', '', 2, 6, '0.00', 'Def+25', 'Type 51 Macerators', '', 0, 0, 'Type 51 Macerators,Twin Chainsaws+,Twin Chainsaws,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(35, 'Uber Deathsnarfs', 336, '(WAT)', 280, 'f', '', 3, 8, '0.00', 'Def+30', 'Deathsnarfs', '', 0, 0, 'Deathsnarfs,Type 51 Macerators,Twin Chainsaws+,Twin Chainsaws,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(36, 'Insecticutters', 168, 'DRA', 50, '', '', 0, 3, '0.00', '', 'Dual Hatchets', '', 0, 0, 'Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(37, 'Insecticutters+', 196, 'DRA', 80, '', '', 0, 3, '0.00', '', 'Insecticutters', '', 0, 0, 'Insecticutters,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(38, 'Insectirippers', 238, 'DRA', 100, '', '', 1, 4, '0.00', '', 'Insecticutters+', '', 0, 0, 'Insecticutters+,Insecticutters,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(39, 'Wrath & Rancor', 266, 'DRA', 100, 'r', '', 0, 6, '0.05', '', '', '', 0, 0, NULL),
(40, 'Wrathful Predation', 322, 'DRA', 140, '', '', 0, 8, '0.10', '', 'Wrath & Rancor', '', 0, 0, 'Wrath & Rancor'),
(41, 'Insectiscythes', 294, 'DRA', 150, '', '', 2, 8, '0.00', '', 'Insectirippers', '', 0, 0, 'Insectirippers,Insecticutters+,Insecticutters,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(42, 'Nero''s Wrath', 364, 'DRA', 160, 'f', '', 0, 9, '0.10', '', 'Wrathful Predation', '', 0, 0, 'Wrathful Predation,Wrath & Rancor'),
(43, 'Entomotheos', 322, 'DRA', 200, 'f', '', 2, 8, '0.00', '', 'Insectiscythes', '', 0, 0, 'Insectiscythes,Insectirippers,Insecticutters+,Insecticutters,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(44, 'Enduring Schism', 168, 'DRA', 420, '', '', 3, 9, '0.00', '', 'Weathered Blades', '', 0, 0, 'Weathered Blades,Worn Blades'),
(45, 'Enduring Sacrifice', 182, 'DRA', 480, 'f', '', 3, 9, '0.00', '', 'Enduring Schism', '', 0, 0, 'Enduring Schism,Weathered Blades,Worn Blades'),
(46, 'Brother Flames', 210, 'FIR', 120, '', '', 1, 3, '0.00', '', 'Bloodwings', '', 0, 0, 'Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(47, 'Brother Blazes', 238, 'FIR', 140, '', '', 1, 4, '0.00', '', 'Brother Flames', '', 0, 0, 'Brother Flames,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(48, 'Dichotomy', 322, 'FIR', 140, '', '', 1, 9, '0.00', '', 'Ignis Noire', '', 0, 0, 'Ignis Noire,Salamanders,Flamestorm+,Flamestorm,Leader''s Shotels,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(49, 'Elemenders', 350, 'FIR', 150, 'f', '', 1, 9, '0.00', '', 'Dichotomy', '', 0, 0, 'Dichotomy,Ignis Noire,Salamanders,Flamestorm+,Flamestorm,Leader''s Shotels,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(50, 'Wyvern Lovers', 308, 'FIR', 160, '', '', 1, 6, '0.00', '', 'Brother Blazes', '', 0, 0, 'Brother Blazes,Brother Flames,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(51, 'Flamestorm', 196, 'FIR', 200, '', '', 0, 3, '0.10', '', 'Leader''s Shotels', '', 0, 0, 'Leader''s Shotels,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(52, 'Wyvern Strife', 336, 'FIR', 200, '', '', 1, 10, '0.00', '', 'Wyvern Lovers', '', 0, 0, 'Wyvern Lovers,Brother Blazes,Brother Flames,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(53, 'Flamestorm+', 238, 'FIR', 230, '', '', 0, 5, '0.10', '', 'Flamestorm', '', 0, 0, 'Flamestorm,Leader''s Shotels,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(54, 'Wyvern Conciliation', 364, 'FIR', 230, 'f', '', 1, 10, '0.00', '', 'Wyvern Strife', '', 0, 0, 'Wyvern Strife,Wyvern Lovers,Brother Blazes,Brother Flames,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(55, 'Salamanders', 252, 'FIR', 260, '', '', 0, 6, '0.15', '', 'Flamestorm+', '', 0, 0, 'Flamestorm+,Flamestorm,Leader''s Shotels,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(56, 'Ignis Noire', 294, 'FIR', 300, '', '', 0, 9, '0.15', '', 'Salamanders', '', 0, 0, 'Salamanders,Flamestorm+,Flamestorm,Leader''s Shotels,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(57, 'Agnaktor Inferno', 322, 'FIR', 340, 'f', '', 0, 9, '0.15', '', 'Ignis Noire', '', 0, 0, 'Ignis Noire,Salamanders,Flamestorm+,Flamestorm,Leader''s Shotels,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(58, 'Megiddo Nova', 252, 'FIR', 400, 'r', '', 0, 10, '0.00', '', '', '', 0, 0, NULL),
(59, 'The Fistolution', 280, 'FIR', 450, 'f', '', 0, 10, '0.00', '', 'Megiddo Nova', '', 0, 0, 'Megiddo Nova'),
(60, 'Snow Slicers', 168, 'ICE', 120, '', '', 0, 3, '0.00', '', 'Chief''s Scythes', '', 0, 0, 'Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(61, 'Snow Slicers+', 182, 'ICE', 140, '', '', 0, 3, '0.00', '', 'Snow Slicers', '', 0, 0, 'Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(62, 'Snow Sisters', 210, 'ICE', 160, '', '', 0, 4, '0.00', '', 'Snow Slicers+', '', 0, 0, 'Snow Slicers+,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(63, 'Blizzarioths', 266, 'ICE', 180, '', '', 0, 5, '0.10', '', 'Snow Sisters', '', 0, 0, 'Snow Sisters,Snow Slicers+,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(64, 'Blizzarioths+', 294, 'ICE', 200, '', '', 0, 6, '0.20', '', 'Blizzarioths', '', 0, 0, 'Blizzarioths,Snow Sisters,Snow Slicers+,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(65, 'Raider''s Icecarvers', 322, 'ICE', 220, 'f', '', 0, 8, '0.25', '', 'Blizzarioths+', '', 0, 0, 'Blizzarioths+,Blizzarioths,Snow Sisters,Snow Slicers+,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(66, 'Gobul Stunprongs', 210, 'PAR', 150, '', '', 0, 4, '0.00', '', 'Insecticutters+', '', 0, 0, 'Insecticutters+,Insecticutters,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(67, 'Gobul Stunprongs+', 252, 'PAR', 170, '', '', 0, 5, '0.00', '', 'Gobul Stunprongs', '', 0, 0, 'Gobul Stunprongs,Insecticutters+,Insecticutters,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(68, 'Plegion Stunsword', 308, 'PAR', 190, 'f', '', 0, 8, '0.00', '', 'Gobul Stunprongs+', '', 0, 0, 'Gobul Stunprongs+,Gobul Stunprongs,Insecticutters+,Insecticutters,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(69, 'Shaka Scarecrows', 168, 'PAR', 200, 'r', '', 1, 4, '0.00', '', '', '', 0, 0, NULL),
(70, 'Chum Scarecrows', 182, 'PAR', 220, '', '', 2, 5, '0.00', '', 'Shaka Scarecrows', '', 0, 0, 'Shaka Scarecrows'),
(71, 'Chum-Chum Scarecrows', 196, 'PAR', 250, 'f', '', 3, 8, '0.00', '', 'Chum Scarecrows', '', 0, 0, 'Chum Scarecrows,Shaka Scarecrows'),
(72, 'Eclipse Slicers', 322, 'POI', 150, '', '', 0, 10, '0.20', '', 'Virnar Slicers', '', 0, 0, 'Virnar Slicers,Night Wings,Hidden Gemini,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(73, 'Bloodwings', 182, 'POI', 160, '', '', 0, 3, '0.00', '', 'Ludroth Pair', '', 0, 0, 'Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(74, 'Alkaid''s Asterism', 350, 'POI', 180, 'f', '', 0, 10, '0.20', '', 'Eclipse Slicers', '', 0, 0, 'Eclipse Slicers,Virnar Slicers,Night Wings,Hidden Gemini,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(75, 'Bloodwings+', 196, 'POI', 200, '', '', 0, 3, '0.00', '', 'Bloodwings', '', 0, 0, 'Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(76, 'Venom Wings', 252, 'POI', 250, '', '', 0, 5, '0.00', '', 'Bloodwings+', '', 0, 0, 'Bloodwings+,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(77, 'Grimgrim Wings', 294, 'POI', 280, '', '', 1, 8, '0.00', '', 'Venom Wings', '', 0, 0, 'Venom Wings,Bloodwings+,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(78, 'Grimmest Noxwings', 322, 'POI', 320, 'f', '', 2, 9, '0.00', '', 'Grimgrim Wings', '', 0, 0, 'Grimgrim Wings,Venom Wings,Bloodwings+,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(79, 'Jade Plesioth Fans', 266, 'SLE', 170, '', '', 1, 8, '0.00', '', 'Plesioth Machetes', '', 0, 0, 'Plesioth Machetes,Plesioth Cutlasses+,Plesioth Cutlasses,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(80, 'Jade Battlefanzers', 280, 'SLE', 200, 'f', '', 2, 9, '0.00', '', 'Jade Plesioth Fans', '', 0, 0, 'Jade Plesioth Fans,Plesioth Machetes,Plesioth Cutlasses+,Plesioth Cutlasses,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(81, 'Dios Slicers', 266, 'SLI', 170, '', '', 0, 5, '0.00', '', 'Hurricane', '', 0, 0, 'Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(82, 'Dios Slicers+', 308, 'SLI', 200, '', '', 0, 6, '0.00', '', 'Dios Slicers', '', 0, 0, 'Dios Slicers,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(83, 'Demolition Blades', 336, 'SLI', 230, '', '', 0, 9, '0.00', '', 'Dios Slicers+', '', 0, 0, 'Dios Slicers+,Dios Slicers,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(84, 'Spectral Demolisher', 364, 'SLI', 270, 'f', '', 0, 9, '0.00', '', 'Demolition Blades', '', 0, 0, 'Demolition Blades,Dios Slicers+,Dios Slicers,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(85, 'Twin Chainsaws', 196, 'THU', 70, '', '', 0, 3, '0.00', '', 'Dual Hatchets+', '', 0, 0, 'Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(86, 'Twin Chainsaws+', 210, 'THU', 90, '', '', 1, 4, '0.00', '', 'Twin Chainsaws', '', 0, 0, 'Twin Chainsaws,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(87, 'Twin Acrus', 182, 'THU', 100, '', '', 0, 3, '0.00', '', 'Jaggid Shotels+', '', 0, 0, 'Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(88, 'Twin Acrus+', 224, 'THU', 110, '', '', 0, 4, '0.00', '', 'Twin Acrus', '', 0, 0, 'Twin Acrus,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(89, 'Guillotines', 238, 'THU', 110, '', '', 1, 5, '0.00', '', 'Twin Chainsaws+', '', 0, 0, 'Twin Chainsaws+,Twin Chainsaws,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(90, 'Golem''s Saws', 280, 'THU', 130, '', '', 1, 8, '0.00', '', 'Guillotines', '', 0, 0, 'Guillotines,Twin Chainsaws+,Twin Chainsaws,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(91, 'Levin Acrus', 308, 'THU', 130, '', '', 0, 6, '0.00', '', 'Twin Acrus+', '', 0, 0, 'Twin Acrus+,Twin Acrus,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(92, 'Usurper''s Fulgur', 266, 'THU', 150, '', '', 0, 5, '0.00', '', 'Double Droth', '', 0, 0, 'Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(93, 'Golem''s Maneaters', 322, 'THU', 150, 'f', '', 2, 8, '0.00', '', 'Golem''s Saws', '', 0, 0, 'Golem''s Saws,Guillotines,Twin Chainsaws+,Twin Chainsaws,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(94, 'Neo Twin Acrus', 336, 'THU', 150, '', '', 0, 9, '0.00', '', 'Levin Acrus', '', 0, 0, 'Levin Acrus,Twin Acrus+,Twin Acrus,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(95, 'Neo Acrus Whitebolt', 364, 'THU', 180, 'f', '', 0, 9, '0.00', '', 'Neo Twin Acrus', '', 0, 0, 'Neo Twin Acrus,Levin Acrus,Twin Acrus+,Twin Acrus,Jaggid Shotels+,Jaggid Shotels,Matched Slicers+,Matched Slicers'),
(96, 'Boltgeist', 252, 'THU', 200, '', '', 1, 5, '0.00', '', 'Bloodwings+', '', 0, 0, 'Bloodwings+,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(97, 'Brimstren Drakeclaws', 294, 'THU', 200, '', '', 1, 9, '0.00', '', 'Despot''s Blitz', '', 0, 0, 'Despot''s Blitz,Usurper''s Fulgur,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(98, 'Despot''s Blitz', 294, 'THU', 220, '', '', 0, 6, '0.00', '', 'Usurper''s Fulgur', '', 0, 0, 'Usurper''s Fulgur,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(99, 'Stygian Superbia', 336, 'THU', 240, 'f', '', 1, 9, '0.00', '', 'Brimstren Drakeclaws', '', 0, 0, 'Brimstren Drakeclaws,Despot''s Blitz,Usurper''s Fulgur,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(100, 'Double Boltwings', 280, 'THU', 270, '', '', 2, 8, '0.00', '', 'Boltgeist', '', 0, 0, 'Boltgeist,Bloodwings+,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(101, 'Oppressor''s Miracle', 308, 'THU', 270, '', '', 0, 9, '0.00', '', 'Despot''s Blitz', '', 0, 0, 'Despot''s Blitz,Usurper''s Fulgur,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(102, 'Double Deathbolts', 294, 'THU', 300, 'f', '', 3, 9, '0.00', '', 'Double Boltwings', '', 0, 0, 'Double Boltwings,Boltgeist,Bloodwings+,Bloodwings,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(103, 'Nether Twinblades', 322, 'THU', 310, '', '', 0, 10, '0.10', '', 'Oppressor''s Miracle', '', 0, 0, 'Oppressor''s Miracle,Despot''s Blitz,Usurper''s Fulgur,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(104, 'Nether Confidants', 336, 'THU', 360, 'f', '', 0, 10, '0.10', '', 'Nether Twinblades', '', 0, 0, 'Nether Twinblades,Oppressor''s Miracle,Despot''s Blitz,Usurper''s Fulgur,Double Droth,Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(105, 'Sworn Rapiers', 238, 'WAT', 70, '', '', 0, 4, '0.00', '', 'Hurricane', '', 0, 0, 'Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(106, 'Sworn Rapiers+', 266, 'WAT', 90, '', '', 0, 5, '0.00', '', 'Sworn Rapiers', '', 0, 0, 'Sworn Rapiers,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(107, 'Holy Sabers', 294, 'WAT', 110, '', '', 0, 6, '0.00', '', 'Sworn Rapiers+', '', 0, 0, 'Sworn Rapiers+,Sworn Rapiers,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(108, 'Ludroth Pair', 168, 'WAT', 120, '', '', 0, 2, '0.00', '', 'Chief''s Scythes', '', 0, 0, 'Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(109, 'Mercury Edges', 224, 'WAT', 120, 'r', '', 0, 4, '0.00', '', '', '', 0, 0, NULL),
(110, 'Guild Knight Sabers', 322, 'WAT', 130, '', '', 0, 8, '0.00', '', 'Holy Sabers', '', 0, 0, 'Holy Sabers,Sworn Rapiers+,Sworn Rapiers,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(111, 'Ludroth Pair+', 182, 'WAT', 150, '', '', 0, 3, '0.00', '', 'Ludroth Pair', '', 0, 0, 'Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(112, 'Master Sabers', 350, 'WAT', 150, 'f', '', 0, 9, '0.00', '', 'Guild Knight Sabers', '', 0, 0, 'Guild Knight Sabers,Holy Sabers,Sworn Rapiers+,Sworn Rapiers,Hurricane,Dual Cleavers+,Dual Hatchets+,Dual Hatchets,Dual Slicers,Matched Slicers+,Matched Slicers'),
(113, 'Neptune Edges', 308, 'WAT', 160, '', '', 0, 6, '0.00', '', 'Mercury Edges', '', 0, 0, 'Mercury Edges'),
(114, 'Double Droth', 196, 'WAT', 200, '', '', 0, 4, '0.00', '', 'Ludroth Pair+', '', 0, 0, 'Ludroth Pair+,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(115, 'Pelagic Deublades', 364, 'WAT', 200, 'f', '', 0, 9, '0.05', '', 'Neptune Edges', '', 0, 0, 'Neptune Edges,Mercury Edges'),
(116, 'Plesioth Cutlasses', 210, 'WAT', 230, '', '', 0, 4, '0.00', '', 'Ludroth Pair', '', 0, 0, 'Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(117, 'Plesioth Cutlasses+', 238, 'WAT', 270, '', '', 0, 5, '0.00', '', 'Plesioth Cutlasses', '', 0, 0, 'Plesioth Cutlasses,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(118, 'Plesioth Machetes', 266, 'WAT', 300, '', '', 0, 6, '0.00', '', 'Plesioth Cutlasses+', '', 0, 0, 'Plesioth Cutlasses+,Plesioth Cutlasses,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(119, 'Verdant Slashers', 294, 'WAT', 360, '', '', 1, 8, '0.00', '', 'Plesioth Machetes', '', 0, 0, 'Plesioth Machetes,Plesioth Cutlasses+,Plesioth Cutlasses,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(120, 'Alluvion Slashers', 336, 'WAT', 420, 'f', '', 1, 9, '0.00', '', 'Verdant Slashers', '', 0, 0, 'Verdant Slashers,Plesioth Machetes,Plesioth Cutlasses+,Plesioth Cutlasses,Ludroth Pair,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(121, 'Diablos Bashers', 252, 'RAW', 0, '', '', 0, 3, '-0.20', '', 'Snow Slicers', '', 0, 0, 'Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(122, 'Diablos Bashers+', 308, 'RAW', 0, '', '', 0, 4, '-0.20', '', 'Diablos Bashers', '', 0, 0, 'Diablos Bashers,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(123, 'Diablos Mashers', 336, 'RAW', 0, '', '', 1, 5, '-0.30', '', 'Diablos Bashers+', '', 0, 0, 'Diablos Bashers+,Diablos Bashers,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(124, 'Diablos Sinidex', 406, 'RAW', 0, '', '', 1, 9, '-0.30', '', 'Diablos Mashers', '', 0, 0, 'Diablos Mashers,Diablos Bashers+,Diablos Bashers,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes'),
(125, 'Sinistrus Dextraos', 434, 'RAW', 0, 'f', '', 1, 9, '-0.30', '', 'Diablos Sinidex', '', 0, 0, 'Diablos Sinidex,Diablos Mashers,Diablos Bashers+,Diablos Bashers,Snow Slicers,Chief''s Scythes,Bone Scythes+,Bone Scythes');

-- --------------------------------------------------------

--
-- Table structure for table `greatsword`
--

DROP TABLE IF EXISTS `greatsword`;
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
  `hierarchy` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `greatsword`
--

INSERT INTO `greatsword` (`id`, `name`, `attack`, `element`, `elementValue`, `form`, `sharpness`, `slot`, `rare`, `affinity`, `defense`, `consumes`, `own`, `hierarchy`) VALUES
(1, 'Iron Sword', 336, '(ICE)', 50, 'root', '', 0, 1, '0.00', '', '', 0, NULL),
(2, 'Iron Sword+', 384, '(ICE)', 80, '', '', 0, 1, '0.00', '', 'Iron Sword', 0, 'Iron Sword'),
(3, 'Bone Blade', 384, '(POI)', 100, 'root', '', 0, 1, '0.00', '', '', 0, NULL),
(4, 'Buster Sword', 432, '(ICE)', 120, '', '', 0, 1, '0.00', '', 'Iron Sword+', 0, 'Iron Sword+,Iron Sword'),
(5, 'Bone Blade+', 432, '(POI)', 130, '', '', 0, 1, '0.00', '', 'Bone Blade', 0, 'Bone Blade'),
(6, 'Jawblade', 528, '(POI)', 150, '', '', 0, 1, '0.00', '', 'Bone Blade+', 0, 'Bone Blade+,Bone Blade'),
(7, 'Rugged Great Sword', 528, '(SLE)', 110, '', '', 1, 1, '0.00', '', 'Buster Sword', 0, 'Buster Sword,Iron Sword+,Iron Sword'),
(8, 'Ludroth Bone Sword', 528, '(WAT)', 100, '', '', 1, 1, '0.00', '', 'Bone Blade+', 0, 'Bone Blade+,Bone Blade'),
(9, 'Buster Sword+', 528, '(ICE)', 150, '', '', 0, 2, '0.00', '', 'Buster Sword', 0, 'Buster Sword,Iron Sword+,Iron Sword'),
(10, 'Giant Jawblade', 576, '(POI)', 200, '', '', 0, 2, '0.00', '', 'Jawblade', 0, 'Jawblade,Bone Blade+,Bone Blade'),
(11, 'Carapace Sword', 576, '(WAT)', 100, '', '', 0, 2, '-0.30', '', 'Rugged Great Sword', 0, 'Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(12, 'Rusted Great Sword', 480, '(DRA)', 100, 'root', '', 0, 3, '-0.70', '', '', 0, NULL),
(13, 'Tarnished Great Swd', 480, '(DRA)', 100, '', '', 0, 3, '-0.70', '', 'Rusted Great Sword', 0, 'Rusted Great Sword'),
(14, 'Chieftain''s Grt Swd', 576, '(SLE)', 170, '', '', 2, 3, '0.00', '', 'Rugged Great Sword', 0, 'Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(15, 'Buster Blade', 624, '(ICE)', 180, '', '', 0, 3, '0.00', '', 'Buster Sword+', 0, 'Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(16, 'Vulcanis', 624, '(SLI)', 100, 'root', '', 1, 3, '0.00', '', '', 0, NULL),
(17, 'Lagiacrus Blade', 624, 'THU', 80, '', '', 1, 3, '0.00', '', 'Chieftain''s Grt Swd', 0, 'Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(18, 'Cataclysm Sword', 624, 'WAT', 100, '', '', 1, 3, '0.00', '', 'Ludroth Bone Sword', 0, 'Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(19, 'Ravager Blade', 672, '(ICE)', 210, '', '', 1, 3, '0.05', 'Def+12', 'Buster Blade', 0, 'Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(20, 'Vulcanis+', 672, '(SLI)', 150, '', '', 1, 3, '0.00', '', 'Vulcanis', 0, 'Vulcanis'),
(21, 'Carapace Blade', 672, '(WAT)', 150, '', '', 0, 3, '-0.30', '', 'Carapace Sword', 0, 'Carapace Sword,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(22, 'Frozen Speartuna', 672, 'ICE', 380, 'root', '', 0, 3, '0.00', '', '', 0, NULL),
(23, 'Valkyrie Blade', 672, 'POI', 100, '', '', 0, 3, '0.00', '', 'Giant Jawblade', 0, 'Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(24, 'Cataclysm Blade', 672, 'WAT', 130, '', '', 1, 3, '0.00', '', 'Cataclysm Sword', 0, 'Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(25, 'Type 41 Wyvernator', 672, 'WAT', 200, '', '', 1, 3, '0.00', 'Def+5', 'Buster Blade', 0, 'Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(26, 'Golem Blade', 720, '(DRA)', 150, '', '', 1, 3, '0.00', '', 'Giant Jawblade', 0, 'Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(27, 'Ancient Blade', 720, 'DRA', 220, '', '', 0, 3, '0.00', '', 'Tarnished Great Swd', 0, 'Tarnished Great Swd,Rusted Great Sword'),
(28, 'Red Wing', 720, 'FIR', 160, '', '', 1, 3, '0.00', '', 'Giant Jawblade', 0, 'Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(29, 'Sieglinde', 720, 'POI', 120, '', '', 1, 3, '0.00', '', 'Valkyrie Blade', 0, 'Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(30, 'Wyvern Jawblade', 720, 'RAW', 0, '', '', 0, 3, '0.00', 'Def+10', 'Giant Jawblade', 0, 'Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(31, 'Siegmund', 768, '(FIR)', 150, '', '', 0, 3, '0.15', '', 'Valkyrie Blade', 0, 'Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(32, 'Wyvern''s Perch', 576, 'POI', 400, 'root', '', 0, 4, '0.00', '', '', 0, NULL),
(33, 'Houma no Tsurugi', 672, 'THU', 600, 'root', '', 0, 4, '0.10', 'Def+8', '', 0, NULL),
(34, 'Lagiacrus Blade+', 720, 'THU', 130, '', '', 1, 4, '0.00', '', 'Lagiacrus Blade', 0, 'Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(35, 'Ravager Blade+', 768, '(ICE)', 250, '', '', 1, 4, '0.10', 'Def+16', 'Ravager Blade', 0, 'Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(36, 'Vulcanvil', 768, '(SLI)', 200, '', '', 1, 4, '0.00', '', 'Vulcanis+', 0, 'Vulcanis+,Vulcanis'),
(37, 'Rathalos Firesword', 768, 'FIR', 220, '', '', 1, 4, '0.00', '', 'Red Wing', 0, 'Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(38, 'Icicle Fang', 768, 'ICE', 170, '', '', 1, 4, '0.10', '', 'Cataclysm Blade', 0, 'Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(39, 'High Sieglinde', 768, 'POI', 160, '', '', 1, 4, '0.00', '', 'Sieglinde', 0, 'Sieglinde,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(40, 'High Lagia Blade', 768, 'THU', 170, '', '', 1, 4, '0.00', '', 'Lagiacrus Blade+', 0, 'Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(41, 'Viking Hornsword', 768, 'WAT', 250, '', '', 0, 4, '0.00', '', 'Carapace Blade', 0, 'Carapace Blade,Carapace Sword,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(42, 'Remalgalypse', 768, 'WAT', 280, '', '', 2, 4, '0.00', 'Def+10', 'Type 41 Wyvernator', 0, 'Type 41 Wyvernator,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(43, 'Elder Monument', 816, 'DRA', 300, '', '', 0, 4, '0.00', '', 'Ancient Blade', 0, 'Ancient Blade,Tarnished Great Swd,Rusted Great Sword'),
(44, 'Finblade', 816, 'WAT', 240, '', '', 1, 4, '0.00', '', 'Cataclysm Blade', 0, 'Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(45, 'Barroth Smasher', 816, 'RAW', 0, '', '', 0, 4, '-0.25', '', 'Carapace Blade', 0, 'Carapace Blade,Carapace Sword,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(46, 'Blade of Talos', 864, '(DRA)', 200, '', '', 1, 4, '0.00', '', 'Golem Blade', 0, 'Golem Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(47, 'Quarrel Hornsword', 864, 'RAW', 0, '', '', 0, 4, '-0.05', 'Def+12', 'Wyvern Jawblade', 0, 'Wyvern Jawblade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(48, 'Brazenwall', 912, '(FIR)', 200, '', '', 1, 4, '0.00', 'Def+20', 'Ravager Blade', 0, 'Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(49, 'Usurper''s Storm', 768, 'THU', 250, '', '', 1, 5, '0.00', '', 'High Lagia Blade', 0, 'High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(50, 'Vulcamagnon', 816, '(SLI)', 250, '', '', 2, 5, '0.00', '', 'Vulcanvil', 0, 'Vulcanvil,Vulcanis+,Vulcanis'),
(51, 'Freezer Speartuna', 816, 'ICE', 580, '', '', 0, 5, '0.00', '', 'Frozen Speartun', 0, 'Frozen Speartu'),
(52, 'High Siegmund', 864, '(FIR)', 240, '', '', 1, 5, '0.20', '', 'Siegmund', 0, 'Siegmund,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(53, 'Eternal Glyph', 864, 'DRA', 340, 'final', '', 0, 5, '0.00', '', 'Elder Monument', 0, 'Elder Monument,Ancient Blade,Tarnished Great Swd,Rusted Great Sword'),
(54, 'Rathalos Flamesword', 864, 'FIR', 280, '', '', 1, 5, '0.00', '', 'Rathalos Firesword', 0, 'Rathalos Firesword,Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(55, 'Titania', 864, 'POI', 200, '', '', 1, 5, '0.00', '', 'High Sieglinde', 0, 'High Sieglinde,Sieglinde,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(56, 'Lagia Lightning', 864, 'THU', 210, '', '', 1, 5, '0.00', '', 'High Lagia Blade', 0, 'High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(57, 'High Chief''s Grt Swd', 912, '(SLE)', 220, 'final', '', 3, 5, '0.00', '', 'Chieftain''s Grt Swd', 0, 'Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(58, 'Icicle Fang+', 912, 'ICE', 210, '', '', 1, 5, '0.15', '', 'Icicle Fang', 0, 'Icicle Fang,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(59, 'Dios Blade', 912, 'SLI', 200, '', '', 1, 5, '0.00', '', 'Red Wing', 0, 'Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(60, 'Quarrel Hornsword+', 960, 'RAW', 0, '', '', 0, 5, '-0.05', 'Def+15', 'Quarrel Hornsword', 0, 'Quarrel Hornsword,Wyvern Jawblade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(61, 'Roguish Deathcap', 720, 'POI', 600, '', '', 0, 6, '0.00', '', 'Wyvern''s Perch', 0, 'Wyvern''s Perch'),
(62, 'Hidden Blade', 864, '(PAR)', 160, '', '', 1, 6, '0.25', '', 'Brazenwall', 0, 'Brazenwall,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(63, 'Despot''s Blackstorm', 864, 'THU', 300, '', '', 1, 6, '0.00', '', 'Usurper''s Storm', 0, 'Usurper''s Storm,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(64, 'Plesioth Watercutter', 864, 'WAT', 300, '', '', 1, 6, '0.00', '', 'Finblade', 0, 'Finblade,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(65, 'Galespike', 960, '(WAT)', 420, '', '', 1, 6, '0.20', '', 'Icicle Fang+', 0, 'Icicle Fang+,Icicle Fang,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(66, 'Aurora Blade', 960, 'ICE', 350, '', '', 0, 6, '-0.20', '', 'Barroth Smasher', 0, 'Barroth Smasher,Carapace Blade,Carapace Sword,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(67, 'Blushing Dame', 960, 'POI', 240, '', '', 1, 6, '0.00', '', 'Titania', 0, 'Titania,High Sieglinde,Sieglinde,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(68, 'Lagia Wildfire', 960, 'THU', 250, '', '', 2, 6, '0.00', '', 'Lagia Lightning', 0, 'Lagia Lightning,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(69, 'Lion''s Bane', 1008, '(DRA)', 200, 'final', '', 2, 6, '0.00', '', '', 0, NULL),
(70, 'Auberon', 1008, 'DRA', 100, '', '', 2, 6, '0.05', '', 'Siegmund', 0, 'Siegmund,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(71, 'Blue Wing', 1008, 'FIR', 340, '', '', 1, 6, '0.00', '', 'Rathalos Flamesword', 0, 'Rathalos Flamesword,Rathalos Firesword,Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(72, 'Dios Blade+', 1008, 'SLI', 250, '', '', 1, 6, '0.00', '', 'Dios Blade', 0, 'Dios Blade,Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(73, 'Crimsonwall', 1104, '(FIR)', 250, '', '', 1, 6, '0.00', 'Def+25', 'Brazenwall', 0, 'Brazenwall,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(74, 'Berserker Sword', 1152, '(DRA)', 100, 'root', '', 1, 6, '0.00', '', '', 0, NULL),
(75, 'Double Diablos', 1152, 'RAW', 0, '', '', 0, 6, '-0.10', 'Def+18', 'Quarrel Hornsword+', 0, 'Quarrel Hornsword+,Quarrel Hornsword,Wyvern Jawblade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(76, 'Alatreon Great Sword', 864, 'DRA', 300, 'root', '', 0, 7, '0.00', '', '', 0, NULL),
(77, 'Ancharius Sword', 1008, 'WAT', 450, '', '', 0, 7, '0.00', '', 'Viking Hornsword', 0, 'Viking Hornsword,Carapace Blade,Carapace Sword,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(78, 'Worn Great Sword', 480, '(DRA)', 100, 'root', '', 0, 8, '-0.70', '', '', 0, NULL),
(79, 'Weathered Great Swd', 528, '(DRA)', 100, '', '', 0, 8, '-0.70', '', 'Worn Great Sword', 0, 'Worn Great Sword'),
(80, 'Xiphias Gladius', 912, 'ICE', 730, 'final', '', 0, 8, '0.00', '', 'Freezer Speartuna', 0, 'Freezer Speartuna,Frozen Speartu'),
(81, 'Lordly Deathcap', 912, 'POI', 990, 'final', '', 0, 8, '0.00', '', 'Roguish Deathcap', 0, 'Roguish Deathcap,Wyvern''s Perch'),
(82, 'Plesioth Lullaby', 912, 'SLE', 300, '', '', 1, 8, '0.00', '', 'Plesioth Watercutter', 0, 'Plesioth Watercutter,Finblade,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(83, 'Northern Lights', 960, 'ICE', 450, '', '', 0, 8, '-0.15', '', 'Aurora Blade', 0, 'Aurora Blade,Barroth Smasher,Carapace Blade,Carapace Sword,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(84, 'Amethyst Blade', 960, 'POI', 440, 'root', '', 0, 8, '0.00', '', '', 0, NULL),
(85, 'Chrome Razor', 1008, '(POI)', 600, '', '', 2, 8, '0.00', '', 'Ravager Blade+', 0, 'Ravager Blade+,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(86, 'Vulcatastrophe', 1008, '(SLI)', 400, '', '', 3, 8, '0.00', '', 'Vulcamagnon', 0, 'Vulcamagnon,Vulcanvil,Vulcanis+,Vulcanis'),
(87, 'Tenma no Tsurugi', 1008, 'THU', 780, 'final', '', 0, 8, '0.15', 'Def+10', 'Houma no Tsurugi', 0, 'Houma no Tsurugi'),
(88, 'Lacerator Blade', 1056, '(ICE)', 330, '', '', 2, 8, '0.00', '', 'Ravager Blade+', 0, 'Ravager Blade+,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(89, 'Remalgagorgon', 1056, 'WAT', 400, 'final', '', 3, 8, '0.00', 'Def+15', 'Remalgalypse', 0, 'Remalgalypse,Type 41 Wyvernator,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(90, 'Paladire', 1152, 'ICE', 250, 'final', '', 1, 8, '0.20', '', 'Icicle Fang+', 0, 'Icicle Fang+,Icicle Fang,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(91, 'Excalius Sword', 1152, 'WAT', 580, 'final', '', 0, 8, '0.00', '', 'Ancharius Sword', 0, 'Ancharius Sword,Viking Hornsword,Carapace Blade,Carapace Sword,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(92, 'Blade of Tartarus', 1344, '(DRA)', 320, 'final', '', 2, 8, '0.00', '', 'Blade of Talos', 0, 'Blade of Talos,Golem Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(93, 'Epitaph Blade', 960, 'DRA', 550, '', '', 1, 9, '0.00', '', 'Weathered Great Swd', 0, 'Weathered Great Swd,Worn Great Sword'),
(94, 'Plesioth Lullabane', 960, 'SLE', 380, 'final', '', 2, 9, '0.00', '', 'Plesioth Lullaby', 0, 'Plesioth Lullaby,Plesioth Watercutter,Finblade,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(95, 'Oppressor''s Forger', 960, 'THU', 400, '', '', 1, 9, '0.00', '', 'Despot''s Blackstorm', 0, 'Despot''s Blackstorm,Usurper''s Storm,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(96, 'Dark of Night', 1008, '(PAR)', 220, '', '', 1, 9, '0.30', '', 'Hidden Blade', 0, 'Hidden Blade,Brazenwall,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(97, 'Orcus Tonitrus', 1008, 'THU', 570, '', '', 1, 9, '0.00', '', 'Oppressor''s Forger', 0, 'Oppressor''s Forger,Despot''s Blackstorm,Usurper''s Storm,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(98, 'Ljósálfar', 1056, 'POI', 300, '', '', 2, 9, '0.00', '', 'Blushing Dame', 0, 'Blushing Dame,Titania,High Sieglinde,Sieglinde,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(99, 'Anima Reaper', 1104, '(FIR)', 780, 'final', '', 2, 9, '0.00', '', '', 0, NULL),
(100, 'Avidya Great Sword', 1104, '(PAR)', 300, 'final', '', 1, 9, '0.40', '', 'Dark of Night', 0, 'Dark of Night,Hidden Blade,Brazenwall,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(101, 'Simoom Sandbarb', 1104, '(WAT)', 620, '', '', 1, 9, '0.25', '', 'Galespike', 0, 'Galespike,Icicle Fang+,Icicle Fang,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(102, 'Brimstren Drakepride', 1104, 'DRA', 400, '', '', 2, 9, '0.00', '', 'Oppressor''s Forger', 0, 'Oppressor''s Forger,Despot''s Blackstorm,Usurper''s Storm,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(103, 'Rathalos Glinsword', 1104, 'FIR', 400, '', '', 1, 9, '0.00', '', 'Blue Wing', 0, 'Blue Wing,Rathalos Flamesword,Rathalos Firesword,Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(104, 'Miasmethyst', 1104, 'POI', 580, 'final', '', 2, 9, '0.00', '', 'Amethyst Blade', 0, 'Amethyst Blade'),
(105, 'Neo Lagia Blade', 1104, 'THU', 310, '', '', 2, 9, '0.00', '', 'Lagia Wildfire', 0, 'Lagia Wildfire,Lagia Lightning,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(106, 'Reddnaught', 1152, '(FIR)', 540, 'final', '', 3, 9, '0.25', '', 'High Siegmund', 0, 'High Siegmund,Siegmund,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(107, 'Chrome Quietus', 1152, '(POI)', 750, 'final', '', 2, 9, '0.00', '', 'Chrome Razor', 0, 'Chrome Razor,Ravager Blade+,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(108, 'Vulca Vendetta', 1152, '(SLI)', 620, 'final', '', 3, 9, '0.00', '', 'Vulcatastrophe', 0, 'Vulcatastrophe,Vulcamagnon,Vulcanvil,Vulcanis+,Vulcanis'),
(109, 'Simoom Sandbiter', 1152, '(WAT)', 700, 'final', '', 2, 9, '0.35', '', 'Simoom Sandbarb', 0, 'Simoom Sandbarb,Galespike,Icicle Fang+,Icicle Fang,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(110, 'Epitaph Eternal', 1152, 'DRA', 700, 'final', '', 1, 9, '0.00', '', 'Epitaph Blade', 0, 'Epitaph Blade,Weathered Great Swd,Worn Great Sword'),
(111, 'Northern Cross', 1152, 'ICE', 520, 'final', '', 0, 9, '-0.10', '', 'Northern Lights', 0, 'Northern Lights,Aurora Blade,Barroth Smasher,Carapace Blade,Carapace Sword,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(112, 'Demolition Sword', 1152, 'SLI', 400, '', '', 1, 9, '0.00', '', 'Dios Blade+', 0, 'Dios Blade+,Dios Blade,Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(113, 'Devastator Blade', 1200, '(ICE)', 410, 'final', '', 2, 9, '0.00', '', 'Lacerator Blade', 0, 'Lacerator Blade,Ravager Blade+,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(114, 'Pale Kaiser', 1200, 'DRA', 320, 'final', '', 3, 9, '0.15', '', 'Auberon', 0, 'Auberon,Siegmund,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(115, 'Anguish', 1248, '(DRA)', 200, '', '', 1, 9, '0.00', '', 'Berserker Sword', 0, 'Berserker Sword'),
(116, 'Myxo Demolisher', 1248, 'SLI', 480, 'final', '', 1, 9, '0.00', '', 'Demolition Sword', 0, 'Demolition Sword,Dios Blade+,Dios Blade,Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(117, 'Lagia Fulmination', 1248, 'THU', 400, 'final', '', 2, 9, '0.00', '', 'Neo Lagia Blade', 0, 'Neo Lagia Blade,Lagia Wildfire,Lagia Lightning,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(118, 'Plesioth Aquablade', 1248, 'WAT', 450, 'final', '', 2, 9, '0.00', '', 'Plesioth Watercutter', 0, 'Plesioth Watercutter,Finblade,Cataclysm Blade,Cataclysm Sword,Ludroth Bone Sword,Bone Blade+,Bone Blade'),
(119, 'Cragscliff', 1296, '(FIR)', 310, '', '', 2, 9, '0.00', 'Def+31', 'Crimsonwall', 0, 'Crimsonwall,Brazenwall,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(120, 'Cera Cigil', 1392, 'RAW', 0, '', '', 0, 9, '-0.20', 'Def+21', 'Double Diablos', 0, 'Double Diablos,Quarrel Hornsword+,Quarrel Hornsword,Wyvern Jawblade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(121, 'Goliath''s Scream', 1440, '(FIR)', 350, 'final', '', 2, 9, '0.00', 'Def+35', 'Cragscliff', 0, 'Cragscliff,Crimsonwall,Brazenwall,Ravager Blade,Buster Blade,Buster Sword+,Buster Sword,Iron Sword+,Iron Sword'),
(122, 'Eisenfaust', 1440, 'RAW', 0, 'final', '', 0, 9, '-0.50', '', '', 0, NULL),
(123, 'Cera Cymmetry', 1488, 'RAW', 0, 'final', '', 0, 9, '-0.20', 'Def+24', 'Cera Cigil', 0, 'Cera Cigil,Double Diablos,Quarrel Hornsword+,Quarrel Hornsword,Wyvern Jawblade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(124, 'Megiddo Blaze', 1008, 'FIR', 600, 'root', '', 0, 10, '0.00', '', '', 0, NULL),
(125, 'Alatreon Revolution', 1056, 'DRA', 450, '', '', 0, 10, '0.00', '', 'Alatreon Great Sword', 0, 'Alatreon Great Sword'),
(126, 'The Depotheosis', 1056, 'FIR', 720, 'final', '', 0, 10, '0.00', '', 'Megiddo Blaze', 0, 'Megiddo Blaze'),
(127, 'Eclipse Blade', 1056, 'POI', 220, 'root', '', 1, 10, '0.20', '', '', 0, NULL),
(128, 'Nether Great Sword', 1104, 'THU', 630, '', '', 1, 10, '0.00', '', 'Orcus Tonitrus', 0, 'Orcus Tonitrus,Oppressor''s Forger,Despot''s Blackstorm,Usurper''s Storm,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(129, 'Merak''s Asterism', 1152, 'POI', 280, 'final', '', 1, 10, '0.30', '', 'Eclipse Blade', 0, 'Eclipse Blade'),
(130, 'Nether Lufactrus', 1152, 'THU', 700, 'final', '', 1, 10, '0.00', '', 'Nether Great Sword', 0, 'Nether Great Sword,Orcus Tonitrus,Oppressor''s Forger,Despot''s Blackstorm,Usurper''s Storm,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(131, 'Altheos Evolutia', 1200, 'DRA', 580, 'final', '', 0, 10, '0.00', '', 'Alatreon Revolution', 0, 'Alatreon Revolution,Alatreon Great Sword'),
(132, 'Brünnhilde', 1200, 'POI', 380, 'final', '', 3, 10, '0.00', '', 'Ljósálfar', 0, 'Ljósálfar,Blushing Dame,Titania,High Sieglinde,Sieglinde,Valkyrie Blade,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(133, 'Stygian Acedia', 1248, 'DRA', 480, 'final', '', 2, 10, '0.00', '', 'Brimstren Drakepride', 0, 'Brimstren Drakepride,Oppressor''s Forger,Despot''s Blackstorm,Usurper''s Storm,High Lagia Blade,Lagiacrus Blade+,Lagiacrus Blade,Chieftain''s Grt Swd,Rugged Great Sword,Buster Sword,Iron Sword+,Iron Sword'),
(134, 'Rathalos Gleamsword', 1248, 'FIR', 520, 'final', '', 1, 10, '0.00', '', 'Rathalos Glinsword', 0, 'Rathalos Glinsword,Blue Wing,Rathalos Flamesword,Rathalos Firesword,Red Wing,Giant Jawblade,Jawblade,Bone Blade+,Bone Blade'),
(135, 'Nero''s Anguish', 1392, '(DRA)', 250, 'final', '', 1, 10, '0.00', '', 'Anguish', 0, 'Anguish,Berserker Sword');

-- --------------------------------------------------------

--
-- Table structure for table `weapon_types`
--

DROP TABLE IF EXISTS `weapon_types`;
CREATE TABLE IF NOT EXISTS `weapon_types` (
  `weaponTypeId` int(5) NOT NULL AUTO_INCREMENT,
  `Id` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  PRIMARY KEY (`weaponTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `weapon_types`
--

INSERT INTO `weapon_types` (`weaponTypeId`, `Id`, `Type`) VALUES
(1, 'dualblades', 'Dual Blades'),
(2, 'greatsword', 'Great Sword');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
