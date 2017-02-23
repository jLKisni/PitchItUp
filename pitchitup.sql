-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 10:47 AM
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
(10, 'akshd \nasdasd\n\n', 'asdsa', 'asdsa', 'asdsa', 'sadasd', 'asdasd', 'asdasd', 'asdasasd', 'asdas', 40);

-- --------------------------------------------------------

--
-- Table structure for table `gen_pitchdeck`
--

CREATE TABLE `gen_pitchdeck` (
  `pitchdeck_id` int(11) NOT NULL,
  `valueprop_id` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `bmc_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_pitchdeck`
--

INSERT INTO `gen_pitchdeck` (`pitchdeck_id`, `valueprop_id`, `idea_id`, `valid_id`, `bmc_id`, `team_id`) VALUES
(2, 1, 14, 48, 10, 40);

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
(14, 'having hard time , dakog ulok\n', 'akshd \nasdasd\n\n', 'gwapa \ncute \nlovely ', 'PitchItup - A pitch deck nindot generator', 40);

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
  `team_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `member_status` int(11) NOT NULL COMMENT '0 - Active | 1 Not active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `FirstName`, `LastName`, `role`, `username`, `password`, `team_id`, `timestamp`, `member_status`) VALUES
(49, 'Admin', 'Admin', 'Admin', 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 0, '2017-02-18 14:47:28', 0),
(51, 'cantiveros', 'angel', 'Hustler', 'angelbelove', '202cb962ac59075b964b07152d234b70', 40, '2017-02-22 20:54:24', 0),
(52, 'sherleen', 'golisao', 'Hipster', 'sherleen123', '81dc9bdb52d04dc20036dbd8313ed055', 40, '2017-02-19 22:01:51', 0),
(53, 'ochea', 'sham', 'Hipster', 'shamochea', '202cb962ac59075b964b07152d234b70', 41, '2017-02-20 14:26:12', 1),
(54, 'Eviota', 'Renan Anthony', 'Hipster', 'haha22', '014d6cc7a4ed554175bab9318e9a1b64', 42, '2017-02-19 23:02:42', 0),
(55, 'Carungay', 'Hannah Jade', 'Hustler', 'dimple.nanah', 'ed3e50121fb8296cd8c71f8e592e2e64', 43, '2017-02-19 23:07:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_registration`
--

CREATE TABLE `member_registration` (
  `memreg_id` int(11) NOT NULL,
  `mem_firstname` varchar(100) NOT NULL,
  `mem_lastname` varchar(100) NOT NULL,
  `mem_role` varchar(30) NOT NULL,
  `mem_status` int(11) NOT NULL COMMENT '0 - not registered | 1 registered',
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`memreg_id`, `mem_firstname`, `mem_lastname`, `mem_role`, `mem_status`, `team_id`) VALUES
(25, 'angel', 'cantiveros', 'Hustler', 0, 40),
(26, 'sherleen', 'golisao', '', 1, 40),
(27, '', '', '', 0, 40),
(28, 'sham', 'ochea', 'Hipster', 0, 41),
(29, 'angel', 'cantiveros', 'Hustler', 0, 41),
(30, 'sherleen', 'golisao', 'Hacker', 0, 41),
(31, 'Renan Anthony', 'Eviota', 'Hipster', 0, 42),
(32, 'Mary Anne', 'Sasan', 'Hustler', 0, 42),
(33, 'Jan Karl', 'Cuizon', 'Hacker', 0, 42),
(34, 'Hannah Jade', 'Carungay', 'Hustler', 0, 43),
(35, 'Patrick Jason', 'Abella', 'Hipster', 0, 43),
(36, 'Jhon Carlo', 'Vano', 'Hacker', 0, 43);

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
(40, 'Team Bahug Taler', 0, 0),
(41, 'talers', 0, 0),
(42, 'PitchItUp', 0, 0),
(43, 'PATCH', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `validation_board`
--

CREATE TABLE `validation_board` (
  `valid_id` int(11) NOT NULL,
  `stage` int(11) NOT NULL,
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
  `customer4` varchar(100) NOT NULL,
  `problem4` varchar(255) NOT NULL,
  `solution4` varchar(255) NOT NULL,
  `risk_assumpt4` varchar(255) NOT NULL,
  `solution_criteria4` varchar(255) NOT NULL,
  `results4` varchar(255) NOT NULL,
  `learnings4` varchar(255) NOT NULL,
  `customer5` varchar(100) NOT NULL,
  `problem5` varchar(255) NOT NULL,
  `solution5` varchar(255) NOT NULL,
  `risk_assumpt5` varchar(255) NOT NULL,
  `solution_criteria5` varchar(255) NOT NULL,
  `results5` varchar(255) NOT NULL,
  `learnings5` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validation_board`
--

INSERT INTO `validation_board` (`valid_id`, `stage`, `customer`, `problem`, `solution`, `risk_assumpt`, `solution_criteria`, `results`, `learnings`, `customer2`, `problem2`, `solution2`, `risk_assumpt2`, `solution_criteria2`, `results2`, `learnings2`, `customer3`, `problem3`, `solution3`, `risk_assumpt3`, `solution_criteria3`, `results3`, `learnings3`, `customer4`, `problem4`, `solution4`, `risk_assumpt4`, `solution_criteria4`, `results4`, `learnings4`, `customer5`, `problem5`, `solution5`, `risk_assumpt5`, `solution_criteria5`, `results5`, `learnings5`, `team_id`) VALUES
(48, 0, NULL, NULL, NULL, NULL, 'asd', 'asd', 'asd', NULL, NULL, NULL, NULL, 'asd', 'asd', 'asd', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 40);

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
-- Dumping data for table `value_prop`
--

INSERT INTO `value_prop` (`valueprop_id`, `wants`, `needs`, `fears`, `benefits`, `experience`, `features`, `company`, `product`, `ideal_cust`, `substitutes`, `team_id`) VALUES
(1, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'Team Bahug Taler', 'PitchItup', 'Akshd asdasd', 'asd', 40);

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
  MODIFY `bmc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gen_pitchdeck`
--
ALTER TABLE `gen_pitchdeck`
  MODIFY `pitchdeck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `idea_genboard`
--
ALTER TABLE `idea_genboard`
  MODIFY `idea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `memreg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `validation_board`
--
ALTER TABLE `validation_board`
  MODIFY `valid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `value_prop`
--
ALTER TABLE `value_prop`
  MODIFY `valueprop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
