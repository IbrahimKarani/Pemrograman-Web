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
-- Table structure for table `standings1`
--

CREATE TABLE `standings1` (
  `rank` int(10) NOT NULL,
  `team` varchar(40) NOT NULL,
  `menang` varchar(50) NOT NULL,
  `kalah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standings1`
--

INSERT INTO `standings1` (`rank`, `team`, `menang`, `kalah`) VALUES
(1, 'Bucks', '53', '12'),
(2, 'Raptors', '46', '18'),
(3, 'Celtics', '43', '21'),
(4, 'Heat', '41', '24'),
(5, 'Pacers', '39', '26'),
(6, '76ers', '39', '26'),
(7, 'Nets', '30', '34'),
(8, 'Magic', '30', '35'),
(9, 'Wizards', '24', '40'),
(10, 'Hornets', '23', '42'),
(11, 'Bulls', '22', '43'),
(12, 'Knicks', '21', '45'),
(13, 'Pistons', '20', '46'),
(14, 'Hawks', '20', '47'),
(15, 'Cavaliers', '19', '46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `standings1`
--
ALTER TABLE `standings1`
  ADD PRIMARY KEY (`rank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `standings1`
--
ALTER TABLE `standings1`
  MODIFY `rank` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
