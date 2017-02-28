-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 02:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvcon`
--

CREATE TABLE `cvcon` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `website` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cvcon`
--

INSERT INTO `cvcon` (`id`, `email`, `phonenumber`, `website`) VALUES
(1, 'alaa', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `educationalinstitution` varchar(200) NOT NULL,
  `certificate` varchar(200) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `certificatedate` date NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `educationalinstitution`, `certificate`, `specialization`, `certificatedate`, `country`, `city`, `grade`) VALUES
(1, 'gbsfb', 'bdfb', 'dzbxc', '2017-01-31', '', 'cbcf', 'xfbcx'),
(2, 'gbsfb', 'bdfb', 'dzbxc', '2017-01-31', 'fbdf', 'cbcf', 'xfbcx');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `lang1` varchar(100) NOT NULL,
  `rate1` varchar(50) NOT NULL,
  `lang2` varchar(100) NOT NULL,
  `rate2` varchar(50) NOT NULL,
  `lang3` varchar(100) NOT NULL,
  `rate3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `lang1`, `rate1`, `lang2`, `rate2`, `lang3`, `rate3`) VALUES
(1, 'AF', 'accepted', 'AF', 'accepted', 'AF', 'accepted'),
(2, 'Afrikanns', 'accepted', 'Afrikanns', 'accepted', 'Afrikanns', 'accepted'),
(3, 'Afrikanns', 'accepted', 'Afrikanns', 'accepted', 'Afrikanns', 'accepted'),
(4, 'Afrikanns', 'accepted', 'Afrikanns', 'accepted', 'Afrikanns', 'accepted'),
(5, 'Afrikanns', 'accepted', 'Afrikanns', 'accepted', 'Afrikanns', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'alaa', 'lolo_alaa2250@yahoo.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'alaa', 'loloalaa2250@yahoo.com', '1234567890'),
(3, 'alaa1', 'loloalaa225@yahoo.com', '1234567890'),
(4, 'alaaaaaa', 'aaaaaaaaa@yahoo.com', '1234567890'),
(5, 'ali', 'ali@yahoo.com', 'alo'),
(6, 'alaa', 'alaa', 'alaa'),
(7, '', 'email1', 'password1');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `Visastatus` varchar(50) NOT NULL,
  `Othernationalities` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Socialstatus` varchar(50) NOT NULL,
  `Numberofdependents` int(30) NOT NULL,
  `Drivinglicense` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `firstname`, `lastname`, `dateofbirth`, `gender`, `nationality`, `Visastatus`, `Othernationalities`, `Country`, `Socialstatus`, `Numberofdependents`, `Drivinglicense`) VALUES
(1, 'alaa', 'radwan', '1988-07-31', 'mal', 'egyptian', 'Refused', 'none', 'Egypt', 'Married', 5, 'yes'),
(2, 'alaa', '', '0000-00-00', '', '', '', '', '', '', 0, ''),
(3, 'alaa', 'radwan', '2017-01-31', 'fhfg', 'egyptian', 'dont have', 'None', 'Egypt', 'rter', 0, 'Yes'),
(4, '', '', '0000-00-00', '', '', '', '', '', '', 0, ''),
(5, '', '', '0000-00-00', '', '', '', '', '', '', 0, ''),
(6, 'alaa', 'radwan', '2010-01-31', 'male', 'egyptian', '', '', '', '', 0, ''),
(7, '', '', '0000-00-00', '', '', '', '', '', '', 0, ''),
(8, '', '', '0000-00-00', '', '', '', '', '', '', 0, ''),
(9, '', '', '0000-00-00', '', '', '', '', '', '', 0, ''),
(10, '', '', '0000-00-00', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(11) NOT NULL,
  `one` varchar(100) NOT NULL,
  `two` varchar(100) NOT NULL,
  `three` varchar(100) NOT NULL,
  `four` varchar(100) NOT NULL,
  `five` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `one`, `two`, `three`, `four`, `five`) VALUES
(1, 'fdbdf', 'cbfdb', 'dzvxdv', 'dsfdb', 'fdbfd');

-- --------------------------------------------------------

--
-- Table structure for table `workexperince`
--

CREATE TABLE `workexperince` (
  `id` int(11) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workexperince`
--

INSERT INTO `workexperince` (`id`, `companyname`, `position`, `startdate`, `enddate`, `country`, `city`) VALUES
(1, 'fgdf', 'dbsfc', '2016-01-31', '2016-12-31', 'dgfd', 'dfbfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvcon`
--
ALTER TABLE `cvcon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workexperince`
--
ALTER TABLE `workexperince`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `workexperince`
--
ALTER TABLE `workexperince`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
