-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table daraz_db.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.admins: ~0 rows (approximately)
DELETE FROM `admins`;
INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
	(1, 'admin@gmail.com', '12345', 'ADMIN', '0181555555', NULL, NULL);

-- Dumping structure for table daraz_db.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.brands: ~7 rows (approximately)
DELETE FROM `brands`;
INSERT INTO `brands` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Apple', 'Apple Inc. is an American multinational technology company \r\nheadquartered in Cupertino, California. Apple is the world\'s largest \r\ntechnology company by revenue', 1, '2023-08-08 09:00:11', '2023-08-08 09:00:11'),
	(2, 'Samsung', 'One of the most familiar brands in consumer electronics, Sumsung&nbsp;develops and manufactures TVs, monitors, mobile devices (including smartphones)', 1, '2023-08-08 09:00:53', '2023-08-08 09:03:07'),
	(3, 'Panasonic', '<em>Panasonic</em> has dabbled in a number of goods and services \r\nthrough the years. The electronics company initially produced various \r\nelectrical fittings as well as', 1, '2023-08-08 09:01:15', '2023-08-08 09:01:15'),
	(4, 'Toshiba', 'Toshiba Corporation, commonly known as Toshiba and stylized as \r\nTOSHIBA, is a Japanese multinational conglomerate corporation \r\nheadquartered in Minato, Tokyo, Japan', 1, '2023-08-08 09:01:57', '2023-08-08 09:02:32'),
	(5, 'Smartphone', 'A smartphone is a portable computer device that combines mobile telephone functions and computing functions into one uni', 1, '2023-08-08 09:02:21', '2023-08-08 09:02:21'),
	(6, 'Yahamaha', 'sdf sdf&nbsp;', 1, '2023-08-10 07:56:45', '2023-08-10 07:56:45'),
	(7, 'Bazaz', '&nbsp;sdf s&nbsp;', 1, '2023-08-10 07:57:03', '2023-08-10 07:57:03'),
	(8, 'Hero', 'd dfg g ad', 1, '2023-08-10 07:57:16', '2023-08-10 07:57:16');

-- Dumping structure for table daraz_db.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.categories: ~4 rows (approximately)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Electronic', 'Apple Inc. is an American multinational technology company \r\nheadquartered in Cupertino, California. Apple is the world\'s largest \r\ntechnology company by revenue, with US$394.3 billion in 2022 revenue. As\r\n of March 2023, Apple is the world\'s biggest', 'category/C0C4Axo86JjLJQDgzT3BbUQWW4BDbywfdWB240pz.jpg', 0, '2023-08-08 08:12:40', '2023-08-09 05:07:46'),
	(2, 'Parts', 'One of the most familiar brands in consumer electronics, <em>Samsung</em> develops and manufactures TVs, monitors, mobile devefg dfices (including smartphones)', 'category/EUKgO0Kgd4fLAjDHRJU2DmE4f0i81kesZi491qtw.jpg', 1, '2023-08-08 08:14:16', '2023-08-10 05:04:06'),
	(3, 'Circute', '<em>Panasonic</em> has dabbled in a number of goods and services \r\nthrough the years. The electronics company initially produced various \r\nelectrical fittings as well as', 'category/EEeLn6B4qdW00jdPuP4FLB5O0fL4IMRa4S1O27rH.jpg', 1, '2023-08-08 08:15:47', '2023-08-08 08:15:47'),
	(4, 'Toshiba', 'Toshiba Corporation, commonly known as Toshiba and stylized as \r\nTOSHIBA, is a Japanese multinational conglomerate corporation \r\nheadquartered in Minato, Tokyo, Japan.', 'category/12AZJFhAxA5Rv7DKAiB9vcQp06rfVXvBEfjKqY25.png', 1, '2023-08-08 08:26:28', '2023-08-08 08:26:28'),
	(5, 'Digital electronics', '<h3>Start a discussion about Category:Digita sdf sd l electronics</h3>', 'category/XM4UJ1XYhHQQUjrmW1hmIV7Er1jCPynmXOLVCPYx.jpg', 1, '2023-08-09 05:07:33', '2023-08-09 05:09:29'),
	(6, 'Test', 'asdf sd', 'category/uoip5fZYSJR4usk636eNbbX90KRtelLkBJDt77H3.jpg', 1, '2023-08-09 07:18:31', '2023-08-09 07:18:31'),
	(7, 'Bike', 'new&nbsp; bike', 'category/yiFh9gieUdj7kZ71omj514Z3q5Fq02jzxswaiqZN.jpg', 1, '2023-08-10 07:56:02', '2023-08-10 07:56:02');

