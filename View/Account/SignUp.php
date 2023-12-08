<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .btn_login {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="img">
            <img src="http://localhost/WEB_PHP/root/Image/signupimage.svg" alt="logoutimg" style="width: 100%;">
        </div>
        <form method="post" action="http://localhost/WEB_PHP/SignUp" class="form" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="username">Họ và Tên:</label>
                <input type="text" class="form-control" id="usernameInput" name="username" required maxlength="50" pattern="^[a-zA-Z0-9\s]+$">
                <small id="usernameError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="emailInput" name="email" required pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$">
                <small id="emailError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" class="form-control" id="passwordInput" name="password" required pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$">
                <small id="passwordError" class="text-danger"></small>
            </div>
            <button type="submit" class="btn btn-primary btn_login">Đăng Ký Ngay</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("usernameInput").value;
            var email = document.getElementById("emailInput").value;
            var password = document.getElementById("passwordInput").value;

            var usernamePattern = /^[a-zA-Z0-9\s]+$/;
            var passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$/;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            var usernameError = document.getElementById("usernameError");
            var emailError = document.getElementById("emailError");
            var passwordError = document.getElementById("passwordError");

            usernameError.textContent = "";
            emailError.textContent = "";
            passwordError.textContent = "";

            if (!usernamePattern.test(username)) {
                usernameError.textContent = "Tên người dùng phải chứa chữ cái, số và khoảng trắng!";
                return false;
            }

            if (!emailPattern.test(email)) {
                emailError.textContent = "Email không hợp lệ!";
                return false;
            }

            if (!passwordPattern.test(password)) {
                passwordError.textContent = "Mật khẩu phải có ít nhất 8 ký tự, bao gồm ít nhất một chữ cái hoa, một chữ số và một ký tự đặc biệt!";
                return false;
            }

            return true;
        }
    </script>
</body>

</html>