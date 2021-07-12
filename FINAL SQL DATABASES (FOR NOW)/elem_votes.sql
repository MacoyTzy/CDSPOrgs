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
-- Table structure for table `elem_votes`
--

CREATE TABLE `elem_votes` (
  `id` int(255) NOT NULL,
  `studentno` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `voteforelempres` varchar(50) NOT NULL,
  `voteforelemvpres` varchar(50) NOT NULL,
  `voteforelemsec` varchar(50) NOT NULL,
  `voteforelemtres` varchar(50) NOT NULL,
  `voteforeleaud` varchar(50) NOT NULL,
  `voteforelempro` varchar(50) NOT NULL,
  `voteforelemsaa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elem_votes`
--
ALTER TABLE `elem_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elem_votes`
--
ALTER TABLE `elem_votes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