-- Dumping structure for table daraz_db.colors
CREATE TABLE IF NOT EXISTS `colors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.colors: ~4 rows (approximately)
DELETE FROM `colors`;
INSERT INTO `colors` (`id`, `color`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Red', 1, '2023-08-08 15:27:29', '2023-08-08 15:27:31'),
	(2, 'Green', 1, NULL, NULL),
	(3, 'Blue', 1, NULL, NULL),
	(4, 'White', 1, NULL, NULL);

-- Dumping structure for table daraz_db.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.customers: ~0 rows (approximately)
DELETE FROM `customers`;
INSERT INTO `customers` (`id`, `name`, `email`, `password`, `mobile`, `created_at`, `updated_at`) VALUES
	(7, 'Sharek', 'sharek@gmail.com', '12345', '01815519409', NULL, NULL);

-- Dumping structure for table daraz_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.migrations: ~9 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(3, '2023_08_04_141955_create_categories_table', 3),
	(8, '2023_08_06_113048_create_sub_categories_table', 7),
	(10, '2019_12_14_000001_create_personal_access_tokens_table', 8),
	(11, '2023_08_04_140739_create_admins_table', 8),
	(12, '2023_08_04_143031_create_brands_table', 8),
	(13, '2023_08_04_151103_create_units_table', 8),
	(14, '2023_08_04_154228_create_sizes_table', 8),
	(15, '2023_08_04_163600_create_categories_table', 8),
	(16, '2023_08_07_130343_create_sub_categories_table', 8),
	(17, '2023_08_08_092728_create_products_table', 9),
	(18, '2023_08_08_150846_create_colors_table', 10),
	(19, '2023_08_09_053645_create_products_table', 11),
	(20, '2023_08_09_134538_create_products_table', 12),
	(21, '2023_08_15_085759_create_customers_table', 13),
	(22, '2023_08_15_184439_create_shippings_table', 14),
	(23, '2023_08_16_064239_create_shippings_table', 15),
	(24, '2023_08_16_101255_create_payments_table', 16),
	(25, '2023_08_16_174040_create_orders_table', 17),
	(26, '2023_08_16_175106_create_order_details_table', 18);

-- Dumping structure for table daraz_db.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cus_id` int NOT NULL,
  `ship_id` int NOT NULL,
  `pay_id` int NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.orders: ~0 rows (approximately)
DELETE FROM `orders`;
INSERT INTO `orders` (`id`, `cus_id`, `ship_id`, `pay_id`, `total`, `status`, `created_at`, `updated_at`) VALUES
	(27, 7, 11, 29, '150000', 'panding', NULL, NULL);

-- Dumping structure for table daraz_db.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.order_details: ~2 rows (approximately)
DELETE FROM `order_details`;
INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
	(21, 27, 25, 'Pulser', '125000', '1', NULL, NULL),
	(22, 27, 24, 'Mobile', '25000', '1', NULL, NULL);

