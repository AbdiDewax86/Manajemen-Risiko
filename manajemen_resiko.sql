-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 02:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen_resiko`
--

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` int(1) NOT NULL,
  `nama` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `nama`) VALUES
(1, 'Informasi'),
(2, 'Orang'),
(3, 'Fisik'),
(4, 'Layanan'),
(5, 'Intangible'),
(6, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipe` int(1) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `akses_informasi` tinyint(1) DEFAULT NULL,
  `akses_orang` tinyint(1) DEFAULT NULL,
  `akses_fisik` tinyint(1) DEFAULT NULL,
  `akses_layanan` tinyint(1) DEFAULT NULL,
  `akses_intangible` tinyint(1) DEFAULT NULL,
  `akses_software` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `risiko`
--

CREATE TABLE `risiko` (
  `id` varchar(64) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `dampak_keterangan` text DEFAULT NULL,
  `dampak_nilai` int(1) DEFAULT NULL,
  `pengancam_keterangan` text DEFAULT NULL,
  `pengancam_nilai` int(1) DEFAULT NULL,
  `bawaan_kerentanan_keterangan` text DEFAULT NULL,
  `bawaan_kerentanan_nilai` int(1) DEFAULT NULL,
  `bawaan_jenis_risiko` int(1) DEFAULT NULL,
  `bawaan_nilai_risiko` int(11) DEFAULT NULL,
  `kontrol_keterangan` text DEFAULT NULL,
  `sisa_paparan_keterangan` text DEFAULT NULL,
  `sisa_paparan_nilai` int(1) DEFAULT NULL,
  `sisa_jenis_risiko` int(1) DEFAULT NULL,
  `sisa_nilai_risiko` int(11) DEFAULT NULL,
  `mitigasi_kontrol` text DEFAULT NULL,
  `mitigasi_pic` text DEFAULT NULL,
  `mitigasi_target` text DEFAULT NULL,
  `subklasifikasi` text DEFAULT NULL,
  `klasifikasi_id` int(1) DEFAULT NULL,
  `bawaan_paparan_keterangan` text DEFAULT NULL,
  `bawaan_paparan_nilai` int(1) DEFAULT NULL,
  `sisa_kerentanan_keterangan` text DEFAULT NULL,
  `sisa_kerentanan_nilai` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `risiko`
--

INSERT INTO `risiko` (`id`, `tanggal`, `dampak_keterangan`, `dampak_nilai`, `pengancam_keterangan`, `pengancam_nilai`, `bawaan_kerentanan_keterangan`, `bawaan_kerentanan_nilai`, `bawaan_jenis_risiko`, `bawaan_nilai_risiko`, `kontrol_keterangan`, `sisa_paparan_keterangan`, `sisa_paparan_nilai`, `sisa_jenis_risiko`, `sisa_nilai_risiko`, `mitigasi_kontrol`, `mitigasi_pic`, `mitigasi_target`, `subklasifikasi`, `klasifikasi_id`, `bawaan_paparan_keterangan`, `bawaan_paparan_nilai`, `sisa_kerentanan_keterangan`, `sisa_kerentanan_nilai`) VALUES
('testId', NULL, 'test keterangan dampak', 5, 'test keterangan pengancam', 5, 'test keterangan kerentanan bawaan', 5, 5, 100, 'test keterangan kontrol', 'test keterangan paparan sisa', 5, 5, 100, 'test mitigasi kontrol', 'test mitigasi PIC', 'test mitigasi target', 'test subklasifikasi', NULL, 'test keterangan paparan bawaan', 5, 'test keterangan kerentanan sisa', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `risiko`
--
ALTER TABLE `risiko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_klasifikasi_id` (`klasifikasi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `risiko`
--
ALTER TABLE `risiko`
  ADD CONSTRAINT `fk_klasifikasi_id` FOREIGN KEY (`klasifikasi_id`) REFERENCES `klasifikasi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
