# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.16)
# Database: homestead
# Generation Time: 2017-07-15 01:55:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table detail_kasus_jaksas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `detail_kasus_jaksas`;

CREATE TABLE `detail_kasus_jaksas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kasus` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `update_from_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;



# Dump of table kasus_subyek
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kasus_subyek`;

CREATE TABLE `kasus_subyek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kasus_id` int(11) NOT NULL,
  `subyek_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_from_ip` varchar(100) DEFAULT '',
  `updated_from_ip` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

LOCK TABLES `kasus_subyek` WRITE;
/*!40000 ALTER TABLE `kasus_subyek` DISABLE KEYS */;

INSERT INTO `kasus_subyek` (`id`, `kasus_id`, `subyek_id`, `created_at`, `updated_at`, `created_from_ip`, `updated_from_ip`)
VALUES
	(1,7,4,'2017-06-18 06:58:38','2017-06-18 06:58:38','::1','::1'),
	(2,9,6,'2017-06-18 07:14:32','2017-06-18 07:14:32','::1','::1'),
	(3,12,7,'2017-06-26 05:41:13','2017-06-26 05:41:13','::1','::1'),
	(4,13,8,'2017-06-26 06:03:40','2017-06-26 06:03:40','::1','::1'),
	(5,14,9,'2017-06-26 06:13:51','2017-06-26 06:13:51','::1','::1'),
	(6,15,10,NULL,NULL,'','');

/*!40000 ALTER TABLE `kasus_subyek` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table detail_kasus_surats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `detail_kasus_surats`;

CREATE TABLE `detail_kasus_surats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kasus` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

LOCK TABLES `detail_kasus_surats` WRITE;
/*!40000 ALTER TABLE `detail_kasus_surats` DISABLE KEYS */;

INSERT INTO `detail_kasus_surats` (`id`, `id_kasus`, `id_surat`, `status`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`)
VALUES
	(1,12,1,'','2017-06-26 05:41:13','2017-06-26 05:41:13','::1','::1'),
	(2,13,2,'','2017-06-26 06:03:40','2017-06-26 06:03:40','::1','::1'),
	(3,14,3,'','2017-06-26 06:13:51','2017-06-26 06:13:51','::1','::1'),
	(4,9,4,'RP2','2017-06-29 00:54:53','2017-06-29 00:54:53','::1','::1'),
	(5,9,5,'RP2','2017-06-29 00:56:50','2017-06-29 00:56:50','::1','::1');

/*!40000 ALTER TABLE `detail_kasus_surats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`, `description`)
VALUES
	(1,'admin','Administrator'),
	(2,'members','General User');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table login_attempts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_02_25_025103_create_admins_table',1),
	(4,'2017_07_04_200027_create_pengumumen_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table pengumumen
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pengumumen`;

CREATE TABLE `pengumumen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table tabel_jaksas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_jaksas`;

CREATE TABLE `tabel_jaksas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jaksa` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_jaksa` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

LOCK TABLES `tabel_jaksas` WRITE;
/*!40000 ALTER TABLE `tabel_jaksas` DISABLE KEYS */;

INSERT INTO `tabel_jaksas` (`id`, `id_jaksa`, `nip`, `nama_jaksa`, `pangkat`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`)
VALUES
	(1,0,'00122345','Akbar Satria P','Jaksa Agung','2017-06-10 12:39:52','2017-06-10 12:44:48','::1','::1'),
	(3,0,'1239809','Budiman','Hakim','2017-06-10 13:04:12','2017-06-10 13:04:12','::1','::1');

/*!40000 ALTER TABLE `tabel_jaksas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kasus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kasus`;

CREATE TABLE `kasus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_from_ip` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kasus` WRITE;
/*!40000 ALTER TABLE `kasus` DISABLE KEYS */;

