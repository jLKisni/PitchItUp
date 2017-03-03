-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2017 at 04:02 PM
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
  `revenue_streams` varchar(100) NOT NULL,
  `bmcphoto` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmc`
--

INSERT INTO `bmc` (`bmc_id`, `cust_segment`, `cust_relationship`, `channels`, `value_proposition`, `key_activities`, `key_sources`, `key_partners`, `cost_structures`, `revenue_streams`, `bmcphoto`, `team_id`) VALUES
(19, 'Photographer', 'Subscription', 'instagram.com', 'can share online', 'software development', 'software developer', 'government agencies', 'Software maintenance', 'Advertisements', '', 50),
(20, 'fgdgffghfhr', 'sgfn', 'gfhgj', 'sddfhygnd', 'kfvnbj', 'kdfnvdjf', 'mdfmkfgbm', 'fdmfgbkjgf', 'mnffjd', '', 50),
(21, 'Laksjd', 'alksjd', 'askdj', 'asldkj', 'alskjdlaksjd', 'alkdj', '', '', 'asldkj', '', 50),
(22, 'Laksjd', 'alksjd', 'askdj', 'asldkj', 'alskjdlaksjd', 'alkdj', '', '', 'asldkj', '', 50),
(23, 'Kasjd', 'aksjd', 'kasjd', 'askd', 'akshd', 'kahs', 'a,sdk', '', 'kas', '', 50),
(24, 'Kasjd', 'aksjd', 'kasjd', 'askd', 'akshd', 'kahs', 'a,sdk', '', 'kas', '', 50),
(25, 'Ajasdasasdlaksjdlasd', 'asd', 'asd', 'asd', 'asd', 'asd', '', '', 'asd', '', 50),
(26, 'Ajasdasasdlaksjdlasd', 'asd', 'asd', 'asd', 'asd', 'asd', '', '', 'asd', '', 50),
(27, 'Asdh', 'kajsdh', 'kashd', 'aksdhk', '', '', '', '', '', '', 50),
(28, 'Asdh', 'kajsdh', 'kashd', 'aksdhk', '', '', '', '', '', '', 50),
(29, 'Asasdkaskdaa', 'asdkjh', 'asdk', 'asdlasj', 'asdkjh', 'asdkjh', '', '', 'asdjh', '', 50),
(30, 'Asasdkaskdaas', 'asdkjh', 'asdk', 'asdlasj', 'asdkjh', 'asdkjh', '', '', 'asdjh', '', 50);

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
  `team_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_pitchdeck`
--

INSERT INTO `gen_pitchdeck` (`pitchdeck_id`, `valueprop_id`, `idea_id`, `valid_id`, `bmc_id`, `team_id`, `timestamp`) VALUES
(28, 26, 53, 122, 19, 50, '2017-02-27 11:00:16'),
(29, 27, 54, 123, 20, 50, '2017-02-27 11:04:23'),
(34, 35, 64, 131, 30, 50, '2017-03-03 14:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hist_id` int(11) NOT NULL,
  `hist_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pitchdeck_id` int(11) NOT NULL,
  `hist_memid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hist_id`, `hist_timestamp`, `pitchdeck_id`, `hist_memid`) VALUES
