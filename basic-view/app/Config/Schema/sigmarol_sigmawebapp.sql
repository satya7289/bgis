-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-12-17 22:08:32
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for sigma
DROP DATABASE IF EXISTS `sigmarol_sigma`;
CREATE DATABASE IF NOT EXISTS `sigmarol_sigma` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sigmarol_sigma`;


-- Dumping structure for table sigma.authake_groups
DROP TABLE IF EXISTS `authake_groups`;
CREATE TABLE IF NOT EXISTS `authake_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table sigma.authake_groups: ~9 rows (approximately)
/*!40000 ALTER TABLE `authake_groups` DISABLE KEYS */;
INSERT INTO `authake_groups` (`id`, `name`) VALUES
	(1, 'Administrators'),
	(2, 'Registered users'),
	(3, 'Front Desk'),
	(4, 'Accounts Office'),
	(5, 'Store Incharge'),
	(6, 'Production Manager'),
	(7, 'Production Incharge'),
	(8, 'Quality Manager'),
	(9, 'Accounts Factory');
/*!40000 ALTER TABLE `authake_groups` ENABLE KEYS */;


-- Dumping structure for table sigma.authake_groups_users
DROP TABLE IF EXISTS `authake_groups_users`;
CREATE TABLE IF NOT EXISTS `authake_groups_users` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sigma.authake_groups_users: ~10 rows (approximately)
/*!40000 ALTER TABLE `authake_groups_users` DISABLE KEYS */;
INSERT INTO `authake_groups_users` (`user_id`, `group_id`) VALUES
	(1, 1),
	(2, 1),
	(4, 1),
	(3, 3),
	(5, 4),
	(6, 5),
	(7, 7),
	(8, 8),
	(9, 9),
	(10, 6);
/*!40000 ALTER TABLE `authake_groups_users` ENABLE KEYS */;


-- Dumping structure for table sigma.authake_rules
DROP TABLE IF EXISTS `authake_rules`;
CREATE TABLE IF NOT EXISTS `authake_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Rule description',
  `group_id` int(10) unsigned DEFAULT NULL,
  `order` int(10) unsigned DEFAULT NULL,
  `action` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` bit(1) NOT NULL DEFAULT b'0',
  `forward` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table sigma.authake_rules: ~5 rows (approximately)
/*!40000 ALTER TABLE `authake_rules` DISABLE KEYS */;
INSERT INTO `authake_rules` (`id`, `name`, `group_id`, `order`, `action`, `permission`, `forward`, `message`) VALUES
	(1, 'Allow everything for Administrators', 1, 999999, '*', b'10000000', '', ''),
	(2, 'Allow anybody to see the home page, the error page, to register, to log in, see profile and log out', NULL, 200, '/ or /authake/user/* or /register or /login or /logout or /lost-password or /verify(/)?* or /pass(/)?* or /profile or /denied or /pages(/)?* or //pages/*', b'10000000', '', ''),
	(4, 'Deny everything for everybody by default (allow to have allow by default then deny)', NULL, 0, '*', b'00000000', '', 'Access denied!'),
	(6, 'Display a message for denied admin page', NULL, 100, '/authake(/index)? or /authake/users* or /authake/groups* or /authake/rules*', b'00000000', '', 'You are not allowed to access the administration page!'),
	(7, 'Front Desk User Rule', 3, 300, '/authake(/index)? or /authake/orders* or /authake/orders/view* or /authake/orders/edit* or /authake/orders/add', b'10000000', '', 'You are not allowed to access the administration page!');
/*!40000 ALTER TABLE `authake_rules` ENABLE KEYS */;


