CREATE TABLE IF NOT EXISTS `users`(
	`ID` int(11) NOT NULL AUTO_INCREMENT,
	`user` VARCHAR(20) NOT NULL,
	`password` VARCHAR(50) NOT NULL,
	PRIMARY KEY(`ID`),
	UNIQUE(`user`)
	);

INSERT INTO `users` (`user`,`password`) VALUES('user', SHA1('user')));
