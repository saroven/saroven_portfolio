CREATE TABLE `informations` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`email` varchar(100) NOT NULL UNIQUE,
	`password` varchar(200) NOT NULL,
	`title` varchar(200),
	`image` varchar(200),
	`location` varchar(255),
	`status` INT(1) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
);

CREATE TABLE `portfolios` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`description` TEXT NOT NULL,
	`image` varchar(255) NOT NULL,
	`link` varchar(255),
	`status` INT(1) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
);

CREATE TABLE `contacts` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(80) NOT NULL,
	`email` varchar(100) NOT NULL,
	`mobile` INT,
	`message` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `socialLinks` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` varchar(80) NOT NULL,
	`link` varchar(100) NOT NULL,
	`alt` varchar(10),
	PRIMARY KEY (`id`)
);

