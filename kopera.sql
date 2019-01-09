-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 01:33 PM
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
-- Database: `kopera`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `costumerid` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `koper`
--

CREATE TABLE `koper` (
  `id` int(10) NOT NULL,
  `regional` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `detail` text NOT NULL,
  `harga` int(11) NOT NULL,
  `category` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koper`
--

INSERT INTO `koper` (`id`, `regional`, `nama`, `gambar`, `detail`, `harga`, `category`) VALUES
(1, 'sumatera', 'Teluk Kiluan', 'kiluan.jpg', 'Teluk Kiluan adalah salah satu destinasi wisata yang berada didaerah Lampung. Wisata ini menyajikan indahnya pasir putih dan sesekali anda dapat berenang dan bermain bersama lumba-lumba', 700000, 'old'),
(2, 'jawa', 'Gunung Bromo', 'bromo.jpg', 'Gunung Bromo merupakan salah satu wisata yang sangat eksis saat ini, Gn.Bromo memiliki pemandangan dan suasana yang menyejukkan.', 500000, 'old'),
(3, 'balinusa', 'Garuda Wisnu Kencana', 'gwk.jpg', 'Patung yang digadang gadang akan menjadi patung tertinggi yang ada di Asia ini memiliki view indahnya akan kota Denpasar, Bali', 1500000, 'old'),
(4, 'malpapu', 'Raja Ampat', 'rajaampat.jpg', 'Surga Dunia yang ada di Timur Indonesia', 5000000, 'old');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`costumerid`);

--
-- Indexes for table `koper`
--
ALTER TABLE `koper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `costumerid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koper`
--
ALTER TABLE `koper`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
