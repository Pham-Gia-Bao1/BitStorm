<style>
  .ig_top {

    position: relative;
    margin-top: -200px;
    width: 85vw;
    height: 400px;
    background-color: #0088cc !important;
    top: 140px;
    z-index: -3;
    border-radius: 20px;
    background-size: cover;
    background-position: center;

  }
  #drop_img_btn{
     position: absolute;
     right: 200px;
     top: 100px;
     z-index: 3;
  }

  .avata {
    text-align: start;
    margin-left: 150px !important;
    /* background-color: #f0f0f0; */
  }

  .avata img {
    background-color: #006699;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    margin-top: 0px;
    transition: all 0.2s ease;
    cursor: pointer;
    outline:  2px solid white;
    outline-offset: 5px; /* Thay đổi giá trị outline-offset để điều chỉnh khoảng cách giữa đường viền và hình ảnh */
}


  /* .avata img:hover {
    transform: scale(1.05);
  } */

  .avata_user {
    width: 250px;
    height: 250px;
    object-fit: cover;
    margin-bottom: 10px;
  }

  #img_moddel_setting {
    width: 200px !important;
    height: 200px !important;
    /* margin-bottom: 0px !important; */
  }

  .card {
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    cursor: pointer;
    gap: 10px;
    transition: all 0.2s ease;
    border: none;
  }

  .card:hover {
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    transform: scale(1.05);
  }

  .card img {
    width: 80px;
    height: 80px;
  }

  .card p {
    text-align: center;
  }

  #content {

    margin: 0 auto;
    margin-top: 0px;
    margin-bottom: 100px;
  }

  #uploaded-image {
    object-fit: cover;
    margin-top: 50px;
  }

  #upload-input,
  #submit_avatar {
    display: none;
  }

  .heading {
    color: rgb(0, 0, 0);
    text-align: center;
    padding-top: 10px;
    font-size: 35px;
  }

  .info-text {
    text-align: center;
    color: rgb(4, 4, 4);
    font-size: 18px;
  }

  .app {
    display: grid;
    grid-template-columns: repeat(auto-fill, 300px);
    gap: 40px;
    justify-content: center;
    padding: 50px;
    padding-bottom: 100px;
    /* background-image: url(http://localhost/WEB_PHP/root/Image/Hands%203D%20UI%20-%20Copy@1-1920x869.jpg); */
    background-repeat: no-repeat;


  }

  .note {
    padding: 17px;
    border-radius: 15px;
    resize: none;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
    font-size: 18px;
    height: 200px;
    color: rgb(0, 0, 0);
    border: none;
    outline: none;
    background: rgba(114, 47, 47, 0.1);
    box-sizing: border-box;
    cursor: pointer;
  }

  .note::placeholder {
    color: gray;
    opacity: 30%;
  }

  .note:hover,
  .note:focus {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    transition: all 300ms ease;
  }

  .btn1 {
    height: 200px;
    border-color: rgba(255, 255, 255, 0.37);
    background: rgba(136, 56, 56, 0.27);
    border-radius: 15px;
    font-size: 70px;
    font-weight: 700;
    color: rgba(0, 0, 0, 0.3);
    cursor: pointer;
  }

  .btn1:hover {
    background: rgba(189, 74, 74, 0.55);
    color: rgba(0, 0, 0, 0.6);
    transition: all 300ms ease;
  }

  .input-group-text {
    cursor: pointer;
  }

  .moddedl_ifomation {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .main_title_model_info {
    text-align: center !important;
  }

  #img_moddel_setting {
    margin-bottom: -60px;
  }

  .avata_active {
    width: 50px;
    height: 50px;
  }

  .content_active {
    width: 90%;
    word-wrap: break-word;
    border-radius: 20px;
    padding: 10px;

  }
  .content_active h6{
    color: #0088cc;
  }

  .content_box {
    /* Các thuộc tính khác */
    transition: box-shadow 0.3s ease;
    border-radius: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;

  }

  .content_box:hover {
    transform: translateX(10px);
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    cursor: pointer;
    /* border-radius: 20px; */
  }
  .body_active_model {
  /* Các thuộc tính khác */
  overflow: auto; /* Hiển thị thanh cuộn khi nội dung vượt quá kích thước của phần tử */
}
#Modal_active_infomation{
  padding: 20px !important;
  /* height: 500px !important; */
}

/* Kiểu cho thanh cuộn dọc */
.body_active_model::-webkit-scrollbar {
  width: 10px; /* Độ rộng của thanh cuộn */
  background-color: #f0f0f0; /* Màu nền của thanh cuộn */
  border-radius: 4px; /* Bo tròn các góc của thanh cuộn */
}

.body_active_model::-webkit-scrollbar-thumb {
  background-color: white; /* Màu nền của nút trượt */
  border-radius: 4px; /* Bo tròn các góc của nút trượt */
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.body_active_model::-webkit-scrollbar-thumb:hover {
  background-color: #0088cc; /* Màu nền của nút trượt khi hover */
}

.body_active_model::-webkit-scrollbar-thumb:active {
  background-color: #006699; /* Màu nền của nút trượt khi active */
}

/* Ẩn thanh cuộn khi không hover */
.body_active_model::-webkit-scrollbar-thumb {
  opacity: 0;
  transition: opacity 0.3s ease;
}

.body_active_model:hover::-webkit-scrollbar-thumb {
  opacity: 1; /* Hiển thị nút trượt khi hover vào phần tử */
}
.box_title{
   /* background-color: red; */
   width: 100% !important;
   padding: 25px;
}

.box_model{
  border-radius: 30px;
}
.btn_choise{
   width: 100%;
   text-align: center;
   display: flex;
   justify-content: center;
   align-items: center;
   gap: 10px;
}
#input_file{
  display: none;
}
.upload-demo,#form{
  /* background-color: #006699; */
  flex-direction: column;
  text-align: center;
  margin: 0 auto;
}
.cr-image{
   background-color: #0088cc !important;
   margin-top: -30px;
   object-fit: cover;
   outline:  2px solid blue;
    outline-offset: 5px;
}
#setAvatarNextButton{
  width: 100%;
}
.dz-button{
   width: 98%;
   /* margin: 0 auto; */
   height: 250px;
   border: 2px dashed gray;
   margin: 5px;
}
.box_bookings{
  border: 1px dashed blue;

}

</style>