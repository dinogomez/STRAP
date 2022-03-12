-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 11:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'super', '$2y$10$EyGELBxv3TXvf5lccp1uM.UUMi.xl.NRMfJSwvWXvKJIlY4ECQPh6', 'super');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `deviceID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `deviceID`) VALUES
(1, '6b7b3d916c57729c'),
(2, '7a6c2e826d68838b'),
(3, '8c45383955595519');

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE `gps` (
  `id` int(11) NOT NULL,
  `deviceID` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `pingTime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gps`
--

INSERT INTO `gps` (`id`, `deviceID`, `lat`, `lon`, `pingTime`) VALUES
(1, 1, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(2, 1, 14.578338607, 120.9806941638, '2022-02-24T06:57:45'),
(3, 1, 14.578338607, 120.9806941638, '2022-02-24T06:57:45'),
(4, 1, 14.578338607, 120.9806941638, '2022-02-24T06:57:45'),
(5, 1, 14.5001, 121.001, '2022-02-24T06:57:45'),
(6, 1, 14.5001, 121.001, '2022-02-24T06:57:45'),
(7, 2, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(8, 2, 12, 12, '2022-02-24T06:57:45'),
(9, 1, 14, 121, '2022-02-24T06:57:45'),
(10, 1, 14, 121, '2022-02-24T06:57:45'),
(11, 1, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(12, 2, 12, 12, '2022-02-24T06:57:45'),
(13, 2, 12, 12, '2022-02-24T06:57:45'),
(14, 2, 12.5, 12.4, '2022-02-24T06:57:45'),
(15, 1, 14.57837, 120.9806941638, '2022-02-24T06:57:45'),
(16, 1, 1557837, 120.9806941638, '2022-02-24T06:57:45'),
(17, 1, 15.57837, 120.9806941638, '2022-02-24T06:57:45'),
(18, 1, 14.57837, 120.9806941638, '2022-02-24T06:57:45'),
(19, 1, 14.57222227, 120.9806941638, '2022-02-24T06:57:45'),
(20, 1, 15.57222227, 120.9806941638, '2022-02-24T06:57:45'),
(21, 1, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(22, 1, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(23, 1, 14.578368807, 120.98069508416, '2022-02-24T06:57:45'),
(24, 1, 14.57832223307, 120.98069508416, '2022-02-24T06:57:45'),
(25, 1, 14.5783, 120.98069508416, '2022-02-24T06:57:45'),
(26, 1, 15, 120.98069508416, '2022-02-24T06:57:45'),
(27, 1, 15, 120.98069508416, '2022-02-24T06:57:45'),
(28, 1, 15, 120.98069508416, '2022-02-24T06:57:45'),
(29, 1, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(30, 1, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(31, 1, 14.578807, 120.98069508416, '2022-02-24T06:57:45'),
(32, 1, 14.57822222807, 120.98069508416, '2022-02-24T06:57:45'),
(33, 1, 14.8, 120.98069508416, '2022-02-24T06:57:45'),
(34, 1, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(35, 1, 14.822, 120.98069508416, '2022-02-24T06:57:45'),
(36, 1, 14.833, 120.98069508416, '2022-02-24T06:57:45'),
(37, 1, 14.855, 120.98069508416, '2022-02-24T06:57:45'),
(38, 1, 14.852225, 120.98069508416, '2022-02-24T06:57:45'),
(39, 1, 14.523478338609, 120.98069508416, '2022-02-24T06:57:45'),
(40, 1, 1557, 120.98069508416, '2022-02-24T06:57:45'),
(41, 1, 15.57, 120.98069508416, '2022-02-24T06:57:45'),
(42, 1, 15.532317, 120.98069508416, '2022-02-24T06:57:45'),
(43, 1, 15.3333317, 120.98069508416, '2022-02-24T06:57:45'),
(44, 1, 15.3235333317, 120.98069508416, '2022-02-24T06:57:45'),
(45, 1, 15.3333317, 120.98069508416, '2022-02-24T06:57:45'),
(46, 1, 15.532317, 120.98069508416, '2022-02-24T06:57:45'),
(47, 1, 15.3333317, 120.98069508416, '2022-02-24T06:57:45'),
(48, 1, 15.3235333317, 120.98069508416, '2022-02-24T06:57:45'),
(49, 2, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(50, 2, 14.578338608969, 120.80841638, '2022-02-24T06:57:45'),
(51, 2, 14.57228338609, 120.80841638, '2022-02-24T06:57:45'),
(52, 1, 14.578338608969, 120.98069508416, '2022-02-24T06:57:45'),
(53, 2, 14.578338607, 120.9806941638, '2022-02-24T06:57:45'),
(54, 2, 14.57228607, 120.9806941638, '2022-02-24T06:57:45'),
(55, 2, 14.57228607, 120.9806941638, '2022-02-24T06:57:45'),
(56, 2, 14.57207, 120.9806941638, '2022-02-24T06:57:45'),
(57, 2, 14.57202222227, 120.9806941638, '2022-02-24T06:57:45'),
(58, 2, 14.777202222227, 120.9806941638, '2022-02-24T06:57:45'),
(59, 1, 14.578323232361, 120.98069508416, '2022-02-24T06:57:45'),
(60, 1, 14.323236089688, 120.98069508416, '2022-02-24T06:57:45'),
(61, 1, 14.33608968807, 120.98069508416, '2022-02-24T06:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petType` varchar(50) NOT NULL,
  `petBreed` varchar(50) NOT NULL,
  `petDiet` varchar(500) NOT NULL,
  `petVaccine` varchar(500) NOT NULL,
  `ContactName` varchar(100) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `petImg` varchar(200) NOT NULL,
  `userID` int(11) NOT NULL,
  `uniqid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `petName`, `petType`, `petBreed`, `petDiet`, `petVaccine`, `ContactName`, `ContactNumber`, `petImg`, `userID`, `uniqid`) VALUES
(48, 'Sammy', 'Dog', 'Pomeranian', 'Kibbles', 'Add', 'Dino Paulo Gomez', '+639151177924', 'assets/pet/274933331_552720812522257_518137637596335034_n.png', 13, '622b351c0134d'),
(49, 'Enardo', 'Dog', 'Grub', 'A', 'A', 'A', 'A', 'assets/pet/274933331_552720812522257_518137637596335034_n.png', 19, '622b382672db1'),
(50, 'Enardo', 'Cat', 'A', 'A', 'A', 'Dino Paulo Reyes Gomez', '+639151177924', 'assets/pet/rust.jpg', 13, '622c6868e9c80'),
(51, '09151177924', 'Dog', 'Grub', 'A', 'A', 'Dino Paulo Reyes Gomez', '+639151177924', 'assets/pet/274874800_10225621148609204_2478445183771034066_n.jpg', 13, '622ca8bacb5d2');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `reports` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL,
  `petID` int(11) NOT NULL,
  `isResolved` tinyint(1) NOT NULL,
  `resolverID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sqltest`
--

CREATE TABLE `sqltest` (
  `id` int(11) NOT NULL,
  `test` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trackers`
