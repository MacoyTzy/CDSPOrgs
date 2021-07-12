-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2021 at 06:07 AM
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
-- Table structure for table `itso_votes`
--

CREATE TABLE `itso_votes` (
  `id` int(255) NOT NULL,
  `studentno` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsopres` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsovprescreatives` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsovpresacademic` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsosec` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsofinance` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsoauditor` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsopro` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitso4rep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitso3rep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitso2rep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitso1rep` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsogd` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsoev` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsodirp` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsove` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsodiracads` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsoassdiracads` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsosysanal` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforitsoprjtmngr` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itso_votes`
--
ALTER TABLE `itso_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itso_votes`
--
ALTER TABLE `itso_votes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
