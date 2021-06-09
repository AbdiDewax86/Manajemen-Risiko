-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 08:36 AM
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
  `bawaan_jenis_risiko` enum('Rendah','Sedang','Tinggi') DEFAULT NULL,
  `bawaan_nilai_risiko` int(11) DEFAULT NULL,
  `kontrol_keterangan` text DEFAULT NULL,
  `sisa_paparan_keterangan` text DEFAULT NULL,
  `sisa_paparan_nilai` int(1) DEFAULT NULL,
  `sisa_jenis_risiko` enum('Rendah','Sedang','Tinggi') DEFAULT NULL,
  `sisa_nilai_risiko` int(11) DEFAULT NULL,
  `mitigasi_kontrol` text DEFAULT NULL,
  `mitigasi_pic` text DEFAULT NULL,
  `mitigasi_target` text DEFAULT NULL,
  `subklasifikasi` text DEFAULT NULL,
  `bawaan_paparan_keterangan` text DEFAULT NULL,
  `bawaan_paparan_nilai` int(1) DEFAULT NULL,
  `sisa_kerentanan_keterangan` text DEFAULT NULL,
  `sisa_kerentanan_nilai` int(1) DEFAULT NULL,
  `klasifikasi` enum('Informasi','Orang','Fisik','Layanan','Intangible','Software') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `risiko`
--

