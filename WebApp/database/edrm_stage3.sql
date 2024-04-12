-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 12:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edrm_stage3`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finance_manager`
--

CREATE TABLE `finance_manager` (
  `ID` int(11) NOT NULL,
  `Permission` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_roles`
--

CREATE TABLE `job_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager_permission`
--

CREATE TABLE `manager_permission` (
  `ID` int(11) NOT NULL,
  `Permission_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager_permission`
--

INSERT INTO `manager_permission` (`ID`, `Permission_name`) VALUES
(1, 'Permission 1'),
(2, 'Permission 2'),
(3, 'Permission 3'),
(4, 'Permission 4'),
(5, 'Permission 5'),
(6, 'Permission 6');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission_name`) VALUES
(1, 'SYSADMIN'),
(2, 'HoF FIN'),
(3, 'FIN MAN'),
(4, 'FIN OFI'),
(5, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_suspended` tinyint(4) NOT NULL,
  `job_role` varchar(255) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `first_name`, `surname`, `email`, `dob`, `password`, `is_suspended`, `job_role`, `permission_id`) VALUES
(5, 'SYSTEM', 'ADMIN', 'm@t.t', '0001-01-01', '$2y$10$TtviYWs.8jkyzbPE26AQ9eAPnXEJaYhsU3Q/iXHCootJlkIRDdD9C', 0, '', 1),
(6, 'HEAD of', 'FINANCE', 'm@t.t', '1111-11-11', '$2y$10$Nqjb0P3tJUAIJ9ACf90Q.eJrPctaXlNe7pKZzbpY9a5W99HDnyY3K', 0, '', 2),
(7, 'FINANCE', 'MANAGER', 'm@t.t', '1111-11-11', '$2y$10$lmXC9XEIG8oM97Bt7CVr6OPc4koUaF3PFYE1r7Bkyw8NCxmaDg7wm', 0, '', 3),
(8, 'FINANCE', 'OFFICER', 'm@t.t', '2024-04-12', '$2y$10$mbHHtK.8nPKuUIErnD3hcO48SM2lnudS6uPYfPkC75jusbQhGh4NC', 0, '', 4),
(9, 'OTHER', 'USER', 'm@t.t', '2024-04-12', '$2y$10$VR9SBMmRvSFChzHg1fZAMe.vse/ayQBlViq1XaJsxewFO4CgcfrM2', 0, '', 5),
(10, 'FINANCE', 'OFFICER', 'test@test.test', '2024-04-12', '$2y$10$ZXyIiAUsVRttImMuRxCMZ.XEtT7EAQNGqiTO8xMUWydBwdOzUeJLq', 0, '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_docs`
--

CREATE TABLE `uploaded_docs` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_owner` varchar(255) NOT NULL,
  `doc_severity` enum('LOW','MEDIUM','HIGH') NOT NULL,
  `upload_date` date NOT NULL,
  `staff_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance_manager`
--
ALTER TABLE `finance_manager`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Permission` (`Permission`);

--
-- Indexes for table `job_roles`
--
ALTER TABLE `job_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager_permission`
--
ALTER TABLE `manager_permission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD UNIQUE KEY `staffid` (`staffid`);

--
-- Indexes for table `uploaded_docs`
--
ALTER TABLE `uploaded_docs`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `fk_staff_id` (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finance_manager`
--
ALTER TABLE `finance_manager`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_roles`
--
ALTER TABLE `job_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager_permission`
--
ALTER TABLE `manager_permission`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uploaded_docs`
--
ALTER TABLE `uploaded_docs`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `finance_manager`
--
ALTER TABLE `finance_manager`
  ADD CONSTRAINT `finance_manager_ibfk_1` FOREIGN KEY (`Permission`) REFERENCES `manager_permission` (`ID`);

--
-- Constraints for table `uploaded_docs`
--
ALTER TABLE `uploaded_docs`
  ADD CONSTRAINT `fk_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
