create database sanket;
use sanket;

CREATE TABLE `phpuser`(
	`id` int(11) NOT NULL auto_increment,
	`name` varchar(100),
	`email` varchar(100),
	`address` varchar(100),
	`password` varchar(100),
	`created` varchar(100),
	`updated` varchar(100),
	PRIMARY KEY (`id`)
);
