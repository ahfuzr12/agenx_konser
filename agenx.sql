-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2023 pada 12.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenx`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `bagian` int(2) NOT NULL,
  `hak_akses` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `email`, `nama`, `password`, `bagian`, `hak_akses`, `active`) VALUES
(1, 'ahfuz12', 'ahmad@agenx.com', 'Ahmad Fauzi Ramadhan', '$2y$10$98B1OcL1qpVvBO22APjq6ulEMOUobtF4fSbzLt3vtNmRHV9O8HrTu', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `id_ticket` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `jenis` int(1) NOT NULL,
  `alamat` text NOT NULL,
  `checkin` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id`, `id_ticket`, `nama`, `nik`, `email`, `nohp`, `jenis`, `alamat`, `checkin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12311', 'Dzaki Riyanto Akbar', '1234567812345678', 'ahmadfauzi@arnonfood.com', '081123123123', 3, 'Jl.Yangkauridhoi', 0, '2023-06-17 07:07:50', '2023-06-17 07:07:50', NULL),
(2, '1234', 'Dzaki Riyanto Akbar', '1234567812345671', 'ahmadfauz@arnonfood.com', '081123123121', 1, 'Jl.Yangkauridhoi', 0, '2023-06-17 07:09:39', '2023-06-17 07:09:39', NULL),
(3, '12315', 'Dzaki Riyanto Akbar', '1234567812345672', 'ahmadfauzii@arnonfood.com', '081123123111', 2, 'Jl.Yangkauridhoi', 0, '2023-06-17 07:11:25', '2023-06-17 07:11:25', NULL),
(4, '123123', 'Jono Joni', '1234123412341234', 'admin@argon.com', '123412312312', 2, 'Jl. Panjang pang panjangna', 1, '2023-06-17 07:19:20', '2023-06-17 09:32:41', NULL),
(5, '8XV7YZXRZUD99YPULBTEXP35D', 'KZglozer waka waka ee', '0099987654231478', 'admin@argon.corn', '08115171895', 3, 'tes tes 123', 1, '2023-06-17 09:56:36', '2023-06-17 09:58:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_ticket` (`id_ticket`,`nik`,`email`,`nohp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
