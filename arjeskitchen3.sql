-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 04:52 PM
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
-- Database: `arjeskitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`id`, `username`, `password`) VALUES
(1, 'bela', 'bela');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pesanan`
--

CREATE TABLE `daftar_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `harga_pesanan` int(11) DEFAULT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `metode_pesanan` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pembayaran` tinyint(1) DEFAULT NULL,
  `status_disajikan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_stuff`
--

CREATE TABLE `kitchen_stuff` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchen_stuff`
--

INSERT INTO `kitchen_stuff` (`id`, `username`, `password`) VALUES
(1, 'imam', 'imam');

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

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`id_menu`, `jenis_makanan`, `nama_makanan`, `harga_makanan`, `detail_makanan`, `gambar_makanan`) VALUES
(1, 'breakfast', 'nasi goreng', 2000, 'nasi goreng yang digoreng', '1.jpg'),
(2, 'breakfast', 'nasi bakar', 5000, 'nasi yang dibakar', '2.jpg'),
(8, 'bestseller', 'Lasagna smoked beef', 15000, 'pasta dengan irisan daging cincang', '3.jpg'),
(9, 'dinner', 'Onion ring', 7000, 'potongan bawang bombay krispy', '4.jpg'),
(10, 'bestseller', 'chicken rice bowl', 10000, 'ayam krispi fillet dengan saus barbeque', '5.jpg'),
(11, 'breakfast', 'chiken katsu', 12000, 'potongan ayam dengan mayonaise', '6.jpg'),
(12, 'breakfast', 'chicken teriyaki', 12000, 'ayam dengan saus khas jepang', '7.jpg'),
(13, 'happyhour', 'Spagheti bolognese', 15000, 'spageti dengan saus daging cincang pilihan', '8.jpg'),
(14, 'happyhour', 'Penne creamy sauce', 15000, 'pasta penne dengan saus creamy', '9.jpg'),
(15, 'bestseller', 'nasi ayam geprek', 8000, 'nasi dengan ayam uleg sambel dengan jumlah cab yang bisa di custom', '10.jpg'),
(16, 'dinner', 'French Fries', 6000, 'kentang goreng pilihan super', '11.jpg'),
(17, 'dinner', 'kulit krispi', 6500, 'kulit ayam pilihan dari ayam yang sehat', '12.jpg'),
(18, 'dinner', 'jamur krispi', 4500, 'dari jamur tiram bergizi', '13.jpg'),
(19, 'bestseller', 'ca kangkung', 7000, 'kangkung khas pilihan', '14.jpg'),
(20, 'dinner', 'ca brokoli', 8500, 'brokoli hijau segar plihan', '15.jpg'),
(21, 'dinner', 'Sayur asam', 4000, 'sayur dengan bermacam sayur segar', '16.jpg'),
(22, 'dinner', 'tahu kemul', 3000, 'tahu berprotein tinggi', '17.jpg'),
(23, 'bestseller', 'tempe mendoan', 3000, 'irisan tempe dengan balutan halus tepung', '18.jpg'),
(24, 'lunch', 'Chicken crispy', 17000, 'ayam kispi disajikan bersama saus', '19.jpg'),
(25, 'lunch', 'Original chicken', 20000, 'daging ayam panggang murni', '20.jpg'),
(26, 'lunch', 'sirloin crispy', 19000, 'daging sapi berkualitas berbalut tepung', '21.jpg'),
(27, 'lunch', 'original sirloin', 21000, 'daging sapi panggang murni brbeque', '22.jpg'),
(28, 'lunch', 'calamary crispy', 22000, 'cumi pilihan dengan saus barbeque', '23.jpg'),
(29, 'lunch', 'Shrimp crispy', 22000, 'udang tepung dengan saus barbeque', '24.jpg'),
(30, 'bestseller', 'IGA', 30000, 'sum sum iga bakar dengan saus barbeque', '25.jpg'),
(35, 'beverages', 'Teh (Es/Panas)', 2000, 'teh hijau pilihan', '26.jpg'),
(36, 'beverages', 'Jeruk (Es/Panas)', 3500, 'jeruk manis pilihan', '27.jpg'),
(37, 'beverages', 'Kopi (Es/Panas)', 3500, 'kopi hitam atau kopi creamer', '28.jpg'),
(38, 'dessert', 'banana split', 15000, 'ice cream dengan potongan pisang', '29.jpg'),
(39, 'dessert', 'Es Buah', 7000, 'potongan buah segar', '30.jpg'),
(40, 'dessert', 'Es Cincau Hitam', 5000, 'es cincau hitam dengan perasan jeruk nipis', '31.jpg');

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
(7, 'nirmalaa', 12),
(8, 'Imam', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_customer` (`id_user`),
  ADD KEY `id_makanan` (`id_makanan`) USING BTREE;

--
-- Indexes for table `kitchen_stuff`
--
ALTER TABLE `kitchen_stuff`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kitchen_stuff`
--
ALTER TABLE `kitchen_stuff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
