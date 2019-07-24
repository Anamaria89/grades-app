-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2019 at 12:39 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grades`
--

-- --------------------------------------------------------

--
-- Table structure for table `csm`
--

DROP TABLE IF EXISTS `csm`;
CREATE TABLE IF NOT EXISTS `csm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `grade_1` int(1) DEFAULT NULL,
  `grade_2` int(1) DEFAULT NULL,
  `grade_3` int(1) DEFAULT NULL,
  `grade_4` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `csm`
--

INSERT INTO `csm` (`id`, `name`, `grade_1`, `grade_2`, `grade_3`, `grade_4`) VALUES
(1, 'Ana Mikic', 5, 6, 7, 7),
(2, 'Marko Markovic', 7, 7, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `csmb`
--

DROP TABLE IF EXISTS `csmb`;
CREATE TABLE IF NOT EXISTS `csmb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `grade_1` int(1) DEFAULT NULL,
  `grade_2` int(1) DEFAULT NULL,
  `grade_3` int(1) DEFAULT NULL,
  `grade_4` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `csmb`
--

INSERT INTO `csmb` (`id`, `name`, `grade_1`, `grade_2`, `grade_3`, `grade_4`) VALUES
(1, 'Marija Stanic', 7, 6, 5, 8),
(2, 'Milica Majic', NULL, 6, 7, 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
