-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2018 pada 15.05
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw_rkpdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `kd_kriteria` char(4) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `bobot` int(3) NOT NULL,
  `tipe_kriteria` enum('cost','benefit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`kd_kriteria`, `nama_kriteria`, `bobot`, `tipe_kriteria`) VALUES
('KT01', 'Volume', 4, 'cost'),
('KT02', 'Manfaat', 5, 'benefit'),
('KT03', 'waktu pelaksanaan', 3, 'cost'),
('KT04', 'anggaran', 3, 'cost');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` char(6) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `user` varchar(8) NOT NULL,
  `pass` char(50) NOT NULL,
  `level` enum('operator','kades') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `user`, `pass`, `level`) VALUES
('1', 'lulu', 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator'),
('2', 'lulu', 'kades', '0cfa66469d25bd0d9e55d7ba583f9f2f', 'kades');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `kd_sub_kriteria` char(5) NOT NULL,
  `kd_kriteria` char(4) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`kd_sub_kriteria`, `kd_kriteria`, `keterangan`, `nilai`) VALUES
('DKT01', 'KT01', '0-100 m', 1),
('DKT02', 'KT01', '101-200 m', 0.9),
('DKT03', 'KT01', '201-300 m', 0.8),
('DKT04', 'KT01', '301-400 m', 0.7),
('DKT05', 'KT01', '401-500 m', 0.6),
('DKT06', 'KT01', '501-600 m', 0.5),
('DKT07', 'KT01', '601-700 m', 0.4),
('DKT08', 'KT01', '701-800 m', 0.3),
('DKT09', 'KT01', '801-900m', 0.2),
('DKT10', 'KT01', '>900 m', 0.1),
('DKT11', 'KT02', 'Masyarakat', 1),
('DKT12', 'KT02', 'Transportasi', 0.8),
('DKT13', 'KT02', 'Pertanian', 0.6),
('DKT14', 'KT02', 'Kesehatan', 0.4),
('DKT15', 'KT02', 'Keamanan', 0.2),
('DKT16', 'KT03', '1-2 bulan', 1),
('DKT17', 'KT03', '2-4 bulan', 0.8),
('DKT18', 'KT03', '4-6 bulan', 0.6),
('DKT19', 'KT03', '6-8 bulan', 0.4),
('DKT20', 'KT03', '8-12 bulan', 0.2),
('DKT21', 'KT04', '0-100 jt', 1),
('DKT22', 'KT04', '101-200 jt', 0.8),
('DKT23', 'KT04', '201-300 jt', 0.6),
('DKT24', 'KT04', '301-400 jt', 0.4),
('DKT25', 'KT04', '>400 jt', 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dt_usulan`
--

CREATE TABLE `t_dt_usulan` (
  `id_dt_usulan` char(12) NOT NULL,
  `id_usulan` char(8) NOT NULL,
  `kd_sub_kriteria` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_dt_usulan`
--

INSERT INTO `t_dt_usulan` (`id_dt_usulan`, `id_usulan`, `kd_sub_kriteria`) VALUES
('DU2018001', 'U2018001', 'DKT07'),
('DU2018002', 'U2018001', 'DKT11'),
('DU2018003', 'U2018001', 'DKT17'),
('DU2018004', 'U2018001', 'DKT22'),
('DU2018005', 'U2018002', 'DKT04'),
('DU2018006', 'U2018002', 'DKT11'),
('DU2018007', 'U2018002', 'DKT17'),
('DU2018008', 'U2018002', 'DKT21'),
('DU2018009', 'U2018003', 'DKT04'),
('DU2018010', 'U2018003', 'DKT11'),
('DU2018011', 'U2018003', 'DKT17'),
('DU2018012', 'U2018003', 'DKT21'),
('DU2018013', 'U2018004', 'DKT05'),
('DU2018014', 'U2018004', 'DKT11'),
('DU2018015', 'U2018004', 'DKT17'),
('DU2018016', 'U2018004', 'DKT21'),
('DU2018017', 'U2018005', 'DKT04'),
('DU2018018', 'U2018005', 'DKT11'),
('DU2018019', 'U2018005', 'DKT17'),
('DU2018020', 'U2018005', 'DKT22'),
('DU2018021', 'U2018006', 'DKT06'),
('DU2018022', 'U2018006', 'DKT13'),
('DU2018023', 'U2018006', 'DKT16'),
('DU2018024', 'U2018006', 'DKT23'),
('DU2018025', 'U2018007', 'DKT05'),
('DU2018026', 'U2018007', 'DKT11'),
('DU2018027', 'U2018007', 'DKT16'),
('DU2018028', 'U2018007', 'DKT22'),
('DU2018029', 'U2018008', 'DKT05'),
('DU2018030', 'U2018008', 'DKT13'),
('DU2018031', 'U2018008', 'DKT16'),
('DU2018032', 'U2018008', 'DKT23'),
('DU2018033', 'U2018009', 'DKT06'),
('DU2018034', 'U2018009', 'DKT11'),
('DU2018035', 'U2018009', 'DKT16'),
('DU2018036', 'U2018009', 'DKT22'),
('DU2018037', 'U2018010', 'DKT10'),
('DU2018038', 'U2018010', 'DKT11'),
('DU2018039', 'U2018010', 'DKT16'),
('DU2018040', 'U2018010', 'DKT22'),
('DU2018041', 'U2018011', 'DKT01'),
('DU2018042', 'U2018011', 'DKT12'),
('DU2018043', 'U2018011', 'DKT16'),
('DU2018044', 'U2018011', 'DKT24'),
('DU2018045', 'U2018012', 'DKT04'),
('DU2018046', 'U2018012', 'DKT13'),
('DU2018047', 'U2018012', 'DKT16'),
('DU2018048', 'U2018012', 'DKT22'),
('DU2018049', 'U2018013', 'DKT01'),
('DU2018050', 'U2018013', 'DKT11'),
('DU2018051', 'U2018013', 'DKT16'),
('DU2018052', 'U2018013', 'DKT21'),
('DU2018053', 'U2018014', 'DKT09'),
('DU2018054', 'U2018014', 'DKT11'),
('DU2018055', 'U2018014', 'DKT16'),
('DU2018056', 'U2018014', 'DKT21'),
('DU2018057', 'U2018015', 'DKT06'),
('DU2018058', 'U2018015', 'DKT12'),
('DU2018059', 'U2018015', 'DKT16'),
('DU2018060', 'U2018015', 'DKT22'),
('DU2018061', 'U2018016', 'DKT06'),
('DU2018062', 'U2018016', 'DKT13'),
('DU2018063', 'U2018016', 'DKT16'),
('DU2018064', 'U2018016', 'DKT22'),
('DU2018065', 'U2018017', 'DKT10'),
('DU2018066', 'U2018017', 'DKT11'),
('DU2018067', 'U2018017', 'DKT16'),
('DU2018068', 'U2018017', 'DKT21'),
('DU2018077', 'U2018018', 'DKT02'),
('DU2018078', 'U2018018', 'DKT11'),
('DU2018079', 'U2018018', 'DKT16'),
('DU2018080', 'U2018018', 'DKT21'),
('DU2018081', 'U2018019', 'DKT02'),
('DU2018082', 'U2018019', 'DKT11'),
('DU2018083', 'U2018019', 'DKT16'),
('DU2018084', 'U2018019', 'DKT21'),
('DU2018085', 'U2018020', 'DKT02'),
('DU2018086', 'U2018020', 'DKT11'),
('DU2018087', 'U2018020', 'DKT16'),
('DU2018088', 'U2018020', 'DKT21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_usulan`
--

CREATE TABLE `t_usulan` (
  `id_usulan` char(8) NOT NULL,
  `nama_usulan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nilai_vektor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_usulan`
--

INSERT INTO `t_usulan` (`id_usulan`, `nama_usulan`, `tanggal`, `lokasi`, `periode`, `nilai_vektor`) VALUES
('U2018001', 'rehab jalan desa rw 09', '2018-09-18', 'Dusun 2', '2018/2019', 10.5),
('U2018002', 'pembangunan rabat jalan desa (mekarwangi) RW 07', '2018-09-18', 'Dusun 3', '2018/2019', 9.76),
('U2018003', 'rabat jalan desa rw 08', '2018-09-18', 'Dusun 3', '2018/2019', 9.76),
('U2018004', 'rabat jalan desa rw 06', '2018-09-18', 'Dusun 3', '2018/2019', 9.88),
('U2018005', 'pembangunan rabat jalan RW 07', '2018-09-18', 'Dusun 3', '2018/2019', 10.06),
('U2018006', 'TPT 03', '2018-09-18', 'Dusun 1', '2018/2019', 8.21),
('U2018007', 'TPT rw 01', '2018-09-18', 'Dusun 3', '2018/2019', 9.58),
('U2018008', 'TPT rw 02', '2018-09-18', 'Dusun 2', '2018/2019', 8.09),
('U2018009', 'TPT rw 06', '2018-09-18', 'Dusun 3', '2018/2019', 9.7),
('U2018010', 'Pengadaan Sarana Air Bersih', '2018-09-18', 'Dusun 3', '2018/2019', 12.9),
('U2018011', 'Pembangunan Jembatan', '2018-09-18', 'Dusun 2', '2018/2019', 9.8),
('U2018012', 'Jalan Usaha Tani', '2018-09-18', 'Dusun 1', '2018/2019', 7.46),
('U2018013', 'Drainese jl desa rw 02', '2018-09-18', 'Dusun 1', '2018/2019', 9),
('U2018014', 'Jalan Lingkungan', '2018-09-18', 'Dusun 1 sd 3', '2018/2019', 10.6),
('U2018015', 'Pengaspalan', '2018-09-18', 'Dusun 3', '2018/2019', 8.7),
('U2018016', 'TPT Saluran Irigasi', '2018-09-18', 'Dusun 1', '2018/2019', 7.7),
('U2018017', 'Pemeliharaan Jalan', '2018-09-18', 'Desa', '2018/2019', 12.6),
('U2018018', 'Drainese rw 01', '2018-10-06', 'Dusun 1', '2018/2019', 9.04),
('U2018019', 'drainese rw 03', '2018-10-06', 'Dusun 1', '2018/2019', 9.04),
('U2018020', 'drainese rw 02/p.ondin', '2018-10-06', 'Dusun 1', '2018/2019', 9.04);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kd_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`kd_sub_kriteria`);

--
-- Indexes for table `t_dt_usulan`
--
ALTER TABLE `t_dt_usulan`
  ADD PRIMARY KEY (`id_dt_usulan`);

--
-- Indexes for table `t_usulan`
--
ALTER TABLE `t_usulan`
  ADD PRIMARY KEY (`id_usulan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
