-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 06:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arjes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(20) NOT NULL,
  `jenis_admin` varchar(15) DEFAULT NULL,
  `nama_admin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `no_antrian` varchar(5) DEFAULT NULL,
  `nama` varchar(15) DEFAULT NULL,
  `no_meja` varchar(3) DEFAULT NULL,
  `metode_pesanan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_menu`
--

CREATE TABLE `daftar_menu` (
  `id_menu` varchar(20) NOT NULL,
  `stok` varchar(15) DEFAULT NULL,
  `jenis_menu` varchar(20) DEFAULT NULL,
  `nama_menu` varchar(20) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `promo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pesanan`
--

CREATE TABLE `daftar_pesanan` (
  `nama_pesanan` varchar(20) DEFAULT NULL,
  `HARGA` int(15) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `total_harga` int(15) DEFAULT NULL,
  `no_antrian` int(5) DEFAULT NULL,
  `id_pesanan` varchar(20) NOT NULL,
  `id_kitchenStaff` varchar(20) DEFAULT NULL,
  `id_admin` varchar(20) DEFAULT NULL,
  `id_customer` varchar(20) DEFAULT NULL,
  `id_menu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diakses`
--

CREATE TABLE `diakses` (
  `id_admin` varchar(20) DEFAULT NULL,
  `id_pesanan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_staff`
--

CREATE TABLE `kitchen_staff` (
  `id_kitchenStaff` varchar(20) NOT NULL,
  `nama_staff` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `melihat`
--

CREATE TABLE `melihat` (
  `id_customer` varchar(20) DEFAULT NULL,
  `id_menu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `id_pesanan` varchar(20) DEFAULT NULL,
  `id_customer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mengakses`
--

CREATE TABLE `mengakses` (
  `id_admin` varchar(20) DEFAULT NULL,
  `id_menu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menghasilkan`
--

CREATE TABLE `menghasilkan` (
  `id_pesanan` varchar(20) DEFAULT NULL,
  `id_menu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `daftar_menu`
--
ALTER TABLE `daftar_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `id_kitchenStaff` (`id_kitchenStaff`),
  ADD UNIQUE KEY `id_admin` (`id_admin`),
  ADD UNIQUE KEY `id_customer` (`id_customer`),
  ADD UNIQUE KEY `id_menu` (`id_menu`);

--
-- Indexes for table `diakses`
--
ALTER TABLE `diakses`
  ADD UNIQUE KEY `id_admin` (`id_admin`),
  ADD UNIQUE KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `kitchen_staff`
--
ALTER TABLE `kitchen_staff`
  ADD PRIMARY KEY (`id_kitchenStaff`);

--
-- Indexes for table `melihat`
--
ALTER TABLE `melihat`
  ADD UNIQUE KEY `id_customer` (`id_customer`),
  ADD UNIQUE KEY `id_menu` (`id_menu`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD UNIQUE KEY `id_pesanan` (`id_pesanan`),
  ADD UNIQUE KEY `id_customer` (`id_customer`);

--
-- Indexes for table `mengakses`
--
ALTER TABLE `mengakses`
  ADD UNIQUE KEY `id_admin` (`id_admin`),
  ADD UNIQUE KEY `id_menu` (`id_menu`);

--
-- Indexes for table `menghasilkan`
--
ALTER TABLE `menghasilkan`
  ADD UNIQUE KEY `id_pesanan` (`id_pesanan`),
  ADD UNIQUE KEY `id_menu` (`id_menu`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  ADD CONSTRAINT `daftar_pesanan_ibfk_1` FOREIGN KEY (`id_kitchenStaff`) REFERENCES `kitchen_staff` (`id_kitchenStaff`),
  ADD CONSTRAINT `daftar_pesanan_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `daftar_pesanan_ibfk_3` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `daftar_pesanan_ibfk_4` FOREIGN KEY (`id_menu`) REFERENCES `daftar_menu` (`id_menu`);

--
-- Constraints for table `diakses`
--
ALTER TABLE `diakses`
  ADD CONSTRAINT `diakses_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `diakses_ibfk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `daftar_pesanan` (`id_pesanan`);

--
-- Constraints for table `melihat`
--
ALTER TABLE `melihat`
  ADD CONSTRAINT `melihat_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `melihat_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `daftar_menu` (`id_menu`);

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD CONSTRAINT `memiliki_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `daftar_pesanan` (`id_pesanan`),
  ADD CONSTRAINT `memiliki_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `mengakses`
--
ALTER TABLE `mengakses`
  ADD CONSTRAINT `mengakses_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `daftar_menu` (`id_menu`),
  ADD CONSTRAINT `mengakses_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `menghasilkan`
--
ALTER TABLE `menghasilkan`
  ADD CONSTRAINT `menghasilkan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `daftar_pesanan` (`id_pesanan`),
  ADD CONSTRAINT `menghasilkan_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `daftar_menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
