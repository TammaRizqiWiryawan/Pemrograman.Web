-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 11:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portore`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_type`, `value`) VALUES
(1, 'Discord', 'lightzz9828'),
(3, 'Gmail', 'tamma2909@gmail.com'),
(4, 'Phone', '085717632684'),
(5, 'LinkedIn', 'www.linkedin.com/in/tamma-rizqi-wiryawan-953499335');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `experience_type` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `Tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `experience_type`, `deskripsi`, `Tahun`) VALUES
(1, 'OSIS', 'Anggota  ', '2019'),
(2, 'Magang', 'Magang di PT TirtaBumi', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `content`) VALUES
(1, 'Hello Nice to meet you! '),
(2, 'I\'m a Psychology Degree'),
(3, 'I am a 5th-semester Psychology student with a deep interest in developmental psychology and mental health. I have developed a strong understanding of human behavior.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review_content`) VALUES
(1, 'sender1', 'Good '),
(2, 'sender2', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `service_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_type`, `service_content`) VALUES
(1, 'Therapy', 'Our therapy sessions are designed to help you overcome mental health challenges and live a fulfilling life.'),
(2, 'Consultation', 'We offer personalized consultation services to help you overcome mental health challenges.'),
(3, 'Support Groups', 'Participate in support groups for shared experiences and emotional support with peers.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
