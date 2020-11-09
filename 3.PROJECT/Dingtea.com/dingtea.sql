-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 05:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dingtea`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) UNSIGNED NOT NULL,
  `district_name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`) VALUES
(1, 'Hoàn Kiếm'),
(2, 'Đống Đa'),
(3, 'Hai Bà Trưng'),
(4, 'Hoài Đức'),
(5, 'Hoàng Mai'),
(6, 'Tây Hồ'),
(7, 'Long Biên'),
(8, 'Nam Từ Liêm'),
(9, 'Ba Đình'),
(10, 'Bắc Từ Liêm'),
(11, 'Thanh Xuân'),
(12, 'Hà Đông'),
(13, 'Gia Lâm'),
(14, 'Cầu Giấy'),
(15, 'Huyện Thường Tín'),
(16, 'Huyện Sóc Sơn'),
(17, 'Huyện Thanh Trì'),
(18, 'Huyện Thạch Thất'),
(19, 'Huyện Chương Mỹ'),
(20, 'Huyện Đan Phượng'),
(21, 'Huyện Sơn Tây');

-- --------------------------------------------------------

--
-- Table structure for table `list_users`
--

CREATE TABLE `list_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_users`
--

INSERT INTO `list_users` (`id`, `fullname`, `username`, `password`, `email`, `phone_number`) VALUES
(12, 'Đoàn Hải Long', 'long14xtnd', '36f1ab2aa1ec24112f542ea22e6e67b8', '1851161680@e.tlu.edu.vn', '0945459338'),
(13, 'Đoàn Hải Long', 'long14xtnd', '36f1ab2aa1ec24112f542ea22e6e67b8', '1851161680@e.tlu.edu.vn', '0945459338');

-- --------------------------------------------------------

--
-- Table structure for table `store_by_district`
--

CREATE TABLE `store_by_district` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_by_district`
--

