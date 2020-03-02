-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 04:51 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`, `image`) VALUES
(3, 'Italian Food', 'upload/12.jpg'),
(5, 'Chinese', 'upload/3.jpg'),
(6, 'Mocktail', 'upload/6.jpg'),
(7, 'Indian', 'upload/8.jpg'),
(8, 'Desserts', 'upload/5.jpg'),
(9, 'Odisha Special', 'upload/Pakhala-Bhat.jpg'),
(10, 'Ice Creams', 'upload/capresesalad.jpeg'),
(11, 'North Indian ', 'upload/Chingudi Jhala.jpg'),
(12, 'South Indian', 'upload/Dahivada-Aloodum.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`foodid`, `foodname`, `unit`, `categoryid`, `rate`, `image`) VALUES
(4, 'dosa', 'piece', 4, '250', 'upload/6.jpg'),
(6, 'Rissoto', 'plates', 5, '500', 'upload/9.jpg'),
(7, 'idli', 'piece', 4, '25', 'upload/2.jpg'),
(8, 'Pasta', 'Plates', 3, '200', 'upload/pasta.jpg'),
(9, 'jalebi', 'piece', 7, '10', 'upload/indjal.jpg'),
(10, 'coke', 'glass', 6, '50', 'upload/coke.jpg'),
(11, 'Ice Cream', 'cup', 8, '150', 'upload/choc ice.JPG'),
(12, 'Momo', 'Plate', 5, '100', 'upload/momo.jpg'),
(14, 'Caprese Salad', 'Plate', 3, '70', 'upload/capresesalad.jpeg'),
(15, 'Panzanella', 'Plate', 3, '85', 'upload/panzanella.jpg'),
(16, 'Chakuli Pitha', '2 ', 9, '40', 'upload/Chakuli Pitha.jpg'),
(17, 'Gupchup', '2 ', 9, '40', 'upload/Gupchup.jpg'),
(18, 'Pakhala Bhat', 'Thali', 9, '70', 'upload/Pakhala-Bhat.jpg'),
(19, 'abc', '2 ', 12, '40', 'upload/Maccha-Ghanta.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

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
(31, '2018-05-11', '2018-05-09', 0, 'ajit', 'baridih@gmail.com', '3552465945', 'smndbsjkdnm', '846238', 250.00),
(32, '2018-07-14', '2018-07-14', 0, 'xyz', 'sds@aas.df', '12131', 'qwerty', '1234', 250.00),
(33, '2018-07-14', '2018-07-14', 0, 'xyz', 'sds@aas.df', '12131', 'qwerty', '1234', 0.00),
(34, '2018-07-14', '2018-07-14', 6, 'gvfjhgj', 'gfid@gmail.com', '123', 'dfjdhg', '1234', 250.00),
(35, '2018-07-28', '2018-07-28', 0, 'abd', 'abd@gmail.com', '446468464', 'driems', '754022', 250.00),
(36, '2018-09-16', '2018-09-29', 0, 'abc', 'ankit.sharma01011@gmail.com', '7209974100', 'Tata Foundry Colony Qtr No. 13 Old Baridih', '831017', 250.00),
(37, '2018-09-16', '2018-09-17', 0, 'ankit', 'ankit.sharma01011@gmail.com', '7209974100', 'Tata Foundry Colony Qtr No. 13 Old Baridih', '831017', 500.00),
(38, '2018-09-16', '2018-09-25', 0, 'ankit', 'ankit.sharma01011@gmail.com', '7209974100', 'Tata Foundry Colony Qtr No. 13 Old Baridih', '831017', 10.00),
(39, '2018-12-10', '2018-12-11', 0, 'abc', 'csj@shcj.cbsj', '7894561231', 'esra', '868454', 250.00),
(40, '2018-12-10', '2018-12-11', 12, 'ajit', 'asvh@gmail.com', '7978008407', 'hjadg', '961354', 500.00),
(41, '2018-12-10', '2018-12-11', 0, 'shubham', 'shu@sjag.cddadd', '4678165168', 'asvak', '484154', 250.00),
(42, '2018-12-10', '2018-12-19', 12, 'ajit', 'asvh@gmail.com', '7978008407', 'hjadg', '961354', 100000.00),
(43, '2018-12-10', '2018-12-12', 0, 'localtest', 'localtest@localtest.com', '84651531', 'localtest', '445466', 250.00),
(44, '2019-03-09', '2019-03-17', 6, 'Pinku', 'pinku@gmail.com', '123', 'GITA College', '1234', 20.00),
(45, '2019-03-10', '2019-03-19', 6, 'Kamesh', 'pinku@gmail.com', '123', 'dfjdhg', '1234', 250.00),
(46, '2019-03-12', '2019-03-12', 6, 'Kamesh', 'kameshk61@gmail.com', '8998899889', 'KUNDALAHALLI', '752054', 600.00),
(47, '2019-03-12', '2019-03-12', 6, 'Kamesh', 'kameshk@gmail.com', '4545454545', 'kundalhalli', '345454', 50.00),
(48, '2019-03-12', '2019-03-12', 0, 'skt', 'fgh@gmail.com', '1231231234', 'radharani pg', '235434', 50.00),
(49, '2019-03-12', '2019-03-12', 6, 'Kamesh', 'kameshk61@gmail.com', '123', 'rrpg', '23434', 250.00),
(50, '2019-03-28', '2019-03-28', 6, 'Kamesh', 'kameshk61@gmail.com', '9090909090', 'College Campus', '752054', 70.00),
(51, '2019-03-28', '2019-03-28', 6, 'Kamesh', 'kameshk61@gmail.com', '1237894565', 'College Campus', '233434', 40.00),
(52, '2019-03-28', '2019-03-29', 6, 'Kamesh', 'sunil2699@gmail.com', '123', 'ioie', '1', 10.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

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
(20, 31, 'chola batura', 1, 250.00, 250.00),
(21, 32, 'chola batura', 1, 250.00, 250.00),
(22, 34, 'chola batura', 1, 250.00, 250.00),
(23, 35, 'chola batura', 1, 250.00, 250.00),
(24, 36, 'chola batura', 1, 250.00, 250.00),
(25, 37, 'Rissoto', 1, 500.00, 500.00),
(26, 38, 'jalebi', 1, 10.00, 10.00),
(27, 39, 'chola batura', 1, 250.00, 250.00),
(28, 40, 'Rissoto', 1, 500.00, 500.00),
(29, 41, 'Pasta', 1, 250.00, 250.00),
(30, 42, 'Momo', 1000, 100.00, 100000.00),
(31, 43, 'Pasta', 1, 250.00, 250.00),
(32, 44, 'Dahi Wada', 1, 20.00, 20.00),
(33, 45, 'Pasta', 1, 250.00, 250.00),
(34, 46, 'Rissoto', 1, 500.00, 500.00),
(35, 46, 'Momo', 1, 100.00, 100.00),
(36, 47, 'coke', 1, 50.00, 50.00),
(37, 48, 'jalebi', 5, 10.00, 50.00),
(38, 49, 'Pasta', 1, 250.00, 250.00),
(39, 50, 'Caprese Salad', 1, 70.00, 70.00),
(40, 51, 'Chakuli Pitha', 1, 40.00, 40.00),
(41, 52, 'jalebi', 1, 10.00, 10.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `password`, `email`, `mobile_no`, `delivery_add`, `pincode`) VALUES
(2, 'sweta', 'kamesh', 'swetra166@gmail.com', '49856262', 'ddfdskjgiodshg', '831017'),
(5, 'abc', 'kamesh', 'avs@gmail.com', '245345', 'grrytu', '4654'),
(6, 'Kamesh', 'kammo', 'pinku@gmail.com', '123', 'dfjdhg', '1234'),
(7, 'fgfert', 'kamesh', 'gre@gmail.com', '123', 'wdejhfe', '465'),
(8, 'ahvjdgjw', 'kamesh', 'gfjh@gmail.com', '123456', 'dvf', '123'),
(9, 'sweta', 'kamesh', 'sweta@gmail.com', '231', 'gjgdfje', '213'),
(10, 'sweta', 'kamesh', 'tfytruytut@gmail.com', '1234', 'fgjh', '234'),
(11, 'purnima', 'kamesh', 'purnima@gmail.com', '87954123', 'golmuri', '831017'),
(12, 'ajit', 'kamesh', 'asvh@gmail.com', '7978008407', 'hjadg', '961354'),
(13, 'shubham', 'kamesh', 'ax@dnkja.sc', '4684641654', 'wda', '831017'),
(14, 'Sanket', 'sanket', 'sanket@gmail.com', '7878787878', 'ITPL', '560037'),
(15, 'Avinash', 'avik', 'avinash.davkd@gmail.com', '8709767668', 'tamando', '123123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
