-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 05:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `aggregate_orgs_workers`
--

CREATE TABLE `aggregate_orgs_workers` (
  `aggregte_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `orgniztion_id` int(11) NOT NULL,
  `work_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `cure_organizations`
--

CREATE TABLE `cure_organizations` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `org_email` varchar(100) NOT NULL,
  `org_fax` varchar(50) NOT NULL,
  `org_work_type` tinyint(4) NOT NULL DEFAULT '0',
  `org_tree_type` int(11) NOT NULL DEFAULT '0',
  `org_work_id` varchar(30) NOT NULL,
  `org_town` varchar(100) NOT NULL,
  `org_address` varchar(255) NOT NULL,
  `org_status` tinyint(4) NOT NULL DEFAULT '0',
  `owner_id` int(11) NOT NULL
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
-- Table structure for table `master_medical_file`
--

CREATE TABLE `master_medical_file` (
  `medical_file_id` int(11) NOT NULL,
  `medical_description` varchar(250) DEFAULT NULL,
  `patient_tall` float NOT NULL DEFAULT '0',
  `patient_weight` float NOT NULL DEFAULT '0',
  `patient_blood_type` varchar(30) DEFAULT NULL,
  `patient_smoker` tinyint(4) NOT NULL DEFAULT '0',
  `patient_surgery` tinyint(4) NOT NULL DEFAULT '0',
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient_eyes_rate`
--

CREATE TABLE `patient_eyes_rate` (
  `rate_id` int(11) NOT NULL,
  `R_diest_sph` float NOT NULL DEFAULT '0',
  `R_diest_cyl` float NOT NULL DEFAULT '0',
  `R_diest_ax` float NOT NULL DEFAULT '0',
  `R_near_sph` float DEFAULT '0',
  `R_near_cyl` float NOT NULL DEFAULT '0',
  `R_near_ax` float NOT NULL DEFAULT '0',
  `L_diest_sph` float NOT NULL DEFAULT '0',
  `L_diest_cyl` float NOT NULL DEFAULT '0',
  `L_diest_ax` float NOT NULL DEFAULT '0',
  `L_near_sph` float NOT NULL DEFAULT '0',
  `L_near_cyl` float NOT NULL DEFAULT '0',
  `L_near_ax` float NOT NULL DEFAULT '0',
  `rate_register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `medical_file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient_surgeries`
--

CREATE TABLE `patient_surgeries` (
  `surgery_id` int(11) NOT NULL,
  `surgery_date` datetime DEFAULT NULL,
  `surgery_desc` varchar(255) NOT NULL,
  `medical_file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, '1a5b03173fe6cafce85c2d7f70eda09121e4c615d9fbacd6e197524c0173eda2', 6),
(4, '03c2ebf4554cd28ebecd3c26f21afbaf56d3d7cb9fa935689ce7737bda92f3b5', 6),
(5, '2bd2c94af4045f9e5bf7df270daee11bb514434e18af952bcc29ab910db4cfaa', 6),
(6, '08e4db7cfd5f02d0343a61bb0a248d06b8cab8b2fbdcba99293c99a72d15dea3', 6),
(7, '027db4bb597c2b38910237f69554659ce2b4d116354c193dc6de01e18c6202b8', 6),
(8, 'cce37ccd5283e3eb60a2dbb60987f09e077e4b2461f36c8cb1df2ecb0015cdc8', 6),
(9, '7f3d8b11c95a7c65b1c926d67a2b256d5b46ce3d1869acfcf92d37be6c72ffa7', 6),
(10, '412154ebfa98d7230b026ee4c01640051106669ed6975b4dc8ed27a6f96c1e34', 6);

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
-- Indexes for table `aggregate_orgs_workers`
--
ALTER TABLE `aggregate_orgs_workers`
  ADD PRIMARY KEY (`aggregte_id`),
  ADD KEY `connect_to_workers` (`worker_id`),
  ADD KEY `connect_to_orgn` (`orgniztion_id`),
  ADD KEY `connect_to_category` (`work_category`);

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
-- Indexes for table `cure_organizations`
--
ALTER TABLE `cure_organizations`
  ADD PRIMARY KEY (`org_id`),
  ADD KEY `connect_users_with_buisness` (`owner_id`);

--
-- Indexes for table `cure_users`
--
ALTER TABLE `cure_users`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `cats_users_id_connected` (`worker_category_id`);

--
-- Indexes for table `master_medical_file`
--
ALTER TABLE `master_medical_file`
  ADD PRIMARY KEY (`medical_file_id`),
  ADD KEY `connect_patient_with_file` (`patient_id`);

--
-- Indexes for table `patient_eyes_rate`
--
ALTER TABLE `patient_eyes_rate`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `connect_eye_rate_medical_file` (`medical_file_id`);

--
-- Indexes for table `patient_surgeries`
--
ALTER TABLE `patient_surgeries`
  ADD PRIMARY KEY (`surgery_id`),
  ADD KEY `connect_surgeries_with_file` (`medical_file_id`);

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
-- AUTO_INCREMENT for table `aggregate_orgs_workers`
--
ALTER TABLE `aggregate_orgs_workers`
  MODIFY `aggregte_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `cure_organizations`
--
ALTER TABLE `cure_organizations`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cure_users`
--
ALTER TABLE `cure_users`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `master_medical_file`
--
ALTER TABLE `master_medical_file`
  MODIFY `medical_file_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_eyes_rate`
--
ALTER TABLE `patient_eyes_rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_surgeries`
--
ALTER TABLE `patient_surgeries`
  MODIFY `surgery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `worker_categories`
--
ALTER TABLE `worker_categories`
  MODIFY `worker_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aggregate_orgs_workers`
--
ALTER TABLE `aggregate_orgs_workers`
  ADD CONSTRAINT `connect_to_category` FOREIGN KEY (`work_category`) REFERENCES `worker_categories` (`worker_category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_to_orgn` FOREIGN KEY (`orgniztion_id`) REFERENCES `cure_organizations` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_to_workers` FOREIGN KEY (`worker_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `cure_organizations`
--
ALTER TABLE `cure_organizations`
  ADD CONSTRAINT `connect_users_with_buisness` FOREIGN KEY (`owner_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cure_users`
--
ALTER TABLE `cure_users`
  ADD CONSTRAINT `cats_users_id_connected` FOREIGN KEY (`worker_category_id`) REFERENCES `worker_categories` (`worker_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `master_medical_file`
--
ALTER TABLE `master_medical_file`
  ADD CONSTRAINT `connect_patient_with_file` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_eyes_rate`
--
ALTER TABLE `patient_eyes_rate`
  ADD CONSTRAINT `connect_eye_rate_medical_file` FOREIGN KEY (`medical_file_id`) REFERENCES `master_medical_file` (`medical_file_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_surgeries`
--
ALTER TABLE `patient_surgeries`
  ADD CONSTRAINT `connect_surgeries_with_file` FOREIGN KEY (`medical_file_id`) REFERENCES `master_medical_file` (`medical_file_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_session`
--
ALTER TABLE `users_session`
  ADD CONSTRAINT `connect_patient_with_session` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
