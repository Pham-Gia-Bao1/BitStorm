<?php
include_once("../Model/UserProfileModel.php");
include_once("../Model/AccountModel.php");
include_once("../Model/PostModel.php");
$userprofile = new UserProfile();
$posts1 = new Post();
$nameAndImg = $userprofile->get_name_and_img_user();
$name = $nameAndImg[0] ?? '';
$img = $nameAndImg[1] ?? '';
$name_pass_email_user = $userprofile->get_name_pass_email_user();
$id_user = $userprofile->get_id();
$role_id = $userprofile->get_role_id();
$posts = $userprofile->get_post($id_user);
$bookings = $userprofile->get_bookings($id_user);
$pass = $name_pass_email_user[1] ?? '';
$email = $name_pass_email_user[2] ?? '';
$name = base64_decode($_COOKIE['User']);
$expert = $userprofile->get_info_expert($name);
$expert_id = $userprofile->get_id_expert();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['image_url'])) {
        $imageURL = $_POST['image_url'];
        $new_url_img = "http://localhost/BitStorm/root/Image/" . $imageURL;
        $userprofile->change_avatar($new_url_img);
        $nameAndImg = $userprofile->get_name_and_img_user();
        $name = $nameAndImg[0] ?? '';
        $img = $nameAndImg[1] ?? '';
    }
    header("Location: userprofile");
}
if(isset($_POST['role_id'])){
    $role_id_settting = $_POST['role_id'];
    if($role_id_settting === 3 || $role_id_settting == "3" || $role_id == 3 || $role_id == "3"){
        if (isset($_POST['username_setting'])) {
            $name = $_POST['username_setting'];
            $pass = $_POST['password_setting'];
            $email = $_POST['email_setting'];
                $gender = $_POST['gender_setting'];
                $age = $_POST['age_setting'];
                $address = $_POST['address_setting'];
                $phone_number = $_POST['phone_number_setting'];
                $experience = $_POST['experience_setting'];
                $profile_picture = $_POST['profile_picture_setting'];
                $count_rating = $_POST['count_rating_setting'];
                $certificate = $_POST['certificate_picture_setting'];
                $specialization = $_POST['specialization_setting'];
                $status = $_POST['status_setting'];
                $userprofile->updateUserInfo($name, $pass, $email);
                $result  = $userprofile->updateExpert($expert_id,$role_id, $name, $gender, $address, $email, $phone_number, $age, $experience, $profile_picture, $count_rating, $certificate, $specialization, $status);
            if ($result) {
                echo '<script>alert("Cập nhật thông tin thành công")</script>';
                $nameAndImg = $userprofile->get_name_and_img_user();
                $name = $nameAndImg[0] ?? '';
                $img = $nameAndImg[1] ?? '';
                $name = base64_decode($_COOKIE['User']);
                $expert = $userprofile->get_info_expert($name);
            }
            header("Location: userprofile");
        }
    } else{
        if (isset($_POST['username_setting'])) {
            $name = $_POST['username_setting'];
            $pass = $_POST['password_setting'];
            $email = $_POST['email_setting'];
            $result = $userprofile->updateUserInfo($name, $pass, $email);

            if ($result) {
                echo '<script>alert("Cập nhật thông tin thành công")</script>';
                $nameAndImg = $userprofile->get_name_and_img_user();
                $name = $nameAndImg[0] ?? '';
                $img = $nameAndImg[1] ?? '';
            }
        }
        header("Location: userprofile");
    }
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../View/UserProfile/UserProfileView.php");
