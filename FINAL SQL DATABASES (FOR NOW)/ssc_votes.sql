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
-- Table structure for table `ssc_votes`
--

CREATE TABLE `ssc_votes` (
  `id` int(255) NOT NULL,
  `studentno` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforsscpres` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforsscvpres` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforsscsec` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforssctres` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforsscpro` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforsscsgtarms` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforsscbsoarep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforsscbsarep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforsscbsitrep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ssc_votes`
--
ALTER TABLE `ssc_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ssc_votes`
--
ALTER TABLE `ssc_votes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
