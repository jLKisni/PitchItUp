-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 02:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

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
  `revenue_sreams` varchar(100) NOT NULL,
  `hist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `startup_founder`
--

CREATE TABLE `startup_founder` (
  `sf_id` int(11) NOT NULL,
  `FirstName` varchar(60) NOT NULL,
  `LastName` varchar(60) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `validation_board`
--

CREATE TABLE `validation_board` (
  `valid_id` int(11) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  `risk_assumpt` varchar(255) NOT NULL,
  `solution_criteria` varchar(255) NOT NULL,
  `results` varchar(255) NOT NULL,
  `learnings` varchar(255) NOT NULL,
  `hist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `hist_id` int(11) NOT NULL
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
-- Indexes for table `startup_founder`
--
ALTER TABLE `startup_founder`
  ADD PRIMARY KEY (`sf_id`);

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
  MODIFY `bmc_id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `idea_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `startup_founder`
--
ALTER TABLE `startup_founder`
  MODIFY `sf_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `validation_board`
--
ALTER TABLE `validation_board`
  MODIFY `valid_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `value_prop`
--
ALTER TABLE `value_prop`
  MODIFY `valueprop_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
