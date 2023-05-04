-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 10:00 PM
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
-- Database: `tanitalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `katalog_budidaya`
--

CREATE TABLE `katalog_budidaya` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `createAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `editedAt` date DEFAULT NULL,
  `pengelola` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katalog_budidaya`
--

INSERT INTO `katalog_budidaya` (`id`, `judul`, `deskripsi`, `createAt`, `editedAt`, `pengelola`, `gambar`) VALUES
(1, 'Budidaya Kakao', 'Buah kakao adalah salah satu komoditas perkebunan yang cukup besar di WKBPP Waiwerang. Sayangnya, produksi buah kakao ini masih belum optimal di WKBPP Waiwerang. Ini dipengaruhi oleh banyak faktor, seperti sistem budidaya kakao yang kurang tepat, cara pemeliharaan tanaman kakao yang tidak sesuai, pemupukan kakao yang tidak tepat dosis dan sasaran, hingga serangan hama dan penyakit yang bisa menurunkan produksi buah kakao secara drastis dan cepat.', '2023-05-04 19:40:21', NULL, 1, 'kakao_oke.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `katalog_penyakit`
--

CREATE TABLE `katalog_penyakit` (
  `id` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `jenis_penyakit` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `editedAt` date DEFAULT NULL,
  `pengelola` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katalog_penyakit`
--

INSERT INTO `katalog_penyakit` (`id`, `nama_penyakit`, `jenis_penyakit`, `deskripsi`, `createAt`, `editedAt`, `pengelola`, `gambar`) VALUES
(1, 'Penyakit Layu Semai', 'Penyakit Kopi\r\n', 'Penyakit layu semai pada kopi disebabkan oleh jamur Fusarium sp. yang menyerang bibit kopi pada tahap awal pertumbuhannya. Jamur ini bisa menyebar melalui biji kopi yang sudah terinfeksi atau melalui media tanam yang terkontaminasi.', '2023-05-04 19:58:39', '2023-05-04', 1, 'kopi_oke.jpg'),
(2, 'Bayam Tidak Hijau', '', 'Penyakit pada bayam yang membuat warna daunnya tidak hijau dapat disebabkan oleh beberapa faktor, seperti serangan hama dan penyakit, kekurangan nutrisi atau kondisi lingkungan yang tidak sesuai. Beberapa penyakit yang dapat menyebabkan daun bayam tidak h', '2023-05-02 01:05:22', NULL, 1, 'bayam_oke.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `nohp` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto` blob DEFAULT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `nohp`, `email`, `password`, `foto`, `level`) VALUES
(1, 'maulana', NULL, NULL, 'maulana@gmail.com', 'maul123', NULL, 'petani'),
(2, 'amanda', NULL, NULL, 'amanda@gmail.com', 'amanda123', NULL, 'pengelola'),
(3, 'Januar', NULL, NULL, 'januar@gmail.com', 'januar123', NULL, 'petani'),
(4, 'pengelola1', NULL, NULL, 'pengelola1@gmail.com', '12345', NULL, 'petani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog_budidaya`
--
ALTER TABLE `katalog_budidaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog_penyakit`
--
ALTER TABLE `katalog_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog_budidaya`
--
ALTER TABLE `katalog_budidaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `katalog_penyakit`
--
ALTER TABLE `katalog_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
