-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2022 at 05:28 PM
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
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf16_persian_ci NOT NULL,
  `is_true` tinyint(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `text`, `is_true`, `question_id`) VALUES
(13, 'در بخش پانوشت یا پایینی', 0, 1),
(12, 'در بخش سربرگ یا بالایی', 1, 1),
(11, 'در بخش میانی', 0, 1),
(14, 'در تمامی بخش های صفحه استفاده می‌شود', 0, 1),
(15, 'در بخش پانوشت یا پایینی', 1, 2),
(16, 'در بخش میانی', 0, 2),
(17, ' در بخش سربرگ یا بالایی', 0, 2),
(18, 'در تمامی بخش های صفحه استفاده می‌شود', 0, 2),
(19, ' Hyper Text Multi Level', 0, 3),
(20, 'Home Tool Markup Language', 0, 3),
(21, 'HyperLinks and Text Markup Language', 0, 3),
(22, 'Hyper Text Markup Language', 1, 3),
(23, 'این تگ برای ایجاد پاراگراف متنی استفاده می‌شود و از نوع Block Level است.', 0, 4),
(24, 'این تگ برای ایجاد پاراگراف متنی استفاده می‌شود و از نوع Inline Level است.', 1, 4),
(25, 'این تگ برای نمایش کد هاست و از نوع Block Level است.', 0, 4),
(26, 'این تگ برای نمایش کد هاست و از نوع Inline Level است.', 0, 4),
(27, ' بخش های موجود در تگ head', 0, 5),
(28, 'کلیه قسمت های سند HTML', 0, 5),
(29, 'بخش های موجود در تگ html', 0, 5),
(30, 'بخش های موجود در تگ body', 1, 5),
(37, 'br', 1, 6),
(36, 'hr', 0, 6),
(35, 'lb', 0, 6),
(38, 'break', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf16_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`) VALUES
(5, 'در مرورگر کدام بخش از صفحه به کاربر نمایش داده می‌شود ؟'),
(4, 'کدام یک از موارد زیر در رابطه با تگ p صحیح است ؟'),
(3, 'کلمه HTML مخفف چیست ؟'),
(2, 'به طور معمول در HTML5 از تگ footer در چه مواردی استفاده می‌شود؟'),
(1, 'به طور معمول در HTML5 از تگ header در چه مواردی استفاده می‌شود ؟'),
(6, 'برای رفتن به یک خط جدید در HTML از کدام تگ استفاده می‌کنیم ؟');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
