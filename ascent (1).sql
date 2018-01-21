-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 01:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ascent`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid_table`
--

CREATE TABLE `bid_table` (
  `amount` int(11) NOT NULL,
  `fk_job_id` int(11) NOT NULL,
  `fk_email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_table`
--

INSERT INTO `bid_table` (`amount`, `fk_job_id`, `fk_email_id`) VALUES
(10000, 1, 'kumarrajwani1811@gmail.co'),
(10000, 4, 'kumarrajwani18@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `fk_uid` int(11) NOT NULL,
  `industry_name` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `established` varchar(20) NOT NULL,
  `company_detail` varchar(250) DEFAULT NULL,
  `work` varchar(30) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`fk_uid`, `industry_name`, `location`, `established`, `company_detail`, `work`, `link`) VALUES
(0, 'kumar pvt ltd', 'ahmedabad-380001,gujarat', '1997', 'i don\'t know now,but i tell u later.', 'data analyst', 'www.not.com'),
(6, 'ascent', 'ahmedabad,gujarat', '1997', 'we are best in website design.', 'app devloper', 'www.ascent.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `feedback_id` int(11) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `fk_job_id` int(10) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `free_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_table`
--

CREATE TABLE `freelancer_table` (
  `fk_uid` int(11) NOT NULL,
  `higher_degree` varchar(50) DEFAULT NULL,
  `job_experience` varchar(100) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `social_pages` varchar(100) DEFAULT NULL,
  `pdf` varchar(100) DEFAULT NULL,
  `fk_job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_table`
--

INSERT INTO `freelancer_table` (`fk_uid`, `higher_degree`, `job_experience`, `skills`, `social_pages`, `pdf`, `fk_job_id`) VALUES
(0, 'too much,10 jun 2010,10 aug 2018', 'web designer and devloper,10 jun 2010,10 aug 2018', 'mysql,php,angular', 'www.kumar.com', 'IMG-20170224-WA0006.jpg', 0),
(6, 'msc ca&it,10 jun 2010,10 aug 2013', 'web designer,10 jun 2010,10 aug 2013', 'css,html', 'www.not found.com', 'IMG_20170223_192216.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hirejob_id` int(11) NOT NULL,
  `hireuid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hirejob_id`, `hireuid`) VALUES
(4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobcat_table`
--

CREATE TABLE `jobcat_table` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobcat_table`
--

INSERT INTO `jobcat_table` (`cat_id`, `cat_name`) VALUES
(3, 'app devloper'),
(5, 'back-end devloper'),
(9, 'data analyst'),
(7, 'database administrator'),
(4, 'front-end devloper'),
(8, 'network administrator'),
(6, 'system administrator'),
(2, 'website devloper');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost_table`
--

CREATE TABLE `jobpost_table` (
  `fk_uid` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `job_experience` varchar(50) DEFAULT NULL,
  `budget` int(10) NOT NULL,
  `extra_details` varchar(1000) DEFAULT NULL,
  `dead_line` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobpost_table`
--

INSERT INTO `jobpost_table` (`fk_uid`, `job_id`, `title`, `category`, `job_experience`, `budget`, `extra_details`, `dead_line`) VALUES
(6, 4, 'fiver', 'database administrator', '1 year', 10000, 'we want best database administrator.', '2 months'),
(0, 5, 'ascent', 'data analyst', '2 year', 20000, 'this is new website .', '2 months');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `uid` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(200) NOT NULL,
  `token` varchar(15) NOT NULL,
  `verify` int(11) DEFAULT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`uid`, `email_id`, `uname`, `password`, `contact_no`, `gender`, `image`, `token`, `verify`, `user_type`) VALUES
(1, 'kumar123@gmail.com', 'Kumar', 'kumar123', 8888811111, 'Male', 'images nathi', 'dasd', 1, 0),
(6, 'kumarrajwani1811@gmail.co', 'kumar', 'kumar109', 8141873476, 'male', '../image/IMG_20170223_192258.jpg', 'fc8bdffcd7', 1, 1),
(0, 'kumarrajwani18@gmail.com', 'ks', 'kumar109', 8765456765, 'male', '../image/IMG-20170224-WA0012.jpg', 'ca49dcab76', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wish_table`
--

CREATE TABLE `wish_table` (
  `wishlist_id` int(11) NOT NULL,
  `fk_job_id` int(10) NOT NULL,
  `fk_email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish_table`
--

INSERT INTO `wish_table` (`wishlist_id`, `fk_job_id`, `fk_email_id`) VALUES
(5, 5, 'kumarrajwani1811@gmail.co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`fk_uid`);

--
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `freelancer_table`
--
ALTER TABLE `freelancer_table`
  ADD PRIMARY KEY (`fk_uid`);

--
-- Indexes for table `jobcat_table`
--
ALTER TABLE `jobcat_table`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `jobpost_table`
--
ALTER TABLE `jobpost_table`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `UNIQUE` (`uid`);

--
-- Indexes for table `wish_table`
--
ALTER TABLE `wish_table`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobcat_table`
--
ALTER TABLE `jobcat_table`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jobpost_table`
--
ALTER TABLE `jobpost_table`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `wish_table`
--
ALTER TABLE `wish_table`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
