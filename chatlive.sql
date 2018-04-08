-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 07:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatlive`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `name` varchar(25) NOT NULL,
  `regno` varchar(7) NOT NULL,
  `send` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`name`, `regno`, `send`) VALUES
('a', '16y051', '<br />\r\n<b>Notice</b>:  Undefined variable: send i'),
('b', '16y050', '<br />\r\n<b>Notice</b>:  Undefined variable: send i'),
('', '16y050', 'hai 50'),
('', '16y050', 'hai 51'),
('', '16y050', 'hai 50'),
('', '16y050', 'hai 51'),
('', '16y050', 'hai 50'),
('', '16y050', 'hai 51'),
('', '16y050', 'hai 50'),
('', '16y050', 'hai 51'),
('', '16y050', 'hai 50'),
('', '16y050', 'hai 51'),
('', '16y050', 'i am back with changes'),
('', '16y050', 'hai 51'),
('', '16y050', 'i am also back with changes'),
('', '16y050', 'i am back with changes'),
('', '16y050', 'i am also back with changes'),
('', '16y050', 'i am also back with changes'),
('', '16y050', 'i am also back with changes');

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
(0x696d61676573202831292e6a7067, 'b', '16y050', '123', '123', '1989-11-21', 'just folloew my heart', 'master of application', 'female', 'venkatob7@gmail.com', 2147483647),
(0x696d616765732e6a7067, 'a', '16y051', '123', '123', '1977-12-31', 'multi talented person....', 'master of application', 'male', 'venkatob7@gmail.com', 12345679);

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
