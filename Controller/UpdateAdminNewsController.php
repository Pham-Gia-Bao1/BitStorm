<?php 
include "../Database/database.php";
 include_once "../Model/AdminNewsModel.php";
include "../View/Admin/NewsVideo/UpdateNewsView.php";
?>
<?php
function openModel($id) {
    $data = selectOneNews($id);
    foreach($data as $news):
?>
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form method="post" action="UpdateAdminNews">
                    <div class="form-group">
                        <label for="usr">Title</label>
                        <input type="text" class="form-control" id="usr" name="title" value="<?php echo $news['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Content</label>
                        <input type="text" class="form-control" id="usr" name="content" value = "<?php echo $news['content']?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Descriptions</label>
                        <input type="text" class="form-control" id="usr" name="descriptions" value = "<?php echo $news['descriptions']?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Created_at</label>
                        <input type="text" class="form-control" id="usr" name="created_at"value = "<?php echo $news['created_at']?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Image</label>
                        <input type="text" class="form-control" id="usr" name="image_url" value = "<?php echo $news['image_url']?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Author</label>
                        <input type="text" class="form-control" id="usr" name="author_id" value = "<?php echo $news['author_id']?>">
                    </div>
                    <div class="form-group">
                        <label for="usr">Link</label>
                        <input type="text" class="form-control" id="usr" name="link" value = "<?php echo $news['link']?>">
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Update</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var id = getUrlParameter('id');
            if (id) {
                $('#myModal2').modal('show');
            }
        });
    </script>
<?php
    endforeach;
}

?>