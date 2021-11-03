-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lis 2021, 12:16
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `data_urodzenia` date NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `imie`, `nazwisko`, `data_urodzenia`, `email`) VALUES
(0, 'Bartek', 'Obryk', '2015-11-11', 'barte.obryk@gmail.com'),
(1, 'Ukesz', 'Szostak', '2017-11-15', 'ukesz.szostak@gmail.com'),
(2, 'Adam', 'Nowak', '2021-11-08', 'adam.nowak@gmail.com'),
(3, 'Dawid', 'Ryszard', '2016-06-21', 'dawid.ryszard@gmail.com'),
(4, 'Ryniu', 'Ras', '2013-08-12', 'ryniu.ras@gmail.com'),
(5, 'Damian', 'Ruszczyk', '2014-02-13', 'damian.ruszczyk@gmail.com'),
(6, 'Damian', 'Wiśniewski', '2012-01-06', 'damian.wisniewski@gmail.com'),
(7, 'Seba', 'Sasiatko', '2016-02-11', 'seba.sasiatko@gmail.com'),
(8, 'Szymon ', 'Grzybiński', '2014-11-13', 'szymciogrzybcio@gmail.com'),
(10, 'Jan', 'Kowalski', '2021-11-17', 'jan.kowalski@gmail.com'),
(11, 'Mati', 'Czarnex', '2021-11-10', 'mati.czarnex@gmail.com'),
(12, 'Lukasz', 'Krolik', '0000-00-00', 'lukasz.krolik@gmail.com'),
(13, 'Radzio', 'Makowski', '2021-11-16', 'radzio.makowski@gmail.com'),
(14, 'Seba', 'Bastian', '2012-11-14', 'seba.bastian@gmail.com'),
(15, 'Mateusz', 'Dziku', '2021-05-11', 'mateusz.dziku@gmail.com'),
(16, 'Bartek', 'Dudek', '2020-11-17', 'bartek.dudek@gmail.com'),
(17, 'Damian', 'Daniszewski', '2002-07-17', 'damian.daniszewski@gmail.com'),
(18, 'Bembol', 'Dzwoniarz', '2015-11-18', 'bembol.dzwoniarz@gmail.com'),
(19, 'Crizuu', 'Civic', '2013-08-09', 'crizuu.civic@gmail.com'),
(20, 'Wicia', 'Buczyniak', '2012-08-17', 'wicia.buczyniak@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
