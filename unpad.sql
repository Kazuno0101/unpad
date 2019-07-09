-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 05:47 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unpad`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `No` int(11) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `Nama_Dosen` varchar(50) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`No`, `NIP`, `Nama_Dosen`, `Alamat`) VALUES
(1, '1001', 'Dr. Rahmat Hariyadi, M. Pd.', 'Depok'),
(2, '1002', 'Dra. Hj. Lilik Sriyanti, M. Si', 'Bogor'),
(3, '1003', 'Drs. H. Alfred L, M. Si.', 'Jakarta'),
(4, '1004', 'M. Yusuf Khummaini, S. Hi., M.', 'Bekasi'),
(5, '1005', 'Muna Erawati, S. Psi., M.Si.', 'Bogor'),
(7, '1007', 'Hikmah Endraswati, S.E., M.Si.', 'Bekasi'),
(18, '1008', 'Prof. Armida Salsiah. Alisjahbana, S.E,M.A.,Ph.D.', 'EB EPembangunan'),
(19, '1009', 'Prof.Dr. H. Dzulkarnain Amin, MA', 'EB EPembangunan'),
(20, '1010', 'Prof. Dr. H. Rusli Ghalib, SE, MSP.', 'EB EPembangunan'),
(21, '1011', 'Prof. Dr. H. Usman Hardi,SE., Ms', 'EB EPembangunan'),
(22, '1012', 'Prof. Dr. Hj. tati S.Joesron, SE., MS', 'EB EPembangunan'),
(9, '12075918', 'Prof. Dr. Ilya Avianti, SE, MSi, Ak', 'EB pajak'),
(11, '15076101', 'Prof. Dr. Nunuy Nur Afiah, SE, MSi, Ak', 'EB pajak'),
(14, '197103092006041001', 'Cupian, M.T.', 'EB EIslam'),
(15, '1975-7282001122001', 'Dian Masyita, Ph.D.', 'EB EIslam'),
(16, '197908252002122001', 'Fitri Hastuti, M.Si', 'EB EIslam'),
(17, '198002171009121002', 'Irawan Febiyanto, M,Mgt.', 'EB EIslam'),
(8, '25066102', 'Prof. Dr. Azhar Susanto, SE, M.Buss, Ak', 'EB pajak'),
(12, '25086702', 'Prof. Dr. Sri Mulyani NS, SE, MSi, Ak', 'EB pajak'),
(10, '7085704', 'Prof. Dr. Moh. Wahyudin Zarkasyi, SE, Msi, Ak', 'EB pajak');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `Nomor` int(11) NOT NULL,
  `Id Fakultas` varchar(11) NOT NULL,
  `Nama Fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`Nomor`, `Id Fakultas`, `Nama Fakultas`) VALUES
(1, '01', 'Fakultas Ekonomi dan Bisnis'),
(2, '02', 'Fakultas Farmasi'),
(3, '03', 'Fakultas Hukum'),
(4, '04', 'Fakultas Ilmu Budaya'),
(5, '05', 'Fakultas Ilmu Komunikasi'),
(6, '06', 'Fakultas Ilmu Sosial dan Politik'),
(7, '07', 'Fakultas Kedokteran'),
(8, '08', 'Fakultas Kedokteran Gigi'),
(9, '09', 'Fakultas Keperawatan'),
(10, '10', 'Fakultas Matematika dan Ilmu Pengetahuan Alam'),
(11, '11', 'Fakultas Perikanan dan Ilmu Kelautan'),
(12, '12', 'Fakultas Pertanian'),
(13, '13', 'Fakultas Peternakan'),
(14, '14', 'Fakultas Psikologi'),
(15, '15', 'Fakultas Teknik Geologi'),
(16, '16', 'Fakultas Teknologi Industri Pertanian');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `No` int(11) NOT NULL,
  `Kode_Mata_Kuliah` varchar(20) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `Kode_Ruang` varchar(20) NOT NULL,
  `Waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`No`, `Kode_Mata_Kuliah`, `NIP`, `Kode_Ruang`, `Waktu`) VALUES
(3, '18001', '1001', 'A102', 'Selasa (10.00-12.15)'),
(1, '87010', '1003', 'C101', 'Senin (13.15-15.45)'),
(2, '87038', '1005', 'A103', 'Rabu (07.30-10.00)'),
(4, '90002', '1006', 'A101', 'Jumat (07.30-10.00)'),
(5, '90003', '1004', 'C101', 'Selasa (13.15-15.45)'),
(6, '90037', '1001', 'A101', 'Kamis  (07.30-10.00)');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `No` int(11) NOT NULL,
  `Kode_Jurusan` varchar(20) NOT NULL,
  `Nama_Jurusan` varchar(30) NOT NULL,
  `Id Fakultas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`No`, `Kode_Jurusan`, `Nama_Jurusan`, `Id Fakultas`) VALUES
