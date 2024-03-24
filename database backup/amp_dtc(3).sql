-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 03:27 PM
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
  `id_prefix` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL,
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
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id_prefix`, `member_id`, `first_name`, `last_name`, `email`, `phone1`, `phone2`, `date_of_birth`, `address`, `member_type`, `occupation`, `school`, `gender`, `registration_date`) VALUES
('', 18, 'Mohamed', 'Rifky', 'mnamrifky@gmail.com', '0776040064', NULL, '1999-03-24', '320b sailan road kalmunai kudy 3', 'child', '', '', 'male', '2024-03-16'),
('', 22, 'atham lebbe', 'Rifna', 'rifna@gmail.com', '0752009768', NULL, '2000-06-30', 'youth club road bathuriya nagar, meeravodai', 'child', '', '', 'female', '2024-03-17'),
('', 25, '', '', '', '', NULL, '0000-00-00', '', 'adult', 'web', '', '', '2024-03-21'),
('', 26, '', '', '', '', NULL, '2023-06-01', '', 'adult', '', '', '', '2024-03-22'),
('', 28, 'samla', 'razack', 'samla@gmail.com', '0776040065', NULL, '2009-11-16', '320b sailan road kalmunai 4', 'child', '', 'balika', 'female', '2024-03-22'),
('ADTCMC', 40, 'dds', 'sdsd', 'mnam32@gmail.com', 'sdsd', 'sdsd', '2024-03-21', 'sdsd', 'child', '', 'sdsd', 'male', '2024-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `member_fees`
--

CREATE TABLE `member_fees` (
  `fee_id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `fee_amount` decimal(10,2) DEFAULT NULL,
  `paid_date` date DEFAULT NULL,
  `payment_status` enum('Not yet','Paid') NOT NULL DEFAULT 'Not yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_fees`
--

INSERT INTO `member_fees` (`fee_id`, `member_id`, `year`, `month`, `fee_amount`, `paid_date`, `payment_status`) VALUES
(1, 28, 2015, 6, 200.00, '2024-03-06', 'Not yet');

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
(4, 'rifky', '$2y$10$733Ax9wP5FGCpCVLyLLy9.Epe4g61iSOzOVkKGuqviKcFGzZEtIay', 'mnamrifky1@gmail.com', 'user');

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
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `member_fees`
--
ALTER TABLE `member_fees`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
