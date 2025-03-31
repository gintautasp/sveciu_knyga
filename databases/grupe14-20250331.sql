-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2025 at 08:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grupe14`
--

-- --------------------------------------------------------

--
-- Table structure for table `apklausa`
--

CREATE TABLE `apklausa` (
  `id` int(10) UNSIGNED NOT NULL,
  `vardas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zinute` text COLLATE utf8_unicode_ci NOT NULL,
  `ar_rodyti` tinyint(4) NOT NULL DEFAULT 1,
  `lytis` enum('vyr','mot') COLLATE utf8_unicode_ci NOT NULL,
  `veikla` enum('ieskos_darbo_ep','ieskos_darbo','ieskos_darbo_ne_ep','uzsiimsiu_pats_ep','uzsiimsiu_kitokiu_verslu_ne_ep','emigruosiu_is_lt','dar_nenusprende') COLLATE utf8_unicode_ci NOT NULL,
  `priemone` enum('opencart','prestashop','wordpress','eshoprent','hostinger','shopify','shopiteka','shopiteka','kita') COLLATE utf8_unicode_ci NOT NULL,
  `kita_priemone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prekiaus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kitos_prekes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_laikas` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `apklausa`
--

INSERT INTO `apklausa` (`id`, `vardas`, `zinute`, `ar_rodyti`, `lytis`, `veikla`, `priemone`, `kita_priemone`, `prekiaus`, `kitos_prekes`, `data_laikas`) VALUES
(1, 'Gintautas', 'tikrinu apklausą', 1, 'vyr', 'uzsiimsiu_kitokiu_verslu_ne_ep', 'opencart', '', 'laisvalaikio|namu|biuro', '', '2025-03-27 09:19:48'),
(2, 'Ramunas', 'dar 1-as tikrinimas', 1, 'vyr', 'ieskos_darbo', 'hostinger', 'gal būt Freeshop', 'ivairios|kita ..', 'vaistai', '2025-03-27 09:21:16'),
(3, 'Ramunė', 'Sveiki', 1, 'mot', 'ieskos_darbo', 'hostinger', 'verskis.lt', 'avalyne|sporto|namu|biuro|zaislai|vaikams|ivairios', '', '2025-03-28 08:25:33'),
(4, 'Edgaras', 'tikrinam mvc', 1, 'vyr', 'emigruosiu_is_lt', 'kita', 'mozello', 'avalyne|sporto|laisvalaikio|baldai|ivairios', '', '2025-03-28 10:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `sveciu_knyga`
--

CREATE TABLE `sveciu_knyga` (
  `id` int(10) UNSIGNED NOT NULL,
  `vardas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zinute` text COLLATE utf8_unicode_ci NOT NULL,
  `ar_rodyti` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `lytis` enum('vyr','mot') COLLATE utf8_unicode_ci DEFAULT NULL,
  `veikla` enum('moksleivis','studentas','darbuotojas','tarnautojas','verslininkas','namu_seimininkas','senjoras') COLLATE utf8_unicode_ci NOT NULL,
  `domina_prekes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_laikas` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sveciu_knyga`
--

INSERT INTO `sveciu_knyga` (`id`, `vardas`, `zinute`, `ar_rodyti`, `lytis`, `veikla`, `domina_prekes`, `data_laikas`) VALUES
(1, 'Gintautas', 'rašom trečia žinutę\r\ndar kantriai rašom', 0, 'vyr', 'darbuotojas', 'apranga|avalyne|laisvalaikio|automobiliu', '2024-11-13 06:40:30'),
(2, 'Ramunas', 'kita žinutė, kito svečio', 1, 'vyr', 'studentas', 'gyvunu|namu|baldai', '2024-11-13 06:58:07'),
(3, 'Darius', 'tikrinam rašymą į duomenų bazę\r\nrašom kelias eilutes', 0, 'vyr', 'verslininkas', 'apranga|avalyne|sporto|automobiliu', '2024-11-15 08:36:50'),
(4, 'Miglė', 'Tikrinam objektų veikimą', 1, 'mot', 'tarnautojas', 'gyvunu|namu|baldai|biuro', '2025-03-27 08:20:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apklausa`
--
ALTER TABLE `apklausa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sveciu_knyga`
--
ALTER TABLE `sveciu_knyga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apklausa`
--
ALTER TABLE `apklausa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sveciu_knyga`
--
ALTER TABLE `sveciu_knyga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
