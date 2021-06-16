-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 10:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bteb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `UNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `FNAME`, `LNAME`, `UNAME`, `EMAIL`, `PASSWORD`) VALUES
(8, 'Sazedul Islam', 'Khan', 'sazedul', 'sazedul@gmail.com', '1234566'),
(9, 'Md. Sahaib', 'Mirdha', 'rihan9747', 'alone9747@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `MESSAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `EMAIL`, `MESSAGE`) VALUES
(1, 'rihan9747@yahoo.com', 'dfsdfsdf'),
(2, 'alone9747@gmail.com', 'lk;lk;'),
(3, 'rihan9747@yahoo.com', 'asfsdfsdfsdf'),
(4, 'rihan9747@yahoo.com', 'afdsfsdfsdfds'),
(5, 'rihan9747@yahoo.com', 'fsdfsdf'),
(6, 'rihan9747@yahoo.com', 'ami jani na amar ki kora ucit ami ki korbo jo');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `ROLL` varchar(6) NOT NULL,
  `REG` varchar(6) NOT NULL,
  `EXAM_YEAR` varchar(10) NOT NULL,
  `RESULT` varchar(50) NOT NULL,
  `CGPA` varchar(4) NOT NULL,
  `REFERRED` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ID`, `NAME`, `ROLL`, `REG`, `EXAM_YEAR`, `RESULT`, `CGPA`, `REFERRED`) VALUES
(1, 'Rihan', '927623', '872431', '2017', 'Passed', '3.50', 'none'),
(35, 'Munna Hossain', '927622', '872430', '2019', 'Faileds', '0.00', '66641[t],66642[t],66643[p]'),
(36, 'solaiman', '924710', '872431', '2050', 'passed', '3', 'none'),
(37, 'Md. Sahaib Mirdha', '222652', '000000', '2019', '3', '0', 'none'),
(38, 'sazzad islam', '218220', '111111', '2019', 'failed', '0', 'none'),
(39, 'Md. Sahaib Mirdha', '10', '10', '10', 'failed', '0', 'none'),
(40, 'Md. Sahaib Mirdha', '20', '10', '10', 'failed', '0', ''),
(41, 'Md. Sahaib Mirdha', '30', '20', '2019', 'failed', '0', 'none'),
(42, 'Md. Sahaib Mirdha', '40', '40', '40', 'failed', '0', 'none'),
(43, 'Md. Sahaib Mirdha', '80', '80', '80', 'failed', '0', '66666[t]'),
(44, 'Md. Sahaib Mirdha', '90', '90', '90', 'failed', '0', '66641[t]'),
(45, 'sahaibblogs', '102', '872431', '1', 'failed', '0.00', '66641[t],66641[t],66641[t],66641[t],66641[t]'),
(46, 'Md. Sahaib Mirdha', '927623', '872431', '2019', 'passed', '3', 'none'),
(47, 'Md. Sahaib Mirdha', '927623', '872431', '2018', 'Passed', '3.50', 'none'),
(48, 'Md. Sahaib Mirdha', '927623', '872431', '2051', 'failed', '0.00', '66641[t],66641[t],66641[t],66641[t],66641[t]'),
(49, 'Md. Sahaib Mirdha', '927623', '872431', '2052', 'failed', '0.00', '66641[t],66641[t],66641[t],66641[t],66641[t]'),
(50, '', '', '', '', '', '', 'none'),
(51, 'Md. Sahaib Mirdha', '927623', '872431', '40', '100', '3.50', '[]'),
(52, 'Md. Sahaib Mirdha', '255567', '872431', '2050', '', '', 'none'),
(53, 'Md. Sahaib Mirdha', '255567', '872431', '2052', '100', '', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
