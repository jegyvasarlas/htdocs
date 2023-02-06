-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 01:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamburger`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nev` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `meret` varchar(8) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nev`, `meret`, `ar`) VALUES
(1, 'hamburer', 'kicsi', 330),
(2, 'hamburger', 'normál', 480),
(3, 'sajtburger', 'kicsi', 350),
(4, 'sajtburger', 'normál', 500),
(5, 'sajtburger', 'XL', 700),
(6, 'csirkeburger', 'normál', 400),
(7, 'csirekburger', 'XL', 800),
(8, 'tanyasi burger', 'normál', 500),
(9, 'tanyasi burger', 'XL', 800),
(10, 'nagyi kedvence', 'normál', 600),
(11, 'fald fel', 'XXL', 1200),
(12, 'fogyi-kura', 'mini', 300),
(13, 'fogyi-kura', 'kicsi', 400),
(14, 'vega', 'kicsi', 400),
(15, 'vega', 'normál', 600),
(16, 'vega-mega', 'XL', 900),
(17, 'hasab burgonya', 'kicsi', 300),
(18, 'hasab burgonya', 'normál', 500),
(19, 'hasab burgonya', 'XL', 700),
(20, 'udito', 'kicsi', 250),
(21, 'udito', 'normal', 300),
(22, 'udito', 'nagy', 400),
(23, 'Finomburger', '', 990),
(24, 'Finomburger', '', 990);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
