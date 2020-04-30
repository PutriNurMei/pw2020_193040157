-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 09:54 AM
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
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `resep` varchar(500) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `foto`, `nama`, `resep`, `asal`, `harga`) VALUES
(1, 'sate.jpg', 'Sate Madura', 'tusukan sate, 500 gram daging ayam potong dadu, 4 sdm kecap manis, 2 sdm margarin, 4 buah cabe merah, 5 butir bawang merah, 3 siung bawang putih, 2 butir kemiri, 50 gram kacang tanah goreng kemudian haluskan, 50 gram kecap manis, 200 ml air, 1 sdm gula merah, 2 buah jeruk limau, garam secukupnya, minyak goreng secukupnya.', 'Madura', '10000/8 tusuk'),
(2, 'soto.jpg', 'Soto Kudus', '1 ekor ayam kampung, 4 buah telur rebus (masing-masing potong menjadi 2 bagian), 150 gram taoge siram dengan air panas, tiriskan, 5 batang seledri potong-potong tipis, 2 batang serai, memarkan, 2 buah jeruk nipis, ambil airnya, 2 sendok makan garam, 1 sendok teh gula pasir, 2 liter air, Kecap manis secukupnya, 6 siung bawang putih, 5 siung bawang merah, 1 sendok makan merica, ½ sendok teh jinten, 6 butir kemiri, 3 cm jahe.', 'Jawa Tengah', '8000-25000'),
(3, 'kerak.jpg', 'Kerak Telor', 'Beras ketan putih berkualitas, 100 gram, 250 ml air, 100 gram kelapa parut yang disangrai atau serundeng, 15 gram ebi atau udang kecil yang direbus, disangrai, kemudian dihaluskan, 5 butir telur bebek atau telur ayam, 30 gram bawang merah goreng kering, 1 sdm minyak goreng, bawang merah goreng kering sebagai taburan, garam secukupnya, gula pasir secukupnya, 4 buah cabai merah keriting, ½ sdt merica butir, 3 cm kencur, 1 cm jahe.', 'Betawi', '10000-15000'),
(4, 'rendang.jpg', 'Rendang', '2 kg daging sapi bersih, 1 liter santan kental, 1 liter santan yang dicampur air, 3 helai daun kunyit, 4 helai daun jeruk purut, 3 batang sereh, 1 ruas asam asam gelugur atau kandis, 3 cm laos atau lengkuas, 3 cm kunyit yang dibakar dan dibersihkan kulitnya, 2 cm jahe yang dibakar dan dibersihkan kulitnya, 150 gram cabe merah besar (lombok) atau sesuai selera, 150 gram cabe merah keriting atau sesuai selera, 15 siung bawang merah, 6 siung bawang putih, 5 butir kemiri, ½ sendok makan ketumbar ', 'Padang', '80000-150000'),
(5, 'pempek.jpg', 'Pempek', '600 gr ikan tenggiri, 300 gr sagu putih, 3/4 gelas air, garam secukupnya.', 'Palembang', '10000-15000'),
(6, 'gudek.jpg', 'Gudek', '1 kg nangka muda, 12 butir telur rebus, 1000 ml air kelapa, 1sdt cuka, 10 lembar daun salam, 8 iris lengkuas dengan ukuran 8cm yang diiris melintang, 200 gram gula merah iris/sisir halus, 2000 ml santan kelapa, 15 siung bawang merah, 10 siung bawang putih, 4 ½ sendok teh ketumbar, Garam secukupnya.', 'Yogyakarta', '15000-20000'),
(7, 'serabii.jpg', 'Serabi', '150 gr kelapa parut, 50 ml air daun suji, garam 1/2 sendok teh, santan kelapa 500 ml, 220 gr tepung beras, 1 lembar daun pandan (dibuat simpul), santan kelapa 100 ml, gula merah 120 gr (disisir halus), sedikit garam, 10 gr gula pasir.', 'Sunda', '5000-15000'),
(8, 'bebeek.jpg', 'Bebek Betutu', '1 ekor bebek utuh bersih, daun bayam 150 gr, daun pisang untuk membungkus, bawang merah 10 buah, bawang putih 6 siung, cabai rawit merah 15 buah, serai 1 batang, lengkuas 3 cm, kunyit 3 cm, kupas dulu, ketumbar 1 sendok makan, merica 1 sendok teh, kemiri 5 butir, jinten 2 sendok teh, biji cengkeh 3 buah, kayu manis 2 cm, kapulaga 3 buah, buah pala bubuk ½sdt, terasi bakar ½sdt, perasan jeruk nipis 1sdm, minyak goreng 3sdm, garam halus secukupnya, gula pasir putih 1sdt, air putih 2sdm.', 'Bali', '35000-60000'),
(9, 'seblak.jpg', 'Seblak', '2 genggam kerupuk (redam di air biasa 2 jam), 6 butir bakso, 200 gr ceker, 4 siung bawang merah, 3 siung bawang putih, 3 butir kemiri(boleh di kurangi klo ga suka creamy), 1 ruas jari kencur, 8 cabe merah keriting, 6 cabe rawit pedas, 5 cabe rawit hijau (untuk irisan), Gula, garam, kaldu bubuk, lada bubuk, 1 bonggol sawi sendok, 1 batang daun bawang, air kaldubrebusan ceker (sesuai selera), 2 butir telur yang sudah di orak arik.', 'Bandung', '10000-25000'),
(10, 'ikann.jpg', 'Ikan Kuah Kuning', '500 gr ikan potong-potong, 2 buah jeruk nipis, 2 lembar daun salam, 2 cm lengkuas, Secukupnya cabe rawit, 2 batang sereh, 2 buah tomat, 2 batang kemangi, 2 batang daun bawang, 500 ml air, secukupnya garam, gula, penyedap, 8 butir bawang merah, 5 butir bawang putih, 3 cm kunyit, 3 cm jahe, 3 butir kemiri sangrai, 3 buah cabe merah besar.', 'Papua', '15000-30000'),
(16, 'nasi.jpg', 'Nasi Goreng', 'Nasi 600 g, Telur ayam 1 butir. Kocok, Daging ayam 125 g. Cincang halus, Sosis ayam 1 buah, Bawang putih 3 siung. Iris halus, Garam sdt, Penyedap rasa sdt, Kecap ikan sdm, Merica sdt, Daun bawang 1 batang. Iris halus', 'Indonesia', '15000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
