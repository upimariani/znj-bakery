-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2023 pada 00.17
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

--
-- Dumping data untuk tabel `bahanbaku`
--

INSERT INTO `bahanbaku` (`id_bb`, `id_supplier`, `nama_bb`, `ket_bb`, `harga_bb`, `stok_supp`, `stok_min_supp`, `stok_min_gudang`) VALUES
(2, 1, 'Gula', 'Kg', '10000', '4', '2', '2');

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

--
-- Dumping data untuk tabel `bb_keluar`
--

INSERT INTO `bb_keluar` (`id_bb_keluar`, `id_bb_masuk`, `tgl_keluar`, `qty_keluar`) VALUES
(1, 2, '2022-11-10', 2),
(2, 1, '2022-11-09', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bb_masuk`
--

CREATE TABLE `bb_masuk` (
  `id_bb_masuk` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_bb` int(11) NOT NULL,
  `tgl_masuk` varchar(20) NOT NULL,
  `qty_masuk` int(11) NOT NULL,
  `sisa_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bb_masuk`
--

INSERT INTO `bb_masuk` (`id_bb_masuk`, `id_transaksi`, `id_bb`, `tgl_masuk`, `qty_masuk`, `sisa_stok`) VALUES
(1, 1, 2, '', 10, 0),
(2, 2, 2, '', 12, 0),
(3, 3, 2, '', 13, 0),
(4, 5, 2, '', 25, 0),
(5, 7, 2, '2022-12-18', 2, 0),
(6, 8, 2, '2023-01-18', 8, 0),
(7, 9, 2, '2023-01-18', 8, 8),
(8, 10, 2, '2023-01-18', 5, 5),
(9, 11, 2, '2023-01-23', 2, 2),
(10, 12, 2, '2023-01-23', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice_bb`
--

CREATE TABLE `invoice_bb` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tgl_order` varchar(15) NOT NULL,
  `total_order` varchar(15) NOT NULL,
  `status_order` int(11) NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice_bb`
--

INSERT INTO `invoice_bb` (`id_transaksi`, `id_user`, `id_supplier`, `tgl_order`, `total_order`, `status_order`, `bukti_pembayaran`) VALUES
(1, 1, 1, '2022-11-09', '100000', 2, 'hill.jpg'),
(2, 1, 1, '2022-11-10', '120000', 2, 'hill1.jpg'),
(3, 1, 1, '2022-11-10', '130000', 2, '31084499740-bukti_transfer.jpg'),
(4, 1, 1, '2022-11-10', '250000', 1, 'Screenshot_2022-06-27_121156.png'),
(5, 1, 1, '2022-11-10', '250000', 2, 'Screenshot_2022-06-27_121156.png'),
(6, 1, 1, '2022-12-18', '20000', 2, 'Screenshot_2022-06-27_121156.png'),
(7, 1, 1, '2022-12-18', '20000', 2, 'Screenshot_2022-06-27_121156.png'),
(8, 1, 1, '2023-01-18', '80000', 2, 'Screenshot_2022-06-27_121156.png'),
(9, 1, 1, '2023-01-18', '80000', 2, 'Screenshot_2022-06-27_121156.png'),
(10, 1, 1, '2023-01-18', '50000', 2, 'Screenshot_2022-06-27_121156.png'),
(11, 1, 1, '2023-01-23', '20000', 0, ''),
(12, 1, 1, '2023-01-23', '20000', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawaran`
--

CREATE TABLE `penawaran` (
  `id_penawaran` int(11) NOT NULL,
  `id_bb` int(11) NOT NULL,
  `qty_penawaran` int(11) NOT NULL,
  `konfirmasi` int(11) NOT NULL,
  `time_penawaran` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penawaran`
--

INSERT INTO `penawaran` (`id_penawaran`, `id_bb`, `qty_penawaran`, `konfirmasi`, `time_penawaran`) VALUES
(1, 2, 20, 1, '2023-01-16 09:47:34'),
(2, 2, 30, 0, '2023-01-16 09:47:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur_bb`
--

CREATE TABLE `retur_bb` (
  `id_retur` int(11) NOT NULL,
  `id_bb_masuk` int(11) NOT NULL,
  `tgl_retur` varchar(15) NOT NULL,
  `alasan_retur` text NOT NULL,
  `qty_retur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `retur_bb`
--

INSERT INTO `retur_bb` (`id_retur`, `id_bb_masuk`, `tgl_retur`, `alasan_retur`, `qty_retur`) VALUES
(1, 6, '2023-01-18', '0', 8),
(2, 5, '2023-01-18', 'Exp.', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(125) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `no_hp_supplier` varchar(15) NOT NULL,
  `username_supplier` varchar(125) NOT NULL,
  `password_supplier` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `nama_toko`, `no_hp_supplier`, `username_supplier`, `password_supplier`) VALUES
(1, 'Ahmad', 'Cijoho, Kuningan', 'Sinar Abadi', '089877876556', 'supplier', 'supplier'),
(2, 'Jajang', 'Kuningan', 'Sinar Jaya', '08987656665', 'jajang', 'jajang');

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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `username`, `password`, `no_hp`, `level_user`) VALUES
(1, 'Admin', 'Kuningan Jawa Barat', 'admin', 'admin', '089765456544', 1),
(2, 'Pimpinan', 'Kuningan', 'pemilik', 'pemilik', '089192819281', 2);

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
-- Indeks untuk tabel `penawaran`
--
ALTER TABLE `penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

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
  MODIFY `id_bb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bb_keluar`
--
ALTER TABLE `bb_keluar`
  MODIFY `id_bb_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bb_masuk`
--
ALTER TABLE `bb_masuk`
  MODIFY `id_bb_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `invoice_bb`
--
ALTER TABLE `invoice_bb`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id_penawaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `retur_bb`
--
ALTER TABLE `retur_bb`
  MODIFY `id_retur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