-- Dumping structure for table daraz_db.payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.payments: ~0 rows (approximately)
DELETE FROM `payments`;
INSERT INTO `payments` (`id`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
	(29, 'bikash', 'panding', NULL, NULL);

-- Dumping structure for table daraz_db.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table daraz_db.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int NOT NULL,
  `subcat_id` int NOT NULL,
  `br_id` int NOT NULL,
  `unit_id` int NOT NULL,
  `size_id` int NOT NULL,
  `color_id` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(99,20) NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.products: ~5 rows (approximately)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `code`, `name`, `cat_id`, `subcat_id`, `br_id`, `unit_id`, `size_id`, `color_id`, `description`, `price`, `discount`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(20, 'bike 555', 'R15 indo', 7, 6, 6, 5, 1, 1, 'sdf sdf&nbsp;', 1000000.00000000000000000000, '5000', 'yt sheri sk (26)16916769510.jpg|yt sheri sk (27)16916769511.jpg', 1, '2023-08-10 08:15:51', '2023-08-10 08:15:51'),
	(21, 'car651', 'Car0181', 1, 3, 7, 5, 2, 2, 'dfa s', 15000000.00000000000000000000, '5000', 'yt sheri sk (1)16916769990.jpg|yt sheri sk (1)16916769991.png', 1, '2023-08-10 08:16:39', '2023-08-19 00:41:01'),
	(23, 'Bike102', 'Fzdd', 7, 7, 5, 1, 1, 1, 'sdf sdf', 321651.00000000000000000000, '515', 'yt sheri sk (39)16916800270.jpg', 1, '2023-08-10 09:07:07', '2023-08-10 11:05:09'),
	(25, 'Bike 666', 'Pulser', 7, 6, 7, 6, 2, 3, 'sdf asd&nbsp;', 125000.00000000000000000000, '5000', 'yt sheri sk (69)16917435750.jpg|yt sheri sk (71)16917435751.jpg', 1, '2023-08-11 02:46:15', '2023-08-11 02:46:15');

-- Dumping structure for table daraz_db.shippings
CREATE TABLE IF NOT EXISTS `shippings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.shippings: ~0 rows (approximately)
DELETE FROM `shippings`;
INSERT INTO `shippings` (`id`, `name`, `email`, `address`, `city`, `country`, `zipcode`, `mobile`, `created_at`, `updated_at`) VALUES
	(11, 'Sharek', 'sharek@gmail.com', 'Middle Burischar', 'Chittagong', 'Bangladesh', '4337', '018155319409', NULL, NULL);

-- Dumping structure for table daraz_db.sizes
CREATE TABLE IF NOT EXISTS `sizes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.sizes: ~2 rows (approximately)
DELETE FROM `sizes`;
INSERT INTO `sizes` (`id`, `size`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Small', 1, '2023-08-08 15:15:24', '2023-08-08 15:15:26'),
	(2, 'Big', 1, NULL, NULL);

-- Dumping structure for table daraz_db.sub_categories
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.sub_categories: ~6 rows (approximately)
DELETE FROM `sub_categories`;
INSERT INTO `sub_categories` (`id`, `cat_id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(2, 1, 'Mobile', 'All Kinds Of Mobile Here', 1, '2023-08-08 08:40:41', '2023-08-08 08:40:41'),
	(3, 1, 'Car', 'The Mac is Apple\'s family of personal computers. Macs are known for their ease of use and distinctive aluminium, minimalist designs.&nbsp;', 0, '2023-08-08 08:41:41', '2023-08-10 07:52:48'),
	(4, 5, 'Desktop', 'Sumsung mobile', 0, '2023-08-08 08:42:12', '2023-08-10 07:53:15'),
	(5, 2, 'Laptop', 'Latest and Update laptop here&nbsp;', 1, '2023-08-08 08:42:35', '2023-08-10 05:04:10'),
	(6, 7, 'R15', 'asdf asd&nbsp;', 1, '2023-08-10 07:56:20', '2023-08-10 07:56:20'),
	(7, 7, 'yahama Fz', 'asdf asd&nbsp;', 1, '2023-08-10 07:56:32', '2023-08-10 07:56:32');

-- Dumping structure for table daraz_db.units
CREATE TABLE IF NOT EXISTS `units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table daraz_db.units: ~6 rows (approximately)
DELETE FROM `units`;
INSERT INTO `units` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Kilowatt (kW)', 'Curent Line', 1, '2023-08-08 09:04:27', '2023-08-08 09:04:27'),
	(2, 'Watt (W)', 'Watt (W)df&nbsp;', 1, '2023-08-08 09:04:38', '2023-08-08 09:04:38'),
	(3, 'Electrical symbols.', 'Electrical symbols.', 1, '2023-08-08 09:04:51', '2023-08-08 09:04:51'),
	(4, 'Power conversion', 'Power conversion Details&nbsp;', 1, '2023-08-08 09:05:13', '2023-08-08 09:05:13'),
	(5, '150cc', 'sdf g&nbsp;', 1, '2023-08-10 07:59:24', '2023-08-10 07:59:24'),
	(6, '125 cc', 'sd sdf', 1, '2023-08-10 07:59:33', '2023-08-10 07:59:33'),
	(7, '150 cc', 'sd', 1, '2023-08-10 07:59:44', '2023-08-10 07:59:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
