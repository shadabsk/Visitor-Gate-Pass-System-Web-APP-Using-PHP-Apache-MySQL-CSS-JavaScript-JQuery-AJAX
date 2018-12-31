-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 02:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Uname` varchar(20) NOT NULL,
  `Admin_Pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Uname`, `Admin_Pass`) VALUES
('Admin', 'Pass1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_staff`
--

CREATE TABLE `admin_staff` (
  `StaffID` int(11) NOT NULL,
  `Staff_Uname` varchar(25) NOT NULL,
  `Middle_Name` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `BloodGroup` varchar(3) NOT NULL,
  `EmergencyNo` varchar(12) NOT NULL,
  `Email_ID` varchar(20) NOT NULL,
  `PresentAdd` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(25) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `PermanentAdd` varchar(125) NOT NULL,
  `BankName` varchar(25) NOT NULL,
  `Staff_Dept` varchar(50) NOT NULL,
  `Shift` varchar(8) NOT NULL,
  `AccountNo` varchar(15) NOT NULL,
  `Pancard` varchar(15) NOT NULL,
  `Adharcard` varchar(12) NOT NULL,
  `Qualification` varchar(25) NOT NULL,
  `YOP` date NOT NULL,
  `Percentage` varchar(6) NOT NULL,
  `University` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_staff`
--

INSERT INTO `admin_staff` (`StaffID`, `Staff_Uname`, `Middle_Name`, `LName`, `Contact`, `DOB`, `Gender`, `Age`, `BloodGroup`, `EmergencyNo`, `Email_ID`, `PresentAdd`, `City`, `State`, `Country`, `Photo`, `PermanentAdd`, `BankName`, `Staff_Dept`, `Shift`, `AccountNo`, `Pancard`, `Adharcard`, `Qualification`, `YOP`, `Percentage`, `University`) VALUES
(9, 'MUDDASIR', 'SIRAJ', 'MAHADIK', '9664670840', '1980-11-12', 'male', '30', 'B+v', '9664670840', 'mudassar@gmail.com', 'Mumbra', 'Mumbai', 'Maharashtra', 'India', 'staff/mudassar.jpg', 'Mumbra', 'ICICI', 'Computer', 'Shift1', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '67', 'Mumbai'),
(10, 'IMRAN', 'SHAHID', 'SHAIKh', '8689805242', '1980-11-12', 'male', '30', 'B+v', '8689805242', 'imran@gmail.com', 'Panvel', 'Mumbai', 'Maharashtra', 'India', 'staff/imran.jpg', 'Panvel', 'ICICI', 'Computer', 'Shift1', '123456789', '987654321', '123456789012', 'MTECH', '2012-11-12', '88', 'Mumbai'),
(11, 'UBAID', 'UBAID', 'SAUDAGAR', '9820388810', '1980-11-12', 'male', '30', 'B+v', '9820388810', 'ubaid@gmail.com', 'MumbaiCentral', 'Mumbai', 'Maharashtra', 'India', 'staff/ubaid.jpg', 'MumbaiCentral', 'ICICI', 'Computer', 'Shift1', '123456789', '987654321', '123456789012', 'MTECH', '2012-11-12', '90', 'Mumbai'),
(12, 'NAVID', 'NAVID', 'SHAIKH', '9167965388', '1980-11-12', 'male', '30', 'B+v', '9167965388', 'navid@gmail.com', 'Vashi', 'Mumbai', 'Maharashtra', 'India', 'staff/navid.jpg', 'Vashi', 'ICICI', 'Computer', 'Shift1', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '60', 'Mumbai'),
(13, 'ANAS', 'ANAS', 'DANGE', '9022873433', '1980-11-12', 'male', '30', 'B+v', '9022873433', 'Anas@gmail.com', 'Kurla', 'Mumbai', 'Maharashtra', 'India', 'staff/anas.jpg', 'Kurla', 'ICICI', 'Computer', 'Shift1', '123456789', '987654321', '123456789012', 'BE', '1980-11-12', '70', 'Mumbai'),
(14, 'BASHEER', 'AHMED', 'CHISHTI', '9892327169', '1980-11-12', 'male', '30', 'B+v', '123456789', 'basheer@gmail.com', 'vashi', 'Mumbai', 'Maharashtra', 'India', 'staff/basheer.jpg', 'vashi', 'ICICI', 'Mechanical', 'Shift1', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '80', 'Mumbai'),
(15, 'MUFEED', 'MUFEED', 'SAYYED', '7506455707', '1980-11-12', 'male', '30', 'B+v', '7506455707', 'mufeed@gmail.com', 'kharghar', 'Mumbai', 'Maharashtra', 'India', 'staff/mufeed.jpg', 'Kharghar', 'ICICI', 'Mechanical', 'Shift1', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '80', 'Mumbai'),
(16, 'ADNAN', 'ADNAN', 'ANSARI', '9892252158', '1980-11-12', 'male', '30', 'B+v', '9892252158', 'adnan@gmail.com', 'Ghatkopar', 'Mumbai', 'Maharashtra', 'India', 'staff/adnan.jpg', 'Ghatkopar', 'ICICI', 'Mechanical', 'Shift2', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '80', 'Mumbai'),
(17, 'SADIK', 'SADIK', 'ANSARI', '7208577656', '1980-11-12', 'male', '30', 'B+v', '7208577656', 'Sadik@gmail.com', 'Belapur', 'Mumbai', 'Maharashtra', 'India', 'staff/sadik.jpg', 'Belapur', 'ICICI', 'Mechanical', 'Shift2', '123456789', '987654321', '123456789012', 'BE', '1980-11-12', '80', 'Mumbai'),
(18, 'Ilyas', 'Ilyas', 'Qadri', '8898112336', '1980-11-12', 'male', '30', 'B+v', '123456789', 'ilyas@gmail.com', 'Seawoods', 'Mumbai', 'Maharashtra', 'India', 'staff/ilyas.jpg', 'Seawoods', 'ICICI', 'Civil', 'Shift1', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '80', 'Mumbai'),
(19, 'SHOEB', 'SHOEB', 'MOHMMED', '9702359708', '1980-11-12', 'male', '30', 'B+v', '9702359708', 'shoeb@gmail.com', 'Nerul', 'Mumbai', 'Maharashtra', 'India', 'staff/shoeb.jpg', 'Nerul', 'ICICI', 'Civil', 'Shift2', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '80', 'Mumbai'),
(20, 'ASIF', 'ASIF', 'SHAIKH', '7208577656', '1980-11-12', 'male', '30', 'B+v', '7208577656', 'asif@gmail.com', 'Seawoods', 'Mumbai', 'Maharashtra', 'India', 'staff/asif.jpg', 'Seawoods', 'ICICI', 'Electronic', 'Shift1', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '68', 'Mumbai'),
(21, 'SHAHID', 'SHAHID', 'SHAIKH', '9967743703', '1980-11-12', 'male', '30', 'B+v', '9967743703', 'shahid@gmail.com', 'Nerul', 'Mumbai', 'Maharashtra', 'India', 'staff/shahid.jpg', 'Nerul', 'ICICI', 'EJ', 'Shift1', '123456789', '987654321', '123456789012', 'BE', '2012-11-12', '87', 'Mumbai'),
(22, 'shadab', 'murad', 'shaikh', '9892327169', '1998-11-12', 'Male', '20', 'B+v', '9892327169', 'shaikh@gmail.com', 'Kalina', 'Mumbai', 'Maharashtra', 'India', 'staff/shadab.jpg', 'kalina', 'ICICI', 'Computer', '1', '123456789', '987654321', '123456789012', 'BE', '2018-10-10', '65', 'Mumbai'),
(23, 'Staff', 'Stafff', 'Shaikh', '8879864754', '2017-03-24', 'male', '23', 'B+v', '8898112336', 'shaikh@gmail.com', 'MumbaiCentral', 'Mumbai', 'Maharashtra', 'India', 'Images/staff/1490328113.jpg', 'MumbaiCentral', 'ICICI', 'Computer', 'Shift1', '563214669821445', 'sj45236984', '201455621014', 'B.E', '2017-03-24', '80', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `incharge`
--

CREATE TABLE `incharge` (
  `Inc_ID` int(20) NOT NULL,
  `Inc_Uname` varchar(20) NOT NULL,
  `Inc_Pass` varchar(25) NOT NULL,
  `Inc_Contact` varchar(11) NOT NULL,
  `Inc_Add` varchar(100) NOT NULL,
  `Inc_Age` varchar(3) NOT NULL,
  `Inc_Gender` varchar(10) NOT NULL,
  `Inc_EID` varchar(25) NOT NULL,
  `Inc_Img` varchar(500) NOT NULL,
  `Inc_Shift` varchar(15) NOT NULL,
  `Inc_Dtime` datetime(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incharge`
--

INSERT INTO `incharge` (`Inc_ID`, `Inc_Uname`, `Inc_Pass`, `Inc_Contact`, `Inc_Add`, `Inc_Age`, `Inc_Gender`, `Inc_EID`, `Inc_Img`, `Inc_Shift`, `Inc_Dtime`) VALUES
(159, 'Shadab', 'Sh@dab123', '9892327169', 'Kurla', '23', 'Male', 'shaikhshadabali2@gmail.co', 'Images/incharge/1487656419.jpg', 'Shift1', '2017-02-21 11:23:55.000'),
(160, 'Mudassar', 'Mud@sar123', '9892327169', 'Mumbra', '19', 'Male', 'mudassarpwaskar@gmail.com', 'Images/incharge/1489730901.jpg', 'Shift1', '2017-03-17 11:38:28.000');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `MsgID` int(20) NOT NULL,
  `MsgDate` datetime(4) NOT NULL,
  `Recepient` varchar(15) NOT NULL,
  `Vis_Contact` varchar(15) NOT NULL,
  `Msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`MsgID`, `MsgDate`, `Recepient`, `Vis_Contact`, `Msg`) VALUES
(1, '2017-03-25 12:33:58.0000', '', '', ''),
(2, '2017-03-25 12:34:11.0000', '', '', ''),
(3, '2017-03-25 12:34:37.0000', '', '', ''),
(4, '2017-03-25 12:34:47.0000', '9892327169', '9892327169', 'Someone is coming to meet u'),
(5, '2017-03-25 14:41:41.0000', '', '', ''),
(6, '2017-03-25 14:41:52.0000', '', '', ''),
(7, '2017-03-25 14:56:58.0000', '', '', ''),
(8, '2017-03-25 15:07:35.0000', '', '', ''),
(9, '2017-03-25 15:07:42.0000', '', '', ''),
(10, '2017-03-25 15:13:32.0000', '', '', ''),
(11, '2017-03-25 15:13:45.0000', '', '', ''),
(12, '2017-03-25 15:41:53.0000', '', '', ''),
(13, '2017-03-25 15:42:03.0000', '', '', ''),
(14, '2017-03-25 16:57:12.0000', '', '', ''),
(15, '2017-03-25 16:57:24.0000', '', '', ''),
(16, '2017-03-26 19:48:40.0000', '', '', ''),
(17, '2017-03-26 19:48:47.0000', '', '', ''),
(18, '2017-03-26 19:49:15.0000', '9892327169', '9892327169', 'Someone is coming to meet u whose contact number is 9892327169 and name is habib'),
(19, '2017-03-26 19:58:19.0000', '', '', ''),
(20, '2017-03-26 19:58:26.0000', '', '', ''),
(21, '2017-03-26 19:58:52.0000', '9892327169', '9892327169', 'Someone is coming to meet u whose contact number is 9892327169 and name is habib'),
(22, '2017-04-05 10:39:29.0000', '', '', ''),
(23, '2017-04-05 10:39:37.0000', '', '', ''),
(24, '2017-04-05 10:39:50.0000', '8689805242', '9892327169', 'Someone is coming to meet u'),
(25, '2017-04-10 18:41:11.0000', '', '', ''),
(26, '2017-04-10 18:41:28.0000', '', '', ''),
(27, '2017-04-10 18:41:36.0000', '', '', ''),
(28, '2018-12-19 18:15:45.0000', '', '', ''),
(29, '2018-12-19 18:15:53.0000', '', '', ''),
(30, '2018-12-19 18:16:29.0000', '9892327169', '8888888888', 'hi'),
(31, '2018-12-19 18:20:11.0000', '', '', ''),
(32, '2018-12-19 18:20:40.0000', '9892327169', '7506455707', 'hi'),
(33, '2018-12-19 18:54:39.0000', '', '', ''),
(34, '2018-12-19 18:54:48.0000', '', '', ''),
(35, '2018-12-19 19:13:17.0000', '', '', ''),
(36, '2018-12-19 19:13:26.0000', '', '', ''),
(37, '2018-12-19 19:13:49.0000', '', '', ''),
(38, '2018-12-19 19:13:59.0000', '9892327169', '9892327169', 'hi'),
(39, '2018-12-20 08:36:04.0000', '', '', ''),
(40, '2018-12-20 08:36:12.0000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Vis_ID` int(20) NOT NULL,
  `Vis_Name` varchar(30) NOT NULL,
  `Vis_Uname` varchar(20) NOT NULL,
  `Vis_Pass` varchar(25) NOT NULL,
  `Vis_Contact` varchar(11) NOT NULL,
  `Vis_Locality` varchar(50) NOT NULL,
  `Vis_Age` varchar(3) NOT NULL,
  `Vis_Gen` varchar(10) NOT NULL,
  `Vis_EID` varchar(50) NOT NULL,
  `Vis_Enter` time NOT NULL,
  `Vis_Leave` time NOT NULL,
  `Vis_Date` date NOT NULL,
  `Vis_LegalID` varchar(20) NOT NULL,
  `Vis_Sdept` varchar(40) NOT NULL,
  `Staff_Name` varchar(25) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `Vis_Image` varchar(500) NOT NULL,
  `Vinc_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`Vis_ID`, `Vis_Name`, `Vis_Uname`, `Vis_Pass`, `Vis_Contact`, `Vis_Locality`, `Vis_Age`, `Vis_Gen`, `Vis_EID`, `Vis_Enter`, `Vis_Leave`, `Vis_Date`, `Vis_LegalID`, `Vis_Sdept`, `Staff_Name`, `Purpose`, `Vis_Image`, `Vinc_Name`) VALUES
(1, 'Rehan', 'Rehan', 'Reh@n123', '9892327169', 'Mumbai', '20', 'Male', 'rehan@gmail.com', '11:00:00', '12:00:00', '2017-03-10', '201456922111', 'Computer', 'Ubaid', 'Meeting', 'Images/visitor/1489123909.jpg', 'Shadab'),
(3, 'Saif', 'Saif', 'S@if1234', '9892327169', 'Mumbai', '19', 'Male', 'shaikhshadab@gmail.com', '13:00:00', '14:00:00', '2017-03-24', '201563255999', 'Mechanical', 'ADNAN', 'Meeting', 'Images/visitor/1490328380.jpg', 'Shadab'),
(4, 'Saif', 'Saif', 'S@if1234', '9892327169', 'Mumbai', '19', 'Male', 'shaikhshadab@gmail.com', '14:00:00', '15:00:00', '2017-03-24', '201563255999', 'Computer', 'UBAID', 'Collecting', 'Images/visitor/1490328727.jpg', 'Shadab'),
(5, 'RehanKhan', 'Rehan123', 'Reh@n123', '9892327169', 'Mumbai', '16', 'Male', 'shaikh@gmail.com', '13:00:00', '14:00:00', '2017-03-25', '253652148877', 'Civil', 'Ilyas', 'Meeting', 'Images/visitor/1490425302.jpg', 'Shadab'),
(6, 'heoyu', 'hhgh', 't@mMhhhhhu88', '9999999999', 'mumbi', '17', 'Male', 'hhh@gmu.com', '12:00:00', '11:00:00', '2018-12-19', '888888888888', 'Computer', 'shadab', 'meet', 'Images/visitor/1491368920.jpg', 'Shadab');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_temp`
--

CREATE TABLE `visitor_temp` (
  `Vis_ID` int(20) NOT NULL,
  `Vis_Name` varchar(30) NOT NULL,
  `Vis_Uname` varchar(25) NOT NULL,
  `Vis_Pass` varchar(25) NOT NULL,
  `Vis_Contact` varchar(11) NOT NULL,
  `Vis_Locality` varchar(50) NOT NULL,
  `Vis_Age` varchar(3) NOT NULL,
  `Vis_Gen` varchar(8) NOT NULL,
  `Vis_EID` varchar(30) NOT NULL,
  `Vis_Enter` time NOT NULL,
  `Vis_Leave` time NOT NULL,
  `Vis_Date` date NOT NULL,
  `Vis_LegalID` varchar(20) NOT NULL,
  `Vis_Sdept` varchar(30) NOT NULL,
  `Staff_Name` varchar(30) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `Vis_Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_temp`
--

INSERT INTO `visitor_temp` (`Vis_ID`, `Vis_Name`, `Vis_Uname`, `Vis_Pass`, `Vis_Contact`, `Vis_Locality`, `Vis_Age`, `Vis_Gen`, `Vis_EID`, `Vis_Enter`, `Vis_Leave`, `Vis_Date`, `Vis_LegalID`, `Vis_Sdept`, `Staff_Name`, `Purpose`, `Vis_Image`) VALUES
(104, 'Rehan', 'Rehan', 'Reh@n123', '9892327169', 'Kurla', '19', 'Male', 'shaikhshadabali2@gmail.com', '14:00:00', '15:00:00', '2017-03-02', '363214598888', 'Computer', 'IMRAN', 'Meeting', 'Images/visitor/1488018952.jpg'),
(104, 'Rehan', 'Rehan', 'Reh@n123', '9892327169', 'Kurla', '19', 'Male', 'shaikhshadabali2@gmail.com', '14:00:00', '15:00:00', '2017-03-03', '363214598888', 'Computer', 'IMRAN', 'meeting', 'Images/visitor/1488018952.jpg'),
(1, 'Rehan', 'Rehan', 'Reh@n123', '9892327169', 'Mumbai', '20', 'Male', 'rehan@gmail.com', '13:00:00', '14:00:00', '2017-03-10', '201456922111', 'Computer', 'IMRAN', 'Submission', 'Images/visitor/1489123909.jpg'),
(3, 'Saif', 'Saif', 'S@if1234', '9892327169', 'Mumbai', '19', 'Male', 'shaikhshadab@gmail.com', '14:00:00', '15:00:00', '2017-03-24', '201563255999', 'Computer', 'UBAID', 'Collecting Manual', 'Images/visitor/1490328380.jpg'),
(1, 'Rehan', 'Rehan', 'Reh@n123', '9892327169', 'Mumbai', '20', 'Male', 'rehan@gmail.com', '13:00:00', '14:00:00', '2017-03-24', '201456922111', 'Computer', 'MUDDASIR', 'Meeting', 'Images/visitor/1489123909.jpg'),
(1, 'Rehan', 'Rehan', 'Reh@n123', '9892327169', 'Mumbai', '20', 'Male', 'rehan@gmail.com', '14:00:00', '15:00:00', '2017-03-25', '201456922111', 'Computer', 'IMRAN', 'Collecting Books', 'Images/visitor/1489123909.jpg'),
(7, 'Habib', 'Habib', 'H@bib123', '9702359708', 'CST', '22', 'Male', 'habib@gmail.com', '14:00:00', '15:00:00', '2017-03-26', '563214789555', 'Computer', 'UBAID', 'Submitting Manual', 'Images/visitor/1490537917.jpg'),
(1, 'Rehan', 'Rehan', 'Reh@n123', '9892327169', 'Mumbai', '20', 'Male', 'rehan@gmail.com', '13:00:00', '14:00:00', '2017-04-05', '201456922111', 'Computer', 'IMRAN', 'Meeting', 'Images/visitor/1489123909.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_staff`
--
ALTER TABLE `admin_staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `incharge`
--
ALTER TABLE `incharge`
  ADD PRIMARY KEY (`Inc_ID`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`MsgID`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`Vis_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_staff`
--
ALTER TABLE `admin_staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `incharge`
--
ALTER TABLE `incharge`
  MODIFY `Inc_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `MsgID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `Vis_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
