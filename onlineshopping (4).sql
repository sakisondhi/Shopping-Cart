-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 02:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `fullname`, `gender`, `usertype`) VALUES
('ishi', '123', 'ishani@gmail.com', 'ishani kashayap', 'Female', 'admin'),
('navraj', '123', 'navraj@gmail.com', 'navraj kaur', 'Female', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brandid` int(5) NOT NULL,
  `brandname` varchar(50) NOT NULL,
  `brandlogo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brandid`, `brandname`, `brandlogo`) VALUES
(13, 'Addidas', 'brand_photos/addidas.png'),
(14, 'Benetton', 'brand_photos/benetton.jpg'),
(15, 'Puma', 'brand_photos/puma.jpg'),
(16, 'Nike', 'brand_photos/nike.png'),
(17, 'null', 'brand_photos/th.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category id` int(5) NOT NULL,
  `category name` varchar(50) NOT NULL,
  `super category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category id`, `category name`, `super category`) VALUES
(11, 'T-shirts', 'men'),
(14, 'Suits', 'women'),
(15, 'Dresses', 'women'),
(16, 'Pants', 'men'),
(17, 'boys', 'kids'),
(18, 'girls', 'kids'),
(19, 'pants', 'women');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `query` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`cid`, `name`, `email`, `mobileno`, `query`, `status`) VALUES
(1, 'parwinder Singh', 'singh.parwinder01@gmail.com', '9878769052', 'hello', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderid` int(11) NOT NULL,
  `dateoforder` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `totalamount` float NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `dateoforder`, `email`, `totalamount`, `status`) VALUES
(1, '0000-00-00', 'simran@gmail.com', 553, '0'),
(2, '2017-07-18', 'simran@gmail.com', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `detailid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`detailid`, `orderid`, `productid`, `qty`) VALUES
(1, 1, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(5) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `photo1` varchar(500) NOT NULL,
  `photo2` varchar(500) NOT NULL,
  `photo3` varchar(500) NOT NULL,
  `photo4` varchar(500) NOT NULL,
  `price` double NOT NULL,
  `discount` float NOT NULL,
  `description` varchar(300) NOT NULL,
  `brandid` int(5) NOT NULL,
  `subcategoryid` int(11) NOT NULL,
  `categoryid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `photo1`, `photo2`, `photo3`, `photo4`, `price`, `discount`, `description`, `brandid`, `subcategoryid`, `categoryid`) VALUES
(13, 'shirt', 'productphoto/pic.jpg', 'productphoto/pic1.jpg', 'productphoto/pic.jpg', 'productphoto/pic3.jpg', 1500, 21, 'addidas casual t-shirt .... black and orange in color', 13, 20, 11),
(14, 'shirt', 'productphoto/pic8.jpg', 'productphoto/pic9.jpg', 'productphoto/pic10.png', 'productphoto/pic11.jpg', 1200, 5, 'addidas  t-shirts ... blue and white in color', 13, 20, 11),
(15, 'shirt', 'productphoto/f1.jpg', 'productphoto/f2.jpg', 'productphoto/f1.jpg', 'productphoto/f4.jpg', 1200, 25, 'benetton formal shirts ', 14, 21, 11),
(16, 'shirt', 'productphoto/f5.jpg', 'productphoto/f6.jpg', 'productphoto/f7.jpg', 'productphoto/f8.jpg', 1350, 4, 'benetton formal  check shirts', 14, 21, 11),
(17, 'shirt', 'productphoto/f9.jpg', 'productphoto/f10.jpg', 'productphoto/f11.jpg', 'productphoto/f12.jpg', 1150, 7, 'addidas white and blue color formal shirts', 13, 21, 11),
(18, 'shirt', 'productphoto/f13.jpg', 'productphoto/f14.jpg', 'productphoto/f15.jpg', 'productphoto/f16.jpg', 1700, 12, 'benetton formal  check shirts', 14, 21, 11),
(19, 'shirt', 'productphoto/f13.jpg', 'productphoto/f14.jpg', 'productphoto/f15.jpg', 'productphoto/f16.jpg', 1700, 12, 'benetton formal  check shirts', 14, 21, 11),
(20, 'shirt', 'productphoto/f17.jpg', 'productphoto/f18.jpg', 'productphoto/f22.jpg', 'productphoto/f21.jpg', 1300, 4, 'benetton  formal shirts ', 14, 21, 11),
(21, 'shirt', 'productphoto/f17.jpg', 'productphoto/f18.jpg', 'productphoto/f22.jpg', 'productphoto/f21.jpg', 1300, 4, 'benetton  formal shirts ', 14, 21, 11),
(22, 'pants', 'productphoto/pant1.jpg', 'productphoto/pant2.jpg', 'productphoto/pant3.jpg', 'productphoto/pant4.jpg', 2000, 8, 'benetton trousers for men', 14, 26, 16),
(23, 'pants', 'productphoto/pant5.jpg', 'productphoto/pant6.jpg', 'productphoto/pant7.jpg', 'productphoto/pant8.jpg', 2500, 5, 'addidas trousers for men', 13, 26, 16),
(24, 'pants', 'productphoto/pant9.jpg', 'productphoto/pant10.jpg', 'productphoto/pant9.jpg', 'productphoto/pant12.jpg', 15000, 22, 'benetton trousers for men', 14, 26, 16),
(25, 'pants', 'productphoto/pant13.jpg', 'productphoto/pant10.jpg', 'productphoto/pant11.jpg', 'productphoto/pant12.jpg', 7000, 6, 'addidas trousers for men', 13, 26, 16),
(26, 'pants', 'productphoto/r1.jpg', 'productphoto/r2.jpg', 'productphoto/r7.jpg', 'productphoto/r8.jpg', 4000, 9, 'nike men jeans', 16, 27, 16),
(27, 'pants', 'productphoto/r9.jpg', 'productphoto/r10.jpg', 'productphoto/r15.jpg', 'productphoto/r16.jpg', 4500, 5, 'nike men jeans', 16, 27, 16),
(28, 'pants', 'productphoto/r6.jpg', 'productphoto/r5.jpg', 'productphoto/r6.jpg', 'productphoto/r12.jpg', 5000, 26, 'nike men jeans', 16, 27, 16),
(29, 'suits', 'productphoto/1.jpg', 'productphoto/2.jpg', 'productphoto/1.jpg', 'productphoto/4.jpg', 700, 21, ' beautifull punjabi salwar suits for women', 17, 22, 14),
(30, 'suits', 'productphoto/9.png', 'productphoto/10.jpg', 'productphoto/3.png', 'productphoto/4.jpg', 600, 7, 'beautifull punjabi  salwar suits for women', 17, 22, 14),
(31, 'suits', 'productphoto/5.jpg', 'productphoto/6.jpg', 'productphoto/7.png', 'productphoto/8.jpg', 750, 5, 'pajaami suits for women', 17, 23, 14),
(32, 'suits', 'productphoto/13.png', 'productphoto/14.jpg', 'productphoto/15.png', 'productphoto/16.jpg', 690, 6, 'pajaami suits for women', 17, 23, 14),
(33, 'Dresses', 'productphoto/51AZRDCFwNL._UL1500_.jpg', 'productphoto/51HaLo5VHEL._UL1500_.jpg', 'productphoto/51NB4CvBgkL._UL1500_.jpg', 'productphoto/51AZRDCFwNL._UL1500_.jpg', 1290, 22, 'Long dress for women.... black in color....', 17, 24, 15),
(34, 'Dresses', 'productphoto/71lVLEBjkDL._UX425_.jpg', 'productphoto/81saDcB-F9L._UY500_.jpg', 'productphoto/417hAqYERdL.jpg', 'productphoto/61g0nIuGG0L._UL1500_.jpg', 1599, 23, 'two color long and gorgeous dress for women', 17, 24, 15),
(35, 'Dresses', 'productphoto/dress7.jpg', 'productphoto/dress8.jpg', 'productphoto/dress7.jpg', 'productphoto/dress10.jpg', 2000, 18, 'black color ling dresses for women', 17, 25, 15),
(36, 'Dresses', 'productphoto/dress1.jpg', 'productphoto/dress2.jpg', 'productphoto/dress5.jpg', 'productphoto/dress6.jpg', 1000, 15, 'short dresses for women', 17, 25, 15),
(37, 'Dresses', 'productphoto/dress11.jpg', 'productphoto/dress12.jpg', 'productphoto/dress3.jpg', 'productphoto/dress4.jpg', 1399, 12, 'short dresses  for women', 17, 25, 15),
(38, 'shirts', 'productphoto/51l12g7RcTL.jpg', 'productphoto/51zyjDJ0vAL.jpg', 'productphoto/41-PKOkNVLL.jpg', 'productphoto/710N6x6hDUL._UY500_.jpg', 590, 21, 'shirts for women\r\n', 14, 21, 11),
(39, 'shirts', 'productphoto/51Do9XWbPXL._UL1024_.jpg', 'productphoto/612BAfpW1VL._UL1024_.jpg', 'productphoto/61IFYHMNpbL._UL1024_.jpg', 'productphoto/61tOC4NzLiL._UL1024_.jpg', 799, 14, 'benetton shirts for women', 14, 21, 11),
(40, 'shirts', 'productphoto/71GzMTM+8iL._UX522_.jpg', 'productphoto/81D8YtjBEUL._UX522_.jpg', 'productphoto/91lx5QpHWwL._UX522_.jpg', 'productphoto/91VnPnFmCnL._UX522_.jpg', 450, 40, 'ADDIDAS SHIRTS FOR WOMEN', 13, 21, 11),
(41, 'shirts', 'productphoto/61uBMSvYsdL._UL1500_.jpg', 'productphoto/hj.jpg', 'productphoto/61uBMSvYsdL._UL1500_.jpg', 'productphoto/71XbuZ0++7L._UL1500_.jpg', 880, 15, 'BENETTON WOMEN SHIRTS... BLUE IN COLOR', 14, 21, 11),
(42, 'top', 'productphoto/91baLyeHD9L._UX425_.jpg', 'productphoto/91h6mc4VTxL._AC_UL200_SR160,200_.jpg', 'productphoto/91baLyeHD9L._UX425_.jpg', 'productphoto/91h6mc4VTxL._AC_UL200_SR160,200_.jpg', 499, 23, 'girls benetton tops', 14, 30, 18),
(44, 'top', 'productphoto/919rSG3NG7L._AC_UL200_SR160,200_.jpg', 'productphoto/919zzYDvJSL._UX466_.jpg', 'productphoto/919rSG3NG7L._AC_UL200_SR160,200_.jpg', 'productphoto/919rSG3NG7L._AC_UL200_SR160,200_.jpg', 499, 36, 'upperwear for girls', 14, 30, 18),
(45, 'top', 'productphoto/9107PwrMu6L._AC_UL200_SR160,200_.jpg', 'productphoto/A1Yc-0NNCQL._AC_UL200_SR160,200_.jpg', 'productphoto/9107PwrMu6L._AC_UL200_SR160,200_.jpg', 'productphoto/A1Yc-0NNCQL._AC_UL200_SR160,200_.jpg', 399, 14, 'upperwear  for girls', 14, 30, 18),
(46, 'Dresses', 'productphoto/41lCUPVyTpL._SX170_.jpg', 'productphoto/51El7MH9FML._AC_UL260_SR200,260_.jpg', 'productphoto/41lCUPVyTpL._SX170_.jpg', 'productphoto/51El7MH9FML._AC_UL260_SR200,260_.jpg', 599, 23, 'dress for girls', 17, 30, 18),
(47, 'Dresses', 'productphoto/51j-nmigcIL._SL170_.jpg', 'productphoto/51xzcFfwNEL._SX170_.jpg', 'productphoto/51j-nmigcIL._SL170_.jpg', 'productphoto/51xzcFfwNEL._SX170_.jpg', 550, 10, 'frocks for girls', 17, 30, 18),
(48, 'T-shirts', 'productphoto/31NFpuf03CL._AC_UL260_SR200,260_.jpg', 'productphoto/41edQDR8KJL._AC_UL260_SR200,260_.jpg', 'productphoto/31NFpuf03CL._AC_UL260_SR200,260_.jpg', 'productphoto/41edQDR8KJL._AC_UL260_SR200,260_.jpg', 390, 22, 't-shirts for boys\r\n', 14, 28, 17),
(49, 'T-shirts', 'productphoto/41JZlK4HuBL._AC_UL260_SR200,260_.jpg', 'productphoto/41z0F3A+-WL._SX170_.jpg', 'productphoto/51D1Qk1P+AL._SX170_.jpg', 'productphoto/41VMt7gw4WL._AC_UL260_SR200,260_.jpg', 599, 33, 'addidas t-shirts for boys', 13, 28, 17),
(50, 'T-shirts', 'productphoto/51IiWbwewXL._AC_UL260_SR200,260_.jpg', 'productphoto/51s1RwjdwtL._SX170_.jpg', 'productphoto/51y2SRC7ziL._AC_UL260_SR200,260_.jpg', 'productphoto/51y2SRC7ziL._SX170_.jpg', 459, 20, 'addidas t-shirts for boys', 13, 28, 17),
(51, 'Jeans', 'productphoto/51LrH2RxnhL._AC_UL260_SR200,260_.jpg', 'productphoto/51s+4yZjxcL._AC_UL260_SR200,260_.jpg', 'productphoto/51cO83B2GGL._AC_UL260_SR200,260_.jpg', 'productphoto/416cpuCT+OL._AC_UL260_SR200,260_.jpg', 440, 13, 'puma jeans', 15, 29, 17),
(52, 'nickers', 'productphoto/61d6TeiiesL._AC_UL260_SR200,260_.jpg', 'productphoto/61mVMDAAbjL._AC_UL260_SR200,260_.jpg', 'productphoto/61Wn26Bo3sL._AC_UL260_SR200,260_.jpg', 'productphoto/613wXAsJvDL._AC_UL260_SR200,260_.jpg', 389, 23, 'bottomwear for boys', 14, 29, 17),
(53, 'Jeans', 'productphoto/31t11JRVv8L._AC_UL260_SR200,260_.jpg', 'productphoto/31V+yMxkmPL._AC_UL260_SR200,260_.jpg', 'productphoto/31t11JRVv8L._AC_UL260_SR200,260_.jpg', 'productphoto/31V+yMxkmPL._AC_UL260_SR200,260_.jpg', 499, 22, 'benetton jeans for girls', 14, 31, 18),
(54, 'Jeans', 'productphoto/41ClEq+4dFL._SY220_.jpg', 'productphoto/41-czEvwDfL._AC_UL260_SR200,260_.jpg', 'productphoto/41AS3TJ6QML._SY220_.jpg', 'productphoto/41nXEVKXlfL._AC_UL260_SR200,260_.jpg', 455, 12, 'benetton jeans for girls', 14, 31, 18),
(55, 'Jeans', 'productphoto/41Kh5co4xSL._SY220_.jpg', 'productphoto/41kV8XrZrNL._AC_UL260_SR200,260_.jpg', 'productphoto/41qILjltBmL._AC_UL260_SR200,260_.jpg', 'productphoto/41mK8XaQKnL._AC_UL260_SR200,260_.jpg', 569, 18, 'benetton jeans for girls', 14, 31, 18),
(56, 'Jeans', 'productphoto/41e7I0pCL5L._AC_UL260_SR200,260_.jpg', 'productphoto/41ZNwx+S4gL._AC_UL260_SR200,260_.jpg', 'productphoto/41Ekm3gyGQL._AC_UL260_SR200,260_.jpg', 'productphoto/41a+XcV3wXL._AC_UL260_SR200,260_.jpg', 449, 23, 'puma trousers for boys', 15, 29, 17),
(57, 'Jeans', 'productphoto/51jie9JVEfL._AC_UL260_SR200,260_.jpg', 'productphoto/51K1fnMIpbL._AC_UL260_SR200,260_.jpg', 'productphoto/51LrH2RxnhL._AC_UL260_SR200,260_.jpg', 'productphoto/51s+4yZjxcL._AC_UL260_SR200,260_.jpg', 389, 33, 'puma trousers or nickers for boys', 15, 29, 17);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `shippingaddress` text NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `password`, `name`, `shippingaddress`, `mobileno`, `status`) VALUES
('prabh@gmail.com', '123', '123', 'prabhjit kaur', '1234567890', '#224,ranjit avenue,asr'),
('simran@gmail.com', '123', '123', 'simrandeep kaur', '1234567890', '#445,ranjit avenue,asr');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategoryid` int(11) NOT NULL,
  `subcategoryname` varchar(100) NOT NULL,
  `category id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategoryid`, `subcategoryname`, `category id`) VALUES
(20, 'casual ', 11),
(21, 'formal', 11),
(22, 'punjabi suits', 14),
(23, 'pajaami suits', 14),
(24, 'long dresses', 15),
(25, 'short dresses', 15),
(26, 'trousers', 16),
(27, 'jeans', 16),
(28, 'upperwear', 17),
(29, 'bottomwear', 17),
(30, 'upperwear', 18),
(31, 'bottomwear', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`detailid`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `categoryid` (`categoryid`),
  ADD KEY `subcategoryid` (`subcategoryid`),
  ADD KEY `brandid` (`brandid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategoryid`),
  ADD KEY `category id` (`category id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brandid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`email`) REFERENCES `signup` (`email`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `order` (`orderid`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`productid`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brandid`) REFERENCES `brands` (`brandid`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`subcategoryid`) REFERENCES `subcategory` (`subcategoryid`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`categoryid`) REFERENCES `category` (`category id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category id`) REFERENCES `category` (`category id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
