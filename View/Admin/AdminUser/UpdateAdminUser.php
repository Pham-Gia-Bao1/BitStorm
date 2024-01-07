<!-- Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="#updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateUserModalLabel">Chỉnh sửa thông tin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="userId" id="userId">
                    <input type="hidden" name="action" value="updateUser">
                    <label for="name">Tên người dùng:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" id="userName" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <label for="email">Địa chỉ email:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="email" id="userEmail" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <label for="password">Password:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="password" id="userPassword" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <label for="phoneNumber">Số điện thoại:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <div>
                        <label for="avatar">Ảnh đại diện:</label>
                        <input type="text" name="imgUser" id="imgUser" class="form-control" aria-describedby="basic-addon1">
                    </div>

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
    $(document).ready(function() {
        $('.edit-user-btn').on('click', function() {
            $('#updateUserModal').modal('show');
            $tr = $(this).closest('tr');
            var client = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            var imgSrc = $tr.find(".userImg").attr("src");
            $('#userId').val(client[0]);
            $('#userName').val(client[1]);
            $('#userEmail').val(client[2]);
            $('#userPassword').val(client[3]);
            $('#phoneNumber').val(client[4]);
            $('#imgUser').val(imgSrc);
        });
    });
</script>