-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 09, 2021 at 06:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19new`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add total rekap` ()  NO SQL
    DETERMINISTIC
SELECT totaldpc, @b := totaldpc+@b AS B
FROM (SELECT totaldpc
      FROM rekapitulasi
      ORDER BY nomor) AS t
CROSS JOIN
    (SELECT @b := 0) AS var
    LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_total covid` ()  NO SQL
    DETERMINISTIC
SELECT totaldpc, @b := totaldpc+@b AS B
FROM (SELECT totaldpc
      FROM covidreportv3
      ORDER BY nomor) AS t
CROSS JOIN
    (SELECT @b := 0) AS var LIMIT 1$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `covidreport`
--

CREATE TABLE `covidreport` (
  `ID` int(11) NOT NULL,
  `TGLINPUT` timestamp NOT NULL DEFAULT current_timestamp(),
  `USER_INPUT` varchar(50) DEFAULT NULL,
  `ODP_DWS_SMB` smallint(6) NOT NULL DEFAULT 0,
  `ODP_DWS_RWT` smallint(6) NOT NULL DEFAULT 0,
  `ODP_DWS_MNG` smallint(6) NOT NULL DEFAULT 0,
  `ODP_ANK_SMB` smallint(6) NOT NULL DEFAULT 0,
  `ODP_ANK_RWT` smallint(6) NOT NULL DEFAULT 0,
  `ODP_ANK_MNG` smallint(6) NOT NULL DEFAULT 0,
  `PDP_DWS_SMB` smallint(6) NOT NULL DEFAULT 0,
  `PDP_DWS_RWT` smallint(6) NOT NULL DEFAULT 0,
  `PDP_DWS_MNG` smallint(6) NOT NULL DEFAULT 0,
  `PDP_ANK_SMB` smallint(6) NOT NULL DEFAULT 0,
  `PDP_ANK_RWT` smallint(6) NOT NULL DEFAULT 0,
  `PDP_ANK_MNG` smallint(6) NOT NULL DEFAULT 0,
  `COV_DWS_SMB` smallint(6) NOT NULL DEFAULT 0,
  `COV_DWS_RWT` smallint(6) NOT NULL DEFAULT 0,
  `COV_DWS_MNG` smallint(6) NOT NULL DEFAULT 0,
  `COV_ANK_SMB` smallint(6) NOT NULL DEFAULT 0,
  `COV_ANK_RWT` smallint(6) NOT NULL DEFAULT 0,
  `COV_ANK_MNG` smallint(6) NOT NULL DEFAULT 0,
  `COV_DWS_ISO` smallint(6) NOT NULL DEFAULT 0,
  `COV_ANK_ISO` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covidreport`
--

