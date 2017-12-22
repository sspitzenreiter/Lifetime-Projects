-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jan 2016 pada 08.49
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_kelas`, `nama`, `jk`) VALUES
(2, 18, 'Luthfi Muhammad Nabil', 'L'),
(3, 20, 'Muhamad Abdurahman Rais', 'L'),
(4, 20, 'Aryqy Muhamad Ichsan', 'L'),
(5, 20, 'Achmad Fauzi', 'L'),
(6, 20, 'Taufik Rifai', 'L'),
(7, 2, 'Delia Rizki Amalia', 'P'),
(8, 2, 'Muhammad Ilyas Ali Ibrahim', 'L'),
(9, 16, 'Divia Rahma Dewanti', 'P'),
(10, 5, 'Regina Fitriani Permana', 'P'),
(11, 9, 'Anggini Puspa Oktavia', 'P'),
(12, 9, 'Kiki Tri Febriani', 'P'),
(13, 18, 'Putri Dewi Purnamasari', 'P'),
(14, 18, 'Seliantika Fitriandi', 'P'),
(15, 19, 'Farhan Hidayat', 'L'),
(16, 19, 'Asep Kurniawan', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(4) NOT NULL,
  `id_sub` int(4) NOT NULL,
  `judul` varchar(35) DEFAULT NULL,
  `penulis` varchar(40) DEFAULT NULL,
  `penerbit` varchar(25) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_sub`, `judul`, `penulis`, `penerbit`, `status`) VALUES
(1, 2, 'Java Programming', 'RR2', 'asf', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(4) NOT NULL,
  `nama_jurusan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'TKI'),
(2, 'AK'),
(3, 'AP'),
(4, 'PM'),
(5, 'RPL'),
(6, 'MM'),
(7, 'TKJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(4) NOT NULL,
  `nama_kategori` varchar(35) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Buku Referensi'),
(2, 'Buku Pelajaran'),
(3, 'Komik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(4) NOT NULL,
  `id_jurusan` int(4) NOT NULL,
  `nama_kelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `nama_kelas`) VALUES
(1, 1, 'X-TKI 1'),
(2, 1, 'X-TKI 2'),
(3, 1, 'X-TKI 3'),
(4, 1, 'X-TKI 4'),
(5, 1, 'X-TKI 5'),
(6, 2, 'X-AK 1'),
(7, 2, 'X-AK 2'),
(8, 2, 'X-AK 3'),
(9, 3, 'X-AP 1'),
(10, 3, 'X-AP 2'),
(11, 3, 'X-AP 3'),
(12, 3, 'X-AP 4'),
(13, 3, 'X-AP 5'),
(14, 4, 'X-PM 1'),
(15, 4, 'X-PM 2'),
(16, 4, 'X-PM 3'),
(17, 5, 'XI-RPL 1'),
(18, 5, 'XI-RPL 2'),
(19, 6, 'XI-MM 1'),
(20, 6, 'XI-MM 2'),
(21, 7, 'XI-TKJ'),
(22, 2, 'XI-AK 1'),
(23, 2, 'XI-AK 2'),
(24, 2, 'XI-AK 3'),
(25, 3, 'XI-AP 1'),
(26, 3, 'XI-AP 2'),
(27, 3, 'XI-AP 3'),
(28, 3, 'XI-AP 4'),
(29, 3, 'XI-AP 5'),
(30, 4, 'XI-PM 1'),
(31, 4, 'XI-PM 2'),
(32, 4, 'XI-PM 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_pinjam` int(4) NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `id_buku` int(4) NOT NULL,
  `lama_pinjam` int(4) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(4) NOT NULL,
  `password` varchar(18) DEFAULT NULL,
  `jk` char(1) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `id_anggota` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `password`, `jk`, `nama`, `id_anggota`) VALUES
(1, 'lightningstorm', 'L', 'BlueLightning', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kategori`
--

CREATE TABLE IF NOT EXISTS `sub_kategori` (
  `id_sub` int(4) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  `nama_subkategori` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub`, `id_kategori`, `nama_subkategori`) VALUES
(1, 1, 'Komputer'),
(2, 2, 'Matematika'),
(3, 2, 'Bahasa Indonesia'),
(4, 2, 'Ilmu Pengetahuan Umum'),
(5, 1, 'Otomotif'),
(6, 2, 'Prakarya dan Kewirausahaa'),
(7, 1, 'Peta'),
(8, 2, 'Bahasa Inggris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_sub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_sub` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
