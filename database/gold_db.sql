-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 04:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gold_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(40) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id_admin`, `username_admin`, `password_admin`, `email_admin`) VALUES
(18, '', 'd41d8cd98f00b204e9800998ecf8427e', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru_tbl`
--

CREATE TABLE `guru_tbl` (
  `id_guru` int(15) NOT NULL,
  `foto_guru` varchar(1000) NOT NULL,
  `teks_guru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guru_tbl`
--

INSERT INTO `guru_tbl` (`id_guru`, `foto_guru`, `teks_guru`) VALUES
(1, 'mirna.jpg', 'guru terbaik'),
(2, 'aep.jpg', 'sekolah'),
(3, 'nurdin.jpg', 'test test'),
(5, 'herul.jpg', 'test test'),
(6, 'iim.jpg', 'test test'),
(7, 'kamil.jpg', 'test test'),
(8, 'mila.jpg', 'test test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru_tbl`
--
ALTER TABLE `guru_tbl`
  ADD PRIMARY KEY (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `guru_tbl`
--
ALTER TABLE `guru_tbl`
  MODIFY `id_guru` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
