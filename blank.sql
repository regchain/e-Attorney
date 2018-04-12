-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2018 pada 22.53
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `admins`;
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
-- Struktur dari tabel `barang_bukti`
--

DROP TABLE IF EXISTS `barang_bukti`;
CREATE TABLE `barang_bukti` (
  `id` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL,
  `obyek_id` int(11) NOT NULL,
  `barang_sitaan` text,
  `nilai_pemulihan_aset` double(15,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jaksas`
--

DROP TABLE IF EXISTS `jaksas`;
CREATE TABLE `jaksas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jaksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar_depan` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pangkat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah_hukum_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

DROP TABLE IF EXISTS `kasus`;
CREATE TABLE `kasus` (
  `id` int(11) NOT NULL,
  `judul_kasus` varchar(250) NOT NULL,
  `lokasi_kejadian` varchar(100) DEFAULT NULL,
  `tanggal_kejadian` date DEFAULT NULL,
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
  `tanggal_surat_pelapor` date DEFAULT NULL,
  `tanggal_surat_diterima` date DEFAULT NULL,
  `pembuat_catatan_surat` varchar(50) DEFAULT NULL,
  `status_rp1` int(1) DEFAULT '1',
  `status_rp2` int(1) NOT NULL DEFAULT '0',
  `status_rp3mum` int(1) NOT NULL DEFAULT '0',
  `status_rp3mum_partial` int(1) NOT NULL DEFAULT '0',
  `status_rp3sus` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_obyek`
--

DROP TABLE IF EXISTS `kasus_obyek`;
CREATE TABLE `kasus_obyek` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `obyek_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_pasal`
--

DROP TABLE IF EXISTS `kasus_pasal`;
CREATE TABLE `kasus_pasal` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `pasal_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_subyek`
--

DROP TABLE IF EXISTS `kasus_subyek`;
CREATE TABLE `kasus_subyek` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `subyek_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_subyeks`
--

DROP TABLE IF EXISTS `kategori_subyeks`;
CREATE TABLE `kategori_subyeks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
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

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obyek`
--

DROP TABLE IF EXISTS `obyek`;
CREATE TABLE `obyek` (
  `id` int(11) NOT NULL,
  `nilai_kontrak` double(15,2) DEFAULT NULL,
  `kerugian_negara` double(15,2) DEFAULT NULL,
  `pemulihan_aset` double(15,2) DEFAULT NULL,
  `obyek_pidana` varchar(100) DEFAULT '',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasals`
--

DROP TABLE IF EXISTS `pasals`;
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumumen`
--

DROP TABLE IF EXISTS `pengumumen`;
CREATE TABLE `pengumumen` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt`
--

DROP TABLE IF EXISTS `spt`;
CREATE TABLE `spt` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `surat_id` int(11) DEFAULT NULL,
  `judul_spt` varchar(100) DEFAULT NULL,
  `no_spt` varchar(100) NOT NULL,
  `tanggal_spt` date NOT NULL,
  `jenis_spt` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt_subyek`
--

DROP TABLE IF EXISTS `spt_subyek`;
CREATE TABLE `spt_subyek` (
  `id` int(11) NOT NULL,
  `spt_id` int(11) NOT NULL,
  `subyek_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subyek`
--

DROP TABLE IF EXISTS `subyek`;
CREATE TABLE `subyek` (
  `id` int(11) NOT NULL,
  `nama_terlapor` varchar(100) DEFAULT NULL,
  `tempat_tinggal` varchar(100) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `lembaga` varchar(100) DEFAULT NULL,
  `jabatan_resmi` varchar(100) DEFAULT NULL,
  `jabatan_lain` varchar(100) DEFAULT NULL,
  `kategori_subyek_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `masa_hukuman_dari` date DEFAULT NULL,
  `masa_hukuman_ke` date DEFAULT NULL,
  `masa_hukuman` int(11) DEFAULT NULL,
  `keterangan` text,
  `foto` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surats`
--

DROP TABLE IF EXISTS `surats`;
CREATE TABLE `surats` (
  `id` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `judul_surat` varchar(255) DEFAULT NULL,
  `no_surat_perkara` varchar(100) NOT NULL,
  `tanggal_surat_perkara` date NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_berhenti` date DEFAULT NULL,
  `saran` text,
  `keterangan` text,
  `tindakan` varchar(100) DEFAULT NULL,
  `tipe_surat` varchar(30) NOT NULL,
  `status_surat` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_jaksa`
--

DROP TABLE IF EXISTS `surat_jaksa`;
CREATE TABLE `surat_jaksa` (
  `id` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL,
  `jaksa_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_obyek`
--

DROP TABLE IF EXISTS `surat_obyek`;
CREATE TABLE `surat_obyek` (
  `id` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL,
  `obyek_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_p15`
--

DROP TABLE IF EXISTS `surat_p15`;
CREATE TABLE `surat_p15` (
  `id` int(11) NOT NULL,
  `surat_id` int(11) DEFAULT NULL,
  `judul_p15` varchar(255) DEFAULT NULL,
  `no_p15` varchar(100) NOT NULL,
  `tanggal_p15` date NOT NULL,
  `jenis_p15` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pasal`
--

DROP TABLE IF EXISTS `surat_pasal`;
CREATE TABLE `surat_pasal` (
  `id` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL,
  `pasal_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
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
(1, '', NULL, '$2y$10$ofnwZu3/v2bgK8zG3ozqde5njTXwzSg3HTGjW3LAiBi1RKUti9Dq6', NULL, 'tonny@soerojo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tonny H. Soerojo', '2018-04-12 20:52:14', '2018-04-12 20:52:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_hukum`
--

DROP TABLE IF EXISTS `wilayah_hukum`;
CREATE TABLE `wilayah_hukum` (
  `id` int(10) UNSIGNED NOT NULL,
  `instansiID` int(11) NOT NULL,
  `sotkkode` varchar(12) NOT NULL,
  `sotknama` varchar(255) NOT NULL,
  `singkatan` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `eselonID` tinyint(4) NOT NULL,
  `isactive` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `barang_bukti`
--
ALTER TABLE `barang_bukti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jaksas`
--
ALTER TABLE `jaksas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus_obyek`
--
ALTER TABLE `kasus_obyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus_pasal`
--
ALTER TABLE `kasus_pasal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus_subyek`
--
ALTER TABLE `kasus_subyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_subyeks`
--
ALTER TABLE `kategori_subyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obyek`
--
ALTER TABLE `obyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasals`
--
ALTER TABLE `pasals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengumumen`
--
ALTER TABLE `pengumumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spt_subyek`
--
ALTER TABLE `spt_subyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subyek`
--
ALTER TABLE `subyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_jaksa`
--
ALTER TABLE `surat_jaksa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_obyek`
--
ALTER TABLE `surat_obyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_p15`
--
ALTER TABLE `surat_p15`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_pasal`
--
ALTER TABLE `surat_pasal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indeks untuk tabel `wilayah_hukum`
--
ALTER TABLE `wilayah_hukum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `barang_bukti`
--
ALTER TABLE `barang_bukti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jaksas`
--
ALTER TABLE `jaksas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kasus_obyek`
--
ALTER TABLE `kasus_obyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kasus_pasal`
--
ALTER TABLE `kasus_pasal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kasus_subyek`
--
ALTER TABLE `kasus_subyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_subyeks`
--
ALTER TABLE `kategori_subyeks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `obyek`
--
ALTER TABLE `obyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pasals`
--
ALTER TABLE `pasals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spt`
--
ALTER TABLE `spt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spt_subyek`
--
ALTER TABLE `spt_subyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `subyek`
--
ALTER TABLE `subyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surats`
--
ALTER TABLE `surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_jaksa`
--
ALTER TABLE `surat_jaksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_obyek`
--
ALTER TABLE `surat_obyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_p15`
--
ALTER TABLE `surat_p15`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_pasal`
--
ALTER TABLE `surat_pasal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
