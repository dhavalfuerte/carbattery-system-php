-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 08:22 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'dhaval', '5844dd'),
(2, 'sahdevsinh', '0036sp');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_id` int(5) NOT NULL,
  `User_id` int(5) NOT NULL,
  `pro_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_id`, `User_id`, `pro_id`) VALUES
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, '3LB'),
(2, '4LB'),
(3, '5LB'),
(4, '7LB'),
(5, '9LB'),
(6, '35AH'),
(7, '65AH'),
(8, '75AH'),
(9, '88AH'),
(10, '100AH'),
(11, '120AH'),
(12, '130AH'),
(13, '150AH'),
(14, '180AH');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ct_id` int(5) NOT NULL,
  `ct_name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ct_id`, `ct_name`) VALUES
(1, 'rajkot'),
(2, 'jamnagr'),
(3, 'surat'),
(4, 'rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `com_id` int(5) NOT NULL,
  `com_nm` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `com_nm`) VALUES
(1, 'Exide'),
(2, 'Rolta'),
(3, 'Amaron'),
(4, 'Volga Power'),
(5, 'Tata');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `feedback`) VALUES
(1, 'yogin', 'this battery product services good'),
(2, 'hardik', 'your product is good  ');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Ord_id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment` int(5) NOT NULL,
  `ct_id` int(5) NOT NULL,
  `pro_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `sup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `Ord_id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment` int(5) NOT NULL,
  `ct_id` int(5) NOT NULL,
  `pro_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `sup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pr_id` int(5) NOT NULL,
  `pr_img` varchar(100) NOT NULL,
  `com_id` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `wa_id` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pr_id`, `pr_img`, `com_id`, `cat_id`, `wa_id`, `price`) VALUES
(1, '../images/20160304_132152111.jpg', 1, 1, 1, 500),
(2, '../images/Exide-Battery-XLTZ4-4AH-For-SDL006280119-1-894d2.jpg', 1, 2, 1, 1000),
(3, '../images/Amco-AB5LB-5-AH-Automotive-Battery.jpg', 1, 3, 1, 1000),
(4, '../images/b5.jpg', 1, 4, 1, 1000),
(5, '../images/b5.jpg', 1, 5, 1, 1000),
(6, '../images/99DB95754D_1488626619_38b20l-silver-plus.jpg', 5, 6, 1, 4500),
(7, '../images/b5.jpg', 1, 7, 1, 5000),
(11, '../images/b6.jpg', 1, 10, 1, 10000),
(9, '../images/b1.jpg', 1, 8, 1, 5000),
(10, '../images/b5.jpg', 3, 9, 1, 5000),
(12, '../images/b3.jpg', 2, 11, 1, 10000),
(13, '../images/b4.jpg', 1, 12, 1, 10000),
(14, '../images/b3.jpg', 1, 13, 1, 10000),
(15, '../images/b8.jpg', 1, 14, 1, 10000),
(16, '../images/06CE1DD184_1484387455_mred45d21lbh.jpg', 1, 6, 4, 4500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `username`, `contact_no`, `email`, `gender`, `password`) VALUES
(1, 'dhaval', 'dd', '9125486214', 'dhaval@gmail.com', 'male', '123456'),
(2, 'yogin', 'yogi', '9282152354', 'yogin123@gmail.com', 'male', '123456@yogi');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_company`
--

