-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for touristguide
CREATE DATABASE IF NOT EXISTS `touristguide` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `touristguide`;

-- Dumping structure for table touristguide.tbl_admin_login
CREATE TABLE IF NOT EXISTS `tbl_admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_contact_no` varchar(255) NOT NULL,
  `admin_login_status` datetime NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table touristguide.tbl_booking
CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `booking_status` varchar(20) NOT NULL,
  `booking_date` datetime NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table touristguide.tbl_city
CREATE TABLE IF NOT EXISTS `tbl_city` (
  `city_id` int(10) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(150) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table touristguide.tbl_contact
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `con_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table touristguide.tbl_hotel
CREATE TABLE IF NOT EXISTS `tbl_hotel` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(255) NOT NULL,
  `city_id` int(10) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `hotel_star` tinyint(1) NOT NULL,
  `hotel_contact` varchar(20) NOT NULL,
  `hotel_manager_name` varchar(255) NOT NULL,
  `hotel_email` varchar(255) NOT NULL,
  `hotel_password` varchar(255) NOT NULL,
  `hotel_location` text NOT NULL,
  `hotel_pic` varchar(255) NOT NULL,
  `hotel_website` varchar(255) NOT NULL,
  `hotel_status` varchar(10) NOT NULL,
  `hotel_login_time` datetime NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table touristguide.tbl_hotel_package
CREATE TABLE IF NOT EXISTS `tbl_hotel_package` (
  `package_id` int(10) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(10) NOT NULL,
  `packge_name` varchar(255) NOT NULL,
  `package_pic` varchar(255) NOT NULL,
  `package_days_night` varchar(255) NOT NULL,
  `package_facilities` text NOT NULL,
  `package_amount` double(10,2) NOT NULL,
  `package_status` varchar(10) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table touristguide.tbl_tourist
CREATE TABLE IF NOT EXISTS `tbl_tourist` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_address` text NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` varchar(10) NOT NULL,
  `user_login_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
