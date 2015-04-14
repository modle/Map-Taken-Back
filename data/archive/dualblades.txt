CREATE TABLE IF NOT EXISTS `dualblades` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Element` varchar(20) NOT NULL,
  `Own` tinyint(1) NOT NULL,
  `Form` varchar(20) NOT NULL,
  `Consumes` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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