CREATE TABLE `vehicle_company` (
  `ve_co_id` int(5) NOT NULL,
  `ve_co_nm` varchar(25) NOT NULL,
  `ve_ty_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_company`
--

INSERT INTO `vehicle_company` (`ve_co_id`, `ve_co_nm`, `ve_ty_id`) VALUES
(1, 'BAJAJ', 1),
(2, 'HMSIL', 1),
(3, 'HERO', 1),
(4, 'MAHINDRA 2 WHEELERS', 1),
(5, 'ROYAL ENFIELD', 1),
(6, 'TVS', 1),
(7, 'SUZUKI', 1),
(8, 'AUDI', 2),
(9, 'MARUTI SUZUKI', 2),
(10, 'RENAULT', 2),
(11, 'BMW', 2),
(12, 'HYUNDAI', 2),
(13, 'JAGUAR', 2),
(14, 'MARCEDES BENZ', 2),
(15, 'ATUL AUTO', 3),
(16, 'BAJAJ AUTO', 2),
(17, 'FORCE MOTORS', 4),
(18, 'TAFE', 4),
(19, 'VOLVO', 5),
(20, 'ASHOK LEYLAND', 5),
(21, 'MANFORCE TRUCK', 5),
(22, 'TATA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_model`
--

CREATE TABLE `vehicle_model` (
  `ve_mo_id` int(5) NOT NULL,
  `ve_mo_nm` varchar(25) NOT NULL,
  `ve_co_id` int(5) NOT NULL,
  `ve_ty_id` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_model`
--

INSERT INTO `vehicle_model` (`ve_mo_id`, `ve_mo_nm`, `ve_co_id`, `ve_ty_id`, `cat_id`) VALUES
(1, 'DISCOVER', 1, 1, 3),
(2, 'PULSAR', 1, 1, 5),
(3, 'CT100', 1, 1, 1),
(4, 'PLATINA', 1, 1, 1),
(5, 'ACTIVA', 2, 1, 2),
(6, 'AVIATOR', 2, 1, 2),
(7, 'DREAM YOGA', 2, 1, 2),
(8, 'SHINE NEW', 2, 1, 2),
(9, 'CD DELIUX', 3, 1, 2),
(10, 'SPLENDOUR PRO', 3, 1, 2),
(11, 'WINNER', 3, 1, 3),
(12, 'CBZ', 3, 1, 4),
(13, 'DURO', 4, 1, 4),
(14, 'KINE', 4, 1, 1),
(15, 'GUSTO', 4, 1, 4),
(16, 'BULLET 350', 5, 1, 3),
(17, 'ELECTRA', 5, 1, 5),
(18, 'BULLET 500', 5, 1, 5),
(19, 'BULLET DELUX', 5, 1, 3),
(20, 'STAR CITY', 6, 1, 1),
(21, 'VICTOR', 6, 1, 1),
(22, 'WEGO', 6, 1, 1),
(23, 'ACCESS 125', 7, 1, 2),
(24, 'ZEUS', 7, 1, 3),
(25, 'SWISH 125', 7, 1, 2),
(26, 'A8-SERIES', 8, 2, 10),
(27, 'A7-SERIES', 8, 2, 8),
(28, 'G7 3.0', 8, 2, 8),
(29, 'ALTO', 9, 2, 6),
(30, 'EECO', 9, 2, 6),
(31, 'ERTIGA', 9, 2, 6),
(32, 'SWIFT', 9, 2, 6),
(33, 'DUSTER', 10, 2, 7),
(34, 'KWID', 10, 2, 6),
(35, 'PULSE', 10, 2, 6),
(36, '5-SERIES', 11, 2, 10),
(37, '6-SERIES', 11, 2, 10),
(38, 'ACCENT', 12, 2, 6),
(39, 'CRETA', 12, 2, 6),
(40, 'I 20', 12, 2, 6),
(41, 'I 10', 12, 2, 6),
(42, 'XE', 13, 2, 9),
(43, 'XF', 13, 2, 9),
(44, 'XJ-TYPE', 13, 2, 9),
(45, '"A" CLASS', 14, 2, 9),
(46, '"SLS" CLASS', 14, 2, 10),
(47, '140', 14, 2, 9),
(48, 'ATUL SHAKTI', 15, 3, 6),
(49, 'RE 45', 16, 3, 6),
(50, 'VAN 45', 16, 3, 6),
(51, 'BANLAN-400', 17, 4, 7),
(52, 'BANLAN-550', 17, 4, 7),
(53, 'TAFE-35.D1', 18, 4, 8),
(54, '9500', 18, 4, 8),
(55, 'TAFE-59001', 18, 4, 8),
(56, 'VOLVOFMX', 19, 5, 14),
(57, 'B7R', 19, 5, 14),
(58, 'B9R', 19, 5, 14),
(59, 'BISOW', 20, 5, 9),
(60, 'COMET(4*4)', 20, 5, 9),
(61, 'VIKING CB53', 20, 5, 13),
(62, 'MAN-CLA16L180', 21, 5, 12),
(63, 'MAN-D-8306 CAC', 21, 5, 14),
(64, 'MAN-CLA40L18', 21, 5, 12),
(65, 'TATA BUS LP', 22, 5, 14),
(66, 'TATA 1109', 22, 5, 12),
(67, 'ACE ZIP', 22, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `ve_ty_id` int(5) NOT NULL,
  `ve_ty_nm` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`ve_ty_id`, `ve_ty_nm`) VALUES
(1, 'Two Wheeler'),
(2, 'Car/Suv/Muv'),
(3, 'Three Wheeler'),
(4, 'Tractor'),
(5, 'Lcv/Hcv');

-- --------------------------------------------------------

--
-- Table structure for table `warranty`
--

CREATE TABLE `warranty` (
  `wa_id` int(5) NOT NULL,
  `wa_nm` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warranty`
--

INSERT INTO `warranty` (`wa_id`, `wa_nm`) VALUES
(1, '12 Months'),
(2, '15 Months'),
(3, '18 Months'),
(4, '24 Months'),
(5, '36 Months');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Ord_id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`Ord_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle_company`
--
ALTER TABLE `vehicle_company`
  ADD PRIMARY KEY (`ve_co_id`);

--
-- Indexes for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  ADD PRIMARY KEY (`ve_mo_id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`ve_ty_id`);

--
-- Indexes for table `warranty`
--
ALTER TABLE `warranty`
  ADD PRIMARY KEY (`wa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ct_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `com_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehicle_company`
--
ALTER TABLE `vehicle_company`
  MODIFY `ve_co_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  MODIFY `ve_mo_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `ve_ty_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `warranty`
--
ALTER TABLE `warranty`
  MODIFY `wa_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
