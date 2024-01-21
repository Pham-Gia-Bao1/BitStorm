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
                    <div class="input-group mb-1">
                        <input type="text" name="name" id="usernameInput" class="form-control" aria-describedby="basic-addon1" pattern="[\p{L}\s]+" required>
                    </div>
                    <small id="userNameError" class="text-danger"></small>
                    <br>
                    <label for="username">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="emailInput" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="username">Password:</label>
                    <div class="input-group mb-1">
                        <input type="password" name="password" id="passwordInput" class="form-control" aria-describedby="basic-addon1" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="checkPassword">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <small id="passwordUserError" class="text-danger"></small>
                    <br>
                    <label for="username">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" id="phoneNumberInput" class="form-control" aria-describedby="basic-addon1" pattern="[0-9]{10}" required>
                    </div>
                    <label for="avatar">Ảnh đại diện:</label>
                    <!-- Trong form add -->
                    <input type="file" class="dropify mb-3" id="avatarCreate" name="addImgUser" data-height="200" onchange="getUrlImg()" accept="image/*" required />
                    <input type="hidden" name="addAvatar" id="addUserAvatar">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn closeBtn" data-dismiss="modal">Thêm</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    // Sửa đổi hàm getUrlImg thành async
    async function getUrlImg() {
        const CLOUD_NAME = "dugeyusti";
        const PRESET_NAME = "expert_upload";
        const FOLDER_NAME = "BitStorm";
        const api = `https://api.cloudinary.com/v1_1/${CLOUD_NAME}/image/upload`;
        const formData = new FormData();
        formData.append("upload_preset", PRESET_NAME);
        formData.append("folder", FOLDER_NAME);
        const file = document.querySelector('#avatarCreate').files[0];
        formData.append("file", file);
        const options = {
            method: "POST",
            body: formData,
        };

        try {
            console.log(file);
            const res = await fetch(api, options);
            const data = await res.json();
            console.log(data);
            document.querySelector('#addUserAvatar').value = data.secure_url;
        } catch (error) {
            console.error("Lỗi khi tải từ Cloudinary:", error);
        }
    }
    $(document).ready(function() {
        $('.addUserBtn').on('click', function() {
            $('#addUserModal').modal('show');
            $('.dropify').dropify();

            $('#createUser').on('submit', function(event) {
                if (checkNameLength() && checkPassword()) {
                    console.log(checkPassword);
                    $(this).submit();
                } else {
                    alert('Bạn phải điền form đúng theo yêu cầu trước khi submit!.');
                    event.preventDefault();
                }
            });

            $('#usernameInput').on('input', function() {
                checkNameLength();
            });
            $('#passwordInput').on('input', function() {
                checkPassword();
            });

            function checkNameLength() {
                var inputValue = $('#usernameInput').val();
                var charCount = inputValue.length;
                var spaceCount = (inputValue.match(/\s/g) || []).length; // Đếm số dấu cách trong chuỗi
                var errorSpan = $('#userNameError');
                if (charCount < 3 || charCount > 30 || spaceCount < 1) {
                    errorSpan.text('Làm ơn điền cụ thể họ và tên của bạn!');
                    check = false;
                } else {
                    errorSpan.text(null);
                    check = true;
                }
                return check;
            }

            function checkPassword() {
                var password = $('#passwordInput').val();
                var passwordError = $('#passwordUserError');
                var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
                if (passwordPattern.test(password)) {
                    passwordError.text('');
                    check = true;
                } else {
                    passwordError.text('Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số, và ký tự đặc biệt.');
                    check = false;
                }
                return check;
            }
            $('#checkPassword').on('click', function() {
                // Lấy phần tử input mật khẩu
                var passwordInput = $('#passwordInput');
                // Kiểm tra trạng thái hiện tại của input mật khẩu
                var passwordType = passwordInput.attr('type');
                // Nếu đang ẩn mật khẩu, hiển thị
                if (passwordType === 'password') {
                    passwordInput.attr('type', 'text');
                    $('#checkPassword i').removeClass('fa-eye').addClass('fa-eye-slash');
                }
                // Nếu đang hiển thị mật khẩu, ẩn
                else {
                    passwordInput.attr('type', 'password');
                    $('#checkPassword i').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });
    });
</script>
<style>
    .dropify-message p {
        font-size: small;
    }
</style>