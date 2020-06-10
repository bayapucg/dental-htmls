/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - medical
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`medical` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `medical`;

/*Table structure for table `aboutus` */

DROP TABLE IF EXISTS `aboutus`;

CREATE TABLE `aboutus` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `heading` text,
  `description` longtext,
  `years_experience` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `pic` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus` */

insert  into `aboutus`(`a_id`,`title`,`heading`,`description`,`years_experience`,`image`,`pic`,`org_image`,`org_pic`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'WHO WE ARE','Dental Surgeon','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.','15','1589342821.jpg','1589342821.jpg',NULL,NULL,1,'2020-05-13 09:37:01','2020-05-13 20:35:36',2);

/*Table structure for table `aboutus_types` */

DROP TABLE IF EXISTS `aboutus_types`;

CREATE TABLE `aboutus_types` (
  `a_t_id` int(12) NOT NULL AUTO_INCREMENT,
  `a_id` int(12) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`a_t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus_types` */

insert  into `aboutus_types`(`a_t_id`,`a_id`,`type`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'Dental X-Ray',1,'2020-05-13 09:37:01','2020-05-13 09:37:01',2),(2,1,'Complete Denture',1,'2020-05-13 09:37:01','2020-05-13 09:37:01',2);

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `address` text,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`name`,`email`,`mobile`,`address`,`password`,`org_password`,`profile_pic`,`status`,`created_at`,`updated_at`) values (2,'admin','admin@gmail.com','8500050945','kadapa','e10adc3949ba59abbe56e057f20f883e','123456','1589514780.jpeg',1,NULL,'2020-05-13 10:23:01');

/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `b_id` int(12) NOT NULL AUTO_INCREMENT,
  `title` text,
  `heading` text,
  `description` longtext,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `banners` */

insert  into `banners`(`b_id`,`title`,`heading`,`description`,`image`,`org_image`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'Doctor’s for health','Modern and Latest Technology Treatment','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Quis ipsumpsum.','0.3655340015895086861.jpg','1.jpg',1,'2020-05-15 07:41:26','2020-05-15 07:41:26',2),(2,'Keeping Teeth Clean','V Dentist Health, Keeping Care Close to Home','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Quis ipsumpsum.','0.4244750015895086862.jpg','2.jpg',1,'2020-05-15 07:41:26','2020-05-15 07:41:26',2);

/*Table structure for table `book_appointment` */

DROP TABLE IF EXISTS `book_appointment`;

CREATE TABLE `book_appointment` (
  `b_a_id` int(11) NOT NULL AUTO_INCREMENT,
  `services` longtext,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `address` text,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`b_a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `book_appointment` */

insert  into `book_appointment`(`b_a_id`,`services`,`name`,`email`,`phone_number`,`age`,`address`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'servies twos','siva','siva@gmail.com','8099010155','25','hyd',1,'2020-05-15 08:57:17','2020-05-15 08:57:17',NULL),(2,'servies twos','kasi','kasi@gmail.com','8099010155','25','kurnool',1,'2020-05-15 09:15:43','2020-05-15 09:15:43',NULL),(3,'servies one','sankar','sankar@gmail.com','7015552525','30','kadapa',1,'2020-05-15 09:17:07','2020-05-15 09:17:07',NULL);

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `c_id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `subject` tinytext,
  `message` longtext,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`c_id`,`name`,`email`,`phone_number`,`subject`,`message`,`created_at`) values (1,'siva','siva@gmail.com','8099010155','hh','msg','2020-05-13 11:44:26');

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` text,
  `timing` varchar(250) DEFAULT NULL,
  `mobile_number` varchar(250) DEFAULT NULL,
  `alert_mobile_number` varchar(250) DEFAULT NULL,
  `email_address` varchar(250) DEFAULT NULL,
  `alert_email_address` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(250) DEFAULT NULL,
  `linkedIn_link` varchar(250) DEFAULT NULL,
  `instagram_link` varchar(250) DEFAULT NULL,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`c_id`,`location`,`timing`,`mobile_number`,`alert_mobile_number`,`email_address`,`alert_email_address`,`twitter_link`,`facebook_link`,`linkedIn_link`,`instagram_link`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'20-06-24, Anjaiah Rd, Pandaripuram, Ongole, Andhra Pradesh 523001','Mon - Fri 09:00 - 19:00','7013319036','0819755702','charanreddy@gmail.com','charan@gmail.com','https://www.twitter.com','https://www.facebook.com','https://www.linkedin.com','https://www.instagram.com',1,'2020-05-13 12:42:05','2020-05-13 12:42:05',2);

