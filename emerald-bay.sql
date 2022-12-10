-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 04:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emerald-bay`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BID` int(11) NOT NULL,
  `RNO` int(11) NOT NULL,
  `CNAME` varchar(255) NOT NULL,
  `CNUMBER` int(11) NOT NULL,
  `NIC` int(11) NOT NULL,
  `CDAYS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`BID`, `RNO`, `CNAME`, `CNUMBER`, `NIC`, `CDAYS`) VALUES
(1, 3, 'sadsa', 123, 123312, 12),
(2, 4, 'adasda', 234, 234, 234),
(3, 4, 'adasda', 234, 234, 234),
(4, 4, 'adasda', 234, 234, 234),
(5, 4, 'adasda', 234, 234, 234),
(6, 4, 'adasd', 12312, 213, 123),
(7, 4, 'adasd', 12312, 213, 123),
(8, 4, 'dsdv', 123, 231, 132),
(9, 4, 'fdsafsd', 213, 312132, 12),
(10, 4, 'fds', 342, 234, 23),
(11, 4, 'fdsf', 324, 243, 243);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `RID` int(11) NOT NULL,
  `AVAILABILITY` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `AC` varchar(255) NOT NULL,
  `PRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`RID`, `AVAILABILITY`, `TYPE`, `AC`, `PRICE`) VALUES
(4, 'yes', 'Luxury', 'no', 15000),
(5, 'yes', 'Duluxe', 'no', 15000),
(6, 'no', 'Normal', 'no', 5164);

-- --------------------------------------------------------

--
-- Table structure for table `serviceregister`
--

CREATE TABLE `serviceregister` (
  `SID` int(11) NOT NULL,
  `SNAME` varchar(255) NOT NULL,
  `CNAME` varchar(255) NOT NULL,
  `DAYS` int(11) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `COUNT` int(11) NOT NULL,
  `CONTACT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serviceregister`
--

INSERT INTO `serviceregister` (`SID`, `SNAME`, `CNAME`, `DAYS`, `DATE`, `COUNT`, `CONTACT`) VALUES
(3, 'Luxury', 'dscsd', 312, '213', 21, 23234),
(4, 'Weddings', 'dscsd', 312, '213', 21, 23234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `serviceregister`
--
ALTER TABLE `serviceregister`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `serviceregister`
--
ALTER TABLE `serviceregister`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
