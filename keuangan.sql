-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 11:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `nominal_debit` int(250) NOT NULL,
  `nominal_kredit` int(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `jenis` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id`, `tanggal`, `keterangan`, `nominal_debit`, `nominal_kredit`, `status`, `jenis`) VALUES
(1, '2019-11-05', 'spp', 500000, 0, 'Kas Debit', ''),
(2, '2019-01-09', 'spp', 30000, 0, 'Kas Debit', 'SPP'),
(3, '2019-10-05', 'spp', 30000, 0, 'Kas Credit', 'SPP'),
(4, '2019-11-12', 'ret', 50000, 0, 'Kas Debit', 'DSP'),
(5, '2019-11-01', 'qwe', 12123, 0, 'Kas Debit', 'SPP'),
(6, '2019-10-29', 'qwe', 0, 123123, 'Kas Credit', 'SPP'),
(7, '2019-10-11', 'spp', 0, 60000, 'Kas Credit', 'SPP'),
(8, '2019-08-21', 'psb', 6789, 0, 'Kas Debit', 'DSP'),
(9, '2019-08-12', 'asd', 0, 23456, 'Kas Credit', 'DSP'),
(10, '2019-08-13', 'spp', 0, 456789, 'Kas Credit', 'SPP');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin1', '21232f297a57a5a743894a0e4a801fc3', '0'),
(2, 'ahoy', '28b662d883b6d76fd96e4ddc5e9ba780', '1'),
(3, 'userbiasa', 'ee11cbb19052e40b07aac0ca060c23ee', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
