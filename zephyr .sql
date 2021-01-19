-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 02:41 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zephyr`
--

-- --------------------------------------------------------

--
-- Table structure for table `cguest`
--

CREATE TABLE `cguest` (
  `c_id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `p_number` varchar(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cguest`
--

INSERT INTO `cguest` (`c_id`, `name`, `gender`, `p_number`, `mail`, `link`) VALUES
(1, 'Mrs.Lakshmi', 'M', '1234567890', 'jagguvc@gmail.com', 'https://www.linkedin.com/in/mamidala-jagadesh-kumar-76b090146/?originalSubdomain=in'),
(2, 'M Jagdish Kumar', 'M', '1234567890', 'jagguvc@gmail.com', 'https://www.linkedin.com/in/mamidala-jagadesh-kumar-76b090146/');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(6) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `begin_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `first_prize` int(11) NOT NULL,
  `second_prize` int(11) NOT NULL,
  `third_prize` int(11) NOT NULL,
  `venue_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `type`, `category`, `begin_date`, `end_date`, `begin_time`, `end_time`, `first_prize`, `second_prize`, `third_prize`, `venue_id`) VALUES
(1, 'nataraj', 'COMPETITION-SOLO', 'DANCE', '2020-07-31', '2020-07-31', '09:30', '10:30', 100, 50, 25, 7),
(2, 'nartaki', 'COMPETITION-GROUP', 'DANCE', '2020-08-01', '2020-08-01', '10:30', '11:30', 100, 50, 25, 7),
(3, 'gayak', 'COMPETITION-SOLO', 'MUSIC', '2020-08-02', '2020-08-02', '11:30', '12:30', 100, 50, 25, 8),
(4, 'ensemble', 'COMPETITION-GROUP', 'MUSIC', '2020-07-31', '2020-07-31', '12:30', '13:30', 100, 50, 25, 10),
(5, 'quiz', 'COMPETITION-SOLO', 'LITERARY', '2020-08-01', '2020-08-01', '13:30', '14:30', 100, 50, 25, 11),
(6, 'vartalap', 'COMPETITION-GROUP', 'LITERARY', '2020-08-02', '2020-08-02', '14:30', '15:30', 100, 50, 25, 9),
(8, 'nayak', 'COMPETITION-SOLO', 'DRAMA', '2020-07-31', '2020-07-31', '15:30', '16:30', 100, 50, 25, 8),
(9, 'chupe rustom', 'COMPETITION-GROUP', 'DRAMA', '2020-08-01', '2020-08-01', '16:30', '17:30', 100, 50, 25, 7);

-- --------------------------------------------------------

--
-- Table structure for table `guestedby`
--

CREATE TABLE `guestedby` (
  `event_id` int(6) NOT NULL,
  `c_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestedby`
--

INSERT INTO `guestedby` (`event_id`, `c_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `m_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `e_id` int(3) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` int(1) NOT NULL,
  `p_number` varchar(12) NOT NULL,
  `email_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`m_id`, `name`, `gender`, `e_id`, `branch`, `year`, `p_number`, `email_id`) VALUES
(1, 'Daneshwari kan', 'F', 5, 'CSE', 3, '9876543211', 'dan@gmail.com'),
(3, 'Kushal', 'M', 8, 'CSE', 3, '1234567890', 'kp@gmail.com'),
(4, 'Mansi Maholia', 'F', 1, 'CSE', 3, '123456788', 'mansi@gmail.com'),
(5, 'Abhishekh Gautam', 'M', 2, 'CSE', 3, '123456789', 'abhi@gmail.com'),
(6, 'Ishan Kumar', 'M', 6, 'ECE', 2, '123456789', 'ishan@gmail.com'),
(7, 'Shivam Jha', 'M', 3, 'CSE', 3, '123456789', 'jha@gmail.com'),
(8, 'Aniket', 'M', 4, 'ECE', 3, '12345665432', 'aniket@gmail.com'),
(9, 'Devashish', 'M', 9, 'CSE', 3, '1234554321', 'dev@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `p_id` int(6) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `ccity` varchar(20) NOT NULL,
  `cstate` varchar(20) NOT NULL,
  `course` varchar(25) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `vkey` varchar(45) NOT NULL,
  `verified` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`p_id`, `fname`, `mname`, `lname`, `gender`, `cname`, `ccity`, `cstate`, `course`, `emailid`, `pnumber`, `password`, `vkey`, `verified`) VALUES
(3, 'ritika', ' h ', ' jha ', ' femal', ' JNU ', ' DElhi ', ' Delhi ', '  btech ', ' 08ritika ', ' 967246797', ' 08012001 ', '', 1),
(4, 'ritika', 'r', 'jha', 'female', 'jnu', 'newdelhi', 'delhi', 'btech', '08ritikajha@gmail.com', '9672467976', '08012001', '', 1),
(5, '.dan.', '.dan.', '.kankanwadi.', '.femal', '.jnu.', '.Delhi.', '.Delhi.', '.btech.', '.08ritikajha@gmail.com.', '.12345.', '.1234567.', '', 1),
(6, '.dan.', '.dan.', '.kankanwadi.', '.femal', '.jnu.', '.Delhi.', '.Delhi.', '.btech.', '.08ritikajha@gmail.com.', '.12345.', '.1234567.', '', 1),
(7, '.dan.', '.dan.', '.kankanwadi.', '.femal', '.jnu.', '.Delhi.', '.Delhi.', '.btech.', '.08ritikajha@gmail.com.', '.12345.', '.1234567.', '', 1),
(8, '.dan.', '..', '.kankanwadi.', '.femal', '.fgkjvlg.', '.Delhi.', '.Himachal Pradesh.', '.btech.', '.08ritikajha@gmail.com.', '.1234567.', '.234.', '', 1),
(9, '.kushal.', '..', '.poddar.', '.male.', '.fgkjvlg.', '.rvjrk.', '.Madhya Pradesh.', '.btech.', '.08ritikajha@gmail.com.', '.53656874.', '.123456789.', '', 1),
(10, '.manali.', '..', '.bheel.', '.femal', '.jnu.', '.Delhi.', '.Jharkhand.', '.btech.', '.manalibheel@gmail.com.', '.123456789', '.2345678.', '', 1),
(12, 'jayant', '', 'jha', 'male', 'jecrc', 'jaipur', 'Rajasthan', 'btech', 'jayantjha@gmail.com', '12345678', '1234567', '', 1),
(14, 'dfgh', '', 'qwertgh', 'female', 'xcvbnm', 'xcvbn', 'Manipur', 'mtech', 'ertg@mn.com', '12345', '1234567', '', 1),
(15, 'anita', '', 'jha', 'female', 'jnu', 'Delhi', 'Karnataka', 'btech', 'anita@gmail.com', '1234567', '1234567', '', 1),
(17, 'samtha', 'k', 'kancharla', 'Female', 'jnu', 'Jaipur', 'Delhi', 'B.Tech', 'sam@gmail.com', '12345', '', '', 1),
(21, 'Rohan', '', 'Kumar', 'male', 'jnu', 'Jaipur', 'Delhi', 'B.Tech', 'rk221017@gmail.com', '987654321', 'ritikajha', '', 1),
(22, 'seeta', '', '', '', '', '', '', '', 'seeta@gmail.com', '', '123', '', 1),
(23, 'geeto', '', '', '', '', '', '', '', 'geeto@gmail.com', '', '123', '', 1),
(24, 'zara', '', '', '', '', '', '', '', 'zara@gmail.com', '', '123', '', 1),
(25, 'oi', '', '', '', '', '', '', '', 'oi@gmail.com', '', '123', 'fcfa048908843784678e2e55f5169185', 0),
(26, '', '', '', 'Male', '', 'Jaipur', 'Delhi', 'B.Tech', '', '', '', '', 0),
(27, 'Ayushi', '', 'sharma', 'Female', 'JECRC', 'Jaipur', 'Rajasthan', 'B.Tech', 'ayushi@gmail.com', '123457890', '123', '', 0),
(28, 'manan', '', 'aggarwal', 'Male', 'PTC', 'Jaipur', 'Rajasthan', 'B.Tech', 'manan@gmail.com', '1234567890', '123', '', 0),
(31, 'Raj', 'Kumar', 'Sharma', 'Male', 'DTU', 'New Delhi', 'Delhi', 'B.Tech', 'raj@gmail.com', '1234567890', '123', '', 0),
(32, 'Priya', '', 'Jha', 'Female', 'IGDTUW', 'New Delhi', 'Delhi', 'B.Tech', 'priya@gmail.com', '1234567890', '123', '', 0),
(33, 'Ajay', '', 'Meena', 'Male', 'JECRC', 'jaipur', 'Rajasthan', 'M.Tech', 'ajay@gmail.com', '1234567890', '123', '', 0),
(34, 'Shweata', '', 'Mishra', 'Female', 'BU', 'Mumbai', 'Maharashtra', 'BA/MA', 'shweata@gmail.com', '1234567890', '123', '', 0),
(35, 'Rekha', 'K', 'Gyani', 'Female', 'DTU', 'New Delhi', 'Delhi', 'B.Tech', 'rekha@gmail.com', '1234567890', '123', '', 0),
(36, 'Paul', 'Jew', 'Antony', 'Male', 'NSIT', 'New Delhi', 'Delhi', 'B.Tech', 'paul@gmail.com', '1234567890', '123', '', 0),
(37, 'Aasha', '', 'Singh', 'Female', 'JECRC', 'jaipur', 'Rajasthan', 'M.Tech', 'aasha@gmail.com', '1234567890', '123', '', 0),
(38, 'Saurabh', '', 'Jaani', 'Male', 'BU', 'Mumbai', 'Maharashtra', 'BA/MA', 'jaani@gmail.com', '1234567890', '123', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `S.NO` int(11) NOT NULL,
  `p_id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participation`
--

INSERT INTO `participation` (`S.NO`, `p_id`, `event_id`) VALUES
(6, 4, 8),
(10, 21, 3),
(17, 31, 1),
(18, 32, 3),
(19, 34, 8),
(20, 33, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sponseredby`
--

CREATE TABLE `sponseredby` (
  `event_id` int(6) NOT NULL,
  `s_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponseredby`
--

INSERT INTO `sponseredby` (`event_id`, `s_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `s_id` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Amount` int(10) NOT NULL,
  `grade` varchar(1) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `acc_n` varchar(20) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `p_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`s_id`, `name`, `Amount`, `grade`, `mail`, `acc_n`, `r_name`, `p_number`) VALUES
(3, 'google', 10000, 'D', 'google@gmail.com', 'R324234', 'Jhon', '1234567890'),
(4, 'facebook', 500, 'D', 'fb@gmail.com', 'SBI6550IJ', 'simon', '1234567890'),
(5, 'JIO', 10000, 'P', 'ambani@modi.com', '12345RG', 'Neeta Ambani ', '1234567841'),
(6, 'TATA', 4000, 'P', 'tata@gmail.com', '12we3456', 'ANITA', '1234567889');

-- --------------------------------------------------------

--
-- Table structure for table `t_participation`
--

CREATE TABLE `t_participation` (
  `id` int(6) NOT NULL,
  `p_id` int(6) NOT NULL,
  `t_id` varchar(20) NOT NULL,
  `e_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_participation`
--

INSERT INTO `t_participation` (`id`, `p_id`, `t_id`, `e_id`) VALUES
(3, 15, 'qwerty', 1),
(5, 14, 'asdf', 1),
(6, 15, 'asdf', 1),
(18, 21, 'hackjnu', 1),
(20, 12, 'hackjnu', 1),
(21, 21, 'duo', 1),
(23, 12, 'duo', 1),
(25, 21, 'roorkee', 1),
(27, 21, 'roorkee', 1),
(31, 21, 'jha', 5),
(33, 31, 'teamR', 2),
(34, 35, 'teamR', 2),
(35, 32, 'teamP', 4),
(36, 36, 'teamP', 4),
(37, 33, 'teamA', 9),
(38, 37, 'teamA', 9),
(39, 34, 'teamS', 6),
(40, 38, 'teamS', 6);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `v_id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `capacity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`v_id`, `name`, `capacity`) VALUES
(7, 'Auditorium 1,Convention Centre,JNU', 300),
(8, 'Auditorium 2,Convention Centre,JNU', 200),
(9, 'Lecture hall,Convention Centre,JNU', 100),
(10, 'Lawn,Convention Centre,JNU', 300),
(11, 'Seminar room,SE,JNU', 75),
(12, 'Stadium,JNU', 600);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `v` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `v`) VALUES
(1, 139);

-- --------------------------------------------------------

--
-- Table structure for table `volunteeredby`
--

CREATE TABLE `volunteeredby` (
  `event_id` int(6) NOT NULL,
  `v_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteeredby`
--

INSERT INTO `volunteeredby` (`event_id`, `v_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `v_id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(8) NOT NULL,
  `year` int(1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`v_id`, `name`, `branch`, `year`, `gender`, `email`, `phone_no`) VALUES
(1, 'Ritika Jha', 'CSE', 3, 'F', 'qwerty@gmail.com', '1234567890'),
(3, 'Raunak Jha', 'CSE', 3, 'M', 'ray@gmail.com', '1234567890'),
(4, 'rahul kumar', 'CSE', 3, 'M', 'rahul@gmail.com', '1234567890'),
(6, 'Anshu Sharma', 'ECE', 2, 'M', 'anshu@gmail.com', '987654308'),
(7, 'Mansi Maholia', 'CSE', 3, 'F', 'mansi@gmail.com', '1234567787'),
(8, 'neelesh', 'CSE', 1, 'M', 'neel@gmail.com', '1234567862');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cguest`
--
ALTER TABLE `cguest`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `venueevent` (`venue_id`);

--
-- Indexes for table `guestedby`
--
ALTER TABLE `guestedby`
  ADD KEY `cevent` (`event_id`),
  ADD KEY `cguest` (`c_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `mevent` (`e_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`S.NO`),
  ADD KEY `fk1_p_id` (`p_id`),
  ADD KEY `fk2_event_id` (`event_id`);

--
-- Indexes for table `sponseredby`
--
ALTER TABLE `sponseredby`
  ADD KEY `sponseredevent` (`event_id`),
  ADD KEY `sponseredby` (`s_id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `t_participation`
--
ALTER TABLE `t_participation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1_tp` (`p_id`),
  ADD KEY `fk2_tp` (`e_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteeredby`
--
ALTER TABLE `volunteeredby`
  ADD KEY `volevent` (`event_id`),
  ADD KEY `volvol` (`v_id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cguest`
--
ALTER TABLE `cguest`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `p_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `participation`
--
ALTER TABLE `participation`
  MODIFY `S.NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `s_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_participation`
--
ALTER TABLE `t_participation`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `v_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `v_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `venueevent` FOREIGN KEY (`venue_id`) REFERENCES `venue` (`v_id`) ON DELETE SET NULL;

--
-- Constraints for table `guestedby`
--
ALTER TABLE `guestedby`
  ADD CONSTRAINT `cevent` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cguest` FOREIGN KEY (`c_id`) REFERENCES `cguest` (`c_id`) ON DELETE CASCADE;

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `mevent` FOREIGN KEY (`e_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE;

--
-- Constraints for table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `fk1_p_id` FOREIGN KEY (`p_id`) REFERENCES `participants` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_event_id` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sponseredby`
--
ALTER TABLE `sponseredby`
  ADD CONSTRAINT `sponseredby` FOREIGN KEY (`s_id`) REFERENCES `sponsor` (`s_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sponseredevent` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE;

--
-- Constraints for table `t_participation`
--
ALTER TABLE `t_participation`
  ADD CONSTRAINT `fk1_tp` FOREIGN KEY (`p_id`) REFERENCES `participants` (`p_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk2_tp` FOREIGN KEY (`e_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `volunteeredby`
--
ALTER TABLE `volunteeredby`
  ADD CONSTRAINT `volevent` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `volvol` FOREIGN KEY (`v_id`) REFERENCES `volunteers` (`v_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
