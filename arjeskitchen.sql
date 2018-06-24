-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 11:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arjeskitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pesanan`
--

CREATE TABLE `daftar_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `nama_pesanan` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_pesanan` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `jenis_pesanan` int(11) NOT NULL,
  `metode_pesanan` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id_menu` int(11) NOT NULL,
  `jenis_makanan` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_makanan` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_makanan` int(11) NOT NULL,
  `detail_makanan` varchar(900) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_makanan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_meja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_customer`, `nama_customer`, `no_meja`) VALUES
(4, 'nirmala', 12),
(5, 'sayang', 24),
(6, 'aliffia', 54),
(7, 'nirmalaa', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `id_makanan` (`id_makanan`),
  ADD KEY `id_customer` (`id_user`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  ADD CONSTRAINT `daftar_pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_pesanan_ibfk_2` FOREIGN KEY (`id_makanan`) REFERENCES `menu_makanan` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
