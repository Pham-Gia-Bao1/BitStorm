<?php
include("../View/Admin/Layout/SideBar.view.php");
include("../root/CSS/Admin/AdminComment.css.php");
include_once("../root/CSS/Admin/Homepage.css.php");
include_once("../root/CSS/Admin/SideBar.css.php");
include("../root/JS/Notification.js.php");
?>

<body>
    <title>admin comment</title>
    <div class="main" id="main">
        <table>
            <tr id="title_field">
                <th></th>

                <th>STT</th>
                <th>Nội dung</th>
                <th>Ngày tạo</th>
                <th>Video</th>
                <th>Người bình luận</th>
                <th>Lượt thích</th>
                <th>Lượt không thích</th>
                <th>Mã video</th>
                <th>Mã người bình luận</th>
                <th>Action</th>
            </tr>
            <tr id="">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th><button onclick="confirmRedirectToAdminComments()" id="delete_btn" class="btn btn-danger">Xóa</button></th>
                <script>
                    function confirmRedirectToAdminComments() {
                        var result = confirm("Bạn có chắc chắn muốn xóa?");
                        if (result) {
                            redirectToAdminComments();
                        }
                    }
                    function redirectToAdminComments() {
                        // Đoạn mã xử lý chuyển hướng đến trang AdminComments
                        window.location.href = 'AdminComments';
                    }
                </script>
            </tr>
            <?php $count = 1;
            foreach ($comments as $comment) :  ?>
                <tr onclick="toggleCheckboxSelection(this)">
                    <td><input type="checkbox" name="comment_ids[]" value="<?= $comment['id_comment'] ?>" onchange="toggleRowSelection(this)"></td>
                    <td class="id_comment"><?= $count ?></td>
                    <td><?= htmlspecialchars($comment['content']) ?></td>
                    <td><?= htmlspecialchars($comment['created_at_comment']) ?></td>
                    <td><?= htmlspecialchars($comment['title']) ?></td>
                    <td><?= htmlspecialchars($comment['name']) ?></td>
                    <td><?= htmlspecialchars($comment['like_count_comment']) ?></td>
                    <td><?= htmlspecialchars($comment['dislike_count_comment']) ?></td>
                    <td><?= htmlspecialchars($comment['video_id']) ?></td>
                    <td><?= htmlspecialchars($comment['user_id']) ?></td>
                    <td>
                        <a href="AdminComments?id=<?= $comment['id_comment'] ?>"><button class="btn btn-primary edit-comment-btn" data-bs-toggle="modal" data-bs-target="#update_model" data-id="<?= $comment['id_comment'] ?>"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href="AdminComments?id_user=<?= $comment['id_comment'] ?>"><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#view_model" data-id="<?= $comment['user_id'] ?>"><i class="fa-solid fa-eye"></i></button></a>
                    </td>
                    <script>
                        $(document).ready(function() {
                            var id = getUrlParameter('id_user');
                            if (id) {
                                $('#view_model').modal('show');
                            }
                        });
                        $('#view_model').on('hidden.bs.modal', function() {
                            window.location.href = 'AdminComments';
                        });
                    </script>
                    <?php if (isset($_GET['id_user'])) {
                        $id = $_GET['id_user'];
                        $info1 = $productModel->get_one_coments_video($id);
                    } ?>
                    <!-- model view -->
                    <div class="modal fade model_nav" id="view_model">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="loginModalLabel">Xem thông tin chi tiết</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body d-flex ">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-primary">Thông tin người bình luận </h5>
                                        </div>
                                        <div class="modal-body gap-4">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img class="img_info_comment rounded-circle" src="<?= $info1['img'] ?>" alt="anh">
                                                <div class="overflow-hidden">
                                                    <input type="text" readonly class="form-control input_info_name" value="Name : <?= $info1['username'] ?>">
                                                    <p class="form-control input_info_name">Email : <?= $info1['email'] ?></p>
                                                    <p class="form-control input_info_name">Địa Chỉ : <?= $info1['address'] ?></p>
                                                    <!-- <p class="form-control input_info_name">Số điện thoại : <?= $info1['phone_number'] ?></p> -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="">Thông tin video</h5>
                                        </div>

                                        <div class="modal-body gap-4">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <iframe src="<?= $info1['youtube_link'] ?>" frameborder="0"></iframe>
                                            </div>
                                            <p class="form-control input_info_name">Tiêu đề : <?= $info1['title'] ?></p>
                                            <p class="form-control input_info_name">Ngày tạo : <?= $info1['created_at'] ?></p>
                                            <p class="form-control input_info_name">Giới thiệu : <?= $info1['description'] ?></p>
                                            <p class="form-control input_info_name">Lượt thích : <?= $info1['like_count_comment'] ?></p>
                                            <p class="form-control input_info_name">Lượt không thích : <?= $info1['dislike_count_comment'] ?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    </tr>
