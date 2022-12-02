--
-- Table structure fore table `users`
--
CREATE TABLE `users` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`firstname` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`lastname` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`username` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL UNIQUE,
`email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`phone_number` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`address` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`ward_id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`district_id` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`role` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- ---------------------------------------------------------

--
-- Table structure for table `category`
--
CREATE TABLE `category` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `products`
--
CREATE TABLE `products` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`category_id` int NOT NULL,
`name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`code` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`image_url` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`discount` float(4,1),
`price` int(12) NOT NULL,
`author` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`translator` varchar(100) COLLATE utf8mb4_vietnamese_ci,
`page_num` int NOT NULL,
`cover` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`dimension` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`weight` int NOT NULL,
`publisher` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`publication_year` varchar(4) NOT NULL,
`rating_id` int NOT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--
CREATE TABLE `ratings` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `rating-details`
--
CREATE TABLE `rating-details` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`rating_id` int NOT NULL,
`user_id` int NOT NULL,
`content` varchar(10000) NOT NULL,
`rate_star` int NOT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
CREATE TABLE `orders` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`user_id` int NOT NULL,
`discount` int,
`invoice` int(12) NOT NULL,
`status` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `order-items`
--
CREATE TABLE `order-items` (
`id`int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`order_id` int NOT NULL,
`product_id` int NOT NULL,
`quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `carts`
--
CREATE TABLE `carts` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`user_id` int NOT NULL,
`status` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `cart-items`
--
CREATE TABLE `cart-items` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`cart_id` int NOT NULL,
`product_id` int NOT NULL,
`quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Add Foreign Key for table `products`
--
ALTER TABLE `products`
ADD FOREIGN KEY (`category_id`) REFERENCES `category`(`id`);
-- -------------------------------------------------------- 

--
-- Add Foreign Key for table `ratings`
--
ALTER TABLE `ratings`
ADD FOREIGN KEY (`product_id`) REFERENCES `products`(`id`);
-- -------------------------------------------------------- 

--
-- Add Foreign Key for table `rating-details`
--
ALTER TABLE `rating-details`
ADD FOREIGN KEY (`rating_id`) REFERENCES `ratings`(`id`),
ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);
-- -------------------------------------------------------- 

--
-- Add Foreign Key for table `orders`
--
ALTER TABLE `orders`
ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);
-- -------------------------------------------------------- 

--
-- Add Foreign Key for table `order-items`
--
ALTER TABLE `order-items`
ADD FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`),
ADD FOREIGN KEY (`product_id`) REFERENCES `products`(`id`);
-- -------------------------------------------------------- 

--
-- Add Foreign Key for table `carts`
--
ALTER TABLE `carts`
ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);
-- -------------------------------------------------------- 

--
-- Add Foreign Key for table `cart-items`
--
ALTER TABLE `cart-items`
ADD FOREIGN KEY (`cart_id`) REFERENCES `carts`(`id`),
ADD FOREIGN KEY (`product_id`) REFERENCES `products`(`id`);
-- -------------------------------------------------------- 

