-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2019 at 03:40 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_beli` decimal(10,0) NOT NULL,
  `harga_jual` decimal(10,0) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga_beli`, `harga_jual`, `deskripsi`, `stok`, `gambar`) VALUES
(1, 2, 'Raket Badminton Victor Jetspeed 12 BG66', '455000', '476000', '  Spesifikasi Produk :\r\nMateri Shaft High Resilient Modulus Graohite+Pyrofil+Ters+6,8 Shaft  ', 10, 'image/VICTOR JETSPEED S 12.jpg'),
(2, 3, 'Raket Badminton Lining M73 BG66', '355000', '407000', 'Spesifikasi :\r\nBahan full carbon\r\nWeight 82-89gr\r\nPanjang 675mm\r\nTension 28lbs\r\nRaket + Senar BG 66 ORI, Free Ongkos Pasang\r\nBONUS TAS 1 RESLETING & GRIP', 7, 'image/22590373_A1.jpg'),
(3, 1, 'Raket Yonex Voltric 70 Etune', '3200000', '3599000', 'Flex : Medium\r\nFrame : H.M. Graphite, NANOMETRIC, Tungsten\r\nShaft : H.M. Graphite, Ultra PEF\r\nWeight/Grip Size : 4U (Ave.83g) G4,5\r\nStringing Advice : 4U 19-24lbs, 3U 20-25lbs\r\nColour : White & Black', 5, 'image/badminton-racket-yonex-voltric-70-e-tune-white.jpg'),
(4, 1, 'Raket Badminton Lining N90 BG55', '355000', '407000', ' hgjhjhkjknmysf ghkiyu gffhim fegiyt jhkg', 10, 'image/RAKET.jpg'),
(5, 2, 'Raket Badminton VICTOR BRAVE SWORD 12 - BRS 12 - O', '1000000', '1200000', '	\r\nBerikut adalah raket best seller di victor yaitu brave sword 12 blue color. use by lee yong dae dan yoo yeon seong\r\n\r\nThe Brave Sword 12 uses new technology to reduce air resistance during a swing by 10%. The diamond-shaped design cuts through the air like a sword, vastly reducing air resistance while encouraging nimble handling. While the inner-waves technology provides more consistent and stable shots. great racket for those who are looking for a all around performance racquet.\r\n\r\nProduct Specification: \r\nFrame Material : Ultra high modulus graphite + Nano Resin\r\nShaft Material : Ultra high modulus graphite + Nano Resin + 7.0 shaft\r\nWeight : 3U / 4U\r\nLength : 675 mm\r\nBalance : Even Balance\r\nStiffness : Medium\r\n100% Original Product\r\n\r\n*PERHATIAN : Raket saja', 3, 'image/BS12-500x416.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Yonex'),
(2, 'Victor'),
(3, 'Li-Ning'),
(4, 'Semua Kategori');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `no_hp` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
