-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2022 lúc 04:34 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thepet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cat`
--

CREATE TABLE `cat` (
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cat`
--

INSERT INTO `cat` (`name`, `country`, `detail`, `img`) VALUES
('Angora', 'Thổ Nhĩ Kỳ', 'Mèo Angora đúc kết hết những nét ưu tú của giống mèo Ba Tư và mèo rừng châu Phi. Cấu trúc xương nhỏ nhưng rất dẻo dai và cứng cáp, đầu dài, mặt nhỏ, mắt to màu xanh hoặc màu hổ phách, mõm to, tai vểnh cao, chân thon gọn và đuôi dày và dài. Ấn tượng nhất là Angora sở hữu bộ lông dài và mịn màng. Bên cạnh màu lông phổ biến như đen, vằn, trắng xám… thì màu trắng được cho là đẹp cực phẩm.', 'Angora.jpg'),
('Bengal', 'Mỹ', 'Mèo Bengal còn quen gọi là mèo vằn hổ bởi sở hữu nhiều nét hoang dã. Tuy nhiên Bengal lại được xếp vào hàng mèo quý tộc và có giá trị khá đắt đỏ. Những gia đình nuôi giống mèo này thường có xu hướng nuôi một đôi Bengal chứ không nuôi lẻ. Với bản tính thân thiện, hiền lành, giàu tình cảm, gần gũi với chủ nhân nên Bengal là một trong các giống mèo được nuôi nhiều nhất Việt Nam.', 'bengal.jpg'),
('Munchkin', 'Mỹ', 'Đặc trưng dễ nhận thấy nhất là mèo Munchkin có cặp chân ngắn do biến dị trong gen nhưng thân hình lại chắc chắn, khỏe mạnh. Đặc biệt, bạn sẽ cực kỳ thích thú khi được ngắm vuốt bộ lông dày nhiều hoa văn và màu sắc của Munchkin.', 'munchkin.jpg'),
('Ragdoll', 'Mỹ', 'Mèo Ragdoll gây ấn tượng mạnh với kích thước cơ thể khổng lồ hơn hẳn các giống mèo khác. Cân nặng mèo có thể lên tới 9kg. Trái ngược với ngoại hình to lớn, Ragdoll là giống mèo điềm đạm, hiền hòa, tình cảm và trung thành.', 'ragdoll.jpg'),
('Scottish', 'Anh Quốc', 'Đặc điểm nhận dạng nổi bật nhất của Scottish Fold là chiếc tai vô cùng đặc biệt. Sau khi sinh ra được 3 tuần, tai sẽ bắt đầu xuất hiện nếp gấp và lúc nào cũng cụp xuống. Do gen tự nhiên nên giống mèo Tây này có tên gọi là mèo tai cụp. Tuổi thọ trung bình của mèo tai cụp Scottish Fold là 15 năm.', 'scottish.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dog`
--

CREATE TABLE `dog` (
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dog`
--

INSERT INTO `dog` (`name`, `country`, `detail`, `img`) VALUES
('Bully', 'Mỹ', 'Bully là chú chó không quá khó nuôi, bạn tắm cho chúng 1 lần/tuần và đánh răng cho chúng mỗi ngày để phần miệng lúc nào cũng thật sạch sẽ. Đặc biệt thường xuyên vệ sinh nơi ở cho chúng để tránh các virus gây bệnh và ngăn chặn sự phát triển của vi khuẩn ảnh hưởng đến da của chúng.', 'bully.jpg'),
('Chihuahua', 'Mexico', 'Chihuahua là loài chó có vóc dáng nhỏ, chúng nặng khoảng 1,5 – 3 kg, cao từ 16 – 20 cm, dài khoảng 30 cm. Đầu nhỏ, tai dựng đứng, mắt tròn to. Loài chó này cũng có màu lông đa dạng, độ dài ngắn của bộ lông cũng không trong khuôn khổ. Là chó cảnh nhưng chúng cực giỏi canh nhà và cảnh giác với người lạ. Vì thế, người lạ gặp nó hãy cẩn thận nha, nó sủa rất dữ đó!\r\n', 'chiahuahua.jpg'),
('Corgi', 'Anh Quốc', 'Chó Corgi có đặc điểm chung là thân hình dài và 4 chân ngắn, những chú chó nào có thân hình càng dài thì càng đẹp. Chó Corgi có hai loại là Pembroke Corgi và Cardigan Corgi và tuổi thọ của chúng thì khác nhau. Tuy nhiên, tuổi thọ của chúng cũng không chênh nhau là mấy. Nếu Pembroke Corgi có tuổi thọ từ 12 – 14 năm thì Cardigan Corgi cũng chỉ nhỉnh hơn chút là từ 12 – 15 năm.', 'corgi.jpg'),
('Poodle', 'Đức', 'Chó Poodle không chịu được khí hậu quá nóng hay quá lạnh, vì thế bạn nên hạn chế dắt chúng đi dạo trong những thời điểm mùa đông lạnh giá, tuy chúng có bộ lông dày và xù nhưng khả năng giữ nhiệt của chúng là rất kém. Bộ lông của chúng mọc rất nhanh nên chúng cần được tỉa lông 1 tháng/lần và thường xuyên tắm rửa khoảng 2-3 lần/tuần, nước tắm cho chúng cũng phải dùng là nước ấm để không bị cảm lạnh.', 'poodle.jpg'),
('Pug', 'Trung Quốc', 'Chó Pug sở hữu đôi mắt to tròn và lồi,tai chúng luôn luôn cụp và to. Khuôn miệng chúng khá rộng, phần xương hàm to và chắc khỏe. Riêng hàm dưới sẽ hơi nhô so với hàm trên. Trái với khuôn mặt dữ dằn và nghiêm túc, chó Pug lại rất hiền lành và hòa đồng. Hơn nữa, chúng cực kỳ thông minh, lanh lợi, trung thành và rất thân thiện với con người và những chú chó khác.', 'pug.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
