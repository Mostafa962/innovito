-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 07:08 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innovito`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'category 1', 'category-1', '2019-09-06 12:22:50', '2019-09-06 12:22:50'),
(2, 'category 2', 'category-2', '2019-09-06 12:22:54', '2019-09-06 12:22:54'),
(3, 'category 3', 'category-3', '2019-09-06 12:22:58', '2019-09-06 12:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `completion_criterias`
--

CREATE TABLE `completion_criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `completion_criterias`
--

INSERT INTO `completion_criterias` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Overall Assessments', '2019-09-06 12:08:16', '2019-09-06 12:08:16'),
(2, 'Final Assessment', '2019-09-06 12:08:16', '2019-09-06 12:08:16'),
(3, 'Videos', '2019-09-06 12:08:16', '2019-09-06 12:08:16'),
(4, 'None', '2019-09-06 12:08:17', '2019-09-06 12:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `completion_criteria_details`
--

CREATE TABLE `completion_criteria_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `min_score` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `text_body` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `video_filename` text COLLATE utf8mb4_unicode_ci,
  `video_duration` text COLLATE utf8mb4_unicode_ci,
  `localvideo_link` text COLLATE utf8mb4_unicode_ci,
  `external_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `lesson_id`, `text_body`, `image`, `video_filename`, `video_duration`, `localvideo_link`, `external_link`, `created_at`, `updated_at`) VALUES
