-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 04:17 PM
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
(6, 'sda', 'ada@gmail.com', 'dad', 'adad', '2023-05-12 15:04:34'),
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
(28, 'Betrand Ajebua', '$2y$10$Af5eqtBTidOKIzVPjRxLy.EzIT9WhkJudA/mPUXEjLjqeAbVJ4i.C', 'donor1@gmail.com', 673416201, 'Buea', 'Checkpoint', 'AB', 'Single', 'Andrew Ajebua', 2147483647, 'BueaTown', 25),
(29, 'John Smith', '$2y$10$GnJHeNbXEh.Oq9sRcWczeuBuDN1CrwX43YJTRKSF9pg.adOLSbSAq', 'admin@gmail.com', 567334643, 'Kumba', 'Fiango', 'O', 'Single', 'James Lang', 680325623, 'Class Quaters', 40),
(31, 'vgrg', '$2y$10$RQPboBj9wNzh5eY4UbQqXOjc2W0ZexA5G7lvvRTPSH3dHu2fwnhgG', 'admin@ff.hg', 25232, 'trgdr', 'ewt', 'A', 'Maried', 'tet', 56, 'sdfsd', 435),
(32, 'Ransome Jervert', '$2y$10$0EYGz9YgRHlCtDWr4OnLmOSDtKakSlMHONWjHzeLZOdzkKtu2dhpK', 'admin@gmail.com', 67345678, 'Buea', 'Check Point', 'A', 'Single', 'John Wong', 678325675, 'Muea', 24),
(33, 'James love', '$2y$10$/AOaFp5hx9x6Cg7LHgABpuJRtWwutsGCFvXHxHwB5JOkGhyvoJIr.', 'jame@gmail.com', 678093456, 'Kumba', 'Fiango', 'B', 'Maried', 'Oncle Ben', 678953465, 'Kosala', 50),
(34, 'James love', '$2y$10$PwaWQjkeCyDx3ipZtEmqze0J4lt7pDCjwYAYWnbyBqkZJyYp0CfaW', 'jame@gmail.com', 678093456, 'Kumba', 'Fiango', 'B', 'Maried', 'Oncle Ben', 678953465, 'Kosala', 50),
(35, 'James lover', '$2y$10$mP0f3fueSxix7fTLAzimY.PYv9DH1/mP1HMZ8/9euQm4/CWd/eyfq', 'jame@gmail.com', 678093456, 'Kumba', 'Fiango', 'B', 'Maried', 'Oncle Ben', 678953465, 'Kosala', 50),
(36, 'win', '$2y$10$vXbrZYxHcHWTr4o.Uo7uNuzotA0Zq7CorIjJ1y21/JFYnJFBE61ee', 'admin#@d.v', 4567433, 'dvs', 'gsgs', 'A', 'Maried', 'gsgs', 425254, 'dsgsgs', 56),
(37, 'wino', '$2y$10$4QDVf7Ihtt9Rc285aWk.buALr54acnLNGahhPGKkuhmHrq8wj./vG', 'admin@d.h', 453263, 'fbdfh', 'fgf', 'AB', 'Maried', 'gdds', 4565366, 'dsvdsgd', 1111),
(38, 'merlin', '$2y$10$.AxAjL1VDvxi0.KzYUgQ0.rS89McnlQm22ByI8lsgGnsYIt5YYPti', 'admin@d.e', 214, '4343', '14fdsfsd', 'A', 'Maried', 'cvzxcx', 0, 'sv zsv', 11),
(39, 'John', '$2y$10$COpVyOBYondt9kHGDycEduo8uVoGjRm96MwPD6OOp4OKbDkEfmhtq', '40@cv.jh', 235255, 'Belgium', 'dfwe', 'A', 'Maried', 'ewfew', 0, 'ewf', 50);

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
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_password`, `p_age`, `p_phone`, `p_disease`, `p_blood_group`, `p_gender`, `email`) VALUES
(5, 'vcvc', '$2y$10$9SC0s0ihTNjX65YuT3a/i.6ob.VfzDQkKH5wvCJUTJGfu4OOHRlwq', 43, '6463', 'bgsdgsg', 'A ', 'Maried', 'gh@fr.r'),
(6, 'ffd', '$2y$10$r38s7oj9SLY/6fAZsh2OdOYAgwmrqiF5vr9BOZ./9xH.Iy.DfPSc6', 45, '3452523', 'sczxvxc', 'AB ', 'Maried', 'admin@g.g'),
(7, 'Wilson', '$2y$10$guajwr5.ILHO22KdxtXkG.gxzt.oQr0I5WuaDhwB/uPlunUbkVfQK', 56, '678956467', 'Aneamia', 'B ', 'Maried', 'willy@gmail.com'),
(8, 'Johny', '$2y$10$y5jbuk8tyOJDIl5Nzv14WuhONfoxxZOSnGwycMLikNaYT73tagvj.', 56, '24435', 'Blood cancer', 'AB ', 'Single', 'Johny@l.con'),
(9, 'Joseph', '$2y$10$Y3xYN0dZwOBfmQS4h/Lt3uSOR7bPG5dyIRHCMqI7YUt6SxDCi0nji', 45, '241343', 'Cancer', 'B ', 'Single', 'jo@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD danger KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD danger KEY (`user_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD danger KEY (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD danger KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
