<?php
include("../View/LayOut/Header/Header.php");
?>
<title>Profile</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<?php
include("../root/CSS/UserProfile.css.php");
?>
<div id="content">
  <div class="container-fluid  ig_top"></div>
  <div class="avata m-1 p-2">

    <img id="uploaded-image" class="rounded-circle avata_user" src="<?= htmlspecialchars($img); ?>" alt="<?= htmlspecialchars($name); ?>">
    <h3 id="name_user" class="m-3"><?= $name; ?></h3>

    <form id="upload-form" method="post" action="userprofile">
      <!-- <input type="hidden" name="image_url" id="image-url-input"> -->
      <label for="upload-input" id="label_for_input_avatar" class="btn btn-primary">Tải Lên</label>
      <input type="file" name="image_url" class="change_avata btn btn-primary" value="Đổi avata" id="upload-input" accept="image/png">
      <button type="submit" class="btn btn-primary" id="submit_avatar"></button>
    </form>
  </div>
  <div class="container-fluid d-flex justify-content-center gap-5 setting">
    <div class="card w-25 m-3 d-flex align-items-center justify-content-center p-4" data-bs-toggle="modal" data-bs-target="#Modal_view_infomation">
      <img class="rounded-circle" src="https://cdn-icons-png.flaticon.com/512/456/456283.png" alt="img">
      <h5 class="text-primary">Thông tin cá nhân</h5>
      <p>Xem, chỉnh sửa thông tin cá nhân của mình...</p>
    </div>
    <div class="card w-25 m-3 d-flex align-items-center justify-content-center p-4" data-bs-toggle="modal" data-bs-target="#Modal_active_infomation">
      <img class="rounded-circle" src="https://static.thenounproject.com/png/1087190-200.png" alt="img">
      <h5 class="text-primary">Bài viết của bạn</h5>
      <p>Xem lại các bài viết bạn đã đăng, các comment của bạn..</p>
    </div>
    <div class="card w-25 m-3 d-flex align-items-center justify-content-center p-4" data-bs-toggle="modal" data-bs-target="#Modal_view_setting">
      <img class="rounded-circle" src="https://banner2.cleanpng.com/20180812/rbq/kisspng-portable-network-graphics-computer-icons-clip-art-settings-setup-gear-wheel-svg-png-icon-free-downlo-5b6fc3cd9a13c1.3219526615340512776311.jpg" alt="img">
      <h5 class="text-primary">Cài đặt</h5>
      <p>Chỉnh sửa thông tin, vấn đề của mình, đăng xuất..</p>
    </div>
  </div>
  <!-- The Modal -->
  <div class="modal fade model_nav" id="Modal_view_infomation">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title text-primary main_title_model_info" id="loginModalLabel">Thông tin cá nhân</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal info -->
        <div class="modal-body">
          <div class="moddedl_ifomation">
            <div class="img" style="width : 30%">
              <img src="<?= htmlspecialchars($img) ?>" alt="logoutimg" style="width: 100%;" id="img_moddel_setting" class="rounded-circle avata_user">
            </div>
            <form method="POST" action="login" class="p-3 m-2 gap-5 form w-100">
              <div class="form-group p-1 m-1">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="username" name="username" readonly value="<?= htmlspecialchars($name); ?>">
              </div>
              <div class="form-group p-1 m-1">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" readonly value="<?= htmlspecialchars($email); ?>">
              </div>
              <div class="form-group p-1 m-1">
                <label for="password">Mật khẩu:</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" readonly value="<?= htmlspecialchars($pass); ?>">
                  <div class="input-group-appen">
                    <span class="input-group-text p-3 btn btn-primary" id="show-password-toggle">
                      <i class="fas fa-eye"></i>
                    </span>
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal setting -->
  <div class="modal fade model_nav" id="Modal_view_setting">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <form method="post" action="userprofile" class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title text-primary main_title_model_info" id="loginModalLabel">Chỉnh sửa thông tin cá nhân</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="moddedl_ifomation">
            <div class="img" style="width : 30%">
              <img src="<?= htmlspecialchars($img) ?>" alt="logoutimg" style="width: 100%;" id="img_moddel_setting" class="rounded-circle avata_user">
            </div>
            <div class="p-3 m-2 gap-5 form w-100">
              <div class="form-group p-1 m-1">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="username" name="username_setting" value="<?= htmlspecialchars($name); ?>">
              </div>
              <div class="form-group p-1 m-1">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email_setting" value="<?= htmlspecialchars($email); ?>">
              </div>
              <div class="form-group p-1 m-1">
                <label for="password">Mật khẩu:</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="password" name="password_setting" value="<?= htmlspecialchars($pass); ?>">
                  <div class="input-group-append">
                    <span class="input-group-text p-3 btn btn-primary" id="show-password-toggle">
                      <i class="fas fa-eye"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <div>
            <!-- <button class="btn btn-danger">
                <a href="http://localhost/WEB_PHP/Logout" class="text-light">Log Out</a>
            </button> -->
          </div>
          <div><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- model hoạt động -->
  <div class="modal fade model_nav" id="Modal_active_infomation">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title text-primary main_title_model_info" id="loginModalLabel">Lịch sử hoạt động </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal info -->
        <div class="modal-body body_active_model">

        <div class="d-flex align-items-center m-2 p-1 content_box">
          <img src="<?= htmlspecialchars($img) ?>" alt="avata_active" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 20px;">
          <div class="bg-light content_active">
            <h6>Bạn đã đặt được lịch từ bác sĩ Châu vào 10AM - 11AM với giá 200.000 vnđ/lần</h6>
            <p>35 phút trước</p>
          </div>
        </div>
        <div class="d-flex align-items-center m-2 p-1 content_box">
          <img src="<?= htmlspecialchars($img) ?>" alt="avata_active" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 20px;">
          <div class="bg-light content_active">
            <h6>Bạn đã đăng thành công bài viết</h6>
            <p>35 phút trước</p>
          </div>
        </div>
        <div class="d-flex align-items-center m-2 p-1 content_box">
          <img src="<?= htmlspecialchars($img) ?>" alt="avata_active" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 20px;">
          <div class="bg-light content_active">
            <h6>Bạn đã đặt được lịch từ bác sĩ Châu vào 10AM - 11AM với giá 200.000 vnđ/lần</h6>
            <p>35 phút trước</p>
          </div>
        </div>
        <div class="d-flex align-items-center m-2 p-1 content_box">
          <img src="<?= htmlspecialchars($img) ?>" alt="avata_active" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 20px;">
          <div class="bg-light content_active">
            <h6>Bạn đã đăng thành công bài viết</h6>
            <p>35 phút trước</p>
          </div>
        </div> <div class="d-flex align-items-center m-2 p-1 content_box">
          <img src="<?= htmlspecialchars($img) ?>" alt="avata_active" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 20px;">
          <div class="bg-light content_active">
            <h6>Bạn đã đặt được lịch từ bác sĩ Châu vào 10AM - 11AM với giá 200.000 vnđ/lần</h6>
            <p>35 phút trước</p>
          </div>
        </div>
        <div class="d-flex align-items-center m-2 p-1 content_box">
          <img src="<?= htmlspecialchars($img) ?>" alt="avata_active" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 20px;">
          <div class="bg-light content_active">
            <h6>Bạn đã đăng thành công bài viết</h6>
            <p>35 phút trước</p>
          </div>
        </div>




      </div>
    </div>
  </div>
</div>


<h1 class="heading">Ghi chú</h1>
<p class="info-text">Nhấn chuột 2 liên tục đểt xóa</p>
<div class="app" id="app">
  <button class="btn1" id="btn">+</button>
</div>
<?php
include("../root/JS/UserProfile.js.php");
?>
</div>
<?php
include("../View/LayOut/Footer/Footer.php");
?>