(1, '01', 'Ilmu Hukum', '03'),
(2, '02', 'Akutansi', '01'),
(3, '03', 'Ekonomi Pembangunan', '01'),
(4, '04', 'Manajemen', '01'),
(5, '05', 'Ekonomi Islam', '01'),
(6, '06', 'Bisnis Digital', '01'),
(7, '07', 'Kedokteran', '07'),
(8, '08', 'Kedokteran Hewan', '07'),
(9, '09', 'Matematika', '10'),
(10, '10', 'Kimia', '10'),
(11, '11', 'Fisika', '10'),
(12, '12', 'Biologi', '10'),
(13, '13', 'Statistika', '10'),
(14, '14', 'Geofisika', '10'),
(15, '15', 'Teknik Informatika', '10'),
(16, '16', 'Teknik Elektro', '10'),
(17, '17', 'Aktuaria', '10'),
(18, '18', 'Agretoknologi', '12'),
(19, '19', 'Argibisnis', '12'),
(20, '20', 'Kedokteran Gigi', '08'),
(21, '21', 'Sastra Indonesia', '04'),
(22, '22', 'Sastra Sunda', '04'),
(23, '23', 'Ilmu Sejarah', '04'),
(24, '24', 'Bahasa dan Budaya Jepang', '04'),
(25, '25', 'Sastra Inggris', '04'),
(26, '26', 'Sastra Prancis', '04'),
(27, '27', 'Sastra Jerman', '04'),
(28, '28', 'Sastra Arab', '04'),
(29, '29', 'Sastra Rusia', '04'),
(30, '30', 'Administrasi Publik', '06'),
(31, '31', 'Ilmu HUbungan Internasional', '06'),
(32, '32', 'Ilmu Kesejahteraan Sosial', '06'),
(33, '33', 'Ilmu Pemerintahan', '06'),
(34, '34', 'Ilmu Administrasi Bisnis', '06'),
(35, '35', 'Sosiologi', '06'),
(36, '36', 'Antropologi', '06'),
(37, '37', 'Ilmu Politik', '06'),
(38, '38', 'Psikologi', '14'),
(39, '39', 'Ilmu Peternakan', '13'),
(40, '40', 'Ilmu Komunikasi', '05'),
(41, '41', 'Ilmu Perpustakaan', '05'),
(42, '42', 'Hubungan Masyarakat', '05'),
(43, '43', 'Jurnalistik', '05'),
(44, '44', 'Manajemen Komunikasi', '05'),
(45, '45', 'Televisi dan Film', '05'),
(46, '46', 'Ilmu Keperawatan', '09'),
(47, '47', 'Perikanan', '11'),
(48, '48', 'Ilmu Kelautan', '11'),
(49, '49', 'Teknik Pertanian', '16'),
(50, '50', 'Teknologi Pangan', '16'),
(51, '51', 'Teknologi Industri Pertanian', '16'),
(52, '52', 'Farmasi', '02'),
(53, '53', 'Teknik Geologi', '15');

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `No` int(5) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `Kode_Mata_Kuliah` varchar(20) NOT NULL,
  `Nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`No`, `NIM`, `Kode_Mata_Kuliah`, `Nilai`) VALUES
(1, '41815210001', '87010', '70'),
(2, '41815210002', '87038', '80'),
(3, '41815210003', '87010', '75'),
(4, '41815210004', '87038', '85'),
(5, '41815210005', '87010', '80');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `No` int(5) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `Kode_Mata_Kuliah` varchar(20) NOT NULL,
  `Kode_Jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`No`, `NIM`, `Kode_Mata_Kuliah`, `Kode_Jurusan`) VALUES
(1, '41815210001', '87010', '10502'),
(2, '41815210002', '87038', '10502'),
(3, '41815210003', '87010', '10502'),
(4, '41815210004', '87038', '10502'),
(5, '41815210005', '87010', '10502');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `No` int(5) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` enum('Wanita','Pria') NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`No`, `NIM`, `Nama`, `Jenis_Kelamin`, `Alamat`) VALUES
(1, '41815210001', 'M. Fakhri', 'Pria', 'Bekasi'),
(2, '41815210002', 'Tofan Bimantara', 'Pria', 'Bekasi'),
(3, '41815210003', 'Marsya Gebby', 'Wanita', 'Bogor'),
(4, '41815210004', 'Maryam Khoirun Nisa', 'Wanita', 'Bogor'),
(5, '41815210005', 'Dwi Wardiyanto', 'Pria', 'Bekasi'),
(6, '41815210006', 'Dikka Wangsa suryana', 'Pria', 'Bogor'),
(7, '41815210007', 'Dannis Akhmad F', 'Pria', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `No` int(11) NOT NULL,
  `Kode_Mata_Kuliah` varchar(20) NOT NULL,
  `Nama_Mata_Kuliah` varchar(30) NOT NULL,
  `Sks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`No`, `Kode_Mata_Kuliah`, `Nama_Mata_Kuliah`, `Sks`) VALUES
