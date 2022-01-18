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
-- Table structure for table `korpe`
--

CREATE TABLE `korpe` (
  `id` int(11) NOT NULL,
  `idizvestaj` int(11) NOT NULL,
  `jelo1` int(3) NOT NULL,
  `kolicina1` int(7) NOT NULL,
  `jelo2` int(3) NOT NULL,
  `kolicina2` int(7) NOT NULL,
  `jelo3` int(3) NOT NULL,
  `kolicina3` int(7) NOT NULL,
  `jelo4` int(3) NOT NULL,
  `kolicina4` int(7) NOT NULL,
  `jelo5` int(3) NOT NULL,
  `kolicina5` int(7) NOT NULL,
  `jelo6` int(3) NOT NULL,
  `kolicina6` int(7) NOT NULL,
  `jelo7` int(3) NOT NULL,
  `kolicina7` int(7) NOT NULL,
  `jelo8` int(3) NOT NULL,
  `kolicina8` int(7) NOT NULL,
  `jelo9` int(3) NOT NULL,
  `kolicina9` int(7) NOT NULL,
  `jelo10` int(3) NOT NULL,
  `kolicina10` int(7) NOT NULL,
  `jelo11` int(3) NOT NULL,
  `kolicina11` int(7) NOT NULL,
  `jelo12` int(3) NOT NULL,
  `kolicina12` int(7) NOT NULL,
  `jelo13` int(3) NOT NULL,
  `kolicina13` int(7) NOT NULL,
  `jelo14` int(3) NOT NULL,
  `kolicina14` int(7) NOT NULL,
  `jelo15` int(3) NOT NULL,
  `kolicina15` int(7) NOT NULL,
  `jelo16` int(3) NOT NULL,
  `kolicina16` int(7) NOT NULL,
  `jelo17` int(3) NOT NULL,
  `kolicina17` int(7) NOT NULL,
  `jelo18` int(3) NOT NULL,
  `kolicina18` int(7) NOT NULL,
  `jelo19` int(3) NOT NULL,
  `kolicina19` int(7) NOT NULL,
  `jelo20` int(3) NOT NULL,
  `kolicina20` int(7) NOT NULL,
  `detalji` text NOT NULL,
  `korisnik` text NOT NULL,
  `adresa` text NOT NULL,
  `telefon` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `ukupno` int(10) NOT NULL,
  `isporuka` int(1) NOT NULL,
  `naplaceno` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpe`
--
ALTER TABLE `korpe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpe`
--
ALTER TABLE `korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