/*Table structure for table `doctors` */

DROP TABLE IF EXISTS `doctors`;

CREATE TABLE `doctors` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `doctors` */

/*Table structure for table `doctors_details` */

DROP TABLE IF EXISTS `doctors_details`;

CREATE TABLE `doctors_details` (
  `d_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_id` int(12) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `img_org_name` varchar(250) DEFAULT NULL,
  `name` text,
  `designation` text,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`d_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `doctors_details` */

insert  into `doctors_details`(`d_d_id`,`d_id`,`image`,`org_pic`,`img_org_name`,`name`,`designation`,`status`,`created_at`,`updated_at`,`created_by`) values (1,NULL,'0.2431650015895112452.jpg','2.jpg',NULL,'DR.VASUDHA CHIDIPOTHU','Orthodontist',1,'2020-05-15 08:24:05','2020-05-15 08:24:05',2),(2,NULL,'0.7702960015895114521.jpg','1.jpg',NULL,'DR VARUN YARAMANENI','General Dentist',1,'2020-05-15 08:27:32','2020-05-15 08:27:32',2),(3,NULL,'0.0255580015895117244.jpg','4.jpg',NULL,'Dr K Venkateswarlu','neurology doctor',1,'2020-05-15 08:32:04','2020-05-15 08:32:04',2),(4,NULL,'0.6426990015895117715.jpg','5.jpg',NULL,'pawani','dental doctor',1,'2020-05-15 08:32:51','2020-05-15 08:32:51',2);

/*Table structure for table `facts` */

DROP TABLE IF EXISTS `facts`;

CREATE TABLE `facts` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `happy_clients` varchar(250) DEFAULT NULL,
  `experts_doctors` varchar(250) DEFAULT NULL,
  `quality_work` varchar(250) DEFAULT NULL,
  `award_winners` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `facts` */

insert  into `facts`(`f_id`,`happy_clients`,`experts_doctors`,`quality_work`,`award_winners`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'10','10','25','45',1,'2020-05-12 15:07:34','2020-05-12 15:07:34',2);

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `gallery`(`g_id`,`image`,`org_image`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'0.5489980015895152785.jpg','5.jpg',1,'2020-05-15 09:31:18','2020-05-15 09:31:18',2),(2,'0.6065650015895152781.jpg','1.jpg',1,'2020-05-15 09:31:18','2020-05-15 09:31:18',2),(3,'0.6687890015895152782.jpg','2.jpg',1,'2020-05-15 09:31:18','2020-05-15 09:31:18',2),(4,'0.7585450015895152783.jpg','3.jpg',1,'2020-05-15 09:31:18','2020-05-15 09:31:18',2),(5,'0.8169990015895152788.jpg','8.jpg',1,'2020-05-15 09:31:18','2020-05-15 09:31:18',2),(6,'0.8727130015895152789.jpg','9.jpg',1,'2020-05-15 09:31:18','2020-05-15 09:31:36',2);

/*Table structure for table `homepage_images` */

DROP TABLE IF EXISTS `homepage_images`;

CREATE TABLE `homepage_images` (
  `h_i_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `heading` text,
  `description` longtext,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`h_i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `homepage_images` */

insert  into `homepage_images`(`h_i_id`,`title`,`heading`,`description`,`image`,`org_image`,`org_pic`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'Why You Choose Us','What we do why we are exceptional than others','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','1589510088.jpg',NULL,NULL,1,'2020-05-15 08:04:48','2020-05-15 08:04:48',2);

/*Table structure for table `homepage_types` */

DROP TABLE IF EXISTS `homepage_types`;

CREATE TABLE `homepage_types` (
  `h_p_id` int(12) NOT NULL AUTO_INCREMENT,
  `h_i_id` int(12) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`h_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `homepage_types` */

insert  into `homepage_types`(`h_p_id`,`h_i_id`,`type`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'Professional Staff',1,'2020-05-15 08:04:48','2020-05-15 08:04:48',2),(2,1,'Oral surgery',1,'2020-05-15 08:04:48','2020-05-15 08:04:48',2),(3,1,'Crowns lab',1,'2020-05-15 08:04:48','2020-05-15 08:04:48',2),(4,1,'Kids Dentist',1,'2020-05-15 08:04:48','2020-05-15 08:04:48',2);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `s_id` int(12) NOT NULL AUTO_INCREMENT,
  `services_name` text,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`s_id`,`services_name`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'servies one',1,'2020-05-13 11:19:43','2020-05-13 11:34:21',2),(2,'servies twos',1,'2020-05-13 11:30:35','2020-05-13 11:34:34',NULL);

