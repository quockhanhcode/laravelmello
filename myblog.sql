-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 18, 2021 lúc 05:07 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myblog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `created_at`, `updated_at`) VALUES
(5, 'admin2', '250cf8b51c773f3f8dc8b4be867a9a02', 'tuấn', NULL, NULL),
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'khánh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(21, 'Cameras & Photo', NULL, NULL),
(20, 'Computer Accessories', NULL, NULL),
(19, 'Desktops', NULL, NULL),
(18, 'Laptops', NULL, NULL),
(16, 'Table', NULL, NULL),
(17, 'Smartphone', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_18_173426_category', 2),
(4, '2020_11_18_181845_admin', 3),
(5, '2020_11_19_134104_product', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_desc`, `product_content`, `category_id`, `product_image`, `created_at`, `updated_at`) VALUES
(2, 'Laptop Asus Gaming Rog Strix G512 i7', '28990000', 'Laptop Asus Gaming Rog Strix G512 i7 (IAL001T) là chiếc laptop gaming có cấu hình mạnh mẽ và thiết kế hầm hố đậm chất gaming. Máy được trang bị chip Intel Core i7 thế hệ mới nhất cùng với màn hình cao cấp chuẩn gaming giúp bạn thỏa sức chiến những tựa game cực đỉnh.', '2', 18, 'laptop57.jpg', NULL, NULL),
(7, 'Laptop Lenovo IdeaPad C340 14IML i5', '13920000', 'Laptop Lenovo IdeaPad C340 14IML là mẫu laptop văn phòng với thiết kế mỏng nhẹ, bản lề xoay 360 độ hỗ trợ cảm ứng linh hoạt, kết hợp với bộ vi xử lí mạnh mẽ, đáp ứng tốt hầu hết các nhu cầu làm việc văn phòng và giải trí thường ngày.', '4', 18, 'laptop296.jpg', NULL, NULL),
(5, 'Laptops HP 348 G7 i3', '11990000', 'Laptop HP 348 G7 i3 (1A0Z1PA) là chiếc laptop học tập văn phòng giá rẻ dành cho các bạn học sinh sinh viên cần một chiếc máy tính xách tay có cấu hình ổn định, kích thước mỏng nhẹ để đồng hành mỗi ngày.', '7', 18, 'laptop79.jpg', NULL, NULL),
(6, 'Laptop Dell Vostro 3491 i3', '10990000', 'Laptop Dell Vostro 3491 i3 (70223127) là chiếc máy tính xách tay văn phòng được thiết kế nhỏ gọn, dễ dịch chuyển, cấu hình máy không mạnh nhưng đủ đáp ứng nhu cầu học tập, văn phòng cơ bản, trình duyệt web và làm việc đa nhiệm.', '3', 18, 'laptop122.jpg', NULL, NULL),
(8, 'Laptop Acer Aspire 3 A315 56 36YS i3', '13690000', 'Đặc điểm nổi bật của Acer Aspire 3 A315 56 36YS i3 1005G1/8GB/512GB/Win10 (NX.HS5SV.008)\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Sách hướng dẫn, Thùng máy, Adapter sạc\r\n\r\nLaptop Acer Aspire 3 A315 56 36YS i3 (NX.HS5SV.008) là chiếc máy có thiết kế gọn nhẹ, hướng tới người dùng văn phòng cần một sản phẩm ổn định đáp ứng được nhu cầu công việc và học tập cơ bản với mức giá thành rẻ.', '1', 18, 'laptop314.jpg', NULL, NULL),
(13, 'Apple iPhone XR 32GB', '1189000', 'iPhone XR sở hữu màn hình Liquid Retina 6.1 inch(2). Sáu màu sắc sống động. Face ID tiên tiến cho phép bạn mở khóa iPhone và đăng nhập an toàn vào các ứng dụng chỉ với một ánh nhìn. Chip A12 Bionic sử dụng công nghệ máy học theo thời gian thực để thay đổi cách bạn chụp ảnh, chơi game, trải nghiệm thực tế ảo tăng cường (AR) và hơn thế nữa.', 'Hệ thống camera 12MP với chế độ Chân Dung, hiệu ứng Chiếu Sáng Chân Dung, hiệu ứng bokeh nâng cao và Depth Control cho ảnh chân dung đạt chuẩn studio. Và thiết kế chống nước(3).', 17, '1819.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
