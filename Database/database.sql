CREATE DATABASE IF NOT EXISTS  data_php;
USE data_php;


CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255),
    role_id INT,
    img VARCHAR(255),
    address varchar(255),
    phone_number int,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO users (name, email, password, role_id, img, address, phone_number)
VALUES
    ('Nguyễn Sĩ Hùng', 'hungsi@gmail.com', 'Hung@#sd23090', 3, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '123 Đường Trần Phú, Quận Hải Châu, Đà Nẵng, Việt Nam', '093237623'),
    ('Trần Đức Hùng', 'hung.duc@gmail.com', 'Hung@#$jsdgh6253', 3, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '456 Đường Bạch Đằng, Quận Hòa Vang, Đà Nẵng, Việt Nam', '087623781'),
    ('Nguyễn Bích Thủy', 'bichthhuy234@gmail.com', 'thuy90@22@#d', 3, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '789 Đường Nguyễn Văn Linh, Quận Sơn Trà, Đà Nẵng, Việt Nam', '087623231'),
    ('Trần Thị Mỹ Tâm', 'tranthimytam09@gmail.com', 'sdjh%#$%543sjdh', 3, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '321 Đường Ngô Quyền, Quận Liên Chiểu, Đà Nẵng, Việt Nam', '082362233'),
    ('Lê Văn Thắng', 'thang@gmail.com', 'sdasj%$Shew52', 3, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '987 Đường Nguyễn Hữu Thọ, Quận Cẩm Lệ, Đà Nẵng, Việt Nam', '012834642');

create table roles (
	id int primary key,
    name varchar(100)
 );
 INSERT INTO roles (id, name) VALUES
(1, 'admin'),
(2, 'client'),
(3, 'expert');


CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    auth varchar(100),
    created_by VARCHAR(50),
    updated_by VARCHAR(50),
    like_count INT,
    isAnonymous BOOLEAN,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
INSERT INTO posts (user_id, auth, created_by, updated_by, like_count, isAnonymous, content, created_at, updated_at)
VALUES (2, 'pham gia bao', 'pham gia bao', 'pham gia bao', 23, 1, 'Bame à, con áp lực với con số. Nó một ngày một lớn. Con không biết phải làm sao nữa. Bame à.', '2023-10-12', '2023-10-12'),
       (3, 'vân thư', 'vân thư', 'vân thư', 323, 0, 'MẬP TRĂM KÍ LÀ CẢM GIÁC như thế nào?\nLà được nhận những lời trêu đùa từ mọi người?\nLà đứa đi đâu cũng ngại. Lên xe của bạn thì sợ bể lốp. Áo mượn của bạn thì sợ bị rách.\nCác cậu cho cách nào giúp tớ không? Tớ không có nhiều thời gian cũng như chi phí để đến các phòng tập gym.', '2023-10-12', '2023-10-12'),
       (2, 'việt mỹ', 'việt mỹ', 'việt mỹ', 232, 1, 'Xin chào tất cả các bạn,\nChắc hẳn các bạn đang rất mệt mỏi và áp lực về nhiều thứ, nhưng nếu các bạn mãi tiêu cực như vậy, bạn sẽ cứ thế chôn vùi tương lai tươi đẹp phía trước của mình. Và tôi biết rằng để các bạn có thể tích cực và vui vẻ trở lại rất khó khăn, nhưng hãy cố gắng thực hiện theo các tips này để có thể cải thiện từng chút một nhé.\n', '2023-10-12', '2023-10-12'),
       (3, 'bích quyên', 'bích quyên', 'bích quyên', 121, 1, 'Xin chào mọi người,\nHôm nay, tôi muốn mở lòng và chia sẻ với các bạn về tình trạng trầm cảm mà tôi đang trải qua. Đôi khi, cuộc sống có thể trở nên khó khăn và cảm giác trầm cảm đã ập đến lấn át tâm trí của tôi.\nTrong những tháng qua, tôi đã phải đối mặt với cuộc chiến với trầm cảm. Cảm giác u ám và mệt mỏi vẫn luôn hiện diện trong cuộc sống hàng ngày của tôi. Đôi khi, nó khiến tôi cảm thấy như một cuộc đấu tranh không có hồi kết. Tôi cảm thấy mất đi sự hứng thú và niềm vui với những điều trước đây tôi thường thích. Cảm xúc này thật khó diễn tả và đôi khi tôi cảm thấy mình bị lạc trong một thế giới tối tăm. Các bạn có đang gặp tình trạng giống tôi không?', '2023-10-12', '2023-10-12');


