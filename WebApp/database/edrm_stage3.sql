-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 10:01 PM
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
-- Table structure for table `audit_log`
--

CREATE TABLE `audit_log` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `staffid` int(11) DEFAULT NULL,
  `change_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit_log`
--

INSERT INTO `audit_log` (`id`, `date`, `time`, `staffid`, `change_description`) VALUES
(28, '2024-04-13', '19:11:15', 0, 'Clicked view for document ID 17'),
(29, '2024-04-13', '19:11:15', 0, 'Clicked modify for document ID 17'),
(30, '2024-04-13', '19:11:17', 0, 'Clicked view for document ID 17'),
(31, '2024-04-13', '19:11:20', 0, 'Clicked view for document ID 17'),
(32, '2024-04-13', '19:12:21', 0, 'Clicked view for document ID 17'),
(33, '2024-04-13', '19:12:25', 0, 'Clicked view for document ID 17'),
(34, '2024-04-13', '19:12:31', 0, 'Clicked view for document ID 17'),
(35, '2024-04-13', '19:12:32', 0, 'Clicked modify for document ID 17'),
(36, '2024-04-13', '21:48:23', 0, 'Clicked modify for document ID 18'),
(37, '2024-04-13', '21:48:26', 0, 'Clicked view for document ID 18'),
(38, '2024-04-13', '21:48:31', 0, 'Clicked view for document ID 18');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_name` varchar(255) NOT NULL,
  `department_location` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_name`, `department_location`, `department_id`) VALUES
('FINANCE', 'Building A', 1),
('Sales', 'Location A', 2),
('Marketing', 'Location B', 3),
('Human Resources', 'Location C', 4),
('Operations', 'Location A', 5),
('Customer Service', 'Location B', 6),
('Research and Development', 'Location C', 7),
('Information Technology', 'Location A', 8),
('Administration', 'Location B', 9),
('Legal', 'Location C', 10),
('Supply Chain', 'Location A', 11),
('Product Management', 'Location B', 12),
('Logistics', 'Location C', 13),
('Quality Assurance', 'Location A', 14),
('Engineering', 'Location B', 15),
('Sales', 'Location B', 16),
('Marketing', 'Location C', 17),
('Human Resources', 'Location A', 18),
('Operations', 'Location C', 19),
('Customer Service', 'Location A', 20),
('Research and Development', 'Location B', 21),
('Information Technology', 'Location C', 22),
('Administration', 'Location A', 23),
('Legal', 'Location B', 24),
('Supply Chain', 'Location A', 25),
('Product Management', 'Location C', 26),
('Logistics', 'Location B', 27),
('Quality Assurance', 'Location C', 28),
('Engineering', 'Location A', 29),
('Sales', 'Location C', 30),
('Marketing', 'Location A', 31),
('Human Resources', 'Location B', 32),
('Operations', 'Location A', 33),
('Customer Service', 'Location B', 34),
('Research and Development', 'Location C', 35),
('Information Technology', 'Location A', 36),
('Administration', 'Location B', 37),
('Legal', 'Location C', 38),
('Supply Chain', 'Location A', 39),
('Product Management', 'Location B', 40),
('Logistics', 'Location C', 41),
('Quality Assurance', 'Location A', 42),
('Engineering', 'Location B', 43),
('Finance', 'Location C', 44),
('Finance', 'Location B', 45);

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
  `permission_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `first_name`, `surname`, `email`, `dob`, `password`, `is_suspended`, `job_role`, `permission_id`, `department_id`) VALUES
(5, 'SYSTEM', 'ADMIN', 'm@t.t', '0001-01-01', '$2y$10$TtviYWs.8jkyzbPE26AQ9eAPnXEJaYhsU3Q/iXHCootJlkIRDdD9C', 0, '', 1, NULL),
(6, 'HEAD of', 'FINANCE', 'm@t.t', '1111-11-11', '$2y$10$Nqjb0P3tJUAIJ9ACf90Q.eJrPctaXlNe7pKZzbpY9a5W99HDnyY3K', 0, 'Head of Finance', 2, 1),
(7, 'FINANCE', 'MANAGER', 'm@t.t', '1111-11-11', '$2y$10$lmXC9XEIG8oM97Bt7CVr6OPc4koUaF3PFYE1r7Bkyw8NCxmaDg7wm', 0, 'Finance Manager', 3, 1),
(8, 'FINANCE', 'OFFICER', 'm@t.t', '2024-04-12', '$2y$10$mbHHtK.8nPKuUIErnD3hcO48SM2lnudS6uPYfPkC75jusbQhGh4NC', 0, 'Finance Officer', 4, 1),
(9, 'OTHER', 'USER', 'm@t.t', '2024-04-12', '$2y$10$VR9SBMmRvSFChzHg1fZAMe.vse/ayQBlViq1XaJsxewFO4CgcfrM2', 0, 'Human Resources', 5, 18),
(10, 'FINANCE', 'OFFICER', 'test@test.test', '2024-04-12', '$2y$10$ZXyIiAUsVRttImMuRxCMZ.XEtT7EAQNGqiTO8xMUWydBwdOzUeJLq', 0, 'Finance Officer', 4, 1),
(11, 'Test', 'Test', 'test@test.test', '2024-04-13', '$2y$10$DXoaey0NdbbY9xPzrDiBdOyxypydW2hQqixcUCO9iCT3yCh594zT6', 0, 'HR', 5, 18);

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
  `staff_id` int(11) DEFAULT NULL,
  `file_status` int(11) DEFAULT 0,
  `doc_class` varchar(255) DEFAULT NULL,
  `doc_due` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploaded_docs`
--

INSERT INTO `uploaded_docs` (`doc_id`, `doc_name`, `doc_owner`, `doc_severity`, `upload_date`, `staff_id`, `file_status`, `doc_class`, `doc_due`) VALUES
(17, 'EDRMS - Mgmt Dashboard (Sample).pdf', 'FINANCE MANAGER', 'LOW', '2024-04-13', 7, 0, 'Proposal', '2024-04-13'),
(18, 'ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx', 'HEAD of FINANCE', 'HIGH', '2024-04-13', 6, 0, 'Proposal', '2024-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

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
  ADD UNIQUE KEY `staffid` (`staffid`),
  ADD KEY `fk_departments` (`department_id`);

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
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `staffid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `uploaded_docs`
--
ALTER TABLE `uploaded_docs`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `finance_manager`
--
ALTER TABLE `finance_manager`
  ADD CONSTRAINT `finance_manager_ibfk_1` FOREIGN KEY (`Permission`) REFERENCES `manager_permission` (`ID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_departments` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `uploaded_docs`
--
ALTER TABLE `uploaded_docs`
  ADD CONSTRAINT `fk_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
