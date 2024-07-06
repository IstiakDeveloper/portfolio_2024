/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `experiences` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `portfolio_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `portfolios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `portfolio_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `portfolios_category_id_foreign` (`category_id`),
  CONSTRAINT `portfolios_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `portfolio_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `portfolios_chk_1` CHECK (json_valid(`portfolio_images`))
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `satisfaction` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





INSERT INTO `experiences` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'experiences/gWrszpqhz67647pG2VC9RfSqG6UmyyuPLvhHKq0G.png', '2024-03-27 02:49:12', '2024-03-27 02:49:12');
INSERT INTO `experiences` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Laravel', 'experiences/dW4Am6qChcNOvLJ2frHjMKTZLfpJ0ZNEdZPIBiHm.png', '2024-03-27 02:50:43', '2024-03-27 02:50:43');
INSERT INTO `experiences` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Livewire', 'experiences/UyTsMS3qpmFVmFlGXTcgWZ7PnhlYm1MDa2nCKYV0.png', '2024-03-27 02:50:55', '2024-03-27 02:50:55');
INSERT INTO `experiences` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Javascript', 'experiences/MQz9vmRshjN5QA0COcCY4ov4KomFRTktL17AIgbL.png', '2024-03-27 02:51:27', '2024-03-27 02:51:27'),
(5, 'Vue', 'experiences/lEZbBXCtG3vygqdke8oKUsIt0qvKGOSf7j5fnlje.png', '2024-03-27 02:51:41', '2024-03-27 02:51:41'),
(6, 'React js', 'experiences/lFpGR3c5aAGo5EgkSBxCrfclKo4hqUSN3Rs7BNku.png', '2024-03-27 02:51:57', '2024-03-27 02:51:57'),
(7, 'Next js', 'experiences/2jjVsyaebyCh8IelJxCfoq08AaUzswny5Crqa6YD.png', '2024-03-27 02:52:15', '2024-03-27 02:52:15'),
(8, 'Git', 'experiences/FWlbFqFZR3abFOnerVNfrRk9TNu3pnUCv62vxBfC.png', '2024-03-27 02:52:32', '2024-03-27 02:52:32'),
(9, 'Tailwind', 'experiences/lP0T8HjbIZstBC7Sp7YjnTgwmx7NPHpmhgImc4A2.png', '2024-03-27 02:52:50', '2024-03-27 02:52:50'),
(10, 'Bootstrap', 'experiences/2I7I0MBnbS4l0dOBBhlH22c85EDUWelpEuRgFNys.png', '2024-03-27 02:53:07', '2024-03-27 02:53:07'),
(11, 'MySql', 'experiences/PS2a7FhaujzgoCEo58OykWgC4AK4ehun50JhcIbv.png', '2024-03-27 02:53:24', '2024-03-27 02:53:24'),
(13, 'Figma', 'experiences/5Y2e1bqrIxqXH9waVGNQeLJz5LffKRPx4qBJorjL.png', '2024-03-27 02:53:49', '2024-03-27 02:53:49'),
(14, 'Adobe Photoshop', 'experiences/ZY1gq88yHBoeqnnwetZh7oYM6dK0PyK1L7LkXKmv.png', '2024-03-27 02:54:11', '2024-03-27 02:54:11'),
(15, 'Adobe Illustrator', 'experiences/cJqfP098KBHJlymttv8wwgPtPpzLUPZNSGuFKkVh.png', '2024-03-27 02:54:32', '2024-03-27 02:54:32'),
(16, 'Adobe Premier Pro', 'experiences/veJeoXRRwepn2cZaqlhdYcS18gGGjRFoJLySzUBH.png', '2024-03-27 02:54:55', '2024-03-27 02:54:55'),
(17, 'Adobe After Effect', 'experiences/icEueHb2R6N6a4jwn8zMF3X7J3tJRBSAICHQnvi2.png', '2024-03-27 02:55:57', '2024-03-27 02:55:57');







INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2024_03_20_223707_create_portfolio_categories_table', 1),
(5, '2024_03_20_225418_create_portfolios_table', 1),
(6, '2024_03_23_194701_create_experiences_table', 1),
(7, '2024_03_23_201122_create_testimonials_table', 1);



INSERT INTO `portfolio_categories` (`id`, `name`, `icon_class`, `created_at`, `updated_at`) VALUES
(1, 'Web Development ', 'fas fa-shekel-sign', '2024-03-27 00:58:54', '2024-03-27 00:58:54');
INSERT INTO `portfolio_categories` (`id`, `name`, `icon_class`, `created_at`, `updated_at`) VALUES
(2, 'Graphics Design', 'fas fa-fill-drip', '2024-03-31 02:34:48', '2024-03-31 02:34:48');
INSERT INTO `portfolio_categories` (`id`, `name`, `icon_class`, `created_at`, `updated_at`) VALUES
(3, 'App Development', 'far fa-clone', '2024-03-31 02:36:09', '2024-03-31 02:36:09');
INSERT INTO `portfolio_categories` (`id`, `name`, `icon_class`, `created_at`, `updated_at`) VALUES
(4, 'Video Editing', 'fas fa-play-circle', '2024-03-31 02:36:58', '2024-03-31 02:36:58');

INSERT INTO `portfolios` (`id`, `category_id`, `title`, `description`, `thumbnail_image`, `portfolio_images`, `portfolio_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'Xboom Web Application', 'Introducing my latest portfolio project, a powerful Twitter marketing tool built using Laravel Livewire and JavaScript Tailwind. Designed to simplify and supercharge Twitter marketing strategies, this project showcases my expertise in web development and my ability to deliver effective solutions for clients.\n\nKey Features:\n\nLaravel Livewire Integration: Utilizing the Laravel Livewire framework, this project offers a seamless user experience with real-time updates and dynamic interactions.\n\nJavaScript Tailwind Styling: The frontend is crafted using JavaScript Tailwind, ensuring a modern and visually appealing design that is both responsive and customizable.\n\nTwitter API Integration: Connect with the Twitter API to perform various marketing tasks, including posting tweets, retweeting, engaging with followers, and analyzing campaign performance.\n\nEasy-to-Use Interface: The user interface is designed to be intuitive and user-friendly, allowing clients to manage their Twitter marketing campaigns with ease.\n\nScalable and Secure Backend: Built on Laravel, the project boasts a robust backend infrastructure that ensures scalability, security, and performance.\n\nWhy Choose This Project?\n\nSimplify Twitter Marketing: This project streamlines the process of managing Twitter marketing campaigns, saving time and resources for clients.\nShowcase Your Skills: By including this project in your portfolio, you can demonstrate your proficiency in Laravel Livewire, JavaScript Tailwind, and API integration to potential employers and clients.\nDrive Results: With its powerful features and intuitive interface, this project empowers clients to achieve their marketing goals and drive results on Twitter.\nJoin me in showcasing the power of Laravel Livewire and JavaScript Tailwind in revolutionizing Twitter marketing strategies. Whether you\'re a developer looking to expand your portfolio or a client seeking innovative solutions, this project offers a simple yet effective way to elevate your Twitter marketing efforts.', 'thumbnails/ZRZUl9Vj46yTq8zzgAgu2uIItwEl8GqSV7Sof70h.png', '[\"portfolio_images\\/SN3Cqo3kCylVmK2HzpYtVQFC0gfWFCeVQZsieQVF.png\",\"portfolio_images\\/Z6EHCuNr5gEIaWZV1WtgiayB96iCtG0b8DKA7z8G.png\",\"portfolio_images\\/Wbo8zK2PSSTxQyO7A8eIabzbMEgaNBanPAMGzecQ.png\",\"portfolio_images\\/YFM65AF3hLnC5yvUOwprPEGiukxZ5A2Vp9Lm2lQH.png\"]', 'https://xboom.xyz', '2024-03-31 02:52:26', '2024-03-31 02:52:26');
INSERT INTO `portfolios` (`id`, `category_id`, `title`, `description`, `thumbnail_image`, `portfolio_images`, `portfolio_link`, `created_at`, `updated_at`) VALUES
(3, 1, 'The Little Chef Using Wix', 'Welcome to my portfolio showcasing a variety of web solutions crafted with creativity, functionality, and user experience in mind. As a dedicated website developer, I specialize in bringing digital visions to life, utilizing cutting-edge technologies and innovative design principles. Each project presented here reflects a unique blend of client goals, industry standards, and my passion for delivering exceptional online experiences.\n\nFrom sleek corporate websites to dynamic e-commerce platforms and engaging personal blogs, my portfolio demonstrates a diverse range of skills and expertise. Whether it\'s crafting responsive designs for seamless mobile experiences, implementing robust backend systems for enhanced performance, or optimizing for search engine visibility, I prioritize quality and efficiency at every stage of development.\n\nBrowse through the projects showcased in this portfolio to explore the fusion of aesthetics and functionality. Witness how I transform ideas into interactive web solutions that not only meet but exceed expectations. Whether you\'re a small business looking to establish a strong online presence or a larger enterprise aiming to innovate in the digital space, I am committed to creating tailored solutions that elevate your brand and drive results.\n\nJoin me on this journey through the digital realm, where creativity meets technology, and possibilities are limitless. Let\'s collaborate to turn your web aspirations into reality and embark on a path towards online success.', 'thumbnails/H9zvOB7JGjglNwE09HQUOdPpp16XXJV6z7ScNSP2.png', '[\"portfolio_images\\/s6PYfNTm06zALAKe3KvbJMEBsG1Rry6JMZdWIcxP.png\",\"portfolio_images\\/bTk270GC3rMT9x3rC3o0s19sLo69p1sCSPHsZZXj.png\",\"portfolio_images\\/dd62jScLEHQA6Xw8tIHOhuUCnTy5eOXasz0RuLTA.png\"]', 'https://www.thelittlechef.ca/', '2024-03-31 03:10:30', '2024-03-31 03:10:30');


INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1eoxWU1BBPBeDc5Chs2MD6kpzZYqQVo6IGCz1u6V', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicnozc2xNc0ZyN1VtVHh6TW1RaWc4WDFPaVpjMVowSFFGVnZnUHhtRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713214896);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('27Org99xgxKcYekkpmOOgquWkctTfEOsKXfgqFOY', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVdrbGtuRlcyUVRueU9GbmN2c0FDbWZYeUp0c3ZuUFhLWEVVZEI4ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713234683);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2p73QjKcZtBJkiNzAOjxah9xlwmRUe2DNvvaQnU2', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjBmcGVzY1h3WDVOcVM2NmV2YXhFUUk1ZFVZWXl0THhLSG51cTJaOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713200498);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3lnWsGnozNoT1BHXxZuc6FlloOreSYMtXV1SGgRF', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVNjdFJ4YmFXbjBUdWxNaXp1cDdNMmdkWEV2UHpxdDJIRkFKMThhVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713223888),
('3Qffmtjj6Gqo6hRNmWNOaFp2oF7DWrRyzWv1rPxD', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNEdLd3NLQnZ4RlZaSlNSSW9FakJUTnZUZVB4MzRra2dwNjJXMDlMSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713250917),
('6fhRGA3YP9pmbB1lvHK3XXZBN9V9uGrLjXHlW434', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSGo3R056WXhhUDVTOW1IRTQwUTMyWjJBTng4MTdrbERzVGZJUmdCcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713195089),
('7gbJWyfCxFwgqDwYj8kCkFtyupESOSShZh0bL78b', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzZKbDFKMW9Tdk1Mb3NpZlRjV29Gd0tlMGxMNXA2SmlMbm9pcjZqciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713209481),
('7pdLggAl0gQ2Mp6dqlIpW9JwH74HVXluZvOGBs65', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFNsMW5weUZsVlFMYmJzWHZyTWZ2blJvMU5UUkh5Z01LQW1wRXluViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713216692),
('9AhDRS8FJeIHwMZScE62OHSRNTLep6Dx2wiu3eFW', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0IxTXNDZVduVEM4UnJmaFZncml6aWZHT2FYb1htUWVuR3dueE40TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713256308),
('a9DmNd9YbjmU6Te6cwcxs6t4DdM01bmKasa77Wh7', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFllRjZhY2FFNGUwRGhvWVVBOTdNRzYyYjAwWlMzaXlUdU5lb2VWZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713204096),
('agORjnOk7QEnYMImyRHlw3BNzwI4kBkMu2nNZgDg', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUW5wN1hzUzNXb1NTV0xhZ3J5ZWs5TkJWTXRJQ3NMcDJIbkFGM3RtNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713243703),
('b7ek2253WCIGuVcm8Tpg0ME2uqIQnRa6cTJGuZrV', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakJRM0N5WVlIeUFuNWlqcUNXQ0d2WGMybGFNak4yOWs1dnNZWWhFSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713229301),
('cZOKEFQQloqV7KXZ4z5XPCeuU8zjc5TeXwXQorIH', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDBod3VNZ0JYaDZRb1h6RFdKQlZoUHJxZUhpUllpQm1oeDlkUXZPTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713261701),
('D4uz3Nw19jDOifbyprV3i2nIAx4fJ0mPPxtTYkFW', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQnVnTXJobmlhZ3NYc1ZtMTJoeWRrQnNBRW1iQkhqUXE1elh1ZnV4WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713249102),
('d7V5ZgKSlw5VSj2xZcZLdGVFcvqacUjcJj2xNGhP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGJaZUxsVGxTWTFFOG9URjFua2J2NlUwakp6Z3AwellySTNOV2FJVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1713273911),
('DChjnfJWmE0TGbHOazLRqpOivGOabyZHgLa9wBjG', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3BQVnFNUDl1N3REOUNObE94RmNDcUNHMmZvczdUMVVzdWMwNWhzRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713247304),
('Dp8JyFKXArBpG1y1kuk2ZT1pzVAWqOg9SygbQq26', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU01iYjd2d0o2aVFpMFZDV2pEajM2M2hQN2ZhOEJvQ2lsTng5ejdKNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713196899),
('f7xZnicN0qlCgMYsB7n2byDt3kRT7RCQ1lMaeBsD', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiREQ5OGdHSXJxQW9uZ2g3NnExZmozSHBuVVNEeDJ4OERTaG5jcThVdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713213093),
('Fm8XoRkzzsvOLuqyJt9ODHa5O0eL2jBjAFD2Sizh', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidWZUc0RsaldsVTNFU0l6WnJsNzFlaDBvNEVZSTNpMDh1WVJOaGRpMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713225698),
('HivHx0MEcR5o2f0kXZgZZ7yeRQJ8zc3WBJ80aJrk', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXd4UWIycVRCWVpZMU9ZM01IY2ZsSGo5S2FQTzFvWlRQbXZZeTVmayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713202298),
('HtZ503A5F0NsQhI7WFweDEmbsSoCC6677tzPyzpz', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzBaa3RMcXhiczBEVVRYbjRYTVdWR1Zsc3JVQXFKeHRvQ3c0WHVKNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713227496),
('hUfm0OE9HN0NoXHKUJYypewnSeJD2M84B8ocXD3e', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia21zRDJTeVlGNlUzSTVpZnp6NHd6emk4MzY1R3JhZE9QMUJRdXRWdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713240101),
('hxSGBcySAJ4atES6Uteo1440JjtNHWOunSW9X4qV', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajdGQXZ6MnJ3M3ZpV0pSYU5RNUI2SWxlNU1ja3E2bWc4REh6YUp6biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713198691),
('I4mpHW3B5JbZTvB1JtC6EjD38yJMn2wYL8vdyhCj', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnlMQVVMamRtbXdUcDVMU3hjc3d1R0FDcGRhazR3REgzZHd1OXNqZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713258107),
('I5yHUCv9mRbigXYCDVqmuQuh2xGsBbvXk7mqE359', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkVoMzh1cWl2QlZUMm1Ld0xBZjg1SFZ5eVZuWVhuQ3RKNjM2M3RUayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713222081),
('IFhQLNYrOsvktpnlQ8yNH3xNIIywmp64BEubaX6K', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUdEU0dRUDE0OUp1TUZMMWhLOHdwbzJ0RkNOanZLWVhiNjBnVHRNZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713267104),
('ISHURBF0EyXsUC4Yug2prHrlCWjY3fkSyJn6GOEq', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidkg3SzhQVWNseUdrQUczeWNoeEJYb0FtZGo0bFRqVElJeEtZYmtPWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713263503),
('jcyq7TzaslOtLUwgDiTcG5gd0Noc7rl4t3mB6dRa', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTDNWb2prQ0pWc2ZTYU5nMFN0YTJDRWFMWm5GUjJnd2xqSjAwMHRNUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713220289),
('JePngQHQ8Yn0tND4qWJfHfMeoqjoKtSggTUQxfIt', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2g2SlF2dVBHUTk0c1pjQlBzNFFQSTBtSkFZcmJXUm1xVzRRN3RpVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713205897),
('kWho0WxEJ0aIlJhaoy6EhH8gh022nmF6iv8oBZBv', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXZrdFZua1kyM0xDZGtmSFBqazRLdG9pdlBOUm9xVWprOEtIM0xHTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713270694),
('l1GqtlcUXRZMwqFDeNWjllzfgLwOI311ACnIOdz0', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVEyd0Y1MXVnTUVtOWkzSlZ1eEp5M09MTDR2dGNnVjdxRlkwYjlrMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713236498),
('L1XvadVz9DCfWbvtYPgUgYOTH3u1qshd615iymiD', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieTV6bnpINkpRcWpBb3k5eTRONVZEc3lXT2poRVJSUDV1ZHQ3M0tsbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713254491),
('lEURE0NSLhucRF3jE8fAfWVtnRa3x65tuTR2u4tj', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVdrenBrckY3YWhtVDRqaEpGRmRjR2FLd0trWGNuZ3NlcVdJSG43TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713268901),
('LhDJ8nI61Om9v7bhAO8i5Uyn9Xyfld5jWnbCaD6e', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTRxUUhtSThuMjhCOFZPTkNhN3kyWW9MYjZXbTgzTTFzeFZMdGp6aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713259902),
('NRRpoe5WoI8cPN1mztwwlDRYoSM8ZvXBlfkF6iL5', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXhkVUxvR2NzekZ4aVJkTjFHZXN3eUEwTzRzbnh4bGhrc3dqU2V0YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713265297),
('oEsJnmabcSNY7FNoiDNV4DbDcdF4CD2lNKwWLnQH', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmFTaTNKY2N0Yml2SUN5VW5BQWVibzExSmVHVnBRb3RTcmRzNU1DdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713231101),
('OqKqKwzbrGbTglMBwsD5Owe5inbFfHaBvuWhv2i7', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkZ2UjJpTXFqZjNDb2NFNVM0d1BySDJnbHN2Wll2Q2czMUJEQ3k0VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713238303),
('Qen9NAidzqsDsTwQYwGCy7wUwsY8iNdEH4sMo8n0', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjVUU0lCM0EwY2JlU0d3cW94eXNRVEJRaGwzZEhYSWJqYUFYVEpKeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713193298),
('QXzXLesELDJZQcGc2KKGo7xGFZnKpjNtoqdiWRMC', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlZDOTlwSks1dFJWQkNjVmYxOEdLd01nc2JJUTRkREt6TEc3a1pzSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713191500),
('ughZfjtN3QyUxINdpmxPufdqQr0wwdWzW24lWtPJ', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTjJlaHpKeGVYeTNjdHo1Qmd6RENPY0NBSElHbGhOaHYxTWJCVndORiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713245499),
('UziEi4G1TFi8qiaXWWTG6yflh2qLZs8WwOWvqHJ5', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVTBkb0U0V00xRXJmN2RQZmtxcXk3TFlsNlNuNEJZSWhwVGFaWDc4MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713232890),
('wfYChfNqIOr5QqHxLso3TpRaH0eYgLFoPoZ1cCLj', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTnk5ZmtMTjVxQ2IwUllUTzhEQUU5dVh5Y0hwYmxHeWo0NVFFU0p2aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713241911),
('wRoGaBIuaCvICHN38ZQKN26mXLhWlNDpiPLCPMHl', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHVDRjB6VWlQb2pZbzZEd3FISXdkdVhzcTgxOW9CYk5RZFdmWGNMcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713252704),
('x8KBPoFCAi3wuvtr0qNXdgEkwiJTdROSmtSwN1rY', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkJITWFOVXRCVHdPOEpZYWU2MVpHam9zb3NzR1RlTDR5NXpJbDBHVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713218489),
('XGXbm3pjTaZAA1hm5bMrfsqkC70kQKDQpfQL3Wv5', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTlUTlJtb293bExCN0czYVNreGdmZnBVTlN0MnpjRm9xaGhzSmF2biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713272493),
('yzgMvzG0E949eLHYCNqa6PiMwk0zHWpkNRVYGcQy', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzZpWXJVeUhQZ2wyQjQxQ1JCc2czaXhuQjVTaVNMRHhSS3J6YmNKOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713207684),
('zaWgAJ18gRdjVekULYYdNswOyj83Ja5b7LFHdvQf', NULL, '195.201.167.244', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUdoU3h6R25naXhpdkpIR1p3VmZsZzNBbkdrcG9EYm9scG1HYTYxZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9pc3RpYWsueHl6Lm5hamlhdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713211290);

INSERT INTO `testimonials` (`id`, `client_name`, `client_image`, `date`, `description`, `satisfaction`, `created_at`, `updated_at`) VALUES
(1, 'davecurran', 'testimonials/cVBmAWVa6YD8bUfqYaMxMNaxk0N9znmEk2M1N1LK.jpg', '2024-02-08', 'Very good job and delivered on time.\n\n', 5, '2024-03-31 03:14:29', '2024-03-31 03:14:29');
INSERT INTO `testimonials` (`id`, `client_name`, `client_image`, `date`, `description`, `satisfaction`, `created_at`, `updated_at`) VALUES
(2, 'Devinda', 'testimonials/jr5ZLuzSXH63DcnHOwoQvFFB6AonocfrRBL4AQpf.jpg', '2024-01-17', 'I highly recommend him, My website now looks exactly like the way I wanted it to be.He helped me with everything I needed.Thank you for your hard work!', 5, '2024-03-31 03:16:48', '2024-03-31 03:16:48');
INSERT INTO `testimonials` (`id`, `client_name`, `client_image`, `date`, `description`, `satisfaction`, `created_at`, `updated_at`) VALUES
(3, ' christopheli', 'testimonials/fmKiL17HfqZBiAxHx6wAkF5Fc8VK1veR2r3lQHoQ.jpg', '2022-11-30', 'I highly recommend, despite the difficulties, he did not give up and met all my expectations. Really one of the best developers I\'ve ever worked with on Wordpress. Unbeatable quality/price ratio on Fiver.', 5, '2024-03-31 03:18:15', '2024-03-31 03:18:15');
INSERT INTO `testimonials` (`id`, `client_name`, `client_image`, `date`, `description`, `satisfaction`, `created_at`, `updated_at`) VALUES
(4, 'susan', 'testimonials/QhTVeyWZzelqloc1bRPApV0ZUKdk5gLfZuWQoz1C.jpg', '2023-12-27', 'Great experience, very fast and easy to work with!! Highly recommended!!!!\n\n', 5, '2024-03-31 03:20:01', '2024-03-31 03:20:01'),
(5, 'stephanelyke', 'testimonials/vBUv3HqeBj0rwe9fjlaLb2QR2GZpPxML32fyQcRc.jpg', '2023-09-13', 'Efficient in his work and dedicated to perform correctly and/or fix issues\n\n', 5, '2024-03-31 03:20:37', '2024-03-31 03:20:37'),
(6, 'cat ockman', 'testimonials/EUO3S7lANaz0cCHXDhTRLFg07htrubcnd8OnHPxg.jpg', '2021-11-03', 'Extremely fast and great work\n\n', 5, '2024-03-31 03:21:19', '2024-03-31 03:21:19');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2024-03-27 00:55:20', '$2y$12$J5wi1ZVCeIUECXMXy9qHnuv7PrXDGK2.Be6DxZOlYLMYocYnEMNGi', 'uBmWdEqgXp', '2024-03-27 00:55:20', '2024-03-27 00:55:20');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Istiak Hossain', 'istiakjoypurhat@gmail.com', NULL, '$2y$12$kQImfTliOzpumY202hJPROYASSZqt26DFjHTodScoVR7.0f/4siSK', 'Gca7LTRymp30Obm6xcCIEUJbkCOPfddU0n7yK489IW2bsfGNsCYzGusP4A2y', '2024-03-27 00:56:21', '2024-03-27 00:56:21');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;