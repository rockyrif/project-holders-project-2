-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 11:59 AM
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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `category` enum('Achievement-by-ADTC','School-Tennis-Training-programs','Tournaments','ADTC-Assets','Events') NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(42, 'ADTC-FC', 'mohamd', 'Rifky1', 'mnam32@gmail.com', 'sdsd', 'adad', '2024-03-01', '320b sailan road kalmunai kudy 31', 'child', '', 'sdsd', 'female', '', '', 'rejected', '2024-03-24'),
(46, 'ADTC-MC', 'thayeel', 'mohamed', 'thayeel@gmail.com', '0776040064', '0784641683', '2024-03-01', '320b sailan road kalminai 4', 'child', '', 'zahira', 'male', '', '', 'rejected', '2024-03-30'),
(51, 'ADTC-FC', 'fathima', 'nifla', 'adtc@gmail.com', '0776040064', '', '2024-04-27', 'sdsdsds', 'child', '', 'sdsd', 'female', '', '', 'rejected', '2024-04-05'),
(79, 'ADTC-2024-MA', 'jone', 'dav', 'jone@gmail.com', '0776040064', '', '2024-04-20', '320b sailan road kalmunai kudy 4', 'adult', 'Student @ sliate', '', 'male', '', 'Images/membership-payment-proof/78.jpg', 'rejected', '0000-00-00'),
(114, 'ADTC-2024-MA', 'fathima', 'nifla', 'nifla@gmail.com', '0776040064', '', '2024-05-10', '320b sailan road kalmunai kudy 4', 'adult', 'sddddddddddd', '', 'male', 'Images/profile-pic/nifla@gmail.com.jpg', 'Images/membership-payment-proof/nifla@gmail.com.jpg', 'rejected', '2024-05-13'),
(115, 'ADTC-2024-MA', 'mohamed', 'Rifky', 'mnamrifky@gmail.com', '0776040064', '', '2024-05-16', '320b sailan road kalmunai kudy 4', 'adult', 'Student @ sliate', '', 'male', 'Images/profile-pic/mnamrifky@gmail.com.jpg', 'Images/membership-payment-proof/mnamrifky@gmail.com.jpg', 'approved', '2024-05-13'),
(122, 'ADTC-2024-MA', 'mohamed ', 'test', 'test@gmail.com', '0776040064', '', '2024-05-31', '320b sailan road kalmunai kudy 4', 'adult', 'Student @ ucsc', '', 'male', 'Images/profile-pic/test@gmail.com.jpg', 'Images/membership-payment-proof/test@gmail.com.jpg', 'approved', '2024-05-25');

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
(115, 115, 2025, 4, 2.00, '2024-05-16', '../../../Images/payment-proof/mnamrifky@gmail.com-2025-4.jpg', 'Paid');

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
(18, 'Images/news/6.jpg', '🎾 INTER-SCHOOL TENNIS TOURNAMENT<br><br>Get ready for an exciting showdown at the Inter-School Tennis Tournament, organized by the Ampara District Tennis Club (ADTC)! This prestigious event is set to bring together budding tennis talents from various schools for a thrilling display of skill and sportsmanship.', 'admin', '2024-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_application`
--

CREATE TABLE `tournament_application` (
  `application_id` int(255) NOT NULL,
  `tournament_id` int(255) NOT NULL,
  `tournament_name` varchar(255) NOT NULL,
  `member_id` int(255) NOT NULL,
  `age_category[]` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `paid_date` date NOT NULL,
  `proof_url` varchar(255) NOT NULL,
  `payment_status` enum('Approved','Pending','Rejected') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tournament_application`
--

INSERT INTO `tournament_application` (`application_id`, `tournament_id`, `tournament_name`, `member_id`, `age_category[]`, `fee`, `paid_date`, `proof_url`, `payment_status`) VALUES
(6, 59, 'Fruit Juice & Beach Tennis Tournament', 122, 'GS-16', '6', '2024-05-16', '../../Images/tournament-payment-proof/test@gmail.com-131729.jpg', 'Pending'),
(7, 59, 'Fruit Juice & Beach Tennis Tournament', 122, 'BS-18', '1', '2024-05-17', '../../Images/tournament-payment-proof/test@gmail.com-165518.jpg', 'Rejected'),
(8, 59, 'Fruit Juice & Beach Tennis Tournament', 122, 'GS-18,GS-16', '4', '2024-05-25', '../../Images/tournament-payment-proof/test@gmail.com-20240527165719.jpg', 'Pending'),
(9, 60, 'rocky', 115, 'GS-18,GS-16,GS-14,GS-12', '3', '2024-05-10', '../../Images/tournament-payment-proof/mnamrifky@gmail.com-20240527170621.jpg', 'Approved'),
(10, 58, 'test2', 115, 'GS-18,GS-16,GS-14', '900', '2024-05-09', '../../Images/tournament-payment-proof/mnamrifky@gmail.com-20240527172545.jpg', 'Rejected'),
(11, 60, 'Beach Tennis Tournament', 115, 'GS-18,GS-16,GD-18,GD-16', '10', '2024-05-10', '../../Images/tournament-payment-proof/mnamrifky@gmail.com-20240531074929.jpg', 'Pending'),
(12, 60, 'Beach Tennis Tournament', 115, 'GS-18,GS-16,GD-18,GD-16', '4', '2024-05-04', '../../Images/tournament-payment-proof/mnamrifky@gmail.com-20240531093448.jpg', 'Approved'),
(13, 60, 'Beach Tennis Tournament', 115, 'GS-8,GS-6', '2', '2024-05-02', '../../Images/tournament-payment-proof/mnamrifky@gmail.com-20240531150924.jpg', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_schedule`
--

CREATE TABLE `tournament_schedule` (
  `tournament_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `tournament_format` enum('singles','doubles') NOT NULL DEFAULT 'singles',
  `age_category[]` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `state` enum('entry_open','cancelled','matches_on','completed') NOT NULL DEFAULT 'entry_open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tournament_schedule`
--

INSERT INTO `tournament_schedule` (`tournament_id`, `name`, `type`, `start_date`, `end_date`, `tournament_format`, `age_category[]`, `description`, `state`) VALUES
(54, 'test4', 'SLTA Tennis', '2024-05-22', '2024-05-04', 'singles', 'GS-18,GS-16,GS-14,GS-12,BD-18,BD-16,BD-14,BD-12,GD-18,GD-16,GD-14,GD-12,X-18,X-16', '900/=', 'entry_open'),
(55, 'test3', 'SLTA Tennis', '2024-05-04', '2024-05-22', 'singles', 'GS-18,BD-12,X-18,X-16', '700/=', 'entry_open'),
(58, 'test2', 'SLTA Tennis', '2024-05-24', '2024-05-31', 'singles', 'GS-18,GS-16,GS-14', '900/=', 'entry_open'),
(59, 'Fruit Juice & Beach Tennis Tournament', 'SLTA Tennis', '2024-06-01', '2024-06-30', 'singles', 'BS-18,BS-16,GS-18,GS-16', '1000/=', 'entry_open'),
(60, 'Beach Tennis Tournament', 'ADTC Tennis', '2024-05-11', '2024-05-04', 'singles', 'GS-18,GS-16,GS-14,GS-12,GS-10,GS-8,GS-6,GD-18,GD-16,GD-14,GD-12', '123', 'entry_open');

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
(3, 'Dinusha', '$2y$10$nGWMrBmXn09aIl7N/cQ2xejQMG7FhaqdO/krRIRoYQPV/QFyWD9Ym', 'darshani.hewage@gmail.com', 'admin'),
(13, 'test', '$2y$10$l9k9VVfXYg6FqC.PCmoErusRgR7DskZiit0ZIT8yyM8BxrCaoqd6y', 'test@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tournament_application`
--
ALTER TABLE `tournament_application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `tournament-id` (`tournament_id`);

--
-- Indexes for table `tournament_schedule`
--
ALTER TABLE `tournament_schedule`
  ADD PRIMARY KEY (`tournament_id`);

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
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `member_fees`
--
ALTER TABLE `member_fees`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tournament_application`
--
ALTER TABLE `tournament_application`
  MODIFY `application_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tournament_schedule`
--
ALTER TABLE `tournament_schedule`
  MODIFY `tournament_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_fees`
--
ALTER TABLE `member_fees`
  ADD CONSTRAINT `member_fees_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);

--
-- Constraints for table `tournament_application`
--
ALTER TABLE `tournament_application`
  ADD CONSTRAINT `tournament_application_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `tournament_application_ibfk_2` FOREIGN KEY (`tournament_id`) REFERENCES `tournament_schedule` (`tournament_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
