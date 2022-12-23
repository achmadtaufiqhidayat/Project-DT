-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2022 pada 17.25
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `document`
--

CREATE TABLE `document` (
  `id_document` int(5) NOT NULL,
  `document` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `level` varchar(11) NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `username`, `password`, `level`, `aktif`) VALUES
('197909212005011001', 'Dody', 'Dody123', 12345, 'Dosen', '1'),
('1979092120050511001', '0', '0', 0, '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id_matkul`, `nama`, `username`, `password`, `level`, `aktif`) VALUES
(4, 28, 'Yusril', 'yusril123', 'yusril123', 'mahasiswa', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL,
  `logika_algoritma` enum('A','B','C','D') NOT NULL,
  `matematika_Diskrit` enum('A','B','C','D') NOT NULL,
  `wk_sistemtertanam` enum('A','B','C','D') NOT NULL,
  `wk_pcv` enum('A','B','C','D') NOT NULL,
  `sistem_cerdas` enum('A','B','C','D') NOT NULL,
  `wk_sistem_cerdas` enum('A','B','C','D') NOT NULL,
  `name` text NOT NULL,
  `file` varchar(50) NOT NULL,
  `id_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matkul`, `logika_algoritma`, `matematika_Diskrit`, `wk_sistemtertanam`, `wk_pcv`, `sistem_cerdas`, `wk_sistem_cerdas`, `name`, `file`, `id_status`) VALUES
(28, 'B', 'A', 'B', 'A', 'B', 'B', 'Skripsi.pdf', 'hiya hiiya', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(3) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
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
-- Indeks untuk tabel `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `document` (`document`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD UNIQUE KEY `status` (`status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
