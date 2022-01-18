-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb27.biz.nf
-- Generation Time: Dec 14, 2020 at 12:14 PM
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
-- Table structure for table `woodkorpa`
--

CREATE TABLE `woodkorpa` (
  `id` int(7) NOT NULL,
  `woodshopuser` text NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `adresa` text NOT NULL,
  `grad` text NOT NULL,
  `postanskibroj` text NOT NULL,
  `telefon` text NOT NULL,
  `email` text NOT NULL,
  `napomena` text NOT NULL,
  `korpa` varchar(200) NOT NULL,
  `ukupno` int(9) NOT NULL,
  `naruceno` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isporuceno` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `naplaceno` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woodkorpa`
--

INSERT INTO `woodkorpa` (`id`, `woodshopuser`, `ime`, `prezime`, `adresa`, `grad`, `postanskibroj`, `telefon`, `email`, `napomena`, `korpa`, `ukupno`, `naruceno`, `isporuceno`, `naplaceno`, `datum`) VALUES
(11, '5fd74238a3f4a', 'Dragas', 'Dejanovic', 'Mokranjceva 2C', 'NiÅ¡', '18000', '066/011-6285', 'dragasdejanovic@gmail.com', 'Ovo je komentar', '7*1*65000-31*3*23000-', 134000, '2020-12-14 10:45:12', '2020-12-14 11:22:00', '2020-12-14 11:52:00', '2020-12-14 10:45:12'),
(10, '5fd73bb48f972', 'stefan', 'Petrovic', 'Bul. Mihajla Pupina 115e/4', 'Nis', '18000', '060/40/50/276', 'aleksa.jovanovic.97@gmail.com', '', '19*1*52000-8*2*40000-', 132000, '2020-12-14 10:42:54', '2020-12-14 11:48:00', '2020-12-14 10:51:00', '2020-12-14 10:42:54'),
(13, '5fd73bb48f972', 'Mile', 'Petrovic', 'Zorana Djindjica 6', 'Nis', '18000', '0620030430', 'aleksa.jovanovic.97@gmail.com', '', '24*4*30000-13*1*43000-', 163000, '2020-12-14 11:34:27', '2020-12-14 11:48:00', '2020-12-14 11:53:00', '2020-12-14 11:34:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `woodkorpa`
--
ALTER TABLE `woodkorpa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `woodkorpa`
--
ALTER TABLE `woodkorpa`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
