-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2022 pada 22.52
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
-- Database: `znj-bakery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `id_bb` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `nama_bb` varchar(125) NOT NULL,
  `ket_bb` text NOT NULL,
  `harga_bb` varchar(15) NOT NULL,
  `stok_supp` varchar(11) NOT NULL,
  `stok_min_supp` varchar(11) NOT NULL,
  `stok_min_gudang` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bb_keluar`
--

CREATE TABLE `bb_keluar` (
  `id_bb_keluar` int(11) NOT NULL,
  `id_bb_masuk` int(11) NOT NULL,
  `tgl_keluar` varchar(15) NOT NULL,
  `qty_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bb_masuk`
--

CREATE TABLE `bb_masuk` (
  `id_bb_masuk` int(11) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `id_bb` int(11) NOT NULL,
  `qty_masuk` int(11) NOT NULL,
  `sisa_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice_bb`
--

CREATE TABLE `invoice_bb` (
  `id_transaksi` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tgl_order` varchar(15) NOT NULL,
  `total_order` varchar(15) NOT NULL,
  `status_order` int(11) NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur_bb`
--

CREATE TABLE `retur_bb` (
  `id_retur` int(11) NOT NULL,
  `id_bb_masuk` int(11) NOT NULL,
  `tgl_retur` varchar(15) NOT NULL,
  `alasan_retur` int(11) NOT NULL,
  `qty_retur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(125) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `no_hp_supplier` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat_user` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`id_bb`);

--
-- Indeks untuk tabel `bb_keluar`
--
ALTER TABLE `bb_keluar`
  ADD PRIMARY KEY (`id_bb_keluar`);

--
-- Indeks untuk tabel `bb_masuk`
--
ALTER TABLE `bb_masuk`
  ADD PRIMARY KEY (`id_bb_masuk`);

--
-- Indeks untuk tabel `invoice_bb`
--
ALTER TABLE `invoice_bb`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `retur_bb`
--
ALTER TABLE `retur_bb`
  ADD PRIMARY KEY (`id_retur`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahanbaku`
--
ALTER TABLE `bahanbaku`
  MODIFY `id_bb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bb_keluar`
--
ALTER TABLE `bb_keluar`
  MODIFY `id_bb_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bb_masuk`
--
ALTER TABLE `bb_masuk`
  MODIFY `id_bb_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `retur_bb`
--
ALTER TABLE `retur_bb`
  MODIFY `id_retur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