INSERT INTO `store_by_district` (`id`, `name`, `phone`, `address`, `district`) VALUES
(1, '1 Nhà Chung', 'Số điện thoại: 02466833232', 'Địa chỉ: Số 1 Nhà Chung, Hoàn Kiếm, Hà Nội', 1),
(2, '8B4 Phạm Ngọc Thạch', 'Số điện thoại: 02466886161', 'Địa chỉ: 8B4 Phạm Ngọc Thạch, Đống Đa, Hà Nội', 2),
(3, '50 Láng Hạ', 'Số điện thoại: 02433555000', 'Địa chỉ: 50 Láng Hạ, Ba Đình, Hà Nội', 2),
(4, '53 Thái Thịnh', 'Số điện thoại: 02422416767', 'Địa chỉ: 53 Thái Thịnh, Đống Đa, Hà Nội', 2),
(5, ' 57 Ô Chợ Dừa', 'Số điện thoại: 0967458437\r\n', 'Địa chỉ: 82-84 Ô Chợ Dừa, Đống Đa, Hà Nội', 2),
(6, '23 Lê Đại Hành\r\n\r\n', 'Số điện thoại: 02466553232', 'Địa chỉ: 23 Lê Đại Hành, Hai Bà Trưng, Hà Nội', 3),
(7, '156 Lạc Trung\r\n\r\n', 'Số điện thoại: 02466886628', 'Địa chỉ: 156 Lạc Trung, Hai Bà Trưng, Hà Nội', 3),
(8, '157 Trần Đại Nghĩa\r\n', 'Số điện thoại: 02422123212\r\n', 'Địa chỉ: 157 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội', 3),
(9, ' An Khánh - Thiên Đường Bảo Sơn\r\n', 'Số điện thoại: 02432009618\r\n', 'Địa chỉ: An Khánh - Thiên Đường Bảo Sơn', 4),
(10, 'TT Trạm Trôi - Hoài Đức\r\n', 'Số điện thoại: 02422655959\r\n', 'Địa chỉ: Khu 7 thị trấn trạm trôi - Hoài Đức - Hà Nội', 4),
(11, ' 114 Tân Mai\r\n\r\n', 'Số điện thoại: 02462597048', 'Địa chỉ: 114 Tân Mai, Hoàng Mai, Hà Nội', 5),
(12, 'HH1 Bán Đảo Linh Đàm\r\n\r\n', 'Số điện thoại: 02422693388', 'Địa chỉ: HH1A Bán đảo Linh Đàm, Hà Nội', 5),
(13, '69 Đền Lừ 2, lô 7\r\n\r\n', 'Số điện thoại: 02423216969', 'Địa chỉ: 69 Lô 7, Đền Lừ 2, Hoàng Mai, Hà Nội', 5),
(14, '231 Lĩnh Nam\r\n\r\n', 'Số điện thoại: 02466826388', 'Địa chỉ: 231 lĩnh nam, hoàng mai, hà nội', 5),
(15, '780 Trương Định - Hoàng Mai\r\n\r\n', 'Số điện thoại: 02466534780', 'Địa chỉ: 780 Trương Định, Hoàng Mai, Hà Nội', 5),
(16, '28a Xuân La\r\n\r\n', 'Số điện thoại: 02438812828', 'Địa chỉ: 28A Xuân La, Tây Hồ, Hà Nội', 6),
(17, '03 Âu Cơ\r\n\r\n', 'Số điện thoại: 02423245588', 'Địa chỉ: 3 Âu Cơ, Tây Hồ, Hà Nội', 6),
(18, '109 Thuỵ Khuê\r\n\r\n', 'Số điện thoại: 02466875050', 'Địa chỉ: 109A Thụy Khuê, Tây Hồ, Hà Nội', 6),
(19, '59 Lạc Long Quân\r\n\r\n', 'Số điện thoại: 02422395959', 'Địa chỉ: 59 Lạc Long Quân, Tây Hồ, Hà Nội', 6),
(20, '266 Nguyễn Văn Cừ\r\n\r\n', 'Số điện thoại: 02466864646', 'Địa chỉ: 266 Nguyễn Văn Cừ, Long Biên, Hà Nội', 7),
(21, '355 Ngọc Lâm\r\n\r\n', 'Số điện thoại: 02466753355', 'Địa chỉ: 355 Ngọc Lâm, Long Biên, Hà Nội', 7),
(22, ' 21 Lê Đức Thọ\r\n\r\n\r\n', 'Số điện thoại: 02422402121', 'Địa chỉ: Sun Square 21 Lê Đức Thọ, Nam Từ Liêm, Hà Nội', 8),
(23, '2 Nguyễn Hoàng - Mỹ Đình\r\n\r\n', 'Số điện thoại: 02422469797', 'Địa chỉ: 12 Nguyễn Hoàng, Nam Từ Liêm, Hà Nội', 8),
(24, '15a Đào Tấn\r\n\r\n', 'Số điện thoại: 02466881515', 'Địa chỉ: 15A Đào Tấn, Ba Đình, Hà Nội', 9),
(25, '27 Hàng Than\r\n\r\n', 'Số điện thoại: 02466855266', 'Địa chỉ: 27 Hàng Than, Nguyễn Trung Trực, Ba Đình, Hà Nội', 9),
(26, '9 Thanh Niên\r\n\r\n', 'Số điện thoại: 02463280748', 'Địa chỉ: Số 9 Đ. Thanh Niên, Quán Thánh, Ba Đình, Hà Nội', 9),
(27, '103 Cầu Diễn\r\n\r\n', 'Số điện thoại: 02466880103', 'Địa chỉ: 103 Cầu Diễn, Bắc Từ Liêm, Hà Nội', 10),
(28, '114 Hồ Tùng Mậu\r\n\r\n', 'Số điện thoại: 02466747766', 'Địa chỉ: 114 Hồ Tùng Mậu, Bắc Từ Liêm, Hà Nội', 10),
(29, '4 - 6 Phố Viên\r\n\r\n', 'Số điện thoại: 02466838118', 'Địa chỉ: Số 4-6 Phố Viên, phường Đức Thắng, quận Bắc Từ Liêm, thành phố Hà Nội', 10),
(30, '13 Nguyễn Thái Học - TX Sơn Tây\r\n\r\n', 'Số điện thoại: 02422661313', 'Địa chỉ: 13 Nguyễn Thái Học, Sơn Tây, Hà Nội', 21),
(31, ' 47B Trần Phú - Thường Tín\r\n\r\n', 'Số điện thoại: 0812881393', 'Địa chỉ: 47B Trần Phú, Thường Tín, Hà Nội', 15),
(32, '279 Ngô Xuân Quảng - ĐHNN ( Hoạt động BT (giới hạn khách ngồi tại cửa hàng) )\r\n\r\n', 'Số điện thoại: 02423477979', 'Địa chỉ: 275 Ngô Xuân Quảng, Long Biên, Hà Nội', 13),
(33, ' Ninh Hiệp - Chợ Baza\r\n\r\n', 'Số điện thoại: 0386543118', 'Địa chỉ: Kiot 2 tầng, Chợ Baza, Ninh Hiệp', 13),
(34, 'Ngã 3 Đường Ngọc Hồi\r\n\r\n', 'Số điện thoại: 02422132233', 'Địa chỉ: Ngã ba Ngọc Hồi, Thanh Trì, Hà Nội', 17),
(35, '43 Phan Đình Phùng - TT Phùng\r\n', 'Số điện thoại: 02422661515', '\r\nĐịa chỉ: 43 Phan Đình Phùng , thị trấn Phùng , huyện Đan Phượng, Hà Nội', 20),
(36, '12 Núi Đôi - TT Sóc Sơn\r\n\r\n', 'Số điện thoại: 02422404142', 'Địa chỉ: 12 Núi Đôi, Sóc Sơn, Hà Nội', 16),
(37, 'TT Chúc Sơn - Chương Mỹ\r\n\r\n', 'Số điện thoại: 02439105666', 'Địa chỉ: Xóm nội, thị trấn Chúc Sơn, huyện Chương Mỹ, Hà Nội', 19),
(38, 'TT Xuân Mai, Chương Mỹ\r\n\r\n', 'Số điện thoại: 0969105105', 'Địa chỉ: 65A Tổ 3 Tân Xuân, Thị Trấn Xuân Mai, Huyện Chương Mỹ, Hà Nội', 19),
(39, ' 86 Lê Trọng Tấn\r\n', 'Số điện thoại: 02466532036', '\r\nĐịa chỉ: 86 Lê Trọng Tấn, Thanh Xuân , Hà Nội', 11),
(40, '2-R4-MB Royal City\r\n\r\n', 'Số điện thoại: 02422123939', 'Địa chỉ: B2-R4-10B TTTM Royal City', 11),
(41, 'Nguyễn Văn Huyên\r\n\r\n', 'Số điện thoại: 02436783388', 'Địa chỉ: Ngã 4 Hoàng Quốc Việt, Nguyễn Văn Huyên,Cầu Giấy, Hà Nội', 14),
(42, '90 Trần Duy Hưng\r\n\r\n', 'Số điện thoại: 02466752752', 'Địa chỉ: 90 Trần Duy Hưng, Cầu Giấy, Hà Nội', 14),
(43, '100 Trung Kính\r\n\r\n\r\n', 'Số điện thoại: 02466817161', 'Địa chỉ: 100 Trung Kính, Cầu Giấy, Hà Nội', 14),
(44, '439 Hoàng Quốc Việt\r\n\r\n', 'Số điện thoại: 02466704455', 'Địa chỉ: 439 Hoàng Quốc Việt, Cầu Giấy, Hà Nội', 14),
(45, '54 Duy Tân\r\n\r\n', 'Số điện thoại: 024 2210 2525', 'Địa chỉ: 54 Phố Duy Tân, Dịch Vọng Hậu, Cầu Giấy, Hà Nội', 14),
(46, 'BigC Trần Duy Hưng\r\n\r\n', 'Số điện thoại: 02473081388', 'Địa chỉ: tầng 1 Big C Thăng Long, Cầu Giấy, Hà Nội', 14),
(47, '80 Nguyễn Khuyến - Hà Đông\r\n\r\n', 'Số điện thoại: 0866880200', 'Địa chỉ: Số 80 Nguyễn Khuyến, Văn Quán, Hà Đông, Hà Nội', 12),
(48, 'Kiot 02+03 tòa CT4A Xa La\r\n\r\n', 'Số điện thoại: 02439059888', 'Địa chỉ: kiot 02+03 tòa CT4A, khu đô thị Xa La, Hà Đông, Hà Nội', 12),
(49, '185 Quang Trung, Hà Đông\r\n\r\n', 'Số điện thoại: 02466625185', 'Địa chỉ: 185 Quang Trung, Hà Đông, Hà Nội', 12),
(50, 'Ding Tea Hữu Bằng\r\n\r\n', 'Số điện thoại: 0836672672', 'Địa chỉ: Trạm điện 5 đường Liên xã - xã Hữu Bằng - huyện Thạch Thất - Hà Nội', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_users`
--
ALTER TABLE `list_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_by_district`
--
ALTER TABLE `store_by_district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district` (`district`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `list_users`
--
ALTER TABLE `list_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `store_by_district`
--
ALTER TABLE `store_by_district`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `store_by_district`
--
ALTER TABLE `store_by_district`
  ADD CONSTRAINT `store_by_district_ibfk_1` FOREIGN KEY (`district`) REFERENCES `district` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
