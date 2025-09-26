-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 06:16 PM
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
-- Database: `talenthub`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `SubmissionDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactID`, `Name`, `Email`, `Message`, `SubmissionDate`) VALUES
(1, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Hello!\r\nI want to book an appointment.\r\n', '2024-03-10 13:51:35'),
(2, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Hello!\r\nI want to book an appointment.\r\n', '2024-03-10 14:06:39'),
(3, 'Uwingabiye Miriam', 'uwingabiye.m2000@gmail.com', 'jhgfv,guerv', '2024-03-10 14:07:27'),
(4, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'dawest', '2024-03-10 14:08:03'),
(5, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'adhfgyews', '2024-03-10 14:11:40'),
(6, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Umwana', '2024-03-10 14:16:10'),
(7, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', '4546', '2024-03-10 14:22:51'),
(8, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'jhasyfg', '2024-03-10 14:23:35'),
(9, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Hejv', '2024-03-10 14:54:54'),
(10, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'wwwwwwwwwwwwf', '2024-03-13 17:52:33'),
(11, 'Miriam Uwingabiye', 'uwingabiye.m2000@gmail.com', 'Miriam and LISA', '2024-03-13 18:00:18'),
(12, 'Lillith Singleton', 'gyxylula@mailinator.com', 'Unde qui debitis vel', '2024-04-05 00:00:09'),
(13, 'Lillith Singleton', 'gyxylula@mailinator.com', 'Unde qui debitis vel', '2024-04-05 00:00:16'),
(14, 'Unity Hardin', 'pemenoxuze@mailinator.com', 'Eaque voluptas nemo ', '2024-04-05 15:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `talents`
--

CREATE TABLE `talents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `talent_field` varchar(255) NOT NULL,
  `portfolio_file` varchar(255) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `cover_letter_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `talents`
--

INSERT INTO `talents` (`id`, `user_id`, `full_name`, `email_address`, `talent_field`, `portfolio_file`, `resume_file`, `cover_letter_file`) VALUES
(1, 25, 'Kristen Chapman', 'lymemiboto@mailinator.com', 'Music', 'Why Ghana Needs a Limit on Government Borrowing.pdf', 'the impact of social media on society.docx', 'Why Ghana Needs a Limit on Government Borrowing.pdf'),
(2, 25, 'Dustin Santiago', 'huluru@mailinator.com', 'Sports', 'Article_Review_Group_7 (1).pdf', 'Why Ghana Needs a Limit on Government Borrowing.pdf', 'Why Ghana Needs a Limit on Government Borrowing.pdf'),
(3, 25, 'Fitzgerald Hebert', 'qypuf@mailinator.com', 'Digital Marketing', 'Why Ghana Needs a Limit on Government Borrowing.pdf', 'Why Ghana Needs a Limit on Government Borrowing.pdf', 'Why Ghana Needs a Limit on Government Borrowing.pdf'),
(4, 25, 'Tyrone Bullock', 'juhacu@mailinator.com', 'Human Resources', 'Why Ghana Needs a Limit on Government Borrowing.pdf', 'Why Ghana Needs a Limit on Government Borrowing.pdf', 'Why Ghana Needs a Limit on Government Borrowing.pdf'),
(5, 33, 'Miriam Uwingabiye', 'miriam.uwingabiye@ashesi.edu.gh', 'Animation', 'Why Ghana Needs a Limit on Government Borrowing.pdf', 'Why Ghana Needs a Limit on Government Borrowing.pdf', 'Why Ghana Needs a Limit on Government Borrowing.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `ContactInfo` varchar(255) DEFAULT NULL,
  `UserType` varchar(255) DEFAULT NULL,
  `reset_token` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Email`, `Gender`, `ContactInfo`, `UserType`, `reset_token`) VALUES
(23, 'bikyhu', '$2y$10$7CpRciBbKp7Olrekk5Wohe7SFXXew/lfzUXKdIzO0g1eY56/7YsvG', 'sejexyxi@mailinator.com', 'Others', '0788478328', 'employer', NULL),
(24, 'pybelos', '$2y$10$DMHHtBk4VDCw4E0UJBweMeRL1jLEX1VJC7swAteL71sP9DsfD2L2K', 'saxotik@mailinator.com', 'Female', '1234567890', 'employer', NULL),
(25, 'godukapej', '$2y$10$ptFJdOrsoDarihEAqJti4OiCASfOGjO9CVBNAGQVA2Hab5HRgGIle', 'jefebipifo@mailinator.com', 'Male', '0123456789', 'employer', NULL),
(26, '', 'Pa$$w0rd!', 'xyrozimy@mailinator.com', 'Male', '', '', ''),
(27, 'wuwuqu', '$2y$10$kUyasc1cmbA6Yyd5BnjOJeUZC.iM1t0k0O6TwkkqfnT./cm.tykLu', 'nuxyxeh@mailinator.com', 'Male', '0788478328', 'employer', NULL),
(28, 'debuzubid', '$2y$10$m40tjCWIlMR7mgyz99nY0eKsGF202g6eMl7fT5magEkU2gHS6OnE6', 'pewece@mailinator.com', 'Others', '0788478328', 'employer', NULL),
(29, 'bukeha', '$2y$10$vVXlqv.mOF8cmQtCD7Gene13kVT9k0fXzvAoXmO4n4P8ii.JzQpN.', 'vowugazeh@mailinator.com', 'Female', '1234567890', 'employer', NULL),
(30, 'pykety', '$2y$10$X/Yp9hPTnpBL8liCFps3K.5bDhobZINJ02F9uE0DphYQZlsy4ZvzC', 'gujijy@mailinator.com', 'Male', '0788478328', 'employer', NULL),
(31, 'hupix', '$2y$10$dKaDHC0nWw24HCElJpOaZO7mbJX/5hXfEBOZ7KjeV1YBQh2ORxoyS', 'cagat@mailinator.com', 'Female', '1234567890', 'employer', NULL),
(32, 'dukig', '$2y$10$Up.L/HXsPYIOXyw8guoHBOlg0K8CQfWLMDFpgzOgDUjcrrsslVvm2', 'bekul@mailinator.com', 'Female', '0788478328', 'employer', NULL),
(33, 'fymumubo', '$2y$10$nuRR5AdAKUHCKriyZqFPK.k2B9mN5OyKPcY1SAqMRTI4bv3Lwzqge', 'lufadekil@mailinator.com', 'Male', '0788478328', 'employer', NULL),
(34, 'rotid', '$2y$10$XZSHAuxikaMVgB44WGOQW.fFTXTxTN52hIlKKkEbqiahUfC9/M6ei', 'kuzehybe@mailinator.com', 'Others', '0788478328', 'employer', NULL),
(35, 'hetohu', '$2y$10$umq1Zrrfz5qxXCQHP9cMIOfgbnvRe72k6H8Bw1jRypTs1FuhI0f/W', 'zafita@mailinator.com', 'Female', '0788478328', 'employee', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `talents`
--
ALTER TABLE `talents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `talents`
--
ALTER TABLE `talents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `talents`
--
ALTER TABLE `talents`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
