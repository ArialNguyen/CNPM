-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 03:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caythuocdongy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userName` varchar(15) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `userName` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `listCayThuoc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`userName`, `listCayThuoc`) VALUES
('Hung', '3,1');

-- --------------------------------------------------------

--
-- Table structure for table `benh`
--

CREATE TABLE `benh` (
  `id` int(11) NOT NULL,
  `tenBenh` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `moTa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `listCayThuoc` varchar(5000) NOT NULL,
  `image` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benh`
--

INSERT INTO `benh` (`id`, `tenBenh`, `moTa`, `listCayThuoc`, `image`) VALUES
(1, 'Dạ dày', 'Đau bụng vùng thượng vị.&&Ợ chua, ợ nóng, ợ hơi.&&Đầy bụng, khó tiêu.&&Đại tiện ra máu.&&Buồn nôn hoặc nôn mửa.', '2,5,1', 'Uploads/da-day.jpg'),
(2, 'Ho hen', 'Ho dai dẳng, tăng về đêm.&&Khó thở, tức ngực hoặc nặng ngực.&&Thở ra khò khè, là dấu hiệu phổ biến của bệnh hen ở trẻ.&&Khó thở gây khó ngủ, ho hoặc thở khò khè.&&Các cơn ho hoặc thở khò khè trở nên tồi tệ hơn do vi rút đường hô hấp, chẳng hạn như cảm lạnh hoặc cảm cúm.', '2,4,1', 'Uploads/ho-hen.jpg'),
(3, 'Chữa cảm, sốt', 'Mệt mỏi quá mức hoặc đột ngột. Thường xuyên cảm thấy mệt mỏi, thiếu năng lượng là hai trong nhiều dấu hiệu của bệnh cảm cúm. …&&Đau nhức cơ thể và ớn lạnh. …&&Ho khan, ho dai dẳng. …&&Sốt', '5,3,2', 'Uploads/chua-cam-sot.jpg'),
(4, 'Bệnh cao huyết áp', 'Nhức đầu, Chảy máu mũi, Vết máu trong mắt hoặc xuất huyết kết mạc, Tê hoặc ngứa ran các chi, Buồn nôn và nôn, Choáng và chóng mặt, Đau tim.', '4,3,5', 'Uploads/cao-huyet-ap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `caythuoc`
--

CREATE TABLE `caythuoc` (
  `id` int(11) NOT NULL,
  `tenCayThuoc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenKhoaHoc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `moTa` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noiTrong` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `congDung` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caythuoc`
--

INSERT INTO `caythuoc` (`id`, `tenCayThuoc`, `tenKhoaHoc`, `moTa`, `noiTrong`, `congDung`, `image`) VALUES
(1, 'Nắp ấm hoa đôi', 'Nepenthes mirabilis', 'Cây leo, sống một năm, cao 0,5 – 2m. Thân mảnh, hình trụ, màu xanh lục nhạt.&&Lá mọc so le, hình bầu dục – thuôn, thường dài 10 – 25 cm, có cuống khá dài nửa ôm thân và có cánh, gốc thuôn, đầu kéo dài thành cuống mảnh mang một phần hình trụ phình lên như cái bình có nắp tròn, bên trong có nhiều tuyến tiết, hai mặt có những đốm tía, mép nguyên hoặc hơi khía răng, gân phụ 5 – 7 đôi có nhiều gân ngang song song, tua cuốn ngắn hoặc dài bằng lá.&&Cụm hoa mọc ở ngọn thân thành chùm mảnh, dài 20 – 40 cm; cụm hoa đực có nhiều nhị xếp thành hai dãy; cụm hoa cái có bầu hình trứng hoặc elip, phủ lông trắng.&&Quả nang dài 1,5 – 3 cm, màu nâu, khi chín nứt thành 4 mảnh; hạt mảnh và dài.', 'Họ nắp ấm (Nepenthaceae) ở Việt Nam chỉ có 1 chi Nepenthes L. với 4 loài. Loài nắp ấm hoa đôi trên mới thấy phân bố rải rác từ Quảng Trị trở vào (gồm các tỉnh: Quảng Trị, Thừa Thiên – Huế (Nam Đông), Quảng Nam; Bình Định (Quy Nhơn, Phú Mỹ); Đồng Nai, Tp. Hồ Chí Minh (Bình Chánh); Bà Rịa – Vũng Tàu (Côn Đảo); Bạc Liêu; Cà Mau; Tây Ninh (VQG. Lò Gò – Xa Mát). Cây cũng phân bố ở Nam Trung Quốc, Lào, Campuchia, Malaysia, Indonesia và Philippin', 'Nắp ấm hoa đội được dùng chữa tiểu tiện ra cát sỏi, viêm gan vàng da, viêm loét dạ dày tá tràng, huyết áp cao, trẻ em ho gà. Ngày dùng 20 – 40g thuốc khô hay 40 – 80g thuốc tươi, sắc uống', 'Uploads/nap-am-hoa-doi.png'),
(2, 'Ngải đắng', 'Artemisia absinthium L.', 'Cây thảo, sống hai năm hoặc nhiều năm, cao 0,40 – 0,60m, có khi đến 1m. Thân mọc đứng, có khía dọc và lông mềm màu trắng.&&Lá mọc so le, hai mặt phủ lông tơ trắng, mép khía răng; lá ở phía gốc có cuống dài, chẻ lông chim 3 lần, lá ở gần ngọn chẻ ít hơn và có cuống ngắn.&&Cụm hoa mọc ở ngọn thân và đầu cành thành đầu, các đầu họp lại thành chùy; hoa màu vàng hay trắng', 'Cây có nguồn gốc ở vùng ôn đới ẩm thuộc châu  u và một phần ở châu Á, đồng thời cũng có được trồng ở một số quốc gia Đông  u và Liên Xô cũ. Ngải đắng được Viện Dược liệu nhập giống từ Hungari vào cuối những năm 60 của thế kỷ trước tại vườn thuốc ở SaPa. Tuy nhiên hiện nay cây đã bị mất giống.', 'Ngải đắng được dùng làm thuốc kích thích tiêu hóa, làm thuốc bổ đắng chữa đầy hơi, đau dạ dày, đau gan, tăng huyết áp, ho, sốt. Liều dùng 2-10g thường dùng dạng thuốc hãm hoặc rượu thuốc.&&Để kích thích tiêu hóa thường dùng liều thấp. Khi bị đau răng, sắc đặc ngải đắng, chấm vào chân răng bị đau', 'Uploads/ngai-dang.png'),
(3, 'Trám hồng', 'Canarium bengalense Roxb', 'Cây thân  gỗ cao tới 20m, nhánh non có lông sét.&&Lá dài đến 60cm, lá chét 13-21, mọc đối, dài 8-15cm, rộng 2,5-5cm, thon, không cân, gân phụ nhiều, không lông cuống phụ 2mm.&&Chuỳ hoa dài bằng hay ngắn hơn lá, đài hình chén có 3 răng; cánh hoa 3, nhị có chỉ nhị dính nhau đến 1/2.&&Quả hạch dài 3,5cm, không lông,nhân nhọn 2 đầu, có 3 cạnh, dày, cứng.', 'Trám hồng phân bố ở Ấn Độ, Mianma, Lào và Việt Nam.&&Ở Việt Nam, cây mọc trên đất mùn của rừng thứ sinh đang phục hồi ở Ninh Bình, Thanh Hoá', 'Quả trám dùng để giải khát, chữa ho, chữa viêm họng. Ngoài ra còn có tác dụng giải độc với các trường hợp ngộ độc cá', 'Uploads/tram-hong.jpg'),
(4, 'Vọt đồi', 'Dicranopteris linearis (Burm. f.) Undrew', 'Dương xỉ, cao 20 – 30 cm. Thân mọc bò, ngầm dưới đất, có nhiều lông màu nâu. Rễ chùm.&&Lá to, rộng, chia làm 3 – 4 nhánh, mỗi nhánh mang những lá chét chẻ lông chim sâu, các nhánh bậc nhất lại chẻ nhiều lần, các nhánh chẻ cuối cùng có phiến dạng trái xoan – ngọn giáo, dài khoảng 25 cm, rộng 6 cm, chia lông chim sâu; các đoạn cuối cùng hình dải dài 2 cm, rộng 0,2 cm, có chóp tròn, mép nguyên cuộn lại, hai mặt nhẵn; gân ở các thuỳ có dạng lông chim và thường chẻ đôi từ gốc; lá kèm ngắn, chia thuỳ nhiều hay ít.&&Ổ túi bào tử nằm ở gần chỗ giữa gân nhỏ, gồm 7 – 8 túi bào tử, không có áo túi, bào tử hình 4 mặt không đều, không màu, có cạnh dày màu nâu', 'Chi Dicranopteris ở Việt Nam có 2 loài có kích thước lớn đều được dùng làm thuốc là D.dichotoma (Thumb.) Bernh và D. linearis (Burm.f) Undrew. Trên thế giới, vọt đồi phân bố ở Trung Quốc, Lào… Ở Việt Nam, cây phân bố rộng khắp từ các tỉnh ở vùng trung du và miền núi đến độ cao khoảng 1.000m.', 'Thân rễ cây vọt đồi được dùng làm thuốc trị giun, lá cây để chữa hen. Liều dùng, ngày 9 – 15g sắc uống. Đọt non của cây vọt đồi có thể ăn được.&&Theo tài liệu Ấn Độ thân rễ cây vọt đồi chữa giun sán; dịch chiết lá cây có tác dụng kháng khuẩn và được dùng chữa hen.&&Ở Malaysia, lá cây vọt đồi rửa sạch, giã nát, làm thành miếng thuốc đắp, rang nóng, rồi đắp lên trán và thái dương cho người bệnh bị sốt; có thể sắc đặc rồi xoa. Cũng có thể hãm lá khô uống, nhưng không dùng liều cao', 'Uploads/vot-doi.png'),
(5, 'Hương thảo', 'Rosmarinus officinalis Lamiaceae', 'Hương thảo mọc thành bụi có thể cao đến 2m. Vỏ thân cây màu xám đen, nứt nẻ không đều, tróc vẩy, cành non có mật đồ dày màu trắng.&&Lá chụm trên cành, rất nhiều lá, hình dạng lá hẹp, mép lá gập xuống, lá hình dài, không có cuống, màu xanh sẫm và nhẵn ở trên, phủ lông rải rác màu trắng ở mặt dưới.&&Hoa xếp 2-10 ở các vòng lá, đài cỡ 1cm, màu lam nhạt có hơi màu hoa cả và những chấm tím ở phía trong các thùy.', 'Cây mọc hoang dại và được trồng ở vùng An Giang để làm thuốc và nấu thạch đen dùng uống cho mát.&&Thu hái toàn cây trừ bỏ rễ.&&Mùa thu hoạch gần như quanh năm nhưng chủ yếu vào mùa mưa', 'Trong y học dân gian, dịch truyền làm từ thân và hoa của nó được dùng để chữa đau đầu và cảm lạnh, làm thuốc giảm đau quặn thận và đau bụng kinh, và như một loại thuốc chống co thắt. Sau khi chiết xuất tinh dầu, nước cất từ hoa còn được dùng làm nước rửa mắt, cải thiện tiêu hóa và giảm đau bụng.', 'Uploads/huong-thao.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  `registerDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userName`, `password`, `email`, `hash`, `active`, `registerDate`) VALUES
(2, 'Hung', 'hung1008', 'hungnguyen100802@gmail.com', 'f07f91d7201e5b5e5c89f5978b2cec43', 1, '2022-12-05 02:46:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `benh`
--
ALTER TABLE `benh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caythuoc`
--
ALTER TABLE `caythuoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `benh`
--
ALTER TABLE `benh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `caythuoc`
--
ALTER TABLE `caythuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `event_delete_accountRegiserAfter7days` ON SCHEDULE EVERY 1 MINUTE STARTS '2022-12-03 20:00:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM user WHERE (NOW() > DATE_ADD(registerDate, INTERVAL 7 DAY)) AND active = 0$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
