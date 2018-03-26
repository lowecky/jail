-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 08:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33
=======

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jail`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `ID_Pracownika` int(2) NOT NULL,
  `Imie` varchar(20) NOT NULL,
  `Nazwisko` varchar(20) NOT NULL,
  `Adres` varchar(20) NOT NULL,
  `Pozycja` varchar(20) NOT NULL,
  `Blok` varchar(20) NOT NULL,
  `Sekcja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`ID_Pracownika`, `Imie`, `Nazwisko`, `Adres`, `Pozycja`, `Blok`, `Sekcja`) VALUES
(1, 'Marek', 'Makuszynski', 'Polaka 2', 'Mordestwo', 'A', 'Polnocna'),
(2, 'Szymon', 'Makuszynski', 'Bojana 2', 'Gwalty', 'A', 'Poludniowa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `login` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`login`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wiezien`
--

CREATE TABLE `wiezien` (
  `ID_Więźnia` int(11) NOT NULL,
  `imie` varchar(250) CHARACTER SET utf16 COLLATE utf16_polish_ci DEFAULT NULL,
  `nazwisko` varchar(250) CHARACTER SET utf16 COLLATE utf16_polish_ci DEFAULT NULL,
  `wiek` int(5) DEFAULT NULL,
  `wyrok` varchar(25) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `Adres` varchar(25) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `Miasto` varchar(25) CHARACTER SET utf16 COLLATE utf16_polish_ci DEFAULT NULL,
  `Blok` varchar(2) NOT NULL,
  `Sekcja` varchar(5) NOT NULL,
  `Cela` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wiezien`
--

INSERT INTO `wiezien` (`ID_Więźnia`, `imie`, `nazwisko`, `wiek`, `wyrok`, `Adres`, `Miasto`, `Blok`, `Sekcja`, `Cela`) VALUES
(1, 'krzysztof', 'kowalski', 26, 'rozprowadzanie narkotyków', 'wejhera 17', 'gdańsk', 'BA', 'north', 'pierwsza'),
(2, 'zdziszek', 'kowalski', 15, 'chlanie w miejscu publicz', 'elówka 2', 'poznań', 'BA', 'east', 'druga'),
(3, 'zdziszek', 'dymek', 18, 'przemyt narkotykow', 'alana 1', 'poznań', 'BB', 'south', 'trzecia'),
(4, 'alan', 'dymek', 20, 'rozprowadzanie narkotyków', 'alana 1', 'poznań', 'BA', 'west', 'czwarta'),
(5, 'marek', 'polonski', 36, 'gwałt', 'polana 20', 'warszawa', 'BB', 'north', 'piata'),
(6, 'adam', 'mickiewicz', 23, 'porwanie dziecka', 'buk 20', 'bydgoszcz', 'BB', 'east', 'szosta');

--
-- Indexes for dumped tables
--


INSERT INTO `wiezien` (`ID_Więźnia`, `imie`, `nazwisko`, `wiek`, `wyrok`, `Adres`, `Miasto`) VALUES
(1, 'krzysztof', 'kowalski', 26, 'rozprowadzanie narkotyków', 'wejhera 17', 'gdańsk'),
(2, 'zdziszek', 'kowalski', 15, 'chlanie w miejscu publicz', 'elówka 2', 'poznań'),
(3, 'zdziszek', 'dymek', 18, 'przemyt narkotykow', 'alana 1', 'poznań'),
(4, 'alan', 'dymek', 20, 'rozprowadzanie narkotyków', 'alana 1', 'poznań'),
(5, 'marek', 'polonski', 36, 'gwałt', 'polana 20', 'warszawa'),
(6, 'adam', 'mickiewicz', 23, 'porwanie dziecka', 'buk 20', 'bydgoszcz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`ID_Pracownika`);

--
-- Indexes for table `wiezien`
--
ALTER TABLE `wiezien`
  ADD PRIMARY KEY (`ID_Więźnia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `ID_Pracownika` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `wiezien`
--
ALTER TABLE `wiezien`
  MODIFY `ID_Więźnia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
