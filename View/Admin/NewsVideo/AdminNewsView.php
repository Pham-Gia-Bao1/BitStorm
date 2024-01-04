<?php
include("../View/Admin/Layout/SideBar.view.php");
require_once("../Database/database.php");
?>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<div class="main">
    <div class="p-3"></div>
    <ul class="nav nav-tabs">
        <li><a href="AdminNews">News</a></li>
        <li><a href="AdminVideo">Blog</a></li>
    </ul>
    <div class="p-3"></div>
    <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal" style="margin-left: 20px;">Create</button>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="AdminNews">
                        <div class="form-group">
                            <label for="usr">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="usr">Content</label>
                            <input type="text" class="form-control" id="content" name="content">
                        </div>
                        <div class="form-group">
                            <label for="usr">Descriptions</label>
                            <input type="text" class="form-control" id="descriptions" name="descriptions">
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
                            <label for="usr">Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3"></div>
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
                    <p>Content</p>
                </th>
                <th>
                    <p>Descriptions</p>
                </th>
                <th>
                    <p>Image</p>
                </th>
                <th>
                    <p>Author_id</p>
                </th>
                <th>
                    <p>Created_at</p>
                </th>
                <th>
                    <p>Link</p>
                </th>
                <th>
                    <p>Action</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($news as $new) : ?>
                <tr>
                    <td><?php echo $new['id'] ?></td>
                    <td><?php echo $new['title'] ?></td>
                    <td><?php echo $new['content'] ?></td>
                    <td><?php echo $new['descriptions'] ?></td>
                    <td><?php echo '<img src="' . $new['image_url'] . '" style= "height:100px;width:100px;">'; ?></td>
                    <td><?php echo $new['author_id'] ?></td>
                    <td><?php echo $new['created_at'] ?></td>
                    <td><?php echo $new['link'] ?></td>
                    <td>
                        <a href="AdminNews?id_update=<?php echo $new['id'] ?>" id="updateLink">
                            <button data-bs-toggle="modal" data-bs-target="#update_model" type="button">Update</button>
                        </a>
                        <div id="update_model" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginModalLabel">Chỉnh sửa News</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        $id_new = $_GET['id_update'];
                                        $new1 = $newAdmin->selectOneNews($id_new);
                                        ?>
                                        <form method="post" action="AdminNews">
                                            <!-- post ddeen controller de xu li -->
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $new1[0]['title'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <input type="text" class="form-control" id="content" name="content" value="<?php echo $new1[0]['content'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="descriptions">Descriptions</label>
                                                <input type="text" class="form-control" id="descriptions" name="descriptions" value="<?php echo $new1[0]['descriptions'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="created_at">Created_at</label>
                                                <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo $new1[0]['created_at'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="image_url">Image</label>
                                                <input type="text" class="form-control" id="image_url" name="image_url" value="<?php echo $new1[0]['image_url'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="author_id">Author</label>
                                                <input type="text" class="form-control" id="author_id" name="author_id" value="<?php echo $new1[0]['author_id'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="text" class="form-control" id="link" name="link" value="<?php echo $new1[0]['link'] ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="AdminNews?id_delete=<?php echo $new['id'] ?>" id="delete_model">
                            <button data-bs-toggle="modal" data-bs-target="#delete_model" type="button">Delete</button>
                        </a>
                        <script>
                            $(document).ready(function() {
                                const urlParams = new URLSearchParams(window.location.search);
                                const idUpdateParam = urlParams.get('id_update');
                                const idDeleteParam = urlParams.get('id_delete');

                                if (idUpdateParam) {
                                    $('#update_model').modal('show');
                                }

                                if (idDeleteParam) {
                                    $('#delete_model').modal('show');
                                }

                                // Attach an event handler to the 'hidden.bs.modal' event for both modals
                                $('#update_model, #delete_model').on('hidden.bs.modal', function(e) {
                                    // Redirect to the 'AdminNews' page when the modal is closed
                                    window.location.href = 'AdminNews';
                                });
                            });
                        </script>

                    </td>
                </tr>
                <div class="modal fade" role="dialog" id="delete_model">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loginModalLabel">Xóa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>Bạn Có Muốn Xóa không</h3>
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="AdminNews">
                                    <input type="hidden" name="id_delete" value="<?php echo $new['id']; ?>">
                                    <button type="submit" class="btn btn-primary">Xóa</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?> 
    </table>
    </tbody>
</div>