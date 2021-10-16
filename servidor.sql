-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 07:51 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Table structure for table `servidor`
--

CREATE TABLE `servidor` (
  `id` int(20) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `SistemaOp` varchar(15) NOT NULL,
  `Ambiente` varchar(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `IP` int(20) NOT NULL,
  `SensoresMoni` varchar(30) NOT NULL,
  `Ou` varchar(30) NOT NULL,
  `Backups` varchar(30) NOT NULL,
  `Administrador` varchar(30) NOT NULL,
  `DNS` varchar(30) NOT NULL,
  `Fecha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servidor`
--

INSERT INTO `servidor` (`id`, `Tipo`, `SistemaOp`, `Ambiente`, `Nombre`, `IP`, `SensoresMoni`, `Ou`, `Backups`, `Administrador`, `DNS`, `Fecha`) VALUES
(1, 'Avast', 'Windows 11', 'a', 'Lenny', 192168, 'si', 'de', 'S.a', 'Monroy', 'avast', '12/4/2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servidor`
--
ALTER TABLE `servidor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
