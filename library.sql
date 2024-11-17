-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Nov 08, 2024 alle 19:25
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Struttura della tabella `library`
--

CREATE TABLE `library` (
  `ID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `ISBN` varchar(50) NOT NULL,
  `descrip` varchar(300) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `author_fname` varchar(50) NOT NULL,
  `author_lname` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publish_date` date DEFAULT NULL,
  `id_status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `library`
--

INSERT INTO `library` (`ID`, `title`, `image`, `ISBN`, `descrip`, `type`, `author_fname`, `author_lname`, `publisher_name`, `publish_date`, `id_status`) VALUES
(1, 'John the young', 'https://cdn.pixabay.com/photo/2021/04/11/17/36/book-6170394_640.jpg', '978-3-16-148410-0', 'Story of John', 'Book', 'Joe', 'Sullivan', 'Arcadia', '2020-09-01', 'availvable'),
(2, 'John the young- the movie', 'https://cdn.pixabay.com/photo/2020/07/05/10/00/student-5372393_640.jpg', '978-3-16-147410-0', 'Story of John- the movie', 'DVD', 'Andy', 'Mariland', 'Century Fox', '2024-09-01', 'reserved'),
(3, 'Thailand', 'https://cdn.pixabay.com/photo/2013/09/09/22/47/thailand-180828_640.jpg', '778-3-16-148410-0', 'Travel guide', 'Book', 'Sunny', 'Rossi', 'Lonely Planet', '2022-09-01', 'availvable'),
(4, 'The Clash-best of', 'https://cdn.pixabay.com/photo/2013/07/13/12/41/music-160112_640.png', '778-3-1-14841-0', 'Best of the Clash', 'CD', 'The', 'Clash', 'Planet B', '2022-12-10', 'availvable'),
(11, 'If I knew', 'https://cdn.pixabay.com/photo/2017/06/03/19/58/sara-2369596_640.jpg', '01245-012-48-1', 'Autobiography', 'Book', 'Sara J.', 'Connor', 'Connor publishing', '2023-08-24', 'reserved'),
(12, 'Tell me something', 'https://media.istockphoto.com/id/183025413/de/foto/freiheit-bringt-gl%C3%BCck.webp?s=2048x2048&w=is&k=20&c=MnR2-sLJA3uqXn9q_FrxniXZAEzIQhk-KZPbjevgkgY=', '01245-012-48-2', 'Short story about a dog', 'DVD', 'Sara J.', 'Connor', 'Connor publishing', '2019-06-01', 'available');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ISBN` (`ISBN`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `library`
--
ALTER TABLE `library`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
