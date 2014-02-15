-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2014 at 07:58 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `games`
--
CREATE DATABASE IF NOT EXISTS `games` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `games`;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto-value',
  `admin_user_id` int(11) NOT NULL COMMENT 'user id number',
  `match_type` int(11) NOT NULL COMMENT 'ENUM',
  `match_location` varchar(256) NOT NULL COMMENT 'Where its at',
  `match_zip` varchar(256) NOT NULL COMMENT '5 digit zip',
  `match_date` date NOT NULL COMMENT 'day of match',
  `match_time` varchar(24) NOT NULL COMMENT 'time, 24 hour clock',
  `match_maxplayers` int(11) NOT NULL,
  `match_currentplayers` int(11) NOT NULL,
  `matchp_pubpriv` int(11) NOT NULL COMMENT 'zero for public, 1 for private',
  PRIMARY KEY (`match_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='matches_prototype' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `admin_user_id`, `match_type`, `match_location`, `match_zip`, `match_date`, `match_time`, `match_maxplayers`, `match_currentplayers`, `matchp_pubpriv`) VALUES
(1, 4, 1, '608 west lafayette', '32304', '2014-02-26', '1500', 16, 0, 0),
(2, 4, 2, 'The Gym at FsU', '32304', '2014-02-24', '1730', 8, 2, 0),
(3, 4, 3, 'Wescott Fountain', '32308', '2014-02-28', '1300', 10, 0, 0),
(4, 4, 4, 'FAMU Courts', '32301', '2014-02-23', '1730', 4, 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
