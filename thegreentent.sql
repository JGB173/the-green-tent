-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 01:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thegreentent`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(50) DEFAULT '',
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_id`, `username`, `password`, `email`, `activation_code`, `admin`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', '', 0),
(8, 'jb522', '$2y$10$VuswpSsKAOPj.at12.q1H.bNxDUW0r8Lx346c0SpRajrLav/2obBS', 'jb522@mahurangi.school.nz', '6302a507ae197', 0),
(11, 'JGB', '$2y$10$7anXcnzD9h5RU296tvoh8u9cnMWEfUQ2uNVcVybDyKbf9vcCBaxLS', 'jgburgess173@gmail.com', '63255ab76f51e', 0),
(14, 'admin', '$2y$10$a03qn/AfsbMXjKAiGxy3cOtxXpM8UXpuMeX3bArpDv/l59dBfou1q', 'stay@thegreentent.co.nz', '63599411654a1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `booking_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `booking_date`) VALUES
(376, 11, '2023-02-15'),
(377, 11, '2023-02-16'),
(378, 11, '2023-02-17'),
(379, 11, '2023-02-18'),
(390, 8, '2023-04-15'),
(391, 8, '2023-04-16'),
(392, 8, '2023-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(320) NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fname`, `lname`, `email`, `phonenum`, `message`) VALUES
(1, 'Joshua', 'Burgess', 'JGBurgess173@gmail.com', '0274902590', 'Hello world'),
(7, 'Joshua', 'Burgess', 'jgburgess173@gmail.com', '027-490-2590', 'This is a test');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title1` varchar(100) DEFAULT NULL,
  `para1` text DEFAULT NULL,
  `img1` varchar(40) DEFAULT NULL,
  `title2` varchar(100) DEFAULT NULL,
  `para2` text DEFAULT NULL,
  `img2` varchar(40) DEFAULT NULL,
  `title3` varchar(100) DEFAULT NULL,
  `para3` text DEFAULT NULL,
  `img3` varchar(40) DEFAULT NULL,
  `title4` varchar(100) DEFAULT NULL,
  `para4` text DEFAULT NULL,
  `img4` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title1`, `para1`, `img1`, `title2`, `para2`, `img2`, `title3`, `para3`, `img3`, `title4`, `para4`, `img4`) VALUES
(1, 'About the property', 'A luxurious Mongolian-style yurt set in rural Matakana within walking distance of the vibrant village. Private & self-contained this access-friendly, chic retreat has everything you need to experience glamping at its finest from luxury linen to technology needs. A locally crafted kitchen & bathroom a step away across a covered deck. Outdoor bath, festoon lights & campfire add the extra touches for an unforgettable escape. Relax & unwind in this truly tranquil setting, you won\'t want to leave…\r\n', 'the-green-tent-couch-v2.jpg', 'Info', 'The Green Tent is located on the Matakana cycleway close to our vibrant village with our famous market, great dining options, shops & boutique cinema The Matakana Coast is a fantastic area to visit with it\'s stunning beaches, regional parks, and surf spots - make it your next adventure Surrounded by farmland The Green Tent is super private and relaxing, make yourself at home and enjoy the peaceful rural setting', NULL, 'Rates', '                        <li>Air Conditioning</li>\r\n                        <li>Bathtub</li>\r\n                        <li>Bedrooms: 1</li>\r\n                        <li>Beds: 1</li>\r\n                        <li>Bathroom: 1</li>\r\n                        <li>Kitchen</li>\r\n                        <li>Wi-Fi</li>\r\n                        <li>Tv</li>\r\n                        <li>Dedicated Workspace</li>', '0', '', '                        <li>MIDWEEK (SUNDAY-THURSDAY)<br>One night stay $270 + $60 cleaning fee </li>\r\n                        <li>Two or more nights mid week<br>$260 per night + $60 cleaning fee</li>\r\n                        <li>WEEKENDS<br>2 night minimum stay $580</li>', NULL),
(2, NULL, '                <p>\r\n                    A luxurious Mongolian-style yurt set in rural<br> \r\n                    Matakana within walking distance of the<br> \r\n                    vibrant village.\r\n                </p>', 'the-green-tent-gallery-lounge-v1.jpg', NULL, NULL, 'the-green-tent-gallery-outside-seating-v', '0', '0', '0', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_ibfk_1` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
