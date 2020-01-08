-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 02:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discussion`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `loginid` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`loginid`, `pass`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cmnt`
--

CREATE TABLE `cmnt` (
  `sno` int(11) NOT NULL,
  `topicno` varchar(100) NOT NULL,
  `cmntby` varchar(100) NOT NULL,
  `cmnttext` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmnt`
--

INSERT INTO `cmnt` (`sno`, `topicno`, `cmntby`, `cmnttext`, `date`) VALUES
(1, '4', '123', 'hello', '2017-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `sno` bigint(20) NOT NULL,
  `postedby` varchar(100) NOT NULL,
  `posteddate` date NOT NULL,
  `topic` text NOT NULL,
  `branch` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`sno`, `postedby`, `posteddate`, `topic`, `branch`) VALUES
(4, '2', '2017-11-29', ' C pro', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `sno` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`fname`, `lname`, `email`, `contact`, `gender`, `pass`, `image`, `sno`) VALUES
('sunil', 'rai', 'sunil_02@live.com', '1234567890', 'MALE', '123456', '1373514765Winter.jpg', 2),
('sonu', 'sahu', 'aaa@aaa.aaa', '9090909090', 'male', '123456', 'A.jpg', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmnt`
--
ALTER TABLE `cmnt`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmnt`
--
ALTER TABLE `cmnt`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
