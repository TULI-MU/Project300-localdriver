-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 08:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_localdriver`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `b_id` int(8) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `user_id` varchar(15) COLLATE tis620_bin NOT NULL,
  `pickup_time` varchar(255) COLLATE tis620_bin NOT NULL,
  `pickup_date` varchar(255) COLLATE tis620_bin NOT NULL,
  `place_id_1` int(11) NOT NULL,
  `place_id_2` int(11) NOT NULL,
  `no_of_passengers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`b_id`, `vehicle_id`, `user_id`, `pickup_time`, `pickup_date`, `place_id_1`, `place_id_2`, `no_of_passengers`) VALUES
(1, 2, '5', '12:45', '2020-12-13', 14, 15, 5),
(2, 5, '4', '00:40', '2020-12-16', 13, 12, 2),
(3, 33, '4', '22:30', '2020-10-02', 11, 12, 2),
(4, 28, '4', '16:07', '2020-12-26', 13, 19, 3),
(5, 28, '4', '15:35', '2020-12-25', 11, 12, 1),
(6, 24, '13', '14:57', '2020-12-25', 11, 12, 2),
(7, 24, '15', '16:31', '2020-12-25', 11, 12, 3),
(8, 24, '17', '21:31', '2020-12-25', 16, 17, 1),
(9, 24, '18', '16:00', '2020-12-25', 14, 15, 1),
(10, 24, '19', '17:18', '2020-12-25', 15, 14, 2),
(11, 24, '20', '12:44', '2020-12-25', 14, 15, 2),
(12, 24, '21', '13:08', '2020-12-26', 18, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `subject`, `email`, `message`) VALUES
(2, 'Mia Korim', 'Booking', 'karim@gmail.com', 'Iam  satisfied.'),
(3, 'Mia Korim', 'booking', 'karim@gmail.com', 'iam satisfied'),
(4, 'Mia Korim', 'booking', 'karim@gmail.com', 'iam satisfied'),
(5, 'Jolil miya', 'Booking', 'jolil67@gmail.com', 'iam satisfied'),
(6, 'Jolil miya', 'Booking', 'jolil67@gmail.com', 'iam satisfied');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fare_chart`
--

CREATE TABLE `tbl_fare_chart` (
  `f_id` int(11) NOT NULL,
  `place_id_from` varchar(15) COLLATE tis620_bin NOT NULL,
  `place_id_to` varchar(10) COLLATE tis620_bin NOT NULL,
  `fare` varchar(15) COLLATE tis620_bin NOT NULL,
  `vehicle` text COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `tbl_fare_chart`
--

INSERT INTO `tbl_fare_chart` (`f_id`, `place_id_from`, `place_id_to`, `fare`, `vehicle`) VALUES
(1, '16', '17', '30', 'Rickshaw'),
(2, '13', '14', '40', 'Rickshaw'),
(3, '14', '15', '20', 'Rickshaw'),
(4, '17', '12', '20', 'Rickshaw'),
(5, '17', '19', '20', 'Rickshaw'),
(6, '13', '14', '15', 'Cng'),
(7, '13', '15', '10', 'Cng'),
(8, '18', '20', '10', 'Cng'),
(9, '12', '11', '10', 'Rickshaw'),
(10, '13', '14', '40', 'Rickshaw'),
(11, '11', '12', '20', 'Rickshaw'),
(12, '11', '12', '10', 'Rickshaw'),
(13, '13', '14', '50', 'Rickshaw'),
(14, '14', '13', '40', 'Rickshaw'),
(15, '13', '14', '50', 'Rickshaw'),
(16, '16', '17', '30', 'Rickshaw');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place_name`
--

