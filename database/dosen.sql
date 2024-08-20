-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2024 pada 18.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsitektur`
--

CREATE TABLE `arsitektur` (
  `arsitektur_id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_rumah` varchar(15) DEFAULT NULL,
  `asal_sd` varchar(100) DEFAULT NULL,
  `tanggal_sd` date DEFAULT NULL,
  `noijasah_sd` varchar(50) DEFAULT NULL,
  `asal_sltp` varchar(100) DEFAULT NULL,
  `tanggal_sltp` date DEFAULT NULL,
  `noijasah_sltp` varchar(50) DEFAULT NULL,
  `asal_slta` varchar(100) DEFAULT NULL,
  `tanggal_slta` date DEFAULT NULL,
  `noijasah_slta` varchar(50) DEFAULT NULL,
  `kualifikasi_d3` varchar(100) DEFAULT NULL,
  `universitas_d3` varchar(100) DEFAULT NULL,
  `tanggal_d3` date DEFAULT NULL,
  `noijasah_d3` varchar(50) DEFAULT NULL,
  `gelar_d3` varchar(20) DEFAULT NULL,
  `kualifikasi_s1` varchar(100) DEFAULT NULL,
  `universitas_s1` varchar(100) DEFAULT NULL,
  `tanggal_s1` date DEFAULT NULL,
  `noijasah_s1` varchar(50) DEFAULT NULL,
  `gelar_s1` varchar(20) DEFAULT NULL,
  `kualifikasi_s2` varchar(100) DEFAULT NULL,
  `universitas_s2` varchar(100) DEFAULT NULL,
  `tanggal_s2` date DEFAULT NULL,
  `noijasah_s2` varchar(50) DEFAULT NULL,
  `gelar_s2` varchar(20) DEFAULT NULL,
  `kualifikasi_s3` varchar(100) DEFAULT NULL,
  `universitas_s3` varchar(100) DEFAULT NULL,
  `tanggal_s3` date DEFAULT NULL,
  `noijasah_s3` varchar(50) DEFAULT NULL,
  `gelar_s3` varchar(20) DEFAULT NULL,
  `sertifikat_formal` text DEFAULT NULL,
  `sertifikat_nonformal` text DEFAULT NULL,
  `sk_cpns` varchar(100) DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `pejabat_cpns` varchar(100) DEFAULT NULL,
  `spmt_cpns` varchar(100) DEFAULT NULL,
  `tglspmt_cpns` date DEFAULT NULL,
  `sttpl_cpns` varchar(100) DEFAULT NULL,
  `tglsttpl_cpns` date DEFAULT NULL,
  `sk_pns` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `pejabat_pns` varchar(100) DEFAULT NULL,
  `karis_pns` varchar(100) DEFAULT NULL,
  `taspen_pns` varchar(100) DEFAULT NULL,
  `karpeg_pns` varchar(100) DEFAULT NULL,
  `sk_dostap` varchar(100) DEFAULT NULL,
  `tmt_dostap` date DEFAULT NULL,
  `pejabat_dostap` varchar(100) DEFAULT NULL,
  `sk_dostrak` varchar(100) DEFAULT NULL,
  `tmt_dostrak` date DEFAULT NULL,
  `pejabat_dostrak` varchar(100) DEFAULT NULL,
  `sk_petap` varchar(100) DEFAULT NULL,
  `tmt_petap` date DEFAULT NULL,
  `pejabat_petap` varchar(100) DEFAULT NULL,
  `sk_petrak` varchar(100) DEFAULT NULL,
  `tmt_petrak` date DEFAULT NULL,
  `pejabat_petrak` varchar(100) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `total_ak1` int(11) DEFAULT NULL,
  `tmt1` date DEFAULT NULL,
  `no_sk1` varchar(100) DEFAULT NULL,
  `total_ak2` int(11) DEFAULT NULL,
  `tmt2` date DEFAULT NULL,
  `no_sk2` varchar(100) DEFAULT NULL,
  `total_ak3` int(11) DEFAULT NULL,
  `tmt3` date DEFAULT NULL,
  `no_sk3` varchar(100) DEFAULT NULL,
  `total_ak4` int(11) DEFAULT NULL,
  `tmt4` date DEFAULT NULL,
  `no_sk4` varchar(100) DEFAULT NULL,
  `total_ak5` int(11) DEFAULT NULL,
  `tmt5` date DEFAULT NULL,
  `no_sk5` varchar(100) DEFAULT NULL,
  `total_ak6` int(11) DEFAULT NULL,
  `tmt6` date DEFAULT NULL,
  `no_sk6` varchar(100) DEFAULT NULL,
  `tmt7` date DEFAULT NULL,
  `no_sk7` varchar(100) DEFAULT NULL,
  `tgl_sk7` date DEFAULT NULL,
  `bkn_sk7` varchar(100) DEFAULT NULL,
  `tglbkn_sk7` date DEFAULT NULL,
  `jenis_pangkat7` varchar(50) DEFAULT NULL,
  `tmt8` date DEFAULT NULL,
  `no_sk8` varchar(100) DEFAULT NULL,
  `tgl_sk8` date DEFAULT NULL,
  `bkn_sk8` varchar(100) DEFAULT NULL,
  `tglbkn_sk8` date DEFAULT NULL,
  `jenis_pangkat8` varchar(50) DEFAULT NULL,
  `tmt9` date DEFAULT NULL,
  `no_sk9` varchar(100) DEFAULT NULL,
  `tgl_sk9` date DEFAULT NULL,
  `bkn_sk9` varchar(100) DEFAULT NULL,
  `tglbkn_sk9` date DEFAULT NULL,
  `jenis_pangkat9` varchar(50) DEFAULT NULL,
  `tmt10` date DEFAULT NULL,
  `no_sk10` varchar(100) DEFAULT NULL,
  `tgl_sk10` date DEFAULT NULL,
  `bkn_sk10` varchar(100) DEFAULT NULL,
  `tglbkn_sk10` date DEFAULT NULL,
  `jenis_pangkat10` varchar(50) DEFAULT NULL,
  `tmt11` date DEFAULT NULL,
  `no_sk11` varchar(100) DEFAULT NULL,
  `tgl_sk11` date DEFAULT NULL,
  `bkn_sk11` varchar(100) DEFAULT NULL,
  `tglbkn_sk11` date DEFAULT NULL,
  `jenis_pangkat11` varchar(50) DEFAULT NULL,
  `tmt12` date DEFAULT NULL,
  `no_sk12` varchar(100) DEFAULT NULL,
  `tgl_sk12` date DEFAULT NULL,
  `bkn_sk12` varchar(100) DEFAULT NULL,
  `tglbkn_sk12` date DEFAULT NULL,
  `jenis_pangkat12` varchar(50) DEFAULT NULL,
  `status_kawin` enum('Kawin','Belum Kawin','Duda','Janda') DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nama_pasangan` varchar(100) DEFAULT NULL,
  `nama_anak` text DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `nama_kartu` varchar(100) DEFAULT NULL,
  `nomor_kartu` varchar(20) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `status_pegawai` enum('Tetap','Kontrak') DEFAULT NULL,
  `dosen_pns` tinyint(1) DEFAULT NULL,
  `dosen_tetap` tinyint(1) DEFAULT NULL,
  `dosen_kontrak` tinyint(1) DEFAULT NULL,
  `tendik_pns` tinyint(1) DEFAULT NULL,
  `tendik_tetap` tinyint(1) DEFAULT NULL,
  `tendik_kontrak` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `arsitektur`
--

