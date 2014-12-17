CREATE DATABASE IF NOT EXISTS `mh3u_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mh3u_app`;

DROP TABLE IF EXISTS `dualblades`;
CREATE TABLE IF NOT EXISTS `dualblades` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Own` boolean NOT NULL,
  `Attack` int(4) NOT NULL,
  `Elem_Value` int(4) NOT NULL,
  `Element` varchar(5) NOT NULL,
  `Elem_Value_two` int(4) NOT NULL,
  `Element_two` varchar(5) NOT NULL,
  `Sharpness` varchar(1) NOT NULL,
  `Slot` int(1) NOT NULL,
  `Rare` int(2) NOT NULL,
  `Affinity` decimal(2,2) NOT NULL,
  `Defense` varchar(6) NOT NULL,
  PRIMARY KEY (`Id`)
);

INSERT INTO `dualblades` (`Id`, `Name`, `Own`, `Attack`, `Elem_Value`, `Element`, `Elem_Value_two`, `Element_two`, `Sharpness`, `Slot`, `Rare`, `Affinity`, `Defense`) VALUES
(1, 'Agnaktor InfernoFINAL', 0, 322, 340, 'FIR', 0, '', '', 0, 9, '0.15', ''),
(2, 'Alkaid''s AsterismFINAL', 0, 350, 180, 'POI', 0, '', '', 0, 10, '0.20', ''),
(3, 'Alluvion SlashersFINAL', 0, 336, 420, 'WAT', 0, '', '', 1, 9, '0.00', ''),
(4, 'Blizzarioths', 0, 266, 180, 'ICE', 0, '', '', 0, 5, '0.10', ''),
(5, 'Blizzarioths+', 0, 294, 200, 'ICE', 0, '', '', 0, 6, '0.20', ''),
(6, 'Bloodwings', 0, 182, 160, 'POI', 0, '', '', 0, 3, '0.00', ''),
(7, 'Bloodwings+', 0, 196, 200, 'POI', 0, '', '', 0, 3, '0.00', ''),
(8, 'Boltgeist', 0, 252, 200, 'THU', 0, '', '', 1, 5, '0.00', ''),
(9, 'Bone Scythes+', 0, 126, 100, '(POI)', 0, '', '', 0, 1, '0.00', '');

DROP TABLE IF EXISTS `weapon_types`;
CREATE TABLE IF NOT EXISTS `weapon_types` (
  `Id` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
);


INSERT INTO `weapon_types` (`Id`, `Name`) VALUES
('dualblades','Dual Blades'),
('greatsword','Great Sword'),
('gunlance','Gunlance'),
('hammer','Hammer'),
('huntinghorn','Hunting Horn'),
('lance','Lance'),
('longsword','Longsword'),
('switchaxe','Switch Axe'),
('swordandshield','Sword and Shield');
