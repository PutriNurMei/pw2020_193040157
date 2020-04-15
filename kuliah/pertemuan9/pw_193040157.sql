-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 10:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040157`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Sandhika Galih', '043040023', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika', 'sandhika.jpeg'),
(2, 'Doddy', '133040123', 'doddy@yahoo.com', 'Teknik Mesin', 'doddy.png'),
(3, 'Erik', '153030321', 'erik@gmail.com', 'Ekonomi', 'erik.jpg'),
(4, 'Putri Nurmeida', '193040157', 'pnurmeida@gmail.com', 'Teknik Informatika', 'putrynur.jpg'),
(5, 'Silvi Fitriawati', '193040028', 'silviaja@yahoo.com', 'Teknik Informatika', 'silvi.png'),
(6, 'Andzara Nissa', '193040006', 'nonamanis@gmail.com', 'Teknik Informatika', 'oja.jpg'),
(7, 'Ilham Hafiz', '193020143', 'ilhamhfz321@gmail.com', 'Teknik Pangan', 'ilham.jpeg'),
(8, 'Bimasakti Putra', '193010066', 'bimaspw@yahoo.com', 'Teknik Industri', 'bima.png'),
(9, 'Andara Rahmat', '163030004', 'andarari2@unpas.ac.id', 'Teknik Mesin', 'dara.jpeg'),
(10, 'Alief Faturrahman', '193040158', 'alifwae33@unpas.ac.id', 'Teknik Informatika', 'alif.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