-- Dumping structure for table sigma.authake_users
DROP TABLE IF EXISTS `authake_users`;
CREATE TABLE IF NOT EXISTS `authake_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `emailcheckcode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `passwordchangecode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `disable` tinyint(1) NOT NULL COMMENT 'Disable/enable account',
  `expire_account` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table sigma.authake_users: ~10 rows (approximately)
/*!40000 ALTER TABLE `authake_users` DISABLE KEYS */;
INSERT INTO `authake_users` (`id`, `login`, `password`, `email`, `emailcheckcode`, `passwordchangecode`, `disable`, `expire_account`, `created`, `updated`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'root', '', '', 0, NULL, '0000-00-00 00:00:00', '2008-02-12 12:19:31'),
	(2, 'dspahwa', '79489320b4666d8bbdcf14f3704f35ce', 'damandeep.pahwa@gmail.com', '', '', 0, '2015-11-30', '2013-11-30 14:20:43', '2013-11-30 14:20:43'),
	(3, 'frontdesk', 'd60521c631e13779465c7be5d1e65ccf', 'frontdesk@sigmarollers.com', '', '', 0, '2014-12-20', '2013-12-01 09:46:50', '2013-12-01 09:46:50'),
	(4, 'ypsingh', '407ce5e17d1db44c816c5d13a6c8bc57', 'yps@sigmarollers.com', '', '', 0, '2020-12-08', '2013-12-08 17:13:02', '2013-12-08 17:13:02'),
	(5, 'accountoffice', '26b608205d8c57236dd27df40e66710d', 'accountoffice@sigmarollers.com', '', '', 0, '2014-12-20', '2013-12-15 07:52:02', '2013-12-15 07:52:02'),
	(6, 'storeincharge', '4601c90d7f3b7b9303d5cc5ffe472f37', 'storeincharge@sigmarollers.com', '', '', 0, '2014-12-20', '2013-12-15 07:53:10', '2013-12-15 07:53:10'),
	(7, 'prodincharge', 'f650924db33e436545aa9c2ec4fd8e0a', 'prodincharge@sigmarollers.com', '', '', 0, '2014-12-20', '2013-12-15 07:53:37', '2013-12-15 07:53:37'),
	(8, 'quality', '2d186adefefa532796059d2bd2906046', 'quality@sigmarollers.com', '', '', 0, '2014-12-20', '2013-12-15 07:54:14', '2013-12-15 07:54:14'),
	(9, 'accountfactory', '899579c631025ce959b1f2b8db767f5b', 'accountfactory@sigmarollers.com', '', '', 0, '2014-12-20', '2013-12-15 07:54:44', '2013-12-15 07:54:44'),
	(10, 'ramandeep', '02b8884e689b824c7b43bf2d75e612f1', 'rds@sigmarollers.com', '', '', 0, '2014-12-20', '2013-12-15 07:58:01', '2013-12-15 07:58:01');
/*!40000 ALTER TABLE `authake_users` ENABLE KEYS */;


-- Dumping structure for table sigma.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_number` int(10) NOT NULL,
  `serial_number` int(10) NOT NULL,
  `order_date` datetime NOT NULL,
  `bill_to` varchar(250) NOT NULL,
  `ship_to` varchar(250) NOT NULL,
  `job_number` int(10) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `telephone` int(10) NOT NULL,
  `fax` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_receive_against` varchar(100) NOT NULL,
  `commercial_terms` varchar(250) NOT NULL,
  `po_number` int(10) NOT NULL,
  `po_date` datetime NOT NULL,
  `machine_name` varchar(100) NOT NULL,
  `delivery_date` datetime NOT NULL,
  `nature_job` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table sigma.orders: ~2 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `order_number`, `serial_number`, `order_date`, `bill_to`, `ship_to`, `job_number`, `contact_person`, `mobile`, `telephone`, `fax`, `email`, `order_receive_against`, `commercial_terms`, `po_number`, `po_date`, `machine_name`, `delivery_date`, `nature_job`, `description`) VALUES
	(1, 1001, 111, '2013-12-01 08:41:00', 'Ramandeep Singh', 'Y P Singh', 123, 'Damandeep', 2147483647, 25515060, 10101010, 'damandeep.pahwa@gmail.com', 'Memo', 'NA', 1234, '2013-12-10 08:41:00', 'Roller', '2013-12-20 08:41:00', 'Handjob', 'NA'),
	(4, 1002, 121, '2013-12-14 08:41:00', 'YP Singh', 'Aman', 1212, 'Damandeep', 2147483647, 23232323, 23232323, 'aman@gmail.com', 'Cheque', 'NA', 1212, '2013-12-14 17:43:00', 'Rollers', '2013-12-14 17:43:00', 'Recoating', 'Recoating Job');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


-- Dumping structure for table sigma.order_specifications
DROP TABLE IF EXISTS `order_specifications`;
CREATE TABLE IF NOT EXISTS `order_specifications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `job_number` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `hardness_shore_a` varchar(250) NOT NULL,
  `grade` varchar(250) NOT NULL,
  `dia` int(10) NOT NULL,
  `length` int(10) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `unit_rate` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `total` int(10) DEFAULT NULL,
  `repair_charges` int(10) DEFAULT NULL,
  `packing_charges` int(10) DEFAULT NULL,
  `vat` int(10) NOT NULL,
  `machine_name` int(10) NOT NULL,
  `drawing_attached` tinyint(4) NOT NULL DEFAULT '0',
  `purchase_order_attached` tinyint(4) NOT NULL DEFAULT '0',
  `mode_of_dispatch` varchar(250) NOT NULL,
  `transport_name_area` varchar(250) NOT NULL,
  `order_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sigma.order_specifications: ~1 rows (approximately)
/*!40000 ALTER TABLE `order_specifications` DISABLE KEYS */;
INSERT INTO `order_specifications` (`id`, `job_number`, `order_id`, `description`, `hardness_shore_a`, `grade`, `dia`, `length`, `rate`, `unit_rate`, `quantity`, `amount`, `total`, `repair_charges`, `packing_charges`, `vat`, `machine_name`, `drawing_attached`, `purchase_order_attached`, `mode_of_dispatch`, `transport_name_area`, `order_date`, `delivery_date`) VALUES
	(1, 0, 1, '', '', '', 0, 0, 0.00, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `order_specifications` ENABLE KEYS */;


-- Dumping structure for table sigma.order_statuses
DROP TABLE IF EXISTS `order_statuses`;
CREATE TABLE IF NOT EXISTS `order_statuses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '''0''=>Pending,''1''=>Approved,''2''=>Rejected',
  `approve_date` datetime NOT NULL,
  `reject_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sigma.order_statuses: ~2 rows (approximately)
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
INSERT INTO `order_statuses` (`id`, `order_id`, `status`, `approve_date`, `reject_date`) VALUES
	(1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