/*Table structure for table `servicesname_list` */

DROP TABLE IF EXISTS `servicesname_list`;

CREATE TABLE `servicesname_list` (
  `s_n_id` int(11) NOT NULL AUTO_INCREMENT,
  `services` text,
  `text` longtext,
  `status` int(12) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`s_n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `servicesname_list` */

insert  into `servicesname_list`(`s_n_id`,`services`,`text`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'1','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tincididunt labore dolore magna aliquauis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum rices gravida.</p>\r\n',1,'2020-05-13 21:58:58','2020-05-15 08:44:23',2),(2,'2','<p>Surrounded by their possessions, pets, and a familiar environment, our clients receive the support they ned to enjoy their regular activities and continue living well at home.</p>\r\n',1,'2020-05-13 22:27:52','2020-05-15 08:43:52',2);

/*Table structure for table `subscribe` */

DROP TABLE IF EXISTS `subscribe`;

CREATE TABLE `subscribe` (
  `s_id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `subscribe` */

insert  into `subscribe`(`s_id`,`email`,`created_at`) values (1,'admin@gmail.com','2020-05-13 12:01:26'),(2,'suman@gmail.com','2020-06-10 22:09:09');

/*Table structure for table `testimonial` */

DROP TABLE IF EXISTS `testimonial`;

CREATE TABLE `testimonial` (
  `t_id` int(12) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `name` text,
  `designation` text,
  `paragraph` longtext,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(12) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `testimonial` */

insert  into `testimonial`(`t_id`,`image`,`org_pic`,`name`,`designation`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'0.9771230015895122462.jpg','2.jpg','James Anderson','Teeth Washing','“While The Lovely Valley Teems With Vapour Around Me, And The Meridian Sun Strikes The Upper Surface Of The Impenetrable Foliage Of My Trees. A Wonderful Serenity Has Taken.”',1,'2020-05-15 08:40:46','2020-05-15 08:40:46',2),(2,'0.0288740015895122471.jpg','1.jpg','Sadio Finn','CEO at FlatIcon','consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',1,'2020-05-15 08:40:47','2020-05-15 08:40:47',2),(3,'0.0721940015895122474.jpg','4.jpg','Tom Olivar','CEO at ThemeForest',' Quis ipsum suspendisse ultrices gravida.',1,'2020-05-15 08:40:47','2020-05-15 08:40:47',2),(4,'0.1167810015895122475.jpg','5.jpg','James Finn','CEO at GitLab','consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida',1,'2020-05-15 08:40:47','2020-05-15 08:40:47',2),(5,'0.1829280015895122471.jpg','1.jpg','John Lucy','CEO at Linkedin','Quis ipsum suspendisse ultrices gravida',1,'2020-05-15 08:40:47','2020-05-15 08:40:47',2),(6,'0.2494220015895122472.jpg','2.jpg','Sarah Taylor','CEO at Twitter','consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida',1,'2020-05-15 08:40:47','2020-05-15 08:40:47',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
