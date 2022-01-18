-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb27.biz.nf
-- Generation Time: Dec 14, 2020 at 12:13 PM
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
-- Table structure for table `namestaj`
--

CREATE TABLE `namestaj` (
  `id` int(7) NOT NULL,
  `grupa` text NOT NULL,
  `naziv` text NOT NULL,
  `podnaziv` text NOT NULL,
  `cena` int(7) NOT NULL,
  `brojkomada` int(7) NOT NULL,
  `prodato` int(7) NOT NULL,
  `opis` text NOT NULL,
  `slika1` text NOT NULL,
  `slika2` text NOT NULL,
  `slika3` text NOT NULL,
  `slika4` text NOT NULL,
  `slika5` text NOT NULL,
  `slika6` text NOT NULL,
  `slika7` text NOT NULL,
  `slika8` text NOT NULL,
  `slika9` text NOT NULL,
  `slika10` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `namestaj`
--

INSERT INTO `namestaj` (`id`, `grupa`, `naziv`, `podnaziv`, `cena`, `brojkomada`, `prodato`, `opis`, `slika1`, `slika2`, `slika3`, `slika4`, `slika5`, `slika6`, `slika7`, `slika8`, `slika9`, `slika10`, `datum`) VALUES
(2, 'Klub stolovi', 'Klub sto, krug', 'Klub sto', 36000, 10, 0, 'Ovo je jedan klub sto.', 'namestaj/16076871311.jpg', 'namestaj/16078599252.jpg', '', '', '', '', '', '', '', '', '2020-12-11 11:45:31'),
(13, 'Klub stolovi', 'KLUB STO - TRAPEZ', 'Sto - Trapez', 43000, 9, 1, 'Ovo je klub sto trapez. ', 'namestaj/16078600101.jpg', 'namestaj/16078600102.jpg', 'namestaj/16078600103.jpg', 'namestaj/16078600104.jpg', '', '', '', '', '', '', '2020-12-13 11:46:50'),
(5, 'Trpezarijski sto', 'TRPEZARIJSKI STO - P', 'Sto P', 50000, 10, 0, 'Ovo je jedan trpezarijski sto od punog drveta.', 'namestaj/16078585411.jpg', 'namestaj/16078585412.jpg', '', '', '', '', '', '', '', '', '2020-12-13 11:22:21'),
(4, 'Trpezarijski sto', 'TRPEZARIJSKI STO - KRIVUDAVE IVICE', 'Trpezarijski sto', 45000, 10, 0, 'Ovo je jedan trpezarijski sto od punog drveta.', 'namestaj/16078584721.jpg', 'namestaj/16078584722.jpg', 'namestaj/16078584723.jpg', '', '', '', '', '', '', '', '2020-12-13 11:21:12'),
(6, 'Trpezarijski sto', 'TRPEZARIJSKI STO - SPIDER', 'Sto Spider', 60000, 10, 0, 'Ovo je jedan trpezarijski sto spider.', 'namestaj/16078586441.jpg', 'namestaj/16078586442.jpg', 'namestaj/16078586443.jpg', '', '', '', '', '', '', '', '2020-12-13 11:24:04'),
(7, 'Trpezarijski sto', 'Trpezarijski sto - w', 'Sto W', 65000, 10, 0, 'Trpezarijski sto w sa visokim nogicama.', 'namestaj/16078587431.jpg', 'namestaj/16078587432.jpg', 'namestaj/16078587433.jpg', '', '', '', '', '', '', '', '2020-12-13 11:25:43'),
(8, 'Trpezarijski sto', 'TRPEZARIJSKI STO - X LIVE', 'Sto - X LIVE', 40000, 10, 0, 'Ovo je jedan X Live sto', 'namestaj/16078588541.jpg', 'namestaj/16078588542.jpg', '', '', '', '', '', '', '', '', '2020-12-13 11:27:34'),
(9, 'Trpezarijski sto', 'Trpezarijski sto - X MDF', 'Sto X MDF ', 70000, 10, 0, 'Ovo je jedan X MDF model trpezarisjkog stola.', 'namestaj/16078589121.jpg', 'namestaj/16078589122.jpg', '', '', '', '', '', '', '', '', '2020-12-13 11:28:32'),
(10, 'Klub stolovi', 'Klub sto - POLYGON', 'Polygon ', 40000, 10, 0, 'Ovo je klub sto polygon. Zgodan za manja okupljanja. Napravljen od veoma kvalitetnog materijala. ', 'namestaj/16078592841.jpg', 'namestaj/16078592842.jpg', 'namestaj/16078592843.jpg', '', '', '', '', '', '', '', '2020-12-13 11:34:44'),
(11, 'Klub stolovi', 'KLUB STO - KRUG', 'Sto krug', 35000, 10, 0, 'Ovo je klub sto krug. Napravljen od punog drveta.', 'namestaj/16078594631.jpg', 'namestaj/16078594632.jpg', 'namestaj/16078594633.jpg', '', '', '', '', '', '', '', '2020-12-13 11:37:43'),
(12, 'Klub stolovi', 'Klub sto - parena bukva', 'Sto - parena bukva', 50000, 10, 0, 'Ovaj klub sto je napravljen od parene bukve.', 'namestaj/16078598591.jpg', 'namestaj/16078598592.jpg', '', '', '', '', '', '', '', '', '2020-12-13 11:44:19'),
(14, 'Klub stolovi', 'KLUB STO - PARENA BUKVA', 'Sto - parena bukva', 37000, 10, 0, 'Ovaj klub sto je napravljen od parene bukve.', 'namestaj/16078600751.jpg', 'namestaj/16078600752.jpg', '', '', '', '', '', '', '', '', '2020-12-13 11:47:55'),
(15, 'Komode', 'Komoda - oak natur', 'oak natur', 50000, 10, 0, 'Ovo je komoda napravljena od punog drveta.', 'namestaj/16078603141.jpg', 'namestaj/16078603142.jpg', 'namestaj/16078603143.jpg', 'namestaj/16078603144.jpg', '', '', '', '', '', '', '2020-12-13 11:51:54'),
(16, 'Komode', 'Komoda romboid', 'Romboid', 60000, 10, 0, 'Ovo je komoda romboid.', 'namestaj/16078603971.jpg', 'namestaj/16078603972.jpg', 'namestaj/16078603973.jpg', '', '', '', '', '', '', '', '2020-12-13 11:53:17'),
(17, 'Komode', 'Komoda oak only', 'oak only', 52000, 10, 0, 'Ovo je komoda oak only', 'namestaj/16078604741.jpg', 'namestaj/16078604742.jpg', '', '', '', '', '', '', '', '', '2020-12-13 11:54:34'),
(18, 'Komode', 'Komoda oak sa staklom', 'Oak sa staklom', 39000, 10, 0, 'Ovo je komoda oak koja sadrzi i staklo.', 'namestaj/16078605441.jpg', 'namestaj/16078605442.jpg', 'namestaj/16078605443.jpg', '', '', '', '', '', '', '', '2020-12-13 11:55:44'),
(19, 'Komode', 'Komoda - oak natur', 'oak natur', 52000, 10, 0, 'Ovo je komoda oak natur', 'namestaj/16078606111.jpg', 'namestaj/16078606112.jpg', 'namestaj/16078606113.jpg', '', '', '', '', '', '', '', '2020-12-13 11:56:51'),
(20, 'Komode', 'Komoda plus', 'Plus', 50000, 10, 0, 'Ovo je komoda plus.', 'namestaj/16078607501.jpg', 'namestaj/16078607502.jpg', 'namestaj/16078607503.jpg', 'namestaj/16078607504.jpg', 'namestaj/16078607505.jpg', 'namestaj/16078607506.jpg', 'namestaj/16078607507.jpg', 'namestaj/16078607508.jpg', '', '', '2020-12-13 11:59:10'),
(21, 'Postolja', 'Postolje X', 'postolje x ', 35000, 10, 0, 'Ovo je postolje x', 'namestaj/16078610781.jpg', 'namestaj/16078610782.jpg', 'namestaj/16078610783.jpg', '', '', '', '', '', '', '', '2020-12-13 12:04:38'),
(22, 'Postolja', 'Postolje P', 'postolje p', 40000, 10, 0, 'Ovo je postolje p.', 'namestaj/16078612061.jpg', 'namestaj/16078612062.jpg', 'namestaj/16078612063.jpg', '', '', '', '', '', '', '', '2020-12-13 12:06:46'),
(23, 'Postolja', 'Postolje Trapez', 'Postolje trapez', 45000, 10, 0, 'Ovo je postolje trapez.', 'namestaj/16078613031.jpg', 'namestaj/16078613032.jpg', 'namestaj/16078613033.jpg', '', '', '', '', '', '', '', '2020-12-13 12:08:23'),
(24, 'Postolja', 'Postolje X za krug', 'postolje x krug', 30000, 6, 4, 'Ovo je postolje x krug', 'namestaj/16078614021.jpg', 'namestaj/16078614022.jpg', 'namestaj/16078614023.jpg', '', '', '', '', '', '', '', '2020-12-13 12:10:02'),
(25, 'Postolja', 'Postolje XQ', 'XQ postolje', 41000, 10, 0, 'Postolje XQ', 'namestaj/16078614581.jpg', 'namestaj/16078614582.jpg', 'namestaj/16078614583.jpg', '', '', '', '', '', '', '', '2020-12-13 12:10:58'),
(26, 'Postolja', 'POSTOLJE XQ 2', 'Postolje xq 2', 32000, 10, 0, 'Ovo je novo xq 2 postolje', 'namestaj/16078615581.jpg', 'namestaj/16078615582.jpg', 'namestaj/16078615583.jpg', '', '', '', '', '', '', '', '2020-12-13 12:12:38'),
(27, 'Ploce', 'Ploca hrast', 'Hrast', 30000, 10, 0, 'Ovo je ploca napravljena od hrasta.', 'namestaj/16078616401.jpg', 'namestaj/16078616402.jpg', 'namestaj/16078616403.jpg', '', '', '', '', '', '', '', '2020-12-13 12:14:00'),
(28, 'Ploce', 'Ploca Orah', 'Orah ploce', 36000, 10, 0, 'Ovo je ploca napravljena od oraha.', 'namestaj/16078617061.jpg', 'namestaj/16078617062.jpg', 'namestaj/16078617063.jpg', '', '', '', '', '', '', '', '2020-12-13 12:15:06'),
(29, 'Ploce', 'Ploca kuvani orah', 'kuvani orah', 47000, 10, 0, 'Ovo je kuvani orah.', 'namestaj/16078617771.jpg', 'namestaj/16078617772.jpg', '', '', '', '', '', '', '', '', '2020-12-13 12:16:17'),
(30, 'Barske stolice', 'Barska stolica', 'Barske stolice', 29000, 10, 0, 'Ovo je barska stolica ', 'namestaj/16078620551.jpg', 'namestaj/16078620552.jpg', '', '', '', '', '', '', '', '', '2020-12-13 12:20:55'),
(31, 'Barske stolice', 'Barska stolica classic', 'Classic barska stolica', 23000, 10, 0, 'Barska stolica napravljena od punog drveta.', 'namestaj/16078622441.jpg', 'namestaj/16078622442.jpg', 'namestaj/16078622443.jpg', '', '', '', '', '', '', '', '2020-12-13 12:24:04'),
(32, 'Barske stolice', 'Barska stolica sa naslonom', 'Stolica sa naslonom', 34000, 10, 0, 'Ovo je barska stolica sa naslonom.', 'namestaj/16078623751.jpg', 'namestaj/16078623752.jpg', 'namestaj/16078623753.jpg', '', '', '', '', '', '', '', '2020-12-13 12:26:15'),
(33, 'Fotelje', 'Fotelja lux', 'lux fotelja', 32000, 10, 0, 'Ovo je fotelja lux napravljena od kvalitetnog koznog materijala. ', 'namestaj/16078650881.jpg', 'namestaj/16078650882.jpg', 'namestaj/16078650883.jpg', 'namestaj/16078650884.jpg', '', '', '', '', '', '', '2020-12-13 13:11:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `namestaj`
--
ALTER TABLE `namestaj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `namestaj`
--
ALTER TABLE `namestaj`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
