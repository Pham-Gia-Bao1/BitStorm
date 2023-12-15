<?php
include_once("../Model/UserProfileModel.php");
$userprofile = new UserProfile();
$nameAndImg = $userprofile->get_name_and_img_user();
$name = $nameAndImg[0] ?? '';
$img = $nameAndImg[1] ?? '';
$name_pass_email_user = $userprofile->get_name_pass_email_user();
$pass = $name_pass_email_user[1] ?? '';
$email = $name_pass_email_user[2] ?? '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['image_url'])) {
        $imageURL = $_POST['image_url'];
        $new_url_img = "http://localhost/WEB_PHP/root/Image/" . $imageURL;
        $userprofile->change_avatar($new_url_img);
        $nameAndImg = $userprofile->get_name_and_img_user();
        $name = $nameAndImg[0] ?? '';
        $img = $nameAndImg[1] ?? '';
    }
    header("Location: userprofile");
}
if (isset($_POST['username_setting'])) {
    $name = $_POST['username_setting'];
    $pass = $_POST['password_setting'];
    $email = $_POST['email_setting'];
    $result = $userprofile->updateUserInfo($name, $pass, $email);
    if($result){
         echo '<script>alert("Cập nhật thông tin thành công")</script>';
         $nameAndImg = $userprofile->get_name_and_img_user();
            $name = $nameAndImg[0] ?? '';
            $img = $nameAndImg[1] ?? '';
    }
    header("Location: userprofile");
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../View/UserProfile/UserProfileView.php");
