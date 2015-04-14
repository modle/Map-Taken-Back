CREATE TABLE IF NOT EXISTS `weapon_types` (
  `weaponTypeId` int(5) NOT NULL AUTO_INCREMENT,
  `Id` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  PRIMARY KEY (`weaponTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `weapon_types` (`weaponTypeId`, `Id`, `Type`) VALUES
(1, 'dualblades', 'Dual Blades'),
(2, 'greatsword', 'Great Sword');