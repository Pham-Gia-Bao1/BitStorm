<?php
include_once("../Model/BlogDetailModel.php");
include_once("../Model/BlogModel.php");
include_once("../Model/AccountModel.php");

if($_SERVER['REQUEST_METHOD'] === "GET" && isset($_SERVER['REQUEST_METHOD'])){
    $account=new Account();
    $blog = new Blog();
    $blogDetail = new BlogDetail();
    $id = $_GET["id"];
    $validateId = $account->test_input($id);
    $blogDetail = new BlogDetail();
    $video = $blogDetail->get_one_video($validateId);
    $videos = $blog->getProducts();
    $data['products'] = $blog->getProducts();
    $check = false;
    $comments = $blogDetail->get_comment_for_user($id);
}

include("../View/Blog/BlogDetailView.php");
