-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 06:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `doc` varchar(20) NOT NULL,
  `timing` varchar(15) NOT NULL,
  `day` varchar(10) NOT NULL,
  `symptoms` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`doc`, `timing`, `day`, `symptoms`, `name`, `email`, `phone`, `gender`, `date`) VALUES
('Choudary', '9t11a', 'Sunday', 'testsymptoms', 'test', 'test@gamil.com', 2147483647, 'Male', 29052020);

-- --------------------------------------------------------

--
-- Table structure for table `docreg`
--

CREATE TABLE `docreg` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` int(12) NOT NULL,
  `age` int(2) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docreg`
--

INSERT INTO `docreg` (`name`, `email`, `mobile`, `age`, `pass`) VALUES
('test', 'test@gmail.com', 2147483647, 20, 'test@123');

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` int(12) NOT NULL,
  `age` int(2) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`name`, `email`, `mobile`, `age`, `pass`) VALUES
('test', 'test@gmail.com', 2147483647, 20, 'test@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docreg`
--
ALTER TABLE `docreg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
