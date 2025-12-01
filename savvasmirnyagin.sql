-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Dets 01, 2025 kell 10:32 EL
-- Serveri versioon: 10.4.32-MariaDB
-- PHP versioon: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `savvasmirnyagin`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `loomad`
--

CREATE TABLE `loomad` (
  `loomId` int(11) NOT NULL,
  `loomaNimi` varchar(100) DEFAULT NULL,
  `kaal` int(11) DEFAULT NULL,
  `varv` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `loomad`
--

INSERT INTO `loomad` (`loomId`, `loomaNimi`, `kaal`, `varv`) VALUES
(1, 'kass toomas', 3, 'black'),
(2, 'koer Oskar', 5, 'black'),
(3, 'kukk Maskim', 2, 'orange');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `loomad`
--
ALTER TABLE `loomad`
  ADD PRIMARY KEY (`loomId`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `loomad`
--
ALTER TABLE `loomad`
  MODIFY `loomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
