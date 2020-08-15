-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 10:33 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `adminID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(2200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`adminID`, `username`, `email`, `firstname`, `lastname`, `password`, `timestamp`) VALUES
(1, 'Muhamudu', 'muhamudunday@gmail.com', 'NDAYISHIMIYE', 'Muhamudu', '123456', '2020-07-23 19:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `category_ID` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`category_ID`, `category_name`, `status`) VALUES
(1, 'Computer', 'Active'),
(2, 'Phone&Accessories', 'Active'),
(4, 'Smart Electronic', 'Active'),
(5, 'Accessories&Parts', 'Active'),
(6, 'Audio&Video', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `client_order_tb`
--

CREATE TABLE `client_order_tb` (
  `order_ID` int(11) NOT NULL,
  `order_ref` int(11) NOT NULL,
  `client_ID` int(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `client_address_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `unity_price` int(20) NOT NULL,
  `total_price` int(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_tb`
--

CREATE TABLE `client_tb` (
  `client_ID` int(11) NOT NULL,
  `useranme` varchar(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `date_of_birth` varchar(60) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_tb`
--

CREATE TABLE `company_tb` (
  `company_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `logo` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_tb`
--

INSERT INTO `company_tb` (`company_ID`, `user_ID`, `company_name`, `category`, `phone_number`, `address`, `logo`, `timestamp`) VALUES
(1, 1, 'Gasaro Shop', 'Private', '078078258', 'Kigali-Rwanda-KK 4 Ave', '2589d113d3f73f5165bd0c7bcc7f32fb.jpg', '2020-08-09 18:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_feedback_tb`
--

CREATE TABLE `product_feedback_tb` (
  `feedback_ID` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `timezone` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `ID` int(11) NOT NULL,
  `user_ID` int(100) NOT NULL,
  `company_ID` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `subCategory_ID` int(11) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_brandName` varchar(100) NOT NULL,
  `pro_price` int(100) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `pro_option` varchar(50) NOT NULL,
  `pro_specification` text NOT NULL,
  `express_number` bigint(20) DEFAULT NULL,
  `image1` text NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `timezone` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`ID`, `user_ID`, `company_ID`, `category_ID`, `subCategory_ID`, `pro_name`, `pro_brandName`, `pro_price`, `quantity`, `pro_option`, `pro_specification`, `express_number`, `image1`, `image2`, `image3`, `image4`, `timezone`) VALUES
(1, 1, 1, 2, 11, 'Mini USB Adapter', 'Samsung', 1000, '5', 'Active', '<h3 style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; vertical-align: baseline; color: rgb(0, 0, 0); letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; overflow-wrap: break-word;\"><span style=\"font-family: Arial;\"><span style=\"font-weight: bold;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; font-variant: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit;\" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; font-variant: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit;\" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;\">Factory price Hot Selling Micro USB To USB OTG Mini Adapter Converter For Android SmartPhone Free Shipping Suppion</span></span></span></span></span></h3><blockquote><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Helvetica; vertical-align: baseline; color: rgb(0, 0, 0); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Feature</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 14pt; line-height: inherit; font-family: arial; vertical-align: baseline; color: black;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">:</span></span></span></p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Helvetica; vertical-align: baseline; list-style: none; color: rgb(0, 0, 0); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Small and delicate. Easy to carry</span></span></span></span></p></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Plug and play. Fast and convenient.</span></span></span></span></p></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Extended jack, no need to take off the Phone cover when used.</span></span></span></span></p></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Compatible to Smartphone with Android system and various digital devices</span></span></span></span></p></li></ul><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Helvetica; vertical-align: baseline; color: rgb(0, 0, 0); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Notice item and picture may be small differences in color</span></span></p><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Helvetica; vertical-align: baseline; color: rgb(0, 0, 0); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">OTG compatibility this is micro USB OTG interface, support micro USB interface, and the need to support OTG protocol make sure the phone support OTG function</span></span></span></p><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Helvetica; vertical-align: baseline; color: rgb(0, 0, 0); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Specifications:</span></p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Helvetica; vertical-align: baseline; list-style: none; color: rgb(0, 0, 0); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Type: otg adapter</span></p></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Name: OTG adapter</span></p></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Adapter: Standard USB port Micro USB connector</span></p></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Adapter: standard USB port Micro USB connector</span></p></li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Inspection: products have to undergo a high level 5 quality inspection</span></p></li></ul><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Helvetica; vertical-align: baseline; color: rgb(0, 0, 0); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">Package included:</span></p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: Helvetica; vertical-align: baseline; list-style: none; color: rgb(0, 0, 0); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline;\"><p style=\"   box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Helvetica; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: \" times=\"\" new=\"\" roman\";=\"\" vertical-align:=\"\" baseline;\"=\"\">1 x Micro USB To USB OTG Adapter</span></p></li></ul></blockquote>', 2508161600, '2589d113d3f73f5165bd0c7bcc7f32fb.jpg', '2589d113d3f73f5165bd0c7bcc7f32fb.jpg', 'demoUpload.jpg', 'demoUpload.jpg', '2020-08-13 12:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_tb`
--

CREATE TABLE `sub_category_tb` (
  `subCategory_ID` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `sub_category_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category_tb`
--

INSERT INTO `sub_category_tb` (`subCategory_ID`, `category_ID`, `sub_category_name`, `status`) VALUES
(1, 1, 'Keyboard&Mouse', 'Active'),
(2, 1, 'Storage', 'Active'),
(3, 1, 'Networking', 'Active'),
(4, 1, 'Other Computer', 'Active'),
(5, 2, 'Headphone&Earphone', 'Active'),
(6, 2, 'Bluetooth Headset', 'Active'),
(7, 2, 'Bags&Cases', 'Active'),
(8, 2, 'Holders&Stands', 'Active'),
(9, 2, 'Memory Card', 'Active'),
(10, 2, 'Screen Protector', 'Active'),
(11, 2, 'Cables&Chargers', 'Active'),
(12, 2, 'Mobile Phones', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `user_img` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `username`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`, `city`, `state`, `zip`, `position`, `user_img`, `timestamp`) VALUES
(1, 'Nafiat', 'GASARO', 'Nafiath', 'nafiath@gmail.com', '202cb962ac59075b964b07152d234b70', '0780782837', 'Kicukiro', 'Kigali', 'Rwanda', '00250', 'CEO', 'upload-productImg-1594257519132.jpeg', '2020-08-09 18:58:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `adminID` (`adminID`),
  ADD KEY `adminID_2` (`adminID`);

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `client_order_tb`
--
ALTER TABLE `client_order_tb`
  ADD PRIMARY KEY (`order_ID`);

--
-- Indexes for table `client_tb`
--
ALTER TABLE `client_tb`
  ADD PRIMARY KEY (`client_ID`);

--
-- Indexes for table `company_tb`
--
ALTER TABLE `company_tb`
  ADD PRIMARY KEY (`company_ID`);

--
-- Indexes for table `product_feedback_tb`
--
ALTER TABLE `product_feedback_tb`
  ADD PRIMARY KEY (`feedback_ID`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `express_number` (`express_number`);

--
-- Indexes for table `sub_category_tb`
--
ALTER TABLE `sub_category_tb`
  ADD PRIMARY KEY (`subCategory_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `client_order_tb`
--
ALTER TABLE `client_order_tb`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client_tb`
--
ALTER TABLE `client_tb`
  MODIFY `client_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_tb`
--
ALTER TABLE `company_tb`
  MODIFY `company_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_feedback_tb`
--
ALTER TABLE `product_feedback_tb`
  MODIFY `feedback_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_category_tb`
--
ALTER TABLE `sub_category_tb`
  MODIFY `subCategory_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
