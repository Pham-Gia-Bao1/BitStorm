<?php include_once('../View/Admin/Layout/Meta.php'); ?>
<?php
include_once('../View/Admin/Layout/Style.php');
include_once("../root/CSS/Admin/SideBar.css.php");
include_once("../root/CSS/Admin/Homepage.css.php");


// include_once('../root/JS/Admin/Sidebar.js.php');
?>
<main>

    <div class="topbar">

        <div class="toggle" id="bar">
            <!-- <i class="fa-solid fa-bars icon_bar"></i> -->
        </div>

        <div class="search bg-danger rounded-circle">
            <div class="input-group rounded-circle">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <ion-icon name="search-outline"></ion-icon>
                    </span>
                </div>
            </div>
        </div>
        <div class="user">
            <!-- <h1>hello</h1> -->

            <?php
            // $cookie_name = "User";
            // if (isset($_COOKIE[$cookie_name])) {
            //     $account = new Account();
            //     $nameAndImg = $account->get_name_and_img_user();
            //     $name = $nameAndImg[0];
            //     $img = $nameAndImg[1];
            //     echo $img;
            ?>
                <a href="userprofile">

                    <h4><?php echo $name ?></h4>
                    <img class="avata1" src="<?php echo $img; ?>">
                </a>

           
        </div>


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
                <a href="AdminData">
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



        </ul>


    </div>
    </div>
</main>

<?php include_once('../View/Admin/Layout/Script.php'); ?>