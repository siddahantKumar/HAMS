-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 11:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hams`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sno` int(9) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `HID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eId` varchar(20) NOT NULL,
  `eName` varchar(20) NOT NULL,
  `Job` varchar(15) NOT NULL,
  `eSal` int(6) NOT NULL,
  `eContact` char(11) NOT NULL,
  `eAddress` varchar(40) NOT NULL,
  `ePass` varchar(10) NOT NULL,
  `eEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eId`, `eName`, `Job`, `eSal`, `eContact`, `eAddress`, `ePass`, `eEmail`) VALUES
('2372', 'sidhantKumar', 'adminstrator', 100000, '03069190317', 'Defence view', '12345678', 'sidhantlohana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `entryregister`
--

CREATE TABLE `entryregister` (
  `IDate` date DEFAULT NULL,
  `ITime` time DEFAULT NULL,
  `ODate` date NOT NULL,
  `OTime` time NOT NULL,
  `HID` int(6) NOT NULL DEFAULT 0,
  `sNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entryregister`
--

INSERT INTO `entryregister` (`IDate`, `ITime`, `ODate`, `OTime`, `HID`, `sNo`) VALUES
('2020-12-20', '02:31:21', '2020-12-20', '02:30:59', 3871, 19),
('2020-12-20', '02:33:05', '2020-12-20', '02:33:00', 3871, 20),
('2020-12-20', '13:09:26', '2020-12-20', '13:09:23', 1235, 22),
('2020-12-20', '14:55:07', '2020-12-20', '14:55:04', 3871, 23);

-- --------------------------------------------------------

--
-- Table structure for table `hleave`
--

CREATE TABLE `hleave` (
  `oAddress` varchar(40) NOT NULL,
  `oContact` char(11) NOT NULL,
  `nod_count` int(2) NOT NULL,
  `fromDate` date NOT NULL,
  `sNo` int(3) NOT NULL,
  `HID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hleave`
--

INSERT INTO `hleave` (`oAddress`, `oContact`, `nod_count`, `fromDate`, `sNo`, `HID`) VALUES
('Dadu', '0331369184', 3, '2020-12-20', 14, 3871),
('karachi', '0306', 5, '2020-12-20', 15, 1235);

-- --------------------------------------------------------

--
-- Table structure for table `hostelier`
--

CREATE TABLE `hostelier` (
  `HID` int(6) NOT NULL,
  `Hpassword` varchar(10) NOT NULL DEFAULT 'fast123',
  `Hemail` varchar(30) NOT NULL,
  `BDate` date NOT NULL,
  `Heducation` varchar(14) NOT NULL,
  `Haddress` varchar(50) NOT NULL,
  `HNIC` varchar(13) NOT NULL,
  `HName` varchar(20) NOT NULL,
  `enrollDate` date NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `messID` char(5) DEFAULT NULL,
  `FloorNo` int(2) DEFAULT NULL,
  `RoomNo` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostelier`
--

INSERT INTO `hostelier` (`HID`, `Hpassword`, `Hemail`, `BDate`, `Heducation`, `Haddress`, `HNIC`, `HName`, `enrollDate`, `Degree`, `messID`, `FloorNo`, `RoomNo`) VALUES
(1235, '1234', 'hani@gmail.com', '2020-11-29', 'graduate', 'TandoAllahYar', '4130789654123', 'Hani', '2020-12-16', 'BSCS', '1235', 0, 4),
(3871, '12345678', 'aliakbar@gmail.com', '2020-12-03', 'undergraduate', 'gulshan-e-hadeed', '4130718466666', 'Ali Akbar', '2020-11-30', 'bscs', '3871', 2, 23);

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `messID` char(5) NOT NULL,
  `Day` char(10) NOT NULL,
  `Time` char(15) NOT NULL,
  `Dish` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`messID`, `Day`, `Time`, `Dish`) VALUES
('1235', 'Sunday', 'dinner', 'Mandi'),
('3871', 'Tuesday', 'lunch', 'Mutton stack'),
('M3300', 'FRIDAY', 'LUNCH', 'KARI PAKORA'),
('M3300', 'Monday', 'Dinner', 'Biryani'),
('M3300', 'Monday', 'Dinner', 'Kofta'),
('M3300', 'Saturday', 'Breakfast', 'egg'),
('M3300', 'Saturday', 'Dinner', 'Bhindi'),
('M3300', 'Saturday', 'Lunch', 'Costured'),
('M3300', 'Tuesday', 'Breakfast', 'Halwa Poori'),
('M3300', 'Tuesday', 'Dinner', 'Chicken corma'),
('M3300', 'Wednesday', 'Breakfast', 'Paaye'),
('M5000', 'Monday', 'BreakFast', 'Halwa'),
('M5000', 'Monday', 'Lunch', 'Biryani'),
('M5000', 'Wednesday', 'BreakFast', 'Anda Paratha');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Nid` int(5) NOT NULL,
  `NDate` date NOT NULL,
  `NTime` time NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Text` varchar(400) NOT NULL,
  `eId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Nid`, `NDate`, `NTime`, `Subject`, `Text`, `eId`) VALUES
(12, '2020-12-20', '11:14:28', 'warning', ' All students must be back to hostel before 8pm. Otherwise strict action will be taken.', '2372'),
(13, '2020-12-20', '11:15:01', 'attention', 'The attendance of all students must be compulsory.', '2372');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `FloorNo` int(2) NOT NULL,
  `RoomNo` int(2) NOT NULL,
  `Capacity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`FloorNo`, `RoomNo`, `Capacity`) VALUES
(0, 4, 4),
(1, 24, 2),
(1, 25, 2),
(1, 26, 2),
(1, 27, 2),
(1, 28, 2),
(1, 30, 2),
(1, 31, 2),
(1, 32, 4),
(1, 33, 2),
(1, 36, 3),
(1, 37, 4),
(1, 38, 3),
(2, 20, 3),
(2, 22, 2),
(2, 23, 2),
(3, 1, 3),
(3, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sno`,`HID`),
  ADD UNIQUE KEY `Contact` (`Contact`),
  ADD KEY `HID` (`HID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eId`),
  ADD UNIQUE KEY `eContact` (`eContact`),
  ADD UNIQUE KEY `eEmail` (`eEmail`);

--
-- Indexes for table `entryregister`
--
ALTER TABLE `entryregister`
  ADD PRIMARY KEY (`sNo`,`HID`),
  ADD KEY `entryregister_ibfk_1` (`HID`);

--
-- Indexes for table `hleave`
--
ALTER TABLE `hleave`
  ADD PRIMARY KEY (`sNo`,`HID`),
  ADD KEY `HID` (`HID`);

--
-- Indexes for table `hostelier`
--
ALTER TABLE `hostelier`
  ADD PRIMARY KEY (`HID`),
  ADD UNIQUE KEY `Hemail` (`Hemail`),
  ADD KEY `FloorNo` (`FloorNo`,`RoomNo`),
  ADD KEY `messID` (`messID`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`messID`,`Day`,`Time`,`Dish`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD UNIQUE KEY `Nid` (`Nid`),
  ADD KEY `eId` (`eId`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`FloorNo`,`RoomNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sno` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entryregister`
--
ALTER TABLE `entryregister`
  MODIFY `sNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hleave`
--
ALTER TABLE `hleave`
  MODIFY `sNo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Nid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`HID`) REFERENCES `hostelier` (`HID`);

--
-- Constraints for table `entryregister`
--
ALTER TABLE `entryregister`
  ADD CONSTRAINT `entryregister_ibfk_1` FOREIGN KEY (`HID`) REFERENCES `hostelier` (`HID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hleave`
--
ALTER TABLE `hleave`
  ADD CONSTRAINT `hleave_ibfk_1` FOREIGN KEY (`HID`) REFERENCES `hostelier` (`HID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hostelier`
--
ALTER TABLE `hostelier`
  ADD CONSTRAINT `hostelier_ibfk_1` FOREIGN KEY (`FloorNo`,`RoomNo`) REFERENCES `room` (`FloorNo`, `RoomNo`),
  ADD CONSTRAINT `hostelier_ibfk_2` FOREIGN KEY (`FloorNo`) REFERENCES `room` (`FloorNo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hostelier_ibfk_3` FOREIGN KEY (`FloorNo`,`RoomNo`) REFERENCES `room` (`FloorNo`, `RoomNo`) ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`eId`) REFERENCES `employee` (`eId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