(50, '', 'Studium Generale *)', ''),
(1, ' UNX.10.101', 'Pendidikan Agama', '2 (2-0)'),
(8, '1201100002010072007', 'Pengantar Aplikasi Komputer', '2'),
(9, '1201100002010722007', 'Pendidikan Agama', '2'),
(10, '1201100002010732007', 'Pendidikan Pancasila', '2'),
(11, '1201100002010742007', 'Pendidikan Agama Protestan', '2'),
(12, '1201100002010752007', 'Pendidikan Agama Katolik', '2'),
(13, '1201100002010762007', 'Pendidikan Agama Budha', '2'),
(14, '1201100002010772007', 'Pendidikan Agama Hindu', '2'),
(15, '1201100003010012007', 'Pengantar Akuntansi', '3'),
(16, '1201100003010382007', 'Matematika Ekonomi', '3'),
(17, '1201100003010412007', 'Pengantar Ilmu Ekonomi Mikro', '3'),
(18, '1201100003010512007', 'Pengantar Bisnis', '3'),
(19, '1201100003010802007', 'Bahasa Inggris', '3'),
(20, '1201100003020472007', 'Ekonomi Pembangunan I', '3'),
(21, '1201100003020482007', 'Ekonomi Syariah', '3'),
(31, 'AGB101', 'Agama Budha', '2'),
(30, 'AGH101', 'Agama Hindu', '2'),
(27, 'AGI101', 'Agama Islam I', '2'),
(28, 'AGP101', 'Agama Kristen Protestan', '2'),
(29, 'AGPK101', 'Agama Kristen Katolik', '2'),
(25, 'AKK100', 'Pengantar Akuntansi I', '4'),
(32, 'BAI 100', 'Bahasa Indonesia', '2'),
(44, 'D10A.06B0101', 'Matematika Kimia I', '3(3-0)'),
(34, 'D10A1600201', 'kalkulus 2', '4'),
(35, 'D10A1600202', 'Logika matematika', '3'),
(36, 'D10A1600203', 'Geometri', '3'),
(37, 'D10A1600204', 'Pengantar riset oprasi', '3'),
(38, 'D10A1600205', 'Matematika diskrit', '3'),
(39, 'D10A1600206', 'Algoritma dan pemrograman(waju', '3(2-1)'),
(68, 'D10B.06B0024', 'Tugas Asistensi', '1(0-2)'),
(69, 'D10B.06B0025', 'Persiapan Penelitian', '2(0-2)'),
(70, 'D10B.06B0026', 'Tugas Pustaka', '1(0-1)'),
(45, 'D10B.06B0102', 'Kimia Dasar I', '3(3-0)'),
(46, 'D10B.06B0103', 'Prak. Kimia Dasar I', '1(0-1)'),
(51, 'D10B.06B0107', 'Penelusuran dan Penulisan Ilmi', '2(2-0)'),
(52, 'D10B.06B1108', 'Kimia Anorganik I', '2(2-0)'),
(59, 'D10B.06B1115', 'Kimia Anorganik III', '2(2-0)'),
(60, 'D10B.06B1116', 'Prak. Kimia Anorganik', '2(0-2)'),
(53, 'D10B.06B2109', 'Analisis Kimia', '3(3-0)'),
(54, 'D10B.06B2110', 'Prak. Analisis Kimia', '2(0-2)'),
(55, 'D10B.06B3111', 'Kimia Fisik I', '3(3-0)'),
(56, 'D10B.06B3112', 'Kimia Kuantum', '2(2-0)'),
(61, 'D10B.06B3117', 'Kimia Fisik III', '3(3-0)'),
(62, 'D10B.06B3118', 'Prak. Kimia Fisik II', '2(2-0)'),
(63, 'D10B.06B3119', 'Kimia Lingkungan', '2(2-0)'),
(57, 'D10B.06B4113', 'Kimia Organik I', '3(3-0)'),
(58, 'D10B.06B4114', 'Prak. Kimia Organik I', '2(0-2)'),
(64, 'D10B.06B4120', 'Kimia Organik III', '3(3-0)'),
(71, 'D10B.06B4127', 'Elusidasi Struktur', '3(2-1)'),
(65, 'D10B.06B5121', 'Biokimia II', '2(2-0)'),
(66, 'D10B.06B5122', 'Prak. Biokimia', '2(0-2)'),
(67, 'D10B.06B5123', 'Teknik Biokimia', '2(2-0)'),
(47, 'D10C.06B0104', 'Fisika Dasar I', '3(3-0)'),
(48, 'D10C.06B0105', 'Prak.Kimia Dasar', '1(0-1)'),
(76, 'D10C.1105', 'Kalkulus', '3 (3-0)'),
(49, 'D10D.06B0106', 'Biologi', '3(3-0)'),
(40, 'D10F1600201', 'Metode statistika', '3'),
(72, 'D10G.1101', 'Geologi Fisik', '2(1-3)'),
(73, 'D10G.1102', 'Pengantar Ilmu kebumian & plan', '2(2-0)'),
(74, 'D10G.1103', 'Fisika Dasar I', '2(2-0)'),
(75, 'D10G.1104', 'Prakt. Fisika Dasar I', '1 (0-3)'),
(23, 'EKT101', 'PTE Makro', '3'),
(22, 'EKT102', 'PTE Mikro', '3'),
(2, 'G10D101', ' Sistem Hukum Indonesia', '3 (3-0)'),
(3, 'G10D102', 'Sistem Ekonomi Indonesia', '3 (3-0)'),
(4, 'G10D103', 'Pengantar Ilmu Pemerintahan', '3 (2-1)'),
(24, 'MAM211', 'Matematika Ekonomi I', '3'),
(88, 'MMS 2418 ', 'Pengantar Matematika Finansial', ''),
(89, 'MMS 2419 ', 'Pengantar Matematika Finansial', ''),
(83, 'MMS 2420 ', 'Pengantar Statistika Matematik', ''),
(85, 'MMS 2421 ', 'Analisis Regresi Terapan', ''),
(84, 'MMS 2483 ', 'Pengantar Statistika Matematik', ''),
(90, 'MMS 2492 ', 'Pengantar Akuntansi Aktuaria I', ''),
(92, 'MMS 2493 ', 'Pengantar Ekonomi Mikro', ''),
(91, 'MMS 2496 ', 'Pengantar Akuntansi Aktuaria I', ''),
(93, 'MMS 2497 ', 'Pengantar Ekonomi Makro', ''),
(86, 'MMS 3429 ', 'Pengantar Runtun Waktu', ''),
(97, 'MMS 3432 ', 'Pengantar Teori Risiko Aktuari', ''),
(96, 'MMS 3433 ', 'Pengantar Manajemen Investasi', ''),
(98, 'MMS 3434 ', 'Pengantar Teori Risiko Aktuari', ''),
(94, 'MMS 3438 ', 'Pengantar Matematika Aktuaria ', ''),
(87, 'MMS 3443 ', 'Analisis Data Survival', ''),
(95, 'MMS 3477 ', 'Pengantar Matematika Aktuaria ', ''),
(100, 'MMS 4422 ', 'Pengantar Valuasi Dana Pensiun', ''),
(99, 'MMS 4449 ', 'Kapita Selekta Statistik', ''),
(26, 'MNU100', 'Pengantar Bisnis', '3'),
(43, 'NX10.0600104', 'Bahasa Inggris I', '2(2-0)'),
(33, 'PHE101', 'Filsafat Ilmu', '2'),
(5, 'UNG.10101', 'Dasar-dasar Ilmu Politik', '3 (3-0)'),
(6, 'UNG.10102', ' Dasar-dasar Ilmu Sosial', '3 (3-0)'),
(7, 'UNX.10.102', 'Bahasa Inggris', '2 (2-0)'),
(41, 'UNX10.0600102', 'Kewarganegaraan', '2(2-0)'),
(42, 'UNX10.0600103', 'Bahasa Indonesia', '2(2-0)'),
(78, 'UNX10.1001', 'Etika dan Humaniora (Agama, PP', '3(3-0)'),
(81, 'UNX10.10010', 'OKK (Olah Raga Kebugarandan Kr', '1(0-3)'),
(82, 'UNX10.10016', 'Pengantar Saintek', '3(3-0)'),
(77, 'UNX10.1005', 'Bahasa', '2(2-0)'),
(79, 'UNX10.1008', 'KBLI', '1(1-0)'),
(80, 'UNX10.1009', 'dS (Manusia dan Sains)', '2(2-0)');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `No` int(11) NOT NULL,
  `Kode_Ruang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`No`, `Kode_Ruang`) VALUES
(1, 'A101'),
(2, 'A102'),
(3, 'A103'),
(4, 'B101'),
(5, 'C101'),
(6, 'B102'),
(7, 'B103'),
(8, 'C102'),
(9, 'C103');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`Nomor`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Kode_Mata_Kuliah`,`NIP`,`Kode_Ruang`),
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Kode_Jurusan`),
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`NIM`,`Kode_Mata_Kuliah`),
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`NIM`,`Kode_Mata_Kuliah`,`Kode_Jurusan`),
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`Kode_Mata_Kuliah`),
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`Kode_Ruang`),
  ADD UNIQUE KEY `No` (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `Nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
