-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2015 at 10:31 AM
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
  `pubdate` date NOT NULL,
  `availability` varchar(5) NOT NULL,
  `copies` int(3) NOT NULL,
  PRIMARY KEY (`bookid`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `title`, `author`, `pubdate`, `availability`, `copies`) VALUES
(1, 'abc', 'abcdef', '2015-02-04', 'yes', 4),
(3, 'q', 'q', '2012-01-01', 'yes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `borrowlog`
--

CREATE TABLE IF NOT EXISTS `borrowlog` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` varchar(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookid` int(11) NOT NULL,
  `booktitle` varchar(30) NOT NULL,
  `duedate` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `fine` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `borrowlog`
--

INSERT INTO `borrowlog` (`id`, `userid`, `username`, `bookid`, `booktitle`, `duedate`, `status`, `fine`) VALUES
(1, '2', 'camz', 1, 'abc', '2015-02-04', 'overdue', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `email`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '1234 admin st.', '12345678901', '', 'admin'),
(2, 'camz', 'camz', 'camille', 'alcantara', '1234', '12345678901', '', 'user'),
(3, 'jade', 'jade', 'jadeadasdas', 'lname', 'qweq', '123', 'emaildasdasdas', 'librarian'),
(6, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'user'),
(7, 'd', 'pass', 'd', 'd', 'd', 'd', 'd', ''),
(9, 'e', 'pass', 'e', 'e', 'e', 'e', 'e', ''),
(12, 'f', 'pass', 'f', 'f', 'f', 'f', 'f', ''),
(13, 'w', 'pass', 'wewew', 'w', 'w', 'w', 'w', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
