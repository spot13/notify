-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2012 at 04:05 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notification_scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminacc`
--

CREATE TABLE IF NOT EXISTS `adminacc` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminacc`
--

INSERT INTO `adminacc` (`username`, `pass`) VALUES
('admin', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `cssfiles`
--

CREATE TABLE IF NOT EXISTS `cssfiles` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `css_files` longtext NOT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `finish_time` time DEFAULT NULL,
  `up_time` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cssfiles`
--

INSERT INTO `cssfiles` (`id`, `name`, `css_files`, `start_date`, `start_time`, `finish_date`, `finish_time`, `up_time`) VALUES
(3, 'subscribe', '<span> <strong> Subscription: </strong> </span>\r\n</br>\r\n<span> leave your email to receive updates </span>\r\n\r\n<form method="post">\r\n<input type="text"  value="Leave your email here..." /> \r\n<input class="sub" type="submit" value="Subscribe" />\r\n</form>', '0000-00-00', '00:00:00', '0000-00-00', '23:59:59', 5),
(4, 'image_inside', '<img class="img_inline" width="60px" height="60px" src="thumb2.png" /> <p> you can also put images within the notification and wrap the text around them using your defined css styles. </p> \r\n', '0000-00-00', '00:00:00', '0000-00-00', '23:59:59', 0),
(5, 'html_content', '<strong> you can add HTML content </strong> </br>\r\n\r\n<ul>\r\n\r\n<li> <img width="30px" height="30px" src="thumb.jpg"/> <span> images </span></li>\r\n<li> <a href="http://google.com"> Links</a> </li> \r\n\r\n<li> <select value="enter your email"> \r\n<option value="volvo">Option1</option>\r\n  <option value="saab">Option2</option>\r\n  <option value="mercedes">Option3</option>\r\n  <option value="audi">Option4</option>\r\n</select> </li>\r\n\r\n</ul>', '0000-00-00', '00:00:00', '0000-00-00', '23:59:59', 0),
(6, 'Simple Notification', 'Hello World!', '0000-00-00', '00:00:00', '0000-00-00', '23:59:59', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
