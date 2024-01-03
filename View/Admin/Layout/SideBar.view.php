<?php include_once(__DIR__.'/Meta.php'); ?>
<?php
include_once(__DIR__.'/Style.php');
include_once("../root/CSS/Admin/SideBar.css.php");
?>
<div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <img src="./root/Image/logo_header.png" alt="">
                        <span class="group-name-admin">BitStorm</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Tổng Quan</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">Dữ liệu</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Người dùng</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Đăng xuất</span>
                    </a>
                </li>
            </ul>
        </div>
<?php include_once(__DIR__.'/Script.php'); ?>
<?php
include ("../root/JS/Admin/SideBar.js.php")
?>