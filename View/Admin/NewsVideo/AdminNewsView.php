<?php
include("../View/Admin/Layout/SideBar.view.php");
require_once("../Controller/Database/database.php");
// include_once("../root/CSS/Admin/AdminComment.css.php");

?>
<style>
     .sub-navbar{
     position: sticky !important;
     top: 60px;
     z-index: 700;
  }
</style>
<div class="main">
    <div class="p-3"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sub-navbar">
        <div class="container-fluid">


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="VideoAdmin">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="AdminNews">Tin Tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="AdminPodCasts">Podcast</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <div class="action d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin: 20px; float : left; position: absolute; left: 0;">Tạo mới </button>
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
                            <select id="author_id" name="author_id">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usr">Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <h2 class="title">
            <span class="title-word title-word-1">N</span>
            <span class="title-word title-word-2">E</span>
            <span class="title-word title-word-3">W</span>
            <span class="title-word title-word-4">S</span>
        </h2>
    </div>
    <div class="p-3"></div>
    <table class="table">
        <thead>
            <tr>
                <th>
                    <p>Id</p>
                </th>
                <th>
                    <p>Tiêu Đề</p>
                </th>
                <th>
                    <p>Nội dung</p>
                </th>
                <th>
                    <p>Mô tả</p>
                </th>
                <th>
                    <p>Ảnh</p>
                </th>
                <th>
                    <p>Id Tác giả</p>
                </th>
                <th>
                    <p>Ngày tạo</p>
                </th>
                <th>
                    <p>Link</p>
                </th>
                <th></th>

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
                                <button data-bs-toggle="modal" data-bs-target="#update_model" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
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
                                                <label for="title">Tiêu Đề</label>
                                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $new1['title'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="content">Nội dung</label>
                                                <input type="text" class="form-control" id="content" name="content" value="<?php echo $new1['content'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="descriptions">Mô tả</label>
                                                <input type="text" class="form-control" id="descriptions" name="descriptions" value="<?php echo $new1['descriptions'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="created_at">Ngày tạo</label>
                                                <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo $new1['created_at'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="image_url">Ảnh</label>
                                                <input type="text" class="form-control" id="image_url" name="image_url" value="<?php echo $new1['image_url'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="usr">Tác giả</label>
                                                <select id="author_id" name="author_id" value="<?php echo $new1['author_id'] ?>">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="text" class="form-control" id="link" name="link" value="<?php echo $new1['link'] ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bỏ</button>
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