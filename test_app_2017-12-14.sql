# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.20)
# Database: test_app
# Generation Time: 2017-12-14 14:38:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `title`, `body`, `created`, `modified`, `user_id`)
VALUES
	(1,'Lorem ipsum dolor sit amet','7Vivamus fermentum rhoncus lectus, nec eleifend metus vestibulum eu. Suspendisse sit amet risus id odio tempus congue gravida non ipsum. Donec dapibus ex sed enim ornare, ut tincidunt elit lobortis. Praesent et ipsum consequat nulla dictum bibendum id ut odio. Aenean placerat vestibulum arcu quis ullamcorper. Ut in quam cursus, mollis lectus sed, molestie leo. Cras sit amet pellentesque erat.','2017-12-12 13:28:09','2017-12-14 14:25:47',1),
	(2,'Integer at lectus non est aliquam sollicitudin.','Suspendisse sollicitudin urna nunc, eget commodo nunc pharetra quis. Ut aliquet posuere enim quis egestas. Nullam et mauris vitae libero tincidunt aliquet eu sed nibh. Proin congue turpis ut massa dignissim, quis fringilla lorem faucibus. Quisque posuere risus ullamcorper augue pharetra ultricies. Ut metus augue, tincidunt eu lectus at, pulvinar vulputate urna. Cras nec porttitor ex. Curabitur dolor nibh, iaculis eget tempor non, rhoncus viverra orci. Maecenas viverra neque nec dolor ultrices, eu blandit purus malesuada. Praesent sagittis nisi sit amet rhoncus facilisis. Aenean in elit ullamcorper, convallis nisi aliquet, aliquet lorem. Donec gravida condimentum eros, et viverra tellus interdum a. Praesent ac massa eleifend, egestas libero eget, vehicula metus. Sed vitae egestas elit.','2017-12-13 11:01:51','2017-12-13 11:01:51',2);

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `birth_date`)
VALUES
	(1,'Ana','Dumitrescu','ana.dumi@email.com','$2y$10$XtCOX32/liFc0FL.JIFZmuWaX2xvj4M8PhuIo0AC114IrcPuIctRy','2017-12-06'),
	(2,'John','Doe','j.doe@yahoo.com','$2y$10$VzssDxG5UKqW4lKLGWGr9OYk1N5OFOTLz68DqqLrBgnq1079HH9ka','2016-04-05'),
	(15,'Ioana','Marinescu','ioana@marinescu.com','$2y$10$9Rz5uuWeflEnf4K9t8MQ0u7wAND3z8qucA5VClxfxBQU.FMnQEtLO','2010-03-04');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
