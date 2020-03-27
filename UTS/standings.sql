-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 12:25 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE `standings` (
  `rank` int(10) NOT NULL,
  `team` varchar(40) NOT NULL,
  `menang` varchar(50) NOT NULL,
  `kalah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standings`
--

INSERT INTO `standings` (`rank`, `team`, `menang`, `kalah`) VALUES
(1, 'Lakers', '49', '14'),
(2, 'Clippers', '44', '20'),
(3, 'Nuggets', '43', '22'),
(4, 'Jazz', '41', '23'),
(5, 'Thunder', '40', '24'),
(6, 'Rockets', '40', '24'),
(7, 'Mavericks', '40', '27'),
(8, 'Grizzlies', '32', '33'),
(9, 'Blazers', '29', '37'),
(10, 'Pelicans', '28', '36'),
(11, 'Kings', '28', '36'),
(12, 'Spurs', '27', '36'),
(13, 'Suns', '26', '39'),
(14, 'Timberwolves', '19', '45'),
(15, 'Warriors', '15', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `standings`
--
ALTER TABLE `standings`
  ADD PRIMARY KEY (`rank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `standings`
--
ALTER TABLE `standings`
  MODIFY `rank` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
