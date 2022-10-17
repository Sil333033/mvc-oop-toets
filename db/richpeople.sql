-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2022 at 09:31 AM
-- Server version: 5.7.31
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `mvc-oop-toets`
--

-- --------------------------------------------------------

--
-- Table structure for table `richestpeople`
--

DROP TABLE IF EXISTS `richestpeople`;
CREATE TABLE IF NOT EXISTS `richestpeople` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Networth` varchar(200) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `MyCompany` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `richestpeople`
--

INSERT INTO `richestpeople` (`Id`, `Name`, `Networth`, `Age`, `MyCompany`) VALUES
(2, 'Jeff Bezos', '183000000000', 58, 'Amazon'),
(3, 'Bernard Arnault', '142000000000', 73, 'Louis Vuitton Moet Hennessy'),
(4, 'Bill Gates', '130000000000', 66, 'Microsoft'),
(5, 'Warren Buffett', '126000000000', 91, 'Berkshire Hathaway'),
(7, 'Elon Musk', '261000000000', 50, 'Tesla');
COMMIT;
