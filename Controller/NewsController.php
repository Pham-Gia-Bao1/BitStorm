<?php
require ("../Controller/Database/database.php");
include_once("../Model/AccountModel.php");
include_once("../Model/AdminNewsModel.php");
$newAdmin = new AdminNews();
$news1=$newAdmin->selectNews();

if (isset($_GET['search'])) {
    $searchParm = $_GET['search'];
    if($searchParm == "" || $searchParm == null ){
        $news = null;
    }else{
        $news = $newAdmin->find_new($searchParm);
    }
    
}
include_once ("../View/News/NewsView.php");
