-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 02:54 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `Complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`, `Complaint`) VALUES
(1, 'rakshit', 'gupta', 'rakshitgupta50@gmail.com', '$2y$10$mdcExjas0xWbDpKFl6FaT.1NGSebL87VN5rzSvhoUIj41kEKvGKia', 'b7892fb3c2f009c65f686f6355c895b5', 1, ''),
(2, 'Yash', 'GaaBaa', 'y@p.com', '$2y$10$bsQ2UOuq5A2POgv8U5FF5uDses.cC21YLa9q8LbAGhO8lYl7R8kY6', '4e4b5fbbbb602b6d35bea8460aa8f8e5', 0, 'sdjkfn'),
(3, 'Admin', 'Admin', 'admin@admin.com', '$2y$10$k6KRmsthKsIYmYA4KnFfNum8S1D4UpBbKl3tCt3sXNkc3hinDPRqe', 'c75b6f114c23a4d7ea11331e7c00e73c', 0, ''),
(4, 'Manas', 'Shukla', 'manas@manas.com', '$2y$10$AB7ccshK14qmewCvZ3Jrnuya5r1/2ic18w5nBOyhgiX9MYeOM/Js2', '96ea64f3a1aa2fd00c72faacf0cb8ac9', 0, ''),
(184, 'Yash', 'GaaBaa', 'y@p.com', '', '', 0, '			 lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll'),
(185, 'Yash', 'GaaBaa', 'y@p.com', '', '', 0, '			 aefefawffaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(186, 'Yash', 'GaaBaa', 'y@p.com', '', '', 0, '			 yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(187, 'Yash', 'GaaBaa', 'y@p.com', '', '', 0, '			 yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(188, 'Yash', 'GaaBaa', 'y@p.com', '', '', 0, '			 kljcnvdljzsndjkgnlsandgnlskadnglksandlkgnsadgnlksdnglksndlkgnslkdnglknsdalgnslkdnglkndsaklgniasngoinasdkvnslkdnvlksdnvosdoinvsodincvkldsnvlksdnvlksdnlkvn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
