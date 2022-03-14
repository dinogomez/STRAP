-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 07:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strap`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `userId` int(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `log_date` date DEFAULT current_timestamp(),
  `log_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `userId`, `event`, `type`, `log_date`, `log_time`) VALUES
(1, 13, 'LOGIN', 'USER', '2022-03-13', '20:54:30'),
(2, 22, 'LOGIN', 'USER', '2022-03-13', '20:55:28'),
(12, 38, 'REGISTER', 'USER', '2022-03-13', '23:22:12'),
(13, 38, 'LOGIN', 'USER', '2022-03-13', '23:34:35'),
(15, 13, 'LOGIN', 'USER', '2022-03-14', '09:08:33'),
(16, 13, 'LOGIN', 'USER', '2022-03-14', '09:08:48'),
(17, 13, 'REGISTER', 'PET', '2022-03-14', '09:37:58'),
(18, 13, 'DELETE', 'PET', '2022-03-14', '09:44:38'),
(19, 13, 'UPDATE', 'PET', '2022-03-14', '10:05:29'),
(20, 13, 'UPDATE', 'PET', '2022-03-14', '10:05:41'),
(21, 13, 'REGISTER', 'TRACKER', '2022-03-14', '10:10:21'),
(22, 13, 'DELETE', 'TRACKER', '2022-03-14', '10:12:13'),
(23, 13, 'REGISTER', 'TRACKER', '2022-03-14', '10:12:23'),
(24, 13, 'DELETE', 'TRACKER', '2022-03-14', '10:13:49'),
(25, 13, 'UPDATE', 'TRACKER', '2022-03-14', '10:14:14'),
(26, 13, 'REGISTER', 'TRACKER', '2022-03-14', '10:14:22'),
(27, 13, 'REGISTER', 'PET', '2022-03-14', '10:18:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
