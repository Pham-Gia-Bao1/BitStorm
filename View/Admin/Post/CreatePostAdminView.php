<!-- Modal -->
<div class="modal fade" id="createAdminModal" tabindex="-1" aria-labelledby="createAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createAdminModalLabel">Create</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="action" value="createPostAdmin">
                    <input type="hidden" class="form-control" name="updateIdPost" id="createIdPost">
                    <div class="form-group">
                        <label for="" class="col-form-label">UserID</label>
                        <select class="custom-select" name="createUserIdPost" id="createUserIdPost">
                            <option selected>Choose user_id...</option>
                            <!-- select id user từ databs -->
                            <?php foreach($users as $user):?>
                            <option value="<?php echo $user['id'];?>"><?php echo $user['id'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="createLikeCountPost" class="col-form-label">Lượt thích</label>
                        <input type="text" class="form-control" name="createLikeCountPost" id="createLikeCountPost">
                    </div>
                    <div class="form-group">
                        <label for="createLikeCountPost" class="col-form-label">Chế độ đăng bài</label>
                        <select class="custom-select" name="createIsAnonyMousPost" id="createIsAnonyMousPost">
                            <option disabled selected>Chọn chế độ đăng bài</option>
                            <option value="1">Công khai</option>
                            <option value="0">Ẩn danh</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="createContentPost" class="col-form-label">Nội dung</label>
                        <textarea class="form-control" name="createContentPost" id="createContentPost"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Tạo mới</button>
                </div>
            </form>
        </div>
    </div>
</div>