<div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="#updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" enctype="multipart/form-data" id="updateUser">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateUserModalLabel">Chỉnh sửa thông tin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="userId" id="userId">
                    <input type="hidden" name="action" value="updateUser">
                    <label for="name">Tên người dùng:</label>
                    <div class="input-group mb-1">
                        <input type="text" name="name" id="userName" class="form-control" aria-describedby="basic-addon1" pattern="[\p{L}\s]+" required>
                    </div>
                    <small id="usernameError" class="text-danger"></small>
                    <br>
                    <label for="email">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="userEmail" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="password">Password:</label>
                    <div class="input-group mb-1">
                        <input type="text" name="password" id="updateUserPassword" class="form-control" aria-describedby="basic-addon1" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="hideUserPassword">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <small id="passwordError" class="text-danger"></small>
                    <br>
                    <label for="phoneNumber">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" aria-describedby="basic-addon1" pattern="[0-9]{10}" required>
                    </div>
                    <div>
                        <label for="avatar">Ảnh đại diện:</label>
                        <br>
                        <input type="file" class="mb-1" id="avatar" name="imgUser" data-height="200" onchange="getUrlUpdateUserImg()" accept="image/*" required />
                        <img src="" id="previewUser" alt="" width="200px">
                        <input type="hidden" name="avatar" id="userAvatar">
                    </div>
                    <label for="specialization">Trạng thái:</label>
                    <select class="form-select form-select-lg mb-3" name="status" aria-label="status" id="status" required>
                        <option selected>Chọn trạng thái</option>
                        <option value="Hoạt động">Hoạt động</option>
                        <option value="Ngưng hoạt động">Ngưng hoạt động</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    async function getUrlUpdateUserImg() {
        const CLOUD_NAME = "dugeyusti";
        const PRESET_NAME = "expert_upload";
        const FOLDER_NAME = "BitStorm";
        const api = `https://api.cloudinary.com/v1_1/${CLOUD_NAME}/image/upload`;
        const formData = new FormData();
        formData.append("upload_preset", PRESET_NAME);
        formData.append("folder", FOLDER_NAME);
        const file = document.querySelector('#avatar').files[0];
        formData.append("file", file);
        const options = {
            method: "POST",
            body: formData,
        };

        try {
            const res = await fetch(api, options);
            const data = await res.json();
            document.querySelector('#userAvatar').value = data.secure_url;
            document.getElementById('previewUser').src = data.secure_url;
            console.log(document.querySelector('#userAvatar'))
        } catch (error) {
            console.error("Lỗi khi tải từ Cloudinary:", error);
        }
    }

    $(document).ready(function() {
        $('.edit-user-btn').on('click', function() {
            $('#updateUserModal').modal('show');
            $tr = $(this).closest('tr');
            var client = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            var imgUserSrc = $tr.find(".userImg").attr("src");
            console.log(client);
            $('#userId').val(client[0]);
            $('#userName').val(client[1]);
            $('#userEmail').val(client[2]);
            $('#updateUserPassword').val(client[3]);
            $('#phoneNumber').val(client[4]);
            $('#status option[value="' + client[7].trim() + '"]').prop('selected', true);
            $('.dropify').dropify();
            $('#previewUser').attr('src', imgUserSrc);
            console.log(document.getElementById('previewUser').src);

            $('#updateUser').on('submit', function(event) {
                if (checkUserName() && checkUserPassword()) {
                    console.log(checkPassword);
                    $(this).submit();
                } else {
                    alert('Bạn phải điền form đúng theo yêu cầu trước khi submit!.');
                    event.preventDefault();
                }
            });

            $('#userName').on('input', function() {
                checkUserName();
            });
            $('#updateUserPassword').on('input', function() {
                checkUserPassword();
            });

            function checkUserName() {
                var inputValue = $('#userName').val();
                var charCount = inputValue.length;
                var spaceCount = (inputValue.match(/\s/g) || []).length; // Đếm số dấu cách trong chuỗi
                var errorSpan = $('#usernameError');
                if (charCount < 3 || charCount > 30 || spaceCount < 1) {
                    errorSpan.text('Làm ơn điền cụ thể họ và tên của bạn!');
                    check = false;
                } else {
                    errorSpan.text(null);
                    check = true;
                }
                return check;
            }

            function checkUserPassword() {
                var password = $('#updateUserPassword').val();
                var passwordError = $('#passwordError');
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
        });

        $('#hideUserPassword').on('click', function() {
            var passwordInput = $('#updateUserPassword');
            var passwordType = passwordInput.attr('type');
            if (passwordType === 'password') {
                passwordInput.attr('type', 'text');
                $('#hideUserPassword i').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordInput.attr('type', 'password');
                $('#hideUserPassword i').removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });
</script>
<style>
    .dropify-message p {
        font-size: small;
    }
</style>