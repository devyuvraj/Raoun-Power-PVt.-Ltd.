-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 02:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raoun power pvt. ltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `billdesk`
--

CREATE TABLE `billdesk` (
  `ivrs` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `payoption` varchar(20) NOT NULL,
  `cardname` varchar(20) NOT NULL,
  `cardno` varchar(16) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `cardexpire` date NOT NULL,
  `billamount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billdesk`
--

INSERT INTO `billdesk` (`ivrs`, `firstname`, `lastname`, `email`, `password`, `contactno`, `payoption`, `cardname`, `cardno`, `cvv`, `cardexpire`, `billamount`) VALUES
('123456', 'MANISH', 'JAIN', 'manish@gmail.com', 'manish123', '9887565246', 'Credit Card', 'MANISH JAIN', '1635420158764934', '444', '2024-01-01', '4443');

-- --------------------------------------------------------

--
-- Table structure for table `billinfo`
--

CREATE TABLE `billinfo` (
  `ivrs` varchar(20) NOT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `generatedate` date DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `servicecharge` varchar(20) DEFAULT NULL,
  `dutycharge` varchar(10) DEFAULT NULL,
  `metercharge` varchar(10) DEFAULT NULL,
  `tax` varchar(10) DEFAULT NULL,
  `panelty` varchar(10) DEFAULT NULL,
  `unitrate` varchar(10) DEFAULT NULL,
  `plan` varchar(20) DEFAULT NULL,
  `totalunit` varchar(10) DEFAULT NULL,
  `totalbill` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billinfo`
--

INSERT INTO `billinfo` (`ivrs`, `month`, `year`, `generatedate`, `duedate`, `servicecharge`, `dutycharge`, `metercharge`, `tax`, `panelty`, `unitrate`, `plan`, `totalunit`, `totalbill`) VALUES
('123456', 'May', '2019', '2019-04-25', '2019-05-31', '150', '100', '175', '18', '0', '20', 'Industrial Plan', '200', '4443'),
('223456', 'May', '2019', '2019-04-25', '2019-05-31', '50', '20', '75', '18', '0', '2', 'Domestic Plan', '230', '623'),
('323456', 'May', '2019', '2019-04-25', '2019-05-31', '100', '50', '100', '20', '0', '10', 'Comercial Plan', '321', '3480'),
('423456', 'May', '2019', '2019-04-25', '2019-05-31', '50', '20', '75', '18', '0', '2', 'Domestic Plan', '325', '813'),
('512345', 'May', '2019', '2019-04-25', '2019-05-31', '150', '100', '175', '18', '0', '20', 'Industrial Plan', '458', '9603'),
('612345', 'May', '2019', '2019-04-25', '2019-05-31', '150', '100', '175', '18', '0', '20', 'Industrial Plan', '120', '2843'),
('712345', 'May', '2019', '2019-04-25', '2019-05-31', '100', '50', '100', '20', '0', '10', 'Comercial Plan', '332', '3590');

-- --------------------------------------------------------

--
-- Table structure for table `careerinfo`
--

CREATE TABLE `careerinfo` (
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `company` varchar(10) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `position` varchar(10) NOT NULL,
  `document` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careerinfo`
--

INSERT INTO `careerinfo` (`firstname`, `lastname`, `email`, `password`, `company`, `designation`, `position`, `document`) VALUES
('raj', 'x', 'raj@gmail.', '45678', 'it', 'project  m', '', 'document/TipsforEnergy domestic.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `chargesinfo`
--

CREATE TABLE `chargesinfo` (
  `id` int(20) NOT NULL,
  `setdate` date DEFAULT NULL,
  `unitcharge` varchar(20) DEFAULT NULL,
  `dutycharge` varchar(20) DEFAULT NULL,
  `servicecharge` varchar(20) DEFAULT NULL,
  `panelty` varchar(20) DEFAULT NULL,
  `tax` varchar(20) DEFAULT NULL,
  `depositamount` varchar(20) NOT NULL,
  `mitercharge` varchar(20) DEFAULT NULL,
  `plan` varchar(20) DEFAULT NULL,
  `reason` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chargesinfo`
--

INSERT INTO `chargesinfo` (`id`, `setdate`, `unitcharge`, `dutycharge`, `servicecharge`, `panelty`, `tax`, `depositamount`, `mitercharge`, `plan`, `reason`) VALUES
(1, '2019-04-24', '2', '20', '50', '0', '18', '2000', '75', 'Domestic Plan', 'N/A'),
(2, '2019-04-24', '10', '50', '100', '0', '20', '5000', '100', 'Comercial Plan', 'N/A'),
(3, '2019-04-24', '20', '100', '150', '0', '18', '10000', '175', 'Industrial Plan', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `contactusinfo`
--

CREATE TABLE `contactusinfo` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactusinfo`
--

INSERT INTO `contactusinfo` (`name`, `email`, `subject`, `message`) VALUES
('', 'raj@gmail.com', '', 'kindly update unit price'),
('raj', 'raj@gmial.com', 'update', 'kindly update unit price');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `ivrs` varchar(20) NOT NULL,
  `meterno` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `postal` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`ivrs`, `meterno`, `firstname`, `lastname`, `address`, `postal`, `mobile`, `email`, `password`, `plan`, `status`) VALUES
('123456', '111', 'MANISH', 'Jain', 'INDORE', '456001', '9887565246', 'manish@gmail.com', 'manish123', 'Industrial Plan', 'Active'),
('223456', '112', 'Sachin', 'Sharma', 'Ujjain', '456001', '9876543210', 'sachin@gmail.com', 'sachin123', 'Commercial Plan', 'Active'),
('323456', '113', 'RAHUL', 'JAIN', 'INDORE', '454545', '6265646362', 'rahul@gmail.com', 'rahul123', 'Domestic Plan', 'Active'),
('423456', '114', 'ANIL', 'SHARMA', 'UJJAIN', '456001', '6261636465', 'anil@gmail.com', 'anil123', 'Industrial Plan', 'Active'),
('512345', '116', 'JOHN', 'DOE', 'BHOPAL', '456251', '9785454545', 'john@gmail.com', 'john1233', 'Industrial Plan', 'Active'),
('612345', '117', 'ALEX', 'JENDER', 'INDORE', '456001', '9009009004', 'alex@gmail.com', 'alex123', 'Domestic Plan', 'Active'),
('712345', '118', 'MAHESH', 'JAIN', 'UJJAIN', '450001', '9010101004', 'mahesh@gmail.com', 'mahesh123', 'Comercial Plan', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackinfo`
--

CREATE TABLE `feedbackinfo` (
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackinfo`
--

INSERT INTO `feedbackinfo` (`Name`, `Email`, `Message`) VALUES
('customer', 'customer@gmail.com', 'N/A'),
('customer', 'customer@gmail.com', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`) VALUES
('admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `noticeinfo`
--

CREATE TABLE `noticeinfo` (
  `id` int(10) NOT NULL,
  `Notice_Date` varchar(8) DEFAULT NULL,
  `Notice_title` varchar(30) DEFAULT NULL,
  `Notice_Message` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeinfo`
--

INSERT INTO `noticeinfo` (`id`, `Notice_Date`, `Notice_title`, `Notice_Message`) VALUES
(1, '01/04/20', 'Rate Changes', 'Rs.225 Per energy meter ');

-- --------------------------------------------------------

--
-- Table structure for table `readinginfo`
--

CREATE TABLE `readinginfo` (
  `ivrs` varchar(20) NOT NULL,
  `meterno` varchar(20) NOT NULL,
  `readdate` date NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `unitconsumed` varchar(20) NOT NULL,
  `vendorid` varchar(20) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `readinginfo`
--

INSERT INTO `readinginfo` (`ivrs`, `meterno`, `readdate`, `month`, `year`, `unitconsumed`, `vendorid`, `msg`, `photo`) VALUES
('123456', '111', '2019-04-19', 'May', '2019', '200', 'vendor01', 'N/A', ''),
('223456', '112', '2019-04-19', 'May', '2019', '230', 'vendor01', 'N/A', ''),
('323456', '113', '2019-04-19', 'May', '2019', '321', 'vendor01', 'N/A', ''),
('423456', '114', '2019-04-19', 'May', '2019', '325', 'vendor01', 'N/A', ''),
('512345', '116', '2019-04-19', 'May', '2019', '458', 'vendor01', 'N/A', ''),
('612345', '117', '2019-04-19', 'May', '2019', '120', 'vendor01', 'N/A', ''),
('712345', '118', '2019-04-19', 'May', '2019', '332', 'vendor01', 'N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Firstname` varchar(10) DEFAULT NULL,
  `Lastname` varchar(10) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Dob` varchar(12) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Postal` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Firstname`, `Lastname`, `Gender`, `Dob`, `Address`, `Postal`, `Email`, `Mobile`) VALUES
('Sachin', 'Sharma', 'Male', '01/01/1994', 'Jaipur', '327002', 'sachin@gmail.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `vendorinfo`
--

CREATE TABLE `vendorinfo` (
  `Vendorid` varchar(10) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` varchar(10) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Postal` int(10) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendorinfo`
--

INSERT INTO `vendorinfo` (`Vendorid`, `Email`, `Password`, `Name`, `Address`, `Postal`, `Mobile`) VALUES
('vendor01', 'vendor1@gmail.com', 'vendor', 'Rahul Jain', 'Indore', 456664, '9876543211');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billdesk`
--
ALTER TABLE `billdesk`
  ADD PRIMARY KEY (`ivrs`);

--
-- Indexes for table `billinfo`
--
ALTER TABLE `billinfo`
  ADD PRIMARY KEY (`ivrs`);

--
-- Indexes for table `chargesinfo`
--
ALTER TABLE `chargesinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`ivrs`);

--
-- Indexes for table `noticeinfo`
--
ALTER TABLE `noticeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `readinginfo`
--
ALTER TABLE `readinginfo`
  ADD PRIMARY KEY (`ivrs`);

--
-- Indexes for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  ADD PRIMARY KEY (`Vendorid`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chargesinfo`
--
ALTER TABLE `chargesinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
