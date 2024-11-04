-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 09:38 AM
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
  `id_orang` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kejahatan` varchar(100) NOT NULL,
  `domisili` varchar(100) DEFAULT NULL,
  `stat_org` varchar(100) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_cari` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_orang`
--

INSERT INTO `tb_orang` (`id_orang`, `nama`, `kejahatan`, `domisili`, `stat_org`, `foto`, `tgl_cari`) VALUES
(3, 'Tumankhamun', 'Kekerasan', '4', '1', 'sample.jpg', '2016-05-21'),
(4, 'Gayusan', 'Korupsi', '1', '2', 'gayus.webp', '2013-07-20'),
(5, 'Sumanto', 'Pembunuhan', '24', '2', 'sumanto.jpg', '2012-11-04'),
(6, 'Poernomo', 'Penipuan', '10', '1', 'kay.jpg', '2024-02-09'),
(7, 'Kamarudin', 'Pencurian HP', '6', '1', 'udin.jpeg', '2023-07-10'),
(8, 'Dadang', 'Korupsi', '3', '1', 'ikan.jpg', '2024-03-15'),
(9, 'Siti Kusmini', 'Korupsi', '14', '2', 'kusmini.png', '2020-08-08'),
(10, 'Bagus', 'Pengeroyokan', '8', '1', 'obama.jpg', '2024-09-07'),
(11, 'Intan', 'Pencurian', '15', '2', 'witch.jpg', '2023-11-25'),
(12, 'Murni', 'Pembunuhan', '5', '1', 'mcg.jpg', '2024-05-24'),
(14, 'Ratih', 'Pencurian', '9', '1', 'sandy.jpg', '2024-10-26'),
(15, 'Dwi', 'Pelecehan', '13', '1', 'fergoso.jpg', '2024-10-05'),
(16, 'Anton', 'Pencurian asli', '7', '2', 'yaoming.jpg', '2024-10-18'),
(17, 'Komarudin', 'Korupsi', '11', '1', 'baldrick.webp', '2024-10-28'),
(18, 'Joni', 'Pencurian', '2', '1', 'linus.jpg', '2024-10-22'),
(45, 'Joni', 'pelarian mobil', '1', '2', 'fred.jpg', '2017-08-03'),
(46, 'schokolade', 'mengamuk', '22', '2', 'choco.jpg', '2020-04-03'),
(49, 'koetjieng', 'pelecehan', '29', '1', 'kucing.jpg', '2017-08-27'),
(50, 'noah', 'ujaran kebencian', '8', '1', 'noah.png', '2028-04-04'),
(52, 'melon usk', 'sheetpost', '19', '2', 'melon.jpg', '2021-02-03'),
(53, 'Jordan Peele', 'Pengancaman', '13', '2', 'peele.jpeg', '2014-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_polsek`
--

CREATE TABLE `tb_polsek` (
  `id_polsek` int(11) NOT NULL,
  `polsek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_polsek`
--

INSERT INTO `tb_polsek` (`id_polsek`, `polsek`) VALUES
(1, 'Andir'),
(2, 'Antapani'),
(3, 'Arcamanik'),
(4, 'Astana Anyar'),
(5, 'Bandung Kidul'),
(6, 'Babakan Ciparay'),
(7, 'Bandung Kulon'),
(8, 'Bandung Wetan'),
(9, 'Batununggal'),
(10, 'Bojongloa Kaler'),
(11, 'Bojongloa Kidul'),
(12, 'Buah Batu'),
(13, 'Cibeunying Kaler'),
(14, 'Cibeyunying Kidul'),
(15, 'Cicendo'),
(16, 'Cidadap'),
(17, 'Cinambo'),
(18, 'Coblong'),
(19, 'Gedebage'),
(20, ' Kiaracondong'),
(21, 'Lengkong'),
(22, 'Panyileukan'),
(23, 'Rancasari'),
(24, 'Regol'),
(25, 'Sukajadi'),
(26, 'Sukasari'),
(27, 'Sumur Bandung'),
(28, 'Ujungberung'),
(29, 'Sub Sektor Cibiru');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `stat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `stat`) VALUES
(1, 'Belum Ditemukan'),
(2, 'Ditemukan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_orang`
--
ALTER TABLE `tb_orang`
  ADD PRIMARY KEY (`id_orang`);

--
-- Indexes for table `tb_polsek`
--
ALTER TABLE `tb_polsek`
  ADD PRIMARY KEY (`id_polsek`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_orang`
--
ALTER TABLE `tb_orang`
  MODIFY `id_orang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_polsek`
--
ALTER TABLE `tb_polsek`
  MODIFY `id_polsek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
