-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 08:23 AM
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
(56, 'ADTC-MC', 'fathima', 'nifla', 'mnamrifky@gmail.com', '0776040064', '', '2024-04-23', 'xcy', 'child', '', 'xcxc', 'male', '2024-04-08'),
(57, 'ADTC-MC', 'Mohamed', 'Rifky', 'mnamrifky@gmail.com', '0776040064', '', '2024-04-14', '320b sailan road kalmunai kudy 3', 'child', '', 'Mohamed Rifky', 'male', '2024-04-13'),
(58, 'ADTC-2024-MA', 'Mohamed', 'Arhab', 'mnamrifky@gmail.com', '0776040064', '', '2024-04-14', '320b sailan road kalmunai kudy 3', 'adult', 'Student at sliate ', '', 'male', '2024-04-13'),
(59, 'ADTC-2024-MA', 'Mohamed', 'Happy', 'mnamrifky@gmail.com', '0776040064', '', '2024-04-14', '320b sailan road kalmunai kudy 3', 'adult', 'Student at sliate ', '', 'male', '2024-04-13'),
(61, 'ADTC-2024-MA', 'fathima', 'rifna', 'rifna@gmail.com', '0776040064', '', '2024-04-06', '320b sailan road kalmunai kudy 3', 'adult', '', '', 'male', '2024-04-15');

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
(67, 52, 2024, 3, 2.00, '2024-04-20', '../../../Images/payment-proof/', 'Paid'),
(68, 48, 2024, 3, 2.00, '2024-04-20', '../../../Images/payment-proof/', 'Paid'),
(69, 50, 2025, 4, 4.00, '2024-04-20', '../../../Images/payment-proof/69.png', 'Paid'),
(71, 46, 2056, 6, 250.00, '2024-04-14', '../../../Images/payment-proof/71.jpg', 'Paid'),
(72, 46, 2056, 6, 250.00, '2024-04-14', '../../../Images/payment-proof/72.jpg', 'Paid'),
(73, 48, 2089, 1, 258.00, '2024-04-14', '../../../Images/payment-proof/73.jpg', 'Not yet'),
(74, 58, 2024, 3, 3.00, '2024-04-20', '../../../Images/payment-proof/74.jpg', 'Not yet'),
(75, 50, 2023, 1, 4.00, '2024-04-13', '../../../Images/payment-proof/75.jpg', 'Not yet');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(20) NOT NULL,
  `pic_path` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `pic_path`, `description`) VALUES
(2, 'Images/news/2.jpg', 'dsfsdf'),
(3, 'Images/news/3.jpg', 'ssdfsdfsdfsfsdfsdfsdfsdfsdfsdfsdf');

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
(6, 'rifky3', '$2y$10$pmp7dnsM4vuiq6GoTN03.eiNVsGfA1A1d9b.nmCy9Bg2SUkxGnZm2', 'mnamrifky3@gmail.com', 'user'),
(7, 'rifna', '$2y$10$RVmrbU6O2x0NK6zvwEqDxerSAaSL6wk9vNW1D9TP7z3NzLuEAeUIu', 'rifna@gmail.com', 'user');

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
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `member_fees`
--
ALTER TABLE `member_fees`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
