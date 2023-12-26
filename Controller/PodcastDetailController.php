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
    $video = $blogDetail->get_one_podcast($validateId);

    $data['products']  = $blog->getPodcast();
    $check = true;
    
}
include("../View/Blog/BlogDetailView.php");
