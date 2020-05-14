-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 07:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `class_section`
--

CREATE TABLE `class_section` (
  `class_section_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `class_no` int(11) DEFAULT NULL,
  `section` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_section`
--

INSERT INTO `class_section` (`class_section_id`, `class_id`, `class_no`, `section`) VALUES
(1, 1, 1, 'A'),
(2, 1, 1, 'B'),
(3, 1, 1, 'C'),
(4, 2, 2, 'A'),
(5, 3, 3, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `svalue`
--

CREATE TABLE `svalue` (
  `sid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(40) DEFAULT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `userid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `svalue`
--

INSERT INTO `svalue` (`sid`, `firstname`, `lastname`, `email`, `number`, `address`, `password`, `class`, `section`, `image`, `userid`) VALUES
(1, 'srijhg', 'gujg', 'jh@gm', NULL, 'vjhjhk', 'k1234567', 0, '', '', '2'),
(2, 'srijani', 'sen', 's@g', NULL, 'hdclaj', 's1234567', 0, '', '', '2'),
(3, 'sujan', 'das', 'k@gmail', NULL, 'ghh', 'k1234567', 1, '', '', 'STU78455'),
(4, 'bjbj', 'm,', 'j@hu', NULL, 'jbjn', 'sri13R', 1, 'A', '', '2'),
(5, 'd', 'das', 'd@g', NULL, 'da', 'd1234567', 1, 'A', '', '2'),
(6, 'sri', 'se', 'sri@g', '7989730848', 'nagen', 'Sri123', 2, 'A', '', 'STU7989730848'),
(7, 'rijul', 'gupta', 'r@g', '9876543456', 'e', '8afe736e674506c7d45f3c9ddd6cfa9d', 1, 'B', '', '2'),
(8, 'rik', 'da', 'rik@gmail', '1234567890', 'r', '8afe736e674506c7d45f3c9ddd6cfa9d', 2, 'A', '', 'nu1'),
(9, 'final', 'uffarparchina', 'f@g', '8420', 'e-66', '708f55899bb45390347f528ea08003fe', 1, 'C', '', 'STU8420');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_section`
--
ALTER TABLE `class_section`
  ADD PRIMARY KEY (`class_section_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `svalue`
--
ALTER TABLE `svalue`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `svalue`
--
ALTER TABLE `svalue`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_section`
--
ALTER TABLE `class_section`
  ADD CONSTRAINT `class_section_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
