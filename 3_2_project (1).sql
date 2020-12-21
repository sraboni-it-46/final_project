-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 12:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `3_2_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` varchar(100) NOT NULL,
  `course_title` varchar(500) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_title`, `code`) VALUES
('IT_3200', 'Final_Project', '3200'),
('IT_3201', 'Software_Engineering', '3201'),
('IT_3202', 'Software_Engineering_Lab', '3202'),
('IT_3203', 'Computer_Graphics', '3203'),
('IT_3204', 'Conputer_Graphics_Lab', '3204'),
('IT_3205', 'Web_Technology', '3205'),
('IT_3206', 'Web_Technology_Lab', '3206'),
('IT_3207', 'Microprocessor_and_interfecing', '3207'),
('IT_3208', 'Microprocessor_and_interfecing_Lab', '3208'),
('IT_3209', 'Bioinformatics', '3209');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `id` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `marks` int(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `duration` time(6) NOT NULL,
  `starting_datetime` datetime(6) NOT NULL,
  `question_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `title`, `course_id`, `marks`, `teacher_id`, `duration`, `starting_datetime`, `question_type`, `status`) VALUES
('1', 'Tutorial', 'IT-3205', 20, 'T_222', '11:00:00.000000', '2020-12-22 10:15:00.000000', 'Theory', 'Initial');

-- --------------------------------------------------------

--
-- Table structure for table `exam_qouestion`
--

CREATE TABLE IF NOT EXISTS `exam_qouestion` (
  `id` varchar(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `text` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`text`, `name`, `email`) VALUES
('abcd', 'Aminul Islam Shanto ', 'aminulis1998@gmail.com'),
('xyz', 'Sraboni Ghosh', 'sraboniit08@gmail.com'),
('xyz', 'Sraboni Ghosh', 'sraboniit08@gmail.com'),
('xyz', 'Sraboni Ghosh', 'sraboniit08@gmail.com'),
('Meassage', 'Adiba Masud', 'adiba08@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `question_type` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE IF NOT EXISTS `question_options` (
`id` int(100) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `option` varchar(100) NOT NULL,
  `is_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id` int(100) NOT NULL,
  `name` char(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `batch`, `email`, `user_id`, `password`) VALUES
(3, 'Adiba Masud', '46th', 'adiba.stu2016@juniv.edu', '1976', '461976'),
(5, 'Maysha Fahmida Bristy', '46th', 'maysha.stu2016@juniv.edu', '1980', '461980'),
(1, 'Sraboni Ghosh Joya', '46th', 'sraboni.stu2016@juniv.edu', '1983', '461983'),
(9, 'Jarin Tasnim Ritu', '46th', 'jarin.stu2016@juniv.edu', '1987', '461987');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`id` int(100) NOT NULL,
  `name` char(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `teacher_id`, `email`, `password`) VALUES
(1, 'Manan Binth Taj Noor', 'IT_1111', 'manan@juniv.edu', 'manan1111'),
(2, 'Nusrat Zerin Zenia', 'IT_2222', 'nusrat@juniv.edu', 'nusrat2222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_qouestion`
--
ALTER TABLE `exam_qouestion`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
 ADD PRIMARY KEY (`question_id`), ADD KEY `id` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`user_id`), ADD KEY `id` (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`teacher_id`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
