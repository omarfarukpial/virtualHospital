-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 07:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthinformatics`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `tcost` double NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `name`, `phone`, `tcost`, `location`) VALUES
(1, 'Ambulance 1', '0135026436', 500, 'Jashore');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentrequest`
--

CREATE TABLE `appointmentrequest` (
  `appointmentrequest_id` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `symptom` varchar(50) NOT NULL,
  `problem` longtext NOT NULL,
  `time` datetime NOT NULL,
  `appointmenttime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentrequest`
--

INSERT INTO `appointmentrequest` (`appointmentrequest_id`, `doctorid`, `userid`, `symptom`, `problem`, `time`, `appointmenttime`, `status`) VALUES
(1, 1, 2, 'Cardiology', 'I am feeling chest pain badly on left side.', '2022-09-26 11:21:38', '2022-09-30 02:41:00', 'accepted'),
(2, 1, 2, 'Cardiology', 'Feeling chest pain.', '2022-09-27 11:51:27', '2022-09-29 12:00:00', 'accepted'),
(4, 1, 1, 'Cardiology', 'Feeling bad in left chest pain. ', '2022-09-27 12:19:24', '2022-10-01 16:21:00', 'accepted'),
(5, 1, 1, 'Cardiology', '', '2022-09-27 01:08:44', '2022-09-27 13:12:00', 'accepted'),
(6, 1, 0, '', '', '2022-09-27 01:08:53', '2022-09-27 13:08:53', 'pending'),
(7, 1, 1, 'Cardiology', 'Feeling chest pain', '2022-09-28 12:11:59', '2022-10-01 12:12:00', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(11) NOT NULL,
  `bloodbankname` varchar(50) NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `bloodbankname`, `hotline`, `location`) VALUES
(1, 'JUST Blood Bank Aid', '01501011010', 'Jashore'),
(2, 'Red Crisent ', '01523623625', 'Khulna'),
(3, 'Khulna Sadar hospital', '01925364256', 'Khulna'),
(4, 'Dhaka Blood Bank', '01932563144', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `id` int(11) NOT NULL,
  `clinicname` varchar(50) NOT NULL,
  `nbeds` int(11) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`id`, `clinicname`, `nbeds`, `location`) VALUES
(3, 'Clinic 1', 100, 'Dinajpur'),
(4, 'Fatema Clinic', 200, 'Jashore'),
(5, 'JUST Medical Center', 50, 'Jashore');

-- --------------------------------------------------------

--
-- Table structure for table `deptweight`
--

CREATE TABLE `deptweight` (
  `id` int(11) NOT NULL,
  `psymp` varchar(50) NOT NULL,
  `Cardiology` double NOT NULL,
  `Darmatology` double NOT NULL,
  `Orthopedics` double NOT NULL,
  `GM` double NOT NULL,
  `Gynecology` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deptweight`
--

INSERT INTO `deptweight` (`id`, `psymp`, `Cardiology`, `Darmatology`, `Orthopedics`, `GM`, `Gynecology`) VALUES
(1, 'Cardiology', 1, 0, 0, 0.8, 0),
(2, 'Darmatology', 0, 1, 0, 0.7, 0.9),
(3, 'Orthopedics', 0, 0, 1, 0.8, 0),
(4, 'GM', 0, 0, 0, 1, 0),
(5, 'Gynecology', 0, 0.9, 0, 0.8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `fees` double NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `phoneNumber`, `dob`, `gender`, `specialization`, `designation`, `fees`, `location`) VALUES
(1, 'Rakib Azad ', '01302302302', '1993-06-03', 'Male', 'Cardiology', 'Assistant Professor', 500, 'Dhaka'),
(2, 'Nabil Ahmed', '01605365626', '1989-05-01', 'Male', 'Gynecology', 'Professor', 1000, 'Khulna'),
(3, 'Tarek', '01921110986', '1999-03-13', 'Male', 'Cardiology', 'Designation', 500, 'Khulna'),
(4, 'Fariha', '01521114562', '1990-03-09', 'Female', 'Gynecology', 'Designation', 500, 'Rajshahi'),
(5, 'Riaj', '015214256352', '1996-01-02', 'Male', 'Gynecology', 'Designation', 750, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `locationweight`
--

CREATE TABLE `locationweight` (
  `id` int(11) NOT NULL,
  `plocation` varchar(50) NOT NULL,
  `Dhaka` double NOT NULL,
  `Khulna` double NOT NULL,
  `Rajshahi` double NOT NULL,
  `Chittagong` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locationweight`
--

INSERT INTO `locationweight` (`id`, `plocation`, `Dhaka`, `Khulna`, `Rajshahi`, `Chittagong`) VALUES
(1, 'Dhaka', 1, 0.55, 0.49, 0.49),
(2, 'Khulna', 0.55, 1, 0.46, 0.1),
(3, 'Rajshahi', 0.49, 0.46, 1, 0),
(4, 'Chittagong', 0.49, 0.1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `midcs`
--

CREATE TABLE `midcs` (
  `id` int(11) NOT NULL,
  `midcsname` varchar(50) NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobileclinic`
--

CREATE TABLE `mobileclinic` (
  `id` int(11) NOT NULL,
  `mobileclinicname` varchar(50) NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mods`
--

CREATE TABLE `mods` (
  `id` int(11) NOT NULL,
  `modsname` varchar(50) NOT NULL,
  `oxygenprice` double NOT NULL,
  `hotline` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `fee` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `name`, `phoneNumber`, `dob`, `gender`, `designation`, `location`, `fee`) VALUES
(1, 'Sabina Yesmin', '0192259634', '1996-04-03', 'Female', 'Nurse', 'Jashore', 200);

-- --------------------------------------------------------

--
-- Table structure for table `sds`
--

CREATE TABLE `sds` (
  `id` int(11) NOT NULL,
  `symptom` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phn` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `problem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sds`
--

INSERT INTO `sds` (`id`, `symptom`, `username`, `name`, `age`, `gender`, `phn`, `location`, `problem`) VALUES
(42, 'GM', '', 'Aftab', 19, 'Male', '01725345632', 'Khulna', ''),
(43, 'GM', '', 'Koli', 12, 'Female', '01563256325', 'Khulna', ''),
(44, 'Gynecology', '', 'Mita', 20, 'Female', '01701010101', 'Dhaka', ''),
(45, 'Orthopedics', '', 'Pial', 25, 'Male', '01725362541', 'Dhaka', ''),
(46, 'Cardiology', '', 'Pial', 35, 'Male', '+8801718451608', 'Jashore', '');

-- --------------------------------------------------------

--
-- Table structure for table `sdsmanage`
--

CREATE TABLE `sdsmanage` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phn` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `sdsinstances` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdsmanage`
--

INSERT INTO `sdsmanage` (`id`, `username`, `name`, `age`, `gender`, `phn`, `location`, `sdsinstances`) VALUES
(3, 'pial', 'Pial', 24, 'Male', '01718206845', 'Jashore', 'Clinic =2<br>Doctor =4<br>Nurse =1<br'),
(4, 'pial', 'Pial', 24, 'Male', '01718206845', 'Jashore', 'Clinic =2<br>Doctor =2<br>Nurse =1<br');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `docid` int(11) NOT NULL,
  `weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temptable`
--

CREATE TABLE `temptable` (
  `id` int(11) NOT NULL,
  `docid` int(11) NOT NULL,
  `weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temptable`
--

INSERT INTO `temptable` (`id`, `docid`, `weight`) VALUES
(1, 1, 5),
(2, 2, 1.1),
(3, 3, 4.1),
(4, 4, 0.98),
(5, 5, 0.98);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `name`, `age`, `gender`, `phone`, `location`) VALUES
(1, 'pial', 'Pial', 24, 'Male', '01718206845', 'Dhaka'),
(2, 'rashed', 'Rashed Khan', 22, 'Male', '01926543656', 'Khulna'),
(3, 'pranto', 'Pranto', 25, 'male', '0192112562', 'Dhaka'),
(4, 'fariha', 'Fariha', 32, 'female', '01779541669', 'Rajshahi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointmentrequest`
--
ALTER TABLE `appointmentrequest`
  ADD PRIMARY KEY (`appointmentrequest_id`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deptweight`
--
ALTER TABLE `deptweight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locationweight`
--
ALTER TABLE `locationweight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `midcs`
--
ALTER TABLE `midcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobileclinic`
--
ALTER TABLE `mobileclinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mods`
--
ALTER TABLE `mods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sds`
--
ALTER TABLE `sds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdsmanage`
--
ALTER TABLE `sdsmanage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temptable`
--
ALTER TABLE `temptable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointmentrequest`
--
ALTER TABLE `appointmentrequest`
  MODIFY `appointmentrequest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deptweight`
--
ALTER TABLE `deptweight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `locationweight`
--
ALTER TABLE `locationweight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `midcs`
--
ALTER TABLE `midcs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobileclinic`
--
ALTER TABLE `mobileclinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mods`
--
ALTER TABLE `mods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sds`
--
ALTER TABLE `sds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `sdsmanage`
--
ALTER TABLE `sdsmanage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temptable`
--
ALTER TABLE `temptable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
