-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 02:52 PM
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
(1, 'Home', 'Active'),
(2, 'Men', 'Active'),
(3, 'Women', 'Active'),
(4, 'Food', 'Active'),
(5, 'Electronics', 'Active'),
(6, 'Bags', 'Active');

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
(6, 2, 'Gasaro Shop', 'Private', '32414342', 'KK 4 Ave st', '72985292_115320180235679_7024697554493719041_o.png', '2020-08-01 17:17:10'),
(7, 3, 'SmarTech Rwanda', 'Private', '0780782835', 'KK 4 Ave st', 'Logo2.png', '2020-08-01 17:23:10'),
(8, 4, 'Nisma Shop', 'Private', '12311333', 'KK 4 Ave st', 'upload-productImg-1494664895729_320_234.jpeg', '2020-08-03 21:06:02');

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
(1, 3, 7, 2, 1, 'Snikers', 'Nike', 20000, '2', 'Active', '<h4><span style=\"text-decoration: underline;\"><span style=\"font-weight: bold;\">Feature</span></span><br></h4><p>hgfghhlhlfdgklfdhgkfdg djkfgsfdjkgh kfdj gkdfg dfgksldhgdfgkljfdghgfghhlhlfdgklfdhgkfdg djkfgsfdjkgh kfdj gkdfg dfgksldhgdfgkljfdghgfghhlhlfdgklfdhgkfdg djkfgsfdjkgh kfdj gkdfg dfgksldhgdfgkljfdghgfghhlhlfdgklfdhgkfdg djkfgsfdjkgh kfdj gkdfg dfgksldhgdfgkljfdghgfghhlhlfdgklfdhgkfdg djkfgsfdjkgh kfdj gkdfg dfgksldhgdfgkljfdghgfghhlhlfdgklfdhgkfdg djkfgsfdjkgh kfdj gkdfg dfgksldhgdfgkljfdghgfghhlhlfdgklfdhgkfdg djkfgsfdjkgh kfdj gkdfg dfgksldhgdfgkljfdghgfghhlhlfdgklfdhgkfdg djkfgsfdjkgh kfdj gkdfg dfgksldhgdfgkljfdg</p>', 25017350112, 'd1.jpg', 'd2.jpg', 'd3.jpg', 'd1.jpg', '2020-08-02 20:34:18'),
(2, 3, 7, 2, 0, 'Quartz', 'Quartz', 9000, '20', 'Active', 'jggjk', 25028042464, 'm7.jpg', 'w6.jpg', 'demoUpload.jpg', 'demoUpload.jpg', '2020-08-01 18:38:42'),
(3, 3, 7, 6, 0, 'Lagguage', 'Puma', 20000, '12', 'Active', 'fdsfd', 25036720206, 'b2.jpg', 'b3.jpg', 'b1.jpg', 'b4.jpg', '2020-08-01 18:37:59'),
(4, 2, 6, 3, 5, 'Hand Bag', 'Puma', 15500, '2', 'Active', 'gshh', 25017710587, 'b5.jpg', 'b8.jpg', 'b6.jpg', 'b7.jpg', '2020-08-02 16:36:30'),
(5, 2, 6, 3, 2, 'Small Shoes', 'Nike', 20000, '2', 'Active', '<h5><span style=\"text-decoration: underline;\"><span style=\"font-weight: bold;\">ghughjhghgfhj</span></span></h5><h5>dfljgl;kfdsjg;ldfshgd;lfglkbndfkgkueavgfkdsufvkdsafhsdfvdsafhsdkfsadvfsdkjahvfhvfckvsfg iesgf dsgf oidsafkdsafdsa figfkjdsagkjf sjkgakgflkdsa fgdsaj kfghdsakjlggds fadsgfhdgkjfagf kasdgfkjdsa gfskdjajsdagfkdjsgfiewurgf dsafgafuadsgfdsa f gsdafgdsaiuf giudsagyf</h5>', 25046962656, 's5.jpg', 's5.jpg', 's5.jpg', 's5.jpg', '2020-08-02 21:41:30'),
(6, 2, 6, 3, 11, 'Skerts', 'Fashion', 25000, '2', 'Active', '<p><span style=\"font-style: italic;\"><span style=\"font-weight: bold;\">Feature</span></span></p><ol><li>Size: 200mm</li><li>kgkjgdsjghsdgjkd</li><li>sdglkdsjgldsfjgldfg</li><li>lsdhgkjldhlkdshgl</li><li>dgldkshglkdshglkjhdsklg</li><li>sdf;gdslgkhdsgl;sdfg</li><li>sldfkjgklsdhglkhdsfghl</li><li>sdfglksdhglksdjhgkdlshgdgdsfg dfgkdshgdsg gdsfhgdsfhgd fshgdshlfkhglds gsdkjgh kdsghlsj kgl shdlkjghfdlg dkfslhg ldkfsg sldg</li><li>dgskjdhgsdhlgdsflg<br></li></ol>', 25039273521, 'w3.jpg', 'w2.jpg', 'w4.jpg', 'w8.jpg', '2020-08-02 20:54:32'),
(7, 2, 6, 3, 2, 'Wedding shoe', 'Nike', 15000, '2', 'Active', '<p>dfklhdshsfdgsdfgh gdslfkhgd dfsj hglkjfdshgdskljf hgksldfghdklsjfhg ldkfshgdsfhgdhg lkdjfssssssssssshgkldf hgkdfshgflkjdsglsdfhg lkdsfjglsdhf kglsdfjg sldffhgldfglkdfhgkldfhglkdf vjkbcxbvvxcmnbvxmcv xcmbvmxc,bvbcxvidgshiuergtirreoiuwfdsgbfdhgkg irewohgrdsklgfhlkflsadkfsdailfeir ufdsuiafhdsif ioaeuhrieogt fds fkgdsilgieosg rtdsf<br></p>', 25013991903, 's8.jpg', 's8.jpg', 's8.jpg', 's8.jpg', '2020-08-02 21:45:12');

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
(1, 2, 'Shoes', 'Active'),
(2, 3, 'Shoes', 'Active'),
(3, 2, 'Fashion', 'Active'),
(4, 2, 'Bags', 'Active'),
(5, 3, 'Bags', 'Active'),
(6, 2, 'Watch', 'Active'),
(7, 1, 'About', 'Active'),
(8, 1, 'Contact', 'Active'),
(9, 4, 'Vegatables', 'Active'),
(10, 5, 'Phone', 'Active'),
(11, 3, 'Clothes', 'Active');

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
(2, 'NAFIATH', 'GASARO', 'NAFIATH', 'nafiathgass@gmail.com', 'def419ff9c6d91a79f79cb433942fcd5', '546365455', '342Main R', 'Kigali city', 'Rwanda', '250', 'Managera', 'IMG-20190525-WA0006.jpg', '2020-08-01 17:16:25'),
(3, 'Muhamudu', 'NDAYISHIMIYE', 'MUHAMUDU', 'ndayishimiyemuhamadu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0780782835', 'KK 4 Ave st', 'Kigali', 'Rwanda', '00250', 'CEO', 'DfaultProfileImage.png', '2020-08-01 17:22:32'),
(4, 'Nisma', 'ISIMBI', 'Nisma', 'nisma@gmail.com', '202cb962ac59075b964b07152d234b70', '213213112', '123 Main Road', 'Kigali', 'Rwanda', '00250', 'CEO', 'DfaultProfileImage.png', '2020-08-03 21:03:37');

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
-- AUTO_INCREMENT for table `company_tb`
--
ALTER TABLE `company_tb`
  MODIFY `company_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_feedback_tb`
--
ALTER TABLE `product_feedback_tb`
  MODIFY `feedback_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub_category_tb`
--
ALTER TABLE `sub_category_tb`
  MODIFY `subCategory_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
