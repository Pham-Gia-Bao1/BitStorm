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
                    <label for="username">Tên người dùng:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="username">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="username">Password:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="password" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="username">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
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
    });
</script>