CREATE TABLE  podcasts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    description TEXT,
    author VARCHAR(50),
    youtube_link VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    image_url VARCHAR(255),
    type VARCHAR(100),
    view int
);

INSERT INTO podcasts (title, description, author, youtube_link, created_at, image_url, type, view)
VALUES ('#60 Gửi trái tim tan vỡ của tôi', 'Chào các bạn, mình là Sun. Các bạn đang lắng nghe Sunhuyn Podcast. Nếu có những ngày cảm thấy chênh vênh hãy quay về đây và yêu lấy chính mình. Cùng lắng nghe và thấu hiểu.', 'Sunhuyn Podcast', 'https://www.youtube.com/embed/pZTjXtkPam0?si=wnP82s0G_dOnVRFt', '2023-08-08', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 'Tình yêu', 100),
('Cách để đối diện với tiêu cực và vượt qua nó cùng Khánh Vy | ĐCNNTK #10', 'Đắp Chăn Nằm Nghe Tun Kể là series podcast đầu tiên của Tun, nơi Tun và các bạn có thể trải lòng với nhau về những điều mệt mỏi trong cuộc sống, cùng cho nhau những lời khuyên hay ho, cùng chữa lành những tổn thương, đổ vỡ để trái tim tụi mình một lần nữa được ngập tràn yêu thương.', 'Tun Cảm Ơn', 'https://www.youtube.com/embed/bdK95yNhIP0?si=EjvSPZ0F9ZxxE-43', '2022-04-09', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 'Gia đình', 309),
('Cách vượt qua ÁP LỰC học tập và điểm số', 'Những kỳ thi cuối năm sắp tới, và mình hiểu có thể các bạn đang gặp nhiều áp lực học tập và điểm số đến chừng nào! Bạn có bao giờ cảm xúc tiêu cực vì bị so sánh với "con nhà người ta"? Mình sẽ ở đây để chia sẻ cùng các bạn. Hãy luôn vững tin và học tập với một niềm yêu thích và đam mê nhé ❤️', 'Vừng', 'https://www.youtube.com/embed/-y4N5aXLbDo?si=t9QVCITIFRqG3SCD', '2021-12-10', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 'Học tập', 232),
("Đối mặt với TỰ TI NGOẠI HÌNH // sự thật về mặc cảm cơ thể, body shaming, tips yêu cơ thể",
"Bạn có từng cảm thấy tự ti về ngoại hình của mình? Hay có những mặc cảm về cơ thể mà bạn không biết làm thế nào để vượt qua? Nếu câu trả lời là 'có,' thì video này chính là dành cho bạn! Trong video này, mình sẽ cùng thảo luận và chia sẻ về chủ đề tự ti ngoại hình và mặc cảm cơ thể. Với những nội dung độc đáo và sâu sắc, chúng tôi hy vọng sẽ mang đến cho bạn những thông tin hữu ích và truyền cảm hứng để bạn tự tin hơn với bản thân mình. Tại đây, bạn sẽ tìm thấy các video về cách xây dựng lòng tự tin, tư vấn về làm đẹp và phong cách, cũng như những câu chuyện thành công của những người đã vượt qua mặc cảm của mình. Chúng tôi cung cấp những lời khuyên thiết thực và chi tiết, giúp bạn hiểu rõ hơn về nguyên nhân và cách giải quyết các vấn đề ngoại hình và cơ thể. Nếu bạn đang tìm kiếm các từ khóa như 'tự ti về ngoại hình,' 'vượt qua mặc cảm cơ thể,' hay 'tự tin trong cuộc sống,' thì bạn đã đến đúng nơi! Chúng tôi tối ưu hóa nội dung của video để đáp ứng nhu cầu của bạn và giúp bạn tìm thấy chúng dễ dàng.",
"Vừng",
"https://www.youtube.com/embed/8XH96t4aY0c?si=fOewaJlFtpUjY0-f",
"2023-05-26",
"https://cdn-icons-png.flaticon.com/512/3177/3177440.png",
"Body shaming",
345),
("GIẢM STRESS & KHỞI ĐỘNG LẠI CUỘC SỐNG với 15 THÓI QUEN TÍCH CỰC // My Reset Routine",
"Tuần vừa rồi, mình đã trải qua một giai đoạn rất mệt mỏi và căng thẳng. Dấu hiệu của stress thể hiện rõ ràng trên cả thể chất lẫn tinh thần của mình. Bởi vậy, mình quyết định dành ra một ngày để thực hiện 'reset routine' — một chu trình mình thường làm để khởi động lại cuộc sống và tìm về sự cân bằng trong nội tại. Trong video này, mình chia sẻ với các bạn chu trình này của mình, bao gồm 15 thói quen tí hon giúp bạn giảm nhanh stress và sớm tìm về sự an yên trong tâm hồn.",
"The Present Writer",
"https://www.youtube.com/embed/W4qAUflnlv0?si=dVVPyMgWHnps_49N",
"2022-03-31",
"https://cdn-icons-png.flaticon.com/512/3177/3177440.png",
"Stress",
123);

CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
);

INSERT INTO categories (id, name)
VALUES (1, 'động lực'),
(2, 'thiên nhiên'),
(3, 'con người'),
(4, 'sức khỏe'),
(5, 'tình yêu'),
(6, 'gia đình'),
(7, 'bạn bè'),
(8, 'cảm xúc'),
(9, 'tính cách'),
(10, 'niềm tin');


CREATE TABLE IF NOT EXISTS podcasts_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    podcast_id INT,
    category_id INT,
    FOREIGN KEY (podcast_id) REFERENCES podcasts(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
INSERT INTO podcasts_categories (podcast_id, category_id)
VALUES (1, 3),
( 3, 4),
( 2, 2),
(5, 1),
(4, 5);

CREATE TABLE  user_preferences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    category_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);


INSERT INTO user_preferences (user_id, category_id) VALUES (1, 1);
INSERT INTO user_preferences (user_id, category_id) VALUES (1, 2);
INSERT INTO user_preferences (user_id, category_id) VALUES (2, 3);
INSERT INTO user_preferences (user_id, category_id) VALUES (2, 4);
INSERT INTO user_preferences (user_id, category_id) VALUES (3, 1);
INSERT INTO user_preferences (user_id, category_id) VALUES (3, 3);
INSERT INTO user_preferences (user_id, category_id) VALUES (4, 2);
INSERT INTO user_preferences (user_id, category_id) VALUES (4, 4);
INSERT INTO user_preferences (user_id, category_id) VALUES (5, 1);
INSERT INTO user_preferences (user_id, category_id) VALUES (5, 4);


CREATE TABLE  videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    youtube_link VARCHAR(255),
    title VARCHAR(255),
    author varchar(50),
    description TEXT,
    duration INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    type VARCHAR(255),
    view varchar(50)
);
INSERT INTO videos (youtube_link, title, author, description , duration, type, view)
VALUES
('https://www.youtube.com/embed/vTJdVE_gjI0?si=_lpmC8RRqEKdQv4x', 'Video 1', 'Author 1','Description for Video 1',120, 'động lực','23'),
('https://www.youtube.com/embed/XWhdbZ9-uGA?si=3z39LhTPNEfzwcuS', 'Video 2', 'Author 2','Description for Video 2', 120, 'gia đình','123'),
('https://www.youtube.com/embed/gOtfJ151ue4?si=t3TlawuWaCbKpGoB', 'Video 3', 'Author 3','Description for Video 3', 120, 'tình yêu','232'),
('https://www.youtube.com/embed/EEYBOJaDBGQ?si=EKsqI0iwmzDzmzQG', 'Video 6','Author 4', 'Description for Video 6',120, 'thiên nhiên','32'),
('https://www.youtube.com/embed/Au6LqK1UH8g?si=cHkDbSidgVhSVAEP', 'Video 4', 'Author 5','Description for Video 4',120, 'động lực','232'),
('https://www.youtube.com/embed/vTJdVE_gjI0?si=_lpmC8RRqEKdQv4x', 'Video 1', 'Pham Gia Bảo','Description for Video 1', 120, 'động lực','912'),
('https://www.youtube.com/embed/XWhdbZ9-uGA?si=3z39LhTPNEfzwcuS', 'Video 2', 'Võ Thị Vân Thư','Description for Video 2',120, 'gia đình','127'),
('https://www.youtube.com/embed/gOtfJ151ue4?si=t3TlawuWaCbKpGoB', 'Video 3', 'Author 6','Description for Video 3',120, 'tình yêu','232'),
('https://www.youtube.com/embed/EEYBOJaDBGQ?si=EKsqI0iwmzDzmzQG', 'Video 6','Author 7', 'Description for Video 6', 120, 'thiên nhiên','321'),
('https://www.youtube.com/embed/Au6LqK1UH8g?si=cHkDbSidgVhSVAEP', 'Video 4','Author 8', 'Description for Video 4',120, 'động lực','763'),
('https://www.youtube.com/embed/18mSyyOQua0?si=Hl7vG1-x1fUjKfAV', 'Video 5', 'Author 9','Description for Video 5',120, 'gia đình','776');



