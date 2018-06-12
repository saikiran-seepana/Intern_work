-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 12:05 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swizato`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `password`, `mobileno`, `email`) VALUES
('saikiran', 'swizato@123', '9490771432', 'saikiranseepana@gmail.com'),
('bunny', 'ASDF', '0987654321', 'saijulai@yahoo.com'),
('bunny', 'asfadsf', '0987654321', 'saijulai@yahoo.com'),
('bunny', 'ADHOIafnc', '0987654321', 'saijulai@yahoo.com'),
('bunny', 'asbcfkSIC', '0987654321', 'saijulai@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(250) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `rating` varchar(15) NOT NULL,
  `file_id` varchar(50) NOT NULL,
  `file` varchar(30) NOT NULL,
  `file_type` varchar(15) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `location` varchar(30) NOT NULL,
  `restaurant_address` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `rating`, `file_id`, `file`, `file_type`, `file_size`, `location`, `restaurant_address`) VALUES
(1, 'bawarchi', '4.3', '', 'bawarchi.jpg', 'image/jpeg', '68766', 'Hyderabad', 'Plot No. 44, RTC Cross Road, Beside Sandhya Theatre, Chikkadpally, New Nallakunta, Hyderabad, Telangana 500020'),
(2, 'fire water', '3', '', 'firewater.jpg', 'image/jpeg', '379631', 'Hyderabad', '5th Floor, Phoenix Tower A, Hitech City Road, Madhapur, Hyderabad - 500081, Opposite Trident Hotel '),
(3, 'presidentdabha', '4', '', 'president.jpg', 'image/jpeg', '84654', 'Hyderabad', 'Plot No 36, Image Garden Road, Madhapur, Hyderabad - 500081, Beside HDFC Bank'),
(4, '3b\'s restaurant', '3.9', '', 'abs.jpg', 'image/jpeg', '261404', 'Hyderabad', '1st & 2nd Floor, Apurupa Silpi Building, Indiranagar, Gachibowli, Hyderabad - 500032, Opposite Paradise Restaurant'),
(5, 'paradise', '4.5', '', 'firewater.jpg', 'image/jpeg', '57140', 'Hyderabad', 'Main Road, Hitech City, Hyderabad - 500081, Opposite Cyber Tower, Near KFC, Shilpa Kalavedika'),
(6, 'Seasonal Tastes', '4.2', '33699-seasonal.jpg', 'seasonal.jpg', 'image/jpeg', '67524', 'Hyderabad', 'No. 15, S. No. 64, The Westin Building, Raheja IT Park Mindspace, Hi-Tech City Road, Madhapur, Hyderabad, Telangana 500081'),
(0, 'saikiran', '9.0', '41059-abs.jpg', 'abs.jpg', 'image/jpeg', '261404', 'SDCSV', 'Plot No. 44, RTC Cross Road, Beside Sandhya Theatre, Chikkadpally, New Nallakunta, Hyderabad, Telangana 500020'),
(8, 'nasdc', '5', '85659-linkedin-logo-button.svg', 'linkedin-logo-button.svg', 'image/svg+xml', '1659', 'qwrfqrf', 'Plot No. 44, RTC Cross Road, Beside Sandhya Theatre, Chikkadpally, New Nallakunta, Hyderabad, Telangana 500020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
