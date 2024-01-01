<style>
   body {
      overflow-x: hidden;
   }


   #main,#item1 {
      margin-left: 0px !important;
      width: 100vw;
      padding-right: 0 !important;
      margin-left: 0 !important;
      margin-right: auto;
      height: 84vh !important;
      margin-top: 10px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 30px;
      background-image: url('https://images.unsplash.com/photo-1608170825938-a8ea0305d46c?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: top;
      background-color: blue;
      overflow-x: hidden;
   }
   #item1{
      margin-top: 100px !important;
      height: 50vh !important;
      background-image: url('https://www.groovypost.com/wp-content/uploads/2021/03/podcast-podcasts-featured.jpg');

   }
   #item1 h6{
      width: 50%;
       font-size: 60px !important;
       color: white;
   }

   .container-fluid h1 {
      width: 70%;
      display: flex;
      justify-content: center;
      color: white;
   }
   .box_search {
      background-color: white;
      width: 40%;
      display: flex;
      justify-content: center;
      border-radius: 30px;
      padding: 10px;
   }
   .content_video {
      width: 29% !important;
      border: 0 !important;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      cursor: pointer;
      transition: box-shadow 0.3s, transform 0.3s;
      border-radius: 10px;
      padding: 10px;
   }
   .content_video video {
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
      border-radius: 8px;
   }
   .content_video:hover {
      box-shadow: rgba(193, 193, 194, 0.2) 0px 7px 29px 0px;
      transform: scale(1.05);
   }
   .box_search input {
      width: 80%;
      display: inline;
      border: none;
   }
   .box_search input {
      outline: 2px solid rgb(255, 255, 255) !important;
   }
   .box_search button {
      width: 10%;
      display: inline;
      border: none;
      background: none;
      color: rgb(0, 0, 0);
   }
   .box_choice {
      gap: 30px;
   }
   .box_choice button.active {
      background-color: blue;
   }
   .item_style {
      display: flex;
      flex-direction: column;
      gap: 20px;
      align-items: start;
      height:60px;
      margin-top: 10px;
   }
   #container1 {

      display: flex;
      flex-wrap: wrap;

      gap: 30px;
      margin: 0 auto !important;
      margin-top: 70px !important;
      justify-content: center;
      margin-bottom: 50px;
   }
   .sub_title {
      padding-left: 120px;
      margin: 30px;
      margin-top: 100px;
      color: #3B71CA;
      font-size: 30px;
      font-weight: bolder;
      text-align: center;
      padding-right: 100px;
   }
   .item_name,
   .item_sub_title,.item_style h6  {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      /* Số dòng hiển thị tối đa */
      -webkit-box-orient: vertical;
   }
   .item_sub_title{
      height: 50px;
   }

   .card-body p:last-child {
      cursor: pointer;
      background-color: rgba(219, 219, 219, 0.444);
      display: inline;
      padding: 5px;
      border-radius: 5px;
      transition: all 1s ease;
   }
   .card-body p:last-child:hover {
      background-color: #0093E9;
      background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
      color: white !important;
   }
   .podcast {
      background-color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 100px;
      gap: 30px;
   }
   .change {
      transition: box-shadow 0.3s, transform 0.3s;
   }
   .change:hover {
      box-shadow: rgba(193, 193, 194, 0.2) 0px 7px 29px 0px;
      transform: scale(1.05);
      cursor: pointer;
   }
   .wrappe1r a {
      text-decoration: none;
   }
   .change {
      display: flex !important;
      gap: 20px !important;

      height: 300px
   }
   iframe {
      width: 100% !important;
      height: 235px;
      border-radius: 8px;
   }
   a {
      text-decoration: none !important;
   }
   .block_img {
      height: 50vh;
      background-image: url('http://localhost/WEB_PHP/root/Image/stacked-waves-haikei.svg');
      width: 100%;
      background-repeat: no-repeat;
      background-size: cover;
   }
   .form_search {
      height: 100%;
      display: flex;
      justify-content: center;
   }
   .suggestion_box li {
      background-color: white;
   }
   .suggestion_box {
      list-style: none;
      padding: 0;
      margin: 0;
      position: absolute;
      list-style: none;
      margin: 0;
      top: 370px;
      width: 40.2%;
      height: 290px;
      overflow-x: hidden;
      overflow-y: auto;
      padding-top: 8px;
      z-index: 2;
      padding: 10px;
      transition: display 10s ease; /* Ví dụ: transition cho thuộc tính height */

   }
   .suggestion_box li {
      background-color: white;
      padding: 7px;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      /* Số dòng hiển thị tối đa */
      -webkit-box-orient: vertical;


   }
   .suggestion_box li:last-child {
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
   }
   .suggestion_box li:first-child {
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
   }
   .suggestion_box li:hover {
      background-color: #e9ecef;
      cursor: pointer;

   }
   .box_choice_btn{
      cursor: pointer;
   }

/* Kiểu cho thanh cuộn dọc */

.body_active_model:hover::-webkit-scrollbar-thumb {
  opacity: 1; /* Hiển thị nút trượt khi hover vào phần tử */
}


</style>