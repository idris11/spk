-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 11:29 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk-pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_seleksi_syarat`
--

CREATE TABLE IF NOT EXISTS `hasil_seleksi_syarat` (
  `id_hasil` varchar(5) NOT NULL,
  `id_pegawai` varchar(5) NOT NULL,
  `id_jabatankosong` varchar(5) NOT NULL,
  `gap` int(11) NOT NULL,
  `status` enum('lulus','tidak lulus') NOT NULL,
  PRIMARY KEY (`id_hasil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_seleksi_syarat`
--

INSERT INTO `hasil_seleksi_syarat` (`id_hasil`, `id_pegawai`, `id_jabatankosong`, `gap`, `status`) VALUES
('HS01', 'PG01', 'JK01', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
