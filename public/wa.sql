-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 04:55 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wa`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `day` varchar(155) DEFAULT NULL,
  `time` varchar(155) DEFAULT NULL,
  `contact` varchar(155) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `address`, `day`, `time`, `contact`, `email`, `updated_at`) VALUES
(7, '2F One Night Cargo Forwarders Copr. Hub, Unit C Don Alex Bldg., Del Monte Ave. Near Corner West Ave., Quezon City', 'Monday - Friday', '7AM TO 6PM', '0975-293-190 / 258-2890', 'WEASSURE@gmail.com', '2018-03-31 19:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `achiever`
--

CREATE TABLE `achiever` (
  `achiever_id` int(11) NOT NULL,
  `achiever_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achiever`
--

INSERT INTO `achiever` (`achiever_id`, `achiever_path`) VALUES
(1, 'Updates/040220181352413.jpg'),
(2, 'Updates/040220181425123.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(55) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `date`, `deleted`) VALUES
(14, 'asd', '2018-03-30 17:49:05', 1),
(15, 'Sample 1', '2018-03-30 18:56:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `album_imgs`
--

CREATE TABLE `album_imgs` (
  `ai_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_imgs`
--

INSERT INTO `album_imgs` (`ai_id`, `album_id`, `img_path`) VALUES
(1, 11, 'Photos/033020181628050.jpeg'),
(2, 11, 'Photos/033020181628051.jpg'),
(3, 11, 'Photos/033020181628052.jpg'),
(4, 11, 'Photos/033020181628053.jpg'),
(5, 13, 'Photos/033020181639240.jpeg'),
(6, 13, 'Photos/033020181639241.jpg'),
(7, 13, 'Photos/033020181639242.jpg'),
(8, 13, 'Photos/033020181639253.jpg'),
(9, 13, 'Photos/033020181639254.jpg'),
(10, 13, 'Photos/033020181639255.jpg'),
(11, 14, 'Photos/033020181639570.jpeg'),
(12, 14, 'Photos/033020181639581.jpg'),
(13, 14, 'Photos/033020181639582.jpg'),
(14, 14, 'Photos/033020181639583.jpg'),
(15, 14, 'Photos/033020181639584.jpg'),
(16, 14, 'Photos/033020181639585.jpg'),
(25, 15, 'Photos/033020181843112.jpg'),
(26, 15, 'Photos/033020181843113.jpg'),
(47, 15, 'Photos/033020181845230.jpg'),
(48, 15, 'Photos/033020181845231.jpg'),
(49, 15, 'Photos/033020181845232.jpg'),
(50, 15, 'Photos/033020181845233.jpg'),
(51, 15, 'Photos/033020181845234.jpg'),
(52, 15, 'Photos/033020181845235.jpg'),
(53, 15, 'Photos/033020181845236.jpg'),
(54, 15, 'Photos/033020181845237.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(100) DEFAULT NULL,
  `content_desc` text,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content_title`, `content_desc`, `deleted`) VALUES
