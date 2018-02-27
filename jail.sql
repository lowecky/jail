-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lut 2018, 10:01
-- Wersja serwera: 10.1.25-MariaDB
-- Wersja PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`login`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiezien`
--

CREATE TABLE `wiezien` (
  `ID_Więźnia` int(11) NOT NULL,
  `imie` varchar(250) CHARACTER SET utf16 COLLATE utf16_polish_ci DEFAULT NULL,
  `nazwisko` varchar(250) CHARACTER SET utf16 COLLATE utf16_polish_ci DEFAULT NULL,
  `wiek` int(5) DEFAULT NULL,
  `wyrok` varchar(25) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `Adres` varchar(25) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `Miasto` varchar(25) CHARACTER SET utf16 COLLATE utf16_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wiezien`
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
