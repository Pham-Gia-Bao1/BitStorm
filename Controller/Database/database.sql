CREATE DATABASE  IF NOT EXISTS data_php;
USE data_php;
-- drop database data_php;

create table  IF NOT EXISTS roles (
	id int primary key auto_increment,
    name varchar(100)
 );
 INSERT INTO roles (id, name) VALUES
(1, 'admin'),
(2, 'client'),
(3, 'expert');

	create table authors (
		id int auto_increment primary key,
		name varchar(100),
		img_profile varchar(255)
	);

INSERT INTO authors (name, img_profile) VALUES
		('Nguyễn Văn Hoàng', 'https://www.kkday.com/vi/blog/wp-content/uploads/chup-anh-dep-bang-dien-thoai-25.jpg'),
		('Trần Thị Mỹ Tâm', 'https://www.kkday.com/vi/blog/wp-content/uploads/chup-anh-dep-bang-dien-thoai-25.jpg'),
		('Lê Văn Thắng', 'https://www.kkday.com/vi/blog/wp-content/uploads/chup-anh-dep-bang-dien-thoai-25.jpg'),
		('Phạm Thị Bình', 'https://www.kkday.com/vi/blog/wp-content/uploads/chup-anh-dep-bang-dien-thoai-25.jpg'),
		('Hoàng Văn Anh', 'https://www.kkday.com/vi/blog/wp-content/uploads/chup-anh-dep-bang-dien-thoai-25.jpg');

create table author (
		author_id int  primary key,
        name_author varchar(100),
        img varchar(255)
);
INSERT INTO author (author_id, name_author, img) VALUES
    (1, 'Trần Văn lỰc', 'profile1.jpg'),
    (2, 'Mai Thị Anh', 'profile2.jpg'),
    (3, 'LLee Thị Kim Thoa', 'profile3.jpg'),
    (4, 'Huỳnh Tố Nga', 'profile4.jpg'),
    (5, 'Phạm Văn Lịch', 'profile5.jpg'),
    (6, 'Nguyễn Văn Linh', 'profile6.jpg');

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255),
    role_id INT ,
    img VARCHAR(255),
    address varchar(255),
    phone_number varchar(50),
    FOREIGN KEY (role_id) REFERENCES roles(id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	status VARCHAR(20) NOT NULL
);

ALTER TABLE users
MODIFY COLUMN name VARCHAR(50) UNIQUE;

INSERT INTO users (name, email, password, role_id, img, address, phone_number,status)
VALUES
    ('Nguyễn Sĩ Hùng', 'hungsi@gmail.com', 'Hung@#sd23090', 1, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '123 Main St', '093237623','Hoạt động'),
    ('Trần Đức Hùng', 'hung.duc@gmail.com', 'Hung@#$jsdgh6253', 2, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '456 Elm St', '087623781','Hoạt động'),
    ('Nguyễn Bích Thủy', 'bichthhuy234@gmail.com', 'thuy90@22@#d', 1, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '789 Oak St', '087623231','Hoạt động'),
    ('Trần Thị Mỹ Tâm', 'tranthimytam09@gmail.com', 'sdjh%#$%543sjdh', 2, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '321 Pine St', '082362233','Hoạt động'),
    ('Lê Văn Thắng', 'thang@gmail.com', 'sdasj%$Shew52', 1, 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', 'https://www.shutterstock.com/image-photo/man-portrait-doctor-wearing-white-600nw-2278090533.jpg', '012834642','Hoạt động');

CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    like_count INT,
    isAnonymous BOOLEAN,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
INSERT INTO posts (user_id,like_count, isAnonymous, content, created_at, updated_at)
VALUES (2, 23, 1, 'Bame à, con áp lực với con số. Nó một ngày một lớn. Con không biết phải làm sao nữa. Bame à.', '2023-10-12', '2023-10-12'),
       (3, 323, 0, 'MẬP TRĂM KÍ LÀ CẢM GIÁC như thế nào?\nLà được nhận những lời trêu đùa từ mọi người?\nLà đứa đi đâu cũng ngại. Lên xe của bạn thì sợ bể lốp. Áo mượn của bạn thì sợ bị rách.\nCác cậu cho cách nào giúp tớ không? Tớ không có nhiều thời gian cũng như chi phí để đến các phòng tập gym.', '2023-10-12', '2023-10-12'),
       (2, 232, 1, 'Xin chào tất cả các bạn,\nChắc hẳn các bạn đang rất mệt mỏi và áp lực về nhiều thứ, nhưng nếu các bạn mãi tiêu cực như vậy, bạn sẽ cứ thế chôn vùi tương lai tươi đẹp phía trước của mình. Và tôi biết rằng để các bạn có thể tích cực và vui vẻ trở lại rất khó khăn, nhưng hãy cố gắng thực hiện theo các tips này để có thể cải thiện từng chút một nhé.\n', '2023-10-12', '2023-10-12'),
       (3, 121, 1, 'Xin chào mọi người,\nHôm nay, tôi muốn mở lòng và chia sẻ với các bạn về tình trạng trầm cảm mà tôi đang trải qua. Đôi khi, cuộc sống có thể trở nên khó khăn và cảm giác trầm cảm đã ập đến lấn át tâm trí của tôi.\nTrong những tháng qua, tôi đã phải đối mặt với cuộc chiến với trầm cảm. Cảm giác u ám và mệt mỏi vẫn luôn hiện diện trong cuộc sống hàng ngày của tôi. Đôi khi, nó khiến tôi cảm thấy như một cuộc đấu tranh không có hồi kết. Tôi cảm thấy mất đi sự hứng thú và niềm vui với những điều trước đây tôi thường thích. Cảm xúc này thật khó diễn tả và đôi khi tôi cảm thấy mình bị lạc trong một thế giới tối tăm. Các bạn có đang gặp tình trạng giống tôi không?', '2023-10-12', '2023-10-12');

CREATE TABLE  IF NOT EXISTS comment_posts (
  id INT PRIMARY KEY auto_increment,
  content TEXT,
  author varchar(50),
  created_at TIMESTAMP,
  post_id INT,
  FOREIGN KEY (post_id) REFERENCES posts(id)
);
ALTER TABLE comment_posts
MODIFY content TEXT,
ADD user_id INT,
ADD FOREIGN KEY (user_id) REFERENCES users(id),
MODIFY created_at TIMESTAMP,
MODIFY post_id INT,
ADD FOREIGN KEY (post_id) REFERENCES posts(id);

INSERT INTO comment_posts ( content, user_id, created_at, post_id) VALUES
('Great post!', 1 , '2023-01-01 10:00:00', 1),
('I agree with your points.', 2, '2023-01-02 15:30:00', 1),
('This post is very informative.', 2, '2023-01-03 08:45:00', 2),
('Nice work!', 3, '2023-01-04 12:20:00', 2),
('I have a question regarding the topic.',1, '2023-01-05 09:10:00', 3),
('Thanks for sharing!',5, '2023-01-06 14:05:00', 3),
('I enjoyed reading this post.', 1, '2023-01-07 17:55:00', 4),
('This post provided valuable insights.', 4, '2023-01-08 11:30:00', 4),
('Can you provide more examples?', 2, '2023-01-09 13:40:00', 1),
('Good job!', 3, '2023-01-10 16:25:00', 4);


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

CREATE TABLE  IF NOT EXISTS podcasts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    description TEXT,
    author_id int,
    youtube_link VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    image_url VARCHAR(255),
    type VARCHAR(100),
    view int,
    like_count int,
    dislike_count int
);

INSERT INTO podcasts (title, description, author_id, youtube_link, created_at, image_url, type, view,like_count , dislike_count)
VALUES ('#60 Gửi trái tim tan vỡ của tôi', 'Chào các bạn, mình là Sun. Các bạn đang lắng nghe Sunhuyn Podcast. Nếu có những ngày cảm thấy chênh vênh hãy quay về đây và yêu lấy chính mình. Cùng lắng nghe và thấu hiểu.', 1, 'https://www.youtube.com/embed/pZTjXtkPam0?si=wnP82s0G_dOnVRFt', '2023-08-08', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 'Tình yêu', 100,342,12),
('Cách để đối diện với tiêu cực và vượt qua nó cùng Khánh Vy | ĐCNNTK #10', 'Đắp Chăn Nằm Nghe Tun Kể là series podcast đầu tiên của Tun, nơi Tun và các bạn có thể trải lòng với nhau về những điều mệt mỏi trong cuộc sống, cùng cho nhau những lời khuyên hay ho, cùng chữa lành những tổn thương, đổ vỡ để trái tim tụi mình một lần nữa được ngập tràn yêu thương.', 3, 'https://www.youtube.com/embed/bdK95yNhIP0?si=EjvSPZ0F9ZxxE-43', '2022-04-09', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 'Gia đình', 309,2373,43),
('Cách vượt qua ÁP LỰC học tập và điểm số', 'Những kỳ thi cuối năm sắp tới, và mình hiểu có thể các bạn đang gặp nhiều áp lực học tập và điểm số đến chừng nào! Bạn có bao giờ cảm xúc tiêu cực vì bị so sánh với "con nhà người ta"? Mình sẽ ở đây để chia sẻ cùng các bạn. Hãy luôn vững tin và học tập với một niềm yêu thích và đam mê nhé ❤️', 2, 'https://www.youtube.com/embed/-y4N5aXLbDo?si=t9QVCITIFRqG3SCD', '2021-12-10', 'https://cdn-icons-png.flaticon.com/512/3177/3177440.png', 'Học tập', 2323,2323,12),
("Đối mặt với TỰ TI NGOẠI HÌNH // sự thật về mặc cảm cơ thể, body shaming, tips yêu cơ thể",
"Bạn có từng cảm thấy tự ti về ngoại hình của mình? Hay có những mặc cảm về cơ thể mà bạn không biết làm thế nào để vượt qua? Nếu câu trả lời là 'có,' thì video này chính là dành cho bạn! Trong video này, mình sẽ cùng thảo luận và chia sẻ về chủ đề tự ti ngoại hình và mặc cảm cơ thể. Với những nội dung độc đáo và sâu sắc, chúng tôi hy vọng sẽ mang đến cho bạn những thông tin hữu ích và truyền cảm hứng để bạn tự tin hơn với bản thân mình. Tại đây, bạn sẽ tìm thấy các video về cách xây dựng lòng tự tin, tư vấn về làm đẹp và phong cách, cũng như những câu chuyện thành công của những người đã vượt qua mặc cảm của mình. Chúng tôi cung cấp những lời khuyên thiết thực và chi tiết, giúp bạn hiểu rõ hơn về nguyên nhân và cách giải quyết các vấn đề ngoại hình và cơ thể. Nếu bạn đang tìm kiếm các từ khóa như 'tự ti về ngoại hình,' 'vượt qua mặc cảm cơ thể,' hay 'tự tin trong cuộc sống,' thì bạn đã đến đúng nơi! Chúng tôi tối ưu hóa nội dung của video để đáp ứng nhu cầu của bạn và giúp bạn tìm thấy chúng dễ dàng.",
1,
"https://www.youtube.com/embed/8XH96t4aY0c?si=fOewaJlFtpUjY0-f",
"2023-05-26",
"https://cdn-icons-png.flaticon.com/512/3177/3177440.png",
"Body shaming",
345,212,32),
("GIẢM STRESS & KHỞI ĐỘNG LẠI CUỘC SỐNG với 15 THÓI QUEN TÍCH CỰC // My Reset Routine",
"Tuần vừa rồi, mình đã trải qua một giai đoạn rất mệt mỏi và căng thẳng. Dấu hiệu của stress thể hiện rõ ràng trên cả thể chất lẫn tinh thần của mình. Bởi vậy, mình quyết định dành ra một ngày để thực hiện 'reset routine' — một chu trình mình thường làm để khởi động lại cuộc sống và tìm về sự cân bằng trong nội tại. Trong video này, mình chia sẻ với các bạn chu trình này của mình, bao gồm 15 thói quen tí hon giúp bạn giảm nhanh stress và sớm tìm về sự an yên trong tâm hồn.",
"The Present Writer",
"https://www.youtube.com/embed/W4qAUflnlv0?si=dVVPyMgWHnps_49N",
"2022-03-31",
"https://cdn-icons-png.flaticon.com/512/3177/3177440.png",
"Stress",
123,120,3);

