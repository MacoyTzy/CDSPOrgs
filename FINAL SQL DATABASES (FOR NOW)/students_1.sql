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
-- Table structure for table `students_1`
--

CREATE TABLE `students_1` (
  `COL 1` varchar(2) DEFAULT NULL,
  `COL 2` varchar(11) DEFAULT NULL,
  `COL 3` varchar(8) DEFAULT NULL,
  `COL 4` varchar(11) DEFAULT NULL,
  `COL 5` varchar(9) DEFAULT NULL,
  `COL 6` varchar(9) DEFAULT NULL,
  `COL 7` varchar(20) DEFAULT NULL,
  `COL 8` varchar(6) DEFAULT NULL,
  `COL 9` varchar(8) DEFAULT NULL,
  `COL 10` varchar(6) DEFAULT NULL,
  `COL 11` varchar(11) DEFAULT NULL,
  `COL 12` varchar(15) DEFAULT NULL,
  `COL 13` varchar(18) DEFAULT NULL,
  `COL 14` varchar(16) DEFAULT NULL,
  `COL 15` varchar(16) DEFAULT NULL,
  `COL 16` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students_1`
--

INSERT INTO `students_1` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`) VALUES
('id', 'username', 'password', 'studentno', 'firstname', 'lastname', 'email', 'course', 'yrlevel', 'access', 'date_joined', 'vote_status_ssc', 'vote_status_teatro', 'vote_status_itso', 'vote_status_jpia', 'vote_status_ops'),
('1', 'admin_', 'admin_', 'admin', 'admin', 'admin', 'asdfadafga@yahoo.com', 'BSBA', '4th year', 'admin', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free'),
('2', '15-6969-69', '1234', '15-6969-69', 'Andrei', 'Leyva', '', 'BSIT', '4th year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free'),
('3', '15-5000-500', '1234', '15-5000-500', 'Lexi', 'Lore', 'lexi.lore@email.com', 'BSIT', '2nd year', 'BSIT', '0000-00-00', '1', '1', '1', 'Free', 'Free'),
('4', '17-3412-52', '1234', '17-3412-52', 'Marco', 'Abrahan', '', 'BSIT', '4th year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free'),
('5', '17-4417-55', '1234', '17-4417-55', 'Marisol', 'Parientes', '', 'BSIT', '4th year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free'),
('12', '12-1717-417', '1234', '12-1717-417', 'Lisa', 'Manoban', '', 'Elem', 'GRADE3', 'elem', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free'),
('13', '18-4414-44', '1234', '18-4414-44', 'Momo', 'Hirai', '', 'BSIT', '2nd year', 'BSIT', '0000-00-00', 'Free', 'Free', 'Free', 'Free', 'Free');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
