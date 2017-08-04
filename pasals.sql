-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Inang: localhost:3306
-- Waktu pembuatan: 04 Agu 2017 pada 07.55
-- Versi Server: 5.5.54-38.7-log
-- Versi PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `openlaw_ejampidsus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasals`
--

DROP TABLE IF EXISTS `pasals`;
CREATE TABLE IF NOT EXISTS `pasals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=26 ;

--
-- Truncate table before insert `pasals`
--

TRUNCATE TABLE `pasals`;
--
-- Dumping data untuk tabel `pasals`
--

INSERT INTO `pasals` (`id`, `undang_undang`, `pasal`, `ayat`, `huruf`, `keterangan`, `masa_hukuman_min`, `masa_hukuman_max`, `denda_min`, `denda_max`, `kategori_pasal`, `created_at`, `updated_at`) VALUES
(1, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 2, 1, NULL, 'Setiap orang yang secara melawan hukum melakukan perbuatan memperkaya diri sendiri atau orang lain yang suatu korporasi yang dapat merugikan keuangan negara atau perekonomian negara, dipidana dengan pidana penjara seumur hidup atau pidana penjara paling singkat 4 (empat) tahun dan paling lama 20 (dua puluh) tahun dan denda paling sedikit Rp. 200.000.000.00 (dua ratus juta rupiah) dan paling banyak Rp. 1.000.000.000,00 (satu miliar rupiah).', 4, 20, 200000000.00, 1000000000.00, 'Kerugian Keuangan Negara', '2017-08-01 08:47:52', '2017-08-03 04:50:09'),
(6, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 2, 2, NULL, 'Dalam hal tindak pidana korupsi sebagaimana dimaksud dalam ayat (1) dilakukan dalam keadaan tertentu pidana mati dapat dijatuhkan.', NULL, NULL, NULL, NULL, 'Kerugian Keuangan Negara', '2017-08-03 04:49:04', '2017-08-03 04:49:04'),
(7, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 5, 1, NULL, 'Dipidana dengan pidana penjara paling singkat 1 (satu) tahun dan paling lama 5 (lima) tahun dan atau pidana denda paling sedikit Rp 50.000.000,00 (lima puluh juta rupiah) dan paling banyak Rp 250.000.000,00 (dua ratus lima puluh juta rupiah) setiap orang yang:', 1, 5, 50000000.00, 250000000.00, 'Suap', '2017-08-03 04:55:57', '2017-08-03 04:55:57'),
(8, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 5, 1, 'a', 'memberi atau menjanjikan sesuatu kepada pegawai negeri atau penyelenggara negara dengan maksud supaya pegawai negeri atau penyelenggara negara tersebut berbuat atau tidak berbuat sesuatu dalam jabatannya, yang bertentangan dengan kewajibannya; atau', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:00:43', '2017-08-03 05:00:43'),
(9, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 5, 1, 'b', 'memberi sesuatu kepada pegawai negeri atau penyelenggara negara karena atau berhubungan dengan sesuatu yang bertentangan dengan kewajiban, dilakukan atau tidak dilakukan dalam jabatannya.', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:01:26', '2017-08-03 05:01:26'),
(10, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 5, 2, NULL, 'Bagi pegawai negeri atau penyelenggara negara yang menerima pemberian atau janji sebagaimana dimaksud dalam ayat (1) huruf a atau huruf b, dipidana dengan pidana yang sama sebagaimana dimaksud dalam ayat (1).', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:10:54', '2017-08-03 05:10:54'),
(11, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 6, 1, NULL, 'Dipidana dengan pidana penjara paling singkat 3 (tiga) tahun dan paling lama 15 (lima belas) tahun dan pidana denda paling sedikit Rp 150.000.000,00 (seratus lima puluh juta rupiah) dan paling banyak Rp 750.000.000,00 (tujuh ratus lima puluh juta rupiah) setiap orang yang:', 3, 15, 150000000.00, 750000000.00, 'Suap', '2017-08-03 05:14:20', '2017-08-03 05:14:20'),
(12, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 6, 1, 'a', 'memberi atau menjanjikan sesuatu kepada hakim dengan maksud untuk mempengaruhi putusan perkara yang diserahkan kepadanya untuk diadili; atau', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:17:13', '2017-08-03 05:17:13'),
(13, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 6, 1, 'b', 'memberi atau menjanjikan sesuatu kepada seseorang yang menurut ketentuan peraturan perundang-undangan ditentukan menjadi advokat untuk menghadiri sidang pengadilan dengan maksud untuk mempengaruhi nasihat atau pendapat yang akan diberikan berhubung dengan perkara yang diserahkan kepada pengadilan untuk diadili.', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:17:49', '2017-08-03 05:17:49'),
(14, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 6, 2, NULL, 'Bagi hakim yang menerima pemberian atau janji sebagaimana dimaksud dalam ayat (1) huruf a atau advokat yang menerima pemberian atau janji sebagaimana dimaksud dalam ayat (1) huruf b, dipidana dengan pidana yang sama sebagaimana dimaksud dalam ayat (1).', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:19:39', '2017-08-03 05:19:39'),
(15, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 11, NULL, NULL, 'Dipidana dengan pidana penjara paling singkat 1 (satu) tahun dan paling lama 5 (lima) tahun dan atau pidana denda paling sedikit Rp 50.000.000,00 (lima puluh juta rupiah) dan paling banyak Rp 250.000.000,00 (dua ratus lima puluh juta rupiah) pegawai negeri atau penyelenggara negara yang menerima hadiah atau janji padahal diketahui atau patut diduga, bahwa hadiah atau janji tersebut diberikan karena kekuasaan atau kewenangan yang berhubungan dengan jabatannya, atau yang menurut pikiran orang yang memberikan hadiah atau janji tersebut ada hubungan dengan jabatannya', 1, 5, 50000000.00, 250000000.00, 'Suap', '2017-08-03 05:21:43', '2017-08-03 05:21:43'),
(16, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, NULL, 'Dipidana dengan pidana penjara seumur hidup atau pidana penjara paling singkat 4 (empat) tahun dan paling lama 20 (dua puluh) tahun dan pidana denda paling sedikit Rp 200.000.000,00 (dua ratus juta rupiah) dan paling banyak Rp 1.000.000.000,00 (satu miliar rupiah):', 4, 20, 200000000.00, 1000000000.00, 'Suap', '2017-08-03 05:23:09', '2017-08-03 05:23:09'),
(17, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'a', 'pegawai negeri atau penyelenggara negara yang menerima hadiah atau janji, padahal diketahui atau patut diduga bahwa hadiah atau janji tersebut diberikan untuk menggerakkan agar melakukan atau tidak melakukan sesuatu dalam jabatannya, yang bertentangan dengan kewajibannya;', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:24:00', '2017-08-03 05:24:00'),
(18, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'b', 'pegawai negeri atau penyelenggara negara yang menerima hadiah, padahal diketahui atau patut diduga bahwa hadiah tersebut diberikan sebagai akibat atau disebabkan karena telah melakukan atau tidak melakukan sesuatu dalam jabatannya yang bertentangan dengan kewajibannya;', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:24:20', '2017-08-03 05:24:20'),
(19, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'c', 'hakim yang menerima hadiah atau janji, padahal diketahui atau patut diduga bahwa hadiah atau janji tersebut diberikan untuk mempengaruhi putusan perkara yang diserahkan kepadanya untuk diadili;', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:24:43', '2017-08-03 05:24:43'),
(20, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 12, NULL, 'd', 'seseorang yang menurut ketentuan peraturan perundang-undangan ditentukan menjadi advokat untuk menghadiri sidang pengadilan, menerima hadiah atau janji, padahal diketahui atau patut diduga bahwa hadiah atau janji tersebut untuk mempengaruhi nasihat atau pendapat yang akan diberikan, berhubung dengan perkara yang diserahkan kepada pengadilan untuk diadili;', NULL, NULL, NULL, NULL, 'Suap', '2017-08-03 05:26:12', '2017-08-03 05:26:12'),
(21, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 13, NULL, NULL, 'Setiap orang yang memberikan hadiah atau janji kepada pegawai negeri dengan mengingat kekuasaan atau wewenang yang melekat pada jabatan atau kedudukannya, atau oleh pemberi hadiah atau janji dianggap melekat pada jabatan atau kedudukan tersebut, dipidana dengan pidana penjara paling lama 3 (tiga) dan atau denda paling banyak Rp. 150.000.000,00 (seratus lima puluh juta rupiah', NULL, 3, NULL, 150000000.00, 'Suap', '2017-08-03 05:28:52', '2017-08-03 05:28:52'),
(22, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 8, NULL, NULL, 'Dipidana dengan pidana penjara paling singkat 3 (tiga) tahun dan paling lama 15 (lima belas) tahun dan pidana denda paling sedikit Rp 150.000.000,00 (seratus lima puluh juta rupiah) dan paling banyak Rp 750.000.000,00 (tujuh ratus lima puluh juta rupiah), pegawai negeri atau orang selain pegawai negeri yang ditugaskan menjalankan suatu jabatan umum secara terus menerus atau untuk sementara waktu, dengan sengaja menggelapkan uang atau surat berharga yang disimpan karena jabatannya, atau membiarkan uang atau surat berharga tersebut diambil atau digelapkan oleh orang lain, atau membantu dalam melakukan perbuatan tersebut.', 3, 15, 150000000.00, 750000000.00, 'Penggelapan dalam jabatan', '2017-08-03 05:48:47', '2017-08-03 05:53:10'),
(23, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 9, NULL, NULL, 'Dipidana dengan pidana penjara paling singkat 1 (satu) tahun dan paling lama 5 (lima) tahun dan pidana denda paling sedikit Rp 50.000.000,00 (lima puluh juta rupiah) dan paling banyak Rp 250.000.000,00 (dua ratus lima puluh juta rupiah) pegawai negeri atau orang selain pegawai negeri yang diberi tugas menjalankan suatu jabatan umum secara terus menerus atau untuk sementara waktu, dengan sengaja memalsu buku-buku atau daftardaftar yang khusus untuk pemeriksaan administrasi.', 3, 5, 150000000.00, 750000000.00, 'Penggelapan dalam jabatan', '2017-08-03 05:49:57', '2017-08-03 05:53:35'),
(24, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 10, NULL, 'a', 'menggelapkan, menghancurkan, merusakkan, atau membuat tidak dapat dipakai barang, akta, surat, atau daftar yang digunakan untuk meyakinkan atau membuktikan di muka pejabat yang berwenang, yang dikuasai karena jabatannya; atau', NULL, NULL, NULL, NULL, 'Penggelapan dalam jabatan', '2017-08-03 05:50:49', '2017-08-03 05:50:49'),
(25, 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', 10, NULL, NULL, 'Dipidana dengan pidana penjara paling singkat 2 (dua) tahun dan paling lama 7 (tujuh) tahun dan pidana denda paling sedikit Rp 100.000.000,00 (seratus juta rupiah) dan paling banyak Rp 350.000.000,00 (tiga ratus lima puluh juta rupiah) pegawai negeri atau orang selain pegawai negeri yang diberi tugas menjalankan suatu jabatan umum secara terus menerus atau untuk sementara waktu, dengan sengaja:', 2, 7, 100000000.00, 350000000.00, 'Penggelapan dalam jabatan', '2017-08-03 05:52:08', '2017-08-03 05:52:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
