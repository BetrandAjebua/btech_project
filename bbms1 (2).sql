-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 05:41 PM
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
-- Database: `bbms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `a_password` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `a_name`, `email`, `a_password`, `dob`, `address`) VALUES
(1, 'Betrand Ajebua', 'betrandajebua@gmail.com', 423423532, '2023-05-18', '0'),
(2, 'BETO', 'BE@GMAIL.COM', 11111, '0000-00-00', 'bUEA');

-- --------------------------------------------------------

--
-- Table structure for table `blood_type`
--

CREATE TABLE `blood_type` (
  `bloodId` tinyint(16) NOT NULL,
  `blood_group` text NOT NULL,
  `quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_type`
--

INSERT INTO `blood_type` (`bloodId`, `blood_group`, `quantity`) VALUES
(1, 'A', '50'),
(2, 'B', '43'),
(3, 'AB', '20'),
(4, 'O', '62');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_subject` varchar(255) NOT NULL,
  `user_message` varchar(255) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`user_id`, `user_name`, `user_email`, `user_subject`, `user_message`, `submit_time`) VALUES
(7, 'BETRAND AJEBUA', 'B@GMAIL.COM', 'SFSF', 'WFWFWF', '2023-05-12 15:06:16'),
(8, 'GNFDN', 'DSDG@GM.HTH', 'RER', 'THEHEHGER', '2023-05-12 15:08:16'),
(9, '', '', '', '', '2023-05-12 15:34:19'),
(10, 'r23r', '3r23@gmail.com', '32r23', '3r23', '2023-05-12 15:39:47'),
(11, 'sdsdgsd', 'dsgds@fsa.com', 'reger', 'grg', '2023-05-12 17:05:08'),
(12, 'hiv ', 'a@GMAIL.DD', 'EQEQ', 'EQE', '2023-05-12 17:09:58'),
(13, 'FGHS', 'DSDS@VFD.DS', 'Qeqq', 'qeqe', '2023-05-12 17:11:56'),
(14, 'wddw', 'dwd@df.f', 'wdw', 'cscs@df.com', '2023-05-12 17:12:55'),
(15, 'lo', 'lo@ff.sd', '2er', 'ewwe', '2023-05-12 17:13:45'),
(16, 'dwd', 'wdw@gmail.com', 'ewew', 'arr', '2023-05-12 17:16:04'),
(17, 'wdd', 'dwd@gf.com', 'sfs', 'fsfs', '2023-05-12 17:39:35'),
(18, 'dwd', 'dw@d.com', 'wdw', 'dw', '2023-05-12 17:40:31'),
(20, 'bebe', 'lov@d.co', 'no sub', 'yes no', '2023-05-17 10:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_password` varchar(256) NOT NULL,
  `d_email` varchar(255) NOT NULL,
  `d_number` int(15) NOT NULL,
  `d_city` varchar(255) NOT NULL,
  `d_home_address` varchar(255) NOT NULL,
  `d_blood_group` text NOT NULL,
  `d_mstatus` text NOT NULL,
  `guadian_name` varchar(255) NOT NULL,
  `guadian_number` int(15) NOT NULL,
  `guadian_home_address` varchar(255) NOT NULL,
  `d_age` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`d_id`, `d_name`, `d_password`, `d_email`, `d_number`, `d_city`, `d_home_address`, `d_blood_group`, `d_mstatus`, `guadian_name`, `guadian_number`, `guadian_home_address`, `d_age`) VALUES
(32, 'Ransome Jervert', '$2y$10$0EYGz9YgRHlCtDWr4OnLmOSDtKakSlMHONWjHzeLZOdzkKtu2dhpK', 'admin@gmail.com', 67345678, 'Buea', 'Check Point', 'A', 'Single', 'John Wong', 678325675, 'Muea', 24),
(33, 'James love', '$2y$10$/AOaFp5hx9x6Cg7LHgABpuJRtWwutsGCFvXHxHwB5JOkGhyvoJIr.', 'jame@gmail.com', 678093456, 'Kumba', 'Fiango', 'B', 'Maried', 'Oncle Ben', 678953465, 'Kosala', 50),
(34, 'James love', '$2y$10$PwaWQjkeCyDx3ipZtEmqze0J4lt7pDCjwYAYWnbyBqkZJyYp0CfaW', 'jame@gmail.com', 678093456, 'Kumba', 'Fiango', 'B', 'Maried', 'Oncle Ben', 678953465, 'Kosala', 50),
(35, 'James lover', '$2y$10$mP0f3fueSxix7fTLAzimY.PYv9DH1/mP1HMZ8/9euQm4/CWd/eyfq', 'jame@gmail.com', 678093456, 'Kumba', 'Fiango', 'B', 'Maried', 'Oncle Ben', 678953465, 'Kosala', 50),
(37, 'wino', '$2y$10$4QDVf7Ihtt9Rc285aWk.buALr54acnLNGahhPGKkuhmHrq8wj./vG', 'admin@d.h', 453263, 'fbdfh', 'fgf', 'AB', 'Maried', 'gdds', 4565366, 'dsvdsgd', 1111),
(38, 'merlin', '$2y$10$.AxAjL1VDvxi0.KzYUgQ0.rS89McnlQm22ByI8lsgGnsYIt5YYPti', 'admin@d.e', 214, '4343', '14fdsfsd', 'A', 'Maried', 'cvzxcx', 0, 'sv zsv', 11),
(39, 'John', '$2y$10$COpVyOBYondt9kHGDycEduo8uVoGjRm96MwPD6OOp4OKbDkEfmhtq', '40@cv.jh', 235255, 'Belgium', 'dfwe', 'A', 'Maried', 'ewfew', 0, 'ewf', 50);

