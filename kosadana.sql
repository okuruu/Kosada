-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table kosadana.detail_kredit
CREATE TABLE IF NOT EXISTS `detail_kredit` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NO_KREDIT` text DEFAULT NULL,
  `NAMA` varchar(200) DEFAULT NULL,
  `NOMINAL` varchar(255) DEFAULT NULL,
  `KASBON` varchar(255) DEFAULT NULL,
  `JATUH_TEMPO` date DEFAULT NULL,
  `LUNAS` enum('Sudah','Belum') DEFAULT 'Belum',
  `STATUS` enum('Active','Inactive') DEFAULT 'Active',
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kosadana.detail_kredit: ~29 rows (approximately)
/*!40000 ALTER TABLE `detail_kredit` DISABLE KEYS */;
INSERT INTO `detail_kredit` (`ID`, `NO_KREDIT`, `NAMA`, `NOMINAL`, `KASBON`, `JATUH_TEMPO`, `LUNAS`, `STATUS`, `UPDATED_AT`, `CREATED_AT`) VALUES
	(1, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-01-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(2, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-02-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(3, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-03-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(4, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-04-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(5, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-05-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(6, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-06-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(7, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-07-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(8, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-08-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(9, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-09-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(10, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-10-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(11, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-11-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(12, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1970-12-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(13, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1971-01-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(14, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1971-02-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(15, 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', '2', '11666666.666666666', NULL, '1971-03-01', 'Belum', 'Active', '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(16, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2021-10-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(17, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2021-11-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(18, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2021-12-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(19, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-01-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(20, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-02-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(21, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-03-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(22, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-04-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(23, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-05-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(24, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-06-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(25, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-07-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(26, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-08-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(27, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-09-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(28, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-10-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47'),
	(29, 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', '1', '3642857.1428571427', NULL, '2022-11-26', 'Belum', 'Active', '2021-10-13 06:29:47', '2021-10-13 06:29:47');
/*!40000 ALTER TABLE `detail_kredit` ENABLE KEYS */;

-- Dumping structure for table kosadana.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kosadana.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table kosadana.kredit
CREATE TABLE IF NOT EXISTS `kredit` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `JENIS_KREDIT` varchar(100) DEFAULT NULL,
  `NO_KREDIT` text DEFAULT NULL,
  `NAMA` varchar(200) DEFAULT NULL,
  `ALAMAT` varchar(255) DEFAULT NULL,
  `MARKETING` varchar(50) DEFAULT NULL,
  `JUMLAH_PENGAJUAN` bigint(20) DEFAULT NULL,
  `JANGKA_WAKTU` tinyint(4) DEFAULT NULL,
  `JATUH_TEMPO` date DEFAULT NULL,
  `KETERANGAN` text DEFAULT NULL,
  `STATUS` enum('Yes','No') DEFAULT NULL,
  `LUNAS_BRP` tinyint(4) DEFAULT 0,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kosadana.kredit: ~2 rows (approximately)
/*!40000 ALTER TABLE `kredit` DISABLE KEYS */;
INSERT INTO `kredit` (`ID`, `JENIS_KREDIT`, `NO_KREDIT`, `NAMA`, `ALAMAT`, `MARKETING`, `JUMLAH_PENGAJUAN`, `JANGKA_WAKTU`, `JATUH_TEMPO`, `KETERANGAN`, `STATUS`, `LUNAS_BRP`, `UPDATED_AT`, `CREATED_AT`) VALUES
	(1, '15', 'KRD_13_Oct_2021_kSCNmeh587RFCTZmZ0uMsu3k4YHQSInkCSVnKa3x', 'Altair Ibn Al Lahad', 'JL. Sawojajar', 'BCA 2', 100000000, 15, NULL, NULL, 'Yes', 0, '2021-10-13 06:29:20', '2021-10-13 06:29:20'),
	(2, '14', 'KRD_13_Oct_2021_NxIdKVZKhviYgpFaOgI6uM03ZyXKYSTaAWc5NCab', 'Odi', 'JL. Plaosan Timur', 'TGL 25', 30000000, 14, '2021-10-26', NULL, 'Yes', 0, '2021-10-13 06:29:47', '2021-10-13 06:29:47');
/*!40000 ALTER TABLE `kredit` ENABLE KEYS */;

-- Dumping structure for table kosadana.member
CREATE TABLE IF NOT EXISTS `member` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(255) DEFAULT NULL,
  `ALAMAT` varchar(255) DEFAULT NULL,
  `KOTA` varchar(100) DEFAULT NULL,
  `PROVINSI` varchar(100) DEFAULT NULL,
  `TELEPON` varchar(20) DEFAULT NULL,
  `KTP` varchar(50) DEFAULT NULL,
  `PIN_ATM` varchar(100) DEFAULT NULL,
  `GENDER` enum('Pria','Wanita') NOT NULL DEFAULT 'Pria',
  `DATA_MARKETING` varchar(50) DEFAULT NULL,
  `PEKERJAAN` varchar(255) DEFAULT NULL,
  `REKOMENDASI_DARI` varchar(255) DEFAULT NULL,
  `KETERANGAN` text DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `KTP` (`KTP`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kosadana.member: ~2 rows (approximately)
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`ID`, `NAMA`, `ALAMAT`, `KOTA`, `PROVINSI`, `TELEPON`, `KTP`, `PIN_ATM`, `GENDER`, `DATA_MARKETING`, `PEKERJAAN`, `REKOMENDASI_DARI`, `KETERANGAN`, `UPDATED_AT`, `CREATED_AT`) VALUES
	(1, 'Odi', 'JL. Plaosan Timur', 'Malang', 'Jawa Timur', '628984170335', '3573011203980009', '126089', 'Pria', 'TGL 25', 'Web Developer', NULL, NULL, '2021-10-13 06:18:50', '2021-10-13 06:18:50'),
	(2, 'Altair Ibn Al Lahad', 'JL. Sawojajar', 'Acre', 'Arab', '6285709802243', '8765125478546772', '159087', 'Pria', 'BCA 2', 'Assassin', NULL, NULL, '2021-10-13 06:20:14', '2021-10-13 06:20:14');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;

-- Dumping structure for table kosadana.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kosadana.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_09_15_205419_member', 1),
	(6, '2021_09_15_205447_kredit', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table kosadana.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kosadana.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table kosadana.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kosadana.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table kosadana.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kosadana.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Odi', 'admin@admin.com', '2021-09-28 17:23:57', '$2y$10$q9lK7yh85Eoqj8eLKUuOgOlK3JzxkjjganlN.t5ifDsk7aU6WwFD2', NULL, '2021-09-28 17:23:58', '2021-09-28 17:23:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
