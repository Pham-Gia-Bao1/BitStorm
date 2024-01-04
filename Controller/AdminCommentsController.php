<?php

include_once("../Model/BlogModel.php");
include("../Model/AdminCommentsModel.php");
include_once("../Model/UserProfileModel.php");
// include("../root/Notification/Notification.js.php");
$productModel = new AdminComment();
$comments = $productModel->get_all_comments();

$id_users = $productModel->get_id_users();
$id_videos = $productModel->get_id_videos();
// print_r($comments);
if (isset($_GET['id_comment'])) {
    $id_comment = htmlspecialchars($_GET['id_comment']);
    $content = htmlspecialchars($_GET['content']);
    $date = htmlspecialchars($_GET['date']);
    $video_id = htmlspecialchars($_GET['video_id']);
    $user_id = htmlspecialchars($_GET['user_id']);
    $like = htmlspecialchars($_GET['like_count']);
    $dislike = htmlspecialchars($_GET['dislike_count']);
    $result = $productModel->update_comments_video($id_comment, $content, $date, $video_id, $user_id, $like, $dislike);
    if ($result) {
        setcookie("success_message", "success", time() + 3600);
        header("Location: AdminComments");
    } else {
        setcookie("error_message", "error", time() + 3600);
        header("Location: AdminComments");
    }
}
if (isset($_GET['id_delete'])) {
    $id_delete = htmlspecialchars($_GET['id_delete']);
    $id_array = explode(",", $id_delete);
    if ($id_delete == null) {
        header("Location: AdminComments");
    }
    $result =  $productModel->delete_comment($id_array);
    if ($result) {

        header("Location: AdminComments");
    }
}
if (isset($_GET['id_coment'])) {
    $id_user = htmlspecialchars($_GET["id_coment"]);
    echo $id_user;
}

include("../View/Admin/AdminComment/AdminComments.php");
