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
