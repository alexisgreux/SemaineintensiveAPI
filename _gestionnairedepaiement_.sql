-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 02, 2019 at 02:50 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partiel`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `amount`, `date`) VALUES
(1, 'Tomates', 5.6, 0),
(2, 'Salade', 3, 0),
(3, 'MacBook', 1500, 0),
(4, 'Chips', 3.5, 0),
(5, 'Frites', 300, 0),
(6, 'chips', 4, 0),
(12, 'Salade', 3, 0),
(24, 'Salade', 3.5, 0),
(25, 'Salade', 3.5, 0),
(26, 'Salade', 3.5, 0),
(27, 'Salade', 3.5, 0),
(28, 'Salade', 3.5, 0),
(30, 'baguette', 2.4, 1576188720),
(38, 'Ordinateur', 1500, 1553343120),
(39, 'Ordinateur', 1500, 1553343120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
