/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16-1~exp1 : Database - themuja
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `themuja`;

/*Table structure for table `admin_accounts` */

DROP TABLE IF EXISTS `admin_accounts`;

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL DEFAULT 'A',
  `customerType` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `referrer` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varbinary(25) DEFAULT NULL,
  `address_json` varchar(10000) DEFAULT NULL,
  `id_json` varchar(10000) DEFAULT NULL,
  `message` varchar(2000) DEFAULT NULL,
  `notes` varchar(2000) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
