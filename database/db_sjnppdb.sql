-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 06:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(5) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama_pengguna` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 NOT NULL,
  `role_akun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `username`, `nama_pengguna`, `password`, `role_akun`) VALUES
(1, 'admin123', 'Nama Admin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'panitia123', 'Nama Panitia', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'pimpinan123', 'Nama Pimpinan', 'e10adc3949ba59abbe56e057f20f883e', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id_faq` int(5) NOT NULL,
  `id_masuk` int(5) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_faq`
--

INSERT INTO `tb_faq` (`id_faq`, `id_masuk`, `jawaban`) VALUES
(1, 1, 'SMA Srijaya Negara Palembang terletak di Jln. Ogan Sebelah FKIP UNSRI Palembang.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lulus`
--

CREATE TABLE `tb_lulus` (
  `id_lulus` int(5) NOT NULL,
  `id_pendaftaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_masuk`
--

CREATE TABLE `tb_masuk` (
  `id_masuk` int(5) NOT NULL,
  `pertanyaan` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_masuk`
--

INSERT INTO `tb_masuk` (`id_masuk`, `pertanyaan`) VALUES
(1, 'Dimanakah letak SMA Srijaya Negara?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(5) NOT NULL,
  `status` int(5) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` int(5) NOT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) CHARACTER SET latin1 NOT NULL,
  `asal_sekolah` varchar(50) CHARACTER SET latin1 NOT NULL,
  `asal_kota` varchar(50) CHARACTER SET latin1 NOT NULL,
  `asal_provinsi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nohp_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `nohp_ibu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_wawancara`
--

CREATE TABLE `tb_wawancara` (
  `id_wawancara` int(5) NOT NULL,
  `id_pendaftaran` int(5) NOT NULL,
  `tgl_wawancara` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id_faq`),
  ADD KEY `id_masuk` (`id_masuk`);

--
-- Indexes for table `tb_lulus`
--
ALTER TABLE `tb_lulus`
  ADD PRIMARY KEY (`id_lulus`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  ADD PRIMARY KEY (`id_wawancara`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id_faq` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_lulus`
--
ALTER TABLE `tb_lulus`
  MODIFY `id_lulus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  MODIFY `id_masuk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  MODIFY `id_wawancara` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD CONSTRAINT `tb_faq_ibfk_1` FOREIGN KEY (`id_masuk`) REFERENCES `tb_masuk` (`id_masuk`);

--
-- Constraints for table `tb_lulus`
--
ALTER TABLE `tb_lulus`
  ADD CONSTRAINT `tb_lulus_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `tb_pendaftaran` (`id_pendaftaran`);

--
-- Constraints for table `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  ADD CONSTRAINT `tb_wawancara_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `tb_pendaftaran` (`id_pendaftaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
