-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 03:48 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_full`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` varchar(255) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_password` varchar(100) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `account_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `account_name`, `account_password`, `account_type`, `account_status`) VALUES
('06012018BE0XJW', 'qweqwe', 'efe6398127928f1b2e9ef3207fb82663', 'staff', 'INACTIVE'),
('06052018Q1YWBW', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'ACTIVE'),
('060620184X3P0I', 'hannah', '827ccb0eea8a706c4c34a16891f84e7b', 'it', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tblchild`
--

CREATE TABLE `tblchild` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `Full_Name` text,
  `Date_of_Birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchild`
--

INSERT INTO `tblchild` (`ID`, `ID_`, `Full_Name`, `Date_of_Birth`) VALUES
(8, '0801201849Z9DI', ' ', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbleducational_background`
--

CREATE TABLE `tbleducational_background` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `Level` text,
  `Name_of_School` text,
  `Degree_Course` text,
  `Year_Graduated` text,
  `Highest_Grade` text,
  `From_` text,
  `To_` text,
  `Scholarship` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbleducational_background`
--

INSERT INTO `tbleducational_background` (`ID`, `ID_`, `Level`, `Name_of_School`, `Degree_Course`, `Year_Graduated`, `Highest_Grade`, `From_`, `To_`, `Scholarship`) VALUES
(72, '0801201849Z9DI', 'elementary', 'Northern Zambales College', 'Elementary', '10/08/2018', '10/08/2018', 'max', '2018', ''),
(73, '0801201849Z9DI', 'secondary', 'San Andres School of Masinloc', 'High School', '02/08/2018', '04/08/2018', 'max', '2018', ''),
(74, '0801201849Z9DI', 'vocational', '', '', '', '', '', '', ''),
(75, '0801201849Z9DI', 'college', 'University of the East', 'Bachelor of Science in Information Technology', '01/08/2018', '10/08/2018', '100', '2018', ''),
(76, '0801201849Z9DI', 'graduateschool', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbleligibility`
--

CREATE TABLE `tbleligibility` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `Career` text,
  `Rating` text,
  `Date_of_Examination` text,
  `Place_of_Examination` text,
  `Number` text,
  `Date_of_Release` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblfamily_background`
--

CREATE TABLE `tblfamily_background` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `Spouse_Surname` text,
  `S_First_Name` text,
  `S_ext` text NOT NULL,
  `S_Middle_Name` text,
  `Occupation` text,
  `EmployerBus_Name` text,
  `Business_Add` text,
  `Tel_No` text,
  `Father_Surname` text,
  `F_First_Name` text,
  `F_ext` text NOT NULL,
  `F_Middle_Name` text,
  `Mother_Maiden` text NOT NULL,
  `Mother_Surname` text,
  `M_First_Name` text,
  `M_Middle_Name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfamily_background`
--

INSERT INTO `tblfamily_background` (`ID`, `ID_`, `Spouse_Surname`, `S_First_Name`, `S_ext`, `S_Middle_Name`, `Occupation`, `EmployerBus_Name`, `Business_Add`, `Tel_No`, `Father_Surname`, `F_First_Name`, `F_ext`, `F_Middle_Name`, `Mother_Maiden`, `Mother_Surname`, `M_First_Name`, `M_Middle_Name`) VALUES
(15, '0801201849Z9DI', 'wala', 'nga ', '', 'kasi', 'qwe', 'qwe', 'qweq', '123123', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllaw_related`
--

CREATE TABLE `tbllaw_related` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `36A` text,
  `36B` text,
  `37A` text,
  `37B` text,
  `38` text,
  `39` text,
  `40` text,
  `41A` text,
  `41B` text,
  `41C` text,
  `CTCNo` text,
  `Issued_at` text,
  `Issued_on` text,
  `Date_Accomplished` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblother_information`
--

CREATE TABLE `tblother_information` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `Special_Skills` text,
  `Non-Academic_Distinction` text,
  `Membership` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpersonal_information`
--

CREATE TABLE `tblpersonal_information` (
  `ID` int(11) NOT NULL,
  `Category_Code` text,
  `ID_` varchar(255) DEFAULT NULL,
  `Photo` text,
  `Signature` text,
  `Thumbmark` text,
  `Surname` text,
  `First_Name` text,
  `Middle_Name` text,
  `Ext_Name` text,
  `Date_of_Birth` text,
  `Place_of_Birth` text,
  `Sex` text,
  `Civil_Status` text,
  `Citizenship` text,
  `Height` text,
  `Weight` text,
  `Blood_Type` text,
  `GSIS` text,
  `PAGIBIG` text,
  `Philhealth` text,
  `SSS` text,
  `Residential_Add` text,
  `RA_ZIP` text,
  `RA_Tel_No` text,
  `Permanent_Add` text,
  `PA_ZIP` text,
  `PA_Tel_No` text,
  `Email_Add` text,
  `Cell_No` text,
  `Agency_Employee_No` text,
  `TIN` text,
  `Received_Date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpersonal_information`
--

INSERT INTO `tblpersonal_information` (`ID`, `Category_Code`, `ID_`, `Photo`, `Signature`, `Thumbmark`, `Surname`, `First_Name`, `Middle_Name`, `Ext_Name`, `Date_of_Birth`, `Place_of_Birth`, `Sex`, `Civil_Status`, `Citizenship`, `Height`, `Weight`, `Blood_Type`, `GSIS`, `PAGIBIG`, `Philhealth`, `SSS`, `Residential_Add`, `RA_ZIP`, `RA_Tel_No`, `Permanent_Add`, `PA_ZIP`, `PA_Tel_No`, `Email_Add`, `Cell_No`, `Agency_Employee_No`, `TIN`, `Received_Date`) VALUES
(19, NULL, '0801201849Z9DI', NULL, NULL, NULL, 'Espinosa', 'John Dave', 'Elamparo', '', '27/06/1997', 'Iba Zambales', 'male', 'single', ' Filipino', '23', '23', '', '', '', '', '', '', '', '', 'qwewqe', '123123', '12312323', '', '', '', '', '08/01/2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblreferences`
--

CREATE TABLE `tblreferences` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `Name` text,
  `Address` text,
  `Tel_No` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltrainings`
--

CREATE TABLE `tbltrainings` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `Title` text,
  `From_` date DEFAULT NULL,
  `To_` date DEFAULT NULL,
  `Number_of_Hours` text,
  `Conducted` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblvoluntary_work`
--

CREATE TABLE `tblvoluntary_work` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `Organization_and_Add` text,
  `From_` date DEFAULT NULL,
  `To_` date DEFAULT NULL,
  `Number_of_Hours` text,
  `Position` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblwork_experience`
--

CREATE TABLE `tblwork_experience` (
  `ID` int(11) NOT NULL,
  `ID_` varchar(255) NOT NULL,
  `From_` date DEFAULT NULL,
  `To_` date DEFAULT NULL,
  `Position_Title` text,
  `Department` text,
  `Monthly_Salary` text,
  `Salary_Grade` text,
  `Status_of_Appointment` text,
  `Govt_Service` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `account_id` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`account_id`, `user_firstname`, `user_lastname`, `user_contact`) VALUES
('05312018DO73DZ', 'qweqwe', 'qweqwe', '123123'),
('06012018BE0XJW', 'qweqwe', 'qweqwe', '123213'),
('06052018Q1YWBW', 'qweqwe', 'qweqwe', '123213213'),
('060620184X3P0I', 'hannah jean', 'ruanto', '091111111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblchild`
--
ALTER TABLE `tblchild`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbleducational_background`
--
ALTER TABLE `tbleducational_background`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbleligibility`
--
ALTER TABLE `tbleligibility`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfamily_background`
--
ALTER TABLE `tblfamily_background`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbllaw_related`
--
ALTER TABLE `tbllaw_related`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblother_information`
--
ALTER TABLE `tblother_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpersonal_information`
--
ALTER TABLE `tblpersonal_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblreferences`
--
ALTER TABLE `tblreferences`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltrainings`
--
ALTER TABLE `tbltrainings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvoluntary_work`
--
ALTER TABLE `tblvoluntary_work`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblwork_experience`
--
ALTER TABLE `tblwork_experience`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblchild`
--
ALTER TABLE `tblchild`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbleducational_background`
--
ALTER TABLE `tbleducational_background`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbleligibility`
--
ALTER TABLE `tbleligibility`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblfamily_background`
--
ALTER TABLE `tblfamily_background`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbllaw_related`
--
ALTER TABLE `tbllaw_related`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblother_information`
--
ALTER TABLE `tblother_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpersonal_information`
--
ALTER TABLE `tblpersonal_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblreferences`
--
ALTER TABLE `tblreferences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltrainings`
--
ALTER TABLE `tbltrainings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblvoluntary_work`
--
ALTER TABLE `tblvoluntary_work`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblwork_experience`
--
ALTER TABLE `tblwork_experience`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
