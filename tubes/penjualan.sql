-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 05:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Backpack'),
(2, 'Totebag'),
(3, 'Slingbag');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga`, `gambar`, `kategori_id`, `keterangan`) VALUES
(1, 'Exsport Easy Going Sling Bag - Yellow', 10, 25000, 'sling4.jpg', 3, 'slingbag yang simpel dan muat untuk banyak barang, seeprti dompet, hape, dan beberapa perintilan kecil lainnya. tas ini juga sangat cocok sebagai ootd kalian karena sangat modis sekali bukan dengan warna yang cantik dan juga dengan warna nya yang kuning m'),
(2, 'Exsport Essential Sling Bag - Orange', 5, 100000, 'sling3.jpg', 3, 'slingbag yang simpel dan muat untuk banyak barang, seeprti dompet, hape, dan beberapa perintilan kecil lainnya. tas ini juga sangat cocok sebagai ootd kalian karena sangat modis sekali bukan dengan warna yang cantik dan erwarna merah menjadi hot'),
(12, 'ini ganti jadi totebag', 0, 100000, '6268f6c661353.jpg', 2, 'ket ket ket ini ket indahnya indah berdua bersama mu hiya\r\nhiya hiya'),
(14, 'Exsport Go-Getter Tote Bag - Brown', 10, 250000, '62695188caad8.jpg', 2, 'hai ini aku mau ngasih keterangan uat tas ini yang warna nya oren mentreng'),
(15, 'Exsport Scholar Rucksack - Pink', 10, 150000, '627c9b296407e.jpg', 1, 'tas simpel yang yang cocok untuk perempuan karena memiliki model dan warna yang girly'),
(16, 'Exsport Colorize Backpack - Cream', 25, 125000, '627e2cc00530d.jpg', 1, 'tas yang sangat cocok untuk sekolah karena memiliki volume yang cukup besar'),
(17, 'Exsport D-Day Backpack - Grey', 12, 100000, '627e2d100b111.jpg', 1, 'tas gendong simple dan elegan bisa dan bisa digunakan untuk cewe dan cowo'),
(18, 'Exsport Weekender Rucksack - Dark Green', 12, 200000, '627e2d4931151.jpg', 1, 'tas yang mengusung tema perkemahan ini memiliki bahan yang cukup kuat dan muat untuk banyak barang dan sangat cocok untuk kalian yang memiliki jiwa berpetualang seperti si unyil dan si otan'),
(19, 'Exsport Mochila Poly Sling Bag - Purple', 1, 55000, '627e2d8c2cf29.jpg', 3, 'slingbag yang simpel dan muat untuk banyak barang, seeprti dompet, hape, dan beberapa perintilan kecil lainnya. tas ini juga sangat cocok sebagai ootd kalian karena sangat modis sekali bukan dengan warna yang cantik'),
(20, 'Exsport Essential Sling Bag - Light Blue', 10, 500000, '627e2dcd822b0.jpg', 3, 'slingbag yang sangat simpel namun tetap terlihat cantik, muat untuk hape iphone 13 pro-max ataupun hp besar lainnya, slingbag inijuga dilengkapi dengan tali yang sangat ringkas sehingga membawakan kesan imut pada anda'),
(21, 'Handheld Laptop Tote Bag - Salem', 11, 600000, '629f497ed79df.jpg', 2, 'totebag berwarna pink yang berfungsi sebagai laptop handled, memiliki bahan yang ringan sehingga tidak membuat tas semakin berat. tas ini juga muat untuk membawa banyak barang dan sangat cocok dipakai untuk ke kampus ato ke kantor'),
(30, 'haii nama saya rahma', 500, 60, '62a09dafad502.jpg', 2, 'sdfsf'),
(31, 'asdad', 456, 567, '62a1f7b4b67e0.jpg', 2, 'ryrty');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$3buFveYnOkxjMaPdqncK0OjA2L12i0QmkVSBrW3G.WBgjgF7781Cm'),
(2, 'rahma', '$2y$10$7nSQQl/tHoamVp1.qkQdJOuP/NoDP7DlgHOnPjClK5AUr5/Y/rq5S'),
(5, 'raisya', '$2y$10$KYTPkgw.TvBFD3FHNqe4nuzxTNKBuFtarsU0M19LP/bLI/H5aDFQO'),
(6, 'ica', '$2y$10$0CNl97SJjTqHiaLUtZ6LHeyoM3pPwrGGxhH7Rt13Y8XYLKYvwCFS2'),
(7, 'gibran', '$2y$10$ddeJGb1gv0L2vhLtxn1mOuY.fjG2J8g0wSscVjBvnvXfznngDN532');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
