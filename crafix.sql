-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 08:15 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crafix`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `categoryname` varchar(250) DEFAULT NULL,
  `categorystatus` varchar(50) DEFAULT NULL,
  `categoryaddeddate` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `categoryname`, `categorystatus`, `categoryaddeddate`) VALUES
(1, 'Carpenter', '1', '01-11-2019 11:15:00'),
(2, 'Electrician', '1', NULL),
(3, 'Plumber', '1', NULL),
(4, 'ApplainceServices', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `mail` varchar(100) NOT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `feed` varchar(400) DEFAULT NULL,
  `addeddate` varchar(30) DEFAULT NULL,
  `searchdate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `lname`, `mail`, `subject`, `feed`, `addeddate`, `searchdate`) VALUES
(1, 'priti', 'chand', '', 'issue', 'issue', NULL, NULL),
(2, 'Preeti', 'chand', 'chndpriti@gmail.com', 'Dmbi', 'great', '1', '2019'),
(3, 'Preeti', 'chand', 'chndpriti@gmail.com', 'Dmbi', 'great', '1', '2019'),
(4, 'Preeti', 'chand', 'chndpriti@gmail.com', 'Dmbi', 'great', '1', '2019'),
(5, 'priya', 'chand', '123@gmail.com', 'hello', 'great', '1', '2019'),
(6, 'priya', 'chand', '123@gmail.com', 'hello', 'great', '01-11-2019 11:04:20', '2019-11-01'),
(7, 'yes', 'daisy', 'inform@gmail.com', 'inform', '', '01-11-2019 11:04:43', '2019-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

CREATE TABLE `logintbl` (
  `logid` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `usermobileno` varchar(50) DEFAULT NULL,
  `useremailid` varchar(100) DEFAULT NULL,
  `userpassword` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  `userstatus` varchar(100) DEFAULT NULL,
  `useraddeddate` varchar(100) DEFAULT NULL,
  `usersearchadd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`logid`, `username`, `usermobileno`, `useremailid`, `userpassword`, `usertype`, `userstatus`, `useraddeddate`, `usersearchadd`) VALUES
(1, 'Preeti Chand', '9999999999', 'preeti@gmail.com', '1993', 'MasterAdmin', '1', '24-10-2019 15:45:00', '2019-10-24'),
(2, 'pritichand', '8888888888', 'priti@gmail.com', '12345', 'Vendor', '1', '24-10-2019 4:41', '2019-10-24'),
(10, 'priyachnad', '1234567899', 'priya@gmail.com', '8765', 'Vendor', '0', '24-10-2019 18:34:27', '2019-10-24'),
(18, 'abcd', '2222222222', '1234@gmail.com', '2222222222', 'Vendor', '0', '25-10-2019 16:02:16', '2019-10-25'),
(19, 'sayli mandape', '9699078422', '123456@gmail.com', '9699078422', 'Vendor', '0', '31-10-2019 16:55:31', '2019-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `managesubcategory`
--

CREATE TABLE `managesubcategory` (
  `subcatid` int(11) NOT NULL,
  `categoryrefid` varchar(250) DEFAULT NULL,
  `subcategoryname` varchar(250) DEFAULT NULL,
  `subcategoryimage` varchar(250) DEFAULT NULL,
  `subcategoryprice` varchar(100) DEFAULT NULL,
  `subcatstatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managesubcategory`
--

INSERT INTO `managesubcategory` (`subcatid`, `categoryrefid`, `subcategoryname`, `subcategoryimage`, `subcategoryprice`, `subcatstatus`) VALUES
(1, '1', 'General', NULL, '250', '1'),
(2, '1', 'Furniture', NULL, '250', '1'),
(3, '1', 'Doors and window', NULL, '250', '1'),
(4, '1', 'Lock', NULL, '200', '1'),
(5, '2', 'Fan\r\n', NULL, '160', '1'),
(6, '2', 'MCB or Fuse', NULL, '500', '1'),
(7, '2', 'Lamp and Light', NULL, '200', '1'),
(8, '2', 'Wiring', NULL, '150', '1'),
(9, '3', 'Bathroom', NULL, '300 + Inspection', '1'),
(10, '3', 'Washbasin\r\n', NULL, '200 + Inspection', '1'),
(11, '3', 'Taps', NULL, '160 + Inspection', '1'),
(12, '3', 'Blockage', NULL, '300+ Inspection', '1'),
(13, '4', 'AC\r\n', NULL, '299 + Inspection', '1'),
(14, '4', 'TV', NULL, '199 + Inspection', '1'),
(15, '4', 'Refrigerator\r\n', NULL, '150 + Inspection', '1'),
(16, '4', 'WashingMachine', NULL, '199 + Inspection', '1');

-- --------------------------------------------------------

--
-- Table structure for table `productdescription`
--

CREATE TABLE `productdescription` (
  `prodid` int(11) NOT NULL,
  `refcatorgoryid` varchar(200) DEFAULT NULL,
  `refsubcatid` varchar(200) DEFAULT NULL,
  `prodtitle` varchar(250) DEFAULT NULL,
  `prodslogan` varchar(200) DEFAULT NULL,
  `propdescription` varchar(500) DEFAULT NULL,
  `additionalremarks` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdescription`
--

INSERT INTO `productdescription` (`prodid`, `refcatorgoryid`, `refsubcatid`, `prodtitle`, `prodslogan`, `propdescription`, `additionalremarks`) VALUES
(1, '1', '4', 'Lock', 'FITTING AND REPLACEMENT @200', '•	 Lock Fitting or Installation - Fitting or installation of the lock to the main door, flush door, bathroom door etc. Note - The scope of the work will be decided on inspection\r\n \n•	  Lock Replacement - Removal of the old or faulty lock and replacing the same with a new one.\r\n', NULL),
(2, '1', '1', 'General', 'GENERAL CARPENTARY WORK @250', '•	All other works related to furniture installation and assembly undertaken\r\n•	  The scope of work will be determined after inspection by our carpenter at your premises\r\n\r\n', NULL),
(3, '1', '2', 'Furniture', 'FURNITURE WORK @250', '•	All other works related to furniture installation and assembly undertaken\r\n•	  The scope of work will be determined after inspection by our carpenter at your premises\r\n\r\n', NULL),
(4, '1', '3', 'DoorsWindow\r\n', 'ASSEMBLE DOORS AND WINDOWS @250', '•	  Handle Fitting or Installation - Fixing the handle brass or stainless steel etc. to the main door of the house\r\n•	  Handle Replacement - Removing the old handle and replacing it with a new one\r\n', NULL),
(5, '2', '5', 'Fan', 'FITTING AND iNSTALLATION @200', '•	    Ceiling Fan Fitting or Installation- Fixing & checking the new ceiling fan & regulator for variable speeds.\r\n•	    Ceiling Fan Repair - The work will be determined after inspection by our Electrician at your premises\r\n•	  We do not undertake fan repair services.\r\n\r\n', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintbl`
--
ALTER TABLE `logintbl`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `managesubcategory`
--
ALTER TABLE `managesubcategory`
  ADD PRIMARY KEY (`subcatid`);

--
-- Indexes for table `productdescription`
--
ALTER TABLE `productdescription`
  ADD PRIMARY KEY (`prodid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logintbl`
--
ALTER TABLE `logintbl`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `managesubcategory`
--
ALTER TABLE `managesubcategory`
  MODIFY `subcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productdescription`
--
ALTER TABLE `productdescription`
  MODIFY `prodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
