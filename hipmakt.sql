-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 07:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hipmakt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_listpelma`
--

CREATE TABLE `tb_listpelma` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pt` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `region` varchar(30) NOT NULL,
  `tahunmasuk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_listpelma`
--

INSERT INTO `tb_listpelma` (`id`, `nama`, `status`, `pt`, `jurusan`, `email`, `region`, `tahunmasuk`) VALUES
(1, 'Mordekhai Gerine Lumangkun', 'Mahasiswa', 'UPN \"Veteran\" Jawa Timur', 'Informatika', 'mordekhaigerinlumangkun@gmail.com', 'Surabaya', '2020'),
(2, 'Riris Oktauli', 'Pelajar', 'SMAN 2 Surabaya', 'IPA', 'ririsoktauli@gmail.com', 'Surabya', '2021'),
(7, 'Boby Yudho', 'Mahasiswa', 'UPN \"Veteran\" Jawa Timur', 'Menejemen', 'bobyyudho@gmail.com', 'Surabaya', '2020'),
(8, 'Jemmy Saragih', 'Mahasiswa', 'Universitas Gadjah Mada', 'Teknik Kimia', 'jemmysaragih01@gmail.com', 'Jogja', '2020'),
(9, 'Anka Prima Agastia', 'Mahasiswa', 'AKPRIND Jogja', 'Geologi', 'ankaprima24@gmail.com', 'Jogja', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_listpelma`
--
ALTER TABLE `tb_listpelma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_listpelma`
--
ALTER TABLE `tb_listpelma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
