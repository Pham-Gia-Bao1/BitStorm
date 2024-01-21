<div class="modal fade" id="updateExpertModal" tabindex="-1" aria-labelledby="#updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" id="updateExpert">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateUserModalLabel">Chỉnh sửa thông tin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="expertId" id="userId">
                    <input type="hidden" name="actionExpert" value="updateExpert">
                    <label for="username">Tên người dùng:</label>
                    <div class="input-group mb-1">
                        <input type="text" name="name" id="nameExpert" pattern="[\p{L}\s]+" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <span id="nameExpertError" class="text-danger"></span>
                    <br>
                    <label for="gender">Giới tính:</label>
                    <select class="form-select form-select-lg mb-1 selectedGenderExpert" name="gender" aria-label="gender" id="gender" required onchange="validateGender()">
                        <option selected>Chọn giới tính</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                    <span id="genderExpertError" class="text-danger"></span>
                    <br>
                    <label for="address">Địa chỉ:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="address" id="address" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="username">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="phoneNumber">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" aria-describedby="basic-addon1" pattern="[0-9]{10}">
                    </div>
                    <label for="age">Tuổi:</label>
                    <div class="input-group mb-3">
                        <input type="number" name="age" id="age" min="22" max="70" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="experience">Kinh nghiệm:</label>
                    <div class="input-group mb-1">
                        <input type="text" name="experience" id="experienceExpert" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <span id="ExperienceExpertError" class="text-danger"></span>
                    <br>
                    <label for="avatar">Ảnh đại diện:</label>
                    <div>
                        <input type="file" class="mb-1" id="imgUpdateExpert" name="imgUpdateExpert" data-height="200" onchange="getUrlImgUpdateExpert()" accept="image/*" />
                        <br>
                        <img src="" id="previewExpertImg" alt="image" width="150px">
                        <input type="hidden" name="updateAvatarExpert" id="updateAvatarExpert">
                    </div>
                    <label for="avatar">Đánh giá:</label>
                    <div class="input-group mb-3">
                        <input type="number" name="rating" id="rating" min="1" max="5" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="certificate">Chứng chỉ</label>
                    <div>
                        <input type="file" class="mb-1" id="updateCertImg" name="updateCertImg" data-height="200" onchange="getUrlImgUpdateCertificate()" accept="image/*" />
                        <br>
                        <img src="" id="previewCertImg" alt="image" width="150px">
                        <input type="hidden" name="updateCertificate" id="updateCertificate">
                    </div>
                    <label for="specialization">Chức vụ:</label>
                    <div class="input-group mb-1">
                        <input type="text" name="specialization" id="specialization" class="form-control" aria-describedby="basic-addon1" pattern="[\p{L}\s]+" required>
                    </div>
                    <span id="titleExpertError" class="text-danger"></span>
                    <br>
                    <label for="specialization">Trạng thái:</label>
                    <select class="form-select form-select-lg mb-1 selectedStatusExpert" name="status" aria-label="status" id="status" onchange="validateStatus()">
                        <option selected>Chọn trạng thái</option>
                        <option value="Hoạt động">Hoạt động</option>
                        <option value="Ngưng hoạt động">Ngưng hoạt động</option>
                    </select>
                    <span id="statusExpertError" class="text-danger"></span>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
        </form>
    </div>