CREATE TABLE IF NOT EXISTS video_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    video_id INT,
    category_id INT,
    FOREIGN KEY (video_id) REFERENCES videos(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
INSERT INTO video_categories (video_id, category_id) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 3),
(3, 1),
(3, 3),
(4, 2),
(4, 3),
(5, 1),
(5, 2);


CREATE TABLE comment_videos
(
    id INT PRIMARY KEY,
    content TEXT,
    author varchar(50),
    created_at TIMESTAMP,
    video_id INT,
    user_id int,
    like_count int,
    dislike_count int ,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (video_id) REFERENCES videos(id)
);

INSERT INTO comment_videos (id, content, author, created_at, video_id, user_id, like_count, dislike_count)
VALUES
(1, 'Great video!', 'John Doe', '2023-01-01 10:00:00', 1, 1, 23, 1),
(2, 'I learned a lot from this video.', 'Jane Smith', '2023-01-02 15:30:00', 1, 3, 212, 3),
(3, 'Could you explain this further?', 'Michael Johnson', '2023-01-03 08:45:00', 2, 2, 323, 32),
(4, 'Nice work!', 'Emily Davis', '2023-01-04 12:20:00', 2, 4, 43, 4),
(5, 'This video is very informative.', 'Robert Wilson', '2023-01-05 09:10:00', 3, 1, 34, 4),
(6, 'I have a question regarding the topic.', 'Sophia Thompson', '2023-01-06 14:05:00', 3, 5, 56, 12),
(7, 'Thanks for sharing!', 'John Doe', '2023-01-07 17:55:00', 4, 5, 21, 2),
(8, 'I enjoyed watching this video.', 'Jane Smith', '2023-01-08 11:30:00', 4, 2, 98, 4),
(9, 'Can you provide more examples?', 'Michael Johnson', '2023-01-09 13:40:00', 5, 2, 45, 4),
(10, 'I found this video very helpful.', 'Emily Davis', '2023-01-10 16:25:00', 5, 1, 234, 43);
select * from comment_videos where video_id = 2;


CREATE TABLE comment_posts (
  id INT PRIMARY KEY,
  content TEXT,
  author varchar(50),
  created_at TIMESTAMP,
  post_id INT,
  FOREIGN KEY (post_id) REFERENCES posts(id)
);

INSERT INTO comment_posts (id, content, author, created_at, post_id) VALUES
(1, 'Great post!', 'John Doe', '2023-01-01 10:00:00', 1),
(2, 'I agree with your points.', 'Jane Smith', '2023-01-02 15:30:00', 1),
(3, 'This post is very informative.', 'Michael Johnson', '2023-01-03 08:45:00', 2),
(4, 'Nice work!', 'Emily Davis', '2023-01-04 12:20:00', 2),
(5, 'I have a question regarding the topic.', 'Robert Wilson', '2023-01-05 09:10:00', 3),
(6, 'Thanks for sharing!', 'Sophia Thompson', '2023-01-06 14:05:00', 3),
(7, 'I enjoyed reading this post.', 'John Doe', '2023-01-07 17:55:00', 4),
(8, 'This post provided valuable insights.', 'Jane Smith', '2023-01-08 11:30:00', 4),
(9, 'Can you provide more examples?', 'Michael Johnson', '2023-01-09 13:40:00', 1),
(10, 'Good job!', 'Emily Davis', '2023-01-10 16:25:00', 4);


