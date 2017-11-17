<?php

	CREATE TABLE `user`.`album` 
	(
		`id` INT NOT NULL AUTO_INCREMENT ,
		`title` VARCHAR( 225 ) NOT NULL ,
		`typeofalbum` VARCHAR( 225 ) NOT NULL ,
		`material` VARCHAR( 225 ) NOT NULL ,
		`price` INT( 11 ) NOT NULL ,
		`trn_date` DATETIME NOT NULL ,
		PRIMARY KEY ( `id` )
	) ENGINE = InnoDB;

	CREATE TABLE IF NOT EXISTS register.`users` 
	(
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`username` varchar(50) NOT NULL,
		`email` varchar(50) NOT NULL,
		`password` varchar(50) NOT NULL,
		`trn_date` datetime NOT NULL,
		PRIMARY KEY (`id`)
	);

	CREATE TABLE `user`.`artist` 
	(
		`id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`artistname` VARCHAR( 255 ) NOT NULL ,
		`artistemail` VARCHAR( 255 ) NOT NULL ,
		`artistphone` INT( 11 ) NOT NULL ,
		`date` DATETIME NOT NULL ,
		PRIMARY KEY ( `id` )
	) ENGINE = InnoDB;

?>