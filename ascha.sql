-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 01:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ascha`
--

-- --------------------------------------------------------

--
-- Table structure for table `ong`
--

CREATE TABLE `ong` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `telefone` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `ong`
--

INSERT INTO `ong` (`id`, `nome`, `genero`, `categoria`, `telefone`, `email`, `senha`) VALUES
(20, 'Samuel Chuma Faife', 'Masculino', 'Voluntario', 845158875, 'samuelchuma85@gmail.com', '1998'),
(22, 'Pitter Gomes Malunga', 'Masculino', 'Beneficiario', 876543218, 'pittermalunga@gmail.com', '1243'),
(23, 'Fermino Mutemba', 'Masculino', 'Voluntario', 876789000, 'mutembasalva@gmail.com', '8900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ong`
--
ALTER TABLE `ong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
