<!-- Modal -->
<div class="modal fade" id="updateExpertModal" tabindex="-1" aria-labelledby="#updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateUserModalLabel">Chỉnh sửa thông tin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="expertId" id="userId">
                    <input type="hidden" name="actionExpert" value="updateExpert">
                    <label for="username">Tên người dùng:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" id="name" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="gender">Giới tính:</label>
                    <select class="form-select form-select-lg mb-3" name="gender" aria-label="gender" id="gender" required>
                        <option selected>Chọn giới tính</option>
                        <option value="Male">Nam</option>
                        <option value="Female">Nữ</option>
                    </select>
                    <label for="address">Địa chỉ:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="address" id="address" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="username">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="email" id="email" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="phoneNumber">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="age">Tuổi:</label>
                    <div class="input-group mb-3">
                        <input type="number" name="age" id="age" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="experience">Kinh nghiệm:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="experience" id="experience" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="avatar">Ảnh đại diện:</label>
                    <div>
                        <input type="text" name="avatar" id="imgExpert" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="avatar">Đánh giá:</label>
                    <div class="input-group mb-3">
                        <input type="number" name="rating" id="rating" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="certificate">Chứng chỉ</label>
                    <div>
                        <input type="text" name="certificate" id="imgCertificate" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="specialization">Chức vụ:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="specialization" id="specialization" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="specialization">Trạng thái:</label>
                    <select class="form-select form-select-lg mb-3" name="status" aria-label="status" id="status" required>
                        <option selected>Chọn trạng thái</option>
                        <option value=1>Hoạt động</option>
                        <option value=0>Khóa tài khoản</option>
                    </select>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.edit-expert-btn').on('click', function() {
            $('#updateExpertModal').modal('show');
            $tr = $(this).closest('tr');
            var expert = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            var imgSrc = $tr.find(".userImg").attr("src");
            var imgCertificate = $tr.find(".CertificateImg").attr("src");
            console.log(expert);
            console.log(expert[12]);
            $('#userId').val(expert[0]);
            $('#name').val(expert[1]);
            $('#gender').val(expert[2]);
            $('#address').val(expert[3]);
            $('#email').val(expert[4]);
            $('#phoneNumber').val(expert[5]);
            $('#age').val(expert[6]);
            $('#experience').val(expert[7]);
            $('#imgExpert').val(imgSrc);
            $('#rating').val(expert[9]);
            $('#imgCertificate').val(imgCertificate);
            $('#specialization').val(expert[11]);
            $('#status').val(expert[12]);
        });
    });
</script>