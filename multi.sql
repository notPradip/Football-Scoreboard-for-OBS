-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 11, 2023 at 10:22 AM
-- Server version: 10.6.11-MariaDB-1:10.6.11+maria~ubu2004-log
-- PHP Version: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `teamAscore` int(50) DEFAULT 0,
  `teamBscore` int(50) DEFAULT 0,
  `fname` varchar(50) NOT NULL,
  `teamA` varchar(50) DEFAULT 'TeamA',
  `teamB` varchar(50) DEFAULT 'TeamB',
  `token` bigint(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `teamAscore`, `teamBscore`, `fname`, `teamA`, `teamB`, `token`) VALUES
(16, 'anjana@anjana.com', '123', 1, 2, 'NewName', 'BRA', 'ARG', NULL),
(18, 'pradip@pradip', 'pradip', 1, 1, 'Pradip', 'ARG', 'Bra', NULL),
(19, 'new@new.com', '123', 11, 0, 'new', 'new', 'new', 2023122832),
(20, 'pradip@rand.com', '123', 2, 0, 'pradip', 'NEP', 'IND', 202312333593),
(21, 'name@name', 'name', 0, 0, 'new', 'TeamA', 'TeamB', 2023011005540339);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
