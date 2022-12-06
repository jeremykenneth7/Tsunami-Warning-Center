-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2022 pada 12.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsunami`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `posko` varchar(255) NOT NULL,
  `foto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `jk`, `tanggal_lahir`, `alamat`, `telp`, `posko`, `foto`) VALUES
(1, 'Bangun Wiharjo', 'L', '2003-02-05', 'bantul', '0812232320', 'Kalangasan', ''),
(2, 'Yusril Prayoga', 'L', '2003-08-09', 'sulawesi', '12313123213', 'bantul', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hilang`
--

CREATE TABLE `hilang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hilang`
--

INSERT INTO `hilang` (`id`, `nama`, `jk`, `alamat`, `telp`, `status`) VALUES
(1, 'Yusril', 'L', 'Jalan Perkutut 1 Yogyakarta', '0812232320', 2),
(2, 'Hendro', 'L', 'Jalan Pisan 3 Yogyakarta', '08122434312', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hilang`
--
ALTER TABLE `hilang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hilang`
--
ALTER TABLE `hilang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
