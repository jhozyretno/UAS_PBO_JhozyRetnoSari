-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2026 at 06:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_ti1c_jhozyretnosari`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `hari_kerja_masuk` int NOT NULL DEFAULT '0',
  `gaji_dasar_per_hari` decimal(15,2) NOT NULL,
  `jenis_karyawan` enum('kontrak','tetap','magang') NOT NULL,
  `durasi_kontrak_bulan` int DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(15,2) DEFAULT NULL,
  `opsi_saham_id` int DEFAULT NULL,
  `uang_saku_bulanan` decimal(15,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Budi Santoso', 'IT', 22, '250000.00', 'tetap', NULL, NULL, '500000.00', 101, NULL, NULL),
(2, 'Siti Aminah', 'HR', 20, '200000.00', 'tetap', NULL, NULL, '400000.00', 102, NULL, NULL),
(3, 'Andi Wijaya', 'Finance', 21, '230000.00', 'tetap', NULL, NULL, '450000.00', 103, NULL, NULL),
(4, 'Rina Sari', 'Marketing', 22, '210000.00', 'tetap', NULL, NULL, '400000.00', 104, NULL, NULL),
(5, 'Joko Anwar', 'IT', 20, '260000.00', 'tetap', NULL, NULL, '500000.00', 105, NULL, NULL),
(6, 'Maya Putri', 'Operations', 23, '220000.00', 'tetap', NULL, NULL, '450000.00', 106, NULL, NULL),
(7, 'Hendra Gunawan', 'Sales', 21, '215000.00', 'tetap', NULL, NULL, '400000.00', 107, NULL, NULL),
(8, 'Eka Saputra', 'IT', 20, '180000.00', 'kontrak', 12, 'PT Karya Tech', NULL, NULL, NULL, NULL),
(9, 'Dwi Lestari', 'Customer Service', 22, '150000.00', 'kontrak', 6, 'PT Maju Bersama', NULL, NULL, NULL, NULL),
(10, 'Tri Handoko', 'Operations', 21, '160000.00', 'kontrak', 12, 'PT Karya Tech', NULL, NULL, NULL, NULL),
(11, 'Catur Wibowo', 'Warehouse', 24, '140000.00', 'kontrak', 6, 'PT Logistik Indo', NULL, NULL, NULL, NULL),
(12, 'Panca Setiawan', 'IT', 20, '180000.00', 'kontrak', 12, 'PT IT Mandiri', NULL, NULL, NULL, NULL),
(13, 'Enam Permata', 'Sales', 22, '150000.00', 'kontrak', 3, 'PT Maju Bersama', NULL, NULL, NULL, NULL),
(14, 'Sapta Kurnia', 'Admin', 21, '145000.00', 'kontrak', 6, 'PT Karya Tech', NULL, NULL, NULL, NULL),
(15, 'Arief Rahman', 'IT', 15, '50000.00', 'magang', NULL, NULL, NULL, NULL, '1500000.00', 'KM-IT-001'),
(16, 'Nisa Fadilah', 'Marketing', 18, '40000.00', 'magang', NULL, NULL, NULL, NULL, '1200000.00', 'KM-MKT-002'),
(17, 'Fajar Sidiq', 'Design', 16, '45000.00', 'magang', NULL, NULL, NULL, NULL, '1300000.00', 'KM-DSN-003'),
(18, 'Gita Pertiwi', 'HR', 14, '40000.00', 'magang', NULL, NULL, NULL, NULL, '1200000.00', 'KM-HR-004'),
(19, 'Bayu Aji', 'Finance', 17, '45000.00', 'magang', NULL, NULL, NULL, NULL, '1300000.00', 'KM-FIN-005'),
(20, 'Indah Cahyani', 'IT', 19, '50000.00', 'magang', NULL, NULL, NULL, NULL, '1500000.00', 'KM-IT-006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