INSERT INTO `risiko` (`id`, `tanggal`, `dampak_keterangan`, `dampak_nilai`, `pengancam_keterangan`, `pengancam_nilai`, `bawaan_kerentanan_keterangan`, `bawaan_kerentanan_nilai`, `bawaan_jenis_risiko`, `bawaan_nilai_risiko`, `kontrol_keterangan`, `sisa_paparan_keterangan`, `sisa_paparan_nilai`, `sisa_jenis_risiko`, `sisa_nilai_risiko`, `mitigasi_kontrol`, `mitigasi_pic`, `mitigasi_target`, `subklasifikasi`, `bawaan_paparan_keterangan`, `bawaan_paparan_nilai`, `sisa_kerentanan_keterangan`, `sisa_kerentanan_nilai`, `klasifikasi`) VALUES
('', '2021-05-30', 'kd', 1, 'kp', 2, 'bkk', 1, 'Rendah', 10, 'kk', 'spk', 5, 'Sedang', 10, 'mk', 'mp', 'mt', 'subklasifikasi', 'bpk', 3, 'skk', 1, 'Informasi'),
('60b240c85bb3d', NULL, 'orang_testdampak', 2, 'orang_testpengancam', 3, 'orang_testkerentananbawaan', 4, 'Tinggi', 120, 'orang_testkontrol', 'orang_testpaparansisa', 2, 'Rendah', 24, 'orang_mitigasikontrol', 'orang_mitigasipic', 'orang_mitigasitarget', 'orang_testsubklasifikasi', 'orang_testpaparanbawaan', 5, 'orang_testkerentanansisa', 2, 'Orang'),
('60b24125a2b9a', NULL, 'fisik_testdampak', 3, 'fisik_testpengancam', 4, 'fisik_testkerentananbawaan', 5, NULL, NULL, 'fisik_testkontrol', 'fisik_testpaparansisa', 3, NULL, NULL, 'fisik_mitigasikontrol', 'fisik_mitigasipic', 'fisik_mitigasitarget', 'fisik_testsubklasifikasi', 'fisik_testpaparanbawaan', 1, 'fisik_testkerentanansisa', 2, 'Fisik'),
('60b24179133a6', NULL, 'layanan_testdampak', 4, 'layanan_testpengancam', 5, 'layanan_testkerentananbawaan', 1, NULL, NULL, 'layanan_testkontrol', 'layanan_testpaparansisa', 4, NULL, NULL, 'layanan_mitigasikontrol', 'layanan_mitigasipic', 'layanan_mitigasitarget', 'layanan_testsubklasifikas', 'layanan_testpaparanbawaan', 2, 'layanan_testkerentanansisa', 3, 'Layanan'),
('60b241c2a0dce', NULL, 'intangible_testdampak', 5, 'intangible_testpengancam', 1, 'intangible_testkerentananbawaan', 2, NULL, NULL, 'intangible_testkontrol', 'intangible_testpaparansisa', 5, NULL, NULL, 'intangible_mitigasikontrol', 'intangible_mitigasipic', 'intangible_mitigasitarget', 'intangible_testsubklasifikasi', 'intangible_testpaparanbawaan', 3, 'intangible_testkerentanansisa', 4, 'Intangible'),
('60b24209529be', NULL, 'software_testdampak', 5, 'software_testpengancam', 4, 'software_testkerentananbawaan', 3, NULL, NULL, 'software_testkontrol', 'software_testpaparansisa', 5, NULL, NULL, 'software_mitigasikontrol', 'software_mitigasipic', 'software_mitigasitarget', 'software_testsubklasifikasi', 'software_testpaparanbawaan', 2, 'software_testkerentanansisa', 1, 'Software'),
('60c0529d159a3', '2021-06-09', '2', 1, '2', 1, '2', 1, 'Rendah', 1, '2', '2', 1, 'Rendah', 1, '2', '2', '2', '2', '2', 1, '2', 1, 'Fisik');

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
  `akses_informasi` tinyint(1) DEFAULT 0,
  `akses_orang` tinyint(1) DEFAULT 0,
  `akses_fisik` tinyint(1) DEFAULT 0,
  `akses_layanan` tinyint(1) DEFAULT 0,
  `akses_intangible` tinyint(1) DEFAULT 0,
  `akses_software` tinyint(1) DEFAULT 0,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT current_timestamp(),
  `creationtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `email`, `akses_informasi`, `akses_orang`, `akses_fisik`, `akses_layanan`, `akses_intangible`, `akses_software`, `fullname`, `phone`, `lastlogin`, `creationtime`) VALUES
(1, 'testadmin', '$2y$10$5vLgiNgNKAX/4uHPs912ru30O2zSX2zKgm1CSjTaqFeCieomLpFVa', 'admin', 'admin@gmail.com', 0, 1, 0, 1, 1, 0, 'Test Admin', '088812345678', '2021-06-09 03:38:08', '2021-05-23 14:53:51'),
(2, 'testoperator', 'operator', 'biasa', 'operator@gmail.com', 1, 1, 1, 0, 0, 0, 'Operatorr', '088823456789', '2021-06-09 06:06:20', '2021-06-09 06:06:20'),
(3, 'testbiasa', '$2y$10$vpLWny4IpDSMA6dpDjpXSOYzcxUD/grKKiWspFUIddzA0QJeYAQF.', 'biasa', 'biasa@gmail.com', 1, 0, 1, 0, 1, 0, 'Pejabat', '0', '2021-06-06 16:56:25', '2021-05-25 12:12:42'),
(5, 'testusername2', 'testpassword', 'biasa', 'testemail2@gmail.com', 1, 0, 1, 0, 1, 0, 'testfullname2', '088812344322', '2021-05-28 16:57:58', '2021-05-28 16:57:58'),
(6, 'testusername3', 'testpw', 'biasa', 'testemail3@gmail.com', 1, 0, 0, 0, 0, 0, 'testfullname3', '088812344323', '2021-05-29 12:12:33', '2021-05-29 12:12:33'),
(7, 'testusername5', '$2y$10$yb68OLU.3VTW5WcnqzE/aOPnG2HGZNZcvEfdY9Tnc4pPkHl13ufdK', 'operator', 'testemail5@gmail.com', 0, 1, 0, 0, 0, 0, 'testfullname5', '088812344325', '2021-06-06 15:54:32', '2021-06-01 15:20:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `risiko`
--
ALTER TABLE `risiko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