INSERT INTO `arsitektur` (`arsitektur_id`, `foto`, `nomor`, `tanggal`, `nama`, `jenis_kelamin`, `tempat_lahir`, `agama`, `alamat`, `no_hp`, `no_rumah`, `asal_sd`, `tanggal_sd`, `noijasah_sd`, `asal_sltp`, `tanggal_sltp`, `noijasah_sltp`, `asal_slta`, `tanggal_slta`, `noijasah_slta`, `kualifikasi_d3`, `universitas_d3`, `tanggal_d3`, `noijasah_d3`, `gelar_d3`, `kualifikasi_s1`, `universitas_s1`, `tanggal_s1`, `noijasah_s1`, `gelar_s1`, `kualifikasi_s2`, `universitas_s2`, `tanggal_s2`, `noijasah_s2`, `gelar_s2`, `kualifikasi_s3`, `universitas_s3`, `tanggal_s3`, `noijasah_s3`, `gelar_s3`, `sertifikat_formal`, `sertifikat_nonformal`, `sk_cpns`, `tmt_cpns`, `pejabat_cpns`, `spmt_cpns`, `tglspmt_cpns`, `sttpl_cpns`, `tglsttpl_cpns`, `sk_pns`, `tmt_pns`, `pejabat_pns`, `karis_pns`, `taspen_pns`, `karpeg_pns`, `sk_dostap`, `tmt_dostap`, `pejabat_dostap`, `sk_dostrak`, `tmt_dostrak`, `pejabat_dostrak`, `sk_petap`, `tmt_petap`, `pejabat_petap`, `sk_petrak`, `tmt_petrak`, `pejabat_petrak`, `nip`, `nidn`, `nik`, `total_ak1`, `tmt1`, `no_sk1`, `total_ak2`, `tmt2`, `no_sk2`, `total_ak3`, `tmt3`, `no_sk3`, `total_ak4`, `tmt4`, `no_sk4`, `total_ak5`, `tmt5`, `no_sk5`, `total_ak6`, `tmt6`, `no_sk6`, `tmt7`, `no_sk7`, `tgl_sk7`, `bkn_sk7`, `tglbkn_sk7`, `jenis_pangkat7`, `tmt8`, `no_sk8`, `tgl_sk8`, `bkn_sk8`, `tglbkn_sk8`, `jenis_pangkat8`, `tmt9`, `no_sk9`, `tgl_sk9`, `bkn_sk9`, `tglbkn_sk9`, `jenis_pangkat9`, `tmt10`, `no_sk10`, `tgl_sk10`, `bkn_sk10`, `tglbkn_sk10`, `jenis_pangkat10`, `tmt11`, `no_sk11`, `tgl_sk11`, `bkn_sk11`, `tglbkn_sk11`, `jenis_pangkat11`, `tmt12`, `no_sk12`, `tgl_sk12`, `bkn_sk12`, `tglbkn_sk12`, `jenis_pangkat12`, `status_kawin`, `nama_ayah`, `nama_ibu`, `nama_pasangan`, `nama_anak`, `npwp`, `nomor_rekening`, `nama_kartu`, `nomor_kartu`, `gol_darah`, `status_pegawai`, `dosen_pns`, `dosen_tetap`, `dosen_kontrak`, `tendik_pns`, `tendik_tetap`, `tendik_kontrak`, `created_at`, `updated_at`) VALUES
(10, NULL, 'Arsitekrur', '2024-09-07', 'Arsitek', 'Laki-laki', 'Jakarta', '', 'sadsa', '55555', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', 'Kawin', '', '', '', '', '', '', '', '', 'O', 'Tetap', 1, 1, 1, 1, 1, 1, '2024-08-05 16:42:43', '2024-08-05 16:42:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `dosen_id` int(11) NOT NULL,
  `nidn` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `tmt` varchar(255) DEFAULT NULL,
  `no_sk` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `dok_pak` tinyint(1) DEFAULT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `profesi` tinyint(1) DEFAULT NULL,
  `status_pegawai` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`dosen_id`, `nidn`, `nama`, `jenis_kelamin`, `id_jurusan`, `id_jabatan`, `tmt`, `no_sk`, `tahun`, `dok_pak`, `id_pendidikan`, `status`, `profesi`, `status_pegawai`, `created_at`) VALUES
