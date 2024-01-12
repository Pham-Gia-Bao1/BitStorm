<div class="modal fade" id="addExpertModal" tabindex="-1" role="dialog" aria-labelledby="#addExpertModalLabel" aria-hidden="true">
    <form action="" method="post" id="createExpert">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addExpertModalLabel">Thêm chuyên gia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="actionExpert" value="createExpert">
                    <label for="username">Tên người dùng:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="gender">Giới tính:</label>
                    <select class="form-select form-select-lg mb-3" name="gender" aria-label="gender" required>
                        <option selected>Chọn giới tính</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                    <label for="address">Địa chỉ:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="address" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="username">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="phoneNumber">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="age">Tuổi:</label>
                    <div class="input-group mb-3">
                        <input type="number" name="age" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="experience">Kinh nghiệm:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="experience" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="avatar">Ảnh đại diện:</label>
                    <input type="file" class="form-control mb-3" id="imgUser" name="imgUser" accept="image/*" required>
                    <label for="avatar">Đánh giá:</label>
                    <div class="input-group mb-3">
                        <input type="number" name="rating" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="certificate">Chứng chỉ</label>
                    <input type="file" class="form-control mb-3" id="certificate" name="certificate" accept="image/*" required>
                    <label for="specialization">Chức vụ:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="specialization" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
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
            $('#addExpertModal').modal('show');
        });
    });
</script>