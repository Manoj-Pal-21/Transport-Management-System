-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 07:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Manoj', '1999'),
('Rohit', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `area` int(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `streetAdd` varchar(30) NOT NULL,
  `streetAdd2` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `Postalcode` int(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `month` int(30) NOT NULL,
  `day` int(30) NOT NULL,
  `year` int(30) NOT NULL,
  `hour` int(30) NOT NULL,
  `minute` int(30) NOT NULL,
  `ampm` varchar(30) NOT NULL,
  `vehicle` varchar(30) NOT NULL,
  `place1` varchar(30) NOT NULL,
  `place2` varchar(30) NOT NULL,
  `Fare1` varchar(30) NOT NULL,
  `Fare2` varchar(30) NOT NULL,
  `Fare3` varchar(30) NOT NULL,
  `Fare4` varchar(30) NOT NULL,
  `Fare5` varchar(30) NOT NULL,
  `Fare6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`fname`, `lname`, `area`, `phone`, `streetAdd`, `streetAdd2`, `city`, `state`, `Postalcode`, `country`, `month`, `day`, `year`, `hour`, `minute`, `ampm`, `vehicle`, `place1`, `place2`, `Fare1`, `Fare2`, `Fare3`, `Fare4`, `Fare5`, `Fare6`) VALUES
('manoj', 'pal', 2334, 1234567867, 'asdfghjk', '', 'Thane', 'maharashtra', 234567, 'Austria', 3, 3, 2021, 9, 10, 'PM', 'Refrigerated Truck', 'Nagaland', 'Mizoram', '', '$10.00', '', '', '', ''),
('', '', 0, 0, '', '', '', '', 0, '', 0, 0, 0, 0, 0, 'AM', '', '', '', '', '', '', '', '', ''),
('rohit', 'shiware', 2334, 1234567867, 'asdfghjk', '', '', '', 234567, 'United States', 3, 11, 2021, 10, 10, 'AM', 'Car Carrier', 'Haryana', 'Himachal P', '$5.00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `rate1` varchar(30) NOT NULL,
  `rate2` varchar(30) NOT NULL,
  `rate3` varchar(30) NOT NULL,
  `radio` int(30) NOT NULL,
  `name1` varchar(30) NOT NULL,
  `name2` varchar(30) NOT NULL,
  `credit` int(30) NOT NULL,
  `code` int(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`rate1`, `rate2`, `rate3`, `radio`, `name1`, `name2`, `credit`, `code`, `month`, `year`) VALUES
('1001', '', '', 0, 'manoj', 'pal', 1234567895, 12345, 'August', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
