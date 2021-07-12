-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2021 at 06:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `ops_votes`
--

CREATE TABLE `ops_votes` (
  `id` int(255) NOT NULL,
  `studentno` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_pres` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_vpres_internal` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_vpres_external` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_secretary` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_asst_secretary` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_treasurer` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_asst_treasurer` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_auditor` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_business_mngr` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_pro` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_sgtarms` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_outreach_dir` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_project_dir` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_1st_rep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_2nd_rep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_3rd_rep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_4th_rep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_quality_mem1` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_quality_mem2` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_partnership_ex` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `ops_waste_means` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ops_votes`
--
ALTER TABLE `ops_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ops_votes`
--
ALTER TABLE `ops_votes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
