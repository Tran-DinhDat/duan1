-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2018 lúc 02:51 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_tour` int(11) NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_bl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_kh`, `ten_kh`, `ma_tour`, `noi_dung`, `ngay_bl`) VALUES
(1, 1, 'phan tâm', 2, 'adadadadadasd', '2018-11-19 23:55:43'),
(2, 1, 'Phan Tâm', 2, 'adadsa', '2018-11-19 23:56:37'),
(3, 2, 'Trần Đình Đạt', 2, 'adasd', '2018-11-24 03:38:23'),
(4, 2, 'Trần Đình Đạt', 3, 'tour tốt lắm', '2018-11-28 15:08:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khu_vuc`
--

CREATE TABLE `khu_vuc` (
  `ma_kvt` int(11) NOT NULL,
  `ten_kvt` varchar(50) COLLATE utf8_german2_ci NOT NULL,
  `hinh` varchar(50) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Đang đổ dữ liệu cho bảng `khu_vuc`
--

INSERT INTO `khu_vuc` (`ma_kvt`, `ten_kvt`, `hinh`) VALUES
(1, 'Du lịch mien nam', '1.jpg'),
(2, 'Du lịch mien bac', 'tour1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mo_hinh_khach_san`
--

CREATE TABLE `mo_hinh_khach_san` (
  `ma_ks` int(11) NOT NULL,
  `ten_ks` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `chi_tiet` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mo_hinh_khach_san`
--

INSERT INTO `mo_hinh_khach_san` (`ma_ks`, `ten_ks`, `hinh`, `gia`, `chi_tiet`) VALUES
(1, 'Hệ thống khách sạn Mường Thanh', 'tour1.png', 20000, 'Thời gian nhận phòng: Sau 14:00\r\nThời gian trả phòng: Trước 12:00\r\nSức chứa tối đa: Một phòng 02 người lớn và 02 trẻ em dưới 12 tuổi.\r\nQuý khách vui lòng xuất trình voucher/email xác nhận dịch vụ và giấy tờ tuỳ thân để làm thủ tục nhận phòng.\r\nKhách sạn sẽ bị tính phí phụ thu nếu Quý khách có nhu cầu nhận phòng sớm hoặc trả phòng trễ hơn thời gian quy định.\r\nQuý khách thanh toán chi phí phát sinh (nếu có) tại khách sạn/resort khi trả phòng.\r\nTrường hợp Quý khách đến trễ vì lý do cá nhân, hoặc không nhận phòng xem như Quý khách đã hủy dịch vụ. Chi phí dịch vụ không hoàn lại hoặc đổi sang thời gian khác.\r\nPhòng lưu trú có thể xảy ra trường hợp phòng không gần nhau, loại phòng một giường đôi hoặc hai giường đơn không theo yêu cầu, tùy tình hình thực tế của nhà cung cấp dịch vụ.'),
(2, 'Mô hình khách sạn chơi gái', 'tour1.png', 20000, 'Quý khách phải từ 18 tuổi trở lên mới được phép đăng ký và thanh toán dịch vụ.\r\nKhi đăng ký, vui lòng cung cấp tên chính xác đầy đủ, đúng từng ký tự trên CMND/Hộ chiếu/ Giấy khai sinh (trẻ em dưới 14 tuổi) theo thứ tự: Họ/tên lót/tên.\r\nQuý khách khi đăng ký cung cấp tên theo giấy tờ tùy thân nào, khi đi tour phải mang theo giấy tờ tùy thân đó để làm thủ tục hàng không và nhận phòng khách sạn.'),
(9, '222', 'namdu.jpg', 222, '222');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_toan`
--

CREATE TABLE `thanh_toan` (
  `ma_tt` int(11) NOT NULL,
  `ma_tour` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` int(11) NOT NULL,
  `so_ve` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanh_toan`
--

INSERT INTO `thanh_toan` (`ma_tt`, `ma_tour`, `ma_kh`, `ten_kh`, `dien_thoai`, `ghi_chu`, `dia_chi`, `so_ve`, `email`, `gia`) VALUES
(4, 3, 2, 'Trần Đình Đạt', '1', '1', 1, 1, '1', '6000000'),
(5, 3, 2, 'Trần Đình Đạt', 'adas', 'sdadas', 0, 4, 'adad', '24000000'),
(6, 3, 2, 'Trần Đình Đạt', 'adas', 'sdadas', 0, 4, 'adad', '24000000'),
(7, 3, 2, 'Trần Đình Đạt', 'adas', 'sdadas', 0, 4, 'adad', '24000000'),
(8, 3, 2, 'Trần Đình Đạt', 'adas', 'sdadas', 0, 4, 'adad', '24000000'),
(9, 3, 2, 'Trần Đình Đạt', 'adas', 'sdadas', 0, 4, 'adad', '96000000'),
(10, 3, 2, 'Trần Đình Đạt', 'adas', 'sdadas', 0, 4, 'adad', '24000000'),
(11, 3, 2, 'Trần Đình Đạt', '0981740120', 'dasdas', 8, 16, 'adad', '96000000'),
(12, 3, 2, 'Trần Đình Đạt', '0981740120', 'asdasd', 8, 5, 'adas', '30000000'),
(13, 3, 2, 'Trần Đình Đạt', '0981740120', '1312', 8, 5, 'trandinhdat120@gmail.com', '30000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `ma_tour` int(11) NOT NULL,
  `ten_tour` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_kvt` int(11) NOT NULL,
  `gia` float NOT NULL,
  `so_ngay` int(11) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `so_luot_yeu_thich` int(11) NOT NULL,
  `ngay_khoi_hanh` date NOT NULL,
  `noi_khoi_hanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noi_den` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chi_tiet` text COLLATE utf8_unicode_ci NOT NULL,
  `tong_so_ve` int(11) NOT NULL,
  `so_ve_da_dat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`ma_tour`, `ten_tour`, `hinh`, `ma_kvt`, `gia`, `so_ngay`, `so_luot_xem`, `so_luot_yeu_thich`, `ngay_khoi_hanh`, `noi_khoi_hanh`, `noi_den`, `chi_tiet`, `tong_so_ve`, `so_ve_da_dat`) VALUES
(2, 'DU LỊCH NINH BINH - CHUA BAI DINH', 'ninhbinh.jpg', 1, 10000000, 2, 1484, 52, '2018-11-08', 'Hồ Chí Minh City', '', 'Ninh Bình là một tỉnh nằm ở cửa ngõ cực nam miền Bắc Việt Nam, thuộc khu vực đồng bằng sông Hồng dù chỉ có 2 huyện duyên hải là Yên Khánh và Kim Sơn có địa hình bằng phẳng. Quy hoạch xây dựng phát triển kinh tế xếp Ninh Bình vào vùng duyên hải Bắc Bộ. Vùng đất Ninh Bình xưa là kinh đô của Việt Nam giai đoạn 968 - 1010 với 3 triều đại Đinh, Tiền Lê, Tiền Lý và cũng là địa bàn quan trọng về quân sự qua các thời kỳ lịch sử. Với vị trí đặc biệt về giao thông, địa hình, lịch sử văn hóa đồng thời sở hữu 2 khu vực là di sản thế giới và khu dự trữ sinh quyển thế giới, Ninh Bình hiện là một trung tâm du lịch có tiềm năng phong phú và đa dạng. Năm 2015, Ninh Bình là tỉnh đầu tiên của đồng bằng sông Hồng có 2 thành phố trực thuộc tỉnh (Ninh Bình, Tam Điệp).', 10, 1),
(3, 'DU LỊCH NAM DU - HÒN CỦ TRON 2 NGÀY', 'namdu.jpg', 1, 6000000, 3, 30, 11, '2019-01-19', 'Đà Nẵng', '', 'Nằm ở phía đông nam đảo Phú Quốc, quần đảo Nam Du thuộc hai xã An Sơn và Nam Du, huyện Kiên Hải, tỉnh Kiên Giang, cách đất liền khoảng 60km. Nam Du có diện tích khoảng 1.054ha, bao gồm 21 hòn đảo lớn nhỏ, trong đó 11 đảo có cư dân sinh sống. Sở hữu vẻ đẹp nguyên sơ, hữu tình với biển xanh, cát trắng, nắng vàng, những rạn san hô, đàn cá đủ sắc màu cùng nhiều loại hải sản tươi ngon, Nam Du được ví như một vịnh Hạ Long thu nhỏ giữa lòng biển khơi phương Nam, đem đến cho du khách những trải nghiệm thú vị..Hòn Lớn là đảo lớn nhất trong quần đảo Nam Du, có diện tích 771ha với nhiều bãi biển đẹp như: bãi Đất Đỏ, bãi Cây Mến, bãi Ngự, bãi Giếng… cùng những hàng dừa xanh, có cây lên tới 70 - 80 năm tuổi. Đây là địa điểm lý tưởng để du khách tắm biển, lặn biển ngắm san hô hay bắt cá, bắt ốc ở các bãi đá ven biển. Đến hòn Lớn, các phượt thủ có thể thuê xe máy chạy quanh con đường độc đạo ven đảo. Một bên đường là vách đá dựng đứng, một bên là biển xanh màu ngọc bích, xa xa thấp thoáng những hòn đảo nhỏ cùng những chiếc thuyền ngoài khơi, tạo nên bức tranh non nước thơ mộng, hữu tình. Du khách còn có thể lên ngọn hải đăng nằm ở độ cao 296m so với mực nước biển để tham quan đài radar và ngắm toàn cảnh quần đảo Nam Du. Từ TP. Rạch Giá, mỗi ngày có một chuyến tàu cao tốc đưa du khách ra hòn Lớn vào lúc 8h15 và quay lại Rạch Giá lúc 12h15.', 100, 40),
(6, 'DU LỊCH [ĐÓN NĂM MỚI 2019] ĐÀ NẴNG - HỘI AN - SUỐI KHOÁNG NÓNG NÚI THẦN TÀI - BÀ NÀ - CẦU VÀNG', 'hoian.jpg', 2, 4000000, 4, 11, 1, '2019-01-06', 'Hồ Chí Minh City', '', 'Quý khách tập trung tại cột số 5, Ga đi trong nước, sân bay Tân Sơn Nhất, hướng dẫn viên làm thủ tục cho Quý khách đáp chuyến bay đi Đà Nẵng tham quan:\r\n- Bán đảo Sơn Trà và Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam.\r\n- Ngũ Hành Sơn - Động Tàng Chơn, Động Hoa Nghiêm, Chùa Non Nước,...\r\n- Làng đá Mỹ Nghệ -  Nơi quy tụ nhiều sản phẩm được điêu khắc bằng đá rất nghệ thuật và đặc sắc.\r\n- Phố Cổ Hội An - Chùa Cầu, Cơ sở Thủ Công Mỹ Nghệ,…Tự do Thưởng thức trà & bánh cookie Reaching Out Tea House quán trà đặc biệt của hội những người khuyết tật, thả đèn hoa đăng cầu phúc lộc trên dòng sông Hoài….(Chi phí tự túc). Đoàn quay về và nghỉ đêm tại Đà Nẵng. \r\n\r\n', 0, 0),
(8, 'DU LỊCH TẾT NGUYÊN ĐÁN TẠI HÀ NỘI - LÀO CAI - SAPA - LŨNG PÔ (BAY VN)', 'sapa.jpg', 1, 4000000, 4, 7, 5, '2019-01-06', 'Hồ Chí Minh City', '', 'Ninh Bình là một tỉnh nằm ở cửa ngõ cực nam miền Bắc Việt Nam, thuộc khu vực đồng bằng sông Hồng dù chỉ có 2 huyện duyên hải là Yên Khánh và Kim Sơn có địa hình bằng phẳng. Quy hoạch xây dựng phát triển kinh tế xếp Ninh Bình vào vùng duyên hải Bắc Bộ. Vùng đất Ninh Bình xưa là kinh đô của Việt Nam giai đoạn 968 - 1010 với 3 triều đại Đinh, Tiền Lê, Tiền Lý và cũng là địa bàn quan trọng về quân sự qua các thời kỳ lịch sử. Với vị trí đặc biệt về giao thông, địa hình, lịch sử văn hóa đồng thời sở hữu 2 khu vực là di sản thế giới và khu dự trữ sinh quyển thế giới, Ninh Bình hiện là một trung tâm du lịch có tiềm năng phong phú và đa dạng. Năm 2015, Ninh Bình là tỉnh đầu tiên của đồng bằng sông Hồng có 2 thành phố trực thuộc tỉnh (Ninh Bình, Tam Điệp).', 0, 0),
(9, 'DU LỊCH ĐÀ LẠT ĐÓN NĂM MỚI 2019', 'dalat.jpg', 2, 7000000, 3, 10, 0, '2018-12-21', 'Đà Nẵng', '', 'Đà Lạt là thành phố trực thuộc tỉnh Lâm Đồng nằm trên Cao nguyên Lâm Viên thuộc vùng Tây Nguyên của nước Việt Nam.\r\n\r\n Thành Phố Đà Lạt cách Biên Hòa (Đồng Nai) 278km, Hà Nội 1.481km, Tp. Hồ Chí Minh 293km, Nha Trang (Khánh Hòa) 205km.Nếu đi theo đường 27 từ Phan Rang ngược sông Dinh lên, sau khi vượt qua những khu di tích lịch sử của nước Chămpa xưa và những cánh đồng khô ráo quanh năm, chúng ta đứng trên đèo Ngoạn Mục với bức tranh thiên nhiên hùng vĩ trước mắt.', 0, 0),
(10, 'Liên Tuyến Bắc Trung: Hà Nội - Ninh Bình - Nghỉ Dưỡng Trên Du Thuyền Hạ Long Cao Cấp - Yên Tử- Huế -', 'hoian.jpg', 1, 8000000, 2, 3, 50, '2019-01-16', 'Hồ Chí Minh City', '', 'Quý khách tập trung tại sân bay Tân Sơn Nhất (ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến nơi, đoàn khởi hành đi Ninh Bình, tham quan: \r\n- Chùa Bái Đính: là một quần thể chùa với nhiều kỷ lục Việt Nam như chùa có diện tích lớn nhất, tượng phật bằng đồng lớn nhất, nhiều tượng Phật La Hán nhất.\r\n- Khu Du Lịch Tràng An: di sản văn hóa & thiên nhiên thế giới được UNESCO công nhận năm 2015 có phong cảnh thiên nhiên non nước hữu tình, thuyền chèo đưa Quý khách tham quan 3 điểm tâm linh là Đền Trình, Đền Trần và Phủ Khống, xuyên qua các hang động như: Hang Tối, Hang Sáng, Hang Nấu Rượu, Hang Ba Giọt.\r\nNghỉ đêm tại Ninh Bình\r\n\r\nXem nội dung đầy đủ tại: https://travel.com.vn/tourNDSGN162-041-011218-D/lien-tuyen-bac-trung-ha-noi-ninh-binh-nghi-duong-tren-du-thuyen-ha-long-cao-cap-yen-tu-hue-dong-thien-duong-phong-nha-da-nang-ba-na-hoi-an-tour-tieu-chuan.aspx\r\nNguồn: travel.com.vn', 0, 0),
(11, 'DU LỊCH CẦN THƠ - CÔN ĐẢO', 'condao.jpg', 1, 6500000, 4, 0, 5, '2019-02-06', 'Hồ Chí Minh City', '', 'ôn Đảo là một quần đảo nằm ở phía Đông-Nam của Việt Nam, cách Vũng Tàu 97 hải lý và cách thành phố Hồ Chí Minh 120 hải lý. Côn Đảo gồm có 16 hòn đảo lớn nhỏ, với diện tích 76 km2. Trong đó đảo lớn nhất là đảo Côn Sơn, có diện tích 51 km2. Dân số khoảng 6.000 người (tính đến cuối năm 2010).\r\n\r\nNhìn trên bản đồ, Côn Đảo giống như một chú gấu vươn mình ra biển Đông,  nổi tiếng với nhiều bãi biển đẹp, nước biển trong xanh và bờ cát dài… được che mát bởi những hàng cây Bàng cổ thụ. Côn Đảo còn là vườn Quốc gia với rừng nguyên sinh và thảm động thực vật phong phú và đa dạng với nhiều loài cá đủ màu bơi tung tăng bên những rạn san hô nhiều tầng và đầy màu sắc. Rừng có nhiều chủng loại phong lan, động vật rừng có sóc đen, sóc đỏ dạ, chim gầm gì… Đặc biệt Côn Đảo là một trong những nơi duy nhất tại Việt Nam về bảo tồn bò biển (Dugong), cá heo, các loại rùa biển (Vích)...\r\nCôn Đảo từng được biết đến như là nơi nuôi dưỡng tinh thần cách mạng kiên cường của những nhà cách mạng, những người yêu nước Việt Nam. Ngày nay, Côn Đảo thật sự là một thiên đường để khám phá. Người dân Côn Đảo hiếu khách, hiền lành và thân thiện tạo cho du khách cảm giác như là nhà của mình khi đặt chân đến đây.\r\nĐến với Côn Đảo để tìm về nơi thiêng liêng, hãy thắp nén nhang nghĩa tình trong nghĩa trang Hàng Dương. Bảo tàng Côn Đảo là nơi lưu giữ hiện vật, hình ảnh lịch sử của đảo, nào là  chuồng cọp, chuồng bò, cầu Ma Thiên Lãnh...\r\nĐến Côn Đảo là tìm đến thiên nhiên hoang sơ, chiêm ngưởng khu rừng nguyên sinh Ông Đụng,  Sở Rẩy. Câu cá tại hòn Bông Lan, câu mực ở mủi tàu Bể,  lặn snorkelling, diving tại hòn Tre, xem rùa đẻ vào ban đêm tại hòn Bảy Cạnh...', 0, 0),
(12, '\r\nDU LỊCH TỪ ĐÀ NẴNG [ HÀ NỘI - NINH BÌNH ] - HÀNG KHÔNG VIỆT NAM', 'bana.jpeg', 2, 3900000, 5, 0, 5, '2018-11-08', 'Hồ Chí Minh City', '', 'Quý khách tập trung tại Ga đi trong nước, sân bay Tân Sơn Nhất. Hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi sân bay Đà Nẵng tham quan:\r\n- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam . Đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất.\r\nNhận phòng khách sạn tự do nghỉ ngơi. Chiều xe đưa Quý khách đi:\r\n- Ngũ Hành Sơn – Chùa Linh Ứng, Động Tàng Chơn, Động Hoa Nghiêm, Chùa Non Nước,…\r\n- Phố Cổ Hội An – Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…Tự do Thưởng thức trà & bánh cookie Reaching Out Tea House quán trà đặc biệt của hội những người khuyết tật, thả đèn hoa đăng cầu phúc lộc trên dòng sông Hoài…. (chi phí tự túc).\r\nĐoàn quay về Đà Nẵng và nghỉ đêm tại Đà Nẵng. \r\n\r\nXem nội dung đầy đủ tại: https://travel.com.vn/tourNDSGN361-044-301118VJ-D/da-nang-ba-na-son-tra-hoi-an-da-nang-khach-san-4-sao-tour-tieu-chuan-.aspx\r\nNguồn: travel.com.vn', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ma_kh` int(11) NOT NULL,
  `ten_dn` varchar(50) NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vai_tro` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ma_kh`, `ten_dn`, `ten_kh`, `mat_khau`, `email`, `vai_tro`) VALUES
(97, 'tam', 'phan minh tam', '1', 'sadasd@ádadsaada', 1),
(98, 'tam1', 'tam', '1', 'adasd', 1),
(99, 'tam1231', 'tam', '1', 'sadasd@ádadsaada', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeu_thich`
--

CREATE TABLE `yeu_thich` (
  `ma_yt` int(11) NOT NULL,
  `ma_tour` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `yeu_thich`
--

INSERT INTO `yeu_thich` (`ma_yt`, `ma_tour`, `ma_kh`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 3, 2),
(4, 6, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `khu_vuc`
--
ALTER TABLE `khu_vuc`
  ADD PRIMARY KEY (`ma_kvt`);

--
-- Chỉ mục cho bảng `mo_hinh_khach_san`
--
ALTER TABLE `mo_hinh_khach_san`
  ADD PRIMARY KEY (`ma_ks`);

--
-- Chỉ mục cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD PRIMARY KEY (`ma_tt`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`ma_tour`),
  ADD KEY `ma_kvt` (`ma_kvt`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `yeu_thich`
--
ALTER TABLE `yeu_thich`
  ADD PRIMARY KEY (`ma_yt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khu_vuc`
--
ALTER TABLE `khu_vuc`
  MODIFY `ma_kvt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `mo_hinh_khach_san`
--
ALTER TABLE `mo_hinh_khach_san`
  MODIFY `ma_ks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  MODIFY `ma_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `ma_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `yeu_thich`
--
ALTER TABLE `yeu_thich`
  MODIFY `ma_yt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`ma_kvt`) REFERENCES `khu_vuc` (`ma_kvt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
