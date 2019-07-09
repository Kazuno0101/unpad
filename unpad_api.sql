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
-- Database: `unpad_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(8) NOT NULL,
  `apiName` varchar(99) NOT NULL,
  `type` enum('GET','POST','DELETE','PUT') NOT NULL,
  `url` varchar(99) NOT NULL,
  `status` enum('On','Off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `apiName`, `type`, `url`, `status`) VALUES
(1, 'get mahasiswa', 'GET', 'localhost/pkl/tugas/server/mahasiswa/mahasiswa', 'On'),
(2, 'get dosen', 'GET', 'localhost/pkl/tugas/server/mahasiswa/dosen', 'On'),
(3, 'get mataKuliah', 'GET', 'localhost/pkl/tugas/server/mahasiswa/mataKuliah', 'On'),
(4, 'get perkuliahan', 'GET', 'localhost/pkl/tugas/server/mahasiswa/perkuliahan', 'On'),
(5, 'post mahasiswa', 'POST', 'http://localhost/pkl/tugas/management/api/newApi', 'On'),
(11, 'post mahasiswas', 'POST', 'http://localhost/pkl/tugas/management/api/newApi', 'On'),
(12, 'get dosen', 'GET', 'http://localhost/pkl/tugas/server/mahasiswa/dosen', 'On');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
