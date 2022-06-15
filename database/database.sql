
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'Tour Trong Nước'),
(2, 'Tour Nước Ngoài');
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `FeedBack`
--

CREATE TABLE `FeedBack` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



--
-- Cấu trúc bảng cho bảng `Orders`
--

CREATE TABLE `Orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_khoi_hanh` date DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Cấu trúc bảng cho bảng `Order_Details`
--

CREATE TABLE `Order_Details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Cấu trúc bảng cho bảng `Product`
--

CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Product`
--

INSERT INTO `Product` (`id`, `category_id`, `title`, `price`, `discount`, `thumbnail`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(1,1, 'Tour Du Lịch SaPa', '1200000', '1000000', 'assets/photos/sa_pa.jpg', 'Nội Dung 1', '2021-11-09 02:45:24', '2021-11-09 02:45:24', 0),
(2,1, 'Tour du Lịch Hà Giang', '1560000', '1500000', 'assets/photos/hagiang4.jpg', 'Nội Dung 2', '2021-11-09 03:15:12', '2021-11-09 03:15:12', 0),
(3,1, 'Thám Hiểm Hang Sơn Đòn', '2000000', '1890000', 'assets/photos/son-dong.jpg', 'Nội Dung 3', '2021-11-09 03:07:11', '2021-11-09 03:07:11', 0),
(4,1, 'Du Lịch Nha Trang', '2300000', '2200000', 'assets/photos/nha_trang.jpg', 'Nội Dung 4', '2021-11-09 02:41:39', '2021-11-09 02:41:39', 0),
(5,1, 'Du Lịch Hội An Với Nhiều Hấp Dẫn Bất Ngờ', '3000000', '2900000', 'assets/photos/hoi_an.jpg', 'Nội Dung 5', '2021-11-09 02:51:45', '2021-11-09 02:51:45', 0),
(6,2, 'Nhật Bản(Tokyo - Hakone - Fuji – Odaiba)', '15000000', '14590000', 'assets/photos/nhat2.jpg', 'Nội Dung 6', '2021-11-09 02:45:58', '2021-11-09 02:45:58', 0),
(7,2, 'Khám Phá Đất Nước Thuỵ Sĩ', '22000000', '21690000', 'assets/photos/thuysi3.jpg', 'Nội Dung 7', '2021-11-09 03:55:03', '2021-11-09 03:55:03', 0),
(8,2, 'Mỹ(Los Angeles - Las Vegas - San Diego)', '43000000', '42390000', 'assets/photos/my1.jpg', 'Nội Dung 8', '2021-11-09 02:03:57', '2021-11-09 02:03:57', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Role`
--

INSERT INTO `Role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Tokens`
--

CREATE TABLE `Tokens` (
  `user_id` int(11) NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Tokens`
--

INSERT INTO `Tokens` (`user_id`, `token`, `created_at`) VALUES
(1, '7b887b1e751b6839105033c9f7bdf48c', '2021-10-19 17:03:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `User`
--
INSERT INTO `User` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'GUYs Team', 'guysteam@gmail.com', '0908070605', 'hà nội', 'b4cbd48886a5331c5eb2fedadabe311c', 1, '2021-11-11 11:10:48', '2021-11-11 11:11:37',0);


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `FeedBack`
--
ALTER TABLE `FeedBack`
  ADD PRIMARY KEY (`id`);


--
-- Chỉ mục cho bảng `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `Order_Details`
--
ALTER TABLE `Order_Details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Tokens`
--
ALTER TABLE `Tokens`
  ADD PRIMARY KEY (`user_id`,`token`);

--
-- Chỉ mục cho bảng `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `FeedBack`
--
ALTER TABLE `FeedBack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


--
-- AUTO_INCREMENT cho bảng `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT cho bảng `Order_Details`
--
ALTER TABLE `Order_Details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT cho bảng `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `Role`
--
ALTER TABLE `Role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);

--
-- Các ràng buộc cho bảng `Order_Details`
--
ALTER TABLE `Order_Details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `Orders` (`id`);

--
-- Các ràng buộc cho bảng `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`);

--
-- Các ràng buộc cho bảng `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `Role` (`id`);
COMMIT;
