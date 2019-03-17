-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2019 at 08:27 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

DROP TABLE IF EXISTS `tbl_courses`;
CREATE TABLE IF NOT EXISTS `tbl_courses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `course_names` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`id`, `course_names`) VALUES
(1, '1 کمک های اولیه'),
(2, '2 سفرهای گالیور'),
(3, '3 سفرهای نامحدود');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karamoozteh`
--

DROP TABLE IF EXISTS `tbl_karamoozteh`;
CREATE TABLE IF NOT EXISTS `tbl_karamoozteh` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `familly` varchar(50) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `cod_meli` varchar(10) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `seatime` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `course_name` varchar(1000) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `record_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_karamoozteh`
--

INSERT INTO `tbl_karamoozteh` (`id`, `name`, `familly`, `father_name`, `cod_meli`, `mobile`, `phone`, `birthday`, `seatime`, `address`, `course_name`, `branch`, `record_date`) VALUES
(17, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '', '', 'مهندس', '', ''),
(18, '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '', ''),
(20, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهران', 'AM', '', ''),
(21, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '1', 'تهران', 'AD', '', ''),
(22, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهران', 'AD', 'tehran', '1397/12/20'),
(23, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهارن', 'AD', 'bandarabbas', '1397/12/20'),
(24, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '1', 'تهران', '', 'master', '1397/12/22'),
(25, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '1', 'تهران', '', 'master', '1397/12/22'),
(26, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '1', 'تهران', '', 'master', '1397/12/22'),
(27, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهران', '', 'master', '1397/12/22'),
(28, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهران', '', 'master', '1397/12/22'),
(29, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهران', '', 'master', '1397/12/22'),
(30, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '1', 'تهران', '', 'master', '1397/12/22'),
(31, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهران', 'Array', 'master', '1397/12/22'),
(32, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهران', '', 'master', '1397/12/22'),
(33, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '1', 'تهران', '', 'master', '1397/12/22'),
(34, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '0', 'تهران', 'AC|AD', 'master', '1397/12/22'),
(35, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '1', 'تهران', 'AC|AD|AM|AP', 'master', '1397/12/22'),
(36, 'منصور', 'لطفی', 'علی', '5949991338', '09113360715', '01333619713', '13660709', '1', 'تهران', 'AC|AD|AM', 'master', '1397/12/22'),
(37, 'بهمن', 'امیر معزّی', 'منوچهر', '12345666', '09111', '01333', '13960219', '1', 'تهران', '', 'tehran', '1397/12/23'),
(38, '', '', '', '', '', '', '', '0', '', '1 کمک های اولیه|2 سفرهای گالیور|3 سفرهای نامحدود', 'tehran', '1397/12/23'),
(39, '', '', '', '', '', '', '', '0', '', '1 کمک های اولیه|2 سفرهای گالیور|3 سفرهای نامحدود', 'tehran', '1397/12/23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user`, `password`, `branch`) VALUES
(1, 'admin', 'P@ssw0rd', 'master'),
(3, 's.madadi', '123', 'tehran'),
(4, 'a.ariyaei', '123', 'bandarabbas'),
(5, 'm.mazyooni', '123', 'khoramshahr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