(2, '132', 'Eaque dolores laboru', 'perempuan', 2, 2, 'TEST-TMT', 'Adipisicing exercita', 2024, 1, 2, 'aktif', 1, 'non_asn', '2024-07-18 03:58:15'),
(5, '11111122', 'Rais', 'laki', 3, 1, '12312', '12312', 2024, 1, 1, 'aktif', 1, 'pns', '2024-08-05 04:29:41'),
(6, '111', 'Umum', 'laki', 3, 1, '3 Januari 2024', '123123', 2024, 1, 2, 'tugas_belajar', 1, 'pppk', '2024-08-05 12:51:22'),
(7, '222', 'aa', 'laki', 1, 2, '3 Januari 2025', '111', 2024, 1, 1, 'tugas_belajar', 1, 'pns', '2024-08-05 12:54:20'),
(8, '333', 'Pcs', 'perempuan', 2, 1, '12312', '111', 2024, 1, 1, 'aktif', 1, 'pns', '2024-08-05 13:01:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `nama`, `created_at`) VALUES
(1, 'Lektor, III/d', '2024-07-17 15:26:08'),
(2, 'Ahli Pertama - Pranata Laboratorium Pendidikan', '2024-07-17 15:26:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`jurusan_id`, `nama`, `created_at`) VALUES
(1, 'Teknik Elektro', '2024-07-17 15:25:18'),
(2, 'Sistem Informasi', '2024-08-05 12:33:17'),
(3, 'Teknik Mesin', '2024-08-05 12:33:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`pendidikan_id`, `nama`, `created_at`) VALUES
(1, 'S2', '2024-07-17 15:25:01'),
(2, 'S2- Teknik Elektro 2009', '2024-07-17 15:25:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penempatan`
--

CREATE TABLE `penempatan` (
  `penempatan_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penempatan`
--

INSERT INTO `penempatan` (`penempatan_id`, `nama`, `created_at`) VALUES
(1, 'Lab. Teknik Elektro', '2024-07-17 14:47:02'),
(4, 'Lab. Teknik Sipil', '2024-08-05 16:43:21'),
(5, 'Jur. Teknik Mesin', '2024-08-05 16:43:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pppk`
--

CREATE TABLE `pppk` (
  `pppk_id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `tmt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_pegawai` varchar(255) NOT NULL,
  `tmt_pppk` varchar(255) NOT NULL,
  `id_jabatan_pppk` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pppk`
--

INSERT INTO `pppk` (`pppk_id`, `id_dosen`, `id_jurusan`, `id_jabatan`, `tmt`, `status`, `status_pegawai`, `tmt_pppk`, `id_jabatan_pppk`, `keterangan`) VALUES
(2, 5, 1, 2, '3 Januari 2024', 'aktif', 'pns', '3 Januari 2025', 1, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sistem_informasi`
--

CREATE TABLE `sistem_informasi` (
  `sisteminformasi_id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_rumah` varchar(15) DEFAULT NULL,
  `asal_sd` varchar(100) DEFAULT NULL,
  `tanggal_sd` date DEFAULT NULL,
  `noijasah_sd` varchar(50) DEFAULT NULL,
  `asal_sltp` varchar(100) DEFAULT NULL,
  `tanggal_sltp` date DEFAULT NULL,
  `noijasah_sltp` varchar(50) DEFAULT NULL,
  `asal_slta` varchar(100) DEFAULT NULL,
  `tanggal_slta` date DEFAULT NULL,
  `noijasah_slta` varchar(50) DEFAULT NULL,
  `kualifikasi_d3` varchar(100) DEFAULT NULL,
  `universitas_d3` varchar(100) DEFAULT NULL,
  `tanggal_d3` date DEFAULT NULL,
  `noijasah_d3` varchar(50) DEFAULT NULL,
  `gelar_d3` varchar(20) DEFAULT NULL,
  `kualifikasi_s1` varchar(100) DEFAULT NULL,
  `universitas_s1` varchar(100) DEFAULT NULL,
  `tanggal_s1` date DEFAULT NULL,
  `noijasah_s1` varchar(50) DEFAULT NULL,
  `gelar_s1` varchar(20) DEFAULT NULL,
  `kualifikasi_s2` varchar(100) DEFAULT NULL,
  `universitas_s2` varchar(100) DEFAULT NULL,
  `tanggal_s2` date DEFAULT NULL,
  `noijasah_s2` varchar(50) DEFAULT NULL,
  `gelar_s2` varchar(20) DEFAULT NULL,
  `kualifikasi_s3` varchar(100) DEFAULT NULL,
  `universitas_s3` varchar(100) DEFAULT NULL,
  `tanggal_s3` date DEFAULT NULL,
  `noijasah_s3` varchar(50) DEFAULT NULL,
  `gelar_s3` varchar(20) DEFAULT NULL,
  `sertifikat_formal` text DEFAULT NULL,
  `sertifikat_nonformal` text DEFAULT NULL,
  `sk_cpns` varchar(100) DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `pejabat_cpns` varchar(100) DEFAULT NULL,
  `spmt_cpns` varchar(100) DEFAULT NULL,
  `tglspmt_cpns` date DEFAULT NULL,
  `sttpl_cpns` varchar(100) DEFAULT NULL,
  `tglsttpl_cpns` date DEFAULT NULL,
  `sk_pns` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `pejabat_pns` varchar(100) DEFAULT NULL,
  `karis_pns` varchar(100) DEFAULT NULL,
  `taspen_pns` varchar(100) DEFAULT NULL,
  `karpeg_pns` varchar(100) DEFAULT NULL,
  `sk_dostap` varchar(100) DEFAULT NULL,
  `tmt_dostap` date DEFAULT NULL,
  `pejabat_dostap` varchar(100) DEFAULT NULL,
  `sk_dostrak` varchar(100) DEFAULT NULL,
  `tmt_dostrak` date DEFAULT NULL,
  `pejabat_dostrak` varchar(100) DEFAULT NULL,
  `sk_petap` varchar(100) DEFAULT NULL,
  `tmt_petap` date DEFAULT NULL,
  `pejabat_petap` varchar(100) DEFAULT NULL,
  `sk_petrak` varchar(100) DEFAULT NULL,
  `tmt_petrak` date DEFAULT NULL,
  `pejabat_petrak` varchar(100) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `total_ak1` int(11) DEFAULT NULL,
  `tmt1` date DEFAULT NULL,
  `no_sk1` varchar(100) DEFAULT NULL,
  `total_ak2` int(11) DEFAULT NULL,
  `tmt2` date DEFAULT NULL,
  `no_sk2` varchar(100) DEFAULT NULL,
  `total_ak3` int(11) DEFAULT NULL,
  `tmt3` date DEFAULT NULL,
  `no_sk3` varchar(100) DEFAULT NULL,
  `total_ak4` int(11) DEFAULT NULL,
  `tmt4` date DEFAULT NULL,
  `no_sk4` varchar(100) DEFAULT NULL,
  `total_ak5` int(11) DEFAULT NULL,
  `tmt5` date DEFAULT NULL,
  `no_sk5` varchar(100) DEFAULT NULL,
  `total_ak6` int(11) DEFAULT NULL,
  `tmt6` date DEFAULT NULL,
  `no_sk6` varchar(100) DEFAULT NULL,
  `tmt7` date DEFAULT NULL,
  `no_sk7` varchar(100) DEFAULT NULL,
  `tgl_sk7` date DEFAULT NULL,
  `bkn_sk7` varchar(100) DEFAULT NULL,
  `tglbkn_sk7` date DEFAULT NULL,
  `jenis_pangkat7` varchar(50) DEFAULT NULL,
  `tmt8` date DEFAULT NULL,
  `no_sk8` varchar(100) DEFAULT NULL,
  `tgl_sk8` date DEFAULT NULL,
  `bkn_sk8` varchar(100) DEFAULT NULL,
  `tglbkn_sk8` date DEFAULT NULL,
  `jenis_pangkat8` varchar(50) DEFAULT NULL,
  `tmt9` date DEFAULT NULL,
  `no_sk9` varchar(100) DEFAULT NULL,
  `tgl_sk9` date DEFAULT NULL,
  `bkn_sk9` varchar(100) DEFAULT NULL,
  `tglbkn_sk9` date DEFAULT NULL,
  `jenis_pangkat9` varchar(50) DEFAULT NULL,
  `tmt10` date DEFAULT NULL,
  `no_sk10` varchar(100) DEFAULT NULL,
  `tgl_sk10` date DEFAULT NULL,
  `bkn_sk10` varchar(100) DEFAULT NULL,
  `tglbkn_sk10` date DEFAULT NULL,
  `jenis_pangkat10` varchar(50) DEFAULT NULL,
  `tmt11` date DEFAULT NULL,
  `no_sk11` varchar(100) DEFAULT NULL,
  `tgl_sk11` date DEFAULT NULL,
  `bkn_sk11` varchar(100) DEFAULT NULL,
  `tglbkn_sk11` date DEFAULT NULL,
  `jenis_pangkat11` varchar(50) DEFAULT NULL,
  `tmt12` date DEFAULT NULL,
  `no_sk12` varchar(100) DEFAULT NULL,
  `tgl_sk12` date DEFAULT NULL,
  `bkn_sk12` varchar(100) DEFAULT NULL,
  `tglbkn_sk12` date DEFAULT NULL,
  `jenis_pangkat12` varchar(50) DEFAULT NULL,
  `status_kawin` enum('Kawin','Belum Kawin','Duda','Janda') DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nama_pasangan` varchar(100) DEFAULT NULL,
  `nama_anak` text DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `nama_kartu` varchar(100) DEFAULT NULL,
  `nomor_kartu` varchar(20) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `status_pegawai` enum('Tetap','Kontrak') DEFAULT NULL,
  `dosen_pns` tinyint(1) DEFAULT NULL,
  `dosen_tetap` tinyint(1) DEFAULT NULL,
  `dosen_kontrak` tinyint(1) DEFAULT NULL,
  `tendik_pns` tinyint(1) DEFAULT NULL,
  `tendik_tetap` tinyint(1) DEFAULT NULL,
  `tendik_kontrak` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sistem_informasi`
--

INSERT INTO `sistem_informasi` (`sisteminformasi_id`, `foto`, `nomor`, `tanggal`, `nama`, `jenis_kelamin`, `tempat_lahir`, `agama`, `alamat`, `no_hp`, `no_rumah`, `asal_sd`, `tanggal_sd`, `noijasah_sd`, `asal_sltp`, `tanggal_sltp`, `noijasah_sltp`, `asal_slta`, `tanggal_slta`, `noijasah_slta`, `kualifikasi_d3`, `universitas_d3`, `tanggal_d3`, `noijasah_d3`, `gelar_d3`, `kualifikasi_s1`, `universitas_s1`, `tanggal_s1`, `noijasah_s1`, `gelar_s1`, `kualifikasi_s2`, `universitas_s2`, `tanggal_s2`, `noijasah_s2`, `gelar_s2`, `kualifikasi_s3`, `universitas_s3`, `tanggal_s3`, `noijasah_s3`, `gelar_s3`, `sertifikat_formal`, `sertifikat_nonformal`, `sk_cpns`, `tmt_cpns`, `pejabat_cpns`, `spmt_cpns`, `tglspmt_cpns`, `sttpl_cpns`, `tglsttpl_cpns`, `sk_pns`, `tmt_pns`, `pejabat_pns`, `karis_pns`, `taspen_pns`, `karpeg_pns`, `sk_dostap`, `tmt_dostap`, `pejabat_dostap`, `sk_dostrak`, `tmt_dostrak`, `pejabat_dostrak`, `sk_petap`, `tmt_petap`, `pejabat_petap`, `sk_petrak`, `tmt_petrak`, `pejabat_petrak`, `nip`, `nidn`, `nik`, `total_ak1`, `tmt1`, `no_sk1`, `total_ak2`, `tmt2`, `no_sk2`, `total_ak3`, `tmt3`, `no_sk3`, `total_ak4`, `tmt4`, `no_sk4`, `total_ak5`, `tmt5`, `no_sk5`, `total_ak6`, `tmt6`, `no_sk6`, `tmt7`, `no_sk7`, `tgl_sk7`, `bkn_sk7`, `tglbkn_sk7`, `jenis_pangkat7`, `tmt8`, `no_sk8`, `tgl_sk8`, `bkn_sk8`, `tglbkn_sk8`, `jenis_pangkat8`, `tmt9`, `no_sk9`, `tgl_sk9`, `bkn_sk9`, `tglbkn_sk9`, `jenis_pangkat9`, `tmt10`, `no_sk10`, `tgl_sk10`, `bkn_sk10`, `tglbkn_sk10`, `jenis_pangkat10`, `tmt11`, `no_sk11`, `tgl_sk11`, `bkn_sk11`, `tglbkn_sk11`, `jenis_pangkat11`, `tmt12`, `no_sk12`, `tgl_sk12`, `bkn_sk12`, `tglbkn_sk12`, `jenis_pangkat12`, `status_kawin`, `nama_ayah`, `nama_ibu`, `nama_pasangan`, `nama_anak`, `npwp`, `nomor_rekening`, `nama_kartu`, `nomor_kartu`, `gol_darah`, `status_pegawai`, `dosen_pns`, `dosen_tetap`, `dosen_kontrak`, `tendik_pns`, `tendik_tetap`, `tendik_kontrak`, `created_at`, `updated_at`) VALUES
(9, NULL, 'sistem', '2024-08-11', 'sistem informasi', 'Laki-laki', '', '', 'dasdas', '12312321', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', 'Kawin', '', '', '', '', '', '', '', '', 'O', 'Tetap', 1, 1, 1, 1, 1, 1, '2024-08-05 16:39:44', '2024-08-05 16:39:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknik_elektro`
--

CREATE TABLE `teknik_elektro` (
  `teknikelektro_id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_rumah` varchar(15) DEFAULT NULL,
  `asal_sd` varchar(100) DEFAULT NULL,
  `tanggal_sd` date DEFAULT NULL,
  `noijasah_sd` varchar(50) DEFAULT NULL,
  `asal_sltp` varchar(100) DEFAULT NULL,
  `tanggal_sltp` date DEFAULT NULL,
  `noijasah_sltp` varchar(50) DEFAULT NULL,
  `asal_slta` varchar(100) DEFAULT NULL,
  `tanggal_slta` date DEFAULT NULL,
  `noijasah_slta` varchar(50) DEFAULT NULL,
  `kualifikasi_d3` varchar(100) DEFAULT NULL,
  `universitas_d3` varchar(100) DEFAULT NULL,
  `tanggal_d3` date DEFAULT NULL,
  `noijasah_d3` varchar(50) DEFAULT NULL,
  `gelar_d3` varchar(20) DEFAULT NULL,
  `kualifikasi_s1` varchar(100) DEFAULT NULL,
  `universitas_s1` varchar(100) DEFAULT NULL,
  `tanggal_s1` date DEFAULT NULL,
  `noijasah_s1` varchar(50) DEFAULT NULL,
  `gelar_s1` varchar(20) DEFAULT NULL,
  `kualifikasi_s2` varchar(100) DEFAULT NULL,
  `universitas_s2` varchar(100) DEFAULT NULL,
  `tanggal_s2` date DEFAULT NULL,
  `noijasah_s2` varchar(50) DEFAULT NULL,
  `gelar_s2` varchar(20) DEFAULT NULL,
  `kualifikasi_s3` varchar(100) DEFAULT NULL,
  `universitas_s3` varchar(100) DEFAULT NULL,
  `tanggal_s3` date DEFAULT NULL,
  `noijasah_s3` varchar(50) DEFAULT NULL,
  `gelar_s3` varchar(20) DEFAULT NULL,
  `sertifikat_formal` text DEFAULT NULL,
  `sertifikat_nonformal` text DEFAULT NULL,
  `sk_cpns` varchar(100) DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `pejabat_cpns` varchar(100) DEFAULT NULL,
  `spmt_cpns` varchar(100) DEFAULT NULL,
  `tglspmt_cpns` date DEFAULT NULL,
  `sttpl_cpns` varchar(100) DEFAULT NULL,
  `tglsttpl_cpns` date DEFAULT NULL,
  `sk_pns` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `pejabat_pns` varchar(100) DEFAULT NULL,
  `karis_pns` varchar(100) DEFAULT NULL,
  `taspen_pns` varchar(100) DEFAULT NULL,
  `karpeg_pns` varchar(100) DEFAULT NULL,
  `sk_dostap` varchar(100) DEFAULT NULL,
  `tmt_dostap` date DEFAULT NULL,
  `pejabat_dostap` varchar(100) DEFAULT NULL,
  `sk_dostrak` varchar(100) DEFAULT NULL,
  `tmt_dostrak` date DEFAULT NULL,
  `pejabat_dostrak` varchar(100) DEFAULT NULL,
  `sk_petap` varchar(100) DEFAULT NULL,
  `tmt_petap` date DEFAULT NULL,
  `pejabat_petap` varchar(100) DEFAULT NULL,
  `sk_petrak` varchar(100) DEFAULT NULL,
  `tmt_petrak` date DEFAULT NULL,
  `pejabat_petrak` varchar(100) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `total_ak1` int(11) DEFAULT NULL,
  `tmt1` date DEFAULT NULL,
  `no_sk1` varchar(100) DEFAULT NULL,
  `total_ak2` int(11) DEFAULT NULL,
  `tmt2` date DEFAULT NULL,
  `no_sk2` varchar(100) DEFAULT NULL,
  `total_ak3` int(11) DEFAULT NULL,
  `tmt3` date DEFAULT NULL,
  `no_sk3` varchar(100) DEFAULT NULL,
  `total_ak4` int(11) DEFAULT NULL,
  `tmt4` date DEFAULT NULL,
  `no_sk4` varchar(100) DEFAULT NULL,
  `total_ak5` int(11) DEFAULT NULL,
  `tmt5` date DEFAULT NULL,
  `no_sk5` varchar(100) DEFAULT NULL,
  `total_ak6` int(11) DEFAULT NULL,
  `tmt6` date DEFAULT NULL,
  `no_sk6` varchar(100) DEFAULT NULL,
  `tmt7` date DEFAULT NULL,
  `no_sk7` varchar(100) DEFAULT NULL,
  `tgl_sk7` date DEFAULT NULL,
  `bkn_sk7` varchar(100) DEFAULT NULL,
  `tglbkn_sk7` date DEFAULT NULL,
  `jenis_pangkat7` varchar(50) DEFAULT NULL,
  `tmt8` date DEFAULT NULL,
  `no_sk8` varchar(100) DEFAULT NULL,
  `tgl_sk8` date DEFAULT NULL,
  `bkn_sk8` varchar(100) DEFAULT NULL,
  `tglbkn_sk8` date DEFAULT NULL,
  `jenis_pangkat8` varchar(50) DEFAULT NULL,
  `tmt9` date DEFAULT NULL,
  `no_sk9` varchar(100) DEFAULT NULL,
  `tgl_sk9` date DEFAULT NULL,
  `bkn_sk9` varchar(100) DEFAULT NULL,
  `tglbkn_sk9` date DEFAULT NULL,
  `jenis_pangkat9` varchar(50) DEFAULT NULL,
  `tmt10` date DEFAULT NULL,
  `no_sk10` varchar(100) DEFAULT NULL,
  `tgl_sk10` date DEFAULT NULL,
  `bkn_sk10` varchar(100) DEFAULT NULL,
  `tglbkn_sk10` date DEFAULT NULL,
  `jenis_pangkat10` varchar(50) DEFAULT NULL,
  `tmt11` date DEFAULT NULL,
  `no_sk11` varchar(100) DEFAULT NULL,
  `tgl_sk11` date DEFAULT NULL,
  `bkn_sk11` varchar(100) DEFAULT NULL,
  `tglbkn_sk11` date DEFAULT NULL,
  `jenis_pangkat11` varchar(50) DEFAULT NULL,
  `tmt12` date DEFAULT NULL,
  `no_sk12` varchar(100) DEFAULT NULL,
  `tgl_sk12` date DEFAULT NULL,
  `bkn_sk12` varchar(100) DEFAULT NULL,
  `tglbkn_sk12` date DEFAULT NULL,
  `jenis_pangkat12` varchar(50) DEFAULT NULL,
  `status_kawin` enum('Kawin','Belum Kawin','Duda','Janda') DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nama_pasangan` varchar(100) DEFAULT NULL,
  `nama_anak` text DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `nama_kartu` varchar(100) DEFAULT NULL,
  `nomor_kartu` varchar(20) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `status_pegawai` enum('Tetap','Kontrak') DEFAULT NULL,
  `dosen_pns` tinyint(1) DEFAULT NULL,
  `dosen_tetap` tinyint(1) DEFAULT NULL,
  `dosen_kontrak` tinyint(1) DEFAULT NULL,
  `tendik_pns` tinyint(1) DEFAULT NULL,
  `tendik_tetap` tinyint(1) DEFAULT NULL,
  `tendik_kontrak` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `teknik_elektro`
--

INSERT INTO `teknik_elektro` (`teknikelektro_id`, `foto`, `nomor`, `tanggal`, `nama`, `jenis_kelamin`, `tempat_lahir`, `agama`, `alamat`, `no_hp`, `no_rumah`, `asal_sd`, `tanggal_sd`, `noijasah_sd`, `asal_sltp`, `tanggal_sltp`, `noijasah_sltp`, `asal_slta`, `tanggal_slta`, `noijasah_slta`, `kualifikasi_d3`, `universitas_d3`, `tanggal_d3`, `noijasah_d3`, `gelar_d3`, `kualifikasi_s1`, `universitas_s1`, `tanggal_s1`, `noijasah_s1`, `gelar_s1`, `kualifikasi_s2`, `universitas_s2`, `tanggal_s2`, `noijasah_s2`, `gelar_s2`, `kualifikasi_s3`, `universitas_s3`, `tanggal_s3`, `noijasah_s3`, `gelar_s3`, `sertifikat_formal`, `sertifikat_nonformal`, `sk_cpns`, `tmt_cpns`, `pejabat_cpns`, `spmt_cpns`, `tglspmt_cpns`, `sttpl_cpns`, `tglsttpl_cpns`, `sk_pns`, `tmt_pns`, `pejabat_pns`, `karis_pns`, `taspen_pns`, `karpeg_pns`, `sk_dostap`, `tmt_dostap`, `pejabat_dostap`, `sk_dostrak`, `tmt_dostrak`, `pejabat_dostrak`, `sk_petap`, `tmt_petap`, `pejabat_petap`, `sk_petrak`, `tmt_petrak`, `pejabat_petrak`, `nip`, `nidn`, `nik`, `total_ak1`, `tmt1`, `no_sk1`, `total_ak2`, `tmt2`, `no_sk2`, `total_ak3`, `tmt3`, `no_sk3`, `total_ak4`, `tmt4`, `no_sk4`, `total_ak5`, `tmt5`, `no_sk5`, `total_ak6`, `tmt6`, `no_sk6`, `tmt7`, `no_sk7`, `tgl_sk7`, `bkn_sk7`, `tglbkn_sk7`, `jenis_pangkat7`, `tmt8`, `no_sk8`, `tgl_sk8`, `bkn_sk8`, `tglbkn_sk8`, `jenis_pangkat8`, `tmt9`, `no_sk9`, `tgl_sk9`, `bkn_sk9`, `tglbkn_sk9`, `jenis_pangkat9`, `tmt10`, `no_sk10`, `tgl_sk10`, `bkn_sk10`, `tglbkn_sk10`, `jenis_pangkat10`, `tmt11`, `no_sk11`, `tgl_sk11`, `bkn_sk11`, `tglbkn_sk11`, `jenis_pangkat11`, `tmt12`, `no_sk12`, `tgl_sk12`, `bkn_sk12`, `tglbkn_sk12`, `jenis_pangkat12`, `status_kawin`, `nama_ayah`, `nama_ibu`, `nama_pasangan`, `nama_anak`, `npwp`, `nomor_rekening`, `nama_kartu`, `nomor_kartu`, `gol_darah`, `status_pegawai`, `dosen_pns`, `dosen_tetap`, `dosen_kontrak`, `tendik_pns`, `tendik_tetap`, `tendik_kontrak`, `created_at`, `updated_at`) VALUES
(8, NULL, '12/A/2025', '2024-08-29', 'Elektro', 'Laki-laki', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', 'Kawin', '', '', '', '', '', '', '', '', 'O', 'Tetap', 1, 1, 1, 1, 1, 1, '2024-08-05 16:35:41', '2024-08-05 16:35:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknik_informatika`
--

CREATE TABLE `teknik_informatika` (
  `teknikinformatika_id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_rumah` varchar(15) DEFAULT NULL,
  `asal_sd` varchar(100) DEFAULT NULL,
  `tanggal_sd` date DEFAULT NULL,
  `noijasah_sd` varchar(50) DEFAULT NULL,
  `asal_sltp` varchar(100) DEFAULT NULL,
  `tanggal_sltp` date DEFAULT NULL,
  `noijasah_sltp` varchar(50) DEFAULT NULL,
  `asal_slta` varchar(100) DEFAULT NULL,
  `tanggal_slta` date DEFAULT NULL,
  `noijasah_slta` varchar(50) DEFAULT NULL,
  `kualifikasi_d3` varchar(100) DEFAULT NULL,
  `universitas_d3` varchar(100) DEFAULT NULL,
  `tanggal_d3` date DEFAULT NULL,
  `noijasah_d3` varchar(50) DEFAULT NULL,
  `gelar_d3` varchar(20) DEFAULT NULL,
  `kualifikasi_s1` varchar(100) DEFAULT NULL,
  `universitas_s1` varchar(100) DEFAULT NULL,
  `tanggal_s1` date DEFAULT NULL,
  `noijasah_s1` varchar(50) DEFAULT NULL,
  `gelar_s1` varchar(20) DEFAULT NULL,
  `kualifikasi_s2` varchar(100) DEFAULT NULL,
  `universitas_s2` varchar(100) DEFAULT NULL,
  `tanggal_s2` date DEFAULT NULL,
  `noijasah_s2` varchar(50) DEFAULT NULL,
  `gelar_s2` varchar(20) DEFAULT NULL,
  `kualifikasi_s3` varchar(100) DEFAULT NULL,
  `universitas_s3` varchar(100) DEFAULT NULL,
  `tanggal_s3` date DEFAULT NULL,
  `noijasah_s3` varchar(50) DEFAULT NULL,
  `gelar_s3` varchar(20) DEFAULT NULL,
  `sertifikat_formal` text DEFAULT NULL,
  `sertifikat_nonformal` text DEFAULT NULL,
  `sk_cpns` varchar(100) DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `pejabat_cpns` varchar(100) DEFAULT NULL,
  `spmt_cpns` varchar(100) DEFAULT NULL,
  `tglspmt_cpns` date DEFAULT NULL,
  `sttpl_cpns` varchar(100) DEFAULT NULL,
  `tglsttpl_cpns` date DEFAULT NULL,
  `sk_pns` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `pejabat_pns` varchar(100) DEFAULT NULL,
  `karis_pns` varchar(100) DEFAULT NULL,
  `taspen_pns` varchar(100) DEFAULT NULL,
  `karpeg_pns` varchar(100) DEFAULT NULL,
  `sk_dostap` varchar(100) DEFAULT NULL,
  `tmt_dostap` date DEFAULT NULL,
  `pejabat_dostap` varchar(100) DEFAULT NULL,
  `sk_dostrak` varchar(100) DEFAULT NULL,
  `tmt_dostrak` date DEFAULT NULL,
  `pejabat_dostrak` varchar(100) DEFAULT NULL,
  `sk_petap` varchar(100) DEFAULT NULL,
  `tmt_petap` date DEFAULT NULL,
  `pejabat_petap` varchar(100) DEFAULT NULL,
  `sk_petrak` varchar(100) DEFAULT NULL,
  `tmt_petrak` date DEFAULT NULL,
  `pejabat_petrak` varchar(100) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `total_ak1` int(11) DEFAULT NULL,
  `tmt1` date DEFAULT NULL,
  `no_sk1` varchar(100) DEFAULT NULL,
  `total_ak2` int(11) DEFAULT NULL,
  `tmt2` date DEFAULT NULL,
  `no_sk2` varchar(100) DEFAULT NULL,
  `total_ak3` int(11) DEFAULT NULL,
  `tmt3` date DEFAULT NULL,
  `no_sk3` varchar(100) DEFAULT NULL,
  `total_ak4` int(11) DEFAULT NULL,
  `tmt4` date DEFAULT NULL,
  `no_sk4` varchar(100) DEFAULT NULL,
  `total_ak5` int(11) DEFAULT NULL,
  `tmt5` date DEFAULT NULL,
  `no_sk5` varchar(100) DEFAULT NULL,
  `total_ak6` int(11) DEFAULT NULL,
  `tmt6` date DEFAULT NULL,
  `no_sk6` varchar(100) DEFAULT NULL,
  `tmt7` date DEFAULT NULL,
  `no_sk7` varchar(100) DEFAULT NULL,
  `tgl_sk7` date DEFAULT NULL,
  `bkn_sk7` varchar(100) DEFAULT NULL,
  `tglbkn_sk7` date DEFAULT NULL,
  `jenis_pangkat7` varchar(50) DEFAULT NULL,
  `tmt8` date DEFAULT NULL,
  `no_sk8` varchar(100) DEFAULT NULL,
  `tgl_sk8` date DEFAULT NULL,
  `bkn_sk8` varchar(100) DEFAULT NULL,
  `tglbkn_sk8` date DEFAULT NULL,
  `jenis_pangkat8` varchar(50) DEFAULT NULL,
  `tmt9` date DEFAULT NULL,
  `no_sk9` varchar(100) DEFAULT NULL,
  `tgl_sk9` date DEFAULT NULL,
  `bkn_sk9` varchar(100) DEFAULT NULL,
  `tglbkn_sk9` date DEFAULT NULL,
  `jenis_pangkat9` varchar(50) DEFAULT NULL,
  `tmt10` date DEFAULT NULL,
  `no_sk10` varchar(100) DEFAULT NULL,
  `tgl_sk10` date DEFAULT NULL,
  `bkn_sk10` varchar(100) DEFAULT NULL,
  `tglbkn_sk10` date DEFAULT NULL,
  `jenis_pangkat10` varchar(50) DEFAULT NULL,
  `tmt11` date DEFAULT NULL,
  `no_sk11` varchar(100) DEFAULT NULL,
  `tgl_sk11` date DEFAULT NULL,
  `bkn_sk11` varchar(100) DEFAULT NULL,
  `tglbkn_sk11` date DEFAULT NULL,
  `jenis_pangkat11` varchar(50) DEFAULT NULL,
  `tmt12` date DEFAULT NULL,
  `no_sk12` varchar(100) DEFAULT NULL,
  `tgl_sk12` date DEFAULT NULL,
  `bkn_sk12` varchar(100) DEFAULT NULL,
  `tglbkn_sk12` date DEFAULT NULL,
  `jenis_pangkat12` varchar(50) DEFAULT NULL,
  `status_kawin` enum('Kawin','Belum Kawin','Duda','Janda') DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nama_pasangan` varchar(100) DEFAULT NULL,
  `nama_anak` text DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `nama_kartu` varchar(100) DEFAULT NULL,
  `nomor_kartu` varchar(20) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `status_pegawai` enum('Tetap','Kontrak') DEFAULT NULL,
  `dosen_pns` tinyint(1) DEFAULT NULL,
  `dosen_tetap` tinyint(1) DEFAULT NULL,
  `dosen_kontrak` tinyint(1) DEFAULT NULL,
  `tendik_pns` tinyint(1) DEFAULT NULL,
  `tendik_tetap` tinyint(1) DEFAULT NULL,
  `tendik_kontrak` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `teknik_informatika`
--

INSERT INTO `teknik_informatika` (`teknikinformatika_id`, `foto`, `nomor`, `tanggal`, `nama`, `jenis_kelamin`, `tempat_lahir`, `agama`, `alamat`, `no_hp`, `no_rumah`, `asal_sd`, `tanggal_sd`, `noijasah_sd`, `asal_sltp`, `tanggal_sltp`, `noijasah_sltp`, `asal_slta`, `tanggal_slta`, `noijasah_slta`, `kualifikasi_d3`, `universitas_d3`, `tanggal_d3`, `noijasah_d3`, `gelar_d3`, `kualifikasi_s1`, `universitas_s1`, `tanggal_s1`, `noijasah_s1`, `gelar_s1`, `kualifikasi_s2`, `universitas_s2`, `tanggal_s2`, `noijasah_s2`, `gelar_s2`, `kualifikasi_s3`, `universitas_s3`, `tanggal_s3`, `noijasah_s3`, `gelar_s3`, `sertifikat_formal`, `sertifikat_nonformal`, `sk_cpns`, `tmt_cpns`, `pejabat_cpns`, `spmt_cpns`, `tglspmt_cpns`, `sttpl_cpns`, `tglsttpl_cpns`, `sk_pns`, `tmt_pns`, `pejabat_pns`, `karis_pns`, `taspen_pns`, `karpeg_pns`, `sk_dostap`, `tmt_dostap`, `pejabat_dostap`, `sk_dostrak`, `tmt_dostrak`, `pejabat_dostrak`, `sk_petap`, `tmt_petap`, `pejabat_petap`, `sk_petrak`, `tmt_petrak`, `pejabat_petrak`, `nip`, `nidn`, `nik`, `total_ak1`, `tmt1`, `no_sk1`, `total_ak2`, `tmt2`, `no_sk2`, `total_ak3`, `tmt3`, `no_sk3`, `total_ak4`, `tmt4`, `no_sk4`, `total_ak5`, `tmt5`, `no_sk5`, `total_ak6`, `tmt6`, `no_sk6`, `tmt7`, `no_sk7`, `tgl_sk7`, `bkn_sk7`, `tglbkn_sk7`, `jenis_pangkat7`, `tmt8`, `no_sk8`, `tgl_sk8`, `bkn_sk8`, `tglbkn_sk8`, `jenis_pangkat8`, `tmt9`, `no_sk9`, `tgl_sk9`, `bkn_sk9`, `tglbkn_sk9`, `jenis_pangkat9`, `tmt10`, `no_sk10`, `tgl_sk10`, `bkn_sk10`, `tglbkn_sk10`, `jenis_pangkat10`, `tmt11`, `no_sk11`, `tgl_sk11`, `bkn_sk11`, `tglbkn_sk11`, `jenis_pangkat11`, `tmt12`, `no_sk12`, `tgl_sk12`, `bkn_sk12`, `tglbkn_sk12`, `jenis_pangkat12`, `status_kawin`, `nama_ayah`, `nama_ibu`, `nama_pasangan`, `nama_anak`, `npwp`, `nomor_rekening`, `nama_kartu`, `nomor_kartu`, `gol_darah`, `status_pegawai`, `dosen_pns`, `dosen_tetap`, `dosen_kontrak`, `tendik_pns`, `tendik_tetap`, `tendik_kontrak`, `created_at`, `updated_at`) VALUES
(7, NULL, '12/A/2025', '2024-08-20', 'Informatika', 'Laki-laki', 'Jakarta', 'islam', 'asdasdasdas', '083876753552', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', 'Kawin', '', '', '', '', '', '', '', '', 'O', 'Tetap', 1, 1, 1, 1, 1, 1, '2024-08-05 16:22:50', '2024-08-05 16:27:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknik_mesin`
--

CREATE TABLE `teknik_mesin` (
  `teknikmesin_id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_rumah` varchar(15) DEFAULT NULL,
  `asal_sd` varchar(100) DEFAULT NULL,
  `tanggal_sd` date DEFAULT NULL,
  `noijasah_sd` varchar(50) DEFAULT NULL,
  `asal_sltp` varchar(100) DEFAULT NULL,
  `tanggal_sltp` date DEFAULT NULL,
  `noijasah_sltp` varchar(50) DEFAULT NULL,
  `asal_slta` varchar(100) DEFAULT NULL,
  `tanggal_slta` date DEFAULT NULL,
  `noijasah_slta` varchar(50) DEFAULT NULL,
  `kualifikasi_d3` varchar(100) DEFAULT NULL,
  `universitas_d3` varchar(100) DEFAULT NULL,
  `tanggal_d3` date DEFAULT NULL,
  `noijasah_d3` varchar(50) DEFAULT NULL,
  `gelar_d3` varchar(20) DEFAULT NULL,
  `kualifikasi_s1` varchar(100) DEFAULT NULL,
  `universitas_s1` varchar(100) DEFAULT NULL,
  `tanggal_s1` date DEFAULT NULL,
  `noijasah_s1` varchar(50) DEFAULT NULL,
  `gelar_s1` varchar(20) DEFAULT NULL,
  `kualifikasi_s2` varchar(100) DEFAULT NULL,
  `universitas_s2` varchar(100) DEFAULT NULL,
  `tanggal_s2` date DEFAULT NULL,
  `noijasah_s2` varchar(50) DEFAULT NULL,
  `gelar_s2` varchar(20) DEFAULT NULL,
  `kualifikasi_s3` varchar(100) DEFAULT NULL,
  `universitas_s3` varchar(100) DEFAULT NULL,
  `tanggal_s3` date DEFAULT NULL,
  `noijasah_s3` varchar(50) DEFAULT NULL,
  `gelar_s3` varchar(20) DEFAULT NULL,
  `sertifikat_formal` text DEFAULT NULL,
  `sertifikat_nonformal` text DEFAULT NULL,
  `sk_cpns` varchar(100) DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `pejabat_cpns` varchar(100) DEFAULT NULL,
  `spmt_cpns` varchar(100) DEFAULT NULL,
  `tglspmt_cpns` date DEFAULT NULL,
  `sttpl_cpns` varchar(100) DEFAULT NULL,
  `tglsttpl_cpns` date DEFAULT NULL,
  `sk_pns` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `pejabat_pns` varchar(100) DEFAULT NULL,
  `karis_pns` varchar(100) DEFAULT NULL,
  `taspen_pns` varchar(100) DEFAULT NULL,
  `karpeg_pns` varchar(100) DEFAULT NULL,
  `sk_dostap` varchar(100) DEFAULT NULL,
  `tmt_dostap` date DEFAULT NULL,
  `pejabat_dostap` varchar(100) DEFAULT NULL,
  `sk_dostrak` varchar(100) DEFAULT NULL,
  `tmt_dostrak` date DEFAULT NULL,
  `pejabat_dostrak` varchar(100) DEFAULT NULL,
  `sk_petap` varchar(100) DEFAULT NULL,
  `tmt_petap` date DEFAULT NULL,
  `pejabat_petap` varchar(100) DEFAULT NULL,
  `sk_petrak` varchar(100) DEFAULT NULL,
  `tmt_petrak` date DEFAULT NULL,
  `pejabat_petrak` varchar(100) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `total_ak1` int(11) DEFAULT NULL,
  `tmt1` date DEFAULT NULL,
  `no_sk1` varchar(100) DEFAULT NULL,
  `total_ak2` int(11) DEFAULT NULL,
  `tmt2` date DEFAULT NULL,
  `no_sk2` varchar(100) DEFAULT NULL,
  `total_ak3` int(11) DEFAULT NULL,
  `tmt3` date DEFAULT NULL,
  `no_sk3` varchar(100) DEFAULT NULL,
  `total_ak4` int(11) DEFAULT NULL,
  `tmt4` date DEFAULT NULL,
  `no_sk4` varchar(100) DEFAULT NULL,
  `total_ak5` int(11) DEFAULT NULL,
  `tmt5` date DEFAULT NULL,
  `no_sk5` varchar(100) DEFAULT NULL,
  `total_ak6` int(11) DEFAULT NULL,
  `tmt6` date DEFAULT NULL,
  `no_sk6` varchar(100) DEFAULT NULL,
  `tmt7` date DEFAULT NULL,
  `no_sk7` varchar(100) DEFAULT NULL,
  `tgl_sk7` date DEFAULT NULL,
  `bkn_sk7` varchar(100) DEFAULT NULL,
  `tglbkn_sk7` date DEFAULT NULL,
  `jenis_pangkat7` varchar(50) DEFAULT NULL,
  `tmt8` date DEFAULT NULL,
  `no_sk8` varchar(100) DEFAULT NULL,
  `tgl_sk8` date DEFAULT NULL,
  `bkn_sk8` varchar(100) DEFAULT NULL,
  `tglbkn_sk8` date DEFAULT NULL,
  `jenis_pangkat8` varchar(50) DEFAULT NULL,
  `tmt9` date DEFAULT NULL,
  `no_sk9` varchar(100) DEFAULT NULL,
  `tgl_sk9` date DEFAULT NULL,
  `bkn_sk9` varchar(100) DEFAULT NULL,
  `tglbkn_sk9` date DEFAULT NULL,
  `jenis_pangkat9` varchar(50) DEFAULT NULL,
  `tmt10` date DEFAULT NULL,
  `no_sk10` varchar(100) DEFAULT NULL,
  `tgl_sk10` date DEFAULT NULL,
  `bkn_sk10` varchar(100) DEFAULT NULL,
  `tglbkn_sk10` date DEFAULT NULL,
  `jenis_pangkat10` varchar(50) DEFAULT NULL,
  `tmt11` date DEFAULT NULL,
  `no_sk11` varchar(100) DEFAULT NULL,
  `tgl_sk11` date DEFAULT NULL,
  `bkn_sk11` varchar(100) DEFAULT NULL,
  `tglbkn_sk11` date DEFAULT NULL,
  `jenis_pangkat11` varchar(50) DEFAULT NULL,
  `tmt12` date DEFAULT NULL,
  `no_sk12` varchar(100) DEFAULT NULL,
  `tgl_sk12` date DEFAULT NULL,
  `bkn_sk12` varchar(100) DEFAULT NULL,
  `tglbkn_sk12` date DEFAULT NULL,
  `jenis_pangkat12` varchar(50) DEFAULT NULL,
  `status_kawin` enum('Kawin','Belum Kawin','Duda','Janda') DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nama_pasangan` varchar(100) DEFAULT NULL,
  `nama_anak` text DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `nama_kartu` varchar(100) DEFAULT NULL,
  `nomor_kartu` varchar(20) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `status_pegawai` enum('Tetap','Kontrak') DEFAULT NULL,
  `dosen_pns` tinyint(1) DEFAULT NULL,
  `dosen_tetap` tinyint(1) DEFAULT NULL,
  `dosen_kontrak` tinyint(1) DEFAULT NULL,
  `tendik_pns` tinyint(1) DEFAULT NULL,
  `tendik_tetap` tinyint(1) DEFAULT NULL,
  `tendik_kontrak` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `teknik_mesin`
--

INSERT INTO `teknik_mesin` (`teknikmesin_id`, `foto`, `nomor`, `tanggal`, `nama`, `jenis_kelamin`, `tempat_lahir`, `agama`, `alamat`, `no_hp`, `no_rumah`, `asal_sd`, `tanggal_sd`, `noijasah_sd`, `asal_sltp`, `tanggal_sltp`, `noijasah_sltp`, `asal_slta`, `tanggal_slta`, `noijasah_slta`, `kualifikasi_d3`, `universitas_d3`, `tanggal_d3`, `noijasah_d3`, `gelar_d3`, `kualifikasi_s1`, `universitas_s1`, `tanggal_s1`, `noijasah_s1`, `gelar_s1`, `kualifikasi_s2`, `universitas_s2`, `tanggal_s2`, `noijasah_s2`, `gelar_s2`, `kualifikasi_s3`, `universitas_s3`, `tanggal_s3`, `noijasah_s3`, `gelar_s3`, `sertifikat_formal`, `sertifikat_nonformal`, `sk_cpns`, `tmt_cpns`, `pejabat_cpns`, `spmt_cpns`, `tglspmt_cpns`, `sttpl_cpns`, `tglsttpl_cpns`, `sk_pns`, `tmt_pns`, `pejabat_pns`, `karis_pns`, `taspen_pns`, `karpeg_pns`, `sk_dostap`, `tmt_dostap`, `pejabat_dostap`, `sk_dostrak`, `tmt_dostrak`, `pejabat_dostrak`, `sk_petap`, `tmt_petap`, `pejabat_petap`, `sk_petrak`, `tmt_petrak`, `pejabat_petrak`, `nip`, `nidn`, `nik`, `total_ak1`, `tmt1`, `no_sk1`, `total_ak2`, `tmt2`, `no_sk2`, `total_ak3`, `tmt3`, `no_sk3`, `total_ak4`, `tmt4`, `no_sk4`, `total_ak5`, `tmt5`, `no_sk5`, `total_ak6`, `tmt6`, `no_sk6`, `tmt7`, `no_sk7`, `tgl_sk7`, `bkn_sk7`, `tglbkn_sk7`, `jenis_pangkat7`, `tmt8`, `no_sk8`, `tgl_sk8`, `bkn_sk8`, `tglbkn_sk8`, `jenis_pangkat8`, `tmt9`, `no_sk9`, `tgl_sk9`, `bkn_sk9`, `tglbkn_sk9`, `jenis_pangkat9`, `tmt10`, `no_sk10`, `tgl_sk10`, `bkn_sk10`, `tglbkn_sk10`, `jenis_pangkat10`, `tmt11`, `no_sk11`, `tgl_sk11`, `bkn_sk11`, `tglbkn_sk11`, `jenis_pangkat11`, `tmt12`, `no_sk12`, `tgl_sk12`, `bkn_sk12`, `tglbkn_sk12`, `jenis_pangkat12`, `status_kawin`, `nama_ayah`, `nama_ibu`, `nama_pasangan`, `nama_anak`, `npwp`, `nomor_rekening`, `nama_kartu`, `nomor_kartu`, `gol_darah`, `status_pegawai`, `dosen_pns`, `dosen_tetap`, `dosen_kontrak`, `tendik_pns`, `tendik_tetap`, `tendik_kontrak`, `created_at`, `updated_at`) VALUES
(7, NULL, '12/A/2025', '2024-08-14', 'Mesin', 'Laki-laki', 'Jakarta', '', 'sadasd', '12312312', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', 'Kawin', '', '', '', '', '', '', '', '', 'O', 'Tetap', 1, 1, 1, 1, 1, 1, '2024-08-05 16:28:14', '2024-08-05 16:32:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknik_sipil`
--

CREATE TABLE `teknik_sipil` (
  `tekniksipil_id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_rumah` varchar(15) DEFAULT NULL,
  `asal_sd` varchar(100) DEFAULT NULL,
  `tanggal_sd` date DEFAULT NULL,
  `noijasah_sd` varchar(50) DEFAULT NULL,
  `asal_sltp` varchar(100) DEFAULT NULL,
  `tanggal_sltp` date DEFAULT NULL,
  `noijasah_sltp` varchar(50) DEFAULT NULL,
  `asal_slta` varchar(100) DEFAULT NULL,
  `tanggal_slta` date DEFAULT NULL,
  `noijasah_slta` varchar(50) DEFAULT NULL,
  `kualifikasi_d3` varchar(100) DEFAULT NULL,
  `universitas_d3` varchar(100) DEFAULT NULL,
  `tanggal_d3` date DEFAULT NULL,
  `noijasah_d3` varchar(50) DEFAULT NULL,
  `gelar_d3` varchar(20) DEFAULT NULL,
  `kualifikasi_s1` varchar(100) DEFAULT NULL,
  `universitas_s1` varchar(100) DEFAULT NULL,
  `tanggal_s1` date DEFAULT NULL,
  `noijasah_s1` varchar(50) DEFAULT NULL,
  `gelar_s1` varchar(20) DEFAULT NULL,
  `kualifikasi_s2` varchar(100) DEFAULT NULL,
  `universitas_s2` varchar(100) DEFAULT NULL,
  `tanggal_s2` date DEFAULT NULL,
  `noijasah_s2` varchar(50) DEFAULT NULL,
  `gelar_s2` varchar(20) DEFAULT NULL,
  `kualifikasi_s3` varchar(100) DEFAULT NULL,
  `universitas_s3` varchar(100) DEFAULT NULL,
  `tanggal_s3` date DEFAULT NULL,
  `noijasah_s3` varchar(50) DEFAULT NULL,
  `gelar_s3` varchar(20) DEFAULT NULL,
  `sertifikat_formal` text DEFAULT NULL,
  `sertifikat_nonformal` text DEFAULT NULL,
  `sk_cpns` varchar(100) DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `pejabat_cpns` varchar(100) DEFAULT NULL,
  `spmt_cpns` varchar(100) DEFAULT NULL,
  `tglspmt_cpns` date DEFAULT NULL,
  `sttpl_cpns` varchar(100) DEFAULT NULL,
  `tglsttpl_cpns` date DEFAULT NULL,
  `sk_pns` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `pejabat_pns` varchar(100) DEFAULT NULL,
  `karis_pns` varchar(100) DEFAULT NULL,
  `taspen_pns` varchar(100) DEFAULT NULL,
  `karpeg_pns` varchar(100) DEFAULT NULL,
  `sk_dostap` varchar(100) DEFAULT NULL,
  `tmt_dostap` date DEFAULT NULL,
  `pejabat_dostap` varchar(100) DEFAULT NULL,
  `sk_dostrak` varchar(100) DEFAULT NULL,
  `tmt_dostrak` date DEFAULT NULL,
  `pejabat_dostrak` varchar(100) DEFAULT NULL,
  `sk_petap` varchar(100) DEFAULT NULL,
  `tmt_petap` date DEFAULT NULL,
  `pejabat_petap` varchar(100) DEFAULT NULL,
  `sk_petrak` varchar(100) DEFAULT NULL,
  `tmt_petrak` date DEFAULT NULL,
  `pejabat_petrak` varchar(100) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `total_ak1` int(11) DEFAULT NULL,
  `tmt1` date DEFAULT NULL,
  `no_sk1` varchar(100) DEFAULT NULL,
  `total_ak2` int(11) DEFAULT NULL,
  `tmt2` date DEFAULT NULL,
  `no_sk2` varchar(100) DEFAULT NULL,
  `total_ak3` int(11) DEFAULT NULL,
  `tmt3` date DEFAULT NULL,
  `no_sk3` varchar(100) DEFAULT NULL,
  `total_ak4` int(11) DEFAULT NULL,
  `tmt4` date DEFAULT NULL,
  `no_sk4` varchar(100) DEFAULT NULL,
  `total_ak5` int(11) DEFAULT NULL,
  `tmt5` date DEFAULT NULL,
  `no_sk5` varchar(100) DEFAULT NULL,
  `total_ak6` int(11) DEFAULT NULL,
  `tmt6` date DEFAULT NULL,
  `no_sk6` varchar(100) DEFAULT NULL,
  `tmt7` date DEFAULT NULL,
  `no_sk7` varchar(100) DEFAULT NULL,
  `tgl_sk7` date DEFAULT NULL,
  `bkn_sk7` varchar(100) DEFAULT NULL,
  `tglbkn_sk7` date DEFAULT NULL,
  `jenis_pangkat7` varchar(50) DEFAULT NULL,
  `tmt8` date DEFAULT NULL,
  `no_sk8` varchar(100) DEFAULT NULL,
  `tgl_sk8` date DEFAULT NULL,
  `bkn_sk8` varchar(100) DEFAULT NULL,
  `tglbkn_sk8` date DEFAULT NULL,
  `jenis_pangkat8` varchar(50) DEFAULT NULL,
  `tmt9` date DEFAULT NULL,
  `no_sk9` varchar(100) DEFAULT NULL,
  `tgl_sk9` date DEFAULT NULL,
  `bkn_sk9` varchar(100) DEFAULT NULL,
  `tglbkn_sk9` date DEFAULT NULL,
  `jenis_pangkat9` varchar(50) DEFAULT NULL,
  `tmt10` date DEFAULT NULL,
  `no_sk10` varchar(100) DEFAULT NULL,
  `tgl_sk10` date DEFAULT NULL,
  `bkn_sk10` varchar(100) DEFAULT NULL,
  `tglbkn_sk10` date DEFAULT NULL,
  `jenis_pangkat10` varchar(50) DEFAULT NULL,
  `tmt11` date DEFAULT NULL,
  `no_sk11` varchar(100) DEFAULT NULL,
  `tgl_sk11` date DEFAULT NULL,
  `bkn_sk11` varchar(100) DEFAULT NULL,
  `tglbkn_sk11` date DEFAULT NULL,
  `jenis_pangkat11` varchar(50) DEFAULT NULL,
  `tmt12` date DEFAULT NULL,
  `no_sk12` varchar(100) DEFAULT NULL,
  `tgl_sk12` date DEFAULT NULL,
  `bkn_sk12` varchar(100) DEFAULT NULL,
  `tglbkn_sk12` date DEFAULT NULL,
  `jenis_pangkat12` varchar(50) DEFAULT NULL,
  `status_kawin` enum('Kawin','Belum Kawin','Duda','Janda') DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nama_pasangan` varchar(100) DEFAULT NULL,
  `nama_anak` text DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `nama_kartu` varchar(100) DEFAULT NULL,
  `nomor_kartu` varchar(20) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `status_pegawai` enum('Tetap','Kontrak') DEFAULT NULL,
  `dosen_pns` tinyint(1) DEFAULT NULL,
  `dosen_tetap` tinyint(1) DEFAULT NULL,
  `dosen_kontrak` tinyint(1) DEFAULT NULL,
  `tendik_pns` tinyint(1) DEFAULT NULL,
  `tendik_tetap` tinyint(1) DEFAULT NULL,
  `tendik_kontrak` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `teknik_sipil`
--

INSERT INTO `teknik_sipil` (`tekniksipil_id`, `foto`, `nomor`, `tanggal`, `nama`, `jenis_kelamin`, `tempat_lahir`, `agama`, `alamat`, `no_hp`, `no_rumah`, `asal_sd`, `tanggal_sd`, `noijasah_sd`, `asal_sltp`, `tanggal_sltp`, `noijasah_sltp`, `asal_slta`, `tanggal_slta`, `noijasah_slta`, `kualifikasi_d3`, `universitas_d3`, `tanggal_d3`, `noijasah_d3`, `gelar_d3`, `kualifikasi_s1`, `universitas_s1`, `tanggal_s1`, `noijasah_s1`, `gelar_s1`, `kualifikasi_s2`, `universitas_s2`, `tanggal_s2`, `noijasah_s2`, `gelar_s2`, `kualifikasi_s3`, `universitas_s3`, `tanggal_s3`, `noijasah_s3`, `gelar_s3`, `sertifikat_formal`, `sertifikat_nonformal`, `sk_cpns`, `tmt_cpns`, `pejabat_cpns`, `spmt_cpns`, `tglspmt_cpns`, `sttpl_cpns`, `tglsttpl_cpns`, `sk_pns`, `tmt_pns`, `pejabat_pns`, `karis_pns`, `taspen_pns`, `karpeg_pns`, `sk_dostap`, `tmt_dostap`, `pejabat_dostap`, `sk_dostrak`, `tmt_dostrak`, `pejabat_dostrak`, `sk_petap`, `tmt_petap`, `pejabat_petap`, `sk_petrak`, `tmt_petrak`, `pejabat_petrak`, `nip`, `nidn`, `nik`, `total_ak1`, `tmt1`, `no_sk1`, `total_ak2`, `tmt2`, `no_sk2`, `total_ak3`, `tmt3`, `no_sk3`, `total_ak4`, `tmt4`, `no_sk4`, `total_ak5`, `tmt5`, `no_sk5`, `total_ak6`, `tmt6`, `no_sk6`, `tmt7`, `no_sk7`, `tgl_sk7`, `bkn_sk7`, `tglbkn_sk7`, `jenis_pangkat7`, `tmt8`, `no_sk8`, `tgl_sk8`, `bkn_sk8`, `tglbkn_sk8`, `jenis_pangkat8`, `tmt9`, `no_sk9`, `tgl_sk9`, `bkn_sk9`, `tglbkn_sk9`, `jenis_pangkat9`, `tmt10`, `no_sk10`, `tgl_sk10`, `bkn_sk10`, `tglbkn_sk10`, `jenis_pangkat10`, `tmt11`, `no_sk11`, `tgl_sk11`, `bkn_sk11`, `tglbkn_sk11`, `jenis_pangkat11`, `tmt12`, `no_sk12`, `tgl_sk12`, `bkn_sk12`, `tglbkn_sk12`, `jenis_pangkat12`, `status_kawin`, `nama_ayah`, `nama_ibu`, `nama_pasangan`, `nama_anak`, `npwp`, `nomor_rekening`, `nama_kartu`, `nomor_kartu`, `gol_darah`, `status_pegawai`, `dosen_pns`, `dosen_tetap`, `dosen_kontrak`, `tendik_pns`, `tendik_tetap`, `tendik_kontrak`, `created_at`, `updated_at`) VALUES
(6, NULL, '', '0000-00-00', 'Sipil', 'Laki-laki', 'Jakarta', 'islam', 'sadasdasdas', '21321312', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', 'Kawin', '', '', '', '', '', '', '', '', 'O', 'Tetap', 1, 1, 0, 0, 0, 0, '2024-08-05 15:31:16', '2024-08-05 16:27:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tendik`
--

CREATE TABLE `tendik` (
  `tendik_id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `tmt` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `id_penempatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tendik`
--

INSERT INTO `tendik` (`tendik_id`, `kode`, `nama`, `id_pendidikan`, `id_jabatan`, `golongan`, `tmt`, `ket`, `id_penempatan`) VALUES
(1, '11111111', 'Ridho', 2, 1, 'X', '3 Januari 2025', '-', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tubel`
--

CREATE TABLE `tubel` (
  `tubel_id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `no_sk` varchar(255) NOT NULL,
  `mulai_tubel` varchar(255) NOT NULL,
  `univ_tubel` varchar(255) NOT NULL,
  `status_pegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tubel`
--

INSERT INTO `tubel` (`tubel_id`, `id_dosen`, `id_jurusan`, `id_jabatan`, `no_sk`, `mulai_tubel`, `univ_tubel`, `status_pegawai`) VALUES
(1, 2, 1, 1, '123212222', '213122222', 'UGM', 'pns'),
(3, 5, 1, 2, '123123', '20 Agustus 2024', 'UGM', 'pns');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_depan` varchar(32) NOT NULL,
  `nama_belakang` varchar(32) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telepon` varchar(32) DEFAULT NULL,
  `id_role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama_depan`, `nama_belakang`, `nama_lengkap`, `email`, `username`, `password`, `no_telepon`, `id_role`, `created_at`, `updated_at`) VALUES
(10, 'aa', 'jambrong', 'aa jambrong', 'superadmin@example.com', 'staf', '$2y$10$3ixusoAQr6C2stwlvK38A.31wNWgKjp2ScoyA7yl4.AviPM7BQpxS', '022140578', 1, '2021-04-18 17:00:14', '2021-04-18 17:00:14'),
(11, 'rais', 'haq', 'rais haq', 'dekan@gmail.com', 'dekan', '$2y$10$LQ7rGx8GJybXsuo9YfGa0ORExQ1FTrxYIdntQazGOqxjG5jBgoAEm', '11111', 2, '2024-07-22 08:51:34', '2024-07-22 08:51:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsitektur`
--
ALTER TABLE `arsitektur`
  ADD PRIMARY KEY (`arsitektur_id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indeks untuk tabel `penempatan`
--
ALTER TABLE `penempatan`
  ADD PRIMARY KEY (`penempatan_id`);

--
-- Indeks untuk tabel `pppk`
--
ALTER TABLE `pppk`
  ADD PRIMARY KEY (`pppk_id`);

--
-- Indeks untuk tabel `sistem_informasi`
--
ALTER TABLE `sistem_informasi`
  ADD PRIMARY KEY (`sisteminformasi_id`);

--
-- Indeks untuk tabel `teknik_elektro`
--
ALTER TABLE `teknik_elektro`
  ADD PRIMARY KEY (`teknikelektro_id`);

--
-- Indeks untuk tabel `teknik_informatika`
--
ALTER TABLE `teknik_informatika`
  ADD PRIMARY KEY (`teknikinformatika_id`);

--
-- Indeks untuk tabel `teknik_mesin`
--
ALTER TABLE `teknik_mesin`
  ADD PRIMARY KEY (`teknikmesin_id`);

--
-- Indeks untuk tabel `teknik_sipil`
--
ALTER TABLE `teknik_sipil`
  ADD PRIMARY KEY (`tekniksipil_id`);

--
-- Indeks untuk tabel `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`tendik_id`);

--
-- Indeks untuk tabel `tubel`
--
ALTER TABLE `tubel`
  ADD PRIMARY KEY (`tubel_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsitektur`
--
ALTER TABLE `arsitektur`
  MODIFY `arsitektur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penempatan`
--
ALTER TABLE `penempatan`
  MODIFY `penempatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pppk`
--
ALTER TABLE `pppk`
  MODIFY `pppk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sistem_informasi`
--
ALTER TABLE `sistem_informasi`
  MODIFY `sisteminformasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `teknik_elektro`
--
ALTER TABLE `teknik_elektro`
  MODIFY `teknikelektro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `teknik_informatika`
--
ALTER TABLE `teknik_informatika`
  MODIFY `teknikinformatika_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `teknik_mesin`
--
ALTER TABLE `teknik_mesin`
  MODIFY `teknikmesin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `teknik_sipil`
--
ALTER TABLE `teknik_sipil`
  MODIFY `tekniksipil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tendik`
--
ALTER TABLE `tendik`
  MODIFY `tendik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tubel`
--
ALTER TABLE `tubel`
  MODIFY `tubel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
