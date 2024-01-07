<!-- Modal -->
<div class="modal fade" id="updatePostAdminModal" tabindex="-1" aria-labelledby="updateAdminModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      
        <!-- ===================BODY UPDATE=========================== -->
        <form action="" method="post">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateAdminModalLabel">Update</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" name="action" value="updatePostAdmin">
                <input type="hidden" class="form-control" name="updateIdPost" id="updateIdPost">
                
                <div class="form-group">
                    <label for="" class="col-form-label">UserID</label>
                    <select class="custom-select" name="updateUserIdPost" id="updateUserIdPost">
                        <option selected>Choose user_id...</option>
                        <!-- select id user từ databs -->
                        <?php foreach($users as $user):?>
                        <option value="<?php echo $user['id'];?>"><?php echo $user['id'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="updateLikeCountPost" class="col-form-label">Lượt thích</label>
                    <input type="text" class="form-control" name="updateLikeCountPost" id="updateLikeCountPost">
                </div>
                <div class="form-group">
                    <label for="updateLikeCountPost" class="col-form-label">Chế độ đăng bài</label>
                    <select class="custom-select" name="updateIsAnonyMousPost" id="updateIsAnonyMousPost">
                        <option disabled selected>Chọn chế độ đăng bài</option>
                        
                        <option value="1">Công khai</option>
                        <option value="0">Ẩn danh</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="updateContentPost" class="col-form-label">Nội dung</label>
                    <textarea class="form-control" name="updateContentPost" id="updateContentPost"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="submit"  data-bs-dismiss="modal" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
        
        
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $('.updatePostAdminBtn').on('click',function(){
            $('#updatePostAdminModal').modal('show');
            $tr=$(this).closest('tr');
            var post =$tr.children("td").map(function(){
                return $(this).text();
            }).get();

            // console.log(post);
            $('#updateIdPost').val(post[0]);
            $('#updateUserIdPost').val(post[1]);
            $('#updateLikeCountPost').val(post[2]);
            $('#updateIsAnonyMousPost').val(post[3]);
            $('#updateContentPost').val(post[4]);  
        });
    });
</script>