<?php $count++;
            endforeach ?>

<style>
    .selected {
        background-color: #B4D4FF;
    }

    .selected:hover {
        background-color: #5FBDFF;
    }
</style>
<script>
    function toggleCheckboxSelection(row) {
        var checkbox = row.querySelector('input[type="checkbox"]');
        checkbox.checked = !checkbox.checked;
        toggleRowSelection(checkbox);
    }

    function toggleRowSelection(checkbox) {
        var row = checkbox.parentNode.parentNode;
        if (checkbox.checked) {
            row.classList.add("selected");
        } else {
            row.classList.remove("selected");
        }
        var checkedValues = getCheckedValues();
        console.log(checkedValues);
    }

    function getCheckedValues() {
        var checkboxes = document.querySelectorAll('input[name="comment_ids[]"]:checked');
        var checkedValues = Array.from(checkboxes).map(function(checkbox) {
            return checkbox.value;
        });
        if (checkboxes.checked) {
            document.getElementById('delete_btn').style.backgroundColor = "blue";
        }

        return checkedValues;
    }
    // Sử dụng hàm getCheckedValues để lấy giá trị của các checkbox đã được chọn
    function redirectToAdminComments() {
        var checkedValues = getCheckedValues();
        var url = 'AdminComments?id_delete=' + (checkedValues);
        window.location.href = url;
    }
</script>
<!-- Thêm các hàng dữ liệu khác tương tự cho các comments khác -->
</table>
<script>
    // Gọi hàm để hiển thị modal khi trang được tải
    $(document).ready(function() {
        var id = getUrlParameter('id');
        if (id) {
            $('#update_model').modal('show');
        }
    });

    $(document).ready(function() {
        $('#update_model').on('hidden.bs.modal', function() {
            window.location.href = 'AdminComments';
        });
    });
    // Hàm để lấy tham số từ URL
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
</script>
<!-- model add -->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $info = $productModel->get_one_coments_video($id);
}
?>
<div class="modal fade model_nav" id="update_model">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="loginModalLabel">Chỉnh sửa bình luận </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="AdminComments" method="get">
                    <div class="input-group mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25">STT</span>
                            <input required type="text" class="form-control" id="id_comment" value="<?= $info['id_comment'] ?>" name="id_comment">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text w-25">Nội dung</span>
                            <input required type="text" class="form-control" value="<?= htmlspecialchars($info['content']) ?>" id="content_comment" name="content">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text w-25">Ngày tạo</span>
                            <input required type="text" class="form-control" value="<?= htmlspecialchars($info['created_at']) ?>" name="date">

                        </div>


                        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>
                        <script>
                            document.getElementById("showCalendarBtn").addEventListener('click', function() {
                                var calendarEl = document.getElementById('calendar');
                                calendarEl.style.display = 'block';

                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                    initialView: 'dayGridMonth',
                                    selectable: true,
                                    select: function(info) {
                                        console.log('Selected date: ' + info.startStr);
                                        calendar.unselect();
                                    }
                                });

                                calendar.render();
                            });
                        </script>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25">Mã video</span>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="video_id">
                                <option selected><?= htmlspecialchars($info['video_id']) ?></option>
                                <?php foreach ($id_videos as $id) :  ?>
                                    <option value="<?= htmlspecialchars($id['id']) ?>"><?= htmlspecialchars($id['id']) ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25">Mã người bình luận</span>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="user_id">
                                <option selected><?= htmlspecialchars($info['user_id']) ?></option>
                                <?php foreach ($id_users as $id) :  ?>
                                    <option value="<?= htmlspecialchars($id['id']) ?>"><?= htmlspecialchars($id['id']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25">Lượt thích</span>
                            <input required type="text" class="form-control" value="<?= htmlspecialchars($info['like_count_comment']) ?>" name="like_count">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25">Lượt không thích</span>
                            <input required type="text" class="form-control" value="<?= htmlspecialchars($info['dislike_count_comment']) ?>" name="dislike_count">
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Lưu</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

</main>
</body>