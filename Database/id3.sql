-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2022 at 03:56 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3`
--

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id_document` int(5) NOT NULL,
  `document` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `username`, `password`, `level`) VALUES
('197909212005011001', 'Dody', 'Dody123', 12345, 'Dosen'),
('1979092120050511001', '0', '0', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_matkul` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id_matkul`, `nama`, `username`, `password`, `level`) VALUES
(4, 28, 'Yusril', 'yusril123', 'yusril123', 'mahasiswa'),
(5, 30, 'Taufiq Hidayat', 'taufiq123', 'taufiq123', 'mahasiswa'),
(6, 31, 'Fikri', 'Fikri123', 'Fikri123', 'mahasiswa'),
(7, 32, 'naufal', 'Naufal123', 'Naufal123', 'mahasiswa'),
(8, 33, 'widha', 'widha123', 'widha123', 'mahasiswa'),
(9, 34, 'hani', 'Hani123', 'Hani123', 'mahasiswa'),
(10, 35, 'luki', 'Luki123', 'Luki123', 'mahasiswa'),
(11, 36, 'Tegar Karunia', 'Tegar123', 'Tegar123', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL,
  `logika_algoritma` float NOT NULL,
  `matematika_Diskrit` float NOT NULL,
  `wk_sistemtertanam` float NOT NULL,
  `wk_pcv` float NOT NULL,
  `sistem_cerdas` float NOT NULL,
  `wk_sistem_cerdas` float NOT NULL,
  `name` text NOT NULL,
  `file` varchar(50) NOT NULL,
  `id_status` int(3) NOT NULL DEFAULT '0',
  `id_nilai_skripsi` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matkul`, `logika_algoritma`, `matematika_Diskrit`, `wk_sistemtertanam`, `wk_pcv`, `sistem_cerdas`, `wk_sistem_cerdas`, `name`, `file`, `id_status`, `id_nilai_skripsi`) VALUES
(28, 2.3, 1.5, 2, 1, 2, 2, 'Skripsi.pdf', 'hiya hiiya', 3, 3),
(30, 1, 1, 1, 1, 1, 1, 'file keren', 'Konsep dasar mikrokomputer.pdf', 3, 1),
(31, 1, 1, 1, 1, 1, 1, 'fdgdg', 'DATA STAN SEMESTER 4  PAMERAN TIF 2022.pdf', 3, 3),
(32, 3, 3, 3.5, 3.5, 2.5, 2.5, 'File keren sekali', 'UNDANGAN PURNA.pdf', 2, 2),
(33, 2, 2, 1, 1, 1, 2, 'skripsi keren', 'Rundown Kegiatan Adopsi Kegiatan MF.pdf', 0, 0),
(34, 2, 1, 1, 1, 1, 1, 'ssdfsdfs', 'UNDANGAN PURNA.pdf', 0, 0),
(35, 3.5, 3.6, 3.2, 3.8, 3.8, 3.5, 'Skripsi keren 2', '', 1, 1),
(36, 3.2, 2.3, 2.6, 3.2, 3.4, 4, 'Skripsi saya', 'Pengumuman PEMKAB 2022 POLIJE.pdf', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_skripsi`
--

CREATE TABLE `nilai_skripsi` (
  `id_nilai_skripsi` int(3) NOT NULL,
  `nilai_skripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_skripsi`
--

INSERT INTO `nilai_skripsi` (`id_nilai_skripsi`, `nilai_skripsi`) VALUES
(0, 'Menunggu Penilaian'),
(1, 'Sangat Baik'),
(2, 'Baik'),
(3, 'Kurang');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(3) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Diterima'),
(2, 'Diterima dengan Revisi'),
(3, 'Ditolak'),
(4, 'menunggu konfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `document` (`document`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `nilai_skripsi`
--
ALTER TABLE `nilai_skripsi`
  ADD PRIMARY KEY (`id_nilai_skripsi`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD UNIQUE KEY `status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
