<style>
body{
    overflow-x:hidden;
}
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
   padding-right: 0 !important;
   margin-left: 0 !important;
   margin-right: 0 !important;

}
#main {
   margin-left: 0px !important;
   width: 100vw;
   padding-right: 0 !important;
   margin-left: 0 !important;
   margin-right:auto;
}
#main {
   height: 84vh !important;
   margin-top: 10px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   gap: 30px;
   background-image: url('https://encuentra.com/wp-content/uploads/2023/03/Elogioalsilencio-encuentra.com_-2048x984.jpg');
   background-attachment: fixed;
   background-repeat: no-repeat;
   background-size: cover;
   background-color: blue;
   overflow-x: hidden;
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
   border-radius: 30px; /* Thêm border radius */
   padding: 10px; /* Thêm khoảng cách giữa nội dung và biên */
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
       /* border-radius: 10px;     */
       border-top-right-radius: 10px;
       border-top-left-radius: 10px;
       border-radius: 8px;
   }
   .content_video:hover {
       box-shadow: rgba(193, 193, 194, 0.2) 0px 7px 29px 0px;
       transform: scale( 0.95);
   }
.box_search input {
   width: 80%;
   display: inline;
   border: none; /* Loại bỏ border của input */
}
.box_search input {
   outline: 2px solid rgb(255, 255, 255) !important;
}
.box_search button {
   width: 10%;
   display: inline;
   border: none; /* Loại bỏ border của button */
   background: none; /* Loại bỏ nền của button */
   color: rgb(0, 0, 0); /* Màu chữ của button */
}
.box_choice {
   gap: 30px;
}
   .box_choice button.active {
       background-color: blue;
   }
.item_style {
   /* background-color: aquamarine; */
   display: flex;
   gap: 20px;
   align-items: center;
}
   .item_style h6 {
       padding: 5px;
       display: inline;
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
   padding-right : 100px;
}
.item_name, .item_sub_title {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* Số dòng hiển thị tối đa */
   -webkit-box-orient: vertical;
}
.card-body p:last-child {
   cursor: pointer;
   background-color: rgba(219, 219, 219, 0.444);
   display: inline;
   padding: 5px;
   border-radius: 5px;
   transition: all 1s ease; /* Thời gian chuyển màu và hàm easing */
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

   height:300px
}
iframe{
   width: 100% !important;
   height: 235px;
   border-radius: 8px;
}
a{
   text-decoration: none !important;
}
.block_img {
   height: 50vh; /* Chiều cao 100% của viewport */
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
    top: 450px;
    width: 40.2%;
    height: 290px;
    overflow-x: hidden;
    overflow-y: auto;
    padding-top: 8px;
    z-index: 2;
  }
  .suggestion_box li {
    background-color: white;
    padding: 10px;

  }
  .suggestion_box li:last-child{
    border-bottom-left-radius: 20px;
     border-bottom-right-radius: 20px;
  }
  .suggestion_box li:first-child{
    border-top-left-radius: 20px;
     border-top-right-radius: 20px;
  }

  .suggestion_box li:hover {
    background-color: #e9ecef;
    cursor: pointer;
  }
  #form_opption{
   width: 60vw;
   background-color: white;
   padding: 20px;
   position: relative;
   bottom: -100px;
   z-index: 0;
   border-top-right-radius: 50px;
   border-top-left-radius: 50px;
  }
  #form_opption button{
   width: 19%;
   height: 100%;
   padding: 20px;
   padding-top: 20px;
   background-color: white;
   border: 0px solid;
   padding-bottom: 30px;
  }
  #form_opption button:first-child{
   background-color: #0093E9;
   margin-left: 1px;
   width: 21.5% ;
  }
  #form_opption button:first-child{
   border-top-left-radius: 30px;
  }
  #form_opption button:last-child{
   border-top-right-radius: 30px;

  }
  .main_title:first-child{
   font-size: 72px;
    text-transform: uppercase;
    font-weight: 900;
  }
  .main_title:last-child{
   font-family: 'Beyond';
    font-size: 100px;
    color: #fff;
    text-align: center;
  }

</style>