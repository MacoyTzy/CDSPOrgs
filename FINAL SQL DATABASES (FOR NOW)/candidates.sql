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
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(255) NOT NULL,
  `studentno` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `candid_fname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `candid_lname` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `candid_initial` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `candid_org` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `candid_position` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `partylist` varchar(15) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `studentno`, `candid_fname`, `candid_lname`, `candid_initial`, `candid_org`, `candid_position`, `partylist`) VALUES
(1, '15-164-106', 'Allan', 'Walker', 'AW', 'SSC', 'President', ''),
(2, '15-4010-401', 'Gabbie', 'Carter', 'AW', 'SSC', 'President', ''),
(3, '15-4010-402', 'Alan', 'Bongi', 'PP', 'SSC', 'Vice President', ''),
(4, '15-4010-403', 'Jose', 'Matalo', 'PG', 'SSC', 'Vice President', ''),
(5, '15-4010-404', 'Espasol', 'Literasol', 'PG', 'SSC', 'Secretary', ''),
(6, '15-4010-405', 'Joana', 'Macalintal', 'AW', 'SSC', 'Secretary', ''),
(7, '15-4010-406', 'Christian', 'Kalabaw', 'PP', 'SSC', 'Treasurer', ''),
(8, '15-4010-407', 'Paolo', 'Kirabiin', 'LB', 'SSC', 'Treasurer', ''),
(9, '15-4010-408', 'Erika', 'Solee', 'GG', 'SSC', 'Public Relation Officer', ''),
(10, '15-4010-409', 'Jek', 'Canlas', 'FB', 'SSC', 'Public Relation Officer', ''),
(11, '15-4010-410', 'Hat', 'Dog', 'LB', 'SSC', 'Sgt. at Arms', ''),
(12, '15-4010-411', 'Kik', 'Kiam', 'GG', 'SSC', 'Sgt. at Arms', ''),
(13, '15-4010-412', 'Pilay', 'Ako', 'FB', 'SSC', 'BSOA Representative', ''),
(14, '15-4010-413', 'And', 'One', 'PG', 'SSC', 'BSA Representative', ''),
(15, '15-4010-414', 'Kang', 'Kong', 'AW', 'SSC', 'BSIT Representative', ''),
(16, '15-4010-415', 'Tortang', 'Talong', 'PP', 'SSC', 'BSIT Representative', ''),
(17, '15-4010-416', 'Floyd', 'Lockey', 'FL', 'SSC', 'BSIT Representative', ''),
(18, '15-4010-417', 'Kristofer', 'Colvie', 'KC', 'TEATRO', 'President', ''),
(19, '15-4010-418', 'Mufinella', 'Simco', 'MS', 'TEATRO', 'President', ''),
(20, '15-4010-419', 'Tamara', 'Blancowe', 'TB', 'TEATRO', 'Vice President', ''),
(21, '15-4010-420', 'Dietrich', 'Petrolli', 'DP', 'TEATRO', 'Vice President', ''),
(22, '15-4010-421', 'Chickie', 'Acres', 'CA', 'TEATRO', 'Secretary', ''),
(23, '15-4010-422', 'Nollie', 'Crouse', 'NC', 'TEATRO', 'Secretary', ''),
(24, '15-4010-423', 'Harriet', 'Nethercott', 'HN', 'TEATRO', 'Treasurer', ''),
(25, '15-4010-424', 'Northrop', 'Mattedi', 'NM', 'TEATRO', 'Treasurer', ''),
(26, '15-4010-425', 'Madeline', 'Birkbeck', 'MB', 'TEATRO', 'Auditor', ''),
(27, '15-4010-426', 'Nevsa', 'Peegrem', 'NP', 'TEATRO', 'Auditor', ''),
(28, '15-4010-427', 'Ashlee', 'McKelvie', 'AM', 'TEATRO', 'PRO Internal', ''),
(29, '15-4010-428', 'Zarah', 'Taveriner', 'ZT', 'TEATRO', 'PRO Internal', ''),
(30, '15-4010-429', 'Jolynn', 'Oglevie', 'LO', 'TEATRO', 'PRO External', ''),
(31, '15-4010-430', 'Tobin', 'de Tocqueville', 'TD', 'TEATRO', 'PRO External', ''),
(32, '15-4010-431', 'Nissy', 'Bukac', 'NB', 'TEATRO', 'Business Manager', ''),
(33, '15-4010-432', 'Ricoriki', 'Catling', 'RC', 'TEATRO', 'Business Manager', ''),
(34, '15-4010-433', 'Haleigh', 'MacIlwrick', 'HM', 'TEATRO', 'Business Manager', ''),
(35, '15-4010-434', 'Mic', 'Barroux', 'MB', 'TEATRO', 'Public Relation Officer', ''),
(36, '15-4010-435', 'Karole', 'Tisun', 'KT', 'TEATRO', 'Public Relation Officer', ''),
(37, '15-4010-436', 'Gael', 'Goldring', 'GG', 'TEATRO', 'Sgt. at Arms', ''),
(38, '15-4010-437', 'Erik', 'Giorgiutti', 'EG', 'TEATRO', 'Sgt. at Arms', ''),
(39, '15-4010-438', 'Gloriana', 'Sommerlie', 'GS', 'TEATRO', 'Sgt. at Arms', ''),
(40, '15-4010-439', 'Helyn', 'Petasch', 'HP', 'TEATRO', 'Sgt. at Arms', ''),
(41, '15-4010-440', 'Meaghan', 'Seaking', 'MS', 'ITSO', 'President', ''),
(42, '15-4010-441', 'Gare', 'Joron', 'GJ', 'ITSO', 'President', ''),
(43, '15-4010-442', 'Brinna', 'Dawidman', 'BD', 'ITSO', 'Vice-President for Creatives', ''),
(44, '15-4010-443', 'Annabelle', 'Conboy', 'AC', 'ITSO', 'Vice-President for Creatives', ''),
(45, '15-4010-444', 'Chantalle', 'Capsey', 'CC', 'ITSO', 'Vice-President for Academics', ''),
(46, '15-4010-445', 'Dwayne', 'Colliford', 'DC', 'ITSO', 'Vice-President for Academics', ''),
(47, '15-4010-446', 'Ted', 'Obert', 'TO', 'ITSO', 'Secretary', ''),
(48, '15-4010-447', 'Phillipe', 'Handforth', 'PH', 'ITSO', 'Secretary', ''),
(49, '15-4010-448', 'Verene', 'Langshaw', 'VL', 'ITSO', 'Finance', ''),
(50, '15-4010-449', 'Lyell', 'Knights', 'LK', 'ITSO', 'Finance', ''),
(51, '15-4010-450', 'Susanna', 'Husset', 'SH', 'ITSO', 'Auditor', ''),
(52, '15-4010-451', 'Marty', 'Everall', 'ME', 'ITSO', 'Auditor', ''),
(53, '15-4010-452', 'Halsy', 'Doles', 'HD', 'ITSO', 'Public Relation Officer', ''),
(54, '15-4010-453', 'Kristina', 'Elson', 'KE', 'ITSO', 'Public Relation Officer', ''),
(55, '15-4010-454', 'Hugh', 'Danilovic', 'HDC', 'ITSO', '4th Year Representative', ''),
(56, '15-4010-455', 'Abie', 'Runnacles', 'AR', 'ITSO', '4th Year Representative', ''),
(57, '15-4010-456', 'Rich', 'Mawson', 'RM', 'ITSO', '3rd Year Representative', ''),
(58, '15-4010-457', 'Gareth', 'Kobierra', 'GK', 'ITSO', '3rd Year Representative', ''),
(59, '15-4010-458', 'Van', 'Landells', 'VL', 'ITSO', '2nd Year Representative', ''),
(60, '15-4010-459', 'Bastien', 'Deverill', 'BD', 'ITSO', '2nd Year Representative', ''),
(61, '15-4010-460', 'Dodi', 'Blunsen', 'DB', 'ITSO', '1st Year Representative', ''),
(62, '15-4010-461', 'Solomon', 'Grellis', 'SG', 'ITSO', 'Graphic Designer', ''),
(63, '15-4010-462', 'Jeni', 'Milkins', 'JM', 'ITSO', 'Graphic Designer', ''),
(64, '15-4010-463', 'Arte', 'Reiglar', 'AR', 'ITSO', 'Events Videographer', ''),
(65, '15-4010-464', 'Carlita', 'Stuttman', 'CS', 'ITSO', 'Events Videographer', ''),
(66, '15-4010-465', 'Koralle', 'Tuminini', 'KT', 'ITSO', 'Director for Photography', ''),
(67, '15-4010-466', 'Gillan', 'Pakes', 'GP', 'ITSO', 'Director for Photography', ''),
(68, '15-4010-467', 'Alene', 'de la Valette Parisot', 'AD', 'ITSO', 'Video Editor', ''),
(69, '15-4010-468', 'Tammie', 'Skitterel', 'TS', 'ITSO', 'Video Editor', ''),
(70, '15-4010-469', 'Elene', 'Kirton', 'EK', 'ITSO', 'Director for Academics', ''),
(71, '15-4010-470', 'Arlena', 'Korb', 'AK', 'ITSO', 'Director for Academics', ''),
(73, '15-4010-472', 'Gar', 'Andrieu', 'GA', 'ITSO', 'Asst. Director for Academics', ''),
(75, '15-4010-474', 'Vanny', 'Rodolf', 'VR', 'ITSO', 'System Analyst', ''),
(76, '15-4010-475', 'Kay', 'Bruff', 'KB', 'ITSO', 'Project Manager', ''),
(77, '15-4010-476', 'Laraine', 'Littlechild', 'LL', 'ITSO', 'Project Manager', ''),
(78, '15-4010-477', 'Allard', 'Souten', 'AS', 'OPS', 'President', ''),
(79, '15-4010-478', 'Tedd', 'Sommerlin', 'TSN', 'OPS', 'President', ''),
(80, '15-4010-479', 'Giorgio', 'Durnall', 'GD', 'OPS', 'Vice-President Internal', ''),
(81, '15-4010-480', 'Melany', 'Iglesia', 'MI', 'OPS', 'Vice-President Internal', ''),
(82, '15-4010-481', 'Ian', 'Breese', 'IB', 'OPS', 'Vice-President External', ''),
(83, '15-4010-482', 'Krishnah', 'Guerreau', 'KG', 'OPS', 'Vice-President External', ''),
(84, '15-4010-483', 'Mirabelle', 'Godfroy', 'MG', 'OPS', 'Secretary', ''),
(85, '15-4010-484', 'Shannan', 'Kemston', 'SK', 'OPS', 'Secretary', ''),
(86, '15-4010-485', 'Stanleigh', 'Fransoni', 'SF', 'OPS', 'Asst. Secretary', ''),
(87, '15-4010-486', 'Melicent', 'Weber', 'MW', 'OPS', 'Asst. Secretary', ''),
(88, '15-4010-487', 'Marietta', 'Reimer', 'MR', 'OPS', 'Treasurer', ''),
(89, '15-4010-488', 'Dorie', 'Loach', 'DL', 'OPS', 'Treasurer', ''),
(90, '15-4010-489', 'Wye', 'Scholz', 'WS', 'OPS', 'Asst. Treasurer', ''),
(91, '15-4010-490', 'Rock', 'Rosenberg', 'RR', 'OPS', 'Asst. Treasurer', ''),
(92, '15-4010-491', 'Sophia', 'Pruvost', 'SP', 'OPS', 'Auditor', ''),
(93, '15-4010-492', 'Robert', 'Sirmond', 'RS', 'OPS', 'Auditor', ''),
(94, '15-4010-493', 'Salvador', 'Clayworth', 'SC', 'OPS', 'Business Manager', ''),
(95, '15-4010-494', 'Milo', 'Miskelly', 'MM', 'OPS', 'Business Manager', ''),
(96, '15-4010-495', 'Ethelin', 'Aksell', 'EA', 'OPS', 'Public Relation Officer', ''),
(97, '15-4010-496', 'Daffy', 'Peet', 'DP', 'OPS', 'Public Relation Officer', ''),
(98, '15-4010-497', 'Janith', 'Kleinstub', 'JK', 'OPS', 'Sgt. at Arms', ''),
(99, '15-4010-498', 'Gib', 'Chaudhry', 'GC', 'OPS', 'Sgt. at Arms', ''),
(100, '15-4010-499', 'Jacynth', 'ODay', 'JO', 'OPS', 'Outreach Director', ''),
(101, '15-4010-500', 'Kennan', 'Prestage', 'KP', 'OPS', 'Outreach Director', ''),
(102, '15-4010-501', 'Mal', 'Thoresbie', 'MT', 'OPS', 'Project Director', ''),
(103, '15-4010-502', 'My', 'Mitrovic', 'MY', 'OPS', 'Project Director', ''),
(104, '15-4010-503', 'Janek', 'McWhinnie', 'JAM', 'OPS', '1st Year Representative', ''),
(105, '15-4010-504', 'Kay', 'Swale', 'KAS', 'OPS', '1st Year Representative', ''),
(106, '15-4010-505', 'Hermy', 'Grouer', 'HEG', 'OPS', '2nd Year Representative', ''),
(107, '15-4010-506', 'Salim', 'Jakubski', 'SAJ', 'OPS', '2nd Year Representative', ''),
(108, '15-4010-507', 'Erasmus', 'Horbart', 'ERH', 'OPS', '3rd Year Representative', ''),
(109, '15-4010-508', 'Kelwin', 'Conws', 'KEC', 'OPS', '3rd Year Representative', ''),
(110, '15-4010-509', 'Katina', 'Bowart', 'FAB', 'OPS', '4th Year Representative', ''),
(111, '15-4010-510', 'Vonni', 'Pelman', 'VOP', 'OPS', '4th Year Representative', ''),
(112, '15-4010-511', 'Yasmin', 'Auston', 'YAA', 'OPS', 'Quality Membership I', ''),
(113, '15-4010-512', 'Marney', 'Zotto', 'MAZ', 'OPS', 'Quality Membership I', ''),
(114, '15-4010-513', 'Cosimo', 'Dumini', 'COD', 'OPS', 'Quality Membership II', ''),
(115, '15-4010-514', 'Steffane', 'Cawdery', 'STC', 'OPS', 'Quality Membership II', ''),
(116, '15-4010-515', 'Lenci', 'Venners', 'LEV', 'OPS', 'Partnership and External', ''),
(117, '15-4010-516', 'Tiff', 'Swapp', 'TIS', 'OPS', 'Partnership and External', ''),
(118, '15-4010-517', 'Hale', 'Burney', 'HAB', 'OPS', 'Waste and Means', ''),
(119, '15-4010-518', 'Ricki', 'Ransfield', 'RIR', 'OPS', 'Waste and Means', ''),
(182, '18-9987-11', 'Name', 'Noname', 'J', 'SSC', 'President', ''),
(183, '17-3412-52', 'Marco', 'Abrahan', 'M', 'ITSO', 'BSIT Representative', ''),
(184, '18-8852-54', 'Noreen', 'Somine', 'F', 'SSC', 'Vice President', ''),
(185, '19-5552-44', 'Paolo', 'Sunega', 'A', 'ITSO', 'President', ''),
(186, '20-2241-44', 'Kuri', 'Kong', 'H', 'SSC', 'BSOA Representative', ''),
(187, '21-4440-11', 'Kira', 'Nakazato', 'J', 'JPIA', 'President', ''),
(188, '21-4440-12', 'Lenci', 'Venners', '', 'JPIA', 'President', ''),
(189, '21-4440-13', 'Tiff', 'Swapp', '', 'JPIA', 'Vice President', ''),
(190, '21-4440-14', 'Hale', 'Burney', '', 'JPIA', 'Vice President', ''),
(191, '21-4440-15', 'Ricki', 'Ransfield', '', 'JPIA', 'Secretary', ''),
(192, '21-4440-16', 'Name', 'Noname', '', 'JPIA', 'Secretary', ''),
(193, '21-4440-17', 'Marco', 'Abrahan', '', 'JPIA', 'Treasurer', ''),
(194, '21-4440-18', 'Noreen', 'Somine', '', 'JPIA', 'Treasurer', ''),
(195, '21-4440-19', 'Lenci', 'Venners', '', 'JPIA', 'Auditor', ''),
(196, '21-4440-20', 'Tiff', 'Swapp', '', 'JPIA', 'Auditor', ''),
(197, '21-4440-21', 'Hale', 'Burney', '', 'JPIA', 'Acad Chair', ''),
(198, '21-4440-22', 'Ricki', 'Ransfield', '', 'JPIA', 'Acad Chair', ''),
(199, '21-4440-23', 'Name', 'Noname', '', 'JPIA', 'Non Acad Chair', ''),
(200, '21-4440-24', 'Marco', 'Abrahan', '', 'JPIA', 'Non Acad Chair', ''),
(201, '21-4440-25', 'Noreen', 'Somine', '', 'JPIA', '1styearrep', ''),
(202, '21-4440-26', 'Lenci', 'Venners', '', 'JPIA', '1styearrep', ''),
(203, '21-4440-27', 'Tiff', 'Swapp', '', 'JPIA', '2ndyearrep', ''),
(204, '21-4440-28', 'Hale', 'Burney', '', 'JPIA', '2ndyearrep', ''),
(205, '21-4440-29', 'Ricki', 'Ransfield', '', 'JPIA', '3rdyearrep', ''),
(206, '21-4440-30', 'Name', 'Noname', '', 'JPIA', '3rdyearrep', ''),
(207, '21-4440-31', 'Marco', 'Abrahan', '', 'JPIA', '4thyearrep', ''),
(208, '21-4440-32', 'Noreen', 'Somine', '', 'JPIA', '4thyearrep', ''),
(209, '21-4440-33', 'Dorie', 'Loach', 'DL', 'JPIA', '5thyearrep', ''),
(210, '21-4440-34', 'Wye', 'Scholz', 'WS', 'JPIA', '5thyearrep', ''),
(211, '21-4440-35', 'Oliver', 'Parker', '', 'SHS', 'President', ''),
(212, '21-4440-36', 'Tony', 'Warren', '', 'SHS', 'President', ''),
(213, '21-4440-37', 'Amy', 'Hamilton', '', 'SHS', 'Vice President', ''),
(214, '21-4440-38', 'Haris', 'Cameron', '', 'SHS', 'Vice President', ''),
(215, '21-4440-39', 'Chester', 'Ellis', '', 'SHS', 'Secretary', ''),
(216, '21-4440-40', 'Harold', 'Wilson', '', 'SHS', 'Secretary', ''),
(217, '21-4440-41', 'Lyndon', 'Grant', '', 'SHS', 'Treasurer', ''),
(218, '21-4440-42', 'Max', 'Baker', '', 'SHS', 'Treasurer', ''),
(219, '21-4440-43', 'Natalie', 'Gibson', '', 'SHS', 'Public Relation Officer', ''),
(220, '21-4440-44', 'Connie', 'Hall', '', 'SHS', 'Public Relation Officer', ''),
(221, '21-4440-45', 'Eddy', 'Gibson', '', 'SHS', 'Sgt. at Arms', ''),
(222, '21-4440-46', 'Maximilian', 'Mason', '', 'SHS', 'Sgt. at Arms', ''),
(223, '21-4440-47', 'Lana', 'Baker', '', 'SHS', 'STEM Representative', ''),
(224, '21-4440-48', 'Rosie', 'Gray', '', 'SHS', 'STEM Representative', ''),
(225, '21-4440-49', 'Hailey', 'Tucker', '', 'SHS', 'ABM Representative', ''),
(226, '21-4440-50', 'Olivia', 'Davis', '', 'SHS', 'ABM Representative', ''),
(227, '21-4440-51', 'Paul', 'Ellis', '', 'SHS', 'GAS Representative', ''),
(228, '21-4440-52', 'Belinda', 'Morgan', '', 'SHS', 'GAS Representative', ''),
(229, '21-4440-53', 'Adrian', 'Ross', '', 'SHS', 'HUMSS Representative', ''),
(230, '21-4440-54', 'Dale', 'Douglas', '', 'SHS', 'HUMSS Representative', ''),
(231, '21-4440-55', 'Miley', 'Perry', '', 'SHS', 'ICT Representative', ''),
(232, '21-4440-56', 'Florrie', 'Morris', '', 'SHS', 'ICT Representative', ''),
(233, '21-4440-57', 'Tara', 'Farrell', '', 'SHS', 'HE Representative', ''),
(234, '21-4440-58', 'Sawyer', 'Montgomery', '', 'SHS', 'HE Representative', ''),
(235, '21-4440-59', 'Joy', 'Stanmore', '', 'JHS', 'President', ''),
(236, '21-4440-60', 'Georgeanna', 'Vanichev', '', 'JHS', 'President', ''),
(237, '21-4440-61', 'Bren', 'Sowte', '', 'JHS', 'Vice President', ''),
(238, '21-4440-62', 'Myriam', 'Chilley', '', 'JHS', 'Vice President', ''),
(239, '21-4440-63', 'Lisbeth', 'Danaher', '', 'JHS', 'Secretary', ''),
(240, '21-4440-64', 'Laurie', 'Minichi', '', 'JHS', 'Secretary', ''),
(241, '21-4440-65', 'Evania', 'Muston', '', 'JHS', 'Treasurer', ''),
(242, '21-4440-66', 'Chrysler', 'Domange', '', 'JHS', 'Treasurer', ''),
(243, '21-4440-67', 'Cyril', 'Kilbourn', '', 'JHS', 'Auditor', ''),
(244, '21-4440-68', 'Betti', 'Ferrettini', '', 'JHS', 'Auditor', ''),
(245, '21-4440-69', 'Ole', 'Agg', '', 'JHS', 'Public Relation Officer', ''),
(246, '21-4440-70', 'Jeth', 'Bancroft', '', 'JHS', 'Public Relation Officer', ''),
(247, '21-4440-71', 'Koenraad', 'Roland', '', 'JHS', 'Sgt. at Arms', ''),
(248, '21-4440-72', 'See', 'Linde', '', 'JHS', 'Sgt. at Arms', ''),
(249, '21-4440-73', 'Feodora', 'Spikings', '', 'ELEM', 'President', ''),
(250, '21-4440-74', 'Madelin', 'Asplin', '', 'ELEM', 'President', ''),
(251, '21-4440-75', 'Eb', 'Moretto', '', 'ELEM', 'Vice President', ''),
(252, '21-4440-76', 'Ann-marie', 'Seater', '', 'ELEM', 'Vice President', ''),
(253, '21-4440-77', 'Eartha', 'Gribben', '', 'ELEM', 'Secretary', ''),
(254, '21-4440-78', 'Prentiss', 'Scandroot', '', 'ELEM', 'Secretary', ''),
(255, '21-4440-79', 'Rosanne', 'Zupone', '', 'ELEM', 'Treasurer', ''),
(256, '21-4440-80', 'Ainsley', 'Van der Kruys', '', 'ELEM', 'Treasurer', ''),
(257, '21-4440-81', 'Adam', 'Roumier', '', 'ELEM', 'Auditor', ''),
(258, '21-4440-82', 'Brittney', 'Kuhle', '', 'ELEM', 'Auditor', ''),
(259, '21-4440-83', 'Essie', 'Astbery', '', 'ELEM', 'Public Relation Officer', ''),
(260, '21-4440-84', 'Ulysses', 'Whates', '', 'ELEM', 'Public Relation Officer', ''),
(261, '21-4440-85', 'Brand', 'Ranvoise', '', 'ELEM', 'Sgt. at Arms', ''),
(262, '21-4440-86', 'Shay', 'Haslum', '', 'ELEM', 'Sgt. at Arms', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
