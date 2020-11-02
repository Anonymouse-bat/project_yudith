-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2020 pada 22.43
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_yudith`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `keluhan_id` varchar(128) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `news_head` text DEFAULT NULL,
  `news_image` varchar(128) DEFAULT NULL,
  `messsage_content` text DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `date_news` date DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL,
  `approve_by` int(11) DEFAULT NULL,
  `date_approve` date DEFAULT NULL,
  `date_time_approve` datetime DEFAULT NULL,
  `rejected_by` int(1) DEFAULT NULL,
  `date_rejected` datetime DEFAULT NULL,
  `is_deleted` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(13) DEFAULT NULL,
  `jk` int(1) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `id_provinsi` int(2) DEFAULT NULL,
  `foto_ktp` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `date_user` date DEFAULT NULL,
  `approve_by` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `no_tlp`, `jk`, `alamat`, `id_provinsi`, `foto_ktp`, `password`, `is_active`, `level`, `date_user`, `approve_by`, `updated`, `created`) VALUES
(1, 'Niki Dwijananto', '081214000096', 1, 'Jl. Raden Saleh No.08, RT.003/RW.004, Karang Tengah, Kec. Karang Tengah, Kota Tangerang, Banten 15157', 36, 'KTP-03112020-0e41b9f245.jpg', '$2y$10$L.zipImyw.n5wsluCof0OOxdJ77a.oTXBznf5sF1uO3LMoPJr58Uu', 1, 1, '2020-11-03', NULL, NULL, '2020-11-03 04:35:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_provinsi`
--

CREATE TABLE `wilayah_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wilayah_provinsi`
--

INSERT INTO `wilayah_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(11, 'Aceh'),
(12, 'Sumatera Utara'),
(13, 'Sumatera Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatera Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(31, 'Dki Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'Di Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(65, 'Kalimantan Utara'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(76, 'Sulawesi Barat'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua Barat'),
(94, 'Papua');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `wilayah_provinsi`
--
ALTER TABLE `wilayah_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wilayah_provinsi`
--
ALTER TABLE `wilayah_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `FK_keluhan_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
