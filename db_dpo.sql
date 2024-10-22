-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 09:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_orang`
--

CREATE TABLE `tb_orang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kejahatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_orang`
--

INSERT INTO `tb_orang` (`id`, `nama`, `kejahatan`) VALUES
(1, 'Kevin', 'Penipuan'),
(2, 'Aziz', 'Pencurian'),
(3, 'Joko', 'Pencurian'),
(4, 'Suyono', 'Penipuan'),
(5, 'Bambang', 'Pembunuhan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_polsek`
--

CREATE TABLE `tb_polsek` (
  `id` int(11) NOT NULL,
  `polsek` varchar(100) NOT NULL,
  `stat_org` varchar(100) DEFAULT NULL,
  `tgl_cari` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_polsek`
--

INSERT INTO `tb_polsek` (`id`, `polsek`, `stat_org`, `tgl_cari`) VALUES
(1, 'Karawang', 'Belum Ditemukan', '2020-01-22'),
(2, 'Cibubur', 'Belum Ditemukan', '2022-11-06'),
(3, 'Bogor', 'Belum Ditemukan', '2023-07-18'),
(4, 'Karawang', 'Belum Ditemukan', '2020-01-22'),
(5, 'Tangerang', 'Belum Ditemukan', '2018-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_orang`
--
ALTER TABLE `tb_orang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_polsek`
--
ALTER TABLE `tb_polsek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_orang`
--
ALTER TABLE `tb_orang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_polsek`
--
ALTER TABLE `tb_polsek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
