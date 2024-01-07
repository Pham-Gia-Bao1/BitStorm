<?php
include("../View/Admin/Layout/SideBar.view.php");
require_once("../Controller/Database/database.php");
?>
<div class="main">
    <div class="p-3"></div>
    <div class="container red topBotomBordersOut">
        <a href="VideoAdmin">Video</a>
        <a href="AdminNews">News</a>
        <a href="AdminPodCasts">Podcasts</a>
    </div>
    <div class="action d-flex justify-content-end">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#myModal" style="margin-left: 20px;">Create</button>
    </div>
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
    <div class="container">
        <h2 class="title">
            <span class="title-word title-word-1">N</span>
            <span class="title-word title-word-2">E</span>
            <span class="title-word title-word-3">W</span>
            <span class="title-word title-word-4">S</span>
        </h2>
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
                        <div class="action d-flex justify-content-end">
                            <a href="AdminNews?id_update=<?php echo $new['id'] ?>" id="updateLink">
                                <button data-bs-toggle="modal" data-bs-target="#update_model" type="button" class="btn btn-warning">Update</button>
                            </a>
                            <a href="AdminNews?id=<?php echo $new['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </div>

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
                                            <input type="hidden" value="<?php echo $new1['id'] ?>" name="id_new">
                                            <!-- post ddeen controller de xu li -->
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $new1['title'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <input type="text" class="form-control" id="content" name="content" value="<?php echo $new1['content'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="descriptions">Descriptions</label>
                                                <input type="text" class="form-control" id="descriptions" name="descriptions" value="<?php echo $new1['descriptions'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="created_at">Created_at</label>
                                                <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo $new1['created_at'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="image_url">Image</label>
                                                <input type="text" class="form-control" id="image_url" name="image_url" value="<?php echo $new1['image_url'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="author_id">Author</label>
                                                <input type="text" class="form-control" id="author_id" name="author_id" value="<?php echo $new1['author_id'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="text" class="form-control" id="link" name="link" value="<?php echo $new1['link'] ?>">
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

                        <script>
                            $(document).ready(function() {
                                const urlParams = new URLSearchParams(window.location.search);
                                const idUpdateParam = urlParams.get('id_update');
                                if (idUpdateParam) {
                                    $('#update_model').modal('show');
                                }
                                $('#update_model').on('hidden.bs.modal', function(e) {
                                    window.location.href = 'AdminNews';
                                });
                            });
                        </script>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    </tbody>
</div>