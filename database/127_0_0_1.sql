-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 09:44 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prd`
--
CREATE DATABASE IF NOT EXISTS `prd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `prd`;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(4) NOT NULL COMMENT 'รหัสรูปภาพ',
  `img_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชื่อรูปภาพ',
  `img_detail` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'รายละเอียดรูปภาพ',
  `img_price` int(11) DEFAULT NULL COMMENT 'ราคารูปภาพ',
  `imgtype_id` int(10) DEFAULT NULL COMMENT 'รหัสประเภทรูปภาพ',
  `img` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_id`, `img_name`, `img_detail`, `img_price`, `imgtype_id`, `img`) VALUES
(1, 'devbanban.com', 'devbanban.com', 500000, 1, 'devbanban3.jpg'),
(2, 'devbanban.com2', 'devbanban.com2', 500000, 2, 'devbanban4.jpg'),
(3, 'devbanban.com3', 'devbanban.com', 500000, 3, 'devbanban5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imgtype`
--

CREATE TABLE `imgtype` (
  `imgtype_id` int(10) NOT NULL COMMENT 'รหัสประเภทรูปภาพ',
  `imgtype_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชื่อประเภทรูปภาพ',
  `typeimg` varchar(200) CHARACTER SET utf8 DEFAULT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgtype`
--

INSERT INTO `imgtype` (`imgtype_id`, `imgtype_name`, `typeimg`) VALUES
(1, 'type1', 'devbanban.jpg'),
(2, 'type2', 'devbanban1.jpg'),
(3, 'type3', 'devbanban2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `admin_name`) VALUES
(1, 'dotcom', '5865d6aa36d454e4f3cf4d936b6f5e2a', 'devbanban'),
(2, 'devbanban2', '76732ef62fabf7560e50a9c1863643ab', 'devbanban2');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `user_id` int(4) NOT NULL COMMENT 'รหัสสมาชิก',
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `lastname` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'นามสกุล',
  `brithday` date DEFAULT NULL COMMENT 'วันเกิด',
  `gender` int(2) DEFAULT NULL COMMENT 'เพศ',
  `address` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ที่อยู่',
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT 'อีเมลล์สมาชิก',
  `username` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชื่อ',
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`user_id`, `name`, `lastname`, `brithday`, `gender`, `address`, `email`, `username`, `password`, `tel`) VALUES
(1, 'สมาชิก2', 'สมาชิก2', '2018-07-19', 1, 'devbanban2', 'devbanban@gmail.com', 'member2', 'member2', '0948616709'),
(2, 'สมาชิก3', 'สมาชิก3', '2018-07-19', 1, 'devbanban', 'devbanban@gmail.com', 'member3', '33', '0948616709'),
(3, 'สมาชิก4', 'สมาชิก4', '2018-07-19', 1, 'devbanban', 'devbanban@gmail.com', 'member4', '4', '0948616709');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `imgtype_id` (`imgtype_id`);

--
-- Indexes for table `imgtype`
--
ALTER TABLE `imgtype`
  ADD PRIMARY KEY (`imgtype_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพ', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imgtype`
--
ALTER TABLE `imgtype`
  MODIFY `imgtype_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทรูปภาพ', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
