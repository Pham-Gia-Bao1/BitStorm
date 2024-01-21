<div class="modal fade" id="addExpertModal" tabindex="-1" role="dialog" aria-labelledby="#addExpertModalLabel" aria-hidden="true">
    <form action="" method="post" id="createExpert" enctype="multipart/form-data">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addExpertModalLabel">Thêm chuyên gia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="actionExpert" value="createExpert">
                    <label for="username">Tên người dùng:</label>
                    <div class="input-group mb-1">
                        <input type="text" name="name" id="name" pattern="[\p{L}\s]+" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <span id="nameError" class="text-danger"></span>
                    <br>
                    <label for="gender">Giới tính:</label>
                    <select class="form-select form-select-lg mb-1 selectedGender" name="gender" aria-label="gender" required onchange="validateGender()">
                        <option selected>Chọn giới tính</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                    <span id="genderError" class="text-danger"></span>
                    <br>
                    <label for="address">Địa chỉ:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="address" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="username">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="phoneNumber">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" pattern="[0-9]{10}" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="age">Tuổi:</label>
                    <div class="input-group mb-3">
                        <input type="number" name="age" min="22" max="70" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="experience">Kinh nghiệm:</label>
                    <div class="input-group mb-1">
                        <input type="text" name="experience" id="experience" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <span id="experienceError" class="text-danger"></span>
                    <br>
                    <label for="avatar">Ảnh đại diện:</label>
                    <input type="file" class="dropify mb-3" id="imgAddExpert" name="imgAddExpert" data-height="200" onchange="getUrlImgExpert()" accept="image/*" required />
                    <input type="hidden" name="addAvatarExpert" id="addExpertAvatar">
                    <label for="avatar">Đánh giá:</label>
                    <div class="input-group mb-3">
                        <input type="number" name="rating" class="form-control" aria-describedby="basic-addon1" min="1" max="5" required>
                    </div>
                    <label for="certificate">Chứng chỉ</label>
                    <input type="file" class="dropify mb-3" id="addCertImg" name="addCertImg" data-height="200" onchange="getUrlImgCertificate()" accept="image/*" required />
                    <input type="hidden" name="addCertificate" id="addCertificate">
                    <label for=" specialization">Chức vụ:</label>
                    <div class="input-group mb-1">
                        <input type="text" name="specialization" id="title" class="form-control" aria-describedby="basic-addon1" pattern="[\p{L}\s]+" required>
                    </div>
                    <span id="titleError" class="text-danger"></span>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn closeBtn" data-dismiss="modal">Thêm</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    //Handle upload ảnh
    async function getUrlImgExpert() {
        const CLOUD_NAME = "dugeyusti";
        const PRESET_NAME = "expert_upload";
        const FOLDER_NAME = "BitStorm";
        const api = `https://api.cloudinary.com/v1_1/${CLOUD_NAME}/image/upload`;
        const formData = new FormData();
        formData.append("upload_preset", PRESET_NAME);
        formData.append("folder", FOLDER_NAME);
        const file = document.querySelector('#imgAddExpert').files[0];
        formData.append("file", file);
        const options = {
            method: "POST",
            body: formData,
        };

        try {
            console.log(file);
            const res = await fetch(api, options);
            const data = await res.json();
            document.querySelector('#addExpertAvatar').value = data.secure_url;
        } catch (error) {
            console.error("Lỗi khi tải từ Cloudinary:", error);
        }
    }

    async function getUrlImgCertificate() {
        const CLOUD_NAME = "dugeyusti";
        const PRESET_NAME = "expert_upload";
        const FOLDER_NAME = "BitStorm";
        const api = `https://api.cloudinary.com/v1_1/${CLOUD_NAME}/image/upload`;
        const formData = new FormData();
        formData.append("upload_preset", PRESET_NAME);
        formData.append("folder", FOLDER_NAME);
        const file = document.querySelector('#addCertImg').files[0];
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
            document.querySelector('#addCertificate').value = data.secure_url;
            console.log(document.querySelector('#addCertificate').value)
        } catch (error) {
            console.error("Lỗi khi tải từ Cloudinary:", error);
        }
    }

    $(document).ready(function() {
        $('.addUserBtn').on('click', function(event) {
            $('#addExpertModal').modal('show');
            event.preventDefault();
            $('.dropify').dropify();

        });
        //validate form 
        $('#experience').on('input', function() {
            checkExperienceLength();
        });
        $('#title').on('input', function() {
            checkTitleLength();
        });
        $('#name').on('input', function() {
            checkNameLength();
        });

        $('#createExpert').on('submit', function(event) {
            if (checkExperienceLength() && checkNameLength() && checkTitleLength() && validateGender()) {
                $(this).submit();
            } else {
                alert('Bạn phải điền form đúng theo yêu cầu trước khi submit!.');
                event.preventDefault();
            }
        });

        function checkExperienceLength() {
            var inputValue = $('#experience').val();
            var charCount = inputValue.length; // Sử dụng length để đếm số ký tự
            var errorSpan = $('#experienceError');
            if (charCount < 100 || charCount > 255) {
                errorSpan.text('Nội dung phải có từ 100 đến 255 ký tự.');
                check = false;
            } else {
                errorSpan.text(null);
                check = true;
            }
            return check;
        }

        function checkTitleLength() {
            var inputValue = $('#title').val();
            var charCount = inputValue.length;
            var errorSpan = $('#titleError');
            if (charCount < 13 || charCount > 30) {
                errorSpan.text('Làm ơn điền cụ thể chức vụ hiện tại của bạn!');
                check = false;
            } else {
                errorSpan.text(null);
                check = true;
            }
            return check;
        }

        function checkNameLength() {
            var inputValue = $('#name').val();
            var charCount = inputValue.length;
            var spaceCount = (inputValue.match(/\s/g) || []).length; // Đếm số dấu cách trong chuỗi
            var errorSpan = $('#nameError');
            if (charCount < 3 || charCount > 30 || spaceCount < 1) {
                errorSpan.text('Làm ơn điền cụ thể họ và tên của bạn!');
                check = false;
            } else {
                errorSpan.text(null);
                check = true;
            }
            return check;
        }
        // Đặt hàm validateGender trong phạm vi global
        window.validateGender = function() {
            var selectedGender = $('.selectedGender').val();
            console.log(selectedGender);
            var errorSpan = $('#genderError');

            if (selectedGender !== "Nam" && selectedGender !== "Nữ" && selectedGender == "Chọn giới tính") {
                errorSpan.text('Vui lòng chọn giới tính Nam hoặc Nữ.');
                check = false;
            } else {
                errorSpan.text('');
                check = true;
            }
            return check;
        };
    });
</script>