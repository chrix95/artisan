-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 11:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `artisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `surname` varchar(255) NOT NULL,
  `othername` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `surname`, `othername`, `email`, `phone`, `password`, `state`, `city`, `address`) VALUES
(4, 'OKOKON', 'Christopher Ntuk', 'engchris95@gmail.com', '08183780409', '$2y$10$wRkbmegG.jnn.83wv5VdLempFiiJimmUDbIC0Hg47PJOYnYsNHv8i', 'Akwa Ibom', 'Eket', 'jaskf adfkajfbka fiabf df'),
(5, 'OKOKON', 'hdj', 'engchris95@gmail.com', '08183780409', '$2y$10$tdwYZeVJ1Nln9SOV2LQW7epzg1o9d2Tjg9KA3biW5Ga7VUpMrTQd.', 'Abia', 'Aba South', 'sdjfhjak'),
(6, 'afhjdh', 'jkafk', 'Kristenantai14@gmail.com', '08183780409', '$2y$10$6E/8ZVVEp5Cw//GaXNvj3eFWh.J4S814ei901nQ9GHZj.VQpspgim', 'Akwa Ibom', 'Esit Eket', 'hajkfhkf sf ksfhksfh'),
(7, 'Umoh', 'Akpan Edet', 'okokon.chris2015@gmail.com', '08183780409', '$2y$10$.ujbrPO4gIKAzpYONHkUTeYZqu29mYurJbtetQIKRe2CVb77cX9cm', 'Akwa Ibom', 'Esit Eket', '6 Donatus street, Off sapele road, benin city, edo state'),
(8, 'hasjdhj', 'ahj', 'engchris95@gmail.com', '08183780409', '$2y$10$dDdyYlMhyKI0PNE4AfOcm.3X1hUYrSIQkEYqrHBMv39cxlbt5m8a6', 'Bauchi', 'Damban', 'jhadjad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
