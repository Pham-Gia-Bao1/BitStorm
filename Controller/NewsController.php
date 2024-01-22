<?php
require ("../Controller/Database/database.php");
include_once("../Model/AccountModel.php");
include_once("../Model/AdminNewsModel.php");
$newAdmin = new AdminNews();
$news=$newAdmin->selectNews();
if (isset($_POST['search'])) {
    $searchParm = $_POST['keyword'];
    if($searchParm == "" || $searchParm == null ){
        $news = null;
    }else{
        $news = $newAdmin->find_new($searchParm);
    }
}
include_once ("../View/News/NewsView.php");
