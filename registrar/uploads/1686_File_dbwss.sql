-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2016 at 10:22 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbwss`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `bill_value`
--
CREATE TABLE IF NOT EXISTS `bill_value` (
`Customer_ID` int(30)
,`Reading_Date` date
,`Previous_Read` float
,`Current_Read` float
,`Usage_Charge` float
,`Tax` float
,`Total` float
);
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_ID` int(30) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Gender` char(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Kebele` int(11) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `House_Number` int(11) NOT NULL,
  `meter_number` int(100) NOT NULL,
  `metersize` int(15) NOT NULL,
  `Customer_Type` varchar(30) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `First_Name`, `Last_Name`, `Gender`, `Age`, `Kebele`, `Phone_Number`, `House_Number`, `meter_number`, `metersize`, `Customer_Type`, `User_Name`, `Password`) VALUES
(1, 'abebe', 'kebede', 'm', 34, 9, 923456789, 9, 1234, 1, 'private', 'aa', 'aa'),
(2, 'wonde', 'dsterterter', '', 56, 1, 923456789, 12442, 1, 0, '9099', 'mengistu', '1234'),
(3, 'wonde', 'kebede', 'M', 34, 1, 945870980, 988, 1, 0, '7734', '6fcdca4df8a2340ab3effed0dbc019', 'wonde'),
(4, 'wonde', 'ayele', 'M', 56, 1, 923456789, 12442, 1, 0, '5348', 'wonde', '6fcdca4df8a2340ab3effed0dbc019');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Employee_ID` int(30) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Gender` char(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Office_Number` int(11) NOT NULL,
  `Tel_Number` int(11) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `First_Name`, `Last_Name`, `Gender`, `Age`, `Position`, `Office_Number`, `Tel_Number`, `User_Name`, `Password`) VALUES
(1, 'negash', 'wubet', 'm', 23, 'Bill Officer', 12, 935830960, 'negash', 'wubet'),
(2, 'wonde', 'manaye', 'F', 34, 'Accountant1', 988, 923456789, 'wonde', 'manaye'),
(3, 'feven', 'negash', 'F', 23, 'Meter Reader', 12, 935830960, 'feven', 'negash'),
(4, 'tsehay', 'dejen', 'F', 23, 'Technician', 2423, 945749860, 'tsehay', 'dejen'),
(5, 'eyerus', 'kibebe', 'F', 25, 'Technician Mainten', 4344, 957906090, 'eyerus', 'kibebe');

-- --------------------------------------------------------

--
-- Table structure for table `employee_maintenance_report`
--

CREATE TABLE IF NOT EXISTS `employee_maintenance_report` (
  `Report_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_ID` int(30) NOT NULL,
  `Customer_ID` int(30) NOT NULL,
  `Report_Date` date NOT NULL,
  `Maintanance_Type` varchar(300) NOT NULL,
  `Maintenace_payment` double NOT NULL,
  PRIMARY KEY (`Report_ID`),
  KEY `Employee_ID` (`Employee_ID`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee_maintenance_report`
--

INSERT INTO `employee_maintenance_report` (`Report_ID`, `Employee_ID`, `Customer_ID`, `Report_Date`, `Maintanance_Type`, `Maintenace_payment`) VALUES
(6, 5, 1, '2016-06-22', 'hjhgihikhjkjhl  vscfbnnhjgf', 544),
(7, 5, 1, '2016-06-22', 'hjhgihikhjkjhl  vscfbnnhjgf', 78),
(8, 5, 1, '2016-06-22', 'hjhgihikhjkjhl  vscfbnnhjgf', 78);

-- --------------------------------------------------------

--
-- Table structure for table `employee_meter_reading_data`
--

CREATE TABLE IF NOT EXISTS `employee_meter_reading_data` (
  `Employee_Reading_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_ID` int(30) NOT NULL,
  `Customer_ID` int(30) NOT NULL,
  `Reading_Date` date NOT NULL,
  `Customer_Type` varchar(30) NOT NULL,
  `Meter_Size` float NOT NULL,
  `Meter_Number` int(15) NOT NULL,
  `Previous_Read` float NOT NULL,
  `Current_Read` float NOT NULL,
  `Consumtion` float NOT NULL,
  `Fixed_Charge` float NOT NULL,
  `Usage_Charge` float NOT NULL,
  `Tax` float NOT NULL,
  `Total` float NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`Employee_Reading_ID`),
  KEY `Employee_ID` (`Employee_ID`),
  KEY `Customer_ID` (`Customer_ID`),
  KEY `Customer_ID_2` (`Customer_ID`),
  KEY `Employee_ID_2` (`Employee_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `employee_meter_reading_data`
--

INSERT INTO `employee_meter_reading_data` (`Employee_Reading_ID`, `Employee_ID`, `Customer_ID`, `Reading_Date`, `Customer_Type`, `Meter_Size`, `Meter_Number`, `Previous_Read`, `Current_Read`, `Consumtion`, `Fixed_Charge`, `Usage_Charge`, `Tax`, `Total`, `status`) VALUES
(41, 3, 1, '2016-06-22', 'private', 34, 36, 1, 1234, 2, 3, 7.5, 10.5, 21, ''),
(42, 3, 1, '2016-06-22', 'private', 34, 36, 1, 1234, 2, 3, 7.5, 10.5, 21, ''),
(43, 3, 1, '2016-06-22', 'private', 55, 43, 0.5, 1234, -12, 3, -45, -42, -84, ''),
(44, 3, 1, '2016-06-22', 'private', 12, 34, 0.5, 1234, 22, 3, 96.25, 99.25, 198.5, '');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `Maintanance_Number` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(30) NOT NULL,
  `Maintenance_Date` date NOT NULL,
  `Maintenance_Type` varchar(50) NOT NULL,
  `Approved` varchar(50) NOT NULL,
  PRIMARY KEY (`Maintanance_Number`),
  KEY `Customer_ID` (`Customer_ID`),
  KEY `Customer_ID_2` (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`Maintanance_Number`, `Customer_ID`, `Maintenance_Date`, `Maintenance_Type`, `Approved`) VALUES
(25, 1, '2016-06-22', 'hjhgihikhjkjhl  vscfbnnhjgf', ''),
(26, 1, '2016-06-22', 'xscsdcfsadfffffffffffffffffffffffffffffffffffff', ''),
(27, 1, '2016-06-22', 'aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbeeeeeeeeeeeeeeeeb', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `types` varchar(30) NOT NULL,
  `dates` date NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penality`
--

CREATE TABLE IF NOT EXISTS `penality` (
  `pay` int(11) NOT NULL AUTO_INCREMENT,
  `Customer ID` int(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Age` varchar(30) NOT NULL,
  `Kebele` varchar(30) NOT NULL,
  `Phone_number` varchar(30) NOT NULL,
  `House_number` varchar(30) NOT NULL,
  `Total_pay` varchar(30) NOT NULL,
  PRIMARY KEY (`pay`),
  KEY `Customer ID` (`Customer ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `technician_assign`
--

CREATE TABLE IF NOT EXISTS `technician_assign` (
  `Assign_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_ID` int(30) NOT NULL,
  `Customer_ID` int(30) NOT NULL,
  `Assign_Date` date NOT NULL,
  `Maintanance_Type` varchar(250) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`Assign_ID`),
  KEY `Customer_ID` (`Customer_ID`),
  KEY `Employee_ID` (`Employee_ID`),
  KEY `Customer_ID_2` (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `technician_assign`
--

INSERT INTO `technician_assign` (`Assign_ID`, `Employee_ID`, `Customer_ID`, `Assign_Date`, `Maintanance_Type`, `status`) VALUES
(1, 5, 1, '2016-06-22', 'hjhgihikhjkjhl  vscfbnnhjgf', 'done'),
(2, 5, 1, '2016-06-22', 'xscsdcfsadfffffffffffffffffffffffffffffffffffff', ''),
(3, 5, 1, '2016-06-22', 'xscsdcfsadfffffffffffffffffffffffffffffffffffff', ''),
(4, 5, 1, '2016-06-22', 'hjhgihikhjkjhl  vscfbnnhjgf', ''),
(5, 5, 1, '2016-06-22', 'hjhgihikhjkjhl  vscfbnnhjgf', 'done');

-- --------------------------------------------------------

--
-- Structure for view `bill_value`
--
DROP TABLE IF EXISTS `bill_value`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bill_value` AS select `employee_meter_reading_data`.`Customer_ID` AS `Customer_ID`,`employee_meter_reading_data`.`Reading_Date` AS `Reading_Date`,`employee_meter_reading_data`.`Previous_Read` AS `Previous_Read`,`employee_meter_reading_data`.`Current_Read` AS `Current_Read`,`employee_meter_reading_data`.`Usage_Charge` AS `Usage_Charge`,`employee_meter_reading_data`.`Tax` AS `Tax`,`employee_meter_reading_data`.`Total` AS `Total` from `employee_meter_reading_data` WITH CASCADED CHECK OPTION;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_maintenance_report`
--
ALTER TABLE `employee_maintenance_report`
  ADD CONSTRAINT `employee_maintenance_report_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_maintenance_report_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_meter_reading_data`
--
ALTER TABLE `employee_meter_reading_data`
  ADD CONSTRAINT `employee_meter_reading_data_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_meter_reading_data_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penality`
--
ALTER TABLE `penality`
  ADD CONSTRAINT `penality_ibfk_1` FOREIGN KEY (`Customer ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `technician_assign`
--
ALTER TABLE `technician_assign`
  ADD CONSTRAINT `technician_assign_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `technician_assign_ibfk_3` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
