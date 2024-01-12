<?php
include("../View/Admin/Layout/SideBar.view.php");
include_once("../Model/AdminPodCastsModel.php");
include_once("../Controller/AdminPodcastsController.php");
// include_once("../root/CSS/Admin/AdminComment.css.php");

?>
<style>
      table {
        border-collapse: collapse;
        width: 100%;
        font-size: 12px !important;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
    }

    th {
        background-color: #f2f2f2;
    }
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
        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal3" style="margin: 20px; float : left; position: absolute; left: 0;">Tạo mới</button>
    </div>
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="AdminPodCasts">
                        <div class="form-group">
                            <label for="usr">Tiêu đề</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="usr">Link youtube</label>
                            <input type="text" class="form-control" id="youtube_link" name="youtube_link">
                        </div>
                        <div class="form-group">
                            <label for="usr">Mô tả</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group">
                            <label for="usr">Ảnh</label>
                            <input type="text" class="form-control" id="image_url" name="image_url">
                        </div>
                        <div class="form-group">
                            <label for="usr">Tác giả</label>
                            <input type="text" class="form-control" id="author_id" name="author_id">
                        </div>
                        <div class="form-group">
                            <label for="usr">Kiểu</label>
                            <input type="text" class="form-control" id="type" name="type">
                            <select id="type" name="type" >
                                <option value="Tình Yêu">Tình Yêu</option>
                                <option value="Gia Đình">Gia Đình</option>
                                <option value="Tình Bạn">Tình Bạn</option>
                                <option value="Học Tập">Học Tập</option>
                                <option value="Thiên Nhiên">Thiên Nhiên</option>
                                <option value="Động Lực">Động Lực</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usr">Lượt xem</label>
                            <input type="text" class="form-control" id="view" name="view">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">Tạo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <h2 class="title">
            <span class="title-word title-word-1">P</span>
            <span class="title-word title-word-2">O</span>
            <span class="title-word title-word-3">D</span>
            <span class="title-word title-word-4">C</span>
            <span class="title-word title-word-1">A</span>
            <span class="title-word title-word-2">S</span>
            <span class="title-word title-word-3">T</span>
            <span class="title-word title-word-4">S</span>
        </h2>
    </div>
    <div class="p-2"></div>
    <table>
        <thead>
            <tr>
                <th>
                    <p>Id</p>
                </th>
                <th>
                    <p>Tiêu đề</p>
                </th>
                <th>
                    <p>Mô tả</p>
                </th>
                <th>
                    <p>mã tác giả</p>
                </th>
                <th>
                    <p>link youtube</p>
                </th>
                <th>
                    <p>Ngày tạo </p>
                </th>
                <th>
                    <p>Ảnh</p>
                </th>
                <th>
                    <p>Kiểu</p>
                </th>
                <th>
                    <p>Lượt xem </p>
                </th>
                <th></th>

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
                            <a href="AdminPodCasts?id_update=<?php echo $video['id']; ?>">
                                <button type="button" data-toggle="modal" data-target="update" class="btn btn-primary edit-comment-btn"><i class="fa-solid fa-pen-to-square"></i></button></a>
                            <a href="AdminPodCasts?id=<?php echo $video['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
    <?php
    if (isset($_GET['id_update'])) {

        $id = $_GET['id_update'];
        $videos = showOneVideo($id);
    }
    foreach ($videos as $video) {
    ?>
        <div id="update" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="AdminPodCasts">
                            <input type="hidden" name="id" value="<?php echo $video['id']; ?>">
                            <div class="form-group">
                                <label for="usr">Tiêu Đề</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $video['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Link youtube</label>
                                <input type="text" class="form-control" id="youtube_link" name="youtube_link" value="<?php echo $video['youtube_link'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Mô tả</label>
                                <input type="text" class="form-control" id="description" name="description" value="<?php echo $video['description'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Ảnh</label>
                                <input type="text" class="form-control" id="image_url" name="image_url" value="<?php echo $video['image_url'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Tác giả</label>
                                <input type="text" class="form-control" id="author_id" name="author_id" disabled value="<?php echo $video['author_id'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Kiểu</label>
                                <select id="type" name="type" value="<?php echo $video['type'] ?>" >
                                <option value="Tình Yêu">Tình Yêu</option>
                                <option value="Gia Đình">Gia Đình</option>
                                <option value="Tình Bạn">Tình Bạn</option>
                                <option value="Học Tập">Học Tập</option>
                                <option value="Thiên Nhiên">Thiên Nhiên</option>
                                <option value="Động Lực">Động Lực</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="usr">Lượt xem</label>
                                <input type="text" class="form-control" id="view" name="view" value="<?php echo $video['view'] ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Cập nhật</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bỏ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>