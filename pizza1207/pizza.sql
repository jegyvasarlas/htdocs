-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Jan 17. 15:08
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `pizza`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `FelhasznaloNev` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Jelszo` char(40) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`FelhasznaloNev`, `Jelszo`) VALUES
('Admin', '16991b607e9e2d72d570fb7da9b1269208aec3d0');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `futar`
--

CREATE TABLE `futar` (
  `fazon` int(3) NOT NULL DEFAULT 0,
  `fnev` varchar(25) COLLATE latin2_hungarian_ci NOT NULL DEFAULT '',
  `ftel` varchar(12) COLLATE latin2_hungarian_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `futar`
--

INSERT INTO `futar` (`fazon`, `fnev`, `ftel`) VALUES
(1, 'Hurrikán', '123456'),
(2, 'Gyalogkakukk', '666666'),
(3, 'Gömbvillám', '888888'),
(4, 'Szélvész', '258369'),
(5, 'Imperial', '987654');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pizza`
--

CREATE TABLE `pizza` (
  `pazon` int(3) NOT NULL DEFAULT 0,
  `pnev` varchar(15) COLLATE latin2_hungarian_ci NOT NULL DEFAULT '',
  `par` int(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `pizza`
--

INSERT INTO `pizza` (`pazon`, `pnev`, `par`) VALUES
(1, 'Capricciosa', 1050),
(2, 'Frutti di Mare', 1350),
(3, 'Hawaii', 850),
(4, 'Vesuvio', 900),
(5, 'Sorrento', 1050);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendeles`
--

CREATE TABLE `rendeles` (
  `razon` int(8) NOT NULL DEFAULT 0,
  `vazon` int(6) NOT NULL DEFAULT 0,
  `fazon` int(3) NOT NULL DEFAULT 0,
  `idopont` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `rendeles`
--

INSERT INTO `rendeles` (`razon`, `vazon`, `fazon`, `idopont`) VALUES
(1, 4, 2, '2016-10-01 12:04:11'),
(2, 7, 2, '2016-10-01 13:18:44'),
(3, 1, 1, '2016-10-02 10:11:41'),
(4, 5, 2, '2016-10-02 10:24:59'),
(5, 2, 3, '2016-10-02 13:19:06'),
(6, 4, 2, '2016-10-03 13:14:38'),
(7, 6, 2, '2016-10-04 11:10:35'),
(8, 7, 4, '2016-10-04 15:34:58'),
(9, 1, 5, '2016-10-04 17:07:59'),
(10, 3, 5, '2016-10-04 20:21:51'),
(11, 2, 1, '2016-10-05 18:52:53'),
(12, 5, 2, '2016-10-05 19:59:02'),
(13, 6, 2, '2016-10-06 14:55:03'),
(14, 4, 3, '2016-10-06 15:01:14'),
(15, 1, 4, '2016-10-06 18:48:46'),
(16, 2, 5, '2016-10-06 19:11:03'),
(17, 7, 2, '2016-10-06 19:56:28'),
(18, 3, 2, '2016-10-07 12:45:30'),
(19, 4, 5, '2016-10-07 13:00:56'),
(20, 1, 1, '2016-10-07 15:42:50'),
(21, 5, 3, '2016-10-08 18:56:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tetel`
--

CREATE TABLE `tetel` (
  `razon` int(8) NOT NULL DEFAULT 0,
  `pazon` int(3) NOT NULL DEFAULT 0,
  `db` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `tetel`
--

INSERT INTO `tetel` (`razon`, `pazon`, `db`) VALUES
(1, 1, 2),
(1, 4, 3),
(2, 2, 1),
(3, 1, 2),
(4, 1, 1),
(4, 4, 1),
(5, 2, 4),
(6, 1, 1),
(6, 4, 1),
(6, 5, 1),
(7, 5, 5),
(8, 4, 3),
(9, 2, 1),
(10, 1, 1),
(10, 4, 1),
(11, 1, 1),
(12, 2, 2),
(12, 4, 2),
(13, 4, 1),
(13, 5, 1),
(13, 2, 1),
(14, 2, 2),
(15, 1, 1),
(16, 2, 1),
(16, 4, 1),
(16, 5, 1),
(17, 1, 2),
(17, 2, 3),
(18, 1, 4),
(18, 5, 1),
(19, 1, 1),
(19, 2, 1),
(19, 4, 1),
(19, 5, 1),
(20, 5, 3),
(21, 2, 2),
(21, 4, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vevo`
--

CREATE TABLE `vevo` (
  `vazon` int(6) NOT NULL DEFAULT 0,
  `vnev` varchar(30) COLLATE latin2_hungarian_ci NOT NULL DEFAULT '',
  `vcim` varchar(30) COLLATE latin2_hungarian_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `vevo`
--

INSERT INTO `vevo` (`vazon`, `vnev`, `vcim`) VALUES
(1, 'Hapci', ''),
(2, 'Vidor', ''),
(3, 'Tudor', ''),
(4, 'Kuka', ''),
(5, 'Szende', ''),
(6, 'Szundi', ''),
(7, 'Morgó', '');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`FelhasznaloNev`);

--
-- A tábla indexei `futar`
--
ALTER TABLE `futar`
  ADD PRIMARY KEY (`fazon`);

--
-- A tábla indexei `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`pazon`);

--
-- A tábla indexei `rendeles`
--
ALTER TABLE `rendeles`
  ADD PRIMARY KEY (`razon`);

--
-- A tábla indexei `vevo`
--
ALTER TABLE `vevo`
  ADD PRIMARY KEY (`vazon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
