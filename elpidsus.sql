-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 14 Agu 2017 pada 10.16
-- Versi Server: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jaksas`
--

INSERT INTO `jaksas` (`id`, `nip`, `nama_jaksa`, `pangkat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, '1', 'Adi Sutanto SH.MH', 'Jaksa', '1', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(2, '2', 'Agung Arifianto SH.MH', 'Jaksa', '2', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(3, '3', 'Agus Khairudin SH.MH', 'Jaksa', '3', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(4, '4', 'Agus Widodo SH.MH', 'Jaksa', '4', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(5, '5', 'Agus Wirawan Eko Saputro SH.MH', 'Jaksa', '5', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(6, '6', 'Akhmad Mudhor SH.MH', 'Jaksa', '6', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(7, '7', 'Andi Herman SH.MH', 'Jaksa', '7', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(8, '8', 'Anthony Nainggolan SH.MH', 'Jaksa', '8', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(9, '9', 'Arif Susanto SH.MH', 'Jaksa', '9', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(10, '10', 'Damha SH.MH', 'Jaksa', '10', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(11, '11', 'Endi Sulistiyo SH', 'Jaksa', '11', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(12, '12', 'Eryana Ganda Nugraha SH.M.Hum', 'Jaksa', '12', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(13, '13', 'Farida Puspitasari SH.MH', 'Jaksa', '13', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(14, '14', 'Fauzal SH. MH.', 'Jaksa', '14', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(15, '15', 'Fernando Simbolon SH.M.Hum', 'Jaksa', '15', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(16, '16', 'Firdaus Dewilmar SH.MH', 'Jaksa', '16', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(17, '17', 'Ginanjar Cahya Permana SH.MH', 'Jaksa', '17', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(18, '18', 'Gunawan Sumarsono SH', 'Jaksa', '18', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(19, '19', 'Haryono SH.MH', 'Jaksa', '19', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(20, '20', 'Heddy Heddiyanto S SH.MH', 'Jaksa', '20', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(21, '21', 'Hendra Syarbaini SH.MH', 'Jaksa', '21', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(22, '22', 'Hendry Marulitua SH.MH', 'Jaksa', '22', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(23, '23', 'Heru Murjianto SH.MH', 'Jaksa', '23', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(24, '24', 'Husin Fahmi SH.MH', 'Jaksa', '24', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(25, '25', 'I.G. Punia Atmaja NR SH.MH', 'Jaksa', '25', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(26, '26', 'IBN. Wiswantanu SH.MH', 'Jaksa', '26', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(27, '27', 'Indrawan Panacitra SH.MH', 'Jaksa', '27', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(28, '28', 'Ipat Fatmawati SH.MH', 'Jaksa', '28', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(29, '29', 'Jimmy Didi Setiawan SH.MH', 'Jaksa', '29', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(30, '30', 'Muhammad Yusuf Putra SH', 'Jaksa', '30', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(31, '31', 'Muhammad Zubair SH.MH', 'Jaksa', '31', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(32, '32', 'Nophy Tennophero Suoth SH.MH', 'Jaksa', '32', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(33, '33', 'Pathor Rahman SH.MH', 'Jaksa', '33', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(34, '34', 'R.M. Rachmat Zachry SH.MH', 'Jaksa', '34', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(35, '35', 'Reinhard Tololiu SH.MH', 'Jaksa', '35', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(36, '36', 'Rudi Prabowo Adji SH.MH', 'Jaksa', '36', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(37, '37', 'Sefran Haryadi SH.MH', 'Jaksa', '37', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(38, '38', 'Siswhandono SH.MH', 'Jaksa', '38', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(39, '39', 'Susanto Gani SH.', 'Jaksa', '39', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(40, '40', 'Wilyanto SH.MH', 'Jaksa', '40', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(41, '41', 'Yogiswara SH.MH', 'Jaksa', '41', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(42, '42', 'Yopy Adriansyah SH.MH', 'Jaksa', '42', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(43, '43', 'Faizal Banu SH.MH', 'Jaksa', '43', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(44, '44', 'Sapta Putra SH.MH', 'Jaksa', '44', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(45, '45', 'Imam Rahmat Saputra SH.MH', 'Jaksa', '45', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(46, '46', 'Revanda Sitepu SH', 'Jaksa', '46', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(47, '47', 'Haryoko Ari Wibwowo SH. MH', 'Jaksa', '47', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(48, '48', 'Zulkifly Noor SH.MH', 'Jaksa', '48', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(49, '49', 'Chandra Kusumah B SH.MH', 'Jaksa', '49', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(50, '50', 'Widagdo Mulyono Perus SH.MH', 'Jaksa', '50', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(51, '51', 'Susilo Hadi SH.MH', 'Jaksa', '51', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(52, '52', 'Achmad Hariyano SH.MH', 'Jaksa', '52', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(53, '53', 'Ni Wayan Kencanawati SH.MH', 'Jaksa', '53', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(54, '54', 'Fathoni Hatam SH.MH', 'Jaksa', '54', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(55, '55', 'Juli Isnur SH.MH', 'Jaksa', '55', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(56, '56', 'Mardatilla SH.MH', 'Jaksa', '56', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(57, '57', 'G. Sophan Syarif SH', 'Jaksa', '57', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(58, '58', 'Bambang Sunoto SH.MH', 'Jaksa', '58', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(59, '59', 'Junaidi SH', 'Jaksa', '59', '2017-08-09 18:29:34', '2017-08-09 18:29:34'),
(60, '60', 'IDA BAGUS NYOMAN W, SH', 'jaksa', '60', '2017-08-09 18:42:36', '2017-08-09 18:42:36'),
(61, '61', 'ARIO WICAKSONO, SH', 'jaksa', '61', '2017-08-09 18:57:03', '2017-08-09 18:57:03');

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
  `alamat` text,
  `kota` varchar(50) DEFAULT NULL,
  `propinsi` varchar(50) DEFAULT NULL,
  `kontak_telpon` varchar(30) DEFAULT NULL,
  `kontak_handphone` varchar(30) DEFAULT NULL,
  `kontak_email` varchar(50) DEFAULT NULL,
  `kodepos` char(10) DEFAULT NULL,
  `disposisi` text,
  `kasus_posisi` text,
  `kasimpulan` text,
  `saran` text,
  `asal_surat` varchar(255) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `tanggal_surat_pelapor` datetime DEFAULT NULL,
  `tanggal_surat_diterima` datetime DEFAULT NULL,
  `pembuat_catatan_surat` varchar(50) DEFAULT NULL,
  `status_rp1` int(1) DEFAULT '1',
  `status_rp2` int(1) NOT NULL DEFAULT '0',
  `status_rp3mum` int(1) NOT NULL DEFAULT '0',
  `status_rp3sus` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id`, `judul_kasus`, `lokasi_kejadian`, `tanggal_kejadian`, `nama_lengkap`, `alamat`, `kota`, `propinsi`, `kontak_telpon`, `kontak_handphone`, `kontak_email`, `kodepos`, `disposisi`, `kasus_posisi`, `kasimpulan`, `saran`, `asal_surat`, `no_surat`, `tanggal_surat_pelapor`, `tanggal_surat_diterima`, `pembuat_catatan_surat`, `status_rp1`, `status_rp2`, `status_rp3mum`, `status_rp3sus`, `created_at`, `updated_at`) VALUES
(1, 'Dugaan TPK PT. Bank Sumut Syariah Cabang Medan kepada PT. FASBIRU', NULL, NULL, 'Anonym', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dugaan TPK dalam pemberian Fasilitas Kredit oleh PT. Bank Sumut Syariah Cabang Medan kepada PT. FASBIR', NULL, NULL, 'Annomym', '123', '2017-08-07 00:00:00', '2017-08-07 00:00:00', NULL, 3, 1, 0, 0, '2017-08-10 00:17:22', '2017-08-10 00:17:22'),
(2, 'Pengadaan alat Fitness SMA dan SMK di Suku Dinas Pendidikan Menengah Jakarta Selatan, Jakarta Barat dan Jakarta Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NAIK DIKMUM', 'Dugaan TPK mark up dalam pengadaan alat Fitness SMA dan SMK di Suku Dinas Pendidikan Menengah Jakarta Selatan, Jakarta Barat dan Jakarta Pusat tahun 2014', NULL, NULL, 'Annomym', '333', '2017-08-07 00:00:00', '2017-08-07 00:00:00', NULL, 3, 1, 0, 0, '2017-08-09 23:56:41', '2017-08-12 02:53:52'),
(3, 'Fasilitas Akta Kredit Investasi pihak Bank Mandiri kepada PT. Tri Selaras Sapta (PT. TSS)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dugaan TPK atas penurunan fasilitas Akta Kredit Investasi Nomor : CRO.DPA/0157/KL/2013-02 tanggal 02 September 2013 oleh pihak Bank Mandiri kepada PT. Tri Selaras Sapta (PT. TSS)', NULL, NULL, 'abc', '123', '2017-08-12 00:00:00', '2017-08-12 00:00:00', NULL, 1, 0, 0, 0, '2017-08-10 00:02:43', '2017-08-12 02:50:35'),
(4, 'Dugaan TPK Dugaan TPK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dugaan TPK dalam penjualan tanah milik Negara di Jalan Kalimalang Raya Kelurahan Lambangsari, Kecamatan Tambun Selatan Kabupaten Bekasi Provinsi Jawa Barat oleh PT. Adhi Karya kepada Hiu Kok Ming', NULL, NULL, 'aq', '111', '2017-08-10 00:00:00', '2017-08-10 00:00:00', NULL, 3, 1, 0, 0, '2017-08-10 00:08:52', '2017-08-10 00:08:52'),
(5, 'Dugaan TPK dalam penyalahgunaan keuangan di Kantor Pusat PT. Pos Indonesia (persero)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dugaan TPK dalam penyalahgunaan keuangan di Kantor Pusat PT. Pos Indonesia (persero)', NULL, NULL, NULL, NULL, '2017-08-10 00:00:00', '2017-08-10 00:00:00', NULL, 3, 3, 1, 0, '2017-08-10 01:59:13', '2017-08-14 02:27:12'),
(6, 'Penyertaan modal Pemerintah Kabupaten Bengkalis kepada PT. Bumi Laksamana Jaya (Bengkalis)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dugaan TPK dalam penyertaan modal Pemerintah Kabupaten Bengkalis kepada PT. Bumi Laksamana Jaya (Bengkalis) Tahun Anggaran 2012\r\n\r\n(Asal SP LID Print-86/F.2/Fd.1/05/2015\r\nTanggal 26.05.2015)', NULL, NULL, NULL, NULL, '2017-08-14 00:00:00', '2017-08-14 00:00:00', NULL, 1, 0, 0, 0, '2017-08-14 01:57:50', '2017-08-14 01:57:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_jaksas`
--

CREATE TABLE `kasus_jaksas` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `jaksa_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kasus_jaksas`
--

INSERT INTO `kasus_jaksas` (`id`, `kasus_id`, `jaksa_id`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2017-08-09 23:56:42', '2017-08-09 23:56:42'),
(2, 2, 5, '2017-08-09 23:56:42', '2017-08-09 23:56:42'),
(3, 2, 7, '2017-08-09 23:56:42', '2017-08-09 23:56:42'),
(4, 2, 8, '2017-08-09 23:56:42', '2017-08-09 23:56:42'),
(5, 2, 12, '2017-08-09 23:56:42', '2017-08-09 23:56:42'),
(6, 4, 5, '2017-08-10 00:08:52', '2017-08-10 00:08:52'),
(7, 4, 6, '2017-08-10 00:08:52', '2017-08-10 00:08:52'),
(8, 4, 26, '2017-08-10 00:08:52', '2017-08-10 00:08:52'),
(9, 4, 27, '2017-08-10 00:08:52', '2017-08-10 00:08:52'),
(10, 4, 31, '2017-08-10 00:08:52', '2017-08-10 00:08:52'),
(11, 1, 2, '2017-08-10 00:17:22', '2017-08-10 00:17:22'),
(12, 1, 15, '2017-08-10 00:17:22', '2017-08-10 00:17:22'),
(13, 1, 26, '2017-08-10 00:17:22', '2017-08-10 00:17:22'),
(14, 1, 40, '2017-08-10 00:17:22', '2017-08-10 00:17:22'),
(15, 1, 41, '2017-08-10 00:17:22', '2017-08-10 00:17:22'),
(16, 1, 42, '2017-08-10 00:17:22', '2017-08-10 00:17:22'),
(17, 5, 5, '2017-08-10 01:59:13', '2017-08-10 01:59:13'),
(18, 5, 6, '2017-08-10 01:59:13', '2017-08-10 01:59:13'),
(19, 5, 27, '2017-08-10 01:59:13', '2017-08-10 01:59:13'),
(20, 5, 31, '2017-08-10 01:59:13', '2017-08-10 01:59:13'),
(21, 5, 60, '2017-08-10 01:59:13', '2017-08-10 01:59:13'),
(22, 5, 61, '2017-08-10 01:59:13', '2017-08-10 01:59:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_obyek`
--

CREATE TABLE `kasus_obyek` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `obyek_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasus_obyek`
--

INSERT INTO `kasus_obyek` (`id`, `kasus_id`, `obyek_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-08-07 00:00:36', '2017-08-07 00:00:36'),
(2, 2, 2, '2017-08-09 23:56:42', '2017-08-09 23:56:42'),
(3, 3, 3, '2017-08-10 00:02:43', '2017-08-10 00:02:43'),
(4, 4, 4, '2017-08-10 00:08:52', '2017-08-10 00:08:52'),
(5, 5, 5, '2017-08-10 01:59:13', '2017-08-10 01:59:13'),
(6, 6, 6, '2017-08-14 01:57:51', '2017-08-14 01:57:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_subyek`
--

CREATE TABLE `kasus_subyek` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `subyek_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kasus_subyek`
--

INSERT INTO `kasus_subyek` (`id`, `kasus_id`, `subyek_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 5, 5, NULL, NULL),
(6, 6, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_surats`
--

CREATE TABLE `kasus_surats` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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
(4, 'DPR', '2017-07-30 04:46:17', '2017-08-04 01:15:21'),
(12, 'Bupati', '2017-07-30 06:24:48', '2017-08-01 07:33:30'),
(14, 'Hakim', '2017-07-30 06:27:22', '2017-08-04 01:15:44'),
(16, 'Jaksa', '2017-08-01 07:30:59', '2017-08-01 07:32:32'),
(17, 'Gubernur', '2017-08-04 01:16:01', '2017-08-04 01:16:01');

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
  `benda_sitaan` varchar(100) DEFAULT '',
  `nilai_kontrak` double DEFAULT NULL,
  `kerugian_negara` double DEFAULT NULL,
  `pemulihan_aset` double DEFAULT NULL,
  `obyek_pidana` varchar(100) DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `obyek`
--

INSERT INTO `obyek` (`id`, `benda_sitaan`, `nilai_kontrak`, `kerugian_negara`, `pemulihan_aset`, `obyek_pidana`, `created_at`, `updated_at`) VALUES
(1, '', NULL, 0, 0, 'fasilitas kredit', '2017-08-07 00:00:36', '2017-08-10 00:17:22'),
(2, '', 200000000000, 0, 0, 'Alat Fitnas SMA', '2017-08-07 01:42:46', '2017-08-09 23:56:41'),
(3, '', 0, 0, 0, 'Fasilitas Kredit', '2017-08-10 00:02:43', '2017-08-10 00:02:43'),
(4, '', NULL, 0, 0, 'Tanah Milik Negara', '2017-08-10 00:04:53', '2017-08-10 00:08:52'),
(5, '', 1, NULL, NULL, 'Keuangan Persero', '2017-08-10 00:54:14', '2017-08-14 02:27:12'),
(6, '', NULL, NULL, NULL, 'Penyertaan Modal', '2017-08-14 01:57:50', '2017-08-14 01:57:50');

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
(1, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 2, 1, NULL, 'Setiap orang yang secara melawan hukum melakukan perbuatan memperkaya diri sendiri atau orang lain yang suatu korporasi yang dapat merugikan keuangan negara atau perekonomian negara, dipidana dengan pidana penjara seumur hidup atau pidana penjara paling singkat 4 (empat) tahun dan paling lama 20 (dua puluh) tahun dan denda paling sedikit Rp. 200.000.000.00 (dua ratus juta rupiah) dan paling banyak Rp. 1.000.000.000,00 (satu miliar rupiah).', 4, 20, 200000000.00, 1000000000.00, 'Kerugian Keuangan Negara', '2017-08-01 08:47:52', '2017-08-03 05:27:32'),
(8, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 2, 2, NULL, 'Dalam hal tindak pidana korupsi sebagaimana dimaksud dalam ayat (1) dilakukan dalam keadaan tertentu pidana mati dapat dijatuhkan.', NULL, NULL, NULL, NULL, 'Kerugian Keuangan Negara', '2017-08-03 05:27:16', '2017-08-03 05:27:16'),
(9, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 5, 1, NULL, 'Dipidana dengan pidana penjara paling singkat 1 (satu) tahun dan paling lama 5 (lima) tahun dan atau pidana denda paling sedikit Rp 50.000.000,00 (lima puluh juta rupiah) dan paling banyak Rp 250.000.000,00 (dua ratus lima puluh juta rupiah) setiap orang yang', 1, 5, 50000000.00, 250000000.00, 'Suap', '2017-08-03 05:28:39', '2017-08-03 05:28:39'),
(10, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 5, 1, 'a', 'memberi atau menjanjikan sesuatu kepada pegawai negeri atau penyelenggara negara dengan maksud supaya pegawai negeri atau penyelenggara negara tersebut berbuat atau tidak berbuat sesuatu dalam jabatannya, yang bertentangan dengan kewajibannya; atau', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:04:08', '2017-08-04 03:04:08'),
(11, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 5, 1, 'b', 'memberi sesuatu kepada pegawai negeri atau penyelenggara negara karena atau berhubungan dengan sesuatu yang bertentangan dengan kewajiban, dilakukan atau tidak dilakukan dalam jabatannya.', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:04:56', '2017-08-04 03:05:14'),
(12, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 5, 2, NULL, 'Bagi pegawai negeri atau penyelenggara negara yang menerima pemberian atau janji sebagaimana dimaksud dalam ayat (1) huruf a atau huruf b, dipidana dengan pidana yang sama sebagaimana dimaksud dalam ayat (1).', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:06:14', '2017-08-04 03:06:14'),
(13, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 6, 1, NULL, 'Dipidana dengan pidana penjara paling singkat 3 (tiga) tahun dan paling lama 15 (lima belas) tahun dan pidana denda paling sedikit Rp 150.000.000,00 (seratus lima puluh juta rupiah) dan paling banyak Rp 750.000.000,00 (tujuh ratus lima puluh juta rupiah) setiap orang yang:', 3, 15, 150000000.00, 750000000.00, 'Suap', '2017-08-04 03:07:43', '2017-08-04 03:07:43'),
(14, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 6, 1, 'a', 'memberi atau menjanjikan sesuatu kepada hakim dengan maksud untuk mempengaruhi putusan perkara yang diserahkan kepadanya untuk diadili; atau', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:08:15', '2017-08-04 03:08:15'),
(15, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 6, 1, 'b', 'memberi atau menjanjikan sesuatu kepada seseorang yang menurut ketentuan peraturan perundang-undangan ditentukan menjadi advokat untuk menghadiri sidang pengadilan dengan maksud untuk mempengaruhi nasihat atau pendapat yang akan diberikan berhubung dengan perkara yang diserahkan kepada pengadilan untuk diadili.', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:08:45', '2017-08-04 03:08:45'),
(16, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 6, 2, NULL, 'Bagi hakim yang menerima pemberian atau janji sebagaimana dimaksud dalam ayat (1) huruf a atau advokat yang menerima pemberian atau janji sebagaimana dimaksud dalam ayat (1) huruf b, dipidana dengan pidana yang sama sebagaimana dimaksud dalam ayat (1)', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:09:31', '2017-08-04 03:09:31'),
(17, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 8, NULL, NULL, 'Dipidana dengan pidana penjara paling singkat 3 (tiga) tahun dan paling lama 15 (lima belas) tahun dan pidana denda paling sedikit Rp 150.000.000,00 (seratus lima puluh juta rupiah) dan paling banyak Rp 750.000.000,00 (tujuh ratus lima puluh juta rupiah), pegawai negeri atau orang selain pegawai negeri yang ditugaskan menjalankan suatu jabatan umum secara terus menerus atau untuk sementara waktu, dengan sengaja menggelapkan uang atau surat berharga yang disimpan karena jabatannya, atau membiarkan uang atau surat berharga tersebut diambil atau digelapkan oleh orang lain, atau membantu dalam melakukan perbuatan tersebut.', 3, 15, 150000000.00, 750000000.00, 'Penggelapan dalam jabatan', '2017-08-04 03:10:45', '2017-08-04 03:10:45'),
(18, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 9, NULL, NULL, 'Dipidana dengan pidana penjara paling singkat 1 (satu) tahun dan paling lama 5 (lima) tahun dan pidana denda paling sedikit Rp 50.000.000,00 (lima puluh juta rupiah) dan paling banyak Rp 250.000.000,00 (dua ratus lima puluh juta rupiah) pegawai negeri atau orang selain pegawai negeri yang diberi tugas menjalankan suatu jabatan umum secara terus menerus atau untuk sementara waktu, dengan sengaja memalsu buku-buku atau daftardaftar yang khusus untuk pemeriksaan administrasi.', 1, 5, 50000000.00, 250000000.00, 'Penggelapan dalam jabatan', '2017-08-04 03:11:23', '2017-08-04 03:11:23'),
(19, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 10, NULL, NULL, 'Dipidana dengan pidana penjara paling singkat 2 (dua) tahun dan paling lama 7 (tujuh) tahun dan pidana denda paling sedikit Rp 100.000.000,00 (seratus juta rupiah) dan paling banyak Rp 350.000.000,00 (tiga ratus lima puluh juta rupiah) pegawai negeri atau orang selain pegawai negeri yang diberi tugas menjalankan suatu jabatan umum secara terus menerus atau untuk sementara waktu, dengan sengaja:', 2, 7, 100000000.00, 350000000.00, 'Penggelapan dalam jabatan', '2017-08-04 03:12:11', '2017-08-04 03:12:11'),
(20, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 10, NULL, 'a', 'menggelapkan, menghancurkan, merusakkan, atau membuat tidak dapat dipakai barang, akta, surat, atau daftar yang digunakan untuk meyakinkan atau membuktikan di muka pejabat yang berwenang, yang dikuasai karena jabatannya; atau', NULL, NULL, NULL, NULL, 'Penggelapan dalam jabatan', '2017-08-04 03:12:39', '2017-08-04 03:12:39'),
(21, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 11, NULL, NULL, 'Dipidana dengan pidana penjara paling singkat 1 (satu) tahun dan paling lama 5 (lima) tahun dan atau pidana denda paling sedikit Rp 50.000.000,00 (lima puluh juta rupiah) dan paling banyak Rp 250.000.000,00 (dua ratus lima puluh juta rupiah) pegawai negeri atau penyelenggara negara yang menerima hadiah atau janji padahal diketahui atau patut diduga, bahwa hadiah atau janji tersebut diberikan karena kekuasaan atau kewenangan yang berhubungan dengan jabatannya, atau yang menurut pikiran orang yang memberikan hadiah atau janji tersebut ada hubungan dengan jabatannya', 1, 5, 50000000.00, 250000000.00, 'Suap', '2017-08-04 03:13:28', '2017-08-04 03:13:28'),
(22, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, NULL, 'Dipidana dengan pidana penjara seumur hidup atau pidana penjara paling singkat 4 (empat) tahun dan paling lama 20 (dua puluh) tahun dan pidana denda paling sedikit Rp 200.000.000,00 (dua ratus juta rupiah) dan paling banyak Rp 1.000.000.000,00 (satu miliar rupiah):', 4, 20, 200000000.00, 1000000000.00, 'Suap', '2017-08-04 03:14:20', '2017-08-04 03:14:20'),
(23, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'a', 'pegawai negeri atau penyelenggara negara yang menerima hadiah atau janji, padahal diketahui atau patut diduga bahwa hadiah atau janji tersebut diberikan untuk menggerakkan agar melakukan atau tidak melakukan sesuatu dalam jabatannya, yang bertentangan dengan kewajibannya;', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:15:01', '2017-08-04 03:15:01'),
(24, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'b', 'pegawai negeri atau penyelenggara negara yang menerima hadiah, padahal diketahui atau patut diduga bahwa hadiah tersebut diberikan sebagai akibat atau disebabkan karena telah melakukan atau tidak melakukan sesuatu dalam jabatannya yang bertentangan dengan kewajibannya;', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:15:25', '2017-08-04 03:15:25'),
(25, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'c', 'hakim yang menerima hadiah atau janji, padahal diketahui atau patut diduga bahwa hadiah atau janji tersebut diberikan untuk mempengaruhi putusan perkara yang diserahkan kepadanya untuk diadili;', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:15:47', '2017-08-04 03:15:47'),
(26, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'd', 'seseorang yang menurut ketentuan peraturan perundang-undangan ditentukan menjadi advokat untuk menghadiri sidang pengadilan, menerima hadiah atau janji, padahal diketahui atau patut diduga bahwa hadiah atau janji tersebut untuk mempengaruhi nasihat atau pendapat yang akan diberikan, berhubung dengan perkara yang diserahkan kepada pengadilan untuk diadili;', NULL, NULL, NULL, NULL, 'Suap', '2017-08-04 03:16:13', '2017-08-04 03:16:13'),
(27, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 13, NULL, NULL, 'Setiap orang yang memberikan hadiah atau janji kepada pegawai negeri dengan mengingat kekuasaan atau wewenang yang melekat pada jabatan atau kedudukannya, atau oleh pemberi hadiah atau janji dianggap melekat pada jabatan atau kedudukan tersebut, dipidana dengan pidana penjara paling lama 3 (tiga) dan atau denda paling banyak Rp. 150.000.000,00 (seratus lima puluh juta rupiah)', NULL, 3, NULL, 150000000.00, 'Suap', '2017-08-04 03:17:26', '2017-08-04 03:17:26'),
(28, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 10, NULL, 'b', 'membiarkan orang lain menghilangkan, menghancurkan, merusakkan, atau membuat tidak dapat dipakai barang, akta, surat, atau daftar tersebut; atau', NULL, NULL, NULL, NULL, 'Penggelapan dalam jabatan', '2017-08-11 03:28:00', '2017-08-11 03:28:00'),
(29, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 10, NULL, 'c', 'membantu orang lain menghilangkan, menghancurkan, merusakkan, atau membuat tidak dapat dipakai barang, akta, surat, atau daftar tersebut.', NULL, NULL, NULL, NULL, 'Penggelapan dalam jabatan', '2017-08-11 03:28:34', '2017-08-11 03:28:34'),
(30, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'e', 'membantu orang lain menghilangkan, menghancurkan, merusakkan, atau membuat tidak dapat dipakai barang, akta, surat, atau daftar tersebut.', NULL, NULL, NULL, NULL, 'Pemerasan - Pungli', '2017-08-11 03:30:20', '2017-08-11 03:30:20'),
(31, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'f', 'pegawai negeri atau penyelenggara negara yang pada waktu menjalankan tugas, meminta, menerima, atau memotong pembayaran kepada pegawai negeri atau penyelenggara negara yang lain atau kepada kas umum, seolah-olah pegawai negeri atau penyelenggara negara yang lain atau kas umum tersebut mempunyai utang kepadanya, padahal diketahui bahwa hal tersebut bukan merupakan utang;', NULL, NULL, NULL, NULL, 'Pemerasan - Pungli', '2017-08-11 03:31:06', '2017-08-11 03:31:06'),
(32, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'g', 'pegawai negeri atau penyelenggara negara yang pada waktu menjalankan tugas, meminta atau menerima pekerjaan, atau penyerahan barang, seolah-olah merupakan utang kepada dirinya, padahal diketahui bahwa hal tersebut bukan merupakan utang;', NULL, NULL, NULL, NULL, 'Pemerasan - Pungli', '2017-08-11 03:31:30', '2017-08-11 03:31:30');

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
  `kategori_subyek_id` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `subyek`
--

INSERT INTO `subyek` (`id`, `judul_surat`, `nama_terlapor`, `tempat_lahir`, `kebangsaan`, `kewarganegaraan`, `tempat_tinggal`, `agama`, `jabatan_resmi`, `jabatan_lain`, `lembaga`, `pendidikan`, `kategori_subyek_id`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PT Bank Sumut Syariah', NULL, NULL, NULL, '1', '2017-08-07 00:00:36', '2017-08-07 00:14:07'),
(2, NULL, 'Karyoto Dina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dinas Pendidikan Menengah Jakarta Selatan, Jakarta Barat dan Jakarta Pusat', NULL, NULL, NULL, '1', '2017-08-07 01:42:46', '2017-08-09 23:56:41'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PT Bank Mandiri', NULL, NULL, NULL, '1', '2017-08-10 00:02:43', '2017-08-10 00:02:43'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PT Adhi Karya', NULL, NULL, NULL, '1', '2017-08-10 00:04:53', '2017-08-10 00:04:53'),
(5, NULL, 'annonym', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PT Pos Indonesis (Persero)', NULL, 1, NULL, '1', '2017-08-10 00:54:14', '2017-08-14 02:27:12'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pemerintah Kabupaten Bengkalis', NULL, NULL, NULL, '1', '2017-08-14 01:57:50', '2017-08-14 01:57:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surats`
--

CREATE TABLE `surats` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `judul_surat` varchar(100) DEFAULT NULL,
  `no_surat_perkara` varchar(100) NOT NULL,
  `tanggal_surat_perkara` datetime NOT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_berhenti` datetime DEFAULT NULL,
  `saran` text,
  `keterangan` text,
  `tipe_surat` char(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `surats`
--

INSERT INTO `surats` (`id`, `kasus_id`, `judul_surat`, `no_surat_perkara`, `tanggal_surat_perkara`, `tanggal_mulai`, `tanggal_berhenti`, `saran`, `keterangan`, `tipe_surat`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'PRINT-123456/2017', '2017-08-09 00:00:00', NULL, NULL, NULL, NULL, 'RP2', '2017-08-13 15:55:13', '2017-08-13 19:05:21'),
(2, 4, NULL, 'Print-06/F.2/Fd.1/01/2016', '2016-01-07 00:00:00', NULL, NULL, NULL, NULL, 'RP2', '2017-08-13 19:12:02', '2017-08-13 20:09:22'),
(3, 1, NULL, 'Print-02/F.2/Fd.1/01/2016', '2016-01-06 00:00:00', NULL, NULL, NULL, NULL, 'RP2', '2017-08-13 19:12:02', '2017-08-13 20:09:22'),
(4, 5, NULL, 'Print-01/F.2/Fd.1/01/2016', '2016-01-28 00:00:00', NULL, NULL, NULL, NULL, 'RP2', '2017-08-13 19:12:02', '2017-08-13 20:09:22'),
(5, 5, NULL, 'Print-01/F.2/Fd.1/01/2016', '2016-01-28 00:00:00', NULL, NULL, NULL, NULL, 'RP3MUM', '2017-08-14 02:27:12', '2017-08-14 02:27:12');

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
(4, '', NULL, '$2y$10$iNsaSiBuz3VnIinz72FkyeAlr4g9BVbV824WL/YbcMryKEl1b0GH6', NULL, 'azuwir@gmail.com', NULL, NULL, NULL, 'wPTxxaEXFl4D5rbqlPNexdFnkUCMXd0iB4TuIYkme1EVh8OYFLZo49LrLZHe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Azuwir Azzurri', '2017-07-28 16:33:14', '2017-07-28 16:33:14'),
(5, '', NULL, '$2y$10$pe3HEouTKkT28u.8v./p.O3Hr3goiqqOA7KK3BVgE2SQab2eLaWE6', NULL, 'tonny@soerojo.com', NULL, NULL, NULL, '3AyjBpXQNgQe2GepUMOIh8hb4AIybKYwX2BKZYQtSircgMirdHWAz8qJ0RGw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tonny H. Soerojo', '2017-08-03 12:26:21', '2017-08-03 12:26:21');

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
-- Indexes for table `kasus_jaksas`
--
ALTER TABLE `kasus_jaksas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasus_obyek`
--
ALTER TABLE `kasus_obyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasus_subyek`
--
ALTER TABLE `kasus_subyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasus_surats`
--
ALTER TABLE `kasus_surats`
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
-- Indexes for table `surats`
--
ALTER TABLE `surats`
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
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jaksas`
--
ALTER TABLE `jaksas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kasus_jaksas`
--
ALTER TABLE `kasus_jaksas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kasus_obyek`
--
ALTER TABLE `kasus_obyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kasus_subyek`
--
ALTER TABLE `kasus_subyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kasus_surats`
--
ALTER TABLE `kasus_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_subyeks`
--
ALTER TABLE `kategori_subyeks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pasals`
--
ALTER TABLE `pasals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subyek`
--
ALTER TABLE `subyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
