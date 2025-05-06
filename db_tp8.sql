-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2025 at 04:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tp8`
--

-- --------------------------------------------------------

--
-- Table structure for table `extracurricular`
--

CREATE TABLE `extracurricular` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `coach` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extracurricular`
--

INSERT INTO `extracurricular` (`id`, `name`, `coach`, `location`) VALUES
(1, 'Basketball', 'Coach Andi', 'Lapangan A'),
(2, 'Paduan Suara', 'Bu Rina', 'Ruang Musik 1'),
(3, 'Teater', 'Pak Budi', 'Aula Barat'),
(4, 'Futsal', 'Coach Deni', 'Lapangan Indoor'),
(5, 'KIR (Karya Ilmiah Remaja)', 'Bu Sari', 'Lab IPA');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `join_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `nim`, `phone`, `join_date`) VALUES
(1, 'Andi Saputra', '2301000', '081234567890', '2025-05-06'),
(2, 'Budi Hartono', '23010002', '081234567891', '2023-09-03'),
(3, 'Citra Lestari', '23010003', '081234567892', '2023-09-05'),
(4, 'Dewi Kartika', '23010004', '081234567893', '2023-09-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extracurricular`
--
ALTER TABLE `extracurricular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extracurricular`
--
ALTER TABLE `extracurricular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
