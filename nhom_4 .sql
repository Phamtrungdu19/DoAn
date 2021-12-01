-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jan 05, 2021 at 06:52 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `maHang` int(11) NOT NULL AUTO_INCREMENT,
  `tenHang` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`maHang`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`maHang`, `tenHang`) VALUES
(1, 'SamSung'),
(2, 'Oppo'),
(3, 'Apple'),
(4, 'Realme'),
(5, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `pro_image` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `menu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`, `created_at`) VALUES
(13, 'Loa Bluetooth Anker Soundcore Flare 2 A3165 Đen', 3, 1, 699000, 'loa-bluetooth-anker-soundcore-flare-2-b2b-a3165-avata-1-600x600-1-600x600.jpg', ' Thiết kế nhỏ gọn, đẹp mắt với 6 chế độ ánh sáng.\r\nTăng cường âm trầm với công nghệ BassUp.\r\nLiên kết nhiều loa với nhau nhờ công nghệ PartyCast.\r\nBền bỉ với chuẩn kháng nước IPX7.\r\nSử dụng liên tục lên đến 12 giờ. ', 0, '2020-12-29 05:27:59'),
(14, 'Loa bluetooth Sony Extra Bass SRS-XB43\r\n', 4, 3, 4999000, 'loa-bluetooth-sony-srs-xb43-ava-600x600-1-600x600.jpg', 'Thiết kế cá tính, 2 màu lựa chọn, dễ di chuyển.\r\nÂm thanh rõ nét với 2 driver woofer và 2 driver tweeter.\r\nÂm trầm mạnh mẽ với Extra Bass và màng loa kiểu mới lạ.\r\nKiểm soát đèn LED trên điện thoại với ứng dụng Sony | Music Center và Fiestable.\r\nDùng trong suốt 24 giờ, sạc trong 5 tiếng, sạc ngược qua cổng USB cho thiết bị khác.\r\nKhả năng chống va đập, chống nước và chống bụi chuẩn IP67, tăng độ bền, an toàn khi dùng.\r\nĐồng bộ 100 loa qua tính năng Party Connect.', 1, '2020-11-20 13:00:05'),
(15, 'Loa Bluetooth JBL PULSE2BLKAS Đen\r\n', 5, 3, 4590000, 'loa-bluetooth-jbl-pulse2blkas-den-add-600x600-1-600x600.jpg', 'PULSE 2 có thể kết nối cùng lúc với 3 thiết bị qua Bluetooth.\r\nDung lượng pin lên đến 6.000 mAh, thời gian sử dụng liên tục lên đến 10 giờ, thời gian sạc xấp xỉ 5 giờ.\r\nÂm thanh chân thực, sống động với chất lượng âm bass mạnh mẽ.\r\nCông nghệ JBL Connect có thể liên kết với 1 loa khác có tính năng JBL Connect để trải nghiệm âm thanh lớn hơn.\r\nTích hợp microphone với công nghệ SoundClear có khả năng ngăn tiếng ồn và tiếng vọng lại.\r\nKích hoạt và nói chuyện với Siri hoặc Google Now từ JBL PULSE 2 chỉ bằng 1 nút nhấn.\r\nTrang bị chuẩn chống nước IPX7 giúp bạn an tâm khi gặp mưa hoặc rơi xuống nước.\r\nJBL - Thương hiệu âm thanh nổi tiếng toàn cầu đến từ Mỹ.', 1, '2020-11-20 13:01:33'),
(16, 'Pin sạc dự phòng Polymer 10.000 mAh Sony CP-V10B-WC LA\r\n', 1, 4, 2990000, 'sac-du-phong-polymer-10000mah-sony-cp-v10b-wc-600x600.jpg', 'Thiết kế bo tròn và phong cách, dễ dàng mang theo.\r\nThiết kế chịu nhiệt, bộ điều khiển nguồn thông minh với lõi pin Polymer đảm bảo an toàn, đáng tin cậy.\r\nBề mặt nhám chất lượng cao, tăng thêm cảm giác sang trọng và cầm chắc chắn trong tay.\r\nSử dụng được nhiều loại cáp sạc như: Micro, Type-C, Lightning.\r\nTương thích hầu hết điện thoại, máy tính bảng trên thị trường.\r\nThương hiệu Sony đến từ Nhật Bản, nổi tiếng toàn cầu trong lĩnh vực công nghệ, điện tử.', 0, '2020-11-20 13:03:59'),
(17, 'Pin sạc dự phòng 7500mAh AVA DS630\r\n', 2, 4, 699000, 'pin-sac-du-phong-7500mah-ava-ds630-ava-600x600.jpg', 'Thiết kế đơn giản, cứng cáp.\r\nSử dụng lõi pin Li-Ion an toàn.\r\nNguồn ra 2 cổng USB 5V - 2.1A.\r\nDung lượng 7500 mAh cho hiệu suất sạc 64%.\r\nSạc được cho mọi điện thoại và máy tính bảng tương thích.', 0, '2020-11-20 13:03:59'),
(18, 'Phụ kiện › Pin sạc dự phòng › Pin sạc dự phòng Xmobile\r\nPin sạc dự phòng Polymer 15.000mAh Type C PD QC3.0 Xmobile PowerBox P72D Xanh', 3, 4, 6590000, 'sac-du-phong-polymer-15000mah-type-c-xmobile-p72d-600x600.jpg', 'Thiết kế hiện đại, chất liệu Fabric bao phủ giúp chống bám vân tay, hạn chế trầy xước hiệu quả.\r\nHỗ trợ 3 cổng ra (output) Type C Power Delivery và USB Quick Charge 3.0 giúp sạc nhanh, an toàn với nhiều thiết bị.\r\n2 cổng vào (input) Micro USB và Type C giúp cho việc lựa chọn cáp sạc dễ dàng hơn.\r\nLõi pin Polymer độ bền cao, dung lượng lớn 15.000 mAh.\r\nSạc nhanh cho nhiều loại điện thoại và máy tính bảng.', 0, '2020-11-20 13:08:35'),
(19, 'Pin sạc dự phòng Polymer 10.000mAh Type C PD QC3.0 Xmobile PowerSlim PJ JP213', 4, 4, 859000, 'sac-du-phong-10000mah-type-c-powerslim-jp213-600x600.jpg', 'Thiết kế nhỏ gọn, với 2 màu xanh Navy và xanh rêu cho bạn lựa chọn.\r\nDung lượng pin lớn 10.000 mAh, lõi pin Polymer an toàn.\r\nCổng Type C trang bị công nghệ sạc nhanh Power Delivery cho cả nguồn ra và nguồn vào.\r\nCổng USB tích hợp công nghệ sạc nhanh Quick Charge 3.0.\r\nTương thích với nhiều loại điện thoại và máy tính bảng.', 0, '2020-11-20 13:08:35'),
(20, 'Pin sạc dự phòng Polymer 10.000mAh Xiaomi Redmi Type C VXN4286GL Trắng', 5, 4, 1590000, 'pin-sac-du-phong-10000mah-xiaomi-redmi-type-c-1-600x600.jpg', 'Màu trắng thanh nhã, kích thước nhỏ gọn dễ mang theo bên người.\r\nSử dụng an toàn và lâu bền với lõi pin Polymer (Li-Po) có tuổi thọ cao.\r\nHiệu suất sạc 55% trên dung lượng 10.000 mAh.\r\nThiết kế cổng sạc đầu vào và ra hợp lý, sạc được 2 thiết bị cùng lúc.\r\nSạc các thiết bị nhỏ như đồng hồ thông minh, tai nghe bluetooth bằng chế độ sạc nhỏ giọt.\r\nBảo vệ quá dòng, quá tải với chip mạch cao cấp.', 0, '2020-11-20 13:10:00'),
(21, 'MSI Gaming GL65 Leopard 10SDK i7 10750H/144Hz (242VN)', 1, 5, 33990000, 'msi-gaming-leopard-10sdr-gl65-i7-242vn-225857-400x400.jpg', 'Màn hình: 15.6 inch, Full HD (1920 x 1080), 144Hz\r\nCPU: Intel Core i7 Comet Lake, 2.60 GHz\r\nĐồ họa: NVIDIA GeForce GTX 1660Ti, 6GB\r\nWindows 10 Home SL', 0, '2020-11-20 13:13:27'),
(22, 'Asus VivoBook A512FA i3 10110U (EJ2033T)', 2, 5, 13999000, 'asus-vivobook-a512fa-i3-10110u-ej2033t-226254-400x400.jpg', 'Màn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCPU: Intel Core i3 Comet Lake, 2.10 GHz\r\nĐồ họa: Intel UHD Graphics\r\nWindows 10 Home SL\r\n1.676 kg, Pin: Li-Ion 2 cell', 0, '2020-11-20 13:13:27'),
(23, 'Apple MacBook Pro Touch 2020', 3, 5, 45990000, 'apple-macbook-pro-touch-2020-i5-mwp72sa-a-221914-400x400.jpg', '\r\nMàn hình: 13.3 inch, Retina (2560 x 1600)\r\nCPU: Intel Core i5 Thế hệ 10, 2.00 GHz\r\nĐồ họa: Intel Iris Plus Graphics\r\nMac OS\r\n1.4 kg, Pin: Khoảng 10 giờ', 1, '2020-11-20 13:17:55'),
(24, 'Lenovo IdeaPad Slim 5 15IIL05 i3 1005G1 (81YK004TVN)', 4, 5, 15999000, 'lenovo-ideapad-5-15iil05-i3-81yk004tvn-36-222634-400x400.jpg', 'Màn hình: 15.6 inch, Full HD (1920 x 1080)\r\nCPU: Intel Core i3 Ice Lake, 1.20 GHz\r\nĐồ họa: Intel UHD Graphics\r\nWindows 10 Home SL\r\n1.8 Kg, Pin: Li-Ion 3 cell', 0, '2020-11-20 13:17:55'),
(25, 'Dell XPS 13 9300 i5 1035G1 (70217873)', 5, 5, 17990000, 'dell-xps-13-9300-i5-p117g001-234120-084153-226057-400x400.jpg', '\r\nMàn hình: 13.4 inch, Full HD (1920 x 1080)\r\nCPU: Intel Core i5 Ice Lake, 1.00 GHz\r\nĐồ họa: Intel UHD Graphics\r\nWindows 10 + Office 365 1 năm\r\n1.2 kg, Pin: Li-Ion 4 cell', 1, '2020-11-20 13:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện Thoại'),
(3, 'Loa'),
(4, 'Sạc Dự Phòng'),
(5, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name_user` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `pass_user` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `Role` int(11) DEFAULT NULL,
  PRIMARY KEY (`name_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name_user`, `pass_user`, `Role`) VALUES
('danghoawe', '6c0f42c970217fccc7b36a95abfe5e79', 1),
('user1', 'ee11cbb19052e40b07aac0ca060c23ee', 1),
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('hoahoa', '4f398ba6c0ea54cf8506758a101d2c53', 1),
('kecodoc', '6c0f42c970217fccc7b36a95abfe5e79', 2),
('kecodocma', 'kecodocma', 2),
('ditme', 'ditme', 2),
('concac', 'e39e5bb105200ec6eeaa24aace376ca7', 2),
('ditmemay', 'c1783f3ad0e73a0accdeacac4158a6d5', 2),
('ditmemayconcho', '54ecf7ad52ee0190fde197391c6f5fa3', 2),
('concacmay', '54ecf7ad52ee0190fde197391c6f5fa3', 2),
('chamay', 'dc660971a3ef97f83cc0a478ad01b264', 2),
('ditmemayconchoconcac', 'e39e5bb105200ec6eeaa24aace376ca7', 2),
('CCCCCC', 'cba81d13b8fe4dc120a844ff5fb37321', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
