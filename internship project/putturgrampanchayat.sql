-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 08:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putturgrampanchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(2, 'CLERK', 'admin', 1234567890, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2021-04-19 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', 'Get to know us better and understand what we do\n\nBapuji Seva Kendra is the unique initiative which was launched on 1st July 2016 by Government of Karnataka under the RDPR department. Bapuji Seva Kendras were set up across all the Grama Panchayats in Karnataka offering different services largely from RDRP, Revenue and other departments. In October 2020 services were also made available online through Bapuji Seva Kendra web portal and the new BSK 2.0 portal aims to further smoothen the citizen interface and experience while availing the services.\n', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', 'Gram Panchayat, Puttur', 'grampanchayat@gmail.com', 7896541236, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest`
--

CREATE TABLE `tblrequest` (
  `ID` int(5) NOT NULL,
  `ServiceID` int(10) DEFAULT NULL,
  `RequestID` int(10) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `DateofSanitization` date DEFAULT NULL,
  `TimeofSanitization` time DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `State` varchar(200) DEFAULT NULL,
  `City` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `RequestDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrequest`
--

INSERT INTO `tblrequest` (`ID`, `ServiceID`, `RequestID`, `Name`, `Email`, `DateofSanitization`, `TimeofSanitization`, `Address`, `MobileNumber`, `State`, `City`, `Message`, `RequestDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 1, 717180048, 'jkhkjh', 'kjhkj@gmail.com', '2022-01-25', '20:33:00', 'kjkjl', 779789, 'lkjlj', 'lkjl', '', '2022-01-24 12:03:16', 'Sanitization is completed', 'Completed', '2022-01-24 12:10:28'),
(2, 1, 163211752, 'gjhgjg', 'hj@gmail.com', '2022-01-26', '18:34:00', 'jhkhjkhjk', 7894561236, 'UP', 'AFfhh', '', '2022-01-24 12:04:06', 'Work in progress', 'Inprocess', '2022-01-24 12:10:28'),
(3, 1, 973896885, 'gjhgjg', 'hj@gmail.com', '2022-01-26', '18:34:00', 'jhkhjkhjk', 7894561236, 'UP', 'AFfhh', '', '2022-01-24 12:08:02', 'Rejected', 'Rejected', '2022-01-24 12:10:28'),
(5, 1, 974038448, 'Anuj kumar', 'ak@gmail.com', '2022-01-30', '09:30:00', 'H542 Abc Streert ', 9999857868, 'Uttar Pradesh', 'Noida', '', '2022-01-28 17:33:49', NULL, NULL, '2022-01-28 17:33:49'),
(6, 1, 244256216, 'John Doe', 'johndeo@gmail.com', '2022-02-05', '19:10:00', 'A 3435 XYZ Strret', 1236547890, 'Delhi', 'New Delhi', '', '2022-01-28 17:35:41', 'Sanitization is Complete', 'Completed', '2022-01-28 17:35:41'),
(7, 1, 970894064, 'Pragnesh Patel', 'pragnesh@nesnadiad.org', '2022-07-06', '12:48:00', 'B/h Railway Station', 919824383300, 'Gujarat', 'Nadiad', '', '2022-07-06 07:18:37', NULL, NULL, '2022-07-06 07:18:37'),
(8, 7, 282115210, 'Mahantesh', 'mahenteshbeeri@gmail.com', '2022-07-06', '17:32:00', 'Beeri', 9986543213, 'Karnataka', 'Beeri', 'Nothing ', '2022-07-06 10:03:17', 'on process', 'Inprocess', '2022-07-06 10:03:17'),
(9, 1, 574431729, 'Lavin', 'lavin@gmail.com', '2022-07-14', '10:47:00', 'Puttur', 9876532123, 'Karnataka', 'Mangalore', 'Urgent', '2022-07-14 05:18:38', 'In process ', 'Inprocess', '2022-07-14 05:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(5) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `ServiceDetail` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Price`, `ServiceDetail`, `CreationDate`) VALUES
(1, 'Occupancy Certificate', '300', 'Service Procedure\r\n1. Application is to be received & document verification\r\n2. Field Verification Report Upload\r\n3. Approval/Rejection in GP Meeting\r\n4. Citizen to pay Service Fees\r\n5. Generation and issuance of Certificate Digitally(PDO to sign the certificate digitally)\r\n6. Citizen can download the certificate', '2022-01-24 05:18:08'),
(2, 'New Water Supply Connection', '100', '1. Fill the application for new water connection\r\n2. Pay the application fee and submit the application', '2022-01-24 05:18:39'),
(3, 'Disconnection of Water Supply', '200', '1. Fill the application for disconnection of water\r\n2. Submit the application', '2022-01-24 05:18:51'),
(4, 'Maintenance of Drinking Water', '50', '\r\n1. Fill the application for maintenence of water\r\n2. Submit the application', '2022-01-24 05:19:16'),
(5, 'Maintenance of Street Light', '100', '\r\n1. Fill the application for maintenence of light\r\n2. Submit the application', '2022-01-24 05:19:33'),
(6, 'Maintenance of Village Sanitation', '100', 'Using this option, Citizen can avail the Household Utility service Maintenance of Village sanitation.\r\nFill the application for Maintenance of sanitation\r\nPay the application fee and submit the application', '2022-01-24 05:19:52'),
(7, 'Trade License', '500', 'Any individual / organization who/that wishes to open Business within the Grama Panchayat Jurisdiction needs to apply for the license from the respective Grama Panchayat.\r\n1. Fill the application for Issuance of Trade License\r\n2. Pay the application fee and submit the application', '2022-01-24 05:20:32'),
(8, 'Permission for Establishment of Industrial/ Agriculture-Based Production Unit', '600', 'Any individual / organization who/ that wishes to Establish or Seek Post Facto Sanction for Industrial/ Agriculture-Based Production Unit within the Grama Panchayat Jurisdiction needs to apply for the Permission from the respective Grama Panchayat.\r\n\r\n1. Fill the application for Issuance of NOC to factories\r\n2. Pay the application fee and submit the application', '2022-01-24 05:20:52'),
(10, 'No Objection Certificate', '1000', 'The No Objection Certificate is required to be procured from the Grama Panchayat for the following but not limited to the below\r\n\r\nFor the purpose of obtaining an electrical connection\r\nFor the purpose of land conversion\r\nFor the purpose of obtaining a stone crusher permit\r\nFor other purposes\r\n\r\n1. Fill the application for Issuance of NOC to entertainment activities\r\n2. Pay the application fee and submit the application', '2022-07-06 08:59:30'),
(11, 'Road Cutting Permission', '3700', 'Any Individual/Organisation who wishe to cut the road in the Grama Panchayat jurisdiction needs to take the Permission from Grama Panchayat Office.\r\n1. Fill the application for road cutting permission\r\n2. Pay the application fee and submit the application', '2022-07-06 09:00:06'),
(12, 'Get birth and death certificate', '500', 'Birth & Death Certificate - ejanama Karnataka site provides details of all Births, Deaths and Still Births electronically registered across Karnataka. The eJanma portal is offered by Office of the Chief Registrar of Births and Deaths, Government Of Karnataka. Click Apply Now to avail the Service.', '2022-07-06 09:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbltracking`
--

CREATE TABLE `tbltracking` (
  `ID` int(5) NOT NULL,
  `RequestID` int(10) DEFAULT NULL,
  `Remark` mediumtext DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltracking`
--

INSERT INTO `tbltracking` (`ID`, `RequestID`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 717180048, 'Team is on the way', 'TOTW', '2022-01-27 05:09:23'),
(2, 717180048, 'Team is working', 'Inprocess', '2022-01-27 05:20:13'),
(3, 717180048, 'Sanitization is completed', 'Completed', '2022-01-27 05:20:41'),
(4, 163211752, 'Team is on the way for sanitization', 'TOTW', '2022-01-27 14:52:53'),
(5, 163211752, 'Work in progress', 'Inprocess', '2022-01-28 08:26:31'),
(6, 973896885, 'Rejected', 'Rejected', '2022-01-28 08:30:45'),
(7, 244256216, 'Team is On the Way', 'TOTW', '2022-01-28 17:36:41'),
(8, 244256216, 'Sanitization In process', 'Inprocess', '2022-01-28 17:37:03'),
(9, 244256216, 'Sanitization is Complete', 'Completed', '2022-01-28 17:37:22'),
(10, 282115210, 'on process', 'Inprocess', '2022-07-06 10:17:13'),
(11, 574431729, 'In process ', 'Inprocess', '2022-07-14 05:24:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblrequest`
--
ALTER TABLE `tblrequest`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RequestID` (`RequestID`),
  ADD KEY `servicid` (`ServiceID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltracking`
--
ALTER TABLE `tbltracking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `requestid` (`RequestID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblrequest`
--
ALTER TABLE `tblrequest`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbltracking`
--
ALTER TABLE `tbltracking`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblrequest`
--
ALTER TABLE `tblrequest`
  ADD CONSTRAINT `servicid` FOREIGN KEY (`ServiceID`) REFERENCES `tblservices` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbltracking`
--
ALTER TABLE `tbltracking`
  ADD CONSTRAINT `requestid` FOREIGN KEY (`RequestID`) REFERENCES `tblrequest` (`RequestID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