INSERT INTO `covidreport` (`ID`, `TGLINPUT`, `USER_INPUT`, `ODP_DWS_SMB`, `ODP_DWS_RWT`, `ODP_DWS_MNG`, `ODP_ANK_SMB`, `ODP_ANK_RWT`, `ODP_ANK_MNG`, `PDP_DWS_SMB`, `PDP_DWS_RWT`, `PDP_DWS_MNG`, `PDP_ANK_SMB`, `PDP_ANK_RWT`, `PDP_ANK_MNG`, `COV_DWS_SMB`, `COV_DWS_RWT`, `COV_DWS_MNG`, `COV_ANK_SMB`, `COV_ANK_RWT`, `COV_ANK_MNG`, `COV_DWS_ISO`, `COV_ANK_ISO`) VALUES
(1, '2020-05-22 01:07:42', 'Admin', 0, 0, 0, 0, 0, 0, 39, 5, 13, 11, 0, 0, 4, 1, 0, 0, 0, 0, 1, 0),
(2, '2020-05-22 02:38:57', 'Admin', 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '2020-05-22 02:42:45', NULL, 0, 0, 0, 0, 0, 0, 46, 4, 15, 12, 0, 0, 5, 3, 0, 0, 0, 0, 0, 0),
(4, '2020-06-14 23:55:17', 'Admin', 0, 0, 0, 0, 0, 0, 53, 9, 23, 15, 0, 0, 10, 4, 2, 1, 0, 0, 0, 0),
(5, '2020-06-29 05:43:04', NULL, 0, 0, 0, 0, 0, 0, 59, 13, 24, 14, 0, 0, 10, 7, 3, 0, 1, 0, 0, 0),
(6, '2020-06-30 04:09:07', NULL, 0, 0, 0, 0, 0, 0, 70, 11, 22, 14, 2, 0, 20, 13, 7, 1, 0, 0, 5, 0),
(7, '2020-06-30 06:01:47', 'tony', 0, 0, 0, 0, 0, 0, 70, 11, 22, 14, 2, 0, 20, 13, 7, 1, 0, 0, 5, 0),
(8, '2020-07-01 01:59:44', 'SUKMA', 0, 0, 0, 0, 0, 0, 70, 13, 23, 15, 2, 0, 20, 15, 7, 1, 0, 0, 5, 0),
(13, '2020-07-06 07:00:59', 'SUKMA', 0, 0, 0, 0, 0, 0, 77, 17, 22, 17, 1, 0, 29, 8, 8, 1, 0, 0, 4, 0),
(14, '2020-07-06 07:08:09', 'SUKMA', 0, 0, 0, 0, 0, 0, 77, 14, 24, 17, 1, 0, 29, 8, 8, 1, 0, 0, 4, 0),
(15, '2020-07-28 00:08:09', 'SUKMA', 0, 0, 0, 0, 0, 0, 95, 14, 31, 22, 0, 0, 58, 22, 16, 1, 0, 0, 0, 0),
(16, '2020-08-03 03:13:11', 'SUKMA', 0, 0, 0, 0, 0, 0, 100, 10, 32, 23, 0, 0, 71, 27, 18, 2, 0, 0, 0, 0),
(17, '2020-08-04 02:13:33', 'SUKMA', 0, 0, 0, 0, 0, 0, 113, 16, 32, 23, 0, 0, 76, 25, 18, 2, 0, 0, 0, 0),
(18, '2020-08-05 01:08:16', 'SUKMA', 0, 0, 0, 0, 0, 0, 113, 17, 32, 23, 0, 0, 76, 25, 18, 2, 0, 0, 0, 0),
(19, '2020-08-06 00:42:56', 'SUKMA', 0, 0, 0, 0, 0, 0, 113, 18, 34, 23, 0, 0, 76, 25, 18, 2, 0, 0, 0, 0),
(20, '2020-08-07 00:17:04', 'SUKMA', 0, 0, 0, 0, 0, 0, 116, 16, 34, 23, 0, 0, 79, 24, 19, 2, 0, 0, 0, 0),
(21, '2020-08-07 00:20:36', 'SUKMA', 0, 0, 0, 0, 0, 0, 116, 16, 34, 23, 0, 0, 79, 24, 19, 2, 0, 0, 0, 0),
(22, '2020-08-07 04:08:04', 'SUKMA', 0, 0, 0, 0, 0, 0, 116, 16, 34, 23, 0, 0, 79, 24, 19, 2, 0, 0, 0, 0),
(23, '2020-08-10 23:55:27', 'SUKMA', 0, 0, 0, 0, 0, 0, 121, 12, 34, 23, 3, 1, 86, 26, 20, 2, 0, 0, 0, 0),
(24, '2020-08-11 00:08:15', 'SUKMA', 0, 0, 0, 0, 0, 0, 121, 12, 34, 23, 3, 1, 86, 26, 20, 2, 0, 0, 0, 0),
(25, '2020-08-11 00:23:49', 'tony', 0, 0, 0, 0, 0, 0, 113, 18, 34, 23, 0, 0, 76, 25, 18, 2, 0, 0, 0, 0),
(26, '2020-08-11 00:24:52', 'SUKMA', 0, 0, 0, 0, 0, 0, 121, 12, 34, 23, 3, 1, 86, 26, 20, 2, 0, 0, 0, 0),
(27, '2020-08-11 00:28:28', 'SUKMA', 0, 0, 0, 0, 0, 0, 121, 12, 34, 23, 3, 1, 86, 26, 20, 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `covidreportv1`
--

CREATE TABLE `covidreportv1` (
  `id_` int(11) NOT NULL,
  `no_excel` int(11) NOT NULL,
  `inisial` varchar(30) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `kelamin` varchar(2) DEFAULT NULL,
  `usia` varchar(30) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kab_kota` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `jenis_pasien` varchar(50) DEFAULT NULL,
  `status_pasien` varchar(50) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `status_keluar` varchar(100) DEFAULT NULL,
  `status_laporan` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidreportv1`
--

INSERT INTO `covidreportv1` (`id_`, `no_excel`, `inisial`, `nama`, `kelamin`, `usia`, `tgl_masuk`, `provinsi`, `kab_kota`, `kecamatan`, `jenis_pasien`, `status_pasien`, `tgl_keluar`, `status_keluar`, `status_laporan`, `created_at`) VALUES
(1, 1, 'LMS', 'LUTFIAH MANARINA SALMA', 'P', '1-10', '2020-08-20', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-09-25', 'Meninggal / Konfirmasi  Status Keluar', '2020-09-07 01:16:41', '2020-11-25 08:39:39'),
(2, 2, 'PUJ', 'PUJIONO', 'L', '51-60', '2020-08-31', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-09-13', 'Meninggal / Konfirmasi  Status Keluar', '2020-09-02 00:37:27', '2020-11-25 08:39:39'),
(3, 3, 'HS', 'HASTA SATRIANA', 'P', '41-50', '2020-08-31', 'JAWA TENGAH', 'Kota Semarang', 'BANYUMANIK', 'Rawat Inap', 'Konfirmasi', '2020-09-07', 'Meninggal / Konfirmasi  Status Keluar', '2020-08-30 18:03:18', '2020-11-25 08:39:39'),
(4, 4, 'SUM', 'SUMINI', 'P', '41-50', '2020-08-22', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-09-01', 'APD/Sembuh  Status Keluar', '2020-08-31 00:59:42', '2020-11-25 08:39:39'),
(5, 5, 'WDY', 'WIDAYANTI', 'P', '41-50', '2020-08-31', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-09-15', 'APD/Sembuh  Status Keluar', '2020-08-31 00:45:44', '2020-11-25 08:39:39'),
(6, 6, 'PRI', 'PRIYONO,Ir', 'L', '51-60', '2020-08-30', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-09-10', 'APD/Sembuh  Status Keluar', '2020-08-31 00:44:29', '2020-11-25 08:39:39'),
(7, 7, 'STM', 'SUTIMAH', 'P', '61-70', '2020-08-29', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Konfirmasi', '2020-09-10', 'Meninggal / Konfirmasi  Status Keluar', '2020-08-31 00:43:04', '2020-11-25 08:39:39'),
(8, 8, 'WITO', 'WIYANTO', 'L', '41-50', '2020-08-29', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-09-04', 'Discarded  Status Keluar', '2020-08-31 00:36:54', '2020-11-25 08:39:39'),
(9, 9, 'AS', 'AMAT SOLEH', 'L', '61-70', '2020-08-28', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-09-02', 'Discarded  Status Keluar', '2020-08-31 00:35:11', '2020-11-25 08:39:39'),
(10, 10, 'RUS', 'RUSDIYONO', 'L', '51-60', '2020-08-29', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Suspect', '2020-09-02', 'Discarded  Status Keluar', '2020-08-31 00:30:48', '2020-11-25 08:39:39'),
(11, 11, 'SW', 'SRI WAHYUNI', 'P', '31-40', '2020-08-29', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-09-14', 'APD/Sembuh  Status Keluar', '2020-08-31 00:28:52', '2020-11-25 08:39:39'),
(12, 12, 'SOFI', 'SOFIYANAH', 'P', '41-50', '2020-08-28', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU SELATAN', 'Rawat Inap', 'Konfirmasi', '2020-09-11', 'APD/Sembuh  Status Keluar', '2020-08-31 00:26:38', '2020-11-25 08:39:39'),
(13, 13, 'SSL', 'SELAMET SULARDI', 'L', '61-70', '2020-08-28', 'JAWA TENGAH', 'Kota Semarang', 'PEDURUNGAN', 'Rawat Inap', 'Konfirmasi', '2020-09-11', 'APD/Sembuh  Status Keluar', '2020-08-31 00:25:07', '2020-11-25 08:39:39'),
(14, 14, 'FRD', 'FARIDAH', 'P', '41-50', '2020-08-28', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Suspect', '2020-08-31', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-28 05:47:46', '2020-11-25 08:39:39'),
(15, 15, 'WKM', 'WAKIMAN', 'L', '61-70', '2020-08-28', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-09-02', 'APD/Sembuh  Status Keluar', '2020-08-28 03:27:36', '2020-11-25 08:39:39'),
(16, 16, 'YAT', 'YATININGSIH', 'P', '41-50', '2020-08-27', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-09-07', 'APD/Sembuh  Status Keluar', '2020-08-28 00:59:52', '2020-11-25 08:39:39'),
(17, 17, 'BAE', 'BAETAH', 'P', '71-80', '2020-08-27', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-09-09', 'APD/Sembuh  Status Keluar', '2020-08-27 03:35:46', '2020-11-25 08:39:39'),
(18, 18, 'WTN', 'WITONO', 'L', '41-50', '2020-08-26', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-09-09', 'APD/Sembuh  Status Keluar', '2020-08-27 03:33:31', '2020-11-25 08:39:39'),
(19, 19, 'WAS', 'WIDODO ARRYS SETIANTO', 'L', '31-40', '2020-08-25', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-09-09', 'APD/Sembuh  Status Keluar', '2020-08-27 03:32:06', '2020-11-25 08:39:39'),
(20, 20, 'STN', 'SUTARNO', 'L', '51-60', '2020-08-27', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Suspect', '2020-09-04', 'APD/Sembuh  Status Keluar', '2020-08-27 03:30:05', '2020-11-25 08:39:39'),
(21, 21, 'SA', 'SITI ASIYAH', 'P', '21-30', '2020-08-24', 'JAWA TENGAH', 'Demak', 'SAYUNG', 'Rawat Inap', 'Suspect', '2020-08-29', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-24 19:11:57', '2020-11-25 08:39:39'),
(22, 22, 'ES', 'ENDANG SAYUTI', 'P', '31-40', '2020-08-24', 'JAWA TENGAH', 'Kendal', 'BRANGSONG', 'Rawat Inap', 'Suspect', '2020-08-24', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-23 18:50:46', '2020-11-25 08:39:39'),
(23, 23, 'FAH', 'FARREL AHMAD HAFIZH', 'L', '1-10', '2020-08-22', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-08-28', 'APD/Sembuh  Status Keluar', '2020-08-24 03:08:17', '2020-11-25 08:39:39'),
(24, 24, 'TWU', 'TIYAS WAHYU UTOMO', 'L', '21-30', '2020-08-19', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Suspect', '2020-08-24', 'APD/Sembuh  Status Keluar', '2020-08-24 03:07:02', '2020-11-25 08:39:39'),
(25, 25, 'PNAS,BY', 'PRAMITA NOOR ASIH SEKARAJI, BY', 'P', '1-10', '2020-08-19', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-28', 'APD/Sembuh  Status Keluar', '2020-08-24 03:05:24', '2020-11-25 08:39:39'),
(26, 26, 'PNAS', 'PRAMITA NOOR ASIH SEKARAJI', 'P', '31-40', '2020-08-19', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-28', 'APD/Sembuh  Status Keluar', '2020-08-24 03:03:08', '2020-11-25 08:39:39'),
(27, 27, 'NK', 'NUR KHASANAH,SH', 'P', '51-60', '2020-08-22', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-09-20', 'APD/Sembuh  Status Keluar', '2020-08-24 03:00:41', '2020-11-25 08:39:39'),
(28, 28, 'NDD', 'NURLEN DWI DARMAWATI', 'P', '41-50', '2020-08-22', 'JAWA TENGAH', 'Pati', 'DUKUHSETI', 'Rawat Inap', 'Suspect', '2020-09-01', 'APD/Sembuh  Status Keluar', '2020-08-24 02:59:08', '2020-11-25 08:39:39'),
(29, 29, 'ISN', 'ISNANTO', 'L', '51-60', '2020-08-22', 'JAWA TENGAH', 'Kendal', 'BRANGSONG', 'Rawat Inap', 'Konfirmasi', '2020-09-10', 'APD/Sembuh  Status Keluar', '2020-08-24 02:57:45', '2020-11-25 08:39:39'),
(30, 30, 'LES2', 'LESTARI', 'P', '41-50', '2020-08-21', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-24', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-24 02:56:17', '2020-11-25 08:39:39'),
(31, 31, 'FHW', 'FADJAR HARY WIWOHO', 'L', '41-50', '2020-08-20', 'JAWA TENGAH', 'Pati', 'DUKUHSETI', 'Rawat Inap', 'Konfirmasi', '2020-09-01', 'APD/Sembuh  Status Keluar', '2020-08-24 02:26:01', '2020-11-25 08:39:39'),
(32, 32, 'IPPD', 'INTAN PURNAMA PUTRI DAMAYANTI', 'P', '11-20', '2020-08-21', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-08-22', 'APS  Status Keluar', '2020-08-24 02:22:54', '2020-11-25 08:39:39'),
(33, 33, 'NW', 'NUR WULANINGSIH', 'P', '21-30', '2020-08-19', 'JAWA TENGAH', 'Kendal', 'WELERI', 'Rawat Inap', 'Konfirmasi', '2020-09-02', 'APD/Sembuh  Status Keluar', '2020-08-24 02:18:21', '2020-11-25 08:39:39'),
(34, 34, 'SUY', 'SUYATMI', 'P', '51-60', '2020-08-19', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-09-02', 'APD/Sembuh  Status Keluar', '2020-08-24 02:16:18', '2020-11-25 08:39:39'),
(35, 35, 'JML', 'JUMALI', 'L', '31-40', '2020-08-22', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-08-24', 'APS  Status Keluar', '2020-08-24 02:10:20', '2020-11-25 08:39:39'),
(36, 36, 'ABMU', 'ABDUL MUNIF', 'L', '51-60', '2020-08-14', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-26', 'APD/Sembuh  Status Keluar', '2020-08-24 02:02:12', '2020-11-25 08:39:39'),
(37, 37, 'MFAA', 'M. FATHAN ASKA ABYASA', 'L', '1-10', '2020-08-14', 'JAWA TENGAH', 'Semarang', 'BANDUNGAN', 'Rawat Inap', 'Konfirmasi', '2020-08-28', 'APD/Sembuh  Status Keluar', '2020-08-24 00:39:57', '2020-11-25 08:39:39'),
(38, 38, 'AAH', 'AHMAD AULYA\' HIDAYATULLOH', 'L', '21-30', '2020-08-18', 'JAWA TENGAH', 'Semarang', 'BANDUNGAN', 'Rawat Inap', 'Suspect', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-19 03:40:10', '2020-11-25 08:39:39'),
(39, 39, 'SUL2', 'SULIYAH', 'P', '51-60', '2020-08-19', 'JAWA TENGAH', 'Kendal', 'LIMBANGAN', 'Rawat Inap', 'Suspect', '2020-08-27', 'APD/Sembuh  Status Keluar', '2020-08-19 03:36:28', '2020-11-25 08:39:39'),
(40, 40, 'YR', 'YURI', 'L', '61-70', '2020-08-19', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-09-02', 'APD/Sembuh  Status Keluar', '2020-08-19 03:32:14', '2020-11-25 08:39:39'),
(41, 41, 'BAY', 'BONITA ADE YULISTYAMARTHA', 'P', '21-30', '2020-08-08', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-24', 'APD/Sembuh  Status Keluar', '2020-08-19 03:20:18', '2020-11-25 08:39:39'),
(42, 42, 'AS', 'AMAT SUJONO', 'L', '51-60', '2020-08-10', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-18', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-19 03:02:59', '2020-11-25 08:39:39'),
(43, 43, 'DK', 'DWI KRISTIANA', 'P', '41-50', '2020-08-16', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-28', 'APD/Sembuh  Status Keluar', '2020-08-18 02:40:58', '2020-11-25 08:39:39'),
(44, 44, 'RN', 'RISKA NOVIUTARI', 'P', '21-30', '2020-08-17', 'JAWA TENGAH', 'Semarang', 'BANDUNGAN', 'Rawat Inap', 'Konfirmasi', '2020-08-28', 'APD/Sembuh  Status Keluar', '2020-08-18 02:36:34', '2020-11-25 08:39:39'),
(45, 45, 'MA', 'MUSLIM AJI', 'L', '31-40', '2020-08-17', 'JAWA TENGAH', 'Kendal', 'GEMUH', 'Rawat Inap', 'Konfirmasi', '2020-08-18', 'APS  Status Keluar', '2020-08-18 02:33:30', '2020-11-25 08:39:39'),
(46, 46, 'YA', 'YUN ATMININGSIH', 'P', '41-50', '2020-08-17', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-31', 'APD/Sembuh  Status Keluar', '2020-08-18 02:32:22', '2020-11-25 08:39:39'),
(47, 47, 'RH', 'RATNO HARSTYAWAN', 'L', '31-40', '2020-08-17', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-31', 'APD/Sembuh  Status Keluar', '2020-08-18 02:31:24', '2020-11-25 08:39:39'),
(48, 48, 'PD', 'PADI', 'L', '51-60', '2020-08-17', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Suspect', '2020-08-24', 'APD/Sembuh  Status Keluar', '2020-08-18 02:21:58', '2020-11-25 08:39:39'),
(49, 49, 'JP', 'JOKO PURWANTO, TN', 'L', '51-60', '2020-08-17', 'JAWA TENGAH', 'Boyolali', 'BOYOLALI', 'Rawat Inap', 'Konfirmasi', '2020-08-31', 'APD/Sembuh  Status Keluar', '2020-08-18 02:15:02', '2020-11-25 08:39:39'),
(50, 50, 'IMA', 'TA\'IMAH', 'P', '51-60', '2020-08-16', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Suspect', '2020-08-17', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-18 02:10:46', '2020-11-25 08:39:39'),
(51, 51, 'SUS', 'SUSIYANTI', 'P', '51-60', '2020-08-15', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-08-29', 'APD/Sembuh  Status Keluar', '2020-08-18 02:09:22', '2020-11-25 08:39:39'),
(52, 52, 'ANU', 'AGUNG NUGROHO', 'L', '41-50', '2020-08-15', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-08-29', 'APD/Sembuh  Status Keluar', '2020-08-18 01:48:57', '2020-11-25 08:39:39'),
(53, 53, 'SUK', 'SUKARYANTO', 'L', '51-60', '2020-08-15', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-31', 'APD/Sembuh  Status Keluar', '2020-08-18 01:47:11', '2020-11-25 08:39:39'),
(54, 54, 'YIT', 'SUYITNO', 'L', '51-60', '2020-08-15', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Suspect', '2020-08-27', 'APD/Sembuh  Status Keluar', '2020-08-18 01:45:51', '2020-11-25 08:39:39'),
(55, 55, 'NWT', 'NURWITO', 'L', '51-60', '2020-08-15', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-08-24', 'APD/Sembuh  Status Keluar', '2020-08-18 01:25:57', '2020-11-25 08:39:39'),
(56, 56, 'DSB', 'DJOKO SETYO  BUDI', 'L', '41-50', '2020-08-15', 'JAWA TENGAH', 'Kendal', 'KOTA KENDAL', 'Rawat Inap', 'Konfirmasi', '2020-08-29', 'APD/Sembuh  Status Keluar', '2020-08-18 01:14:31', '2020-11-25 08:39:39'),
(57, 57, 'MUJ', 'MUJIONO', 'L', '51-60', '2020-08-14', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-18 01:10:42', '2020-11-25 08:39:39'),
(58, 58, 'WIN,BY', 'WINDIARTI, BY.NY', 'P', '1-10', '2020-08-14', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-19', 'APD/Sembuh  Status Keluar', '2020-08-13 18:21:23', '2020-11-25 08:39:39'),
(59, 59, 'WIN', 'WINDIARTI', 'P', '31-40', '2020-08-13', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-08-22', 'APS  Status Keluar', '2020-08-14 01:18:09', '2020-11-25 08:39:39'),
(60, 60, 'RUB', 'RUBIYANTI, NY', 'P', '41-50', '2020-08-13', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-08-15', 'Meninggal / Konfirmasi  Status Keluar', '2020-08-14 01:16:44', '2020-11-25 08:39:39'),
(61, 61, 'SKPN', 'SYAFIQ AL KAMIL, AN', 'L', '1-10', '2020-08-07', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-13', 'APD/Sembuh  Status Keluar', '2020-08-13 02:05:37', '2020-11-25 08:39:39'),
(62, 62, 'FAT', 'FATKHUROZI', 'L', '41-50', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'GENUK', 'Rawat Inap', 'Suspect', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-13 00:47:43', '2020-11-25 08:39:39'),
(63, 63, 'BAN', 'BAYU AJI NUGROHO', 'L', '11-20', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'GENUK', 'Rawat Inap', 'Suspect', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-13 00:44:44', '2020-11-25 08:39:39'),
(64, 64, 'LL', 'LAILA LUTFIANA', 'P', '31-40', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'GENUK', 'Rawat Inap', 'Suspect', '2020-08-22', 'APD/Sembuh  Status Keluar', '2020-08-13 00:42:07', '2020-11-25 08:39:39'),
(65, 65, 'WAR', 'WARSI', 'P', '41-50', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-26', 'APD/Sembuh  Status Keluar', '2020-08-13 00:39:03', '2020-11-25 08:39:39'),
(66, 66, 'SUY2', 'SUYATNO, TN', 'L', '41-50', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-13 00:37:08', '2020-11-25 08:39:39'),
(67, 67, 'ROM', 'ROMDHONAH', 'P', '51-60', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-26', 'APD/Sembuh  Status Keluar', '2020-08-13 00:35:50', '2020-11-25 08:39:39'),
(68, 68, 'NA', 'NUR AINI', 'P', '31-40', '2020-08-12', 'JAWA TENGAH', 'Demak', 'SAYUNG', 'Rawat Inap', 'Suspect', '2020-08-26', 'APD/Sembuh  Status Keluar', '2020-08-13 00:34:47', '2020-11-25 08:39:39'),
(69, 69, 'SA', 'SRI ASMI', 'P', '61-70', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-26', 'APD/Sembuh  Status Keluar', '2020-08-11 18:30:27', '2020-11-25 08:39:39'),
(70, 70, 'EBS', 'EKO BUDI SANTOSO', 'L', '31-40', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-26', 'APD/Sembuh  Status Keluar', '2020-08-11 18:27:22', '2020-11-25 08:39:39'),
(71, 71, 'SM', 'SRI MULYANI', 'P', '31-40', '2020-08-12', 'JAWA TENGAH', 'Sragen', 'MASARAN', 'Rawat Inap', 'Konfirmasi', '2020-08-26', 'APD/Sembuh  Status Keluar', '2020-08-11 18:18:18', '2020-11-25 08:39:39'),
(72, 72, 'AT', 'AMAT TOHIRIN', 'L', '31-40', '2020-08-10', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-08-24', 'APD/Sembuh  Status Keluar', '2020-08-12 01:22:25', '2020-11-25 08:39:39'),
(73, 73, 'NEM', 'PAINEM, NY', 'P', '51-60', '2020-08-10', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Suspect', '2020-08-12', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-12 01:15:54', '2020-11-25 08:39:39'),
(74, 74, 'TP', 'TEGUH PRIBADI', 'L', '31-40', '2020-08-12', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-12 01:10:20', '2020-11-25 08:39:39'),
(75, 75, 'SPT', 'SUPARTI, NY', 'P', '61-70', '2020-08-11', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Suspect', '2020-08-18', 'APD/Sembuh  Status Keluar', '2020-08-12 01:08:27', '2020-11-25 08:39:39'),
(76, 76, 'MAIL', 'ISMAIL', 'L', '21-30', '2020-08-11', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Konfirmasi', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-12 01:04:00', '2020-11-25 08:39:39'),
(77, 77, 'SUH', 'SUHARNO', 'L', '61-70', '2020-07-29', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-09', 'APD/Sembuh  Status Keluar', '2020-08-09 21:58:09', '2020-11-25 08:39:39'),
(78, 78, 'ST', 'SLAMET TRIYONO, TN', 'L', '31-40', '2020-07-29', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU SELATAN', 'Rawat Inap', 'Konfirmasi', '2020-08-07', 'Meninggal / Konfirmasi  Status Keluar', '2020-08-09 21:46:14', '2020-11-25 08:39:39'),
(79, 79, 'FAT', 'FATIMAH, NY', 'P', '51-60', '2020-08-04', 'JAWA TENGAH', 'Rembang', 'SARANG', 'Rawat Inap', 'Konfirmasi', '2020-08-13', 'APD/Sembuh  Status Keluar', '2020-08-09 21:09:25', '2020-11-25 08:39:39'),
(80, 80, 'MUR', 'MURGI', 'P', '31-40', '2020-08-07', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-20', 'APS  Status Keluar', '2020-08-09 20:28:36', '2020-11-25 08:39:39'),
(81, 81, 'AR', 'ARIYANTO', 'L', '21-30', '2020-08-08', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-08-18', 'APD/Sembuh  Status Keluar', '2020-08-09 20:27:00', '2020-11-25 08:39:39'),
(82, 82, 'SU', 'SRI UNTARI', 'P', '51-60', '2020-08-09', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-22', 'APD/Sembuh  Status Keluar', '2020-08-09 20:06:31', '2020-11-25 08:39:39'),
(83, 83, 'NGAR', 'NGARTIAH', 'P', '51-60', '2020-08-09', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-08-22', 'APD/Sembuh  Status Keluar', '2020-08-09 19:57:06', '2020-11-25 08:39:39'),
(84, 84, 'SGT', 'SUGIARTI', 'P', '41-50', '2020-08-09', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-23', 'APD/Sembuh  Status Keluar', '2020-08-09 19:49:59', '2020-11-25 08:39:39'),
(85, 85, 'MUK', 'MUKHASINAH', 'P', '51-60', '2020-08-07', 'JAWA TENGAH', 'Rembang', 'SEDAN', 'Rawat Inap', 'Konfirmasi', '2020-08-22', 'APS  Status Keluar', '2020-08-09 19:30:12', '2020-11-25 08:39:39'),
(86, 86, 'SUW', 'SUWARMI', 'P', '41-50', '2020-08-07', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Inap', 'Konfirmasi', '2020-08-20', 'APS  Status Keluar', '2020-08-09 19:23:40', '2020-11-25 08:39:39'),
(87, 87, 'EY', 'EKO YULMIATI, NY', 'P', '51-60', '2020-08-09', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-08-12', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-09 18:13:20', '2020-11-25 08:39:39'),
(88, 88, 'ER', 'ENI RISTIYOWATI', 'P', '41-50', '2020-08-07', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-22', 'APD/Sembuh  Status Keluar', '2020-08-06 18:37:36', '2020-11-25 08:39:39'),
(89, 89, 'SMD', 'SUMARDI', 'L', '51-60', '2020-08-07', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-22', 'APD/Sembuh  Status Keluar', '2020-08-06 18:30:12', '2020-11-25 08:39:39'),
(90, 90, 'FDH', 'FAIZ DITYA HANGGARA, TN', 'L', '21-30', '2020-07-30', 'JAWA TENGAH', 'Pemalang', 'RANDUDONGKAL', 'Rawat Inap', 'Konfirmasi', '2020-08-12', 'APD/Sembuh  Status Keluar', '2020-08-07 02:27:22', '2020-11-25 08:39:39'),
(91, 91, 'AP BY', 'ANITA PUSPAYANTI, BY, NY', 'L', '1-10', '2020-08-06', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Suspect', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-05 18:14:22', '2020-11-25 08:39:39'),
(92, 92, 'SANT', 'SANTOSO', 'L', '41-50', '2020-08-06', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-18', 'APD/Sembuh  Status Keluar', '2020-08-05 18:09:40', '2020-11-25 08:39:39'),
(93, 93, 'MUS', 'MUSLICH', 'L', '61-70', '2020-08-06', 'JAWA TENGAH', 'Rembang', 'SEDAN', 'Rawat Inap', 'Konfirmasi', '2020-08-22', 'APS  Status Keluar', '2020-08-06 01:02:08', '2020-11-25 08:39:39'),
(94, 94, 'THR', 'TAHRIR, TN', 'L', '61-70', '2020-08-04', 'JAWA TENGAH', 'Rembang', 'SUMBER', 'Rawat Inap', 'Konfirmasi', '2020-08-13', 'APD/Sembuh  Status Keluar', '2020-08-06 01:00:46', '2020-11-25 08:39:39'),
(95, 95, 'ISAH', 'NGAISAH, NY', 'P', '51-60', '2020-08-04', 'JAWA TENGAH', 'Rembang', 'SARANG', 'Rawat Inap', 'Konfirmasi', '2020-08-13', 'APD/Sembuh  Status Keluar', '2020-08-06 00:59:20', '2020-11-25 08:39:39'),
(96, 96, 'YE', 'YUSUF EFENDI, TN', 'L', '31-40', '2020-08-04', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-05', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-08-06 00:55:58', '2020-11-25 08:39:39'),
(97, 97, 'MS', 'M. SUPRIYANTO, TN', 'L', '41-50', '2020-08-04', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-09', 'APD/Sembuh  Status Keluar', '2020-08-06 00:54:16', '2020-11-25 08:39:39'),
(98, 98, 'MA', 'MOHAMAD AGOES HARTO', 'L', '41-50', '2020-08-03', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-16', 'APD/Sembuh  Status Keluar', '2020-08-06 00:52:38', '2020-11-25 08:39:39'),
(99, 99, 'MT', 'MOCHAMMAD TOHARI', 'L', '41-50', '2020-08-03', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-08-16', 'APD/Sembuh  Status Keluar', '2020-08-06 00:50:31', '2020-11-25 08:39:39'),
(100, 100, 'RR', 'ROBYNZA RAHARJO', 'L', '51-60', '2020-08-05', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-22', 'APD/Sembuh  Status Keluar', '2020-08-06 00:46:42', '2020-11-25 08:39:39'),
(101, 101, 'ROCH', 'ROCHMAN, TN', 'L', '41-50', '2020-08-03', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-08-12', 'APD/Sembuh  Status Keluar', '2020-08-06 00:36:41', '2020-11-25 08:39:39'),
(102, 102, 'ISS', 'INNA SRI SUGIARTI,NY', 'P', '41-50', '2020-08-01', 'JAWA TENGAH', 'Kota Semarang', 'GAJAH MUNGKUR', 'Rawat Inap', 'Konfirmasi', '2020-08-22', 'APD/Sembuh  Status Keluar', '2020-08-03 02:25:08', '2020-11-25 08:39:39'),
(103, 103, 'LEG', 'LEGIMIN, TN', 'L', '71-80', '2020-08-01', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-08-11', 'APD/Sembuh  Status Keluar', '2020-08-03 02:23:54', '2020-11-25 08:39:39'),
(104, 104, 'LS', 'LUDFI SALAFUDIN, TN', 'L', '21-30', '2020-07-31', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-14', 'APD/Sembuh  Status Keluar', '2020-08-03 02:22:25', '2020-11-25 08:39:39'),
(105, 105, 'SP', 'SLAMET PURYANTO, TN', 'L', '31-40', '2020-08-01', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-11', 'APD/Sembuh  Status Keluar', '2020-08-03 02:13:57', '2020-11-25 08:39:39'),
(106, 106, 'JON', 'SARDJONO, TN', 'L', '71-80', '2020-08-01', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-07', 'Meninggal / Konfirmasi  Status Keluar', '2020-08-03 02:12:12', '2020-11-25 08:39:39'),
(107, 107, 'SL', 'SLAMET LESMONO', 'L', '61-70', '2020-08-02', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-08-16', 'APD/Sembuh  Status Keluar', '2020-08-03 02:10:06', '2020-11-25 08:39:39'),
(108, 108, 'SIR', 'SIRMAN, TN', 'L', '71-80', '2020-07-31', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Inap', 'Suspect', '2020-08-08', 'APD/Sembuh  Status Keluar', '2020-08-03 02:05:27', '2020-11-25 08:39:39'),
(109, 109, 'RG', 'RUFFAEDAH GHOFARINA', 'P', '31-40', '2020-08-02', 'JAWA TENGAH', 'Pemalang', 'PETARUKAN', 'Rawat Inap', 'Konfirmasi', '2020-08-25', 'APD/Sembuh  Status Keluar', '2020-08-03 01:22:57', '2020-11-25 08:39:39'),
(110, 110, 'MV', 'MONA VITRIA', 'P', '31-40', '2020-08-02', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-08-18', 'APD/Sembuh  Status Keluar', '2020-08-03 01:19:30', '2020-11-25 08:39:39'),
(111, 111, 'SW', 'SILVIA WIDYASTUTI', 'P', '41-50', '2020-08-02', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-18', 'APD/Sembuh  Status Keluar', '2020-08-03 01:17:03', '2020-11-25 08:39:39'),
(112, 112, 'NUF', 'NAVA ULFA FEBRIANA, NN', 'P', '21-30', '2020-08-01', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG TENGAH', 'Rawat Inap', 'Konfirmasi', '2020-08-15', 'APD/Sembuh  Status Keluar', '2020-08-03 01:13:07', '2020-11-25 08:39:39'),
(113, 113, 'AP', 'ANITA PUSPAYANTI', 'P', '21-30', '2020-08-01', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-08-18', 'APD/Sembuh  Status Keluar', '2020-08-03 01:09:15', '2020-11-25 08:39:39'),
(114, 114, 'TH', 'TRI HERYANA, NY', 'P', '51-60', '2020-08-01', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-08-06', 'Meninggal / Konfirmasi  Status Keluar', '2020-08-03 00:45:49', '2020-11-25 08:39:39'),
(115, 115, 'EK', 'EVIANA KUSUMADEWI, NN', 'P', '21-30', '2020-07-29', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-11', 'APD/Sembuh  Status Keluar', '2020-07-30 00:37:34', '2020-11-25 08:39:39'),
(116, 116, 'TR', 'TRI RUBIYATUN', 'P', '31-40', '2020-07-29', 'JAWA TENGAH', 'Kota Semarang', 'BANYUMANIK', 'Rawat Inap', 'Konfirmasi', '2020-08-11', 'APD/Sembuh  Status Keluar', '2020-07-30 00:35:38', '2020-11-25 08:39:39'),
(117, 117, 'IA', 'ITA ASTIANI, NY', 'P', '31-40', '2020-07-29', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-08-04', 'APD/Sembuh  Status Keluar', '2020-07-30 00:33:26', '2020-11-25 08:39:39'),
(118, 118, 'KSR', 'KASIRAN, TN', 'L', '61-70', '2020-07-29', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-08-13', 'APD/Sembuh  Status Keluar', '2020-07-28 19:44:29', '2020-11-25 08:39:39'),
(119, 119, 'ABH', 'AHMAD BIN HUSNAN, TN', 'L', '21-30', '2020-07-22', 'JAWA TIMUR', 'Banyuwangi', 'TEGALDLIMO', 'Rawat Inap', 'Suspect', '2020-07-28', 'Isolasi Mandiri di rumah  Status Keluar', '2020-07-28 18:28:06', '2020-11-25 08:39:39'),
(120, 120, 'SW', 'SETIYO WIDODO, TN', 'L', '41-50', '2020-07-28', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-11', 'APD/Sembuh  Status Keluar', '2020-07-29 00:45:05', '2020-11-25 08:39:39'),
(121, 121, 'HSK', 'HERIZKO SILVANO KUSUMA, TN', 'L', '21-30', '2020-07-28', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-11', 'APD/Sembuh  Status Keluar', '2020-07-29 00:31:55', '2020-11-25 08:39:39'),
(122, 122, 'SH', 'SRI HARTONO, TN', 'L', '61-70', '2020-07-28', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-09', 'APD/Sembuh  Status Keluar', '2020-07-29 00:28:51', '2020-11-25 08:39:39'),
(123, 123, 'SA', 'SRI AMPOENI, NY', 'P', '51-60', '2020-07-28', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-09', 'APD/Sembuh  Status Keluar', '2020-07-27 18:10:46', '2020-11-25 08:39:39'),
(124, 124, 'JUW', 'JUWARIYAH, NY', 'P', '51-60', '2020-07-27', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Inap', 'Konfirmasi', '2020-08-10', 'APD/Sembuh  Status Keluar', '2020-07-28 01:26:17', '2020-11-25 08:39:39'),
(125, 125, 'MINI', 'TUMINI', 'P', '71-80', '2020-07-27', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-08-02', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-07-28 01:23:43', '2020-11-25 08:39:39'),
(126, 126, 'CAN', 'CICILYA AJENG NOVITA,AMD, NY', 'P', '21-30', '2020-07-27', 'JAWA TENGAH', 'Batang', 'REBAN', 'Rawat Inap', 'Konfirmasi', '2020-08-11', 'APD/Sembuh  Status Keluar', '2020-07-28 01:21:11', '2020-11-25 08:39:39'),
(127, 127, 'TUGI', 'TUGIYONO, TN', 'L', '51-60', '2020-07-26', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Konfirmasi', '2020-08-10', 'APD/Sembuh  Status Keluar', '2020-07-27 00:50:15', '2020-11-25 08:39:39'),
(128, 128, 'SUS', 'SUJIYAH SURYATI, NY', 'P', '41-50', '2020-07-26', 'JAWA TENGAH', 'Demak', 'GUNTUR', 'Rawat Inap', 'Konfirmasi', '2020-08-08', 'APD/Sembuh  Status Keluar', '2020-07-27 00:46:50', '2020-11-25 08:39:39'),
(129, 129, 'RA', 'RETNO ARIFIANI, NY', 'P', '31-40', '2020-07-26', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-09', 'APD/Sembuh  Status Keluar', '2020-07-27 00:40:12', '2020-11-25 08:39:39'),
(130, 130, 'SS', 'SUGENG SUSMIYANTO', 'L', '31-40', '2020-07-26', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-07', 'APD/Sembuh  Status Keluar', '2020-07-27 00:36:36', '2020-11-25 08:39:39'),
(131, 131, 'ASIK', 'MOH. ASIKIN, TN', 'L', '51-60', '2020-07-25', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-08-10', 'APD/Sembuh  Status Keluar', '2020-07-27 00:34:50', '2020-11-25 08:39:39'),
(132, 132, 'ST', 'SUTI', 'P', '61-70', '2020-07-25', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-07-26', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-07-27 00:33:18', '2020-11-25 08:39:39'),
(133, 133, 'PW', 'PIM WATTIMURY', 'L', '71-80', '2020-07-25', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-08-01', 'APD/Sembuh  Status Keluar', '2020-07-27 00:20:33', '2020-11-25 08:39:39'),
(134, 134, 'AMI', 'NGATMI, NY', 'P', '61-70', '2020-07-25', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-07', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-27 00:18:05', '2020-11-25 08:39:39'),
(135, 135, 'LES', 'LESTARI, NY', 'P', '51-60', '2020-07-25', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-07-28', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-27 00:15:07', '2020-11-25 08:39:39'),
(136, 136, 'LNK', 'LILIS NUGRAHANI KAMDINAWATI, NY', 'P', '51-60', '2020-07-24', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-07-25', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-24 02:58:44', '2020-11-25 08:39:39'),
(137, 137, 'ANW', 'H. ANWAR, TN', 'L', '61-70', '2020-07-23', 'JAWA TENGAH', 'Kota Semarang', 'GAYAMSARI', 'Rawat Inap', 'Konfirmasi', '2020-07-26', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-24 02:56:12', '2020-11-25 08:39:39'),
(138, 138, 'dk', 'DYAH KEKAYI K, NY', 'P', '51-60', '2020-07-23', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-06', 'APD/Sembuh  Status Keluar', '2020-07-24 02:52:04', '2020-11-25 08:39:39'),
(139, 139, 'SOPI', 'SOPIANAH, NY', 'P', '51-60', '2020-07-18', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-07-30', 'APS  Status Keluar', '2020-07-22 18:52:38', '2020-11-25 08:39:39'),
(140, 140, 'WS', 'WAWAN SEPTIAWAN, TN', 'L', '31-40', '2020-07-23', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Konfirmasi', '2020-08-06', 'APD/Sembuh  Status Keluar', '2020-07-22 18:46:38', '2020-11-25 08:39:39'),
(141, 141, 'IPW BY', 'IKA PUJI WULANDARI, BY, NY', 'L', '1-10', '2020-07-20', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Suspect', '2020-07-23', 'APD/Sembuh  Status Keluar', '2020-07-22 18:23:17', '2020-11-25 08:39:39'),
(142, 142, 'IPW', 'IKA PUJI WULANDARI, NY', 'P', '21-30', '2020-07-19', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Suspect', '2020-07-23', 'APD/Sembuh  Status Keluar', '2020-07-22 18:21:14', '2020-11-25 08:39:39'),
(143, 143, 'AM', 'ALI MAKSUM, TN', 'L', '21-30', '2020-07-22', 'LAMPUNG', 'Tulang Bawang', 'BANJAR AGUNG', 'Rawat Inap', 'Konfirmasi', '2020-07-28', 'APD/Sembuh  Status Keluar', '2020-07-23 01:26:22', '2020-11-25 08:39:39'),
(144, 144, 'ER', 'EDY ROKHANDI, TN', 'L', '41-50', '2020-07-22', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-06', 'APD/Sembuh  Status Keluar', '2020-07-23 01:16:33', '2020-11-25 08:39:39'),
(145, 145, 'MAD', 'AHMAD, TN', 'L', '21-30', '2020-07-22', 'JAWA TENGAH', 'Rembang', 'SARANG', 'Rawat Inap', 'Suspect', '2020-07-24', 'APD/Sembuh  Status Keluar', '2020-07-23 01:02:28', '2020-11-25 08:39:39'),
(146, 146, 'RS', 'ROHIB SAAD, AN', 'L', '11-20', '2020-07-22', 'JAWA TENGAH', 'Rembang', 'SARANG', 'Rawat Inap', 'Konfirmasi', '2020-07-24', 'APD/Sembuh  Status Keluar', '2020-07-23 01:00:22', '2020-11-25 08:39:39'),
(147, 147, 'AU', 'ABDULLAH UBAB KH, TN', 'L', '61-70', '2020-07-22', 'JAWA TENGAH', 'Rembang', 'SARANG', 'Rawat Inap', 'Konfirmasi', '2020-07-28', 'APD/Sembuh  Status Keluar', '2020-07-23 00:58:46', '2020-11-25 08:39:39'),
(148, 148, 'RJ', 'ROUDLOTUL JANNAH HJ, NY', 'P', '51-60', '2020-07-22', 'JAWA TENGAH', 'Rembang', 'SARANG', 'Rawat Inap', 'Konfirmasi', '2020-07-28', 'APD/Sembuh  Status Keluar', '2020-07-23 00:57:19', '2020-11-25 08:39:39'),
(149, 149, 'RAT', 'RUQAYYATUL ALYA THAIFUR A, NY', 'P', '21-30', '2020-07-22', 'JAWA TENGAH', 'Rembang', 'SARANG', 'Rawat Inap', 'Konfirmasi', '2020-07-24', 'APD/Sembuh  Status Keluar', '2020-07-23 00:55:14', '2020-11-25 08:39:39'),
(150, 150, 'DAA', 'DELVIN AZIZ ALFATIH, AN', 'L', '1-10', '2020-07-22', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Suspect', '2020-07-27', 'APD/Sembuh  Status Keluar', '2020-07-23 00:53:20', '2020-11-25 08:39:39'),
(151, 151, 'DJB', 'DJOKO BUDIJANTO, TN', 'L', '51-60', '2020-07-16', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Suspect', '2020-07-29', 'APD/Sembuh  Status Keluar', '2020-07-21 18:29:49', '2020-11-25 08:39:39'),
(152, 152, 'AZ', 'AHMAD ZAENUDIN', 'L', '51-60', '2020-07-17', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-08-02', 'Dirujuk  Status Keluar', '2020-07-21 18:27:31', '2020-11-25 08:39:39'),
(153, 153, 'ISTA', 'ISTAJIB, TN', 'L', '51-60', '2020-07-17', 'JAWA TENGAH', 'Kota Semarang', 'GENUK', 'Rawat Inap', 'Suspect', '2020-07-24', 'APD/Sembuh  Status Keluar', '2020-07-21 18:23:03', '2020-11-25 08:39:39'),
(154, 154, 'IMD', 'IMDYAWATI', 'P', '51-60', '2020-07-21', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-07-30', 'APD/Sembuh  Status Keluar', '2020-07-22 00:48:43', '2020-11-25 08:39:39'),
(155, 155, 'SDI', 'SANDI,TN', 'L', '51-60', '2020-07-21', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-08-04', 'APD/Sembuh  Status Keluar', '2020-07-22 00:44:52', '2020-11-25 08:39:39'),
(156, 156, 'SUY', 'SUYATNO', 'L', '41-50', '2020-07-21', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-10', 'APD/Sembuh  Status Keluar', '2020-07-22 00:42:42', '2020-11-25 08:39:39'),
(157, 157, 'SUL2', 'SULASIH, NY', 'P', '61-70', '2020-07-21', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-10', 'APD/Sembuh  Status Keluar', '2020-07-22 00:41:20', '2020-11-25 08:39:39'),
(158, 158, 'BY', 'BENY YUSUF', 'L', '21-30', '2020-07-22', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-07-30', 'APD/Sembuh  Status Keluar', '2020-07-22 00:36:44', '2020-11-25 08:39:39'),
(159, 159, 'BY', 'BENY YUSUF', 'L', '21-30', '2020-07-17', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-07-21', 'APS  Status Keluar', '2020-07-20 04:27:47', '2020-11-25 08:39:39'),
(160, 160, 'SUK', 'SUKISNO, TN', 'L', '51-60', '2020-07-17', 'JAWA TENGAH', 'Demak', 'WEDUNG', 'Rawat Inap', 'Konfirmasi', '2020-07-24', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-20 04:26:50', '2020-11-25 08:39:39'),
(161, 161, 'IDJAH', 'CHOTIDJAH', 'P', '61-70', '2020-07-17', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-08-07', 'APD/Sembuh  Status Keluar', '2020-07-20 04:25:38', '2020-11-25 08:39:39'),
(162, 162, 'SOP', 'SOPIYAH', 'P', '51-60', '2020-07-19', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Suspect', '2020-07-23', 'APD/Sembuh  Status Keluar', '2020-07-20 04:24:04', '2020-11-25 08:39:39'),
(163, 163, 'MI', 'MUHAMAT ICHSAN, TN', 'L', '61-70', '2020-07-16', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-07-24', 'APD/Sembuh  Status Keluar', '2020-07-20 04:05:46', '2020-11-25 08:39:39'),
(164, 164, 'HK', 'HAYAT KUSTANTO, TN', 'L', '51-60', '2020-07-18', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-07-28', 'APD/Sembuh  Status Keluar', '2020-07-20 03:40:30', '2020-11-25 08:39:39'),
(165, 165, 'STR', 'SUTARNO, TN', 'L', '61-70', '2020-07-19', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-08-03', 'APD/Sembuh  Status Keluar', '2020-07-20 03:37:39', '2020-11-25 08:39:39'),
(166, 166, 'MHSA', 'MOH. HISYAMI SAIDUN ANWARY, TN', 'L', '31-40', '2020-07-19', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-07-29', 'APD/Sembuh  Status Keluar', '2020-07-20 03:34:37', '2020-11-25 08:39:39'),
(167, 167, 'KMR', 'KASMURI, TN', 'L', '51-60', '2020-07-15', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-07-27', 'APD/Sembuh  Status Keluar', '2020-07-20 03:25:27', '2020-11-25 08:39:39'),
(168, 168, 'ML', 'MASHURA LAINDING', 'P', '51-60', '2020-07-16', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-27', 'APD/Sembuh  Status Keluar', '2020-07-20 03:21:13', '2020-11-25 08:39:39'),
(169, 169, 'FTR', 'FATCHURRAHMAN, TN', 'L', '61-70', '2020-07-19', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Konfirmasi', '2020-08-03', 'APD/Sembuh  Status Keluar', '2020-07-20 03:16:12', '2020-11-25 08:39:39'),
(170, 170, 'AW', 'AGUS WIDODO, TN', 'L', '41-50', '2020-07-18', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Inap', 'Konfirmasi', '2020-08-10', 'APD/Sembuh  Status Keluar', '2020-07-20 02:56:10', '2020-11-25 08:39:39'),
(171, 171, 'CH', 'CHANDRA HERMAWAN, TN', 'L', '51-60', '2020-07-19', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-20', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-20 02:54:02', '2020-11-25 08:39:39'),
(172, 172, 'SM', 'SITI MARDIYAH, NY', 'P', '51-60', '2020-07-04', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-23', 'APD/Sembuh  Status Keluar', '2020-07-20 01:47:26', '2020-11-25 08:39:39'),
(173, 173, 'yp', 'YOGA PRADIPTA, AN', 'L', '1-10', '2020-07-12', 'JAWA TENGAH', 'Pekalongan', 'WONOPRINGGO', 'Rawat Inap', 'Suspect', '2020-07-17', 'APD/Sembuh  Status Keluar', '2020-07-15 02:21:48', '2020-11-25 08:39:39'),
(174, 174, 'gw', 'GATOT WIDODO, TN', 'L', '51-60', '2020-07-13', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-22', 'APD/Sembuh  Status Keluar', '2020-07-15 02:15:15', '2020-11-25 08:39:39'),
(175, 175, 'EA', 'ENDANG ARINI', 'P', '51-60', '2020-07-15', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-07-27', 'APD/Sembuh  Status Keluar', '2020-07-15 02:01:31', '2020-11-25 08:39:39'),
(176, 176, 'AY', 'AHMAD YUSUF', 'L', '31-40', '2020-07-14', 'JAWA TENGAH', 'Demak', 'DEMAK', 'Rawat Inap', 'Konfirmasi', '2020-07-29', 'APD/Sembuh  Status Keluar', '2020-07-15 01:59:24', '2020-11-25 08:39:39'),
(177, 177, 'NUR', 'NURCHOLIS, TN', 'L', '41-50', '2020-07-14', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Inap', 'Suspect', '2020-07-21', 'APD/Sembuh  Status Keluar', '2020-07-15 01:54:36', '2020-11-25 08:39:39'),
(178, 178, 'NOV', 'NOVIYANTI', 'P', '21-30', '2020-07-14', 'JAWA TENGAH', 'Kendal', 'ROWOSARI', 'Rawat Inap', 'Suspect', '2020-07-25', 'APD/Sembuh  Status Keluar', '2020-07-15 01:52:04', '2020-11-25 08:39:39'),
(179, 179, 'AN', 'AGUNG NUGROHO', 'L', '51-60', '2020-07-14', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-07-17', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-15 01:50:25', '2020-11-25 08:39:39'),
(180, 180, 'PW', 'PUJI WALUYO, TN', 'L', '41-50', '2020-07-05', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-07-29', 'APD/Sembuh  Status Keluar', '2020-07-12 18:22:03', '2020-11-25 08:39:39'),
(181, 181, 'DJUM', 'DJUMARI , TN', 'L', '71-80', '2020-07-10', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Suspect', '2020-07-17', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-07-12 18:16:30', '2020-11-25 08:39:39'),
(182, 182, 'SUNI', 'SURANI, NY', 'P', '51-60', '2020-07-13', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-07-29', 'APD/Sembuh  Status Keluar', '2020-07-13 03:48:27', '2020-11-25 08:39:39'),
(183, 183, 'MARS', 'MARSIATI, NY', 'P', '41-50', '2020-07-12', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Suspect', '2020-07-20', 'APD/Sembuh  Status Keluar', '2020-07-13 03:46:17', '2020-11-25 08:39:39'),
(184, 184, 'EIM', 'ETNA IYANA MISKIYAH, NY', 'P', '31-40', '2020-07-10', 'JAWA TIMUR', 'Kediri', 'MOJO', 'Rawat Inap', 'Suspect', '2020-07-28', 'APD/Sembuh  Status Keluar', '2020-07-13 03:40:39', '2020-11-25 08:39:39'),
(185, 185, 'AW BY', 'ANNA WAHYUNINGSIH, BY, NY', 'P', '1-10', '2020-07-11', 'JAWA TENGAH', 'Kota Semarang', 'GAYAMSARI', 'Rawat Inap', 'Suspect', '2020-07-16', 'APD/Sembuh  Status Keluar', '2020-07-13 03:28:03', '2020-11-25 08:39:39'),
(186, 186, 'AW', 'ANNA WAHYUNINGSIH, NY', 'P', '21-30', '2020-07-10', 'JAWA TENGAH', 'Kota Semarang', 'GAYAMSARI', 'Rawat Inap', 'Suspect', '2020-07-24', 'APD/Sembuh  Status Keluar', '2020-07-13 03:25:15', '2020-11-25 08:39:39'),
(187, 187, 'ROYEM', 'ROCHANIYEM, NY', 'P', '51-60', '2020-07-11', 'JAWA TENGAH', 'Kendal', 'LIMBANGAN', 'Rawat Inap', 'Suspect', '2020-07-16', 'APD/Sembuh  Status Keluar', '2020-07-13 03:15:04', '2020-11-25 08:39:39'),
(188, 188, 'IDC', 'INDRO DWI CAHYO, TN', 'L', '51-60', '2020-07-13', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-07-29', 'APD/Sembuh  Status Keluar', '2020-07-13 03:10:54', '2020-11-25 08:39:39'),
(189, 189, 'ADJ', 'ARIS DJUMAUN, TN', 'L', '61-70', '2020-07-10', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-07-14', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-13 03:06:22', '2020-11-25 08:39:39'),
(190, 190, 'AS', 'AGUS SUPRIYANTO, TN', 'L', '41-50', '2020-07-11', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-07-17', 'APD/Sembuh  Status Keluar', '2020-07-13 03:03:52', '2020-11-25 08:39:39'),
(191, 191, 'TK', 'TONI KURNIANTO, TN', 'L', '51-60', '2020-07-11', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-07-12', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-07-13 03:00:31', '2020-11-25 08:39:39'),
(192, 192, 'SMN', 'SUMARNI, NY', 'P', '51-60', '2020-07-05', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-17', 'APD/Sembuh  Status Keluar', '2020-07-09 19:23:21', '2020-11-25 08:39:39'),
(193, 193, 'IBP', 'IVAN BOGAN PRASETYO, TN', 'L', '21-30', '2020-07-04', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-07-17', 'APD/Sembuh  Status Keluar', '2020-07-09 19:21:57', '2020-11-25 08:39:39'),
(194, 194, 'FF', 'FENDI FERDIANA, TN', 'L', '31-40', '2020-07-05', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Suspect', '2072-01-12', 'APD/Sembuh  Status Keluar', '2020-07-09 19:20:14', '2020-11-25 08:39:39'),
(195, 195, 'KAS', 'KASMI, NY', 'P', '51-60', '2020-07-05', 'JAWA TENGAH', 'Demak', 'MRANGGEN', 'Rawat Inap', 'Suspect', '2020-07-12', 'APD/Sembuh  Status Keluar', '2020-07-09 19:18:44', '2020-11-25 08:39:39'),
(196, 196, 'SUHA', 'SUHARTI, NY', 'P', '51-60', '2020-07-03', 'JAWA TENGAH', 'Kendal', 'PATEBON', 'Rawat Inap', 'Suspect', '2020-07-13', 'APD/Sembuh  Status Keluar', '2020-07-09 19:15:47', '2020-11-25 08:39:39'),
(197, 197, 'SAP', 'SAPARUDDIN, TN', 'L', '51-60', '2020-07-10', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-07-16', 'APD/Sembuh  Status Keluar', '2020-07-10 03:29:43', '2020-11-25 08:39:39'),
(198, 198, 'LAT', 'LATIP, TN', 'L', '51-60', '2020-07-08', 'JAWA TENGAH', 'Blora', 'BANJAREJO', 'Rawat Inap', 'Suspect', '2020-07-25', 'APD/Sembuh  Status Keluar', '2020-07-10 03:28:20', '2020-11-25 08:39:39'),
(199, 199, 'SWN', 'SUWARNO, TN', 'L', '51-60', '2020-07-08', 'JAWA TENGAH', 'Kendal', 'CEPIRING', 'Rawat Inap', 'Suspect', '2020-07-23', 'APD/Sembuh  Status Keluar', '2020-07-10 03:26:13', '2020-11-25 08:39:39'),
(200, 200, 'FY', 'FATAH YANTI ,NY', 'P', '51-60', '2020-07-10', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-29', 'APD/Sembuh  Status Keluar', '2020-07-10 02:05:33', '2020-11-25 08:39:39'),
(201, 201, 'AR', 'ABDUR ROUF, TN', 'L', '41-50', '2020-07-10', 'JAWA TENGAH', 'Rembang', 'SARANG', 'Rawat Inap', 'Konfirmasi', '2020-07-28', 'APD/Sembuh  Status Keluar', '2020-07-10 01:58:58', '2020-11-25 08:39:39'),
(202, 202, 'AGSW', 'AG SETIYO WIDODO, TN', 'L', '31-40', '2020-07-09', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-23', 'APD/Sembuh  Status Keluar', '2020-07-08 20:35:10', '2020-11-25 08:39:39'),
(203, 203, 'ISIN', 'MUHLISIN, TN', 'L', '41-50', '2020-07-09', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-15', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-08 20:32:40', '2020-11-25 08:39:39'),
(204, 204, 'SUP', 'SUPARMIN', 'L', '81-100', '2020-07-08', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'IGD', 'Suspect', '2020-07-08', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-07-09 01:28:34', '2020-11-25 08:39:39'),
(205, 205, 'NGAD', 'NGADINO, TN', 'L', '61-70', '2020-07-07', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-07-15', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-07-08 01:27:52', '2020-11-25 08:39:39'),
(206, 206, 'DKS', 'DWUI KARTIKA SARI, NN', 'P', '11-20', '2020-07-07', 'JAWA TENGAH', 'Jepara', 'PECANGAAN', 'Rawat Inap', 'Suspect', '2020-07-15', 'APD/Sembuh  Status Keluar', '2020-07-08 01:25:49', '2020-11-25 08:39:39'),
(207, 207, 'KAS', 'KASWATI, NY', 'P', '51-60', '2020-07-06', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Suspect', '2020-07-12', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-07-08 01:21:08', '2020-11-25 08:39:39'),
(208, 208, 'STI', 'SURTI, NY', 'P', '31-40', '2020-07-06', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-07-19', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-08 01:17:49', '2020-11-25 08:39:39'),
(209, 209, 'AMB', 'ALIFATUL MUSAROFAH, BY, NY', 'L', '1-10', '2020-07-04', 'JAWA TENGAH', 'Demak', 'KARANGAWEN', 'Rawat Inap', 'Suspect', '2020-07-12', 'APD/Sembuh  Status Keluar', '2020-07-06 01:40:43', '2020-11-25 08:39:39'),
(210, 210, 'AM', 'ALIFATUL MUSAROFAH, NY', 'P', '21-30', '2020-07-04', 'JAWA TENGAH', 'Demak', 'KARANGAWEN', 'Rawat Inap', 'Suspect', '2020-07-12', 'APD/Sembuh  Status Keluar', '2020-07-06 01:39:14', '2020-11-25 08:39:39'),
(211, 211, 'YUS', 'YUSTANTIN, NY', 'P', '61-70', '2020-07-03', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-07-11', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-06 01:31:49', '2020-11-25 08:39:39'),
(212, 212, 'JUMA', 'JUMARI', 'L', '41-50', '2020-07-05', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-22', 'APD/Sembuh  Status Keluar', '2020-07-06 01:26:14', '2020-11-25 08:39:39'),
(213, 213, 'IMIN', 'MARIMIN', 'L', '51-60', '2020-07-05', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-07-11', 'Meninggal / Konfirmasi  Status Keluar', '2020-07-06 01:24:12', '2020-11-25 08:39:39'),
(214, 214, 'AL', 'ALDYMAS RIZKY GATOT PRATAMA AMANULLAH,TN', 'L', '21-30', '2020-07-05', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-22', 'APD/Sembuh  Status Keluar', '2020-07-06 01:22:28', '2020-11-25 08:39:39'),
(215, 215, 'MYT', 'MARYATI, NY', 'P', '61-70', '2020-07-02', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-07-22', 'APD/Sembuh  Status Keluar', '2020-07-06 01:18:30', '2020-11-25 08:39:39'),
(216, 216, 'SHN', 'SUHARNI, NY', 'P', '61-70', '2020-07-03', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-07-07', 'APD/Sembuh  Status Keluar', '2020-07-03 02:51:55', '2020-11-25 08:39:39'),
(217, 217, 'JIYEM', 'MUJIYEM', 'P', '51-60', '2020-07-03', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-07-10', 'APD/Sembuh  Status Keluar', '2020-07-03 02:48:45', '2020-11-25 08:39:39'),
(218, 218, 'JUM', 'JUMINI, NY', 'P', '51-60', '2020-07-02', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-30', 'APD/Sembuh  Status Keluar', '2020-07-02 04:21:20', '2020-11-25 08:39:39'),
(219, 219, 'BS', 'BUDY SANTOSO, TN', 'L', '41-50', '2020-07-02', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-07-15', 'APD/Sembuh  Status Keluar', '2020-07-02 04:19:40', '2020-11-25 08:39:39'),
(220, 220, 'ROSO', 'IMAM SUROSO, TN', 'L', '61-70', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-07-02', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-06-30 04:19:40', '2020-11-25 08:39:39'),
(221, 221, 'SAT', 'SATINAH, NY', 'P', '61-70', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-07-07', 'APD/Sembuh  Status Keluar', '2020-06-30 02:39:49', '2020-11-25 08:39:39'),
(222, 222, 'SUL2', 'SULASTRI, NY', 'P', '51-60', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'GAJAH MUNGKUR', 'Rawat Inap', 'Suspect', '2020-07-10', 'APD/Sembuh  Status Keluar', '2020-06-30 02:37:12', '2020-11-25 08:39:39');
INSERT INTO `covidreportv1` (`id_`, `no_excel`, `inisial`, `nama`, `kelamin`, `usia`, `tgl_masuk`, `provinsi`, `kab_kota`, `kecamatan`, `jenis_pasien`, `status_pasien`, `tgl_keluar`, `status_keluar`, `status_laporan`, `created_at`) VALUES
(223, 223, 'SAN', 'SURYANTO ARIFIN NUGROHO, AN 266224', 'L', '1-10', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-07-06', 'APD/Sembuh  Status Keluar', '2020-06-30 02:35:19', '2020-11-25 08:39:39'),
(224, 224, 'BSR', 'BAGAS SURYA RAMADHAN', 'L', '21-30', '2020-09-30', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-06-30', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-06-30 02:22:00', '2020-11-25 08:39:39'),
(225, 225, 'MKT', 'MARKUAT, TN', 'L', '41-50', '2020-06-30', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Suspect', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-30 02:20:34', '2020-11-25 08:39:39'),
(226, 226, 'TUK', 'TUKIMAN, TN', 'L', '51-60', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-30 02:16:54', '2020-11-25 08:39:39'),
(227, 227, 'ASA', 'ARY SETYO AJI, TN', 'L', '41-50', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-30 02:09:55', '2020-11-25 08:39:39'),
(228, 228, 'ROCH', 'ROCHIMIN, TN', 'L', '51-60', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-16', 'Dirujuk  Status Keluar', '2020-06-28 18:45:41', '2020-11-25 08:39:39'),
(229, 229, 'NM', 'NANA MARYANI, NY', 'P', '21-30', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-28 18:42:52', '2020-11-25 08:39:39'),
(230, 230, 'SUC', 'SUCIYANTO, TN', 'L', '31-40', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-28 18:41:06', '2020-11-25 08:39:39'),
(231, 231, 'SUY', 'SUYARDI, TN', 'L', '51-60', '2020-06-29', 'JAWA TENGAH', 'Kota Semarang', 'GAJAH MUNGKUR', 'Rawat Inap', 'Suspect', '2020-07-05', 'APS  Status Keluar', '2020-06-28 18:32:56', '2020-11-25 08:39:39'),
(232, 232, 'CR', 'CHANDRA ROMANI, NY', 'P', '41-50', '2020-06-27', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-29 02:56:22', '2020-11-25 08:39:39'),
(233, 233, 'PAN', 'PANUDI, TN', 'L', '61-70', '2020-06-27', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Suspect', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-29 02:53:04', '2020-11-25 08:39:39'),
(234, 234, 'SKD', 'SUKANDAR, TN', 'L', '31-40', '2020-06-27', 'JAWA TENGAH', 'Kota Semarang', 'TEMBALANG', 'Rawat Inap', 'Konfirmasi', '2020-07-12', 'APD/Sembuh  Status Keluar', '2020-06-29 02:48:21', '2020-11-25 08:39:39'),
(235, 235, 'ROC', 'ROCHMAD', 'L', '41-50', '2020-06-27', 'JAWA TENGAH', 'Kendal', 'BRANGSONG', 'Rawat Inap', 'Konfirmasi', '2020-07-01', 'Meninggal / Konfirmasi  Status Keluar', '2020-06-29 02:24:10', '2020-11-25 08:39:39'),
(236, 236, 'MB', 'MOHAMMAD BELALUDIN, AN', 'L', '1-10', '2020-06-26', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-07-02', 'APD/Sembuh  Status Keluar', '2020-06-29 02:20:01', '2020-11-25 08:39:39'),
(237, 237, 'WAL', 'WALIDI, TN', 'L', '41-50', '2020-06-27', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-29 02:14:34', '2020-11-25 08:39:39'),
(238, 238, 'YAP', 'YUDHA ARYA PRIMA', 'L', '11-20', '2020-06-25', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-06-29', 'APS  Status Keluar', '2020-06-29 02:10:48', '2020-11-25 08:39:39'),
(239, 239, 'PON', 'PONIYEM, NY', 'P', '61-70', '2020-06-25', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-22', 'APD/Sembuh  Status Keluar', '2020-06-29 02:09:15', '2020-11-25 08:39:39'),
(240, 240, 'PRI', 'PRIHANTARA, TN', 'L', '51-60', '2020-06-25', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-26 05:39:55', '2020-11-25 08:39:39'),
(241, 241, 'TAP', 'TRIYANA AGUS PARWANTA,TN', 'L', '51-60', '2020-06-25', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-26 05:37:36', '2020-11-25 08:39:39'),
(242, 242, 'SR', 'SUBRI RAHMAN, TN', 'L', '41-50', '2020-06-24', 'JAWA TENGAH', 'Boyolali', 'BANYUDONO', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-26 04:30:26', '2020-11-25 08:39:39'),
(243, 243, 'PAIM', 'PAIMIN, TN', 'L', '71-80', '2020-06-24', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '1970-01-01', 'APD/Sembuh  Status Keluar', '2020-06-24 18:07:30', '2020-11-25 08:39:39'),
(244, 244, 'SUP', 'SUPROJO', 'L', '41-50', '2020-06-24', 'JAWA TENGAH', 'Magelang', 'MUNGKID', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-24 18:05:20', '2020-11-25 08:39:39'),
(245, 245, 'KAS', 'KASMARI, TN', 'L', '31-40', '2020-06-23', 'JAWA TENGAH', 'Kota Semarang', 'TEMBALANG', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-24 18:02:12', '2020-11-25 08:39:39'),
(246, 246, 'SH,BY', 'SRI HARTINI, BY, NY', 'P', '1-10', '2020-06-24', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-06-30', 'APD/Sembuh  Status Keluar', '2020-06-25 05:49:31', '2020-11-25 08:39:39'),
(247, 247, 'SH', 'SRI HARTINI, NY', 'P', '31-40', '2020-06-24', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-06-30', 'APD/Sembuh  Status Keluar', '2020-06-25 05:35:08', '2020-11-25 08:39:39'),
(248, 248, 'MURD', 'MURDIYATI, NY', 'P', '51-60', '2020-06-17', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-06-27', 'APD/Sembuh  Status Keluar', '2020-06-23 02:29:30', '2020-11-25 08:39:39'),
(249, 249, 'NCP', 'NOVIANTO CATUR PRASETYO, TN', 'L', '31-40', '2020-06-22', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-06-26', 'Meninggal / Konfirmasi  Status Keluar', '2020-06-23 00:44:02', '2020-11-25 08:39:39'),
(250, 250, 'KASM', 'KASMIJAH, NY', 'P', '71-80', '2020-06-21', 'JAWA TENGAH', 'Kendal', 'BRANGSONG', 'Rawat Inap', 'Suspect', '2020-06-27', 'APD/Sembuh  Status Keluar', '2020-06-23 00:34:06', '2020-11-25 08:39:39'),
(251, 251, 'SB', 'SITI BAYANAH,NY', 'P', '51-60', '2020-06-22', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-07-08', 'APD/Sembuh  Status Keluar', '2020-06-23 00:25:21', '2020-11-25 08:39:39'),
(252, 252, 'YL', 'YULI, NY', 'P', '51-60', '2020-06-22', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-07-02', 'APD/Sembuh  Status Keluar', '2020-06-22 04:25:10', '2020-11-25 08:39:39'),
(253, 253, 'JAR', 'JARIYATUN, NY', 'P', '61-70', '2020-06-15', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Konfirmasi', '2020-07-12', 'APD/Sembuh  Status Keluar', '2020-06-22 04:22:29', '2020-11-25 08:39:39'),
(254, 254, 'YBS', 'YUSUF BUDI SANTOSO, TN', 'L', '51-60', '2020-06-22', 'JAWA TENGAH', 'Kota Semarang', 'GAYAMSARI', 'Rawat Inap', 'Konfirmasi', '2020-07-07', 'APD/Sembuh  Status Keluar', '2020-06-22 04:14:03', '2020-11-25 08:39:40'),
(255, 255, 'KPHP', 'R KOTTO PRABOWO HARTO PUTRANTO, TN', 'L', '51-60', '2020-06-19', 'JAWA TENGAH', 'Kota Semarang', 'TEMBALANG', 'Rawat Inap', 'Suspect', '2020-06-26', 'APD/Sembuh  Status Keluar', '2020-06-22 03:47:34', '2020-11-25 08:39:40'),
(256, 256, 'SPR', 'SUPARI, TN', 'L', '51-60', '2020-06-20', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-06-26', 'APD/Sembuh  Status Keluar', '2020-06-22 03:41:41', '2020-11-25 08:39:40'),
(257, 257, 'TUK', 'TUKIYEM , NY', 'P', '61-70', '2020-06-20', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-17', 'APD/Sembuh  Status Keluar', '2020-06-22 03:32:33', '2020-11-25 08:39:40'),
(258, 258, 'TS', 'TRI SUNARYONO, TN', 'L', '31-40', '2020-06-18', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-18 19:34:59', '2020-11-25 08:39:40'),
(259, 259, 'DDA', 'DANANG DANA ASMARA', 'L', '41-50', '2020-06-18', 'JAWA TIMUR', 'Jember', 'KENCONG', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-18 19:32:32', '2020-11-25 08:39:40'),
(260, 260, 'SZ', 'SITI ZULAIKHAH, NY', 'P', '41-50', '2020-06-18', 'JAWA TENGAH', 'Kendal', 'PLANTUNGAN', 'Rawat Inap', 'Konfirmasi', '2020-06-29', 'APD/Sembuh  Status Keluar', '2020-06-18 19:18:40', '2020-11-25 08:39:40'),
(261, 261, 'WM', 'WAHJUNINGSIH MARIJONO, NY', 'P', '61-70', '2020-06-18', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-06-21', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-06-18 19:16:20', '2020-11-25 08:39:40'),
(262, 262, 'SG', 'SUGIARTI, NY', 'P', '51-60', '2020-06-18', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-06-18', 'Meninggal / Konfirmasi  Status Keluar', '2020-06-18 00:34:56', '2020-11-25 08:39:40'),
(263, 263, 'MRJ', 'MARDJI , TN', 'L', '81-100', '2020-06-17', 'JAWA TENGAH', 'Kendal', 'PLANTUNGAN', 'Rawat Inap', 'Suspect', '2020-06-24', 'APD/Sembuh  Status Keluar', '2020-06-16 18:51:09', '2020-11-25 08:39:40'),
(264, 264, 'SUL1', 'SULAMI, NY', 'P', '61-70', '2020-06-16', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-06-27', 'APD/Sembuh  Status Keluar', '2020-06-17 04:31:29', '2020-11-25 08:39:40'),
(265, 265, 'SHOL', 'SHOLICHIN', 'L', '41-50', '2020-06-15', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-06-24', 'APD/Sembuh  Status Keluar', '2020-06-16 02:06:37', '2020-11-25 08:39:40'),
(266, 266, 'ROH', 'MUASAROH, NY', 'P', '41-50', '2020-06-15', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-16 00:45:04', '2020-11-25 08:39:40'),
(267, 267, 'APJ', 'ARI PUJIYANTO, TN', 'L', '41-50', '2020-06-15', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-06-29', 'APD/Sembuh  Status Keluar', '2020-06-16 00:40:57', '2020-11-25 08:39:40'),
(268, 268, 'KAS', 'KASMIRAH , NY', 'P', '61-70', '2020-06-15', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-06-15', 'Meninggal / Konfirmasi  Status Keluar', '2020-06-14 19:17:32', '2020-11-25 08:39:40'),
(269, 269, 'SUT', 'SUTARMIN, TN', 'L', '61-70', '2020-06-11', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-06-23', 'APD/Sembuh  Status Keluar', '2020-06-15 00:23:14', '2020-11-25 08:39:40'),
(270, 270, 'WAR', 'WARTINI', 'P', '51-60', '2020-06-12', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-06-16', 'Isolasi Mandiri di rumah  Status Keluar', '2020-06-15 00:21:22', '2020-11-25 08:39:40'),
(271, 271, 'AI', 'ANTONIUS ISWANTORO, TN', 'L', '41-50', '2020-06-13', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-07-05', 'APD/Sembuh  Status Keluar', '2020-06-15 00:19:32', '2020-11-25 08:39:40'),
(272, 272, 'KAM', 'KAMDAN, TN', 'L', '41-50', '2020-06-13', 'JAWA TENGAH', 'Grobogan', 'GROBOGAN', 'Rawat Inap', 'Suspect', '2020-06-23', 'APD/Sembuh  Status Keluar', '2020-06-15 00:17:43', '2020-11-25 08:39:40'),
(273, 273, 'TR', 'TRINEM', 'P', '61-70', '2020-06-12', 'JAWA TENGAH', 'Wonogiri', 'WONOGIRI', 'Rawat Inap', 'Konfirmasi', '2020-06-14', 'Meninggal / Konfirmasi  Status Keluar', '2020-06-15 00:07:19', '2020-11-25 08:39:40'),
(274, 274, 'DP', 'DIAN APRILLIANTO, TN', 'L', '21-30', '2020-06-10', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-06-25', 'APD/Sembuh  Status Keluar', '2020-06-12 00:53:39', '2020-11-25 08:39:40'),
(275, 275, 'MAAA', 'MUHAMAD ARIF AGUS ARDIANSYAH, TN', 'L', '31-40', '2020-06-11', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-06-28', 'APD/Sembuh  Status Keluar', '2020-06-12 00:49:17', '2020-11-25 08:39:40'),
(276, 276, 'EW', 'ELIS WIDAYATI, NY', 'P', '41-50', '2020-06-10', 'JAWA TENGAH', 'Kota Semarang', 'BANYUMANIK', 'Rawat Inap', 'Suspect', '2020-06-18', 'APD/Sembuh  Status Keluar', '2020-06-12 00:35:42', '2020-11-25 08:39:40'),
(277, 277, 'SAM', 'SAM\\\'ANI, TN', 'L', '41-50', '2020-06-10', 'JAWA BARAT', 'Bogor', NULL, 'Rawat Inap', 'Konfirmasi', '2020-07-07', 'APD/Sembuh  Status Keluar', '2020-06-11 01:47:14', '2020-11-25 08:39:40'),
(278, 278, 'IJO', 'KASMIJO, TN', 'L', '41-50', '2020-06-09', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Suspect', '2020-06-10', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-06-11 01:38:05', '2020-11-25 08:39:40'),
(279, 279, 'ANH', 'ALIF NOOR HIDAYATI, NY', 'P', '41-50', '2020-06-11', 'JAWA TENGAH', 'Kota Semarang', 'GENUK', 'Rawat Inap', 'Konfirmasi', '2020-06-28', 'APD/Sembuh  Status Keluar', '2020-06-11 01:29:35', '2020-11-25 08:39:40'),
(280, 280, 'PTK', 'PARTIK, NY', 'P', '61-70', '2020-06-09', 'JAWA TENGAH', 'Kota Semarang', 'TEMBALANG', 'Rawat Inap', 'Suspect', '2020-06-22', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-06-10 02:55:09', '2020-11-25 08:39:40'),
(281, 281, 'SUM', 'SUMIYATI, NY', 'P', '51-60', '2020-06-03', 'JAWA TENGAH', 'Kota Semarang', 'GAYAMSARI', 'Rawat Inap', 'Konfirmasi', '2020-06-28', 'APD/Sembuh  Status Keluar', '2020-06-09 01:10:49', '2020-11-25 08:39:40'),
(282, 282, 'YAP', 'YUDHA ADI PRASETYA, TN', 'L', '11-20', '2020-06-09', 'JAWA TENGAH', 'Kota Semarang', 'PEDURUNGAN', 'Rawat Inap', 'Suspect', '2020-06-25', 'APD/Sembuh  Status Keluar', '2020-06-09 01:08:04', '2020-11-25 08:39:40'),
(283, 283, 'SUL', 'SULASTRI, NY', 'P', '61-70', '2020-06-07', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Konfirmasi', '2020-07-13', 'APD/Sembuh  Status Keluar', '2020-06-08 02:06:46', '2020-11-25 08:39:40'),
(284, 284, 'ML', 'MOCH LISIN, TN', 'L', '41-50', '2020-06-07', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-06-11', 'APD/Sembuh  Status Keluar', '2020-06-08 02:02:27', '2020-11-25 08:39:40'),
(285, 285, 'MDY', 'MARDIYAH, NY', 'P', '51-60', '2020-06-07', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-06-23', 'APD/Sembuh  Status Keluar', '2020-06-08 02:00:49', '2020-11-25 08:39:40'),
(286, 286, 'TAR', 'TARMI, NY', 'P', '41-50', '2020-06-08', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-06-23', 'APD/Sembuh  Status Keluar', '2020-06-08 01:59:04', '2020-11-25 08:39:40'),
(287, 287, 'PJO', 'PUJONO, TN', 'L', '61-70', '2020-06-08', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Suspect', '2020-06-23', 'APD/Sembuh  Status Keluar', '2020-06-08 01:51:06', '2020-11-25 08:39:40'),
(288, 288, 'NP', 'NING PRATIWI', 'P', '31-40', '2020-06-08', 'JAWA TENGAH', 'Kota Semarang', 'BANYUMANIK', 'Rawat Inap', 'Suspect', '2020-06-11', 'APD/Sembuh  Status Keluar', '2020-06-08 01:48:58', '2020-11-25 08:39:40'),
(289, 289, 'FA', 'FAHMY ARMANSYAH, TN', 'L', '41-50', '2020-06-05', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-06-23', 'APD/Sembuh  Status Keluar', '2020-06-08 01:11:16', '2020-11-25 08:39:40'),
(290, 290, 'AK', 'ACHMAD KAERONI, TN', 'L', '61-70', '2020-06-04', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-06-07', 'Meninggal / Konfirmasi  Status Keluar', '2020-06-08 01:09:48', '2020-11-25 08:39:40'),
(291, 291, 'BR', 'BIBIT RIYANTO, TN', 'L', '61-70', '2020-06-03', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-06-28', 'Isolasi Mandiri di rumah  Status Keluar', '2020-06-08 01:07:44', '2020-11-25 08:39:40'),
(292, 292, 'KAR', 'KARYANTO, TN', 'L', '41-50', '2020-05-28', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Suspect', '2020-06-05', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-06-05 03:41:06', '2020-11-25 08:39:40'),
(293, 293, 'JUM', 'JUMAI', 'L', '51-60', '2020-05-30', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-06-10', 'APS  Status Keluar', '2020-06-05 03:37:50', '2020-11-25 08:39:40'),
(294, 294, 'ANM', 'AYARA NASWA MAHESWARI, AN', 'P', '1-10', '2020-04-10', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Suspect', '2020-04-14', 'APD/Sembuh  Status Keluar', '2020-06-03 20:18:39', '2020-11-25 08:39:40'),
(295, 295, 'WID', 'WIDORIYANTO, TN', 'L', '41-50', '2020-05-04', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Suspect', '2020-05-16', 'APD/Sembuh  Status Keluar', '2020-06-03 18:53:02', '2020-11-25 08:39:40'),
(296, 296, 'SAN', 'SANTOSO', 'L', '41-50', '2020-05-07', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-05-11', 'APD/Sembuh  Status Keluar', '2020-06-03 18:51:11', '2020-11-25 08:39:40'),
(297, 297, 'SAR', 'SARPANI, TN', 'L', '51-60', '2020-05-06', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Inap', 'Suspect', '2020-05-11', 'APD/Sembuh  Status Keluar', '2020-06-03 18:49:06', '2020-11-25 08:39:40'),
(298, 298, 'AR', 'ANITA RAHMAWATI', 'P', '21-30', '2020-04-29', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Suspect', '2020-05-06', 'APD/Sembuh  Status Keluar', '2020-06-03 18:45:46', '2020-11-25 08:39:40'),
(299, 299, 'PRF', 'PUTRI RAMANDA FITRIANA, AN', 'P', '11-20', '2020-06-03', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-06-09', 'APD/Sembuh  Status Keluar', '2020-06-04 01:06:03', '2020-11-25 08:39:40'),
(300, 300, 'MFA', 'MUHAMMAD FATAH ARRIZQI', 'L', '1-10', '2020-06-03', 'JAWA TENGAH', 'Kota Semarang', 'PEDURUNGAN', 'Rawat Inap', 'Suspect', '2020-06-09', 'APD/Sembuh  Status Keluar', '2020-06-03 00:51:35', '2020-11-25 08:39:40'),
(301, 301, 'SH', 'SUPRI HASTUTI, NY', 'P', '61-70', '2020-06-01', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-06-07', 'APD/Sembuh  Status Keluar', '2020-06-02 04:24:47', '2020-11-25 08:39:40'),
(302, 302, 'FY', 'FANDY YULIANSYAH, TN', 'L', '21-30', '2020-06-01', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Suspect', '2020-06-05', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-06-02 04:21:22', '2020-11-25 08:39:40'),
(303, 303, 'SJ', 'SARIDJO', 'L', '61-70', '2020-06-01', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Konfirmasi', '2020-06-01', 'Meninggal / Konfirmasi  Status Keluar', '2020-06-02 04:15:09', '2020-11-25 08:39:40'),
(304, 304, 'TH', 'TOTOK HARIYANTO, TN', 'L', '31-40', '2020-05-31', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-06-10', 'APD/Sembuh  Status Keluar', '2020-06-02 04:06:43', '2020-11-25 08:39:40'),
(305, 305, 'ES', 'EDI SURYANTO, TN', 'L', '41-50', '2020-05-31', 'JAWA TENGAH', 'Kota Semarang', 'GENUK', 'Rawat Inap', 'Konfirmasi', '2020-06-28', 'APD/Sembuh  Status Keluar', '2020-06-02 04:04:53', '2020-11-25 08:39:40'),
(306, 306, 'JUM', 'JUMADI, TN', 'L', '51-60', '2020-05-27', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Konfirmasi', '2020-06-02', 'APD/Sembuh  Status Keluar', '2020-05-28 18:49:17', '2020-11-25 08:39:40'),
(307, 307, 'KEY', 'KEYZA GIAT ALFARIZKI, AN', 'L', '1-10', '2020-05-28', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Inap', 'Suspect', '2020-05-28', 'APD/Sembuh  Status Keluar', '2020-05-29 01:07:47', '2020-11-25 08:39:40'),
(308, 308, 'SUN', 'SUNARMI, NY (NTB+)', 'P', '61-70', '2020-05-27', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-05-29', 'Meninggal / Konfirmasi  Status Keluar', '2020-05-28 03:53:06', '2020-11-25 08:39:40'),
(309, 309, 'MUS', 'MUSRIPAH', 'P', '51-60', '2020-04-28', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-05-07', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-05-26 19:47:11', '2020-11-25 08:39:40'),
(310, 310, 'GS', 'GODANG SIAGIAN', 'P', '61-70', '2020-04-30', 'SUMATERA UTARA', 'Simalungun', 'HUTABAYU RAJA', 'Rawat Inap', 'Suspect', '2020-05-04', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-05-26 19:34:37', '2020-11-25 08:39:40'),
(311, 311, 'ATM', 'ANDI TRI MINTARSO, TN', 'L', '21-30', '2020-04-15', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-04-29', 'APD/Sembuh  Status Keluar', '2020-05-27 03:01:37', '2020-11-25 08:39:40'),
(312, 312, 'AP', 'ALESHA PRAMESWARI S, AN', 'P', '1-10', '2020-05-25', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-06-02', 'APD/Sembuh  Status Keluar', '2020-05-27 02:16:00', '2020-11-25 08:39:40'),
(313, 313, 'SYAL', 'AMANDA SYALUMITA', 'P', '11-20', '2020-05-22', 'LAMPUNG', 'Tulang Bawang Barat', 'TUMI JAJAR', 'Rawat Inap', 'Suspect', '2020-06-07', 'APD/Sembuh  Status Keluar', '2020-05-27 02:08:56', '2020-11-25 08:39:40'),
(314, 314, 'MUD', 'MUDJIMAN BA, SH, TN', 'L', '51-60', '2020-05-23', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG TENGAH', 'Rawat Inap', 'Konfirmasi', '2020-06-02', 'APD/Sembuh  Status Keluar', '2020-05-27 02:04:24', '2020-11-25 08:39:40'),
(315, 315, 'AS', 'ASNESTIA', 'P', '41-50', '2020-05-19', 'D I YOGYAKARTA', 'Kulon Progo', 'GIRIMULYO', 'Rawat Inap', 'Suspect', '2020-05-21', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-05-22 02:37:33', '2020-11-25 08:39:40'),
(316, 316, 'ASP', 'ASPARI', 'L', '81-100', '2020-05-18', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-05-19', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-05-22 02:24:07', '2020-11-25 08:39:40'),
(317, 317, 'KBL', 'KABUL', 'L', '71-80', '2020-05-21', 'JAWA TENGAH', 'Grobogan', 'TEGOWANU', 'Rawat Inap', 'Suspect', '2020-05-25', 'APD/Sembuh  Status Keluar', '2020-05-22 01:54:25', '2020-11-25 08:39:40'),
(318, 318, 'GIT', 'GITO', 'L', '71-80', '2020-05-20', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-05-27', 'APD/Sembuh  Status Keluar', '2020-05-22 01:51:52', '2020-11-25 08:39:40'),
(319, 319, 'GUN', 'A. GUNAWAN AGUNG SULISTIYO', 'L', '51-60', '2020-05-20', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-05-23', 'APD/Sembuh  Status Keluar', '2020-05-22 01:50:12', '2020-11-25 08:39:40'),
(320, 320, 'TUG', 'TUGIYONO, TN', 'L', '31-40', '2020-05-04', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-06-02', 'APD/Sembuh  Status Keluar', '2020-05-18 04:21:01', '2020-11-25 08:39:40'),
(321, 321, 'ASN', 'ALBERTA SIA NANDA, AN', 'P', '11-20', '2020-05-14', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Inap', 'Suspect', '2020-05-16', 'APD/Sembuh  Status Keluar', '2020-05-15 03:03:49', '2020-11-25 08:39:40'),
(322, 322, 'SUY', 'SUYANTO, TN', 'L', '51-60', '2020-05-10', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-05-15', 'APD/Sembuh  Status Keluar', '2020-05-15 02:46:56', '2020-11-25 08:39:40'),
(323, 323, 'MS', 'MUHAMAD SOLICHIN, TN', 'L', '11-20', '2020-05-12', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-05-28', 'APD/Sembuh  Status Keluar', '2020-05-15 02:44:03', '2020-11-25 08:39:40'),
(324, 324, 'PUJ', 'PUJI PRIYANTO, TN', 'L', '21-30', '2020-05-12', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Konfirmasi', '2020-05-28', 'APD/Sembuh  Status Keluar', '2020-05-15 02:41:15', '2020-11-25 08:39:40'),
(325, 325, 'M', 'MAKRUPI, TN', 'P', '81-100', '2020-04-09', 'JAWA TENGAH', 'Kendal', 'BOJA', 'Rawat Inap', 'Konfirmasi', '2020-05-06', 'APD/Sembuh  Status Keluar', '2020-05-03 19:11:16', '2020-11-25 08:39:40'),
(326, 326, 'MYF', 'ALBERTA SIA NANDA, AN', 'L', '11-20', '2020-05-02', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Inap', 'Suspect', '2020-05-06', 'APD/Sembuh  Status Keluar', '2020-05-03 19:03:00', '2020-11-25 08:39:40'),
(327, 327, 'FFK', 'FATAN FATHUL KHOIRI, AN', 'L', '1-10', '2020-05-02', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-05-08', 'APD/Sembuh  Status Keluar', '2020-05-03 18:59:13', '2020-11-25 08:39:40'),
(328, 328, 'RAN', 'RAFARDHAN AKMAL NUGROHO, AN', 'L', '1-10', '2020-05-02', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-05-06', 'APD/Sembuh  Status Keluar', '2020-05-03 18:56:32', '2020-11-25 08:39:40'),
(329, 329, 'SKT', 'SUKATUN, NY', 'P', '51-60', '2020-04-29', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Suspect', '2020-05-06', 'APD/Sembuh  Status Keluar', '2020-05-03 18:51:42', '2020-11-25 08:39:40'),
(330, 330, 'SYT', 'SUNYOTO, TN', 'L', '51-60', '2020-04-23', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Inap', 'Suspect', '2020-05-18', 'APD/Sembuh  Status Keluar', '2020-05-03 18:47:25', '2020-11-25 08:39:40'),
(331, 331, 'AI', 'AGUSTINUS ISTANTO ,TN', 'L', '61-70', '2020-04-24', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-05-11', 'APD/Sembuh  Status Keluar', '2020-04-28 04:00:05', '2020-11-25 08:39:40'),
(332, 332, 'J', 'JAMI, NY', 'L', '51-60', '2020-04-22', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Inap', 'Suspect', '2020-05-06', 'APD/Sembuh  Status Keluar', '2020-04-28 03:54:47', '2020-11-25 08:39:40'),
(333, 333, 'TY', 'TRIYONO, TN', 'L', '11-20', '2020-04-19', 'JAWA TENGAH', 'Magelang', 'GRABAG', 'Rawat Inap', 'Suspect', '2020-04-30', 'APD/Sembuh  Status Keluar', '2020-04-28 02:55:08', '2020-11-25 08:39:40'),
(334, 334, 'AN', 'ATIK NURCHAYATUN, NY', 'P', '31-40', '2020-04-19', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-04-30', 'APD/Sembuh  Status Keluar', '2020-04-28 02:36:25', '2020-11-25 08:39:40'),
(335, 335, 'SGI', 'SUGIYARTI , NY', 'P', '61-70', '2020-04-21', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Inap', 'Suspect', '2020-04-28', 'APD/Sembuh  Status Keluar', '2020-04-28 02:32:56', '2020-11-25 08:39:40'),
(336, 336, 'TS', 'TRI SUTARNI, NY', 'P', '51-60', '2020-04-21', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-04-28', 'APD/Sembuh  Status Keluar', '2020-04-28 02:27:28', '2020-11-25 08:39:40'),
(337, 337, 'DS', 'DEVIANI SINTHA, NN', 'P', '11-20', '2020-04-21', 'JAWA TENGAH', 'Boyolali', 'CEPOGO', 'Rawat Inap', 'Suspect', '2020-04-28', 'APD/Sembuh  Status Keluar', '2020-04-28 02:19:56', '2020-11-25 08:39:40'),
(338, 338, 'HS', 'HERRU SUSANTO, TN', 'L', '31-40', '2020-04-24', 'JAWA TENGAH', 'Kota Semarang', 'CANDISARI', 'Rawat Inap', 'Suspect', '2020-04-24', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-26 18:45:53', '2020-11-25 08:39:40'),
(339, 339, 'SUT', 'SUTINI, NY', 'P', '61-70', '2020-04-16', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Inap', 'Suspect', '2020-05-03', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-24 02:20:38', '2020-11-25 08:39:40'),
(340, 340, 'EEH', 'EMILIANA ENI HARIATI, NY', 'P', '61-70', '2020-04-21', 'JAWA TENGAH', 'Demak', 'GUNTUR', 'Rawat Jalan', 'Suspect', '2020-04-24', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-22 01:53:01', '2020-11-25 08:39:40'),
(341, 341, 'SRM', 'SARIMAN, TN', 'L', '51-60', '2020-04-21', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-04-23', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-20 20:15:49', '2020-11-25 08:39:40'),
(342, 342, 'SY', 'SUYANTO, TN', 'L', '71-80', '2020-04-21', 'JAWA TENGAH', 'Kota Semarang', 'PEDURUNGAN', 'Rawat Jalan', 'Suspect', '2020-05-09', 'APD/Sembuh  Status Keluar', '2020-04-20 20:10:28', '2020-11-25 08:39:40'),
(343, 343, 'HTS', 'HERI TRI SUSANTO, TN', 'L', '21-30', '2020-04-20', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Jalan', 'Suspect', '2020-04-21', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-20 20:05:56', '2020-11-25 08:39:40'),
(344, 344, 'SL', 'SULASIH, NY', 'P', '61-70', '2020-04-20', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-04-21', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-20 20:01:36', '2020-11-25 08:39:40'),
(345, 345, 'MTT', 'MARTUTI, NY', 'P', '51-60', '2020-04-19', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Jalan', 'Suspect', '2020-04-30', 'APD/Sembuh  Status Keluar', '2020-04-20 19:37:55', '2020-11-25 08:39:40'),
(346, 346, 'ST', 'SUHARTO, TN', 'L', '61-70', '2020-04-18', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-04-22', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-20 19:33:46', '2020-11-25 08:39:40'),
(347, 347, 'RN', 'RASNO, TN', 'L', '61-70', '2020-04-13', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU SELATAN', 'Rawat Jalan', 'Suspect', '2020-04-24', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-20 19:27:01', '2020-11-25 08:39:40'),
(348, 348, 'ABN', 'ALDI BRIANDHITA NIARTO, TN', 'L', '11-20', '2020-04-15', 'JAWA TENGAH', 'Kota Semarang', 'MIJEN', 'Rawat Jalan', 'Suspect', '2020-04-30', 'APD/Sembuh  Status Keluar', '2020-04-14 18:56:27', '2020-11-25 08:39:40'),
(349, 349, 'RMF', 'RAIHAN MOZART FEBRINO K, AN', 'L', '11-20', '2020-04-12', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-04-18', 'APD/Sembuh  Status Keluar', '2020-04-14 18:51:13', '2020-11-25 08:39:40'),
(350, 350, 'ZKT', 'ZIVA KAYLA TAHZANIA, AN', 'P', '11-20', '2020-04-12', 'JAWA TENGAH', 'Semarang', 'TUNTANG', 'Rawat Jalan', 'Suspect', '2020-04-17', 'APD/Sembuh  Status Keluar', '2020-04-14 18:47:04', '2020-11-25 08:39:40'),
(351, 351, 'ADM', 'ANASTASIA DEVI MAHARANI, AN', 'P', '11-20', '2020-04-09', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG UTARA', 'Rawat Jalan', 'Suspect', '2020-04-14', 'APD/Sembuh  Status Keluar', '2020-04-12 18:37:30', '2020-11-25 08:39:40'),
(352, 352, 'GIB', 'GIBRAN AL JARAS SUGIH WASESA, AN', 'L', '1-10', '2020-04-12', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-04-14', 'APD/Sembuh  Status Keluar', '2020-04-12 18:34:23', '2020-11-25 08:39:40'),
(353, 353, 'JW', 'JUWARNI, NY', 'P', '31-40', '2020-04-12', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Jalan', 'Suspect', '2020-04-18', 'APD/Sembuh  Status Keluar', '2020-04-12 18:23:10', '2020-11-25 08:39:40'),
(354, 354, 'ROH', 'ROCHMAH, NY', 'P', '51-60', '2020-04-12', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Jalan', 'Suspect', '2020-04-21', 'APD/Sembuh  Status Keluar', '2020-04-12 18:20:01', '2020-11-25 08:39:40'),
(355, 355, 'SRT', 'SUROTO, TN', 'L', '51-60', '2020-04-11', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU', 'Rawat Jalan', 'Suspect', '2020-04-18', 'APD/Sembuh  Status Keluar', '2020-04-12 18:16:16', '2020-11-25 08:39:40'),
(356, 356, 'SLMT', 'SLAMET,TN', 'L', '51-60', '2020-04-11', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-04-24', 'APD/Sembuh  Status Keluar', '2020-04-12 18:12:15', '2020-11-25 08:39:40'),
(357, 357, 'SAL', 'SALMAN, TN', 'L', '51-60', '2020-04-05', 'JAWA TENGAH', 'Kendal', 'KALIWUNGU SELATAN', 'Rawat Jalan', 'Suspect', '2020-04-13', 'APD/Sembuh  Status Keluar', '2020-04-08 19:03:20', '2020-11-25 08:39:40'),
(358, 358, 'ATAN', 'ANGGARDA TRI ADHI NUGRAHA,TN', 'L', '21-30', '2020-04-02', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-04-06', 'APD/Sembuh  Status Keluar', '2020-04-08 19:00:20', '2020-11-25 08:39:40'),
(359, 359, 'MUC', 'MUCHSIN, TN', 'L', '51-60', '2020-04-02', 'JAWA TENGAH', 'Kota Semarang', 'TUGU', 'Rawat Jalan', 'Suspect', '2020-04-07', 'APD/Sembuh  Status Keluar', '2020-04-08 18:58:07', '2020-11-25 08:39:40'),
(360, 360, 'CES', 'CHANDRA EKA SUCIATI,NN', 'P', '21-30', '2020-04-02', 'JAWA BARAT', 'Cirebon', 'WALED', 'Rawat Jalan', 'Suspect', '2020-04-05', 'Dirujuk  Status Keluar', '2020-04-08 18:56:16', '2020-11-25 08:39:40'),
(361, 361, 'DCK', 'DEVI CHUSWATUN KHASANAH,NN', 'P', '11-20', '2020-04-02', 'JAWA TENGAH', 'Pekalongan', 'SRAGI', 'Rawat Jalan', 'Suspect', '2020-04-05', 'Dirujuk  Status Keluar', '2020-04-08 18:37:41', '2020-11-25 08:39:40'),
(362, 362, 'ST', 'SUTRISNO, TN', 'L', '41-50', '2020-04-01', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Jalan', 'Suspect', '2020-04-09', 'APD/Sembuh  Status Keluar', '2020-04-08 18:31:21', '2020-11-25 08:39:40'),
(363, 363, 'YN', 'YAENURI, TN', 'L', '51-60', '2020-03-30', 'JAWA TENGAH', 'Kendal', 'CEPIRING', 'Rawat Jalan', 'Suspect', '2020-04-12', 'APD/Sembuh  Status Keluar', '2020-04-08 18:29:32', '2020-11-25 08:39:40'),
(364, 364, 'EH', 'EKO HARIYANTO, TN', 'L', '41-50', '2020-04-02', 'JAWA TENGAH', 'Pekalongan', 'KEDUNGWUNI', 'Rawat Jalan', 'Suspect', '2020-06-09', 'APD/Sembuh  Status Keluar', '2020-04-09 04:18:50', '2020-11-25 08:39:40'),
(365, 365, 'MB', 'MILANG BAWONO, TN ( NTB+)', 'L', '31-40', '2020-03-30', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Jalan', 'Suspect', '2020-04-07', 'APD/Sembuh  Status Keluar', '2020-04-09 04:15:36', '2020-11-25 08:39:40'),
(366, 366, 'SP', 'SUPRAT,TN', 'L', '51-60', '2020-03-28', 'JAWA TENGAH', 'Kendal', 'SINGOROJO', 'Rawat Jalan', 'Suspect', '2020-04-02', 'APD/Sembuh  Status Keluar', '2020-04-09 04:12:45', '2020-11-25 08:39:40'),
(367, 367, 'SG', 'SUGIYOTO, TN', 'L', '51-60', '2020-03-27', 'JAWA TENGAH', 'Demak', 'MIJEN', 'Rawat Jalan', 'Suspect', '2020-04-02', 'APD/Sembuh  Status Keluar', '2020-04-09 04:10:32', '2020-11-25 08:39:40'),
(368, 368, 'AP', 'ANDY PURNIAWAN, TN', 'L', '31-40', '2020-03-25', 'JAWA TIMUR', 'Kota Surabaya', 'TAMBAKSARI', 'Rawat Jalan', 'Suspect', '2020-03-31', 'APD/Sembuh  Status Keluar', '2020-04-09 04:08:49', '2020-11-25 08:39:40'),
(369, 369, 'STT', 'SUTANTO, TN', 'L', '31-40', '2020-03-23', 'JAWA TENGAH', 'Kota Semarang', 'GUNUNG PATI', 'Rawat Jalan', 'Suspect', '2020-03-30', 'APD/Sembuh  Status Keluar', '2020-04-09 04:02:33', '2020-11-25 08:39:40'),
(370, 370, 'LN', 'LIANA,NY', 'P', '41-50', '2020-03-19', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-03-23', 'APD/Sembuh  Status Keluar', '2020-04-09 03:58:53', '2020-11-25 08:39:40'),
(371, 371, 'SUS', 'SABRINA ULLY SEPTIANI,NY', 'P', '31-40', '2020-03-19', 'JAWA TENGAH', 'Kota Surakarta', 'LAWEYAN', 'Rawat Jalan', 'Suspect', '2020-03-23', 'APD/Sembuh  Status Keluar', '2020-04-09 03:53:15', '2020-11-25 08:39:40'),
(372, 372, 'HER', 'HERMAWAN, TN', 'L', '41-50', '2020-03-18', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Jalan', 'Suspect', '2020-03-23', 'Meninggal / Probable / Hasil Lab. tidak diketahui  Status Keluar', '2020-04-09 03:51:16', '2020-11-25 08:39:40'),
(373, 373, 'SU', 'SRI UTAMI, NY', 'P', '41-50', '2020-03-17', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Konfirmasi', '2020-03-24', 'APD/Sembuh  Status Keluar', '2020-04-09 03:49:26', '2020-11-25 08:39:40'),
(374, 374, 'WS', 'WULANDYANTRI SUDARNO, NN', 'P', '21-30', '2020-03-15', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG BARAT', 'Rawat Inap', 'Konfirmasi', '2020-03-27', 'APD/Sembuh  Status Keluar', '2020-04-09 03:47:11', '2020-11-25 08:39:40'),
(375, 375, 'TAR', 'TARMUDJI, TN', 'L', '61-70', '2020-03-12', 'JAWA BARAT', 'Kota Depok', 'SUKMA JAYA', 'Rawat Jalan', 'Suspect', '2020-03-23', 'APD/Sembuh  Status Keluar', '2020-04-09 03:43:05', '2020-11-25 08:39:40'),
(376, 376, 'SS', 'SLAMET SUPRIYANTO,TN', 'L', '51-60', '2020-03-28', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-04-01', 'Meninggal / Discarded / Negatif  Status Keluar', '2020-04-09 03:36:13', '2020-11-25 08:39:40'),
(377, 377, 'PJ', 'POJO, TN', 'L', '71-80', '2020-03-08', 'JAWA TENGAH', 'Grobogan', 'TEGOWANU', 'Rawat Inap', 'Konfirmasi', '2020-04-14', 'APD/Sembuh  Status Keluar', '2020-04-09 03:10:47', '2020-11-25 08:39:40'),
(378, 378, 'MA', 'MUHAMAD ANDARMANTO, TN', 'L', '31-40', '2020-03-16', 'JAWA TENGAH', 'Kota Semarang', 'NGALIYAN', 'Rawat Jalan', 'Suspect', '2020-03-23', 'APD/Sembuh  Status Keluar', '2020-04-07 19:23:00', '2020-11-25 08:39:40'),
(379, 379, 'ALIF', 'ALIF BADARI, TN', 'L', '11-20', '2020-03-24', 'JAWA TENGAH', 'Boyolali', 'KARANGGEDE', 'Rawat Jalan', 'Suspect', '2020-03-30', 'APD/Sembuh  Status Keluar', '2020-04-07 19:05:10', '2020-11-25 08:39:40'),
(380, 380, 'ISAI', 'ISAI YUSIDARTA, TN', 'L', '41-50', '2020-03-23', 'JAWA TENGAH', 'Kota Semarang', 'SEMARANG SELATAN', 'Rawat Jalan', 'Suspect', '2020-03-30', 'APD/Sembuh  Status Keluar', '2020-04-07 18:50:34', '2020-11-25 08:39:40'),
(381, 0, 'JUMLAH', 'DEWASA', 'L', 'ANAK', '1970-01-01', NULL, NULL, NULL, NULL, NULL, '1970-01-01', NULL, '0000-00-00 00:00:00', '2021-04-06 01:01:37'),
(382, 385, '460', '0', 'L', '15', '1970-01-01', '1219', NULL, NULL, NULL, NULL, '1970-01-01', NULL, '0000-00-00 00:00:00', '2021-04-06 01:01:38'),
(383, 48, '50', '1', 'L', '1', '1970-01-01', '182', NULL, NULL, NULL, NULL, '1970-01-01', NULL, '0000-00-00 00:00:00', '2021-04-06 01:01:38'),
(384, 23, '23', '3', 'L', '0', '1970-01-01', '69', NULL, NULL, NULL, NULL, '1970-01-01', NULL, '0000-00-00 00:00:00', '2021-04-06 01:01:38'),
(385, 2, '2', '0', 'L', '1', '1970-01-01', '22', NULL, NULL, NULL, NULL, '1970-01-01', NULL, '0000-00-00 00:00:00', '2021-04-06 01:01:38'),
(386, 26, '29', '0', 'L', '1', '1970-01-01', '36', NULL, NULL, NULL, NULL, '1970-01-01', NULL, '0000-00-00 00:00:00', '2021-04-06 01:01:38'),
(387, 2, '3', '0', 'L', '0', '1970-01-01', '4', NULL, NULL, NULL, NULL, '1970-01-01', NULL, '0000-00-00 00:00:00', '2021-04-06 01:01:38'),
(388, 11, '11', '0', 'L', '0', '1970-01-01', '29', NULL, NULL, NULL, NULL, '1970-01-01', NULL, '0000-00-00 00:00:00', '2021-04-06 01:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `covidreportv2`
--

CREATE TABLE `covidreportv2` (
  `id_` int(11) NOT NULL,
  `no_excel` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `suspect_l` int(11) NOT NULL,
  `suspect_p` int(11) NOT NULL,
  `confirm_l` int(11) NOT NULL,
  `confirm_p` int(11) NOT NULL,
  `tgl_lapor` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidreportv2`
--

INSERT INTO `covidreportv2` (`id_`, `no_excel`, `tanggal`, `suspect_l`, `suspect_p`, `confirm_l`, `confirm_p`, `tgl_lapor`, `created_at`) VALUES
(1, 1, '2020-11-22', 1, 3, 0, 0, '2020-11-23 00:54:14', '2020-11-25 08:40:41'),
(2, 2, '2020-11-21', 4, 3, 0, 0, '2020-11-23 00:53:26', '2020-11-25 08:40:41'),
(3, 3, '2020-11-20', 4, 2, 0, 0, '2020-11-23 00:52:52', '2020-11-25 08:40:41'),
(4, 4, '2020-11-19', 3, 0, 1, 0, '2020-11-20 00:40:03', '2020-11-25 08:40:41'),
(5, 5, '2020-11-18', 3, 3, 0, 0, '2020-11-19 03:42:45', '2020-11-25 08:40:41'),
(6, 6, '2020-11-17', 5, 2, 0, 0, '2020-11-19 03:42:05', '2020-11-25 08:40:41'),
(7, 7, '2020-11-17', 1, 1, 0, 0, '2020-11-17 02:17:25', '2020-11-25 08:40:41'),
(8, 8, '2020-11-16', 5, 2, 0, 0, '2020-11-17 02:16:52', '2020-11-25 08:40:41'),
(9, 9, '2020-11-15', 7, 1, 0, 0, '2020-11-16 01:36:53', '2020-11-25 08:40:41'),
(10, 10, '2020-11-14', 1, 2, 1, 1, '2020-11-16 01:36:02', '2020-11-25 08:40:41'),
(11, 11, '2020-11-13', 2, 3, 0, 0, '2020-11-16 07:11:40', '2020-11-25 08:40:41'),
(12, 12, '2020-11-13', 2, 4, 0, 0, '2020-11-17 06:14:05', '2020-11-25 08:40:41'),
(13, 13, '2020-11-12', 2, 2, 2, 0, '2020-11-17 06:05:09', '2020-11-25 08:40:41'),
(14, 14, '2020-11-11', 0, 0, 4, 0, '2020-11-17 03:34:59', '2020-11-25 08:40:41'),
(15, 15, '2020-11-10', 3, 3, 1, 0, '2020-11-11 00:50:21', '2020-11-25 08:40:41'),
(16, 16, '2020-11-09', 2, 1, 1, 0, '2020-11-10 00:30:00', '2020-11-25 08:40:41'),
(17, 17, '2020-11-08', 4, 4, 0, 1, '2020-11-09 08:26:36', '2020-11-25 08:40:41'),
(18, 18, '2020-11-07', 4, 3, 2, 3, '2020-11-09 08:13:47', '2020-11-25 08:40:41'),
(19, 19, '2020-11-06', 2, 0, 0, 0, '2020-11-17 05:58:04', '2020-11-25 08:40:41'),
(20, 20, '2020-11-05', 1, 1, 0, 1, '2020-11-06 01:59:19', '2020-11-25 08:40:41'),
(21, 21, '2020-11-04', 4, 2, 0, 0, '2020-11-05 01:30:09', '2020-11-25 08:40:41'),
(22, 22, '2020-11-03', 4, 4, 1, 1, '2020-11-05 01:29:41', '2020-11-25 08:40:41'),
(23, 23, '2020-11-02', 2, 3, 0, 0, '2020-11-03 02:14:23', '2020-11-25 08:40:41'),
(24, 24, '2020-11-01', 1, 0, 0, 0, '2020-11-02 01:47:32', '2020-11-25 08:40:41'),
(25, 25, '2020-10-31', 2, 1, 0, 0, '2020-11-02 01:45:23', '2020-11-25 08:40:41'),
(26, 26, '2020-10-30', 0, 2, 0, 0, '2020-11-02 01:47:10', '2020-11-25 08:40:41'),
(27, 27, '2020-10-29', 3, 3, 0, 2, '2020-11-02 04:15:43', '2020-11-25 08:40:41'),
(28, 28, '2020-10-28', 0, 1, 0, 0, '2020-11-02 04:13:48', '2020-11-25 08:40:41'),
(29, 29, '2020-10-27', 1, 1, 0, 0, '2020-11-02 01:38:45', '2020-11-25 08:40:41'),
(30, 30, '2020-10-26', 0, 2, 0, 0, '2020-11-02 08:21:41', '2020-11-25 08:40:41'),
(31, 31, '2020-10-25', 1, 2, 1, 0, '2020-10-26 02:09:55', '2020-11-25 08:40:41'),
(32, 32, '2020-10-24', 1, 3, 0, 0, '2020-11-02 08:16:17', '2020-11-25 08:40:41'),
(33, 33, '2020-10-23', 0, 2, 0, 0, '2020-10-26 01:46:08', '2020-11-25 08:40:41'),
(34, 34, '2020-10-22', 4, 3, 0, 0, '2020-10-23 02:47:36', '2020-11-25 08:40:41'),
(35, 35, '2020-10-21', 1, 2, 0, 0, '2020-10-23 01:20:09', '2020-11-25 08:40:41'),
(36, 36, '2020-10-20', 0, 0, 0, 1, '2020-10-21 00:28:15', '2020-11-25 08:40:41'),
(37, 37, '2020-10-19', 1, 1, 1, 0, '2020-10-23 02:48:46', '2020-11-25 08:40:41'),
(38, 38, '2020-10-18', 0, 0, 0, 1, '2020-10-19 01:27:33', '2020-11-25 08:40:41'),
(39, 39, '2020-10-17', 1, 0, 0, 0, '2020-10-19 01:26:20', '2020-11-25 08:40:41'),
(40, 40, '2020-10-16', 1, 1, 0, 0, '2020-10-19 01:18:11', '2020-11-25 08:40:41'),
(41, 41, '2020-10-15', 1, 0, 0, 0, '2020-10-19 01:50:09', '2020-11-25 08:40:41'),
(42, 42, '2020-10-14', 1, 2, 0, 0, '2020-10-15 00:32:10', '2020-11-25 08:40:41'),
(43, 43, '2020-10-12', 0, 2, 2, 0, '2020-10-13 06:05:37', '2020-11-25 08:40:41'),
(44, 44, '2020-10-11', 2, 1, 0, 0, '2020-10-12 00:38:23', '2020-11-25 08:40:41'),
(45, 45, '2020-10-10', 1, 1, 0, 0, '2020-10-12 00:37:41', '2020-11-25 08:40:41'),
(46, 46, '2020-10-08', 1, 1, 1, 1, '2020-10-13 01:41:28', '2020-11-25 08:40:41'),
(47, 47, '2020-10-07', 0, 1, 0, 0, '2020-10-09 03:31:18', '2020-11-25 08:40:41'),
(48, 48, '2020-10-06', 1, 0, 0, 0, '2020-10-08 02:22:14', '2020-11-25 08:40:41'),
(49, 49, '2020-10-05', 2, 0, 0, 0, '2020-10-06 01:24:32', '2020-11-25 08:40:41'),
(50, 50, '2020-10-04', 1, 2, 1, 0, '2020-10-20 01:41:33', '2020-11-25 08:40:41'),
(51, 51, '2020-10-03', 2, 2, 0, 0, '2020-10-05 01:14:05', '2020-11-25 08:40:41'),
(52, 52, '2020-10-02', 1, 0, 0, 0, '2020-10-05 01:13:13', '2020-11-25 08:40:41'),
(53, 53, '2020-10-01', 1, 1, 0, 1, '2020-10-02 01:29:46', '2020-11-25 08:40:41'),
(54, 54, '2020-09-29', 2, 2, 0, 1, '2020-09-30 01:45:20', '2020-11-25 08:40:41'),
(55, 55, '2020-09-28', 2, 2, 0, 0, '2020-09-29 01:48:01', '2020-11-25 08:40:41'),
(56, 56, '2020-09-26', 1, 0, 0, 0, '2020-09-28 00:57:42', '2020-11-25 08:40:41'),
(57, 57, '2020-09-25', 0, 0, 0, 1, '2020-09-25 07:01:49', '2020-11-25 08:40:41'),
(58, 58, '2020-09-24', 2, 1, 0, 0, '2020-09-25 00:50:23', '2020-11-25 08:40:41'),
(59, 59, '2020-09-22', 0, 1, 0, 0, '2020-09-22 01:50:40', '2020-11-25 08:40:41'),
(60, 60, '2020-09-21', 1, 2, 0, 1, '2020-09-24 01:08:42', '2020-11-25 08:40:41'),
(61, 61, '2020-09-20', 1, 1, 0, 0, '2020-09-21 00:57:58', '2020-11-25 08:40:41'),
(62, 62, '2020-09-19', 2, 2, 0, 0, '2020-09-21 00:57:24', '2020-11-25 08:40:41'),
(63, 63, '2020-09-18', 3, 1, 0, 0, '2020-09-22 01:51:30', '2020-11-25 08:40:41'),
(64, 64, '2020-09-17', 2, 1, 0, 0, '2020-09-18 01:36:05', '2020-11-25 08:40:41'),
(65, 65, '2020-09-16', 4, 2, 0, 0, '2020-09-18 01:36:58', '2020-11-25 08:40:41'),
(66, 66, '2020-09-15', 0, 1, 0, 0, '2020-09-16 00:51:04', '2020-11-25 08:40:41'),
(67, 67, '2020-09-14', 2, 0, 0, 0, '2020-09-14 08:15:22', '2020-11-25 08:40:41'),
(68, 68, '2020-09-13', 1, 1, 0, 0, '2020-09-18 04:29:45', '2020-11-25 08:40:41'),
(69, 69, '2020-09-12', 1, 1, 0, 0, '2020-09-14 08:13:10', '2020-11-25 08:40:41'),
(70, 70, '2020-09-11', 2, 1, 0, 0, '2020-09-14 08:07:31', '2020-11-25 08:40:41'),
(71, 71, '2020-09-09', 0, 1, 0, 0, '2020-09-11 04:14:34', '2020-11-25 08:40:41'),
(72, 72, '2020-09-08', 2, 2, 0, 0, '2020-09-09 07:04:15', '2020-11-25 08:40:41'),
(73, 73, '2020-09-07', 1, 0, 0, 0, '2020-09-09 07:03:22', '2020-11-25 08:40:41'),
(74, 74, '2020-09-05', 1, 3, 0, 0, '2020-09-07 00:30:59', '2020-11-25 08:40:41'),
(75, 75, '2020-09-04', 1, 1, 0, 0, '2020-09-07 00:30:38', '2020-11-25 08:40:41'),
(76, 76, '2020-09-03', 1, 2, 0, 0, '2020-09-07 00:30:15', '2020-11-25 08:40:41'),
(77, 77, '2020-09-02', 2, 2, 0, 0, '2020-09-07 00:29:33', '2020-11-25 08:40:41'),
(78, 78, '2020-09-01', 0, 2, 1, 1, '2020-09-07 07:29:23', '2020-11-25 08:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `covidreportv3`
--

CREATE TABLE `covidreportv3` (
  `nomor` int(11) NOT NULL,
  `status_keluar` varchar(255) NOT NULL COMMENT 'sembuh, meninggal > 48 jam, meninggal < 48 jam, dirujuk, paps, isoman, dirujuk ke rs lain, dirawat',
  `dis_dewasa` int(11) NOT NULL,
  `dis_anak` int(11) NOT NULL,
  `dis_jumlah` int(11) NOT NULL,
  `prop_dewasa` int(11) NOT NULL,
  `prop_anak` int(11) NOT NULL,
  `prop_jumlah` int(11) NOT NULL,
  `cov_dewasa` int(11) NOT NULL,
  `cov_anak` int(11) NOT NULL,
  `cov_jumlah` int(11) NOT NULL,
  `totaldpc` int(11) NOT NULL,
  `user_edit` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_input` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_data` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidreportv3`
--

INSERT INTO `covidreportv3` (`nomor`, `status_keluar`, `dis_dewasa`, `dis_anak`, `dis_jumlah`, `prop_dewasa`, `prop_anak`, `prop_jumlah`, `cov_dewasa`, `cov_anak`, `cov_jumlah`, `totaldpc`, `user_edit`, `updated_at`, `user_input`, `created_at`, `status_data`) VALUES
(3, 'PULANG SEMBUH', 385, 75, 460, 0, 0, 0, 744, 15, 759, 1219, 'tony', '2021-04-06 01:09:35', 'tony', '2021-04-06 01:09:35', 1),
(4, 'MENINGGAL > 48 JAM', 48, 2, 50, 1, 0, 1, 130, 1, 131, 182, 'tony', '2021-04-06 01:09:35', 'tony', '2021-04-06 01:09:35', 1),
(5, 'MENINGGAL < 48 JAM', 23, 0, 23, 3, 0, 3, 43, 0, 43, 69, 'tony', '2021-04-06 01:09:35', 'tony', '2021-04-06 01:09:35', 1),
(6, 'DIRUJUK kE PANTI', 2, 0, 2, 0, 0, 0, 19, 1, 20, 22, 'tony', '2021-04-06 01:09:35', 'tony', '2021-04-06 01:09:35', 1),
(7, 'PAPS', 26, 3, 29, 0, 0, 0, 6, 1, 7, 36, 'tony', '2021-04-06 01:09:35', 'tony', '2021-04-06 01:09:35', 1),
(8, 'paps/isolasi mandiri', 0, 0, 0, 0, 0, 0, 55, 3, 58, 58, 'tony', '2021-04-06 01:09:35', 'tony', '2021-04-06 01:09:35', 1),
(9, 'DIRUJUK KE RS LAIN', 2, 1, 3, 0, 0, 0, 1, 0, 1, 4, 'tony', '2021-04-06 01:09:35', 'tony', '2021-04-06 01:09:35', 1),
(10, 'MASIH DIRAWAT', 11, 0, 11, 0, 0, 0, 18, 0, 18, 29, 'tony', '2021-04-06 01:09:35', 'tony', '2021-04-06 01:09:35', 1),
(19, 'PULANG SEMBUH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 02:56:42', 'tony', '2021-07-08 02:56:42', 1),
(20, 'MENINGGAL > 48 JAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 02:56:43', 'tony', '2021-07-08 02:56:43', 1),
(21, 'MENINGGAL < 48 JAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 02:56:43', 'tony', '2021-07-08 02:56:43', 1),
(22, 'DIRUJUK kE PANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 02:56:43', 'tony', '2021-07-08 02:56:43', 1),
(23, 'PAPS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 02:56:43', 'tony', '2021-07-08 02:56:43', 1),
(24, 'paps/isolasi mandiri', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 02:56:43', 'tony', '2021-07-08 02:56:43', 1),
(25, 'DIRUJUK KE RS LAIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 02:56:43', 'tony', '2021-07-08 02:56:43', 1),
(26, 'MASIH DIRAWAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 02:56:43', 'tony', '2021-07-08 02:56:43', 1),
(27, 'PULANG SEMBUH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:03:53', 'tony', '2021-07-08 03:03:53', 1),
(28, 'MENINGGAL > 48 JAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:03:53', 'tony', '2021-07-08 03:03:53', 1),
(29, 'MENINGGAL < 48 JAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:03:53', 'tony', '2021-07-08 03:03:53', 1),
(30, 'DIRUJUK kE PANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:03:53', 'tony', '2021-07-08 03:03:53', 1),
(31, 'PAPS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:03:53', 'tony', '2021-07-08 03:03:53', 1),
(32, 'paps/isolasi mandiri', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:03:53', 'tony', '2021-07-08 03:03:53', 1),
(33, 'DIRUJUK KE RS LAIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:03:53', 'tony', '2021-07-08 03:03:53', 1),
(34, 'MASIH DIRAWAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:03:53', 'tony', '2021-07-08 03:03:53', 1),
(35, 'PULANG SEMBUH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:04:18', 'tony', '2021-07-08 03:04:18', 0),
(36, 'MENINGGAL > 48 JAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:04:18', 'tony', '2021-07-08 03:04:18', 0),
(37, 'MENINGGAL < 48 JAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:04:18', 'tony', '2021-07-08 03:04:18', 0),
(38, 'DIRUJUK kE PANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:04:18', 'tony', '2021-07-08 03:04:18', 0),
(39, 'PAPS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:04:18', 'tony', '2021-07-08 03:04:18', 0),
(40, 'paps/isolasi mandiri', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:04:18', 'tony', '2021-07-08 03:04:18', 0),
(41, 'DIRUJUK KE RS LAIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:04:18', 'tony', '2021-07-08 03:04:18', 0),
(42, 'MASIH DIRAWAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'tony', '2021-07-08 03:04:18', 'tony', '2021-07-08 03:04:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rekapitulasi`
--

CREATE TABLE `rekapitulasi` (
  `nomor` int(11) NOT NULL,
  `bulan` date NOT NULL,
  `suspect` int(11) NOT NULL,
  `prop_pulang_sembuh` int(11) NOT NULL,
  `prop_meninggal` int(11) NOT NULL,
  `prop_jumlah` int(11) NOT NULL,
  `cov_pulang_sembuh` int(11) NOT NULL,
  `cov_meninggal` int(11) NOT NULL,
  `cov_masih_dirawat` int(11) NOT NULL,
  `cov_status_lain` int(11) NOT NULL,
  `cov_jml_pasien_masuk` int(11) NOT NULL,
  `dis_pulang_hidup` int(11) NOT NULL,
  `dis_meninggal` int(11) NOT NULL,
  `dis_masih_dirawat` int(11) NOT NULL,
  `dis_status_lain` int(11) NOT NULL,
  `dis_jml_pasien_masuk` int(11) NOT NULL,
  `dis_mati` int(11) NOT NULL,
  `totaldpc` int(11) NOT NULL,
  `rekaptotal` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_edit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekapitulasi`
--

INSERT INTO `rekapitulasi` (`nomor`, `bulan`, `suspect`, `prop_pulang_sembuh`, `prop_meninggal`, `prop_jumlah`, `cov_pulang_sembuh`, `cov_meninggal`, `cov_masih_dirawat`, `cov_status_lain`, `cov_jml_pasien_masuk`, `dis_pulang_hidup`, `dis_meninggal`, `dis_masih_dirawat`, `dis_status_lain`, `dis_jml_pasien_masuk`, `dis_mati`, `totaldpc`, `rekaptotal`, `updated_at`, `user_edit`, `created_at`, `user_input`) VALUES
(1, '2020-03-01', 0, 0, 1, 1, 2, 0, 0, 0, 3, 8, 0, 0, 0, 14, 1, 18, 18, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(2, '2020-04-01', 0, 0, 0, 0, 2, 0, 0, 0, 2, 29, 10, 0, 0, 44, 10, 46, 64, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(3, '2020-05-01', 0, 0, 0, 0, 3, 1, 0, 0, 7, 17, 6, 0, 0, 21, 7, 28, 92, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(4, '2020-06-01', 0, 0, 0, 0, 14, 6, 0, 4, 39, 19, 6, 0, 2, 40, 12, 79, 171, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(5, '2020-07-01', 0, 0, 0, 0, 44, 12, 0, 2, 68, 49, 8, 0, 0, 44, 20, 112, 283, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(6, '2020-08-01', 0, 0, 0, 0, 77, 6, 0, 4, 77, 20, 11, 0, 3, 35, 17, 112, 395, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(7, '2020-09-01', 0, 0, 1, 1, 37, 8, 0, 6, 51, 19, 3, 0, 1, 25, 12, 77, 472, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(8, '2020-10-01', 0, 0, 0, 0, 32, 7, 0, 7, 45, 33, 3, 0, 3, 35, 10, 80, 552, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(9, '2020-11-01', 0, 0, 0, 0, 68, 16, 0, 13, 136, 33, 4, 0, 6, 40, 20, 176, 728, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(10, '2020-12-01', 0, 0, 1, 1, 149, 43, 0, 22, 251, 70, 7, 0, 9, 103, 51, 355, 1083, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(11, '2021-01-01', 0, 0, 0, 0, 215, 58, 0, 21, 260, 71, 6, 0, 3, 72, 64, 332, 1415, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(12, '2021-02-01', 0, 0, 1, 1, 76, 14, 0, 5, 46, 67, 7, 0, 2, 71, 22, 118, 1533, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(13, '2021-03-01', 0, 0, 0, 0, 33, 2, 16, 2, 50, 25, 1, 0, 0, 22, 3, 72, 1605, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(14, '2021-04-01', 0, 0, 0, 0, 7, 1, 2, 0, 2, 0, 1, 11, 0, 12, 2, 14, 1619, '2021-04-06 03:34:14', 'tony', '2021-04-06 03:34:14', 'tony'),
(15, '2021-05-01', 0, 0, 1, 1, 2, 0, 0, 0, 3, 8, 0, 0, 0, 14, 1, 18, 18, '2021-07-08 03:44:53', 'tony', '2021-07-08 03:44:53', 'tony'),
(16, '2021-06-01', 0, 0, 1, 1, 2, 0, 0, 0, 3, 8, 0, 0, 0, 14, 1, 18, 18, '2021-07-08 03:51:47', 'tony', '2021-07-08 03:51:47', 'tony');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covidreport`
--
ALTER TABLE `covidreport`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `covidreportv1`
--
ALTER TABLE `covidreportv1`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `covidreportv2`
--
ALTER TABLE `covidreportv2`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `covidreportv3`
--
ALTER TABLE `covidreportv3`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `status_keluar` (`status_keluar`,`updated_at`,`created_at`);

--
-- Indexes for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `bulan` (`bulan`,`updated_at`,`created_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covidreport`
--
ALTER TABLE `covidreport`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `covidreportv1`
--
ALTER TABLE `covidreportv1`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `covidreportv2`
--
ALTER TABLE `covidreportv2`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `covidreportv3`
--
ALTER TABLE `covidreportv3`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
