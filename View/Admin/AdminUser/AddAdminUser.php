<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <form action="" method="post" id="createUser">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Thêm người dùng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="action" value="createUser">
                    <label for="username">Họ và tên người dùng:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" id="usernameInput" class="form-control" aria-describedby="basic-addon1" maxlength="50" minlength="3" pattern="^[\p{L}\s]+$" required>
                    </div>
                    <small id="usernameError" class="text-danger"></small>
                    <label for="username">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="emailInput" class="form-control" aria-describedby="basic-addon1" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                    </div>
                    <small id="emailError" class="text-danger"></small>
                    <label for="username">Password:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="password" id="passwordInput" class="form-control" aria-describedby="basic-addon1" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$" required>
                    </div>
                    <small id="passwordError" class="text-danger"></small>
                    <label for="username">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" id="phoneNumberInput" class="form-control" aria-describedby="basic-addon1" required pattern="^[0-9]{10,12}$">
                    </div>
                    <small id="phoneNumberError" class="text-danger"></small>
                    <label for="avatar">Ảnh đại diện:</label>
                    <input type="file" class="form-control" id="avatar" name="imgUser" accept="image/*">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn closeBtn" data-dismiss="modal">Thêm</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('.addUserBtn').on('click', function() {
            // Hiển thị modal
            $('#addUserModal').modal('show');
        });

        $('#createUser').submit(function(event) {
            if (!validateForm()) {
                // Ngăn chặn form được submit nếu có lỗi
                event.preventDefault();
            }
        });

        function validateForm() {
            var username = document.getElementById("usernameInput").value;
            var email = document.getElementById("emailInput").value;
            var password = document.getElementById("passwordInput").value;
            var phoneNumber = document.getElementById("phoneNumberInput").value;

            var usernamePattern = /^[\p{L}\s]+$/;
            var passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$/;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            var usernameError = document.getElementById("usernameError");
            var emailError = document.getElementById("EmailError");
            var passwordError = document.getElementById("passwordError");
            var phoneNumberError = document.getElementById("phoneNumberError");

            usernameError.innerHTML = "";
            emailError.innerHTML = "";
            passwordError.innerHTML = "";
            phoneNumberError.innerHTML = "";

            if (!usernamePattern.test(username)) {
                usernameError.innerHTML = "Tên người dùng phải chứa chữ cái và khoảng trắng!";
                return false;
            }

            if (!emailPattern.test(email)) {
                emailError.innerHTML = "Email không hợp lệ!";
                return false;
            }

            if (!passwordPattern.test(password)) {
                passwordError.innerHTML = "Mật khẩu phải có ít nhất 8 ký tự, bao gồm ít nhất một chữ cái hoa, một chữ số và một ký tự đặc biệt!";
                return false;
            }

            // Bổ sung kiểm tra cho số điện thoại nếu cần thiết
            if (!/^[0-9]{10,12}$/.test(phoneNumber)) {
                phoneNumberError.innerHTML = "Số điện thoại không hợp lệ!";
                return false;
            }

            return true;
        }
    });
</script>