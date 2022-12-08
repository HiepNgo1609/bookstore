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
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--
CREATE TABLE `ratings` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`product_id` int NOT NULL,
`user_id` int NOT NULL,
`rate_star` int NOT NULL,
`content` longtext NOT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
CREATE TABLE `orders` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`code` varchar(50) NOT NULL,
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
`product_id` int NOT NULL,
`quantity` int NOT NULL,
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
ADD FOREIGN KEY (`product_id`) REFERENCES `products`(`id`),
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
ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
ADD FOREIGN KEY (`product_id`) REFERENCES `products`(`id`);
-- -------------------------------------------------------- 

--
-- Add Data for table `users` password: 123456
--
INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `phone_number`, `password`, `address`, `role`, `created_at`, `updated_at`) 
VALUES (NULL, 'Ngô Công', 'Hiệp', 'hiepngo', 'hiep.ngo1609@hcmut.edu.vn', '0937705040', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '218 Ly Thuong Kiet, Phuong 5, Quan 10', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Trần Bảo', 'Bảo', 'baobao', 'baobao@gmail.com', '0914672893', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '21 Hoang Van Thu, Phuong 2, Quan Tan Binh', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Nguyễn Văn', 'Linh', 'vanlinh', 'baobao@gmail.com', '0910626513', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '215 Pham Van Hai, Phuong 8, Quan Tan Binh', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Võ Thành', 'Long', 'longvo', 'longvo@gmail.com', '0926147328', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '1215 Au Co, Phuong 8, Quan Tan Phu', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Nguyễn Quốc', 'Huy', 'huyquoc', 'huyquoc@gmail.com', '0910674313', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '8 3/2, Phuong 3, Quan 10', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Nguyễn Thị', 'Hoa', 'hoathi', 'hoathi@gmail.com', '0922627613', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '1 Nguyen Dinh Chieu, Phuong 3, Quan 1', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Nguyễn Thái', 'Giang', 'giangnguyen', 'giangnguyen@gmail.com', '0910112813', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '4 Khanh Hoi, Phuong 2, Quan 4', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Nguyễn Thành', 'Lợi', 'loinguyen', 'loinguyen@gmail.com', '0919926012', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '1 Nguyen Thi Thap, Phuong 5, Quan 7', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Trần Văn', 'Toàn', 'toantran', 'trantoan@gmail.com', '0966826315', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '99 Lac Long Quan, Phuong 7, Quan 10', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'Trần Duy ', 'Phát', 'phattran', 'phattran@gmail.com', '0910826623', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '215 Pham Van Hai, Phuong 8, Quan Tan Binh', 'customer', current_timestamp(), current_timestamp()),
(NULL, 'admin', 'admin', 'admin', 'admin@gmail.com', '0937705040', '$2y$10$N.nF36tQP5IBygg73dzduuleiFW.GaW7GJP3kUUse/ovgm6xTxcV6', '218 Ly Thuong Kiet, Phuong 5, Quan 10', 'admin', current_timestamp(), current_timestamp());
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
VALUES (NULL, 1, 'Cho Tôi Xin Một Vé Đi Tuổi Thơ', '8934974159087', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_1233.jpg', 25.0, 80000, 'Nguyễn Nhật Ánh', '', 208, 'Bìa Mềm', '13 x 20', 220, 'NXB Trẻ', '2018', current_timestamp(), current_timestamp()),
(NULL, 3, 'Đọc Vị Bất Kỳ Ai', '8935280904262', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_12542.jpg', 32.0, 79000, 'TS David J Lieberman', '', 223, 'Bìa Mềm', '13 x 20.5', 250, 'NXB Lao Động', '2019', current_timestamp(), current_timestamp()),
(NULL, 2, 'Bí Mật Tư Duy Triệu Phú', '8935086854624', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_188995_1_1.jpg', 27.0, 108000, 'T Harv Eker', '', 287, 'Bìa Mềm', '20.5 x 14.5', 300, 'NXB Tổng Hợp TP.HCM', '2021', current_timestamp(), current_timestamp()),
(NULL, 4, 'Phương Pháp Giáo Dục Con Của Người Do Thái', '8936067605211', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936067605211.jpg', 40.0, 85000, 'Hà Minh', '', 244, 'Bìa Mềm', '20.5 x 15', 300, 'NXB Phụ Nữ Việt Nam', '2022', current_timestamp(), current_timestamp()),
(NULL, 5, 'Nhà Giả Kim', '8935235226272', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg', 30.0, 79000, 'Paulo Coelho', 'Lê Chu Cầu', 227, 'Bìa Mềm', '20.5 x 13', 220, 'NXB Hội Nhà Văn', '2020', current_timestamp(), current_timestamp()),
(NULL, 1, 'Tôi là BêTô', '8934974158226', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_1236.jpg', 20.0, 85000, 'Nguyễn Nhật Ánh', '', 230, 'Bìa Mềm', '13 x 20', 250, 'NXB Trẻ', '2018', current_timestamp(), current_timestamp()),
(NULL, 4, 'Cha Mẹ Độc Hại - Toxic Parents', '8935325005619', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia-chamedochai.jpg', 20.0, 148000, 'Susan Forward PhD, Craig Buck', 'Nguyễn Thị Thanh Hằng', 344, 'Bìa Mềm', '24 x 15.7', 350, 'NXB Thế Giới', '2022', current_timestamp(), current_timestamp()),
(NULL, 4, 'Nói Sao Cho Trẻ Nghe Lời', '8936067590418', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_29246.jpg', 20.0, 67000, 'Hoa Dương', '', 194, 'Bìa Mềm', '16 x 23', 270, 'NXB Phụ Nữ', '2019', current_timestamp(), current_timestamp()),
(NULL, 2, 'Nghĩ Giàu & Làm Giàu', '8935086844342', 'https://cdn0.fahasa.com/media/catalog/product/n/g/nghigiaulamgiau_110k-01_bia-1.jpg', 60.0, 110000, 'Napoleon Hill', 'Việt Khương', 400, 'Bìa Mềm', '20.5 x 14.5', 450, 'NXB Tổng Hợp TPHCM', '2020', current_timestamp(), current_timestamp()),
(NULL, 2, 'Jeff Bezos Và Kỷ Nguyên Amazon', '8935280902589', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_190426.jpg', 20.0, 110000, 'Brad Stone', '', 403, 'Bìa Mềm', '15.5 x 24', 420, 'NXB Công Thương', '2019', current_timestamp(), current_timestamp()),
(NULL, 3, 'Tuổi Trẻ Đáng Giá Bao Nhiêu', '8935235231115', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_239651.jpg', 40.0, 90000, 'Rosie Nguyễn', '', 291, 'Bìa Mềm', '20.5 x 14', 370, 'NXB Hội Nhà Văn', '2021', current_timestamp(), current_timestamp()),
(NULL, 3, 'Chủ Nghĩa Khắc Kỷ', '8935280905597', 'https://cdn0.fahasa.com/media/catalog/product/c/h/chu-nghia-khac-ky-14.5x20.5cm-final.jpg', 40.0, 125000, 'William B Irvine', '', 370, 'Bìa Mềm', '14.5 x 20.5', 400, 'NXB Công Thương', '2020', current_timestamp(), current_timestamp()),
(NULL, 5, 'Hoàng Tử Bé', '8935325005619', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_187010.jpg', 36.0, 75000, 'Antoine De Saint-Exupery', 'Trác Phong', 102, 'Bìa Mềm', '15 x 23', 120, 'NXB Hội Nhà Văn', '2019', current_timestamp(), current_timestamp()),
(NULL, 5, 'Bách Khoa Khủng Long Toàn Tập', '8936071674753', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936071674753_1.jpg', 20.0, 290000, 'Dougal Dixon, Craig Buck', 'Thanh Hoa', 256, 'Bìa Mềm', '22.5 x 29.5', 450, 'NXB Dân Trí', '2018', current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 

--
-- Add Data for table `ratings`
--
INSERT INTO `ratings` (`id`,`product_id`,`user_id`,`rate_star`,`content`,`created_at`,`updated_at`)
VALUES (NULL, 1, 1, 5, 'REVIEW ngắn gọn “Cho tôi xin một vé đi tuổi thơ” Câu chuyện đáng yêu này kể về bộ tứ cu Mùi, Hải cò, Tí sún và Tủn. Những đứa trẻ ngây thơ hồn nhiên lên dự án để nuôi chó kiếm tiền, đặt tên cho thế giới, gọi nhau bằng những thứ khác,... Câu chuyện đã thực sự mang tôi về với tuổi thơ. Những câu hỏi mà tôi cũng như những đứa trẻ khác luôn đặt ra rằng “Tại sao mọi người lại gọi đàn ông là đàn ông mà không phải là đàn bà?” hay “Tại sao bố mẹ lại gọi là bố mẹ mà không phải ông bà?” vân vân và mây mây... đều được nói đến trong cuốn truyện. “Tôi viết cuốn sách này không phải cho trẻ con mà tôi viết cho những ai từng là trẻ con” Bìa sách mới tái bản rất đẹp, giản dị nhưng bắt mắt.', current_timestamp(), current_timestamp()),
(NULL, 1, 2, 4, 'Nguyễn Nhật Ánh viết nhiều về tuổi thơ, về tình cảm tuổi học trò, và về những nuối tiếc của con người về những năm tháng áo trắng . Có lẽ tôi sẽ không bao giờ quên cuốn sách đầu tiên đưa tôi về thế giới của tuổi ô mai này :" cho tôi xin một vé đi tuổi thơ " .', current_timestamp(), current_timestamp()),
(NULL, 1, 3, 5, 'Câu chuyện về một người đàn ông nhìn lại cuộc đời mình, Cho tôi xin một vé đi tuổi thơ ghi lại kết cấu của tuổi thơ trong tất cả sự phong phú của nó. Khi chúng ta học được từ những phép màu và bi kịch nhỏ tạo nên cuộc đời của người kể chuyện - những sai lầm và những hành động sai trái - chúng ta gặp những người bạn đã mất từ lâu của mình, không ai có thể quên được cuộc sống của họ như thế nào.', current_timestamp(), current_timestamp()),
(NULL, 1, 4, 5, 'Cho tôi xin một vé đi tuổi thơ của tác giả Nguyễn Nhật ánh là một quyển truyện rất sâu sắc. "Một ngày, tôi chợt nhận thấy cuộc sống thật là buồn chán và tẻ nhạt" câu chuyện bắt đầu bằng một câu rất rất gần gũi không chỉ với trẻ nhỏ mà còn cả người lớn nữa, cứ như vậy từng việc từng việc miên man xảy ra khiến tôi bị cuốn hút vào câu chuyện của 4 đứa trẻ lúc nào không hay. Chú Ánh đã khiến tôi nhớ lại rất nhiều kỉ niệm, những ý tưởng điên khùng của bản thân hồi xưa. Có thể đọc 1 lần thì mình không cảm nhận được nhiều nhưng đọc đến lần thứ 2 thứ 3 bạn sẽ thấy cảm xúc hoàn toàn khác với lần trước, khác ở đây chính là từng câu từng chữ mộc mạc mà thấm đậm khiến mình phải suy nghĩ nhiều về chúng.', current_timestamp(), current_timestamp()),
(NULL, 2, 2, 4, 'Cuốn sách với lối viết đơn giản và dễ hiểu, giúp tôi đi nhanh vào các vấn đề trọng tâm mà David Lieberman truyền tải. Tôi học được cách tiếp xúc với người khác phải hết sức cẩn trọng vì ai cũng có cái tôi dễ bị tổn thương. Nếu muốn có được sự trung thành của người khác, hãy giúp đỡ trong lúc họ ở hoàn cảnh khốn cùng. Nếu có đối đãi với những người xung quanh thì họ sẽ dành sự biết ơn cho chúng ta mà cốt lõi của lòng trung thành chính là thái độ biết ơn. Có được điều này vô cùng quan trọng dù tôi và bạn đang ở vị trí nào. Nói chung thì “Đọc vị bất kỳ ai” đem lại cho tôi rất nhiều bài học và thông tin hữu ích. Mục tiêu luôn là cái để chúng ta đặt ra và cố gắng thực hiện trong cuộc sống này. Vậy nên quyển sách giúp chúng ta hiểu được cần phải có mục tiêu đúng đắn cùng với đó là các kế hoạch khả thi để áp dụng vào trong thực tiễn. Sự quyết tâm và bản lĩnh của mỗi người sẽ giúp cho hành trình đó tiến bước đến thành công.', current_timestamp(), current_timestamp()),
(NULL, 2, 5, 5, 'Đây đích thị sẽ là cuốn sách giúp bạn trở thành người nắm được thế chủ động hơn trong mọi tình huống, sẽ không phải lo về việc bị lừa dối và lợi dụng, đồng thời góp phần tôi luyện thêm “bản năng“ nhìn nhận người khác một cách chính xác, có logic, giúp ích hơn cho các bạn trong mọi khía cạnh của cuộc sống. Với cách sử dụng từ ngữ logic, sự nhạy bén trong từng suy nghĩ và cử chỉ, cùng với những ví dụ chân thật lại vô cùng cuốn hút thì mình tin rằng không chỉ bản thân mình, mà các bạn cũng sẽ đều hứng thú hơn khi lật qua từng trang sách. Đây là cuốn sách nên có trên giá sách của mỗi người, đặc biệt là những người muốn tạo dựng các mối quan hệ bền vững, tốt đẹp nhất có thể.', current_timestamp(), current_timestamp()),
(NULL, 2, 6, 5, 'Đây là một câu chuyện nhẹ nhàng nhưng để lại cho mình rất nhiều bài học cuộc sống. Trước tiên, đó là câu chuyện của tình mẫu tử thiêng liêng khi hải âu mẹ quyết hi sinh mạng sống của mình để đẻ ra quả trứng nhỏ. Tiếp theo đó là bài học về việc giữ lời hứa. Chú mèo ú Zorba đã cố gắng nỗ lực hết sức để thực hiện lời hứa của mình đối với hải âu mẹ. Chú đã không ăn quả trứng, chăm sóc quả trứng tới khi nó nở và dạy hải âu con tập bay. Câu chuyện còn là bài học về tình yêu thương “không biên giới”. Yêu không phân biệt nguồn gốc xuất thân như mèo ú Zorba và những chú mèo khác yêu thương hải âu con và tìm mọi cách giúp hải âu tập bay. Cuối cùng, đó là bài học về sự quyết tâm. Chỉ cần có quyết tâm không bỏ cuộc thì đường đến đỉnh vinh quang sẽ không còn xa…', current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 


--
-- Add Data for table `orders`
--
INSERT INTO `orders` (`id`,`code`,`user_id`,`discount`,`invoice`,`status`,`created_at`,`updated_at`) 
VALUES (NULL, '6571AS001', 2, '', 156000, 'Processing', current_timestamp(), current_timestamp()),
(NULL, '6571AS002', 3, '', 139000, 'Accepted', current_timestamp(), current_timestamp()),
(NULL, '6571AS003', 1, '', 122000, 'Cancelled', current_timestamp(), current_timestamp()),
(NULL, '6571AS004', 5, '', 280000, 'Processing', current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 

--
-- Add Data for table `order-items`
--
INSERT INTO `order-items` (`id`,`order_id`,`product_id`,`quantity`) 
VALUES (NULL, 1, 4, 2),
(NULL, 1, 2, 1),
(NULL, 2, 3, 1),
(NULL, 2, 1, 1),
(NULL, 3, 6, 1),
(NULL, 3, 8, 1),
(NULL, 4, 14, 1),
(NULL, 4, 13, 1);
-- -------------------------------------------------------- 

--
-- Add Data for table `carts` - status: "Empty", "Occupied"
--
INSERT INTO `carts` (`id`,`user_id`,`status`,`product_id`,`quantity`,`created_at`,`updated_at`) 
VALUES (NULL, 1, 'Cart', 1, 1, current_timestamp(), current_timestamp()),
(NULL, 1, 'Cart', 2, 1, current_timestamp(), current_timestamp()),
(NULL, 3, 'Cart', 5, 1, current_timestamp(), current_timestamp()),
(NULL, 3, 'Cart', 6, 1, current_timestamp(), current_timestamp()),
(NULL, 5, 'Cart', 4, 1, current_timestamp(), current_timestamp());
-- -------------------------------------------------------- 