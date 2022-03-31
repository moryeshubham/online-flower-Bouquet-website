-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 04:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `first` varchar(100) CHARACTER SET latin1 NOT NULL,
  `last` varchar(100) CHARACTER SET latin1 NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `id_no` int(100) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `contact` bigint(100) NOT NULL,
  `photo` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`first`, `last`, `username`, `password`, `id_no`, `email`, `contact`, `photo`) VALUES
('Shubham', 'Morye', 'shubhammorye', '123', 24, 'shubhammorye@gmail.com', 919076011961, 'passportsize photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `first` varchar(100) CHARACTER SET latin1 NOT NULL,
  `last` varchar(100) CHARACTER SET latin1 NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `id_no` int(100) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `contact` bigint(100) NOT NULL,
  `photo` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`first`, `last`, `username`, `password`, `id_no`, `email`, `contact`, `photo`) VALUES
('dipesh', 'pawar', 'dipesh123', '123', 12, 'dipesh@gmail.com', 8564952536, 'user_logo.png'),
('aman', 'mane', 'aman25', '\r\n                            aman123', 23, 'aman@gmail.com', 8969352642, 'user_logo.png'),
('ganesh', 'kadam', 'ganesh_23', '2000', 14, 'ganesh23@gmail.com', 8452163545, 'user_logo.png'),
('Rajan', 'Mishra', 'Dr.Rajan', '2019', 21, 'DR_Rajan@gmail.com', 7545256595, 'Screenshot_2021-05-28-09-14-36-451_com.android.chrome.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_comments`
--

CREATE TABLE `feedback_comments` (
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `contact` bigint(100) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `feedback_comment` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_comments`
--

INSERT INTO `feedback_comments` (`name`, `contact`, `email`, `feedback_comment`) VALUES
('Ganesh', 85296555426, 'ganu@gmail.com', 'Fresh flowers.... \r\nGood job \r\nwell done.');

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `fname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `fprice` bigint(100) NOT NULL,
  `fdescription` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `photo` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`fname`, `fprice`, `fdescription`, `photo`) VALUES
('1. Heaven scent Bouquet', 2000, 'A fabulous collection of pink  and lightpurple flowers make this the perfect gift.', 'images/c1.jpg'),
('2. Summer sun Bouquet', 1800, 'Flowers to put a smile on their face. A fabulous collection of pink , orange and yellow flowers.', 'images/c2.jpg'),
('3. A New Day', 1420, 'The perfect gift Flowers for an anniversary. collection of flowers and bouquet to send same day.', 'images/c3.jfif'),
('4. Spring blossom bouquet', 1350, 'The perfect gift Flowers for a Valentine. A fabulous collection of pink flowers make them happy.', 'images/c4.jfif'),
('5. Meadow fresh bouquet', 1555, 'Carnation flowers are also commonly preferred by florists to create a bouquet. These special flowers, which behold the emotions of love, affection, and gratitude are good to bind and wonderstruck someone you love', 'images/carnation.jpg'),
('6. Cool Breeze Bouquet', 2999, 'People are so fascinated with the beauty of Orchids that’s why these flowers are commonly used in creating bouquets. you can gift an orchid flower in box to your loved ones and express all your feelings so gently.', 'images/orchid1.jpg'),
('7. The flower of love', 1999, 'Red rose bouquet is perfect for confessing love. This stunning bloom is quite elegant and the demand for expressing love through a bouquet of roses', 'images/red rose.jpg'),
('8. Friendship Bouquet', 3199, 'Daffodil flowers bouquet is higher and readily gifted on special occasions such as birthdays, anniversaries ,etc.\r\nDaffodils are sturdy blooms and stay fresh for days to come..', 'images/daffodil.jpg'),
('9. Wintry whites', 1699, 'A white evelyn bouquet to express modesty.  \r\nA fablous collection of white flowers make this the \r\nperfect gift.', 'images/evelyn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `fullname` text CHARACTER SET latin1 NOT NULL,
  `id_no` int(100) NOT NULL,
  `selectflower` varchar(100) CHARACTER SET latin1 NOT NULL,
  `fprice` int(100) NOT NULL,
  `payment_id` int(100) NOT NULL,
  `payment_type` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`fullname`, `id_no`, `selectflower`, `fprice`, `payment_id`, `payment_type`) VALUES
('Dipeh Pawar', 12, '1. Heaven scent Bouquet', 2000, 2147483647, 'Gpay'),
('aman mane', 23, '4. Spring blossom bouquet', 1350, 2147483647, 'Debit Card'),
('Rajan Mishra', 21, '8. Friendship Bouquet', 3199, 2147483647, 'online'),
('Dipeh Pawar', 12, '3. A New Day', 1420, 52432566, 'Patym');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
