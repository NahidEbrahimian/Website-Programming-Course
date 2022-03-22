-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2022 at 10:05 AM
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
-- Database: `story`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

DROP TABLE IF EXISTS `choice`;
CREATE TABLE IF NOT EXISTS `choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf16_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`id`, `text`) VALUES
(1, 'من هرگز در زندگی خوش شانس نبوده ام!'),
(2, 'هنوز سه شانس دیگر دارم پیش به سوی دام دوم!'),
(3, 'جالب است شب به این فکر کنم که سرنوشت این حیوان مرده چه بوده است که اکنون در دام من خوابیده!');

-- --------------------------------------------------------

--
-- Table structure for table `continue_story`
--

DROP TABLE IF EXISTS `continue_story`;
CREATE TABLE IF NOT EXISTS `continue_story` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf16_persian_ci NOT NULL,
  `choice_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `continue_story`
--

INSERT INTO `continue_story` (`id`, `text`, `choice_id`) VALUES
(1, 'او فقط یک قانون جدی و گریز ناپذیر داشت که چهار دفعه بیشتر تورش را در دریا نمی انداخت …\nپسرک ماهیگیر در حالی که با خودش شعری زمزمه می کندبا تور ماهیگیری اش به کنار دریا می رود.\nپسرک ماهیگیر خوشحال و امیدوار برای نخستین بار تورش را در آب می اندازد.\n', 0),
(3, 'پسرک ماهیگیر اندوهگین و ناراحت از اینکه چقدر در زندگی بد شانس بوده است در حالی که در کنار دریا نشسته است به فکر فرو می رود ... ', 1),
(2, 'اوه اوه! عجب سنگین شده!\nاین ماهی بزرگترین شکارم خواهد بود بس که سنگین است.\nپسرک دام را که حسابی سنگین شده به سختی از آب دریا بیرون می کشد.\nچه؟ حیوانی مرده در دریا چه میکند؟\nاین چه روزی ای است که به دام من آمده؟', 0),
(4, 'او با فکر کردن به بدشانسی ها و سختی هایی که در زندگی داشته است مدت زمان طولانی را در کنار دریا می گذراند. غروب هنگام با دست خالی و نا امید از زندگی به خانه بر میگردد و شب را به همراه خانواده اش گرسنه سر بر بالین می گذارند', 1),
(5, 'قانون من چهار بار است. برای دفعه دوم دامم را به دریا می اندازم. وای چقدر سنگین شده حتما پر از ماهی است. صیاد جوان برای بار دوم با دلی پر از امید و به سختی دام را از آب بیرون کشید. ظرف سفالی دربسته در دریا چه می کند؟ صیاد ظرف را با زحمت میگشاید که میبیند فقط شیشه شکسته در آن است... ', 2),
(6, 'هنوز دو شانس دیگر دارم پیش به سوی دام سوم! پسرک برای سومین بار تورش را در آب می اندازد. حسابی سنگین شده! و این هم صید سوم! این چیست!! یک خمره شکته و مشت گل و لای و سنگ!', 2),
(7, 'چهارمین و آخرین بار ...! سپس صیاد جوان بری آخرین بار تورش را  در آب می اندازد. این با هم سنگین شده، آخرین شانسم! اوه اوه، این یک از سه دام قبلی هم خیلی سنگین تر است! یا خدا!! این چیست؟', 2),
(8, ' صندوقی رویین و مهر شده به خاتم حضرت سلیمان نبی!! و حالا باز شد! صیاد صندوق را باز می کند به و از میان دود غلیظ غولی بزرگ ظاهر می گردد.', 2),
(9, 'غول: من از عهد سلیمان نبی هستم و از این پس از فرمان تو اطاعت خواهم کرد و هرچه بخواهی برایت مهیا خواهم کرد. ', 2),
(10, 'پسرک ماهیگر متجعب از صیدی که داشته به خانه باز میگردد. او تمام شب را به سرنوشت حیوان مرده فکر میکند که چه بر سر او آمده است! او با فکر کردن به فردا و اینکه آیا صیدی خواهد داشت یا نه به خواب می رود...', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
