-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 11:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pitchitup`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmc`
--

CREATE TABLE `bmc` (
  `bmc_id` int(11) NOT NULL,
  `cust_segment` varchar(255) NOT NULL,
  `cust_relationship` varchar(255) NOT NULL,
  `channels` varchar(255) NOT NULL,
  `value_proposition` varchar(255) NOT NULL,
  `key_activities` varchar(255) NOT NULL,
  `key_sources` varchar(255) NOT NULL,
  `key_partners` varchar(255) NOT NULL,
  `cost_structures` varchar(50) NOT NULL,
  `revenue_streams` varchar(100) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmc`
--

INSERT INTO `bmc` (`bmc_id`, `cust_segment`, `cust_relationship`, `channels`, `value_proposition`, `key_activities`, `key_sources`, `key_partners`, `cost_structures`, `revenue_streams`, `team_id`) VALUES
(5, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 37);

-- --------------------------------------------------------

--
-- Table structure for table `gen_pitchdeck`
--

CREATE TABLE `gen_pitchdeck` (
  `pitchdeck_id` int(11) NOT NULL,
  `num_pitchdeck` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `bmc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hist_id` int(11) NOT NULL,
  `date_LastViewed` date NOT NULL,
  `date_LastModified` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `idea_genboard`
--

CREATE TABLE `idea_genboard` (
  `idea_id` int(11) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL,
  `behavior` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea_genboard`
--

INSERT INTO `idea_genboard` (`idea_id`, `problem`, `people`, `behavior`, `solution`, `team_id`) VALUES
(5, 'asd', 'asd', 'asd', 'asd', 37);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(11) NOT NULL,
  `FirstName` varchar(60) NOT NULL,
  `LastName` varchar(60) NOT NULL,
  `role` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `FirstName`, `LastName`, `role`, `username`, `password`, `team_id`) VALUES
(41, 'zxczxc', 'qweasd', 'Hipster', 'jLkisni', 'f6fdffe48c908deb0f4c3bd36c032e72', 37);

-- --------------------------------------------------------

--
-- Table structure for table `member_registration`
--

CREATE TABLE `member_registration` (
  `memreg_id` int(11) NOT NULL,
  `mem_firstname` varchar(100) NOT NULL,
  `mem_lastname` varchar(100) NOT NULL,
  `mem_role` varchar(30) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`memreg_id`, `mem_firstname`, `mem_lastname`, `mem_role`, `team_id`) VALUES
(16, 'qweasd', 'asdsa', 'Hipster', 37),
(17, 'asdsa', 'asd', 'Hustler', 37),
(18, 'qweasd', 'asdsad', 'Hipster', 37);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `size`, `status`) VALUES
(37, 'asdsad', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `validation_board`
--

CREATE TABLE `validation_board` (
  `valid_id` int(11) NOT NULL,
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
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validation_board`
--

INSERT INTO `validation_board` (`valid_id`, `customer`, `problem`, `solution`, `risk_assumpt`, `solution_criteria`, `results`, `learnings`, `customer2`, `problem2`, `solution2`, `risk_assumpt2`, `solution_criteria2`, `results2`, `learnings2`, `customer3`, `problem3`, `solution3`, `risk_assumpt3`, `solution_criteria3`, `results3`, `learnings3`, `team_id`) VALUES
(42, 'asdkj', '', 'kjh', 'jkh', 'jkh', 'jkhjkhk', 'hk', 'hjkhjk', 'hkjh', 'kj', 'hkjh', 'jk', 'hjk', 'hk', 'jhjkhkjh', 'kj', 'hjkh', 'kjh', 'jkh', 'kjh', 'jkhjk', 37);

-- --------------------------------------------------------

--
-- Table structure for table `value_prop`
--

CREATE TABLE `value_prop` (
  `valueprop_id` int(11) NOT NULL,
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
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmc`
--
ALTER TABLE `bmc`
  ADD PRIMARY KEY (`bmc_id`);

--
-- Indexes for table `gen_pitchdeck`
--
ALTER TABLE `gen_pitchdeck`
  ADD PRIMARY KEY (`pitchdeck_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hist_id`);

--
-- Indexes for table `idea_genboard`
--
ALTER TABLE `idea_genboard`
  ADD PRIMARY KEY (`idea_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `member_registration`
--
ALTER TABLE `member_registration`
  ADD PRIMARY KEY (`memreg_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `validation_board`
--
ALTER TABLE `validation_board`
  ADD PRIMARY KEY (`valid_id`);

--
-- Indexes for table `value_prop`
--
ALTER TABLE `value_prop`
  ADD PRIMARY KEY (`valueprop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmc`
--
ALTER TABLE `bmc`
  MODIFY `bmc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gen_pitchdeck`
--
ALTER TABLE `gen_pitchdeck`
  MODIFY `pitchdeck_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `idea_genboard`
--
ALTER TABLE `idea_genboard`
  MODIFY `idea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `memreg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `validation_board`
--
ALTER TABLE `validation_board`
  MODIFY `valid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `value_prop`
--
ALTER TABLE `value_prop`
  MODIFY `valueprop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
