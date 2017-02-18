-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 09:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pitchitup`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmc`
--

CREATE TABLE IF NOT EXISTS `bmc` (
  `bmc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_segment` varchar(255) NOT NULL,
  `cust_relationship` varchar(255) NOT NULL,
  `channels` varchar(255) NOT NULL,
  `value_proposition` varchar(255) NOT NULL,
  `key_activities` varchar(255) NOT NULL,
  `key_sources` varchar(255) NOT NULL,
  `key_partners` varchar(255) NOT NULL,
  `cost_structures` varchar(50) NOT NULL,
  `revenue_streams` varchar(100) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`bmc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bmc`
--

INSERT INTO `bmc` (`bmc_id`, `cust_segment`, `cust_relationship`, `channels`, `value_proposition`, `key_activities`, `key_sources`, `key_partners`, `cost_structures`, `revenue_streams`, `team_id`) VALUES
(5, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 37);

-- --------------------------------------------------------

--
-- Table structure for table `gen_pitchdeck`
--

CREATE TABLE IF NOT EXISTS `gen_pitchdeck` (
  `pitchdeck_id` int(11) NOT NULL AUTO_INCREMENT,
  `num_pitchdeck` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `bmc_id` int(11) NOT NULL,
  PRIMARY KEY (`pitchdeck_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_LastViewed` date NOT NULL,
  `date_LastModified` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`hist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `idea_genboard`
--

CREATE TABLE IF NOT EXISTS `idea_genboard` (
  `idea_id` int(11) NOT NULL AUTO_INCREMENT,
  `problem` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL,
  `behavior` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`idea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `idea_genboard`
--

INSERT INTO `idea_genboard` (`idea_id`, `problem`, `people`, `behavior`, `solution`, `team_id`) VALUES
(5, 'asd', 'asd', 'asd', 'asd', 37);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(60) NOT NULL,
  `LastName` varchar(60) NOT NULL,
  `role` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `FirstName`, `LastName`, `role`, `username`, `password`, `team_id`, `timestamp`) VALUES
(43, 'Louise', 'John', 'Hustler', 'jLkisni', 'f6fdffe48c908deb0f4c3bd36c032e72', 38, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `member_registration`
--

CREATE TABLE IF NOT EXISTS `member_registration` (
  `memreg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_firstname` varchar(100) NOT NULL,
  `mem_lastname` varchar(100) NOT NULL,
  `mem_role` varchar(30) NOT NULL,
  `mem_status` int(11) NOT NULL COMMENT '0 - not registered | 1 registered',
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`memreg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`memreg_id`, `mem_firstname`, `mem_lastname`, `mem_role`, `mem_status`, `team_id`) VALUES
(19, 'Angelica', 'Cantiveros', 'Hipster', 0, 38),
(20, 'Shamcy', 'Supsup', 'Hipster', 0, 38),
(21, 'Sheerlen', 'Golisao', 'Hacker', 0, 38);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `size`, `status`) VALUES
(38, 'teambangan', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `validation_board`
--

CREATE TABLE IF NOT EXISTS `validation_board` (
  `valid_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(100) DEFAULT NULL,
  `problem` varchar(255) DEFAULT NULL,
  `solution` varchar(255) DEFAULT NULL,
  `risk_assumpt` varchar(255) DEFAULT NULL,
  `solution_criteria` varchar(255) DEFAULT NULL,
  `results` varchar(255) DEFAULT NULL,
  `learnings` varchar(255) DEFAULT NULL,
  `customer2` varchar(255) DEFAULT NULL,
  `problem2` varchar(255) DEFAULT NULL,
  `solution2` varchar(255) DEFAULT NULL,
  `risk_assumpt2` varchar(255) DEFAULT NULL,
  `solution_criteria2` varchar(255) DEFAULT NULL,
  `results2` varchar(255) DEFAULT NULL,
  `learnings2` varchar(255) DEFAULT NULL,
  `customer3` varchar(255) DEFAULT NULL,
  `problem3` varchar(255) DEFAULT NULL,
  `solution3` varchar(255) DEFAULT NULL,
  `risk_assumpt3` varchar(255) DEFAULT NULL,
  `solution_criteria3` varchar(255) DEFAULT NULL,
  `results3` varchar(255) DEFAULT NULL,
  `learnings3` varchar(255) DEFAULT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`valid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `validation_board`
--

INSERT INTO `validation_board` (`valid_id`, `customer`, `problem`, `solution`, `risk_assumpt`, `solution_criteria`, `results`, `learnings`, `customer2`, `problem2`, `solution2`, `risk_assumpt2`, `solution_criteria2`, `results2`, `learnings2`, `customer3`, `problem3`, `solution3`, `risk_assumpt3`, `solution_criteria3`, `results3`, `learnings3`, `team_id`) VALUES
(42, 'asdkj', '', 'kjh', 'jkh', 'jkh', 'jkhjkhk', 'hk', 'hjkhjk', 'hkjh', 'kj', 'hkjh', 'jk', 'hjk', 'hk', 'jhjkhkjh', 'kj', 'hjkh', 'kjh', 'jkh', 'kjh', 'jkhjk', 37);

-- --------------------------------------------------------

--
-- Table structure for table `value_prop`
--

CREATE TABLE IF NOT EXISTS `value_prop` (
  `valueprop_id` int(11) NOT NULL AUTO_INCREMENT,
  `wants` varchar(255) NOT NULL,
  `needs` varchar(255) NOT NULL,
  `fears` varchar(255) NOT NULL,
  `benefits` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `ideal_cust` varchar(255) NOT NULL,
  `substitutes` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`valueprop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `value_prop`
--

INSERT INTO `value_prop` (`valueprop_id`, `wants`, `needs`, `fears`, `benefits`, `experience`, `features`, `company`, `product`, `ideal_cust`, `substitutes`, `team_id`) VALUES
(6, '', '', '', '', '', '', '', '', '', '', 37);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
