-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2020 pada 19.59
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_naivebayes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_test`
--

CREATE TABLE `data_test` (
  `id_user_test` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `gaji` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pinjaman` varchar(50) DEFAULT NULL,
  `jangka_waktu` varchar(50) DEFAULT NULL,
  `agunan` varchar(50) DEFAULT NULL,
  `kolektabilitas` varchar(50) DEFAULT NULL,
  `prediksi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_test`
--

INSERT INTO `data_test` (`id_user_test`, `nama`, `gaji`, `jenis_kelamin`, `status`, `pinjaman`, `jangka_waktu`, `agunan`, `kolektabilitas`, `prediksi`) VALUES
(22, 'Septian', 'Besar', 'L', 'Sudah Menikah', 'Besar', 'Jangka Panjang', 'BPKB SPM', NULL, 'Lancar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE `data_training` (
  `id` varchar(2) NOT NULL,
  `gaji` varchar(9) DEFAULT NULL,
  `nama` varchar(12) DEFAULT NULL,
  `jenis_kelamin` varchar(13) DEFAULT NULL,
  `status` varchar(13) DEFAULT NULL,
  `pinjaman` varchar(10) DEFAULT NULL,
  `jangka_waktu` varchar(15) DEFAULT NULL,
  `agunan` varchar(11) DEFAULT NULL,
  `kolektabilitas` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_training`
--

INSERT INTO `data_training` (`id`, `gaji`, `nama`, `jenis_kelamin`, `status`, `pinjaman`, `jangka_waktu`, `agunan`, `kolektabilitas`) VALUES
('1', 'besar', 'Sri Dewi', 'P', 'Sudah Menikah', 'Besar', 'Jangka Panjang', 'BPKB SPM', 'Lancar'),
('10', 'besar', 'Rahayu', 'L', 'Sudah Menikah', 'Besar', 'Jangka Menengah', 'SRTFKT RMH', 'Tidak Lancar'),
('2', 'kecil', 'Hadi Sucipto', 'L', 'Sudah Menikah', 'Besar', 'Jangka Menengah', 'BPKB SPM', 'Lancar'),
('3', 'sedang', 'Wahono', 'L', 'Sudah Menikah', 'Besar', 'Jangka Panjang', 'SRTFKT RMH', 'Tidak Lancar'),
('4', 'besar', 'Sarjono', 'L', 'Sudah Menikah', 'Besar', 'Jangka Pendek', 'BPKB MBL', 'Lancar'),
('5', 'sedang', 'Sarita Utami', 'P', 'Belum Menikah', 'Sedang', 'Jangka Pendek', 'BPKB SPM', 'Tidak Lancar'),
('6', 'besar', 'Yudi Prabowo', 'L', 'Belum Menikah', 'Besar', 'Jangka Menengah', 'BPKB SPM', 'Lancar'),
('7', 'kecil', 'Joko Rasyid', 'L', 'Sudah Menikah', 'Besar', 'Jangka Panjang', 'BPKB SPM', 'Tidak Lancar'),
('8', 'besar', 'Sugito', 'L', 'Sudah Menikah', 'Besar', 'Jangka Pendek', 'SRTFKT RMH', 'Lancar'),
('9', 'besar', 'Siti Hajar', 'P', 'Sudah Menikah', 'Besar', 'Jangka Panjang', 'BPKB MBL', 'Tidak Lancar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(255) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2020-02-01-140017', 'App\\Database\\Migrations\\Product', 'default', 'App', 1580565897, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`) VALUES
(1, 'handphone', '12'),
(3, 'harusnya aku yang disana', 'aadsda'),
(4, 'handphone kun', 'sdakdn');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_test`
--
ALTER TABLE `data_test`
  ADD PRIMARY KEY (`id_user_test`);

--
-- Indeks untuk tabel `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_test`
--
ALTER TABLE `data_test`
  MODIFY `id_user_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
