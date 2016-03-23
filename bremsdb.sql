-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2016 at 10:14 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bremsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `added_items`
--

CREATE TABLE IF NOT EXISTS `added_items` (
  `ItemDetailID` int(10) NOT NULL,
  `ItemID` varchar(45) DEFAULT NULL,
  `OfficialID` varchar(45) DEFAULT NULL,
  `QuantityAdded` varchar(45) DEFAULT NULL,
  `DateAdded` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `added_items`
--

INSERT INTO `added_items` (`ItemDetailID`, `ItemID`, `OfficialID`, `QuantityAdded`, `DateAdded`) VALUES
(3, '2', NULL, '1', '2016-03-16'),
(4, '1', NULL, '1', '2016-03-16'),
(5, '1', NULL, '1', '2016-03-16'),
(6, '1', NULL, '1', '2016-03-16'),
(7, '1', NULL, '1', '2016-03-16'),
(8, '1', NULL, '1', '2016-03-16'),
(9, '1', NULL, '', '2016-03-16'),
(10, '1', NULL, '12', '2016-03-16'),
(11, '4', NULL, '5', '2016-03-16'),
(12, '3', NULL, '10', '2016-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `borrowing_request`
--

CREATE TABLE IF NOT EXISTS `borrowing_request` (
  `BorReqID` varchar(10) NOT NULL,
  `DateTime` datetime DEFAULT NULL,
  `Purpose` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrowing_request`
--

INSERT INTO `borrowing_request` (`BorReqID`, `DateTime`, `Purpose`) VALUES
('10', '2016-03-19 00:00:00', 'Anniversary'),
('7', '2016-03-18 00:00:00', 'Birthday'),
('8', '2016-01-15 00:00:00', 'Anniv'),
('9', '2016-01-22 00:00:00', 'defense');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_request_detail`
--

CREATE TABLE IF NOT EXISTS `borrow_request_detail` (
  `BorReqID` int(10) NOT NULL,
  `ItemID` varchar(45) NOT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow_request_detail`
--

INSERT INTO `borrow_request_detail` (`BorReqID`, `ItemID`, `Status`) VALUES
(7, '', 'new'),
(8, '', 'new'),
(9, '', 'new'),
(10, '', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `deactivate`
--

CREATE TABLE IF NOT EXISTS `deactivate` (
  `DeactivateID` varchar(10) NOT NULL,
  `Reason` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `DocID` int(11) NOT NULL,
  `DocDescription` varchar(45) DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `DocStatus` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`DocID`, `DocDescription`, `Price`, `DocStatus`) VALUES
(1, 'asdfa', '2', 'inactive'),
(2, 'sdf', '1000', 'inactive'),
(3, 'Business Permit', '1000', 'active'),
(4, 'Business Clearance', '150', 'active'),
(5, 'Barangay ID', '10', 'active'),
(6, 'Certificate of Indigency', '0', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `dr_details`
--

CREATE TABLE IF NOT EXISTS `dr_details` (
  `DocReqID` varchar(10) NOT NULL,
  `DocID` varchar(10) NOT NULL,
  `Purpose` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dr_details`
--

INSERT INTO `dr_details` (`DocReqID`, `DocID`, `Purpose`, `Status`) VALUES
('1', '4', NULL, 'new'),
('2', '3', NULL, 'new'),
('3', '4', NULL, 'new'),
('5', '4', NULL, 'new'),
('6', '3', NULL, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `EventID` varchar(10) NOT NULL,
  `EventDesc` varchar(45) DEFAULT NULL,
  `Organizer` varchar(45) DEFAULT NULL,
  `TimeFrom` time DEFAULT NULL,
  `TimeTo` time DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE IF NOT EXISTS `facility` (
  `FacilityID` int(11) NOT NULL,
  `FacilityCategory` varchar(45) NOT NULL,
  `FacilityDesc` varchar(45) NOT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `FacilityStatus` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`FacilityID`, `FacilityCategory`, `FacilityDesc`, `Address`, `FacilityStatus`) VALUES
(1, 'Sports', 'Basketball Court', 'Peralta St.', 'active'),
(2, 'Educational', 'Library', 'Peralta St.', 'Active'),
(3, 'Educational', 'Daycare Center', 'Peralta St.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `facility_request`
--

CREATE TABLE IF NOT EXISTS `facility_request` (
  `ReqNo` int(10) NOT NULL,
  `FReqID` int(10) NOT NULL,
  `FacilityID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `TimeFrom` time DEFAULT NULL,
  `TimeTo` time DEFAULT NULL,
  `Purpose` varchar(45) DEFAULT NULL,
  `FReqStatus` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facility_request`
--

INSERT INTO `facility_request` (`ReqNo`, `FReqID`, `FacilityID`, `Date`, `TimeFrom`, `TimeTo`, `Purpose`, `FReqStatus`) VALUES
(1, 1, 3, '2016-03-18', '13:00:00', '17:00:00', 'Birthday party', 'Active'),
(2, 4, 1, '2016-03-20', '13:00:00', '20:00:00', 'debut party', 'Finished'),
(3, 5, 1, '2016-03-19', '10:50:00', '13:50:00', 'debut party', 'Finished'),
(4, 6, 1, '2016-03-19', '13:52:00', '17:52:00', 'debut party', 'Cancelled'),
(5, 7, 3, '2016-03-20', '13:55:00', '20:55:00', 'bday', 'Finished');

-- --------------------------------------------------------

--
-- Table structure for table `facility_schedule`
--

CREATE TABLE IF NOT EXISTS `facility_schedule` (
  `FSchedNo` int(10) NOT NULL,
  `FacilitySchedID` int(10) DEFAULT NULL,
  `Day` varchar(45) DEFAULT NULL,
  `OpeningTime` time DEFAULT NULL,
  `ClosingTime` time DEFAULT NULL,
  `FSchedStatus` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facility_schedule`
--

INSERT INTO `facility_schedule` (`FSchedNo`, `FacilitySchedID`, `Day`, `OpeningTime`, `ClosingTime`, `FSchedStatus`) VALUES
(37, 3, 'Monday', '11:00:00', '20:00:00', 'active'),
(38, 3, 'Tuesday', '10:00:00', '20:00:00', 'active'),
(39, 3, 'Wednesday', '07:00:00', '18:00:00', 'active'),
(40, 3, 'Thursday', '11:00:00', '20:00:00', 'active'),
(41, 3, 'Friday', '10:00:00', '19:00:00', 'active'),
(42, 3, 'Saturday', '11:00:00', '19:00:00', 'active'),
(43, 3, 'Sunday', '08:00:00', '18:00:00', 'active'),
(44, 1, 'Monday', '13:03:00', '06:03:00', 'active'),
(45, 1, 'Wednesday', '17:03:00', '19:03:00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `item_inventory`
--

CREATE TABLE IF NOT EXISTS `item_inventory` (
  `ItemID` int(10) NOT NULL,
  `ItemDesc` varchar(45) DEFAULT NULL,
  `ItemQuantity` int(11) DEFAULT NULL,
  `ItemStatus` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_inventory`
--

INSERT INTO `item_inventory` (`ItemID`, `ItemDesc`, `ItemQuantity`, `ItemStatus`) VALUES
(3, 'Chairs', 20, 'active'),
(4, 'Basketball', 1, 'active'),
(5, 'Paper', 10, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `nonresident`
--

CREATE TABLE IF NOT EXISTS `nonresident` (
  `RequestorID` int(10) NOT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `MidName` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `ContactNo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nonresident`
--

INSERT INTO `nonresident` (`RequestorID`, `LastName`, `FirstName`, `MidName`, `Address`, `ContactNo`) VALUES
(1, 'Ramos', 'Jomari', 'Gustilo', '1915-A Peralta St.', 'mobile'),
(2, 'Bati', 'Joyce', 'Cunanan', '1234 Peralta St.', 'mobile'),
(3, 'Bati', 'Joyce', 'Cunanan', '1234 Peralta St.', 'mobile'),
(4, 'Bati', 'Joyce', 'Cunanan', '1234 Peralta St.', 'mobile'),
(5, 'Bati', 'Joyce', 'Cunanan', '1234 Peralta St.', 'mobile'),
(6, 'Bati', 'Joyce', 'Cunanan', '1234 Peralta St.', 'mobile'),
(7, 'Ramos', 'Jomari', 'Gustilo', '1234 Peralta St.', 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `PersonnelID` int(10) NOT NULL,
  `ResidentID` int(11) DEFAULT NULL,
  `Category` varchar(45) DEFAULT NULL,
  `Position` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`PersonnelID`, `ResidentID`, `Category`, `Position`, `Status`) VALUES
(1, 1, 'Council', 'Kagawad', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `ReqID` int(10) NOT NULL,
  `OfficialID` int(11) DEFAULT NULL,
  `RequestorID` int(10) DEFAULT NULL,
  `ReqDate` date DEFAULT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ReqID`, `OfficialID`, `RequestorID`, `ReqDate`, `Status`) VALUES
(1, 1, 1, '0000-00-00', ''),
(2, 1, 2, '2016-03-16', ''),
(3, 1, 3, '2016-03-16', ''),
(4, 1, 4, '2016-03-16', ''),
(5, 1, 5, '2016-03-16', ''),
(6, 1, 6, '2016-03-16', ''),
(7, 1, 7, '2016-03-16', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_personaldata`
--

CREATE TABLE IF NOT EXISTS `resident_personaldata` (
  `ResidentID` int(11) NOT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `MidName` varchar(45) DEFAULT NULL,
  `Gender` varchar(45) DEFAULT NULL,
  `CivilStatus` varchar(45) DEFAULT NULL,
  `Religion` varchar(45) DEFAULT NULL,
  `Citizenship` varchar(45) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `BirthPlace` varchar(45) DEFAULT NULL,
  `Height` varchar(45) DEFAULT NULL,
  `Weight` varchar(45) DEFAULT NULL,
  `HealthStatus` varchar(45) DEFAULT NULL,
  `DateOfResidency` date DEFAULT NULL,
  `VotingStatus` varchar(45) DEFAULT NULL,
  `Province` varchar(45) NOT NULL,
  `MobileNo` varchar(15) NOT NULL,
  `LandlineNo` varchar(15) NOT NULL,
  `EmailAdd` varchar(45) NOT NULL,
  `ResidentStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resident_personaldata`
--

INSERT INTO `resident_personaldata` (`ResidentID`, `LastName`, `FirstName`, `MidName`, `Gender`, `CivilStatus`, `Religion`, `Citizenship`, `BirthDate`, `BirthPlace`, `Height`, `Weight`, `HealthStatus`, `DateOfResidency`, `VotingStatus`, `Province`, `MobileNo`, `LandlineNo`, `EmailAdd`, `ResidentStatus`) VALUES
(1, 'Tiamsic', 'Kristina', 'Villarta', 'Female', 'Single', 'Catholic', 'Filipino', '0000-00-00', 'Pateros', '155', '39', 'okay', '2016-03-09', 'Go', 'Jan lang', '09771315538', '5341242', 'ktiamsic', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblpersonnel`
--

CREATE TABLE IF NOT EXISTS `tblpersonnel` (
  `strPersonnelID` varchar(10) NOT NULL,
  `ResidentID` int(11) DEFAULT NULL,
  `strPersonnel_Category` varchar(45) DEFAULT NULL,
  `strPersonnel_Position` varchar(45) DEFAULT NULL,
  `strPersonnel_Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpersonnel`
--

INSERT INTO `tblpersonnel` (`strPersonnelID`, `ResidentID`, `strPersonnel_Category`, `strPersonnel_Position`, `strPersonnel_Status`) VALUES
('', 1, 'Council', 'Chairman', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblpersonnel_account`
--

CREATE TABLE IF NOT EXISTS `tblpersonnel_account` (
  `strPerAcc_PersonnelID` varchar(10) NOT NULL,
  `strPerAcc_Username` varchar(45) DEFAULT NULL,
  `strPerAcc_Password` varchar(45) DEFAULT NULL,
  `strPerAcc_Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpersonnel_account`
--

INSERT INTO `tblpersonnel_account` (`strPerAcc_PersonnelID`, `strPerAcc_Username`, `strPerAcc_Password`, `strPerAcc_Status`) VALUES
('1', 'jomjom', 'ramos', 'active'),
('2', 'tintin', 'tiamsic', 'active'),
('4', 'admin', 'password', 'active'),
('4', 'admin', 'password', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest`
--

CREATE TABLE IF NOT EXISTS `tblrequest` (
  `strReqID` int(10) NOT NULL,
  `strReqType` varchar(10) DEFAULT NULL,
  `strRequestorID` varchar(10) DEFAULT NULL,
  `strReqDate` date DEFAULT NULL,
  `strStatus` varchar(10) NOT NULL,
  `strEventID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblrequest`
--

INSERT INTO `tblrequest` (`strReqID`, `strReqType`, `strRequestorID`, `strReqDate`, `strStatus`, `strEventID`) VALUES
(8, 'Item', '001', '2016-03-16', 'returned', NULL),
(9, 'Item', '001', '2016-03-16', 'New', NULL),
(10, 'Item', '001', '2016-03-16', 'returned', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `added_items`
--
ALTER TABLE `added_items`
  ADD PRIMARY KEY (`ItemDetailID`);

--
-- Indexes for table `borrowing_request`
--
ALTER TABLE `borrowing_request`
  ADD PRIMARY KEY (`BorReqID`);

--
-- Indexes for table `borrow_request_detail`
--
ALTER TABLE `borrow_request_detail`
  ADD PRIMARY KEY (`BorReqID`);

--
-- Indexes for table `deactivate`
--
ALTER TABLE `deactivate`
  ADD PRIMARY KEY (`DeactivateID`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`DocID`);

--
-- Indexes for table `dr_details`
--
ALTER TABLE `dr_details`
  ADD PRIMARY KEY (`DocReqID`,`DocID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`FacilityID`);

--
-- Indexes for table `facility_request`
--
ALTER TABLE `facility_request`
  ADD PRIMARY KEY (`ReqNo`), ADD KEY `FReqID` (`FReqID`), ADD KEY `FacilityID` (`FacilityID`);

--
-- Indexes for table `facility_schedule`
--
ALTER TABLE `facility_schedule`
  ADD PRIMARY KEY (`FSchedNo`), ADD KEY `FacilityID` (`FacilitySchedID`);

--
-- Indexes for table `item_inventory`
--
ALTER TABLE `item_inventory`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `nonresident`
--
ALTER TABLE `nonresident`
  ADD PRIMARY KEY (`RequestorID`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`PersonnelID`), ADD KEY `ResidentID` (`ResidentID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ReqID`), ADD KEY `RequestorID` (`RequestorID`), ADD KEY `OfficialID` (`OfficialID`);

--
-- Indexes for table `tblrequest`
--
ALTER TABLE `tblrequest`
  ADD PRIMARY KEY (`strReqID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `added_items`
--
ALTER TABLE `added_items`
  MODIFY `ItemDetailID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `borrow_request_detail`
--
ALTER TABLE `borrow_request_detail`
  MODIFY `BorReqID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `DocID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `FacilityID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `facility_request`
--
ALTER TABLE `facility_request`
  MODIFY `ReqNo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `facility_schedule`
--
ALTER TABLE `facility_schedule`
  MODIFY `FSchedNo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `item_inventory`
--
ALTER TABLE `item_inventory`
  MODIFY `ItemID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nonresident`
--
ALTER TABLE `nonresident`
  MODIFY `RequestorID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `PersonnelID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ReqID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblrequest`
--
ALTER TABLE `tblrequest`
  MODIFY `strReqID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `facility_schedule`
--
ALTER TABLE `facility_schedule`
ADD CONSTRAINT `facility_schedule_ibfk_1` FOREIGN KEY (`FacilitySchedID`) REFERENCES `facility` (`FacilityID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
