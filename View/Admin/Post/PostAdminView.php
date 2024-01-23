<?php
include("../View/Admin/Layout/SideBar.view.php");
include("../root/CSS/Admin/Post.css.php");
include("../View/Admin/Post/UpdatePostAdminView.php");
include("../View/Admin/Post/DeletePostAdminView.php");
?>
<div class="main">
    <div class="create">
        <button type="button" class="btn btn-primary create-post_admin" data-bs-toggle="modal" data-bs-target="#createAdminModal">
            Tạo mới
        </button>
        <?php
        include("../View/Admin/Post/CreatePostAdminView.php"); ?>
        <div class="show-table">
            <table class="table table-hover table-striped ">
                <thead class="">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">mã người dùng</th>
                        <th scope="col">Lượt yêu thích</th>
                        <th scope="col">Ẩn danh</th>
                        <th scope="col">Nội dung</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <style>
                        td:not(td:last-child) {
                            max-width: 100px;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: nowrap;
                        }
                    </style>
                    <?php foreach ($posts as $post) : ?>
                        <tr>
                            <td><?php echo $post['id'] ?></td>
                            <td><?php echo $post['user_id'] ?></td>
                            <td><?php echo $post['like_count'] ?></td>
                            <td><?php echo $post['isAnonymous'] ?></td>
                            <td style="max-width:600px" class="content_post"><?php echo $post['content'] ?></td>
                            <td>

                                <button class="btn btn-primary updatePostAdminBtn">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>