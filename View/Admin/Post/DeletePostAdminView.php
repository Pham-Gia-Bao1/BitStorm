
<!-- Modal -->
<div class="modal fade" id="deletePostAdminModal" tabindex="-1" aria-labelledby="deleteAdminModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteAdminModalLabel">Xóa bài băng</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
            <input type="hidden" name="action" value="deletePost">
            <input type="hidden" name="postIdDelete" id="postIdDelete">
            <h5>Bạn có thật sự muốn xóa bài đăng này?</h5>
            <textarea name="content" id="contentPost" cols="50" rows="5"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Xóa</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $('.deletePostAdminBtn').on('click',function(){
            $('#deletePostAdminModal').modal('show');
            $tr=$(this).closest('tr');
            var post =$tr.children("td").map(function(){
                return $(this).text();
            }).get();

            // console.log(post);
            $('#postIdDelete').val(post[0]); 
            $('#contentPost').val(post[4]); 
        });
    });
</script>