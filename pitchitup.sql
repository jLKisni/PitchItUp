-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 04:39 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `idea_genboard`
--

INSERT INTO `idea_genboard` (`idea_id`, `problem`, `people`, `behavior`, `solution`, `team_id`) VALUES
(7, 'haha', 'Ako', 'akshdksah', 'asdsad', 39);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `FirstName`, `LastName`, `role`, `username`, `password`, `team_id`, `timestamp`) VALUES
(44, 'Louise', 'John', 'Hustler', 'jLkisni', 'f6fdffe48c908deb0f4c3bd36c032e72', 39, '2017-02-18 03:38:04'),
(48, 'Angelica', 'Cantiveros', 'Hipster', 'angellove', 'f6fdffe48c908deb0f4c3bd36c032e72', 39, '2017-02-18 14:47:28'),
(49, 'Admin', 'Admin', 'Admin', 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 0, '2017-02-18 14:47:28');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`memreg_id`, `mem_firstname`, `mem_lastname`, `mem_role`, `mem_status`, `team_id`) VALUES
(22, 'Angelica', 'Cantiveros', 'Hipster', 1, 39),
(23, 'Shamcy', 'Supsup', 'Hipster', 0, 39),
(24, 'Sherleen', 'Golisao', 'Hacker', 0, 39);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `size`, `status`) VALUES
(39, 'teambangan', 0, 0);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
