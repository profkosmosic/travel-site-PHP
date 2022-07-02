-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 06:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korisnici`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_book` int(3) NOT NULL,
  `id_vacation` int(3) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_book`, `id_vacation`, `id_user`) VALUES
(15, 16, 7);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_c` int(3) NOT NULL,
  `name_c` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_c` varchar(48) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_c` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_c`, `name_c`, `email_c`, `message_c`) VALUES
(2, 'Admin', 'testproba@gmail.com', 'Proba test admin poruka.'),
(4, 'Milos', 'shomi@gmail.com', 'Proba poruke iz offera.');

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `id_nav` int(3) NOT NULL,
  `user_logged` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_unlogged` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_nav` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id_nav`, `user_logged`, `user_unlogged`, `admin_nav`) VALUES
(1, 'index.php', 'index.php', 'index.php'),
(2, 'offers.php', 'offers.php', 'offers.php'),
(3, 'assets/php/logout.php', 'login.php', 'assets/php/logout.php'),
(4, '', 'register.php', 'admin.php');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id_surv` int(3) NOT NULL,
  `id_user_s` int(3) NOT NULL,
  `answer` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_surv`, `id_user_s`, `answer`) VALUES
(1, 7, 'Yes'),
(2, 12, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `admin`) VALUES
(2, 'Lazar', 'lazar.petrovic@gmail.com', 'lazar123', 0),
(3, 'Miki', 'mikisiki@hotmail.com', '12341234', 0),
(4, 'Vera', 'rajkovicvera@gmail.com', 'bjutigul', 0),
(6, 'Sara', 'brankovicsara@gmail.com', 'dobrodosli', 0),
(7, 'Bruh', 'bruh@hotmail.com', 'asdfasdf', 0),
(9, 'Dzoni', 'nikola@gmail.com', 'ghjkghjk', 0),
(10, 'Admin', 'admin@admin.com', 'admin123', 1),
(11, 'Goran', 'goran123@hotmail.com', 'vbvbvbvb', 0),
(12, 'Milos', 'shomi@gmail.com', 'qwqwqwqw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vacation`
--

CREATE TABLE `vacation` (
  `id_img` int(3) NOT NULL,
  `name_img` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacation`
--

INSERT INTO `vacation` (`id_img`, `name_img`, `desc_img`, `file_img`, `price`) VALUES
(13, 'antalya', 'Beautiful beaches and sea, great customer reviews, lots of amazing places to visit!', 'images/vacation/antalya.jpg', 400),
(14, 'athens', 'Visit the remains of an ancient civilization! Lots of cool monuments to see and places to visit!', 'images/vacation/athens.jpg', 250),
(15, 'cairo', 'Egypt\'s capital is sure to be bursting with wonders! Great reviews and stories to tell from our users!', 'images/vacation/cairo.jpg', 450),
(16, 'giza', 'Come on and see one of the original 7 wonders of the world, the Great Pyramid itself!', 'images/vacation/giza.jpg', 550),
(17, 'istanbul', 'Istanbul, the bridge between Europe and Asia, come for the cultural divide, stay for the amazing cuisine!', 'images/vacation/istanbul.jpg', 300),
(18, 'paralia', 'Amazing location for a very low price, if you are a beach person and you are shorter on cash then this is the perfect spot for you!', 'images/vacation/paralia.jpg', 150),
(19, 'rome', 'Take a trip down to Rome to the legendary colosseum! Bragging rights and great Italian cuisine are guaranteed!', 'images/vacation/rome.jpg', 350),
(20, 'venice', 'The one of a kind town where instead of cars all you will see are boats! A very unique experience according to our users!', 'images/vacation/venice.jpg', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `id_vacation` (`id_vacation`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id_nav`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id_surv`),
  ADD KEY `id_user_s` (`id_user_s`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`password`);

--
-- Indexes for table `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`id_img`),
  ADD UNIQUE KEY `name_img` (`name_img`,`desc_img`,`file_img`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_book` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_c` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `id_nav` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_surv` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id_img` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_vacation`) REFERENCES `vacation` (`id_img`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`id_user_s`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
