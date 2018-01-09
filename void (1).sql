-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 08:22 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `void`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `ngoid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `adhid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `kid` int(11) NOT NULL,
  `adhid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age_when_found` int(11) NOT NULL,
  `place_found` varchar(200) NOT NULL,
  `by_whom` varchar(200) NOT NULL,
  `date_when_found` date NOT NULL,
  `reason` varchar(200) NOT NULL,
  `adhid_whom` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`kid`, `adhid`, `name`, `age_when_found`, `place_found`, `by_whom`, `date_when_found`, `reason`, `adhid_whom`, `image`) VALUES
(2, 5642, 'bob', 3, 'lakshmangarh', 'admin', '2017-04-11', 'lost', 549221, '');

-- --------------------------------------------------------

--
-- Table structure for table `child_attendance`
--

CREATE TABLE `child_attendance` (
  `kid` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(2) DEFAULT 'P',
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child_status`
--

CREATE TABLE `child_status` (
  `kid` int(11) NOT NULL,
  `ngoid` int(11) NOT NULL,
  `date_of_entry` date NOT NULL,
  `date_of_leave` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `jid` int(11) NOT NULL,
  `ngoid` int(11) NOT NULL,
  `date` date NOT NULL,
  `fund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(2) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `password`, `type`, `status`) VALUES
(11, 'abc', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `master_admin`
--

CREATE TABLE `master_admin` (
  `jid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `adhid` int(11) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngoid` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `staff_count` int(11) NOT NULL,
  `zipid` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngoid`, `name`, `capacity`, `staff_count`, `zipid`, `address`, `status`) VALUES
(1, 'ABC', 50, 10, 123456, 'ashgd-656', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `adhid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fir` blob NOT NULL,
  `last_seen_location` varchar(255) NOT NULL,
  `last_seen_time` datetime NOT NULL,
  `kadhid` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(11) NOT NULL,
  `ngoid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `adhid` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `ngoid`, `name`, `address`, `adhid`, `contact`, `email`) VALUES
(11, 1, 'admin', 'asdasd6', 546, 1321648, 'a@gai.com');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

CREATE TABLE `staff_attendance` (
  `sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT 'P'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `sid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`sid`, `password`) VALUES
('11', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `zip`
--

CREATE TABLE `zip` (
  `zipid` int(11) NOT NULL,
  `locality` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zip`
--

INSERT INTO `zip` (`zipid`, `locality`, `city`, `state`) VALUES
(123456, 'sitapura', 'jaipur', 'raj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `adhid` (`adhid`),
  ADD KEY `ngoid` (`ngoid`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `child_attendance`
--
ALTER TABLE `child_attendance`
  ADD KEY `kid` (`kid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `child_status`
--
ALTER TABLE `child_status`
  ADD KEY `kid` (`kid`),
  ADD KEY `ngoid` (`ngoid`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD KEY `jid` (`jid`),
  ADD KEY `ngoid` (`ngoid`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_admin`
--
ALTER TABLE `master_admin`
  ADD PRIMARY KEY (`jid`),
  ADD UNIQUE KEY `adhid` (`adhid`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngoid`),
  ADD KEY `zipid` (`zipid`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`adhid`),
  ADD UNIQUE KEY `kadhid` (`kadhid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `adhid` (`adhid`),
  ADD KEY `ngoid` (`ngoid`);

--
-- Indexes for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `zip`
--
ALTER TABLE `zip`
  ADD PRIMARY KEY (`zipid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zip`
--
ALTER TABLE `zip`
  MODIFY `zipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ngoid`) REFERENCES `ngo` (`ngoid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `master` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `child_attendance`
--
ALTER TABLE `child_attendance`
  ADD CONSTRAINT `child_attendance_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `child` (`kid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `child_attendance_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `staff` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `child_status`
--
ALTER TABLE `child_status`
  ADD CONSTRAINT `child_status_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `child` (`kid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `child_status_ibfk_2` FOREIGN KEY (`ngoid`) REFERENCES `ngo` (`ngoid`) ON UPDATE CASCADE;

--
-- Constraints for table `funds`
--
ALTER TABLE `funds`
  ADD CONSTRAINT `funds_ibfk_1` FOREIGN KEY (`jid`) REFERENCES `master_admin` (`jid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `funds_ibfk_2` FOREIGN KEY (`ngoid`) REFERENCES `ngo` (`ngoid`) ON UPDATE CASCADE;

--
-- Constraints for table `master_admin`
--
ALTER TABLE `master_admin`
  ADD CONSTRAINT `master_admin_ibfk_1` FOREIGN KEY (`jid`) REFERENCES `master` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ngo`
--
ALTER TABLE `ngo`
  ADD CONSTRAINT `ngo_ibfk_1` FOREIGN KEY (`zipid`) REFERENCES `zip` (`zipid`) ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `master` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`ngoid`) REFERENCES `ngo` (`ngoid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  ADD CONSTRAINT `staff_attendance_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `master` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
