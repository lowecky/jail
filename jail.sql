-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Lut 2018, 10:12
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `jail`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `budynek`
--

CREATE TABLE `budynek` (
  `blok` varchar(24) NOT NULL,
  `sekcja` varchar(24) NOT NULL,
  `cela` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `login` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`login`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiezien`
--

CREATE TABLE `wiezien` (
  `imie` varchar(250) DEFAULT NULL,
  `nazwisko` varchar(250) DEFAULT NULL,
  `wiek` int(5) DEFAULT NULL,
  `wyrok` varchar(255) DEFAULT NULL,
  `cela` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wiezien`
--

INSERT INTO `wiezien` (`imie`, `nazwisko`, `wiek`, `wyrok`, `cela`) VALUES
('zdziszek', 'kowalski', NULL, 'chlanie w miejscu publicznym', ''),
('zdziszek', 'dymek', 18, 'przemyt narkotykow', '1'),
(NULL, NULL, NULL, NULL, '24');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `budynek`
--
ALTER TABLE `budynek`
  ADD KEY `cela` (`cela`);

--
-- Indexes for table `wiezien`
--
ALTER TABLE `wiezien`
  ADD PRIMARY KEY (`cela`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
