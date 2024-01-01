<style>

  .btn-primary{
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: bold;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .avata1 {
    width: 40px;
    border-radius: 50%;
    margin-right: 8px;
    cursor: pointer;
  }

.navbar {
  position: fixed !important;
  top: 0 ;
  left: 0;
  width: 100%;
  z-index: 999;
  background-color:ivory !important;
  height: 80px !important;
}
.navbar-brand {
  color:cadetblue;
  font-weight: bold;
  font-size: 15px;
}

.navbar-nav .nav-item .nav-link  {
  color:black;
  position: relative;
  transition: 0.3s;
  font-weight: 400;
  color:black;
}

.navbar-nav .nav-item .nav-link::before {
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color:#007bff;
  transition: 0.3s;
  color:#007bff;
}

.navbar-nav .nav-item .nav-link:hover::before {
  width: 100%;
  color:#007bff;
}

.dropdown-menu {
  display: none; /* Ẩn danh sách thả xuống ban đầu */
}

.nav-link:hover + .dropdown-menu,
.dropdown-menu:hover {
  display: block; /* Hiển thị danh sách thả xuống khi hover vào .nav-link hoặc .dropdown-menu */

}

.dropdown{
  /* background-color: #007bff; */
  float: right;


}
.dropdown-menu{
  /* background-color: #007bff; */
  width: 19vw;
}
.menu_list_profile li:hover{
  background-color: red;
  color: #ffff;
}
.menu_list_profile li a{
   text-decoration: none;
   color : black;
}

</style>