-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 03:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libraryinformationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AuthorID` int(11) NOT NULL,
  `AuthorName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AuthorID`, `AuthorName`) VALUES
(1, 'Jose Rizal'),
(4, 'William Shakespeare'),
(5, 'Francisco Balagtas Baltazar'),
(7, 'Bukowski');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` int(11) NOT NULL,
  `BookName` varchar(50) NOT NULL,
  `AuthorID` int(11) NOT NULL,
  `DatePublish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `BookName`, `AuthorID`, `DatePublish`) VALUES
(1, 'Noli Me Tangere', 1, '1990-04-30'),
(6, 'Sa Aking Mga Kababata', 1, '1996-10-10'),
(7, 'Sonnet is Life II', 4, '1996-10-10'),
(8, 'Noli Me Tangere', 1, '2017-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DeptID` int(11) NOT NULL,
  `DeptName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DeptID`, `DeptName`) VALUES
(5, 'College of Information and Computing Sciences'),
(7, 'College of Engineering'),
(9, 'College of Business Entrepreneurship and Accountan'),
(10, 'College of Industrial Technology'),
(12, 'College of Teacher Education ');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusID` int(11) NOT NULL,
  `StatusName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusID`, `StatusName`) VALUES
(1, 'Returned'),
(2, 'Check Out');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudID` int(11) NOT NULL,
  `StudName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `DeptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudID`, `StudName`, `Address`, `DeptID`) VALUES
(13, 'Naval, Nicole Ann V.', 'Pengue-Ruyu, Tuguegarao City, Cagayan', 7),
(14, 'Bacani, Marie Kyle', 'Delfin Albano, Isabela', 9),
(15, 'Sibal, Krisha Marie', 'Bauan, Solana, Cagayan', 9),
(16, 'Carpio, Roger Jr. P.', 'Ugac Sur, Tuguegarao City, Cagayan', 7),
(17, 'Maribbay, Joseph Jr. Viloria', 'Pengue-Ruyu, Tuguegarao City, Cagayan', 9),
(18, 'Esguerra, John Omar Divina', 'Antagan 1, Tumauini, Isabela', 7),
(19, 'Mipantao, Mohammad Michael', 'Buguey, Cagayan', 5),
(22, 'Sibal, Krisha Marie', 'Solana, Cagayan', 5),
(24, 'Omar Esguerra', 'Tumauini, Isabela', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TransactionID` int(11) NOT NULL,
  `StudID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `TimeCheckDate` datetime NOT NULL,
  `ReturnDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TransactionID`, `StudID`, `BookID`, `StatusID`, `TimeCheckDate`, `ReturnDate`) VALUES
(3, 7, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 11, 7, 2, '2017-04-12 00:00:00', '2017-04-14 00:00:00'),
(23, 7, 7, 2, '2017-04-12 00:00:00', '2017-04-13 00:00:00'),
(24, 13, 6, 2, '2017-04-12 00:00:00', '2017-04-13 00:00:00'),
(27, 7, 1, 2, '2017-04-11 00:00:00', '2017-04-12 00:00:00'),
(30, 14, 6, 2, '2017-04-14 00:00:00', '2017-04-15 00:00:00'),
(31, 14, 6, 2, '2017-04-13 00:00:00', '2017-04-14 00:00:00'),
(32, 15, 6, 2, '2017-04-11 00:00:00', '2017-04-13 00:00:00'),
(33, 16, 6, 2, '2017-04-11 00:00:00', '2017-04-12 00:00:00'),
(34, 17, 6, 2, '2017-04-11 00:00:00', '2017-04-12 00:00:00'),
(35, 18, 1, 1, '2017-04-14 00:00:00', '2017-04-15 00:00:00'),
(36, 18, 6, 2, '2017-04-15 00:00:00', '2017-04-16 00:00:00'),
(37, 18, 6, 2, '2017-04-15 00:00:00', '2017-04-16 00:00:00'),
(38, 13, 1, 2, '2017-04-14 00:00:00', '2017-04-15 00:00:00'),
(39, 0, 6, 2, '2017-04-15 00:00:00', '2017-04-16 00:00:00'),
(40, 11, 1, 1, '2017-04-22 00:00:00', '2017-04-23 00:00:00'),
(41, 24, 6, 1, '2017-04-14 00:00:00', '2017-04-15 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DeptID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TransactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AuthorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DeptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `StatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
