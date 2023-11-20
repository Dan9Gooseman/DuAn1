-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2023 at 04:02 AM
-- Server version: 5.7.25
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bienthesanpham`
--

CREATE TABLE `bienthesanpham` (
  `btsp_id` int(11) NOT NULL,
  `btsp_ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `btsp_giatien` int(10) NOT NULL,
  `btsp_soluongconlai` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `dm_id` int(11) NOT NULL,
  `th_id` int(11) NOT NULL,
  `dt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bienthesanpham`
--

INSERT INTO `bienthesanpham` (`btsp_id`, `btsp_ten`, `btsp_giatien`, `btsp_soluongconlai`, `sp_id`, `dm_id`, `th_id`, `dt_id`) VALUES
(1, 'DẦU GỘI NƯỚC HOA X-MEN METAL A', 154000, 100, 1, 1, 1, 1),
(2, 'DẦU GỘI NƯỚC HOA X-MEN METAL B', 220000, 67, 1, 1, 1, 2),
(3, 'DẦU GỘI NƯỚC HOA X-MEN METAL C', 534000, 34, 1, 1, 1, 3),
(11, 'DẦU GỘI NƯỚC HOA X-MEN FIRE A', 158000, 112, 2, 1, 1, 1),
(12, 'DẦU GỘI NƯỚC HOA X-MEN FIRE B', 240000, 84, 2, 1, 1, 2),
(13, 'DẦU GỘI NƯỚC HOA X-MEN FIRE C', 540000, 12, 2, 1, 1, 3),
(14, 'DẦU GỘI NƯỚC HOA X-MEN WOOD A', 158000, 89, 3, 1, 1, 1),
(15, 'DẦU GỘI NƯỚC HOA X-MEN WOOD B', 240000, 99, 3, 1, 1, 2),
(16, 'DẦU GỘI NƯỚC HOA X-MEN WOOD C', 520000, 41, 3, 1, 1, 3),
(17, 'DẦU GỘI NƯỚC HOA X-MEN WATER A', 154000, 123, 4, 1, 1, 1),
(18, 'DẦU GỘI NƯỚC HOA X-MEN WATER B', 220000, 79, 4, 1, 1, 2),
(19, 'DẦU GỘI NƯỚC HOA X-MEN WATER C', 510000, 8, 4, 1, 1, 3),
(20, 'ROMANO FORCE A', 134000, 98, 5, 1, 2, 1),
(21, 'ROMANO FORCE B', 214000, 55, 5, 1, 2, 2),
(22, 'ROMANO FORCE C', 516000, 10, 5, 1, 1, 3),
(23, 'ROMANO ATTITUDE A', 122000, 177, 6, 1, 2, 1),
(24, 'ROMANO ATTITUDE B', 247000, 88, 6, 1, 2, 2),
(25, 'ROMANO ATTITUDE C', 560000, 56, 6, 1, 2, 3),
(26, 'ROMANO CLASSIC A', 171000, 143, 7, 1, 2, 1),
(27, 'ROMANO CLASSIC B', 288000, 123, 7, 1, 2, 2),
(28, 'ROMANO CLASSIC C', 598000, 45, 7, 1, 2, 3),
(29, 'ROMANO VIP A', 174000, 131, 8, 1, 2, 1),
(30, 'ROMANO VIP B', 294000, 9, 8, 1, 2, 2),
(31, 'ROMANO VIP C', 611000, 23, 8, 1, 2, 3),
(32, 'Dầu Hấp Dưỡng Ẩm Sâu IntenseHydrating Mask A', 650000, 56, 9, 3, 4, 1),
(33, 'Dầu Hấp Dưỡng Ẩm Sâu IntenseHydrating Mask B', 999000, 8, 9, 3, 4, 2),
(34, 'Dầu Hấp Dưỡng Ẩm Sâu IntenseHydrating Mask C', 1800000, 4, 9, 3, 4, 3),
(35, 'Dầu Dưỡng Tóc Nguyên Bản Moroccanoil Treatment Original A', 640000, 54, 10, 3, 4, 1),
(36, 'Dầu Dưỡng Tóc Nguyên Bản Moroccanoil Treatment Original B', 980000, 55, 10, 3, 4, 2),
(37, 'Dầu Dưỡng Tóc Nguyên Bản Moroccanoil Treatment Original C', 1840000, 12, 10, 3, 4, 3),
(38, 'Kem Tạo Kiểu Dưỡng Ẩm Hydrating Styling Cream A', 670000, 100, 11, 3, 4, 1),
(39, 'Kem Tạo Kiểu Dưỡng Ẩm Hydrating Styling Cream B', 999000, 79, 11, 3, 4, 2),
(40, 'Kem Tạo Kiểu Dưỡng Ẩm Hydrating Styling Cream C', 1840000, 8, 11, 3, 4, 3),
(41, 'Dầu gội Bain Densité  A', 720000, 65, 12, 1, 3, 1),
(42, 'Dầu gội Bain Densité  B', 1350000, 42, 12, 1, 3, 2),
(43, 'Dầu gội Bain Densité  C', 2100000, 4, 12, 1, 3, 3),
(44, 'Dầu gội Bain Fluidealiste A', 650000, 51, 13, 1, 3, 1),
(45, 'Dầu gội Bain Fluidealiste B', 1550000, 55, 13, 1, 3, 2),
(46, 'Dầu gội Bain Fluidealiste C', 2200000, 2, 13, 1, 3, 3),
(47, 'Dầu gội Bain Lumiere A', 950000, 23, 14, 1, 3, 1),
(48, 'Dầu gội Bain Lumiere B', 1900000, 5, 14, 1, 3, 2),
(49, 'Dầu gội Bain Lumiere C', 3600000, 7, 14, 1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `bl_id` int(11) NOT NULL,
  `bl_noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bl_ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `btsp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `dm_id` int(11) NOT NULL,
  `dm_danhmuc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`dm_id`, `dm_danhmuc`) VALUES
(1, 'Dầu gội'),
(2, 'Dầu xả'),
(3, 'Dầu dưỡng'),
(4, 'Kem dưỡng tóc');

-- --------------------------------------------------------

--
-- Table structure for table `diachinhanhang`
--

CREATE TABLE `diachinhanhang` (
  `dcnh_id` int(11) NOT NULL,
  `dcnh_diachi` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `dcnh_sdt` varchar(11) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `dcnh_hovaten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `dh_id` int(11) NOT NULL,
  `dh_ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dh_tongtien` double(10,2) NOT NULL,
  `dh_trangthaidonhang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang xử lý',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `dhct_id` int(11) NOT NULL,
  `btsp_id` int(11) NOT NULL,
  `dhct_soluong` int(11) NOT NULL,
  `dhct_thanhtoan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'COD',
  `dhct_giaohang` varchar(50) NOT NULL DEFAULT 'Đang giao',
  `dh_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dungtich`
--

CREATE TABLE `dungtich` (
  `dt_id` int(11) NOT NULL,
  `dt_dungtich` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dungtich`
--

INSERT INTO `dungtich` (`dt_id`, `dt_dungtich`) VALUES
(1, '330ml'),
(2, '500ml'),
(3, '1000ml');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` int(11) NOT NULL,
  `sp_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sp_mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sp_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sp_luotxem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `sp_ten`, `sp_mota`, `sp_img`, `sp_luotxem`) VALUES
(1, 'DẦU GỘI NƯỚC HOA X-MEN METAL', '•	Dầu gội đặc biệt với bộ đôi sức mạnh:\r\no	Công thức MENZ (ZPTO + Vitamin E + Methol), giúp dưỡng gia đầu, sạch sảng khoái &amp; đánh bay gàu.\r\no	Công thức MENZ (ZPTO + Vitamin E + Methol), giúp dưỡng gia đầu, sạch sảng khoái &amp; đánh bay gàu.\r\no	Khối lượng: 380g/ 650g/ 900g\r\n', 'Xmen_Metal.jpg', 124),
(2, 'DẦU GỘI NƯỚC HOA X-MEN FIRE', '•	Dầu gội nam đặc Sạch sâu gấp biệt với bộ đôi sức mạnh:\r\no	Sạch sâu gấp 2 lần với chiết xuất trà xanh, giúp đánh bay dầu nhờn, bụi bẩn & ngứa làm sạch tối đa tóc & da đầu.\r\no	Mùi hương nam tính mạnh mẽ, lưu hương suốt cả ngày.\r\no	Khối lượng: 380g/ 650g\r\n', 'Xmen_Fire.jpg', 101),
(3, 'DẦU GỘI NƯỚC HOA X-MEN WOOD', '•	Dầu gội nam đặc Sạch sâu gấp biệt với bộ đôi sức mạnh:\r\no	Sạch sâu gấp 2 lần với chiết xuất trà xanh, giúp đánh bay dầu nhờn, bụi bẩn & ngứa làm sạch tối đa tóc & da đầu.\r\no	Mùi hương nam tính mạnh mẽ, lưu hương suốt cả ngày.\r\no	Khối lượng: 380g/ 650g\r\n', 'Xmen_Wood.jpg', 98),
(4, 'DẦU GỘI NƯỚC HOA X-MEN WATER', '•	Dầu gội nam đặc Sạch sâu gấp biệt với bộ đôi sức mạnh:\r\no	Sạch sâu gấp 2 lần với chiết xuất trà xanh, giúp đánh bay dầu nhờn, bụi bẩn & ngứa làm sạch tối đa tóc & da đầu.\r\no	Mùi hương nam tính mạnh mẽ, lưu hương suốt cả ngày.\r\no	Khối lượng: 380g/ 650g\r\n', 'Xmen_Water.jpg', 121),
(5, 'ROMANO FORCE', 'o	Với dầu gội Romano, tóc chắc khoẻ nhờPro Vitamin B5 và da đầu sạch sảng khoái. Đặc biệt, sự hoà quyện tinh tế của hoa Phong lữ và Cedarwood tạo nên hương nước hoa Force tươi mát, mang đến cho nam giới sự năng động, trẻ trung.', 'shampoo-xanh.png', 88),
(6, 'ROMANO ATTITUDE', 'o	Dầu gội Romano cho da đầu sạch và tóc chắc khoẻ tự nhiên nhờ dưỡng chất từ Pro Vitamin B5. Với nốt hương nồng ấm của Guaiac wood và Hổ Phách trầm ngọt, dầu gội Romano Attitude mang đến dấu ấn quyến rũ cho người đàn ông lịch lãm, phong cách.', 'shampoo-do123.png', 142),
(7, 'ROMANO CLASSIC', 'o	Dầu gội Romano với Pro Vitamin B5 cho tóc chắc khoẻ và da đầu sạch, đầy sức sống. Đặc biệt lấy cảm hứng từ phong cách Ý, hương nước hoa Classic với Patchouli tươi mát và Sandalwood nồng ấm khẳng định sự thành công của người đàn ông lịch lãm.                ', 'shampoo-xanhla.png', 132),
(8, 'ROMANO VIP', 'o	Dầu gội cao cấp Romano VIP sở hữu hương nước hoa độc đáo, kết hợp công nghệ Platinum với khả năng chống oxi hóa giúp làm sạch sâu bụi bẩn, giảm nhờn ngứa trên tóc và da đầu. Hơn thế nữa, còn ngăn ngừa tóc gãy rụng và giúp tóc chắc khỏe.', 'vip_product-passicon1.png', 45),
(9, 'Dầu Hấp Dưỡng Ẩm Sâu IntenseHydrating Mask', 'Dành cho tóc từ vừa đến khô dày\r\nMặt nạ tóc giúp duy trì độ ẩm, dẻo, độ bóng cho tóc. Sản phẩm được kết hợp với dầu Argan và các chất nuôi dưỡng khác.\r\n', 'Intense Hydrating Mask.png', 76),
(10, 'Dầu Dưỡng Tóc Nguyên Bản Moroccanoil Treatment Original', 'o	Dành cho mọi loại tóc\r\no	Đa năng, dầu Argan kết hợp với dầu tóc để tạo độ mượt, chống rối tóc, dưỡng và tăng độ bóng đến 118%. Đây là loại dầu dưỡng số 1 \r\n', 'Moroccanoil Treatment Original.jpg', 114),
(11, 'Kem Tạo Kiểu Dưỡng Ẩm Hydrating Styling Cream', 'o	Dành cho mọi loại tóc\r\no	A lightweight, multitasking styling cream that tames frizz and flyaways, moisturizes hair, and provides soft hold for smooth, sleek styles.\r\n', 'moroccanoil-hydrating-styling-cream-1.jpg', 78),
(12, 'Dầu gội Bain Densité ', 'o	Bain Densitélà dòng sản phẩm cao cấp đến từ thương hiệu Kérastase nổi tiếng. Với thành phần tự nhiên giúp tóc mọc chắc khỏe hơn và suôn mượt hơn, mang đến sự tự tin cho người dùng.', 'Bain Densit‚.jpg', 98),
(13, 'Dầu gội Bain Fluidealiste', 'o	Dầu gội Bain Fluidealiste là một sản phẩm chăm sóc tóc chuyên sâu, thường được thiết kế đặc biệt để giúp kiểm soát và làm mềm tóc xoăn hoặc tóc uốn. Đây là một phần của dòng sản phẩm Kérastase chuyên về chăm sóc tóc chất lượng cao.\r\no	Bain Fluidealiste thường chứa các thành phần chống ẩm và dưỡng ẩm để giúp kiểm soát tóc, làm mềm mại và giảm độ xoăn hoặc uốn. Các dạng dưỡng tóc trong sản phẩm giúp tăng cường sức khỏe của tóc, đồng thời giảm tình trạng rối và khó quản lý.', 'Bain_Fluidealiste.jpg', 90),
(14, 'Dầu gội Bain Lumiere', 'o	Dầu gội Bain Lumiere là một sản phẩm chăm sóc tóc chuyên sâu, được thiết kế để mang lại sự sáng bóng và nuôi dưỡng cho tóc nhuộm. Dầu gội này thường chứa các thành phần dưỡng ẩm và tái tạo tóc, giúp khôi phục độ mềm mại và giữ cho màu nhuộm trở nên bền lâu.', 'bain-lumiere.jpg', 219);

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `th_id` int(11) NOT NULL,
  `th_thuonghieu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`th_id`, `th_thuonghieu`) VALUES
(1, 'X-Men'),
(2, 'ROMANO'),
(3, 'Kerastase \r\n'),
(4, 'Moroccanoil\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_hovaten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dcnh_id` int(11) DEFAULT NULL,
  `user_vaitro` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'khachhang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_hovaten`, `user_email`, `user_password`, `user_ngaytao`, `dcnh_id`, `user_vaitro`) VALUES
(1, 'Phạm Quang Đăng', 'pqd@gmail.com', '12345', '2023-11-17 09:08:29', NULL, 'admin'),
(2, 'Hoàng Thế Nguyên', 'htn@gmail.com', '12345', '2023-11-17 09:08:50', NULL, 'admin'),
(3, 'Nguyễn Đức Thắng', 'ndt@gmail.com', '12345', '2023-11-17 09:09:10', NULL, 'admin'),
(4, 'khachhang1', 'kh1@gmail.com', '12345', '2023-11-17 09:09:57', NULL, 'khachhang'),
(5, 'khachhang2', 'kh2@gmail.com', '12345', '2023-11-17 09:09:57', NULL, 'khachhang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bienthesanpham`
--
ALTER TABLE `bienthesanpham`
  ADD PRIMARY KEY (`btsp_id`),
  ADD KEY `FK sp` (`sp_id`),
  ADD KEY `FK dm` (`dm_id`),
  ADD KEY `FK th` (`th_id`),
  ADD KEY `FK dt` (`dt_id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `FK user_id` (`user_id`),
  ADD KEY `FK btsp_id` (`btsp_id`) USING BTREE;

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `diachinhanhang`
--
ALTER TABLE `diachinhanhang`
  ADD PRIMARY KEY (`dcnh_id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`dh_id`),
  ADD KEY `FK user_id-dh` (`user_id`);

--
-- Indexes for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`dhct_id`),
  ADD KEY `FK dh-dhct` (`dh_id`),
  ADD KEY `FK btsp-dhct` (`btsp_id`);

--
-- Indexes for table `dungtich`
--
ALTER TABLE `dungtich`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`th_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK dcnh` (`dcnh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bienthesanpham`
--
ALTER TABLE `bienthesanpham`
  MODIFY `btsp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `bl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diachinhanhang`
--
ALTER TABLE `diachinhanhang`
  MODIFY `dcnh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `dh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `dhct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dungtich`
--
ALTER TABLE `dungtich`
  MODIFY `dt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `th_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bienthesanpham`
--
ALTER TABLE `bienthesanpham`
  ADD CONSTRAINT `FK dm` FOREIGN KEY (`dm_id`) REFERENCES `danhmuc` (`dm_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK dt` FOREIGN KEY (`dt_id`) REFERENCES `dungtich` (`dt_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK sp` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK th` FOREIGN KEY (`th_id`) REFERENCES `thuonghieu` (`th_id`) ON DELETE CASCADE;

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK btsp_id` FOREIGN KEY (`btsp_id`) REFERENCES `bienthesanpham` (`btsp_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK user_id-dh` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `FK btsp-dhct` FOREIGN KEY (`btsp_id`) REFERENCES `bienthesanpham` (`btsp_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK dh-dhct` FOREIGN KEY (`dh_id`) REFERENCES `donhang` (`dh_id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK dcnh` FOREIGN KEY (`dcnh_id`) REFERENCES `diachinhanhang` (`dcnh_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