(4, 'title 1', 'description 1', 1),
(5, 'title 2', 'description 2', 1),
(6, NULL, NULL, 1),
(7, NULL, NULL, 1),
(8, NULL, NULL, 1),
(9, NULL, NULL, 1),
(10, 'MISSION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(11, 'Vision', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(12, 'Core Values', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(13, 'Goals', 'asd', 1),
(14, 'asd', 'asd', 1),
(15, 'Mission', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(16, 'Vision', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(17, 'Objectives', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `position` varchar(55) DEFAULT NULL,
  `fname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `position`, `fname`, `lname`, `deleted`) VALUES
(1, 'Dealer', 'John Louise', 'Lazaro', 1),
(2, 'Dealer', 'Sample', 'Asmpl', 1),
(3, 'Unit Dealer', 'Sample', 'Asmpl', 1),
(4, 'sad', 'asd', 'asd', 1),
(5, 'Unit Dealer', 'John Louise', 'Lazaro', 0),
(6, 'CEO', 'Mark Kristan', 'De Los Reyes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `header` varchar(55) DEFAULT NULL,
  `subheader` varchar(55) DEFAULT NULL,
  `title` varchar(55) DEFAULT NULL,
  `content1_title` varchar(55) DEFAULT NULL,
  `content1_desc` varchar(999) DEFAULT NULL,
  `content1_img` varchar(100) DEFAULT NULL,
  `content2_title` varchar(55) DEFAULT NULL,
  `content2_desc` varchar(999) DEFAULT NULL,
  `content2_img` varchar(100) DEFAULT NULL,
  `content3_title` varchar(55) DEFAULT NULL,
  `content3_desc` varchar(999) DEFAULT NULL,
  `content3_img` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `header`, `subheader`, `title`, `content1_title`, `content1_desc`, `content1_img`, `content2_title`, `content2_desc`, `content2_img`, `content3_title`, `content3_desc`, `content3_img`, `updated_at`) VALUES
(18, 'World Expert Assurance Inc.', '\"OUR SERVICE IS YOUR ASSURANCE!\"', 'Why Choose Us?', 'Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'SystemImages/Img/03312018191023.jpg', 'Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'SystemImages/Img/03312018191034.jpg', 'Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'SystemImages/Img/03312018191044.jpeg', '2018-03-31 19:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `newproducts`
--

CREATE TABLE `newproducts` (
  `np_id` int(11) NOT NULL,
  `np_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newproducts`
--

INSERT INTO `newproducts` (`np_id`, `np_path`) VALUES
(1, 'Updates/040220181352322.jpg'),
(2, 'Updates/040220181352502.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_path`) VALUES
(1, 'Updates/04022018133805.jpg'),
(2, 'Updates/040220181433241.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_path` varchar(100) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_path`, `deleted`) VALUES
(5, 'Products/033020181927204.jpg', 1),
(6, 'Products/033020181927205.jpg', 1),
(7, 'Products/033020181948160.jpg', 1),
(8, 'Products/033020181948161.jpg', 1),
(9, 'Products/033020181948162.jpg', 1),
(10, 'Products/033020181948163.jpg', 1),
(11, 'Products/033020181948164.jpg', 1),
(12, 'Products/033020181948165.jpg', 1),
(13, 'Products/033020181948166.jpg', 1),
(14, 'Products/033020181948167.jpg', 1),
(15, 'Products/033020181948550.png', 0),
(16, 'Products/033020181948551.png', 0),
(17, 'Products/033020181948552.png', 0),
(18, 'Products/033020181948553.png', 0),
(19, 'Products/033020181948554.png', 0),
(20, 'Products/033020181948555.png', 0),
(21, 'Products/033020181948556.png', 0),
(22, 'Products/033020181948557.png', 0),
(23, 'Products/033020181948558.png', 0),
(24, 'Products/033020181948559.png', 0),
(25, 'Products/0330201819485610.png', 0),
(26, 'Products/0330201819485611.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`) VALUES
(1, 'admin', '$2y$10$rz42cTOzM9jgbD3/EuF/dObyb6StD.cMuTdhjjVtM0LpIZdfUgUdm', '2cIjKLhPU1htJcVi55iYO0j8etCPknutihiVaskijrQj1Njo0Jv0xlRARwpt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `achiever`
--
ALTER TABLE `achiever`
  ADD PRIMARY KEY (`achiever_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `album_imgs`
--
ALTER TABLE `album_imgs`
  ADD PRIMARY KEY (`ai_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `newproducts`
--
ALTER TABLE `newproducts`
  ADD PRIMARY KEY (`np_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `achiever`
--
ALTER TABLE `achiever`
  MODIFY `achiever_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `album_imgs`
--
ALTER TABLE `album_imgs`
  MODIFY `ai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `newproducts`
--
ALTER TABLE `newproducts`
  MODIFY `np_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