CREATE TABLE IF NOT EXISTS podcasts_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    podcast_id INT,
    category_id INT,
    FOREIGN KEY (podcast_id) REFERENCES podcasts(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
INSERT INTO podcasts_categories (podcast_id, category_id)
VALUES (1, 3),
(1,4),
( 3, 4),
( 2, 2),
(5, 1),
(4, 5);


CREATE TABLE IF NOT EXISTS user_preferences (
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

CREATE TABLE  IF NOT EXISTS videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    youtube_link VARCHAR(255),
    title VARCHAR(255),
    author_id int,
    description TEXT,
    duration INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    type VARCHAR(255),
    view varchar(50),
    like_count int,
    dislike_count int
);

INSERT INTO videos (youtube_link, title, author_id, description , duration, type, view, like_count, dislike_count)
VALUES
('https://www.youtube.com/embed/5VIgu2Ib9bY?si=H6JxFGnoN78LpIbl', 'YOU NEED TO WORK HARDER - Motivational Speech', 1,'Never stop working towards your goals, even when others rest. Success requires relentless effort and discipline, surpassing both personal limits and competition. Every moment counts. Use it to outwork and outperform, turning potential into achievement.',120, 'động lực','23',232,34),
('https://www.youtube.com/embed/XWhdbZ9-uGA?si=3z39LhTPNEfzwcuS', 'Ghibli History Collection', 3,'Bird Person from "Nausicaa of the Valley of the Wind" - Bird Person [Nausicaa of the Valley of the Wind]', 120, 'động lực','123',1212,23),
('https://www.youtube.com/embed/PQq0Wnl4T2A', 'Cậu có thể gọi được tên cảm xúc hiện tại của mình không?', 2,'Ba mẹ chúng ta không phải là những bác sĩ tâm lý, bản thân họ cũng gặp những vấn đề của riêng họ. Khi hiểu được cách kiểm soát cảm xúc, cậu có thể chỉ cho họ biết, hoặc chí ít là sau này, khi trở thành bậc làm cha làm mẹ, cậu cũng sẽ có những cách ứng xử khác để mang lại những điều tốt nhất cho đứa con của mình. Thế hệ của những người trẻ chúng ta là thế hệ cùng nhau chữa lành. Mình tin là chúng mình có thể làm được điều đó. Hít vào, thở ra. Cậu đã trả lời được câu hỏi xuất hiện đầu tiên trong podcast này chưa? Ngày hôm nay, cậu thấy thế nào?', 120, 'động lực','232',455,45),
('https://www.youtube.com/embed/qJ08ZGakdic?si=SsKZy3ZDlvPG-MS2', 'NHỮNG THÓI QUEN, SUY NGHĨ MÃI MÃI THAY ĐỔI CUỘC ĐỜI MÌNH (mà bạn có thể làm được)',1, 'Rất đồng ý với chị câu nói "Học thêm 1 ngôn ngữ, đến thêm 1 thế giới, sống thêm 1 cuộc đời"',120, 'động lực','32',7567,12),
('https://www.youtube.com/embed/7rhVbcy7_w0?si=0WaY7OELPqQNy9Dq', 'YOU START TO FEEL YOUR OLD SELF COMING BACK ', 2,"This might be one of the most powerful motivational video speeches we have ever done. It features a new and original Absolute Motivation speech and video that has never been seen before. This is one of the best speeches you will ever hear. It's going to remind you exactly who you are. Your old self is coming back, and they are coming back stronger than ever. The 2024 comeback is real, and this year is personal. This video will be your fuel when life gets tough and you need to keep going. Our original Absolute Motivation speakers will leave you speechless in this best motivational speech.

Join this channel to get access to the perks:


 / @absolutemotivation

If you found this video enjoyable, kindly show your support by giving it a thumbs up, leaving a comment, and subscribing for future content.

✏️ Featuring our excellent speakers that will give you that boost you need to take your life to the next level. This original speech created by us will give you the fuel you need to push through those hard times.

🔑All speakers, footage and music are also listed at the end of the video.


🤝Special thanks to all our partners, not on this video but on all our videos. We love you.


📱Keep gaining knowledge, maintain your motivation and ascend with Absolute Motivation.
                                                                     -
💡 Our official website: https://absolutemotivation.net

👕 Our official merch: https://absolutemotivationshop.com/

👉🏻 Don't forget to subscribe for more thought-provoking editing tapestries:@AbsoluteMotivation

📸 Instant motivation on Instagram:

 / absolutemotivationofficial

🎞️ TikTok:

 / absolutemotivationshort

🎤  Speakers in this video:
JAMES E. DIXON
JASON HENDERSON
MEL ROBBINS
RICK RUBIN
ANDY FRISELLA
THEO VON
JOE ROGAN
DAVID GOGGINS
ED MYLETT
JORDAN FERRONE
ANDY ELLIOT
TONY ROBBINS
ISAIAH SALTER
MATTHEW MCCONAUGHEY
KEVIN HART

💽 Track List in this video:
HEAVY LADEN - HAMMOCK

🎬 Movie List :
INTO THE WILD (2007)
LOVESONG (2016)

Our speeches are created by, remixed or licensed to Absolute Motivation.
For licensing information, message navidbakhsayesh@gmail.com

🔊The music in this video: The music is licensed via the fantastic teams at:
Musicbed
Artlist
Really Slow Motion
Audiomachine

🎥 The video footage In this video:
All video footage used is licensed through either CC-BY or from various stock footage websites or filmed by us. All Creative Commons footage is listed at the video's end and licensed under CC-BY 3.0. Film and TV shows used in the video are interwoven with the video's narrative, related to the topic of the video and corresponding to FAIR USE.",120, 'động lực','232',123,12),
('https://www.youtube.com/embed/afK6ibX5-0Q?si=KFDjXARQ57hs5_9y', ' Mẹ Yêu x Ước Mơ Của Mẹ', 2,'🎧 Ca khúc: [Mashup] Mẹ Yêu x Ước Mơ Của Mẹ
Trình bày: Ái Phương x CARA
🎼 Mẹ Yêu
Sáng tác: Phương Uyên
🎼 Ước Mơ Của Mẹ
Sáng tác: Hứa Kim Tuyền

XHTDRLX2 | [Mashup] Mẹ Yêu x Ước Mơ Của Mẹ - Ái Phương x CARA tại Xuân Hạ Thu Đông, rồi lại Xuân mùa 2

🎧 LINK NHẠC SỐ CÁC CA KHÚC TRẠM 3 (TẬP 5 & 6) TẠI LÀNG NGƯ MỸ THẠNH 🎧
📌 Spotify: https://smevn.lnk.to/XHTDRLX2-T3/spotify
📌 Apple Music: https://smevn.lnk.to/XHTDRLX2-T3/appl...
📌 iTunes: https://smevn.lnk.to/XHTDRLX2-T3/itunes
📌 Zing Mp3: https://bom.so/UNNMKR
📌 NCT: https://bom.so/Z21ZJh

🎶 Xuân Hạ Thu Đông, rồi lại Xuân là một chương trình thực tế về âm nhạc. Xuất phát từ mong muốn "mang âm nhạc chữa lành tâm hồn", mùa 1 (2021) đã nhận được nhiều sự yêu thương và đón nhận nồng nhiệt của khán giả.
🎼 Và năm 2022, nhà sản xuất FOREST STUDIO tiếp tục trở lại với mùa 2 cùng concept ON THE ROAD, hành trình âm nhạc sẽ càng thêm đặc biệt với những trạm dừng chân xa hơn, dài hơn và nhiều yếu tố mới mẻ hơn, hứa hẹn mang đến nhiều cảm xúc âm nhạc tuyệt vời trong suốt hành trình.
🎬 Chương trình lên sóng vào 20:00 tối thứ 6 hàng tuần trên YouTube FOREST STUDIO, từ ngày 23/09/2022.

#ForestStudio #aiphuong #CARA #meyeu #uocmocuame
#tươngớtCHINSU #vạnmónngonbùngvị
#xuanhathudongroilaixuan #xhtdrlx #xhtđrlx
#xuanhathudongroilaixuan2 #xhtdrlx2 #xhtđrlx2
#ontheroad #busking

🚫 Bất cứ hình thức Re-upload nào đều bị vi phạm.
🚫 Vui lòng không đăng tải video reaction khi chưa có sự đồng ý từ Forest Studio.

🚫 Any forms of re-upload are not permitted.
🚫 Please DO NOT post any Reaction Videos without permissions from Forest Studio.

🚫 포레스트 스튜디오의 콘텐츠의 저작권은 포레스트 스튜디오에 있습니다.
포레스트 스튜디오의 동의없이 재업로드, 재가공 등의 행위는 법적으로 금지되어 있습니다.
_______
© Bản quyền thuộc về Forest Studio JSC
© Copyright by Forest Studio JSC

📣 Đừng quên subscribe để xem nhiều video mới nhất và hay nhất nhé!
🎈 YouTube:

 / foreststudioo​

More about Forest Studio
☞ Facebook Forest Studio:

 / forestudiovn

More about Xuân Hạ Thu Đông, rồi lại Xuân!
☞ Facebook XHTDRLX:

 / roilaixuan

More about Eye Contact LIVE
☞ Facebook Eye Contact LIVE:

 / eyecontact.live

Contact us:
info@forest-studio.vn',120, 'gia đình','127',1234,65),
('https://www.youtube.com/embed/LGjnvZ-QhOk?si=oH2mRP63RPAbhgKd', 'Cha Và Con Gái (Lyrics) - Bài hát cảm động về Cha', 2,'1,071,255 views  Aug 26, 2023
Cha Và Con Gái (Lyrics) - Phan Như Thùy | Bài hát cảm động về Cha
Sáng tác: Nguyễn Văn Chung

Lyric:
Con muốn lại gần ôm lấy cha
Muốn tựa vào vai của cha
Con muốn nắm lấy tay cha thật chặt
Những vết chai sần đã hằn sâu.

Con nhớ từng chiều ngồi xe phía sau
Ánh mặt trời nghiêng mái đầu
Con nhớ lắm lúc hai cha con cười đùa
Cứ sợ rằng sẽ không còn nữa.

[ĐK1:]
Sợ ngày mai lúc thức giấc nhưng cha không còn nữa
Chẳng còn ai kể con nghe những câu chuyện ngày xưa
Chẳng còn ai cứ mỗi tối hỏi con đã về chưa
Chẳng còn ai che cho con nắng mưa trên đường.

Chẳng còn ai yêu thương con như khi con còn bé
Chẳng còn ai sẽ quan tâm và đưa đón lúc tan trường
(Chẳng còn ai sẽ quan tâm ngồi bên con để vỗ về)
Cả tuổi thơ con bên cha chỉ nhớ nhất là
Những kỉ niệm (câu chuyện) chỉ đong đầy tiếng cha cười
Nhớ những ngày tháng yên bình nhất trên đời.

Cơn gió thổi mái tóc rối bời
Muốn được cha chải tóc thôi
Con ước dẫu tháng năm trôi đi vội vàng
Vẫn được hoài ở bên cha mãi.

[ĐK2:]
Vì sao mãi đến lúc khi trong con đã lớn
Thì mới hiểu những nỗi lo trong tim của cha
Dành tất cả những ấm áp cho con bao ngày qua
Chỉ vì con cha hy sinh cả cuộc đời.

Vì sao bao gian lao kia cha không bao giờ kể
Vì sao những nỗi mất mát cha chỉ giữ mãi riêng mình
Cả tuổi thơ con bên cha nhưng chẳng thấy được
Nước mắt cùng nỗi đau và những nỗi buồn
Những câu chuyện chỉ đong đầy tiếng cha cười.',120, 'gia đình','127',1234,65),
('https://www.youtube.com/embed/KGWJCAc4kGg?si=ybYMYya5Ct10BCUR', 'Nhật Ký Của Mẹ ', 2,'Bài hát: Nhật Ký Của Mẹ
Hiền Thục Official
Kênh YouTube chính thức của ca sỹ Hiền Thục
Nhấn subscribe để theo dõi những sản phẩm mới nhất.
Subscribe kênh YouTube : https://goo.gl/IXSy9k
Theo dõi Facebook:  https://goo.gl/JKxXbf
Theo dõi G + :  https://goo.gl/oUXa3g
Xem video của kênh Hiền Thục Official mọi lúc mọi nơi bằng điện thoại di động, tải ứng dụng POPS cho điện thoại di động iOS, ',120, 'gia đình','127',1234,65),
('https://www.youtube.com/embed/nHK0u40Ompc?si=uj8jEUtoLg1Rl8WE', 'Cô gái m52 ‣ HuyR ft. Tùng Viu (bimm release)', 1,
"CÔ GÁI M52h",120, 'tình yêu','232',123,45),

('https://www.youtube.com/embed/FN7ALfpGxiI?si=BGyXCYQiWDZTLS2k', 'NƠI NÀY CÓ ANH | OFFICIAL MUSIC VIDEO | SƠN TÙNG M-TP', 1,'Nơi Này Có Anh | Official Music Video | Sơn Tùng M-TP
Bất kì Video nào có liên quan tới "Nơi Này Có Anh" chưa có sự cho phép đều được coi là vi phạm bản quyền.
Các đơn vị báo chí muốn đăng tải thông tin liên quan vui lòng liên hệ M-TP Entertainment để được xác nhận đăng Video
Theo dõi kênh YouTube Sơn Tùng M-TP để được cập nhật thông tin

Được thực hiện bởi / Video made by
Sáng tác / Composer: Sơn Tùng M-TP
Phối khí / Arranger: Khắc Hưng
Master: Long Halo
Sản xuất / Produced by Dreams Productions
Đạo diễn / Director: Gin Tran
Đạo diễn hình ảnh / D.O.P: Lub Nguyen
Giám đốc nghệ thuật / Art Director: Thien Thanh
Thiết kế đồ hoạ / Graphic Designer: Meimei Hoang
Điều hành sản xuất / Executive Producer: M&M HOUSE


♬♬ Listen and download on:
☞ Apple Music: https://apple.co/3gjuvNo
☞ Spotify: https://spoti.fi/3ff9phX

Nhãn hãng BITI’S HUNTER, nhãn hàng OPPO SMARTPHONE; Game di động GARENA LIÊN QUÂN MOBILE; Ứng dụng truyền hình V LIVE và Đối tác của YouTube tại Việt Nam – METUB Network hân hạnh đồng hành cùng ca sĩ Sơn Tùng M-TP trong dự án Nơi Này Có Anh.

More information about Sơn Tùng M-TP:


 / mtp.fan


 / sontungmtp


 / sontungmtp


 / sontungmtp777
@Spotify: https://spoti.fi/2HPWs20
@Itunes: https://apple.co/2rlSl3w

▶More information about M-TP Talent:


 / mtptalent


 / mtptalent


 / mtptalent

More about M-TP ENTERTAINMENT


 / mtptown
https://mtpentertainment.com


 / mtpent_official


 / mtpent_official


 / mtpentertainment  ',120, 'tình yêu','232',123,45),
('https://www.youtube.com/embed/JdqL89ZZwFw?si=e2ib-JYdEw1js8L7', 'Quiet 🍀 Lofi Keep You Safe 🍃 Deep focus Study//Work [ Lofi hip hop - Lofi chill ]',3, "Quiet 🍀 Lofi Keep You Safe 🍃 Deep focus Study//Work [ Lofi hip hop - Lofi chill ]
----------------------------------------

➤ Subscribe to LOFI KEEP YOU SAFE:

 / @lofikeepyousafe

I'm fleece. Hope your day is as motivating as this mix! Subscribe to my channel to get notified when new videos are released.
Peace!

Follow me on Spotify:  https://open.spotify.com/artist/5GTpS...

--------------------------------------------------------------------------------

#lofi #lofihiphop #chillhop#lofichill

🎼 Dreamy Records
→ Stream it: https://fanlink.to/lofidreamy
→ Spotify: https://spoti.fi/3ZFZEB0
→ Instagram:

 / dreamy.records

LOFI KEEP YOU SAFE is a part of Dreamy Records

➤ The artwork, animation and audio on LOFI KEEP YOU SAFE were either created by the channel owner or have the appropriate permission and/or license for use

Email us: contact@dreamyrecords.co | contact@shinemusicllc.com", 120, 'thiên nhiên','321',4566,43),
('https://www.youtube.com/embed/n9iKoJ9ZE-Q?si=DcpFbgkelQVAhlXe', '[Vietsub] Nổi gió rồi - Châu Thâm',3, 'Nổi Gió Rồi" là một tác phẩm âm nhạc độc đáo và đầy cảm xúc, một bức tranh âm nhạc tuyệt vời mà người nghe không thể không bị cuốn hút. Bài hát mang đến cho người nghe cảm giác như họ đang lang thang giữa một bãi biển dịu dàng, nơi sóng biển nhẹ nhàng lướt qua cát trắng mịn màng.

Sự sáng tạo của nhạc sĩ được thể hiện rõ qua cách kết hợp tinh tế giữa giai điệu nhẹ nhàng và lời bài hát sâu lắng. Giọng ca trong trẻo, nhẹ nhàng như làn gió mát của núi cao, đưa người nghe vào một hành trình tinh tế qua những cung bậc cảm xúc khác nhau.

Lời bài hát chạm đến trái tim người nghe bằng những từ ngữ tinh tế, mô tả hình ảnh tự do và nhẹ nhàng như những đám mây trắng bồng bềnh trên bầu trời xanh. "Nổi Gió Rồi" không chỉ là một bản nhạc, mà là một câu chuyện tình yêu, một hành trình tìm kiếm ý nghĩa cuộc sống và sự tự do.

Âm nhạc của bài hát mang đậm dấu ấn văn hóa, với những giai điệu truyền thống được kết hợp hiệu quả với âm thanh hiện đại. Điều này tạo nên một trải nghiệm âm nhạc độc đáo, đồng thời khám phá và kết nối giữa quá khứ và hiện tại.

Nhưng trên tất cả, "Nổi Gió Rồi" là một tác phẩm nghệ thuật âm nhạc, là nguồn cảm hứng cho những người đam mê âm nhạc và tìm kiếm sự đẹp đẽ trong những giai điệu, lời bài hát và cảm xúc mà nó mang lại.', 120, 'thiên nhiên','321',4566,43),
('https://www.youtube.com/embed/s9rup0Pxd4s?si=tkoROltcUZZhsa3w', 'Thư Giãn Với Tiếng Sóng Biển Và Đàn Piano Nhẹ Nhàng',3, 'êm đềm, nhẹ nhàng trôi qua bờ cát trắng, mang đến cho tâm hồn sự bình yên và thoải mái. Khi bước chân chạm nhẹ vào bờ biển, âm thanh sóng vỗ như là những nốt nhạc dịu dàng của một bản nhạc thư giãn, kết hợp hài hòa với hơi gió biển mát lành.

Nhìn xa xa, sóng thư giản cuộn tròn như những chiếc khăn trải phủ trên bề mặt biển, tạo ra một cảm giác êm dịu và thanh bình. Ánh nắng mặt trời chiếu lên những ngọn sóng nhỏ, làm nổi bật ra những điểm ánh sáng lấp lánh giữa dải màu biển xanh ngọc.

Khi ngồi trên bờ cát mịn, người ta có thể nghe rõ âm thanh sóng vỗ như là lời thì thầm dịu dàng của biển cả. Sóng thư giản không chỉ là một hiện tượng tự nhiên, mà còn là một trạng thái tinh thần, mời gọi bạn đến với sự yên bình và trấn an. Đôi khi, chỉ cần nhìn sóng thư giản trôi qua, bạn sẽ cảm nhận được sự giải thoát và thư thái, như là một liều thuốc tinh thần giúp giảm căng thẳng và đưa tâm hồn về trạng thái trầm lắng.', 120, 'thiên nhiên','321',4566,43),
('https://www.youtube.com/embed/Yr1xeWuOQAc?si=QNdObiJnoIYl4u3y', 'Music heals the heart and blood vessels, Calming music restores the nervous system, relaxing',3, "Music heals the heart and blood vessels, Calming music restores the nervous system, relaxing
🌿  Music for relaxation, meditation, study, reading, massage, spa or sleep. This music is ideal for dealing with anxiety, stress or insomnia as it promotes relaxation and helps eliminate bad vibes. They can also use this music as a background for meditation or relaxing in their sleep.

 🌿 If you liked the show and want more relaxing music, don't forget to love it.
Namaste
🎬 Software Video Editing : Adobe Premiere Pro CC
📷 Software Photo Editing : Photoshop CC
Music for:
“We have a wide selection of relaxing and soothing music to help you get the most out of your massage, meditation, yoga or other relaxation session. With a variety of options, from classic to contemporary, there is something for everyone.”
—
Massage music, meditation music, healing music, healing music, relaxing music, musical, study music, work music, sleep music

🌙 Follow Helios Record news every week:
🌿  Music by Helios Records: https://linktr.ee/heliosrecords

-------------------------------------------------- ------------------------------------
What can be found on our channel?

🌿 On our channel you will find relaxing music for: sleep, meditation, yoga, zen, spa, massage, study and concentration...

🌿  To improve relaxation and concentration, our music uses brain waves such as alpha waves, beta waves, delta waves and theta waves.

🌿  You can also go to other cultures as we have shamanic music, indian music, chinese music, tibetan music with tibetan bowls, etc.

🌞 To contact and send music: (relax@wondermusic.us or channel@wondermusic.us)

Don't forget to subscribe to stay updated on new posts.", 120, 'thiên nhiên','321',4566,43),
('https://www.youtube.com/embed/-f8fCl6ZbDw?si=yiHNI9RpHKrmnRD-', '[Piano] A romantic song that flows with a pleasant wind l GRASS COTTON+',3, 'một bản nhạc tinh tế của linh hồn, một dải âm thanh màu trắng và đen như những phím trên bàn đàn. Khi bàn tay nhẹ nhàng chạm vào phím, âm thanh bắt đầu như những làn sóng nhẹ, lặng lẽ lan tỏa trong không gian, mở cánh cửa cho tâm hồn được thư giãn.

Những nốt nhạc piano như những đám mây trắng bồng bềnh trên bầu trời tinh khôi. Âm thanh êm dịu như làn gió mát, lướt nhẹ qua tâm hồn và giúp tinh thần bạn bay bổng giữa không gian thời gian. Mỗi phím đều là một cửa sổ mở ra với những cảm xúc sâu sắc, nhưng đồng thời, cũng là một cách để giải phóng những áp lực, những lo âu.

Tiếng đàn piano đối với thư giản tâm hồn như là một hành trình qua những cung bậc cảm xúc. Đôi khi, những giai điệu nhẹ nhàng làm tâm hồn bạn trôi dạt giữa hòa nhạc bình yên, còn những nốt nhạc mạnh mẽ hơn là những cơn sóng cảm xúc mạnh mẽ, cho tâm hồn bạn một cơ hội để tự do bay lượn.

Trong âm thanh của đàn piano, có một sức mạnh lạ lùng để níu giữ trái tim và đồng thời để tâm hồn đắm chìm trong sự yên bình. Mỗi nốt nhạc là một kỷ niệm, mỗi cung điệu là một cảm xúc, và khi tất cả kết hợp lại, chúng tạo nên một bức tranh âm nhạc tuyệt vời, làm cho thời gian trôi qua mà không để lại dấu vết.', 120, 'thiên nhiên','321',4566,43);

INSERT INTO videos (youtube_link, title, author_id, description , duration, type, view, like_count, dislike_count)
VALUES
('https://www.youtube.com/embed/5VIgu2Ib9bY?si=H6JxFGnoN78LpIbl', 'YOU NEED TO WORK HARDER - Motivational Speech',2, 'Never stop working towards your goals, even when others rest. Success requires relentless effort and discipline, surpassing both personal limits and competition. Every moment counts. Use it to outwork and outperform, turning potential into achievement.',120, 'động lực','32',7567,12),
('https://www.youtube.com/embed/5x7YCxVqILQ?si=yHxAKFpiiDiVxMms', 'Tôi Nghĩ Gì Về Tình Yêu Đích Thực (True Love) - Tri Kỷ Cảm Xúc Web5ngay',2, 'Xin mến chào tất cả quý vị và các bạn, chào mừng tất cả quý vị và các bạn đã quay trở lại với chương trình quen thuộc, gần gũi của tất cả chúng ta, chương trình Tri Kỷ Cảm Xúc phiên bản video được phát sóng hàng tuần vào tối thứ 3.',120, 'tình yêu','32',7567,12),
('https://www.youtube.com/embed/PQq0Wnl4T2A', 'Cậu có thể gọi được tên cảm xúc hiện tại của mình không?',2, 'Ba mẹ chúng ta không phải là những bác sĩ tâm lý, bản thân họ cũng gặp những vấn đề của riêng họ. Khi hiểu được cách kiểm soát cảm xúc, cậu có thể chỉ cho họ biết, hoặc chí ít là sau này, khi trở thành bậc làm cha làm mẹ, cậu cũng sẽ có những cách ứng xử khác để mang lại những điều tốt nhất cho đứa con của mình. Thế hệ của những người trẻ chúng ta là thế hệ cùng nhau chữa lành. Mình tin là chúng mình có thể làm được điều đó. Hít vào, thở ra. Cậu đã trả lời được câu hỏi xuất hiện đầu tiên trong podcast này chưa? Ngày hôm nay, cậu thấy thế nào?',120, 'động lực','32',7567,12),
('https://www.youtube.com/embed/8CzIK0gorCw?si=meR-eD7fAInMfYG7', 'Ghibli History Collection',3, 'Bird Person from "Nausicaa of the Valley of the Wind" - Bird Person [Nausicaa of the Valley of the Wind]',120, 'gia đình','32',7567,12);
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
CREATE TABLE IF NOT EXISTS comment_videos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(255),
    author VARCHAR(100),
    created_at DATETIME,
    video_id INT,
    user_id INT,
    like_count INT,
    dislike_count INT,
    FOREIGN KEY (video_id) REFERENCES videos(id)
);
INSERT INTO comment_videos (content, author, created_at, video_id, user_id, like_count, dislike_count)
VALUES
('Great video!', 'John Doe', '2023-01-01 10:00:00', 1, 1, 23, 1),
('I learned a lot from this video.', 'Jane Smith', '2023-01-02 15:30:00', 1, 3, 212, 3),
('Could you explain this further?', 'Michael Johnson', '2023-01-03 08:45:00', 2, 2, 323, 32),
('Nice work!', 'Emily Davis', '2023-01-04 12:20:00', 2, 4, 43, 4),
('This video is very informative.', 'Robert Wilson', '2023-01-05 09:10:00', 3, 1, 34, 4),
('I have a question regarding the topic.', 'Sophia Thompson', '2023-01-06 14:05:00', 3, 5, 56, 12),
('Thanks for sharing!', 'John Doe', '2023-01-07 17:55:00', 4, 5, 21, 2),
('I enjoyed watching this video.', 'Jane Smith', '2023-01-08 11:30:00', 4, 2, 98, 4),
('Can you provide more examples?', 'Michael Johnson', '2023-01-09 13:40:00', 5, 2, 45, 4),
('I found this video very helpful.', 'Emily Davis', '2023-01-10 16:25:00', 5, 1, 234, 43);

INSERT INTO comment_posts ( content, author, created_at, post_id) VALUES
('Great post!', 'John Doe', '2023-01-01 10:00:00', 1),
('I agree with your points.', 'Jane Smith', '2023-01-02 15:30:00', 1),
('This post is very informative.', 'Michael Johnson', '2023-01-03 08:45:00', 2),
('Nice work!', 'Emily Davis', '2023-01-04 12:20:00', 2),
('I have a question regarding the topic.', 'Robert Wilson', '2023-01-05 09:10:00', 3),
('Thanks for sharing!', 'Sophia Thompson', '2023-01-06 14:05:00', 3),
('I enjoyed reading this post.', 'John Doe', '2023-01-07 17:55:00', 4),
('This post provided valuable insights.', 'Jane Smith', '2023-01-08 11:30:00', 4),
('Can you provide more examples?', 'Michael Johnson', '2023-01-09 13:40:00', 1),
('Good job!', 'Emily Davis', '2023-01-10 16:25:00', 4);
CREATE TABLE experts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  role_id INT,
  FOREIGN KEY (role_id) REFERENCES roles(id),
  full_name varchar(255),
  gender VARCHAR(10),
  address VARCHAR(255),
  email VARCHAR(255),
  phone_number VARCHAR(20),
  age INT,
  experience varchar(500),
  profile_picture VARCHAR(255),
  count_rating INT,
  certificate varchar(255),
  specialization varchar(255),
  status varchar(255)
);

ALTER TABLE experts
MODIFY COLUMN full_name varchar(255) UNIQUE;
INSERT INTO experts (id, role_id, full_name, gender, address, email, phone_number, age, experience, profile_picture, count_rating, certificate, specialization, status) VALUES
(1, 3, 'Hồ Thị Mỹ Anh', 'Nữ', '123 Ngô Quyền, Hải Châu, Đà Nẵng.', 'john.doe@example.com', '1234567890', 30, 'Giảng viên Khoa Tâm lý học, trường ĐH Khoa Học Xã Hội Và Nhân Văn (ĐHQGHN). Kinh nghiệm tư vấn tâm lý trong trường hợp trầm cảm và lo âu trong 7 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxbqu-0Q8CDAeN2O7GL0-IBmyCSTVMQGTBLA&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Chuyên gia tâm lý học", 'Hoạt động'),
(2, 3, 'Nguyễn Anh Tú', 'Nữ', '456 Trần Phú, Thanh Khê, Đà Nẵng.', 'jane.smith@example.com', '9876543210', 35, 'Chuyên gia tham vấn tâm lý trên nhóm thân chủ là người trưởng thành cho các khó khăn tâm lý về công việc, cuộc sống hôn nhân, các mối liên hệ. Kinh nghiệm tham vấn tâm lý cho nhân viên y tế tham gia chống dịch Covid-19 và người lao động có căng thẳng, rối loạn lo âu, trầm cảm do công việc/các điều kiện cuộc sống.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzZ1yVXix9ieLDoQ9MKtLaWIoF9DNJj-vDMw&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Tiến sĩ Tâm lý học", 'Hoạt động'),
(3, 3, 'Phạm Minh Đức', 'Nam', '789 Lê Duẩn, Sơn Trà, Đà Nẵng.', 'michael.johnson@example.com', '4567890123', 40, 'Điều trị các rối loạn tâm thần và tâm lý. Các rối loạn liên quan stress và dạng cơ thể, các rối loạn hành vi và sinh lý, rối loạn cảm xúc, rối loạn tâm thần người già, rối loạn tâm thần trẻ em và vị thành niên, các triệu chứng loạn thần với hoang tưởng, ảo giác, rối loạn hành vi..', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPnzAB_u-HL7U1UT2rWrZOJQRE-UjQ1Y8uLDbQMKOgHjeWpiYjahiiM-9znL55iF2DxLw&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Chuyên gia tâm lý", 'Hoạt động'),
(4, 3, 'Hoàng Thị Diễm Trang', 'Nữ', '321 Bạch Đằng, Hòa Vang, Đà Nẵng.', 'emily.davis@example.com', '3210987654', 28, 'Tham vấn trị liệu tâm lý cho người trưởng thành, các mối quan hệ trong gia đình, các rối nhiễu tâm lý như trầm cảm, lo âu, rối loạn lưỡng cực, ám ảnh, sợ hãi.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTje4oiuXbsZY56QeeuBsPCibkPloH_fJ5TAw&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Chuyên gia tâm lý", 'Hoạt động'),
(5, 3, 'Huỳnh Thị Hường', 'Nữ', '654 Nguyễn Văn Linh, Liên Chiểu, Đà Nẵng.', 'robert.wilson@example.com', '7890123456', 32, 'Kinh nghiệm tư vấn tâm lý cho người trưởng thành, học sinh, sinh viên liên quan đến các vấn đề về tình yêu hôn nhân gia đình, học tập và cuộc sống, xung đột trong các mối quan hệ.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf1Pl_hNeFRprpB1CVWpq50tfEEoFDvCK1wXP_1bUX7n3O6h8GzlsoYE0vmqn3wXWaerY&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Chuyên gia tâm lý", 'Hoạt động'),
(6, 3, 'Phạm Thị Ngọc Trâm', 'Nữ', '987 Điện Biên Phủ, Cẩm Lệ, Đà Nẵng.', 'sophia.thompson@example.com', '2109876543', 38, 'Thực hiện các trường hợp tư vấn tâm lý, trị liệu cho thanh thiếu niên và người trưởng thành có rối nhiễu tâm lý như trầm cảm, rối loạn lo âu  trong vòng 6 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3yXDHKFG-8n9quKfcsGe409t_5m2UG_nQxQ&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Chuyên gia tâm lý", 'Hoạt động'),
(7, 3, 'Đặng Quang Minh', 'Nam', '234 Hàn Thuyên, Ngũ Hành Sơn, Đà Nẵng.', 'william.johnson@example.com', '5678901234', 45, 'Tham vấn/trị liêu cho nhóm thân chủ có độ tuổi từ 18 đến 35 về các vấn đề cá nhân và các bậc phụ huynh về các phương pháp làm việc với trẻ em. Nghiên cứu và phát triển những trường hợp gặp khó khăn liên quan đến tâm lý về những kết nối với bản thân, gia đình và xã hội.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6k3mVWpBVfnzxxCNtBQ5SHtyBiFACtcDV3w&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Bác sĩ tâm lý", 'Hoạt động'),
(8, 3, 'Bùi Thị Lan', 'Nữ', '567 Yên Bái, Cẩm Lệ, Đà Nẵng.', 'olivia.brown@example.com', '9012345678', 26, 'Tham vấn cho thanh thiếu niên và người trẻ về các dạng rối loạn, khó khăn liên quan đến cảm xúc (lo âu, căng thẳng, trầm cảm…), khủng hoảng bản sắc, vấn đề giới và phát triển, khó khăn trong kết nối và xây dựng các mối quan hệ (tình bạn, tình yêu, kết nối giữa cha mẹ – con cái).', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkjSwH73LqDpz7kklerQsP1GfXJ_Nca-5cnmc7u9guB8aNse2C9lgi7mUuMFb9p94XHsc&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Chuyên gia tâm lý", 'Hoạt động'),
(9, 3, 'Đỗ Hải Nam', 'Nam', '890 Trường Sa, Hòa Hải, Đà Nẵng.', 'james.anderson@example.com', '4321098765', 33, 'Thạc sĩ tâm lý tại New York, Mỹ. Có thế mạnh trong việc chẩn đoán, trị liệu phát triển phát đồ, trị liệu cá nhân và nhóm đối với các bệnh nhân trầm cảm, lo âu, stress, OCD, rối loạn nhân cách, rối loạn điều tiết cảm xúc, tự gây tổn thương và tự sát.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmBTGIhpDfxhtCb7tSsh6-VgqIO-gNmhRWJmH7tETjTgz-YbB6HDJwgTubhxrLhD1ueVs&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg', "Chuyên gia tâm lý", 'Hoạt động'),
(10, 3,'Lê Hoàng Yến', 'Nữ', '432 Lý Thường Kiệt, Sơn Trà, Đà Nẵng.', 'emma.johnson@example.com', '8765432109', 29, 'Kinh nghiệm tư vấn tâm lý cho người sống với bệnh tật và hỗ trợ tâm lý cho người chăm sóc trong 10 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRFkCfodOJ-NCXUvucU_M-1J-O7kpEpSPmmr948YC4X_hZ1MHJgAIw3DSTaP0WNSmRa60&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Bác sĩ tâm lý",'Hoạt động');
CREATE TABLE calendar (
  id INT PRIMARY KEY auto_increment,
  day DATE,
  start_time TIME,
  end_time TIME,
  price DECIMAL(10, 3),
  describer  TEXT,
  expert_id INT,
  status varchar(20),
  FOREIGN KEY (expert_id) REFERENCES experts(id)
);
INSERT INTO calendar (day, start_time, end_time, price, describer, expert_id,status) VALUES
( '2024-01-30', '09:00:00', '11:00:00', 50.000, 'Morning availability', 1 ,'Hoạt động'),
('2024-01-30', '14:00:00', '16:00:00', 60.000, 'Afternoon availability', 2,'Hoạt động'),
('2024-01-26', '10:00:00', '12:00:00', 70.000, 'Morning availability', 3 ,'Hoạt động'),
('2024-01-26', '15:00:00', '17:00:00', 55.000, 'Afternoon availability', 4,'Hoạt động'),
('2024-01-27', '11:00:00', '13:00:00', 45.000, 'Morning availability', 5,'Hoạt động'),
('2024-01-27', '16:00:00', '18:00:00', 70.000, 'Afternoon availability', 6,'Hoạt động'),
('2024-01-28', '09:00:00', '11:00:00', 50.000, 'Morning availability', 7 ,'Hoạt động'),
('2024-01-25', '14:00:00', '16:00:00', 60.000, 'Afternoon availability', 8,'Hoạt động'),
('2024-01-25', '10:00:00', '12:00:00', 65.000, 'Morning availability', 9,'Hoạt động'),
('2024-01-25', '15:00:00', '17:00:00', 60.000, 'Afternoon availability', 10 ,'Hoạt động');
	CREATE TABLE IF NOT EXISTS bookings (
	  id INT PRIMARY KEY AUTO_INCREMENT,
	  user_id INT,
	  expert_id INT,
	  calendar_id INT,
	  note varchar(255),
	  created_at DATETIME,
	  status VARCHAR(20),
	  rating INT,
	  FOREIGN KEY (user_id) REFERENCES users(id),
	  FOREIGN KEY (expert_id) REFERENCES experts(id),
	  FOREIGN KEY (calendar_id) REFERENCES calendar(id)
	);
ALTER TABLE bookings
ADD link_room VARCHAR(255);
INSERT INTO bookings (user_id, expert_id, note, created_at, status, rating, calendar_id) VALUES
( 1, 1, 'Tôi muốn tư vấn về việc trầm cảm học đường.', '2023-01-01 09:30:00', 'Hoạt động', 4,1),
(2, 2, 'Tôi muốn tư vấn về việc bị bạo lực học đường.', '2023-01-02 13:45:00', 'Hoạt động', 5,1),
(3, 3, 'Tôi muốn tư vấn về việc bất đồng ý kiến với ba mẹ.', '2023-01-03 10:45:00', 'Hoạt động', 3,2),
(4, 4, 'Tôi muốn tư vấn về chứng rối loạn lo âu.', '2023-01-04 15:30:00', 'Hoạt động', 5, 5),
(5, 5, 'Tôi muốn tư vấn về việc thiếu động lực', '2023-01-05 13:15:00', 'Hoạt động', 4, 4),
(1, 6, 'Tôi muốn tư vấn về việc trầm cảm do tan vỡ hôn nhân.', '2023-01-06 09:00:00', 'Hoạt động', 5,6),
(2, 7, 'Tôi muốn tư vấn về việc trầm cảm, rối loạn lo âu.', '2023-01-07 13:30:00', 'Hoạt động', 4,8),
(3, 8, 'Tôi muốn tư vấn về việc trầm cảm, rối loạn lo âu.', '2023-01-08 11:15:00', 'Hoạt động', 3,10),
(4, 9, 'Tôi muốn tư vấn về việc trầm cảm, rối loạn lo âu.', '2023-01-09 16:00:00', 'Hoạt động', 5,9),
(5, 10, 'Tôi muốn tư vấn về việc trầm cảm, rối loạn lo âu.', '2023-01-10 11:45:00', 'Hoạt động', 4, 7);


create table author (
		author_id int  primary key,
        name_author varchar(100),
        img varchar(255)
);
INSERT INTO author (author_id, name_author, img) VALUES
    (1, 'Trần Văn lỰc', 'profile1.jpg'),
    (2, 'Mai Thị Anh', 'profile2.jpg'),
    (3, 'LLee Thị Kim Thoa', 'profile3.jpg'),
    (4, 'Huỳnh Tố Nga', 'profile4.jpg'),
    (5, 'Phạm Văn Lịch', 'profile5.jpg'),
    (6, 'Nguyễn Văn Linh', 'profile6.jpg');

CREATE TABLE IF NOT EXISTS news (
  id INT PRIMARY KEY auto_increment,
  title VARCHAR(255),
  descriptions TEXT,
  content TEXT,
  image_url VARCHAR(255),
  created_at DATE,
  author_id INT,
  link VARCHAR(255),
  FOREIGN KEY (author_id) REFERENCES author(author_id)
);

INSERT INTO news ( title, descriptions ,content, image_url,created_at,author_id, link) VALUES
('TÁC HẠI CỦA THỨC KHUYA ĐỐI VỚI SỨC KHỎE ÍT NGƯỜI BIẾT',
'Thức khuya liên tục là một trong những yếu tố gây ra các ảnh hưởng xấu đối với sức khỏe! Vậy các tác hại của thức khuya là gì? Cùng xem ngay những chia sẻ liên quan đến hậu quả của việc thức khuya trong bài viết dưới đây nhé!',
'Một trong những tác hại của thức khuya không thể không nhắc đến chính là nguy cơ gây suy giảm trí nhớ. Người thường xuyên thức khuya có nguy cơ bị suy giảm trí nhớ cao gấp 5 lần so với người ngủ đúng giờ và đủ giấc.

Nguyên nhân gây ra tình trạng suy giảm trí nhớ khi thức khuya là do bộ não không được nghỉ ngơi cũng như không có thời gian ghi nhận lại các vấn đề - hoạt động hay các thông tin xảy ra trong một ngày. Chính điều này khiến lượng thông tin mà não bộ có thể tiếp nhận được bị suy giảm đáng kể.Bên cạnh đó, người thường xuyên thức khuya, thiếu ngủ sẽ gặp phải tình trạng đau đầu, mệt mỏi vào ngày hôm sau. Tình trạng này kéo dài có thể gây ra các vấn đề về rối loạn thần kinh, lo âu, căng thẳng.',
'https://medlatec.vn/ImagePath/images/20230208/20230208_tac-hai-cua-thuc-khuya-1.png',
'2023/04/03',
'1',
'https://medlatec.vn/tin-tuc/tac-hai-cua-thuc-khuya-doi-voi-suc-khoe-it-nguoi-biet-s195-n32010'
),
('TOP 5 CÂY DƯỢC LIỆU MANG ĐẾN NHIỀU LỢI ÍCH CHO SỨC KHỎE',
'Sử dụng cây dược liệu để hỗ trợ điều trị bệnh và bồi bổ cơ thể là phương pháp được nhiều người lựa chọn. Bài viết hôm nay sẽ tổng hợp 5 cây dược liệu mang đến nhiều lợi ích cho sức khỏe cũng như cách sử dụng những cây này sao cho an toàn, hiệu quả.',
'Cây bạch quả
Cây bạch quả còn được gọi với nhiều cái tên khác nhau như cây ngân hạnh, cây áp cước tù, công tôn thụ,… Đây là cây dược liệu rất quen thuộc và có tác dụng chữa nhiều bệnh khác nhau. Trong Đông y, hầu như các bộ phận của cây đều được sử dụng, cụ thể như sau:

Hạt bạch quả dùng để điều trị hen suyễn, ho mạn tính, ho có đờm,… hay các bệnh lý về phổi, hô hấp.
Lá bạch quả giúp tăng cường trí nhớ, làm chậm quá trình suy giảm trí nhớ, mất trí nhớ do ảnh hưởng từ bệnh Alzheimer.
Thân cây bạch quả có tác dụng hỗ trợ điều trị bệnh tiểu đường. ',
'https://medlatec.vn/media/34587/file/cay-duoc-lieu-1.png',
'2023/08/01',
'2',
'https://medlatec.vn/tin-tuc/top-5-cay-duoc-lieu-mang-den-nhieu-loi-ich-cho-suc-khoe'
),
('Những cách giải trí lành mạnh giúp giảm áp lực thi cử',
'Có rất nhiều cách giúp các sĩ tử giải tỏa stress nhanh mùa thi cử, giảm áp lực ôn bài để học sinh có thể tập trung hơn vào những nội dung cần thiết.',
'Tập thể dục
Ngoài những lợi ích về sức khỏe thể chất, tập thể dục đã được chứng minh là một liều thuốc giảm căng thẳng hiệu quả. Bạn có thể chọn các thể loại vận động mà bản thân thích như: thể dục nhịp điệu không mang tính cạnh tranh, tăng cường sức mạnh bằng tập gym, tập tạ hoặc các hoạt động tạo nên sự dẻo dai uyển chuyển giống yoga hoặc thái cực quyền.

Tập thể dục đã được chứng minh là giải phóng endorphin - chất tự nhiên giúp bạn cảm thấy tốt hơn và duy trì thái độ tích cực. Vì vậy, bất cứ khi nào bạn thấy căng thẳng quá độ, hãy đứng dậy và vận động một chút! ',
'https://info-imgs.vgcloud.vn/2020/05/03/08/lam-gi-giup-hoc-sinh-doi-thoi-quen-bat-nhu-lo-so-khi-tro-lai-truong.jpg',
'2023/01/02',
'3',
'https://minhtuanmobile.com/tin-tuc/nhung-cach-giai-tri-lanh-manh-giup-giam-ap-luc-thi-cu/'
),
(
    '14 cách tận hưởng cuộc sống, giải trí và thư giãn một cách tốt nhất',
    'Trong thế giới hiện đại ngày nay, cuộc sống đã trở nên rất phức tạp. Mọi người đang trải qua một cuộc sống bận rộn và dành thời gian làm việc cả ngày để nuôi sống gia đình hoặc để đáp ứng nhu cầu của họ. Trong cuộc chạy đua này, họ đã quên mất cách tận hưởng cuộc sống cũng như chưa cân đối được thời gian dành cho bản thân họ.',
    'Ngủ đủ giấc


Thật khó để tận hưởng cuộc sống một cách trọn vẹn nhất nếu bạn mệt mỏi, kiệt sức hoặc căng thẳng. Tất cả chúng ta đều cần thời gian để nghỉ ngơi và hồi phục .

Tuy nhiên, có quá nhiều thứ xảy ra trong thời kỳ hiện đại  chúng ta phải làm việc, học tập, làm việc nhà, quản lý tài chính, chăm sóc gia đình, v.v.

Thích Nhất Hạnh viết: “Điều rất quan trọng là chúng ta học lại nghệ thuật nghỉ ngơi và thư giãn. “Nó không chỉ giúp ngăn chặn sự tấn công của nhiều căn bệnh phát triển do căng thẳng và lo lắng mãn tính; nó còn cho phép chúng ta giải tỏa tâm trí, tập trung và tìm ra giải pháp sáng tạo cho các vấn đề.”

Vì vậy, hãy dành thời gian để học cách thư giãn và tận hưởng cuộc sống.

Ví dụ, bạn có thể chợp mắt một lúc, đọc một cuốn sách hay, đi dạo một quãng ngắn hoặc thậm chí đi du lịch vào cuối tuần ở một nơi yên tĩnh.

Thực hành lòng biết ơn
Không có gì ngạc nhiên khi nhiều nghiên cứu khoa học đã phát hiện ra rằng lòng biết ơn có thể cải thiện lòng tự trọng, giảm những cảm xúc tiêu cực như ghen tị và giảm nguy cơ trầm cảm nghiêm trọng. Những người biết ơn cũng có xu hướng chăm sóc sức khỏe tốt hơn, tập thể dục nhiều hơn, ngủ ngon hơn và có mức hormone gây căng thẳng thấp hơn.

Vì vậy, nếu bạn muốn học cách tận hưởng cuộc sống, hãy bắt đầu thực hành lòng biết ơn.

Ví dụ, bạn có thể bắt đầu viết nhật ký về lòng biết ơn hoặc đơn giản là bắt đầu mỗi ngày bằng cách viết ra ba điều mà bạn biết ơn, chẳng hạn như “Hôm nay, tôi rất biết ơn vì đã có tách cà phê ngon trong tay cùng với cuốn sách tôi đang đọc. Điều đó dạy tôi rất nhiều,…”',
    'https://porticoandbridge.com/wp-content/uploads/2023/05/blog8.png',
    '2022/09/01',
    '4',
    'https://porticoandbridge.com/lifestyle/14-cach-tan-huong-cuoc-song-giai-tri-va-thu-gian-mot-cach-tot-nhat/'
),
(
    '
10 Cách Tạo Động Lực Làm Việc Bạn Nên Áp Dụng Ngay',
    'Động lực làm việc là yếu tố quan trọng, quyết định lớn đến năng suất, hiệu quả và khả năng thăng tiến của bạn trong một công việc. Cảm thấy mệt mỏi hay chán nản công việc là dấu hiệu đáng báo động để chúng ta đánh thức lại chính mình. Vậy, bạn đã biết cách tạo động lực làm việc nếu rơi vào tình trạng này chưa?',
    '10 Cách tạo động lực dành bạn nên thử ngay lúc này
Nghĩ đến kết quả mà bạn đạt được khi làm việc chăm chỉ
Hãy vẽ ra bức tranh kết quả công việc mà bạn mong muốn đạt được. Đưa vào đó những con số cụ thể giúp bạn dễ hình dung hơn về nó và gắn thêm mốc thời gian nếu có thể.

Tưởng tượng bạn sẽ hạnh phúc và hài lòng như thế nào nếu đạt được kết quả đó. Nếu khao khát đủ mãnh liệt, bạn sẽ có động lực để mỗi ngày hoàn thành một đầu việc trong kế hoạch. Thời gian chạm tới bức tranh kết quả sẽ được rút ngắn nhờ động lực làm việc của bạn.

Uống nước và nghỉ ngơi
Nghe có vẻ đơn giản nhưng nếu bạn cho phép bản thân được thảnh thơi đôi phút, một cơ thể tràn đầy năng lượng sẽ giúp bạn làm việc tốt hơn gấp bội phần.

Uống nước và nghỉ ngơi
Sẽ rất ngán ngẩm và mệt mỏi nếu bạn cứ chăm chăm làm việc. Biểu hiện của chán việc không phải chỉ xuất hiện khi bạn gặp chuyện không suôn sẻ, mà kể cả khi bạn làm việc quá sức.

Điều này dẫn đến việc chán làm mỗi ngày ở những khoảnh khắc mệt mỏi. Vậy làm gì khi chán việc? Câu trả lời đơn giản nhất chính là uống nước và nghỉ ngơi đôi chút. Nếu như cơ thể đang cảnh báo, bạn hãy đáp lời và cho phép nó được nghỉ ngơi.

Nước uống sẽ giúp bạn tỉnh táo, chợp mắt 5 phút sẽ giúp bạn xóa tan cơn uể oải, mỏi nhoài. Áp dụng một phương pháp làm việc khoa học có thể giúp ích bạn trong việc dần dần tìm lại động lực làm việc đấy.',
    'https://glints.com/vn/blog/wp-content/uploads/2021/08/uong-nuoc-nghi-ngoi.jpg',
    '2022/09/02',
    '5',
    'https://glints.com/vn/blog/thuc-tinh-dong-luc-lam-viec/'
),
(
    '7 Cách giữ tình yêu tuổi học trò tốt nhất',
    '
Ai đã từng ngồi trên ghế nhà trường, đã từng trải qua một thời thiếu niên đầy nhiệt huyết thì chắc chắn đã từng rung động với một người khác giới nào đó. Đấy được gọi là mối tình tuổi học trò, tình yêu này rất đẹp, vô tư, hồn nhiên và trong sáng. Chính vì có sự rung động mà 2 bạn cùng nhau cố gắng học hành và vun đắp cho tình yêu trở nên tốt đẹp',
    '
XEM NHANH NỘI DUNG BÀI VIẾT
1. Biết giữ gìn bản thân
2. Luôn cùng nhau cố gắng trong học tập
3. Biết điều khiển cảm xúc của bản thân
4. Không kiểm soát nhau
5. Luôn tự hào về đối phương
6. Quan tâm đến tương lai của nhau
7. Dùng bùa thầy pá vi
1. BIẾT GIỮ GÌN BẢN THÂN
Tình yêu tuổi học trò là như thế nào? Chúng chính là một thứ tình cảm rất khó có thể giải thích. Nếu có ai đó hỏi tại sao bạn yêu người ấy thì chắc chắn câu trả lời chỉ là do bởi cảm xúc. Bạn sẽ nhận thấy được sự ấm áp, hạnh phúc khi ở bên người ấy. Mối tình học trò rát ngây thơ, vụng dại và hết sức chân thật đẹp đẽ.

Để mối tình đó trở thành một kết thúc có hậu thì cả hai bạn cần phải nhớ biết giữ gìn bản thân. Không nên quá lụy tình hay quá chìm đắm trong cảm xúc và đặc biệt không để cho đối phương được phép thỏa mãn quá nhanh về tinh thần lẫn thể xác. Ngoài ra khi yêu bạn không để ảnh hưởng tới công việc và học tập. Bởi chúng sẽ dẫn đến nhiều hậu quả nghiêm trọng trong tương lai.',
    'https://i.pinimg.com/originals/9c/82/b4/9c82b4e8de0522c43c7fddaba114ff0c.jpg',
    '2022/09/22',
    '1',
    'https://thaybuayeupavi.com/cach-giu-tinh-yeu-tuoi-hoc-tro/'
),
(
    '12 cách tạo dựng thói quen lành mạnh trong gia đình',
    'Trong một gia đình hiện đại, các bậc cha mẹ đôi khi cảm thấy việc duy trì các thói quen lành mạnh cho gia đình là một việc khó khăn, khi có quá nhiều việc phải làm với một guồng bận rộn từ lúc thức dậy đến khi đi ngủ. Bởi vậy, thay vì sửa đổi hoàn toàn lối sống của gia đình, kế hoạch điều chỉnh các thói quen theo cách phù hợp với cả nhà sẽ khả thi hơn. Dưới đây là một số ý tưởng mà các bậc cha mẹ có thể lựa chọn và thử áp dụng tại nhà.',
    '1. Tập thể dục

Trong quãng thời gian TV quảng cáo hay quãng nghỉ giữa các tập phim, hãy tổ chức một cuộc thi đấu nhỏ giữa các thành viên để xem ai có thể chống đẩy nhiều nhất, plank lâu nhất hoặc nhảy dây nhiều nhất…

2. Tha thứ

Hãy thừa nhận lỗi lầm với con và mong đợi sự tha thứ. Việc mô hình hóa hành vi này có thể giúp cha mẹ cảm thấy hạnh phúc và mạnh khỏe hơn, đồng thời cũng dạy con cách bỏ qua những mâu thuẫn và sự khó chịu.
3. Quản lý thực đơn

Cho trái cây và rau củ vào bữa ăn hàng ngày của gia đình. Thay giảng giải về sự cần thiết của những thực phẩm này, hãy chuẩn bị sẵn và đảm bảo chúng có trong thực đơn hàng ngày. Việc đảm bảo mô hình ăn uống lành mạnh sẽ giúp trẻ có những lựa chọn phù hợp trong việc ăn uống.
4. Chủ động trong việc chăm sóc sức khỏe

Luôn cập nhật về việc thăm khám sức khỏe cho các thành viên trong gia đình, những lần khám định kỳ theo dõi sự phát triển, hành vi, giấc ngủ, ăn uống và sự phát triển các kỹ năng xã hội của con bạn.
5. Ngủ ngon
Cố gắng đi ngủ sớm và có thói quen thư giãn nhất quán - không có thời gian sử dụng thiết bị điện tử. Trẻ thiếu ngủ sẽ ảnh hưởng rất nhiều tới khả năng học tập và cảm xúc. Vì vậy, hãy đảm bảo việc nghỉ ngơi và sử dụng thiết bị là điều được thống nhất trong gia đình bạn.
6. Khám phá những điều mới
Lập danh sách các hoạt động cả nhà muốn thử làm cùng nhau và treo nó ở nơi cả gia đình có thể nhìn thấy.
7. Xây dựng sức mạnh
Kết hợp sức mạnh và sự linh hoạt vào kế hoạch hoạt động thể chất của gia đình bạn. Điều này có thể đơn giản như vươn vai trong khi xem quảng cáo hoặc nâng bắp chân trong lúc đánh răng.
8. Tìm niềm vui
Tìm điều gì đó để các thành viên trong nhà có thể cười cùng nhau. Tiếng cười làm giảm căng thẳng, lo lắng và giúp các thành viên trong gia đình gần nhau hơn.
9. Dành thời gian cho những người thân yêu
Thấu hiểu tầm quan trọng của việc hình thành các mối quan hệ bền chặt bằng cách đối xử tốt với những người thân yêu của chúng ta. Trẻ sẽ học được rằng trao đi mà không đòi hỏi nhận lại có thể tạo ra hạnh phúc thực sự.
10. Hạn chế công nghệ
Đặt thời gian sử dụng thiết bị điện tử thành đặc quyền chỉ được phép sau khi hoàn thành công việc nhà và bài tập về nhà. Giới hạn thời gian sử dụng thiết bị điện tử phù hợp với độ tuổi, và không để thiết bị điện tử trong phòng ngủ của con.
11. Giảm căng thẳng
Trẻ cũng trải qua căng thẳng và lo lắng giống như bố mẹ vậy. Tìm kiếm các video trực tuyến miễn phí về yoga cho trẻ em và gia đình, hoặc thử tạo hít thở sâu thành thói quen trước khi đi ngủ của con.
12. Tỏ lòng biết ơn
Tạo một chiếc lọ biết ơn và khuyến khích mọi người ghi chú vào lọ mỗi ngày một điều gì đó mà họ biết ơn. Cả nhà có thể dành thời gian đọc những lời cảm ơn này vào bữa ăn tối.
Cha mẹ có thể gặp khó khăn khi cố gắng giúp các con và các thành viên khác trong gia đình tạo lập thói quen lành mạnh. Khi đó, việc làm gương các hành vi lành mạnh là điều đầu tiên bạn có thể làm. Hãy bắt đầu hành trình chăm sóc sức khỏe của chính mình. Một khi trẻ nhìn thấy những thay đổi mà bạn đang thực hiện, rất có thể con cũng sẽ mong muốn được thử sức mình.',
    'https://theolympiaschools.edu.vn/storage/img-2129.jpg',
    '2023/09/22',
    '2',
    'https://theolympiaschools.edu.vn/12-cach-tao-dung-thoi-quen-lanh-manh-trong-gia-dinh'
),
(
    '7 LỜI KHUYÊN ĐỂ DUY TRÌ TÌNH BẠN BỀN LÂU KHI ĐÃ TRƯỞNG THÀNH',
    'Khi trưởng thành và có lối đi riêng, chúng ta ít nhiều sẽ có khoảng cách với người bạn của mình. Dù thế, khi đủ chân thành, ta luôn có thể tìm ra cách để dung hòa và tiếp tục viết nên câu chuyện tình bạn thật đẹp.

Ở mỗi cột mốc cuộc đời, như độ tuổi 20 rồi đến 30, ta nhận thấy sự thay đổi trong tính cách bởi những trải nghiệm tích lũy được trong hành trình trưởng thành. Chính sự khác biệt về kinh nghiệm, lối sống, nghề nghiệp… sau nhiều năm, chúng ta dần trở nên xa cách và khó tìm được tiếng nói chung với những người bạn đã lâu không có dịp gặp mặt.',
    '1. HÃY NGHĨ ĐẾN LÝ DO VÌ SAO CÁC BẠN TRỞ THÀNH BẠN BÈ
Hai cô gái duy trì tình bạn
Ảnh: Pexels/Ron Lach

Khoảnh khắc lần đầu tiên gặp mặt, những ấn tượng về nhau, những câu chuyện cũ, những trò đùa mà chỉ các bạn mới hiểu… tất cả điều đó chính là “chất keo” giúp kết nối các bạn lại với nhau, đồng thời gợi nhắc về khoảng thời gian vui vẻ và hồn nhiên mà bạn cùng bạn bè của mình đã từng trải qua. Dù đã trưởng thành và mỗi người đều có hướng đi riêng, những câu chuyện xưa cũ luôn có tác dụng kết nối, hàn gắn tình bạn mỗi khi bạn bè có dịp gặp lại nhau. Vì vậy, khi có cơ hội, đừng ngại ngần ôn lại những kỷ niệm cũ cùng nhau nhé!



BÍ QUYẾT SỐNG
10 CÂU HỎI CẦN THIẾT GIÚP BẠN CHỌN NGÀNH DỄ DÀNG HƠN
2. CÙNG NHAU TẠO NÊN NHỮNG KỶ NIỆM MỚI
Hồi tưởng về quá khứ luôn khiến chúng ta cảm thấy bồi hồi, hạnh phúc. Nhưng để một mối quan hệ được lâu bền, kể cả tình bạn, tất cả phải cùng nhau tạo ra những trải nghiệm và khoảnh khắc hạnh phúc mới. Cùng nhau khám phá những sở thích mới, tham gia những hoạt động thú vị hay cùng đi du lịch khi có thời gian rảnh là cách để bạn cùng bạn bè của mình vừa có dịp cập nhật cuộc sống của nhau, vừa tạo ra những ký ức mới. Vì vậy, các bạn có thể cùng nhau lên kế hoạch cho những hoạt động mới để mọi người có thể sắp xếp thời gian và dễ gặp mặt nhau hơn khi mỗi người đều tất bật với cuộc sống của riêng mình.

Đôi khi, không nhất thiết phải tham gia các hoạt động cùng nhau mới có thể tạo ra những kỷ niệm mới. Chỉ cần các bạn ngồi lại và cùng nhau trò chuyện về những khó khăn mình đã trải qua, những thành tích đã đạt được, những mong muốn cho tương lai… cũng đủ để kéo mọi người lại gần nhau hơn. Sự chân thành sẽ xóa nhòa mọi khác biệt để mọi người có dịp hiểu về cuộc sống của nhau. Với các tiện ích của công nghệ ngày nay, việc giữ liên lạc thường xuyên với bạn bè trở nên dễ dàng hơn rất nhiều. Vì thế, hãy mở lòng lắng nghe những tâm sự của bạn bè và ngược lại để hiểu và thương yêu nhau nhiều hơn.
BÍ QUYẾT SỐNG
HỘI CHỨNG KẺ MẠO DANH (IMPOSTER SYNDROME): NGUYÊN NHÂN VÀ CÁCH ĐỐI DIỆN
3. THẤU HIỂU VÀ CẢM THÔNG CHO NHAU
Hai người bạn thấu hiểu nhau
Tìm cách sắp xếp thời gian gặp gỡ không phải là khó khăn duy nhất để duy trì tình bạn. Khi trưởng thành, mỗi người đều có những mối bận tâm và nỗi lo khác nhau, chẳng hạn như có người phải chăm sóc con cái, có người bận rộn vì công việc… Bên cạnh đó, vấn đề tài chính cũng ảnh hưởng đến việc họp mặt bạn bè hay tham gia các hoạt động gắn kết cùng nhau.

Đôi khi, chúng ta không nên ngần ngại chia sẻ với nhau về những khó khăn mà mỗi người đang phải đối diện. Hiểu được tình trạng tài chính của nhau giúp các bạn lên kế hoạch hợp lý hơn cho những buổi gặp mặt kế tiếp, chẳng hạn như tìm một địa điểm ăn uống, họp mặt với giá cả vừa phải để mọi người đều có thể cùng gặp gỡ mà không phải quá lo lắng về vấn đề tiền bạc.

Lý do tài chính đôi khi khiến một vài người bạn thường xuyên từ chối gặp mặt, khi họ e ngại và không chia sẻ về vấn đề này, bạn có thể hiểu lầm rằng họ không muốn kết nối với bạn nữa. Tuy nhiên, nếu bạn bè dành nhiều sự quan tâm cho nhau, thăm hỏi về gia đình, công việc, mọi người sẽ hiểu rõ hơn về tình trạng của nhau để từ đó tìm ra những phương thức phù hợp để hỗ trợ, gặp gỡ và duy trì tình bạn bền chặt.

Xem thêm

• Ý nghĩa của việc liên tục nhìn thấy ngày sinh của bản thân ở khắp nơi

• 6 sự thật trần trụi về cuộc sống bạn nên biết

• Hiểu rõ về sự cô đơn và 12 cách giúp bạn vui sống dù đang lẻ bóng

4. CỞI MỞ VỀ CUỘC SỐNG CỦA NHAU
Sau một thời gian dài không gặp gỡ, mỗi người đều có những hướng đi riêng, ai cũng sẽ tò mò về cuộc sống của nhau. Sự khác biệt về lối sống, về hướng đi trong cuộc đời khiến bạn e ngại sẽ không tìm được điểm chung trong các cuộc trò chuyện. Ví dụ, bạn có một người bạn đã lập gia đình và trong suốt buổi nói chuyện, người ấy luôn nhắc đến vấn đề con cái, trong khi đó, bạn lại muốn cập nhật cho người bạn của mình về cuộc sống của bản thân, về công việc và những sở thích mới…

Tuy nhiên, sau một thời gian không gặp mặt, ai trong nhóm bạn cũng sẽ rất tò mò và muốn tìm hiểu thêm về cuộc sống của nhau. Do đó, đừng e ngại khi thấy câu chuyện của bản thân không có điểm tương đồng với bè bạn, mà hãy cởi mở chia sẻ về những điều mới mẻ trong cuộc sống của bản thân. Đó cũng là cách để bạn bè có dịp hiểu nhau, thông cảm, thấu hiểu và cùng nhau chia sẻ vui buồn, từ đó có thể phát triển tình bạn sâu sắc hơn.

5. HẠN CHẾ SỰ SO SÁNH
Tỉnh bạn giữa hai cô gái
Ảnh: Pexels/Yuliia Tretynychenko

Tất cả mọi người đều tự so sánh bản thân với bạn bè ở một số thời điểm nào đó trong cuộc đời. Khi mỗi người đều đã xác định hướng đi riêng trong sự nghiệp và cuộc sống, dù không nói ra, nhưng ai cũng sẽ có xu hướng quan sát lẫn nhau và so sánh ai đang có cuộc sống tốt hơn hay thành đạt hơn những người còn lại. Đặc biệt, nếu tất cả bạn bè xung quanh ai cũng thành công và có chỗ đứng, bạn dễ cảm thấy tủi thân và ghen tỵ với mọi người. Đây là phản ứng hết sức bình thường.

Tuy nhiên, việc so sánh cuộc sống của bản thân với bè bạn có thể ảnh hưởng tiêu cực đến tình bạn và khiến bạn hoài nghi về con đường mà mình đã chọn trong đời. Thay vì tự trách bản thân hay cảm thấy thua xa những người bạn đồng trang lứa, hãy tập trung phát triển hướng đi và những dự định của mình.

Không ai là không trải qua gian khổ trong cuộc đời và những người bạn của chúng ta cũng không ngoại lệ. Để đạt được thành tựu như hiện tại, họ cũng phải chịu nhiều áp lực, đánh đổi nhiều thứ và không ít lần muốn bỏ cuộc. Bạn có thể học hỏi kinh nghiệm từ bạn bè, chắc chắn họ sẽ đưa ra những lời khuyên và góc nhìn mới đề bạn tiếp tục bước đi trong cuộc sống, điều này cũng sẽ giúp các bạn duy trì tình bạn bền lâu trong giai đoạn trưởng thành.



BÍ QUYẾT SỐNG
10 ĐẶC ĐIỂM CỦA NGƯỜI CÓ TINH THẦN KHỎE MẠNH
6. HỌC HỎI TỪ NHỮNG TRẢI NGHIỆM CỦA NHAU
Khi trưởng thành, hướng đi của mỗi người mang đến những trải nghiệm khác biệt. Học hỏi từ những trải nghiệm của nhau cũng là một phương pháp hữu hiệu để duy trì tình bạn. Ví dụ, bạn là người chuyên tâm vào sự nghiệp, thích được tự do và được đi đến nhiều nơi để học hỏi, khám phá, trong khi một vài người bạn đã lập gia đình, thậm chí đã có con. Đến một lúc nào đó, bạn đã gặp được người phù hợp và sẵn sàng tiến đến hôn nhân, có thể những người bạn đã có kinh nghiệm trong chuyện này sẽ cho bạn những lời khuyên hữu ích để bắt đầu xây dựng gia đình nhỏ của mình.

Xem thêm

• 8 bài học về các mối quan hệ mà bạn sẽ muốn khắc cốt ghi tâm

• 14 cách đơn giản để bạn yêu bản thân hơn mỗi ngày

• 5 bí quyết giao tiếp hữu ích giúp bạn trở nên thu hút hơn

7. TÌM KIẾM NHỮNG NGƯỜI BẠN MỚI
Tình bạn giữa các cô gái
Ảnh: Pexels/Ron Lach

Cuộc sống luôn vận động và thay đổi, ở mỗi giai đoạn cuộc đời, chúng ta sẽ thiết lập những mối quan hệ mới, gặp gỡ những người bạn có cùng lối sống và quan điểm. Tuy nhiên, việc kết bạn mới không có nghĩa là chúng ta phải cắt đứt quan hệ với những người bạn cũ. Những người bạn mới sẽ mang đến những góc nhìn mới mẻ về cuộc sống, họ cũng là tấm gương phản chiếu phong cách sống và con người hiện tại của bạn.

Trong khi đó, mối quan hệ với những người bạn cũ mang ý nghĩa sâu sắc hơn bởi sau nhiều năm trở thành bạn bè, các bạn đã phát triển thành tri âm, thấu hiểu về tính cách và suy nghĩ, để mỗi khi cảm thấy chông chênh hay tuyệt vọng, những người bạn cũ sẽ là chỗ dựa để bạn yên tâm gửi gắm tâm sự của mình. Vì vậy, cuộc sống luôn cần có sự cân bằng, học hỏi và kết giao bạn mới nhưng vẫn luôn giữ mối quan hệ với bạn bè cũ để có thể thoải mái tâm sự với nhau mọi điều trong cuộc sống.

Nhóm thực hiện
Bài: Vy Dương Thảo

Nguồn: Tạp chí Phái đẹp ELLE

Tham khảo: The Every Girl

BÌNH LUẬN
0 lượt bình luận
Bình luận của bạn

icons8-bell-90
Luôn giữ kết nối! Đăng ký để ELLE chia sẻ cùng bạn những bài viết thú vị.
ĐỒNG Ý
XEM THÊM
HIỂU RÕ VỀ 2 CHẾ ĐỘ ĂN CHAY: VEGETARIAN VÀ VEGAN

Tan Pham
Đăng ngày: 04/08/2022 10:10:57
Bạn có bao giờ nghe nói về sự khác biệt giữa những người ăn chay (vegetarian) và thuần chay (vegan) chưa? Nếu bạn đang có ý định chuyển sang ăn chay thường xuyên vì lý do sức khỏe, bảo vệ môi trường hay tôn giáo, tín ngưỡng, đây là bài viết giúp bạn có cái nhìn khách quan hơn về hai chế độ ăn này.

Đâu là sự khác biệt giữa chế độ ăn chay (vegetarian) và ăn thuần chay (vegan)?

CHẾ ĐỘ ĂN CHAY (VEGETARIAN) LÀ GÌ?
Chế độ ăn chay
Ảnh: Pexels/Roman Odintsov

Theo Hiệp hội ăn chay, người ăn chay (vegetarian) là người không ăn thịt, gia cầm, động vật có vú, cá, động vật có vỏ hoặc các sản phẩm phụ từ quá trình giết mổ động vật.

Chế độ ăn chay bao gồm nhiều loại trái cây, rau củ, ngũ cốc, đậu, quả và hạt. Việc sử dụng các thực phẩm chứa sữa, mật ong và trứng còn tuỳ thuộc vào từng chế độ chay khác nhau.

Những loại hình chay phổ biến nhất gồm:

Chế độ ăn chay Lacto-ovo: Không ăn thịt động vật nhưng có thể dùng các thực phẩm từ sữa và trứng.
Chế độ ăn chay Lacto: Không tiêu thụ thịt và cả trứng động vật, nhưng vẫn dùng được các sản phẩm sữa.
Chế độ ăn chay Ovo: Không ăn bất kì loại thực phẩm nào có nguồn gốc từ động vật trừ trứng.
Chế độ ăn thuần chay (vegan): Không dùng tất cả các sản phẩm có nguồn gốc từ động vật hoặc được thử nghiệm trên động vật.
Những người không ăn thịt đỏ hoặc thịt gia cầm nhưng vẫn ăn cá được xếp vào nhóm pescatarians, còn những người ăn chay bán thời gian thường được gọi là flexitarians. Mặc dù đôi khi vẫn được xem là những loại hình ăn chay, nhưng người thuộc các nhóm pescatarians và flexitarians lại ăn thịt động vật. Vì vậy, về cơ bản, những người thuộc hai chế độ ăn này không phải là những người ăn chay.


BÍ QUYẾT SỐNG
8 BÍ QUYẾT SỐNG KHỎE MẠNH VÀ HẠNH PHÚC CỦA NGƯỜI BẮC ÂU
CHẾ ĐỘ ĂN THUẦN CHAY (VEGAN) LÀ GÌ?
Cô gái ăn thuần chay


Ăn thuần chay được định nghĩa là chế độ ăn nhằm mục đích khai trừ mọi hình thức bóc lột và tra tấn động vật, bao gồm việc khai thác động vật để làm thực phẩm hay bất kỳ hình thức hành hạ nào khác. Nó có thể được coi là mức độ cao hơn của chế độ ăn chay (vegetarian).

Chế độ ăn thuần chay không chỉ loại trừ thịt động vật mà còn cả sữa, trứng và các nguyên liệu khác từ động vật, bao gồm gelatin, mật ong, carmine, pepsin, shellac, albumin, tinh bột, đạm váng sữa, casein và một số loại vitamin D3.

Những người ăn chay và thuần chay thường tránh tiêu thụ các sản phẩm từ động vật vì những lý do giống nhau. Sự khác biệt lớn nhất là mức độ mà họ tiếp nhận các sản phẩm có nguồn gốc từ động vật. Ví dụ, cả người ăn chay và thuần chay đều loại bỏ thịt khỏi chế độ ăn uống của họ vì lý do sức khỏe hoặc môi trường, nhưng người ăn chay có thể chấp nhận việc tiêu thụ một số sản phẩm từ động vật như sữa hoặc trứng, còn người ăn thuần chay thì không. Có thể hiểu rằng, ăn thuần chay được xem là hình thức ăn chay nghiêm ngặt nhất.

Mặt khác, những người ăn thuần chay tin rằng động vật nên được giải thoát khỏi những nhu cầu của con người, cho dù là để cung cấp lương thực, quần áo, nghiên cứu khoa học hay giải trí. Do đó, bất kể động vật được nuôi nhốt trong điều kiện như thế nào, họ vẫn tìm cách ngừng sử dụng tất cả các sản phẩm có nguồn gốc hay thử nghiệm trên động vật.

Xem thêm

• 9 cách để phát triển bản thân lành mạnh và hạnh phúc hơn

• Nghiên cứu chỉ ra 8 lợi ích không ngờ của thói quen đọc sách

• Thiết lập ranh giới để bảo vệ sức khỏe tinh thần

NHỮNG LƯU Ý VỀ CÂN BẰNG DINH DƯỠNG ĐỐI VỚI CHẾ ĐỘ ĂN CHAY VÀ THUẦN CHAY
cô gái dã ngoại bên bờ biển
Ảnh: Unsplash/Freddie Addery

Nghiên cứu cho thấy chế độ ăn chay và thuần chay thường chứa ít chất béo bão hòa và cholesterol, tuy nhiên, hai chế độ ăn này bổ sung rất nhiều vitamin, khoáng chất, chất xơ và các hợp chất thực vật lành mạnh. Các loại thực phẩm giàu chất dinh dưỡng đến từ các thực phẩm như trái cây, rau, ngũ cốc nguyên cám, quả hạch, hạt và sản phẩm từ đậu nành.

Nhưng nếu bạn ăn chay cực đoan, thiếu khoa học và không bổ sung đủ dinh dưỡng cho cơ thể, mức độ hấp thụ dinh dưỡng của bạn sẽ thấp đi rất nhiều, đặc biệt là các dưỡng chất sắt, canxi, kẽm và vitamin D.

Cả hai chế độ ăn trên cũng không cung cấp đủ hàm lượng vitamin B12 và axit béo omega-3 chuỗi dài, cụ thể hàm lượng các chất này trong chế độ ăn thuần chay lại thấp hơn so với chế độ ăn chay. Vitamin B12 và axit béo omega-3 chuỗi dài chủ yếu tồn tại ở nội tạng động vật, thịt, trứng, cá, tôm… do đó, khi không tiêu thụ các sản phẩm có nguồn gốc từ động vật, những người ăn chay dễ rơi vào tình trạng thiếu hụt các dinh dưỡng trên. Việc thiếu hụt các dưỡng chất như axit béo omega-3, canxi và vitamin D và B12 có thể tác động tiêu cực đến các khía cạnh khác nhau của sức khỏe, bao gồm cả sức khỏe tinh thần và thể chất. Tuy nhiên, bạn có thể bổ sung các chất này bằng thực phẩm bổ sung và viên vitamin mà không cần quan ngại về việc phải thay đổi chế độ ăn của bản thân.

Ngoài ra, không phải thực phẩm chay nào cũng hoàn toàn lành mạnh. Bánh quy, khoai tây chiên, kẹo và thậm chí cả kem làm từ hạt… có thể dùng cho chế độ ăn chay và thuần chay nhưng chứa rất nhiều carbohydrate tinh chế, đường hoặc chất béo. Vì vậy, dù bạn đang theo đuổi chế độ ăn nào, bạn cần quan tâm đến thành phần dinh dưỡng trong thực phẩm mà mình tiêu thụ, gia giảm lượng đường hóa học và đồ ăn được chế biến với nhiều dầu mỡ.

Cả hai loại hình ăn chay này đều có thể được coi là an toàn cho mọi giai đoạn trong cuộc đời mỗi người, thậm chí ăn thuần chay có thể mang lại nhiều lợi ích sức khỏe và giúp bạn sống xanh, giảm nguy cơ mắc các bệnh tiểu đường típ 2, tim mạch và ung thư. Tuy nhiên, điều quan trọng đối với cả người ăn chay và thuần chay là phải tuân theo một kế hoạch ăn uống khoa học để tránh các biến chứng sức khỏe về lâu dài.',
    'https://www.elle.vn/wp-content/uploads/2022/08/02/490237/tinh-ban-giua-hai-co-gai.jpg',
    '2023/01/02',
    '3',
    'https://www.elle.vn/bi-quyet-song/duy-tri-tinh-ban-khi-truong-thanh'
),
(
    '7 bước giúp con đối mặt với bạo lực học đường',
    'Hiện nay theo thống kê của các nhà nghiên cứu thì Việt Nam đang là một trong những nước đứng đầu về tỷ lệ bạo lực học đường và đang có dấu hiệu gia tăng và chưa có dấu hiệu dừng lại. Những vụ bạo lực học đường không chỉ gia tăng về số lượng mà còn gia tăng về mức độ nguy hiểm của nó.',
    '1. Nói cho con biết về bạo lực học đường
Cha mẹ cần cảnh báo cho con biết về sự tồn tại của nạn bạo lực học đường, nó có thể xảy ra ở bất cứ nơi đâu và thậm chí có thể xuất hiện ngay bên cạnh trẻ. Khi trẻ biết về sự có mặt của bạo lực học đường, trẻ sẽ có ý thức cảnh giác, né tránh hoặc tự bảo vệ mình tốt hơn.

2. Dạy con kỹ năng tự vệ
Dạy cho con những kỹ năng cần thiết để đối phó với vấn nạn bạo lực học đường là điều mà các bậc cha mẹ cần lưu tâm. Cách tốt nhất là nên cho con tham gia các lớp học võ thuật, nhưng cần nhắc nhở trẻ rằng, dùng võ là để tự vệ chính đáng chứ không phải để bắt nạt bạn khác yếu hơn mình.



3. Luôn giám sát con
Để con khôn lớn trưởng thành cần sự chăm sóc, bảo bọc cũng như sự giám sát thường xuyên của cha mẹ. Nếu cha mẹ buông lỏng con cái, trẻ dễ bị cảm dỗ vào các thói hư tật xấu, bị bạn bè xấu lôi kéo, không định hướng được tương lai của mình. Đi đôi với đó các bậc phụ huynh cũng nên dạy cho con cách ứng xử phù hợp với các tình huống bạo lực. Giải thích cho con hiểu đó là những việc làm sai trái, thiếu văn hóa con nên tránh tiếp xúc với những bạn có hành vi bạo lực như vậy.

4. Dạy con quyết đoán và cứng rắn
Để đối phó với bạo lực học đường, bạn nên dạy cho trẻ phải luôn bình tĩnh trong mọi hoàn cảnh, dùng lời nói cứng rắn để giải quyết thay vì dùng nắm đấm với bạn. Từ đó, giúp con cái hiểu được rằng, không nên trốn tránh bạo lực mà cần phải can đảm đối diện và tìm ra những cách giải quyết thấu tình, đạt lý nhất để chấm dứt nạn bạo lực học đường càng sớm càng tốt.

5. Khuyến khích con nói ra sự thật
Thực tế cho thấy nhiều trẻ không dám tố cáo kẻ bắt nạt vì sợ trả thù, thậm chí không dám nói lại với cha mẹ. Để chấm dứt tình trạng này, cha mẹ nên thường xuyên trò chuyện cởi mở với con, quan tâm đến những bất thường trên cơ thể con, từ đó giúp trẻ dễ dàng giãi bày mọi lo lắng của mình với cha mẹ.

Cho trẻ nhiều cơ hội để nói lên những suy nghĩ của mình, đặc biệt khi bạn cảm nhận con luôn lo lắng, sợ hãi mỗi khi đến trường. Sau đó, bạn hãy đến gặp giám thị nhà trường, giáo viên chủ nhiệm để cảnh báo các khó khăn của trẻ và đề nghị họ giúp đỡ.

6. Dạy con kiểm soát bản thân
Dạy con kỹ năng không bị kích động khi gặp kẻ xấu bắt nạt. Nếu bị kẻ xấu bắt nạt nên khuyên trẻ không tạo thêm mâu thuẫn mà cần giữ bình tĩnh. Trong trường hợp bất khả kháng, cần khéo léo đáp ứng những yêu cầu của đối phương để tránh bị hại. Sau khi sự việc xảy ra cần lập tức nói cho thầy cô, bố mẹ và cơ quan công an biết.

Sau khi tan học, không nên để trẻ đi một mình ở những nơi vắng vẻ, những nơi thường xuyên xảy ra bạo lực; khi có người xin tiền hoặc có những lời nói dọa nạt thì không nên để ý mà giả vờ không nghe thấy, tiếp tục đi và tìm nơi đông người, không đôi co, lời qua tiếng lại với những kẻ lưu manh, côn đồ. Nếu bị hại, không được im lặng, nhẫn nhịn hay tự mình giải quyết mà cần báo cho người thân, thầy cô thậm chí nếu nguy hiểm cần khai báo cho cơ quan công an ngay lập tức.

7. Không để xảy ra bạo lực trong gia đình
Bạo lực trong gia đình là điều thực sự đáng sợ và có hại đối với con trẻ. Một đưa trẻ phải chứng kiến bạo lực trong gia đình, trẻ sẽ luôn dùng nắm đấm để giải quyết những mâu thuẫn của mình. Gia đình là tế bào của xã hội, gia đình có yên ấm, hạnh phúc con trẻ được yêu thương, trân trọng thì xã hội mới giảm bớt những vấn nạn bạo lực.

Vì thế, mỗi cá nhân trong gia đình phải luôn sống thương yêu nhau, cần đấu tranh để chống lại các hành vi bạo lực trong gia đình.',
    'https://amaquangnam.edu.vn/wp-content/uploads/2023/12/3-day_vo_cho_be_3_tuoi-153827.jpg',
    '2023/09/23',
    '4',
    'https://amaquangnam.edu.vn/7-buoc-giup-con-doi-mat-voi-bao-luc-hoc-duong/'
),
(
    'Những câu nói hay về sự cố gắng, nỗ lực, tạo động lực để phát triển bản thân',
    'Trong cuộc sống hàng ngày, đôi khi chúng ta cảm thấy mệt mỏi và cần được truyền thêm động lực để tiếp tục cố gắng và phát triển bản thân mình hơn nữa. Trong bài viết dưới đây, Luật Minh Khuê sẽ cung cấp cho quý bạn đọc những câu nói hay về sự cố gắng, nỗ lực, tạo động lực để phát triển bản thân. Kính mời quý bạn đọc tham khảo.',
    '1. Những câu nói hay về sự cố gắng, nỗ lực vươn lên
1. Thành công là một cuộc hành trình, không phải là định mệnh.

2. Không phải lúc nào bạn cố gắng cũng sẽ thành công, nhưng phải luôn cố gắng để không hối tiếc khi thất bại.

3. Đừng thở dài hãy vươn vai mà sống, bùn dưới chân nhưng nắng ở trên đầu.

4. Sự khác biệt của người thành công với người thất bại không nằm ở sức mạnh, hiểu biết, kiến thức, mà là ở ý chí.

5. Nếu bạn không thử. Bạn sẽ không bao giờ biết được bạn có thể làm được những gì.

6. Ước mơ là không có ngày hết hạn, hãy hít thở sâu, và cố gắng thêm lần nữa.

7. Hôm nay đầy rẫy những khó khăn và ngày mai cũng không có điều gì dễ dàng. Nhưng sau ngày mai, mọi thứ sẽ trở nên tốt đẹp hơn.

8. Đừng bao giờ đánh mất niềm tin vào bản thân. Chỉ cần tin là mình có thể làm được là bạn lại có thêm lí do để cố gắng thực hiện điều đó.


9. Cuộc sống này vốn dĩ không công bằng. Hãy tập làm quen với điều đó.

10. Niềm tin vào chính mình có sức mạnh xua tan bất kì sự hoài nghi nào của người khác.

11. Muốn thành công phải qua nhiều thất bại. Trên đường đời có dại mới có khôn.

12. Dù người ta có nói với bạn bất kì điều gì đi nữa, hãy tin rằng cuộc sống của chúng ta luôn luôn tươi đẹp.

13. Tôi rất biết ơn với người đã nói không với tôi, nhờ vậy mà tôi biết cách tự mình giải quyết vấn đề.

14. Hãy hướng về phía mặt trời, nơi mà bóng tối luôn ở phía sau lưng bạn. Điều mà hoa hướng dương vẫn làm mỗi ngày.

15. Thành công không phụ thuộc vào kiến thức mà vào cách áp dụng kiến thức.

16. Thành công lớn nhất là biết cách đứng dậy sau những lần vấp ngã.


17. Điều khác biệt giữa một người thành công với một kẻ thất bại không phải là họ có điều kiện mà họ có ý chí.

18. Điều quan trọng để đạt được vị trí, là bạn phải chọn được cho mình hướng đi.

19. Khó khăn rồi cũng sẽ qua, giống như cơn giông dồn dập đến mấy rồi trời cũng quang, mây cũng tạnh.


20. Ai cũng nói tương lai chúng ta luôn rộng mở, nhưng nếu không nắm bắt được hiện tại thì tương lai sẽ chẳng có gì.

>> Xem thêm: Những câu nói hay về giá trị của sách và đọc sách



2. Những câu nói hay về phát triển bản thân
1. Vinh quang không phải là không bao giờ thất bại, mà là cách chúng ta đứng dậy sau mỗi lần gục ngã.

2. Nếu thuyền của bạn không tới, hãy bơi đi tìm nó. Muốn thành công, bạn cần chủ động tìm kiếm cơ hội, không ngừng học hỏi, không quản ngại khó khăn mới có thể chạm tay đến ước mơ. Cơ hội không đến, bạn hãy tự tìm đến nó, giống như người khách ngồi chờ thuyền vậy. Thuyền không đến, thay vì chờ đợi hãy bơi đến để nhanh chóng đến đích.

3. Nghịch cảnh là một phần của cuộc sống. Nó không thể bị kiểm soát. Cái có thể kiểm soát chính là cách chúng ta phản ứng trước nghịch cảnh.

4. Khi mọi thứ dường như chống lại bạn. Hãy nhớ rằng máy bay chỉ có thể cất cánh khi chống lại gió, không phải thuận theo nó.

5. Trở ngại không thể cản bạn lại được. Nếu bạn va phải tường, đừng quay đi và bỏ cuộc. Hãy tìm cách trèo lên, phá vỡ hay bước vòng qua nó.

6. Sự khác biệt giữa những người thành công và những người thất bại ko phải là ở sức mạnh, kiến thức hay sự hiểu biết – mà chính là ở ý chí. Quả đúng vậy, có ý chí nghị lực mới có thể thành công. Điểm khác biệt lớn nhất giữa người thành công và người thất bại không phải ở điểm xuất phát, ở cơ hội, sự may mắn mà ở là ở ý chí. Đọc câu nói hay về sự quyết tâm này bạn sẽ được tiếp thêm sức mạnh để chinh phục mọi kế hoạch đang dang dỡ

7. Sự thay đổi của cuộc sống là điều ko thể tránh khỏi – Việc của chúng ta đơn giản là lựa chọn cách để vượt qua mà thôi. 8. Không tin vào chính mình – tức là bạn đã thất bại một nửa trước khi bắt đầu.

9. Ước mơ không phải là cái gì sẵn có, cũng không phải là cái gì không thể có. Ước mơ giống như một con đường chưa có, nhưng con người sẽ khai phá và vượt qua.

recommended by



QUÀ LƯU NIỆM
Cô gái 26 tuổi ở Hà Nội hóa triệu phú nhờ bí mật tâm linh kì lạ!
TÌM HIỂU THÊM
10. Trong mơ ước có mặt tốt hơn thực tại; trong thực tại có mặt tốt hơn mơ ước. Hạnh phúc đầy đủ là sự kết hợp được cả mơ ước lẫn thực tại.

11. Niềm tin vào chính mình có sức mạnh xua tan bất kì sự hoài nghi nào của người khác.

12. Điều quan trọng không phải vị trí đứng mà là hướng đi.

13. Hãy nhượng lại cho tôi tuổi đôi mươi của bạn nếu bạn không dùng vào việc gì cả !

14. Khi mọi thứ dường như chống lại bạn. Hãy nhớ rằng máy bay chỉ có thể cất cánh khi chống lại gió, không phải thuận theo nó.

15. Muốn thành công thì khao khát thành công phải lớn hơn nỗi sợ bị thất bại. Thành công là điều không đơn giản nhưng nếu chúng ta có quyết tâm, có nghị lực thì không gì là không thể. Khát khao thành công luôn cháy rực trong lòng, xua tan mọi cảm giác lo sợ về sự thất bại….sẽ là động lực để mỗi chúng ta tiếp tục làm việc

16. Trở ngại không thể cản bạn lại được. Nếu bạn va phải tường, đừng quay đi và bỏ cuộc. Hãy tìm cách trèo lên, phá vỡ hay bước vòng qua nó.

17. Nếu xe bị hỏng và bạn phải dắt bộ một quãng đường, hãy nghĩ đến những người khuyết tật chỉ mong có thể tự bước đi vài bước

18. Cuộc sống không bao giờ là bế tắc thực sự hay có khái niệm mất tất cả một khi bạn còn có niềm tin

19. Mọi công việc thành đạt đều nhờ sự kiên trì và lòng say mê.

20. Hãy cảm ơn những lúc bạn gặp khó khăn, bởi nếu không có khó khăn, bạn sẽ không có cơ hội để hiểu mình và trải nghiệm cuộc sống.

>> Xem thêm: Những câu nói hay về luật nhân quả trong cuộc sống



3. Những câu nói hay về sự cố gắng trong cuộc sống
1. Một người bạn thật sự là người bước vào cuộc sống của bạn khi cả thế giới đã bước ra.

2.  Một nụ cười có thể thay cách nhìn một con người, một cái ôm có thể có một thay lời cảm thông, một lời nói có thể cứu vãn cả một người.

3. Khi tự nhìn nhận cuộc sống của mình đã hoàn hảo, ko còn mục đích lớn lao gì nữa thì có nghĩa là cuộc sống của bạn đang mất đi rất nhiều ý nghĩa.


4. Sự khác biệt giữa những người thành công và những người thất bại ko phải là ở sức mạnh, kiến thức hay sự hiểu biết – mà chính là ở ý chí.

5. Trong cuộc sống, nơi nào có một người chiến thắng, nơi đó có một người thua cuộc. Nhưng người biết hi sinh vì người khác luôn luôn là người chiến thắng.

6. Mọi thứ rồi sẽ qua đi, chỉ còn tình người ở lại.

7. Người lạc quan luôn nhìn được những cơ hội trong từng khó khăn.

8. Tình yêu bắt đầu bằng một nụ cười, tiến triển bằng một nụ hôn, kết thúc với một giọt nước mắt hay với vòng tay ôm xiết bất tận.

9. Xin chớ có làm thinh trước những gì mà một người nói với bạn bằng cả con tim .

10. Một cuốn sách hay có thể thay đổi số phận biết bao người.

11. Như những đồng xu đồng hào làm nên tiền bạc, từng mẩu nhỏ đã đọc được làm nên kiến thức

12. Đừng bao giờ mất kiên nhẫn, đó chính là chiếc chìa khoá cuối cùng mở được cửa

13. Người lạc quan cho đấy là cái bánh, kẻ bi quan lại thấy đó là cái lỗ tròn.

14. Lòng yêu thương là điều mà chúng ta có thể mang theo khi chúng ta ra đi, và nó khiến cho giây phút cuối trở nên dễ dàng chịu đựng.

15. Thành công không luôn luôn phải là có nhiều tiền. Khi ta vượt lên chính mình hay khi ta đem lại hạnh phúc cho người khác đó cũng là thành công.

16. Tất cả kho tàng trên trái đất không thể nào so sánh nổi với hạnh phúc gia đình.

17. Cái đầu quá nóng và trái tim quá lạnh không bao giờ giải quyết được việc gì.

18. Cách tốt nhất để có một ý tưởng xuất sắc là có thật nhiều ý tưởng.

19. Dũng cảm là vượt qua nỗi sợ hãi chứ không phải không sợ hãi.

20. Người nào có thể làm mỗi giây phút đều tràn ngập một nội dung sâu sắc thì người đó sẽ kéo dài vô tận cuộc đời mình.

>> Xem thêm: Stt, caption buông bỏ cho nhẹ lòng, những câu nói hay về sự buông bỏ

 ',
    'https://www.elle.vn/wp-content/uploads/2022/08/03/490359/co-gai-an-chay-1024x1534.jpg',
    '2023/08/17',
    '5',
    'https://luatminhkhue.vn/nhung-cau-noi-hay-ve-su-co-gang-no-luc.aspx'
);
CREATE TABLE IF NOT EXISTS new_categories (
  id INT PRIMARY KEY,
  new_id INT,
  category_id INT,
  FOREIGN KEY (new_id) REFERENCES news(id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);
INSERT INTO new_categories (id, new_id, category_id) VALUES
(1, 1, 4),
(2, 2, 4),
(3, 3, 2),
(4, 4, 4),
(5, 5, 1),
(6,1,1),
(7,2,3),
(8,3,4),
(9,4,1),
(10,5,3);
INSERT INTO podcasts (title, description, author_id, youtube_link, image_url, type)
VALUES
    ('Podcast 1', 'Description 1', 1, 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'động lực'),
    ('Podcast 2', 'Description 2',2, 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'tình yêu'),
    ('Podcast 3', 'Description 3', 3, 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'gia đình'),
    ('Podcast 4', 'Description 4', 1, 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'thiên nhiên'),
    ('Podcast 5', 'Description 5', 2, 'https://www.youtube.com/embed/1jv3r05-eeU?si=yI4GxTOL4e39xZfw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBCkL195trQAiCe7dQMJ5u972ygziMOj2PkR2RNPa9wz3OF6378GuFp2iGQ6OiC2OQKSM&usqp=CAU', 'thiên nhiên');

select * from users;

CREATE TABLE comment_podcast
(
    id INT PRIMARY KEY auto_increment,
    content TEXT,
    created_at TIMESTAMP,
    podcast_id INT,
    user_id int,
    like_count int,
    dislike_count int ,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (podcast_id) REFERENCES podcasts(id)
);
INSERT INTO comment_podcast (content, created_at, podcast_id, user_id, like_count, dislike_count)
VALUES
    ('Bài podcast rất hay!', '2023-12-27 10:30:00', 1, 1, 300, 100),
    ('Thảo luận thú vị.', '2023-12-27 11:15:00', 1, 2, 450, 150),
    ('Tôi không đồng ý với một số ý kiến.', '2023-12-27 12:00:00', 2, 3, 200, 50),
    ('Mong chờ tập tiếp theo!', '2023-12-27 13:45:00', 2, 1, 350, 100),
    ('Rất thích phần trình bày của diễn giả.', '2023-12-28 09:00:00', 3, 2, 450, 150),
    ('Có thông tin mới không?', '2023-12-28 10:30:00', 3, 3, 250, 50),
    ('Cảm ơn đã chia sẻ kiến thức bổ ích.', '2023-12-29 14:20:00', 4, 1, 400, 100),
    ('Đang chờ phần phỏng vấn khách mời.', '2023-12-30 16:45:00', 4, 3, 300, 100),
    ('Nên tăng thời lượng podcast lên.', '2023-12-31 11:10:00', 5, 2, 200, 50),
    ('Có thể đưa ra ví dụ cụ thể hơn không?', '2024-01-01 13:20:00', 5, 3, 450, 150);


CREATE TABLE IF NOT EXISTS like_posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    post_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (post_id) REFERENCES posts(id)
);
insert into like_posts(user_id,post_id) values (1,1),(1,2),(1,3),(1,4),(3,1),(4,1),(4,2),(4,3),(5,3);
DELIMITER //
CREATE TRIGGER  updateLikeCount
AFTER INSERT ON like_posts
FOR EACH ROW
BEGIN
    UPDATE Posts
    SET like_count = like_count + 1
    WHERE id = NEW.post_id;
END;
//DELIMITER ;
DELIMITER //
CREATE TRIGGER  decreaseLikeCount
AFTER DELETE ON like_posts
FOR EACH ROW
BEGIN
    UPDATE Posts
    SET like_count = like_count - 1
    WHERE id = OLD.post_id;
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_expert_status AFTER INSERT ON bookings
FOR EACH ROW
BEGIN
  UPDATE calendar
  SET status = 'Ngưng hoạt động'
  WHERE id = NEW.calendar_id;
END //
DELIMITER ;

select  * from bookings;


