-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 07:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `wash1`
--

DROP TABLE IF EXISTS `wash1`;
CREATE TABLE `wash1` (
  `log` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wash1`
--

INSERT INTO `wash1` (`log`, `username`, `phone`, `email`, `password`, `Gender`) VALUES
(7, 'Joeljunior', '0244820377', 'm@m.com', '1234567`', 'male'),
(8, 'Joeljunior', '0244820377', 'joel23form3b@gmail.com', 'asdf', 'female'),
(9, 'Joeljunior', '0244820377', 'joel23form3b@gmail.com', 'asdf', 'female'),
(10, 'Joeljunior', '0244820377', 'm@m.com', '12334567890', 'male'),
(11, 'Joeljunior', '0244820377', 'joel23form3b@gmail.com', 'kyliejenner', 'male'),
(12, 'Joeljunior', '0244820377', 'joel23form3b@gmail.com', 'weertuu', 'male'),
(13, 'Joeljunior', '0244820377', 'joel23form3b@gmail.com', 'erty', 'male'),
(14, 'Joeljunior', '0244820377', 'm@m.com', 'kyliejenner', ''),
(15, 'Joeljunior', '0244820377', 'joel23form3b@gmail.com', 'kyliejenner', 'male'),
(16, 'Joeljunior', '0244820377', 'joel23form3b@gmail.com', '234', 'male'),
(17, 'Joeljunior', '0244820377', 'm@m.com', 'jhgfds', ''),
(18, 'gofuigug', '0244820377', 'joel23form3b@gmail.com', '234567', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wash1`
--
ALTER TABLE `wash1`
  ADD PRIMARY KEY (`log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wash1`
--
ALTER TABLE `wash1`
  MODIFY `log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
