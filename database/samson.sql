-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 07:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samson`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(407, 'Jonremus', '2016-12-11 09:04:25', 'Add Department Avatar DC'),
(472, 'chito', '2024-03-31 12:04:33', 'Add System User Matthew Quinto'),
(473, 'Jonremus', '2024-03-31 12:06:10', 'Add System User Matthew Quinto'),
(474, '', '2024-03-31 12:07:22', 'Add System User Matthew Quinto'),
(475, 'Jonremus', '2024-03-31 12:21:48', 'Add System User Matthew Quinto'),
(476, 'Jonremus', '2024-03-31 12:22:01', 'Add System User Matthew Quinto'),
(477, 'Jonremus', '2024-03-31 12:22:54', 'Add System User Matthew Quinto'),
(478, 'admin', '2024-03-31 12:26:25', 'Add System User Matthew Quinto'),
(479, 'Jonremus', '2024-03-31 15:19:37', 'Add System User Matthew Quinto'),
(480, 'Jonremus', '2024-03-31 15:22:19', 'Add System User Matthew Quinto'),
(481, 'Jonremus', '2024-03-31 15:27:26', 'Add System User michaela jaira quinto'),
(482, 'Jonremus', '2024-03-31 15:42:43', 'Add System User michaela jaira Quinto'),
(483, 'Jonremus', '2024-03-31 15:57:23', 'Add System User michaela jaira Quinto'),
(484, 'Jonremus', '2024-03-31 15:59:33', 'Add System User matthew Quinto'),
(485, 'Jonremus', '2024-03-31 16:03:09', 'Add System User matthew Quinto'),
(486, 'Jonremus', '2024-03-31 16:04:14', 'Add System User michaela jaira quinto'),
(487, 'jam', '2024-03-31 19:08:22', 'Add System User Jerico Enopia'),
(488, 'jam', '2024-03-31 19:58:41', 'Add Employee ,,'),
(489, 'jam', '2024-04-03 21:01:50', 'Add Item 211213123'),
(490, 'jam', '2024-04-03 21:23:39', 'Add Item 111111'),
(491, 'jam', '2024-04-03 22:44:57', 'Add Item 1111123123'),
(492, 'jam', '2024-04-03 22:48:26', 'Add Item 2231231'),
(493, 'chito', '2024-04-05 18:43:15', 'Add System User matthew quinto'),
(494, 'chito', '2024-04-05 20:33:40', 'Add Item 212321'),
(495, 'chito', '2024-04-05 20:36:42', 'Add Item 299323'),
(496, 'chito', '2024-04-05 20:50:07', 'Add Item 11111'),
(497, 'chito', '2024-04-05 20:50:41', 'Add Item 22222'),
(498, 'chito', '2024-04-05 20:52:08', 'Add Item 33333'),
(499, 'chito', '2024-04-05 20:52:41', 'Add Item 44444'),
(500, 'chito', '2024-04-05 21:57:00', 'Add Item 123123'),
(501, 'tebs', '2024-04-08 14:13:47', 'Add Item 43431'),
(502, 'tebs', '2024-04-08 14:28:07', 'Add Item 6786'),
(503, 'jam', '2024-04-21 00:31:08', 'Add Item 123'),
(504, 'admin', '2024-04-22 12:22:52', 'Add System User student1 student1'),
(505, '', '2024-04-22 12:31:18', 'Add System User student1 student1'),
(506, '', '2024-04-22 12:33:05', 'Add System User student student'),
(507, 'student', '2024-04-22 12:36:09', 'Add System User admin admin'),
(508, 'student', '2024-04-22 12:38:32', 'Add System User superAd superAd'),
(509, 'superAd', '2024-04-22 22:48:11', 'Add System User officer officer'),
(510, 'super', '2024-04-23 08:03:01', 'Add Item 452542'),
(511, 'admin', '2024-04-23 10:05:14', 'Add Item 3342'),
(512, 'super', '2024-04-24 07:46:10', 'Add System User user1 user1'),
(513, 'admin', '2024-04-24 07:47:48', 'Add System User user2 user2'),
(514, 'super', '2024-04-24 07:50:48', 'Add System User user1 user1'),
(515, 'super', '2024-04-24 10:42:52', 'Add Item 453452'),
(516, 'super', '2024-04-28 23:02:29', 'Add System User user2 user2'),
(517, 'super', '2024-04-28 23:40:18', 'Edit Department BSIT'),
(518, 'super', '2024-04-28 23:40:29', 'Edit Department BSCRIM'),
(519, 'super', '2024-04-28 23:40:49', 'Edit Department SHS'),
(520, 'super', '2024-04-28 23:41:04', 'Edit Department TECHNICAL'),
(521, 'super', '2024-04-28 23:41:38', 'Edit Department BSIT'),
(522, 'super', '2024-04-28 23:42:02', 'Edit Department BSIT'),
(523, 'super', '2024-04-28 23:55:30', 'Edit Department BSCRIM'),
(524, 'super', '2024-04-30 17:27:08', 'Add Item 22312'),
(525, 'admin', '2024-04-30 17:30:13', 'Add Item 12312323'),
(526, 'super', '2024-04-30 18:58:43', 'Add Department BSIT'),
(527, 'officer', '2024-05-02 04:26:36', 'Add Department jam'),
(528, 'admin', '2024-05-02 08:53:01', 'Add Department General Use'),
(529, 'admin', '2024-05-02 08:53:26', 'Add Department Electric Installation'),
(530, 'admin', '2024-05-02 08:53:36', 'Add Department Welding'),
(531, 'admin', '2024-05-02 08:53:50', 'Add Department Electronics'),
(532, 'admin', '2024-05-02 08:54:02', 'Add Department Automotive'),
(533, 'admin', '2024-05-02 08:54:21', 'Add Department Wrenches'),
(534, 'admin', '2024-05-02 08:54:37', 'Add Department Consumables'),
(535, 'admin', '2024-05-02 08:54:48', 'Add Department Oil/Fluids'),
(536, 'admin', '2024-05-02 08:55:22', 'Add Department Refrigerator & Air Conditioning'),
(537, 'admin', '2024-05-02 08:55:54', 'Add Department Skills Competition Tools'),
(538, 'officer', '2024-05-02 09:41:52', 'Add Department Ground Floor - Old Building'),
(539, 'officer', '2024-05-02 09:42:25', 'Add Department 2nd Floor - Old Building'),
(540, 'officer', '2024-05-02 09:47:37', 'Add Department Grand Floor - New Building '),
(541, 'officer', '2024-05-02 09:48:00', 'Add Department 1st Floor - New Building '),
(542, 'officer', '2024-05-02 09:48:20', 'Add Department 2nd Floor - New Building'),
(543, 'officer', '2024-05-02 09:48:43', 'Add Department 3rd Floor - New Building'),
(544, 'officer', '2024-05-02 09:49:09', 'Add Department Roof Deck - New Building'),
(545, 'officer', '2024-05-02 09:49:31', 'Add Department Computer Laboratory'),
(546, 'super', '2024-05-02 14:39:42', 'Add Department jam'),
(547, 'super', '2024-05-02 14:41:04', 'Add Department jamm'),
(548, 'super', '2024-05-02 14:46:45', 'Add Department sample1'),
(549, 'admin', '2024-05-02 14:48:49', 'Add Department sample2'),
(550, 'officer', '2024-05-02 14:49:46', 'Add Department sample4'),
(551, 'super', '2024-05-02 14:51:23', 'Add Department Ground Floor - Old Building'),
(552, 'super', '2024-05-02 14:51:42', 'Add Department 2nd Floor - Old Building'),
(553, 'super', '2024-05-02 14:51:52', 'Add Department Grand Floor - New Building '),
(554, 'super', '2024-05-02 14:52:02', 'Add Department 1st Floor - New Building '),
(555, 'super', '2024-05-02 14:52:19', 'Add Department 2nd Floor - New Building'),
(556, 'super', '2024-05-02 14:52:29', 'Add Department 3rd Floor - New Building'),
(557, 'super', '2024-05-02 14:52:39', 'Add Department Roof Deck - New Building'),
(558, 'super', '2024-05-02 14:52:49', 'Add Department Computer Laboratory'),
(559, 'admin', '2024-05-02 14:56:45', 'Add Item 23124'),
(560, 'officer', '2024-05-02 15:00:33', 'Add Item 2223'),
(561, 'super', '2024-05-03 11:10:06', 'Add Item 33782'),
(562, 'super', '2024-05-03 11:15:23', 'Add Item 9993'),
(563, 'super', '2024-05-03 11:18:29', 'Add Item 5564'),
(564, 'admin', '2024-05-03 11:29:53', 'Add Item 22123'),
(565, 'officer', '2024-05-03 11:38:59', 'Add Item 423423');

-- --------------------------------------------------------

--
-- Table structure for table `borrowing_form`
--

CREATE TABLE `borrowing_form` (
  `id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `other_department` varchar(255) DEFAULT NULL,
  `item_borrowed` varchar(100) NOT NULL,
  `date_borrowed` date NOT NULL,
  `date_return` date NOT NULL,
  `id_front_image` varchar(255) NOT NULL,
  `id_back_image` varchar(255) NOT NULL,
  `approval_status` varchar(100) NOT NULL,
  `approved_date` varchar(255) DEFAULT NULL,
  `borrowers_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `employee_id_no` varchar(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `position` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `employee_id_no`, `firstname`, `middlename`, `lastname`, `type`, `contact_no`, `position`) VALUES
(5, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(128) NOT NULL,
  `dep_name` varchar(128) NOT NULL,
  `thumbnails` varchar(128) NOT NULL,
  `dep_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `thumbnails`, `dep_type`) VALUES
