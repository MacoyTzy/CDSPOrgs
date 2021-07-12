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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studentno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `yrlevel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `access` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_joined` date NOT NULL DEFAULT current_timestamp(),
  `vote_status_ssc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vote_status_teatro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vote_status_itso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vote_status_jpia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vote_status_ops` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vote_status_shs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vote_status_jhs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vote_status_elem` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `studentno`, `firstname`, `lastname`, `email`, `course`, `yrlevel`, `access`, `date_joined`, `vote_status_ssc`, `vote_status_teatro`, `vote_status_itso`, `vote_status_jpia`, `vote_status_ops`, `vote_status_shs`, `vote_status_jhs`, `vote_status_elem`) VALUES
(1, 'admin_', 'admin_', 'admin', 'admin', 'admin', 'asdfadafga@yahoo.com', 'admin', '4th year', 'admin', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(2, '15-6969-69', '1234', '15-6969-69', 'Andrei', 'Leyva', '', 'BSIT', '4th year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(3, '15-5000-500', '1234', '15-5000-500', 'Lexi', 'Lore', '', 'BSIT', '2nd year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(4, '17-3412-52', '1234', '17-3412-52', 'Marco', 'Abrahan', '', 'BSIT', '4th year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(5, '17-4417-55', '1234', '17-4417-55', 'Marisol', 'Parientes', '', 'BSIT', '4th year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(12, '12-1717-417', '1234', '12-1717-417', 'Lisa', 'Manoban', '', 'BSIT', '1st year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(13, '18-4414-44', '1234', '18-4414-44', 'Momo', 'Hirai', '', 'BSIT', '2nd year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(14, '21-1141-41', '1234', '21-1141-41', 'Son', 'Chaeyoung', '', 'BSIT', '1st year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(15, '15-1234-11', '1234', '15-1234-11', 'Pota', 'Ka', '', 'BSIT', '2nd year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(16, '19-4414-22', '1234', '19-4414-22', 'Salvador', 'Gogao', '', 'BSA', '2nd year', 'BSA', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(17, '21-2254-11', '1234', '21-2254-11', 'Lee', 'Dabine', '', 'BSIT', '4th year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(18, '11-0000-00', '1234', '11-0000-00', 'Lee', 'Bagin', '', 'BSA', '1st year', 'BSA', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(19, '14-4414-41', '1234', '14-4414-41', 'Maja', 'Salvador', '', 'BSOA', '1st year', 'BSOA', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(20, '147441-19-1234', '1234', '147441-19-1234', 'Garol', 'Gogao', '', 'SHS-ABM', '1st year', 'SHS-ABM', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(21, '147441-19-1235', '1234', '147441-19-1235', 'Lyndon', 'Murphy', '', 'SHS-ABM', '', 'SHS-ABM', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(22, '147441-19-1236', '1234', '147441-19-1236', 'Camila', 'Farrell', '', 'SHS-ICT', '', 'SHS-ICT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(23, '147441-19-1237', '1234', '147441-19-1237', 'Cherry', 'Baker', '', 'SHS-ICT', '', 'SHS-ICT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(24, '147441-19-1238', '1234', '147441-19-1238', 'Chelsea', 'Thompson', '', 'SHS-GAS', '', 'SHS-GAS', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(25, '147441-19-1239', '1234', '147441-19-1239', 'Jenna', 'Farrell', '', 'SHS-GAS', '', 'SHS-GAS', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(26, '147441-19-1240', '1234', '147441-19-1240', 'Evelyn', 'Hall', '', 'SHS-HUMSS', '', 'SHS-HUMSS', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(27, '147441-19-1241', '1234', '147441-19-1241', 'Adam', 'Mitchell', '', 'SHS-HUMSS', '', 'SHS-HUMSS', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(28, '147441-19-1242', '1234', '147441-19-1242', 'Kirsten', 'Murphy', '', 'SHS-STEM', '', 'SHS-STEM', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(29, '147441-19-1243', '1234', '147441-19-1243', 'Alen', 'Johnston', '', 'SHS-STEM', '', 'SHS-STEM', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', '1', 'Free', 'Free'),
(30, '147441-19-1244', '1234', '147441-19-1244', 'Adrianna', 'Hawkins', '', 'SHS-HE', '', 'SHS-HE', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(31, '147441-19-1245', '1234', '147441-19-1245', 'Connie', 'Wright', '', 'SHS-HE', '', 'SHS-HE', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(32, '147441-19-1246', '1234', '147441-19-1246', 'Joy', 'Stanmore', '', 'JHS', '', 'JHS', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(33, '147441-19-1247', '1234', '147441-19-1247', 'Georgeanna', 'Vanichev', '', 'JHS', '', 'JHS', '0000-00-00', '', '', '', '', '', '', 'Free', ''),
(34, '147441-19-1248', '1234', '147441-19-1248', 'Broderic', 'Pestridge', '', 'ELEM', '', 'ELEM', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free'),
(35, '147441-19-1249', '1234', '147441-19-1249', 'Ki', 'Kleinstein', '', 'ELEM', '', 'ELEM', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
