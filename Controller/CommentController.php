<?php
include_once("../Model/BlogDetailModel.php");
include_once("../Model/BlogModel.php");
include_once("../Model/AccountModel.php");
$account = new Account();
$blog = new Blog();
$blogDetail = new BlogDetail();
if ($_SERVER['REQUEST_METHOD'] === "GET" && isset($_SERVER['REQUEST_METHOD'])) {
    $check = $_GET['check'];
    $id = $_GET['id'];
    $user_id = $account->get_id();
    $content = $_GET['content'];

    if($check == 0 || $check == null){
        $blogDetail->add_comment_videos($user_id,$content,$id);
        header("Location: BlogDetail?id=$id");
    }else{
        $blogDetail->add_comment_podcast($user_id,$content,$id);
        header("Location: PodcastDetail?id=$id");
    }
}

