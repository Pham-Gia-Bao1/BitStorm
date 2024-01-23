<?php
include("../View/Admin/Layout/SideBar.view.php");
include_once("../Controller/VideoAdminController.php");
include_once("../Model/VideoAdminModel.php");
include_once("../root/CSS/Admin/AdminComment.css.php");
?>
<title>AdminVideo</title>
<div class='main'>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal" style="margin: 20px; float : left; position: absolute; left: 0;">Tạo</button>
    </div>
    <div class="container" style="margin-top: 20px;">
        <h2 class="title">
            <span class="title-word title-word-1">V</span>
            <span class="title-word title-word-2">I</span>
            <span class="title-word title-word-3">D</span>
            <span class="title-word title-word-4">E</span>
            <span class="title-word title-word-1">O</span>
            <span class="title-word title-word-3">S</span>
        </h2>
    </div>
    <div id="createModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="VideoAdmin">
                        <div class="form-group">
                            <label for="usr">Link youtube</label>
                            <input type="text" class="form-control" id="youtube_link" name="youtube_link">
                        </div>
                        <div class="form-group">
                            <label for="usr">Tiêu Đề</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="author">Mã tác giả</label>
                            <select name="author_id" value="author_id">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usr">Mô tả</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group">
                            <label for="usr">Khoảng thời gian</label>
                            <input type="text" class="form-control" id="duration" name="duration">
                        </div>
                        <div class="form-group">
                            <label for="usr">Thể loại</label>
                            <select name="type" value="type">
                                <option value="tình yêu">Tình Yêu</option>
                                <option value="gia đình">Gia Đình</option>
                                <option value="bạn bè">Bạn Bè</option>
                                <option value="động lực">Động lực</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usr">Lượt xem</label>
                            <input type="text" class="form-control" id="view" name="view">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tạo mới</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bỏ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3"></div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Link Youtube</th>
                <th>Tiêu đề</th>
                <th>Mã tấc giả</th>
                <th>Mô tả</th>
                <th>Khoảng thời gian</th>
                <th>Ngày tạo</th>
                <th>Thể loại</th>
                <th>Lượt xem</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $videos = displayAllVideo();
            foreach ($videos as $video) {
            ?>
                <tr>
                    <td> <?php echo $video['id'] ?></td>
                    <td> <?php echo $video['youtube_link'] ?></td>
                    <td> <?php echo $video['title'] ?></td>
                    <td> <?php echo $video['author_id'] ?></td>
                    <td> <?php echo $video['description'] ?></td>
                    <td> <?php echo $video['duration'] ?></td>
                    <td> <?php echo $video['created_at'] ?></td>
                    <td> <?php echo $video['type'] ?></td>
                    <td> <?php echo $video['view'] ?></td>
                    <td>
                        <div class="action d-flex ">
                            <a href="VideoAdmin?id_update=<?php echo $video['id'] ?>" id="updateLink">
                                <button data-bs-toggle="modal" data-bs-target="#update_model" type="button" class="btn btn-primary edit-comment-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            </a>
                            <a href="VideoAdmin?id=<?php echo $video['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    </td>
                <?php  } ?>
                <?php
                if (isset($_GET['id_update'])) {
                    $id = $_GET['id_update'];
                    $video = displayOneVideo($id);

                }
                ?>
                <div id="update_model" class="modal fade" role="dialog">
                    <?php  ?>
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="VideoAdmin">
                                    <input type="hidden" name="id" value="<?php echo $video['id']; ?>">
                                    <div class="form-group">
                                        <label for="usr">Id</label>
                                        <input type="text" class="form-control" id="title" name="id" value="<?php echo $video['id'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Link youtube</label>
                                        <input type="text" class="form-control" id="youtube_link" name="youtube_link" value="<?php echo $video['youtube_link'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Tiêu đề</label>
                                        <input type="text" class="form-control w-100" id="title" name="title" value="<?php echo $video['title'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Mã Tác giả</label>
                                        <select name="author_id" value="<?php echo $video['author_id'] ?>">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Mô tả</label>
                                        <input type="text" class="form-control" id="description" name="description" value="<?php echo $video['description'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Khoảng thời gian</label>
                                        <input type="text" class="form-control" id="duration" name="duration" value="<?php echo $video['duration'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Kiểu</label>
                                        <input type="text" class="form-control" id="type" name="type" value="<?php echo $video['type'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Lượt xem</label>
                                        <input type="text" class="form-control" id="view" name="view" value="<?php echo $video['view'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel">Bỏ</button>
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
                            window.location.href = 'VideoAdmin';
                        });
                    });
                </script>
        </tbody>
    </table>
</div>