-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 08:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server_rahmat`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`) VALUES
(14, 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_agent`
--

CREATE TABLE `t_agent` (
  `id` int(2) NOT NULL,
  `jenis_agent` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_agent`
--

INSERT INTO `t_agent` (`id`, `jenis_agent`) VALUES
(2, 'Petugas 2'),
(4, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_jadwal`
--

CREATE TABLE `t_detail_jadwal` (
  `id_jadwal` int(2) NOT NULL,
  `id_lampu` int(2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_jadwal`
--

INSERT INTO `t_detail_jadwal` (`id_jadwal`, `id_lampu`, `status`) VALUES
(0, 0, 'menyala');

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_lokasi`
--

CREATE TABLE `t_detail_lokasi` (
  `id_lokasi` int(2) NOT NULL,
  `id_lampu` int(2) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_lokasi`
--

INSERT INTO `t_detail_lokasi` (`id_lokasi`, `id_lampu`, `status`) VALUES
(11, 0, '0'),
(12, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_jadwal` int(11) NOT NULL,
  `waktu_awal` int(11) NOT NULL,
  `waktu_akhir` int(11) NOT NULL,
  `senin` enum('0','1') NOT NULL,
  `selasa` enum('0','1') NOT NULL,
  `rabu` enum('0','1') NOT NULL,
  `kamis` enum('0','1') NOT NULL,
  `jumat` enum('0','1') NOT NULL,
  `sabtu` enum('0','1') NOT NULL,
  `minggu` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jadwal`
--

INSERT INTO `t_jadwal` (`id_jadwal`, `nama_jadwal`, `waktu_awal`, `waktu_akhir`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
(1, 0, 1, 1, '0', '0', '0', '0', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_lampu`
--

CREATE TABLE `t_lampu` (
  `id_lampu` int(2) NOT NULL,
  `nama_lampu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_log`
--

CREATE TABLE `t_log` (
  `id` int(2) NOT NULL,
  `id_lampu` int(2) NOT NULL,
  `status_log` varchar(30) NOT NULL,
  `id_agent` int(2) NOT NULL,
  `id_mode` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_lokasi`
--

CREATE TABLE `t_lokasi` (
  `id_lokasi` int(2) NOT NULL,
  `nama_lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_lokasi`
--

INSERT INTO `t_lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'jhgjk'),
(3, 'g'),
(4, 'k'),
(7, 'KJASGDKJA'),
(8, 'KJJKGKJ'),
(9, 'CEMET'),
(10, 'kjhkjhjk'),
(11, 'wewew'),
(12, 'ewewwew');

--
-- Triggers `t_lokasi`
--
DELIMITER $$
CREATE TRIGGER `test` AFTER INSERT ON `t_lokasi` FOR EACH ROW BEGIN
 INSERT INTO t_detail_lokasi SET
 id_lokasi = new.id_lokasi
 
 ON DUPLICATE KEY UPDATE id_lokasi=id_lokasi+new.id_lokasi;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `t_mode`
--

CREATE TABLE `t_mode` (
  `id` int(2) NOT NULL,
  `mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_agent`
--
ALTER TABLE `t_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_detail_jadwal`
--
ALTER TABLE `t_detail_jadwal`
  ADD PRIMARY KEY (`id_jadwal`,`id_lampu`);

--
-- Indexes for table `t_detail_lokasi`
--
ALTER TABLE `t_detail_lokasi`
  ADD PRIMARY KEY (`id_lokasi`,`id_lampu`);

--
-- Indexes for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `t_lampu`
--
ALTER TABLE `t_lampu`
  ADD PRIMARY KEY (`id_lampu`);

--
-- Indexes for table `t_log`
--
ALTER TABLE `t_log`
  ADD PRIMARY KEY (`id`,`id_lampu`,`id_agent`,`id_mode`);

--
-- Indexes for table `t_lokasi`
--
ALTER TABLE `t_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `t_mode`
--
ALTER TABLE `t_mode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t_agent`
--
ALTER TABLE `t_agent`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_lampu`
--
ALTER TABLE `t_lampu`
  MODIFY `id_lampu` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_log`
--
ALTER TABLE `t_log`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_lokasi`
--
ALTER TABLE `t_lokasi`
  MODIFY `id_lokasi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_mode`
--
ALTER TABLE `t_mode`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
