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
-- Table structure for table `teatro_votes`
--

CREATE TABLE `teatro_votes` (
  `id` int(255) NOT NULL,
  `studentno` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatropres` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatrovpres` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatrosec` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatrotres` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatroaudit` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatroproin` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatroproex` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatrobm` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatrosgtarms1` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatrosgtarms2` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatrosgtarms3` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `voteforteatrosgtarms4` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teatro_votes`
--
ALTER TABLE `teatro_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teatro_votes`
--
ALTER TABLE `teatro_votes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