(3, 6, NULL, NULL, 'MyAcademy.pdf', NULL, 'uploads/course/lessons/uploads/090820190458125d748a645d5cbMyAcademy.pdf', NULL, '2019-09-07 17:14:20', '2019-09-08 02:58:12'),
(4, 7, NULL, 'uploads/course/lessons/uploads/090720191915235d7401cbcf191pp.jpg', NULL, NULL, NULL, NULL, '2019-09-07 17:15:23', '2019-09-07 17:15:23'),
(6, 9, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 01:54:54', '2019-09-08 01:54:54'),
(7, 10, NULL, 'uploads/course/lessons/uploads/090820190404395d747dd7643f518058122_1318694998215991_4679326290372134627_n.jpg', NULL, NULL, NULL, NULL, '2019-09-08 02:04:39', '2019-09-08 02:04:39'),
(8, 11, NULL, NULL, NULL, '00:00:05', NULL, 'https://www.google.com', '2019-09-08 02:27:32', '2019-09-08 02:27:32'),
(9, 12, NULL, NULL, 'audioclip-1562769243-82456.mp4', '00:00:05', 'uploads/course/lessons/uploads/090820190431585d74843eb1d91audioclip-1562769243-82456.mp4', NULL, '2019-09-08 02:31:58', '2019-09-08 02:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `course_type_id` bigint(20) UNSIGNED NOT NULL,
  `completion_criteria_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `expired_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `category_id`, `course_type_id`, `completion_criteria_id`, `title`, `slug`, `language`, `image`, `certificate`, `description`, `published`, `approved`, `expired_at`, `created_at`, `updated_at`) VALUES
(18, 4, 1, 1, 1, 'Course 1', 'course-1', 'English', 'uploads/course/images/090620192326115d72eb13e4ba8default-user-icon-5.jpg', NULL, 'course 1 description', 0, 0, '2019-12-30 22:00:00', '2019-09-06 21:26:11', '2019-09-06 21:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `course_types`
--

CREATE TABLE `course_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_types`
--

INSERT INTO `course_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Self Paced', '2019-09-06 12:08:16', '2019-09-06 12:08:16'),
(2, 'Instructor Led', '2019-09-06 12:08:16', '2019-09-06 12:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `user_id`, `course_id`, `status`, `created_at`, `updated_at`) VALUES
(9, 10, 18, 1, '2019-09-06 21:26:12', '2019-09-06 21:26:12'),
(10, 11, 18, 1, '2019-09-06 21:26:12', '2019-09-06 21:26:12'),
(11, 12, 18, 1, '2019-09-06 21:26:12', '2019-09-06 21:26:12'),
(12, 13, 18, 1, '2019-09-06 21:26:12', '2019-09-06 21:26:12'),
(13, 14, 18, 1, '2019-09-06 21:26:12', '2019-09-06 21:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `lesson_type_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `section_id`, `lesson_type_id`, `title`, `description`, `order`, `score`, `created_at`, `updated_at`) VALUES
(6, 1, 4, 'aaaaa', 'Lesson File Description', 3, 0, '2019-09-07 17:14:19', '2019-09-08 02:58:12'),
(7, 1, 3, 'Lesson Text + Image', 'Lesson Text + Image1', 4, 0, '2019-09-07 17:15:23', '2019-09-07 17:15:23'),
(9, 15, 1, 'Lesson Text 1', 'Lesson Description', 7, 0, '2019-09-08 01:54:54', '2019-09-08 02:55:38'),
(10, 1, 2, 'Lesson Image 2', NULL, 1, 0, '2019-09-08 02:04:39', '2019-09-08 03:05:50'),
(11, 15, 5, 'Lesson External', 'Lesson Des', 1, 0, '2019-09-08 02:27:32', '2019-09-08 02:27:32'),
(12, 15, 6, 'Internal', 'intenr a', 1, 0, '2019-09-08 02:31:58', '2019-09-08 02:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_types`
--

CREATE TABLE `lesson_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lesson_types`
--

INSERT INTO `lesson_types` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'text', '2019-09-07 14:33:46', '2019-09-07 14:33:46'),
(2, 'image', '2019-09-07 14:33:46', '2019-09-07 14:33:46'),
(3, 'text and image', '2019-09-07 14:33:46', '2019-09-07 14:33:46'),
(4, 'file', '2019-09-07 14:33:46', '2019-09-07 14:33:46'),
(5, 'external content', '2019-09-07 14:33:46', '2019-09-07 14:33:46'),
(6, 'internal upload', '2019-09-07 14:33:46', '2019-09-07 14:33:46'),
(7, 'scorm', '2019-09-07 14:33:46', '2019-09-07 14:33:46'),
(8, 'quiz', '2019-09-07 14:33:46', '2019-09-07 14:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `original_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `original_name`, `size`, `link`, `type`, `preview_link`, `created_at`, `updated_at`) VALUES
(1, 'logo-tb.png', '2.18', 'uploads/panel/media/090620191413505d72699ed7110logo-tb.png', 'png', NULL, '2019-09-06 12:13:50', '2019-09-06 12:13:50'),
(2, 'whitelogo.png', '3.51', 'uploads/panel/media/090620191413515d72699f36ae6whitelogo.png', 'png', NULL, '2019-09-06 12:13:51', '2019-09-06 12:13:51'),
(3, 'default-user-icon-5.jpg', '49.84', 'uploads/panel/media/090620191413515d72699f757f5default-user-icon-5.jpg', 'jpg', NULL, '2019-09-06 12:13:51', '2019-09-06 12:13:51'),
(4, 'optica_pattern_12.png', '83.72', 'uploads/panel/media/090620191413515d72699fac15coptica_pattern_12.png', 'png', NULL, '2019-09-06 12:13:51', '2019-09-06 12:13:51');

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
(3, '2019_08_20_182703_create_permission_tables', 1),
(4, '2019_08_20_192637_create_departments_table', 1),
(5, '2019_08_20_192909_create_branches_table', 1),
(6, '2019_08_20_193320_update_users', 1),
(7, '2019_08_21_020857_create_media_table', 1),
(8, '2019_08_21_204120_create_categories_table', 2),
(9, '2019_08_21_235820_add_reset_password_code_to_users_table', 2),
(10, '2019_08_22_182118_add_header_photo_to_users_table', 3),
(11, '2019_08_22_184818_add_personal_info_to_users_table', 3),
(12, '2019_08_25_202511_create_settings_table', 4),
(13, '2019_08_25_320540_add_header_elements_to_settings_table', 4),
(14, '2019_09_02_060621_create_course_types_table', 4),
(15, '2019_09_02_061518_create_completion_criterias_table', 4),
(16, '2019_09_02_061813_create_courses_table', 4),
(17, '2019_09_02_063358_create_completion_criteria_details_table', 4),
(18, '2019_09_02_063544_create_sections_table', 4),
(19, '2019_09_02_063901_create_lesson_types_table', 4),
(20, '2019_09_02_063957_create_lessons_table', 4),
(21, '2019_09_02_064449_create_contents_table', 4),
(22, '2019_09_03_123119_add_slug_to_courses_table', 4),
(23, '2019_09_06_203856_create_course_user_table', 5),
(25, '2019_09_07_170630_update_lessons_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 3),
(1, 'App\\User', 4),
(2, 'App\\User', 10),
(2, 'App\\User', 11),
(2, 'App\\User', 12),
(2, 'App\\User', 13),
(2, 'App\\User', 14),
(3, 'App\\User', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit courses', 'web', '2019-08-20 16:50:36', '2019-08-20 16:50:36'),
(2, 'delete courses', 'web', '2019-08-20 16:50:36', '2019-08-20 16:50:36'),
(3, 'publish courses', 'web', '2019-08-20 16:50:36', '2019-08-20 16:50:36'),
(4, 'unpublish courses', 'web', '2019-08-20 16:50:36', '2019-08-20 16:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'coordinator', 'web', '2019-08-20 16:50:36', '2019-08-20 16:50:36'),
(2, 'employee', 'web', '2019-08-20 16:50:37', '2019-08-20 16:50:37'),
(3, 'super-admin', 'web', '2019-08-20 16:50:37', '2019-08-20 16:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `course_id`, `title`, `order`, `created_at`, `updated_at`) VALUES
(1, 18, 'Section 1', 1, '2019-09-06 23:56:20', '2019-09-07 13:04:31'),
(15, 18, 'Section 2', 2, '2019-09-07 16:15:57', '2019-09-07 16:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fav_id` bigint(20) UNSIGNED DEFAULT NULL,
  `default_image_employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `default_image_coordinator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `website_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_header_coordinator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `default_header_employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo_id`, `fav_id`, `default_image_employee_id`, `default_image_coordinator_id`, `website_title`, `default_header_coordinator_id`, `default_header_employee_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 3, 3, 'Innovito', 4, 4, '2019-09-06 12:08:01', '2019-09-06 12:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `little_description` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci,
  `header_image` text COLLATE utf8mb4_unicode_ci,
  `score` int(11) NOT NULL DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci,
  `reset_password_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `department_id`, `branch_id`, `username`, `username_slug`, `bio`, `email`, `email_verified_at`, `password`, `remember_token`, `linkedin`, `twitter`, `facebook`, `status`, `occupation`, `birthplace`, `little_description`, `city`, `country`, `phone`, `birthday`, `website`, `header_image`, `score`, `image`, `reset_password_code`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, NULL, NULL, NULL, 'admin@innovito.com', NULL, '$2y$10$6MyzbgM4bTlwDuLAv5xmm.TOi9wL3vJ80m2Ri9zeW2u7jTqEEOKJy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2019-09-06 12:01:45', '2019-09-06 12:01:45'),
(3, 'Saleh', NULL, NULL, NULL, NULL, NULL, 'mohmed2778@hotmail.com', NULL, '$2y$10$SjDOvAqMsHxVJNNFH3Chv.6LgyR9Z0K0A2WVPAtakQmZVfTcRvrXi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/panel/media/090620191413515d72699fac15coptica_pattern_12.png', 0, 'uploads/panel/media/090620191413515d72699f757f5default-user-icon-5.jpg', NULL, '2019-09-06 12:15:06', '2019-09-06 12:15:06'),
(4, 'Hassan', NULL, NULL, NULL, NULL, NULL, 'mohammedd.salehh@gmail.com', NULL, '$2y$10$ktb1n8iNIsJu3uHtwKIZ6.Eomt02GkHw76HtzQWp8kAL1ak2WYInu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/panel/media/090620191413515d72699fac15coptica_pattern_12.png', 0, 'uploads/panel/media/090620191413515d72699f757f5default-user-icon-5.jpg', NULL, '2019-09-06 12:15:12', '2019-09-06 12:17:00'),
(10, 'Elisabeth Parker Sr.', NULL, NULL, NULL, NULL, NULL, 'crist.lonzo@example.org', '2019-09-06 18:21:06', '$2y$10$0UJ1mxPoSoeL1vFPQopjJuaeABYEeomsSspGKhIcfPyuFMpwVOncm', 'zvBTotccbM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/panel/media/090620191413515d72699fac15coptica_pattern_12.png', 0, 'uploads/panel/media/090620191413515d72699f757f5default-user-icon-5.jpg', NULL, '2019-09-06 18:21:07', '2019-09-06 18:21:07'),
(11, 'Edythe Ortiz', NULL, NULL, NULL, NULL, NULL, 'destany57@example.net', '2019-09-06 18:21:07', '$2y$10$WoAR3LOKpoLS0A8mMSi8eOF4jcqf.PUpkNSTPuRZYSt6REgiZFm6m', 'tMHJVxxZy7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/panel/media/090620191413515d72699fac15coptica_pattern_12.png', 0, 'uploads/panel/media/090620191413515d72699f757f5default-user-icon-5.jpg', NULL, '2019-09-06 18:21:07', '2019-09-06 18:21:07'),
(12, 'Elinore Krajcik', NULL, NULL, NULL, NULL, NULL, 'ozella85@example.com', '2019-09-06 18:21:07', '$2y$10$sD1N8hTbfxCcXXTaUAK4Wug2878lc8t9jDW4qgnkGi1vG1aozNUnu', 'oUwgbtKHxF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/panel/media/090620191413515d72699fac15coptica_pattern_12.png', 0, 'uploads/panel/media/090620191413515d72699f757f5default-user-icon-5.jpg', NULL, '2019-09-06 18:21:07', '2019-09-06 18:21:07'),
(13, 'Isabel Aufderhar', NULL, NULL, NULL, NULL, NULL, 'qwiegand@example.net', '2019-09-06 18:21:07', '$2y$10$S7swcc1fsVY7koRu.qR1JukpGZJhCQbe8a0c/eRTy29thrjL20WOu', 'FrcUVCfyfu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/panel/media/090620191413515d72699fac15coptica_pattern_12.png', 0, 'uploads/panel/media/090620191413515d72699f757f5default-user-icon-5.jpg', NULL, '2019-09-06 18:21:07', '2019-09-06 18:21:07'),
(14, 'Lilyan Zieme I', NULL, NULL, NULL, NULL, NULL, 'jones.quinten@example.org', '2019-09-06 18:21:07', '$2y$10$8cNFjdSqcbLZECMbDGUBYuKelqpdI.P5GNVdWR.9SvptSwQpxzYH2', 'GeD5lkdDNk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/panel/media/090620191413515d72699fac15coptica_pattern_12.png', 0, 'uploads/panel/media/090620191413515d72699f757f5default-user-icon-5.jpg', NULL, '2019-09-06 18:21:07', '2019-09-06 18:21:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completion_criterias`
--
ALTER TABLE `completion_criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completion_criteria_details`
--
ALTER TABLE `completion_criteria_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `completion_criteria_details_course_id_foreign` (`course_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_lesson_id_foreign` (`lesson_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`),
  ADD KEY `courses_category_id_foreign` (`category_id`),
  ADD KEY `courses_course_type_id_foreign` (`course_type_id`),
  ADD KEY `courses_completion_criteria_id_foreign` (`completion_criteria_id`);

--
-- Indexes for table `course_types`
--
ALTER TABLE `course_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_user_user_id_foreign` (`user_id`),
  ADD KEY `course_user_course_id_foreign` (`course_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_section_id_foreign` (`section_id`),
  ADD KEY `lessons_lesson_type_id_foreign` (`lesson_type_id`);

--
-- Indexes for table `lesson_types`
--
ALTER TABLE `lesson_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_course_id_foreign` (`course_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_logo_id_foreign` (`logo_id`),
  ADD KEY `settings_fav_id_foreign` (`fav_id`),
  ADD KEY `settings_default_image_employee_id_foreign` (`default_image_employee_id`),
  ADD KEY `settings_default_image_coordinator_id_foreign` (`default_image_coordinator_id`),
  ADD KEY `settings_default_header_employee_id_foreign` (`default_header_employee_id`),
  ADD KEY `settings_default_header_coordinator_id_foreign` (`default_header_coordinator_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_department_id_foreign` (`department_id`),
  ADD KEY `users_branch_id_foreign` (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `completion_criterias`
--
ALTER TABLE `completion_criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `completion_criteria_details`
--
ALTER TABLE `completion_criteria_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `course_types`
--
ALTER TABLE `course_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lesson_types`
--
ALTER TABLE `lesson_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `completion_criteria_details`
--
ALTER TABLE `completion_criteria_details`
  ADD CONSTRAINT `completion_criteria_details_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_completion_criteria_id_foreign` FOREIGN KEY (`completion_criteria_id`) REFERENCES `completion_criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_course_type_id_foreign` FOREIGN KEY (`course_type_id`) REFERENCES `course_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_lesson_type_id_foreign` FOREIGN KEY (`lesson_type_id`) REFERENCES `lesson_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lessons_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_default_header_coordinator_id_foreign` FOREIGN KEY (`default_header_coordinator_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `settings_default_header_employee_id_foreign` FOREIGN KEY (`default_header_employee_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `settings_default_image_coordinator_id_foreign` FOREIGN KEY (`default_image_coordinator_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `settings_default_image_employee_id_foreign` FOREIGN KEY (`default_image_employee_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `settings_fav_id_foreign` FOREIGN KEY (`fav_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `settings_logo_id_foreign` FOREIGN KEY (`logo_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
