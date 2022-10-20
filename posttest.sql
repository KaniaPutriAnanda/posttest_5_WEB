-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2022 pada 09.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kacans`
--

CREATE TABLE `kacans` (
  `id` int(50) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `versi` varchar(500) DEFAULT NULL,
  `kuantitas` int(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kacans`
--

INSERT INTO `kacans` (`id`, `nama`, `nohp`, `kategori`, `versi`, `kuantitas`, `harga`, `tanggal`, `alamat`, `pembayaran`) VALUES
(12, 'Nurmedina Maulidiah', '085248621059', 'album', 'BTS - Love Yourself HER [5th Mini Album]', 10, 300000, '2022-10-20', 'Bengkuring', 'banking'),
(13, 'agdita', '085248621645', 'album', 'TXT : THE DREAM CATCHER ETERNITY', 50, 329900, '2022-10-20', 'perjuangan', 'paypal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kacans`
--
ALTER TABLE `kacans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kacans`
--
ALTER TABLE `kacans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
