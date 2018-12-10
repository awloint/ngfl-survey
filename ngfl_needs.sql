-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2018 at 08:20 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.13-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngfl_needs`
--

CREATE TABLE `ngfl_needs` (
  `id` int(9) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `whatYouDo` longtext,
  `ownABusiness` enum('No','Yes') NOT NULL,
  `organisation` longtext,
  `websiteLink` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `howLongBusiness` varchar(50) DEFAULT NULL,
  `challenges` longtext,
  `businessGoals` longtext,
  `businessHelp` longtext,
  `personalGoals` longtext,
  `gains` longtext,
  `awloHelp` longtext,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngfl_needs`
--
ALTER TABLE `ngfl_needs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngfl_needs`
--
ALTER TABLE `ngfl_needs`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
