-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2023 pada 15.15
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpstrackerv2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `package` int(1) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `purchase_date` varchar(128) NOT NULL,
  `time_out` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id_payment`, `package`, `bukti`, `email`, `purchase_date`, `time_out`) VALUES
(5, 4, 'SplashTrack3.jpg', 'muhammadrestuprayudha797@gmail.com', '1676876156', '1684654259');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_marker_muhammadrestuprayudha797`
--

CREATE TABLE `tb_marker_muhammadrestuprayudha797` (
  `id` int(11) NOT NULL,
  `lat` varchar(128) NOT NULL,
  `lng` varchar(128) NOT NULL,
  `spd` varchar(128) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_marker_muhammadrestuprayudha797`
--

INSERT INTO `tb_marker_muhammadrestuprayudha797` (`id`, `lat`, `lng`, `spd`, `datetime`) VALUES
(1, '0.000000', '0.000000', '0', '2023-02-20 14:27:40'),
(2, '0.569942', '101.480972', '0', '2023-02-20 14:27:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(128) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  `is_payment` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `contact`, `password`, `is_payment`, `is_active`) VALUES
(2, 'Delilayudiaputri@gmail.com', 'webmerdeka2911@gmail.com', '082385989476', '$2y$10$Bz4yXsnOc7Up8bcvo3eZZ.2rNv8OYbGlKBO6bjW6KUsyR/UiJFuOG', 1, 2),
(6, 'Restu prayudha', 'muhammadrestuprayudha797@gmail.com', '081224313242', '$2y$10$dR9bf0/3YICsZOX5BBMvme5EolAyaanFU0DznvHt3FiVguQv9RB7e', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_token`
--

CREATE TABLE `users_token` (
  `id_users_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indeks untuk tabel `tb_marker_muhammadrestuprayudha797`
--
ALTER TABLE `tb_marker_muhammadrestuprayudha797`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `users_token`
--
ALTER TABLE `users_token`
  ADD PRIMARY KEY (`id_users_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_marker_muhammadrestuprayudha797`
--
ALTER TABLE `tb_marker_muhammadrestuprayudha797`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users_token`
--
ALTER TABLE `users_token`
  MODIFY `id_users_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
