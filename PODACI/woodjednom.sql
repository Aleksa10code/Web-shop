-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb27.biz.nf
-- Generation Time: Dec 12, 2020 at 07:27 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3675374_aleksa91`
--

-- --------------------------------------------------------

--
-- Table structure for table `woodjednom`
--

CREATE TABLE `woodjednom` (
  `id` int(7) NOT NULL,
  `jednom` int(7) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woodjednom`
--

INSERT INTO `woodjednom` (`id`, `jednom`, `datum`) VALUES
(1, 5, '2020-12-11 12:20:57'),
(2, 5, '2020-12-11 12:28:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `woodjednom`
--
ALTER TABLE `woodjednom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `woodjednom`
--
ALTER TABLE `woodjednom`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