--
-- Add Data for table `users` password: 123456
--
INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `phone_number`, `password`, `address`, `ward_id`, `district_id`, `role`, `created_at`, `updated_at`) 
VALUES (NULL, 'Ngô Công', 'Hiệp', 'hiepngo', 'hiep.ngo1609@hcmut.edu.vn', '0937705040', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '218 Ly Thuong Kiet', 'Phuong 5', 'Quan 10', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Trần Bảo', 'Bảo', 'baobao', 'baobao@gmail.com', '0914672893', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '21 Hoang Van Thu', 'Phuong 2', 'Quan Tan Binh', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Nguyễn Văn', 'Linh', 'vanlinh', 'baobao@gmail.com', '0910626513', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '215 Pham Van Hai', 'Phuong 8', 'Quan Tan Binh', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'admin', 'admin', 'admin', 'admin@gmail.com', '0937705040', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '218 Ly Thuong Kiet', 'Phuong 5', 'Quan 10', 'admin', current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 

--
-- Add Data for table `category`
--
INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) 
VALUES (NULL, 'VĂN HỌC', current_timestamp(), current_timestamp()), 
(NULL, 'KINH TẾ', current_timestamp(), current_timestamp()), 
(NULL, 'TÂM LÝ - KỸ NĂNG SỐNG', current_timestamp(), current_timestamp()), 
(NULL, 'NUÔI DẠY CON', current_timestamp(), current_timestamp()), 
(NULL, 'SÁCH THIẾU NHI', current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 

--
-- Add Data for table `products`
--
INSERT INTO `products` (`id`,`category_id`,`name`,`code`,`image_url`,`discount`,`price`,`author`,`translator`,`page_num`,`cover`,`dimension`,`weight`,`publisher`,`publication_year`,`created_at`,`updated_at`) 
VALUES (NULL, 1, 'Cho Tôi Xin Một Vé Đi Tuổi Thơ', '8934974159087', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_1233.jpg', 0.0, 80000, 'Nguyễn Nhật Ánh', '', 208, 'Bìa Mềm', '13 x 20', 220, 'NXB Trẻ', '2018', current_timestamp(), current_timestamp()),
(NULL, 3, 'Đọc Vị Bất Kỳ Ai', '8935280904262', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_12542.jpg', 32.0, 79000, 'TS David J Lieberman', '', 223, 'Bìa Mềm', '13 x 20.5', 250, 'NXB Lao Động', '2019', current_timestamp(), current_timestamp()),
(NULL, 2, 'Bí Mật Tư Duy Triệu Phú', '8935086854624', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_188995_1_1.jpg', 0.0, 108000, 'T Harv Eker', '', 287, 'Bìa Mềm', '20.5 x 14.5', 300, 'NXB Tổng Hợp TP.HCM', '2021', current_timestamp(), current_timestamp()),
(NULL, 4, 'Phương Pháp Giáo Dục Con Của Người Do Thái', '8936067605211', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936067605211.jpg', 40.0, 85000, 'Hà Minh', '', 244, 'Bìa Mềm', '20.5 x 15', 300, 'NXB Phụ Nữ Việt Nam', '2022', current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 

--
-- Add Data for table `ratings`
--
INSERT INTO `ratings` (`id`,`product_id`)
VALUES (NULL, 1);
-- -------------------------------------------------------- 

--
-- Add Data for table `rating-details`
--
INSERT INTO `rating-details` (`id`,`rating_id`,`user_id`,`content`,`rate_star`,`created_at`)
VALUES (NULL, 1, 1, 'REVIEW ngắn gọn “Cho tôi xin một vé đi tuổi thơ” Câu chuyện đáng yêu này kể về bộ tứ cu Mùi, Hải cò, Tí sún và Tủn. Những đứa trẻ ngây thơ hồn nhiên lên dự án để nuôi chó kiếm tiền, đặt tên cho thế giới, gọi nhau bằng những thứ khác,... Câu chuyện đã thực sự mang tôi về với tuổi thơ. Những câu hỏi mà tôi cũng như những đứa trẻ khác luôn đặt ra rằng “Tại sao mọi người lại gọi đàn ông là đàn ông mà không phải là đàn bà?” hay “Tại sao bố mẹ lại gọi là bố mẹ mà không phải ông bà?” vân vân và mây mây... đều được nói đến trong cuốn truyện. “Tôi viết cuốn sách này không phải cho trẻ con mà tôi viết cho những ai từng là trẻ con” Bìa sách mới tái bản rất đẹp, giản dị nhưng bắt mắt.', 5, current_timestamp()),
(NULL, 1, 2, 'Nguyễn Nhật Ánh viết nhiều về tuổi thơ, về tình cảm tuổi học trò, và về những nuối tiếc của con người về những năm tháng áo trắng . Có lẽ tôi sẽ không bao giờ quên cuốn sách đầu tiên đưa tôi về thế giới của tuổi ô mai này :" cho tôi xin một vé đi tuổi thơ " .', 3, current_timestamp());
-- -------------------------------------------------------- 

--
-- Add Data for table `orders`
--
INSERT INTO `orders` (`id`,`user_id`,`discount`,`invoice`,`status`,`created_at`,`updated_at`) 
VALUES (NULL, 2, '', 249000, 'Processing', current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 

--
-- Add Data for table `order-items`
--
INSERT INTO `order-items` (`id`,`order_id`,`product_id`,`quantity`) 
VALUES (NULL, 1, 4, 2),
(NULL, 1, 2, 1);
-- -------------------------------------------------------- 

--
-- Add Data for table `carts` - status: "Empty", "Occupied"
--
INSERT INTO `carts` (`id`,`user_id`,`status`,`created_at`,`updated_at`) 
VALUES (NULL, 1, 'Occupied', current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 

--
-- Add Data for table `cart-items`
--
INSERT INTO `cart-items` (`id`,`cart_id`,`product_id`,`quantity`) 
VALUES (NULL, 1, 2, 1);
-- -------------------------------------------------------- 