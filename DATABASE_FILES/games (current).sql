-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2014 at 06:56 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `gamehistory`
--

INSERT INTO `gamehistory` (`gamesPlayed`, `user_idnum`, `username`, `baseball`, `soccer`, `football`, `tennis`, `frisbee`, `rugby`, `basketball`, `hockey`) VALUES
(27, 62, 'taylor', 21, 8, 14, 3, 11, 0, 12, 8),
(12, 63, 'roberto', 18, 14, 7, 0, 1, 3, 55, 27),
(0, 64, 'billyjoel', 1, 2, 3, 4, 5, 7, 8, 6),
(1, 65, 'queenfan1', 5, 7, 34, 23, 19, 6, 8, 4),
(0, 66, 'tingting', 1, 0, 15, 2, 8, 0, 0, 0),
(1, 67, 'nixxed', 100, 5, 31, 0, 0, 0, 12, 0),
(0, 68, 'flintstonian', 0, 8, 50, 0, 0, 0, 0, 15),
(0, 69, 'griffin', 8, 0, 4, 1, 0, 6, 4, 0),
(0, 70, 'spamajammer', 0, 6, 0, 2, 0, 5, 33, 0),
(0, 71, 'imreal_iswear', 0, 0, 24, 0, 0, 4, 2, 1),
(0, 72, 'whodat', 22, 12, 1, 0, 44, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='matches_prototype' AUTO_INCREMENT=40 ;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `admin_user_id`, `match_type`, `match_location`, `match_zip`, `match_date`, `match_time`, `match_maxplayers`, `match_currentplayers`, `matchp_pubpriv`) VALUES
(37, 72, 'Football', 'By the Mercedes-Bienz Super dome', 70027, '2014-05-05', '05:00:00', 12, 1, 0),
(38, 69, 'Tennis', 'FSU Tennis courts', 32304, '2014-05-06', '07:30:00', 4, 1, 0),
(39, 67, 'Baseball', 'The IM Feilds', 32304, '2014-05-07', '06:00:00', 12, 1, 0);

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
(37, 62),
(38, 62),
(38, 65),
(37, 67),
(39, 67),
(38, 69),
(37, 72);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_idnum`, `first_name`, `last_name`, `email`, `username`, `zip`, `password`, `favSport`) VALUES
(62, 'Taylor', 'Brockhoeft', 'taylorbrockhoeft@gmail.com', 'taylor', 32304, 'cookie', 'Soccer'),
(63, 'Rob', 'Shnayder', 'lolcats@car.co', 'roberto', 32304, 'cookie', 'Hockey'),
(64, 'Billy', 'Joel', 'billyJoel@5th.co', 'billyjoel', 32307, 'pressure', 'Rugby'),
(65, 'Freddie', 'Mercury', 'readyFreddie@gaga.biz', 'queenfan1', 32302, 'lovekills', 'Soccer'),
(66, 'Karl', 'Marx', 'tingting@jo.co', 'tingting', 32313, 'tangtang', 'Hockey'),
(67, 'Richard', 'Nixon', 'trickyDicky@whitehouse.gov', 'nixxed', 32324, 'watergate', 'Baseball'),
(68, 'Fred', 'Flintstone', 'dino@saur.co', 'flintstonian', 33541, 'bedrock', 'Basketball'),
(69, 'Stewie', 'Griffin', 'iHateLois@familyguy.com', 'griffin', 32305, 'stewies', 'Tennis'),
(70, 'Bugs', 'Bunny', 'bb@duckseason.io', 'spamajammer', 32306, 'koolaide', 'Ultimate_Frisbee'),
(71, 'DubenGaken', 'Smith', '12345@gmail.co.uk.lol', 'imreal_iswear', 55512, 'totreal', 'Football'),
(72, 'Trae', 'Dixon', 'newOrleansSaints@go.bro', 'whodat', 70053, 'saintswin', 'Football');

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
