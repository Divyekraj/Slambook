-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 06:47 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `slambook-2020`
--
CREATE DATABASE IF NOT EXISTS `slambook-2020` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `slambook-2020`;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chatid` int(11) NOT NULL AUTO_INCREMENT,
  `sender_userid` int(11) DEFAULT NULL,
  `reciever_userid` int(11) DEFAULT NULL,
  `message` text,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `sender_userid`, `reciever_userid`, `message`, `timestamp`, `status`) VALUES
(73, 2, 1, 'hii', '2020-04-02 03:37:56', 0),
(75, 1, 2, 'hello', '2020-04-02 03:40:55', 0),
(76, 2, 1, 'how are you', '2020-04-02 03:41:15', 0),
(77, 1, 2, 'I am Fine', '2020-04-02 03:41:33', 0),
(78, 1, 2, 'whats abaout you', '2020-04-02 03:41:43', 0),
(79, 2, 1, 'I am also Fime', '2020-04-02 03:42:06', 0),
(80, 2, 1, 'Have You Done with Dashboard design', '2020-04-02 03:42:26', 0),
(81, 1, 2, 'No Bro Not Yet .. But I Will Do within time', '2020-04-02 03:43:09', 0),
(82, 1, 2, 'dont worry', '2020-04-02 03:43:36', 0),
(83, 2, 1, 'Okay Bro', '2020-04-02 03:43:51', 0),
(84, 2, 3, 'hello soumira', '2020-04-02 03:44:07', 0),
(85, 3, 2, 'hii ganesh', '2020-04-02 03:45:02', 0),
(86, 2, 1, 'hii', '2020-04-02 03:56:27', 0),
(87, 2, 1, 'hello', '2020-04-02 03:57:51', 0),
(88, 1, 2, 'hii', '2020-04-02 03:58:42', 0),
(89, 1, 2, 'hii', '2020-04-02 04:01:59', 0),
(90, 1, 3, 'hiii', '2020-04-02 06:03:36', 0),
(91, 1, 3, 'srdtfghjkedfghnjmkdrftyuhijokawwsertfghjkdrftyguxdcfvgbhnkjrdtygbhnjxdygubnjdcfvgbhjnkdxtfyvgbhderfyguhitcfgh', '2020-04-02 06:03:56', 0),
(92, 2, 1, 'hello', '2020-04-02 06:10:38', 0),
(93, 1, 2, 'hello 123', '2020-04-02 06:10:54', 0),
(94, 2, 3, 'hello', '2020-04-02 06:11:37', 0),
(95, 3, 1, 'hello', '2020-04-02 06:13:13', 0),
(96, 1, 2, 'hi', '2020-04-02 06:39:06', 0),
(97, 1, 5, 'hello kartrina', '2020-04-02 13:33:51', 0),
(98, 1, 5, 'hello kartrina', '2020-04-02 13:33:51', 0),
(99, 5, 1, 'hii', '2020-04-02 13:43:47', 0),
(100, 5, 3, 'helo', '2020-04-02 13:43:58', 0),
(101, 2, 5, 'Hello', '2020-04-25 02:50:30', 0),
(102, 5, 2, 'Hii Ganesh', '2020-04-25 02:51:45', 0),
(103, 2, 5, 'How Are You', '2020-04-25 02:59:22', 0),
(104, 5, 2, 'I Am Fine', '2020-04-25 02:59:42', 0),
(105, 5, 2, 'Whats about You', '2020-04-25 02:59:51', 0),
(106, 2, 5, '<h1>Hello</h1>', '2020-04-25 03:00:27', 0),
(107, 5, 2, '<script> alert("Hello");</script>', '2020-04-25 03:01:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat_login_details`
--

CREATE TABLE IF NOT EXISTS `chat_login_details` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_typing` enum('no','yes') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE IF NOT EXISTS `chat_users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `current_session` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`userid`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
(1, 'Vishal', '123', 'user1.jpg', 0, 0),
(2, 'Ganesh', '123', 'user2.jpg', 0, 0),
(3, 'Soumitra', '123', 'user3.jpg', 0, 0),
(5, 'katrina', '123', 'user5.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `eventbook`
--

CREATE TABLE IF NOT EXISTS `eventbook` (
  `name` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `place` varchar(20) NOT NULL,
  `eventtype` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `eventdetail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventbook`
--

INSERT INTO `eventbook` (`name`, `email`, `mobileno`, `place`, `eventtype`, `college`, `eventdetail`) VALUES
('Hitesh', 'hitesh@gmail.com', '7986541230', 'Ratlam', 'Freshers', 'DYP', 'qwertyuioplkjhgfdsazxcvbnm'),
('Hitesh', 'hitesh@gmail.com', '7986541230', 'Ratlam', 'Freshers', 'DYP', 'qwertyuioplkjhgfdsazxcvbnm'),
('Hitesh', 'hitesh@gmail.com', '7986541230', 'Ratlam', 'Freshers', 'DYP', 'qwertyuioplkjhgfdsazxcvbnm'),
('Hitesh', 'hitesh@gmail.com', '7986541230', 'Ratlam', 'Freshers', 'DYP', 'qwertyuioplkjhgfdsazxcvbnm'),
('vishal', 'vishal@gmail.com', '98765412', 'jalgaon', 'nothing', 'DYP', 'ertyujhgfdrtyuikjhgty'),
('vishal', 'vishal@gmail.com', '98765412', 'jalgaon', 'nothing', 'DYP', 'ertyujhgfdrtyuikjhgty'),
('vishal', 'vishal@gmail.com', '98765412', 'jalgaon', 'nothing', 'DYP', 'ertyujhgfdrtyuikjhgty'),
('Hitesh', 'vishal@gmail.com', '98765412', 'jalgaon', 'Freshers', 'DYP', 'sdfghjk'),
('Hitesh', 'vishal@gmail.com', '98765412', 'jalgaon', 'Freshers', 'DYP', 'sdfghjk'),
('', '', '', '', '', '', ''),
('vishal surgade', 'vishalsurgade4@gmail.com', '880808080', 'jalgaon', 'training', 'D.Y.Patil ', 'Date:22///l');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `fname`, `lname`, `mail`, `password`, `profile`) VALUES
(1, 'ljklj', 'ljalkj', 'vakljfkl2@out.com', 'lkja', 'IMG-20191019-WA0023.jpg'),
(2, 'vishal ', 'surgade', 'vishalsurgade4@gmail.com', 'vishal', 'IMG-20191017-WA0016.jpg'),
(3, 'lajkldj', ';lkjalk', 'ss@gmail.com', 'a;k;', 'user.png'),
(4, 'vishl', 'lkaj', 'vish@gmail.com', 'lkja', 'user.png'),
(5, 'raja ', 'nat', 'raja@gmail.com', 'raja', 'user.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
