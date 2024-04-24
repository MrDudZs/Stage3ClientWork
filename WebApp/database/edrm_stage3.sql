-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 06:36 AM
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
  `doc_id` int(11) NOT NULL,
  `change_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit_log`
--

INSERT INTO `audit_log` (`id`, `date`, `time`, `staffid`, `doc_id`, `change_description`) VALUES
(110, NULL, NULL, 6, 29, 'Approved access for document ID: 29'),
(111, NULL, NULL, 6, 30, 'Approved access for document ID: 30'),
(112, '2024-04-15', '02:34:16', 6, 38, 'Uploaded document: EDRMS - Mgmt Dashboard (Sample).pdf'),
(113, '2024-04-15', '02:34:39', 6, 38, 'Clicked modify for document ID 38 by user ID 6'),
(114, '2024-04-15', '02:34:39', 6, 38, 'Clicked view for document ID 38 by user ID 6'),
(115, '2024-04-15', '02:34:49', 6, 38, 'Clicked view for document ID 38 by user ID 6'),
(116, '2024-04-15', '02:34:50', 6, 38, 'Clicked modify for document ID 38 by user ID 6'),
(117, '2024-04-15', '02:36:15', 6, 39, 'Uploaded document: EDRMS - Mgmt Dashboard (Sample).pdf'),
(118, '2024-04-15', '02:36:24', 6, 39, 'Clicked modify for document ID 39 by user ID 6'),
(119, '2024-04-15', '02:36:27', 6, 39, 'Clicked view for document ID 39 by user ID 6'),
(120, '2024-04-15', '02:36:57', 7, 40, 'Uploaded document: EDRMS - Mgmt Dashboard (Sample).png'),
(121, '2024-04-15', '02:37:20', 7, 41, 'Uploaded document: ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx'),
(122, '2024-04-15', '02:37:43', 7, 41, 'Added user with staffid: 6 for document ID 41'),
(123, '2024-04-15', '02:37:43', 7, 41, 'Added user with staffid: 6 for document ID 41'),
(124, '2024-04-15', '02:41:04', 7, 41, 'Added user with staffid: 6 for document ID 41'),
(125, '2024-04-15', '02:41:44', 7, 41, 'Added user with staffid: 6 for document ID 41'),
(126, '2024-04-15', '02:41:44', 7, 41, 'Added user with staffid: 6 for document ID 41'),
(127, '2024-04-15', '02:41:47', 7, 41, 'Added user with staffid: 6 for document ID 41'),
(128, '2024-04-15', '02:42:03', 7, 41, 'Added user with staffid: 6 for document ID 41'),
(129, '2024-04-15', '02:42:03', 7, 41, 'Added user with staffid: 6 for document ID 41'),
(130, '2024-04-15', '02:59:08', 11, 42, 'Uploaded document: EDRMS - Mgmt Dashboard (Sample).png'),
(131, NULL, NULL, 7, 40, 'Approved access for document ID: 40'),
(132, '2024-04-15', '03:03:42', 6, 41, 'Clicked modify for document ID 41 by user ID 6'),
(133, '2024-04-15', '03:03:47', 6, 41, 'Clicked view for document ID 41 by user ID 6'),
(134, '2024-04-15', '03:09:01', 8, 43, 'Uploaded document: EDRMS - Mgmt Dashboard (Sample).pdf'),
(135, '2024-04-15', '03:09:35', 9, 44, 'Uploaded document: ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx'),
(136, '2024-04-15', '03:09:58', 10, 45, 'Uploaded document: ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx'),
(137, '2024-04-15', '03:24:53', 12, 46, 'Uploaded document: EDRMS - Mgmt Dashboard (Sample).png'),
(138, '2024-04-15', '10:41:43', 6, 39, 'Clicked modify for document ID 39 by user ID 6'),
(139, '2024-04-15', '10:41:46', 6, 39, 'Clicked view for document ID 39 by user ID 6'),
(140, '2024-04-15', '10:42:46', 6, 39, 'Clicked view for document ID 39 by user ID 6'),
(141, '2024-04-15', '10:43:11', 6, 39, 'Added user with staffid: 12 for document ID 39'),
(142, '2024-04-15', '10:43:11', 6, 39, 'Added user with staffid: 12 for document ID 39'),
(143, NULL, NULL, 9, 44, 'Approved access for document ID: 44'),
(144, '2024-04-15', '10:48:24', 9, 47, 'Uploaded document: ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx'),
(145, '2024-04-16', '08:45:28', 6, 39, 'Clicked view for document ID 39 by user ID 6'),
(146, '2024-04-16', '08:45:30', 6, 39, 'Clicked view for document ID 39 by user ID 6'),
(147, '2024-04-16', '11:14:50', 6, 39, 'Clicked modify for document ID 39 by user ID 6'),
(148, '2024-04-16', '11:14:51', 6, 39, 'Clicked view for document ID 39 by user ID 6'),
(149, '2024-04-16', '11:14:55', 6, 39, 'Clicked view for document ID 39 by user ID 6'),
(150, '2024-04-16', '11:15:13', 6, 40, 'Clicked modify for document ID 40 by user ID 6'),
(151, '2024-04-16', '11:15:13', 6, 40, 'Clicked view for document ID 40 by user ID 6'),
(152, '2024-04-16', '15:30:19', 6, 39, 'Added user with staffid: 8 for document ID 39'),
(153, '2024-04-16', '15:30:19', 6, 39, 'Added user with staffid: 8 for document ID 39'),
(154, '2024-04-16', '15:32:53', 6, 48, 'Uploaded document: Screenshot 2023-10-04 171758.png'),
(155, '2024-04-16', '15:59:06', 6, 48, 'Clicked modify for document ID 48 by user ID 6'),
(156, '2024-04-16', '15:59:06', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(157, '2024-04-16', '15:59:13', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(158, '2024-04-16', '16:01:10', 6, 49, 'Uploaded document: Screenshot 2024-03-18 014049.png'),
(159, '2024-04-18', '12:03:57', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(160, '2024-04-18', '12:04:16', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(161, '2024-04-18', '12:04:21', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(162, '2024-04-18', '12:07:45', 6, 48, 'Added user with staffid: 5 for document ID 48'),
(163, '2024-04-18', '12:07:45', 6, 48, 'Added user with staffid: 5 for document ID 48'),
(164, '2024-04-18', '12:12:46', 6, 50, 'Uploaded document: Screenshot 2023-10-04 171758.png'),
(165, NULL, NULL, 6, 48, 'Approved access for document ID: 48'),
(166, '2024-04-18', '16:05:48', 6, 51, 'Uploaded document: Screenshot 2023-03-08 021158.png'),
(167, '2024-04-20', '14:11:23', 6, 48, 'Clicked modify for document ID 48 by user ID 6'),
(168, '2024-04-20', '14:11:24', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(169, '2024-04-20', '14:11:31', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(170, NULL, NULL, 6, 48, 'Approved access for document ID: 48'),
(171, NULL, NULL, 7, 40, 'Approved access for document ID: 40'),
(172, NULL, NULL, 7, 41, 'Approved access for document ID: 41'),
(173, '2024-04-23', '10:38:22', 7, 40, 'Added user with staffid: 5 for document ID 40'),
(174, '2024-04-23', '10:38:22', 7, 40, 'Added user with staffid: 5 for document ID 40'),
(175, NULL, NULL, 8, 43, 'Approved access for document ID: 43'),
(176, NULL, NULL, 9, 47, 'Approved access for document ID: 47'),
(177, NULL, NULL, 10, 45, 'Approved access for document ID: 45'),
(178, '2024-04-23', '11:31:07', 6, 48, 'Clicked modify for document ID 48 by user ID 6'),
(179, '2024-04-23', '11:31:10', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(180, '2024-04-23', '11:32:55', 6, 48, 'Clicked view for document ID 48 by user ID 6'),
(181, '2024-04-23', '11:33:34', 6, 48, 'Added user with staffid: 15 for document ID 48'),
(182, '2024-04-23', '11:33:45', 6, 48, 'Added user with staffid: 13 for document ID 48'),
(183, '2024-04-23', '11:33:45', 6, 48, 'Added user with staffid: 13 for document ID 48'),
(184, '2024-04-23', '11:38:59', 7, 52, 'Uploaded document: ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx'),
(185, '2024-04-23', '11:42:59', 6, 40, 'Clicked modify for document ID 40 by user ID 6'),
(186, '2024-04-23', '11:43:00', 6, 40, 'Clicked view for document ID 40 by user ID 6'),
(187, '2024-04-23', '11:43:59', 6, 40, 'Clicked view for document ID 40 by user ID 6'),
(188, '2024-04-23', '11:44:33', 6, 40, 'Added user with staffid: 14 for document ID 40'),
(189, '2024-04-23', '11:44:33', 6, 40, 'Added user with staffid: 14 for document ID 40'),
(190, '2024-04-23', '11:45:19', 6, 53, 'Uploaded document: ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx'),
(191, NULL, NULL, 7, 52, 'Approved access for document ID: 52'),
(192, NULL, NULL, 9, 47, 'Approved access for document ID: 47');

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
-- Table structure for table `document_access`
--

CREATE TABLE `document_access` (
  `doc_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_access`
--

INSERT INTO `document_access` (`doc_id`, `staff_id`) VALUES
(41, 6),
(41, 8),
(43, 15),
(45, 8),
(47, 6),
(47, 8),
(52, 6);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_name` varchar(255) DEFAULT NULL
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
-- Table structure for table `request_access`
--

CREATE TABLE `request_access` (
  `id` int(11) NOT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `staffid` int(11) DEFAULT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','declined') DEFAULT 'pending',
  `request_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_access`
--

INSERT INTO `request_access` (`id`, `doc_id`, `staffid`, `request_date`, `status`, `request_time`) VALUES
(44, 41, 8, '2024-04-18 10:19:29', 'approved', '00:00:00'),
(45, 42, 8, '2024-04-18 10:19:30', 'pending', '00:00:00'),
(46, 45, 8, '2024-04-18 10:19:30', 'approved', '00:00:00'),
(47, 46, 8, '2024-04-18 10:19:31', 'pending', '00:00:00'),
(48, 47, 8, '2024-04-18 10:19:32', 'approved', '00:00:00'),
(51, 41, 15, '2024-04-23 08:34:25', 'approved', '00:00:00'),
(52, 42, 15, '2024-04-23 08:34:26', 'pending', '00:00:00'),
(54, 43, 15, '2024-04-23 08:34:29', 'approved', '00:00:00'),
(55, 45, 15, '2024-04-23 08:34:30', 'approved', '00:00:00'),
(56, 47, 15, '2024-04-23 08:34:32', 'approved', '00:00:00'),
(57, 46, 15, '2024-04-23 08:34:33', 'pending', '00:00:00'),
(59, 52, 6, '2024-04-23 09:46:35', 'approved', '00:00:00'),
(60, 45, 6, '2024-04-23 09:46:38', 'pending', '00:00:00'),
(61, 43, 6, '2024-04-23 09:46:39', 'declined', '00:00:00'),
(62, 42, 6, '2024-04-23 09:46:40', 'pending', '00:00:00'),
(63, 46, 6, '2024-04-23 09:46:41', 'pending', '00:00:00'),
(64, 47, 6, '2024-04-23 09:46:42', 'approved', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shared_access`
--

CREATE TABLE `shared_access` (
  `shared_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `access_granted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(11, 'Test', 'Test', 'test@test.test', '2024-04-13', '$2y$10$DXoaey0NdbbY9xPzrDiBdOyxypydW2hQqixcUCO9iCT3yCh594zT6', 0, 'HR', 5, 18),
(12, 'Matt', 'Dudley', 'test@test.test', '2001-09-25', '$2y$10$5NXwiO5vXZRbMABVcTztqOW9ItCOCvrMBzqZ/yuWoONOaBhn3h6kO', 0, 'Head of Finance', 2, 44),
(13, 'Nasir', 'Al-Monsir', 'Test@test.t', '2024-04-14', '$2y$10$Y5Gt3kX7b2QjGXSjwFBMkOVugXQl3i4c246..SMwHEV98ue5zZ37q', 0, '', 3, 44),
(14, 'Ben', 'Wiffen', 'test@test.t', '2024-04-15', '$2y$10$DgV0MVp327ESe33ELzLLTed4eTwCPY6avXuEnF/MP37zybQ.qpY8u', 0, '', 4, 44),
(15, 'Bob', 'Ross', 'test@test.test', '2024-04-22', '$2y$10$rx9TD3HfCgUPx.PEpLaL/.2semnm3ybDH8Oe4zoSE7p8AfPZ64SMG', 0, '0', 5, 32),
(16, 'Customer', 'Service', 'l@l.t', '2024-01-22', '$2y$10$62Huzo/ZPEgyN6EyOROuEOM3nJ6lMjpXzduCtI8n8iDwGOmKbyK5W', 0, '0', 5, 20);

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
  `doc_due` date DEFAULT NULL,
  `upload_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploaded_docs`
--

INSERT INTO `uploaded_docs` (`doc_id`, `doc_name`, `doc_owner`, `doc_severity`, `upload_date`, `staff_id`, `file_status`, `doc_class`, `doc_due`, `upload_time`) VALUES
(41, 'ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx', 'FINANCE MANAGER', 'MEDIUM', '2024-04-15', 7, 1, 'Budget', '2024-04-23', '02:37:20'),
(42, 'EDRMS - Mgmt Dashboard (Sample).png', 'Test Test', 'LOW', '2024-04-15', 11, 2, 'Budget', '2024-04-26', '02:59:08'),
(43, 'EDRMS - Mgmt Dashboard (Sample).pdf', 'FINANCE OFFICER', 'LOW', '2024-04-15', 8, 2, 'Budget', '2024-04-25', '03:09:01'),
(45, 'ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx', 'FINANCE OFFICER', 'MEDIUM', '2024-04-15', 10, 2, 'Budget', '2024-05-02', '03:09:58'),
(46, 'EDRMS - Mgmt Dashboard (Sample).png', 'Matt Dudley', 'HIGH', '2024-04-15', 12, 1, 'Budget', '2024-04-15', '03:24:53'),
(47, 'ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx', 'OTHER USER', 'HIGH', '2024-04-15', 9, 1, 'Budget', '2024-06-02', '10:48:24'),
(52, 'ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx', 'FINANCE MANAGER', 'HIGH', '2024-04-23', 7, 1, 'Budget', '2024-04-24', '11:38:59'),
(53, 'ELECTRONIC DOCUMENT AND RECORDS MANAGEMENT SYSTEM (EDRMS) 2024 V2 (1).pptx', 'HEAD of FINANCE', 'HIGH', '2024-04-23', 6, 2, 'Budget', '2024-04-24', '11:45:19');

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
-- Indexes for table `document_access`
--
ALTER TABLE `document_access`
  ADD PRIMARY KEY (`doc_id`,`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

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
-- Indexes for table `request_access`
--
ALTER TABLE `request_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `shared_access`
--
ALTER TABLE `shared_access`
  ADD PRIMARY KEY (`shared_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `staffid` (`staffid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
-- AUTO_INCREMENT for table `request_access`
--
ALTER TABLE `request_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `shared_access`
--
ALTER TABLE `shared_access`
  MODIFY `shared_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `uploaded_docs`
--
ALTER TABLE `uploaded_docs`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document_access`
--
ALTER TABLE `document_access`
  ADD CONSTRAINT `document_access_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `uploaded_docs` (`doc_id`),
  ADD CONSTRAINT `document_access_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffid`);

--
-- Constraints for table `request_access`
--
ALTER TABLE `request_access`
  ADD CONSTRAINT `request_access_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `uploaded_docs` (`doc_id`),
  ADD CONSTRAINT `request_access_ibfk_2` FOREIGN KEY (`staffid`) REFERENCES `staff` (`staffid`);

--
-- Constraints for table `shared_access`
--
ALTER TABLE `shared_access`
  ADD CONSTRAINT `shared_access_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `uploaded_docs` (`doc_id`),
  ADD CONSTRAINT `shared_access_ibfk_2` FOREIGN KEY (`staffid`) REFERENCES `staff` (`staffid`);

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
