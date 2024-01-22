<?php
include("../View/Admin/Layout/SideBar.view.php");
include("../root/CSS/Admin/AdminExpert.css.php");
?>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

<body>
    <title>Admin expert</title>
    <div class="main" id="main">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="AdminExpert">Chuyên gia</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" tabindex="-1" href="AdminUser">Người dùng</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm-3 addUserBox">
                <button class="btn addUserBtn btn-primary m-3" type="submit" name="addUser">Thêm chuyên gia&nbsp;<i class="fa-solid fa-plus"></i></button>
                <?php include("../View/Admin/AdminUser/AddAdminExpert.php"); ?>
            </div>
        </div>
        <table class="table table-hover table-striped ">
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Tuổi</th>
                <th>Kinh nghiệm</th>
                <th>Avatar</th>
                <th>Đánh giá</th>
                <th>Chứng chỉ</th>
                <th>Vị trí</th>
                <th>Trạng thái</th>
                <th>Action</th>
            </tr>
            <?php foreach ($experts as $expert) : ?>
                <tr>
                    <td><?php echo $expert['id'] ?></td>
                    <td><?php echo $expert['full_name'] ?></td>
                    <td><?php echo $expert['gender'] ?></td>
                    <td><?php echo $expert['address'] ?></td>
                    <td><?php echo $expert['email'] ?></td>
                    <td><?php echo $expert['phone_number'] ?></td>
                    <td><?php echo $expert['age'] ?></td>
                    <td><?php echo $expert['experience'] ?></td>
                    <td class="userImgContainer"><img src="<?php echo $expert['profile_picture'] ?>" alt="image" class="expertImg"></td>
                    <td><?php echo $expert['count_rating'] ?></td>
                    <td class="Certificate"><img class="CertificateImg" src="<?php echo $expert['certificate'] ?>" alt="image"></td>
                    <td><?php echo $expert['specialization'] ?></td>
                    <td> <?php echo $expert['status'] ?> </td>
                    <th>
                        <button class="btn btn-primary edit-expert-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                    </th>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
<?php
include("../View/Admin/AdminUser/UpdateAdminExpert.php");
?>