<?php
include("../root/CSS/NavBar.css.php");
// include("../root/CSS/Header.css.php");
?>
<!-- loading -->
<div id="loading-overlay">
  <section class="loader">
    <div style="--i:0" class="slider"></div>
    <div style="--i:1" class="slider"></div>
    <div style="--i:2" class="slider"></div>
    <div style="--i:3" class="slider"></div>
    <div style="--i:4" class="slider"></div>
  </section>
</div>
  <!-- script cho loading -->
  <?php
  include("../root/JS/NavBar.js.php");
  ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light p-5">
      <div class="navbar-left" >
            <img src="http://localhost/BitStorm/root/Image/logo_header.png" alt="Logo" class="logo">
            <h1 class="group-name">BitStorm</h1>
      </div>
      <div class="navbar-center">
          <a class="navbar-center-a current-page" href="Home">Trang chủ</a>
          <a class="navbar-center-a" href="ContactExpert">Kết nối chuyên gia</a>
          <a class="navbar-center-a"href="Blog" >Video</a>
          <a class="navbar-center-a" href="Post">Bài viết</a>
          <a class="navbar-center-a" href="About?About">Về chúng tôi</a>
      </div>
        <div class="navbar-right">
          <!-- check user -->
          <?php
          $cookie_name = "User";
          if (!isset($_COOKIE[$cookie_name])) {
          ?>
              <button class="btn-login btn-header" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
              <button class="btn-register btn-header" data-bs-toggle="modal" data-bs-target="#signup">Sign up</button>        
          <?php } else { ?>
            <div class="dropdown">
              <?php
              $account = new Account();
              $nameAndImg = $account->get_name_and_img_user();
              $name = $nameAndImg[0];
              $img = $nameAndImg[1];


              ?>
              <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avata1" src="<?php echo $img; ?>" alt="User Image">
              </a>
              <ul class="dropdown-menu dropdown-menu-end menu_list_profile" aria-labelledby="userDropdown">
                <li>
                  <a href="userprofile" class="d-flex align-items-center border-bottom p-3">
                    <img class="avata1" src="<?= $img ?>" alt="" class="me-3">
                    <h5><?= $name ?></h5>
                  </a>
                </li>
                <li>
                  <a href="userprofile" class="d-flex align-items-center nav-link">
                    <i class="fa-solid fa-user me-3 order-1"></i>
                    <span class="me-auto order-2">Edit Profile</span>
                    <i class="fa-solid fa-chevron-right ms-3 order-3"></i>
                  </a>
                </li>
                <li>
                  <a href="userprofile" class="d-flex align-items-center nav-link">
                    <i class="fa-solid fa-gear me-3 order-1"></i>
                    <span class="me-auto order-2">Setting &amp; Privacy</span>
                    <i class="fa-solid fa-chevron-right order-3"></i>

                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex align-items-center nav-link" data-bs-toggle="modal" data-bs-target="#myModal">
                    <i class="fa-solid fa-right-from-bracket me-3 order-1"></i>
                    <span class="me-auto order-2">Log Out</span>
                    <i class="fa-solid fa-chevron-right order-3"></i>
                  </a>
                </li>
              </ul>
            </div>
          <?php } ?>
          <!-- end navbar-left -->
        </div>
  </nav>

  <?php
  $cookie_name = "User";
  if (!isset($_COOKIE[$cookie_name])) {

  ?>
    <!-- The Modal -->
    <div class="modal fade model_nav" id="loginModal">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Đăng nhập</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <?php include("../View/Account/LoginView.php"); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- <a href="SignUp"><button class="btn btn-primary m-3">Sign Up</button></a> -->

    <div class="modal fade model_nav" id="signup">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Đăng ký</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <?php include("../View/Account/SignUpView.php"); 

            ?>
          </div>
        </div>
      </div>
    <?php } else {

    ?>



      <!-- The Modal -->
      <div class="modal fade model_nav" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Do you want to logout now?</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <img src="http://localhost/BitStorm/root/Image/logoutimage.svg" alt="logoutimg" style="width: 100%;">
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="http://localhost/BitStorm/Logout" class="btn btn-primary" data-bs-dismiss="modal" onclick="window.location.href=this.href;">OK</a>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>
    </div>
</div>
</div>
</nav>