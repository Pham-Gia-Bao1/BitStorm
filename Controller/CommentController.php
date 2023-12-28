<?php
include_once("../Model/BlogDetailModel.php");
include_once("../Model/BlogModel.php");
include_once("../Model/AccountModel.php");
if ($_SERVER['REQUEST_METHOD'] === "GET" && isset($_SERVER['REQUEST_METHOD'])) {

    $account = new Account();
    $blog = new Blog();
    $blogDetail = new BlogDetail();
    $id = $_GET['id'];
    echo $id;
    $user_id = $account->get_id();
    echo $user_id;
    $content = $_GET['content'];
    echo $content;
    $blogDetail->add_comment_videos($user_id,$content,$id);
    header("Location: BlogDetail?id=$id");
}

?>