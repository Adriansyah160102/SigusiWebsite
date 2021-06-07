-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2021 pada 13.29
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sigusi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` varchar(10) NOT NULL,
  `nama_guru` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `username`, `password`) VALUES
('G0001', 'Sarifal Kudsi S', 'G0001', 'guru'),
('G0002', 'Ari Kurniawan', 'ari1234', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
('K0001', 'VII A'),
('K0002', 'VII B'),
('K0003', 'VII C'),
('K0004', 'VIII A'),
('K0005', 'VIII B'),
('K0006', 'VIII C'),
('K0007', 'IX A'),
('K0008', 'IX B'),
('K0009', 'IX C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `tingkat` tinyint(4) NOT NULL,
  `kkm` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_mapel`, `tingkat`, `kkm`) VALUES
('M0001', 'Bahasa Indonesia', 1, 70),
('M0002', 'Bahasa Indonesia', 2, 75),
('M0003', 'Bahasa Indonesia', 3, 80),
('M0004', 'Matematika', 1, 70),
('M0005', 'Matematika', 2, 75),
('M0006', 'Matematika', 3, 80),
('M0007', 'IPA', 1, 70),
('M0008', 'IPA', 2, 75),
('M0009', 'IPA', 3, 80),
('M0010', 'Bahasa Inggris', 1, 70),
('M0011', 'Bahasa Inggris', 2, 75),
('M0012', 'Bahasa Inggris', 3, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` varchar(10) NOT NULL,
  `id_guru` varchar(10) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `id_guru`, `id_mapel`, `id_kelas`) VALUES
('P0001', 'G0001', 'M0002', 'K0003'),
('P0003', 'G0001', 'M0003', 'K0009'),
('P0004', 'G0002', 'M0007', 'K0003'),
('P0005', 'G0002', 'M0008', 'K0005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` varchar(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `semester` varchar(3) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kkm` varchar(3) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `nis`, `id_kelas`, `semester`, `id_mapel`, `tgl_penilaian`, `status`, `keterangan`, `kkm`, `nilai`) VALUES
('N0001', '12343', 'K0002', '1', 'M0001', '2021-06-03', 'uh1', 'hiragana', '80', '80'),
('N0002', '1234567', 'K0003', '1', 'M0001', '2021-06-03', 'uh1', 'hiragana', '75', '90'),
('N0003', 'U0001', 'K0001', '2', 'M0001', '2021-06-03', 'UAS', '-', '70', '85');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status_keluarga` varchar(20) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `jml_sdr` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `hobi` varchar(40) NOT NULL,
  `cita` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(40) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(40) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `no_telp_ortu` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `nik`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `status_keluarga`, `anak_ke`, `jml_sdr`, `agama`, `hobi`, `cita`, `alamat`, `id_kelas`, `tahun_ajaran`, `no_telp`, `nama_ayah`, `nik_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `nama_ibu`, `nik_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `alamat_ortu`, `no_telp_ortu`, `username`, `password`) VALUES
('U0001', 'David Irsyadus', '3147141901010001', 'jombang', '2001-01-19', 'Laki-laki', 'anak kandung', '1', '2', 'islam', 'scroll sosmed', 'kaya', 'Mojokrapak-Tembelang-Jombang', 'K0001', '2020/2021', '082332818539', 'minto', '3147141502730001', 'sma', 'pedagang', 'lika', '3147144802770002', 'sma', 'ibu rumah tangga', 'Mojokrapak-Tembelang-Jombang', '089746736483', 'david', 'siswa'),
('U0002', 'Dimas Dwi Putra', '3121741204010001', 'Tulungagung', '2001-04-12', 'Laki-laki', 'anak kandung', '2', '3', 'islam', 'futsal', 'hacker', 'tulungagung', 'K0005', '2020/2021', '082536478263', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'dimas', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tata_usaha`
--

CREATE TABLE `tata_usaha` (
  `id_tatausaha` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tata_usaha`
--

INSERT INTO `tata_usaha` (`id_tatausaha`, `nama`, `jabatan`, `username`, `password`) VALUES
('A0001 ', 'Dimas Dwi ', 'Ketua', 'admin', 'admin'),
('A0002 ', 'Adrian Bagus ', 'bendahara', 'adrian ', 'admin'),
('A0003 ', 'sarifal kudsi', 'karyawan', 'sarifal', 'admin'),
('A0004 ', 'david irsyadus', 'karyawan', 'david', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`),
  ADD UNIQUE KEY `id_guru` (`id_guru`,`id_mapel`,`id_kelas`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD UNIQUE KEY `nis` (`nis`,`id_kelas`,`id_mapel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tata_usaha`
--
ALTER TABLE `tata_usaha`
  ADD PRIMARY KEY (`id_tatausaha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
