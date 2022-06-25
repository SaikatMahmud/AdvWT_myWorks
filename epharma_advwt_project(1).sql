-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 10:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epharma_advwt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_mob` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_mob` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_add` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` binary(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_mob`, `customer_add`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Saikat M', 'saikat86@gmail.com', '01545151', 'Dhaka', 0x000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(7, 'Istiak A', 'istiak@gmail.com', '015114551', 'Dhaka', 0x313233340000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(8, 'Anika T', 'anika@gmail.com', '015457151', 'Dhaka', 0x313233340000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(9, 'Kawshik B', 'kawshik@gmail.com', '01540551', 'Dhaka', 0x313233340000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(10, 'Saikat cus', 'saikat@gmail.bd.edu', '01222254', NULL, 0x24327924313024332e3173416c5a51616568663175686c6a716d6c3375443568574d48744c4b53767158347942584e617166346530394d4b505a464b, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deliverymans`
--

CREATE TABLE `deliverymans` (
  `delman_id` int(10) UNSIGNED NOT NULL,
  `delman_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delman_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delman_mob` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delman_nid` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delman_add` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` binary(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliverymans`
--

INSERT INTO `deliverymans` (`delman_id`, `delman_name`, `delman_email`, `delman_mob`, `delman_nid`, `delman_add`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Forhad K', 'forhad@gmail.com', '0115457845', '5587441', 'Bogura', 0x123400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(5, 'Anis A', 'anis@gmail.com', '015457845', '55874041', 'Ctg', 0x123400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(6, 'Hosen S', 'Hosen@gmail.com', '0125457845', '415587441', 'Raj', 0x123400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` int(10) UNSIGNED NOT NULL,
  `medicine_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `genre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `medicine_name`, `price`, `genre`, `details`, `availability`) VALUES
(1, 'Napa', 2, 'thandar osud', 'none', 120),
(2, 'Civit', 5, 'vitamin', 'none', 150),
(3, 'Dysis', 10, 'pressue osud', 'none', 70),
(4, 'Gluvan', 21, 'diabetics osud', 'none', 76),
(5, 'Betaloc', 0.5, 'heart osud', 'none', 200),
(6, 'Nexum', 7, 'gas osud', 'none', 300);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_06_23_083650_create_customers_table', 1),
(4, '2022_06_23_090239_create_suppliers_table', 1),
(5, '2022_06_23_154756_create_medicines_table', 1),
(6, '2022_06_23_155749_create_deliverymans_table', 1),
(7, '2022_06_23_164310_create_supplier_medicine_table', 1),
(8, '2022_06_23_164824_create_orders_table', 1),
(9, '2022_06_23_180259_create_order_medicine_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `c_id` int(10) UNSIGNED NOT NULL,
  `d_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `c_id`, `d_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 5, '', NULL, NULL),
(2, 9, 1, '', NULL, NULL),
(3, 8, 1, '', NULL, NULL),
(4, 1, 5, '', NULL, NULL),
(5, 9, 5, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_medicine`
--

CREATE TABLE `order_medicine` (
  `om_id` int(10) NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `medicine_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_medicine`
--

INSERT INTO `order_medicine` (`om_id`, `order_id`, `medicine_id`) VALUES
(1, 3, 5),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 1, 6),
(6, 5, 6),
(7, 3, 1),
(8, 4, 3),
(9, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_mob` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_add` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` binary(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `supplier_email`, `supplier_mob`, `supplier_add`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Incepta Pharma', 'incepta@yahoo.com', '025451521', 'Gazipur', 0x123400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(2, 'Radiant Pharma', 'radiant@yahoo.com', '020151521', 'Tongi', 0x123400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(3, 'Aristo Pharma', 'aristo@yahoo.com', '0235451521', 'Narayanganj', 0x123400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL),
(4, 'Drug Pharma', 'drug@yahoo.com', '0275451521', 'Mirzapur', 0x123400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_medicine`
--

CREATE TABLE `supplier_medicine` (
  `sm_id` int(10) NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `medicine_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_medicine`
--

INSERT INTO `supplier_medicine` (`sm_id`, `supplier_id`, `medicine_id`) VALUES
(1, 3, 4),
(2, 4, 5),
(3, 1, 3),
(4, 2, 6),
(5, 2, 2),
(6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `worker_id` int(10) NOT NULL,
  `worker_name` varchar(25) NOT NULL,
  `worker_mob` varchar(15) NOT NULL,
  `worker_email` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customers_customer_email_unique` (`customer_email`),
  ADD UNIQUE KEY `customers_customer_mob_unique` (`customer_mob`);

--
-- Indexes for table `deliverymans`
--
ALTER TABLE `deliverymans`
  ADD PRIMARY KEY (`delman_id`),
  ADD UNIQUE KEY `deliverymans_delman_email_unique` (`delman_email`),
  ADD UNIQUE KEY `deliverymans_delman_mob_unique` (`delman_mob`),
  ADD UNIQUE KEY `deliverymans_delman_nid_unique` (`delman_nid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_c_id_foreign` (`c_id`),
  ADD KEY `orders_d_id_foreign` (`d_id`);

--
-- Indexes for table `order_medicine`
--
ALTER TABLE `order_medicine`
  ADD PRIMARY KEY (`om_id`),
  ADD KEY `order_medicine_o_id_foreign` (`order_id`),
  ADD KEY `order_medicine_m_id_foreign` (`medicine_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `suppliers_supplier_email_unique` (`supplier_email`),
  ADD UNIQUE KEY `suppliers_supplier_mob_unique` (`supplier_mob`);

--
-- Indexes for table `supplier_medicine`
--
ALTER TABLE `supplier_medicine`
  ADD PRIMARY KEY (`sm_id`),
  ADD KEY `supplier_medicine_s_id_foreign` (`supplier_id`),
  ADD KEY `supplier_medicine_m_id_foreign` (`medicine_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `deliverymans`
--
ALTER TABLE `deliverymans`
  MODIFY `delman_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicine_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_medicine`
--
ALTER TABLE `order_medicine`
  MODIFY `om_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier_medicine`
--
ALTER TABLE `supplier_medicine`
  MODIFY `sm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `worker_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_c_id_foreign` FOREIGN KEY (`c_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_d_id_foreign` FOREIGN KEY (`d_id`) REFERENCES `deliverymans` (`delman_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_medicine`
--
ALTER TABLE `order_medicine`
  ADD CONSTRAINT `order_medicine_m_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`medicine_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_medicine_o_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier_medicine`
--
ALTER TABLE `supplier_medicine`
  ADD CONSTRAINT `supplier_medicine_m_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`medicine_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplier_medicine_s_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
