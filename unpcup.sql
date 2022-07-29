-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2022 at 06:01 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unpcup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `email`, `nama`, `nohp`) VALUES
(1, 'dedysurya', '12345678', 'dedysurya2000@gmail.com', 'Dedy Surya Wijaya', '085646065203'),
(3, 'erwinjohan', '12345678', 'erwinjohan1314@gmail.com', 'Erwin Johan Prasetyo', '04399030950899'),
(4, 'wydesu', '12345678', 'erwinjohan1314@gmail.com', 'Dedy Surya Wijaya', '04399030950899');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `idgame` varchar(50) NOT NULL,
  `role` varchar(12) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `nickname`, `idgame`, `role`, `nomor`, `tim`) VALUES
(18, 'Xinn', 'XInnnn', '33435455', 'Jungler', 'SKX220108003647', 'bren Esport'),
(19, 'Calvin', 'VYN', '39848395', 'Roamer', 'SKX220108003647', 'bren Esport'),
(20, 'Deden', 'Clay', '39849358', 'MidLaner', 'SKX220108003647', 'bren Esport'),
(21, 'Ikhsan', 'Lemon', '3849935', 'Goldlaner', 'SKX220108003647', 'bren Esport'),
(22, 'Faldi', 'R7', '7385758475', 'ExpLaner', 'SKX220108003647', 'bren Esport'),
(23, 'albert iskandar', 'ALBERTTTT', '43545345', 'Jungler', 'PVM220108093419', 'RRQ HOSHI'),
(24, 'Calvin', 'VYNNN', '4545656', 'Roamer', 'PVM220108093419', 'RRQ HOSHI'),
(25, 'Deden', 'CLAYYY', '39849358', 'MidLaner', 'PVM220108093419', 'RRQ HOSHI'),
(26, 'Nando', 'QUEUE', '3849935', 'Goldlaner', 'PVM220108093419', 'RRQ HOSHI'),
(27, 'Zaqqa', 'CTRl', '7385758475', 'ExpLaner', 'PVM220108093419', 'RRQ HOSHI'),
(33, 'Iwan Fals', 'WANN', '33435455', 'Jungler', 'NXD220108180454', 'Evos Legend'),
(34, 'Yurino', 'DONKEY', '39848395', 'Roamer', 'NXD220108180454', 'Evos Legend'),
(35, 'Ikhsan', 'LUMINAIRE', '39849358', 'MidLaner', 'NXD220108180454', 'Evos Legend'),
(36, 'Gustian', 'REKT', '3849935', 'Goldlaner', 'NXD220108180454', 'Evos Legend'),
(37, 'Maxttril', 'ANTIMAGE', '7385758475', 'ExpLaner', 'NXD220108180454', 'Evos Legend'),
(38, 'Gilang Sans', 'SANSS', '8938493483', 'Jungler', 'EWK220108204115', 'Onic Esport'),
(39, 'Kiboy', 'KIBOY', '35465646', 'Roamer', 'EWK220108204115', 'Onic Esport'),
(40, 'Drianlarsen', 'DRIANNN', '456776878', 'MidLaner', 'EWK220108204115', 'Onic Esport'),
(41, 'Calvin Winata', 'CW', '268697098', 'Goldlaner', 'EWK220108204115', 'Onic Esport'),
(42, 'Mtryas', 'BUTS', '336465464', 'ExpLaner', 'EWK220108204115', 'Onic Esport'),
(43, 'Branzzz', 'Branzzz', '3565757', 'Jungler', 'IEU220108204900', 'BIGETRON ALFA'),
(44, 'Hengky', 'KYY', '356575767', 'Roamer', 'IEU220108204900', 'BIGETRON ALFA'),
(45, 'Renbo', 'RENBO', '3464566456', 'MidLaner', 'IEU220108204900', 'BIGETRON ALFA'),
(46, 'Bottol', 'BOTTOL', '34654654654', 'Goldlaner', 'IEU220108204900', 'BIGETRON ALFA'),
(47, 'Maxxx', 'MAXXX', '556756775', 'ExpLaner', 'IEU220108204900', 'BIGETRON ALFA'),
(48, 'Bagas R', 'QUEUE', '33435455', 'Jungler', 'CSL220108233357', 'Aura esport'),
(49, 'Dedy Surya Wijaya', 'PUMPKIN', '39848395', 'Roamer', 'CSL220108233357', 'Aura esport'),
(50, 'Erwin Johan', 'BALDUR', '39849358', 'MidLaner', 'CSL220108233357', 'Aura esport'),
(51, 'Dwi Junianto', 'CHARLES JOHN', '3849935', 'Goldlaner', 'CSL220108233357', 'Aura esport'),
(52, 'Ragil F', 'RAFT', '45654656', 'ExpLaner', 'CSL220108233357', 'Aura esport');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `nomortlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `email`, `pass`, `nama`, `asal`, `logo`, `nomor`, `tgl`, `nomortlp`) VALUES
(8, 'dwi2100@gmail.com', '123456789', 'bren Esport', 'Jakarta', 'SKX220108003647_Screenshot (17).png', 'SKX220108003647', 'Saturday, 08-01-22, 00:36:47', ''),
(9, 'dwi2100@gmail.com', '12345678', 'RRQ HOSHI', 'Jakarta', 'PVM220108093419_Screenshot (8).png', 'PVM220108093419', 'Saturday, 08-01-22, 09:34:19', ''),
(10, 'dedysurya2000@gmail.com', '12345678', 'Evos Legend', 'Jakarta', 'NXD220108180454_Screenshot (6).png', 'NXD220108180454', 'Saturday, 08-01-22, 18:04:54', '07899986678888'),
(11, 'fsdfs@gdfvfv.com', 'qwertyui', 'Onic Esport', 'Jakarta', 'EWK220108204115_UNP.jpg', 'EWK220108204115', 'Saturday, 08-01-22, 20:41:15', '0856460987890'),
(12, 'erwinjohan1314@gmail.com', 'zxcvbnm,', 'BIGETRON ALFA', 'BALI', 'IEU220108204900_kemangi jeruk.jpg', 'IEU220108204900', 'Saturday, 08-01-22, 20:49:00', '0834838438432'),
(13, 'komang@gmail.com', '122fweferferferf', 'Aura esport', 'Medan', 'CSL220108233357_Baymax.jpg', 'CSL220108233357', 'Saturday, 08-01-22, 23:33:57', '0856460987890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