(31, 'General Use', 'uploads/libra.png', 'ToolCat'),
(32, 'Electric Installation', 'uploads/libra.png', 'ToolCat'),
(33, 'Welding', 'uploads/libra.png', 'ToolCat'),
(34, 'Electronics', 'uploads/libra.png', 'ToolCat'),
(35, 'Automotive', 'uploads/libra.png', 'ToolCat'),
(36, 'Wrenches', 'uploads/libra.png', 'ToolCat'),
(37, 'Consumables', 'uploads/libra.png', 'ToolCat'),
(38, 'Oil/Fluids', 'uploads/libra.png', 'ToolCat'),
(39, 'Refrigerator & Air Conditioning', 'uploads/libra.png', 'ToolCat'),
(40, 'Skills Competition Tools', 'uploads/libra.png', 'ToolCat'),
(54, 'Ground Floor - Old Building', '../main-upload/gemini.png', 'Location'),
(55, '2nd Floor - Old Building', '../main-upload/gemini.png', 'Location'),
(56, 'Grand Floor - New Building ', '../main-upload/gemini.png', 'Location'),
(57, '1st Floor - New Building ', '../main-upload/gemini.png', 'Location'),
(58, '2nd Floor - New Building', '../main-upload/gemini.png', 'Location'),
(59, '3rd Floor - New Building', '../main-upload/gemini.png', 'Location'),
(60, 'Roof Deck - New Building', '../main-upload/gemini.png', 'Location'),
(61, 'Computer Laboratory', '../main-upload/gemini.png', 'Location');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_serial` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_brand` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_serial`, `item_name`, `item_brand`, `item_description`, `item_status`) VALUES
(26, 1234, 'acer', 'intel', '<p>black</p>\r\n', 'New'),
(27, 2134, 'linovo1', 'i54', '<p>white</p>\r\n', 'In-Used'),
(28, 4532, 'hp', 'hpe12', '<p>gold</p>\r\n', 'Good condition'),
(29, 1209456, 'dell', 'dell21', '<p>blue</p>\r\n', 'Good condition');

-- --------------------------------------------------------

--
-- Table structure for table `items_available`
--

CREATE TABLE `items_available` (
  `item_id` int(11) NOT NULL,
  `custodian` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_brand` varchar(255) NOT NULL,
  `item_model` varchar(100) NOT NULL,
  `item_serial` int(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL,
  `item_status` varchar(255) DEFAULT 'Available',
  `item_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items_available`
--

INSERT INTO `items_available` (`item_id`, `custodian`, `category`, `item_name`, `item_brand`, `item_model`, `item_serial`, `item_description`, `department`, `item_status`, `item_remarks`) VALUES
(346, 'sample', 'Tools', 'monitor', 'dell', 'SDAW23', 123123, 'quality', 'BSCRIM', 'Available', 'Good'),
(348, 'sample', 'Tools', 'screen', 'nokia', 'DDW23D', 31323, 'nice', 'BSIT', 'Available', 'Good'),
(349, 'sample', 'Equipment', 'equipment1', 'samsung', 'DADW231', 11132, 'quality', 'BSIT', 'Available', 'Good'),
(350, 'sample', 'Equipment', 'equipment2', 'samsung', 'DADW232', 23123, 'quality', 'SHS', 'Available', 'Defective'),
(351, 'sample', 'Equipment', 'equipment3', 'samsung', 'DADW2322', 231233, 'quality', 'SHS', 'Available', 'Missing'),
(352, 'sample', 'Equipment', 'equipment4', 'samsung', 'DADW2323', 2312332, 'quality', 'SHS', 'Available', 'Defective'),
(353, 'sample', 'Equipment', 'equipment5', 'samsung', 'DADW2AEW', 2312323, 'quality', 'SHS', 'Available', 'Missing'),
(354, 'sample', 'Equipment', 'equipment6', 'samsung', 'DAD223', 231231, 'quality', 'TECHNICAL', 'Available', 'Good'),
(356, 'sample', 'Equipment', 'equipment8', 'nokia', 'AWDWD78d', 111133, 'quality', 'TECHNICAL', 'Available', 'Defective'),
(357, 'sample', 'Equipment', 'equipment9', 'dell', 'DAWDAW2', 123122, 'qaulity', 'SHS', 'Available', 'Missing'),
(358, 'sample', 'Tools', 'Matthew Quinto', 'DELL', 'DAWD123', 452542, 'nice', 'Indra Sistemas', 'Available', 'Good'),
(359, 'sample', 'Tools', 'Matthew Quinto', 'asus', 'FAWDAD67', 3342, 'nice', 'GTP1 Pioneer', 'Available', 'Good'),
(360, 'sample', 'Tools', 'tools2', 'samsung', 'FSAEF333', 453452, 'eys', 'GTP1 Pioneer', 'Available', 'Good'),
(363, 'sample', 'Tools', 'printer', '', '', 23124, 'noice', 'Electric Installation', 'Available', 'Good'),
(364, 'sample', 'Equipment', 'desktop', '', '', 2223, 'noice', '1st Floor - New Building ', 'Available', 'Defective'),
(365, 'sample', 'Tools', 'television', '', '', 33782, 'DAHWD67', 'Electronics', 'Available', 'Good'),
(366, 'sample', 'Equipment', 'large screen', '', '', 9993, 'DAWDA78', 'General Use', 'Available', 'Defective'),
(367, 'sample', 'Tools', 'small screen', '', '', 5564, 'DAWA34', 'Welding', 'Available', 'Good'),
(368, 'sample1', 'Tools', 'phone', '', '', 22123, 'ADAW78', 'Automotive', 'Available', 'Good'),
(369, 'sample2', 'Equipment', 'touch pad', '', '', 423423, 'DAWD34', '2nd Floor - Old Building', 'Available', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `release_details`
--

CREATE TABLE `release_details` (
  `release_details_id` int(11) NOT NULL,
  `dep_id` int(128) NOT NULL,
  `item_id` int(11) NOT NULL,
  `release_id` int(11) NOT NULL,
  `release_status` varchar(128) NOT NULL,
  `remarks` varchar(128) NOT NULL,
  `date_return` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `release_details`
--

INSERT INTO `release_details` (`release_details_id`, `dep_id`, `item_id`, `release_id`, `release_status`, `remarks`, `date_return`) VALUES
(129, 19, 29, 140, 'Returned', ' / Brand new', '2017-01-06 11:28:26'),
(130, 17, 29, 141, 'pending', '/ Re-used', '0000-00-00 00:00:00'),
(131, 21, 27, 142, 'pending', ' / Brand new', '0000-00-00 00:00:00'),
(132, 18, 28, 143, 'Returned', ' / Brand new', '2017-01-10 13:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_release`
--

CREATE TABLE `tbl_release` (
  `release_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date_borrow` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_release`
--

INSERT INTO `tbl_release` (`release_id`, `client_id`, `date_borrow`) VALUES
(140, 1, '2017-01-06 11:28:13'),
(141, 4, '2017-01-06 12:28:39'),
(142, 3, '2017-01-07 18:00:52'),
(143, 4, '2017-01-10 13:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `technical_user`
--

CREATE TABLE `technical_user` (
  `tech_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `thumbnails` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `technical_user`
--

INSERT INTO `technical_user` (`tech_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(2, 'chito', 'user', 'oting1', 'tianzon', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `transaction_history_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `client_id` int(11) NOT NULL,
  `release_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`transaction_history_id`, `item_id`, `action`, `client_id`, `release_id`, `admin_name`, `date_added`) VALUES
(164, 25, 'Borrowing Item', 1, 54, ' ', '2016-12-10 15:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `adminthumbnails` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `role`, `adminthumbnails`) VALUES
(31, 'student', 'student', 'student', 'student', '$2y$10$GSgq4KWrGMPbe2kdneKktewrE4LejVMV2USxA55DcPEwP/yM/I8OC', 'student', 'images/NO-IMAGE-AVAILABLE.jpg'),
(32, 'admin', 'admin', 'admin', 'admin', '$2y$10$FLeQ0mRcK0lcmDz9djJ28O.kYQhD/zZc2UlsQV3awKaV55KRY6npu', 'admin', 'images/NO-IMAGE-AVAILABLE.jpg'),
(33, 'super', 'super', 'super', 'super', '$2y$10$8kBuopfvmb0ARhDTpwe89eHXg631yjyfhoov5gaYcUZ.fTvz6Bnt.', 'Super Admin', 'images/NO-IMAGE-AVAILABLE.jpg'),
(34, 'officer', 'officer', 'officer', 'officer', '$2y$10$YkQ871qcVkRo59OEjoeyTuyixS87e2fWdMgaoAS.FWj6Dt4s26Xam', 'officer', 'images/NO-IMAGE-AVAILABLE.jpg'),
(37, 'user1', 'user1', 'user1', 'user1', '$2y$10$o4oUQcj39Pcu7vmpg0EPRubJQkW8s0nik34sIzcOr1HZ0sECCb9iS', 'student', 'images/NO-IMAGE-AVAILABLE.jpg'),
(38, 'user2', 'user2', 'user2', 'user2', '$2y$10$M/gv.EURgRM1fnYNJVwUQ.OA8ZoZSNCPpHOniFFb0d8mqPk5WC0Lq', 'student', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `user_id` int(128) NOT NULL,
  `tech_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`, `tech_id`) VALUES
(1, 'jonremus', '2016-12-11 11:02:41', '2024-03-31', 1, 0),
(234, 'Jonremus', '2024-03-31 07:03:11', '2024-03-31', 1, 0),
(235, 'chito', '2024-03-31 07:07:13', '', 0, 2),
(236, 'chito', '2024-03-31 07:07:31', '', 0, 2),
(237, 'chito', '2024-03-31 07:07:36', '', 0, 2),
(238, 'chito', '2024-03-31 07:13:57', '2024-04-05', 3, 0),
(239, 'Jonremus', '2024-03-31 11:08:52', '2024-03-31', 1, 0),
(240, 'Jonremus', '2024-03-31 11:14:34', '2024-03-31', 1, 0),
(241, 'Jonremus', '2024-03-31 12:05:35', '2024-03-31', 1, 0),
(242, 'jam', '2024-03-31 12:06:48', '2024-03-31', 5, 0),
(243, 'Jonremus', '2024-03-31 12:08:02', '2024-03-31', 1, 0),
(244, 'Jonremus', '2024-03-31 12:22:35', '2024-03-31', 1, 0),
(245, 'jam', '2024-03-31 12:23:38', '2024-03-31', 9, 0),
(246, 'Jonremus', '2024-03-31 12:26:13', '2024-03-31', 1, 0),
(247, 'jam', '2024-03-31 12:27:02', '2024-03-31', 10, 0),
(248, 'Jonremus', '2024-03-31 12:27:31', '2024-03-31', 1, 0),
(249, 'Jonremus', '2024-03-31 15:22:00', '2024-03-31', 1, 0),
(250, 'Jonremus', '2024-03-31 15:23:43', '2024-03-31', 1, 0),
(251, 'mikay', '2024-03-31 15:28:18', '2024-03-31', 13, 0),
(252, 'Jonremus', '2024-03-31 15:28:54', '2024-03-31', 1, 0),
(253, 'jam', '2024-03-31 16:04:33', '2024-04-22', 18, 0),
(254, 'jam', '2024-03-31 17:42:44', '2024-04-22', 18, 0),
(255, 'jam', '2024-04-01 16:26:59', '2024-04-22', 18, 0),
(256, 'jam', '2024-04-01 16:53:12', '2024-04-22', 18, 0),
(257, 'jam', '2024-04-01 17:03:40', '2024-04-22', 18, 0),
(258, 'jam', '2024-04-01 17:43:32', '2024-04-22', 18, 0),
(259, 'jam', '2024-04-01 17:57:37', '2024-04-22', 18, 0),
(260, 'jam', '2024-04-01 18:31:04', '2024-04-22', 18, 0),
(261, 'jam', '2024-04-01 16:52:44', '2024-04-22', 18, 0),
(262, 'jam', '2024-04-02 09:34:25', '2024-04-22', 18, 0),
(263, 'jam', '2024-04-03 06:34:23', '2024-04-22', 18, 0),
(264, 'jam', '2024-04-03 20:37:03', '2024-04-22', 18, 0),
(265, 'jam', '2024-04-03 20:49:54', '2024-04-22', 18, 0),
(266, 'jam', '2024-04-03 20:57:25', '2024-04-22', 18, 0),
(267, 'jam', '2024-04-03 20:57:56', '2024-04-22', 18, 0),
(268, 'jam', '2024-04-03 21:22:14', '2024-04-22', 18, 0),
(269, 'jam', '2024-04-03 21:49:40', '2024-04-22', 18, 0),
(270, 'jam', '2024-04-03 21:51:43', '2024-04-22', 18, 0),
(271, 'jam', '2024-04-03 22:32:08', '2024-04-22', 18, 0),
(272, 'jam', '2024-04-04 12:04:54', '2024-04-22', 18, 0),
(273, 'jam', '2024-04-04 12:04:54', '2024-04-22', 18, 0),
(274, 'jam', '2024-04-04 20:13:36', '2024-04-22', 18, 0),
(275, 'jam', '2024-04-04 20:26:59', '2024-04-22', 18, 0),
(276, 'jam', '2024-04-05 09:58:57', '2024-04-22', 18, 0),
(277, 'jam', '2024-04-05 10:54:09', '2024-04-22', 18, 0),
(278, 'jam', '2024-04-05 12:40:14', '2024-04-22', 18, 0),
(279, 'jam', '2024-04-05 18:41:16', '2024-04-22', 18, 0),
(280, 'chito', '2024-04-05 18:42:19', '2024-04-05', 3, 0),
(281, 'tebs ', '2024-04-05 18:43:29', '2024-04-05', 21, 0),
(282, 'jam', '2024-04-05 19:34:02', '2024-04-22', 18, 0),
(283, 'chito', '2024-04-05 19:43:02', '2024-04-05', 3, 0),
(284, 'chito', '2024-04-05 20:53:14', '2024-04-05', 3, 0),
(285, 'jam', '2024-04-05 21:00:45', '2024-04-22', 18, 0),
(286, 'chito', '2024-04-05 21:46:36', '2024-04-05', 3, 0),
(287, 'jam', '2024-04-05 23:04:52', '2024-04-22', 18, 0),
(288, 'chito', '2024-04-05 23:10:55', '2024-04-05', 3, 0),
(289, 'jam', '2024-04-05 23:13:49', '2024-04-22', 18, 0),
(290, 'jam', '2024-04-05 23:16:15', '2024-04-22', 18, 0),
(291, 'jam', '2024-04-05 23:16:48', '2024-04-22', 18, 0),
(292, 'chito', '2024-04-05 23:18:17', '2024-04-05', 3, 0),
(293, 'jam', '2024-04-05 23:20:10', '2024-04-22', 18, 0),
(294, 'jam', '2024-04-05 23:23:07', '2024-04-22', 18, 0),
(295, 'jam', '2024-04-05 23:26:22', '2024-04-22', 18, 0),
(296, 'chito', '2024-04-05 23:27:04', '2024-04-05', 3, 0),
(297, 'jam', '2024-04-05 23:32:44', '2024-04-22', 18, 0),
(298, 'chito', '2024-04-05 23:35:02', '2024-04-05', 3, 0),
(299, 'jam', '2024-04-05 23:59:24', '2024-04-22', 18, 0),
(300, 'jam', '2024-04-06 00:00:12', '2024-04-22', 18, 0),
(301, 'chito', '2024-04-06 00:01:06', '2024-04-05', 3, 0),
(302, 'jam', '2024-04-06 00:11:06', '2024-04-22', 18, 0),
(303, 'chito', '2024-04-06 00:14:10', '2024-04-05', 3, 0),
(304, 'jam', '2024-04-06 00:19:32', '2024-04-22', 18, 0),
(305, 'chito', '2024-04-06 00:28:43', '2024-04-05', 3, 0),
(306, 'jam', '2024-04-06 00:32:21', '2024-04-22', 18, 0),
(307, 'chito', '2024-04-06 00:52:41', '', 3, 0),
(308, 'jam', '2024-04-07 22:50:03', '2024-04-22', 18, 0),
(309, 'mikay', '2024-04-08 13:20:10', '2024-04-08', 19, 0),
(310, 'mikay', '2024-04-08 13:20:10', '2024-04-08', 19, 0),
(311, 'tebs', '2024-04-08 13:21:16', '', 21, 0),
(312, 'tebs', '2024-04-08 13:28:11', '', 21, 0),
(313, 'ewqewq', '2024-04-09 19:08:33', '', 22, 0),
(314, 'ewqewq', '2024-04-11 19:32:26', '', 22, 0),
(315, 'jam', '2024-04-12 07:20:15', '2024-04-22', 18, 0),
(316, 'jam', '2024-04-12 07:47:36', '2024-04-22', 18, 0),
(317, 'jam', '2024-04-12 10:10:08', '2024-04-22', 18, 0),
(318, 'jam', '2024-04-12 20:43:31', '2024-04-22', 18, 0),
(319, 'jam', '2024-04-15 21:52:55', '2024-04-22', 18, 0),
(320, 'ewqewq', '2024-04-16 22:43:31', '', 22, 0),
(321, 'ewqewq', '2024-04-17 00:06:05', '', 22, 0),
(322, 'jam', '2024-04-20 10:53:14', '2024-04-22', 18, 0),
(323, 'jam', '2024-04-21 00:30:08', '2024-04-22', 18, 0),
(324, 'jam', '2024-04-21 23:06:21', '2024-04-22', 18, 0),
(325, 'jam', '2024-04-21 23:12:29', '2024-04-22', 18, 0),
(326, 'student', '2024-04-21 23:28:18', '2024-04-22', 23, 0),
(327, 'admin', '2024-04-21 23:28:34', '2024-04-22', 26, 0),
(328, 'jam', '2024-04-21 23:29:09', '2024-04-22', 18, 0),
(329, 'jam', '2024-04-21 23:52:59', '2024-04-22', 18, 0),
(330, 'admin', '2024-04-21 23:53:19', '2024-04-22', 26, 0),
(331, 'admin', '2024-04-22 11:58:15', '2024-04-22', 26, 0),
(332, 'student', '2024-04-22 12:00:34', '2024-04-22', 23, 0),
(333, 'officer', '2024-04-22 12:02:40', '2024-04-22', 28, 0),
(334, 'student', '2024-04-22 12:03:43', '2024-04-22', 23, 0),
(335, 'jam', '2024-04-22 12:05:02', '2024-04-22', 18, 0),
(336, 'admin', '2024-04-22 12:05:40', '2024-04-22', 26, 0),
(337, 'officer', '2024-04-22 12:05:56', '2024-04-22', 28, 0),
(338, 'admin', '2024-04-22 12:06:58', '2024-04-22', 26, 0),
(339, 'student', '2024-04-22 12:07:49', '2024-04-22', 23, 0),
(340, 'admin', '2024-04-22 12:12:47', '2024-04-22', 26, 0),
(341, 'student', '2024-04-22 12:13:25', '2024-04-22', 23, 0),
(342, 'officer', '2024-04-22 12:14:17', '2024-04-22', 28, 0),
(343, 'jam', '2024-04-22 12:16:00', '2024-04-22', 18, 0),
(344, 'admin', '2024-04-22 12:18:18', '2024-04-22', 26, 0),
(345, 'admin', '2024-04-22 12:20:33', '2024-04-22', 26, 0),
(346, 'admin', '2024-04-22 12:26:38', '2024-04-22', 26, 0),
(347, 'admin', '2024-04-22 12:27:04', '2024-04-22', 26, 0),
(348, 'student1', '2024-04-22 12:27:32', '2024-04-22', 29, 0),
(349, 'student1', '2024-04-22 12:28:21', '2024-04-22', 29, 0),
(350, 'student1', '2024-04-22 12:29:45', '', 29, 0),
(351, 'student', '2024-04-22 12:33:42', '2024-05-03', 31, 0),
(352, 'student', '2024-04-22 12:35:02', '2024-05-03', 31, 0),
(353, 'admin', '2024-04-22 12:36:32', '2024-05-03', 32, 0),
(354, 'student', '2024-04-22 12:37:49', '2024-05-03', 31, 0),
(355, 'superad', '2024-04-22 12:39:03', '2024-05-03', 33, 0),
(356, 'superAd', '2024-04-22 22:47:35', '2024-05-03', 33, 0),
(357, 'officer', '2024-04-22 22:48:18', '2024-05-03', 34, 0),
(358, 'admin', '2024-04-22 22:49:57', '2024-05-03', 32, 0),
(359, 'superAd', '2024-04-22 22:51:25', '2024-05-03', 33, 0),
(360, 'superAd', '2024-04-22 22:53:01', '2024-05-03', 33, 0),
(361, 'superAd', '2024-04-22 22:55:45', '2024-05-03', 33, 0),
(362, 'super', '2024-04-22 22:56:37', '2024-05-03', 33, 0),
(363, 'super', '2024-04-22 23:01:54', '2024-05-03', 33, 0),
(364, 'admin', '2024-04-22 23:11:27', '2024-05-03', 32, 0),
(365, 'super', '2024-04-22 23:11:49', '2024-05-03', 33, 0),
(366, 'admin', '2024-04-22 23:22:14', '2024-05-03', 32, 0),
(367, 'officer', '2024-04-22 23:23:51', '2024-05-03', 34, 0),
(368, 'admin', '2024-04-22 23:46:27', '2024-05-03', 32, 0),
(369, 'officer', '2024-04-22 23:46:45', '2024-05-03', 34, 0),
(370, 'super', '2024-04-22 23:56:35', '2024-05-03', 33, 0),
(371, 'admin', '2024-04-22 23:56:45', '2024-05-03', 32, 0),
(372, 'student', '2024-04-22 23:58:17', '2024-05-03', 31, 0),
(373, 'super', '2024-04-23 00:02:25', '2024-05-03', 33, 0),
(374, 'super', '2024-04-23 07:36:27', '2024-05-03', 33, 0),
(375, 'super', '2024-04-23 07:39:51', '2024-05-03', 33, 0),
(376, 'admin', '2024-04-23 08:22:13', '2024-05-03', 32, 0),
(377, 'super', '2024-04-23 08:24:37', '2024-05-03', 33, 0),
(378, 'admin', '2024-04-23 08:31:48', '2024-05-03', 32, 0),
(379, 'super', '2024-04-23 08:35:21', '2024-05-03', 33, 0),
(380, 'admin', '2024-04-23 08:42:21', '2024-05-03', 32, 0),
(381, 'admin', '2024-04-23 09:13:54', '2024-05-03', 32, 0),
(382, 'officer', '2024-04-23 09:15:02', '2024-05-03', 34, 0),
(383, 'super', '2024-04-23 09:15:27', '2024-05-03', 33, 0),
(384, 'admin', '2024-04-23 09:23:28', '2024-05-03', 32, 0),
(385, 'super', '2024-04-23 10:15:59', '2024-05-03', 33, 0),
(386, 'admin', '2024-04-23 10:19:49', '2024-05-03', 32, 0),
(387, 'super', '2024-04-23 10:20:04', '2024-05-03', 33, 0),
(388, 'super', '2024-04-23 10:24:06', '2024-05-03', 33, 0),
(389, 'officer', '2024-04-23 11:50:43', '2024-05-03', 34, 0),
(390, 'super', '2024-04-23 11:52:22', '2024-05-03', 33, 0),
(391, 'officer', '2024-04-23 11:55:53', '2024-05-03', 34, 0),
(392, 'super', '2024-04-23 12:11:35', '2024-05-03', 33, 0),
(393, 'super', '2024-04-23 12:16:39', '2024-05-03', 33, 0),
(394, 'super', '2024-04-23 22:51:46', '2024-05-03', 33, 0),
(395, 'super', '2024-04-23 22:54:11', '2024-05-03', 33, 0),
(396, 'admin', '2024-04-23 22:55:54', '2024-05-03', 32, 0),
(397, 'super', '2024-04-23 22:56:14', '2024-05-03', 33, 0),
(398, 'officer', '2024-04-23 22:58:33', '2024-05-03', 34, 0),
(399, 'student', '2024-04-23 22:59:37', '2024-05-03', 31, 0),
(400, 'super', '2024-04-23 23:01:34', '2024-05-03', 33, 0),
(401, 'admin', '2024-04-23 23:01:57', '2024-05-03', 32, 0),
(402, 'student', '2024-04-23 23:02:23', '2024-05-03', 31, 0),
(403, 'admin', '2024-04-23 23:03:26', '2024-05-03', 32, 0),
(404, 'officer', '2024-04-23 23:03:50', '2024-05-03', 34, 0),
(405, 'admin', '2024-04-23 23:05:02', '2024-05-03', 32, 0),
(406, 'student', '2024-04-23 23:05:25', '2024-05-03', 31, 0),
(407, 'admin', '2024-04-23 23:06:39', '2024-05-03', 32, 0),
(408, 'officer', '2024-04-23 23:07:05', '2024-05-03', 34, 0),
(409, 'student', '2024-04-23 23:14:54', '2024-05-03', 31, 0),
(410, 'admin', '2024-04-23 23:15:48', '2024-05-03', 32, 0),
(411, 'student', '2024-04-23 23:24:10', '2024-05-03', 31, 0),
(412, 'admin', '2024-04-23 23:25:30', '2024-05-03', 32, 0),
(413, 'student', '2024-04-23 23:29:56', '2024-05-03', 31, 0),
(414, 'student', '2024-04-23 23:35:02', '2024-05-03', 31, 0),
(415, 'admin', '2024-04-23 23:36:10', '2024-05-03', 32, 0),
(416, 'super', '2024-04-23 23:40:05', '2024-05-03', 33, 0),
(417, 'super', '2024-04-24 07:44:34', '2024-05-03', 33, 0),
(418, 'admin', '2024-04-24 07:47:12', '2024-05-03', 32, 0),
(419, 'user2', '2024-04-24 07:47:57', '2024-04-24', 36, 0),
(420, 'super', '2024-04-24 07:48:43', '2024-05-03', 33, 0),
(421, 'user1', '2024-04-24 07:50:55', '2024-04-25', 37, 0),
(422, 'officer', '2024-04-24 07:51:13', '2024-05-03', 34, 0),
(423, 'super', '2024-04-24 07:51:42', '2024-05-03', 33, 0),
(424, 'user1', '2024-04-24 08:12:51', '2024-04-25', 37, 0),
(425, 'user1', '2024-04-24 08:18:21', '2024-04-25', 37, 0),
(426, 'admin', '2024-04-24 08:22:01', '2024-05-03', 32, 0),
(427, 'user1', '2024-04-24 08:23:35', '2024-04-25', 37, 0),
(428, 'user1', '2024-04-24 08:32:03', '2024-04-25', 37, 0),
(429, 'officer', '2024-04-24 08:34:55', '2024-05-03', 34, 0),
(430, 'super', '2024-04-24 08:44:13', '2024-05-03', 33, 0),
(431, 'super', '2024-04-24 08:51:19', '2024-05-03', 33, 0),
(432, 'admin', '2024-04-24 08:54:48', '2024-05-03', 32, 0),
(433, 'officer', '2024-04-24 08:57:46', '2024-05-03', 34, 0),
(434, 'admin', '2024-04-24 09:02:37', '2024-05-03', 32, 0),
(435, 'officer', '2024-04-24 09:02:52', '2024-05-03', 34, 0),
(436, 'user1', '2024-04-24 09:05:29', '2024-04-25', 37, 0),
(437, 'super', '2024-04-24 09:06:34', '2024-05-03', 33, 0),
(438, 'super', '2024-04-24 09:14:35', '2024-05-03', 33, 0),
(439, 'admin', '2024-04-24 09:18:11', '2024-05-03', 32, 0),
(440, 'officer', '2024-04-24 09:22:09', '2024-05-03', 34, 0),
(441, 'admin', '2024-04-24 10:29:50', '2024-05-03', 32, 0),
(442, 'user1', '2024-04-24 10:30:56', '2024-04-25', 37, 0),
(443, 'admin', '2024-04-24 10:31:58', '2024-05-03', 32, 0),
(444, 'user1', '2024-04-24 10:34:35', '2024-04-25', 37, 0),
(445, 'admin', '2024-04-24 10:35:40', '2024-05-03', 32, 0),
(446, 'user1', '2024-04-24 10:36:20', '2024-04-25', 37, 0),
(447, 'officer', '2024-04-24 10:36:32', '2024-05-03', 34, 0),
(448, 'user1', '2024-04-24 10:36:56', '2024-04-25', 37, 0),
(449, 'admin', '2024-04-24 10:38:33', '2024-05-03', 32, 0),
(450, 'admin', '2024-04-24 10:40:29', '2024-05-03', 32, 0),
(451, 'user1', '2024-04-24 10:40:47', '2024-04-25', 37, 0),
(452, 'super', '2024-04-24 10:41:57', '2024-05-03', 33, 0),
(453, 'user1', '2024-04-24 10:43:12', '2024-04-25', 37, 0),
(454, 'super', '2024-04-24 10:44:17', '2024-05-03', 33, 0),
(455, 'admin', '2024-04-24 10:45:39', '2024-05-03', 32, 0),
(456, 'user1', '2024-04-24 10:48:54', '2024-04-25', 37, 0),
(457, 'super', '2024-04-24 10:49:47', '2024-05-03', 33, 0),
(458, 'user1', '2024-04-24 10:50:45', '2024-04-25', 37, 0),
(459, 'super', '2024-04-24 10:57:35', '2024-05-03', 33, 0),
(460, 'admin', '2024-04-24 20:24:27', '2024-05-03', 32, 0),
(461, 'super', '2024-04-24 20:33:31', '2024-05-03', 33, 0),
(462, 'admin', '2024-04-24 21:07:35', '2024-05-03', 32, 0),
(463, 'super', '2024-04-24 21:12:23', '2024-05-03', 33, 0),
(464, 'super', '2024-04-24 21:44:06', '2024-05-03', 33, 0),
(465, 'admin', '2024-04-24 21:48:15', '2024-05-03', 32, 0),
(466, 'super', '2024-04-24 21:55:00', '2024-05-03', 33, 0),
(467, 'admin', '2024-04-24 21:55:19', '2024-05-03', 32, 0),
(468, 'officer', '2024-04-24 21:56:20', '2024-05-03', 34, 0),
(469, 'super', '2024-04-25 10:51:26', '2024-05-03', 33, 0),
(470, 'admin', '2024-04-25 11:13:55', '2024-05-03', 32, 0),
(471, 'super', '2024-04-25 11:17:05', '2024-05-03', 33, 0),
(472, 'super', '2024-04-25 12:31:03', '2024-05-03', 33, 0),
(473, 'admin', '2024-04-25 14:19:28', '2024-05-03', 32, 0),
(474, 'officer', '2024-04-25 14:19:44', '2024-05-03', 34, 0),
(475, 'super', '2024-04-25 14:22:03', '2024-05-03', 33, 0),
(476, 'admin', '2024-04-25 14:23:00', '2024-05-03', 32, 0),
(477, 'super', '2024-04-25 14:23:15', '2024-05-03', 33, 0),
(478, 'super', '2024-04-25 15:14:34', '2024-05-03', 33, 0),
(479, 'admin', '2024-04-25 16:05:54', '2024-05-03', 32, 0),
(480, 'officer', '2024-04-25 16:31:40', '2024-05-03', 34, 0),
(481, 'admin', '2024-04-25 16:32:22', '2024-05-03', 32, 0),
(482, 'super', '2024-04-25 16:46:48', '2024-05-03', 33, 0),
(483, 'admin', '2024-04-25 16:47:31', '2024-05-03', 32, 0),
(484, 'user1', '2024-04-25 17:01:04', '2024-04-25', 37, 0),
(485, 'user1', '2024-04-25 17:02:08', '2024-04-25', 37, 0),
(486, 'officer', '2024-04-25 17:03:37', '2024-05-03', 34, 0),
(487, 'admin', '2024-04-25 17:42:50', '2024-05-03', 32, 0),
(488, 'officer', '2024-04-25 17:43:04', '2024-05-03', 34, 0),
(489, 'admin', '2024-04-25 17:45:18', '2024-05-03', 32, 0),
(490, 'officer', '2024-04-25 17:46:02', '2024-05-03', 34, 0),
(491, 'admin', '2024-04-25 17:52:35', '2024-05-03', 32, 0),
(492, 'officer', '2024-04-25 17:57:28', '2024-05-03', 34, 0),
(493, 'student', '2024-04-25 17:59:27', '2024-05-03', 31, 0),
(494, 'super', '2024-04-26 11:14:03', '2024-05-03', 33, 0),
(495, 'officer', '2024-04-26 11:15:36', '2024-05-03', 34, 0),
(496, 'super', '2024-04-26 11:16:19', '2024-05-03', 33, 0),
(497, 'super', '2024-04-26 11:33:22', '2024-05-03', 33, 0),
(498, 'super', '2024-04-26 12:05:53', '2024-05-03', 33, 0),
(499, 'student', '2024-04-26 17:18:58', '2024-05-03', 31, 0),
(500, 'user1', '2024-04-26 17:21:41', '', 37, 0),
(501, 'student', '2024-04-26 17:29:32', '2024-05-03', 31, 0),
(502, 'officer', '2024-04-26 17:30:34', '2024-05-03', 34, 0),
(503, 'student', '2024-04-26 17:31:00', '2024-05-03', 31, 0),
(504, 'student', '2024-04-26 17:31:20', '2024-05-03', 31, 0),
(505, 'super', '2024-04-26 17:32:21', '2024-05-03', 33, 0),
(506, 'student', '2024-04-26 17:35:04', '2024-05-03', 31, 0),
(507, 'student', '2024-04-26 17:36:39', '2024-05-03', 31, 0),
(508, 'super', '2024-04-26 17:37:45', '2024-05-03', 33, 0),
(509, 'officer', '2024-04-26 17:41:06', '2024-05-03', 34, 0),
(510, 'super', '2024-04-28 22:51:36', '2024-05-03', 33, 0),
(511, 'super', '2024-04-28 23:01:57', '2024-05-03', 33, 0),
(512, 'user2', '2024-04-28 23:02:54', '2024-04-28', 38, 0),
(513, 'super', '2024-04-28 23:03:45', '2024-05-03', 33, 0),
(514, 'super', '2024-04-28 23:04:41', '2024-05-03', 33, 0),
(515, 'officer', '2024-04-28 23:08:47', '2024-05-03', 34, 0),
(516, 'officer', '2024-04-28 23:09:11', '2024-05-03', 34, 0),
(517, 'admin', '2024-04-28 23:09:49', '2024-05-03', 32, 0),
(518, 'super', '2024-04-28 23:13:23', '2024-05-03', 33, 0),
(519, 'super', '2024-04-28 23:16:42', '2024-05-03', 33, 0),
(520, 'student', '2024-04-28 23:25:58', '2024-05-03', 31, 0),
(521, 'admin', '2024-04-28 23:29:01', '2024-05-03', 32, 0),
(522, 'student', '2024-04-28 23:30:03', '2024-05-03', 31, 0),
(523, 'officer', '2024-04-28 23:31:00', '2024-05-03', 34, 0),
(524, 'student', '2024-04-28 23:31:49', '2024-05-03', 31, 0),
(525, 'super', '2024-04-28 23:33:10', '2024-05-03', 33, 0),
(526, 'super', '2024-04-28 23:47:45', '2024-05-03', 33, 0),
(527, 'super', '2024-04-29 23:25:18', '2024-05-03', 33, 0),
(528, 'admin', '2024-04-29 23:25:36', '2024-05-03', 32, 0),
(529, 'officer', '2024-04-29 23:26:47', '2024-05-03', 34, 0),
(530, 'super', '2024-04-29 23:30:07', '2024-05-03', 33, 0),
(531, 'admin', '2024-04-29 23:30:37', '2024-05-03', 32, 0),
(532, 'super', '2024-04-29 23:38:45', '2024-05-03', 33, 0),
(533, 'admin', '2024-04-29 23:40:26', '2024-05-03', 32, 0),
(534, 'officer', '2024-04-29 23:44:07', '2024-05-03', 34, 0),
(535, 'admin', '2024-04-29 23:44:47', '2024-05-03', 32, 0),
(536, 'admin', '2024-04-30 15:29:09', '2024-05-03', 32, 0),
(537, 'officer', '2024-04-30 15:39:07', '2024-05-03', 34, 0),
(538, 'super', '2024-04-30 15:59:00', '2024-05-03', 33, 0),
(539, 'admin', '2024-04-30 17:05:44', '2024-05-03', 32, 0),
(540, 'super', '2024-04-30 17:06:23', '2024-05-03', 33, 0),
(541, 'admin', '2024-04-30 17:06:47', '2024-05-03', 32, 0),
(542, 'officer', '2024-04-30 17:13:36', '2024-05-03', 34, 0),
(543, 'student', '2024-04-30 17:20:55', '2024-05-03', 31, 0),
(544, 'super', '2024-04-30 17:23:20', '2024-05-03', 33, 0),
(545, 'admin', '2024-04-30 17:25:53', '2024-05-03', 32, 0),
(546, 'super', '2024-04-30 17:26:11', '2024-05-03', 33, 0),
(547, 'admin', '2024-04-30 17:29:12', '2024-05-03', 32, 0),
(548, 'officer', '2024-04-30 17:31:17', '2024-05-03', 34, 0),
(549, 'student', '2024-04-30 17:32:05', '2024-05-03', 31, 0),
(550, 'super', '2024-04-30 17:33:26', '2024-05-03', 33, 0),
(551, 'officer', '2024-04-30 18:01:40', '2024-05-03', 34, 0),
(552, 'admin', '2024-04-30 18:02:09', '2024-05-03', 32, 0),
(553, 'officer', '2024-04-30 18:06:07', '2024-05-03', 34, 0),
(554, 'super', '2024-04-30 18:19:53', '2024-05-03', 33, 0),
(555, 'officer', '2024-04-30 18:20:33', '2024-05-03', 34, 0),
(556, 'super', '2024-04-30 18:50:12', '2024-05-03', 33, 0),
(557, 'admin', '2024-04-30 18:52:34', '2024-05-03', 32, 0),
(558, 'super', '2024-04-30 18:56:18', '2024-05-03', 33, 0),
(559, 'super', '2024-05-02 04:06:57', '2024-05-03', 33, 0),
(560, 'admin', '2024-05-02 04:12:41', '2024-05-03', 32, 0),
(561, 'super', '2024-05-02 04:19:15', '2024-05-03', 33, 0),
(562, 'admin', '2024-05-02 04:21:41', '2024-05-03', 32, 0),
(563, 'officer', '2024-05-02 04:24:37', '2024-05-03', 34, 0),
(564, 'admin', '2024-05-02 08:37:41', '2024-05-03', 32, 0),
(565, 'officer', '2024-05-02 08:56:29', '2024-05-03', 34, 0),
(566, 'super', '2024-05-02 09:50:22', '2024-05-03', 33, 0),
(567, 'admin', '2024-05-02 09:53:15', '2024-05-03', 32, 0),
(568, 'super', '2024-05-02 10:03:31', '2024-05-03', 33, 0),
(569, 'super', '2024-05-02 12:25:18', '2024-05-03', 33, 0),
(570, 'admin', '2024-05-02 12:26:19', '2024-05-03', 32, 0),
(571, 'super', '2024-05-02 12:27:10', '2024-05-03', 33, 0),
(572, 'super', '2024-05-02 13:06:58', '2024-05-03', 33, 0),
(573, 'super', '2024-05-02 13:46:37', '2024-05-03', 33, 0),
(574, 'super', '2024-05-02 14:28:44', '2024-05-03', 33, 0),
(575, 'admin', '2024-05-02 14:41:31', '2024-05-03', 32, 0),
(576, 'officer', '2024-05-02 14:41:49', '2024-05-03', 34, 0),
(577, 'super', '2024-05-02 14:46:09', '2024-05-03', 33, 0),
(578, 'admin', '2024-05-02 14:48:23', '2024-05-03', 32, 0),
(579, 'super', '2024-05-02 14:49:07', '2024-05-03', 33, 0),
(580, 'officer', '2024-05-02 14:49:25', '2024-05-03', 34, 0),
(581, 'super', '2024-05-02 14:49:58', '2024-05-03', 33, 0),
(582, 'officer', '2024-05-02 14:53:15', '2024-05-03', 34, 0),
(583, 'super', '2024-05-02 14:53:37', '2024-05-03', 33, 0),
(584, 'admin', '2024-05-02 14:53:58', '2024-05-03', 32, 0),
(585, 'super', '2024-05-02 14:58:44', '2024-05-03', 33, 0),
(586, 'officer', '2024-05-02 14:59:16', '2024-05-03', 34, 0),
(587, 'super', '2024-05-02 23:31:25', '2024-05-03', 33, 0),
(588, 'super', '2024-05-02 23:32:55', '2024-05-03', 33, 0),
(589, 'admin', '2024-05-02 23:36:18', '2024-05-03', 32, 0),
(590, 'officer', '2024-05-02 23:40:02', '2024-05-03', 34, 0),
(591, 'student', '2024-05-02 23:43:50', '2024-05-03', 31, 0),
(592, 'super', '2024-05-03 08:08:27', '2024-05-03', 33, 0),
(593, 'admin', '2024-05-03 08:11:16', '2024-05-03', 32, 0),
(594, 'super', '2024-05-03 08:14:23', '2024-05-03', 33, 0),
(595, 'admin', '2024-05-03 08:14:55', '2024-05-03', 32, 0),
(596, 'officer', '2024-05-03 08:15:11', '2024-05-03', 34, 0),
(597, 'student', '2024-05-03 08:15:29', '2024-05-03', 31, 0),
(598, 'officer', '2024-05-03 08:17:18', '2024-05-03', 34, 0),
(599, 'student', '2024-05-03 08:24:24', '2024-05-03', 31, 0),
(600, 'admin', '2024-05-03 08:26:00', '2024-05-03', 32, 0),
(601, 'student', '2024-05-03 08:26:40', '2024-05-03', 31, 0),
(602, 'officer', '2024-05-03 08:28:21', '2024-05-03', 34, 0),
(603, 'student', '2024-05-03 08:28:40', '2024-05-03', 31, 0),
(604, 'admin', '2024-05-03 08:29:19', '2024-05-03', 32, 0),
(605, 'admin', '2024-05-03 08:31:03', '2024-05-03', 32, 0),
(606, 'student', '2024-05-03 08:31:35', '2024-05-03', 31, 0),
(607, 'super', '2024-05-03 08:33:34', '2024-05-03', 33, 0),
(608, 'super', '2024-05-03 08:35:38', '2024-05-03', 33, 0),
(609, 'admin', '2024-05-03 08:43:13', '2024-05-03', 32, 0),
(610, 'admin', '2024-05-03 08:46:05', '2024-05-03', 32, 0),
(611, 'officer', '2024-05-03 08:46:55', '2024-05-03', 34, 0),
(612, 'super', '2024-05-03 08:48:45', '2024-05-03', 33, 0),
(613, 'admin', '2024-05-03 11:25:05', '2024-05-03', 32, 0),
(614, 'officer', '2024-05-03 11:31:23', '2024-05-03', 34, 0),
(615, 'student', '2024-05-03 11:40:26', '2024-05-03', 31, 0),
(616, 'super', '2024-05-03 11:41:49', '2024-05-03', 33, 0),
(617, 'admin', '2024-05-03 11:54:17', '2024-05-03', 32, 0),
(618, 'officer', '2024-05-03 11:59:51', '2024-05-03', 34, 0),
(619, 'admin', '2024-05-03 12:00:14', '2024-05-03', 32, 0),
(620, 'officer', '2024-05-03 12:00:33', '2024-05-03', 34, 0),
(621, 'admin', '2024-05-03 12:01:21', '2024-05-03', 32, 0),
(622, 'officer', '2024-05-03 12:02:28', '2024-05-03', 34, 0),
(623, 'student', '2024-05-03 12:19:33', '2024-05-03', 31, 0),
(624, 'super', '2024-05-03 12:27:54', '2024-05-03', 33, 0),
(625, 'admin', '2024-05-03 12:28:18', '2024-05-03', 32, 0),
(626, 'officer', '2024-05-03 12:28:32', '2024-05-03', 34, 0),
(627, 'super', '2024-05-03 12:28:48', '2024-05-03', 33, 0),
(628, 'super', '2024-05-03 12:29:37', '2024-05-03', 33, 0),
(629, 'admin', '2024-05-03 12:30:11', '2024-05-03', 32, 0),
(630, 'officer', '2024-05-03 12:30:57', '2024-05-03', 34, 0),
(631, 'super', '2024-05-03 12:31:18', '2024-05-03', 33, 0),
(632, 'admin', '2024-05-03 12:32:12', '2024-05-03', 32, 0),
(633, 'officer', '2024-05-03 12:32:26', '2024-05-03', 34, 0),
(634, 'super', '2024-05-03 12:32:52', '2024-05-03', 33, 0),
(635, 'admin', '2024-05-03 12:35:42', '2024-05-03', 32, 0),
(636, 'officer', '2024-05-03 13:07:25', '2024-05-03', 34, 0),
(637, 'admin', '2024-05-03 13:07:53', '2024-05-03', 32, 0),
(638, 'super', '2024-05-03 13:10:38', '2024-05-03', 33, 0),
(639, 'officer', '2024-05-03 13:11:16', '2024-05-03', 34, 0),
(640, 'student', '2024-05-03 13:11:58', '2024-05-03', 31, 0),
(641, 'super', '2024-05-03 13:12:38', '2024-05-03', 33, 0),
(642, 'student', '2024-05-03 13:13:17', '2024-05-03', 31, 0),
(643, 'super', '2024-05-03 13:38:40', '2024-05-03', 33, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `borrowing_form`
--
ALTER TABLE `borrowing_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `items_available`
--
ALTER TABLE `items_available`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `release_details`
--
ALTER TABLE `release_details`
  ADD PRIMARY KEY (`release_details_id`);

--
-- Indexes for table `tbl_release`
--
ALTER TABLE `tbl_release`
  ADD PRIMARY KEY (`release_id`);

--
-- Indexes for table `technical_user`
--
ALTER TABLE `technical_user`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`transaction_history_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=566;

--
-- AUTO_INCREMENT for table `borrowing_form`
--
ALTER TABLE `borrowing_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `items_available`
--
ALTER TABLE `items_available`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370;

--
-- AUTO_INCREMENT for table `release_details`
--
ALTER TABLE `release_details`
  MODIFY `release_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tbl_release`
--
ALTER TABLE `tbl_release`
  MODIFY `release_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `technical_user`
--
ALTER TABLE `technical_user`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `transaction_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