CREATE TABLE experts (
  id INT PRIMARY KEY,
  full_name varchar(255),
  gender VARCHAR(10),
  address VARCHAR(255),
  email VARCHAR(255),
  phone_number VARCHAR(20),
  age INT,
  experience varchar(100),
  profile_picture VARCHAR(255),
  count_rating INT,
  certificate varchar(255)
);

INSERT INTO experts (id,full_name, gender, address, email, phone_number, age, experience, profile_picture, count_rating, certificate) VALUES
(1, 'Hồ Thị Mỹ Anh', 'Male', '123 Ngô Quyền, Hải Châu, Đà Nẵng.', 'john.doe@example.com', '1234567890', 30, 'Kinh nghiệm tư vấn tâm lý trong trường hợp trầm cảm và lo âu trong 7 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 10, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(2, 'Nguyễn Anh Tú','Male', '456 Trần Phú, Thanh Khê, Đà Nẵng.', 'jane.smith@example.com', '9876543210', 35, 'Kinh nghiệm làm việc với các vấn đề tâm lý của trẻ em và gia đình trong 5 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 15, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(3, 'Phạm Minh Đức','Male', '789 Lê Duẩn, Sơn Trà, Đà Nẵng.', 'michael.johnson@example.com', '4567890123', 40, 'Kinh nghiệm tư vấn tâm lý cá nhân và hôn nhân trong 10 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 20, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(4,'Hoàng Thị Diễm Trang', 'Female', '321 Bạch Đằng, Hòa Vang, Đà Nẵng.', 'emily.davis@example.com', '3210987654', 28, 'Kinh nghiệm trong việc hỗ trợ những người gặp khó khăn trong quá trình luyện phục hồi sau chấn thương trong 3 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(5,'Huỳnh Thị Hường', 'Male', '654 Nguyễn Văn Linh, Liên Chiểu, Đà Nẵng.', 'robert.wilson@example.com', '7890123456', 32, 'Kinh nghiệm tư vấn tâm lý cho người già và chăm sóc tâm lý cho người cao tuổi trong 8 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 12, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(6, 'Phạm Thị Ngọc Trâm', 'Female', '987 Điện Biên Phủ, Cẩm Lệ, Đà Nẵng.', 'sophia.thompson@example.com', '2109876543', 38, 'Kinh nghiệm làm việc với các vấn đề tự hại và tư vấn sự phục hồi sau tổn thương trong 6 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 18, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(7, 'Đặng Quang Minh','Male', '234 Hàn Thuyên, Ngũ Hành Sơn, Đà Nẵng.', 'william.johnson@example.com', '5678901234', 45, 'Kinh nghiệm tư vấn tâm lý trong quá trình giải quyết xung đột gia đình và hỗ trợ hòa giải trong 4 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 25, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(8, 'Bùi Thị Lan','Female', '567 Yên Bái, Cẩm Lệ, Đà Nẵng.', 'olivia.brown@example.com', '9012345678', 26, 'Kinh nghiệm tư vấn tâm lý trong việc quản lý căng thẳng và xử lý áp lực công việc trong 9 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 3, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(9, 'Đỗ Hải Nam','Male', '890 Trường Sa, Hòa Hải, Đà Nẵng.', 'james.anderson@example.com', '4321098765', 33, 'Kinh nghiệm tư vấn tâm lý cho người mắc các rối loạn ăn uống và hỗ trợ phục hồi sau rối loạn dinh dưỡng trong 7 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 16, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg'),
(10, 'Lê Hoàng Yến', 'Female', '432 Lý Thường Kiệt, Sơn Trà, Đà Nẵng.', 'emma.johnson@example.com', '8765432109', 29, 'Kinh nghiệm tư vấn tâm lý cho người sống với bệnh tật và hỗ trợ tâm lý cho người chăm sóc trong 10 năm.', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 9, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg');

CREATE TABLE bookings (
  id INT PRIMARY KEY,
  user_id INT,
  expert_id INT,
  appointment_time DATETIME,
  note TEXT,
  created_at DATETIME,
  status VARCHAR(20),
  rating INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (expert_id) REFERENCES experts(id)
);

INSERT INTO bookings (id, user_id, expert_id, appointment_time, note, created_at, status, rating) VALUES
(1, 1, 1, '2023-01-01 10:00:00', 'Please prepare the necessary documents.', '2023-01-01 09:30:00', 'Confirmed', 4),
(2, 2, 2, '2023-01-02 14:30:00', 'I need assistance with project management.', '2023-01-02 13:45:00', 'Confirmed', 5),
(3, 3, 3, '2023-01-03 11:15:00', 'I have some questions about programming languages.', '2023-01-03 10:45:00', 'Confirmed', 3),
(4, 4, 4, '2023-01-04 16:00:00', 'I would like to discuss marketing strategies.', '2023-01-04 15:30:00', 'Confirmed', 5),
(5, 5, 5, '2023-01-05 13:45:00', 'I need advice on financial planning.', '2023-01-05 13:15:00', 'Confirmed', 4),
(6, 1, 6, '2023-01-06 09:30:00', 'I need help with graphic design.', '2023-01-06 09:00:00', 'Confirmed', 5),
(7, 2, 7, '2023-01-07 14:00:00', 'I want to discuss career development.', '2023-01-07 13:30:00', 'Confirmed', 4),
(8, 3, 8, '2023-01-08 11:45:00', 'I have questions about data analysis.', '2023-01-08 11:15:00', 'Confirmed', 3),
(9, 4, 9, '2023-01-09 16:30:00', 'I need guidance on project planning.', '2023-01-09 16:00:00', 'Confirmed', 5),
(10, 5, 10, '2023-01-10 12:15:00', 'I want to discuss leadership skills.', '2023-01-10 11:45:00', 'Confirmed', 4);


 CREATE TABLE calendar (
  id INT PRIMARY KEY,
  day DATE,
  start_time TIME,
  end_time TIME,
  price DECIMAL(10, 2),
  describer  TEXT,
  expert_id INT,
  FOREIGN KEY (expert_id) REFERENCES experts(id)
);
INSERT INTO calendar (id, day, start_time, end_time, price, describer, expert_id) VALUES
(1, '2023-01-01', '09:00:00', '11:00:00', 50.00, 'Morning availability', 1),
(2, '2023-01-01', '14:00:00', '16:00:00', 60.00, 'Afternoon availability', 1),
(3, '2023-01-02', '10:00:00', '12:00:00', 70.00, 'Morning availability', 2),
(4, '2023-01-02', '15:00:00', '17:00:00', 55.00, 'Afternoon availability', 2),
(5, '2023-01-03', '11:00:00', '13:00:00', 45.00, 'Morning availability', 3),
(6, '2023-01-03', '16:00:00', '18:00:00', 70.00, 'Afternoon availability', 3),
(7, '2023-01-04', '09:00:00', '11:00:00', 50.00, 'Morning availability', 4),
(8, '2023-01-04', '14:00:00', '16:00:00', 60.00, 'Afternoon availability', 4),
(9, '2023-01-05', '10:00:00', '12:00:00', 65.00, 'Morning availability', 5),
(10, '2023-01-05', '15:00:00', '17:00:00', 55.00, 'Afternoon availability', 5);

select * from calendar;

CREATE TABLE news (
  id INT PRIMARY KEY,
  title VARCHAR(255),
  content TEXT,
  img VARCHAR(255),
  link_new VARCHAR(255)
);

INSERT INTO news (id, title, content, img, link_new) VALUES
(1, '10 Cách để Cải thiện Sức khỏe Tinh thần hàng ngày', 'Hãy khám phá 10 cách đơn giản nhưng hiệu quả để cải thiện sức khỏe tinh thần của bạn mỗi ngày.', 'https://covid19.vnuhcm.edu.vn/wp-content/uploads/2021/12/Hinh_100.jpeg', 'https://www.example.com/news/1'),
(2, 'Khám phá Niềm vui trong Cuộc sống Hằng ngày', 'Tìm hiểu về những điều nhỏ nhặt mang lại niềm vui và hạnh phúc trong cuộc sống hàng ngày của bạn.', 'https://imgs.vietnamnet.vn/Images/vnn/2015/05/18/16/20150518163656-girl-in-fieldlowres.jpg', 'https://www.example.com/news/2'),
(3, 'Lợi ích của Thể thao đối với Sức khỏe', 'Đọc về những lợi ích tuyệt vời mà việc tham gia vào hoạt động thể thao mang lại cho sức khỏe của bạn.', 'sports-benefits.jpghttps://app.dr-psy.com/files/images/kham-suc-khoe-tinh-than-toan-dien-tai-dr-psy-1654137333174.jpg', 'https://www.example.com/news/3'),
(4, '5 Bước để Cải thiện Sức khỏe toàn diện', 'Tìm hiểu về 5 bước quan trọng để cải thiện sức khỏe tổng thể và tăng cường cân bằng trong cuộc sống.', 'https://image.giacngo.vn/w770/Uploaded/2023/xpcwvolc/2021_08_16/untitled-1-7908.jpg', 'https://www.example.com/news/4'),
(5, 'Bí quyết để Xây dựng Gia đình Hạnh phúc', 'Khám phá những bí quyết và gợi ý để xây dựng một gia đình hạnh phúc và đáng yêu.', 'https://benhviendakhoatinhphutho.vn/wp-content/uploads/2022/04/Anh7.jpg.webp', 'https://www.example.com/news/5'),
(6, 'Cách Tạo dựng Tình cảm chân thành trong Mối quan hệ', 'Tìm hiểu về những cách đơn giản nhưng quan trọng để tạo dựng tình cảm chân thành và gắn kết trong các mối quan hệ.', 'https://www.liena.com.vn/media/amasty/blog/cache/s/u/840/840/suc-khoe-tinh-than-Thumb.png', 'https://www.example.com/news/6'),
(7, 'Cách Giảm căng thẳng và Lo lắng trong Cuộc sống', 'Khám phá những phương pháp hiệu quả giúp giảm căng thẳng và lo lắng, mang lại sự thư thái và bình an.', 'https://admin.tamlyvietphap.vn/uploaded/Images/Original/2021/07/27/improve-psy-3_2707142251.jpg', 'https://www.example.com/news/7'),
(8, 'Lợi ích của Truyền cảm hứng và Gương mẫu trong Cuộc sống', 'Tìm hiểu về tầm quan trọng của truyền cảm hứng và có một gương mẫu tích cực trong cuộc sống của chúng ta.', 'https://vinmec-prod.s3.amazonaws.com/images/20211121_013407_655314_cai-thien-suc-khoe-.max-1800x1800.png', 'https://www.example.com/news/8'),
(9, '5 Bài tập Đơn giản giúp Cải thiện Sức khỏe toàn diện', 'Hãy thử những bài tập đơn giản nhưng hiệu quả để cải thiện sức khỏe toàn diện của bạn mỗi ngày.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8EpZmmLj2PhzZm7j_WGxhKmmb3IgnCjIzDA&usqp=CAU', 'https://www.example.com/news/9'),
(10, 'Cách Tạo không gian Hạnh phúc trong Gia đình', 'Khám phá những cách tạo ra không gian hạnh phúc và ấm cúng trong gia đình của bạn để tạo dựng sự gắn kết và tình yêu.', 'https://vinmec-prod.s3.amazonaws.com/images/20211121_013127_656501_cai-thien-suc-khoe-.max-1800x1800.jpg', 'https://www.example.com/news/10');

select  * from news;
CREATE TABLE new_categories (
  id INT PRIMARY KEY,
  new_id INT,
  category_id INT,
  FOREIGN KEY (new_id) REFERENCES news(id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);
INSERT INTO new_categories (id, new_id, category_id) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 1),
(4, 2, 5),
(5, 3, 1),
(6, 3, 3),
(7, 4, 1),
(8, 4, 6),
(9, 5, 1),
(10, 5, 7);


INSERT INTO videos (youtube_link, title, author, description , duration, type, view)
VALUES
('https://www.youtube.com/embed/vTJdVE_gjI0?si=_lpmC8RRqEKdQv4x', 'Video 1', 'Author 1','Description for Video 1',120, 'động lực','23'),
('https://www.youtube.com/embed/XWhdbZ9-uGA?si=3z39LhTPNEfzwcuS', 'Video 2', 'Author 2','Description for Video 2', 120, 'gia đình','123'),
('https://www.youtube.com/embed/gOtfJ151ue4?si=t3TlawuWaCbKpGoB', 'Video 3', 'Author 3','Description for Video 3', 120, 'tình yêu','232'),
('https://www.youtube.com/embed/EEYBOJaDBGQ?si=EKsqI0iwmzDzmzQG', 'Video 6','Author 4', 'Description for Video 6',120, 'thiên nhiên','32'),
('https://www.youtube.com/embed/Au6LqK1UH8g?si=cHkDbSidgVhSVAEP', 'Video 4', 'Author 5','Description for Video 4',120, 'động lực','232'),
('https://www.youtube.com/embed/vTJdVE_gjI0?si=_lpmC8RRqEKdQv4x', 'Video 1', 'Pham Gia Bảo','Description for Video 1', 120, 'động lực','912'),
('https://www.youtube.com/embed/XWhdbZ9-uGA?si=3z39LhTPNEfzwcuS', 'Video 2', 'Võ Thị Vân Thư','Description for Video 2',120, 'gia đình','127'),
('https://www.youtube.com/embed/gOtfJ151ue4?si=t3TlawuWaCbKpGoB', 'Video 3', 'Author 6','Description for Video 3',120, 'tình yêu','232'),
('https://www.youtube.com/embed/EEYBOJaDBGQ?si=EKsqI0iwmzDzmzQG', 'Video 6','Author 7', 'Description for Video 6', 120, 'thiên nhiên','321'),
('https://www.youtube.com/embed/Au6LqK1UH8g?si=cHkDbSidgVhSVAEP', 'Video 4','Author 8', 'Description for Video 4',120, 'động lực','763'),
('https://www.youtube.com/embed/18mSyyOQua0?si=Hl7vG1-x1fUjKfAV', 'Video 5', 'Author 9','Description for Video 5',120, 'gia đình','776');

INSERT INTO podcasts (title, description, author, youtube_link, image_url, type)
VALUES
    ('Podcast 1', 'Description 1', 'Author 1', 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'động lực'),
    ('Podcast 2', 'Description 2', 'Author 2', 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'tình yêu'),
    ('Podcast 3', 'Description 3', 'Author 3', 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'gia đình'),
    ('Podcast 4', 'Description 4', 'Author 4', 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'thiên nhiên'),
    ('Podcast 5', 'Description 5', 'Author 5', 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'thiên nhiên');

CREATE TABLE comment_podcast
(
    id INT PRIMARY KEY,
    content TEXT,
    created_at TIMESTAMP,
    podcast_id INT,
    user_id int,
    like_count int,
    dislike_count int ,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (podcast_id) REFERENCES podcasts(id)
);

INSERT INTO comment_podcast (id, content, created_at, podcast_id, user_id, like_count, dislike_count)
VALUES
    (1, 'Bài podcast rất hay!', '2023-12-27 10:30:00', 1, 1, 300, 100),
    (2, 'Thảo luận thú vị.', '2023-12-27 11:15:00', 1, 2, 450, 150),
    (3, 'Tôi không đồng ý với một số ý kiến.', '2023-12-27 12:00:00', 2, 3, 200, 50),
    (4, 'Mong chờ tập tiếp theo!', '2023-12-27 13:45:00', 2, 1, 350, 100),
    (5, 'Rất thích phần trình bày của diễn giả.', '2023-12-28 09:00:00', 3, 2, 450, 150),
    (6, 'Có thông tin mới không?', '2023-12-28 10:30:00', 3, 3, 250, 50),
    (7, 'Cảm ơn đã chia sẻ kiến thức bổ ích.', '2023-12-29 14:20:00', 4, 1, 400, 100),
    (8, 'Đang chờ phần phỏng vấn khách mời.', '2023-12-30 16:45:00', 4, 3, 300, 100),
    (9, 'Nên tăng thời lượng podcast lên.', '2023-12-31 11:10:00', 5, 2, 200, 50),
    (10, 'Có thể đưa ra ví dụ cụ thể hơn không?', '2024-01-01 13:20:00', 5, 3, 450, 150);


