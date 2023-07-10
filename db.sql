-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 03:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading`, `button_url`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Empowerment Through Learning', 'contact-us', '1971776715.jpg', '1', '2023-05-24 09:14:12', '2023-05-24 09:14:12'),
(2, 'Empowerment Through Learning', 'contact-us', '1509191175.jpg', '1', '2023-05-24 09:29:17', '2023-05-24 09:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `course_id`, `qty`, `created_at`, `updated_at`) VALUES
(14, 45, 2, '1', '2023-06-30 10:33:34', '2023-06-30 10:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `cart_pages`
--

CREATE TABLE `cart_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_pages`
--

INSERT INTO `cart_pages` (`id`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Cart Page', NULL, NULL, '2023-05-30 06:18:52', '2023-05-30 06:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `coupon_type`, `category_id`, `course_id`, `discount_percentage`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'PFC', '[6,3]', NULL, '12', '2023-06-12', '2023-06-30', '1', '2023-06-12 08:53:19', '2023-06-12 08:53:19'),
(2, 'test2', 'PFP', NULL, '[\"15\",\"2\",\"1\"]', '10', '2023-06-12', '2023-06-30', '1', '2023-06-12 08:53:51', '2023-06-12 10:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_cat_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_include` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `what_you_will_learn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sections` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lectures` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_cat_id`, `title`, `heading`, `course_type`, `regular_price`, `selling_price`, `course_include`, `what_you_will_learn`, `course_content`, `course_slug`, `image`, `sections`, `lectures`, `total_length`, `requirements`, `short_desc`, `description`, `tab_name`, `content`, `meta_title`, `meta_desc`, `meta_keyword`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laravel Development', 'Become a Backend Developer with just ONE course.', NULL, '599', '499', '3 hours on-demand video, 1 article, 24 downloadable resources, Full lifetime access, Access on mobile and TV, Certificate of completion', 'Understand the basics of Ajax interactions, To Update the Browser Window\'s HTML content dynamically through the DOM, To Monitor Server Response for Process Completion, To Receive and Process XML Objects in the DOM, To Understand the Role of a Web Server in Ajax, Understand the basics of Ajax interactions, To Update the Browser Window\'s HTML content dynamically through the DOM, To Monitor Server Response for Process Completion, To Receive and Process XML Objects in the DOM', 'This is the first item\'s accordion body., This is the second item\'s accordion body., This is the third item\'s accordion body.', 'laravel-development', '43200802.jpg', '7', '23', '2h 58m', 'You’ve learned a little Javascript, but you still look at websites with slick, smooth and elegant user interfaces and want to know how web developers create that. The answer is simple: Ajax. You’ve probably heard of it, but you’ve always wondered “What is Ajax”? Ajax is simply Asynchronous Javascript and XML. By taking our Ajax course, you can make pages on your web application respond quickly, and with a minimum of screen refreshes.', 'Understand the basics of Ajax interactions, To Update the Browser Window\'s HTML content dynamically through the DOM, To Monitor Server Response for Process Completion, To Receive and Process XML Objects in the DOM, To Understand the Role of a Web Server in Ajax', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', NULL, NULL, 'Laravel Development', NULL, NULL, '1', 'Tayler Otwell', '2023-05-15 07:54:25', '2023-05-16 07:11:44'),
(2, 1, 'Mern Stack Development', 'Build fullstack React.js applications with Node.js, Express.js & MongoDB (MERN) with this project-focused course.', NULL, '499', '399', '18.5 hours on-demand video, 235 downloadable resources, Certificate of completion, 20 articles, Access on mobile and TV', 'Learn how to connect ReactJS with NodeJS, Express & MongoDB, Refresh the basics about ReactJS, NodeJS, Express and MongoDB, Add File Upload to ReactJS + Node/ Express Applications, Build an entire project from scratch!, Learn how to implement Authentication & Authorization', 'Module Introduction, Understanding the Big Picture, Diving Into the Frontend, Understanding the Backend, REST vs GraphQL', 'mern-stack-development', '1422358009.jpg', '14', '7', '18h 50m', 'Basic knowledge about ReactJS is required\r\nReactJS Hooks knowledge is recommended\r\nBasic knowledge about Node, Express and MongoDB is recommended but not a must-have\r\nNO expert React knowledge or MERN knowledge is required', 'Build fullstack React.js applications with Node.js, Express.js & MongoDB (MERN) with this project-focused course.', 'We built the bestselling React course on FintechIn - this course now allows you to take your React knowledge to the next level and build fullstack web apps based on React, NodeJS, MongoDB and Express!\r\n\r\nBuilding fullstack applications (i.e. frontend + backend) with the MERN stack is very popular - in this course, you will learn it from scratch at the example of a complete project!\r\n\r\nMERN stands for MongoDB, Express.js, React.js and Node.js - and combined, these four technologies allow you to build amazing web applications.\r\n\r\nIn this course, we\'ll build an entire project and you will learn how these different technologies work together step by step. We\'ll first have a look at all the individual building blocks, so that we then can also combine them all into one amazing application by the end of the course.\r\n\r\nThis course also doesn\'t stop after the basics - instead, you\'ll also learn how to add file upload, authentication, authorization and how to deploy your application in different ways to different hosting services.', NULL, NULL, 'Mern Stack Development', NULL, NULL, '1', 'Manuel Lorenz', '2023-05-16 06:18:47', '2023-05-16 07:26:09'),
(3, 2, 'SEO Masterclass 2023', 'SEO Training Masterclass 2023: Beginner To Advanced SEO', NULL, '2799', '389', '17.5 hours on-demand video, 84 downloadable resources, Certificate of completion, 7 articles, Access on mobile and TV', 'Most complete and thorough SEO course on the market,Dominate Google search as well as other search platforms,Smart SEO strategies used only by very savvy marketers,Create a very good SEO strategy for your business,Use different search engines mentioned above to your advantage to dominate everywhere on the web,Go from a beginner to very intelligent about SEO,Learn WordPress SEO and Shopify SEO and SEO for any other platform like Wix,Do SEO on your own for your website or as a freelancer', 'test course content', 'seo-masterclass-2023', '1277972988.jpg', '84', '7', '17.5 hours', 'Be excited about using today\'s smartest SEO strategies to grow your business.', 'Most complete and thorough SEO course on the market, Dominate Google search as well as other search platforms, Smart SEO strategies used only by very savvy marketers, Create a very good SEO strategy for your business', 'Do better SEO than your competitors or any freelancer! Get SEO traffic that fuels your business growth!\r\n\r\nUpdated almost every month with the latest Google search developments.\r\n\r\nLATEST Updates: \r\n\r\nMost recent big changes in Google SEO algorithm\r\n\r\nSite speed case study where I show how to get a fast boost in rankings\r\n\r\nHow to use authoritative SEO sites to rank\r\n\r\nWrite better headlines that increase click-through rates with WordPress SEO and Shopify SEO\r\n\r\nUse social media to boost the SEO rankings of your web pages\r\n\r\nWeglot multilingual SEO plugin that will automatically translate your site to 100+ languages so you can rank in SEO in for hundreds of more keywords\r\n\r\nGoogle trends for additional keyword research\r\n\r\nSEO article writing and SEO copywriting for writing SEO content as a freelancer', NULL, NULL, 'SEO Masterclass 2023', NULL, NULL, '1', 'Alex Genadinik', '2023-05-17 04:55:17', '2023-05-17 04:55:17'),
(15, 3, 'Web Design for Beginners', 'Web Design for Beginners: Real World Coding in HTML & CSS', NULL, '2799', '389', '11 hours on-demand video, Access on mobile and TV, 51 downloadable resources, Certificate of completion', 'Create any website layout you can imagine,Add tasteful animations and effects with CSS,Support any device size with Responsive (mobile-friendly) Design,Use common vocabulary from the design industry', NULL, 'web-design-for-beginners', '139461477.jpg', '17', '23', '17h 44m', 'No prerequisite knowledge required\r\nNo special ($$$) software required', '11 hours on-demand video, Access on mobile and TV, 51 downloadable resources,', 'You can launch a new career in web development today by learning HTML & CSS. You don\'t need a computer science degree or expensive software. All you need is a computer, a bit of time, a lot of determination, and a teacher you trust. I\'ve taught HTML and CSS to countless coworkers and held training sessions for fortune 100 companies. I am that teacher you can trust.', '[\"Welcome\",\"HTML Essentials\",\"Text Basics\",\"Semantics & Organization\"]', '[\"Course Introduction\",\"Why HTML is Exciting, HTML tag\",\"Headings\",\"Semantic Structural Elements\"]', 'Web Design for Beginners', NULL, NULL, '1', 'Brad Schiff', '2023-05-17 06:55:19', '2023-05-26 08:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `course_category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', '1', '2023-05-12 13:04:04', '2023-05-15 09:01:04'),
(2, 'Digital Marketing', '1', '2023-05-12 13:04:18', '2023-05-12 13:04:18'),
(3, 'Web Design', '1', '2023-05-12 13:04:53', '2023-05-12 13:05:41'),
(4, 'Content Writing', '1', '2023-05-15 08:53:02', '2023-05-15 08:53:02'),
(5, 'Video Editing', '1', '2023-05-15 08:53:16', '2023-05-15 08:53:16'),
(6, 'Graphic Design', '1', '2023-05-15 08:53:53', '2023-05-15 08:54:09'),
(7, 'Drawing', '1', '2023-05-15 09:04:50', '2023-05-15 09:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `course_contents`
--

CREATE TABLE `course_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `tab_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_contents`
--

INSERT INTO `course_contents` (`id`, `course_id`, `tab_name`, `content`, `created_at`, `updated_at`) VALUES
(1, 15, 'Welcome', 'Course Introduction', '2023-05-17 06:55:38', '2023-05-26 08:37:27'),
(2, 15, 'HTML Essentials', 'Why HTML is Exciting, HTML tag', '2023-05-17 06:55:38', '2023-05-26 08:37:27'),
(3, 15, 'Text Basics', 'Headings', '2023-05-17 06:55:38', '2023-05-26 08:37:27'),
(4, 15, 'Semantics & Organization', 'Semantic Structural Elements', '2023-05-17 06:55:38', '2023-05-26 08:37:27');

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
-- Table structure for table `header_and_footers`
--

CREATE TABLE `header_and_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_and_footers`
--

INSERT INTO `header_and_footers` (`id`, `header_logo`, `footer_logo`, `fb_link`, `twitter_link`, `linkedin_link`, `instagram_link`, `youtube_link`, `mail`, `phone`, `created_at`, `updated_at`) VALUES
(1, '2114902679.png', '2017959024.png', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://instagram.com/', 'https://youtube.com/', 'service@1callatmservice.com', '662-932-2490', '2023-05-03 07:43:40', '2023-05-12 10:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `count_no_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_no_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_no_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_no_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_no_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `count_no_1`, `heading_1`, `count_no_2`, `heading_2`, `count_no_3`, `heading_3`, `count_no_4`, `heading_4`, `count_no_5`, `heading_5`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, '4000', 'STUDENTS & DELEGATES', '4000', 'STUDENTS & DELEGATES', '4000', 'STUDENTS & DELEGATES', '4000', 'STUDENTS & DELEGATES', '4000', 'STUDENTS & DELEGATES', 'Home Page', NULL, NULL, '2023-05-30 05:30:05', '2023-05-30 06:35:04');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_04_27_144700_create_banners_table', 2),
(11, '2023_04_27_161153_create_clients_table', 3),
(12, '2023_04_27_172211_create_services_table', 4),
(13, '2023_04_28_181624_create_focus_products_table', 5),
(14, '2023_05_02_124233_create_testimonials_table', 6),
(15, '2023_05_02_145017_create_technologies_table', 7),
(16, '2023_05_02_181449_create_our_missions_table', 8),
(17, '2023_05_03_104519_create_offices_table', 9),
(18, '2023_05_03_115310_create_contacts_table', 10),
(19, '2023_05_03_123946_create_header_and_footers_table', 11),
(20, '2023_05_03_165020_create_three_columns_table', 12),
(21, '2023_05_04_115559_create_abouts_table', 13),
(22, '2023_05_04_125007_create_need_helps_table', 14),
(23, '2023_05_04_142258_create_who_we_ares_table', 15),
(24, '2023_05_05_101722_create_commercial_technologies_table', 16),
(25, '2023_05_05_102245_create_community_technologies_table', 16),
(26, '2023_05_05_114452_create_homes_table', 17),
(27, '2023_05_05_163459_create_basic_info_of_focus_products_table', 18),
(28, '2023_05_05_172504_create_companies_table', 19),
(29, '2023_05_05_182324_create_service_pages_table', 20),
(30, '2023_05_08_121510_create_offices_table', 21),
(31, '2023_05_10_111040_create_product_categories_table', 22),
(32, '2023_05_10_112837_create_products_table', 23),
(33, '2023_05_10_165942_create_product_pages_table', 24),
(34, '2023_05_10_172406_create_blogs_table', 25),
(35, '2023_05_10_185230_create_blog_pages_table', 26),
(36, '2023_05_11_124139_create_contact_pages_table', 27),
(37, '2023_05_12_162008_create_courses_table', 28),
(38, '2023_05_12_174805_create_course_categories_table', 29),
(39, '2023_05_17_104124_create_course_contents_table', 30),
(40, '2023_05_19_105507_create_carts_table', 31),
(41, '2023_05_24_141835_create_banners_table', 32),
(42, '2023_05_24_164642_create_counters_table', 33),
(43, '2023_05_29_181730_create_cart_pages_table', 34),
(44, '2023_05_29_183115_create_home_pages_table', 34),
(45, '2023_06_01_131259_create_orders_table', 35),
(46, '2023_06_01_131325_create_order_items_table', 35),
(47, '2023_06_01_142856_create_orders_table', 36),
(48, '2023_06_01_142901_create_order_items_table', 36),
(49, '2023_06_12_113419_create_coupons_table', 37),
(53, '2023_06_06_113949_create_orders_table', 38),
(54, '2023_06_06_114003_create_order_items_table', 38);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` double(8,2) NOT NULL,
  `final_amount` double(8,2) NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `country`, `state`, `pincode`, `total_amount`, `final_amount`, `coupon_id`, `created_at`, `updated_at`) VALUES
(1, 45, 'Olivia Montoya', 'supuv@mailinator.com', '9836739907', 'Magna corporis ut en', 'Vel irure assumenda', 'Magna qui rerum dolo', 'Sint pariatur Repel', 100.00, 100.00, 1, '2023-06-30 11:20:50', '2023-06-30 11:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `qty` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raw_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 = active, 0 = inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_type`, `name`, `phone`, `email`, `password`, `raw_password`, `address`, `message`, `image`, `country`, `state`, `pincode`, `email_verified_at`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '', 'admin@gmail.com', '$2y$10$pXlVplzIhCy3YjoqgUQ4Oep7.zV/ygMvopuCjKeMxtjvXi6al292y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2023-06-01 10:16:22', '2023-06-01 10:24:29'),
(45, 'student', 'Raktim', '9836739907', 'raktimbanerjee9@gmail.com', '$2y$10$pXlVplzIhCy3YjoqgUQ4Oep7.zV/ygMvopuCjKeMxtjvXi6al292y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2023-06-27 05:45:36', '2023-06-27 05:45:36'),
(47, 'instructor', 'John', '9903811256', 'raktimbanerjee616@gmail.com', '$2y$10$pXlVplzIhCy3YjoqgUQ4Oep7.zV/ygMvopuCjKeMxtjvXi6al292y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2023-06-27 05:45:36', '2023-06-27 05:45:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_pages`
--
ALTER TABLE `cart_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_contents`
--
ALTER TABLE `course_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `header_and_footers`
--
ALTER TABLE `header_and_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_pages`
--
ALTER TABLE `cart_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_contents`
--
ALTER TABLE `course_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_and_footers`
--
ALTER TABLE `header_and_footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