-- --------------------------------------------------------

--
-- Table structure for table `donor_request`
--

CREATE TABLE `donor_request` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(255) NOT NULL,
  `dr_pass` int(11) NOT NULL,
  `dr_age` int(11) NOT NULL,
  `dr_email` varchar(255) NOT NULL,
  `dr_number` bigint(255) NOT NULL,
  `dr_city` varchar(60) NOT NULL,
  `dr_home_address` varchar(65) NOT NULL,
  `dr_bgroup` text NOT NULL,
  `dr_marital_status` varchar(20) NOT NULL,
  `drg_name` varchar(255) NOT NULL,
  `drg_number` bigint(20) NOT NULL,
  `drg_address` varchar(255) NOT NULL,
  `dr_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_request`
--

INSERT INTO `donor_request` (`dr_id`, `dr_name`, `dr_pass`, `dr_age`, `dr_email`, `dr_number`, `dr_city`, `dr_home_address`, `dr_bgroup`, `dr_marital_status`, `drg_name`, `drg_number`, `drg_address`, `dr_time`) VALUES
(1, 'Jones Wiker', 0, 34, 'joneswik@gmail.com', 67897634, 'Kumba', 'Fiango', 'B', 'Single', 'Loveline Jono', 656789746, 'Kosala', '2023-06-03 16:27:01'),
(2, 'Jon Demaze', 0, 56, 'lonjon@gmail.com', 687546445, 'Kambe', 'Fotu street 3', 'O', 'Maried', 'Lopetu Fang', 678476454, 'Betilo-Door', '2023-06-03 16:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_password` varchar(255) NOT NULL,
  `p_age` int(120) NOT NULL,
  `p_phone` varchar(16) NOT NULL,
  `p_disease` varchar(255) NOT NULL,
  `p_blood_group` text NOT NULL,
  `p_gender` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `req_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_password`, `p_age`, `p_phone`, `p_disease`, `p_blood_group`, `p_gender`, `email`, `req_time`) VALUES
(6, 'Vincent', '$2y$10$r38s7oj9SLY/6fAZsh2OdOYAgwmrqiF5vr9BOZ./9xH.Iy.DfPSc6', 45, '3452523', 'sczxvxc', 'AB ', 'Maried', 'admin@g.g', '2023-06-03'),
(8, 'Johny', '$2y$10$y5jbuk8tyOJDIl5Nzv14WuhONfoxxZOSnGwycMLikNaYT73tagvj.', 56, '24435', 'Blood cancer', 'AB ', 'Single', 'Johny@l.con', '2023-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `patient_request`
--

CREATE TABLE `patient_request` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `pr_password` varchar(255) NOT NULL,
  `pr_age` int(120) NOT NULL,
  `pr_phone` varchar(16) NOT NULL,
  `pr_disease` varchar(255) NOT NULL,
  `pr_blood_group` text NOT NULL,
  `pr_gender` text NOT NULL,
  `pr_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sentemail`
--

CREATE TABLE `sentemail` (
  `message_id` int(11) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1024) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `receiver_id` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sentemail`
--

INSERT INTO `sentemail` (`message_id`, `receiver`, `subject`, `message`, `time`, `receiver_id`) VALUES
(1, 'admin@gmail.com', 'poo', 'poo', '2023-06-30 15:20:55', 'donor_admin@gmail.com'),
(2, 'admin@gmail.com', 'Yes', 'yes', '2023-06-30 15:28:46', 'donor_undefined'),
(3, 'jame@gmail.com', 'tyr', 'fhfddf', '2023-06-30 15:32:21', 'donor_33'),
(4, 'Johny@l.con', 'You are a patient', 'you need a daily supply of blood to survive', '2023-06-30 15:38:01', 'patient_8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blood_type`
--
ALTER TABLE `blood_type`
  ADD PRIMARY KEY (`bloodId`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `donor_request`
--
ALTER TABLE `donor_request`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sentemail`
--
ALTER TABLE `sentemail`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_type`
--
ALTER TABLE `blood_type`
  MODIFY `bloodId` tinyint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `donor_request`
--
ALTER TABLE `donor_request`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sentemail`
--
ALTER TABLE `sentemail`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
