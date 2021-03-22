-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 07:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahp_reference`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`) VALUES
(23, 'IPhone'),
(24, 'Samsung'),
(25, 'Vivo'),
(28, 'Xiaomi'),
(29, 'Redmi');

-- --------------------------------------------------------

--
-- Table structure for table `ir`
--

CREATE TABLE `ir` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ir`
--

INSERT INTO `ir` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`) VALUES
(37, 'Budget'),
(38, 'Kamera'),
(39, 'Ukuran Layar'),
(40, 'Memori'),
(41, 'Baterai');

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_alternatif`
--

CREATE TABLE `perbandingan_alternatif` (
  `id` int(11) NOT NULL,
  `alternatif1` int(11) NOT NULL,
  `alternatif2` int(11) NOT NULL,
  `pembanding` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_alternatif`
--

INSERT INTO `perbandingan_alternatif` (`id`, `alternatif1`, `alternatif2`, `pembanding`, `nilai`) VALUES
(48, 23, 28, 37, 2),
(54, 25, 29, 37, 1),
(63, 25, 28, 38, 2),
(53, 25, 28, 37, 0.333333),
(62, 24, 29, 38, 1),
(61, 24, 28, 38, 1),
(47, 23, 25, 37, 2),
(52, 24, 29, 37, 0.5),
(60, 24, 25, 38, 1),
(51, 24, 28, 37, 0.5),
(59, 23, 29, 38, 1),
(58, 23, 28, 38, 1),
(46, 23, 24, 37, 2),
(50, 24, 25, 37, 1),
(57, 23, 25, 38, 1),
(49, 23, 29, 37, 2),
(56, 23, 24, 38, 1),
(55, 28, 29, 37, 1),
(64, 25, 29, 38, 1),
(65, 28, 29, 38, 1),
(66, 23, 24, 39, 1),
(67, 23, 25, 39, 1),
(68, 23, 28, 39, 3),
(69, 23, 29, 39, 1),
(70, 24, 25, 39, 1),
(71, 24, 28, 39, 1),
(72, 24, 29, 39, 2),
(73, 25, 28, 39, 1),
(74, 25, 29, 39, 1),
(75, 28, 29, 39, 1),
(76, 23, 24, 40, 0.5),
(77, 23, 25, 40, 1),
(78, 23, 28, 40, 1),
(79, 23, 29, 40, 2),
(80, 24, 25, 40, 1),
(81, 24, 28, 40, 0.333333),
(82, 24, 29, 40, 1),
(83, 25, 28, 40, 1),
(84, 25, 29, 40, 1),
(85, 28, 29, 40, 4),
(86, 23, 24, 41, 1),
(87, 23, 25, 41, 1),
(88, 23, 28, 41, 0.5),
(89, 23, 29, 41, 1),
(90, 24, 25, 41, 1),
(91, 24, 28, 41, 1),
(92, 24, 29, 41, 0.25),
(93, 25, 28, 41, 1),
(94, 25, 29, 41, 1),
(95, 28, 29, 41, 2);

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id`, `kriteria1`, `kriteria2`, `nilai`) VALUES
(15, 37, 38, 1),
(17, 37, 40, 0.333333),
(16, 37, 39, 2),
(18, 37, 41, 0.5),
(19, 38, 39, 3),
(20, 38, 40, 0.25),
(21, 38, 41, 1),
(22, 39, 40, 0.5),
(23, 39, 41, 0.333333),
(24, 40, 41, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pv_alternatif`
--

CREATE TABLE `pv_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pv_alternatif`
--

INSERT INTO `pv_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(66, 25, 37, 0.13349),
(69, 23, 38, 0.197778),
(72, 28, 38, 0.175556),
(75, 24, 39, 0.225836),
(65, 24, 37, 0.122205),
(68, 29, 37, 0.186076),
(71, 25, 38, 0.231111),
(74, 23, 39, 0.249646),
(64, 23, 37, 0.322153),
(67, 28, 37, 0.236076),
(70, 24, 38, 0.197778),
(73, 29, 38, 0.197778),
(76, 25, 39, 0.192503),
(77, 28, 39, 0.161734),
(78, 29, 39, 0.170281),
(79, 23, 40, 0.192007),
(80, 24, 40, 0.184323),
(81, 25, 40, 0.185169),
(82, 28, 40, 0.313374),
(83, 29, 40, 0.125127),
(84, 23, 41, 0.161429),
(85, 24, 41, 0.157857),
(86, 25, 41, 0.186429),
(87, 28, 41, 0.257857),
(88, 29, 41, 0.236429);

-- --------------------------------------------------------

--
-- Table structure for table `pv_kriteria`
--

CREATE TABLE `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pv_kriteria`
--

INSERT INTO `pv_kriteria` (`id_kriteria`, `nilai`) VALUES
(37, 0.138012),
(38, 0.176875),
(39, 0.0904298),
(40, 0.342493),
(41, 0.25219);

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id_alternatif`, `nilai`) VALUES
(23, 0.20849),
(24, 0.175209),
(25, 0.187144),
(28, 0.250616),
(29, 0.178541);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pv_kriteria`
--
ALTER TABLE `pv_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
