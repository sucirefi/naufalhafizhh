-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2018 pada 04.18
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nip` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `jurusan` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `jurusan`) VALUES
(1135089, 'fitria sari', 'Bandung Selatan', '2000-04-02', 'p', 'IT'),
(11303507, 'Ahmad Arif', 'Jakarta', '2000-01-03', 'l', 'teknik informatika'),
(3201928, 'cecep nandar', 'Surabaya', '2001-02-06', 'l', 'IT'),
(12233434, 'zainal abdul', 'Banyumas', '2000-11-03', 'l', 'teknik informatika'),
(2147483647, 'aiman nur', 'Jakarta', '1999-12-07', 'l', 'IT'),
(22424223, 'maulani nuraman', 'Cirebon', '2000-04-05', 'l', 'teknik informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('Rak_1','Rak_2','Rak_3','') NOT NULL,
  `tanggal_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tanggal_input`) VALUES
(4, 'Belajar HTML Dengan Mudah', 'ahmad hafizh', 'mediabook', '2007', '121123234', 15, 'Rak_3', '2018-04-27 04:16:09'),
(5, 'Buku Javascript dan PHP', 'hafizhah', 'gagasanmedia', '1988', '1243233', 50, 'Rak_1', '0000-00-00 00:00:00'),
(6, 'Belajar Codeigniter dengan Cepat', 'Fitria nur', 'gagasanmedia', '2005', '12121323', 15, 'Rak_1', '2018-04-27 04:18:34'),
(7, 'Belajar PHP dengan mudah', 'fariz abdul ahmad', 'media buku', '2007', '1233435', 50, 'Rak_2', '2018-04-27 04:23:50'),
(8, 'Buku Masakan Tradisional', 'ikbal nurhamda', 'gagasanmedia', '2014', '32421212', 20, 'Rak_2', '2018-04-27 12:17:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggal_pinjam` varchar(30) NOT NULL,
  `tanggal_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `tanggal_pinjam`, `tanggal_kembali`, `status`) VALUES
(1, 'Buku Javascript', '2018-04-18', '2018-04-30', 'pinjam'),
(3, 'Buku Javascript', '2018-04-20', '2018-05-09', 'kembali'),
(4, 'Belajar PHP', '2018-04-12', '2018-05-16', 'kembali'),
(5, 'Belajar HTML Dengan Mudah', '2018-04-18', '2018-05-01', 'pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
