/*
SQLyog Ultimate v8.71 
MySQL - 5.5.5-10.4.11-MariaDB : Database - codeigniter_webservice
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`codeigniter_webservice` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `codeigniter_webservice`;

/*Table structure for table `keys` */

DROP TABLE IF EXISTS `keys`;

CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `ignore_limits` tinyint(4) NOT NULL,
  `is_private_key` tinyint(4) NOT NULL,
  `ip_addresses` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `keys` */

insert  into `keys`(`id`,`user_id`,`key`,`level`,`ignore_limits`,`is_private_key`,`ip_addresses`,`date_created`) values (1,0,'mazhar@123',0,0,0,'','2020-03-07 03:28:35');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`email`,`phone`,`created_at`,`updated_at`,`status`) values (1,'mazhar','islam','mazhar.rony@gmail.com','01712020900','2020-03-07 03:37:19','2020-03-07 03:36:48',1),(5,'Imran','Hossain','imo@gmail.com','01911913250','2020-03-11 23:32:16','2020-03-11 23:32:16',0),(6,'Araf','Hossain','imo@gmail.com','01911913250','2020-03-12 05:35:15','2020-03-12 00:35:15',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
