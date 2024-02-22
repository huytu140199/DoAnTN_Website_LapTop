-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 05:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `total_price` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `name_receive` varchar(256) NOT NULL,
  `province_address_receive` varchar(3) NOT NULL,
  `district_address_receive` varchar(6) NOT NULL,
  `ward_address_receive` varchar(3) NOT NULL,
  `detail_address_receive` varchar(256) NOT NULL,
  `phone_receive` varchar(10) NOT NULL,
  `email_receive` varchar(256) NOT NULL,
  `money_transfer_form` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `id_user`, `quantity`, `created_at`, `total_price`, `status`, `name_receive`, `province_address_receive`, `district_address_receive`, `ward_address_receive`, `detail_address_receive`, `phone_receive`, `email_receive`, `money_transfer_form`) VALUES
(1, 7, 1, '2022-11-16 15:04:14', '32890000', 1, 'Nguyễn huy tú', '', '', '', '', '', '', 0),
(2, 2, 1, '2022-12-04 15:04:14', '11890000', 1, 'điệp trần huỳnh', '', '', '', '', '', '', 0),
(3, 1, 1, '2022-12-01 15:05:11', '27990000', 0, 'nguyễn việt long', '', '', '', '', '', '', 0),
(4, 11, 1, '2022-12-01 15:05:11', '18490000', 1, 'tăng huy long', '', '', '', '', '', '', 0),
(5, 4, 1, '2022-10-11 15:07:10', '18490000', 1, 'nguyễn văn thanh', '', '', '', '', '', '', 0),
(6, 3, 1, '2022-11-16 15:07:10', '18490000', 0, 'hà thuý', '', '', '', '', '', '', 0),
(7, 6, 1, '2022-12-01 14:06:20', '125920000', 1, 'điệp', '1', '124', '4', 'số 2', '0965600105', 'a@gmail.com', 1),
(73, NULL, 1, '2022-12-26 03:09:40', '11890000', 1, 'đáádsadsadsadsadsa', '27', '9304', '259', 'ádsad', '0965600105', 'tranhuynh@gmail.com', 1),
(74, NULL, 2, '2022-12-25 20:32:41', '42680000', 1, 'đáádsadsadsadsadsa', '2', '829', '28', 'ádsad', '0965600105', 'tranhuynhdiep2k@gmail.com', 1),
(75, NULL, 1, '2022-12-25 20:41:52', '11890000', 1, 'đáádsadsadsadsadsa', '25', '8131', '231', 'ádsad', '0965600105', 'tranhuynhdiep2k@gmail.com', 1),
(76, NULL, 1, '2022-12-25 20:44:46', '24990000', 1, 'đáádsadsadsadsadsa', '31', '11872', '316', 'ádsad', '0965600105', 'tranhuynhdiep2sssk@gmail.com', 1),
(77, NULL, 1, '2022-12-25 20:45:41', '24990000', 1, 'đáádsadsadsadsadsa', '31', '11944', '317', 'ádsad', '0965600105', 'tranhuynhdiep21k@gmail.com', 1),
(78, NULL, 1, '2022-12-25 20:48:00', '24990000', 1, 'ádasdsdsad', '31', '11872', '316', 'ádsad', '0965600105', 'ocoten321@gmail.com', 1),
(79, NULL, 1, '2022-12-25 20:49:07', '11890000', 1, 'đáádsadsadsadsadsa', '30', '11137', '298', 'ádsad', '0965600105', 'a@gmail.com', 1),
(80, NULL, 1, '2022-12-25 20:50:26', '11890000', 1, 'ádasdsdsad', '33', '11992', '325', 'ádsad', '0965600105', 'asdad@asd', 1),
(81, NULL, 1, '2022-12-26 03:52:04', '24990000', 1, 'ádasdsdsad', '33', '12097', '327', 'ádsad', '0965600105', 'asdad@asd', 1),
(82, NULL, 1, '2022-12-26 03:54:57', '24990000', 1, 'đáádsadsadsadsadsa', '30', '11137', '298', 'ádsad', '0965600105', 'tranhuynhdiepssasd2k@gmail.com', 1),
(83, NULL, 1, '2022-12-26 03:55:09', '24990000', 1, 'đáádsadsadsadsadsa', '30', '11137', '298', 'ádsad', '0965600105', 'tranhuynhdiepssasd2k@gmail.com', 1),
(84, NULL, 1, '2022-12-26 03:55:19', '24990000', 1, 'đáádsadsadsadsadsa', '30', '11137', '298', 'ádsad', '0965600105', 'tranhuynhdiepssasd2k@gmail.com', 1),
(85, NULL, 1, '2022-12-26 03:56:15', '24990000', 1, 'đáádsadsadsadsadsa', '30', '11137', '298', 'ádsad', '0965600105', 'tranhuynhdiepssasd2k@gmail.com', 1),
(86, NULL, 1, '2022-12-26 04:58:12', '24990000', 1, 'đáádsadsadsadsadsa', '30', '11137', '298', 'ádsad', '0965600105', 'tranhuynhdiepssasd2k@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id_bill_detail` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id_bill_detail`, `id_bill`, `id_product`, `quantity`) VALUES
(1, 1, 104, 1),
(2, 1, 102, 1),
(3, 2, 108, 1),
(4, 4, 103, 1),
(5, 5, 103, 1),
(6, 6, 103, 1),
(7, 3, 153, 1),
(27, 73, 109, 1),
(28, 74, 104, 1),
(29, 74, 120, 1),
(30, 75, 109, 1),
(31, 76, 104, 1),
(32, 77, 104, 1),
(33, 78, 104, 1),
(34, 79, 109, 1),
(35, 80, 109, 1),
(36, 81, 104, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `name_brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`) VALUES
(1, 'Dell'),
(2, 'Asus'),
(3, 'Lenovo'),
(4, 'HP'),
(5, 'Macbook'),
(6, 'Acer');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name_categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `name_categories`) VALUES
(1, 'Laptop Gaming'),
(2, 'Laptop Sinh Viên'),
(3, 'Macbook '),
(5, 'Laptop Văn Phòng');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `id_import` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `import_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` int(20) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_brand` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` char(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `CPU` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `id_category`, `id_brand`, `name`, `image`, `price`, `quantity`, `description`, `CPU`, `RAM`, `capacity`) VALUES
(100, 1, 6, 'Laptop Acer Nitro Gaming AN515-57-54MV i5 11400H', '/images/AcerGaming.jpg', 22490000, 120, '15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, Acer ComfyView Anti-glare LED-backlit', 'Intel, Core i5, 11400H', '8GB DDR4, 3200 MHz', 'SSD 512 GB'),
(101, 1, 6, 'Laptop Acer Nitro Gaming AN515-58-52SP', '/images/AcerGaming1.jpg', 26990000, 100, 'Đặc điểm nổi bật của Acer Nitro Gaming 5 AN515-58-52SP i5 12500H (NH.QFHSV.001)\r\n- Thiết kế mới và đậm chất gaming với trọng lượng 2.5 kg, độ dày 25.9 mm.\r\n- Màn hình siêu mượt, hình ảnh sắc nét: 15.6 inch, 1920 x 1080 Pixel, tần số quét 144 Hz\r\n- Trải nghiệm sức mạnh đột phá: Intel Core i5 12500H, Ram 8Gb, SSD 512 GB, Windown 11 Home ', 'Intel, Core i5, 12500H', '8GB DDR4, 3200 MHz', 'SSD 512 GB'),
(102, 2, 2, 'Laptop Dell Inspiron N3510 Celeron N402', '/images/AsusGaming.jpg', 1000000, 200, 'Đặc điểm nổi bật của Dell Inspiron N3510 Celeron N4020 - Sạc nhanh tiện dụng - Thiết kế hiện đại và cao cấp.', 'Intel, Celeron, N402', '12 GB , DDR4, 3200 MHz', ' SSD 512 GB'),
(103, 1, 2, 'Laptop Asus TUF Gaming FX506LHB-HN188W', '/images/AsusGaming3.jpg', 18490000, 100, 'Đặc điểm nổi bật của Asus TUF Gaming FX506LHB-HN188W i5 10300H\r\n- Cơ chế tản nhiệt thông minh\r\n- Âm thanh sống động ', '\r\nIntel, Core i5, 10300H\r\n\r\n', '8GB DDR4, 2933 MHz\n\n', 'SSD 512 GB'),
(104, 5, 6, 'Laptop Dell Vostro V562', '/images/AsusVanphong1.jpg', 24990000, 24, 'Đặc điểm nổi bật của Dell Vostro V5620 i5 1240P/70296963\r\n- Hình ảnh chân thực rõ nét\r\n- Hiệu năng hoàn hảo, nâng cao hiệu suất.', 'Intel, Core i5, 1240P', '8GB DDR4, 3200 MHz', ' SSD 512 GB'),
(105, 5, 6, 'Laptop Acer Aspire 3 A315-58-54M5', '/images/AcerVanphong1.jpg', 16990000, 80, 'Đặc điểm nổi bật của Acer Aspire 3 A315-58-54M5 i5 1135G7 (NX.ADDSV.00M)\r\n- Hoạt động ấn tượng thời lượng lên đến 9 tiếng\r\n- Thiết kế tinh tế viền mỏng với logo Acer nổi bật: trọng lượng 0.9 kg, độ mỏng 16.5 mm\r\n- Hiển thị rõ nét với màn hình Full HD\r\n', 'Intel, Core i5, 1135G7', '8GB DDR4, 2400 MHz', 'SSD 512 GB'),
(106, 5, 6, 'Laptop Acer Aspire 3 A315-56-38B1', '/images/AcerVanphong.jpg', 9990000, 50, 'Đặc điểm nổi bật của Acer Aspire 3 A315-56-38B1 i3 1005G1 (NX.HS5SV.00G)\r\n- Cấu hình \"cân\" được mọi tác vụ văn phòng\r\n- Thời lượng sử dụng pin vừa đủ dung lượng 2 Cell, thời lượng 3-4 tiếng \r\n- Kết nối \"tất tần tật\" cổng LAN, cổng HDMI, USB 2.0, cổng USB 3.0, Jack 3.5 mm', 'Intel, Core i3, 1005G1', '4GB DDR4, 2400 MHz', 'SSD 256 GB'),
(107, 1, 6, 'Laptop Acer Aspire Gaming A715-42G-R05G R5 5500U', '/images/AcerGaming2.jpg', 16990000, 90, '\r\n15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, Acer ComfyView Anti-glare LED-backlit\r\n\r\nAMD, Ryzen 5, 5500U\r\n\r\n8 GB, DDR4, 3200 MHz\r\n\r\nSSD 512 GB\r\n\r\nNVIDIA GeForce GTX 1650 4GB; AMD Radeon Graphics', 'AMD, Ryzen 5, 5500U', '8GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(108, 5, 6, 'Laptop Dell Inspiron 15 N3511', '/images/AsusSinhvien.jpg', 11890000, 50, 'Đặc điểm nổi bật của Laptop Dell Inspiron N3511 i3 1115G4\r\n- Thiết kế tinh tế gọn nhẹ\r\n- Hiển thị xuất sắc trên màn hình full HD', 'Intel, Core i3, 1115G4', '4 GB, DDR4, 2666 MHz', ' SSD 256 GB'),
(109, 5, 6, 'Laptop Acer Aspire 3 A315-58-35AG', '/images/AcerVanphong2.jpg', 11890000, 100, 'Đặc điểm nổi bật của Acer Aspire A315-58-35AG i3 1115G4 (NX.ADDSV.00B)\r\n- Thiết kế thời thượng màu bạc chủ đạo - viền màn hình mỏng: trọng lượng 17.9 kg, độ dày 19.9 mm\r\n- Trải nghiệm hình ảnh hấp dẫn\r\n- Cấu hình xuất sắc, mạnh mẽ \r\n', '\r\nIntel, Core i3, 1115G4', '4 GB (1 thanh 4 GB), DDR4, 2400 MHz', 'SSD 256 GB'),
(110, 2, 6, 'Laptop Acer Aspire 5 A514-54-5127', '/images/AcerSinhvien.jpg', 17790000, 120, 'Đặc điểm nổi bật của Acer Aspire 5 A514-54-5127 i5 1135G7 (NX.A28SV.007)\r\n- Thiết kế thời trang sang trọng\r\n- Màn hình sắc nét công nghẹ ComfyView chống chói \r\n- Sức mạnh hiệu năng đáp ứng được cả công việc với giải trí ', '\r\nIntel, Core i5, 1135G7', '8 GB, DDR4, 2666 MHz', 'SSD 512 GB'),
(111, 2, 6, 'Laptop Acer Aspire 3 A315-57G-573F', '/images/AcerSinhvien1.jpg', 16490000, 50, 'Đặc điểm nổi bật của Acer Aspire 3 A315-57G-573F i5 1035G1 (NX.HZRSV.00B)\r\n- Thời lượng pin lên đến 9 tiếng\r\n- Bộ vi xử lý intel core i5 mạnh mẽ ', 'Intel, Core i5, 1035G1', '8GB DDR4, 2400 MHz', 'SSD 512 GB'),
(112, 2, 6, 'Laptop Acer Swift 3 SF314-511-55QE i5', '/images/AcerSinhvien2.jpg', 22190000, 80, 'Đặc điểm nổi bật của Acer Swift 3 SF314-511-55QE i5 1135G7 (NX.ABNSV.003)\r\n- Thiết kế mỏng nhẹ chế tác từ Nhôm - MAgie cao cấp\r\n- Màn hình mãn nhãn, sống động', '\r\nIntel, Core i5, 1135G7', '16 GB, LPDDR4X, 4266 MHz', '\r\nSSD 512 GB'),
(113, 1, 2, 'Laptop Asus TUF Gaming FX506LHB-HN188W', '/images/AsusGaming.jpg', 18490000, 50, 'Đặc điểm nổi bật của Asus TUF Gaming FX506LHB-HN188W i5 10300H\r\n- Cơ chế tản nhiệt thông minh: nhiều ống tản nhiệt và 3 ống dẫn nhiệt \r\n- Âm thanh sống động\r\n- Chứng nhận độ bền chuẩn quân đội ', 'Intel, Core i5, 10300H', '8GB DDR4, 2933 MHz', '\r\nSSD 512 GB'),
(115, 1, 2, 'Laptop Asus Gaming TUF FA506ICB-HN355W', '/images/AsusGaming2.jpg', 19990000, 60, 'Đặc điểm nổi bật của Laptop Asus Gaming TUF FA506ICB-HN355W R5 4600H/8GB/512GB/15.6FHD/RTX 3050 4GB/Win11\r\n- Thiết kế đậm chất gaming \r\n- Hình ảnh tuyết đẹp sắc nét \r\n- Hiệu năng xuất sắc cho mọi hoạt động', 'AMD, Ryzen 5, 4600H', '\r\n8 GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(117, 2, 2, 'Laptop Asus Vivobook M1403QA-LY022W', '/images/AsusSinhvien2.jpg', 15690000, 80, 'Đặc điểm nổi bật của Asus Vivobook M1403QA-LY022W R5 5600H\r\n- Màn hình cảm ứng sắc nét \r\n- Đáp ứng công việc mượt mà \r\n- Kết nối cao cấp ', 'AMD, Ryzen 5, 5600H\r\n\r\n', '8GB DDR4, 3200 MHz\n\n', 'SSD 512 GB'),
(118, 2, 2, 'Laptop Asus Vivobook X415EA-EB640W', '/images/AsusSinhvien1.jpg', 13990000, 50, 'Đặc điểm nổi bật của Asus Vivobook X415EA-EB640W i5-1135G7\r\n- Màn hình cảm ứng sắc nét \r\n- Đáp ứng công việc mượt mà \r\n- Kết nối cao cấp ', 'Intel, Core i5, 1135G7\r\n\r\n', '4GB DDR4, 3200 MHz\n\n', 'SSD 512 GB'),
(119, 5, 2, 'Laptop Asus Vivobook Flip TP470EA-EC346W', '/images/AsusVanphong.jpg', 12990000, 50, 'Đặc điểm nổi bật của Asus Vivobook Flip TP470EA-EC346W i3 1115G4\r\n- Màn hình cảm ứng sắc nét\r\n- Đáp ứng công việc mượt mà \r\n- Kết nối cao cấp ', '\r\nIntel, Core i3, 1115G4\r\n\r\n', '4 GB, LPDDR4X, 4266 MHz\r\n\r\n', 'SSD 512 GB'),
(120, 5, 2, 'Laptop Asus Vivobook M1503QA-L1026W', '/images/AsusVanphong1.jpg', 17690000, 3318, 'Đặc điểm nổi bật của Asus Vivobook M1503QA-L1026W R5 5600H\r\n- Âm thanh tuyệt hảo \r\n- Màn hình cảm ứng sắc nét\r\n- Đáp ứng công việc mượt mà \r\n- Kết nối cao cấp ', 'AMD, Ryzen 5, 5600H\r\n\r\n', '8 GB, DDR4, 3200 MHz\n\n', 'SSD 512 GB'),
(121, 5, 2, 'Laptop Asus Vivobook A515EA-BQ3013W', '/images/AsusVanphong2.jpg', 13990000, 50, 'Đặc điểm nổi bật của Asus Vivobook A515EA-BQ3013W i3 1115G4\r\n- Gọn gàng, linh hoạt, cơ động  \r\n- Soạn thảo mượt mà\r\n- Tốc độ nhanh chóng ', '\r\nIntel, Core i3, 1115G4\r\n\r\n', '8 GB, DDR4, 3200 MHz\r\n\r\n', 'SSD 256 GB'),
(125, 5, 6, 'Laptop Dell Inspiron 14 T7420', '/images/AsusGaming.jpg', 23990000, 50, 'Đặc điểm nổi bật của Dell Inspiron 14 T7420 i5 1235U/N4I5021W\r\n- Cổng kết nối tiên tiến\r\n- Thiết kế đơn giản gọn nhẹ\r\n- Màn hình cảm ứng cực chất', 'Intel, Core i5, 1235U', '8 GB, DDR4, 3200 MHz', ' SSD 512 GB'),
(126, 5, 6, 'Laptop Dell Inspiron N3505 R5', '/images/DellSinhvien2.jpg', 14790000, 70, 'Đặc điểm nổi bật của Dell Inspiron N3505 R5 3450U\r\n- Cổng kết nối tiên tiến\r\n- Thiết kế đơn giản gọn nhẹ\r\n- Màn hình cảm ứng cực chất', 'AMD, Ryzen 5, 3450U', '8 GB, DDR4, 3200 MHz\n\n8 GB, DDR4, 3200 MHz\n', ' SSD 256 GB'),
(127, 2, 1, 'Laptop Dell Inspiron 14 N5420', '/images/DellSinhvien2.jpg', 21490000, 50, 'Đặc điểm nổi bật của Laptop Dell Inspiron 14 N5420 i5 1235U\r\n- Webcam thông minh\r\n- Âm thanh rõ ràng\r\n- Hình ảnh sống động ', 'Intel, Core i5, 1235U\r\n\r\n', '8 GB, DDR4, 3200 MHz', 'SSD 256 GB'),
(130, 5, 1, 'Laptop Dell Inspiron 14 N5420', '/images/DellVanphong2.jpg', 21490000, 20, 'Đặc điểm nổi bật của Laptop Dell Inspiron 14 N5420 i5 1235U\r\n- Đơn giản, hiện đại\r\n- Làm việc thỏa mái, thuận tiện ', 'Intel, Core i5, 1235U\r\n\r\n', '8 GB, DDR4, 3200 MHz', 'SSD 256 GB'),
(131, 1, 4, 'Laptop HP Gaming Victus 16-d0291TX', '/images/HPGaming.jpg', 26490000, 0, 'Đặc điểm nổi bật của HP Gaming VICTUS 16-d0291TX i7 11800H (5Z9R2PA)\r\n- Thiết kế đơn giản\r\n- Màn hình 120 Hz True Tone cho game thủ\r\n- Hiệu suất tối thượng mạnh mẽ ', 'Intel, Core i7, 11800H\r\n\r\n', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(132, 1, 4, 'Laptop HP Gaming Victus 16-e0175AX R5 5600H', '/images/HPGaming1.jpg', 20590000, 0, 'Đặc điểm nổi bật của HP Gaming VICTUS 16-e0175AX R5 5600H (4R0U8PA)\r\n- Chất lượng hiển thị tuyệt vời \r\n- Thiết kế đơn giản\r\n- Màn hình 120 Hz True Tone cho game thủ\r\n- Hiệu suất tối thượng mạnh mẽ \r\n', 'AMD, Ryzen 5, 5600H\r\n\r\n\r\n\r\n', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(133, 1, 4, 'Laptop HP Gaming OMEN 16-b0178TX', '/images/HPGaming2.jpg', 30990000, 50, 'Đặc điểm nổi bật của HP Gaming OMEN 16-b0178TX i5 11400H (5Z9Q9PA)\r\n- Thiết kế cao cấp, vẻ đẹp tinh tế \r\n- Tận hưởng game hình ảnh tràn viền ', '\r\nIntel, Core i5, 11400H\r\n\r\n', '16GB DDR4, 2933 MHz\n\n', 'SSD 1 TB'),
(134, 2, 4, 'Laptop HP Pavilion 15 eg2057TU', '/images/HPSinhvien.jpg', 17990000, 20, 'Đặc điểm nổi bật của HP 240 G8 Pentium N5030 (604K1PA)', '\r\nIntel, Core i5, 1240P\r\n', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(135, 2, 4, 'Laptop HP 240 G8 Pentium N5030', '/images/HPSinhvien1.jpg', 8490000, 0, 'Đặc điểm nổi bật của HP 240 G8 Pentium N5030 (604K1PA)\r\n- Thiết kế nhỏ gọn màu bạc phong cách\r\n- Kết nối cao cấp ', '\r\nIntel, Pentium, N5030\r\n\r\n', '4 GB, DDR4, 2400 MHz\r\n\r\n', 'SSD 256 GB'),
(136, 2, 4, 'Laptop HP 15s-fq2663TU ', '/images/HPSinhvien2.jpg', 10390000, 50, 'Đặc điểm nổi bật của HP 15s-fq2663TU i3 1115G4/6K796PA\r\n- Thời lượng pin dài\r\n- Dễ dàng kết nối ', '\r\nIntel, Core i3, 1115G4\r\n\r\n', '4GB DDR4, 3200 MHz\n\n', 'SSD 256 GB'),
(137, 5, 4, 'Laptop HP Envy 13 ba1537TU', '/images/HPVanphong.jpg', 20390000, 60, 'Đặc điểm nổi bật của Laptop HP Envy 13 ba1537TU i5 1135G7/8GB/256GB\r\n- Thể hiện đẳng cấp khí chất riêng biệt \r\n- Màn hình 13.3 inch full màn hình tràn viền ', 'Intel, Core i5, 1135G7\r\n\r\n', '8 GB, DDR4, 3200 MHz\r\n\r\n', 'SSD 256 GB'),
(138, 5, 4, 'Laptop HP Pavilion 14 dv2034TU', '/images/HPVanphong1.jpg', 17990000, 60, 'Đặc điểm nổi bật của HP Pavilion 14-dv2034TU i5 1235U (6K770PA)\r\n- Thiết kế sang trọng\r\n- Thưởng thức màn hình sắc nét ', '\r\nIntel, Core i5, 1235U\r\n\r\n', '8GB DDR4, 3200 MHz\n\n', 'SSD 512 GB'),
(139, 5, 4, 'Laptop HP 240 G9', '/images/HPVanphong2.jpg', 16690000, 0, 'Đặc điểm nổi bật của HP 240 G9 i5 1235U/6L1Y1PA\r\n- Màn hình hiển thị ấn tượng \r\n- Hiệu suất đa tác vụ vượt trội ', '\r\nIntel, Core i5, 1235U\r\n\r\n', '8 GB, DDR4, 3200 MHz', 'SSD 256 GB'),
(140, 1, 3, 'Laptop Lenovo Gaming Legion 5 15IAH7', '/images/LenovoGaming.jpg', 31790000, 90, 'Đặc điểm nổi bật của Lenovo Gaming Legion 5 15IAH7 i5 12500H/82RC0090VN\r\n- Bàn phím RGB 4 vùng cực chất \r\n- Luôn mát mẻ kể cả khi chơi game nặng ', '\r\nIntel, Core i5, 12500H\r\n\r\n', '16GB DDR5, 4800 MHz\n\n', 'SSD 512 GB'),
(141, 1, 3, 'Laptop Lenovo Gaming Legion 5 15ARH7 R7 6800H', '/images/LenovoGaming2.jpg', 30590000, 150, 'Đặc điểm nổi bật của Laptop Lenovo Gaming Legion 5 15ARH7 R7 6800H\r\n- Màn hình gaming mãn nhãn\r\n- Hiệu suất tối ưu ', '\r\nAMD, Ryzen 7, 6800H\r\n\r\n', '8GB DDR5, 4800 MHz\n\n', 'SSD 512 GB'),
(142, 1, 3, 'Laptop Lenovo IdeaPad Gaming 3 15IAH7 ', '/images/LenovoGaming1.jpg', 24590000, 0, 'Đặc điểm nổi bật của Lenovo Gaming IdeaPad 3 15IAH7 i5 12500H/82S900H2VN\r\n- Màn hình gaming mãn nhãn\r\n- Hiệu suất tối ưu ', 'Intel, Core i5, 12500H\r\n\r\n', '16GB DDR4, 3200 MHz\n\n', 'SSD 512 GB'),
(143, 2, 3, 'Laptop Lenovo Ideapad Slim 3', '/images/LenovoSinhvien1.jpg', 6500000, 50, 'Đặc điểm nổi bật của Lenovo Ideapad Slim 3 i3 1115G4 (NK)\r\n- Cấu hình tuyệt vời \r\n- Gọi video chất lượng cao\r\n- Đầy đủ cổng kết nối tiêu chuẩn ', '\r\nIntel, Core i3, 1115G4\r\n\r\n', '4 GB, DDR4, 2666 MHz\r\n\r\n', 'SSD 128 GB'),
(144, 2, 3, 'Laptop Lenovo IdeaPad 3 14IAU7', '/images/LenovoSinhvien.jpg', 14990000, 200, 'Đặc điểm nổi bật của Lenovo IdeaPad 3 14IAU7 i5-1235U/(82RJ001DVN)\r\n- Gọi video chất lượng cao\r\n- Hiệu xuất xuất sắc \r\n- Đầy đủ cổng kết nối tiêu chuẩn ', '\r\nIntel, Core i5, 1235U\r\n\r\n', '8 GB, DDR4, 3200 MHz\r\n\r\n', 'SSD 512 GB'),
(145, 5, 3, 'Laptop Lenovo IdeaPad 3 14IAU7', '/images/LenovoVanphong1.jpg', 12990000, 50, 'Đặc điểm nổi bật của Lenovo IdeaPad 3 14IAU7 i3-1215U/(82RJ001CVN)\r\n- Tối ưu cho gọi video\r\n- Rất nhiều cổng kết nối ', '\r\nIntel, Core i3, 1215U\r\n\r\n', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(146, 5, 3, 'Laptop Lenovo ThinkBook 14 G2 ITL', '/images/LenovoVanphong.jpg', 16990000, 50, 'Đặc điểm nổi bật của Lenovo ThinkBook 14 G2 ITL i5 1135G7/20VD00Y4VN\r\n- Tối ưu cho gọi video\r\n- Rất nhiều cổng kết nối ', 'Intel, Core i5, 1135G7\r\n\r\n', '8 GB, DDR4, 3200 MHz\r\n\r\n', 'SSD 512 GB'),
(149, 3, 5, 'MacBook Air M2 2022 13 inch', '/images/MacbookAir2.jpg', 28990000, 110, 'Đặc điểm nổi bật của MacBook Air M2 2022 13 inch\r\n- Mỏng, nhẹ, đầy cảm ứng\r\n- Ve đẹp tuyệt sắc của màn hình Liquid Retina ', 'Apple, M2, 8 - Core\r\n\r\n', '8 GB, LPDDR4, 3200 MHz\r\n\r\n', 'SSD 256 GB'),
(150, 3, 5, 'MacBook Air 13\" 2020 M1 256GB ', '/images/MacbookAir1.jpg', 23490000, 10, 'Đặc điểm nổi bật của MacBook Air 13\" 2020 M1 256GB\r\n- Kết nối mạnh mẽ và tiên tiến hàng đầu\r\n- Bàn phím cơ cắt kéo mới', 'Apple, M1\r\n\r\n', '8 GB, LPDDR4\r\n\r\n', 'SSD 256 GB'),
(151, 3, 5, 'MacBook Air 13\" 2020 M1 ', '/images/MacbookAir3.jpg', 29299000, 15, '\r\nPhiên bản MacBook Air M1 với tùy chọn bộ nhớ RAM lên tới 16GB sẽ giúp cho khả năng làm việc đa nhiệm của bạn hiệu quả hơn, công việc trôi chảy hơn khi bạn có thể làm rất nhiều việc cùng lúc.', '\r\nApple, M1\r\n\r\n', '16 GB, LPDDR4\r\n\r\n', 'SSD 256 GB'),
(152, 3, 5, 'MacBook Pro M2 2022 13 inch', '/images/MacbookPro1.jpg', 36990000, 50, 'Với chip M2, MacBook Pro 2022 16GB tiến thêm một bước trong việc gia tăng sự chuyên nghiệp. Sản phẩm ghi nhận thời lượng pin lên đến 20 giờ và được trang bị hệ thống tản nhiệt đắc lực duy trì hiệu suất cao. Phiên bản bạn đang theo dõi được trang bị 16GB RAM, cho năng lực đa nhiệm cực kỳ ấn tượng.', 'Apple, M2, 8 - Core\r\n\r\n', '16 GB, LPDDR4, 3200 MHz\r\n\r\n', 'SSD 256 GB'),
(153, 3, 5, 'MacBook Pro 13\" 2020 Touch Bar M1 256GB', '/images/MacbookPro3.jpg', 27990000, 10, 'Tốc độ và sức mạnh hoàn hảo trong một thân máy nhỏ gọn. MacBook Pro M1 13 inch 2020 Touch Bar mới với bộ vi xử lý Apple M1 cho bạn hiệu suất và thời lượng pin tuyệt vời nhất từ trước đến nay, mang đến hiệu năng chuyên nghiệp để hoàn thành những công việc chuyên nghiệp.', '\r\nApple, M1\r\n\r\n', '8 GB, LPDDR4\r\n\r\n', 'SSD 256 GB'),
(154, 3, 5, 'MacBook Pro 16\" 2021 M1 Max 1TB', '/images/MacbookPro2.jpg', 82490000, 0, 'MacBook Pro 16 inch 2021 đích thực là một con quái vật về cấu hình với bộ vi xử lý Apple M1 Max mạnh nhất, cho bạn làm việc ở năng suất vượt trội trên màn hình Liquid Retina XDR tuyệt đẹp. Đi cùng với đó là thời lượng pin lên tới 21 giờ, hệ thống âm thanh hình ảnh chuyên nghiệp và tất cả các cổng kết nối bạn cần.', '\r\nApple, M1 Max, 10-Core\r\n\r\n', '32 GB, LPDDR4, 3200 MHz\r\n\r\n', 'SSD 1 TB'),
(160, 5, 6, 'Laptop Dell Inspiron N3510 Celeron N402', '/images/MacbookPro2.jpg', 9900000, 0, 'MacBook Pro 16 inch 2021 đích thực là một con quái vật về cấu hình với bộ vi xử lý Apple M1 Max mạnh nhất, cho bạn làm việc ở năng suất vượt trội trên màn hình Liquid Retina XDR tuyệt đẹp. Đi cùng với đó là thời lượng pin lên tới 21 giờ, hệ thống âm thanh hình ảnh chuyên nghiệp và tất cả các cổng kết nối bạn cần.', 'Intel, Celeron, N402', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(161, 5, 6, 'Laptop Dell Inspiron N3510 Celeron N402', '/images/MacbookPro2.jpg', 12000000, 0, 'Phiên bản MacBook Air M1 với tùy chọn bộ nhớ RAM lên tới 16GB sẽ giúp cho khả năng làm việc đa nhiệm của bạn hiệu quả hơn, công việc trôi chảy hơn khi bạn có thể làm rất nhiều việc cùng lúc.', 'Intel, Celeron, N402', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(162, 5, 6, 'Laptop Dell Inspiron N3510 Celeron N402', '/images/MacbookPro2.jpg', 8900000, 3000000, 'Đặc điểm nổi bật của MacBook Air M2 2022 13 inch\r\n- Mỏng, nhẹ, đầy cảm ứng\r\n- Ve đẹp tuyệt sắc của màn hình Liquid Retina ', 'Intel, Celeron, N402', '12 GB , DDR4, 3200 MHz', 'SSD 512 GB'),
(163, 2, 6, 'Laptop Dell Inspiron N3510 Celeron N402', '/images/MacbookPro2.jpg', 9900000, 0, 'Đặc điểm nổi bật của Lenovo ThinkBook 14 G2 ITL i5 1135G7/20VD00Y4VN\r\n- Tối ưu cho gọi video\r\n- Rất nhiều cổng kết nối ', 'Intel, Celeron, N402', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB'),
(164, 5, 6, 'Laptop Dell Inspiron N3510 Celeron N402', '/images/1672003107_products.jpg', 8900000, 0, 'máy đẹp', 'Intel, Celeron, N402', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `name_supplier` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `name_supplier`, `phone`, `address`) VALUES
(1, 'việt long ', '0965600005', 'Hà Nội'),
(2, 'Huỳnh điệp', '0965000112', 'bắc giang');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_brand`
--

CREATE TABLE `supplier_brand` (
  `id_supplier_brand` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_brand`
--

INSERT INTO `supplier_brand` (`id_supplier_brand`, `id_supplier`, `id_brand`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 5),
(5, 2, 6),
(6, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `password` char(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` char(50) NOT NULL,
  `gender` int(1) DEFAULT NULL,
  `image` char(255) DEFAULT NULL,
  `level` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `address`, `phone`, `gender`, `image`, `level`, `created_at`) VALUES
(1, 'Nguyễn Văn Sinh', 'Sinhnv@gmial.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', 'Số 12 Dịch Vọng Hậu, Cầu Giấy, Hà Nội', '0351234561', 1, '/images/avatar.jpg', 1, '2022-12-06 18:55:27'),
(2, 'Nguyễn Văn Ba ', 'Nvb@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '13 Võ Chí Công, Ba Đình, Hà nội ', '0965600103', 1, '/images/avatar.jpg', 0, '2022-12-06 18:55:27'),
(3, 'Dương Thị Hoa', 'hoadt@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', 'Nhà văn hóa thôn chùa, Hương Sơn, Lạng Giang, Bắc Giang', '0965000100', 0, '/images/avatar.jpg', 1, '2022-11-17 08:54:48'),
(4, 'Vương Bá Mạnh ', 'Bamanh@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '21 Trần Bình, Mai Dịch, Cầu Giấy, Hà Nội', '0965000112', 1, '/images/avatar.jpg', 1, '2022-12-04 08:13:59'),
(5, 'Nguyễn Thị Lan Anh', 'lananhk@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '99 Hồ Tùng Mậu,  Mai Dịch, Cầu Giấy, Hà Nội', '0965000112', 0, '/images/avatar.jpg', 1, '2022-12-07 08:14:03'),
(6, 'Dương Thúy Quỳnh ', 'quynh12@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '122 Xuân Thủy, Dịch Vọng Hậu, Cầu Giấy, Hà Nội', '096135000112', 0, '/images/avatar.jpg', 1, '2022-11-17 08:55:43'),
(7, 'Trần Văn Xương ', 'xuongtv@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '125 Cầu Giấy, Hà Nội', '0359874562', 1, '/images/avatar.jpg', 1, '2022-12-06 19:28:19'),
(8, 'Trần Như Quỳnh ', 'quynhquynh@gamil.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '124 Nam Từ Liêm, Hà Nội', '0123896541', 0, '/images/avatar.jpg', 1, '2022-12-06 19:23:54'),
(9, 'Nguyễn Mạnh Hùng ', 'hungnm@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '12 Trần Quốc Vượng, Cầu Giấy, Hà Nội', '0971236548', 1, '/images/avatar.jpg', 1, '2022-12-06 19:28:19'),
(10, 'Trần Thị Trúc', 'tructt@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '123 Mai Dịch, Hà Nội', '0975682456', 0, '/images/avatar.jpg', 1, '2022-12-06 19:30:59'),
(11, 'Nguyễn Huyền Thương ', 'thuongwnh@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '34 Ba Đình, Hà Nội', '0356214569', 0, '/images/avatar.jpg', 1, '2022-12-06 19:30:59'),
(12, 'Trần Quang Anh ', 'qanh@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '34 Chí Linh, Hải Dương', '0975632458', 1, '/images/avatar.jpg', 1, '2022-12-06 19:33:40'),
(13, 'Nguyễn Văn Hùng ', 'hungnv@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', 'Thị trấn Từ Sơn, Bắc Ninh', '0351458796', 1, '/images/avatar.jpg', 1, '2022-12-06 19:33:40'),
(14, 'Lê Thị Hương ', 'huonglt@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '234 Bắc Từ Liêm, Hà Nội', '0359874569', 0, '/images/avatar.jpg', 1, '2022-12-06 19:37:49'),
(15, 'Nguyễn Lan Hương ', 'huongnl@gmail.com', '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', '112 Cầu Diễn, Bắc Từ Liêm, Hà Nội', '0975682362', 0, '/images/avatar.jpg', 1, '2022-12-06 19:37:49'),
(49, 'ádsad', NULL, '$2y$10$Hucsf0pwnCWmc6N/CpBYtOzEpbeMM8SX8oE7LQh7Dykwkx2alWKqW', NULL, 'ádsada', NULL, NULL, 1, '2022-12-16 17:41:52'),
(50, 'vân anh', NULL, '$2y$10$8LC7hFQ5kWf0shh5GSNy3OIiYobWJ4d14qkOSYVUIazCDTE.tH0W2', NULL, '0393990608', NULL, NULL, 1, '2022-12-21 16:57:14'),
(51, 'hà thuý', NULL, '$2y$10$2H1/0nUXq99WgRVluflZqep.Txx7GV8pr5U9p66GjD4ZASIHHfIaa', NULL, '0965000000', NULL, NULL, 1, '2022-12-26 00:38:34'),
(52, 'hà thị thuý', NULL, '$2y$10$jebQG9XHgCFF4b1ys9rktutxiwsSxOQIb5hZuqnmXYZA49RAzsr76', NULL, '0965000099', NULL, NULL, 1, '2022-12-26 00:51:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bill_ibfk_2` (`id_user`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id_bill_detail`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`id_import`),
  ADD KEY `id_Product` (`id_categories`),
  ADD KEY `import_ibfk_1` (`id_supplier`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_branch` (`id_brand`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `supplier_brand`
--
ALTER TABLE `supplier_brand`
  ADD PRIMARY KEY (`id_supplier_brand`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id_bill_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier_brand`
--
ALTER TABLE `supplier_brand`
  MODIFY `id_supplier_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `import_ibfk_2` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_categories`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`);

--
-- Constraints for table `supplier_brand`
--
ALTER TABLE `supplier_brand`
  ADD CONSTRAINT `supplier_brand_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `supplier_brand_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
