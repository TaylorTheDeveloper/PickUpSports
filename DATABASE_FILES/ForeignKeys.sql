-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2014 at 09:36 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gamehistory`
--

INSERT INTO `gamehistory` (`gamesPlayed`, `user_idnum`, `baseball`, `soccer`, `football`, `tennis`, `frisbee`, `rugby`, `basketball`, `hockey`) VALUES
(0, 12, 20, 27, 20, 25, 26, 28, 19, 5);

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
  `playerlist` varchar(1000) NOT NULL COMMENT 'List of players. usernames separated by ;',
  PRIMARY KEY (`match_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='matches_prototype' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `admin_user_id`, `match_type`, `match_location`, `match_zip`, `match_date`, `match_time`, `match_maxplayers`, `match_currentplayers`, `matchp_pubpriv`, `playerlist`) VALUES
(1, 12, 'Tennis', '608 west lafayette', 32304, '2014-02-26', '00:15:00', 16, 0, 0, ''),
(2, 12, 'Soccer', 'The Gym at FsU', 32304, '2014-02-24', '00:17:30', 8, 2, 0, 'Joe; Karl; Tyler');

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
(1, 12);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_idnum`, `first_name`, `last_name`, `email`, `username`, `zip`, `password`, `favSport`) VALUES
(12, 'Rob', 'Shnayder', 'fef@lol.com', 'rob', 32304, 'coo', 'Hockey'),
(18, 'Taylor', 'B', 'B@lol.com', 'bob', 32304, 'jfj', 'hockey');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gamehistory`
--
ALTER TABLE `gamehistory`
  ADD CONSTRAINT `gamehistory_ibfk_1` FOREIGN KEY (`user_idnum`) REFERENCES `users` (`user_idnum`);

--
-- Constraints for table `matchplayers`
--
ALTER TABLE `matchplayers`
  ADD CONSTRAINT `matchplayers_ibfk_2` FOREIGN KEY (`user_idnum`) REFERENCES `users` (`user_idnum`),
  ADD CONSTRAINT `matchplayers_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `matches` (`match_id`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
