-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 19, 2014 at 03:18 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `deiTeste`
--

-- --------------------------------------------------------

--
-- Table structure for table `salas`
--

CREATE TABLE `salas` (
`sala_id` int(10) NOT NULL,
  `sala_name` varchar(10) COLLATE latin1_bin NOT NULL,
  `sala_x` varchar(10) COLLATE latin1_bin NOT NULL,
  `sala_y` varchar(10) COLLATE latin1_bin NOT NULL,
  `zoom` varchar(10) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `salas`
--

INSERT INTO `salas` (`sala_id`, `sala_name`, `sala_x`, `sala_y`, `zoom`) VALUES
(1, 'maquina', '100px', '-300px', '200%'),
(2, 'secretaria', '-150px', '-300px', '200%'),
(3, 'gab', '-1300px', '100px', '200%'),
(4, 'cisuc', '-2000px', '300px', '200%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salas`
--
ALTER TABLE `salas`
 ADD PRIMARY KEY (`sala_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salas`
--
ALTER TABLE `salas`
MODIFY `sala_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
