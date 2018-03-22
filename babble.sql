-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 02:47 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babble`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(35) NOT NULL,
  `regno` varchar(6) NOT NULL,
  `password` varchar(12) NOT NULL,
  `confirm_password` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `descr` varchar(100) NOT NULL,
  `dept` text NOT NULL,
  `gender` text NOT NULL,
  `gmail` varchar(35) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `regno`, `password`, `confirm_password`, `dob`, `descr`, `dept`, `gender`, `gmail`, `contact`) VALUES
('aathi', '16y001', 'qwerty', 'qwerty', '2018-01-01', 'class topper', 'master of computer application', 'male', 'aathikuma@gmail.com', 2147483647),
('regu', '16y043', '123456', '123456', '2018-03-03', 'about me....', 'master of computer application', 'male', 'reguraman@gmail.com', 2147483647);

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
