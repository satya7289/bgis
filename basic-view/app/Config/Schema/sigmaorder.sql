-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.2.0.4675
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for sigma

USE `sigmarol_sigma`;


-- Dumping structure for table sigma.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_number` int(10) NOT NULL,
  `bill_to` varchar(250) NOT NULL,
  `ship_to` varchar(250) NOT NULL,
  `job_number` int(10) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `telephone` int(10) NOT NULL,
  `fax` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_receive_against` varchar(50) NOT NULL DEFAULT '0',
  `quotation_number` int(10) DEFAULT NULL,
  `quotation_date` date DEFAULT NULL,
  `schedule_delivery` enum('1','0') NOT NULL DEFAULT '0',
  `sch_delivery_days` varchar(100) DEFAULT NULL,
  `sch_urgent_days` varchar(100) DEFAULT NULL,
  `schedule_qty1` int(10) DEFAULT NULL,
  `schedule_qty2` int(10) DEFAULT NULL,
  `schedule_qty3` int(10) DEFAULT NULL,
  `schedule_date1` date DEFAULT NULL,
  `schedule_date2` date DEFAULT NULL,
  `schedule_date3` date DEFAULT NULL,
  `payment_days` int(10) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `warranty_ink` int(10) NOT NULL,
  `warranty_damp` int(10) NOT NULL,
  `warranty_rider` int(10) NOT NULL,
  `road_permit` enum('1','0') NOT NULL DEFAULT '0',
  `transport_in_mode` varchar(100) NOT NULL,
  `transport_out_mode` varchar(100) NOT NULL,
  `po_number` int(10) NOT NULL,
  `po_date` date NOT NULL,
  `machine_name` varchar(100) NOT NULL,
  `accepted_by` varchar(100) NOT NULL,
  `sales_person` varchar(100) NOT NULL,
  `sales_phone` int(10) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `delivery_date` date NOT NULL,
  `order_date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sigma.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `order_number`, `bill_to`, `ship_to`, `job_number`, `contact_person`, `mobile`, `telephone`, `fax`, `email`, `order_receive_against`, `quotation_number`, `quotation_date`, `schedule_delivery`, `sch_delivery_days`, `sch_urgent_days`, `schedule_qty1`, `schedule_qty2`, `schedule_qty3`, `schedule_date1`, `schedule_date2`, `schedule_date3`, `payment_days`, `payment_mode`, `warranty_ink`, `warranty_damp`, `warranty_rider`, `road_permit`, `transport_in_mode`, `transport_out_mode`, `po_number`, `po_date`, `machine_name`, `accepted_by`, `sales_person`, `sales_phone`, `amount`, `delivery_date`, `order_date`, `description`) VALUES
	(1, 1, 'ABCD', 'XYZ', 1234, 'Raman', 2147483647, 0, 12341234, 'damandeep.pahwa@gmail.com', 'As per Quotation number', 12345, '2014-01-31', '', '30', NULL, 2, NULL, NULL, '2014-01-31', NULL, NULL, 15, 'NEFT/RTGS', 6, 6, 6, '1', 'Paid', 'To Pay', 12341, '2014-01-31', 'Roller', 'Daman', 'Ajay Kumar', 2147483647, 5775, '2014-01-31', '2014-01-31', 'Recoating Job'),
	(2, 2, 'Raman', 'Daman', 615, 'Damandeep', 2147483647, 0, 12322121, 'ajay@gmail.com', 'As per Quotation number', 12345, '2014-01-30', '', '30', NULL, 2, NULL, NULL, '2014-01-31', NULL, NULL, 15, 'NEFT/RTGS', 6, 6, 6, '', 'Paid', 'To Pay', 12341, '2014-01-25', 'Roller', 'Raman', 'Ramesh Kumar', 2147483647, 5775, '2014-01-30', '2014-02-07', 'Recoating Job');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


-- Dumping structure for table sigma.order_specifications
DROP TABLE IF EXISTS `order_specifications`;
CREATE TABLE IF NOT EXISTS `order_specifications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `job_number` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `tech_description` text,
  `hardness_shore_a` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `nature_type` varchar(250) NOT NULL,
  `nature_desc` varchar(250) DEFAULT NULL,
  `nature_total` varchar(250) DEFAULT NULL,
  `dia` int(10) DEFAULT NULL,
  `length` int(10) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `unit_rate` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `repair_charges` int(10) DEFAULT NULL,
  `packing_charges` int(10) DEFAULT NULL,
  `vat` int(10) DEFAULT NULL,
  `machine_name` int(10) DEFAULT NULL,
  `drawing_attached` tinyint(4) DEFAULT '0',
  `purchase_order_attached` tinyint(4) DEFAULT '0',
  `mode_of_dispatch` varchar(250) DEFAULT NULL,
  `transport_name_area` varchar(250) DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table sigma.order_specifications: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_specifications` DISABLE KEYS */;
INSERT INTO `order_specifications` (`id`, `job_number`, `order_id`, `tech_description`, `hardness_shore_a`, `grade`, `nature_type`, `nature_desc`, `nature_total`, `dia`, `length`, `rate`, `unit_rate`, `quantity`, `amount`, `total`, `repair_charges`, `packing_charges`, `vat`, `machine_name`, `drawing_attached`, `purchase_order_attached`, `mode_of_dispatch`, `transport_name_area`, `order_date`, `delivery_date`) VALUES
	(1, 1234, 1, 'Recoat', '30-35', 'ULT', 'Recoating', NULL, '2', 50, 700, 5.50, 100, 1, 1925, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 1234, 1, 'Spindle', '30-35', 'ULT', 'Recoating', NULL, '2', 50, 700, 5.50, 100, 2, 3850, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 615, 2, 'Spindle', '30-35', 'ULT', 'Recoating', NULL, '2', 50, 700, 5.50, 100, 2, 3850, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 615, 2, 'Spindle', '30-35', 'ULT', 'Recoating', NULL, '2', 50, 700, 5.50, 100, 1, 1925, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `order_specifications` ENABLE KEYS */;


-- Dumping structure for table sigma.order_statuses
DROP TABLE IF EXISTS `order_statuses`;
CREATE TABLE IF NOT EXISTS `order_statuses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '''0''=>Pending,''1''=>Approved,''2''=>Rejected',
  `approve_date` datetime NOT NULL,
  `reject_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sigma.order_statuses: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
INSERT INTO `order_statuses` (`id`, `order_id`, `status`, `approve_date`, `reject_date`) VALUES
	(1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
