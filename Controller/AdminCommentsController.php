<?php

include_once("../Model/BlogModel.php");
include("../Model/AdminCommentsModel.php");
include_once("../Model/UserProfileModel.php");
$productModel = new AdminComment();
$comments = $productModel->get_all_comments();
// print_r($comments);
if (isset($_GET['id_comment'])) {
    $id_comment = $_GET['id_comment'];
    $content = $_GET['content'];
    $date = $_GET['date'];
    $video_id = $_GET['video_id'];
    $user_id = $_GET['user_id'];
    $like = $_GET['like_count'];
    $dislike = $_GET['dislike_count'];
    $result = $productModel->update_comments_video($id_comment, $content, $date, $video_id, $user_id, $like, $dislike);
    if ($result) {
        echo '<script>alert("Cập nhật thành công");</script>';
    } else {
        echo '<script>alert("Cập nhật thất bại");</script>';
    }
    header("Location: AdminComments");
    exit();
}
if (isset($_GET['id_delete'])) {
    $id_delete = $_GET['id_delete'];
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
    $id_user = $_GET["id_coment"];
    echo $id_user;
}

include("../View/Admin/AdminComment/AdminComments.php");
