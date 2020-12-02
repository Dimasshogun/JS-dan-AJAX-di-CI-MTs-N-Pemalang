-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2020 pada 03.46
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tcontact`
--

CREATE TABLE `tcontact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tcontact`
--

INSERT INTO `tcontact` (`id`, `nama`, `email`, `no_telp`, `pesan`) VALUES
(1, 'Dimas Kanjeng Prabowo', 'dimas.gunarso@gmail.com', '091386287452', 'mantab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tguru`
--

CREATE TABLE `tguru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tguru`
--

INSERT INTO `tguru` (`id`, `nama`, `nip`, `jeniskelamin`, `alamat`) VALUES
(1, 'Dimas Shofa Gunarso', '18090061', 'Laki-laki', 'jl.gurameh Widuri Pemalang'),
(4, 'Ulva Devi Yuliana', '18090052', 'Perempuan', 'jl. melati Taman Pemalang'),
(5, 'Rania Natasya', '18090063', 'Perempuan', 'jl.AhmadYani Pelutan Pemalang'),
(6, 'Ade Kurniawan', '18090064', 'Laki-laki', 'jl.subroto Pelutan Pemalang'),
(7, 'Qirani Rifa Annisa', '18090057', 'Perempuan', 'jl.kebodang comal pemalang'),
(15, 'a', '4242', 'Laki-laki', 'jl.kebodang comal pemalang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsiswa`
--

CREATE TABLE `tsiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tsiswa`
--

INSERT INTO `tsiswa` (`id`, `nama`, `nis`, `jeniskelamin`, `alamat`) VALUES
(1, 'Dimas Shofa Gunarso', '18090061', 'Laki-laki', 'jl.gurameh Widuri Pemalang'),
(4, 'Ulva Devi Yuliana', '18090052', 'Perempuan', 'jl. melati Taman Pemalang'),
(5, 'Rania Natasya', '18090063', 'Perempuan', 'jl.AhmadYani Pelutan Pemalang'),
(7, 'Panca Mutiara Dewi', '180900635', 'Perempuan', 'jl.AhmadYani Pelutan Pemalang'),
(8, 'Angger Rio Prasetyo', '17897234', 'Laki-laki', 'jl.agung taman pemalang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(1, 'dimas', '7d49e40f4b3d8f68c19406a58303f826', 'Dimas Shofa Gunarso', 'dimas.gunarso@gmail.com\r\n'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ulva devi yuliana', 'ulva@gmail.com\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tcontact`
--
ALTER TABLE `tcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tguru`
--
ALTER TABLE `tguru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tsiswa`
--
ALTER TABLE `tsiswa`
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
-- AUTO_INCREMENT untuk tabel `tcontact`
--
ALTER TABLE `tcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tguru`
--
ALTER TABLE `tguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tsiswa`
--
ALTER TABLE `tsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
