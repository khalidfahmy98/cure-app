-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 10:10 AM
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
-- Table structure for table `aggregate_orgs_workers`
--

CREATE TABLE `aggregate_orgs_workers` (
  `aggregte_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `orgniztion_id` int(11) NOT NULL,
  `work_category` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aggregate_orgs_workers`
--

INSERT INTO `aggregate_orgs_workers` (`aggregte_id`, `worker_id`, `orgniztion_id`, `work_category`, `manager_id`) VALUES
(2, 6, 5, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `authorized_products`
--

CREATE TABLE `authorized_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_specs` varchar(255) NOT NULL,
  `product_expiry_date` varchar(255) NOT NULL,
  `product_nation` varchar(100) NOT NULL,
  `product_tap_or_drink` tinyint(4) NOT NULL DEFAULT '0',
  `product_price` double NOT NULL DEFAULT '0',
  `product_size_capacity` varchar(100) NOT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_global_barcode` varchar(150) DEFAULT NULL,
  `product_category` int(11) NOT NULL,
  `product_blackmarket` tinyint(4) NOT NULL DEFAULT '0',
  `product_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clinics_schedule`
--

CREATE TABLE `clinics_schedule` (
  `sched_id` int(11) NOT NULL,
  `day_name` varchar(150) NOT NULL,
  `time_start` varchar(60) NOT NULL,
  `time_end` varchar(60) NOT NULL,
  `clinic_id` int(11) NOT NULL
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
  `org_email` varchar(100) DEFAULT NULL,
  `org_fax` varchar(50) NOT NULL,
  `org_work_type` tinyint(4) NOT NULL DEFAULT '0',
  `org_tree_type` int(11) NOT NULL DEFAULT '0',
  `org_work_id` varchar(30) NOT NULL,
  `org_town` varchar(100) NOT NULL,
  `org_address` varchar(255) NOT NULL,
  `org_status` tinyint(4) NOT NULL DEFAULT '0',
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cure_organizations`
--

INSERT INTO `cure_organizations` (`org_id`, `org_name`, `org_email`, `org_fax`, `org_work_type`, `org_tree_type`, `org_work_id`, `org_town`, `org_address`, `org_status`, `owner_id`) VALUES
(1, 'Cure', 'cure@gmail.com', '01026957744', 2, 0, '226154653125658', 'Alsharqiya ', 'alsharqiya - tolba oweda streat ', 1, 6),
(3, '1-test branch ', NULL, '01026295877', 1, 1, '214654894534321', 'test ', 'test,testfulltest', 0, 6),
(4, '1-test branch 22', NULL, '01026232877', 4, 1, '214654894454321', 'test ', 'test,testfulltest', 0, 6),
(5, '1-test branch after reload', NULL, '011659854723', 2, 1, '226154986763258', 'reloaded', 'reloaded , branch , index ', 0, 6);

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
(6, 'khalidahmed', 'mohammed@gmail.com', '001100112', '¶ˆ™á\0±«¿N¶Å={WÞZætzíÿè\\ï[U‘ûE*', '583fff5b32977f293ea87babbcd0aafb63f3ede924adc283c5ca6bb0fcaac1e0', '01062957744', 0, '', 'EGY', '', 0, 0, 0, '2020-06-11 19:10:02', '', 1, NULL),
(7, 'yousefHossam', 'youussef@gmail.com', '001100112', 'ŠZIõx%ËÇ–â_P=€À~ž/MâÚÒœ046½Wv', '17b06f710101f08dd029897868c2ab88b48d21254fb0fa3544d04bfe7b3c42ae', '01026957744', 0, '', 'EGY', '', 0, 0, 0, '2020-07-03 14:08:54', '', 0, NULL),
(8, 'drAhmed', 'drAhmed@gmail.com', '001100112', 'qíU0Î¶j4ó:ž5P‰v?NÁ©;ÎíõÏ', '9c2d09dd02bcecb6c907bcdd33dfc5ac5b41481874316e2af1f0e129962a93e1', '01026957784', 0, '', 'EGY', '', 0, 0, 0, '2020-07-05 09:41:35', '', 0, NULL),
(9, 'Abdel-Rahman9400', 'abdelrahman.ali.9400@gmail.com', '12344321', 'K?`??N??~ʮ?H??k???u?1??M??', 'b23d64c913394cba4f7859a2007a43da43e3e161351d0513ea8df233950d790f', '01271752188', 0, '', 'egy', '', 0, 0, 0, '2020-07-12 08:25:15', '', 0, NULL),
(10, 'aaaaaaaa', 'abdelrahman.ali.94000@gmail.com', '12344321', '?]	?j??ӄnZ??sH???????2????_?', '850ef31767f5b6eb29b9af595b1e3990f6c2a3d3f0446d8f899d6e94321e5242', '01146350675', 0, '', 'egy', '', 0, 0, 0, '2020-07-12 08:40:20', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donated_users`
--

CREATE TABLE `donated_users` (
  `donate_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `donate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donated_users`
--

INSERT INTO `donated_users` (`donate_id`, `patient_id`, `request_id`, `donate_date`) VALUES
(1, 7, 1, '2020-07-23 17:19:55'),
(2, 7, 1, '2020-07-24 16:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `donation_requests`
--

CREATE TABLE `donation_requests` (
  `reqeust_id` int(11) NOT NULL,
  `blood_type` varchar(50) NOT NULL,
  `donators_qunatity` int(11) NOT NULL DEFAULT '0',
  `donation_address` varchar(200) NOT NULL,
  `donate_status` tinyint(4) NOT NULL DEFAULT '0',
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donation_requests`
--

INSERT INTO `donation_requests` (`reqeust_id`, `blood_type`, `donators_qunatity`, `donation_address`, `donate_status`, `patient_id`) VALUES
(1, 'B+', 12, 'احا ترو والله ', 0, 7),
(6, 'BPlus', 20, 'الشرقية - الزقازيق - شارع الغشام', 0, 7);

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
-- Table structure for table `orgnization_clinic_details`
--

CREATE TABLE `orgnization_clinic_details` (
  `clinic_id` int(11) NOT NULL,
  `orgnization_id` int(11) NOT NULL,
  `clinic_reservation_cost` double NOT NULL,
  `clinic_repeat_reservation_cost` double NOT NULL,
  `clinic_status` tinyint(4) NOT NULL DEFAULT '0'
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
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`category_id`, `category_name`) VALUES
(1, 'headaches'),
(2, 'Body Care');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `product_id` int(11) NOT NULL
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
(10, '412154ebfa98d7230b026ee4c01640051106669ed6975b4dc8ed27a6f96c1e34', 6),
(11, 'fde6a338164f90a91180f4d66dcce62b861d8afa82ea551fe3e5e1cf566b3f7b', 6),
(12, '12758f950e36589740b53cdf86645faa96a52161d7a29016b9a649b2cfc4a265', 7),
(13, '4b983a66c011865e0709b6ba82c0cc06eeae6f52bdbfb78c1d186ae134aadc0e', 6),
(14, 'fc80c54a15e2dd5d620293d75dba7b59a6b483ccb600ea7f926d1182067a7f2e', 6),
(15, '40d5db328b338af3d9612f5a2004c675b1a74ed3805bba5ffc0f075b6c6e9452', 6),
(16, '43a0b3c4a95484d4da184baed4cfb362547f84bf16fafcc67080825176a7b6fa', 6),
(17, '06a8aead1fdb4ef89b055bc983b0b52f25a8760069a68aa0771d969be4d76aa0', 6),
(18, '6299e0c162707860aa2d17f237670c93b14a5927a49c61c065691e0d383b65bf', 8),
(19, 'fc92f42ab6569d72ade940b371c12bc0dc0f19e1613d552d11433035ec66d447', 6),
(20, '374c32cfdeb4ba57ece0be717c9f602d8c75fd330adcf38735935e4fbb03ce9b', 6),
(21, 'f3c205f24dce3e2962e1893d4ac7a167e1d316bf24b8c9c0237f109f852f36cb', 6),
(22, '98e2a6e876d804fea715be5746b7d701707537e3e9f2bb294e25f1535d89aacc', 6),
(23, 'c896b24444c3f554f24b1028e7496843ee9dc985e227e35e76f72dc55abfd2d1', 6),
(24, 'd26331f2f1db3fae62468069d09ccc8699024fb5e1f161281882722b7f163092', 6),
(25, '00822ef85147596a8d2f4894a90fb4e72b403a63793b7b25e453bf6ac5ec822f', 6),
(26, '4a47a0ade3fe5ae9113bc34f32e719fac94f123e1bf5427757f34dbec236b48c', 6),
(27, 'c62c3e1ac912cd2d3e93b24882e7a060abb7bdd901589ad27e62170226ff42b7', 6),
(28, '06d6c54c17137aa590a11603d5bf9403b5506d8ec60023553a39379e76825e6f', 6),
(29, '982dd352af8f8edabd3db654c261c3bf59cf527d7fa5fe785eec1cba662ae022', 6);

-- --------------------------------------------------------

--
-- Table structure for table `worker_categories`
--

CREATE TABLE `worker_categories` (
  `worker_category_id` int(11) NOT NULL,
  `worker_category_name` varchar(255) NOT NULL,
  `worker_category_desc` varchar(255) NOT NULL,
  `org_id` int(11) NOT NULL,
  `category_premission_type` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker_categories`
--

INSERT INTO `worker_categories` (`worker_category_id`, `worker_category_name`, `worker_category_desc`, `org_id`, `category_premission_type`) VALUES
(1, 'Admininstrator', 'full control permssion category made for me ', 1, 1);

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
-- Indexes for table `authorized_products`
--
ALTER TABLE `authorized_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category_name` (`product_category`);

--
-- Indexes for table `clinics_schedule`
--
ALTER TABLE `clinics_schedule`
  ADD PRIMARY KEY (`sched_id`),
  ADD KEY `connect_to_clinics` (`clinic_id`);

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
-- Indexes for table `donated_users`
--
ALTER TABLE `donated_users`
  ADD PRIMARY KEY (`donate_id`),
  ADD KEY `connect_to_donate_requests` (`request_id`),
  ADD KEY `connect_to_patient_donators` (`patient_id`);

--
-- Indexes for table `donation_requests`
--
ALTER TABLE `donation_requests`
  ADD PRIMARY KEY (`reqeust_id`),
  ADD KEY `connect_to_patients` (`patient_id`);

--
-- Indexes for table `master_medical_file`
--
ALTER TABLE `master_medical_file`
  ADD PRIMARY KEY (`medical_file_id`),
  ADD KEY `connect_patient_with_file` (`patient_id`);

--
-- Indexes for table `orgnization_clinic_details`
--
ALTER TABLE `orgnization_clinic_details`
  ADD PRIMARY KEY (`clinic_id`),
  ADD KEY `connect_to_orgnize` (`orgnization_id`);

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
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `connect_to_products` (`product_id`);

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
  ADD PRIMARY KEY (`worker_category_id`),
  ADD KEY `connect_work_category_to_org` (`org_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aggregate_orgs_workers`
--
ALTER TABLE `aggregate_orgs_workers`
  MODIFY `aggregte_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `authorized_products`
--
ALTER TABLE `authorized_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinics_schedule`
--
ALTER TABLE `clinics_schedule`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cure_users`
--
ALTER TABLE `cure_users`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donated_users`
--
ALTER TABLE `donated_users`
  MODIFY `donate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation_requests`
--
ALTER TABLE `donation_requests`
  MODIFY `reqeust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_medical_file`
--
ALTER TABLE `master_medical_file`
  MODIFY `medical_file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orgnization_clinic_details`
--
ALTER TABLE `orgnization_clinic_details`
  MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `worker_categories`
--
ALTER TABLE `worker_categories`
  MODIFY `worker_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `authorized_products`
--
ALTER TABLE `authorized_products`
  ADD CONSTRAINT `product_category_name` FOREIGN KEY (`product_category`) REFERENCES `products_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clinics_schedule`
--
ALTER TABLE `clinics_schedule`
  ADD CONSTRAINT `connect_to_clinics` FOREIGN KEY (`clinic_id`) REFERENCES `orgnization_clinic_details` (`clinic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `donated_users`
--
ALTER TABLE `donated_users`
  ADD CONSTRAINT `connect_to_donate_requests` FOREIGN KEY (`request_id`) REFERENCES `donation_requests` (`reqeust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_to_patient_donators` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_requests`
--
ALTER TABLE `donation_requests`
  ADD CONSTRAINT `connect_to_patients` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `master_medical_file`
--
ALTER TABLE `master_medical_file`
  ADD CONSTRAINT `connect_patient_with_file` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orgnization_clinic_details`
--
ALTER TABLE `orgnization_clinic_details`
  ADD CONSTRAINT `connect_to_orgnize` FOREIGN KEY (`orgnization_id`) REFERENCES `cure_organizations` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `connect_to_products` FOREIGN KEY (`product_id`) REFERENCES `authorized_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_session`
--
ALTER TABLE `users_session`
  ADD CONSTRAINT `connect_patient_with_session` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker_categories`
--
ALTER TABLE `worker_categories`
  ADD CONSTRAINT `connect_work_category_to_org` FOREIGN KEY (`org_id`) REFERENCES `cure_organizations` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
