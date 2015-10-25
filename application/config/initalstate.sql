-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2015 at 10:07 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservationId` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `roomId` int(11) NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `purpose` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservationId`, `firstName`, `email`, `roomId`, `startTime`, `endTime`, `purpose`) VALUES
(1, 101, 'Sandeep', 'sandeep@usc.edu', 1, '2015-08-21 09:00:00', '2015-08-21 11:30:00', 'Study'),
(2, 102, 'Girish', 'girish@usc.edu', 1, '2015-08-21 12:00:00', '2015-08-21 15:30:00', 'Student worker project round'),
(3, 103, 'Anoop', 'anoop@usc.edu', 2, '2015-08-21 08:00:00', '2015-08-21 12:30:00', 'Seminar'),
(4, 104, 'Tushar', 'tushar@usc.edu', 2, '2015-08-21 14:00:00', '2015-08-21 21:00:00', 'Project discussion'),
(5, 105, 'Azeem', 'azeem@usc.edu', 3, '2015-08-21 10:00:00', '2015-08-21 14:00:00', 'Study'),
(6, 106, 'Warren', 'warren@usc.edu', 5, '2015-08-21 10:15:00', '2015-08-21 13:30:00', 'Seminar'),
(7, 107, 'Sandeep', 'sandeep@usc.edu', 6, '2015-08-20 08:00:00', '2015-08-20 11:30:00', 'Study'),
(8, 108, 'Girish', 'girish@usc.edu', 7, '2015-08-20 12:00:00', '2015-08-20 15:30:00', 'Studies'),
(9, 109, 'Anoop', 'anoop@usc.edu', 8, '2015-08-20 08:00:00', '2015-08-20 12:30:00', 'Seminar'),
(10, 110, 'Tushar', 'tushar@usc.edu', 9, '2015-08-20 15:00:00', '2015-08-20 21:00:00', 'Project work'),
(11, 111, 'Azeem', 'azeem@usc.edu', 10, '2015-08-20 10:00:00', '2015-08-20 14:00:00', 'Study');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `roomName` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomId`, `roomName`) VALUES
(1, 1, 'SAL 101'),
(2, 2, 'SAL 102'),
(3, 3, 'SAL 103'),
(4, 4, 'GFS 301'),
(5, 5, 'GFS 106'),
(6, 6, 'GFS 315'),
(7, 7, 'SAL 201'),
(8, 8, 'SGM 101'),
(9, 9, 'SGM 123'),
(10, 10, 'SGM 124');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;