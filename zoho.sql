-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2022 at 06:41 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `zoho`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(20) NOT NULL auto_increment,
  `name` char(40) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `phno` (`phno`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `phno`, `email`) VALUES
(1, 'Virat Kohli', 9191912321, 'viratkohli@bcci.in'),
(2, 'Dhoni', 9122321122, 'dhoni@csk.in');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `success` varchar(5) NOT NULL default 'yes',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `email`, `password`, `success`) VALUES
(1, 'mmkalirajanagpc@gmail.com', '12345', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(30) NOT NULL auto_increment,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `secret` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`,`secret`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `password`, `secret`) VALUES
(1, 'mmkalirajanagpc@gmail.com', '123345', '1801302');
