CREATE DATABASE db_camagru CHARACTER SET 'utf8';

USE	db_camagru;

CREATE TABLE IF NOT EXISTS Users (
	id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	login VARCHAR(32) NOT NULL,
	passwd VARCHAR(128) NOT NULL,
	mail VARCHAR(64) NOT NULL
);

CREATE TABLE IF NOT EXISTS `Pictures` (
	`id` int(11) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`img` VARCHAR(11) NOT NULL,
	`login` VARCHAR(32) NOT NULL,
	`describe` VARCHAR(128) DEFAULT NULL,
	`tags` VARCHAR(32) DEFAULT NULL,
	`comment` VARCHAR(128) DEFAULT NULL,
	`like` int(11) unsigned DEFAULT NULL
);
