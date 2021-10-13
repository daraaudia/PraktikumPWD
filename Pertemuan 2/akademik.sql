-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2021 pada 17.16
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswi`
--

CREATE TABLE `mahasiswi` (
  `nim` varchar(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `jkel` varchar(1) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgllhr` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswi`
--

INSERT INTO `mahasiswi` (`nim`, `name`, `jkel`, `alamat`, `tgllhr`) VALUES
('MHS01', 'Siti Aminah', 'P', 'Solo', '1995-10-01'),
('MHS02', 'Rita', 'P', 'Solo', '1991-01-01'),
('MHS03', 'Amirudin', 'L', 'Semarang', '1998-08-11'),
('MHS04', 'Siti Maryam', 'P', 'Jakarta', '1995-04-15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswi`
--
ALTER TABLE `mahasiswi`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
