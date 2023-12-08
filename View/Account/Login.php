<style>
    .form {
        width: 1000px;
        margin: 0 auto;
        padding: 30px;
    }

    .form image {
        width: 100%;
    }

    .login_btn {
        width: 94%;
    }

    .login_btn_gg {
        width: 100%
    }

    .log_gg {
        text-align: center;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        margin-top: 100px;       
    }
    .log_gg i {
    color: red; /* Màu sắc biểu tượng tùy chỉnh */
  }
</style>
<div class="d-flex">
    <div class="img">
        <img src="http://localhost/WEB_PHP/root/Image/loginimage.svg" alt="logoutimg" style="width: 100%;">
    </div>
    <form method="POST" action="http://localhost/WEB_PHP/login" class="p-3 m-2 gap-5 form">
        <div class="form-group p-1 m-1">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group p-1 m-1">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group p-1 m-1">
            <label for="password">Mật khẩu:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary p-1 m-2 login_btn">Đăng nhập</button>
        <div class="login_btn_gg d-flex justify-content-center">
            <a class="btn p-1 m-2 log_gg">
            Đăng Nhập Bằng  <i class="fab fa-google mr-2 "></i>
            </a>
        </div>
    </form>
</div>