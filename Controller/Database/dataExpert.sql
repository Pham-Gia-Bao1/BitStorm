CREATE TABLE experts (
  id INT PRIMARY KEY,
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
  specialization varchar(255)
);

INSERT INTO experts (id,full_name, gender, address, email, phone_number, age, experience, profile_picture, count_rating, certificate, specialization) VALUES
(1, 'Hồ Thị Mỹ Anh', 'Male', '123 Ngô Quyền, Hải Châu, Đà Nẵng.', 'john.doe@example.com', '1234567890', 30, 'Giảng viên Khoa Tâm lý học, trường ĐH Khoa Học Xã Hội Và Nhân Văn (ĐHQGHN). Kinh nghiệm tư vấn tâm lý trong trường hợp trầm cảm và lo âu trong 7 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxbqu-0Q8CDAeN2O7GL0-IBmyCSTVMQGTBLA&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Chuyên gia tâm lý học"),
(2, 'Nguyễn Anh Tú','Male', '456 Trần Phú, Thanh Khê, Đà Nẵng.', 'jane.smith@example.com', '9876543210', 35, 'Chuyên gia tham vấn tâm lý trên nhóm thân chủ là người trưởng thành cho các khó khăn tâm lý về công việc, cuộc sống hôn nhân, các mối liên hệ. Kinh nghiệm tham vấn tâm lý cho nhân viên y tế tham gia chống dịch Covid-19 và người lao động có căng thẳng, rối loạn lo âu, trầm cảm do công việc/các điều kiện cuộc sống.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzZ1yVXix9ieLDoQ9MKtLaWIoF9DNJj-vDMw&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Tiến sĩ Tâm lý học"),
(3, 'Phạm Minh Đức','Male', '789 Lê Duẩn, Sơn Trà, Đà Nẵng.', 'michael.johnson@example.com', '4567890123', 40, 'Điều trị các rối loạn tâm thần và tâm lý. Các rối loạn liên quan stress và dạng cơ thể, các rối loạn hành vi và sinh lý, rối loạn cảm xúc, rối loạn tâm thần người già, rối loạn tâm thần trẻ em và vị thành niên, các triệu chứng loạn thần với hoang tưởng, ảo giác, rối loạn hành vi..', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPnzAB_u-HL7U1UT2rWrZOJQRE-UjQ1Y8uLDbQMKOgHjeWpiYjahiiM-9znL55iF2DxLw&usqp=CAU',5,'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Chuyên gia tâm lý"),
(4,'Hoàng Thị Diễm Trang', 'Female', '321 Bạch Đằng, Hòa Vang, Đà Nẵng.', 'emily.davis@example.com', '3210987654', 28, 'Tham vấn trị liệu tâm lý cho người trưởng thành, các mối quan hệ trong gia đình, các rối nhiễu tâm lý như trầm cảm, lo âu, rối loạn lưỡng cực, ám ảnh, sợ hãi.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTje4oiuXbsZY56QeeuBsPCibkPloH_fJ5TAw&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Chuyên gia tâm lý"),
(5,'Huỳnh Thị Hường', 'Male', '654 Nguyễn Văn Linh, Liên Chiểu, Đà Nẵng.', 'robert.wilson@example.com', '7890123456', 32, 'Kinh nghiệm tư vấn tâm lý cho người trưởng thành, học sinh, sinh viên liên quan đến các vấn đề về tình yêu hôn nhân gia đình, học tập và cuộc sống, xung đột trong các mối quan hệ.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf1Pl_hNeFRprpB1CVWpq50tfEEoFDvCK1wXP_1bUX7n3O6h8GzlsoYE0vmqn3wXWaerY&usqp=CAU%27', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Chuyên gia tâm lý"),
(6, 'Phạm Thị Ngọc Trâm', 'Female', '987 Điện Biên Phủ, Cẩm Lệ, Đà Nẵng.', 'sophia.thompson@example.com', '2109876543', 38, 'Thực hiện các trường hợp tư vấn tâm lý, trị liệu cho thanh thiếu niên và người trưởng thành có rối nhiễu tâm lý như trầm cảm, rối loạn lo âu  trong vòng 6 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3yXDHKFG-8n9quKfcsGe409t_5m2UG_nQxQ&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Chuyên gia tâm lý"),
(7, 'Đặng Quang Minh','Male', '234 Hàn Thuyên, Ngũ Hành Sơn, Đà Nẵng.', 'william.johnson@example.com', '5678901234', 45, 'Tham vấn/trị liêu cho nhóm thân chủ có độ tuổi từ 18 đến 35 về các vấn đề cá nhân và các bậc phụ huynh về các phương pháp làm việc với trẻ em. Nghiên cứu và phát triển những trường hợp gặp khó khăn liên quan đến tâm lý về những kết nối với bản thân, gia đình và xã hội.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6k3mVWpBVfnzxxCNtBQ5SHtyBiFACtcDV3w&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Bác sĩ tâm lý"),
(8, 'Bùi Thị Lan','Female', '567 Yên Bái, Cẩm Lệ, Đà Nẵng.', 'olivia.brown@example.com', '9012345678', 26, 'Tham vấn cho thanh thiếu niên và người trẻ về các dạng rối loạn, khó khăn liên quan đến cảm xúc (lo âu, căng thẳng, trầm cảm…), khủng hoảng bản sắc, vấn đề giới và phát triển, khó khăn trong kết nối và xây dựng các mối quan hệ (tình bạn, tình yêu, kết nối giữa cha mẹ – con cái).', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkjSwH73LqDpz7kklerQsP1GfXJ_Nca-5cnmc7u9guB8aNse2C9lgi7mUuMFb9p94XHsc&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Chuyên gia tâm lý"),
(9, 'Đỗ Hải Nam','Male', '890 Trường Sa, Hòa Hải, Đà Nẵng.', 'james.anderson@example.com', '4321098765', 33, 'Thạc sĩ tâm lý tại New York, Mỹ. Có thế mạnh trong việc chẩn đoán, trị liệu phát triển phát đồ, trị liệu cá nhân và nhóm đối với các bệnh nhân trầm cảm, lo âu, stress, OCD, rối loạn nhân cách, rối loạn điều tiết cảm xúc, tự gây tổn thương và tự sát.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmBTGIhpDfxhtCb7tSsh6-VgqIO-gNmhRWJmH7tETjTgz-YbB6HDJwgTubhxrLhD1ueVs&usqp=CAU%27', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Chuyên gia tâm lý"),
(10, 'Lê Hoàng Yến', 'Female', '432 Lý Thường Kiệt, Sơn Trà, Đà Nẵng.', 'emma.johnson@example.com', '8765432109', 29, 'Kinh nghiệm tư vấn tâm lý cho người sống với bệnh tật và hỗ trợ tâm lý cho người chăm sóc trong 10 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRFkCfodOJ-NCXUvucU_M-1J-O7kpEpSPmmr948YC4X_hZ1MHJgAIw3DSTaP0WNSmRa60&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"Bác sĩ tâm lý");
select * from experts;

CREATE TABLE calendar (
  id INT PRIMARY KEY,
  day DATE,
  start_time TIME,
  end_time TIME,
  price DECIMAL(10, 3),
  describer  TEXT,
  expert_id INT,
  FOREIGN KEY (expert_id) REFERENCES experts(id)
);
INSERT INTO calendar (id, day, start_time, end_time, price, describer, expert_id) VALUES
(1, '2024-01-02', '09:00:00', '11:00:00', 50.000, 'Morning availability', 1),
(2, '2024-01-06', '14:00:00', '16:00:00', 60.000, 'Afternoon availability', 2),
(3, '2024-01-07', '10:00:00', '12:00:00', 70.000, 'Morning availability', 3),
(4, '2024-01-08', '15:00:00', '17:00:00', 55.000, 'Afternoon availability', 4),
(5, '2024-01-09', '11:00:00', '13:00:00', 45.000, 'Morning availability', 5),
(6, '2024-01-10', '16:00:00', '18:00:00', 70.000, 'Afternoon availability', 6),
(7, '2024-01-11', '09:00:00', '11:00:00', 50.000, 'Morning availability', 7),
(8, '2024-01-12', '14:00:00', '16:00:00', 60.000, 'Afternoon availability', 8),
(9, '2024-01-13', '10:00:00', '12:00:00', 65.000, 'Morning availability', 9),
(10, '2024-01-14', '15:00:00', '17:00:00', 60.000, 'Afternoon availability', 10);
select * from calendar;
