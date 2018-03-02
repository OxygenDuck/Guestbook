-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 02 mrt 2018 om 22:11
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `data`
--

CREATE TABLE `data` (
  `firstname` longtext NOT NULL,
  `insertion` longtext NOT NULL,
  `lastname` longtext NOT NULL,
  `email` longtext NOT NULL,
  `webaddress` longtext NOT NULL,
  `message` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `data`
--

INSERT INTO `data` (`firstname`, `insertion`, `lastname`, `email`, `webaddress`, `message`, `date`) VALUES
('test', 'testy von', 'testenstein', 'test@test.test', 'www.test.com', 'According to all known laws of aviation, a bee should not be able to fly. Its wings are too small to get its fat little body off the ground. The bee of course, flies anyway. Because bees dont care about what humans think is or isn\'t possible.', '2000-01-01 00:00:00'),
('Jordi', 'van', 'Oogdijk', 'J.oogdijk@yahoo.com', 'www.cookingwithjordi.nl', 'All these recipes are very inspiring! I am sure to show some off on my blog!', '2000-01-01 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
