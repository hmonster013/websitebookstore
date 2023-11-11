-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2023 lúc 01:49 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbbookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(1, 'José Mauro de Vasconcelos'),
(3, 'Paulo Coelho'),
(4, 'Thích Nhất Hạnh'),
(6, 'Liêu Tiểu Đao'),
(7, 'James Clear'),
(8, 'Nhà xuất bản Kim Đồng'),
(9, 'HO  Uncle');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `publication_date` date NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author_id`, `genre_id`, `price`, `stock_quantity`, `description`, `publication_date`, `image_url`) VALUES
(1, 'Cây cam ngọt của tôi', 1, 4, 76000, 100, '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng số một tác phẩm kinh điển của Brazil.”\r\n\r\n- Booklist\r\n\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.”\r\n\r\n- The National\r\n\r\nHãy làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu bậc nhất, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng yêu” kia đâu nhé. Bởi vì, ở cái xóm ngoại ô nghèo ấy, nỗi khắc khổ bủa vây đã che mờ mắt người ta trước trái tim thiện lương cùng trí tưởng tượng tuyệt vời của cậu bé con năm tuổi.\r\n\r\nCó hề gì đâu bao nhiêu là hắt hủi, đánh mắng, vì Zezé đã có một người bạn đặc biệt để trút nỗi lòng: cây cam ngọt nơi vườn sau. Và cả một người bạn nữa, bằng xương bằng thịt, một ngày kia xuất hiện, cho cậu bé nhạy cảm khôn sớm biết thế nào là trìu mến, thế nào là nỗi đau, và mãi mãi thay đổi cuộc đời cậu.\r\nMở đầu bằng những thanh âm trong sáng và kết thúc lắng lại trong những nốt trầm hoài niệm, Cây cam ngọt của tôi khiến ta nhận ra vẻ đẹp thực sự của cuộc sống đến từ những điều giản dị như bông hoa trắng của cái cây sau nhà, và rằng cuộc đời thật khốn khổ nếu thiếu đi lòng yêu thương và niềm trắc ẩn. Cuốn sách kinh điển này bởi thế không ngừng khiến trái tim người đọc khắp thế giới thổn thức, kể từ khi ra mắt lần đầu năm 1968 tại Brazil.\r\n\r\nTác giả:\r\n\r\nJOSÉ MAURO DE VASCONCELOS (1920-1984) là nhà văn người Brazil. Sinh ra trong một gia đình nghèo ở ngoại ô Rio de Janeiro, lớn lên ông phải làm đủ nghề để kiếm sống. Nhưng với tài kể chuyện thiên bẩm, trí nhớ phi thường, trí tưởng tượng tuyệt vời cùng vốn sống phong phú, José cảm thấy trong mình thôi thúc phải trở thành nhà văn nên đã bắt đầu sáng tác năm 22 tuổi. Tác phẩm nổi tiếng nhất của ông là tiểu thuyết mang màu sắc tự truyện Cây cam ngọt của tôi. Cuốn sách được đưa vào chương trình tiểu học của Brazil, được bán bản quyền cho hai mươi quốc gia và chuyển thể thành phim điện ảnh. Ngoài ra, José còn rất thành công trong vai trò diễn viên điện ảnh và biên kịch.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2023-10-10', '2a6154ba08df6ce6161c13f4303fa19e.jpg'),
(8, 'Nhà giả kim', 3, 1, 51350, 100, 'Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người.\r\n\r\nTiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.\r\n\r\n“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”', '2020-04-01', 'aa81d0a534b45706ae1eee1e344e80d9.jpg'),
(10, 'Không Diệt Không Sinh Đừng Sợ Hãi ', 4, 4, 70000, 100, 'Nhiều người trong chúng ta tin rằng cuộc đời của ta bắt đầu từ lúc chào đời và kết thúc khi ta chết. Chúng ta tin rằng chúng ta tới từ cái Không, nên khi chết chúng ta cũng không còn lại gì hết. Và chúng ta lo lắng vì sẽ trở thành hư vô.\r\n\r\nBụt có cái hiểu rất khác về cuộc đời. Ngài hiểu rằng sống và chết chỉ là những ý niệm không có thực. Coi đó là sự thực, chính là nguyên do gây cho chúng ta khổ não. Bụt dạy không có sinh, không có diệt, không tới cũng không đi, không giống nhau cũng không khác nhau, không có cái ngã thường hằng cũng không có hư vô. Chúng ta thì coi là Có hết mọi thứ. Khi chúng ta hiểu rằng mình không bị hủy diệt thì chúng ta không còn lo sợ. Đó là sự giải thoát. Chúng ta có thể an hưởng và thưởng thức đời sống một cách mới mẻ.\r\n\r\nKhông diệt Không sinh Đừng sợ hãi là tựa sách được Thiền sư Thích Nhất Hạnh viết nên dựa trên kinh nghiệm của chính mình. Ở đó, Thầy Nhất Hạnh đã đưa ra một thay thế đáng ngạc nhiên cho hai triết lý trái ngược nhau về vĩnh cửu và hư không: “Tự muôn đời tôi vẫn tự do. Tử sinh chỉ là cửa ngõ ra vào, tử sinh là trò chơi cút bắt. Tôi chưa bao giờ từng sinh cũng chưa bao giờ từng diệt” và “Nỗi khổ lớn nhất của chúng ta là ý niệm về đến-đi, lui-tới.”\r\n\r\nĐược lặp đi lặp lại nhiều lần, Thầy khuyên chúng ta thực tập nhìn sâu để chúng ta hiểu được và tự mình nếm được sự tự do của con đường chính giữa, không bị kẹt vào cả hai ý niệm của vĩnh cửu và hư không. Là một thi sĩ nên khi giải thích về các sự trái ngược trong đời sống, Thầy đã nhẹ nhàng vén bức màn vô minh ảo tưởng dùm chúng ta, cho phép chúng ta (có lẽ lần đầu tiên trong đời) được biết rằng sự kinh hoàng về cái chết chỉ có nguyên nhân là các ý niệm và hiểu biết sai lầm của chính mình mà thôi.\r\n\r\nTri kiến về sống, chết của Thầy vô cùng vi tế và đẹp đẽ. Cũng như những điều vi tế, đẹp đẽ khác, cách thưởng thức hay nhất là thiền quán trong thinh lặng. Lòng nhân hậu và từ bi phát xuất từ suối nguồn thâm tuệ của Thiền sư Thích Nhất Hạnh là một loại thuốc chữa lành những vết thương trong trái tim chúng ta.\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2020-06-01', '267e59580ba829ef33eb1999199dafd5.jpg'),
(11, 'Ghi Chép Pháp Y – Khi Tử Thi Biết Nói', 6, 1, 75000, 50, 'GHI CHÉP PHÁP Y 2 - KHI TỬ THI BIẾT NÓI\r\n\r\nNếu kẻ thủ ác dùng cái chết để khiến một người im lặng, thì bác sĩ pháp y sẽ giúp nạn nhân “mở miệng” thông qua những mật mã để lại trên thi thể.\r\n\r\n“Ghi chép pháp y 2 - Khi tử thi biết nói” được tác giả của bộ tiểu thuyết đình đám “Pháp y Tần Minh” và Phó giám đốc Hiệp hội pháp y Trung Quốc - Châu Diệc Vũ giới thiệu, là một trong những cuốn sách về pháp y và tội phạm đáng đọc nhất. Cuốn sách tổng hợp 8 vụ án có thật, được viết bởi bác sĩ pháp y Liêu Tiểu Đao với 18 năm kinh nghiệm mổ xẻ tử thi bằng con dao bạc số 24.\r\n\r\nCuốn sách sẽ dẫn bạn bước vào hiện trường những vụ án ghê rợn, dưới góc nhìn chuyên môn của một bác sĩ pháp y: luộc xương để đoán tuổi xác chết, xác định thời gian tử vong dựa vào vỏ nhộng trên thi thể, dùng găng tay da người để nhận dạng danh tính nạn nhân… từng bước rửa oan cho người đã khuất, phơi bày những lỗ hổng pháp luật và sự mất nhân tính của một bộ phận con người trong xã hội.\r\n\r\nKhông chỉ thuật lại các phương pháp nghiệp vụ, cuốn sách còn chứa đựng suy tư của tác giả về những vụ án dai dẳng không lời giải đáp, những tử thi vô danh không thể lên tiếng và những gia đình còn ôm hy vọng tìm được xác người thân…\r\n\r\n‘Những vụ án chưa giải quyết không phải là một xấp giấy mỏng, mà đó là những “nấm mồ” của các nạn nhân đè lên tim tôi.”\r\n\r\nHiện trường vụ án là chiến trường của bác sĩ pháp y và xác chết là chìa khóa để truy tìm hung thủ. Tiếp nối thành công của “Ghi chép pháp y - Những cái chết bí ẩn”, hy vọng cuốn sách này sẽ đem tới cho bạn trải nghiệm chân thực về quá trình phá án, giải mã uẩn khúc đằng sau những mảnh vụn thi thể.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2019-10-11', '605f1b7919521bb1eb5dc895129fe89f.jpg'),
(12, 'Thay Đổi Tí Hon - Hiệu Quả Bất Ngờ', 7, 4, 135000, 50, 'Nằm trong Top 20 tựa sách thể loại non-fiction bán chạy và được tìm đọc nhiều nhất của Amazon suốt 40 tuần tính đến tháng 9/2019.\r\n“Thành công là sản phẩm của thói quen hằng ngày – không phải của một cuộc biến hình một-lần-trong-đời”\r\n\r\n“Một thay đổi tí hon có thể biến đổi cuộc đời bạn không?\r\n\r\nHẳn là khó đồng ý với điều đó. Nhưng nếu bạn thay đổi thêm một chút? Một chút nữa? Rồi thêm một chút nữa? Đến một lúc nào đó, bạn phải công nhận rằng cuộc sống của mình đã chuyển biến nhờ vào một thay đổi nhỏ\r\n\r\nVà đó chính là sức mạnh của thói quen nguyên tử…”\r\n\r\n“Quyển sách hữu ích và có giá trị ứng dụng tối đa. James Clear đã chắt lọc thông tin cơ bản nhất về sự hình thành thói quen, nhờ đó bạn có thể đạt được nhiều thành quả hơn bằng cách tập trung ít hơn”\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2022-03-03', 'd7d57affcfba13e7f75d74d1e858e41e.jpg'),
(13, 'Lý Thuyết Và Thực Hành Kế Toán Tài Chính', 6, 5, 14100, 10, 'Sách - Lý Thuyết Và Thực Hành Kế Toán Tài Chính (14)\r\n\r\n• Tác Giả: Nhiều tác giả\r\n\r\n• Nhà xuất bản Đại Học Kinh Tế Quốc Dân\r\n\r\n• Kích Thước: 16x24 cm\r\n\r\n• Hình Thức: Bìa mềm\r\n\r\n• Số Trang: 544\r\n\r\nKhổ sách : 16x 24\r\n\r\n• Năm Xuất Bản: 2014\r\n\r\n \r\n\r\nNội dung:\r\n\r\nNhằm hệ thống hóa cho bạn đọc toàn bộ những kiến thức sau khi đã có sự sửa đổi của quyết định số 15 và thông tư 244, cuốn sách đã trình bày tương đối đầy đủ những vấn đề về kế toán theo quy định của chế độ kế toán doanh nghiệp.\r\n\r\nMỤC LỤC NỘI DUNG CUỐN SÁCH\r\n\r\nCHƯƠNG 1: NHỮNG VẤN ĐỀ CƠ BẢN VỀ KẾ TOÁN TÀI CHÍNH\r\n\r\nCHƯƠNG 2: KẾ TOÁN TÀI SẢN BẰNG TIỀN VÀ CÁC KHOẢN PHẢI THU\r\n\r\nCHƯƠNG 3: KẾ TOÁN HÀNG TỒN KHO\r\n\r\nCHƯƠNG 4: KẾ TOÁN CÁC KHOẢN ĐẦU TƯ\r\n\r\nCHƯƠNG 5: KẾ TOÁN TÀI SẢN CỐ ĐỊNH\r\n\r\nCHƯƠNG 6: KẾ TOÁN TIỀN LƯƠNG VÀ CÁC KHOẢN TRÍCH THEO LƯƠNG\r\n\r\nCHƯƠNG 7: KẾ TOÁN CHI PHÍ SẢN XUẤT VÀ GIÁ THÀNH SẢN PHẨM\r\n\r\nCHƯƠNG 8: KÊ TOÁN CHI PHÍ KINH DOANH\r\n\r\nCHƯƠNG 9: KẾ TOÁN DOANH THU, THU NHẬP KHÁC\r\n\r\nCHƯƠNG 10: KẾ TOÁN KẾT QUẢ KINH DOANH VÀ PHÂN PHỐI LỢI NHUẬN\r\n\r\nCHƯƠNG 11: KẾ TOÁN NGUỒN VỐN CHỦ SỞ HỮU\r\n\r\nCHƯƠNG 12: KẾ TOÁN NỢ PHẢI TRẢ\r\n\r\nCHƯƠNG 13: BÁO CÁO TÀI CHÍNH DOANH NGHIỆP\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2023-10-19', 'd314fde0cb7346792613e23c44eb7679.jpg.webp'),
(14, 'Tư Duy Kế Toán Phải Có Trong Kinh Doanh', 8, 5, 4542010, 5, 'Tư Duy Kế Toán Phải Có Trong Kinh Doanh\r\n\r\nCông ty phát hành: Thái Hà\r\n\r\nTác giả: Takaharu Yasumoto\r\n\r\nNgày xuất bản: 03-2019\r\n\r\nKích thước: 13 x 20.5 cm\r\n\r\nLoại bìa: Bìa mềm\r\n\r\nSố trang: 285\r\n\r\nNhà xuất bản: Công Thương\r\n\r\nTư duy và phong cách quản trị dựa trên nền tảng kế toán tài chính đang trở nên cần thiết trong việc đảm bảo sự phát triển bền vững và tăng trưởng của doanh nghiệp. Những người thành công trong kinh doanh là người có “tư duy kế toán” theo cách riêng của họ. Kế toán không quá phức tạp, chỉ cần bạn hiểu những điểm quan trọng, kế toán sẽ là một công cụ hỗ trợ mạnh hơn bất cứ thứ gì trong kinh doanh.\r\n\r\nTrong cuốn sách Tư duy kế toán phải có trong kinh doanh này, bạn sẽ nắm được: Những điểm mấu chốt của báo cáo tài chính, Tư duy về “cơ cấu lợi nhuận” và “thu chi tiền mặt”, Cách sử dụng “số liệu kế toán” hữu ích trong doanh nghiệp, Quay vòng PCDA với kế toán để đạt được mục tiêu đặt ra.\r\n\r\nTư duy kế toán phải có trong kinh doanh là cuốn sách mà bất kỳ nhà quản trị nào hoặc những người đang hoạt động trong lĩnh vực kế toán nên tham khảo thêm.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2023-10-26', '4e84ed262a61f9bd83d73586201486bf.jpg.webp'),
(15, 'Kế toán doanh nghiệp - Từ lý thuyết tới thực hành', 8, 5, 158001, 1, 'Với kết cấu gồm 19 chương, cuốn sách cung cấp những lý thuyết cơ bản về hạch toán nói chung, về kế toán tài chính doanh nghiệp nói riêng, đồng thời chú trọng vào việc cập nhật những quy phạm pháp luật hiện hành, về các dạng thức nghiệp vụ căn bản, có tính thực tiễn cao, được khái quát từ thực tiễn hạch toán ở Việt Nam. Ngoài ra, cuốn sách còn dành một số chương để nêu bật những đặc điểm hạch toán kế toán ở các loại hình doanh nghiệp tiêu biểu như doanh nghiệp nông nghiệp, xây lắp, thương mại - dịch vụ, xuất nhập khẩu, kinh doanh tiền tệ - tín dụng.\r\n\r\nCuốn sách là tài liệu tham khảo hữu ích, đáp ứng yêu cầu học tập, tham khảo, giúp bạn đọc nắm vững những nghiệp vụ kế toán căn bản, tổ chức kế toán, đặc biệt là hạch toán kế toán trong doanh nghiệp.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2023-10-21', 'fca5030d40bef96e749d26b73e481b61.jpg.webp'),
(16, 'Hải Quốc Từ Chương', 8, 1, 700100, 100, 'Hải quốc từ chương\r\n\r\nTùng thư văn học biển đảo Việt Nam\r\n\r\nCuốn sách quý vị đang cầm trên tay là cuốn sách giới thiệu những di sản văn chương viết về biển đảo Việt Nam trong suốt nghìn năm lịch sử. Tổng tập này sưu tầm, biên dịch, hiệu khảo, chú thích gần 350 tác phẩm văn học Hán Nôm thời trung - cận đại và gần 100 tác phẩm văn học dân gian (ca dao, tục ngữ, hò, vè) viết về lịch sử, phong tục, tập quán, sản vật địa phương, hải sản và những suy tư, tâm tình, những lời ăn tiếng nói mang hơi thở của biển cả.\r\n\r\nTrong khoảng vài chục năm trở lại đây, giới nghiên cứu sử học, văn hóa học, dân tộc học, folklore học đã đạt được rất nhiều thành tựu trong việc sưu tầm, điền dã, nghiên cứu các tư liệu viết về biển đảo Việt Nam, đặc biệt là những tư liệu viết về hai quần đảo Hoàng Sa, Trường Sa của Việt Nam và nhóm tư liệu về thương mại biển. Thế nhưng, những công trình về văn học biển đảo còn tương đối ít, đặc biệt là văn học trung đại. Một số chùm thơ về biển đảo Quảng Ninh, cửa biển Bạch Đằng, cửa biển Thần Phù, các chùm thơ về Hà Tiên của nhóm Chiêu Anh Các dù đã được giới thiệu đây đó, song vẫn chưa đủ để tạo nên một diện mạo tổng quan về âm hưởng biển đảo trong thơ văn người xưa. Các công trình nghiên cứu về văn học biển đảo lại càng hiếm hoi hơn.\r\n\r\nĐể khắc phục những điểm khuyết thiếu về tư liệu văn học thời trung đại, cuốn sách này là một nỗ lực hệ thống hóa các tác phẩm văn học được viết bằng chữ Hán và chữ Nôm phản ánh những tâm tư, tình cảm của người xưa về biển đảo Việt Nam. Cuốn sách sắp xếp các tác phẩm theo tuyến tính lịch sử từ triều Lý - Trần - Lê Sơ - Mạc - Lê trung hưng - Tây Sơn - Nguyễn đến đầu thế kỷ XX.\r\n\r\nCuốn sách này được hoàn thiện từ đề tài cơ sở do tác giả Trần Trọng Dương làm chủ nhiệm năm 2016, Viện Nghiên cứu Hán Nôm chủ trì. Sau sáu năm hoàn thiện, bổ sung, chú thích, hiệu chỉnh bản dịch và khảo cứu địa danh, đến nay cuốn sách được hoàn thiện với hơn 1000 trang.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2013-02-28', '59d43d75da58c5b689cde36f06e28553.jpg.webp'),
(17, 'Vết thương hoa hồng - Nguyễn Văn Học', 6, 1, 60000, 25, 'Tiểu thuyết “Vết thương hoa hồng” độc giả không chỉ được chìm trong những câu văn đẹp về con người và phong cảnh miền quê Việt Nam mà còn bị ám ảnh bởi những lớp nghĩa ẩn mà tác giả muốn truyền tải. “Vết thương hoa hồng” là tác phẩm chạm được vào những vấn đề đang nhức nhối của những miền quê đang đứng trước sự thay đổi diện mạo từng ngày. Qua lăng kính của tác giả bất kỳ ai cũng sẽ thấy những thân phận và các vấn đề mới của nông thôn được miêu tả hết sức uyển chuyển và đau đớn.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2020-02-04', '0d0d6b0d9d7f329719adcf50f0a2b153.jpg.webp'),
(19, 'Văn học Anh - Gulliver du kí', 1, 1, 152000, 100, 'Nội dung:\r\n\r\nChắc rằng chưa ai có những cuộc phiêu lưu kì thú như chàng bác sĩ - thủy thủ Gulliver. Gặp bão, giạt vào xứ sở tí hon, rơi vào đất nước khổng lồ, lang thang trên đảo bác học, chia sẻ cuộc sống với những người - ngự mỗi trang viết đều đầy ắp sự kiện và yếu tố bất ngờ.\r\n\r\nGulliver du kí đã được dịch ra hàng trăm thứ tiếng, được giới thiệu bằng sách, bằng phim, bằng các đồ chơi lưu niệ mấy trăm năm nay vẫn được hàng triệu triệu bạn đọc đón chà\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2010-02-23', '75eb716da75fc99bef14ac44f2024e6c.jpg.webp'),
(20, 'Kỹ Năng Sống - Em Học Cách Quản Lý Thời Gian', 3, 4, 1520000, 189, 'Bộ sách KỸ NĂNG SỐNG gồm 6 cuốn giúp học sinh tiểu học dễ dàng làm quen, học tập và rèn luyện các kỹ năng cơ bản trong học tập và sinh hoạt thường này. Đây đều là những kỹ năng cơ bản nhưng đóng vai trò rất quan trọng trong quá trình hình thành và phát triển nhân cách sau này của các em. Những kỹ năng sống này sẽ giúp các em có khả năng ứng phó và giải quyết các vấn đề một cách tích cực, chủ động, an toàn hơn. Đồng thời các em sẽ có xây dựng được mối quan hệ tốt đẹp với gia đình, bạn bè và mọi người xung quanh.\r\nKỹ năng sống – Em học cách quản lý thời gian là cuốn sách không thể thiếu trong quá trình rèn luyện và học cách quản lý thời gian của mỗi bạn nhỏ. Thông qua câu chuyện đầy màu sắc và ý nghĩa về kỹ năng giữ an toàn cho bản thân, các em sẽ có những trải nghiệm thú vị và dễ dàng hình thành được thói quen tốt để tích cực, chủ động hơn trong sinh hoạt hằng ngày của mình. Đồng thời, các em cũng sẽ chủ động hơn trong học tập, cũng như xây dựng được những mối quan hệ tốt đẹp với gia đình, bạn bè và mọi người xung quanh.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2019-01-08', '2e0fc9425f78cad3ac169a6e0289a7f2.jpg.webp'),
(21, 'Ehon Kỹ Năng Sống - Khéo Léo Dùng Đôi Tay', 7, 4, 50000, 23, 'Việc nhà gồm có lau chùi, giặt giũ, dọn dẹp và rất nhiều công việc khác hàng ngày. Cuốn sách này giới thiệu đầy đủ, các việc nhà và cách thức làm từng việc bằng lời hướng dẫn đơn giản và hình minh họa sinh động, để các bạn nhỏ từ mẫu giáo lớn đến cuối tiểu học đều thực hiện được.\r\n\r\nCùng làm việc nhà cũng là cơ hội tuyệt vời để con cái duy trì giao tiếp cùng bố mẹ. Cả gia đình hãy cùng nhau làm việc nhà trong tiếng cười đùa hạnh phúc nhé!\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2022-12-01', 'b37c0daf2773f5033bc61907600259b2.jpg.webp'),
(22, 'Em Học Cách Giao Tiếp & Ứng Xử Ở Trường', 8, 4, 560000, 699, 'Bộ sách KỸ NĂNG SỐNG gồm 6 cuốn giúp học sinh tiểu học dễ dàng làm quen, học tập và rèn luyện các kỹ năng cơ bản trong học tập và sinh hoạt thường này. Đây đều là những kỹ năng cơ bản nhưng đóng vai trò rất quan trọng trong quá trình hình thành và phát triển nhân cách sau này của các em. Những kỹ năng sống này sẽ giúp các em có khả năng ứng phó và giải quyết các vấn đề một cách tích cực, chủ động, an toàn hơn. Đồng thời các em sẽ có xây dựng được mối quan hệ tốt đẹp với gia đình, bạn bè và mọi người xung quanh.\r\nKỹ năng sống – Em học cách giao tiếp và ứng xử ở trường là cuốn sách không thể thiếu trong quá trình rèn luyện và xây dựng thói quen giao tiếp, ứng xử của mỗi bạn nhỏ. Thông qua câu chuyện đầy màu sắc và ý nghĩa, kết hợp với những hoạt động củng cố đa dạng, các em sẽ có những trải nghiệm thú vị để tích cực, chủ động hơn trong học tập, cũng như xây dựng những mồi quan hệ tốt đẹp với gia đình, bạn bè và mọi người xung quanh.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2018-01-03', '7ca1e56da4153dd7b2ba2eff395dee30.jpg.webp'),
(23, 'Đầu Tư Tài Chính (Investments)', 6, 5, 610000, 200, '*Nội dung sách Đầu Tư Tài Chính (Investments) lần thứ 10 có gì hấp dẫn?\r\n\r\nCuốn sách Đầu Tư Tài Chính ấn bản thứ mười này được sản xuất với mục đích là một cuốn sách giáo khoa cho các khoa học về phân tích đầu tư. Nguyên tắc của cuốn sách này vẫn là những lý thuyết dễ hiểu, sát sườn và cơ bản nhất quán nhất, nghĩa là đã loại bỏ đi rất nhiều chi tiết mang tính kỹ thuật và toán học không cần thiết.\r\n\r\nSâu hơn nữa, cuốn sách cũng giới thiệu tới cho bạn các vấn đề chính hiện đang là mối quan tâm của tất cả các nhà đầu tư nhằm lấy đó làm chuẩn để cung cấp cho bạn các kiến thức để nhận định và đánh giá thị trường một cách chuyên ngành. Hay đơn giản hơn là hướng tới giá trị thực tiễn.\r\n\r\nĐặc biệt trong Đầu Tư Tài Chính tái bản lần thứ 10 này nhấn mạnh tới việc phân tích sự thay đổi trong môi trường đầu tư bao gồm cả các sự kiện xung quanh cuộc khủng hoảng tài chính xảy ra gần đây. Đồng thời theo kịp thời đại bằng cách lọc bỏ các nguyên tắc rườm rà không cần thiết nữa, để đưa ra những nguyên tắc thật đúng, thật chuẩn mà có thể áp dụng trong thời điểm hiện tại được.\r\n\r\nNhững nguyên tắc này đương nhiên là hết sức quan trọng cho những ai đang giao dịch trên thị trường tài chính và toàn cầu.\r\n\r\nTất cả các thị trường như hợp đồng giao sau, quyền chọn, chứng khoán phái sinh, tài chính….đều được đề cập tới trong quyển sách đại cương này. Một vài kiến thức trong sách cũng thực sự tiệm cận rất gần các kiến thức của CFA (Charactered Financial Analyst).\r\n\r\n \r\n\r\n*Mục lục sách Đầu Tư Tài Chính (Investments)\r\n\r\nPhần I: Giới thiệu\r\nChương 1: Môi trường đầu tư\r\nChương 2: Các lớp tài sản và các công cụ tài chính\r\nChương 3: Các chứng khoán được giao dịch như thế nào\r\nChương 4: Quỹ tương hỗ và các công ty đầu tư khác\r\nPhần II: Lý thuyết và thực hành danh mục đầu tư\r\nChương 5: Rủi ro, tỷ suất sinh lời và dữ liệu quá khứ\r\nChương 6: Phân bổ vốn cho các tài sản rủi ro\r\nChương 7: Các danh mục rủi ro tối ưu\r\nChương 8: Mô hình chỉ số\r\nPhần III: Lý thuyết và thực hành danh mục đầu tư\r\nChương 9: Mô Hình Định Giá Tài Sản Vốn\r\nChương 10: Lý thuyết kinh doanh chênh lệch giá và mô hình đa nhân tố của tỷ suất sinh lợi và rủi ro\r\nChương 11: Giả thuyết thị trường hiệu quả\r\nChương 12: Tài chính hành vi và \r\nChương 13: Bằng chứng thực nghiệm về tỷ suất sinh lời của chứng khoán\r\nPhần IV: Chứng khoán có thu nhập cố định\r\nChương 14: Giá và lợi suất trái phiếu\r\nChương 15: Cấu trúc kỳ hạn của lãi suất\r\nChương 16: Quản lý danh mục đầu tư trái phiếu\r\nPhần V: Phân tích chứng khoán\r\nChương 17: Phân tích nền kinh tế vĩ mô và ngành\r\nChương 18: Các mô hình định giá vốn cổ phần\r\nChương 19: Phân tích báo cáo tài chính\r\nPhần VI: Hợp đồng quyền chọn, hợp đồng tương lai và chứng khoán phát sinh khác\r\nChương 20: Thị trường quyền chọn: Giới thiệu\r\nChương 21: Định giá quyền chọn\r\nChương 22: Thị trường giao sau\r\nChương 23: Giao sau, hoán đổi và quản trị rủi ro\r\nPhần VII: Thực hành quản lý danh mục đầu tư\r\nChương 24: Đánh giá thành quả danh mục đầu tư\r\nChương 25: Đa dạng hóa toàn cầu\r\nChương 26: Quỹ đầu cơ\r\nChương 27: Lý thuyết quản lý danh mcụ đầu tư theo chiến lược năng động\r\nChương 28: Chính sách và khuôn khổ đầu tư của tổ chức CFA\r\n\r\n \r\n\r\n * Sách mang tính chất học thuật\r\n\r\n \r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2014-03-03', '84782bd678ce87da55e8f8277d9fcb41.jpg.webp'),
(24, 'Nghệ Thuật Quản Lý Tài Chính Cá Nhân', 3, 5, 215000, 320, 'Nghệ Thuật Quản Lý Tài Chính Cá Nhân\r\nTIỀN BẠC là niềm đam mê bất tận và nỗi khổ đau cùng cực của nhân loại, là chủ đề cực độ nhạy cảm nhưng tột cùng cuốn hút trong xã hội loài người. Người ta kiếm tiền, tiêu tiền, lại lo lắng nghĩ cách kiếm tiền, rồi tự hỏi tại sao cuộc đời mình khó khăn đến thế. Ai cũng muốn đạt được một cuộc đời tự do về tài chính, nhưng bạn thực sự dành ra bao nhiêu tâm huyết và sức lực để giành lấy nó? Bạn có nghiêm túc suy nghĩ cải thiện năng lực kiếm tiền của bản thân, thận trọng tính toán khi chi tiêu, và khôn khéo cân nhắc lúc đầu tư? Hay nói trắng ra, bạn đã chú ý quản lý tài chính cá nhân đến mức nào để trở nên tự do tài chính?\r\n\r\nBất chấp vô số công trình nghiên cứu vi mô và vĩ mô, hiểu biết của cộng đồng về tiền bạc vẫn còn rất mơ hồ, và thái độ của mọi người về quản lý tài chính cá nhân vẫn còn rất mông lung.\r\n\r\nTrong cuốn sách “Nghệ thuật quản lý tài chính cá nhân”, Brian Tracy cùng cộng sự Dan Strutzel sẽ liên tục vén lên những bức màn bí ẩn về tiền bạc, mạnh mẽ xóa sạch mọi nhầm tưởng hoang đường, thẳng thắn điểm mặt chỉ tên từng hành vi và thái độ lố bịch của con người trong việc kiếm tiền, tiêu tiền và sản sinh dòng tiền; đồng thời trực tiếp phơi bày cho bạn thấy, trong bộ môn nghệ thuật quản lý tài chính cá nhân vĩ đại, bạn là tay mơ hay một nghệ sĩ đại tài.\r\n\r\nDù bạn cuồng say hay căm ghét đồng tiền, tôn sùng hay chối bỏ nó, bạn cũng không thể thoát khỏi vòng xoáy của nó. Hãy học cách làm chủ đồng tiền, làm chủ cuộc chơi với một trong những tác phẩm mới nhất của tác giả nổi tiếng Brian Tracy.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....', '2023-10-17', 'cdb900ecbb6656a0c3b5003b7f580d01.jpg.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Văn học'),
(4, 'Kỹ năng sống'),
(5, 'Kinh tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `detail_date` datetime NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`detail_id`, `order_id`, `book_id`, `quantity`, `detail_date`, `payment_id`, `payment_status`) VALUES
(5, 1, 10, 1, '2023-10-16 19:44:31', 1, 1),
(6, 1, 11, 1, '2023-10-16 19:51:13', 1, 1),
(9, 1, 19, 1, '2023-10-16 22:51:42', 1, 1),
(10, 1, 16, 4, '2023-10-16 23:55:06', 1, 1),
(11, 1, 15, 1, '2023-10-17 00:32:20', 1, 1),
(12, 1, 16, 1, '2023-10-17 00:47:31', 2, 1),
(13, 1, 16, 2, '2023-10-17 03:35:23', NULL, 0),
(15, 1, 23, 2, '2023-10-17 04:15:31', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `total_amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`payment_id`, `user_id`, `payment_date`, `total_amount`) VALUES
(1, 10, '2023-10-17 00:46:25', 3255401),
(2, 10, '2023-10-17 00:47:35', 700100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`, `address`, `mobile`, `role`) VALUES
(1, 'admin', '2', 'Huy', 'tranhuy@gmail.com', 'Ha Noi', '0965199203', 0),
(10, 'tranhuy', '1', 'Trần Huy', 'tranhuy1597@gmail.com', 'Hà Nội', '096555555', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Chỉ mục cho bảng `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
