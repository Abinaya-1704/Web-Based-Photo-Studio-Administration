-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2023 at 06:53 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ephotogallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE IF NOT EXISTS `admintable` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE IF NOT EXISTS `bookingtable` (
  `BookingID` varchar(10) NOT NULL,
  `TariffID` int(11) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `EventName` varchar(50) NOT NULL,
  `EventLocation` varchar(300) NOT NULL,
  `OnDate` date NOT NULL,
  `ContactNo` varchar(10) NOT NULL,
  `EmailID` varchar(30) NOT NULL,
  `PhotographyCharges` decimal(8,2) NOT NULL,
  `AlbumCharges` decimal(8,2) NOT NULL,
  `TotalCharge` decimal(8,2) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `EmpID` varchar(10) NOT NULL,
  PRIMARY KEY (`BookingID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`BookingID`, `TariffID`, `CustomerName`, `EventName`, `EventLocation`, `OnDate`, `ContactNo`, `EmailID`, `PhotographyCharges`, `AlbumCharges`, `TotalCharge`, `Status`, `EmpID`) VALUES
('B42143', 4, 'suba', 'wedding', 'erode', '2023-03-02', '6380367278', 'subasri.krishna18@gmail.com', '5000.00', '0.00', '5000.00', 'APPROVED', ''),
('B42678', 1, 'Ram', 'Wedding Shot', 'RVS Mahal, Perundurai', '2022-02-27', '9856325125', 'ram23@gmail.com', '10000.00', '0.00', '25000.00', 'FINISHED', 'E001'),
('B67851', 7, 'a', 'a', 'a', '2021-10-10', '9090909090', 'subasri.krishna18@gmail.com', '10000.00', '0.00', '10000.00', 'APPROVED', 'E001'),
('B73599', 7, 'SubaSri', 'Birthyday', '12, Mettur Road', '2021-09-26', '9090909090', 'subasri.krishna18@gmail.com', '1000.00', '0.00', '1000.00', 'APPROVED', 'E001'),
('B83295', 1, 'Arun', 'Birthday', 'Erode', '2022-05-01', '8220454003', 'arun10@gmail.com', '1000.00', '0.00', '1000.00', 'FINISHED', 'E001');

-- --------------------------------------------------------

--
-- Table structure for table `employeetable`
--

CREATE TABLE IF NOT EXISTS `employeetable` (
  `EmpID` varchar(10) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `ContactNo` varchar(10) NOT NULL,
  `EmailID` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`EmpID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeetable`
--

INSERT INTO `employeetable` (`EmpID`, `EmpName`, `ContactNo`, `EmailID`, `Password`) VALUES
('E001', 'Ram', '9856325147', 'mail@gmail.com', '123'),
('E002', 'Arjun', '8752362514', 'mail@gmail.com', 'password'),
('E003', 'a', 'a', 'a@a.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jobtable`
--

CREATE TABLE IF NOT EXISTS `jobtable` (
  `RefID` int(11) NOT NULL,
  `ApplicantName` varchar(100) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `ContactNo` varchar(12) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `CurrentSalary` int(11) NOT NULL,
  `ExpectedSalary` int(11) NOT NULL,
  `EmailID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtable`
--

INSERT INTO `jobtable` (`RefID`, `ApplicantName`, `JobTitle`, `ContactNo`, `Qualification`, `Experience`, `CurrentSalary`, `ExpectedSalary`, `EmailID`) VALUES
(0, '0', 'a', '2147483647', '0', '2', 12000, 15000, '0'),
(0, 'Aruna', 'Analyst', '8220451023', 'B.E', '2 years', 20000, 22000, 'aruna10@gmail.com'),
(0, 'Priya', 'Wedding Photographer', '9089788990', 'M.Com', '2 years', 15000, 20000, 'priyaerd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tarifftable`
--

CREATE TABLE IF NOT EXISTS `tarifftable` (
  `TariffID` int(11) NOT NULL,
  `TariffName` varchar(200) NOT NULL,
  `Cost` int(11) NOT NULL,
  PRIMARY KEY (`TariffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarifftable`
--

INSERT INTO `tarifftable` (`TariffID`, `TariffName`, `Cost`) VALUES
(1, 'HD Video', 10000),
(2, 'Ultra HD Video ', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `templatetable`
--

CREATE TABLE IF NOT EXISTS `templatetable` (
  `TemplateID` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `TemplateName` varchar(100) NOT NULL,
  `Cost` decimal(10,0) NOT NULL,
  `Image` varchar(20) NOT NULL,
  PRIMARY KEY (`TemplateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templatetable`
--

INSERT INTO `templatetable` (`TemplateID`, `Category`, `TemplateName`, `Cost`, `Image`) VALUES
(1, 'Baby Shooting', 'Baby Photo', '1000', '1.jpg'),
(2, 'Landscapes', 'Family Collection', '2000', '2.jpg'),
(3, 'Festivals', 'Holly', '3000', '3.jpeg'),
(4, 'Wedding Album', 'Wedding Photo', '5000', '4.jpg'),
(5, 'Baby Shooting', 'Baby Sample', '1000', '5.jpg'),
(6, 'Wedding Album', 'Traditional Wedding', '6000', '6.jpg'),
(7, 'Wedding Album', 'a', '1000', '7.bmp'),
(8, 'Wedding Album', 'North Indian Style', '2500', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `templatetablebycustomer`
--

CREATE TABLE IF NOT EXISTS `templatetablebycustomer` (
  `TemplateID` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `TemplateName` varchar(100) NOT NULL,
  `Image` varchar(20) NOT NULL,
  `PersonName` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `EMailId` varchar(20) NOT NULL,
  `PreModelImage` varchar(50) NOT NULL,
  PRIMARY KEY (`TemplateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templatetablebycustomer`
--

INSERT INTO `templatetablebycustomer` (`TemplateID`, `Category`, `TemplateName`, `Image`, `PersonName`, `Address`, `ContactNo`, `EMailId`, `PreModelImage`) VALUES
(1, 'Wedding Album', 'a', '1.jpg', 'a', 'a', '1', 'a@a.com', '1.jpg'),
(2, 'Landscapes', 'Portigo', '2.jpg', 'Ram', 'Erode', '6380367278', 'ram100@gmail.com', '2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