--

CREATE TABLE `trackers` (
  `id` int(11) NOT NULL,
  `deviceID` int(11) NOT NULL,
  `petID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackers`
--

INSERT INTO `trackers` (`id`, `deviceID`, `petID`, `userID`) VALUES
(32, 1, 48, 13),
(33, 2, 50, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `address`, `password`, `user_image`) VALUES
(4, 'dinogomez', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$ATufHakT2MpCQCTEPyqD3.9v5o0KsZPsBO6/q3QpET3K96aLtNy9O', '90px-Trait_albino.png'),
(5, 'dinogomez2', 'dinogomez117@gmail.com', 'Urgello', '$2y$10$hX6qxS6GowalWPNsdE87nOy5rpjsIyNz.v7lvuRcZ3mYyX.XDRSPC', NULL),
(7, 'alpha', 'dinogomez117@gmail.com', '2018', '$2y$10$S6I5TA9WgrFWLCJ.42A.C.1bIRbCxpb.qnrP6ZBQq1ZCA.KYpSydy', NULL),
(8, 'charlie@!', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$hU4dPXnKHGUjB.EDKGVeae3ZePmoSg0tX4f9rnvUSrph4kXL2qe/e', 'msagent-4.png'),
(9, '@@@', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$zaYDFy26ZhtYcrpd9tg6eeWjYtdtrMtd1C6GZ9Q3D.yQ/aku1XC8u', NULL),
(10, 'alpha17', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$wbYct50H8iX0266X7UxVK.rcvv.Q0UBBCN7WQX1j78iq91oCZk/t.', '90px-Trait_rakish.png'),
(11, 'newuser', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$7Ks8fOXlxr8aLQPXH.IzBOFGblP4nVUPbQ0HsP1HuWlB5KuhKIHJa', NULL),
(12, 'johndoe', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$50cnks83D6W1cz.HL8kLluUXSmglWujj8j.Noh3U.OTvz50kvsu/S', NULL),
(13, 'dinogomez17', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$wYLGhDwSoOM1aoteXo9M.OVcx3/0ZQbE0pnqLHYHXZCMQpWH11IHu', NULL),
(14, 'dinogomez17@@@!!', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$s0gzVNsboRQ346Vn/vFtl.ZGGuA0t9uc1sM3u9gaUZh4KnOVe9REm', NULL),
(15, 'dinogomez18', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$oCuDQEf7h00dQ2lpV9W9heNmOvvfkg2YPkNomylz4S.mUIXld1OFy', NULL),
(16, 'dinogomez20', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$TpxXIDbCgwHIT8iztherh.2CpCKVu9AbZAErWWbRADgHaZrGSNCVy', NULL),
(17, 'dinogomez21', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$1WGFwjgSFWI9LfhQwpWMWOcdQt.ual8h8h6Bih6sMSIKZIWaOGN72', NULL),
(18, 'owenclamor', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$0I/JVn1n99E1UxGq6VKSMeGjufi4qIJZn5Pmldx/gOE/WLwIu2Yja', NULL),
(19, 'dinogomez16', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$OD.1uMQ1HnOoQqXkQ1bRjuYBwiwPUWe3uoJTARonQrprqXHtbmNgi', NULL),
(20, 'dinogomez15', 'dinogomez117@gmail.com', 'Ermita, Roxas Blvd', '$2y$10$v.53IB9f1c2.h60apF6.YuVG59y4SOD/H7m3dSSIMMQ8sOtKgqV2O', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deviceID` (`deviceID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petID` (`petID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `resolverID` (`resolverID`);

--
-- Indexes for table `sqltest`
--
ALTER TABLE `sqltest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackers`
--
ALTER TABLE `trackers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deviceID` (`deviceID`),
  ADD KEY `petID` (`petID`),
  ADD KEY `trackers_ibfk_3` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gps`
--
ALTER TABLE `gps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sqltest`
--
ALTER TABLE `sqltest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trackers`
--
ALTER TABLE `trackers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gps`
--
ALTER TABLE `gps`
  ADD CONSTRAINT `gps_ibfk_1` FOREIGN KEY (`deviceID`) REFERENCES `devices` (`id`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`petID`) REFERENCES `pets` (`id`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reports_ibfk_3` FOREIGN KEY (`resolverID`) REFERENCES `admin` (`id`);

--
-- Constraints for table `trackers`
--
ALTER TABLE `trackers`
  ADD CONSTRAINT `trackers_ibfk_1` FOREIGN KEY (`deviceID`) REFERENCES `devices` (`id`),
  ADD CONSTRAINT `trackers_ibfk_2` FOREIGN KEY (`petID`) REFERENCES `pets` (`id`),
  ADD CONSTRAINT `trackers_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
