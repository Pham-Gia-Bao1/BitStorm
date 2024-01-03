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
  certificate varchar(255),
  specialization varchar(255)
);

INSERT INTO experts (id,full_name, gender, address, email, phone_number, age, experience, profile_picture, count_rating, certificate, specialization) VALUES
(1, 'Hồ Thị Mỹ Anh', 'Male', '123 Ngô Quyền, Hải Châu, Đà Nẵng.', 'john.doe@example.com', '1234567890', 30, 'Kinh nghiệm tư vấn tâm lý trong trường hợp trầm cảm và lo âu trong 7 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxbqu-0Q8CDAeN2O7GL0-IBmyCSTVMQGTBLA&usqp=CAU', 10, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(2, 'Nguyễn Anh Tú','Male', '456 Trần Phú, Thanh Khê, Đà Nẵng.', 'jane.smith@example.com', '9876543210', 35, 'Kinh nghiệm làm việc với các vấn đề tâm lý của trẻ em và gia đình trong 5 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzZ1yVXix9ieLDoQ9MKtLaWIoF9DNJj-vDMw&usqp=CAU', 15, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(3, 'Phạm Minh Đức','Male', '789 Lê Duẩn, Sơn Trà, Đà Nẵng.', 'michael.johnson@example.com', '4567890123', 40, 'Kinh nghiệm tư vấn tâm lý cá nhân và hôn nhân trong 10 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPnzAB_u-HL7U1UT2rWrZOJQRE-UjQ1Y8uLDbQMKOgHjeWpiYjahiiM-9znL55iF2DxLw&usqp=CAU',6,'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(4,'Hoàng Thị Diễm Trang', 'Female', '321 Bạch Đằng, Hòa Vang, Đà Nẵng.', 'emily.davis@example.com', '3210987654', 28, 'Kinh nghiệm trong việc hỗ trợ những người gặp khó khăn trong quá trình luyện phục hồi sau chấn thương trong 3 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTje4oiuXbsZY56QeeuBsPCibkPloH_fJ5TAw&usqp=CAU', 5, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(5,'Huỳnh Thị Hường', 'Male', '654 Nguyễn Văn Linh, Liên Chiểu, Đà Nẵng.', 'robert.wilson@example.com', '7890123456', 32, 'Kinh nghiệm tư vấn tâm lý cho người già và chăm sóc tâm lý cho người cao tuổi trong 8 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsxYMnCwfkVOAdxhMtgdabOL6Ikszu_S0RHA&usqp=CAU', 12, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(6, 'Phạm Thị Ngọc Trâm', 'Female', '987 Điện Biên Phủ, Cẩm Lệ, Đà Nẵng.', 'sophia.thompson@example.com', '2109876543', 38, 'Kinh nghiệm làm việc với các vấn đề tự hại và tư vấn sự phục hồi sau tổn thương trong 6 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShgFLJkAiUli_HSho8OnGxmavSEzRTExJVfQ&usqp=CAU', 18, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(7, 'Đặng Quang Minh','Male', '234 Hàn Thuyên, Ngũ Hành Sơn, Đà Nẵng.', 'william.johnson@example.com', '5678901234', 45, 'Kinh nghiệm tư vấn tâm lý trong quá trình giải quyết xung đột gia đình và hỗ trợ hòa giải trong 4 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6k3mVWpBVfnzxxCNtBQ5SHtyBiFACtcDV3w&usqp=CAU', 25, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(8, 'Bùi Thị Lan','Female', '567 Yên Bái, Cẩm Lệ, Đà Nẵng.', 'olivia.brown@example.com', '9012345678', 26, 'Kinh nghiệm tư vấn tâm lý trong việc quản lý căng thẳng và xử lý áp lực công việc trong 9 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkjSwH73LqDpz7kklerQsP1GfXJ_Nca-5cnmc7u9guB8aNse2C9lgi7mUuMFb9p94XHsc&usqp=CAU', 3, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(9, 'Đỗ Hải Nam','Male', '890 Trường Sa, Hòa Hải, Đà Nẵng.', 'james.anderson@example.com', '4321098765', 33, 'Kinh nghiệm tư vấn tâm lý cho người mắc các rối loạn ăn uống và hỗ trợ phục hồi sau rối loạn dinh dưỡng trong 7 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMmpSwI8cn27qB_JIBnu9Pykk9l0b8KAJCyA&usqp=CAU', 16, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý"),
(10, 'Lê Hoàng Yến', 'Female', '432 Lý Thường Kiệt, Sơn Trà, Đà Nẵng.', 'emma.johnson@example.com', '8765432109', 29, 'Kinh nghiệm tư vấn tâm lý cho người sống với bệnh tật và hỗ trợ tâm lý cho người chăm sóc trong 10 năm.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRFkCfodOJ-NCXUvucU_M-1J-O7kpEpSPmmr948YC4X_hZ1MHJgAIw3DSTaP0WNSmRa60&usqp=CAU', 9, 'https://marketplace.canva.com/EAFIEvneNCM/1/0/1600w/canva-golden-elegant-certificate-of-appreciation-0bN-aLORS9U.jpg',"bác sĩ tâm lý");
select * from experts;

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
(1, '2023-12-31', '09:00:00', '11:00:00', 50.000, 'Morning availability', 1),
(2, '2023-12-31', '14:00:00', '16:00:00', 60.000, 'Afternoon availability', 2),
(3, '2023-12-31', '10:00:00', '12:00:00', 70.000, 'Morning availability', 3),
(4, '2023-12-31', '15:00:00', '17:00:00', 55.000, 'Afternoon availability', 4),
(5, '2023-12-31', '11:00:00', '13:00:00', 45.000, 'Morning availability', 5),
(6, '2023-12-31', '16:00:00', '18:00:00', 70.000, 'Afternoon availability', 6),
(7, '2023-12-31', '09:00:00', '11:00:00', 50.000, 'Morning availability', 7),
(8, '2023-12-31', '14:00:00', '16:00:00', 60.000, 'Afternoon availability', 8),
(9, '2024-01-01', '10:00:00', '12:00:00', 65.000, 'Morning availability', 9),
(10, '2024-01-01', '15:00:00', '17:00:00', 60.000, 'Afternoon availability', 10);
select * from calendar;