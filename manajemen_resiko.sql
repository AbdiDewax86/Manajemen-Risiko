-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:57 PM
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
-- Table structure for table `risiko`
--

CREATE TABLE `risiko` (
  `id` varchar(64) NOT NULL,
  `tanggal` date DEFAULT curdate(),
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
('2', '2021-05-25', 'dampak 3', 1, 'pengancam 3', 2, 'kerentanan bawaan', 3, 3, NULL, 'kontrol', 'paparan sisa', 4, 4, NULL, 'mitigasi kontrol', 'mitigasi pic', 'mitigasi target', 'subklasifikasi 3', 1, 'paparan bawaan', 1, 'kerentanan sisa', 2),
('60a7ceb78e615', NULL, 'a', 2, 's', 3, 'd', 4, NULL, NULL, 'g', 'j', 2, NULL, NULL, 'k', 'l', ';', 'Test Subklasifikasi', 1, 'f', 5, 'h', 1),
('60a7cf3bca784', NULL, 'a', 1, 's', 5, 'd', 4, NULL, NULL, 'g', 'j', 1, NULL, NULL, 'k', 'l', ';', 'Test Subklasifikasi', 6, 'f', 3, 'h', 2),
('60a7d04dc8c05', NULL, 'Keterangan Dampak', 1, 'Keterangan Pengancam', 2, 'Keterangan Kerentanan Bawaan', 3, NULL, NULL, 'Keterangan Kontrol', 'Keterangan Paparan Sisa', 1, NULL, NULL, 'Mitigasi Kontrol', 'Mitigasi PIC', 'Mitigasi Target', 'Test Subklasifikasi', 2, 'Nilai Kerentanan Bawaan', 4, 'Keterangan Kerentanan Sisa', 5),
('testId', NULL, 'test keterangan dampak', 5, 'test keterangan pengancam', 5, 'test keterangan kerentanan bawaan', 5, 5, 100, 'test keterangan kontrol', 'test keterangan paparan sisa', 5, 5, 100, 'test mitigasi kontrol', 'test mitigasi PIC', 'test mitigasi target', 'test subklasifikasi', NULL, 'test keterangan paparan bawaan', 5, 'test keterangan kerentanan sisa', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('biasa','operator','admin') NOT NULL DEFAULT 'biasa',
  `email` varchar(255) NOT NULL,
  `akses_informasi` tinyint(1) NOT NULL DEFAULT 0,
  `akses_orang` tinyint(1) NOT NULL DEFAULT 0,
  `akses_fisik` tinyint(1) NOT NULL DEFAULT 0,
  `akses_layanan` tinyint(1) NOT NULL DEFAULT 0,
  `akses_intangible` tinyint(1) NOT NULL DEFAULT 0,
  `akses_software` tinyint(1) NOT NULL DEFAULT 0,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT current_timestamp(),
  `creationtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `email`, `akses_informasi`, `akses_orang`, `akses_fisik`, `akses_layanan`, `akses_intangible`, `akses_software`, `fullname`, `phone`, `lastlogin`, `creationtime`) VALUES
(1, 'testadmin', '$2y$10$5vLgiNgNKAX/4uHPs912ru30O2zSX2zKgm1CSjTaqFeCieomLpFVa', 'admin', 'admin@gmail.com', 1, 1, 1, 1, 1, 1, 'Test Admin', '088812345678', '2021-05-23 14:53:51', '2021-05-23 14:53:51'),
(2, 'testoperator', '$2y$10$HK7xsjK5tyKytoGE/lkOM.G0BfJeOt59JrqbFSUc8b8ctLa3n0SO2', 'operator', 'operator@gmail.com', 1, 1, 0, 1, 0, 0, 'Operator', '088823456789', '2021-05-25 12:12:42', '2021-05-25 12:12:42'),
(3, 'testbiasa', '$2y$10$vpLWny4IpDSMA6dpDjpXSOYzcxUD/grKKiWspFUIddzA0QJeYAQF.', 'biasa', 'biasa@gmail.com', 1, 0, 1, 0, 1, 0, 'Pejabat', '0', '2021-05-25 12:12:42', '2021-05-25 12:12:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `risiko`
--
ALTER TABLE `risiko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_klasifikasi_id` (`klasifikasi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
