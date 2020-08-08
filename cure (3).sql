-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 08:16 AM
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
(2, 6, 5, 1, 6),
(7, 7, 1, 2, 6);

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
  `product_image` varchar(255) DEFAULT NULL,
  `product_category` int(11) NOT NULL,
  `product_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorized_products`
--

INSERT INTO `authorized_products` (`product_id`, `product_name`, `product_specs`, `product_expiry_date`, `product_nation`, `product_tap_or_drink`, `product_price`, `product_size_capacity`, `product_description`, `product_global_barcode`, `product_image`, `product_category`, `product_status`) VALUES
(1, 'Panadol extra ', 'sugar - meat - cheicken and so on ', '12/10/2020', 'Egypt', 0, 22.5, '10', 'good treatments', '111235468785', 'choose.jpg', 1, 0);

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

--
-- Dumping data for table `clinics_schedule`
--

INSERT INTO `clinics_schedule` (`sched_id`, `day_name`, `time_start`, `time_end`, `clinic_id`) VALUES
(3, 'tuesday', '3:00', '5:30', 7);

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
  `org_rate` tinyint(4) NOT NULL DEFAULT '0',
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cure_organizations`
--

INSERT INTO `cure_organizations` (`org_id`, `org_name`, `org_email`, `org_fax`, `org_work_type`, `org_tree_type`, `org_work_id`, `org_town`, `org_address`, `org_status`, `org_rate`, `owner_id`) VALUES
(1, 'Cure', 'cure@gmail.com', '01026957744', 1, 0, '226154653125658', 'Alsharqiya ', 'alsharqiya - tolba oweda streat ', 1, 0, 6),
(3, '1-test branch ', NULL, '01026295877', 4, 1, '214654894534321', 'test ', 'test,testfulltest', 1, 0, 6),
(4, '1-test branch 22', NULL, '01026232877', 4, 1, '214654894454321', 'test ', 'test,testfulltest', 0, 0, 6),
(5, '1-test branch after reload', NULL, '011659854723', 2, 1, '226154986763258', 'reloaded', 'reloaded , branch , index ', 0, 0, 6),
(7, 'Vezta clinic', 'vezeta@gmail.com', '01026958844', 4, 0, '226154653128532', 'Cairo', 'Egpy,Cairo,Nasr city', 1, 0, 11),
(8, 'Egypt Care ', 'egyptcare@gmail.com', '01062957832', 2, 0, '22615498326578', 'egypt', 'egyot-cairo-cairo', 1, 0, 12);

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
  `worker_account_type` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cure_users`
--

