-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 09:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cure`
--

-- --------------------------------------------------------

--
-- Table structure for table `cure_managers`
--

CREATE TABLE `cure_managers` (
  `manager_id` int(11) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `manager_username` varchar(255) NOT NULL,
  `manager_password` varchar(255) NOT NULL,
  `manager_salt` varchar(255) NOT NULL,
  `manager_email` varchar(255) NOT NULL,
  `manager_rule` tinyint(4) NOT NULL DEFAULT '0',
  `manager_status` tinyint(4) NOT NULL DEFAULT '0',
  `manager_register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `manager_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cure_managers_categories`
--

CREATE TABLE `cure_managers_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cure_managers_logs`
--

CREATE TABLE `cure_managers_logs` (
  `log_id` int(11) NOT NULL,
  `log_action` varchar(255) NOT NULL,
  `log_action_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cure_managers_session`
--

CREATE TABLE `cure_managers_session` (
  `session_id` int(11) NOT NULL,
  `session_value` varchar(255) NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cure_users`
--

CREATE TABLE `cure_users` (
  `patient_id` int(11) NOT NULL,
  `patient_username` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_password` varchar(60) NOT NULL,
  `patient_salt` varchar(255) NOT NULL,
  `patient_hashedpassword` varchar(255) NOT NULL,
  `patient_phone` varchar(16) NOT NULL,
  `patient_gender` tinyint(4) NOT NULL DEFAULT '0',
  `patient_birthdate` varchar(60) NOT NULL,
  `patient_nationality` varchar(60) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `patient_e_coins` int(11) NOT NULL DEFAULT '0',
  `patient_donation_status` tinyint(4) NOT NULL DEFAULT '0',
  `patient_account_status` tinyint(4) NOT NULL DEFAULT '0',
  `patient_registerdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patient_image_code` varchar(255) NOT NULL,
  `worker_account_type` tinyint(4) NOT NULL DEFAULT '0',
  `worker_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cure_users`
--

INSERT INTO `cure_users` (`patient_id`, `patient_username`, `patient_email`, `patient_password`, `patient_salt`, `patient_hashedpassword`, `patient_phone`, `patient_gender`, `patient_birthdate`, `patient_nationality`, `patient_address`, `patient_e_coins`, `patient_donation_status`, `patient_account_status`, `patient_registerdate`, `patient_image_code`, `worker_account_type`, `worker_category_id`) VALUES
(6, 'khalidahmed', 'mohammed@gmail.com', '001100112', '¶ˆ™á\0±«¿N¶Å={WÞZætzíÿè\\ï[U‘ûE*', '583fff5b32977f293ea87babbcd0aafb63f3ede924adc283c5ca6bb0fcaac1e0', '01062957744', 0, '', 'EGY', '', 0, 0, 0, '2020-06-11 19:10:02', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `session_id` int(11) NOT NULL,
  `session_value` varchar(255) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_session`
--

INSERT INTO `users_session` (`session_id`, `session_value`, `patient_id`) VALUES
(1, '046bf91afb83e23891ddea79a6759a5862731156d96081ab1bb43d97fd58ccfb', 6),
(2, '4f869a7075030720b021d68d27fef98b88cf67465c5b3d464ae014237de8ff72', 6),
(3, '1a5b03173fe6cafce85c2d7f70eda09121e4c615d9fbacd6e197524c0173eda2', 6);

-- --------------------------------------------------------

--
-- Table structure for table `worker_categories`
--

CREATE TABLE `worker_categories` (
  `worker_category_id` int(11) NOT NULL,
  `worker_category_name` varchar(255) NOT NULL,
  `worker_category_desc` varchar(255) NOT NULL,
  `category_premission_type` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cure_managers`
--
ALTER TABLE `cure_managers`
  ADD PRIMARY KEY (`manager_id`),
  ADD KEY `connect_categories_managers_cure` (`manager_category`);

--
-- Indexes for table `cure_managers_categories`
--
ALTER TABLE `cure_managers_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cure_managers_logs`
--
ALTER TABLE `cure_managers_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `connect_logs_managers_cure` (`manager_id`);

--
-- Indexes for table `cure_managers_session`
--
ALTER TABLE `cure_managers_session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `connect_sessions_managers_cure` (`manager_id`);

--
-- Indexes for table `cure_users`
--
ALTER TABLE `cure_users`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `cats_users_id_connected` (`worker_category_id`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `connect_patient_with_session` (`patient_id`);

--
-- Indexes for table `worker_categories`
--
ALTER TABLE `worker_categories`
  ADD PRIMARY KEY (`worker_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cure_managers`
--
ALTER TABLE `cure_managers`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cure_managers_categories`
--
ALTER TABLE `cure_managers_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cure_managers_logs`
--
ALTER TABLE `cure_managers_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cure_managers_session`
--
ALTER TABLE `cure_managers_session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cure_users`
--
ALTER TABLE `cure_users`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `worker_categories`
--
ALTER TABLE `worker_categories`
  MODIFY `worker_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cure_managers`
--
ALTER TABLE `cure_managers`
  ADD CONSTRAINT `connect_categories_managers_cure` FOREIGN KEY (`manager_category`) REFERENCES `cure_managers_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cure_managers_logs`
--
ALTER TABLE `cure_managers_logs`
  ADD CONSTRAINT `connect_logs_managers_cure` FOREIGN KEY (`manager_id`) REFERENCES `cure_managers` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cure_managers_session`
--
ALTER TABLE `cure_managers_session`
  ADD CONSTRAINT `connect_sessions_managers_cure` FOREIGN KEY (`manager_id`) REFERENCES `cure_managers` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cure_users`
--
ALTER TABLE `cure_users`
  ADD CONSTRAINT `cats_users_id_connected` FOREIGN KEY (`worker_category_id`) REFERENCES `worker_categories` (`worker_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_session`
--
ALTER TABLE `users_session`
  ADD CONSTRAINT `connect_patient_with_session` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
