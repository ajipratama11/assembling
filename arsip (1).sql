-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2020 pada 14.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `archived_documents`
--

CREATE TABLE `archived_documents` (
  `ad_id` char(10) NOT NULL,
  `ad_sid` char(10) NOT NULL,
  `ad_ijazah` enum('Ada','Tidak Ada') DEFAULT NULL,
  `ad_ijazah_added_at` timestamp NULL DEFAULT NULL,
  `ad_ijazah_borrowed_at` timestamp NULL DEFAULT NULL,
  `ad_ijazah_returned_at` timestamp NULL DEFAULT NULL,
  `ad_ijazah_added_by` varchar(50) DEFAULT NULL,
  `ad_ijazah_borrowed_by` varchar(50) DEFAULT NULL,
  `ad_ijazah_returned_by` varchar(50) DEFAULT NULL,
  `ad_skhun` enum('Ada','Tidak Ada') DEFAULT NULL,
  `ad_skhun_added_at` timestamp NULL DEFAULT NULL,
  `ad_skhun_borrowed_at` timestamp NULL DEFAULT NULL,
  `ad_skhun_returned_at` timestamp NULL DEFAULT NULL,
  `ad_skhun_added_by` varchar(50) DEFAULT NULL,
  `ad_skhun_borrowed_by` varchar(50) DEFAULT NULL,
  `ad_skhun_returned_by` varchar(50) DEFAULT NULL,
  `ad_kk` enum('Ada','Tidak Ada') DEFAULT NULL,
  `ad_kk_added_at` timestamp NULL DEFAULT NULL,
  `ad_kk_added_by` varchar(50) DEFAULT NULL,
  `ad_ktpa` enum('Ada','Tidak Ada') DEFAULT NULL,
  `ad_ktpa_added_at` timestamp NULL DEFAULT NULL,
  `ad_ktpa_added_by` varchar(50) DEFAULT NULL,
  `ad_ktpi` enum('Ada','Tidak Ada') DEFAULT NULL,
  `ad_ktpi_added_at` timestamp NULL DEFAULT NULL,
  `ad_ktpi_added_by` varchar(50) DEFAULT NULL,
  `ad_kips` enum('Ada','Tidak Ada') DEFAULT NULL,
  `ad_kips_added_at` timestamp NULL DEFAULT NULL,
  `ad_kips_added_by` varchar(50) DEFAULT NULL,
  `ad_sktm` enum('Ada','Tidak Ada') DEFAULT NULL,
  `ad_sktm_added_at` timestamp NULL DEFAULT NULL,
  `ad_sktm_added_by` varchar(50) DEFAULT NULL,
  `ad_cname` varchar(20) DEFAULT NULL,
  `ad_fname` varchar(20) DEFAULT NULL,
  `ad_map` varchar(20) DEFAULT NULL,
  `ad_kode_map` varchar(20) DEFAULT NULL,
  `ad_status` enum('Penuh','Kosong','Diambil') DEFAULT NULL,
  `ad_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ad_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ad_deleted_at` timestamp NULL DEFAULT NULL,
  `ad_restored_at` timestamp NULL DEFAULT NULL,
  `ad_created_by` varchar(50) DEFAULT NULL,
  `ad_updated_by` varchar(50) DEFAULT NULL,
  `ad_deleted_by` varchar(50) DEFAULT NULL,
  `ad_restored_by` varchar(50) DEFAULT NULL,
  `ad_is_deleted` enum('TRUE','FALSE') DEFAULT 'FALSE',
  `ad_taken_at` timestamp NULL DEFAULT current_timestamp(),
  `ad_taken_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `archived_documents`
--

INSERT INTO `archived_documents` (`ad_id`, `ad_sid`, `ad_ijazah`, `ad_ijazah_added_at`, `ad_ijazah_borrowed_at`, `ad_ijazah_returned_at`, `ad_ijazah_added_by`, `ad_ijazah_borrowed_by`, `ad_ijazah_returned_by`, `ad_skhun`, `ad_skhun_added_at`, `ad_skhun_borrowed_at`, `ad_skhun_returned_at`, `ad_skhun_added_by`, `ad_skhun_borrowed_by`, `ad_skhun_returned_by`, `ad_kk`, `ad_kk_added_at`, `ad_kk_added_by`, `ad_ktpa`, `ad_ktpa_added_at`, `ad_ktpa_added_by`, `ad_ktpi`, `ad_ktpi_added_at`, `ad_ktpi_added_by`, `ad_kips`, `ad_kips_added_at`, `ad_kips_added_by`, `ad_sktm`, `ad_sktm_added_at`, `ad_sktm_added_by`, `ad_cname`, `ad_fname`, `ad_map`, `ad_kode_map`, `ad_status`, `ad_created_at`, `ad_updated_at`, `ad_deleted_at`, `ad_restored_at`, `ad_created_by`, `ad_updated_by`, `ad_deleted_by`, `ad_restored_by`, `ad_is_deleted`, `ad_taken_at`, `ad_taken_by`) VALUES
('4R7zC3v6sr', 'rpfS1dqW3k', 'Ada', '2017-07-22 05:31:50', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-22 05:31:50', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Tidak Ada', NULL, NULL, 'Ada', '2017-07-22 05:31:50', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:31:50', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:31:50', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:31:50', 'Fatawi Aqiel Helmi', 'A', '1', '2', 'A.1.2', 'Diambil', '2017-07-22 05:32:39', '2017-07-22 05:31:50', NULL, NULL, NULL, NULL, NULL, NULL, 'FALSE', '2017-07-22 05:32:39', 'Fatawi Aqiel Helmi'),
('6QSoE1tCbZ', 'ZTjlA4CsXW', 'Ada', '2017-07-22 05:36:41', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-22 05:36:41', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-22 05:36:41', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:36:41', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:36:41', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:36:41', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:36:41', 'Fatawi Aqiel Helmi', 'A', '1', '2', 'A.1.2', 'Diambil', '2017-07-22 05:36:56', '2017-07-22 05:36:41', NULL, NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'FALSE', '2017-07-22 05:36:56', 'Fatawi Aqiel Helmi'),
('cibqQCp6M2', 'InhudxRsaM', 'Ada', '2017-07-25 14:53:01', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-25 14:53:01', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-25 14:53:01', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 14:53:01', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 14:53:01', 'Fatawi Aqiel Helmi', 'Tidak Ada', NULL, NULL, 'Ada', '2017-07-25 14:53:01', 'Fatawi Aqiel Helmi', 'A', '1', '11', 'A.1.11', 'Diambil', '2017-07-25 14:54:05', '2017-07-25 14:53:01', NULL, NULL, NULL, NULL, NULL, NULL, 'FALSE', '2017-07-25 14:54:05', 'Fatawi Aqiel Helmi'),
('qrR758enYZ', 'rpfS1dqW3k', 'Ada', '2017-07-25 14:34:18', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-25 14:34:18', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-25 14:34:18', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 14:34:18', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 14:34:18', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 14:34:18', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 14:34:18', 'Fatawi Aqiel Helmi', 'A', '2', '1', 'A.2.1', 'Diambil', '2017-07-25 14:43:42', '2017-07-25 14:34:18', NULL, NULL, NULL, NULL, NULL, NULL, 'FALSE', '2017-07-25 14:43:42', 'Fatawi Aqiel Helmi'),
('rpkta7QcCI', 'dJGza0pxv9', 'Tidak Ada', '2017-07-25 14:29:02', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Tidak Ada', '2017-07-25 14:29:02', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-25 14:15:03', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 14:15:03', 'Fatawi Aqiel Helmi', 'Tidak Ada', '2017-07-25 14:29:02', 'Fatawi Aqiel Helmi', 'Tidak Ada', '2017-07-25 14:29:02', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 14:15:03', 'Fatawi Aqiel Helmi', 'A', '1', '1', 'A.1.1', 'Diambil', '2017-07-25 14:29:34', '2017-07-25 14:29:30', '2017-07-25 14:29:22', '2017-07-25 14:29:30', NULL, 'Fatawi Aqiel Helmi', 'Fatawi Aqiel Helmi', 'Fatawi Aqiel Helmi', 'FALSE', '2017-07-25 14:29:34', 'Fatawi Aqiel Helmi'),
('WEAQi94Bp6', 'dJGza0pxv9', 'Ada', '2017-07-22 05:25:10', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-22 05:25:10', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-22 05:25:10', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:25:10', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:25:10', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:25:10', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-22 05:25:10', 'Fatawi Aqiel Helmi', 'A', '1', '1', 'A.1.1', 'Diambil', '2017-07-22 05:25:16', '2017-07-22 05:25:10', NULL, NULL, NULL, NULL, NULL, NULL, 'FALSE', '2017-07-22 05:25:16', 'Fatawi Aqiel Helmi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabinets`
--

CREATE TABLE `cabinets` (
  `c_id` char(5) NOT NULL,
  `c_name` varchar(20) DEFAULT NULL,
  `c_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `c_deleted_at` timestamp NULL DEFAULT NULL,
  `c_restored_at` timestamp NULL DEFAULT NULL,
  `c_created_by` char(5) DEFAULT NULL,
  `c_updated_by` char(5) DEFAULT NULL,
  `c_deleted_by` char(5) DEFAULT NULL,
  `c_restored_by` char(5) DEFAULT NULL,
  `c_is_deleted` enum('TRUE','FALSE') DEFAULT 'FALSE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cabinets`
--

INSERT INTO `cabinets` (`c_id`, `c_name`, `c_created_at`, `c_updated_at`, `c_deleted_at`, `c_restored_at`, `c_created_by`, `c_updated_by`, `c_deleted_by`, `c_restored_by`, `c_is_deleted`) VALUES
('RrOgL', 'A', '2017-07-13 23:54:40', '2017-07-20 09:18:11', '2017-07-13 23:57:07', '2017-07-14 00:02:39', 'xB3gG', 'xB3gG', 'xB3gG', 'xB3gG', 'FALSE'),
('uUr4J', 'B', '2017-07-25 11:41:23', '2017-07-25 11:41:23', NULL, NULL, 'xB3gG', NULL, NULL, NULL, 'FALSE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('d95b7d1bd46e9dcc62e425996163657c0635ca12', '127.0.0.1', 1502238452, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530323233383435323b),
('7sjmfe25sl5br1j8tudkncgabt404sft', '::1', 1539743388, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393734333338383b),
('uiu3mtcfsolt6arp9j4784vaia3eg52h', '::1', 1539921045, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393932313034353b),
('q11f99ogvgr3ufqfffhmcur4aris7pr7', '::1', 1539922072, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393932313931333b755f69647c733a353a227842336747223b755f6e616d657c733a363a226d6173727564223b755f666e616d657c733a31313a224d2e2052756469616e746f223b755f6c6576656c7c733a31333a2241646d696e6973747261746f72223b69735f6c6f676765645f696e7c623a313b),
('nmr81q9ov70c2bnllflkp92jmrqcpj65', '::1', 1596715521, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539363731353434393b755f69647c733a353a226e34377763223b755f6e616d657c733a363a22666572613232223b755f666e616d657c733a31383a2259756e696120466572612053756765737469223b755f6c6576656c7c733a31333a2241646d696e6973747261746f72223b69735f6c6f676765645f696e7c623a313b),
('nit3noplbbia5bgfie3k85ite4sii09d', '::1', 1596718869, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539363731383836393b),
('88ger7n88dm1m92kaea5ehfe8e72cd07', '::1', 1596788058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539363738373838363b755f69647c733a353a226e34377763223b755f6e616d657c733a363a22666572613232223b755f666e616d657c733a31383a2259756e696120466572612053756765737469223b755f6c6576656c7c733a31333a2241646d696e6973747261746f72223b69735f6c6f676765645f696e7c623a313b),
('ageoq78o4557nru48bq58874jqpgvau7', '::1', 1596794508, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539363739343236303b755f69647c733a353a226e34377763223b755f6e616d657c733a363a22666572613232223b755f666e616d657c733a31383a2259756e696120466572612053756765737469223b755f6c6576656c7c733a31333a2241646d696e6973747261746f72223b69735f6c6f676765645f696e7c623a313b),
('2kl2v7leqol8qrsldq3jmefmjree8ktu', '::1', 1596884138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539363838343133383b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `d_id` char(10) NOT NULL,
  `d_sid` char(10) DEFAULT NULL,
  `d_ijazah` enum('Ada','Tidak Ada') DEFAULT NULL,
  `d_ijazah_added_at` timestamp NULL DEFAULT NULL,
  `d_ijazah_borrowed_at` timestamp NULL DEFAULT NULL,
  `d_ijazah_returned_at` timestamp NULL DEFAULT NULL,
  `d_ijazah_added_by` varchar(50) DEFAULT NULL,
  `d_ijazah_borrowed_by` varchar(50) DEFAULT NULL,
  `d_ijazah_returned_by` varchar(50) DEFAULT NULL,
  `d_skhun` enum('Ada','Tidak Ada') DEFAULT NULL,
  `d_skhun_added_at` timestamp NULL DEFAULT NULL,
  `d_skhun_borrowed_at` timestamp NULL DEFAULT NULL,
  `d_skhun_returned_at` timestamp NULL DEFAULT NULL,
  `d_skhun_added_by` varchar(50) DEFAULT NULL,
  `d_skhun_borrowed_by` varchar(50) DEFAULT NULL,
  `d_skhun_returned_by` varchar(50) DEFAULT NULL,
  `d_kk` enum('Ada','Tidak Ada') DEFAULT NULL,
  `d_kk_added_at` timestamp NULL DEFAULT NULL,
  `d_kk_added_by` varchar(50) DEFAULT NULL,
  `d_ktpa` enum('Ada','Tidak Ada') DEFAULT NULL,
  `d_ktpa_added_at` timestamp NULL DEFAULT NULL,
  `d_ktpa_added_by` varchar(50) DEFAULT NULL,
  `d_ktpi` enum('Ada','Tidak Ada') DEFAULT NULL,
  `d_ktpi_added_at` timestamp NULL DEFAULT NULL,
  `d_ktpi_added_by` varchar(50) DEFAULT NULL,
  `d_kips` enum('Ada','Tidak Ada') DEFAULT NULL,
  `d_kips_added_at` timestamp NULL DEFAULT NULL,
  `d_kips_added_by` varchar(50) DEFAULT NULL,
  `d_sktm` enum('Ada','Tidak Ada') DEFAULT NULL,
  `d_sktm_added_at` timestamp NULL DEFAULT NULL,
  `d_sktm_added_by` varchar(50) DEFAULT NULL,
  `d_cname` varchar(20) DEFAULT NULL,
  `d_fname` varchar(20) DEFAULT NULL,
  `d_map` varchar(20) DEFAULT NULL,
  `d_kode_map` varchar(20) DEFAULT NULL,
  `d_status` enum('Penuh','Kosong','Diambil') DEFAULT NULL,
  `d_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `d_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `d_deleted_at` timestamp NULL DEFAULT NULL,
  `d_restored_at` timestamp NULL DEFAULT NULL,
  `d_created_by` varchar(50) DEFAULT NULL,
  `d_updated_by` varchar(50) DEFAULT NULL,
  `d_deleted_by` varchar(50) DEFAULT NULL,
  `d_restored_by` varchar(50) DEFAULT NULL,
  `d_is_deleted` enum('TRUE','FALSE') DEFAULT 'FALSE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`d_id`, `d_sid`, `d_ijazah`, `d_ijazah_added_at`, `d_ijazah_borrowed_at`, `d_ijazah_returned_at`, `d_ijazah_added_by`, `d_ijazah_borrowed_by`, `d_ijazah_returned_by`, `d_skhun`, `d_skhun_added_at`, `d_skhun_borrowed_at`, `d_skhun_returned_at`, `d_skhun_added_by`, `d_skhun_borrowed_by`, `d_skhun_returned_by`, `d_kk`, `d_kk_added_at`, `d_kk_added_by`, `d_ktpa`, `d_ktpa_added_at`, `d_ktpa_added_by`, `d_ktpi`, `d_ktpi_added_at`, `d_ktpi_added_by`, `d_kips`, `d_kips_added_at`, `d_kips_added_by`, `d_sktm`, `d_sktm_added_at`, `d_sktm_added_by`, `d_cname`, `d_fname`, `d_map`, `d_kode_map`, `d_status`, `d_created_at`, `d_updated_at`, `d_deleted_at`, `d_restored_at`, `d_created_by`, `d_updated_by`, `d_deleted_by`, `d_restored_by`, `d_is_deleted`) VALUES
('FSzL63Eufe', 'nTWNhlbBS9', 'Tidak Ada', NULL, NULL, NULL, NULL, NULL, NULL, 'Ada', '2017-07-25 18:36:14', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-25 18:36:14', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 18:36:14', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 18:36:14', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 18:36:14', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 18:36:14', 'Fatawi Aqiel Helmi', 'A', '2', '1', 'A.2.1', 'Penuh', '2017-07-25 18:36:14', '2017-07-25 18:36:14', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, NULL, 'FALSE'),
('g2mSVp8fGR', 'dJGza0pxv9', 'Ada', '2017-07-25 18:35:45', '2017-07-30 06:00:12', NULL, 'Fatawi Aqiel Helmi', 'Fatawi Aqiel Helmi', NULL, 'Ada', '2017-07-25 18:35:45', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, 'Ada', '2017-07-25 18:35:45', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 18:35:45', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 18:35:45', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 18:35:45', 'Fatawi Aqiel Helmi', 'Ada', '2017-07-25 18:35:45', 'Fatawi Aqiel Helmi', 'A', '1', '1', 'A.1.1', 'Penuh', '2017-07-25 18:35:45', '2017-07-30 06:00:12', NULL, NULL, 'Fatawi Aqiel Helmi', NULL, NULL, NULL, 'FALSE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `folders`
--

CREATE TABLE `folders` (
  `f_id` char(5) NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `f_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `f_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `f_deleted_at` timestamp NULL DEFAULT NULL,
  `f_restored_at` timestamp NULL DEFAULT NULL,
  `f_created_by` char(5) DEFAULT NULL,
  `f_updated_by` char(5) DEFAULT NULL,
  `f_deleted_by` char(5) DEFAULT NULL,
  `f_restored_by` char(5) DEFAULT NULL,
  `f_is_deleted` enum('TRUE','FALSE') DEFAULT 'FALSE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `folders`
--

INSERT INTO `folders` (`f_id`, `f_name`, `f_created_at`, `f_updated_at`, `f_deleted_at`, `f_restored_at`, `f_created_by`, `f_updated_by`, `f_deleted_by`, `f_restored_by`, `f_is_deleted`) VALUES
('AUIkp', '3', '2017-07-25 11:41:33', '2017-07-25 11:41:33', NULL, NULL, 'xB3gG', NULL, NULL, NULL, 'FALSE'),
('Q5NFw', '2', '2017-07-25 11:41:29', '2017-07-25 11:41:29', NULL, NULL, 'xB3gG', NULL, NULL, NULL, 'FALSE'),
('Tjzxb', '1', '2017-07-14 00:32:44', '2017-07-20 16:02:46', '2017-07-20 16:02:11', '2017-07-20 16:02:46', 'xB3gG', NULL, 'xB3gG', 'xB3gG', 'FALSE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `majors`
--

CREATE TABLE `majors` (
  `m_id` varchar(3) NOT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `m_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `m_deleted_at` timestamp NULL DEFAULT NULL,
  `m_restored_at` timestamp NULL DEFAULT NULL,
  `m_created_by` char(5) DEFAULT NULL,
  `m_updated_by` char(5) DEFAULT NULL,
  `m_deleted_by` char(5) DEFAULT NULL,
  `m_restored_by` char(5) DEFAULT NULL,
  `m_is_deleted` enum('TRUE','FALSE') DEFAULT 'FALSE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `majors`
--

INSERT INTO `majors` (`m_id`, `m_name`, `m_created_at`, `m_updated_at`, `m_deleted_at`, `m_restored_at`, `m_created_by`, `m_updated_by`, `m_deleted_by`, `m_restored_by`, `m_is_deleted`) VALUES
('MM', 'Multimedia', '2017-06-26 22:05:28', '2020-08-06 11:26:09', '2020-08-06 11:26:09', '2017-07-03 16:51:57', 'xB3gG', NULL, 'xB3gG', 'xB3gG', 'TRUE'),
('TKJ', 'Teknik Komputer dan Jaringan', '2017-06-26 22:05:43', '2020-08-06 11:26:14', '2020-08-06 11:26:14', NULL, 'xB3gG', 'xB3gG', 'xB3gG', NULL, 'TRUE'),
('TKR', 'Teknik Kendaraan Ringan', '2017-06-26 22:03:58', '2020-08-06 11:26:12', '2020-08-06 11:26:12', '2017-06-26 22:06:25', 'xB3gG', 'xB3gG', 'xB3gG', 'xB3gG', 'TRUE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_rekdis` varchar(35) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `s_id` char(10) NOT NULL,
  `s_nisn` varchar(20) DEFAULT NULL,
  `s_name` varchar(50) DEFAULT NULL,
  `s_dob` date DEFAULT NULL,
  `s_gender` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `s_grade` char(5) DEFAULT 'X',
  `s_mid` char(5) DEFAULT 'MM',
  `s_yi` year(4) DEFAULT NULL,
  `s_yo` year(4) DEFAULT NULL,
  `s_foto` varchar(255) DEFAULT NULL,
  `s_kk` varchar(255) DEFAULT NULL,
  `s_ktpa` varchar(255) DEFAULT NULL,
  `s_ktpi` varchar(255) DEFAULT NULL,
  `s_kips` varchar(255) DEFAULT NULL,
  `s_sktm` varchar(255) DEFAULT NULL,
  `s_ijazah` varchar(255) DEFAULT NULL,
  `s_skhun` varchar(255) DEFAULT NULL,
  `s_status` enum('Lengkap','Kurang','Belum Ada Data') DEFAULT 'Belum Ada Data',
  `s_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `s_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `s_deleted_at` timestamp NULL DEFAULT NULL,
  `s_restored_at` timestamp NULL DEFAULT NULL,
  `s_created_by` char(5) DEFAULT NULL,
  `s_updated_by` char(5) DEFAULT NULL,
  `s_deleted_by` char(5) DEFAULT NULL,
  `s_restored_by` char(50) DEFAULT NULL,
  `s_is_deleted` enum('TRUE','FALSE') DEFAULT 'FALSE',
  `s_is_active` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`s_id`, `s_nisn`, `s_name`, `s_dob`, `s_gender`, `s_grade`, `s_mid`, `s_yi`, `s_yo`, `s_foto`, `s_kk`, `s_ktpa`, `s_ktpi`, `s_kips`, `s_sktm`, `s_ijazah`, `s_skhun`, `s_status`, `s_created_at`, `s_updated_at`, `s_deleted_at`, `s_restored_at`, `s_created_by`, `s_updated_by`, `s_deleted_by`, `s_restored_by`, `s_is_deleted`, `s_is_active`) VALUES
('dJGza0pxv9', '12345678', 'M. Rudianto', '1995-05-12', 'Laki-laki', 'X', 'TKR', 2015, 2017, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kurang', '2017-07-21 13:46:23', '2020-08-07 09:40:30', '2020-08-06 11:19:43', NULL, 'zpsYR', 'xB3gG', 'xB3gG', NULL, 'TRUE', 'Aktif'),
('InhudxRsaM', '743836487', 'Siska', '2017-12-31', 'Laki-laki', 'X', 'TKR', 2015, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Ada Data', '2017-07-22 05:52:39', '2020-08-06 11:26:42', '2020-08-06 11:26:42', NULL, 'xB3gG', 'xB3gG', 'xB3gG', NULL, 'TRUE', 'Aktif'),
('nTWNhlbBS9', '36783678638', 'Risma', '2014-12-31', 'Perempuan', 'X', 'TKR', 2015, 2017, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Ada Data', '2017-07-22 04:41:46', '2020-08-06 11:19:46', '2020-08-06 11:19:46', NULL, 'xB3gG', 'xB3gG', 'xB3gG', NULL, 'TRUE', 'Aktif'),
('rpfS1dqW3k', '7878678', 'Bayu M', '2017-12-31', 'Laki-laki', 'X', 'TKR', 2015, 2017, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Ada Data', '2017-07-22 02:28:45', '2020-08-06 11:19:53', '2020-08-06 11:19:53', NULL, 'xB3gG', 'xB3gG', 'xB3gG', NULL, 'TRUE', 'Aktif'),
('ULar8fQteY', '984657834', 'ayu', '2016-12-30', 'Perempuan', 'XII', 'TKR', 2015, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kurang', '2017-07-25 14:36:16', '2020-08-06 11:20:00', '2020-08-06 11:20:00', NULL, 'xB3gG', NULL, 'xB3gG', NULL, 'TRUE', 'Aktif'),
('Z0GoCqfwKv', '96783468', 'binti', '2017-12-30', 'Perempuan', 'X', 'TKR', 2015, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Ada Data', '2017-07-25 14:35:20', '2020-08-06 11:19:56', '2020-08-06 11:19:56', NULL, 'xB3gG', NULL, 'xB3gG', NULL, 'TRUE', 'Aktif'),
('z9LlPBoERx', '9999999', '99999999999999', '2018-12-31', 'Laki-laki', 'X', 'TKR', 2016, NULL, 'z9LlPBoERx-foto.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Ada Data', '2018-10-19 04:06:58', '2020-08-06 11:20:03', '2020-08-06 11:20:03', NULL, 'xB3gG', 'xB3gG', 'xB3gG', NULL, 'TRUE', 'Aktif'),
('ZTjlA4CsXW', '6556456', 'budi', '2017-12-31', 'Laki-laki', 'X', 'TKR', 2015, 2017, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Ada Data', '2017-07-22 05:32:08', '2020-08-06 11:19:49', '2020-08-06 11:19:49', NULL, 'xB3gG', 'xB3gG', 'xB3gG', NULL, 'TRUE', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `u_id` char(5) NOT NULL,
  `u_name` varchar(20) DEFAULT NULL,
  `u_pass` varchar(255) DEFAULT NULL,
  `u_jabatan` varchar(30) DEFAULT NULL,
  `u_no_hp` varchar(13) DEFAULT NULL,
  `u_fname` varchar(50) DEFAULT NULL,
  `u_level` enum('Administrator','User Biasa') NOT NULL DEFAULT 'User Biasa',
  `u_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `u_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_created_by` char(5) DEFAULT NULL,
  `u_updated_by` char(5) DEFAULT NULL,
  `u_password_updated_at` timestamp NULL DEFAULT NULL,
  `u_last_logged_in` timestamp NULL DEFAULT NULL,
  `u_ip_address` varchar(50) DEFAULT NULL,
  `u_is_active` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_pass`, `u_jabatan`, `u_no_hp`, `u_fname`, `u_level`, `u_created_at`, `u_updated_at`, `u_created_by`, `u_updated_by`, `u_password_updated_at`, `u_last_logged_in`, `u_ip_address`, `u_is_active`) VALUES
('n47wc', 'fera22', '$2y$10$zo3rzKNxsrcCDPEc/DMG1u4YwYxoZQCOzu93vKeGXNWA6XD6QAWDi', 'Petugas Assembling', '082334900261', 'Yunia Fera Sugesti', 'Administrator', '2020-08-06 11:27:31', '2020-08-07 09:03:27', 'xB3gG', NULL, NULL, '2020-08-07 09:03:27', '::1', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `archived_documents`
--
ALTER TABLE `archived_documents`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indeks untuk tabel `cabinets`
--
ALTER TABLE `cabinets`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `mname` (`c_name`);

--
-- Indeks untuk tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_map` (`d_kode_map`);

--
-- Indeks untuk tabel `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `mname` (`f_name`);

--
-- Indeks untuk tabel `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `mname` (`m_name`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_rekdis`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `snisn` (`s_nisn`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `uname` (`u_name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
