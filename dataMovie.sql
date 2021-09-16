-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Vært: localhost:8889
-- Genereringstid: 16. 09 2021 kl. 20:37:42
-- Serverversion: 5.7.32
-- PHP-version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fresh_tomatoes`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `movie`
--

CREATE TABLE `movie` (
  `movId` int(10) UNSIGNED NOT NULL,
  `movName` varchar(200) COLLATE utf8_danish_ci NOT NULL,
  `movDescription` text COLLATE utf8_danish_ci,
  `movRating` decimal(2,1) DEFAULT NULL,
  `movDate` date NOT NULL,
  `movGenre` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `movActors` varchar(200) COLLATE utf8_danish_ci NOT NULL,
  `movAge` int(11) NOT NULL,
  `movBlogDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `movTags` varchar(200) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `movie`
--

INSERT INTO `movie` (`movId`, `movName`, `movDescription`, `movRating`, `movDate`, `movGenre`, `movActors`, `movAge`, `movBlogDate`, `movTags`) VALUES
(83, 'Ternet Ninja 2', '<p>ternet</p>', '4.0', '2021-09-24', 'acion', 'Anders Mathessen', 5, '2021-09-16 22:22:32', 'sjov');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movId`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `movie`
--
ALTER TABLE `movie`
  MODIFY `movId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
