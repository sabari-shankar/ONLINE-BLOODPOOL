-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2017 at 02:18 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodpools`
--
CREATE DATABASE `bloodpools` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bloodpools`;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Fullname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Bloodgroup` varchar(5) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Off_Phone` bigint(20) NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `City` varchar(30) NOT NULL,
  `DOLBD` date NOT NULL,
  `Donatedblood` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Fullname`, `Username`, `Password`, `DOB`, `Gender`, `Bloodgroup`, `Weight`, `Mobile`, `Off_Phone`, `Emailid`, `Address`, `City`, `DOLBD`, `Donatedblood`) VALUES
('ajith', 'chandru', '123', '1995-04-27', 'MALE', 'A2+', 65, 9654521812, 8547962167, 'chandr@gmail.com', 'simmakal', 'Madurai', '2017-08-15', 'Yet to donate'),
('DINESH', 'ILAN SINGAM', 'singam', '1996-06-09', 'MALE', 'A+', 60, 8525059916, 9677921687, 'dineshvip@gmail.com', '2,NACHIKULAM', 'Madurai', '2017-08-16', 'On need basis');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `Patientname` varchar(50) NOT NULL,
  `Required_BG` varchar(10) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Hospital_Name_Addr` varchar(60) NOT NULL,
  `Doctor_Name` varchar(50) NOT NULL,
  `When_Required` date NOT NULL,
  `Contact_Name` varchar(50) NOT NULL,
  `Contact_Email` varchar(60) NOT NULL,
  `Contact_NO` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