(26, '2017-02-27 11:00:16', 28, 64),
(27, '2017-02-27 11:04:23', 29, 64),
(28, '2017-02-27 11:12:01', 28, 63),
(29, '2017-03-03 01:17:01', 28, 63),
(30, '2017-03-03 01:33:37', 28, 63),
(31, '2017-03-03 11:11:07', 30, 63),
(32, '2017-03-03 11:17:30', 31, 63),
(33, '2017-03-03 13:26:08', 32, 63),
(34, '2017-03-03 13:27:34', 32, 63),
(35, '2017-03-03 13:30:37', 33, 63),
(36, '2017-03-03 14:17:38', 34, 63);

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
  `ideaphoto` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea_genboard`
--

INSERT INTO `idea_genboard` (`idea_id`, `problem`, `people`, `behavior`, `solution`, `ideaphoto`, `team_id`) VALUES
(52, 'hard to share pictures online', 'photographer, photolover', 'like to share photos', 'Instagram - a photo sharing app', '', 50),
(53, 'hard to share pictures online', 'photographer, photolover, gwapa ko', 'like to share photos,fdgghfhgfhghj ', 'Instagram - a photo sharing app', '', 50),
(54, 'ddfjshfsdhajdhjsk', 'fgdgffghfhr', 'sdfhghjgjgj', 'sacdsfdgfg - ascdsgdfhfg', '', 50),
(55, 'kkjascbasi', 'kjwbviwesgb', 'wjbviwejb', 'iwvbwe - vbuywhvcuq', '', 50),
(56, 'ccas', 'klnkl', 'lknl', 'kjjjk', '', 50),
(57, 'kscbaskjcb', 'cjanokcl', 'schniaucsh', 'lablab - tig nawng', '', 50),
(58, 'cbquashvcbuh', 'uewhvbdywhsd', 'iuegdsvbywsdgjb', 'sdgvbuywhsd - wgfsbcyhjasgcuyb', '', 50),
(60, 'asdaskasjhd', 'laksjd', 'asdk', '', '', 50),
(61, 'asdkh', 'kasjd', 'aksjd', '', '', 50),
(62, 'asdasdaasdasakakj', 'ajasdasasdlaksjdlasd', 'asdkjasdaasdala', 'aaksjdlasdakh - kasjhdkah', '', 50),
(63, 'askjdhkalsd', 'asdh', 'askdh', 'akjh - akjshdkashakjhdkahsd', '', 50),
(64, 'kashdkas', 'asasdkaskdaas', 'laksjdaas', 'kasjhdkahas', '', 50),
(65, 'asjhdkjash ', 'askdkasjlkdj   ', 'anksjhjd  ', 'lablab - aksjdklasjdkajdlsaj  ', '', 50);

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
(63, 'cantiveros', 'angel', 'Hustler', 'angel123', '202cb962ac59075b964b07152d234b70', 50, '2017-03-03 03:00:45', 0),
(64, 'sham', 'ochea', 'Hipster', 'sham123', '202cb962ac59075b964b07152d234b70', 50, '2017-02-26 22:31:36', 0),
(65, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 51, '2017-03-01 17:33:57', 0);

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
(55, 'angel', 'cantiveros', 'Hustler', 0, 50),
(56, 'sham', 'ochea', 'Hipster', 1, 50),
(57, 'sherleen', 'golisao', 'Hacker', 0, 50),
(58, '', '', '', 0, 51),
(59, '', '', '', 0, 51),
(60, '', '', '', 0, 51);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `teamphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `size`, `status`, `teamphoto`) VALUES
(50, 'pitchitup', 0, 0, ''),
(51, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ungen_pitchdeck`
--

CREATE TABLE `ungen_pitchdeck` (
  `ungen_id` int(11) NOT NULL,
  `valueprop_id` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `bmc_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ungen_pitchdeck`
--

INSERT INTO `ungen_pitchdeck` (`ungen_id`, `valueprop_id`, `idea_id`, `valid_id`, `bmc_id`, `team_id`) VALUES
(7, 36, 65, 132, 0, 50);

-- --------------------------------------------------------

--
-- Table structure for table `validation_board`
--

CREATE TABLE `validation_board` (
  `valid_id` int(11) NOT NULL,
  `validphoto` varchar(255) NOT NULL,
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

INSERT INTO `validation_board` (`valid_id`, `validphoto`, `stage`, `customer`, `problem`, `solution`, `risk_assumpt`, `solution_criteria`, `results`, `learnings`, `customer2`, `problem2`, `solution2`, `risk_assumpt2`, `solution_criteria2`, `results2`, `learnings2`, `customer3`, `problem3`, `solution3`, `risk_assumpt3`, `solution_criteria3`, `results3`, `learnings3`, `customer4`, `problem4`, `solution4`, `risk_assumpt4`, `solution_criteria4`, `results4`, `learnings4`, `customer5`, `problem5`, `solution5`, `risk_assumpt5`, `solution_criteria5`, `results5`, `learnings5`, `team_id`) VALUES
(122, '', 0, NULL, NULL, NULL, NULL, '', '7', 'i learn that they need this app', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(123, '', 0, 'Fgdgffghfhr', 'Ddfjshfsdhajdhjsk', 'Sacdsfdgfg - ascdsgdfhfg ', 'asfd', '10', '8', 'gfghgnhg', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(124, '', 0, 'Cjanokcl', 'Kscbaskjcb', 'Lablab - tig nawng ', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(125, '', 0, 'Cjanokcl', 'Kscbaskjcb', 'Lablab - tig nawng ', 'cwefc1', '10', '8', 'sbsbsd', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(126, '', 0, 'Uewhvbdywhsd', 'Cbquashvcbuh', 'Sdgvbuywhsd - wgfsbcyhjasgcuyb ', 'oewdsnij', '10', '8', 'ioascnoasz', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(127, '', 1, 'Laksjd', 'Kasjhd', ' ', 'laksjd', '10', '8', 'askdj', 'askldj', 'aslkdj', 'aslkdj', 'lasjd', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(128, '', 2, 'Kasjd', 'Asdkh', ' ', 'laksjd', '9', '10', 'akjsdj', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(129, '', 0, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(130, '', 0, 'Asdh', 'Askjdhkalsd', 'Akjh - akjshdkashakjhdkahsd ', '3aksdhh', '9', '7', 'askdjaskj', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(131, '', 10, 'Asasdkaskdaas', 'Kashdkas', 'Kasjhdkahas ', 'askdja', '8', '6', 'asdhkhas', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50),
(132, '', 1, 'Askdkasjlkdj', 'Asjhdkjash', 'Lablab - aksjdklasjdkajdlsaj ', 'alskdjl', '8', '7', 'kajhk ', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50);

-- --------------------------------------------------------

--
-- Table structure for table `value_prop`
--

CREATE TABLE `value_prop` (
  `valueprop_id` int(11) NOT NULL,
  `valuephoto` varchar(255) NOT NULL,
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

INSERT INTO `value_prop` (`valueprop_id`, `valuephoto`, `wants`, `needs`, `fears`, `benefits`, `experience`, `features`, `company`, `product`, `ideal_cust`, `substitutes`, `team_id`) VALUES
(26, '', 'share with public', 'happiness', 'Afraid of posting bad photos online', 'share, like, view', '', 'view photos, instant messaging', 'Pitchitup', 'Instagram', 'Photographer', 'facebook, weChat', 0),
(27, '', 'gfnghhfn', 'dfbgfhhf', 'sdfdgfbdg', 'gnghmhj', 'dhfgnfng', 'dfghnghm', 'Pitchitup', 'Sacdsfdgfg', 'Fgdgffghfhr', 'fhgjhu', 0),
(28, '', 'huyhnvhb', 'uyhvghbn ', 'wedbuhs', 'jyhvhnb', 'gyuvyg', 'hvghbv', 'Pitchitup', 'Lablab', 'Cjanokcl', 'yhvhjmnmbnm', 0),
(29, '', 'buhgbuyhj', 'hjhbuhjhnu', 'edsvbsdh', 'gbyuhjhb', 'yugbyuhjjg', 'hhbhjnhb', 'Pitchitup', 'Sdgvbuywhsd', 'Uewhvbdywhsd', 'yuhnhb', 0),
(30, '', 'askdj', 'aslkdj', 'aksjdhkasjd', 'aslkdj', 'alksdja', 'alskdj', 'Pitchitup', '', 'Laksjd', '', 50),
(31, '', 'asldkj', 'asdkj', ',ksjd', 'asdkj', 'laksjd', 'asd,kj', 'Pitchitup', '', 'Kasjd', '', 50),
(32, '', '', '', 'akskd', '', '', '', 'Pitchitup', 'Aaksjdlasdakh', 'Ajasdasasdlaksjdlasd', '', 50),
(33, '', 'asdkh', 'adskjh', 'asdk', 'asdkjh', 'aksdh', 'asdkjh', 'Pitchitup', 'Aaksjdlasdakh', 'Ajasdasasdlaksjdlasd', '', 50),
(34, '', 'aksjdkh', 'kasjhd', 'a,sdh', 'ajsdhkk', 'asdjh', 'askdjh', 'Pitchitup', 'Akjh', 'Asdh', '', 50),
(35, '', 'sadh', 'ksahdk', 'alksjdal', 'asdkh', 'asdk', 'askdjh', 'Pitchitup', 'Kasjhdkahas', 'Asasdkaskdaas', '', 50),
(36, '', 'aksjdh', 'skdh', 'aksjdaskjdhak', 'aksdh', 'aksdjh', 'aksjdh', 'Pitchitup', 'Lablab', 'Askdkasjlkdj', '', 50);

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
-- Indexes for table `ungen_pitchdeck`
--
ALTER TABLE `ungen_pitchdeck`
  ADD PRIMARY KEY (`ungen_id`);

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
  MODIFY `bmc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `gen_pitchdeck`
--
ALTER TABLE `gen_pitchdeck`
  MODIFY `pitchdeck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `idea_genboard`
--
ALTER TABLE `idea_genboard`
  MODIFY `idea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `memreg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `ungen_pitchdeck`
--
ALTER TABLE `ungen_pitchdeck`
  MODIFY `ungen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `validation_board`
--
ALTER TABLE `validation_board`
  MODIFY `valid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `value_prop`
--
ALTER TABLE `value_prop`
  MODIFY `valueprop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
