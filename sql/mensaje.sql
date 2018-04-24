CREATE TABLE IF NOT EXISTS `mensaje`(
	`ID` int(11) NOT NULL AUTO_INCREMENT,
	`fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	`nombre` varchar(50) NOT NULL,
	`correo` varchar(50),
	`concepto` varchar(50) NOT NULL,
	`mensaje` varchar(200) NOT NULL,
	PRIMARY KEY(`ID`)
	);
