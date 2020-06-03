-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2020 at 03:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sar`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `id` int(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(0, 'HOD'),
(1, 'SECURITY MANAGER');

-- --------------------------------------------------------

--
-- Table structure for table `site_access`
--

DROP TABLE IF EXISTS `site_access`;
CREATE TABLE IF NOT EXISTS `site_access` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `induction` varchar(50) DEFAULT NULL,
  `area_access` text DEFAULT NULL,
  `po_num` varchar(50) DEFAULT NULL,
  `valid` varchar(50) DEFAULT NULL,
  `receipt_num` varchar(50) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_access`
--

INSERT INTO `site_access` (`id`, `name`, `email`, `class`, `start_date`, `end_date`, `purpose`, `induction`, `area_access`, `po_num`, `valid`, `receipt_num`, `status`) VALUES
(18, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 1),
(17, 'Mike', 'sirnobys@gmail.com', 'Contractor', '2021-05-09', '2020-06-10', 'To see what i want', 'visitor', 'Admin Buildings', '223244', 'yes', '32424255', 0),
(19, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 2),
(20, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 2),
(21, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 1),
(22, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 1),
(23, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 1),
(24, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 1),
(25, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 2),
(26, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 0),
(27, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 0),
(28, 'Isaac', 'Ikejo@gmail.com', 'Employee', '2021-05-14', '2020-06-30', 'To view the site', 'full', 'Admin Buildings, Mine Camp Village, Environs', '3423424', 'yes', '42442422', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `level` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`, `level`) VALUES
(4, 'mike', 'mike@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-28 09:32:44', 1),
(5, 'duodu', 'sirnobys@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-28 10:04:31', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
