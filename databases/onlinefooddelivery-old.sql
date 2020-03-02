-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 03:02 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinefooddelivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`, `image`) VALUES
(3, 'italian ', 'upload/12.jpg'),
(5, 'chinese', 'upload/3.jpg'),
(6, 'mocktail', 'upload/6.jpg'),
(7, 'indian', 'upload/8.jpg'),
(8, 'wrdfefr', 'upload/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE IF NOT EXISTS `fooditem` (
  `foodid` int(11) NOT NULL AUTO_INCREMENT,
  `foodname` varchar(30) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`foodid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`foodid`, `foodname`, `unit`, `categoryid`, `rate`, `image`) VALUES
(4, 'dosa', 'piece', 4, '250', 'upload/6.jpg'),
(6, 'Rissoto', 'plates', 5, '500', 'upload/9.jpg'),
(7, 'idli', 'piece', 4, '25', 'upload/2.jpg'),
(8, 'chola batura', 'piece', 3, '250', 'upload/indbal.jpg'),
(9, 'jalebi', 'piece', 7, '10', 'upload/indjal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `orderdate` date NOT NULL,
  `delivery_date` date NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `delivery_add` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `total` float(10,2) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `orderdate`, `delivery_date`, `userid`, `name`, `email`, `mobile_no`, `delivery_add`, `pincode`, `total`) VALUES
(14, '2018-04-03', '2018-04-06', 0, 'sweta', 'avs@gmail.com', '123', 'ddfdskjgiodshg', '678989', 2000.00),
(15, '2018-04-05', '2018-04-20', 0, 'purnima', 'p@gmail.com', '23564789', 'golmuri', '831017', 500.00),
(16, '2018-04-05', '2018-04-19', 2, 'sweta', 'swetra166@gmail.com', '49856262', 'ddfdskjgiodshg', '831017', 500.00),
(17, '2018-04-05', '2018-04-13', 0, 'ruksar', 'ruksar@gmail.com', '54789', 'telco', '4564', 500.00),
(18, '2018-04-06', '2018-04-07', 0, 'pummy', 'baridih@gmail.com', '8796541621', 'baridih', '831017', 750.00),
(19, '2018-04-06', '2018-04-12', 0, 'abc', 'ankit.sharma01011@gmail.com', '213654987', 'bvf', '123456', 500.00),
(20, '2018-04-14', '2018-04-15', 0, 'ankit', 'baridih@gmail.com', '254698731', 'baridih', '831017', 3750.00),
(21, '2018-04-14', '2018-04-28', 0, 'ahvjdgjw', 'baridih@gmail.com', '589764123', 'baridih', '258963', 1000.00),
(22, '2018-04-14', '2018-04-15', 0, 'ankit', 'baridih@gmail.com', '9876543210', 'ranchi', '879654', 100.00),
(23, '2018-04-14', '2018-01-16', 0, 'abc', 'baridih@gmail.com', '987654231', 'sakchi', '879654', 500.00),
(24, '2018-04-14', '2018-04-15', 0, 'sweta', 'avs@gmail.com', '49856262', 'ddfdskjgiodshg', '454544', 1000.00),
(25, '2018-04-14', '2018-04-14', 0, 'sweta', 'avs@gmail.com', '49856262', 'ddfdskjgiodshg', '832105', 1000.00),
(26, '2018-04-14', '2018-04-15', 0, 'abc', 'baridih@gmail.com', '123', 'baridih', '879654', 1000.00),
(27, '2018-04-14', '2018-04-15', 0, 'purnima', 'avs@gmail.com', '231', 'golmuri', '987654', 1000.00),
(28, '2018-04-14', '2018-04-19', 2, 'sweta', 'swetra166@gmail.com', '49856262', 'ddfdskjgiodshg', '831017', 0.00),
(29, '2018-04-14', '2018-04-15', 2, 'sweta', 'swetra166@gmail.com', '49856262', 'ddfdskjgiodshg', '831017', 1500.00),
(30, '2018-04-17', '2018-04-17', 0, 'ngj', 'avs@gmail.com', '56236520', 'esxhcgnhvjy', '285134', 500.00),
(31, '2018-05-11', '2018-05-09', 0, 'ajit', 'baridih@gmail.com', '3552465945', 'smndbsjkdnm', '846238', 250.00);

-- --------------------------------------------------------

--
-- Table structure for table `orderdesc`
--

CREATE TABLE IF NOT EXISTS `orderdesc` (
  `descid` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  PRIMARY KEY (`descid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `orderdesc`
--

INSERT INTO `orderdesc` (`descid`, `orderid`, `foodname`, `qty`, `rate`, `total`) VALUES
(3, 14, 'Rissoto', 2, 500.00, 1000.00),
(4, 14, 'chola batura', 4, 250.00, 1000.00),
(5, 15, 'chola batura', 2, 250.00, 500.00),
(6, 16, 'Rissoto', 1, 500.00, 500.00),
(7, 17, 'chola batura', 2, 250.00, 500.00),
(8, 18, 'chola batura', 3, 250.00, 750.00),
(9, 19, 'chola batura', 2, 250.00, 500.00),
(10, 20, 'chola batura', 15, 250.00, 3750.00),
(11, 21, 'Rissoto', 2, 500.00, 1000.00),
(12, 22, 'jalebi', 10, 10.00, 100.00),
(13, 23, 'Rissoto', 1, 500.00, 500.00),
(14, 24, 'Rissoto', 2, 500.00, 1000.00),
(15, 25, 'Rissoto', 2, 500.00, 1000.00),
(16, 26, 'Rissoto', 2, 500.00, 1000.00),
(17, 27, 'Rissoto', 2, 500.00, 1000.00),
(18, 29, 'Rissoto', 3, 500.00, 1500.00),
(19, 30, 'chola batura', 2, 250.00, 500.00),
(20, 31, 'chola batura', 1, 250.00, 250.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `delivery_add` varchar(255) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `password`, `email`, `mobile_no`, `delivery_add`, `pincode`) VALUES
(2, 'sweta', '123', 'swetra166@gmail.com', '49856262', 'ddfdskjgiodshg', '831017'),
(5, 'abc', '', 'avs@gmail.com', '245345', 'grrytu', '4654'),
(6, 'gvfjhgj', '', 'gfid@gmail.com', '123', 'dfjdhg', '1234'),
(7, 'fgfert', '', 'gre@gmail.com', '123', 'wdejhfe', '465'),
(8, 'ahvjdgjw', '', 'gfjh@gmail.com', '123456', 'dvf', '123'),
(9, 'sweta', '', 'sweta@gmail.com', '231', 'gjgdfje', '213'),
(10, 'sweta', '', 'tfytruytut@gmail.com', '1234', 'fgjh', '234'),
(11, 'purnima', '654', 'purnima@gmail.com', '87954123', 'golmuri', '831017'),
(12, 'ajit', 'pinku', 'asvh@gmail.com', '7978008407', 'hjadg', '961354');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
