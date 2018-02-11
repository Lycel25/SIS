-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 03:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appform`
--

CREATE TABLE `tbl_appform` (
  `id` int(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `studnum` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cellphone` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `momname` varchar(100) NOT NULL,
  `momocc` varchar(50) NOT NULL,
  `dadname` varchar(100) NOT NULL,
  `dadocc` varchar(50) NOT NULL,
  `nob` int(10) NOT NULL,
  `nos` int(10) NOT NULL,
  `income` int(255) NOT NULL,
  `scholarship_name` varchar(100) NOT NULL,
  `gpa` int(50) NOT NULL,
  `units` int(50) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `ay` varchar(50) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appform`
--

INSERT INTO `tbl_appform` (`id`, `date`, `studnum`, `fullname`, `address`, `gender`, `cellphone`, `email`, `birthdate`, `birthplace`, `momname`, `momocc`, `dadname`, `dadocc`, `nob`, `nos`, `income`, `scholarship_name`, `gpa`, `units`, `reason`, `course`, `year`, `semester`, `ay`, `reference`, `position`) VALUES
(1, '2222222', 222222222, 'adads', 'addsd', 'female', 2147483647, 'mlycel25@gmail.com', ' adasdsad ', 'asdsadsd', 'asdas', 'adsa', 'dasd', 'd', 0, 0, 222000, '', 222, 22, '', 'iwdidjidj iwjd', '', '', '', 'iwdijdjd iwdjidjwidjw', 'ijdiwidid'),
(2, '09i9i9', 666666666, 'gvtv tft', 'crtcr c rrt', 'male', 2147483647, 'mlycel25@gmail.com', 'jtvt ', 'yjtft', 'vyvt', 'trd', 'ctdctr', 'crdcrdr', 5, 0, 6876, '', 676, 34, 'tfvfv5', '', '1styr', '2ndsem', '', 'uyygb', 'trrdr'),
(3, '', 0, '', '', '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, '', '', 'Select...', 'Select...', '', '', ''),
(4, '54', 344353543, '', '', '', 3453543, '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, '', '', '3rdyr', '1stsem', '', '', ''),
(5, '2342', 877866758, 'hbkhb', 'kuvkyv', 'female', 2147483647, 'tvytvjb', 'ybtj', 'byby', 'bygb', 'bygyb', 'ygyg', 'yguygy', 7, 0, 563554, '1', 98, 65, 'bjhbjh', 'bkuby', '2ndyr', '2ndsem', '1', 'bub', 'bkjbjkb'),
(6, '2018-02-02', 243424234, 'dasd', 'dada', 'female', 2147483647, 'ASAS', '1998-07-25', 'SCSC', 'svds', 'dsedsd', 'scd', 'fcngc', 2, 2, 6547554, '1', 89, 21, 'vhtfhtfh', 'vtvftvftf', '3rdyr', '2ndsem', '1', 'vyvt', 'vuyvyv'),
(7, '2018-02-02', 312311111, '....', '.', '', 2147483647, '.', '2018-02-02', '.', '.', '.', '.', '.', 0, 0, 234, '1', 0, 42, '.', '.', '2ndyr', '1stsem', '1', 'x', 'x'),
(8, '2018-02-02', 212222222, 'cc', 'c', 'female', 2147483647, 'cc', '2018-02-02', '124c', 'sw', 'sw', 'sw', 'sw', 2, 1, 1121212, '1', 21, 12, 'ce', 'ec', '4thyr', '2ndsem', '1', 'ec', 'ec'),
(9, '2018-02-02', 54, 'vg', 'vg', 'male', 67, 'gh', '2018-02-02', 'gj', 'gjg', 's', 'gj', 'hj', 2, 8, 76, '1', 0, 88, '8njj', 'ygyg', '2ndyr', '1stsem', '1', 'xs', 'sx'),
(10, '2018-02-06', 234242432, 'j', 'j', 'female', 2147483647, 'jb', '2018-02-06', 'j', 'j', 'j', 'j', 'j', 4, 4, 54354, '1', 77, 23, 'hvhv', 'j', '2ndyr', '1stsem', '1', 'j', 'j'),
(11, '2018-02-06', 234242432, 'j', 'j', 'female', 2147483647, 'jb', '2018-02-06', 'j', 'j', 'j', 'j', 'j', 4, 4, 54354, '1', 77, 23, 'hvhv', 'j', '2ndyr', '1stsem', '1', 'j', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ay`
--

CREATE TABLE `tbl_ay` (
  `id` int(255) NOT NULL,
  `ay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `UserName`, `Password`, `Position`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `id` int(255) NOT NULL,
  `sem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yearlevel`
--

CREATE TABLE `tbl_yearlevel` (
  `id` int(255) NOT NULL,
  `yrlevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appform`
--
ALTER TABLE `tbl_appform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ay`
--
ALTER TABLE `tbl_ay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_yearlevel`
--
ALTER TABLE `tbl_yearlevel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appform`
--
ALTER TABLE `tbl_appform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_ay`
--
ALTER TABLE `tbl_ay`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_yearlevel`
--
ALTER TABLE `tbl_yearlevel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
