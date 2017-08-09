-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 08:55 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysadd`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(45) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(45) NOT NULL,
  `pos_code` int(11) NOT NULL,
  `ini_ticketid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finalizedticket`
--

CREATE TABLE `finalizedticket` (
  `fin_ticketid` int(11) NOT NULL,
  `ini_limit` time NOT NULL,
  `emp_id` int(11) NOT NULL,
  `ini_ticketid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `initialticket`
--

CREATE TABLE `initialticket` (
  `ini_ticketid` int(11) NOT NULL,
  `ini_subj` varchar(60) NOT NULL,
  `ini_status` varchar(60) NOT NULL,
  `ini_priority` varchar(60) NOT NULL,
  `ini_date` datetime NOT NULL,
  `ini_limit` time NOT NULL,
  `type_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `pos_id` int(11) NOT NULL,
  `pos_des` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_no` int(11) NOT NULL,
  `room_des` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickettype`
--

CREATE TABLE `tickettype` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `finalizedticket`
--
ALTER TABLE `finalizedticket`
  ADD PRIMARY KEY (`fin_ticketid`);

--
-- Indexes for table `initialticket`
--
ALTER TABLE `initialticket`
  ADD PRIMARY KEY (`ini_ticketid`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `tickettype`
--
ALTER TABLE `tickettype`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `finalizedticket`
--
ALTER TABLE `finalizedticket`
  MODIFY `fin_ticketid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `initialticket`
--
ALTER TABLE `initialticket`
  MODIFY `ini_ticketid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `pos_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tickettype`
--
ALTER TABLE `tickettype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
