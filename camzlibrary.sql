-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 02:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `camzlibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bookid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `bookDesc` varchar(1000) NOT NULL,
  `pubdate` date NOT NULL,
  `availability` varchar(5) NOT NULL,
  `copies` int(3) NOT NULL,
  `borrowDays` int(2) NOT NULL,
  PRIMARY KEY (`bookid`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `title`, `author`, `bookDesc`, `pubdate`, `availability`, `copies`, `borrowDays`) VALUES
(1, 'abc', 'abcdef', 'hello world!', '2015-02-04', 'no', 4, 5),
(3, 'q', 'q', 'hello universe!', '2012-01-01', 'no', 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `borrowlog`
--

CREATE TABLE IF NOT EXISTS `borrowlog` (
  `transID` int(15) NOT NULL AUTO_INCREMENT,
  `userid` varchar(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `duedate` datetime NOT NULL,
  PRIMARY KEY (`transID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `borrowlog`
--

INSERT INTO `borrowlog` (`transID`, `userid`, `bookid`, `duedate`) VALUES
(10, '2', 3, '2015-04-04 19:56:12'),
(11, '6', 1, '2015-04-04 19:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `email`, `usertype`) VALUES
(1, 'admin', '1a1dc91c907325c69271ddf0c944bc72', 'admin', 'admin', '1234 admin st.', '12345678901', '', 'admin'),
(2, 'camz', '1a1dc91c907325c69271ddf0c944bc72', 'camille', 'alcantara', '1234', '12345678901', '', 'user'),
(3, 'jade', '1a1dc91c907325c69271ddf0c944bc72', 'jadeadasdas', 'lname', 'qweq', '123', 'emaildasdasdas', 'librarian'),
(6, 'b', '1a1dc91c907325c69271ddf0c944bc72', 'b', 'b', 'b', 'b', 'b', 'user'),
(7, 'd', '1a1dc91c907325c69271ddf0c944bc72', 'd', 'd', 'd', 'd', 'd', ''),
(9, 'e', '1a1dc91c907325c69271ddf0c944bc72', 'e', 'e', 'e', 'e', 'e', ''),
(12, 'f', '1a1dc91c907325c69271ddf0c944bc72', 'f', 'f', 'f', 'f', 'f', ''),
(13, 'w', '1a1dc91c907325c69271ddf0c944bc72', 'wewew', 'w', 'w', 'w', 'w', ''),
(14, 'c', '1a1dc91c907325c69271ddf0c944bc72', 'c', 'c', 'c', '1', 'c', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
