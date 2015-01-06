-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 06, 2015 at 01:46 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dei`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `event_course` int(3) NOT NULL DEFAULT '3',
  `room_id` int(11) NOT NULL,
  `weekday` varchar(16) CHARACTER SET utf8 NOT NULL,
  `hour_begin` time NOT NULL,
  `hour_end` time NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_course`, `room_id`, `weekday`, `hour_begin`, `hour_end`, `day`) VALUES
(1, 'Workshop de InDesign', 2, 12, 'Terça-Feira', '14:30:00', '17:00:00', '2015-01-06'),
(2, 'Jantar de Natal', 4, 12, 'Sexta-Feira', '18:00:00', '20:00:00', '2015-01-09'),
(3, 'Reunião Pedagógica de Engenharia Informática', 1, 12, 'Quarta-Feira', '14:00:00', '18:00:00', '2015-02-11'),
(4, 'Workshop de HTML', 3, 12, 'Quinta-Feira', '16:00:00', '20:00:00', '2015-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `office_hours`
--

CREATE TABLE `office_hours` (
  `hour_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `weekday` varchar(16) COLLATE utf8_bin NOT NULL,
  `hour_begin` int(11) NOT NULL,
  `hour_end` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `office_hours`
--

INSERT INTO `office_hours` (`hour_id`, `teacher_id`, `room_id`, `weekday`, `hour_begin`, `hour_end`) VALUES
(1, 2, 94, 'Sexta-Feira', 10, 12),
(2, 3, 39, 'Quarta-Feira', 14, 19),
(3, 4, 73, 'Quarta-Feira', 14, 17),
(4, 5, 103, 'Segunda-Feira', 11, 12),
(5, 6, 65, 'Segunda-Feira', 14, 15),
(6, 6, 65, 'Quarta-Feira', 11, 13),
(7, 6, 65, 'Quinta-Feira', 16, 18),
(8, 7, 82, 'Sexta-Feira', 9, 11),
(9, 7, 82, 'Sexta-Feira', 14, 15),
(10, 8, 54, 'Segunda-Feira', 9, 10),
(11, 8, 54, 'Segunda-Feira', 13, 14),
(12, 8, 54, 'Terça-Feira', 11, 12),
(13, 8, 54, 'Terça-Feira', 14, 15),
(14, 8, 54, 'Terça-Feira', 17, 18),
(15, 9, 83, 'Segunda-Feira', 12, 13),
(16, 9, 83, 'Segunda-Feira', 12, 13),
(17, 10, 85, 'Segunda-Feira', 16, 18),
(18, 10, 85, 'Quinta-Feira', 18, 20),
(19, 12, 103, 'Quinta-Feira', 11, 13),
(20, 13, 25, 'Terça-Feira', 14, 18),
(21, 14, 77, 'Sexta-Feira', 8, 11),
(22, 15, 44, 'Terça-Feira', 9, 13),
(23, 15, 44, 'Quinta-Feira', 17, 19),
(24, 16, 59, 'Segunda-Feira', 12, 15),
(25, 16, 59, 'Sexta-Feira', 14, 17),
(26, 17, 74, 'Sexta-Feira', 14, 16),
(27, 17, 74, 'Sexta-Feira', 18, 19),
(29, 18, 56, 'Quarta-Feira', 9, 12),
(30, 19, 29, 'Terça-Feira', 9, 13),
(31, 19, 29, 'Terça-Feira', 18, 19),
(32, 20, 81, 'Terça-Feira', 14, 17),
(33, 20, 81, 'Quinta-Feira', 9, 10),
(34, 20, 81, 'Quinta-Feira', 12, 12),
(35, 21, 103, 'Segunda-Feira', 18, 19),
(36, 21, 84, 'Sexta-Feira', 16, 18),
(37, 22, 66, 'Quinta-Feira', 9, 13),
(38, 24, 55, 'Terça-Feira', 11, 13),
(39, 24, 55, 'Terça-Feira', 14, 17),
(40, 24, 55, 'Terça-Feira', 11, 13),
(41, 24, 55, 'Terça-Feira', 14, 17),
(42, 25, 34, 'Segunda-Feira', 9, 13),
(43, 26, 61, 'Segunda-Feira', 8, 12),
(44, 27, 35, 'Quinta-Feira', 10, 12),
(45, 27, 35, 'Quinta-Feira', 13, 16),
(46, 29, 62, 'Quinta-Feira', 14, 19),
(47, 30, 43, 'Quarta-Feira', 11, 13),
(48, 30, 43, 'Sexta-Feira', 9, 11),
(49, 30, 43, 'Sexta-Feira', 14, 15),
(50, 31, 41, 'Quarta-Feira', 13, 15),
(51, 32, 31, 'Segunda-Feira', 11, 13),
(52, 32, 31, 'Segunda-Feira', 14, 16),
(53, 32, 31, 'Quinta-Feira', 14, 16),
(54, 33, 79, 'Segunda-Feira', 9, 12),
(55, 33, 79, 'Quinta-Feira', 9, 12),
(56, 35, 103, 'Quinta-Feira', 16, 18),
(57, 35, 103, 'Sexta-Feira', 17, 20),
(58, 36, 69, 'Terça-Feira', 10, 15),
(59, 37, 70, 'Quarta-Feira', 9, 11),
(60, 37, 70, 'Sexta-Feira', 9, 11),
(61, 38, 103, 'Sexta-Feira', 9, 11),
(62, 40, 70, 'Terça-Feira', 8, 13),
(63, 41, 104, 'Terça-Feira', 16, 20),
(64, 42, 52, 'Sexta-Feira', 9, 12),
(65, 44, 36, 'Quarta-Feira', 14, 17),
(66, 44, 36, 'Sexta-Feira', 14, 16),
(67, 45, 38, 'Terça-Feira', 9, 13),
(68, 45, 38, 'Terça-Feira', 9, 10),
(69, 46, 37, 'Quarta-Feira', 14, 18),
(70, 48, 80, 'Segunda-Feira', 14, 18),
(71, 49, 60, 'Quinta-Feira', 11, 13),
(72, 49, 60, 'Sexta-Feira', 11, 15),
(73, 49, 60, 'Sexta-Feira', 17, 18),
(74, 50, 110, 'Segunda-Feira', 20, 21),
(75, 50, 119, 'Quinta-Feira', 20, 21),
(76, 51, 103, 'Quarta-Feira', 10, 11),
(77, 51, 103, 'Quinta-Feira', 11, 13),
(78, 51, 103, 'Sexta-Feira', 11, 13),
(79, 52, 103, 'Terça-Feira', 12, 13),
(80, 52, 103, 'Quinta-Feira', 9, 11),
(81, 53, 76, 'Sexta-Feira', 9, 10),
(82, 53, 76, 'Sexta-Feira', 12, 13),
(83, 54, 42, 'Terça-Feira', 14, 18),
(84, 54, 42, 'Quinta-Feira', 12, 13),
(85, 55, 104, 'Sexta-Feira', 17, 20),
(86, 56, 49, 'Segunda-Feira', 10, 13),
(87, 57, 53, 'Segunda-Feira', 13, 16),
(88, 57, 53, 'Sexta-Feira', 14, 15),
(89, 57, 53, 'Sexta-Feira', 19, 20),
(90, 58, 77, 'Terça-Feira', 11, 12),
(91, 58, 77, 'Sexta-Feira', 11, 12),
(92, 59, 47, 'Terça-Feira', 10, 12),
(93, 59, 47, 'Quinta-Feira', 10, 12),
(94, 60, 103, 'Terça-Feira', 16, 18),
(95, 61, 27, 'Sexta-Feira', 10, 12),
(96, 62, 71, 'Segunda-Feira', 10, 13),
(97, 62, 71, 'Terça-Feira', 10, 12),
(98, 64, 75, 'Segunda-Feira', 17, 18),
(99, 64, 75, 'Sexta-Feira', 8, 10),
(100, 65, 45, 'Terça-Feira', 9, 10),
(101, 65, 45, 'Terça-Feira', 14, 18),
(102, 66, 28, 'Quarta-Feira', 9, 12),
(103, 66, 28, 'Quarta-Feira', 14, 16),
(104, 67, 72, 'Quinta-Feira', 17, 19),
(105, 67, 72, 'Sexta-Feira', 10, 12),
(106, 68, 50, 'Terça-Feira', 14, 16),
(107, 68, 50, 'Sexta-Feira', 14, 17);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room` varchar(255) COLLATE utf8_bin NOT NULL,
  `block` varchar(10) COLLATE utf8_bin NOT NULL,
  `floor` int(11) NOT NULL,
  `tower` varchar(255) COLLATE utf8_bin NOT NULL,
  `typology` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `secondname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `pos_x` varchar(255) COLLATE utf8_bin NOT NULL,
  `pos_y` varchar(255) COLLATE utf8_bin NOT NULL,
  `zoom` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `block`, `floor`, `tower`, `typology`, `name`, `secondname`, `pos_x`, `pos_y`, `zoom`) VALUES
(1, 'A4.3', '', 4, 'A', 'services', 'Bar', NULL, '-300px', '-2500px', '100%'),
(3, 'A6.1', '', 6, 'A', 'study room', 'Sala de Estudo', NULL, '', '', ''),
(4, 'B4.1', '', 4, 'B', 'amphitheater', 'Anfiteatro B1', NULL, '-800px', '-2100px', '100%'),
(5, 'B5.2', '', 5, 'B', 'amphitheater', 'Anfiteatro B2', NULL, '-800px', '2100px', '100%'),
(6, 'C4.1', '', 4, 'C', 'study room', 'Sala de Estudo', NULL, '-2000px', '-2100px', '100%'),
(7, 'C4.2', '', 4, 'C', 'meeting room', 'Sala de Convívio', NULL, '-1500px', '-1900px', '100%'),
(8, 'C4.3', '', 4, 'C', 'services', 'NEI', 'Núcleo de Estudantes de Informática', '-1200px', '-1700px', '100%'),
(9, 'C4.4', '', 4, 'C', 'study room', 'Sala de Estudo', NULL, '-1500px', '-1700px', '100%'),
(10, 'C4.5', '', 4, 'C', 'study room', 'Sala de Estudo', NULL, '-2000px', '-2100px', '100%'),
(11, 'C4.6', '', 4, 'C', 'study room', 'Sala de Estudo', NULL, '-2000px', '-2100px', '100%'),
(12, 'C5.1', '', 5, 'C', 'classroom', NULL, NULL, '', '', ''),
(13, 'C5.2', '', 5, 'C', 'classroom', NULL, NULL, '', '', ''),
(14, 'C5.3', '', 5, 'C', 'classroom', NULL, NULL, '', '', ''),
(15, 'C5.4', '', 5, 'C', 'classroom', NULL, NULL, '', '', ''),
(16, 'C6.1', '', 6, 'C', 'laboratory', 'CISUC-CRS', NULL, '', '', ''),
(17, 'C6.2', '', 6, 'C', 'laboratory', 'CISUC-SSE', NULL, '', '', ''),
(18, 'C6.3', '', 6, 'C', 'laboratory', 'CISUC-IS', NULL, '', '', ''),
(19, 'C6.4', '', 6, 'C', 'laboratory', 'LSM', 'Lab. de Sistemas Multimédia', '', '', ''),
(20, 'C6.5', '', 6, 'C', 'laboratory', 'CISUC-CRS', NULL, '', '', ''),
(21, 'C6.6', '', 6, 'C', 'laboratory', 'CISUC-AC', NULL, '', '', ''),
(22, 'D1.1', '1', 1, 'D', 'services', 'Secretaria', NULL, '-900px', '-2500px', '100%'),
(23, 'D1.2', '2', 1, 'D', '', NULL, NULL, '', '', ''),
(24, 'D1.3', '3', 1, 'D', 'services', 'Reprografia', NULL, '', '', ''),
(25, 'D1.4', '4', 1, 'D', 'services', 'GAPI', 'Gabinete de Apoio a Projectos', '-1300px', '-2300px', '100%'),
(26, 'D1.5', '5', 1, 'D', 'staff', 'Sala de Reuniões', NULL, '', '', ''),
(27, 'D1.6', '6', 1, 'D', 'staff', 'Sala de Vídeoconferência', NULL, '', '', ''),
(28, 'D1.7', '7', 1, 'D', 'staff', 'Sala de Vídeoconferência', NULL, '', '', ''),
(29, 'D1.8', '8', 1, 'D', 'offices', NULL, NULL, '-2800px', '-1700px', '100%'),
(30, 'D1.9', '9', 1, 'D', 'offices', NULL, NULL, '', '', ''),
(31, 'D1.10', '10', 1, 'D', 'staff', 'Sala de Funcionários', NULL, '', '', ''),
(32, 'D1.11', '11', 1, 'D', 'offices', NULL, NULL, '', '', ''),
(33, 'D1.12', '12', 1, 'D', 'offices', NULL, NULL, '', '', ''),
(34, 'D1.13', '13', 1, 'D', 'offices', NULL, NULL, '', '', ''),
(35, 'D1.14', '14', 1, 'D', 'laboratory', 'CISUC', 'Investigadores Externos', '', '', ''),
(36, 'D1.15', '15', 1, 'D', 'offices', NULL, NULL, '', '', ''),
(37, 'D1.17', '17', 1, 'D', 'laboratory', 'PhD Lounge', NULL, '', '', ''),
(38, 'D1.18', '18', 1, 'D', 'offices', NULL, NULL, '', '', ''),
(39, 'D1.19', '19', 1, 'D', 'offices', NULL, NULL, '', '', ''),
(40, 'D2.1', '1', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(41, 'D2.2', '2', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(42, 'D2.3', '3', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(43, 'D2.4', '4', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(44, 'D2.5', '5', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(45, 'D2.6', '6', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(46, 'D2.7', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(47, 'D2.8', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(48, 'D2.9', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(49, 'D2.10', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(50, 'D2.11', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(51, 'D2.12', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(52, 'D2.13', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(53, 'D2.14', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(54, 'D2.15', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(55, 'D2.16', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(56, 'D2.17', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(57, 'D2.18', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(58, 'D2.19', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(59, 'D2.20', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(60, 'D2.21', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(61, 'D2.22', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(62, 'D2.23', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(63, 'D2.24', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(64, 'D2.25', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(65, 'D2.26', '', 2, 'D', 'offices', NULL, NULL, '', '', ''),
(66, 'D3.1', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(67, 'D3.2', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(68, 'D3.3', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(69, 'D3.4', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(70, 'D3.5', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(71, 'D3.6', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(72, 'D3.7', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(73, 'D3.8', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(74, 'D3.9', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(75, 'D3.10', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(76, 'D3.11', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(77, 'D3.12', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(78, 'D3.13', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(79, 'D3.14', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(80, 'D3.15', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(81, 'D3.16', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(82, 'D3.17', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(83, 'D3.18', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(84, 'D3.19', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(85, 'D3.20', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(86, 'D3.21', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(87, 'D3.22', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(88, 'D3.23', '', 3, 'D', 'offices', NULL, NULL, '', '', ''),
(89, 'E4.1', '', 4, 'E', 'classroom', NULL, NULL, '-2300px', '-1400px', '100%'),
(90, 'E4.2', '', 4, 'E', 'classroom', NULL, NULL, '-2100px', '-1300px', '100%'),
(91, 'E4.3', '', 4, 'E', 'classroom', NULL, NULL, '-1900px', '-1200px', '100%'),
(92, 'E4.4', '', 4, 'E', 'classroom', NULL, NULL, '-2200px', '-1000px', '100%'),
(93, 'E4.5', '', 4, 'E', 'classroom', NULL, NULL, '-2400px', '-1200px', '100%'),
(94, 'E4.6', '', 4, 'E', 'classroom', NULL, NULL, '-2600px', '-1400px', '100%'),
(95, 'E4.7', '', 4, 'E', 'classroom', NULL, NULL, '-2900px', '-1600px', '100%'),
(96, 'E5.1', '', 5, 'E', 'laboratory', 'CISUC-ECOS', NULL, '-2300px', '-1400px', '100%'),
(97, 'E5.2', '', 5, 'E', 'laboratory', 'CISUC-SSE', NULL, '-2100px', '-1300px', '100%'),
(98, 'E5.3', '', 5, 'E', 'laboratory', 'CISUC-SSE', NULL, '-1900px', '-1200px', '100%'),
(99, 'E5.4', '', 5, 'E', 'laboratory', 'CISUC-LCT', NULL, '-2200px', '-1000px', '100%'),
(100, 'E5.5', '', 5, 'E', 'services', 'Sala Serviços CISUC', NULL, '-2400px', '-1200px', '100%'),
(101, 'E5.6', '', 5, 'E', 'laboratory', 'CISUC-SSE', NULL, '-2600px', '-1400px', '100%'),
(102, 'E5.7', '', 5, 'E', 'laboratory', 'CISUC-SSE', NULL, '-2900px', '-1600px', '100%'),
(103, 'E5.8', '', 5, 'E', 'laboratory', 'CISUC-ECOS', NULL, '', '', ''),
(104, 'E6.1', '', 6, 'E', 'classroom', NULL, NULL, '-2300px', '-1400px', '100%'),
(105, 'E6.2', '', 6, 'E', 'laboratory', 'CISUC-AC', NULL, '-2100px', '-1300px', '100%'),
(106, 'E6.3', '', 6, 'E', 'laboratory', 'CISUC-AC', NULL, '-1900px', '-1200px', '100%'),
(107, 'E6.4', '', 6, 'E', 'laboratory', 'CISUC-AC', NULL, '-2200px', '-1000px', '100%'),
(108, 'E6.5', '', 6, 'E', 'laboratory', 'CISUC-CRS', NULL, '-2400px', '-1200px', '100%'),
(109, 'F1.1', '1', 1, 'F', 'offices', 'Sala de Professores', NULL, '', '', ''),
(110, 'F1.2', '2', 1, 'F', '', NULL, NULL, '', '', ''),
(111, 'F1.4', '4', 1, 'F', 'staff', 'Bar CISUC', NULL, '-3750px', '-1500px', '100%'),
(112, 'F2.1', '', 2, 'F', 'offices', 'Sala de Professores Convidados', NULL, '', '', ''),
(113, 'F2.2', '', 2, 'F', 'laboratory', 'TOEFL', NULL, '', '', ''),
(114, 'F2.3', '', 2, 'F', 'laboratory', 'MSE - Sala 2', NULL, '', '', ''),
(115, 'G4.1', '', 4, 'G', 'classroom', NULL, NULL, '-3400px', '-1200px', '100%'),
(116, 'G4.2', '', 4, 'G', 'laboratory', 'LIIS', 'Lab. de Informática Industrial e Sistemas', '-3100px', '-1000px', '100%'),
(117, 'G4.3', '', 4, 'G', 'classroom', NULL, NULL, '-2800px', '-1000px', '100%'),
(118, 'G4.4', '', 4, 'G', 'laboratory', 'LAGE', 'Lab. de Gestão', '-3000px', '-800px', '100%'),
(119, 'G4.5', '', 4, 'G', 'classroom', NULL, NULL, '-3400px', '-900px', '100%'),
(120, 'G4.6', '', 4, 'G', 'classroom', NULL, NULL, '-3700px', '-1100px', '100%'),
(121, 'G5.1', '', 5, 'G', 'laboratory', 'LCT', 'Lab. de Comunicações e Telemática', '-3400px', '-1200px', '100%'),
(122, 'G5.2', '', 5, 'G', 'classroom', NULL, NULL, '-3100px', '-1000px', '100%'),
(123, 'G5.3', '', 5, 'G', 'classroom', NULL, NULL, '-2800px', '-1000px', '100%'),
(124, 'G5.4.1', '', 5, 'G', '', NULL, NULL, '-3000px', '-800px', '100%'),
(125, 'G5.4.2', '', 5, 'G', '', NULL, NULL, '-3400px', '-900px', '100%'),
(126, 'G5.5', '', 5, 'G', 'classroom', NULL, NULL, '-3400px', '-900px', '100%'),
(127, 'G5.6', '', 5, 'G', 'classroom', NULL, NULL, '-3700px', '-1100px', '100%'),
(130, 'G6.1', '', 6, 'G', 'laboratory', 'CISUC-LCT', NULL, '-3400px', '-1200px', '100%'),
(131, 'G6.2', '', 6, 'G', 'laboratory', 'CISUC-LCT', NULL, '-3100px', '-1000px', '100%'),
(132, 'G6.3', '', 6, 'G', 'staff', 'Gestores de Redes', NULL, '-2800px', '-1000px', '100%'),
(133, 'G6.4', '', 6, 'G', 'services', 'Helpdesk', NULL, '-2800px', '-1000px', '100%'),
(134, 'G6.5', '', 6, 'G', 'staff', 'Sala de Servidores', NULL, '-3000px', '-800px', '100%'),
(135, 'G6.6', '', 6, 'G', 'laboratory', 'CISUC-LCT', NULL, '-3400px', '-900px', '100%'),
(136, 'G6.7', '', 6, 'G', 'laboratory', 'CISUC-LCT', NULL, '-3700px', '-1100px', '100%'),
(137, '', '', 0, '', 'stairs', 'Elevador (Torre E)', NULL, '', '', ''),
(138, '', '', 0, '', 'stairs', 'Escadas (Torre G)', NULL, '', '', ''),
(139, '', '', 0, '', 'stairs', 'Elevador (Torre G)', NULL, '', '', ''),
(143, 'D1', '', 1, 'D', 'bathroom', 'Casa de Banho (Torre C)', NULL, '', '', ''),
(144, 'E1', '', 1, 'E', 'bathroom', 'Casa de Banho (Torre E)', NULL, '', '', ''),
(146, 'D1.16', '16', 1, 'D', '', NULL, NULL, '', '', ''),
(149, 'C2', '', 2, 'C', 'bathroom', 'Casa de Banho (Torre C)', NULL, '', '', ''),
(150, 'E2', '', 2, 'E', 'bathroom', 'Casa de Banho (Torre E)', NULL, '', '', ''),
(151, 'C3', '', 3, 'C', 'bathroom', 'Casa de Banho (Torre C)', NULL, '', '', ''),
(152, 'E3', '', 3, 'E', 'bathroom', 'Casa de Banho (Torre E)', NULL, '', '', ''),
(153, 'A4', '', 4, 'A', 'bathroom', 'Casa de Banho (Torre A)', NULL, '-90px', '-2600px', '100%'),
(156, '', '', 0, '', 'stairs', 'Escadas (Torre A - Acesso Exterior)', NULL, '', '', ''),
(157, 'A5.1', '', 5, 'A', 'services', 'Biblioteca', NULL, '', '', ''),
(160, 'E5.5', '', 5, 'E', '', NULL, NULL, '', '', ''),
(161, 'C5', '', 5, 'C', 'bathroom', 'Casa de Banho (Torre C)', NULL, '', '', ''),
(162, 'E5', '', 5, 'E', 'bathroom', 'Casa de Banho (Torre E)', NULL, '', '', ''),
(163, 'G5', '', 5, 'G', 'bathroom', 'Casa de Banho (Torre G)', NULL, '', '', ''),
(164, 'A6', '', 6, 'A', 'bathroom', 'Casa de Banho (Torre A)', NULL, '', '', ''),
(166, 'C6', '', 6, 'C', 'bathroom', 'Casa de Banho (Torre C)', NULL, '', '', ''),
(167, 'E6', '', 6, 'E', 'bathroom', 'Casa de Banho (Torre E)', NULL, '', '', ''),
(168, 'G6', '', 6, 'G', 'bathroom', 'Casa de Banho (Torre G)', NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_hours`
--

CREATE TABLE `service_hours` (
  `id_service` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `room` varchar(10) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL,
  `hours` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_hours`
--

INSERT INTO `service_hours` (`id_service`, `id`, `room`, `days`, `hours`, `email`, `phone`, `contact`) VALUES
(1, 1, 'A4.3', 'Segunda-feira a Sexta-feira', '8:00 - 18:00', NULL, '(+351) 239 790 084', NULL),
(2, 8, 'C4.3', NULL, NULL, 'neiaac@student.dei.uc.pt / nei@academica.pt', '(+351) 239 790 002', NULL),
(3, 22, 'D1.1', 'Segunda-feira a Sexta-feira', '9:00 - 17:00', 'secretaria@dei.uc.pt', '(+351) 239 790 000', 'Lucinda Quadros / Manuela Carrão'),
(4, 25, 'D1.4', NULL, NULL, 'gapi@dei.uc.pt', '(+351) 239 790 078/064', 'Diana Taborda / Jorge Ávila'),
(5, 100, 'E5.5', NULL, NULL, 'cisuc@dei.uc.pt', '(+351) 239 790 000', NULL),
(6, 133, 'G6.4', 'Segunda-feira a Sexta-feira', '10:00 - 13:00', 'helpdesk@dei.uc.pt', '(+351) 239 790 071', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `teacher_course` int(2) NOT NULL DEFAULT '3',
  `teacher_email` varchar(64) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `teacher_course`, `teacher_email`) VALUES
(1, 'Alberto Jorge Lebre Cardoso', 1, 'alberto@dei.uc.pt'),
(2, 'Alcides Miguel Cachulo Aguiar Fonseca', 3, 'amaf@dei.uc.pt'),
(3, 'Alexandre Miguel dos Santos Martins Pinto', 3, 'ampinto@dei.uc.pt'),
(4, 'Álvaro Manuel Reis da Rocha', 3, 'amrocha@dei.uc.pt'),
(5, 'Ana Madalena de Sousa Vasconcelos Matos Boavida', 2, 'aboavida@dei.uc.pt'),
(6, 'António Dourado Pereira Correia', 1, 'dourado@dei.uc.pt'),
(7, 'António Jorge Costa Granjal', 1, 'jgranjal@dei.uc.pt'),
(8, 'António Jorge Silva Cardoso', 1, 'jcardoso@dei.uc.pt'),
(9, 'António José Nunes Mendes', 3, 'toze@dei.uc.pt'),
(10, 'António Manuel Sucena Silveira Gomes', 2, 'amgomes@dei.uc.pt'),
(11, 'Bernardete Martins Ribeiro', 1, 'bribeiro@dei.uc.pt'),
(12, 'Bruna Raquel Sousa', 2, 'bruna@dei.uc.pt'),
(13, 'Bruno Miguel Brás Cabral', 3, 'bcabral@dei.uc.pt'),
(14, 'Carlos Eduardo Delgado Cerqueira', 1, 'cedc@dei.uc.pt'),
(15, 'Carlos Manuel Mira da Fonseca', 1, 'cmfonsec@dei.uc.pt'),
(16, 'Carlos Manuel Robalo Lisboa Bento', 1, 'bento@dei.uc.pt'),
(17, 'Carlos Nuno Bizarro e Silva Laranjeiro', 1, 'cnl@dei.uc.pt'),
(18, 'César A. Teixeira', 1, 'cteixei@dei.uc.pt'),
(19, 'David Fonseca Palma', 2, 'dpalma@uc.pt'),
(20, 'Edmundo Heitor Silva Monteiro', 1, 'edmundo@dei.uc.pt'),
(21, 'Eduardo Miguel Morgado Nunes', 2, 'enunes@dei.uc.pt'),
(22, 'Ernesto Jorge Fernandes Costa', 3, 'ernesto@dei.uc.pt'),
(23, 'Fernando Amílcar Bandeira Cardoso', 1, 'amilcar@dei.uc.pt'),
(24, 'Fernando Jorge Penousal Martins Machado', 3, 'machado@dei.uc.pt'),
(25, 'Fernando José Barros Rodrigues Silva', 1, 'barros@dei.uc.pt'),
(26, 'Fernando Pedro Lopes Boavida Fernandes', 3, 'boavida@uc.pt'),
(27, 'Filipe João Boavida Mendonça Machado Araújo', 1, 'filipius@uc.pt'),
(28, 'Francisco Colunas Pereira Câmara Pereira', 3, 'camara@dei.uc.pt'),
(29, 'Henrique Santos Carmo Madeira', 1, 'henrique@dei.uc.pt'),
(30, 'Hugo Ricardo Gonçalo Oliveira', 3, 'hroliv@dei.uc.pt'),
(31, 'Joel Perdiz Arrais', 3, 'joelarrais@gmail.com'),
(32, 'Jorge Manuel Oliveira Henriques', 3, 'jh@dei.uc.pt'),
(33, 'Jorge Miguel Sá Silva', 3, 'sasilva@dei.uc.pt'),
(34, 'João Gabriel Monteiro Carvalho e Silva', 0, NULL),
(35, 'João Manuel Frade Belo Bicker', 2, 'bicker@dei.uc.pt'),
(36, 'João Paulo da Silva Machado Garcia Vilela', 1, 'jpvilela@dei.uc.pt'),
(37, 'João Pedro Morais de Matos Moniz Ramos', 3, 'jpramos@dei.uc.pt'),
(38, 'João Proença Cunha', 2, 'jmacunha@dei.uc.pt'),
(39, 'Karen Bennett', 1, 'karen.bennett@netcabo.pt'),
(40, 'Licínio Gomes Roque', 3, 'lir@dei.uc.pt'),
(41, 'Luís Alexandre Serras Moura e Silva', 1, 'luis@dei.uc.pt'),
(42, 'Luís Filipe Santos Coelho Paquete', 3, 'paquete@dei.uc.pt'),
(43, 'Luís Filipe Vieira Cordeiro', 3, 'cordeiro@dei.uc.pt'),
(44, 'Luís Miguel Machado Lopes Macedo', 3, 'macedo@dei.uc.pt'),
(45, 'Marco Paulo Amorim Vieira', 1, 'mvieira@dei.uc.pt'),
(46, 'Maria José Patrício Marcelino', 3, 'zemar@dei.uc.pt'),
(47, 'Maria Teresa Ferreira Soares Mendes', 3, 'tmendes@dei.uc.pt'),
(48, 'Marília Pascoal Curado', 1, 'marilia@dei.uc.pt'),
(49, 'Mário Alberto Costa Zenha Rela', 1, 'mzrela@dei.uc.pt'),
(50, 'Nuno Alexandre Couceiro Pimenta', 1, 'nuno@dei.uc.pt'),
(51, 'Nuno Miguel Cabral Carreira Coelho', 2, 'ncoelho@dei.uc.pt'),
(52, 'Paul David Hardman', 2, 'phardman@dei.uc.pt'),
(53, 'Paulo Alexandre Ferreira Simões', 1, 'psimoes@dei.uc.pt'),
(54, 'Paulo Fernando Pereira Carvalho', 1, 'carvalho@dei.uc.pt'),
(55, 'Paulo Filipe de Jesus Mesquita', 2, 'fmesquita@dei.uc.pt'),
(56, 'Paulo Jorge Sousa Gomes', 1, 'pgomes@dei.uc.pt'),
(57, 'Paulo José Osório Rupino Cunha', 3, 'rupino@dei.uc.pt'),
(58, 'Pedro José Mendes Martins', 1, 'pjmm@dei.uc.pt'),
(59, 'Pedro Manuel Henriques da Cunha Abreu', 1, 'pha@dei.uc.pt'),
(60, 'Pedro Miguel Amaral Melo da Cruz', 2, 'pmcruz@dei.uc.pt'),
(61, 'Pedro Nuno San-Bento Furtado', 1, 'pnf@dei.uc.pt'),
(62, 'Raul André Brajczewski Barbosa', 3, 'rbarbosa@dei.uc.pt'),
(63, 'Rui Alexandre Neves Craveirinha', 0, 'rui.craveirinha@gmail.com'),
(64, 'Rui Pedro Lourenço Miranda', 1, 'rmiranda@dei.uc.pt'),
(65, 'Rui Pedro Pinto Carvalho Paiva', 3, 'ruipedro@dei.uc.pt'),
(66, 'Tiago José dos Santos Martins da Cruz', 3, 'tjcruz@dei.uc.pt'),
(67, 'Tiago Rodrigues Baptista', 3, 'baptista@dei.uc.pt'),
(68, 'Vasco Nuno Sousa Simões Pereira', 3, 'vasco@dei.uc.pt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `office_hours`
--
ALTER TABLE `office_hours`
ADD PRIMARY KEY (`hour_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_hours`
--
ALTER TABLE `service_hours`
ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `office_hours`
--
ALTER TABLE `office_hours`
MODIFY `hour_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
