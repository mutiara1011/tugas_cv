-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2023 at 03:30 PM
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
-- Database: `cv_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_cv`
--

CREATE TABLE `data_cv` (
  `ID` bigint(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `Telepon` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Web` varchar(255) NOT NULL,
  `Pendidikan` text NOT NULL,
  `Pengalaman_Kerja` text NOT NULL,
  `Keterampilan` text NOT NULL,
  `Foto_Path` varchar(5000) NOT NULL,
  `Ppassword` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Hobi` varchar(255) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `TTL` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(255) NOT NULL,
  `Kewarganegaraan` varchar(255) NOT NULL,
  `Statuss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_cv`
--

INSERT INTO `data_cv` (`ID`, `Nama`, `Alamat`, `Telepon`, `Email`, `Web`, `Pendidikan`, `Pengalaman_Kerja`, `Keterampilan`, `Foto_Path`, `Ppassword`, `Deskripsi`, `Hobi`, `Instagram`, `TTL`, `Jenis_Kelamin`, `Kewarganegaraan`, `Statuss`) VALUES
(3337220100, 'Mutiara Sandi', 'BCP BLOK B 20 No.21', '082126233978', '3337220100@untirta.ac.id', 'CV WEB', 'S1 Informatika (2022-sekarang)', 'Tidak Ada ', 'Microsoft Ofiice ', 'https://user-images.githubusercontent.com/148642394/282130867-ebfeb5d3-412d-4869-adfa-dfa80d36fd7b.jpg', 'Tiara123', 'Saya adalah seorang mahasiswa aktif di Universitas Sultan Ageng Tirtayasa jurusan Informatika.', 'Saya memiliki hobi menulis dan menggambar.', '@mtrsnd_', 'Serang, 01 Januari 2004', 'Perempuan', 'Indonesia', 'Belum Menikah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_cv`
--
ALTER TABLE `data_cv`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
