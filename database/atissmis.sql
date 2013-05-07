-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2013 at 09:04 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atissmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblassissment`
--

CREATE TABLE IF NOT EXISTS `tblassissment` (
  `fldEnrollmentID` varchar(20) NOT NULL,
  `fldStudentNum` int(100) NOT NULL,
  `fldAssissment Name` varchar(100) NOT NULL,
  `fldAmount` double NOT NULL,
  `fldBalance` double NOT NULL,
  `fldModeAndPayment` double NOT NULL,
  PRIMARY KEY (`fldAssissment Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblenrolldata`
--

CREATE TABLE IF NOT EXISTS `tblenrolldata` (
  `fld_EnrollmentId` varchar(20) NOT NULL,
  `fld_Student_num` varchar(12) NOT NULL,
  `fld_School_year` varchar(10) NOT NULL,
  `Year_or_Grade_level` varchar(15) NOT NULL,
  `fld_Section` varchar(50) NOT NULL,
  `fld_Adviser` varchar(50) NOT NULL,
  PRIMARY KEY (`fld_EnrollmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpaymentbreakdown`
--

CREATE TABLE IF NOT EXISTS `tblpaymentbreakdown` (
  `fldTrans_Num` varchar(12) NOT NULL,
  `fldStud_Num` varchar(12) NOT NULL,
  `fldDecription` varchar(55) NOT NULL,
  `fldAmount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpaymentcashflow`
--

CREATE TABLE IF NOT EXISTS `tblpaymentcashflow` (
  `fldTrans_Num` varchar(12) NOT NULL,
  `fldStudent_Num` varchar(12) NOT NULL,
  `fldDate` date NOT NULL,
  `fldAmount` double NOT NULL,
  `fldType` varchar(15) NOT NULL,
  `fldDescription` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE IF NOT EXISTS `tbluseraccount` (
  `flduserID` varchar(50) NOT NULL,
  `fldfullName` varchar(50) NOT NULL,
  `fldpassword` varchar(20) NOT NULL,
  `flduserType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`flduserID`, `fldfullName`, `fldpassword`, `flduserType`) VALUES
('12', 'test', 'jwhqtk', 'jhfk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE IF NOT EXISTS `tbl_subjects` (
  `fld_EnrollmentId` varchar(20) NOT NULL,
  `fld_Student_num` varchar(12) NOT NULL,
  `fld_Subject_id` varchar(12) NOT NULL,
  `fld_subjectName` varchar(50) NOT NULL,
  `fld_first_grading_period` double DEFAULT NULL,
  `fld_second_grading_period` double DEFAULT NULL,
  `fld_third_grading_period` double DEFAULT NULL,
  `fld_fourth_grading_period` double DEFAULT NULL,
  `fld_subject_teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
