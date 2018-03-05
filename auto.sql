-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2018 at 06:04 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auto`
--
CREATE DATABASE IF NOT EXISTS `auto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `auto`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` varchar(255) NOT NULL,
  `stop` varchar(255) NOT NULL,
  `select1` varchar(50) NOT NULL,
  `cost` varchar(60) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `start`, `stop`, `select1`, `cost`, `date`) VALUES
(5, 'Jahaj company', 'shapla cottor', 'Auto', '5 tk', '03/02/2018'),
(6, 'Payra Chottor', 'Lalbag', 'Auto', '15 tk', '03/02/2018');

-- --------------------------------------------------------

--
-- Table structure for table `find`
--

CREATE TABLE IF NOT EXISTS `find` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` varchar(255) DEFAULT NULL,
  `stop` varchar(255) DEFAULT NULL,
  `select1` varchar(255) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `find`
--

INSERT INTO `find` (`id`, `start`, `stop`, `select1`, `cost`) VALUES
(2, 'Jahaj company', 'Medical more', 'Auto', '15 tk');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'monzur', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dateofbirth` varchar(50) DEFAULT NULL,
  `gender` varchar(244) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `password`, `email`, `phone`, `address`, `dateofbirth`, `gender`) VALUES
(1, 'Monzur Alam', '123456', 'monzur484@gmail.com', '01515258524', 'Pirgachha, Rangpur', '07/12/1997', 'male'),
(3, 'Rayhan Kabir', '123412', 'rayhan702560@gmail.com', '01750589859', 'Burirhat, Ganggachara, Rangpur', '01/01/1996', 'male'),
(5, 'Masrub Ahmed', '1234546', 'masrub@gmail.com', '01737413794', 'Jaldhaka, Nilphamari', '01/01/1999', 'male'),
(6, 'kawsar Ali', '123456', 'kawsarali5400@gmail.com', '01773648676', 'Sador, Rangpur', '1/01/1998', 'male'),
(7, 'ahsan@gmail.com', '123456', 'ahsan702554@gmail.com', '01783251887', 'rangpur', '01/01/1998', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
