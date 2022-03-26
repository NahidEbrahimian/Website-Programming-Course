-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2022 at 03:00 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `first_name` text COLLATE utf16_persian_ci NOT NULL,
  `last_name` text COLLATE utf16_persian_ci NOT NULL,
  `mobile_number` varchar(15) COLLATE utf16_persian_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf16_persian_ci NOT NULL,
  `email` text COLLATE utf16_persian_ci,
  PRIMARY KEY (`phone_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`first_name`, `last_name`, `mobile_number`, `phone_number`, `email`) VALUES
('elham', 'alinia', '091536547856', '051-47589635', 'elham@gmail.com'),
('parisa', 'hoseini', '093569874586', '051-36598745', NULL),
('shadi', 'sardar', '091523654879', '05136598745', 'shadi@gmail.com'),
('zahra', 'ahmadi', '093569874568', '051-6547852', ''),
('mahtab', 'khademi', '093569875856', '051-36587459', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