INSERT INTO `cure_users` (`patient_id`, `patient_username`, `patient_email`, `patient_password`, `patient_salt`, `patient_hashedpassword`, `patient_phone`, `patient_gender`, `patient_birthdate`, `patient_nationality`, `patient_address`, `patient_e_coins`, `patient_donation_status`, `patient_account_status`, `patient_registerdate`, `patient_image_code`, `worker_account_type`) VALUES
(6, 'khalidahmed', 'mohammed@gmail.com', '001100112', '¶ˆ™á\0±«¿N¶Å={WÞZætzíÿè\\ï[U‘ûE*', '583fff5b32977f293ea87babbcd0aafb63f3ede924adc283c5ca6bb0fcaac1e0', '01062957744', 0, '', 'EGY', '', 500, 0, 0, '2020-06-11 19:10:02', '', 1),
(7, 'yousefHossam', 'youussef@gmail.com', '001100112', 'ŠZIõx%ËÇ–â_P=€À~ž/MâÚÒœ046½Wv', '17b06f710101f08dd029897868c2ab88b48d21254fb0fa3544d04bfe7b3c42ae', '01026957744', 0, '', 'EGY', '', 0, 0, 0, '2020-07-03 14:08:54', '', 0),
(8, 'drAhmed', 'drAhmed@gmail.com', '001100112', 'qíU0Î¶j4ó:ž5P‰v?NÁ©;ÎíõÏ', '9c2d09dd02bcecb6c907bcdd33dfc5ac5b41481874316e2af1f0e129962a93e1', '01026957784', 0, '', 'EGY', '', 0, 0, 0, '2020-07-05 09:41:35', '', 0),
(9, 'Abdel-Rahman9400', 'abdelrahman.ali.9400@gmail.com', '12344321', 'K?`??N??~ʮ?H??k???u?1??M??', 'b23d64c913394cba4f7859a2007a43da43e3e161351d0513ea8df233950d790f', '01271752188', 0, '', 'egy', '', 0, 0, 0, '2020-07-12 08:25:15', '', 0),
(10, 'aaaaaaaa', 'abdelrahman.ali.94000@gmail.com', '12344321', '?]	?j??ӄnZ??sH???????2????_?', '850ef31767f5b6eb29b9af595b1e3990f6c2a3d3f0446d8f899d6e94321e5242', '01146350675', 0, '', 'egy', '', 0, 0, 0, '2020-07-12 08:40:20', '', 0),
(11, 'khalidahmed2', 'mohamme44@gmail.com', '001100112', 'Æ“ÜáÕ{2r´ÂÝÀ£³Oå-@ò–óz7›Šê', '2a6d37af03dfff34333e595bc4a394be00d1f58975d00aee1c966c25aeca77fd', '01026957787', 0, '', 'EGY', '', 0, 0, 0, '2020-08-07 17:48:40', '', 2),
(12, 'khalidahmed3', 'khalidahmed3@gmail.com', '001100112', '}o}ª__UÂÿû·Ï†g/-tHóT@çA4i[Ð', 'b92b55792b77175a816fd2bbde23c538351ad6009922987e3418b01a8da6e0a9', '01026958836', 0, '', 'EGY', '', 0, 0, 0, '2020-08-08 03:34:38', '', 1);

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
(2, 7, 1, '2020-07-24 16:18:17'),
(3, 6, 1, '2020-08-08 06:02:39'),
(4, 6, 7, '2020-08-08 06:13:45');

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
(6, 'BPlus', 20, 'الشرقية - الزقازيق - شارع الغشام', 0, 7),
(7, 'O', 6, 'xxxxxxxxxxxxxx', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `market_orders`
--

CREATE TABLE `market_orders` (
  `order_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patient_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL DEFAULT '0',
  `org_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `market_orders`
--

INSERT INTO `market_orders` (`order_id`, `order_date`, `patient_id`, `item_id`, `order_quantity`, `org_id`) VALUES
(1, '2020-08-07 17:12:56', 8, 2, 10, 1);

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
  `clinic_repeat_reservation_cost` double NOT NULL
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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reserve_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `sched_id` int(11) NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reserve_id`, `patient_id`, `clinic_id`, `sched_id`, `reservation_date`) VALUES
(2, 9, 7, 3, '2020-08-08 03:53:05'),
(3, 6, 7, 3, '2020-08-08 05:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `cart_id` int(11) NOT NULL,
  `cart_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patient_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL DEFAULT '0'
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
(29, '982dd352af8f8edabd3db654c261c3bf59cf527d7fa5fe785eec1cba662ae022', 6),
(30, '5a54daad377938ca94bc84ff09a7f84cd01508ca2da4bf49b4f3d0aef69dae85', 6),
(31, '63996c82d023ab3b5e51e89009054ae233277794aa9cc63cbacdc435c36aa02b', 6),
(32, '27b8711d5ee2fd213ed752c37637f479bcb2006e36704b4ea4842858a1d17881', 6),
(33, 'a918dc8427036e7a9e31d9f7418d64c45e76250b7b35f99792a371ca6df2fea6', 6),
(34, '144efc58e6862d11a865e733dee999b3bd091ad8b12d192e44d48ffe65b33ad0', 6),
(35, '49fb5079085d9a3ef3b25b04862a9f4c633d5c7b96538d42bfb85d81e3c9b238', 7),
(36, '7d88845f0e2d991ec377e424a43dc1ae3dab824bcc4cff4bf5536a76557e1370', 7),
(37, 'c6cd8016cbb4d1d2ff0c69a72931541972dc6bf281100a5921444e5bcdb3e378', 7),
(38, 'a1f0319e19d36221b1efb0c2140bea8c720255756cb30eff89feaa8ee3c8f7e5', 7),
(39, 'a7ba3bb0e1b45426bf2936a0dc1da02f5d5f706ebaf306a8b7be827258744e46', 7),
(40, '93f6e62f127b9136708f44f3f69b49a805a4f79159b493cae0da0c226acfb800', 7),
(41, '38e646712a0a8669d34abd27ca509fa1090cc253e12e3f1f4a3e5707e648b942', 7),
(42, 'aa728f77159db7bb25b1d7cb693a13d62717569b566afdc0026a0d0986d5b0e2', 7),
(43, '093509388a8791471418febabb184e4d227770e22ea577baa3dadbd4c4ff346d', 7),
(44, '06f2a59626d6c40dab651b7e63e66e7804454077705cc07a1059234614017723', 7),
(45, 'bd4a8a1d2f15e60faa33eb1ee728e142112e1447b90c91a6673bdd0d11610d71', 7),
(46, '9056b0bff18bcf6d2259e26e4aee579a23e36535d65a72fd0d8705bb47cbf920', 6),
(47, 'e4728540e5eb2fd4b7652ba8b8ecb79b42533fc2146dc6d58afe70b2b6ebb948', 6),
(48, 'a217c42148da1da18062cc5b2438b91773eaf186f1b8a33b70f0bf684ba5b50b', 7),
(49, '05d11796de6ac0a84c88669ff8e712a3cfc8826bf14445a7d3b5bb451943809c', 7),
(50, 'eeedc348c72f3ec164127932c55f41b27c1b0a2eedd71f3093686f5242c7a4ae', 6),
(51, '29cad908900f95f9bd03767acaa20c973f474bef7e34d5ada94d8e645f15799d', 6),
(52, 'a20c3c2ad597f02d3696e299f51ac8c13ba2604ebea28b1788702c732205684f', 7),
(53, '49fd87d74b39bb8e6f085934ba54bcdf3d88564a39f7d50daae97ac80d40bfb8', 6),
(54, '07df2e4d11c4a92408fd177c1405b06be637f3f90d65958630f0f261ef819e6c', 7),
(55, 'eb69ce65b232b3f6d7c2d4a1d1be79390cef99f0273898295d9bccdbe75c9788', 6),
(56, '682df1ccba5d026e16d0af69e17d30bdc9c12f946a5b454a86f759eacf5517a5', 6),
(57, '617442fd6a0152f4c9697eaf664209a60304f97374decfeff5886154af437a5e', 6),
(58, 'd3414d7bc430e3755988f0f3ef7e52137500b181761bc3a90ccdd8ff87134917', 6),
(59, '60b04d88768c51c1ec0c27a55573526385417fa75d305645f4a49a7e99fb5d59', 6),
(60, '298432591db465fcf3f5062bcfa5efc02d4a311a3a5e2983ad81772b04772f59', 6),
(61, '1a7f8be27720afaa5f390552ebf8cc25a272b2e4bca1dbd0ecf8442943c5702c', 7),
(62, '180d853a34067ca5099a972ef91a5b348dcc7c53e63689fdb607eb0cd7e5def1', 6),
(63, '3c300b64e1a41d363acf87ec77dd8955d1acc5c73ab8da67cd3a59a749c415fb', 7),
(64, '313134e2369984bc0059511df12f47c0ba04b1dc8cfdb4106f8bd02820ee9058', 6),
(65, '4c36ce631e7de842e340a6c5e5ece5b4d640f3379f146a2b407581bc5e6367a5', 11),
(66, 'ffb1abf80638f86f518e4372da78cd97a6ef80f9d391ce68f80b06720b121e0d', 11),
(67, 'f5bf31d47210b1fd7bf69837543ef9dc9efa33d02eabc424b92ab7fe1ee2c263', 6),
(68, '04140a8b10ce6774fcba716e089d128794442853d63111508e2aa428dd83f9a8', 6),
(69, '25ca4d0ce578539b4564023d320950a58d64800ecbac94ab4c983afb8900ba7d', 11),
(70, 'c7fd657abd57abb42b56d51cb6ee8445e4b0a5a62f0d0d8481e594c82f8b24e1', 11),
(71, '4d959a07a72a765b9cdfee1cf418ab4d6edac496da2284a874d1840addb4edd7', 11),
(72, '6fd1f7fc7f63b895d197305ab4ed5368e3ced5f3a516582afc6d1119d0f26b9c', 11),
(73, '2f7e509e93ef1370616e5eb791fc148ba8d429a0a31308cdd44503c37cc4d911', 11),
(74, 'cbcecc103a5e14b5dc68fc551a6d4638eeccf9cee03118f4434afe8648c9b71c', 12),
(75, 'c72576a59ca7746b70e052acbb1eb5d61d9156f378c9baa429afdc3c2363c27f', 12),
(76, '82495135e3f6f8bd1ff70580bffdf1f74d1cb39cbc862e5789f9397f0ea93c95', 12),
(77, '402417bcfeb6380b1cd62bbbb52b2a513e5944aa5aca3f5111f7e72f4457a08e', 11),
(78, 'e5170a5d6942b5d7b017afcbdf81fffac88a0ad7c73d32a856f12ef3779aafc8', 6),
(79, '9e5da3a21716d41305cfa4a7cd7b4808423e6f84d985e37d8b8ab90fd60d3c93', 6);

-- --------------------------------------------------------

--
-- Table structure for table `warehousing`
--

CREATE TABLE `warehousing` (
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL DEFAULT '0',
  `item_price` float NOT NULL DEFAULT '0',
  `sell_visiblity` tinyint(4) NOT NULL DEFAULT '0',
  `treatment_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warehousing`
--

INSERT INTO `warehousing` (`item_id`, `item_quantity`, `item_price`, `sell_visiblity`, `treatment_id`, `org_id`) VALUES
(2, 50, 20, 1, 1, 1);

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
(1, 'Admininstrator', 'full control permssion category made for me ', 1, 1),
(2, 'warehouse and user ', 'responsiable about warehosue product and sell operations ', 1, 3);

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
  ADD PRIMARY KEY (`patient_id`);

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
-- Indexes for table `market_orders`
--
ALTER TABLE `market_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `connect_to_orgs` (`org_id`),
  ADD KEY `connect_to_usrs` (`patient_id`),
  ADD KEY `connect_to_warhouse` (`item_id`);

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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reserve_id`),
  ADD KEY `connect_to_users` (`patient_id`),
  ADD KEY `connect_to_schedules` (`sched_id`),
  ADD KEY `connect_to_or_gs` (`clinic_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `connect_patient_with_session` (`patient_id`);

--
-- Indexes for table `warehousing`
--
ALTER TABLE `warehousing`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `connect_treatment_with_auth` (`treatment_id`),
  ADD KEY `connect_product_with_org` (`org_id`);

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
  MODIFY `aggregte_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `authorized_products`
--
ALTER TABLE `authorized_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinics_schedule`
--
ALTER TABLE `clinics_schedule`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cure_users`
--
ALTER TABLE `cure_users`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donated_users`
--
ALTER TABLE `donated_users`
  MODIFY `donate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation_requests`
--
ALTER TABLE `donation_requests`
  MODIFY `reqeust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `market_orders`
--
ALTER TABLE `market_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `warehousing`
--
ALTER TABLE `warehousing`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worker_categories`
--
ALTER TABLE `worker_categories`
  MODIFY `worker_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `connect_to_clinics` FOREIGN KEY (`clinic_id`) REFERENCES `cure_organizations` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `market_orders`
--
ALTER TABLE `market_orders`
  ADD CONSTRAINT `connect_to_orgs` FOREIGN KEY (`org_id`) REFERENCES `cure_organizations` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_to_usrs` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_to_warhouse` FOREIGN KEY (`item_id`) REFERENCES `warehousing` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `connect_to_or_gs` FOREIGN KEY (`clinic_id`) REFERENCES `cure_organizations` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_to_schedules` FOREIGN KEY (`sched_id`) REFERENCES `clinics_schedule` (`sched_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_to_users` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_session`
--
ALTER TABLE `users_session`
  ADD CONSTRAINT `connect_patient_with_session` FOREIGN KEY (`patient_id`) REFERENCES `cure_users` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warehousing`
--
ALTER TABLE `warehousing`
  ADD CONSTRAINT `connect_product_with_org` FOREIGN KEY (`org_id`) REFERENCES `cure_organizations` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_treatment_with_auth` FOREIGN KEY (`treatment_id`) REFERENCES `authorized_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker_categories`
--
ALTER TABLE `worker_categories`
  ADD CONSTRAINT `connect_work_category_to_org` FOREIGN KEY (`org_id`) REFERENCES `cure_organizations` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
