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
-- Table structure for table `shs_votes`
--

CREATE TABLE `shs_votes` (
  `id` int(255) NOT NULL,
  `studentno` varchar(50) NOT NULL COMMENT 'may be a lrn number',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `voteforshspres` varchar(50) NOT NULL,
  `voteforshsvpres` varchar(50) NOT NULL,
  `voteforshssec` varchar(50) NOT NULL,
  `voteforshstres` varchar(50) NOT NULL,
  `voteforshspro` varchar(50) NOT NULL,
  `voteforshssgtarms` varchar(50) NOT NULL,
  `voteforshsstem` varchar(50) NOT NULL,
  `voteforshsabm` varchar(50) NOT NULL,
  `voteforshsgas` varchar(50) NOT NULL,
  `voteforshshumss` varchar(50) NOT NULL,
  `voteforshsict` varchar(50) NOT NULL,
  `voteforshshe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shs_votes`
--

INSERT INTO `shs_votes` (`id`, `studentno`, `firstname`, `lastname`, `voteforshspres`, `voteforshsvpres`, `voteforshssec`, `voteforshstres`, `voteforshspro`, `voteforshssgtarms`, `voteforshsstem`, `voteforshsabm`, `voteforshsgas`, `voteforshshumss`, `voteforshsict`, `voteforshshe`) VALUES
(9, '147441-19-1243', 'Alen', 'Johnston', 'Oliver Parker', 'Amy Hamilton', 'Chester Ellis', 'Lyndon Grant', 'Natalie Gibson', 'Eddy Gibson', 'Lana Baker', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shs_votes`
--
ALTER TABLE `shs_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shs_votes`
--
ALTER TABLE `shs_votes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
