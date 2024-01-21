<?php include_once('../View/Admin/Layout/Meta.php'); ?>
<?php
include_once('../View/Admin/Layout/Style.php');
include_once("../root/CSS/Admin/SideBar.css.php");
include_once("../root/CSS/Admin/Homepage.css.php");
?>
<main>
    <div class="topbar d-lex justify-content-between align-items-center">
    </div>
    <div class="navigation">
        <ul class="list-item">
            <li>
                <a href="#">
                    <img src="./root/Image/logo_header.png" alt="">
                    <span class="group-name-admin">BitStorm</span>
                </a>
            </li>
            <li>
                <a href="AdminHomePage">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Tổng Quan</span>
                </a>
            </li>
            <li>
                <a href="AdminPost">
                    <span class="icon">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="title">Bài Đăng</span>
                </a>
            </li>
            <li>
                <a href="AdminComments">
                    <span class="icon">
                        <ion-icon name="chatbox-outline"></ion-icon>
                    </span>
                    <span class="title">Bình luận</span>
                </a>
            </li>
            <li>
                <a href="AdminNews">
                    <span class="icon">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </span>
                    <span class="title">Dữ liệu</span>
                </a>
            </li>
            <li>
                <a href="AdminUser">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Người dùng</span>
                </a>
            </li>
            <li>
                <a href="Adminbooking">
                    <span class="icon">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="title">Lịch Đặt</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="confirmLogout()">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Đăng xuất</span>
                </a>
            </li>
            <script>
                function confirmLogout() {
                    if (confirm("Bạn có chắc chắn muốn đăng xuất không?")) {
                        window.location.href = "Logout";
                    }
                }
            </script>
            <li>
                <div class="topbar-item">
                    <?php
                    include_once("../Model/AccountModel.php");
                    $account = new Account();
                    $cookie_name = "User";
                    if (isset($_COOKIE[$cookie_name])) {
                        $nameAndImg = $account->get_name_and_img_user();
                        $name = $nameAndImg[0];
                        $img = $nameAndImg[1];
                    }  ?>
                    <a href="userprofile">
                        <img class="avata1 rounded-circle" src="<?php echo $img; ?>" alt="User Image">
                    </a>
                </div>
            </li>
        </ul>
    </div>
    </div>
</main>
<?php include_once('../View/Admin/Layout/Script.php'); ?>