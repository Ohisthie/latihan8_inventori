-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2017 at 03:41 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventoristi`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah` double NOT NULL,
  `pokok` double NOT NULL,
  `jual` double NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `kategori`, `jumlah`, `pokok`, `jual`) VALUES
(1001, 'HP', 'Elektronik', 40, 4000000, 4500000),
(1002, 'Komputer', 'Elektronik', 50, 5000000, 6000000),
(1003, 'Laptop', 'Elektronik', 50, 7000000, 8500000),
(1004, 'Radio', 'Elektronik', 50, 1000000, 1500000),
(1005, 'Kipas Angin', 'Elektronik', 100, 4000000, 5000000),
(1006, 'Lampu', 'Elektronik', 500, 1000000, 1500000),
(1007, 'TV', 'Elektronik', 59, 11000000, 11500000),
(1008, 'Mixer', 'Elektronik', 590, 1000000, 1500000),
(1009, 'Oven', 'Elektronik', 348, 2000000, 2500000),
(1010, 'DVD', 'Elektronik', 220, 4000000, 4500000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
