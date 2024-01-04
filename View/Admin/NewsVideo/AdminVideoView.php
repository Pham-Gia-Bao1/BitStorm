<?php
include("../View/Admin/Layout/SideBar.view.php");
include_once("../Model/AdminVideoModel.php");
include_once("../Controller/AdminVideoController.php")
?>
<div class="main">
    <div class="p-3"></div>
    <ul class="nav nav-tabs">
        <li><a href="AdminNews">News</a></li>
        <li><a href="AdminVideo">Blog</a></li>
    </ul>
    <div class="p-3"></div>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal3" style="margin-left: 20px;">Create</button>
    <!-- Modal -->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="AdminVideo">
                        <div class="form-group">
                            <label for="usr">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="usr">youtube_link</label>
                            <input type="text" class="form-control" id="youtube_link" name="youtube_link">
                        </div>
                        <div class="form-group">
                            <label for="usr">Descriptions</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group">
                            <label for="usr">Created_at</label>
                            <input type="text" class="form-control" id="created_at" name="created_at">
                        </div>
                        <div class="form-group">
                            <label for="usr">Image</label>
                            <input type="text" class="form-control" id="image_url" name="image_url">
                        </div>
                        <div class="form-group">
                            <label for="usr">Author</label>
                            <input type="text" class="form-control" id="author_id" name="author_id">
                        </div>
                        <div class="form-group">
                            <label for="usr">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                        <div class="form-group">
                            <label for="usr">View</label>
                            <input type="text" class="form-control" id="view" name="view">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2"></div>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>
                    <p>Id</p>
                </th>
                <th>
                    <p>Title</p>
                </th>
                <th>
                    <p>Description</p>
                </th>
                <th>
                    <p>author_id</p>
                </th>
                <th>
                    <p>youtube_link</p>
                </th>
                <th>
                    <p>Created_at</p>
                </th>
                <th>
                    <p>Image_url</p>
                </th>
                <th>
                    <p>Type</p>
                </th>
                <th>
                    <p>View</p>
                </th>
                <th>
                    <p>Action</p>
                </th>
            </tr>
        </thead>

        <tbody>
            <?php
            $videos = showAllVideo();
            foreach ($videos as $video) :
            ?>
                <tr>
                    <td><?php echo $video['id'] ?></td>
                    <td><?php echo $video['title'] ?></td>
                    <td><?php echo $video['description'] ?></td>
                    <td><?php echo $video['author_id'] ?></td>
                    <td><?php echo $video['youtube_link'] ?></td>
                    <td><?php echo $video['created_at'] ?></td>
                    <td><?php echo '<img src="' . $video['image_url'] . '" style= "height:100px;width:100px;">'; ?></td>
                    <td><?php echo $video['type'] ?></td>
                    <td><?php echo $video['view'] ?></td>
                    <td>
                        <div class="action d-flex justify-content-end">
                            <a href="AdminVideo?id_update=<?php echo $video['id']; ?>">
                                <button type="button" data-toggle="modal" data-target="update" class="btn btn-warning">Update</button></a>
                            <a href="AdminVideo?id=<?php echo $video['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
        </tbody>
        <script>
            $(document).ready(function() {
                const urlParams = new URLSearchParams(window.location.search);
                const idUpdateParam = urlParams.get('id_update');
                if (idUpdateParam) {
                    $('#update').modal('show');
                }
                $('#update').on('hidden.bs.modal', function(e) {
                    window.location.href = 'AdminNews';
                });
            });
        </script>
    <?php endforeach; ?>
    </table>
    <?php $id = $_GET['id_update'];
    $videos = showOneVideo($id);
    foreach ($videos as $video) {
    ?>
        <div id="update" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="AdminVideo">
                            <div class="form-group">
                                <label for="usr">id</label>
                                <input type="text" class="form-control" id="id" name="id" value="<?php echo $video['id'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="usr">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $video['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">youtube_link</label>
                                <input type="text" class="form-control" id="youtube_link" name="youtube_link" value="<?php echo $video['youtube_link'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Descriptions</label>
                                <input type="text" class="form-control" id="description" name="description" value="<?php echo $video['description'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Created_at</label>
                                <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo $video['created_at'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Image</label>
                                <input type="text" class="form-control" id="image_url" name="image_url" value="<?php echo $video['image_url'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Author</label>
                                <input type="text" class="form-control" id="author_id" name="author_id" disabled value="<?php echo $video['author_id'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Type</label>
                                <input type="text" class="form-control" id="type" name="type" value="<?php echo $video['type'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">View</label>
                                <input type="text" class="form-control" id="view" name="view" value="<?php echo $video['view'] ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>