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
-- Table structure for table `altaservidor`
--

CREATE TABLE `altaservidor` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Tipo` varchar(30) NOT NULL,
  `Operativo` varchar(30) NOT NULL,
  `Ambiente` varchar(20) NOT NULL,
  `Particion` varchar(20) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Hardware` varchar(20) NOT NULL,
  `Driver` varchar(20) NOT NULL,
  `Anti` varchar(20) NOT NULL,
  `Patch` varchar(20) NOT NULL,
  `Backup` varchar(20) NOT NULL,
  `Ou` varchar(20) NOT NULL,
  `Sensor` varchar(20) NOT NULL,
  `Repre` varchar(20) NOT NULL,
  `Licen` varchar(20) NOT NULL,
  `Responsable` varchar(20) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `Doc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `altaservidor`
--
ALTER TABLE `altaservidor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `altaservidor`
--
ALTER TABLE `altaservidor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
