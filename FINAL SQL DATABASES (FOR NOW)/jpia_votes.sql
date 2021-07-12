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
-- Table structure for table `jpia_votes`
--

CREATE TABLE `jpia_votes` (
  `id` int(255) NOT NULL,
  `studentno` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `voteforjpiapres` varchar(250) NOT NULL,
  `voteforjpiavpres` varchar(250) NOT NULL,
  `voteforjpiasec` varchar(250) NOT NULL,
  `voteforjpiatres` varchar(250) NOT NULL,
  `voteforjpiaaud` varchar(250) NOT NULL,
  `voteforjpiaacadch` varchar(250) NOT NULL,
  `voteforjpianonacadch` varchar(250) NOT NULL,
  `voteforjpia1st` varchar(250) NOT NULL,
  `voteforjpia2nd` varchar(250) NOT NULL,
  `voteforjpia3rd` varchar(250) NOT NULL,
  `voteforjpia4th` varchar(250) NOT NULL,
  `voteforjpia5th` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jpia_votes`
--
ALTER TABLE `jpia_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jpia_votes`
--
ALTER TABLE `jpia_votes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
