-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2022 at 03:57 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bulidingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_building`
--

CREATE TABLE IF NOT EXISTS `tb_building` (
  `id` int(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `adds` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `phone1` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `size` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `request` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_building`
--

INSERT INTO `tb_building` (`id`, `ename`, `adds`, `city`, `phone`, `phone1`, `email`, `cat`, `area`, `size`, `status`, `uname`, `request`) VALUES
(3, 'Tamilselvan', 'asd', 'Chennai', '9677855384', '9443327179', 'tmlgt20@gmail.com', 'Villa', 'Andalpuram', '5000 sqft', 'Canceled', 'GTamil', 'Cancel The Booking');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reg`
--

CREATE TABLE IF NOT EXISTS `tb_reg` (
  `ename` varchar(50) NOT NULL,
  `adds` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `utype` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_reg`
--

INSERT INTO `tb_reg` (`ename`, `adds`, `city`, `phone`, `uname`, `pass`, `utype`) VALUES
('G.Tamil Selvan', 'tamilravi017@gmail.com', 'Chennai', '9677855384', 'GTamil', 'tamilg', 'Buliders'),
('G.Tamil Selvan', 'tamilravi017@gmail.com', 'Trichy', '9677855384', 'GTamils', '123', 'Transport'),
('Tamilselvan', 'tamilselvan@gmail.com', 'Trichy', '9677855384', 'Tamil', '123', 'Transport');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trans`
--

CREATE TABLE IF NOT EXISTS `tb_trans` (
  `id` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `adds` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `phone1` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fcity` varchar(50) NOT NULL,
  `tcity` varchar(50) NOT NULL,
  `pick` varchar(50) NOT NULL,
  `deli` varchar(50) NOT NULL,
  `cata` varchar(100) NOT NULL,
  `tru` varchar(100) NOT NULL,
  `moq` varchar(50) NOT NULL,
  `nos` varchar(50) NOT NULL,
  `lw` varchar(50) NOT NULL,
  `low` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `request` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trans`
--

INSERT INTO `tb_trans` (`id`, `ename`, `adds`, `city`, `phone`, `phone1`, `email`, `fcity`, `tcity`, `pick`, `deli`, `cata`, `tru`, `moq`, `nos`, `lw`, `low`, `status`, `uname`, `request`) VALUES
(1, 'Tamilselvan', 'Trichy', 'trichy ', '9677855384', '9443327179', 'tmlgt20@gmail.com', 'Thanjavur', 'Pudukkottai', '2022-05-21', '2022-05-29', 'Containers', 'Flatbed (9-Axle)', '2', '2', 'In Kgs', '2', 'Canceled', 'GTamils', 'Cancel The Booking');