INSERT INTO `kasus` (`id`, `judul_kasus`, `lokasi_kejadian`, `tanggal_kejadian`, `nama_lengkap`, `alamat`, `kota`, `propinsi`, `kontak_telpon`, `kontak_handphone`, `kontak_email`, `kodepos`, `disposisi`, `kasus_posisi`, `kasimpulan`, `saran`, `status`, `asal_surat`, `no_surat`, `tanggal_surat_pelapor`, `tanggal_surat_diterima`, `pembuat_catatan_surat`, `tanggal_rp2`, `no_surat:rp2`, `created_at`, `updated_at`, `created_from_ip`, `updated_from_ip`)
VALUES
	(5,'Pencurian ban motor di parkiran','Parkiran scbd','0000-00-00 00:00:00','Akbar Satria','JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten','Tangerang',NULL,NULL,NULL,NULL,15144,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-16 10:56:04','2017-06-16 10:56:04','::1','::1'),
	(6,'Penembakan manusia di jalanan','ciledug','2017-10-10 00:00:00','Permadi','JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten','Tangerang',NULL,NULL,NULL,NULL,15144,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-18 06:54:12','2017-06-18 06:54:12','::1','::1'),
	(7,'Korupsi','tangerag','2017-10-10 00:00:00','Supardi','JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten','Tangerang',NULL,NULL,NULL,NULL,15144,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-18 06:58:38','2017-06-18 06:58:38','::1','::1'),
	(8,'Pencurian mobi baru dan membacok orang','bsd','2017-10-10 00:00:00','shabrina','JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten','Tangerang',NULL,NULL,NULL,NULL,15144,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-18 07:12:24','2017-06-18 07:12:24','::1','::1'),
	(9,'','jakarta','2017-10-10 00:00:00','Gilang','JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten','Tangerang',NULL,NULL,NULL,NULL,15144,NULL,'',NULL,NULL,'RP2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-18 07:14:32','2017-06-29 00:56:50','::1','::1'),
	(10,'perampokan','tangerang','2017-08-09 00:00:00','Akbar satria','Kmp. Pepabri','Tangerang',NULL,NULL,NULL,NULL,14155,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-26 05:39:20','2017-06-26 05:39:20','::1','::1'),
	(11,'perampokan','tangerang','2017-08-09 00:00:00','Akbar satria','Kmp. Pepabri','Tangerang',NULL,NULL,NULL,NULL,14155,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-26 05:40:41','2017-06-26 05:40:41','::1','::1'),
	(12,'perampokan','tangerang','2017-08-09 00:00:00','Akbar satria','Kmp. Pepabri','Tangerang',NULL,NULL,NULL,NULL,14155,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-26 05:41:13','2017-06-26 05:41:13','::1','::1'),
	(13,'Perampokan begal di serpong','banten','2017-04-09 00:00:00','Akbar Satria','JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten','Tangerang',NULL,NULL,NULL,NULL,15144,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-26 06:03:40','2017-06-26 06:03:40','::1','::1'),
	(14,'Pengambilan dana amal','banten','2017-01-03 00:00:00','Akbar Satria','JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten','Tangerang',NULL,NULL,NULL,NULL,15144,NULL,NULL,NULL,NULL,'kasus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-26 06:13:51','2017-06-26 06:13:51','::1','::1'),
	(15,'curi mobil cimahi',NULL,NULL,NULL,'cimahi','cimahi','jabar','78787','9879798','ratrst@arst.com',345345,'arstarts','kasuss posisi cimahi',NULL,NULL,'3','surat cimahi','234234','2017-07-04 00:00:00',NULL,'budi',NULL,NULL,'2017-07-15 01:54:19','2017-07-15 01:54:39','','');

/*!40000 ALTER TABLE `kasus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tabel_kategori_subyeks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_kategori_subyeks`;

CREATE TABLE `tabel_kategori_subyeks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_subyek` int(11) NOT NULL,
  `kategori_subyek` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

LOCK TABLES `tabel_kategori_subyeks` WRITE;
/*!40000 ALTER TABLE `tabel_kategori_subyeks` DISABLE KEYS */;

INSERT INTO `tabel_kategori_subyeks` (`id`, `id_kategori_subyek`, `kategori_subyek`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`)
VALUES
	(2,0,'UPS','2017-06-10 13:55:13','2017-06-10 13:55:13','::1','::1');

/*!40000 ALTER TABLE `tabel_kategori_subyeks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table obyek
# ------------------------------------------------------------

DROP TABLE IF EXISTS `obyek`;

CREATE TABLE `obyek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kasus_id` int(11) DEFAULT NULL,
  `benda_sitaan` varchar(100) DEFAULT '',
  `nilai_kontrak` varchar(100) DEFAULT '',
  `kerugian_negara` varchar(100) DEFAULT '',
  `pemulihan_aset` varchar(100) DEFAULT '',
  `obyek_pidana` varchar(100) DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_from_ip` varchar(100) DEFAULT '',
  `updated_from_ip` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

LOCK TABLES `obyek` WRITE;
/*!40000 ALTER TABLE `obyek` DISABLE KEYS */;

INSERT INTO `obyek` (`id`, `kasus_id`, `benda_sitaan`, `nilai_kontrak`, `kerugian_negara`, `pemulihan_aset`, `obyek_pidana`, `created_at`, `updated_at`, `created_from_ip`, `updated_from_ip`)
VALUES
	(1,NULL,'','123123','','','asdadsasd','2017-06-29 00:56:50','2017-06-29 00:56:50','::1','::1'),
	(2,15,'','8','','','mobil','2017-07-15 01:54:19','2017-07-15 01:54:40','','');

/*!40000 ALTER TABLE `obyek` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tabel_pasals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_pasals`;

CREATE TABLE `tabel_pasals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasal` int(11) NOT NULL,
  `ayat` varchar(100) NOT NULL,
  `keterangan` varchar(350) NOT NULL,
  `jumlah_masa_hukuman` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

LOCK TABLES `tabel_pasals` WRITE;
/*!40000 ALTER TABLE `tabel_pasals` DISABLE KEYS */;

INSERT INTO `tabel_pasals` (`id`, `id_pasal`, `ayat`, `keterangan`, `jumlah_masa_hukuman`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`)
VALUES
	(1,0,'378','Pencurian','2','2017-06-10 13:50:34','2017-06-10 13:50:34','::1','::1');

/*!40000 ALTER TABLE `tabel_pasals` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table subyek
# ------------------------------------------------------------

DROP TABLE IF EXISTS `subyek`;

CREATE TABLE `subyek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_from_ip` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

LOCK TABLES `subyek` WRITE;
/*!40000 ALTER TABLE `subyek` DISABLE KEYS */;

INSERT INTO `subyek` (`id`, `judul_surat`, `nama_terlapor`, `tempat_lahir`, `kebangsaan`, `kewarganegaraan`, `tempat_tinggal`, `agama`, `jabatan_resmi`, `jabatan_lain`, `lembaga`, `pendidikan`, `kategori_subyek`, `keterangan`, `status`, `no_surat_rp2`, `tanggal_rp2`, `created_at`, `updated_at`, `created_from_ip`, `updated_from_ip`)
VALUES
	(2,NULL,'Budi dharmawan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mentri keuangan',NULL,'Pengacara',NULL,'',NULL,NULL,'2017-06-16 10:56:04','2017-06-16 10:56:04','::1','::1'),
	(3,NULL,'Rahmt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kejakasaan',NULL,'PNS',NULL,'',NULL,NULL,'2017-06-18 06:54:12','2017-06-18 06:54:12','::1','::1'),
	(4,NULL,'Surdi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'keuangan',NULL,'Hakim',NULL,'',NULL,NULL,'2017-06-18 06:58:38','2017-06-18 06:58:38','::1','::1'),
	(6,NULL,'Dimas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'kehutanan',NULL,'Hakim',NULL,'',NULL,NULL,'2017-06-18 07:14:32','2017-06-29 00:56:50','::1','::1'),
	(7,NULL,'Budiman',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kementrian dalam negri',NULL,'PNS',NULL,'',NULL,NULL,'2017-06-26 05:41:13','2017-06-26 05:41:13','::1','::1'),
	(8,NULL,'Bagus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kementrian Olahraga ',NULL,'PNS',NULL,'',NULL,NULL,'2017-06-26 06:03:40','2017-06-26 06:03:40','::1','::1'),
	(9,NULL,'Bima',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kejaksaan',NULL,'Hakim',NULL,'',NULL,NULL,'2017-06-26 06:13:51','2017-06-26 06:13:51','::1','::1'),
	(10,NULL,'dudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'kafe',NULL,NULL,NULL,'2','rp2 no','2017-07-19 00:00:00','2017-07-15 01:54:19','2017-07-15 01:54:40','','');

/*!40000 ALTER TABLE `subyek` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tabel_surats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_surats`;

CREATE TABLE `tabel_surats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_from_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

LOCK TABLES `tabel_surats` WRITE;
/*!40000 ALTER TABLE `tabel_surats` DISABLE KEYS */;

INSERT INTO `tabel_surats` (`id`, `id_surat`, `judul_surat`, `no_surat`, `tanggal_surat`, `tanggal_mulai`, `tanggal_berhenti`, `saran`, `keterangan`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`)
VALUES
	(1,0,'perampokan','nomor surat 1234562','2017-08-09 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','','2017-06-26 05:41:13','2017-06-26 05:41:13','::1','::1'),
	(2,0,'Perampokan begal di serpong','3f/90/8ui','2017-04-09 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','','2017-06-26 06:03:40','2017-06-26 06:03:40','::1','::1'),
	(3,0,'Pengambilan dana amal','3g/4g/5h/6j','2017-01-03 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','','2017-06-26 06:13:51','2017-06-26 06:13:51','::1','::1'),
	(4,0,'','','2017-05-19 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','','2017-06-29 00:54:53','2017-06-29 00:54:53','::1','::1'),
	(5,0,'','','2017-05-19 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','','2017-06-29 00:56:50','2017-06-29 00:56:50','::1','::1');

/*!40000 ALTER TABLE `tabel_surats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) DEFAULT '',
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned DEFAULT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `name`, `updated_at`, `created_at`)
VALUES
	(1,'127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,NULL,NULL,1268889823,1499436520,1,'Admin','istrator','ADMIN','0',NULL,NULL,NULL),
	(2,'::1','Akbar','$2y$08$Up/1UzTNZZgZkjM0xywQX.G2u0YCaYf1zUT7HGd6HcI17hmNNa55G',NULL,'akbar@akbar.com',NULL,NULL,NULL,NULL,1494078910,1497079982,1,'akbar','satria permadi',NULL,'081297018587',NULL,NULL,NULL),
	(3,'',NULL,'$2y$10$8fv5Ue0J72xW5duCqCt1qegdGrjj1zh8yIAJ.S31HzULk5oBgjVeC',NULL,'rahmat.awaludin@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rahmat Awaludin','2017-07-15 01:53:00','2017-07-15 01:53:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`)
VALUES
	(1,1,1),
	(2,1,2),
	(4,2,1);

/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
