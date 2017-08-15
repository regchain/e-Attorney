# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.28)
# Database: openlaw_elpidsus
# Generation Time: 2017-08-10 23:58:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table jaksas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jaksas`;

CREATE TABLE `jaksas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jaksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `jaksas` WRITE;
/*!40000 ALTER TABLE `jaksas` DISABLE KEYS */;

INSERT INTO `jaksas` (`id`, `nip`, `nama_jaksa`, `pangkat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, '1', 'Adi Sutanto SH.MH', 'Jaksa', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2', 'Achmad Hariyano SH.MH', 'Jaksa', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '3', 'Agung Arifianto SH.MH', 'Jaksa', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '4', 'Agus Khairudin SH.MH', 'Jaksa', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '5', 'Agus Widodo SH.MH', 'Jaksa', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '6', 'Agus Wirawan Eko Saputro SH.MH', 'Jaksa', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '7', 'Akhmad Mudhor SH.MH', 'Jaksa', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '8', 'Andi Herman SH.MH', 'Jaksa', '8', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '9', 'Anthony Nainggolan SH.MH', 'Jaksa', '9', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '10', 'Arif Susanto SH.MH', 'Jaksa', '10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '11', 'Bambang Sunoto SH.MH', 'Jaksa', '11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '12', 'Chandra Kusumah B SH.MH', 'Jaksa', '12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '13', 'Damha SH.MH', 'Jaksa', '13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '14', 'Endi Sulistiyo SH', 'Jaksa', '14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '15', 'Eryana Ganda Nugraha SH.M.Hum', 'Jaksa', '15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '16', 'Faizal Banu SH.MH', 'Jaksa', '16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '17', 'Farida Puspitasari SH.MH', 'Jaksa', '17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '18', 'Fathoni Hatam SH.MH', 'Jaksa', '18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '19', 'Fauzal SH. MH.', 'Jaksa', '19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '20', 'Fernando Simbolon SH.M.Hum', 'Jaksa', '20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '21', 'Firdaus Dewilmar SH.MH', 'Jaksa', '21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '22', 'G. Sophan Syarif SH', 'Jaksa', '22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '23', 'Ginanjar Cahya Permana SH.MH', 'Jaksa', '23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '24', 'Gunawan Sumarsono SH', 'Jaksa', '24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '25', 'Haryoko Ari Wibwowo SH. MH', 'Jaksa', '25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '26', 'Haryono SH.MH', 'Jaksa', '26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '27', 'Heddy Heddiyanto S SH.MH', 'Jaksa', '27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '28', 'Hendra Syarbaini SH.MH', 'Jaksa', '28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '29', 'Hendry Marulitua SH.MH', 'Jaksa', '29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '30', 'Heru Murjianto SH.MH', 'Jaksa', '30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '31', 'Husin Fahmi SH.MH', 'Jaksa', '31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '32', 'I.G. Punia Atmaja NR SH.MH', 'Jaksa', '32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '33', 'IBN. Wiswantanu SH.MH', 'Jaksa', '33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '34', 'Imam Rahmat Saputra SH.MH', 'Jaksa', '34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '35', 'Indrawan Panacitra SH.MH', 'Jaksa', '35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '36', 'Ipat Fatmawati SH.MH', 'Jaksa', '36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '37', 'Jimmy Didi Setiawan SH.MH', 'Jaksa', '37', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '38', 'Juli Isnur SH.MH', 'Jaksa', '38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '39', 'Junaidi SH', 'Jaksa', '39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '40', 'Mardatilla SH.MH', 'Jaksa', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '41', 'Muhammad Yusuf Putra SH', 'Jaksa', '41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '42', 'Muhammad Zubair SH.MH', 'Jaksa', '42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '43', 'Ni Wayan Kencanawati SH.MH', 'Jaksa', '43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '44', 'Nophy Tennophero Suoth SH.MH', 'Jaksa', '44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '45', 'Pathor Rahman SH.MH', 'Jaksa', '45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '46', 'R.M. Rachmat Zachry SH.MH', 'Jaksa', '46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '47', 'Reinhard Tololiu SH.MH', 'Jaksa', '47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '48', 'Revanda Sitepu SH', 'Jaksa', '48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '49', 'Rudi Prabowo Adji SH.MH', 'Jaksa', '49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '50', 'Sapta Putra SH.MH', 'Jaksa', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '51', 'Sefran Haryadi SH.MH', 'Jaksa', '51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '52', 'Siswhandono SH.MH', 'Jaksa', '52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '53', 'Susanto Gani SH.', 'Jaksa', '53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '54', 'Susilo Hadi SH.MH', 'Jaksa', '54', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '55', 'Widagdo Mulyono Perus SH.MH', 'Jaksa', '55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '56', 'Wilyanto SH.MH', 'Jaksa', '56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '57', 'Yogiswara SH.MH', 'Jaksa', '57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '58', 'Yopy Adriansyah SH.MH', 'Jaksa', '58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '59', 'Zulkifly Noor SH.MH', 'Jaksa', '59', '0000-00-00 00:00:00', '0000-00-00 00:00:00');


/*!40000 ALTER TABLE `jaksas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
