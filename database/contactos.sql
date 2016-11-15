# Host: 192.168.10.10  (Version 5.7.12)
# Date: 2016-11-15 03:49:50
# Generator: MySQL-Front 5.4  (Build 1.6)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "contactos"
#

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "contactos"
#

