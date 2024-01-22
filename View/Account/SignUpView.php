<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        .btn_login {
            width: 100%;
        }

        .password-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .password-toggle:hover {
            color: blue;
        }

        #progress-bar {
            display: flex;
            margin: 40px 0;
            user-select: none;
        }

        #progress-bar .step {
            text-align: center;
            width: 100%;
            position: relative;
        }

        #progress-bar .step p {
            font-weight: 500;
            font-size: 9px;
            color: #000;
            margin-bottom: 8px;
        }

        #progress-bar .step .bullet {
            height: 25px;
            width: 25px;
            border: 2px solid #000;
            display: inline-block;
            border-radius: 50%;
            position: relative;
            transition: 0.2s;
            font-weight: 500;
            font-size: 17px;
            line-height: 25px;
        }

        #progress-bar .step .bullet.active {
            border-color: #d43f8d;
            background: #d43f8d;
        }

        #progress-bar .step .bullet span {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        #progress-bar .step .bullet.active span {
            display: none;
        }

        #progress-bar .step .bullet:before,
        #progress-bar .step .bullet:after {
            position: absolute;
            content: '';
            bottom: 11px;
            right: -51px;
            height: 3px;
            width: 44px;
            background: #262626;
        }

        #progress-bar .step .bullet.active:after {
            background: #d43f8d;
            transform: scaleX(0);
            transform-origin: left;
            animation: animate 0.3s linear forwards;
        }

        @keyframes animate {
            100% {
                transform: scaleX(1);
            }
        }

        #progress-bar .step:last-child .bullet:before,
        #progress-bar .step:last-child .bullet:after {
            display: none;
        }

        #progress-bar .step p.active {
            color: #d43f8d;
            transition: 0.2s linear;
        }

        #progress-bar .step .check {
            position: absolute;
            left: 50%;
            top: 70%;
            font-size: 15px;
            transform: translate(-50%, -50%);
            display: none;
        }

        #progress-bar .step .check.active {
            display: block;
            color: #fff;
        }

        #progress-bar .step .bullet.valid {
            border-color: #007bff;
            background: #007bff;
        }

        #progress-bar .step .bullet.invalid {
            border-color: #fff;
            background: #fff;
        }

        .input_role {
            display: none;
        }

        .button_role {
            font-size: 10px;
            padding: 10px;
            width: 125px;
            background-color: #009aff;
            text-align: center;
            color: #fff;
            cursor: pointer;
        }

        #client:checked~#label_role_client,
        #doctor:checked~#label_role_doctor {
            background-color: #002bff;
            /* Màu sắc khi input được checked */
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="img">
            <img src="./root/Image/signupimage.svg" alt="logoutimg" style="width: 100%;">
            <div id="progress-bar">
                <div class="step">
                    <p>
                        8 kí tự
                    </p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>
                        Viết hoa
                    </p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>
                        Số
                    </p>
                    <div class="bullet" id="step3">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>
                        Kí tự đặc biệt
                    </p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
            </div>
        </div>
        <form method="post" action="http://localhost/BitStorm/SignUp" class="form" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="username">Họ và Tên:</label>
                <input type="text" class="form-control rounded-pill" id="usernameInput" name="username" required maxlength="50" pattern="^[a-zA-Z0-9\s]+$">
                <small id="usernameError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control rounded-pill" id="emailInput" name="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$">
                <small id="emailError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <div class="password-container">
                    <input type="password" class="form-control rounded-pill" id="passwordInput" name="password" required pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$">
                    <i id="password-toggle1" class="password-toggle fas fa-eye-slash"></i>
                </div>
                <small id="passwordError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="password">Nhập lại Mật Khẩu:</label>
                <div class="password-container">
                    <input type="password" class="form-control rounded-pill" id="passwordInputAgain" name="password_again" required pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$">
                    <i id="password-toggle" class="password-toggle fas fa-eye-slash"></i>
                </div>
                <small id="passwordErrorAgain" class="text-danger"></small>
            </div>
            <div class="form-group">
                <input type="radio" id="client" class="input_role" name="input_role" value="2">
                <label for="client" class="button_role rounded-pill" id="label_role_client">Người nhận tư vấn</label>
                <input type="radio" id="doctor" class="input_role" name="input_role" value="3">
                <label for="doctor" class="button_role rounded-pill" id="label_role_doctor">Người tư vấn</label>
            </div>
            <button type="submit" class="btn btn-primary btn_login rounded-pill">Đăng Ký Ngay</button>
        </form>
    </div>
    <script>
        const passwordInput = document.getElementById('passwordInput');
        const steps = document.querySelectorAll('#progress-bar .step .bullet');
        passwordInput.addEventListener('input', function() {
            const password = passwordInput.value;
            const hasUppercase = /[A-Z]/.test(password);
            const hasSpecialChar = /[!@#$%^&*()_\-+=]/.test(password);
            const hasNumber = /\d/.test(password);
            const isLongEnough = password.length >= 8;
            steps[0].classList.toggle('valid', isLongEnough);
            steps[0].classList.toggle('invalid', !isLongEnough);
            steps[1].classList.toggle('valid', hasUppercase);
            steps[1].classList.toggle('invalid', !hasUppercase);
            steps[2].classList.toggle('valid', hasNumber);
            steps[2].classList.toggle('invalid', !hasNumber);
            steps[3].classList.toggle('valid', hasSpecialChar);
            steps[3].classList.toggle('invalid', !hasSpecialChar);
            steps.forEach((step, index) => {
                if (index > 3) {
                    step.classList.remove('valid');
                }
            });
        });

        function validateForm() {
            var username = document.getElementById("usernameInput").value;
            var email = document.getElementById("emailInput").value;
            var password = document.getElementById("passwordInput").value;
            var password_again = document.getElementById("passwordInputAgain").value;
            var usernamePattern = /^[a-zA-Z0-9\s]+$/;
            var passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$/;
            var passwordPattern_again = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$/;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var usernameError = document.getElementById("usernameError");
            var emailError = document.getElementById("emailError");
            var passwordError = document.getElementById("passwordError");
            var passwordError_again = document.getElementById("passwordErrorAgain");
            usernameError.textContent = "";
            emailError.textContent = "";
            passwordError.textContent = "";
            passwordError_again.textContent = "";
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

            if (password !== password_again) {
                passwordError_again.textContent = "Mật khẩu không khớp!";
                return false;
            } else {
                passwordError_again.textContent = ""; // Xóa thông báo lỗi nếu mật khẩu khớp
            }
            return true;
        }
        document.getElementById('password-toggle').addEventListener('click', function() {
            var passwordToggle = document.getElementById('password-toggle');
            var passwordInput = document.getElementById('passwordInputAgain');
            if (passwordInput.getAttribute('type') === 'password') {
                passwordInput.setAttribute('type', 'text');
                passwordToggle.classList.remove("fa-eye-slash");
                passwordToggle.classList.add("fa-eye");
            } else {
                passwordInput.setAttribute('type', 'password');
                passwordToggle.classList.remove("fa-eye");
                passwordToggle.classList.add("fa-eye-slash");
            }
        });
        document.getElementById('password-toggle1').addEventListener('click', function() {
            var passwordInput = document.getElementById('passwordInput');
            var passwordToggle = document.getElementById('password-toggle1');
            if (passwordInput.getAttribute('type') === 'password') {
                passwordInput.setAttribute('type', 'text');
                passwordToggle.classList.remove("fa-eye-slash");
                passwordToggle.classList.add("fa-eye");
            } else {
                passwordInput.setAttribute('type', 'password');
                passwordToggle.classList.remove("fa-eye");
                passwordToggle.classList.add("fa-eye-slash");
            }
        });
    </script>
</body>

</html>