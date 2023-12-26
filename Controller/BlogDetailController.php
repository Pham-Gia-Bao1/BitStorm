<?php
include_once("../Model/BlogDetailModel.php");
include_once("../Model/BlogModel.php");
include_once("../Model/AccountModel.php");

if($_SERVER['REQUEST_METHOD'] === "GET" && isset($_SERVER['REQUEST_METHOD'])){
    $account=new Account();
    $blog = new Blog();
    $id = $_GET["id"];
    $validateId = $account->test_input($id);
    $blogDetail = new BlogDetail();
    $video = $blogDetail->get_one_video($validateId);
    // print_r($video[0]);
    $videos = $blog->getProducts();
    print_r($videos[0]);
}

include("../View/Blog/BlogDetailView.php");
