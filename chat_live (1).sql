-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 09:28 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat live`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `name` varchar(25) NOT NULL,
  `regno` varchar(7) NOT NULL,
  `send` varchar(50) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT '0',
  `timee` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`name`, `regno`, `send`, `status`, `timee`) VALUES
('yasik', '16Y043', '', 0, '2018-04-11 12:44:24'),
('yasik', '16Y043', 'hai regu', 0, '0000-00-00 00:00:00'),
('yasik', '16Y043', 'usfbusb', 0, '2018-04-11 12:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `dp` blob NOT NULL,
  `name` varchar(35) NOT NULL,
  `regno` varchar(6) NOT NULL,
  `password` varchar(12) NOT NULL,
  `confirm_password` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `descr` varchar(50) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `gmail` varchar(40) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`dp`, `name`, `regno`, `password`, `confirm_password`, `dob`, `descr`, `dept`, `gender`, `gmail`, `contact`) VALUES
(0x30302e6a7067, 'yasik', '16Y043', '123', '123', '1993-12-25', 'good', 'mca', 'male', 'yasik@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
