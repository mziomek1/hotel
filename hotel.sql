-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Mar 2025, 15:00
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `hotel`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `ID_Klienta` int(11) NOT NULL,
  `Imię` varchar(50) DEFAULT NULL,
  `Nazwisko` varchar(50) DEFAULT NULL,
  `Numer_telefonu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`ID_Klienta`, `Imię`, `Nazwisko`, `Numer_telefonu`) VALUES
(0, 'Mikołaj', 'Ziomek', 780038866);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pokoje`
--

CREATE TABLE `pokoje` (
  `numer` int(11) NOT NULL,
  `typ` varchar(50) DEFAULT NULL,
  `cena_za_dobe` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pokoje`
--

INSERT INTO `pokoje` (`numer`, `typ`, `cena_za_dobe`) VALUES
(101, 'Apartament', '20.00'),
(102, 'Domek', '60.00'),
(103, 'Apartament', '60.00'),
(104, 'Mieszkanie', '70.00'),
(105, 'Apartament', '20.00'),
(106, 'Mieszkanie', '50.00'),
(201, 'Apartament', '30.00'),
(202, 'Mieszkanie', '35.00'),
(203, 'Apartament', '45.00'),
(204, 'Domek', '50.00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `ID` int(11) NOT NULL,
  `ID_klienta` int(11) NOT NULL,
  `Numer` int(11) NOT NULL,
  `Data_zakonczenia` date NOT NULL,
  `Data_rozpoczecia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`ID_Klienta`);

--
-- Indeksy dla tabeli `pokoje`
--
ALTER TABLE `pokoje`
  ADD PRIMARY KEY (`numer`);

--
-- Indeksy dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_klienta` (`ID_klienta`),
  ADD KEY `Numer` (`Numer`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD CONSTRAINT `rezerwacje_ibfk_1` FOREIGN KEY (`ID_klienta`) REFERENCES `klienci` (`ID_Klienta`),
  ADD CONSTRAINT `rezerwacje_ibfk_2` FOREIGN KEY (`Numer`) REFERENCES `pokoje` (`numer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
