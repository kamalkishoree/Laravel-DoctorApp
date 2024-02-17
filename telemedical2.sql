-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 06:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telemedical2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `specialist_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) NOT NULL,
  `patient_id` bigint(20) NOT NULL,
  `booking_date` date NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_slot` time NOT NULL,
  `status` enum('Pending','Approved','Completed','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `order_id`, `specialist_id`, `doctor_id`, `patient_id`, `booking_date`, `name`, `phone`, `time_slot`, `status`, `created`, `created_at`, `updated_at`) VALUES
(1, 188456292, 5, 2, 3, '2021-12-31', 'Rimanshu', '0987654321', '16:30:00', 'Approved', '2021-12-31 10:52:40', '2021-12-31 02:52:40', '2021-12-31 02:53:24'),
(2, 646942281, 5, 2, 4, '2022-01-03', 'Rimanshu', '87637547825', '12:00:00', 'Approved', '2022-01-03 06:14:00', '2022-01-02 22:14:00', '2022-01-02 22:16:39'),
(3, 358618549, 1, 6, 5, '2022-01-04', 'Pattanayu Phlangpalee', '+66625580103', '10:00:00', 'Approved', '2022-01-06 06:34:03', '2022-01-02 22:34:03', '2022-01-02 22:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `booking_video_audio_history`
--

CREATE TABLE `booking_video_audio_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Pending','Approved','Completed','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `call_type` enum('Video','Audio') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Audio',
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_video_audio_history`
--

INSERT INTO `booking_video_audio_history` (`id`, `room_id`, `booking_id`, `doctor_id`, `patient_id`, `status`, `call_type`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, '188456292', 1, 2, 3, 'Pending', 'Video', '10:54:46', '00:00:00', NULL, NULL),
(2, '188456292', 1, 2, 3, 'Pending', 'Video', '10:56:05', '00:00:00', NULL, NULL),
(3, '188456292', 1, 2, 3, 'Pending', 'Video', '10:59:55', '00:00:00', NULL, NULL),
(4, '188456292', 1, 2, 3, 'Pending', 'Video', '11:26:34', '00:00:00', NULL, NULL),
(5, '188456292', 1, 2, 3, 'Pending', 'Video', '11:27:35', '00:00:00', NULL, NULL),
(6, '188456292', 1, 2, 3, 'Pending', 'Video', '11:28:12', '00:00:00', NULL, NULL),
(7, '188456292', 1, 2, 3, 'Pending', 'Video', '11:34:21', '00:00:00', NULL, NULL),
(8, '188456292', 1, 2, 3, 'Pending', 'Video', '11:34:59', '00:00:00', NULL, NULL),
(9, '188456292', 1, 2, 3, 'Pending', 'Video', '11:50:10', '00:00:00', NULL, NULL),
(10, '188456292', 1, 2, 3, 'Pending', 'Video', '11:52:09', '00:00:00', NULL, NULL),
(11, '188456292', 1, 2, 3, 'Pending', 'Video', '11:55:51', '00:00:00', NULL, NULL),
(12, '188456292', 1, 2, 3, 'Pending', 'Video', '11:58:12', '00:00:00', NULL, NULL),
(13, '188456292', 1, 2, 3, 'Pending', 'Video', '11:58:12', '00:00:00', NULL, NULL),
(14, '188456292', 1, 2, 3, 'Pending', 'Video', '12:04:49', '00:00:00', NULL, NULL),
(15, '188456292', 1, 2, 3, 'Pending', 'Video', '12:06:45', '00:00:00', NULL, NULL),
(16, '188456292', 1, 2, 3, 'Pending', 'Video', '12:07:07', '00:00:00', NULL, NULL),
(17, '188456292', 1, 2, 3, 'Pending', 'Video', '12:08:06', '00:00:00', NULL, NULL),
(18, '188456292', 1, 2, 3, 'Pending', 'Video', '12:09:44', '00:00:00', NULL, NULL),
(19, '188456292', 1, 2, 3, 'Approved', 'Video', '13:26:23', '00:00:00', NULL, '2021-12-31 05:26:23'),
(20, '188456292', 1, 2, 3, 'Approved', 'Video', '13:39:00', '00:00:00', NULL, '2021-12-31 05:39:00'),
(21, '646942281', 2, 2, 4, 'Approved', 'Video', '06:23:25', '00:00:00', NULL, '2022-01-02 22:23:25'),
(22, '646942281', 2, 2, 4, 'Pending', 'Video', '09:39:18', '00:00:00', NULL, NULL),
(23, '646942281', 2, 2, 4, 'Pending', 'Video', '09:41:57', '00:00:00', NULL, NULL),
(24, '646942281', 2, 2, 4, 'Pending', 'Video', '09:44:56', '00:00:00', NULL, NULL),
(25, '646942281', 2, 2, 4, 'Pending', 'Video', '10:00:55', '00:00:00', NULL, NULL),
(26, '646942281', 2, 2, 4, 'Pending', 'Video', '10:02:09', '00:00:00', NULL, NULL),
(27, '646942281', 2, 2, 4, 'Pending', 'Video', '10:04:49', '00:00:00', NULL, NULL),
(28, '646942281', 2, 2, 4, 'Pending', 'Video', '10:05:59', '00:00:00', NULL, NULL),
(29, '646942281', 2, 2, 4, 'Pending', 'Video', '10:11:22', '00:00:00', NULL, NULL),
(30, '646942281', 2, 2, 4, 'Pending', 'Video', '10:11:22', '00:00:00', NULL, NULL),
(31, '646942281', 2, 2, 4, 'Pending', 'Video', '10:12:17', '00:00:00', NULL, NULL),
(32, '646942281', 2, 2, 4, 'Pending', 'Video', '10:16:13', '00:00:00', NULL, NULL),
(33, '646942281', 2, 2, 4, 'Pending', 'Video', '10:17:19', '00:00:00', NULL, NULL),
(34, '646942281', 2, 2, 4, 'Pending', 'Video', '10:18:11', '00:00:00', NULL, NULL),
(35, '646942281', 2, 2, 4, 'Pending', 'Video', '10:18:26', '00:00:00', NULL, NULL),
(36, '646942281', 2, 2, 4, 'Approved', 'Video', '10:24:19', '00:00:00', NULL, '2022-01-03 02:24:19'),
(37, '646942281', 2, 2, 4, 'Pending', 'Video', '10:24:54', '00:00:00', NULL, NULL),
(38, '646942281', 2, 2, 4, 'Pending', 'Video', '10:28:59', '00:00:00', NULL, NULL),
(39, '646942281', 2, 2, 4, 'Pending', 'Video', '10:29:48', '00:00:00', NULL, NULL),
(40, '646942281', 2, 2, 4, 'Pending', 'Video', '10:31:29', '00:00:00', NULL, NULL),
(41, '646942281', 2, 2, 4, 'Pending', 'Video', '10:37:01', '00:00:00', NULL, NULL),
(42, '646942281', 2, 2, 4, 'Pending', 'Video', '10:39:50', '00:00:00', NULL, NULL),
(43, '646942281', 2, 2, 4, 'Pending', 'Video', '10:40:57', '00:00:00', NULL, NULL),
(44, '646942281', 2, 2, 4, 'Pending', 'Video', '10:45:41', '00:00:00', NULL, NULL),
(45, '646942281', 2, 2, 4, 'Approved', 'Video', '10:57:29', '00:00:00', NULL, '2022-01-03 02:57:29'),
(46, '646942281', 2, 2, 4, 'Pending', 'Video', '10:58:20', '00:00:00', NULL, NULL),
(47, '646942281', 2, 2, 4, 'Pending', 'Video', '10:58:53', '00:00:00', NULL, NULL),
(48, '646942281', 2, 2, 4, 'Pending', 'Video', '11:00:05', '00:00:00', NULL, NULL),
(49, '646942281', 2, 2, 4, 'Pending', 'Video', '11:03:05', '00:00:00', NULL, NULL),
(50, '646942281', 2, 2, 4, 'Pending', 'Video', '11:03:30', '00:00:00', NULL, NULL),
(51, '646942281', 2, 2, 4, 'Pending', 'Video', '11:06:27', '00:00:00', NULL, NULL),
(52, '646942281', 2, 2, 4, 'Pending', 'Video', '11:09:29', '00:00:00', NULL, NULL),
(53, '646942281', 2, 2, 4, 'Approved', 'Video', '11:10:46', '00:00:00', NULL, '2022-01-03 03:10:46'),
(54, '646942281', 2, 2, 4, 'Pending', 'Video', '11:41:57', '00:00:00', NULL, NULL),
(55, '646942281', 2, 2, 4, 'Pending', 'Video', '11:42:44', '00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_informations`
--

CREATE TABLE `doctor_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialist_id` bigint(20) UNSIGNED NOT NULL,
  `document_image` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_informations`
--

INSERT INTO `doctor_informations` (`id`, `doctor_id`, `facebook_url`, `instagram_url`, `linkedin_url`, `twitter_url`, `short_description`, `long_description`, `licence_id`, `specialist_id`, `document_image`, `created_at`, `updated_at`) VALUES
(1, 2, '', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1234567890', 5, 0x313634303934373238365f646f776e6c6f61642e706e67, '2021-12-31 02:41:26', '2021-12-31 02:43:45'),
(2, 6, NULL, NULL, NULL, NULL, NULL, NULL, '1234567890', 1, 0x313634313139313339375f53637265656e2053686f7420323536342d31322d33302061742031322e34392e35382e706e67, '2022-01-02 22:29:57', '2022-01-02 22:29:57'),
(3, 7, NULL, NULL, NULL, NULL, NULL, NULL, '987654321@A', 1, 0x313634313139313634325f312e706e67, '2022-01-02 22:34:02', '2022-01-02 22:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_14_112321_create_patient_informations_table', 1),
(6, '2021_12_14_112853_create_doctor_informations_table', 1),
(7, '2021_12_14_113226_add_image_to_users', 1),
(8, '2021_12_15_113628_add_lab_result_to_patient_informations', 1),
(9, '2021_12_20_124357_create_specialists_table', 1),
(10, '2021_12_20_131449_drop_specialist_from_doctor_informations_table', 1),
(11, '2021_12_20_133257_add_specialist_id_to_doctor_informations', 1),
(12, '2021_12_21_103357_add_multiple_column_to_doctor_informations', 1),
(13, '2021_12_23_101208_create_bookings_table', 1),
(14, '2021_12_29_130648_create_booking_video_audio_history_table', 1),
(15, '2021_12_30_125152_add_column_device_key_users', 2),
(16, '2022_01_05_120149_add_verify_status_to', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_informations`
--

CREATE TABLE `patient_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `dob` date NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_pressure` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `blood_suger` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `symptom` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `allergy` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_result` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_informations`
--

INSERT INTO `patient_informations` (`id`, `patient_id`, `dob`, `weight`, `height`, `blood_pressure`, `blood_suger`, `symptom`, `allergy`, `lab_result`, `created_at`, `updated_at`) VALUES
(1, 3, '1999-04-29', '69', '5\'10', '0', '0', 'O5,O6', 'no', NULL, '2021-12-31 02:41:28', '2021-12-31 02:41:28'),
(2, 4, '1997-02-18', '69', '5\'10', '0', '0', 'O2', 'no', NULL, '2022-01-02 21:40:57', '2022-01-02 21:40:57'),
(3, 5, '1994-06-29', '80', '186', '0', '0', 'O2', '', NULL, '2022-01-02 22:28:22', '2022-01-02 22:28:22'),
(4, 8, '2025-05-22', '72@#4473', '6.@33%$*7', '0', '0', '', 'no', 0x313634313139323634325f686f6d6520706167652e504e47, '2022-01-02 22:50:42', '2022-01-02 22:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specialist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`id`, `specialist`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Allergists', 0x313634313239373035375f635f616c6c657267795f616e645f696d6d756e6f6c6f67792e6a7067, NULL, '2022-01-04 06:20:57'),
(2, 'Anesthesiologists', 0x313634313239373032305f44727570616c2d7765625f4765747479496d616765732d3438373139353932322e6a7067, NULL, '2022-01-04 06:20:20'),
(3, 'Cardiologists', 0x313634313239363937335f646f776e6c6f6164202833292e6a7067, NULL, '2022-01-04 06:19:33'),
(4, 'Colon and Rectal Surgeons', 0x313634313239363933385f436f6c6f72656374616c537572676572792e6a7067, NULL, '2022-01-04 06:18:58'),
(5, 'Dermatologists', 0x313634313239363438325f646f776e6c6f6164202832292e6a7067, NULL, '2022-01-04 06:11:22'),
(6, 'Endocrinologists', 0x313634313239363431355f646f776e6c6f6164202831292e6a7067, NULL, '2022-01-04 06:10:15'),
(7, 'Family Physicians', 0x313634313239363338305f646f776e6c6f61642e6a7067, NULL, '2022-01-04 06:09:40'),
(8, 'Gastroenterologists', 0x313634313239363332385f647265616d7374696d655f78786c5f3130373939373630312e6a7067, NULL, '2022-01-04 06:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_type` enum('doctor','patient','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'doctor',
  `status_verify` enum('Pending','Approved','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female','Others') COLLATE utf8mb4_unicode_ci DEFAULT 'Male',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` blob NOT NULL,
  `device_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_admin`, `user_type`, `status_verify`, `name`, `email`, `phone`, `password`, `gender`, `email_verified_at`, `address`, `location`, `remember_token`, `created_at`, `updated_at`, `image`, `device_key`) VALUES
(2, '0', 'doctor', 'Rejected', 'Rajni', 'rajni.infosif@gmail.com', '7087772970', '$2y$10$EzAx8otz16rFeoSeOzO9MuDyU1YeLMih0/qGb3Ad/uDoFTQjoB1c2', 'Male', NULL, '11 Phase Mohali', '11 Phase mohali', NULL, NULL, '2022-01-06 02:08:14', 0x313634303934373238365f414d5955383530392e6a7067, 'dXa5aTFKxx2WywO6b1lhCz:APA91bGIouzEoo-HH02AMfAHZ4DpppJ6TnCXswBU5JfGtT5vN7vOjZ0G9pcuRUHez8rVl5vTXzCwIGrU03lwKL0uMLqSehST1iAden_dtIfoZwiImvTQzYYcHMH4hFGLSmFF5LrEmF4Q'),
(3, '0', 'patient', 'Pending', 'Rimanshu', 'rimanshu.omninos@gmail.com', '0987654321', '$2y$10$nYJHW54.oto2bOzy.6OikOU9kVtroCJSNO4iJNQ1pAv9Fm8H0HRaO', 'Male', NULL, 'mai ni btana', 'jaan kr kya kroge', NULL, NULL, '2021-12-31 03:18:16', 0x313634303934373238385f495420696d6167652e6a706567, 'cYa3Xfz6IiYgdkNRx1lOHV:APA91bH4Q7SUf4QEPM8HpqCOkE-CQAIKH8RfBnkrbHCeNhAQrqTjvHlWYk5umE9NXLvFTqAfBUgjzhFVAb01xiw7PGuqW8T64zR3_YzsGEMLY_1yceuAzLhwLj-R-kPw7q-DtT_UAvEI'),
(4, '0', 'patient', 'Pending', 'Rimanshu', 'rimanshu@gmail.com', '123456763', '$2y$10$EzAx8otz16rFeoSeOzO9MuDyU1YeLMih0/qGb3Ad/uDoFTQjoB1c2', 'Male', NULL, 'mohali (Panjab)', 'punjab', NULL, NULL, '2022-01-03 02:56:52', 0x313634313138383435375f35613163343065636131326230312e343230363539333231353131383031303638363630322e706e67, 'dHroJ2o76UYaavyuTF-pM0:APA91bFo3zu1HZNNBK4DBNbFn4t_LOZDjqploiDqv60fmFnerQ4QJAH7jJCbo9WkTwSSSGPd-ZkkqCeR53XG08gdFDu5Ex0CP-Dpt16uBSHigVjqanovX3ppcPkheJWlif07FIR7GSGz'),
(5, '0', 'patient', 'Pending', 'Pattanayu Phlangpalee', 'pattanayu.ph@gmail.com', '+66625580103', '$2y$10$Q4nOCRlitxqJ3mb9IWgC3.9vFp7Ny2aju7Wd7gelWTRzrlpwjLTh2', 'Male', NULL, '80 BM building , Nong Bon', 'thailand', NULL, NULL, '2022-01-02 22:30:40', 0x313634313139313330325f53637265656e2053686f7420323536342d31322d31372061742030302e31332e30312e706e67, 'f9OpGgf0u11N1D6YhQcEWh:APA91bFhLphyQ9TmHN6eOLOloDx5I07pkfIxaJlJR_uzG_YGAfYMR03bZrhD6m8mpfd_5nJqwGXvcL8RUoyaaaRHNxdCktCn-y5S7WupAayAjonaHdq54po63qGsHNKHaTPMrSkhzvSE'),
(6, '0', 'doctor', 'Approved', 'Cream', 'pattanayu.ph@wolfy-soft.com', '+666850852415', '$2y$10$i.aasOI9/4GQ6hx2RgZKO.SSAG5SZEXEB/639ZcdISi1mIrj6ceK.', 'Male', NULL, '80 BM building , Nong Bon', 'thailand', NULL, NULL, '2022-01-06 02:08:05', 0x313634313139313339375f53637265656e2053686f7420323536342d31322d31372061742030302e31312e30352e706e67, 'f9OpGgf0u11N1D6YhQcEWh:APA91bFhLphyQ9TmHN6eOLOloDx5I07pkfIxaJlJR_uzG_YGAfYMR03bZrhD6m8mpfd_5nJqwGXvcL8RUoyaaaRHNxdCktCn-y5S7WupAayAjonaHdq54po63qGsHNKHaTPMrSkhzvSE'),
(7, '0', 'doctor', 'Rejected', 'Aditi', 'aditi@gmail.com', '9874563210', '$2y$10$TOXKnw6OKc/jkjnneuigquyU3UxEWLc.ooJXnYl32pxgBPaRcsKPu', 'Female', NULL, 'Chandigarh', 'Mohali', NULL, NULL, '2022-01-06 23:52:15', 0x313634313139313634325f312e706e67, NULL),
(8, '0', 'patient', 'Pending', 'Sumit', 'Star@star.star', '124578895', '$2y$10$sML2182V6LYNFhk7V68Z6OSPBFj.B/L59Bx4GUeXcdEmgJ1OAIQXu', 'Male', NULL, 'chandigarh@32423547833333#$$%5', 'Chandigarh$#%##5', NULL, NULL, '2022-01-02 22:51:20', 0x313634313139323634325f666f72676f742070617373776f72642e504e47, 'crqCovqTgLl6wmo553T_hg:APA91bGS9odVbF9-75CqzgWGUzu8RqUhx_GjJ3ryf60ubCkhT-wtzkOE7uM1_7HoxdvevZnY8IjVkif1Tvn1MCUmqbAC78X6IArSuxw0Osr8S9894JimgomX2prXCYf7YhwcgyBgazcP'),
(9, '1', 'admin', 'Pending', 'Admin', 'admin@takecare.com', '123456789', '$2y$10$MyucXd5NROgpRHRUzgU1sOE2DzrBKreIYlDgHBKmQ8GRTMWvbmqQm', 'Male', NULL, NULL, NULL, NULL, '2022-01-03 03:22:50', '2022-01-03 03:22:50', 0x313633393536373130385f6973746f636b70686f746f2d3137373337333039332d363132783631322e6a7067, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_specialist_id_foreign` (`specialist_id`);

--
-- Indexes for table `booking_video_audio_history`
--
ALTER TABLE `booking_video_audio_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_video_audio_history_booking_id_foreign` (`booking_id`),
  ADD KEY `booking_video_audio_history_doctor_id_foreign` (`doctor_id`),
  ADD KEY `booking_video_audio_history_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `doctor_informations`
--
ALTER TABLE `doctor_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_informations_doctor_id_foreign` (`doctor_id`),
  ADD KEY `doctor_informations_specialist_id_foreign` (`specialist_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_informations`
--
ALTER TABLE `patient_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_informations_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking_video_audio_history`
--
ALTER TABLE `booking_video_audio_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `doctor_informations`
--
ALTER TABLE `doctor_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patient_informations`
--
ALTER TABLE `patient_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_video_audio_history`
--
ALTER TABLE `booking_video_audio_history`
  ADD CONSTRAINT `booking_video_audio_history_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_video_audio_history_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_video_audio_history_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_informations`
--
ALTER TABLE `doctor_informations`
  ADD CONSTRAINT `doctor_informations_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctor_informations_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_informations`
--
ALTER TABLE `patient_informations`
  ADD CONSTRAINT `patient_informations_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
