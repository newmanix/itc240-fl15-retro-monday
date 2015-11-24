-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Cookies`;
CREATE TABLE `Cookies` (
  `CookieID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Cookie` varchar(50) DEFAULT NULL,
  `Brand` varchar(50) DEFAULT NULL,
  `Calories` int(7) DEFAULT NULL,
  `Description` text,
  PRIMARY KEY (`CookieID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Cookies` (`CookieID`, `Cookie`, `Brand`, `Calories`, `Description`) VALUES
(1,	'Oreo',	'Nabisco',	140,	'The world\'s favorite cookie. Delicious and full of Wonder for over 100 years. Find Oreo games, videos, songs, and see how the Wonderfilled story goes!');

-- 2015-11-13 01:47:25
