-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2023 at 07:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop_ bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `title`, `author`, `price`, `image`) VALUES
(1, 'วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ', 'โอภาส เอี่ยมสิริวงศ์', 175, 'https://images.pexels.com/photos/6476589/pexels-photo-6476589.jpeg'),
(2, 'สารสนเทศทางธุรกิจ (ฉบับปรับปรุงเพิ่มเติม)', 'รุจิจันทร์ วิชิวานิเวศน์', 114, 'https://images.pexels.com/photos/6476589/pexels-photo-6476589.jpeg'),
(3, 'สู่ความเป็นเลิศด้านการบริการงานไอทีด้วยมาตรฐาน ITIL v.3', 'ดร. วิรินทร์ เมฆประดิษฐสิน', 175.25, 'https://images.pexels.com/photos/6476589/pexels-photo-6476589.jpeg'),
(4, 'ศาสตร์และศิลป์ในการติดตั้งระบบเครือข่ายชั้นเซียน เล่ม 7', 'ดร. วิรินทร์ เมฆประดิษฐสิน', 45, 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
