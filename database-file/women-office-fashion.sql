-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2024 at 04:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `women-office-fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `collection_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `path`, `collection_id`, `created_at`, `updated_at`) VALUES
(1, 'images/collection/banner.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(2, 'images/collection/thieu-hoa-01.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(3, 'images/collection/thieu-hoa-02.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(4, 'images/collection/thieu-hoa-03.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(5, 'images/collection/thieu-hoa-04.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(6, 'images/collection/thieu-hoa-05.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(7, 'images/collection/thieu-hoa-06.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(8, 'images/collection/thieu-hoa-07.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(9, 'images/collection/thieu-hoa-08.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(10, 'images/collection/thieu-hoa-09.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(11, 'images/collection/thieu-hoa-10.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(12, 'images/collection/thieu-hoa-11.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(13, 'images/collection/thieu-hoa-12.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(14, 'images/collection/thieu-hoa-13.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(15, 'images/collection/thieu-hoa-14.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00'),
(16, 'images/collection/thieu-hoa-15.jpg', 1, '2024-03-11 10:58:00', '2024-03-11 10:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shopping_cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `shopping_cart_id`, `product_id`, `quantity`, `color`, `size`, `thumbnail`, `created_at`, `updated_at`) VALUES
(9, 1, 'OWE01085', 2, 'Pink', 'S', 'images/product/fashion/blazer-lung-bau-tron-01.jpg', '2024-03-20 07:46:47', '2024-03-20 07:46:47'),
(17, 1, 'QE01042', 1, 'Pink', 'S', 'images/product/fashion/quan-tay-ong-suong-01.jpg', '2024-03-27 20:24:16', '2024-03-27 20:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Hàng mới', 200, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(2, 'Váy đầm', 100, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(3, 'Thời trang', 100, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(4, 'Áo sơ mi', 100, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(5, 'Áo thun', 150, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(6, 'Quần dài', 100, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(7, 'Chân váy', 150, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(8, 'Áo dài', 100, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(9, 'Áo khoác', 150, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(10, 'Áo len', 100, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(11, 'Giày dép', 150, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(12, 'Quần jeans', 100, '2024-03-11 10:57:12', '2024-03-11 10:57:12'),
(13, 'Áo Blazer & vest', 150, '2024-03-11 10:57:12', '2024-03-11 10:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Áo dài thiều hoa', '2024-03-11 10:57:37', '2024-03-11 10:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `product_id`, `created_at`, `updated_at`) VALUES
(235, 'images/product/dresses/dam-A-khong-tay-01.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(236, 'images/product/dresses/dam-A-khong-tay-02.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(237, 'images/product/dresses/dam-A-khong-tay-03.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(238, 'images/product/dresses/dam-A-khong-tay-04.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(239, 'images/product/dresses/dam-A-khong-tay-05.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(240, 'images/product/dresses/dam-A-khong-tay-06.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(241, 'images/product/dresses/dam-A-khong-tay-07.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(242, 'images/product/dresses/dam-A-khong-tay-08.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(243, 'images/product/dresses/dam-A-khong-tay-09.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(244, 'images/product/dresses/dam-A-khong-tay-10.jpg', 'DE01014', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(245, 'images/product/dresses/dam-duoi-ca-tay-lo-01.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(246, 'images/product/dresses/dam-duoi-ca-tay-lo-02.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(247, 'images/product/dresses/dam-duoi-ca-tay-lo-03.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(248, 'images/product/dresses/dam-duoi-ca-tay-lo-04.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(249, 'images/product/dresses/dam-duoi-ca-tay-lo-05.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(250, 'images/product/dresses/dam-duoi-ca-tay-lo-06.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(251, 'images/product/dresses/dam-duoi-ca-tay-lo-07.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(252, 'images/product/dresses/dam-duoi-ca-tay-lo-08.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(253, 'images/product/dresses/dam-duoi-ca-tay-lo-09.jpg', 'DE01016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(254, 'images/product/dresses/dam-suong-bau-danton-01.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(255, 'images/product/dresses/dam-suong-bau-danton-02.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(256, 'images/product/dresses/dam-suong-bau-danton-03.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(257, 'images/product/dresses/dam-suong-bau-danton-04.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(258, 'images/product/dresses/dam-suong-bau-danton-05.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(259, 'images/product/dresses/dam-suong-bau-danton-06.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(260, 'images/product/dresses/dam-suong-bau-danton-07.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(261, 'images/product/dresses/dam-suong-bau-danton-08.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(262, 'images/product/dresses/dam-suong-bau-danton-09.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(263, 'images/product/dresses/dam-suong-bau-danton-10.jpg', 'DE01062', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(264, 'images/product/dresses/dam-A-xoe-xep-ly-01.jpg', 'DE01035', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(265, 'images/product/dresses/dam-A-xoe-xep-ly-02.jpg', 'DE01035', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(266, 'images/product/dresses/dam-A-xoe-xep-ly-03.jpg', 'DE01035', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(267, 'images/product/dresses/dam-A-xoe-xep-ly-04.jpg', 'DE01035', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(268, 'images/product/dresses/dam-A-xoe-xep-ly-05.jpg', 'DE01035', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(269, 'images/product/dresses/dam-A-xoe-xep-ly-06.jpg', 'DE01035', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(270, 'images/product/dresses/dam-A-xoe-xep-ly-07.jpg', 'DE01035', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(271, 'images/product/dresses/dam-A-xoe-xep-ly-08.jpg', 'DE01035', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(272, 'images/product/dresses/dam-but-chi-phoi-ren-01.jpg', 'DE01075', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(273, 'images/product/dresses/dam-but-chi-phoi-ren-02.jpg', 'DE01075', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(274, 'images/product/dresses/dam-but-chi-phoi-ren-03.jpg', 'DE01075', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(275, 'images/product/dresses/dam-but-chi-phoi-ren-04.jpg', 'DE01075', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(276, 'images/product/dresses/dam-but-chi-phoi-ren-05.jpg', 'DE01075', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(277, 'images/product/dresses/dam-but-chi-phoi-ren-06.jpg', 'DE01075', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(278, 'images/product/dresses/dam-but-chi-phoi-ren-07.jpg', 'DE01075', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(279, 'images/product/dresses/dam-but-chi-phoi-ren-08.jpg', 'DE01075', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(280, 'images/product/dresses/dam-phoi-beo-ra-tang-01.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(281, 'images/product/dresses/dam-phoi-beo-ra-tang-02.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(282, 'images/product/dresses/dam-phoi-beo-ra-tang-03.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(283, 'images/product/dresses/dam-phoi-beo-ra-tang-04.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(284, 'images/product/dresses/dam-phoi-beo-ra-tang-05.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(285, 'images/product/dresses/dam-phoi-beo-ra-tang-06.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(286, 'images/product/dresses/dam-phoi-beo-ra-tang-07.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(287, 'images/product/dresses/dam-phoi-beo-ra-tang-08.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(288, 'images/product/dresses/dam-phoi-beo-ra-tang-09.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(289, 'images/product/dresses/dam-phoi-beo-ra-tang-10.jpg', 'DE01015', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(290, 'images/product/dresses/dam-A-co-yem-01.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(291, 'images/product/dresses/dam-A-co-yem-02.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(292, 'images/product/dresses/dam-A-co-yem-03.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(293, 'images/product/dresses/dam-A-co-yem-04.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(294, 'images/product/dresses/dam-A-co-yem-05.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(295, 'images/product/dresses/dam-A-co-yem-06.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(296, 'images/product/dresses/dam-A-co-yem-07.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(297, 'images/product/dresses/dam-A-co-yem-08.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(298, 'images/product/dresses/dam-A-co-yem-09.jpg', 'DE01037', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(299, 'images/product/dresses/dam-so-mi-nap-tui-01.jpg', 'DD12043', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(300, 'images/product/dresses/dam-so-mi-nap-tui-02.jpg', 'DD12043', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(301, 'images/product/dresses/dam-so-mi-nap-tui-03.jpg', 'DD12043', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(302, 'images/product/dresses/dam-so-mi-nap-tui-04.jpg', 'DD12043', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(303, 'images/product/dresses/dam-so-mi-nap-tui-05.jpg', 'DD12043', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(304, 'images/product/dresses/dam-so-mi-nap-tui-06.jpg', 'DD12043', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(305, 'images/product/dresses/dam-xoe-tay-bi-01.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(306, 'images/product/dresses/dam-xoe-tay-bi-02.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(307, 'images/product/dresses/dam-xoe-tay-bi-03.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(308, 'images/product/dresses/dam-xoe-tay-bi-04.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(309, 'images/product/dresses/dam-xoe-tay-bi-05.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(310, 'images/product/dresses/dam-xoe-tay-bi-06.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(311, 'images/product/dresses/dam-xoe-tay-bi-07.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(312, 'images/product/dresses/dam-xoe-tay-bi-08.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(313, 'images/product/dresses/dam-xoe-tay-bi-09.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(314, 'images/product/dresses/dam-xoe-tay-bi-10.jpg', 'DD12093', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(315, 'images/product/dresses/dam-to-dinh-nut-01.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(316, 'images/product/dresses/dam-to-dinh-nut-02.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(317, 'images/product/dresses/dam-to-dinh-nut-03.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(318, 'images/product/dresses/dam-to-dinh-nut-04.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(319, 'images/product/dresses/dam-to-dinh-nut-05.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(320, 'images/product/dresses/dam-to-dinh-nut-06.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(321, 'images/product/dresses/dam-to-dinh-nut-07.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(322, 'images/product/dresses/dam-to-dinh-nut-08.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(323, 'images/product/dresses/dam-to-dinh-nut-09.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(324, 'images/product/dresses/dam-to-dinh-nut-10.jpg', 'DD12039', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(325, 'images/product/dresses/dam-to-ra-tang-01.jpg', 'DD12042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(326, 'images/product/dresses/dam-to-ra-tang-02.jpg', 'DD12042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(327, 'images/product/dresses/dam-to-ra-tang-03.jpg', 'DD12042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(328, 'images/product/dresses/dam-to-ra-tang-04.jpg', 'DD12042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(329, 'images/product/dresses/dam-to-ra-tang-05.jpg', 'DD12042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(330, 'images/product/dresses/dam-to-ra-tang-06.jpg', 'DD12042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(331, 'images/product/dresses/dam-to-ra-tang-07.jpg', 'DD12042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(332, 'images/product/dresses/dam-linen-co-danton-01.jpg', 'LDD1207', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(333, 'images/product/dresses/dam-linen-co-danton-02.jpg', 'LDD1207', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(334, 'images/product/dresses/dam-linen-co-danton-03.jpg', 'LDD1207', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(335, 'images/product/dresses/dam-linen-co-danton-04.jpg', 'LDD1207', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(336, 'images/product/dresses/dam-linen-co-danton-05.jpg', 'LDD1207', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(337, 'images/product/dresses/dam-maxi-tre-vai-01.jpg', 'DD05090', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(338, 'images/product/dresses/dam-maxi-tre-vai-02.jpg', 'DD05090', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(339, 'images/product/dresses/dam-maxi-tre-vai-03.jpg', 'DD05090', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(340, 'images/product/dresses/dam-maxi-tre-vai-04.jpg', 'DD05090', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(341, 'images/product/dresses/dam-maxi-tre-vai-05.jpg', 'DD05090', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(342, 'images/product/dresses/dam-maxi-tre-vai-06.jpg', 'DD05090', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(343, 'images/product/dresses/dam-kieu-lech-vai-01.jpg', 'DD10053', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(344, 'images/product/dresses/dam-kieu-lech-vai-02.jpg', 'DD10053', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(345, 'images/product/dresses/dam-kieu-lech-vai-03.jpg', 'DD10053', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(346, 'images/product/dresses/dam-kieu-lech-vai-04.jpg', 'DD10053', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(347, 'images/product/dresses/dam-kieu-lech-vai-05.jpg', 'DD10053', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(348, 'images/product/dresses/dam-kieu-lech-vai-06.jpg', 'DD10053', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(349, 'images/product/dresses/dam-kieu-lech-vai-07.jpg', 'DD10053', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(350, 'images/product/dresses/dam-kieu-lech-vai-08.jpg', 'DD10053', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(351, 'images/product/dresses/dam-a-bau-canh-sen-01.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(352, 'images/product/dresses/dam-a-bau-canh-sen-02.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(353, 'images/product/dresses/dam-a-bau-canh-sen-03.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(354, 'images/product/dresses/dam-a-bau-canh-sen-04.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(355, 'images/product/dresses/dam-a-bau-canh-sen-05.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(356, 'images/product/dresses/dam-a-bau-canh-sen-06.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(357, 'images/product/dresses/dam-a-bau-canh-sen-07.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(358, 'images/product/dresses/dam-a-bau-canh-sen-08.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(359, 'images/product/dresses/dam-a-bau-canh-sen-09.jpg', 'DD09016', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(360, 'images/product/fashion/quan-tay-ong-suong-01.jpg', 'QE01042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(361, 'images/product/fashion/quan-tay-ong-suong-02.jpg', 'QE01042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(362, 'images/product/fashion/quan-tay-ong-suong-03.jpg', 'QE01042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(363, 'images/product/fashion/quan-tay-ong-suong-04.jpg', 'QE01042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(364, 'images/product/fashion/quan-tay-ong-suong-05.jpg', 'QE01042', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(365, 'images/product/fashion/Chan-vay-xoe-dinh-nut-01.jpg', 'VE01081', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(366, 'images/product/fashion/Chan-vay-xoe-dinh-nut-02.jpg', 'VE01081', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(367, 'images/product/fashion/Chan-vay-xoe-dinh-nut-03.jpg', 'VE01081', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(368, 'images/product/fashion/Chan-vay-xoe-dinh-nut-04.jpg', 'VE01081', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(369, 'images/product/fashion/Chan-vay-xoe-dinh-nut-05.jpg', 'VE01081', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(370, 'images/product/fashion/Chan-vay-xoe-dinh-nut-06.jpg', 'VE01081', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(371, 'images/product/fashion/Chan-vay-xoe-dinh-nut-07.jpg', 'VE01081', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(372, 'images/product/fashion/Chan-vay-xoe-dinh-nut-08.jpg', 'VE01081', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(373, 'images/product/fashion/ao-so-mi-tay-dap-ly-01.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(374, 'images/product/fashion/ao-so-mi-tay-dap-ly-02.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(375, 'images/product/fashion/ao-so-mi-tay-dap-ly-03.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(376, 'images/product/fashion/ao-so-mi-tay-dap-ly-04.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(377, 'images/product/fashion/ao-so-mi-tay-dap-ly-05.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(378, 'images/product/fashion/ao-so-mi-tay-dap-ly-06.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(379, 'images/product/fashion/ao-so-mi-tay-dap-ly-07.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(380, 'images/product/fashion/ao-so-mi-tay-dap-ly-08.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(381, 'images/product/fashion/ao-so-mi-tay-dap-ly-09.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(382, 'images/product/fashion/ao-so-mi-tay-dap-ly-10.jpg', 'AE01010', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(383, 'images/product/fashion/quan-tay-soc-ong-suong-01.jpg', 'QE01023', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(384, 'images/product/fashion/quan-tay-soc-ong-suong-02.jpg', 'QE01023', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(385, 'images/product/fashion/quan-tay-soc-ong-suong-03.jpg', 'QE01023', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(386, 'images/product/fashion/quan-tay-soc-ong-suong-04.jpg', 'QE01023', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(387, 'images/product/fashion/quan-tay-soc-ong-suong-05.jpg', 'QE01023', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(388, 'images/product/fashion/quan-tay-soc-ong-suong-06.jpg', 'QE01023', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(389, 'images/product/fashion/quan-tay-soc-ong-suong-07.jpg', 'QE01023', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(390, 'images/product/fashion/ao-2-day-thun-B1-01.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(391, 'images/product/fashion/ao-2-day-thun-B1-02.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(392, 'images/product/fashion/ao-2-day-thun-B1-03.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(393, 'images/product/fashion/ao-2-day-thun-B1-04.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(394, 'images/product/fashion/ao-2-day-thun-B1-05.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(395, 'images/product/fashion/ao-2-day-thun-B1-06.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(396, 'images/product/fashion/ao-2-day-thun-B1-07.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(397, 'images/product/fashion/ao-2-day-thun-B1-08.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(398, 'images/product/fashion/ao-2-day-thun-B1-09.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(399, 'images/product/fashion/ao-2-day-thun-B1-10.jpg', 'BATE00009', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(400, 'images/product/fashion/ao-so-mi-co-ban-01.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(401, 'images/product/fashion/ao-so-mi-co-ban-02.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(402, 'images/product/fashion/ao-so-mi-co-ban-03.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(403, 'images/product/fashion/ao-so-mi-co-ban-04.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(404, 'images/product/fashion/ao-so-mi-co-ban-05.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(405, 'images/product/fashion/ao-so-mi-co-ban-06.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(406, 'images/product/fashion/ao-so-mi-co-ban-07.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(407, 'images/product/fashion/ao-so-mi-co-ban-08.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(408, 'images/product/fashion/ao-so-mi-co-ban-09.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(409, 'images/product/fashion/ao-so-mi-co-ban-10.jpg', 'AE01013', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(410, 'images/product/fashion/quan-gia-vay-lung-lien-01.jpg', 'SHE01040', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(411, 'images/product/fashion/quan-gia-vay-lung-lien-02.jpg', 'SHE01040', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(412, 'images/product/fashion/quan-gia-vay-lung-lien-03.jpg', 'SHE01040', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(413, 'images/product/fashion/quan-gia-vay-lung-lien-04.jpg', 'SHE01040', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(414, 'images/product/fashion/quan-gia-vay-lung-lien-05.jpg', 'SHE01040', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(415, 'images/product/fashion/blazer-lung-bau-tron-01.jpg', 'OWE01085', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(416, 'images/product/fashion/blazer-lung-bau-tron-02.jpg', 'OWE01085', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(417, 'images/product/fashion/blazer-lung-bau-tron-03.jpg', 'OWE01085', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(418, 'images/product/fashion/blazer-lung-bau-tron-04.jpg', 'OWE01085', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(419, 'images/product/fashion/blazer-lung-bau-tron-05.jpg', 'OWE01085', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(420, 'images/product/fashion/chan-vay-tui-dap-01.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(421, 'images/product/fashion/chan-vay-tui-dap-02.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(422, 'images/product/fashion/chan-vay-tui-dap-03.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(423, 'images/product/fashion/chan-vay-tui-dap-04.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(424, 'images/product/fashion/chan-vay-tui-dap-05.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(425, 'images/product/fashion/chan-vay-tui-dap-06.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(426, 'images/product/fashion/chan-vay-tui-dap-07.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(427, 'images/product/fashion/chan-vay-tui-dap-08.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(428, 'images/product/fashion/chan-vay-tui-dap-09.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(429, 'images/product/fashion/chan-vay-tui-dap-10.jpg', 'VE01020', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(430, 'images/product/fashion/quan-tay-ong-loe-01.jpg', 'QE01084', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(431, 'images/product/fashion/quan-tay-ong-loe-02.jpg', 'QE01084', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(432, 'images/product/fashion/quan-tay-ong-loe-03.jpg', 'QE01084', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(433, 'images/product/fashion/quan-tay-ong-loe-04.jpg', 'QE01084', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(434, 'images/product/fashion/quan-tay-ong-loe-05.jpg', 'QE01084', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(435, 'images/product/fashion/quan-tay-ong-loe-06.jpg', 'QE01084', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(436, 'images/product/fashion/quan-tay-ong-loe-07.jpg', 'QE01084', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(437, 'images/product/fashion/quan-tay-ong-loe-08.jpg', 'QE01084', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(438, 'images/product/fashion/quan-ong-dung-tui-xeo-01.jpg', 'QE01044', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(439, 'images/product/fashion/quan-ong-dung-tui-xeo-02.jpg', 'QE01044', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(440, 'images/product/fashion/quan-ong-dung-tui-xeo-03.jpg', 'QE01044', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(441, 'images/product/fashion/quan-ong-dung-tui-xeo-04.jpg', 'QE01044', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(442, 'images/product/fashion/quan-ong-dung-tui-xeo-05.jpg', 'QE01044', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(443, 'images/product/fashion/chan-vay-duoi-ca-01.jpg', 'VE01069', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(444, 'images/product/fashion/chan-vay-duoi-ca-02.jpg', 'VE01069', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(445, 'images/product/fashion/chan-vay-duoi-ca-03.jpg', 'VE01069', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(446, 'images/product/fashion/chan-vay-duoi-ca-04.jpg', 'VE01069', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(447, 'images/product/fashion/chan-vay-duoi-ca-05.jpg', 'VE01069', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(448, 'images/product/fashion/chan-vay-duoi-ca-06.jpg', 'VE01069', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(449, 'images/product/fashion/chan-vay-chu-a-lung-kieu-01.jpg', 'VD12086', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(450, 'images/product/fashion/chan-vay-chu-a-lung-kieu-02.jpg', 'VD12086', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(451, 'images/product/fashion/chan-vay-chu-a-lung-kieu-03.jpg', 'VD12086', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(452, 'images/product/fashion/chan-vay-chu-a-lung-kieu-04.jpg', 'VD12086', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(453, 'images/product/fashion/chan-vay-chu-a-lung-kieu-05.jpg', 'VD12086', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(454, 'images/product/fashion/chan-vay-xoe-01.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(455, 'images/product/fashion/chan-vay-xoe-02.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(456, 'images/product/fashion/chan-vay-xoe-03.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(457, 'images/product/fashion/chan-vay-xoe-04.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(458, 'images/product/fashion/chan-vay-xoe-05.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(459, 'images/product/fashion/chan-vay-xoe-06.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(460, 'images/product/fashion/chan-vay-xoe-07.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(461, 'images/product/fashion/chan-vay-xoe-08.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(462, 'images/product/fashion/chan-vay-xoe-09.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(463, 'images/product/fashion/chan-vay-xoe-01.jpg', 'VD12034', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(464, 'images/product/fashion/ao-thun-kieu-co-tim-01.jpg', 'ATD12050', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(465, 'images/product/fashion/ao-thun-kieu-co-tim-02.jpg', 'ATD12050', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(466, 'images/product/fashion/ao-thun-kieu-co-tim-03.jpg', 'ATD12050', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(467, 'images/product/fashion/ao-thun-kieu-co-tim-04.jpg', 'ATD12050', '2024-03-11 10:59:12', '2024-03-11 10:59:12'),
(468, 'images/product/fashion/ao-thun-kieu-co-tim-05.jpg', 'ATD12050', '2024-03-11 10:59:12', '2024-03-11 10:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_01_10_141347_create_roles_table', 1),
(2, '2024_01_09_182259_create_users_table', 2),
(3, '2024_01_10_152927_create_user_roles_table', 3),
(4, '2024_01_09_183646_create_collections_table', 4),
(5, '2024_01_09_183538_create_albums_table', 5),
(6, '2024_01_09_193205_create_categories_table', 6),
(7, '2024_01_09_193441_create_products_table', 7),
(8, '2024_01_09_234837_create_images_table', 8),
(9, '2024_01_10_111812_create_shopping_carts_table', 9),
(10, '2024_01_10_113553_create_cart_items_table', 10),
(11, '2024_01_09_235842_create_orders_table', 11),
(12, '2024_01_10_110630_create_order_details_table', 12),
(13, '2024_01_10_121359_create_payments_table', 13),
(14, '2024_01_10_131621_create_sale_offs_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `method_pay` varchar(255) NOT NULL,
  `total` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_address`, `method_pay`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
('BRNL4QRC1', 'abc', 'cod', 2016.00, 1, '2024-03-20 07:49:27', '2024-03-20 07:49:27'),
('DMUSVXK0A', 'xxx', 'cod', 990.00, 1, '2024-03-27 09:59:20', '2024-03-27 09:59:20'),
('EOYNBIEZ1', 'abc', 'cod', 1467.00, 1, '2024-03-20 21:26:15', '2024-03-20 21:26:15'),
('MIJZSPAFJ', 'abc', 'cod', 1797.00, 1, '2024-03-27 09:49:16', '2024-03-27 09:49:16'),
('TJTZKUG3J', 'abc', 'cod', 1797.00, 1, '2024-03-27 09:58:33', '2024-03-27 09:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `old_price` double(8,2) DEFAULT NULL,
  `new_price` double(8,2) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `old_price`, `new_price`, `thumbnail`, `quantity`, `categorie_id`, `created_at`, `updated_at`) VALUES
('AE01010', 'Áo sơ mi tay dập ly', 475.00, 427.00, 'images/product/fashion/ao-so-mi-tay-dap-ly-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('AE01013', 'Áo sơ mi cơ bản', 365.00, 328.50, 'images/product/fashion/ao-so-mi-co-ban-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('ATD12050', 'Áo thun kiểu cổ tim', 129.00, 250.00, 'images/product/fashion/ao-thun-kieu-co-tim-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('BATE00009', 'Áo 2 dây thun B1', 165.00, 165.00, 'images/product/fashion/ao-2-day-thun-B1-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DD05090', 'Đầm maxi trễ vai', 299.00, 820.00, 'images/product/dresses/dam-maxi-tre-vai-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DD09016', 'Đầm A bâu cánh sen', 275.00, 550.00, 'images/product/dresses/dam-a-bau-canh-sen-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DD10053', 'Đầm kiểu lệch vai', 476.00, 595.00, 'images/product/dresses/dam-kieu-lech-vai-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DD12039', 'Đầm tơ đính nút', 585.00, 468.00, 'images/product/dresses/dam-to-dinh-nut-01.jpg', 10, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DD12042', 'Đầm tơ rã tầng', 550.00, 440.00, 'images/product/dresses/dam-to-ra-tang-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DD12043', 'Đầm sơ mi nắp túi', 630.00, 504.00, 'images/product/dresses/dam-so-mi-nap-tui-01.jpg', 40, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DD12093', 'Đầm xòe tay bí', 585.00, 468.00, 'images/product/dresses/dam-xoe-tay-bi-01.jpg', 10, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DE01014', 'Đầm A không tay', 595.00, 535.50, 'images/product/dresses/dam-A-khong-tay-01.jpg', 50, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DE01015', 'Đầm phối bèo rã tầng', 585.00, 526.50, 'images/product/dresses/dam-phoi-beo-ra-tang-01.jpg', 20, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DE01016', 'Đầm đuôi cá tay lỡ', 650.00, 585.00, 'images/product/dresses/dam-duoi-ca-tay-lo-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DE01035', 'Đầm A xòe xếp ly', 550.00, 495.00, 'images/product/dresses/dam-A-xoe-xep-ly-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DE01037', 'Đầm A cổ yếm', 565.00, 508.50, 'images/product/dresses/dam-A-co-yem-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DE01062', 'Đầm suông bâu danton', 565.00, 508.50, 'images/product/dresses/dam-suong-bau-danton-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('DE01075', 'Đầm bút chì phối ren', 575.00, 517.50, 'images/product/dresses/dam-but-chi-phoi-ren-01.jpg', 10, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('LDD1207', 'Đầm linen cổ danton', 495.00, 279.00, 'images/product/dresses/dam-linen-co-danton-01.jpg', 30, 2, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('OWE01085', 'Blazer lửng bâu tròn', 545.00, 495.00, 'images/product/fashion/blazer-lung-bau-tron-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('QE01023', 'Quần tây sọc ống suông', 530.00, 477.00, 'images/product/fashion/quan-tay-soc-ong-suong-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('QE01042', 'Quần tây ống suông', 430.00, 387.00, 'images/product/fashion/quan-tay-ong-suong-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('QE01044', 'Quần ống đứng túi xéo', 450.00, 405.00, 'images/product/fashion/quan-ong-dung-tui-xeo-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('QE01084', 'Quần tây ống loe', 530.00, 477.00, 'images/product/fashion/quan-tay-ong-loe-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('SHE01040', 'Quần giả váy lưng liền', 400.00, 375.00, 'images/product/fashion/quan-gia-vay-lung-lien-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('VD12034', 'Chân váy A xòe', 477.00, 530.00, 'images/product/fashion/chan-vay-xoe-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('VD12086', 'Chân váy A lưng kiểu', 297.00, 330.00, 'images/product/fashion/chan-vay-chu-a-lung-kieu-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('VE01020', 'Chân váy túi đắp', 395.00, 355.50, 'images/product/fashion/chan-vay-tui-dap-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('VE01069', 'Chân váy đuôi cá', 430.00, 387.00, 'images/product/fashion/chan-vay-duoi-ca-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57'),
('VE01081', 'Chân váy xòe đính nút', 495.00, 445.00, 'images/product/fashion/Chan-vay-xoe-dinh-nut-01.jpg', 30, 3, '2024-03-11 10:58:57', '2024-03-11 10:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2024-03-11 10:56:21', '2024-03-11 10:56:21'),
(2, 'admin', '2024-03-11 10:56:21', '2024-03-11 10:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `sale_offs`
--

CREATE TABLE `sale_offs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `sale_price` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_offs`
--

INSERT INTO `sale_offs` (`id`, `code`, `sale_price`, `created_at`, `updated_at`) VALUES
(1, 'NEWYEAR30', 30.00, '2024-03-11 10:56:01', '2024-03-11 10:56:01'),
(2, 'NEWYEAR60', 60.00, '2024-03-11 10:56:01', '2024-03-11 10:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_carts`
--

INSERT INTO `shopping_carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-03-20 07:22:41', '2024-03-20 07:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `sdt`, `password`, `status`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thế Mạnh', 'manhthenguyen2003@gmail.com', '0987739823', '123', 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_collection_id_foreign` (`collection_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`),
  ADD KEY `cart_items_shopping_cart_id_foreign` (`shopping_cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD UNIQUE KEY `payments_id_unique` (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `products_id_unique` (`id`),
  ADD KEY `products_categorie_id_foreign` (`categorie_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_offs`
--
ALTER TABLE `sale_offs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=469;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sale_offs`
--
ALTER TABLE `sale_offs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_shopping_cart_id_foreign` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_carts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD CONSTRAINT `shopping_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
