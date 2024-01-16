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
  <!-- Button trigger modal -->
  <button id="drop_img_btn" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="fa-solid fa-camera"></i>
  </button>
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tải ảnh lên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="simple-panel col-xs-12 pn-flex mb ">
            <div class="p-16">
              <div class="row">
                <h2>Thêm ảnh vào đây</h2>
              </div>
              <div class="row">
                <form action="#" method="post" enctype="multipart/form-data" class="dropzone cover-dropzone dz-clickable" id="coverDropzoneForm">
                  <input type="hidden" id="uniqueFilename" name="uniqueFilename" value="">
                  <div class="dz-default dz-message"><button class="dz-button" type="button">Thả ảnh vào đây để upload</button></div>
                </form>
              </div>
              <form id="submitform">
                <input type="hidden" id="guid" name="guid" value="e167237f-3eda-44de-af9d-a8e3937d7cf2">
                <div class="form-group mt mb">
                </div>
              </form>
              <div class="text-center kfds-lyt-between">
                <button onclick="$('#changeCoverImageModal').modal('toggle');" class="btn pull-left  ladda-button btn-danger">Bỏ</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const modalBody = document.querySelector("#staticBackdrop .modal-body");
      const imageURLInput = document.querySelector("#uniqueFilename"); // Lấy input để nhận đường link ảnh
      modalBody.addEventListener("dragover", function(event) {
        event.preventDefault();
      });
      modalBody.addEventListener("drop", function(event) {
        event.preventDefault();
        const file = event.dataTransfer.files[0];
        const reader = new FileReader();
        reader.onload = function(e) {
          const imageURL = e.target.result;
          // Cập nhật giá trị của input với đường link của ảnh
          imageURLInput.value = imageURL;

        };
        reader.readAsDataURL(file);
      });
    });
  </script>
  <div class="avata m-1 p-2 d-flex  align-items-center">
    <img data-bs-toggle="modal" data-bs-target="#exampleModal" id="uploaded-image" class="rounded-circle avata_user" src="<?= htmlspecialchars($img); ?>" alt="<?= htmlspecialchars($name); ?>">
    <h3 id="name_user" class="m-3"><?= htmlspecialchars($name); ?></h3>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="col-xs-12 d-flex justify-content-between box_title">
            <div class="modal-h2">Ảnh đại diện</div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="col-xs-12 d-flex justify-content-between box_title">
            <button class="rounded-pill mb btn kfds-font-bold kfds-btn-tertiary-light kfds-srf-rounded bg-light btn_choise" onclick="$('.upload-btn').click();"><i class="far fa-image"></i><span class="kfds-left-mrgn-8">Chọn ảnh...</span> </button>
          </div>
          <div class="col-xs-12 d-flex justify-content-between box_title">
            <form action="userprofile" id="form" method="post">
              <div class="hidden upload-btn-wrapper">
                <input type="file" id="input_file" class="upload-btn" accept="image/*" value="Choose a file" name="image_url" class="change_avata btn btn-primary" value="Đổi avata" id="upload-input">
              </div>
              <div class="upload-demo croppie-container col-xs-12 d-flex justify-content-between box_title box_canvas">
                <div class=" cr-boundary" aria-dropeffect="none" style="width: 218px; height: 218px;">
                  <canvas id="myCanvas" class="cr-image" alt="preview" aria-grabbed="false" width="210" height="210" style="transform: translate3d(4.00001px, 4px, 0px) scale(1.0381); transform-origin: 105px 105px; opacity: 1;">
                  </canvas>
                  <script>
                    var imgSrc = "<?php echo htmlspecialchars($img); ?>"; // Lấy đường dẫn hình ảnh từ PHP và escape HTML
                    var canvas = document.getElementById('myCanvas'); // Lấy thẻ canvas bằng id
                    var ctx = canvas.getContext('2d'); // Lấy context 2D của canvas
                    var img = new Image(); // Tạo một đối tượng hình ảnh
                    img.onload = function() {
                      ctx.drawImage(img, 0, 0, 210, 210); // Vẽ hình ảnh lên canvas
                    };
                    img.src = imgSrc; // Đặt nguồn hình ảnh cho đối tượng hình ảnh
                  </script>
                  <div class="cr-viewport cr-vp-square" tabindex="0" style="width: 210px; height: 210px;">
                  </div>
                  <div class="cr-overlay" style="width: 218.001px; height: 218.001px; top: -0.0005035px; left: -0.0004882px;"></div>
                </div>
                <!-- <div class="cr-slider-wrap"><input class="cr-slider" type="range" step="0.0001" aria-label="zoom" min="1.0000" max="1.5000" aria-valuenow="1.0381"></div> -->
              </div>
              <script>
                // Lắng nghe sự kiện thay đổi của input file
                document.getElementById('input_file').addEventListener('change', function(e) {
                  var file = e.target.files[0]; // Lấy tệp tin đầu tiên từ sự kiện
                  if (file) {
                    var reader = new FileReader(); // Tạo một FileReader object
                    reader.onload = function(event) {
                      var img = new Image(); // Tạo một đối tượng hình ảnh
                      img.onload = function() {
                        var canvas = document.createElement('canvas'); // Tạo canvas
                        var ctx = canvas.getContext('2d');
                        canvas.width = 210; // Thiết lập kích thước canvas tùy ý
                        canvas.height = 210;
                        // Vẽ hình ảnh lên canvas
                        ctx.drawImage(img, 0, 0, 210, 210);
                        // Hiển thị hình ảnh lên canvas trong HTML
                        var canvasContainer = document.querySelector('.cr-boundary');
                        canvasContainer.innerHTML = ''; // Xóa bất kỳ hình ảnh nào đang có trước đó
                        canvasContainer.appendChild(canvas);
                      };
                      img.src = event.target.result; // Đặt nguồn hình ảnh cho đối tượng hình ảnh
                    };
                    reader.readAsDataURL(file); // Đọc tệp tin như là một URL data
                  }
                });
              </script>
              <!-- <input type="hidden" id="imagebase64" name="imagebase64"> -->
              <div class="p-16 grey-container kfds-lyt-row-respon kfds-btm-mrgn-24 kfds-srf-rounded-8">
                <div class="kfds-right-mrgn-24">
                  <span class="kfds-font-size-medium kfds-font-clr-primary">💡</span>
                </div>
                <div class="kfds-border-left kfds-pdg-respon-24 kfds-font-clr-dark-op-8">
                  Bạn có thể thay đổi bất cứ lúc nào!
                </div>
              </div>
              <button aria-label="Next" id="setAvatarNextButton" class="btn btn-primary rounded-pill">Áp dụng ảnh</button>
              <!-- <input hidden="" id="hasChangedDefault" value=""> -->
            </form>
          </div>
        </div>
      </div>
    </div>
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
          <!-- BOX 1 -->
          <div class="moddedl_ifomation">
            <div class="img" style="width : 30%">
              <img src="<?= htmlspecialchars($img) ?>" alt="logoutimg" style="width: 100%;" id="img_moddel_setting" class="rounded-circle avata_user">
            </div>
            <form method="" action="login" class="p-3 m-2 gap-5 form w-100">
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
                  <script>
                    function togglePasswordVisibility() {
                      var passwordInput = document.getElementById('password');
                      var showPasswordToggle = document.getElementById('show-password-toggle');
                      if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        showPasswordToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
                      } else {
                        passwordInput.type = 'password';
                        showPasswordToggle.innerHTML = '<i class="fas fa-eye"></i>';
                      }
                    }
                    var toggleButton = document.getElementById('show-password-toggle');
                    toggleButton.addEventListener('click', togglePasswordVisibility);
                  </script>
                </div>
              </div>
              <?php
              if ($role_id ==  3) : ?>
                <div class="form-group p-1 m-1  d-flex gap-3">
                  <div class="mb-3 w-50">
                    <label for="gender" class="form-label">Giới tính</label>
                    <input type="text" class="form-control" id="gender" name="gender_setting" value="<?= htmlspecialchars($expert['gender']); ?>" required readonly>
                  </div>
                  <div class="mb-3 w-50">
                    <label for="age" class="form-label">Tuổi</label>
                    <input type="text" class="form-control" id="age" name="age_setting" value="<?= htmlspecialchars($expert['age']); ?>" required readonly>
                  </div>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="address">Địa chỉ</label>
                  <input type="text" class="form-control" id="address" name="address_setting" value="<?= htmlspecialchars($expert['address']); ?>" required readonly>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="phone_number">Số điện thoại</label>
                  <input type="text" class="form-control" id="phone_number" name="phone_number_setting" value="<?= htmlspecialchars($expert['phone_number']); ?>" required readonly>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="experience">Kinh Nghiệm</label>
                  <input type="text" class="form-control" id="experience" name="experience_setting" value="<?= htmlspecialchars($expert['experience']); ?>" required readonly>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="profile_picture">Ảnh đại diện</label>
                  <input type="text" class="form-control" id="profile_picture" name="profile_picture_setting" value="<?= htmlspecialchars($img); ?>" readonly>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="count_rating">Đánh giá</label>
                  <input type="text" class="form-control" id="count_rating" name="count_rating_setting" value="<?= htmlspecialchars($expert['count_rating']); ?>" readonly>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="certificate">Chứng chỉ</label>
                  <input type="text" class="form-control" id="certificate" name="certificate_picture_setting" value="<?= htmlspecialchars($expert['certificate']); ?>" readonly>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="specialization">Ngành nghề</label>
                  <input type="text" class="form-control" id="specialization" name="specialization_setting" value="<?= htmlspecialchars($expert['specialization']); ?>" required readonly>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="status">Trạng thái hoạt động</label>
                  <input type="text" class="form-control" id="status" name="status_setting" value="<?= htmlspecialchars($expert['status']); ?>" required readonly>
                </div>
              <?php endif; ?>
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
                <input type="hidden" value="<?php echo $role_id ?>" name="role_id">
                <input type="text" class="form-control" id="username" name="username_setting" value="<?= htmlspecialchars($name); ?>" required>
              </div>
              <div class="form-group p-1 m-1">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email_setting" value="<?= htmlspecialchars($email); ?>" required>
              </div>
              <div class="form-group p-1 m-1">
                <label for="password">Mật khẩu:</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="password" name="password_setting" value="<?= htmlspecialchars($pass); ?>" required>
                  <div class="input-group-append">
                    <span class="input-group-text p-3 btn btn-primary" id="show-password-toggle">
                      <i class="fas fa-eye"></i>
                    </span>
                  </div>
                </div>
              </div>
              <?php
              if ($role_id ==  3) : ?>
                <div class="form-group p-1 m-1  d-flex gap-3">
                  <div class="mb-3 w-50">
                    <label for="gender" class="form-label">Giới tính</label>
                    <select class="form-select" id="gender" name="gender_setting" required>
                      <option value="male" <?= ($expert['gender'] == 'male') ? 'selected' : ''; ?>>Nam</option>
                      <option value="female" <?= ($expert['gender'] == 'female') ? 'selected' : ''; ?>>Nữ</option>
                    </select>
                  </div>

                  <div class="mb-3 w-50">
                    <label for="age" class="form-label">Tuổi</label>
                    <input type="text" class="form-control" id="age" name="age_setting" value="<?= htmlspecialchars($expert['age']); ?>" required>
                  </div>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="address">Địa chỉ</label>
                  <input type="text" class="form-control" id="address" name="address_setting" value="<?= htmlspecialchars($expert['address']); ?>" required>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="phone_number">Số điện thoại</label>
                  <input type="text" class="form-control" id="phone_number" name="phone_number_setting" value="<?= htmlspecialchars($expert['phone_number']); ?>" required>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="experience">Kinh Nghiệm</label>
                  <input type="text" class="form-control" id="experience" name="experience_setting" value="<?= htmlspecialchars($expert['experience']); ?>" required>
                </div>

                <div class="form-group p-1 m-1">
                  <label for="count_rating">Đánh giá</label>
                  <input type="text" class="form-control" id="count_rating" name="count_rating_setting" value="<?= htmlspecialchars($expert['count_rating']); ?>" readonly>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="specialization">Ngành nghề</label>
                  <input type="text" class="form-control" id="specialization" name="specialization_setting" value="<?= htmlspecialchars($expert['specialization']); ?>" required>
                </div>
                <div class="form-group p-1 m-1">
                  <label for="status">Trạng thái hoạt động</label>
                  <input type="text" class="form-control" id="status" name="status_setting" value="<?= htmlspecialchars($expert['status']); ?>" required>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center">

                  <div class="form-group p-4 m-1 bg-light box_item1">
                    <label for="certificate">Chứng chỉ</label>
                    <div class="old_img bg-light" style="width : 200px; height: 200px;">
                      <img id="new_img" style="width: 100%;" src="<?php echo htmlspecialchars($expert['certificate']); ?>" alt="<?= htmlspecialchars($expert['certificate']); ?>">
                    </div>
                    <label for="certificate" class="btn btn-primary w-100 label_file">Tải lên</label>
                    <input type="file" class="form-control" id="certificate" required name="certificate_picture_setting" value="<?= htmlspecialchars($expert['certificate']); ?>" readonly onchange="previewImage(this);">

                    <script>
                      function previewImage(input) {
                        var fileInput = input;
                        var imgElement = document.getElementById('new_img');

                        if (fileInput.files && fileInput.files[0]) {
                          var reader = new FileReader();

                          reader.onload = function(e) {
                            imgElement.src = e.target.result;
                          };

                          reader.readAsDataURL(fileInput.files[0]);
                        }
                        console.log(imgElement.src)
                      }

                      function previewImage1(input) {
                        var preview = document.getElementById('previewImage12');
                        var file = input.files[0];
                        var reader = new FileReader();

                        reader.onloadend = function() {
                          preview.src = reader.result;
                        };

                        if (file) {
                          reader.readAsDataURL(file);
                        } else {
                          preview.src = ""; // Clear the image if no file is selected
                        }
                      }
                    </script>
                  </div>

                  <div class="form-group p-4 m-1 box_item1 bg-light">

                    <label for="profile_picture">Ảnh đại diện</label>
                    <div class="old_img bg-light" style="width: 200px; height: 200px;">
                      <img id="previewImage12" style="width: 100%;" src="<?= htmlspecialchars($img); ?>" alt="<?= htmlspecialchars($img); ?>">
                    </div>
                    <label for="profile_picture" class="btn btn-primary w-100 label_file">Tải lên</label>
                    <input type="file" class="form-control" id="profile_picture" name="profile_picture_setting" value="<?= htmlspecialchars($img); ?>" readonly onchange="previewImage1(this);">

                  </div>

                </div>

              <?php endif; ?>
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
          <?php foreach ($posts as $post) { ?>
            <div class="d-flex align-items-center m-2 p-1 content_box">
              <img src="<?= htmlspecialchars($img) ?>" alt="avata_active" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 20px;">
              <div class="bg-light content_active">
                <h6>Bạn đã đăng thành công bài viết <?php echo htmlspecialchars($post['content_posts']); ?></h6>
                <p><?php echo htmlspecialchars($posts1->TimePost($post['created_at_post'])); ?></p>
              </div>
            </div>
          <?php }; ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  if ($role_id == 2) {
    include_once("../View/UserProfile/ProfileExpertView.php");
  } else {
    include_once("../View/UserProfile/ModelAddCalendarView.php");
  } ?>
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