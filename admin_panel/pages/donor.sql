-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 11:56 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
