-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 09:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amp_dtc`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `id_prefix` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone1` varchar(20) DEFAULT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `member_type` enum('adult','child') DEFAULT NULL,
  `occupation` text DEFAULT NULL,
  `school` text NOT NULL,
  `gender` enum('male','female','trans') NOT NULL,
  `profile_url` varchar(100) NOT NULL,
  `proof_url` varchar(100) NOT NULL,
  `payment_status` enum('rejected','pending','approved') NOT NULL DEFAULT 'pending',
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `id_prefix`, `first_name`, `last_name`, `email`, `phone1`, `phone2`, `date_of_birth`, `address`, `member_type`, `occupation`, `school`, `gender`, `profile_url`, `proof_url`, `payment_status`, `registration_date`) VALUES
(42, 'ADTC-FC', 'mohamd', 'Rifky1', 'mnam32@gmail.com', 'sdsd', 'adad', '2024-03-01', '320b sailan road kalmunai kudy 31', 'child', '', 'sdsd', 'female', '', '', 'approved', '2024-03-24'),
(44, 'ADTC-MC', 'dfdg', 'dgd', 'mnam32@gmail.com', 'adad', '0776040064', '2024-03-08', 'dgdgdgdg', 'child', '', 'dgdgdg', 'male', '', '', 'approved', '2024-03-30'),
(45, 'ADTC-MC', 'dada', 'adad', 'mnam32@gmail.com', 'adad', 'adad', '2024-03-01', 'bxbxbxb', 'child', '', 'xbxbx', 'male', '', '', 'pending', '2024-03-30'),
(46, 'ADTC-MC', 'thayeel', 'mohamed', 'thayeel@gmail.com', '0776040064', '0784641683', '2024-03-01', '320b sailan road kalminai 4', 'child', '', 'zahira', 'male', '', '', 'rejected', '2024-03-30'),
(51, 'ADTC-FC', 'fathima', 'nifla', 'adtc@gmail.com', '0776040064', '', '2024-04-27', 'sdsdsds', 'child', '', 'sdsd', 'female', '', '', 'rejected', '2024-04-05'),
(79, 'ADTC-2024-MA', 'jone', 'dav', 'jone@gmail.com', '0776040064', '', '2024-04-20', '320b sailan road kalmunai kudy 4', 'adult', 'Student @ sliate', '', 'male', '', 'Images/membership-payment-proof/78.jpg', 'approved', '0000-00-00'),
(80, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'male', 'Images/profile-pic/80.jpg', '', 'pending', '0000-00-00'),
(96, 'ADTC-2024-MA', 'Mohamed', 'Rifky', 'mnamrifky@gmail.com', '0776040064', '', '1999-06-22', '320b sailan road kalmunai kudy 4', 'adult', 'Student @ sliate', '', 'male', 'Images/profile-pic/mnamrifky@gmail.com.jpg', 'Images/membership-payment-proof/mnamrifky@gmail.com.png', 'pending', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `member_fees`
--

CREATE TABLE `member_fees` (
  `fee_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `fee_amount` decimal(10,2) DEFAULT NULL,
  `paid_date` date DEFAULT NULL,
  `proof_url` varchar(255) NOT NULL,
  `payment_status` enum('Not yet','Paid') NOT NULL DEFAULT 'Not yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_fees`
--

INSERT INTO `member_fees` (`fee_id`, `member_id`, `year`, `month`, `fee_amount`, `paid_date`, `proof_url`, `payment_status`) VALUES
(89, 51, 2027, 2, 500.00, '2024-04-19', '../../../Images/payment-proof/1.jpg', 'Paid'),
(92, 79, 2024, 4, 2500.00, '2024-04-25', '../../../Images/payment-proof/90.jpg', 'Paid'),
(94, 79, 2025, 3, 4.00, '2024-04-13', '../../../Images/payment-proof/mnamrifky@gmail.com2025-3.jpg', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(20) NOT NULL,
  `pic_path` text NOT NULL,
  `description` text NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `pic_path`, `description`, `publisher`, `date`) VALUES
(4, 'Images/news/1.jpg', 'AMPARA RANKING TENNIS TOURNAMENT\r\n\r\nPrepare yourselves for the upcoming Ampara Ranking Tennis Tournament! Proudly organized by the Ampara District Tennis Club, this event promises an exhilarating showcase of talent and sportsmanship.', '', '2024-04-21'),
(5, 'Images/news/2.jpg', 'TENNIS TOURNAMENT\r\n\r\nPrepare yourselves for the upcoming Tennis Tournament! Proudly organized by the Ampara District Tennis Club, this event promises an exhilarating showcase of talent and sportsmanship.', '', '2024-04-21'),
(18, 'Images/news/6.jpg', '🎾 INTER-SCHOOL TENNIS TOURNAMENT<br><br>Get ready for an exciting showdown at the Inter-School Tennis Tournament, organized by the Ampara District Tennis Club (ADTC)! This prestigious event is set to bring together budding tennis talents from various schools for a thrilling display of skill and sportsmanship.', 'admin', '2024-04-21'),
(19, 'Images/news/19.png', 'fggfgf<br><br>ghgh', 'admin', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `privilage` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `username`, `password`, `email`, `privilage`) VALUES
(1, 'admin', '$2y$10$8Py2CQCGSJq1es01wjzGOOawwkQ3bPUhZSQ5YTfaRola9vfQXsIOq', 'mnamrifky@gmail.com', 'admin'),
(2, 'Thayeel', '$2y$10$.p8Y/P60zKXpgP43Yr9rpe9NbMjU/dzo6mz8uqf4rR9iVbsIF0PSm', 'thayeelmohamed2001@gmail.com', 'user'),
(3, 'Dinusha', '$2y$10$nGWMrBmXn09aIl7N/cQ2xejQMG7FhaqdO/krRIRoYQPV/QFyWD9Ym', 'darshani.hewage@gmail.com', 'admin'),
(4, 'rifky', '$2y$10$733Ax9wP5FGCpCVLyLLy9.Epe4g61iSOzOVkKGuqviKcFGzZEtIay', 'mnamrifky1@gmail.com', 'user'),
(5, 'NIFLA', '$2y$10$lhUctlVUlNFbeR5yiz8tQOt8dc81QmzvDhkmiiWJrKfKiiXa0tDPK', 'nifla@gmail.com', 'user'),
(8, 'hama', '$2y$10$2Aiz/SwdE8go/47lTj2jFe/qsh3nKQbzeaZjAWcgpdmRHtJnZLwJm', 'hama123', 'user'),
(9, 'hamthan', '$2y$10$66OQwpRQ3ZTMNC5gKeBDc.l8LSeW08/zJ5uwIY7YOBwaeXxa77y62', 'hamthan@gmail.com', 'user'),
(10, 'jone', '$2y$10$oNFQ73e1QEOSWJ7LNDbtAuXCU21duaWRjEfzM6.45jVoaiV9VIb1i', 'jone@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_fees`
--
ALTER TABLE `member_fees`
  ADD PRIMARY KEY (`fee_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `member_fees`
--
ALTER TABLE `member_fees`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_fees`
--
ALTER TABLE `member_fees`
  ADD CONSTRAINT `member_fees_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
