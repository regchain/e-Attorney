-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 03 Agu 2017 pada 14.35
-- Versi Server: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elpidsus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kasus_jaksas`
--

CREATE TABLE `detail_kasus_jaksas` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `update_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kasus_surats`
--

CREATE TABLE `detail_kasus_surats` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `detail_kasus_surats`
--

INSERT INTO `detail_kasus_surats` (`id`, `id_kasus`, `id_surat`, `status`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 12, 1, '', '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(2, 13, 2, '', '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(3, 14, 3, '', '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1'),
(4, 9, 4, 'RP2', '2017-06-29 00:54:53', '2017-06-29 00:54:53', '::1', '::1'),
(5, 9, 5, 'RP2', '2017-06-29 00:56:50', '2017-06-29 00:56:50', '::1', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jaksas`
--

CREATE TABLE `jaksas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jaksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jaksas`
--

INSERT INTO `jaksas` (`id`, `nip`, `nama_jaksa`, `pangkat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, '0987654321', 'Susanto Gani SH.', 'Jaksa Madya', '1234567890', '2017-07-31 21:49:51', '2017-07-31 21:49:51'),
(2, '114567986 6543 98909', 'Fauzal, SH., MH.', 'Jaksa Madya', '0811111111', '2017-07-31 21:51:18', '2017-08-01 05:03:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE `kasus` (
  `id` int(11) NOT NULL,
  `judul_kasus` varchar(250) NOT NULL,
  `lokasi_kejadian` varchar(100) DEFAULT NULL,
  `tanggal_kejadian` datetime DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `propinsi` varchar(255) DEFAULT NULL,
  `kontak_telpon` varchar(255) DEFAULT NULL,
  `kontak_handphone` varchar(255) DEFAULT NULL,
  `kontak_email` varchar(255) DEFAULT NULL,
  `kodepos` int(11) DEFAULT NULL,
  `disposisi` varchar(100) DEFAULT NULL,
  `kasus_posisi` varchar(100) DEFAULT NULL,
  `kasimpulan` varchar(350) DEFAULT NULL,
  `saran` varchar(350) DEFAULT NULL,
  `status` varchar(100) DEFAULT '',
  `asal_surat` varchar(255) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `tanggal_surat_pelapor` datetime DEFAULT NULL,
  `tanggal_surat_diterima` datetime DEFAULT NULL,
  `pembuat_catatan_surat` varchar(255) DEFAULT NULL,
  `tanggal_rp2` datetime DEFAULT NULL,
  `no_surat:rp2` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_from_ip` varchar(100) DEFAULT '',
  `updated_from_ip` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id`, `judul_kasus`, `lokasi_kejadian`, `tanggal_kejadian`, `nama_lengkap`, `alamat`, `kota`, `propinsi`, `kontak_telpon`, `kontak_handphone`, `kontak_email`, `kodepos`, `disposisi`, `kasus_posisi`, `kasimpulan`, `saran`, `status`, `asal_surat`, `no_surat`, `tanggal_surat_pelapor`, `tanggal_surat_diterima`, `pembuat_catatan_surat`, `tanggal_rp2`, `no_surat:rp2`, `created_at`, `updated_at`, `created_from_ip`, `updated_from_ip`) VALUES
(5, 'Pencurian ban motor di parkiran', 'Parkiran scbd', '0000-00-00 00:00:00', 'Akbar Satria', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', NULL, NULL, NULL, NULL, 15144, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-16 10:56:04', '2017-06-16 10:56:04', '::1', '::1'),
(6, 'Penembakan manusia di jalanan', 'ciledug', '2017-10-10 00:00:00', 'Permadi', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', NULL, NULL, NULL, NULL, 15144, NULL, NULL, NULL, NULL, 'kasus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-18 06:54:12', '2017-06-18 06:54:12', '::1', '::1'),
(7, 'Korupsi', 'tangerag', '2017-10-10 00:00:00', 'Supardi', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', NULL, NULL, NULL, NULL, 15144, NULL, NULL, NULL, NULL, 'kasus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-18 06:58:38', '2017-06-18 06:58:38', '::1', '::1'),
(8, 'Pencurian mobi baru dan membacok orang', 'bsd', '2017-10-10 00:00:00', 'shabrina', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', NULL, NULL, NULL, NULL, 15144, NULL, NULL, NULL, NULL, 'kasus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-18 07:12:24', '2017-06-18 07:12:24', '::1', '::1'),
(9, '', 'jakarta', '2017-10-10 00:00:00', 'Gilang', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', NULL, NULL, NULL, NULL, 15144, NULL, '', NULL, NULL, 'RP2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-18 07:14:32', '2017-06-29 00:56:50', '::1', '::1'),
(10, 'perampokan', 'tangerang', '2017-08-09 00:00:00', 'Akbar satria', 'Kmp. Pepabri', 'Tangerang', NULL, NULL, NULL, NULL, 14155, NULL, NULL, NULL, NULL, 'kasus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-26 05:39:20', '2017-06-26 05:39:20', '::1', '::1'),
(11, 'perampokan', 'tangerang', '2017-08-09 00:00:00', 'Akbar satria', 'Kmp. Pepabri', 'Tangerang', NULL, NULL, NULL, NULL, 14155, NULL, NULL, NULL, NULL, 'kasus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-26 05:40:41', '2017-06-26 05:40:41', '::1', '::1'),
(12, 'perampokan', 'tangerang', '2017-08-09 00:00:00', 'Akbar satria', 'Kmp. Pepabri', 'Tangerang', NULL, NULL, NULL, NULL, 14155, NULL, NULL, NULL, NULL, 'kasus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(13, 'Perampokan begal di serpong', 'banten', '2017-04-09 00:00:00', 'Akbar Satria', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', NULL, NULL, NULL, NULL, 15144, NULL, NULL, NULL, NULL, 'kasus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(14, 'Pengambilan dana amal', 'banten', '2017-01-03 00:00:00', 'Akbar Satria', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', NULL, NULL, NULL, NULL, 15144, NULL, NULL, NULL, NULL, 'kasus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1'),
(15, 'curi mobil cimahi', NULL, NULL, NULL, 'cimahi', 'cimahi', 'jabar', '78787', '9879798', 'ratrst@arst.com', 345345, 'arstarts', 'kasuss posisi cimahi', NULL, NULL, '3', 'surat cimahi', '234234', '2017-07-04 00:00:00', NULL, 'budi', NULL, NULL, '2017-07-15 01:54:19', '2017-07-15 01:54:39', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_subyek`
--

CREATE TABLE `kasus_subyek` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `subyek_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_from_ip` varchar(100) DEFAULT '',
  `updated_from_ip` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kasus_subyek`
--

INSERT INTO `kasus_subyek` (`id`, `kasus_id`, `subyek_id`, `created_at`, `updated_at`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 7, 4, '2017-06-18 06:58:38', '2017-06-18 06:58:38', '::1', '::1'),
(2, 9, 6, '2017-06-18 07:14:32', '2017-06-18 07:14:32', '::1', '::1'),
(3, 12, 7, '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(4, 13, 8, '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(5, 14, 9, '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1'),
(6, 15, 10, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_subyeks`
--

CREATE TABLE `kategori_subyeks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_subyeks`
--

INSERT INTO `kategori_subyeks` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PNS', NULL, NULL),
(2, 'Swasta', NULL, NULL),
(3, 'Walikota', '2017-07-30 04:27:13', '2017-07-30 04:27:13'),
(4, 'Azuwir Azzurri', '2017-07-30 04:46:17', '2017-07-30 04:46:17'),
(12, 'Bupati', '2017-07-30 06:24:48', '2017-08-01 07:33:30'),
(14, 'FGRT', '2017-07-30 06:27:22', '2017-07-30 06:27:22'),
(16, 'Jaksa', '2017-08-01 07:30:59', '2017-08-01 07:32:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_25_025103_create_admins_table', 1),
(4, '2017_07_04_200027_create_pengumumen_table', 1),
(5, '2017_07_29_192605_create_kategori_subyeks_table', 2),
(9, '2017_07_30_151227_create_jaksas_table', 3),
(10, '2017_07_30_155335_create_pasals_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obyek`
--

CREATE TABLE `obyek` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) DEFAULT NULL,
  `benda_sitaan` varchar(100) DEFAULT '',
  `nilai_kontrak` varchar(100) DEFAULT '',
  `kerugian_negara` varchar(100) DEFAULT '',
  `pemulihan_aset` varchar(100) DEFAULT '',
  `obyek_pidana` varchar(100) DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_from_ip` varchar(100) DEFAULT '',
  `updated_from_ip` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `obyek`
--

INSERT INTO `obyek` (`id`, `kasus_id`, `benda_sitaan`, `nilai_kontrak`, `kerugian_negara`, `pemulihan_aset`, `obyek_pidana`, `created_at`, `updated_at`, `created_from_ip`, `updated_from_ip`) VALUES
(1, NULL, '', '123123', '', '', 'asdadsasd', '2017-06-29 00:56:50', '2017-06-29 00:56:50', '::1', '::1'),
(2, 15, '', '8', '', '', 'mobil', '2017-07-15 01:54:19', '2017-07-15 01:54:40', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasals`
--

CREATE TABLE `pasals` (
  `id` int(10) UNSIGNED NOT NULL,
  `undang_undang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasal` int(11) NOT NULL,
  `ayat` int(11) DEFAULT NULL,
  `huruf` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_hukuman_min` int(11) DEFAULT NULL,
  `masa_hukuman_max` int(11) DEFAULT NULL,
  `denda_min` double(15,2) DEFAULT NULL,
  `denda_max` double(15,2) DEFAULT NULL,
  `kategori_pasal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasals`
--

INSERT INTO `pasals` (`id`, `undang_undang`, `pasal`, `ayat`, `huruf`, `keterangan`, `masa_hukuman_min`, `masa_hukuman_max`, `denda_min`, `denda_max`, `kategori_pasal`, `created_at`, `updated_at`) VALUES
(1, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 2, 1, 'a, b', 'Setiap orang yang secara melawan hukum melakukan perbuatan memperkaya diri sendiri atau orang lain yang suatu korporasi yang dapat merugikan keuangan negara atau perekonomian negara, dipidana dengan pidana penjara seumur hidup atau pidana penjara paling singkat 4 (empat) tahun dan paling lama 20 (dua puluh) tahun dan denda paling sedikit Rp. 200.000.000.00 (dua ratus juta rupiah) dan paling banyak Rp. 1.000.000.000,00 (satu miliar rupiah).', 4, 20, 200000000.00, 1000000000.00, 'Kerugian Keuangan Negara', '2017-08-01 08:47:52', '2017-08-03 00:32:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumumen`
--

CREATE TABLE `pengumumen` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subyek`
--

CREATE TABLE `subyek` (
  `id` int(11) NOT NULL,
  `judul_surat` varchar(150) DEFAULT NULL,
  `nama_terlapor` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `kebangsaan` varchar(100) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `tempat_tinggal` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `jabatan_resmi` varchar(100) DEFAULT NULL,
  `jabatan_lain` varchar(100) DEFAULT NULL,
  `lembaga` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `kategori_subyek` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT '1',
  `no_surat_rp2` varchar(255) DEFAULT NULL,
  `tanggal_rp2` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_from_ip` varchar(100) DEFAULT '',
  `updated_from_ip` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `subyek`
--

INSERT INTO `subyek` (`id`, `judul_surat`, `nama_terlapor`, `tempat_lahir`, `kebangsaan`, `kewarganegaraan`, `tempat_tinggal`, `agama`, `jabatan_resmi`, `jabatan_lain`, `lembaga`, `pendidikan`, `kategori_subyek`, `keterangan`, `status`, `no_surat_rp2`, `tanggal_rp2`, `created_at`, `updated_at`, `created_from_ip`, `updated_from_ip`) VALUES
(2, NULL, 'Budi dharmawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mentri keuangan', NULL, 'Pengacara', NULL, '', NULL, NULL, '2017-06-16 10:56:04', '2017-06-16 10:56:04', '::1', '::1'),
(3, NULL, 'Rahmt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kejakasaan', NULL, 'PNS', NULL, '', NULL, NULL, '2017-06-18 06:54:12', '2017-06-18 06:54:12', '::1', '::1'),
(4, NULL, 'Surdi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'keuangan', NULL, 'Hakim', NULL, '', NULL, NULL, '2017-06-18 06:58:38', '2017-06-18 06:58:38', '::1', '::1'),
(6, NULL, 'Dimas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kehutanan', NULL, 'Hakim', NULL, '', NULL, NULL, '2017-06-18 07:14:32', '2017-06-29 00:56:50', '::1', '::1'),
(7, NULL, 'Budiman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kementrian dalam negri', NULL, 'PNS', NULL, '', NULL, NULL, '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(8, NULL, 'Bagus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kementrian Olahraga ', NULL, 'PNS', NULL, '', NULL, NULL, '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(9, NULL, 'Bima', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kejaksaan', NULL, 'Hakim', NULL, '', NULL, NULL, '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1'),
(10, NULL, 'dudi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kafe', NULL, NULL, NULL, '2', 'rp2 no', '2017-07-19 00:00:00', '2017-07-15 01:54:19', '2017-07-15 01:54:40', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_surats`
--

CREATE TABLE `tabel_surats` (
  `id` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `judul_surat` varchar(100) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tanggal_surat` datetime NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_berhenti` datetime NOT NULL,
  `saran` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tabel_surats`
--

INSERT INTO `tabel_surats` (`id`, `id_surat`, `judul_surat`, `no_surat`, `tanggal_surat`, `tanggal_mulai`, `tanggal_berhenti`, `saran`, `keterangan`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 0, 'perampokan', 'nomor surat 1234562', '2017-08-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(2, 0, 'Perampokan begal di serpong', '3f/90/8ui', '2017-04-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(3, 0, 'Pengambilan dana amal', '3g/4g/5h/6j', '2017-01-03 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1'),
(4, 0, '', '', '2017-05-19 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-29 00:54:53', '2017-06-29 00:54:53', '::1', '::1'),
(5, 0, '', '', '2017-05-19 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-29 00:56:50', '2017-06-29 00:56:50', '::1', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) DEFAULT '',
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_on` int(11) UNSIGNED DEFAULT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_token`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `name`, `updated_at`, `created_at`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1499436520, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL, NULL, NULL),
(2, '::1', 'Akbar', '$2y$08$Up/1UzTNZZgZkjM0xywQX.G2u0YCaYf1zUT7HGd6HcI17hmNNa55G', NULL, 'akbar@akbar.com', NULL, NULL, NULL, NULL, 1494078910, 1497079982, 1, 'akbar', 'satria permadi', NULL, '081297018587', NULL, NULL, NULL),
(3, '', NULL, '$2y$10$8fv5Ue0J72xW5duCqCt1qegdGrjj1zh8yIAJ.S31HzULk5oBgjVeC', NULL, 'rahmat.awaludin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rahmat Awaludin', '2017-07-15 01:53:00', '2017-07-15 01:53:00'),
(4, '', NULL, '$2y$10$iNsaSiBuz3VnIinz72FkyeAlr4g9BVbV824WL/YbcMryKEl1b0GH6', NULL, 'azuwir@gmail.com', NULL, NULL, NULL, 'yqDYsJ6rnemoJfsINu8O9XtkANkKuPsC0qaYJgvoabCU1suM7cqRAg8dC3C6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Azuwir Azzurri', '2017-07-28 16:33:14', '2017-07-28 16:33:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `detail_kasus_jaksas`
--
ALTER TABLE `detail_kasus_jaksas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_kasus_surats`
--
ALTER TABLE `detail_kasus_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaksas`
--
ALTER TABLE `jaksas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasus_subyek`
--
ALTER TABLE `kasus_subyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_subyeks`
--
ALTER TABLE `kategori_subyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obyek`
--
ALTER TABLE `obyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasals`
--
ALTER TABLE `pasals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengumumen`
--
ALTER TABLE `pengumumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subyek`
--
ALTER TABLE `subyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_surats`
--
ALTER TABLE `tabel_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_kasus_jaksas`
--
ALTER TABLE `detail_kasus_jaksas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_kasus_surats`
--
ALTER TABLE `detail_kasus_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jaksas`
--
ALTER TABLE `jaksas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kasus_subyek`
--
ALTER TABLE `kasus_subyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori_subyeks`
--
ALTER TABLE `kategori_subyeks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `obyek`
--
ALTER TABLE `obyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pasals`
--
ALTER TABLE `pasals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subyek`
--
ALTER TABLE `subyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tabel_surats`
--
ALTER TABLE `tabel_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;