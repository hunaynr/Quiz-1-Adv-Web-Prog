-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 12:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dok` int(10) NOT NULL,
  `nip` int(10) NOT NULL,
  `nama_dok` varchar(25) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dok`, `nip`, `nama_dok`, `jenis_kelamin`, `alamat`) VALUES
(1, 990001, 'Puspita Handini', 'P', 'Jakarta'),
(2, 990002, 'Rama Sanjaya', 'L', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pas` int(10) NOT NULL,
  `no_ktp` int(10) NOT NULL,
  `nama_pas` varchar(25) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pas`, `no_ktp`, `nama_pas`, `jenis_kelamin`, `alamat`) VALUES
(1, 880001, 'Anang Hermanto', 'L', 'Medan'),
(2, 880002, 'Rina Santika', 'P', 'Makassar');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_pol` int(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `hari_praktik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id_pol`, `jenis`, `hari_praktik`) VALUES
(1, 'Poli Mata', 'Selasa'),
(2, 'Poli THT', 'Senin, Kamis'),
(3, 'Poli Umum', 'Rabu');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(10) NOT NULL,
  `id_pas` int(10) NOT NULL,
  `id_pol` int(10) NOT NULL,
  `id_dok` int(10) NOT NULL,
  `tanggal_pukul` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id_pas`, `id_pol`, `id_dok`, `tanggal_pukul`) VALUES
(1, 1, 2, 1, '2020-03-01'),
(7, 2, 3, 2, '2020-03-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pas`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_pol`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `fk_pasien_transaksi` (`id_pas`),
  ADD KEY `fk_poliklinik_transaksi` (`id_pol`),
  ADD KEY `fk_dokter_transaksi` (`id_dok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dok` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_pol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_dokter_transaksi` FOREIGN KEY (`id_dok`) REFERENCES `dokter` (`id_dok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pasien_transaksi` FOREIGN KEY (`id_pas`) REFERENCES `pasien` (`id_pas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_poliklinik_transaksi` FOREIGN KEY (`id_pol`) REFERENCES `poliklinik` (`id_pol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
