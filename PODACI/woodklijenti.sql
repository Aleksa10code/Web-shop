-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb27.biz.nf
-- Generation Time: Dec 12, 2020 at 07:28 PM
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
-- Table structure for table `woodklijenti`
--

CREATE TABLE `woodklijenti` (
  `id` int(7) NOT NULL,
  `session` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woodklijenti`
--

INSERT INTO `woodklijenti` (`id`, `session`, `datum`) VALUES
(1, '95a34924bb8575b8fbea6304625f5ad0', '2020-12-11 11:55:58'),
(2, 'b434240417c48dded12c4f6b278c6d49', '2020-12-11 12:20:57'),
(3, 'f1f0c61b9b17ca14f8abac8da79cc8df', '2020-12-11 12:28:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `woodklijenti`
--
ALTER TABLE `woodklijenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `woodklijenti`
--
ALTER TABLE `woodklijenti`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