CREATE TABLE `tbl_place_name` (
  `p_id` int(5) NOT NULL,
  `place_name` varchar(20) COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `tbl_place_name`
--

INSERT INTO `tbl_place_name` (`p_id`, `place_name`) VALUES
(11, 'Chowhatta Point'),
(12, 'Ambarkhana Point'),
(13, 'Bondor Point'),
(14, 'Tilagor Point'),
(15, 'Shibgonj Point'),
(16, 'Dargah Gate'),
(17, 'Zindabazar Point'),
(18, 'Humayun Chottor'),
(19, 'Noyashorok Point'),
(20, 'Uposhohor Point'),
(30, 'ambarkhana point');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL DEFAULT 'User',
  `age` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `Name`, `Email`, `Password`, `Type`, `age`, `mobile`, `picture`) VALUES
(4, 'Rahim Miya', 'miyarahim23@gmail.com', '23456', 'Admin', 40, '01818345612', '113.jpg'),
(6, 'Mia Korim', 'karim@gmail.com', '123456', 'User', 23, '01700000000', '122.jpg'),
(9, 'Liton Vodro', 'liton11@gmail.com', '112233', 'Driver', 40, '01672345612', 'download_(2).jpg'),
(10, 'Mohammad Opu', 'opu12@gmail.com', '67890', 'Driver', 34, '01745231234', '21.jpg'),
(11, 'Dulon Saha', 'saha9@gmail.com', '12900', 'Driver', 41, '01654321290', 'download_(5).jpg'),
(12, 'Jolil miya', 'jolil2@gmail.com', '56789', 'User', 23, '01789532240', 'images_(1).jpg'),
(13, 'Polash Ahmed', 'polash3@gmail.com', '34567', 'Driver', 40, '01745231234', 'download_(3).jpg'),
(14, 'rahul roy', 'rahul4@gmail.com', '12345', 'Driver', 23, '01785464390', '1101.jpg'),
(15, 'Ahmed Polash ', 'polash5@gmail.com', '22334', 'Driver', 43, '01745231234', '721.jpg'),
(16, 'Mohammad polash', 'polash9@gmail.com', '33445', 'Driver', 41, '01745231234', 'download_(1).jpg'),
(17, 'Ahmed opu', 'opu45@gmail.com', '55667', 'Driver', 35, '01654321290', 'download_(5)1.jpg'),
(18, 'Ahmed jolil', 'jolil67@gmail.com', '33231', 'Driver', 45, '01635478291', '211.jpg'),
(19, 'Olok Kumar', 'kumar5@gmail.com', '11223', 'Driver', 33, '01672345612', 'download_(2)1.jpg'),
(20, 'Apon Ahmed', 'apon34@gmail.com', '34567', 'Driver', 40, '01654321290', 'download_(1)1.jpg'),
(21, 'Karim Sah', 'karim22@gmail.com', '22445', 'Driver', 44, '01654321290', 'images_(1)1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle_info`
--

CREATE TABLE `tbl_vehicle_info` (
  `v_id` int(3) NOT NULL,
  `Place_id` int(255) NOT NULL,
  `vehicle_name` varchar(20) COLLATE tis620_bin NOT NULL,
  `picture` varchar(255) COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `tbl_vehicle_info`
--

INSERT INTO `tbl_vehicle_info` (`v_id`, `Place_id`, `vehicle_name`, `picture`) VALUES
(24, 0, 'Rickshaw', '114.jpg'),
(35, 0, 'Rickshaw', '182.jpg'),
(36, 0, 'Rickshaw', '1341.jpg'),
(37, 0, 'Rickshaw', '182.jpg'),
(42, 0, 'Handbarrow', 'bc4611.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fare_chart`
--
ALTER TABLE `tbl_fare_chart`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_place_name`
--
ALTER TABLE `tbl_place_name`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vehicle_info`
--
ALTER TABLE `tbl_vehicle_info`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `b_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_fare_chart`
--
ALTER TABLE `tbl_fare_chart`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_place_name`
--
ALTER TABLE `tbl_place_name`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_vehicle_info`
--
ALTER TABLE `tbl_vehicle_info`
  MODIFY `v_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
