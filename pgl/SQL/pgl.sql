-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 11:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgl`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `post_id` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `date_n_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `post_id`, `subject`, `date_n_time`) VALUES
(3, '12791', 'English Languages', '2022-10-28 17:39:19'),
(5, '1666979958', 'Blockchain development', '2022-10-28 17:59:18'),
(6, '1666979966', 'Philosophy', '2022-10-28 17:59:26'),
(7, '1666979980', 'Quantum Physics', '2022-10-28 17:59:40'),
(8, '1666981541', 'Ancient Latin', '2022-10-28 18:25:41'),
(9, '1666981561', 'Computational Physics', '2022-10-28 18:26:01'),
(10, '1666984983', 'Geography', '2022-10-28 19:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `admin` enum('no','yes') NOT NULL DEFAULT 'no',
  `date_n_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `fullname`, `username`, `password`, `admin`, `date_n_time`) VALUES
(1, '380275549', 'Japheth Jonathan', 'jeff', '$2y$10$Kc2TuAD38Jfd8UWRnRBWwusE8x52z5/Dn/WvIzIZ.pFXkTmy2wcYe', '', '0000-00-00 00:00:00'),
(2, '851621186', 'Reuben Kure', 'admin', '$2y$10$RZsm3vsuGKBXCxVu2DX1MeIQ09XExw6GMOvLSoFUeh8LKj91bAYTW', 'yes', '2022-10-28 16:07:51'),
(3, '783289232', 'James John', 'james', '$2y$10$oHWZAJ9eZj2iCSDspbGZLOWql3MHGB1vrkFz32EVSYULG7YGDZxOG', 'no', '2022-10-28 16:08:43'),
(4, '557377497', 'Glory Emmanuel', 'glory', '$2y$10$sphmAWbuAkPUi/XsiHHgOOTEDNEQpgIwlpvQhYPpDKCHDDt7RUMkG', 'yes', '2022-10-28 17:08:38'),
(5, '280546735', 'James Emmanuel', 'emma', '$2y$10$TbngYmCExpe3XKRRYjjV/.WeOtoSrPJPFBwpxcdToGPV.pao9Tu66', 'no', '2022-10-28 17:08:58'),
(6, '1972509334', 'Tosin Adeleke', 'tosin', '$2y$10$8vK0N/VUtDX58ezYclbPaObSSPT.EG.XIbT/jyMJZPpV5QLKNj16a', 'no', '2022-10-28 17:09:20'),
(7, '16754708', 'Vanessa George', 'vanessa', '$2y$10$mjXjiZsA8QQ9xHBto0I50Oz89LmaiIeEtaAjWOZ/73KIEdd0IzIVC', 'no', '2022-10-28 22:58:50'),
(8, '862350205', 'Leornado Adams', 'leo', '$2y$10$etEOF.qQybfkVsjvopUC2u9skIUmP.pMsyUmciAuHPCPsgrtk7GOe', 'no', '2022-10-29 08:55:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
