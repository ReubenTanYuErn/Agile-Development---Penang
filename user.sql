-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 10:03 AM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'User actual name',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`username`, `name`) VALUES
('lakessh', 'lakessh'),
('rajini', 'rajini'),
('boby', 'boby'),
('kumar', 'kumar');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1-regular user, 9-super user',
  `timein` datetime DEFAULT NULL COMMENT 'log in time',
  `timeout` datetime DEFAULT NULL COMMENT 'log out time',
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`username`, `password`, `type`, `timein`, `timeout`) VALUES
('boby', '0e0f1967bb6fe7dd214b574d276aa5ffe573a967', 1, '2016-11-27 21:37:04', NULL),
('rajini', '2d788f1d9757e95b5b6014f6f47fe32c8310b662', 1, '2016-11-27 22:26:25', NULL),
('lakessh', '8a591742b2bbe6ece602923330c138d1487edee5', 1, '2016-11-28 09:53:47', NULL),
('baba', '9eb9586c92194e915f15676fa5811e30613c7e46', 1, NULL, NULL),
('sugu', 'd15c8b7999ae6002399793e2b9d00d6c53d04f50', 1, '2016-11-27 19:07:28', NULL),
('kumar', 'b4be4feb92f663e903d1a041a3a083d3198bc742', 1, '2016-11-27 22:20:05', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