</div>
<script>
    async function getUrlImgUpdateExpert() {
        const CLOUD_NAME = "dugeyusti";
        const PRESET_NAME = "expert_upload";
        const FOLDER_NAME = "BitStorm";
        const api = `https://api.cloudinary.com/v1_1/${CLOUD_NAME}/image/upload`;
        const formData = new FormData();
        formData.append("upload_preset", PRESET_NAME);
        formData.append("folder", FOLDER_NAME);
        const file = document.querySelector('#imgUpdateExpert').files[0];
        formData.append("file", file);
        const options = {
            method: "POST",
            body: formData,
        };

        try {
            console.log(file);
            const res = await fetch(api, options);
            const data = await res.json();
            document.querySelector('#updateAvatarExpert').value = data.secure_url;
            document.getElementById('previewExpertImg').src = data.secure_url;
        } catch (error) {
            console.error("Lỗi khi tải từ Cloudinary:", error);
        }
    }

    async function getUrlImgUpdateCertificate() {
        const CLOUD_NAME = "dugeyusti";
        const PRESET_NAME = "expert_upload";
        const FOLDER_NAME = "BitStorm";
        const api = `https://api.cloudinary.com/v1_1/${CLOUD_NAME}/image/upload`;
        const formData = new FormData();
        formData.append("upload_preset", PRESET_NAME);
        formData.append("folder", FOLDER_NAME);
        const file = document.querySelector('#updateCertImg').files[0];
        formData.append("file", file);
        const options = {
            method: "POST",
            body: formData,
        };

        try {
            console.log(file);
            const res = await fetch(api, options);
            const data = await res.json();
            document.querySelector('#updateCertificate').value = data.secure_url;
            document.getElementById('previewCertImg').src = data.secure_url;
        } catch (error) {
            console.error("Lỗi khi tải từ Cloudinary:", error);
        }
    }
    $(document).ready(function() {
        $('.edit-expert-btn').on('click', function() {
            $('#updateExpertModal').modal('show');
            $tr = $(this).closest('tr');
            var expert = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            var imgSrc = $tr.find(".expertImg").attr("src");
            var imgCertificate = $tr.find(".CertificateImg").attr("src");
            console.log(expert);
            $('#userId').val(expert[0]);
            $('#nameExpert').val(expert[1]);
            $('#gender').val(expert[2]);
            $('#address').val(expert[3]);
            $('#email').val(expert[4]);
            $('#phoneNumber').val(expert[5]);
            $('#age').val(expert[6]);
            $('#experienceExpert').val(expert[7]);
            $('#updateAvatarExpert').val(imgSrc);
            $('#rating').val(expert[9]);
            $('#updateCertificate').val(imgCertificate);
            $('#specialization').val(expert[11]);
            $('#previewExpertImg').attr('src', imgSrc);
            $('#previewCertImg').attr('src', imgCertificate);
            $('#status option[value="' + expert[12].trim() + '"]').prop('selected', true);
            $('.dropify').dropify();
        });
        //validate form
        $('#experienceExpert').on('input', function() {
            checkExperienceExpertLength();
        });
        $('#specialization').on('input', function() {
            checkTitleExpertLength();
        });
        $('#nameExpert').on('input', function() {
            checkNameExpertLength();
        });

        $('#updateExpert').on('submit', function(event) {
            if (checkExperienceExpertLength() && checkNameExpertLength() && checkTitleExpertLength() && validateGenderExpert() && validateStatusExpert()) {
                $(this).submit();
            } else {
                alert('Bạn phải điền form đúng theo yêu cầu trước khi submit!.');
                event.preventDefault();
            }
        });

        function checkExperienceExpertLength() {
            var inputValue = $('#experienceExpert').val();
            var charCount = inputValue.length;
            // Sử dụng length để đếm số ký tự
            console.log(charCount);
            var errorSpan = $('#ExperienceExpertError');
            if (charCount < 100 || charCount > 500) {
                errorSpan.text('Nội dung phải có độ dài từ 100 đến 500 ký tự.');
                check = false;
            } else {
                errorSpan.text(null);
                check = true;
            }
            return check;
        }

        function checkTitleExpertLength() {
            var inputValue = $('#specialization').val();
            var charCount = inputValue.length;
            var errorSpan = $('#titleExpertError');
            if (charCount < 13 || charCount > 30) {
                errorSpan.text('Làm ơn điền cụ thể chức vụ hiện tại của bạn!');
                check = false;
            } else {
                errorSpan.text(null);
                check = true;
            }
            return check;
        }

        function checkNameExpertLength() {
            var inputValue = $('#nameExpert').val();
            var charCount = inputValue.length;
            var spaceCount = (inputValue.match(/\s/g) || []).length; // Đếm số dấu cách trong chuỗi
            var errorSpan = $('#nameExpertError');
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
        window.validateGenderExpert = function() {
            var selectedGender = $('.selectedGenderExpert').val();
            console.log(selectedGender);
            var errorSpan = $('#genderExpertError');
            if (selectedGender !== "Nam" && selectedGender !== "Nữ" && selectedGender == "Chọn giới tính") {
                errorSpan.text('Vui lòng chọn giới tính Nam hoặc Nữ.');
                check = false;
            } else {
                errorSpan.text('');
                check = true;
            }
            return check;
        };
        // Đặt hàm validateGender trong phạm vi global
        window.validateStatusExpert = function() {
            var selectedStatus = $('.selectedStatusExpert').val();
            console.log(selectedStatus);
            var errorSpan = $('#statusExpertError');
            if (selectedStatus !== "Hoạt động" && selectedStatus !== "Ngưng hoạt động" &&
                selectedStatus == "Chọn trạng thái") {
                errorSpan.text('Vui lòng chọn trạng thái!');
                check = false;
            } else {
                errorSpan.text('');
                check = true;
            }
            return check;
        };
    });
</script>
<style>
    .dropify-message p {
        font-size: small;
    }
</style>