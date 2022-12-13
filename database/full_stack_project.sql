-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 10:45 AM
=======
-- Host: localhost
-- Generation Time: Dec 07, 2022 at 12:09 PM
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `full_stack_project`
--
<<<<<<< HEAD
=======
CREATE DATABASE IF NOT EXISTS `full_stack_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `full_stack_project`;
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `fk_course_id_id` int(11) DEFAULT NULL,
  `booking_date` datetime NOT NULL,
  `fk_user_id_id` int(11) NOT NULL
=======
  `fk_course_id` int(11) DEFAULT NULL,
  `booking_date` datetime NOT NULL,
  `fk_user_id` int(11) NOT NULL
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `fk_trainer_id_id` int(11) DEFAULT NULL,
=======
  `fk_trainer_id` int(11) NOT NULL,
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `capacity` int(11) NOT NULL,
<<<<<<< HEAD
  `available` tinyint(1) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `fk_trainer_id_id`, `description`, `start_date`, `end_date`, `price`, `capacity`, `available`, `img`, `name`) VALUES
(1, NULL, 'test', '2022-12-15 09:00:00', '2022-12-22 16:00:00', '20.00', 100, 0, 'contact-bg.png', 'First Course');

=======
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900
-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221207104819', '2022-12-07 11:48:56', 143),
('DoctrineMigrations\\Version20221207105202', '2022-12-07 11:52:11', 30),
<<<<<<< HEAD
('DoctrineMigrations\\Version20221207105636', '2022-12-07 11:56:42', 49),
('DoctrineMigrations\\Version20221208204414', '2022-12-08 21:44:28', 185),
('DoctrineMigrations\\Version20221208205800', '2022-12-08 21:58:14', 109),
('DoctrineMigrations\\Version20221209123712', '2022-12-09 13:37:45', 616),
('DoctrineMigrations\\Version20221209124008', '2022-12-09 13:40:34', 44),
('DoctrineMigrations\\Version20221210104330', '2022-12-10 11:44:46', 643),
('DoctrineMigrations\\Version20221210104930', '2022-12-10 11:49:40', 70);
=======
('DoctrineMigrations\\Version20221207105636', '2022-12-07 11:56:42', 49);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_user_id_id` int(11) NOT NULL,
  `fk_course_id_id` int(11) NOT NULL
=======
  `fk_user_id` int(11) NOT NULL,
  `fk_course_id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `fk_user_id_id` int(11) NOT NULL,
=======
  `fk_user_id` int(11) NOT NULL,
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
<<<<<<< HEAD
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `first_name`, `last_name`, `phone`, `address`) VALUES
(1, 'arwa@gmail.com', '[]', '$2y$13$0eIZewRXUQRDowmc0qTM7.EXjWEnF9J/bH45Yk1hoCwFHXNk0gyMO', 'a', 'a', '123654', 'a'),
(2, 'ta@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$6pnGJjd8pIMDpm/WNQ4H7udbyoNWs7mq1NUJch5F2fWOGE0WTNfhi', 'ta', 'lkk', '123654', 'a');

--
=======
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
<<<<<<< HEAD
  ADD UNIQUE KEY `UNIQ_E00CEDDE6DE8AF9C` (`fk_user_id_id`),
  ADD UNIQUE KEY `UNIQ_E00CEDDEB7329BA6` (`fk_course_id_id`);
=======
  ADD UNIQUE KEY `UNIQ_E00CEDDE6DE8AF9C` (`fk_user_id`),
  ADD UNIQUE KEY `UNIQ_E00CEDDEB7329BA6` (`fk_course_id`);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
<<<<<<< HEAD
  ADD KEY `IDX_169E6FB95649BAF8` (`fk_trainer_id_id`);
=======
  ADD KEY `IDX_169E6FB95649BAF8` (`fk_trainer_id`);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
<<<<<<< HEAD
  ADD UNIQUE KEY `UNIQ_794381C6B7329BA6` (`fk_course_id_id`),
  ADD KEY `IDX_794381C66DE8AF9C` (`fk_user_id_id`);
=======
  ADD UNIQUE KEY `UNIQ_794381C6B7329BA6` (`fk_course_id`),
  ADD KEY `IDX_794381C66DE8AF9C` (`fk_user_id`);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`),
<<<<<<< HEAD
  ADD UNIQUE KEY `UNIQ_C51508206DE8AF9C` (`fk_user_id_id`);
=======
  ADD UNIQUE KEY `UNIQ_C51508206DE8AF9C` (`fk_user_id`);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
<<<<<<< HEAD
  ADD CONSTRAINT `FK_E00CEDDE6DE8AF9C` FOREIGN KEY (`fk_user_id_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_E00CEDDEB7329BA6` FOREIGN KEY (`fk_course_id_id`) REFERENCES `course` (`id`);
=======
  ADD CONSTRAINT `FK_E00CEDDE6DE8AF9C` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_E00CEDDEB7329BA6` FOREIGN KEY (`fk_course_id`) REFERENCES `course` (`id`);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- Constraints for table `course`
--
ALTER TABLE `course`
<<<<<<< HEAD
  ADD CONSTRAINT `FK_169E6FB95649BAF8` FOREIGN KEY (`fk_trainer_id_id`) REFERENCES `trainer` (`id`);
=======
  ADD CONSTRAINT `FK_169E6FB95649BAF8` FOREIGN KEY (`fk_trainer_id`) REFERENCES `trainer` (`id`);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- Constraints for table `review`
--
ALTER TABLE `review`
<<<<<<< HEAD
  ADD CONSTRAINT `FK_794381C66DE8AF9C` FOREIGN KEY (`fk_user_id_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_794381C6B7329BA6` FOREIGN KEY (`fk_course_id_id`) REFERENCES `course` (`id`);
=======
  ADD CONSTRAINT `FK_794381C66DE8AF9C` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_794381C6B7329BA6` FOREIGN KEY (`fk_course_id`) REFERENCES `course` (`id`);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
<<<<<<< HEAD
  ADD CONSTRAINT `FK_C51508206DE8AF9C` FOREIGN KEY (`fk_user_id_id`) REFERENCES `user` (`id`);
=======
  ADD CONSTRAINT `FK_C51508206DE8AF9C` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`);
>>>>>>> 90a8f57e40d848159087ec9b6d8993418e011900
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
