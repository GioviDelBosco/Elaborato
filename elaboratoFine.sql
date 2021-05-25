-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 25, 2021 alle 14:52
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaborato`
--
CREATE DATABASE IF NOT EXISTS `elaborato` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `elaborato`;

-- --------------------------------------------------------

--
-- Struttura della tabella `artista`
--

CREATE TABLE `artista` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `genere` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `artista`
--

INSERT INTO `artista` (`id`, `nome`, `genere`) VALUES
(1, 'Tedua', 'Rap'),
(2, 'Rosa  Chemical', 'Rap'),
(3, 'Psicologi', 'Indie'),
(4, 'Gazzelle', 'Indie'),
(5, 'Skrillex', 'EDM'),
(6, 'Martin Garrix', 'EDM');

-- --------------------------------------------------------

--
-- Struttura della tabella `biglietto`
--

CREATE TABLE `biglietto` (
  `id_biglietto` int(11) NOT NULL,
  `id_utente` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `prezzo` decimal(5,2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `cantante` int(11) NOT NULL,
  `genere` varchar(80) NOT NULL,
  `data` date NOT NULL,
  `prezzo` decimal(5,2) NOT NULL,
  `luogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`id`, `cantante`, `genere`, `data`, `prezzo`, `luogo`) VALUES
(2, 1, 'Rap', '2021-08-03', '15.00', 'Piove di sacco, via Pietro Pinton'),
(3, 2, 'Rap', '2021-09-11', '20.00', 'Padova, Prato della valle'),
(5, 3, 'Indie', '2021-08-19', '10.50', 'Ponte di Brenta, Piazza Barbato'),
(6, 4, 'Indie', '2021-09-01', '13.00', 'Milano, Piazza del Duomo'),
(7, 6, 'EDM', '2021-08-15', '30.00', 'Piazza della frutta, Padova');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cognome` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `username`, `nome`, `cognome`, `password`) VALUES
(2, 'GioviDelBosco', 'Giovanni', 'Sgaravatto', '12345'),
(3, 'solegiallo', 'sole', 'giallo', '12345');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `biglietto`
--
ALTER TABLE `biglietto`
  ADD PRIMARY KEY (`id_biglietto`),
  ADD KEY `id_utente` (`id_utente`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cantante` (`cantante`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `artista`
--
ALTER TABLE `artista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `biglietto`
--
ALTER TABLE `biglietto`
  MODIFY `id_biglietto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `biglietto`
--
ALTER TABLE `biglietto`
  ADD CONSTRAINT `biglietto_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`),
  ADD CONSTRAINT `biglietto_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id`);

--
-- Limiti per la tabella `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`cantante`) REFERENCES `artista` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
