-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 10:07 AM
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
-- Database: `dbpretest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `no_hp` varchar(15) NOT NULL,
  `prestasi` varchar(30) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`no_hp`, `prestasi`, `keterangan`) VALUES
('082247776576', 'gfdgdf', 'gdfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(5) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `aktivasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `no_hp`, `password`, `negara`, `otp`, `tanggal`, `aktivasi`) VALUES
(2, '08954353453', '11f188cab173c85826cefe1c98ad89ec', 'Indonesia', '', '2020-07-07', 0),
(3, '089545454', '0ca22a2948cb0fe2f666f77faff02834', 'Singapura', '', '2020-07-07', 0),
(4, '089545454654', '6ff81213f4309e6d2fcf1f6350f79c5b', 'Amerika', '', '2020-07-07', 0),
(11, '08131839', '7f8aabe3f4d93fe59992971026b17fbd', 'Indonesia', '1-3-4-9', '2020-07-07', 0),
(12, '082247776576', '11f188cab173c85826cefe1c98ad89ec', 'Jepang', '0-3-4-8', '2020-07-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`no_hp`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
