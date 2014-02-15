-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2014 at 02:58 PM
-- Server version: 5.0.41-community-nt
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pickup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registereduser`
--

CREATE TABLE IF NOT EXISTS `registereduser` (
  `rUser_id` int(11) NOT NULL auto_increment COMMENT 'registered user id',
  `fName` varchar(25) NOT NULL COMMENT 'user''s first name',
  `lName` varchar(25) NOT NULL COMMENT 'user last name',
  `username` varchar(25) NOT NULL COMMENT 'user''s registered username',
  `password` varchar(25) NOT NULL COMMENT 'user''s password',
  `email` varchar(30) NOT NULL COMMENT 'registered user''s email address',
  `zipcode` int(10) NOT NULL COMMENT 'user''s zipcode',
  `phoneNumber` int(10) NOT NULL COMMENT 'user''s phone number',
  PRIMARY KEY  (`rUser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
