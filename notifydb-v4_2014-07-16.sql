# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 209.15.202.55 (MySQL 5.1.73)
# Database: notifydb-v4
# Generation Time: 2014-07-16 13:36:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table adminacc
# ------------------------------------------------------------

DROP TABLE IF EXISTS `adminacc`;

CREATE TABLE `adminacc` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `adminacc` WRITE;
/*!40000 ALTER TABLE `adminacc` DISABLE KEYS */;

INSERT INTO `adminacc` (`username`, `pass`)
VALUES
	('admin','demo'),
	('cmoore@trca.on.ca','password');

/*!40000 ALTER TABLE `adminacc` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cssfiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cssfiles`;

CREATE TABLE `cssfiles` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `css_files` longtext NOT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `finish_time` time DEFAULT NULL,
  `up_time` int(20) NOT NULL,
  `loc1` int(11) DEFAULT NULL,
  `loc2` int(11) DEFAULT NULL,
  `loc3` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cssfiles` WRITE;
/*!40000 ALTER TABLE `cssfiles` DISABLE KEYS */;

INSERT INTO `cssfiles` (`id`, `name`, `css_files`, `start_date`, `start_time`, `finish_date`, `finish_time`, `up_time`, `loc1`, `loc2`, `loc3`)
VALUES
	(7,'Test','<b>loc1 - Day Camp Closure</b><br />Day Camps will be cancelled for the weeks of August 1st - 15th due to low registratuib, For further information, please click here: <a href=\"http://trca.on.ca/enjoy/locations/albion-hills-conservation-area-visitor-info.dot#hours\">http://trca.on.ca/enjoy/locations/albion-hills-conservation-area-visitor-info.dot#hours</a>','2014-06-01','12:00:00','2014-08-01','12:00:00',10,1,0,0),
	(8,'Albion','<b>loc2 - Albion Hills Trail Closure</b><br />\r\nDue to weather related damage to our trail network, Albion Hills will be closed to hiking and mountain bilking for the remainder of the week. For questions please contact:<br />\r\n(416) 667-6295 or <a href=\"mailto:info@trca.on.ca\">info@trca.on.ca</a>','2014-06-01','00:00:00','2014-08-01','00:00:00',0,0,1,0),
	(10,'Petticoat','<b>loc3 - Petticoat Creek Pool Closure</b><br />\r\nPetticoat Pool & Splash will be closed daily beginning July 21, 2014 - More information is available at:<br /> <a href=\"http://trca.on.ca/enjoy/locations/petticoat-creek-conservation-area.dot\">http://trca.on.ca/enjoy/locations/petticoat-creek-conservation-area.dot</a>','2014-06-01','00:00:00','2014-08-01','00:00:00',0,0,0,1);

/*!40000 ALTER TABLE `cssfiles` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
