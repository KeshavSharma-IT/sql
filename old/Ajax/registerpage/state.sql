-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2020 at 04:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamta_aes`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `StateId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `StateName` varchar(150) DEFAULT NULL,
  `Descriptions` varchar(45) DEFAULT NULL,
  `IsActive` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`StateId`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StateId`, `StateName`, `Descriptions`, `IsActive`) VALUES
(1, 'A & N Islands', 'A & N Islands', 1),
(2, 'Andhra Pradesh', 'Andhra Pradesh', 1),
(3, 'Arunachal Pradesh', 'Arunachal Pradesh', 1),
(4, 'Assam', 'Assam', 1),
(5, 'Bihar', 'Bihar', 1),
(6, 'Chandigarh', 'Chandigarh', 1),
(7, 'Chhattisgarh', 'Chhattisgarh', 1),
(8, 'Dadra & Nagar Haveli', 'Dadra & Nagar Haveli', 1),
(9, 'Daman & Diu', 'Daman & Diu', 1),
(10, 'Delhi', 'Delhi', 1),
(11, 'Goa', 'Goa', 1),
(12, 'Gujarat', 'Gujarat', 1),
(13, 'Haryana', 'Haryana', 1),
(14, 'Himachal Pradesh', 'Himachal Pradesh', 1),
(15, 'Jammu & Kashmir', 'Jammu & Kashmir', 1),
(16, 'Jharkhand', 'Jharkhand', 1),
(17, 'Karnataka', 'Karnataka', 1),
(18, 'Kerala', 'Kerala', 1),
(19, 'Lakshadweep', 'Lakshadweep', 1),
(20, 'Madhya Pradesh', 'Madhya Pradesh', 1),
(21, 'Maharashtra', 'Maharashtra', 1),
(22, 'Manipur', 'Manipur', 1),
(23, 'Meghalaya', 'Meghalaya', 1),
(24, 'Mizoram', 'Mizoram', 1),
(25, 'Nagaland', 'Nagaland', 1),
(26, 'Odisha', 'Odisha', 1),
(27, 'Puducherry', 'Puducherry', 1),
(28, 'Punjab', 'Punjab', 1),
(29, 'Rajasthan', 'Rajasthan', 1),
(30, 'Sikkim', 'Sikkim', 1),
(31, 'Tamil Nadu', 'Tamil Nadu', 1),
(32, 'Telegana', 'Telegana', 1),
(33, 'Tripura', 'Tripura', 1),
(34, 'Uttar Pradesh', 'Uttar Pradesh', 1),
(35, 'Uttarakhand', 'Uttarakhand', 1),
(36, 'West Bengal', 'West Bengal', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
