-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 03:26 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allcars`
--

CREATE TABLE `allcars` (
  `car_id` int(11) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `mark` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cc` int(4) NOT NULL,
  `price` int(11) NOT NULL,
  `year` date NOT NULL,
  `used` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allcars`
--

INSERT INTO `allcars` (`car_id`, `manufacturer`, `mark`, `name`, `cc`, `price`, `year`, `used`) VALUES
(1, 'Toyota', 'Carina', 'Carina GTI', 1900, 1600, '1999-02-02', 1),
(2, 'Toyota', 'Celica', 'Celica JTD', 2400, 1900, '1993-04-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allcars`
--
ALTER TABLE `allcars`
  ADD PRIMARY KEY (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allcars`
--
ALTER TABLE `allcars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
