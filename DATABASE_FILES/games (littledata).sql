-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2014 at 05:26 PM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `newMatch`(IN `userID` INT(5), IN `sport` INT(10), IN `location` VARCHAR(256), IN `zip` INT(5), IN `date` DATE, IN `time` TIME, IN `maxPlayers` INT(5), IN `currPlayers` INT(5), IN `pubpriv` BOOLEAN)
    NO SQL
INSERT INTO matches (    
	admin_user_id,     
	match_type, 
	match_location, 
	match_zip,       
	match_date,     
	match_time,            
	match_maxplayers,      
	match_currentplayers,  
	matchp_pubpriv
	)
  VALUES (
    @userID,     
	@sport, 
	@location, 
	@zip,
	@date,       
	@time,     
	@maxPlayers,            
	@currPlayers,      
	@pubpriv 
  )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `testSearch`()
BEGIN
    SELECT * FROM matches WHERE match_zip=32304;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gamehistory`
--

CREATE TABLE IF NOT EXISTS `gamehistory` (
  `gamesPlayed` int(8) NOT NULL DEFAULT '0',
  `user_idnum` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `baseball` int(6) NOT NULL DEFAULT '0',
  `soccer` int(6) NOT NULL DEFAULT '0',
  `football` int(6) NOT NULL DEFAULT '0',
  `tennis` int(6) NOT NULL DEFAULT '0',
  `frisbee` int(6) NOT NULL DEFAULT '0',
  `rugby` int(6) NOT NULL DEFAULT '0',
  `basketball` int(6) NOT NULL DEFAULT '0',
  `hockey` int(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_idnum`),
  UNIQUE KEY `user_idnum` (`user_idnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `gamehistory`
--

INSERT INTO `gamehistory` (`gamesPlayed`, `user_idnum`, `username`, `baseball`, `soccer`, `football`, `tennis`, `frisbee`, `rugby`, `basketball`, `hockey`) VALUES
(25, 62, 'taylor', 1, 8, 1, 1, 11, 0, 3, 0),
(12, 63, 'roberto', 0, 1, 7, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'auto-value',
  `admin_user_id` int(5) NOT NULL COMMENT 'user id number',
  `match_type` varchar(18) NOT NULL COMMENT 'value',
  `match_location` varchar(256) NOT NULL COMMENT 'Where its at',
  `match_zip` int(5) NOT NULL COMMENT '5 digit zip',
  `match_date` date NOT NULL COMMENT 'day of match',
  `match_time` time NOT NULL COMMENT 'time, 24 hour clock',
  `match_maxplayers` int(5) NOT NULL,
  `match_currentplayers` int(5) NOT NULL,
  `matchp_pubpriv` tinyint(1) NOT NULL COMMENT 'zero for public, 1 for private',
  PRIMARY KEY (`match_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='matches_prototype' AUTO_INCREMENT=37 ;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `admin_user_id`, `match_type`, `match_location`, `match_zip`, `match_date`, `match_time`, `match_maxplayers`, `match_currentplayers`, `matchp_pubpriv`) VALUES
(21, 62, 'Baseball', 'SmallGame', 32303, '2014-03-26', '05:00:00', 4, 1, 1),
(22, 21, '', '', 0, '1970-01-01', '00:00:00', 0, 1, 0),
(23, 62, 'Soccer', 'SoccerFeilds', 32305, '2014-03-27', '08:45:00', 8, 1, 0),
(24, 62, 'Basketball', 'koolwork', 32304, '2014-03-30', '08:15:00', 7, 1, 0),
(25, 62, 'Basketball', 'lool', 32305, '2014-03-26', '05:15:00', 8, 1, 0),
(26, 62, 'Tennis', 'fagball audit', 32304, '2014-03-01', '05:15:00', 2, 1, 0),
(27, 62, 'Basketball', 'lolololokkkkk', 32306, '2014-03-24', '05:30:00', 8, 1, 0),
(28, 62, 'Basketball', '55555', 55555, '2014-03-01', '05:15:00', 5, 1, 0),
(29, 62, 'Tennis', 'gaybar', 989, '2014-03-26', '10:15:00', 7, 1, 0),
(30, 62, 'Baseball', 'koolki', 88990, '2014-03-26', '06:15:00', 6, 1, 0),
(31, 62, 'Football', 'City', 88888, '2014-03-20', '14:30:00', 5, 1, 0),
(32, 62, 'Football', 'the Zoo', 32304, '2014-03-31', '14:30:00', 8, 1, 0),
(34, 62, 'Baseball', 'place', 32304, '2014-04-04', '06:30:00', 8, 1, 0),
(35, 62, 'Ultimate_Frisbee', 'Landis', 32304, '2014-04-04', '07:45:00', 8, 1, 0),
(36, 62, 'Hockey', 'Wells Fargo', 32305, '2014-04-08', '07:00:00', 8, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `matchplayers`
--

CREATE TABLE IF NOT EXISTS `matchplayers` (
  `match_id` int(5) NOT NULL DEFAULT '0',
  `user_idnum` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`match_id`,`user_idnum`),
  KEY `user_idnum` (`user_idnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchplayers`
--

INSERT INTO `matchplayers` (`match_id`, `user_idnum`) VALUES
(21, 62),
(23, 62),
(24, 62),
(30, 62),
(31, 62),
(32, 62),
(34, 62),
(35, 62),
(36, 62),
(31, 63),
(32, 63);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_idnum` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user_id',
  `first_name` varchar(30) NOT NULL COMMENT 'f_name',
  `last_name` varchar(40) NOT NULL COMMENT 'l_name',
  `email` varchar(60) NOT NULL COMMENT 'email',
  `username` varchar(32) NOT NULL COMMENT 'username',
  `zip` int(11) NOT NULL COMMENT 'zip',
  `password` varchar(32) NOT NULL COMMENT 'max length is 32',
  `favSport` varchar(20) NOT NULL,
  PRIMARY KEY (`user_idnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_idnum`, `first_name`, `last_name`, `email`, `username`, `zip`, `password`, `favSport`) VALUES
(62, 'Taylor', 'Brockhoeft', 'taylorbrockhoeft@gmail.com', 'taylor', 32304, 'cookie', 'Soccer'),
(63, 'Rob', 'Shnayder', 'lolcats@car.co', 'roberto', 32304, 'cookie', 'Hockey');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gamehistory`
--
ALTER TABLE `gamehistory`
  ADD CONSTRAINT `gamehistory_ibfk_1` FOREIGN KEY (`user_idnum`) REFERENCES `users` (`user_idnum`) ON DELETE CASCADE;

--
-- Constraints for table `matchplayers`
--
ALTER TABLE `matchplayers`
  ADD CONSTRAINT `matchplayers_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `matches` (`match_id`),
  ADD CONSTRAINT `matchplayers_ibfk_2` FOREIGN KEY (`user_idnum`) REFERENCES `users` (`user_idnum`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
