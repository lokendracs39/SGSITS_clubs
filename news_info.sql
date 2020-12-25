-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 09:29 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgsits_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE `news_info` (
  `id` int(100) NOT NULL,
  `discription` varchar(30) NOT NULL,
  `record` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`id`, `discription`, `record`) VALUES
(1, '', 'Admit CardSem5.pdf'),
(2, '', 'IMG-20180703-WA0004.jpg'),
(3, 'Announcement (e-cell)', 'WIN_20170416_18_36_26_Pro.jpg'),
(4, 'codefoster reqruitment (soon) ', 'Admit CardSem5.pdf'),
(5, '#include(event)', '15514073794617cawaNMjkA3TUYuL.'),
(6, 'upcoming event', 'computer_science_engg_3rd_year'),
(7, 'upcoming event', 'Placement Registration & Decla'),
(8, 'payment_snfn\r\n', 'InitiateSingleEntryPaymentSumm'),
(9, 'kdjhkjgdsg', 'Admit CardSem5.pdf'),
(10, 'lskdhfljsgbsg', 'InitiateSingleEntryPaymentSummary05-03-2019.pdf'),
(11, 'screenshot', 'Screenshot (76).png'),
(12, 'upcoming event', 'Screenshot (7).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_info`
--
ALTER TABLE `news_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_info`
--
ALTER TABLE `news_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
