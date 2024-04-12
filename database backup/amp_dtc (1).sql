-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 08:33 AM
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
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `id_prefix`, `first_name`, `last_name`, `email`, `phone1`, `phone2`, `date_of_birth`, `address`, `member_type`, `occupation`, `school`, `gender`, `registration_date`) VALUES
(22, '', 'atham lebbe', 'Rifna', 'rifna@gmail.com', '0752009768', NULL, '2000-06-30', 'youth club road bathuriya nagar, meeravodai', 'child', '', '', 'female', '2024-03-17'),
(25, '', '', '', '', '', NULL, '0000-00-00', '', 'adult', 'web', '', '', '2024-03-21'),
(26, '', '', '', '', '', NULL, '2023-06-01', '', 'adult', '', '', '', '2024-03-22'),
(42, 'ADTC-FC', 'mohamd', 'Rifky1', 'mnam32@gmail.com', 'sdsd', 'adad', '2024-03-01', '320b sailan road kalmunai kudy 31', 'child', '', 'sdsd', 'female', '2024-03-24'),
(43, 'ADTC-MA', 'mohamd', 'Rifky1', '', '', '', '2024-03-13', '320b sailan road kalmunai kudy 31', 'child', 'web', '', 'male', '2024-03-25'),
(44, 'ADTC-MC', 'dfdg', 'dgd', 'mnam32@gmail.com', 'adad', '0776040064', '2024-03-08', 'dgdgdgdg', 'child', '', 'dgdgdg', 'male', '2024-03-30'),
(45, 'ADTC-MC', 'dada', 'adad', 'mnam32@gmail.com', 'adad', 'adad', '2024-03-01', 'bxbxbxb', 'child', '', 'xbxbx', 'male', '2024-03-30'),
(46, 'ADTC-MC', 'thayeel', 'mohamed', 'thayeel@gmail.com', '0776040064', '0784641683', '2024-03-01', '320b sailan road kalminai 4', 'child', '', 'zahira', 'male', '2024-03-30'),
(48, 'ADTC-MA', 'Thayeel', 'Mohamed', 'thayeelmohamed2001@gmail.com', '0762381718', '0758127263', '2018-02-12', 'dhdjcnsjhnvdhvhdncdjv', 'adult', 'students', '', 'male', '2024-04-01'),
(49, 'ADTC-MC', 'fathima', 'nifla', 'nifla@gmail.com', '0776040064', '', '2024-04-12', 'sdsd', 'child', '', 'sdsds', 'male', '2024-04-01'),
(50, 'ADTC-FC', 'fathima', 'samla', 'adtc@gmail.com', '0776040064', '', '2024-04-13', 'sdsdsds', 'child', '', 'sdsd', 'female', '2024-04-05'),
(51, 'ADTC-FC', 'fathima', 'nifla', 'adtc@gmail.com', '0776040064', '', '2024-04-27', 'sdsdsds', 'child', '', 'sdsd', 'female', '2024-04-05'),
(52, 'ADTC-MC', 'fathima', 'nifla', 'adtc@gmail.com', '0776040064', '', '2024-04-13', 'sdsdsds', 'child', '', 'sdsd', 'male', '2024-04-05'),
(56, 'ADTC-MC', 'fathima', 'nifla', 'mnamrifky@gmail.com', '0776040064', '', '2024-04-23', 'xcx', 'child', '', 'xcxc', 'male', '2024-04-08');

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
(34, 42, 2025, 1, 250.00, NULL, '', 'Paid'),
(35, 43, 2025, 11, 800.00, '2023-11-07', '', 'Not yet'),
(36, 45, 2025, 11, 800.00, '2023-11-07', '', 'Paid'),
(37, 46, 2025, 9, 500.00, '2021-04-01', '', 'Paid'),
(42, 42, 2025, 5, 800.00, '2024-04-25', '', 'Not yet'),
(43, 45, 2011, 1, 500.00, '2024-04-03', '', 'Not yet'),
(44, 46, 2011, 1, 500.00, '2024-04-25', '', 'Paid'),
(45, 49, 2022, 11, 300.00, '2024-04-12', '', 'Paid'),
(46, 49, 2011, 1, 250.00, '2024-04-12', '', 'Not yet'),
(47, 50, 2011, 1, 500.00, '2024-04-12', '', 'Paid'),
(48, 56, 2025, 25, 800.00, '2023-11-07', '', 'Not yet'),
(49, 56, 2011, 11, 300.00, '2024-04-22', '', 'Not yet'),
(50, 45, 2025, 11, 300.00, '2021-04-01', '', 'Not yet'),
(53, 56, 2023, 1, 250.00, '2024-04-13', '../../../Images/payment-proof/2024-04-07_10-04-11-445.png', 'Not yet'),
(54, 52, 2023, 3, 250.00, '2024-04-13', '../../../Images/payment-proof/2024-04-07_10-04-11-445.png', 'Paid'),
(55, 56, 2023, 1, 250.00, '2024-04-13', '../../../Images/payment-proof/55.png', 'Not yet'),
(56, 56, 2023, 1, 0.00, '2024-04-20', '../../../Images/payment-proof/56.png', 'Not yet');

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
(6, 'rifky3', '$2y$10$pmp7dnsM4vuiq6GoTN03.eiNVsGfA1A1d9b.nmCy9Bg2SUkxGnZm2', 'mnamrifky3@gmail.com', 'user');

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
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `member_fees`
--
ALTER TABLE `member_fees`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
