<?php
include("../View/Admin/Layout/SideBar.view.php");
include("../root/CSS/Admin/AdminUser.css.php");
include("../View/Admin/AdminUser/UpdateAdminUser.php");
include("../View/Admin/AdminUser/AddAdminUser.php");
?>

<body>
    <title>Admin user</title>
    <div class="main" id="main">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="AdminUser">Người dùng</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="AdminExpert" tabindex="-1">Chuyên gia</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm-3 addUserBox">
                <button class="btn btn-primary m-3" type="submit" name="addUser">Thêm người dùng&nbsp;<i class="fa-solid fa-plus"></i></button>
            </div>
        </div>

        <table class="table table-hover table-striped ">
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Password</th>
                <th>Số điện thoại</th>
                <th>Ngày tạo</th>
                <th>Avatar</th>
                <th>Trạng thái</th>
                <th>Action</th>
            </tr>
            <?php foreach ($clients as $client) : ?>
                <tr>
                    <td><?php echo $client['id'] ?></td>
                    <td><?php echo $client['name'] ?></td>
                    <td><?php echo $client['email'] ?></td>
                    <td><?php echo $client['password'] ?></td>
                    <td><?php echo $client['phone_number'] ?></td>
                    <td><?php echo $client['created_at'] ?></td>
                    <td class="userImgContainer"><img src="<?php echo $client['img'] ?>" alt="image" class="userImg"></td>
                    <td>
                        <?php if ($client['status'] == 1) {
                            echo "Hoạt động";
                        } elseif ($client['status'] == 0) {
                            echo "Ngưng hoạt động";
                        }
                        ?>
                    </td>
                    <th>
                        <button class="btn btn-primary edit-user-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                    </th>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
<?php
?>