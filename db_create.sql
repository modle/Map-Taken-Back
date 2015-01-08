/*DATABASE CREATE*/
CREATE DATABASE IF NOT EXISTS `mh3u_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mh3u_app`;


/*DUAL BLADES TABLE CREATE AND INSERT*/
DROP TABLE IF EXISTS `dualblades`;
CREATE TABLE IF NOT EXISTS `dualblades` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Own` boolean NOT NULL,
  PRIMARY KEY (`Id`)
);

INSERT INTO `dualblades` (`Name`, `Own`) VALUES
('Agnaktor InfernoFINAL', 0),
('Alkaid''s AsterismFINAL', 0),
('Alluvion SlashersFINAL', 0),
('Blizzarioths', 0),
('Blizzarioths+', 0),
('Bloodwings', 0),
('Bloodwings+', 0),
('Boltgeist', 0),
('Bone Scythes+',0);


/*GREAT SWORD TABLE CREATE AND INSERT*/
DROP TABLE IF EXISTS `greatsword`;
CREATE TABLE IF NOT EXISTS `greatsword` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Own` boolean NOT NULL,
  PRIMARY KEY (`Id`)
);

INSERT INTO `greatsword` (`Name`, `Own`) VALUES
('Alatreon Revolution', 0),
('Altheos EvolutiaFINAL', 0),
('Amethyst Blade', 0),
('Ancharius Sword', 0),
('Ancient Blade', 0),
('Anguish', 0);


/*WEAPON TYPES TABLE CREATE AND INSERT*/
DROP TABLE IF EXISTS `weapon_types`;
CREATE TABLE IF NOT EXISTS `weapon_types` (
  `Id` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
);

INSERT INTO `weapon_types` (`Id`, `Type`) VALUES
('dualblades','Dual Blades'),
('greatsword','Great Sword');
