-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2016 at 09:30 AM
-- Server version: 5.6.17
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
CREATE DATABASE IF NOT EXISTS `user` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `user`;

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
('Jimmy', 'Norulazmi Kasim');

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
('jimmy', '7f2c3b0a38e0cf38e388527882b954b99e7db2e8', 1, '2016-03-21 09:25:59', NULL),
('admin', 'b997cfb87bbd3c8e4f35c7842bca29c2d343f88c', 9, NULL, NULL),
('jimmy2', '8127a8f9eeea3904c6be1ac17516117c4127b311', 1, '2016-03-21 08:55:28', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
